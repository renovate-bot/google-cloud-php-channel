<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/repricing.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the override to conditionally apply.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ConditionalOverride</code>
 */
class ConditionalOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Information about the applied override's adjustment.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RepricingAdjustment adjustment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $adjustment = null;
    /**
     * Required. The [RebillingBasis][google.cloud.channel.v1.RebillingBasis] to
     * use for the applied override. Shows the relative cost based on your
     * repricing costs.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RebillingBasis rebilling_basis = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $rebilling_basis = 0;
    /**
     * Required. Specifies the condition which, if met, will apply the override.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RepricingCondition repricing_condition = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $repricing_condition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\RepricingAdjustment $adjustment
     *           Required. Information about the applied override's adjustment.
     *     @type int $rebilling_basis
     *           Required. The [RebillingBasis][google.cloud.channel.v1.RebillingBasis] to
     *           use for the applied override. Shows the relative cost based on your
     *           repricing costs.
     *     @type \Google\Cloud\Channel\V1\RepricingCondition $repricing_condition
     *           Required. Specifies the condition which, if met, will apply the override.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Repricing::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Information about the applied override's adjustment.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RepricingAdjustment adjustment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Channel\V1\RepricingAdjustment|null
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    public function hasAdjustment()
    {
        return isset($this->adjustment);
    }

    public function clearAdjustment()
    {
        unset($this->adjustment);
    }

    /**
     * Required. Information about the applied override's adjustment.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RepricingAdjustment adjustment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\RepricingAdjustment $var
     * @return $this
     */
    public function setAdjustment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\RepricingAdjustment::class);
        $this->adjustment = $var;

        return $this;
    }

    /**
     * Required. The [RebillingBasis][google.cloud.channel.v1.RebillingBasis] to
     * use for the applied override. Shows the relative cost based on your
     * repricing costs.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RebillingBasis rebilling_basis = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getRebillingBasis()
    {
        return $this->rebilling_basis;
    }

    /**
     * Required. The [RebillingBasis][google.cloud.channel.v1.RebillingBasis] to
     * use for the applied override. Shows the relative cost based on your
     * repricing costs.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RebillingBasis rebilling_basis = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setRebillingBasis($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\RebillingBasis::class);
        $this->rebilling_basis = $var;

        return $this;
    }

    /**
     * Required. Specifies the condition which, if met, will apply the override.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RepricingCondition repricing_condition = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Channel\V1\RepricingCondition|null
     */
    public function getRepricingCondition()
    {
        return $this->repricing_condition;
    }

    public function hasRepricingCondition()
    {
        return isset($this->repricing_condition);
    }

    public function clearRepricingCondition()
    {
        unset($this->repricing_condition);
    }

    /**
     * Required. Specifies the condition which, if met, will apply the override.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.RepricingCondition repricing_condition = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\RepricingCondition $var
     * @return $this
     */
    public function setRepricingCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\RepricingCondition::class);
        $this->repricing_condition = $var;

        return $this;
    }

}

