<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request Message for RegisterSubscriber.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.RegisterSubscriberRequest</code>
 */
class RegisterSubscriberRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the account.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $account = '';
    /**
     * Required. Service account that provides subscriber access to the registered
     * topic.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account
     *           Required. Resource name of the account.
     *     @type string $service_account
     *           Required. Service account that provides subscriber access to the registered
     *           topic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the account.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Required. Resource name of the account.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

    /**
     * Required. Service account that provides subscriber access to the registered
     * topic.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Required. Service account that provides subscriber access to the registered
     * topic.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

}

