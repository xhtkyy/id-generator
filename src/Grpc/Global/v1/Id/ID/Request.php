<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: global/v1/id.proto

namespace Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>global.v1.ID.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * ID 所属的名字空间，用于识别同一域下不同业务的标识
     * 例如：用户标识、订单标识、商品标识等属于不同的名字空间
     * 例如：www.example.com，www.example.com.user, order, product, etc.
     *
     * Generated from protobuf field <code>string namespace = 1 [(.validate.rules) = {</code>
     */
    protected $namespace = '';
    /**
     * 客户端所属的域，用于指定归属的空间（特定的应用程序或客户），主应用可不提供，
     * 但是子应用必须提供，否则会被认为是主应用的请求，domain 的形式类似于网络域名
     * 与 namespace 稍有不同，必须带有一个点以上的域名
     * 例如：www.example.com, www.example.com.user, etc.
     * www 这样的单词不允许
     *
     * Generated from protobuf field <code>string domain = 2 [(.validate.rules) = {</code>
     */
    protected $domain = '';
    /**
     * 编码格式
     *
     * Generated from protobuf field <code>.global.v1.ID.Format format = 3;</code>
     */
    protected $format = 0;
    /**
     * 标识类型，默认为随机标识，注意顺序消息也是随机的，在一定时间范围内总体保持趋势递增
     *
     * Generated from protobuf field <code>.global.v1.ID.Type type = 4;</code>
     */
    protected $type = 0;
    /**
     * 一次请求的数量，批量请求时有效
     *
     * Generated from protobuf field <code>int32 count = 5;</code>
     */
    protected $count = 0;
    /**
     * 额外的数据，直接返回，不提供不返回
     *
     * Generated from protobuf field <code>int64 extra = 6;</code>
     */
    protected $extra = 0;
    /**
     * Generated from protobuf field <code>.global.v1.ID.Secret secret = 7;</code>
     */
    protected $secret = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           ID 所属的名字空间，用于识别同一域下不同业务的标识
     *           例如：用户标识、订单标识、商品标识等属于不同的名字空间
     *           例如：www.example.com，www.example.com.user, order, product, etc.
     *     @type string $domain
     *           客户端所属的域，用于指定归属的空间（特定的应用程序或客户），主应用可不提供，
     *           但是子应用必须提供，否则会被认为是主应用的请求，domain 的形式类似于网络域名
     *           与 namespace 稍有不同，必须带有一个点以上的域名
     *           例如：www.example.com, www.example.com.user, etc.
     *           www 这样的单词不允许
     *     @type int $format
     *           编码格式
     *     @type int $type
     *           标识类型，默认为随机标识，注意顺序消息也是随机的，在一定时间范围内总体保持趋势递增
     *     @type int $count
     *           一次请求的数量，批量请求时有效
     *     @type int|string $extra
     *           额外的数据，直接返回，不提供不返回
     *     @type \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Secret $secret
     * }
     */
    public function __construct($data = NULL) {
        \Xhtkyy\IdGenerator\Grpc\GPBMetadata\v1\Id::initOnce();
        parent::__construct($data);
    }

    /**
     * ID 所属的名字空间，用于识别同一域下不同业务的标识
     * 例如：用户标识、订单标识、商品标识等属于不同的名字空间
     * 例如：www.example.com，www.example.com.user, order, product, etc.
     *
     * Generated from protobuf field <code>string namespace = 1 [(.validate.rules) = {</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * ID 所属的名字空间，用于识别同一域下不同业务的标识
     * 例如：用户标识、订单标识、商品标识等属于不同的名字空间
     * 例如：www.example.com，www.example.com.user, order, product, etc.
     *
     * Generated from protobuf field <code>string namespace = 1 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * 客户端所属的域，用于指定归属的空间（特定的应用程序或客户），主应用可不提供，
     * 但是子应用必须提供，否则会被认为是主应用的请求，domain 的形式类似于网络域名
     * 与 namespace 稍有不同，必须带有一个点以上的域名
     * 例如：www.example.com, www.example.com.user, etc.
     * www 这样的单词不允许
     *
     * Generated from protobuf field <code>string domain = 2 [(.validate.rules) = {</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * 客户端所属的域，用于指定归属的空间（特定的应用程序或客户），主应用可不提供，
     * 但是子应用必须提供，否则会被认为是主应用的请求，domain 的形式类似于网络域名
     * 与 namespace 稍有不同，必须带有一个点以上的域名
     * 例如：www.example.com, www.example.com.user, etc.
     * www 这样的单词不允许
     *
     * Generated from protobuf field <code>string domain = 2 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * 编码格式
     *
     * Generated from protobuf field <code>.global.v1.ID.Format format = 3;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * 编码格式
     *
     * Generated from protobuf field <code>.global.v1.ID.Format format = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Format::class);
        $this->format = $var;

        return $this;
    }

    /**
     * 标识类型，默认为随机标识，注意顺序消息也是随机的，在一定时间范围内总体保持趋势递增
     *
     * Generated from protobuf field <code>.global.v1.ID.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 标识类型，默认为随机标识，注意顺序消息也是随机的，在一定时间范围内总体保持趋势递增
     *
     * Generated from protobuf field <code>.global.v1.ID.Type type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * 一次请求的数量，批量请求时有效
     *
     * Generated from protobuf field <code>int32 count = 5;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 一次请求的数量，批量请求时有效
     *
     * Generated from protobuf field <code>int32 count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * 额外的数据，直接返回，不提供不返回
     *
     * Generated from protobuf field <code>int64 extra = 6;</code>
     * @return int|string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * 额外的数据，直接返回，不提供不返回
     *
     * Generated from protobuf field <code>int64 extra = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExtra($var)
    {
        GPBUtil::checkInt64($var);
        $this->extra = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.global.v1.ID.Secret secret = 7;</code>
     * @return \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Secret|null
     */
    public function getSecret()
    {
        return $this->secret;
    }

    public function hasSecret()
    {
        return isset($this->secret);
    }

    public function clearSecret()
    {
        unset($this->secret);
    }

    /**
     * Generated from protobuf field <code>.global.v1.ID.Secret secret = 7;</code>
     * @param \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Secret $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkMessage($var, \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID\Secret::class);
        $this->secret = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Request::class, \Xhtkyy\IdGenerator\Grpc\Global\v1\Id\ID_Request::class);
