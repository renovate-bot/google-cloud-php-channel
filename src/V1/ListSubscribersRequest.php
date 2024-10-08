<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request Message for ListSubscribers.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListSubscribersRequest</code>
 */
class ListSubscribersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the account.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $account = '';
    /**
     * Optional. The maximum number of service accounts to return. The service may
     * return fewer than this value. If unspecified, returns at most 100 service
     * accounts. The maximum value is 1000; the server will coerce values above
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListSubscribers` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListSubscribers` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account
     *           Required. Resource name of the account.
     *     @type int $page_size
     *           Optional. The maximum number of service accounts to return. The service may
     *           return fewer than this value. If unspecified, returns at most 100 service
     *           accounts. The maximum value is 1000; the server will coerce values above
     *           1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListSubscribers` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListSubscribers` must
     *           match the call that provided the page token.
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
     * Optional. The maximum number of service accounts to return. The service may
     * return fewer than this value. If unspecified, returns at most 100 service
     * accounts. The maximum value is 1000; the server will coerce values above
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of service accounts to return. The service may
     * return fewer than this value. If unspecified, returns at most 100 service
     * accounts. The maximum value is 1000; the server will coerce values above
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous `ListSubscribers` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListSubscribers` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListSubscribers` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListSubscribers` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

