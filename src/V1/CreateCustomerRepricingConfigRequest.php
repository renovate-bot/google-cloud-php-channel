<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CloudChannelService.CreateCustomerRepricingConfig][google.cloud.channel.v1.CloudChannelService.CreateCustomerRepricingConfig].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.CreateCustomerRepricingConfigRequest</code>
 */
class CreateCustomerRepricingConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the customer that will receive this
     * repricing config. Parent uses the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The CustomerRepricingConfig object to update.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CustomerRepricingConfig customer_repricing_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_repricing_config = null;

    /**
     * @param string                                           $parent                  Required. The resource name of the customer that will receive this
     *                                                                                  repricing config. Parent uses the format:
     *                                                                                  accounts/{account_id}/customers/{customer_id}
     *                                                                                  Please see {@see CloudChannelServiceClient::customerName()} for help formatting this field.
     * @param \Google\Cloud\Channel\V1\CustomerRepricingConfig $customerRepricingConfig Required. The CustomerRepricingConfig object to update.
     *
     * @return \Google\Cloud\Channel\V1\CreateCustomerRepricingConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Channel\V1\CustomerRepricingConfig $customerRepricingConfig): self
    {
        return (new self())
            ->setParent($parent)
            ->setCustomerRepricingConfig($customerRepricingConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the customer that will receive this
     *           repricing config. Parent uses the format:
     *           accounts/{account_id}/customers/{customer_id}
     *     @type \Google\Cloud\Channel\V1\CustomerRepricingConfig $customer_repricing_config
     *           Required. The CustomerRepricingConfig object to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the customer that will receive this
     * repricing config. Parent uses the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the customer that will receive this
     * repricing config. Parent uses the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The CustomerRepricingConfig object to update.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CustomerRepricingConfig customer_repricing_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Channel\V1\CustomerRepricingConfig|null
     */
    public function getCustomerRepricingConfig()
    {
        return $this->customer_repricing_config;
    }

    public function hasCustomerRepricingConfig()
    {
        return isset($this->customer_repricing_config);
    }

    public function clearCustomerRepricingConfig()
    {
        unset($this->customer_repricing_config);
    }

    /**
     * Required. The CustomerRepricingConfig object to update.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CustomerRepricingConfig customer_repricing_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\CustomerRepricingConfig $var
     * @return $this
     */
    public function setCustomerRepricingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\CustomerRepricingConfig::class);
        $this->customer_repricing_config = $var;

        return $this;
    }

}

