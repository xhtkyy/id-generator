<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\IdGenerator;

use Hyperf\Grpc\StatusCode;
use Hyperf\GrpcServer\Exception\GrpcException;
use Xhtkyy\IdGenerator\Grpc\BuilderClient;
use Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID;

class IdGenerator implements IdGeneratorInterface
{

    private \Swoole\Atomic $atomic;
    private array $idPool = [];

    private bool $wait = false;

    public function __construct(
        protected BuilderClient $builderClient
    )
    {
        $this->atomic = new \Swoole\Atomic();
    }

    public function generate($namespace = 'normal', $format = ID\Format::RAW)
    {
        $index = $this->atomic->add() % 100;
        if ($this->wait) {
            usleep(500);
        }
        if (empty($this->idPool[$namespace][$format])) {
            $this->wait = true;
            [$reply, $status] = $this->builderClient->NextID(
                (new ID\Request())
                    ->setDomain('main')
                    ->setNamespace($namespace)
                    ->setCount(100)
                    ->setFormat($format)
            );
            if ($status != StatusCode::OK) {
                $this->wait = false;
                throw new GrpcException("wid generate fail!");
            }
            $temp = [];
            /**
             * @var ID\Response $reply
             * @var ID $item
             */
            foreach ($reply->getPayload() as $item) {
                $temp[] = $item->getData()[0];
            }
            $this->idPool[$namespace][$format] = $temp;
            $this->wait = false;
        }
        $id = $this->idPool[$namespace][$format][$index];
        unset($this->idPool[$namespace][$format][$index]);
        return $id;
    }
}