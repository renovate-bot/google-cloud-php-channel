<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/repricing.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An adjustment that applies a flat markup or markdown to an entire bill.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.PercentageAdjustment</code>
 */
class PercentageAdjustment extends \Google\Protobuf\Internal\Message
{
    /**
     * The percentage of the bill to adjust.
     * For example:
     * Mark down by 1% => "-1.00"
     * Mark up by 1%   => "1.00"
     * Pass-Through    => "0.00"
     *
     * Generated from protobuf field <code>.google.type.Decimal percentage = 2;</code>
     */
    protected $percentage = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Decimal $percentage
     *           The percentage of the bill to adjust.
     *           For example:
     *           Mark down by 1% => "-1.00"
     *           Mark up by 1%   => "1.00"
     *           Pass-Through    => "0.00"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Repricing::initOnce();
        parent::__construct($data);
    }

    /**
     * The percentage of the bill to adjust.
     * For example:
     * Mark down by 1% => "-1.00"
     * Mark up by 1%   => "1.00"
     * Pass-Through    => "0.00"
     *
     * Generated from protobuf field <code>.google.type.Decimal percentage = 2;</code>
     * @return \Google\Type\Decimal|null
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    public function hasPercentage()
    {
        return isset($this->percentage);
    }

    public function clearPercentage()
    {
        unset($this->percentage);
    }

    /**
     * The percentage of the bill to adjust.
     * For example:
     * Mark down by 1% => "-1.00"
     * Mark up by 1%   => "1.00"
     * Pass-Through    => "0.00"
     *
     * Generated from protobuf field <code>.google.type.Decimal percentage = 2;</code>
     * @param \Google\Type\Decimal $var
     * @return $this
     */
    public function setPercentage($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Decimal::class);
        $this->percentage = $var;

        return $this;
    }

}

