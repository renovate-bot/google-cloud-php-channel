<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [CloudChannelService.ListTransferableSkus][google.cloud.channel.v1.CloudChannelService.ListTransferableSkus].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListTransferableSkusResponse</code>
 */
class ListTransferableSkusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Information about existing SKUs for a customer that needs a transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.TransferableSku transferable_skus = 1;</code>
     */
    private $transferable_skus;
    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListTransferableSkusRequest.page_token][google.cloud.channel.v1.ListTransferableSkusRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Channel\V1\TransferableSku>|\Google\Protobuf\Internal\RepeatedField $transferable_skus
     *           Information about existing SKUs for a customer that needs a transfer.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to
     *           [ListTransferableSkusRequest.page_token][google.cloud.channel.v1.ListTransferableSkusRequest.page_token]
     *           to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Information about existing SKUs for a customer that needs a transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.TransferableSku transferable_skus = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransferableSkus()
    {
        return $this->transferable_skus;
    }

    /**
     * Information about existing SKUs for a customer that needs a transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.TransferableSku transferable_skus = 1;</code>
     * @param array<\Google\Cloud\Channel\V1\TransferableSku>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransferableSkus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\TransferableSku::class);
        $this->transferable_skus = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListTransferableSkusRequest.page_token][google.cloud.channel.v1.ListTransferableSkusRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListTransferableSkusRequest.page_token][google.cloud.channel.v1.ListTransferableSkusRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

