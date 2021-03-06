<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/shield_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.ShieldedTransferContract</code>
 */
class ShieldedTransferContract extends \Google\Protobuf\Internal\Message
{
    /**
     * transparent address
     *
     * Generated from protobuf field <code>bytes transparent_from_address = 1;</code>
     */
    protected $transparent_from_address = '';
    /**
     * Generated from protobuf field <code>int64 from_amount = 2;</code>
     */
    protected $from_amount = 0;
    /**
     * Generated from protobuf field <code>repeated .protocol.SpendDescription spend_description = 3;</code>
     */
    private $spend_description;
    /**
     * Generated from protobuf field <code>repeated .protocol.ReceiveDescription receive_description = 4;</code>
     */
    private $receive_description;
    /**
     * Generated from protobuf field <code>bytes binding_signature = 5;</code>
     */
    protected $binding_signature = '';
    /**
     * transparent address
     *
     * Generated from protobuf field <code>bytes transparent_to_address = 6;</code>
     */
    protected $transparent_to_address = '';
    /**
     * the amount to transparent to_address
     *
     * Generated from protobuf field <code>int64 to_amount = 7;</code>
     */
    protected $to_amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transparent_from_address
     *           transparent address
     *     @type int|string $from_amount
     *     @type \Protocol\SpendDescription[]|\Google\Protobuf\Internal\RepeatedField $spend_description
     *     @type \Protocol\ReceiveDescription[]|\Google\Protobuf\Internal\RepeatedField $receive_description
     *     @type string $binding_signature
     *     @type string $transparent_to_address
     *           transparent address
     *     @type int|string $to_amount
     *           the amount to transparent to_address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Contract\ShieldContract::initOnce();
        parent::__construct($data);
    }

    /**
     * transparent address
     *
     * Generated from protobuf field <code>bytes transparent_from_address = 1;</code>
     * @return string
     */
    public function getTransparentFromAddress()
    {
        return $this->transparent_from_address;
    }

    /**
     * transparent address
     *
     * Generated from protobuf field <code>bytes transparent_from_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransparentFromAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->transparent_from_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 from_amount = 2;</code>
     * @return int|string
     */
    public function getFromAmount()
    {
        return $this->from_amount;
    }

    /**
     * Generated from protobuf field <code>int64 from_amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFromAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->from_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.SpendDescription spend_description = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpendDescription()
    {
        return $this->spend_description;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.SpendDescription spend_description = 3;</code>
     * @param \Protocol\SpendDescription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpendDescription($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\SpendDescription::class);
        $this->spend_description = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.ReceiveDescription receive_description = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceiveDescription()
    {
        return $this->receive_description;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.ReceiveDescription receive_description = 4;</code>
     * @param \Protocol\ReceiveDescription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceiveDescription($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\ReceiveDescription::class);
        $this->receive_description = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes binding_signature = 5;</code>
     * @return string
     */
    public function getBindingSignature()
    {
        return $this->binding_signature;
    }

    /**
     * Generated from protobuf field <code>bytes binding_signature = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBindingSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->binding_signature = $var;

        return $this;
    }

    /**
     * transparent address
     *
     * Generated from protobuf field <code>bytes transparent_to_address = 6;</code>
     * @return string
     */
    public function getTransparentToAddress()
    {
        return $this->transparent_to_address;
    }

    /**
     * transparent address
     *
     * Generated from protobuf field <code>bytes transparent_to_address = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTransparentToAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->transparent_to_address = $var;

        return $this;
    }

    /**
     * the amount to transparent to_address
     *
     * Generated from protobuf field <code>int64 to_amount = 7;</code>
     * @return int|string
     */
    public function getToAmount()
    {
        return $this->to_amount;
    }

    /**
     * the amount to transparent to_address
     *
     * Generated from protobuf field <code>int64 to_amount = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setToAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->to_amount = $var;

        return $this;
    }

}

