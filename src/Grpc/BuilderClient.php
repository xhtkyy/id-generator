<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Xhtkyy\IdGenerator\Grpc;


use Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient;

/**
 * 标识符服务
 */
class BuilderClient extends BaseGrpcClient {

    /**
     * 获取标识，支持批量获取，基于时序的标识服务（采用雪花算法）
     * @param \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function NextID(\Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/global.v1.Builder/NextID',
        $argument,
        ['\Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Response', 'decode'],
        $metadata, $options);
    }

}
