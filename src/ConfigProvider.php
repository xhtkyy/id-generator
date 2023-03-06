<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Xhtkyy\IdGenerator;

class ConfigProvider {
    public function __invoke(): array {
        return [
            'dependencies' => [
                IdGeneratorInterface::class => IdGenerator::class
            ],
            'commands'     => [
            ],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'listeners'    => [
            ],
            'publish'      => [
//                [
//                    'id'          => 'config',
//                    'description' => 'the config for kyy_tools',
//                    'source'      => __DIR__ . '/../publish/kyy_tools.php',
//                    'destination' => BASE_PATH . '/config/autoload/kyy_tools.php',
//                ],
            ]
        ];
    }
}
