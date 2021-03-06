<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.InternalTransaction</code>
 */
class InternalTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * internalTransaction identity, the root InternalTransaction hash
     * should equals to root transaction id.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     */
    protected $hash = '';
    /**
     * the one send trx (TBD: or token) via function
     *
     * Generated from protobuf field <code>bytes caller_address = 2;</code>
     */
    protected $caller_address = '';
    /**
     * the one recieve trx (TBD: or token) via function
     *
     * Generated from protobuf field <code>bytes transferTo_address = 3;</code>
     */
    protected $transferTo_address = '';
    /**
     * Generated from protobuf field <code>repeated .protocol.InternalTransaction.CallValueInfo callValueInfo = 4;</code>
     */
    private $callValueInfo;
    /**
     * Generated from protobuf field <code>bytes note = 5;</code>
     */
    protected $note = '';
    /**
     * Generated from protobuf field <code>bool rejected = 6;</code>
     */
    protected $rejected = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           internalTransaction identity, the root InternalTransaction hash
     *           should equals to root transaction id.
     *     @type string $caller_address
     *           the one send trx (TBD: or token) via function
     *     @type string $transferTo_address
     *           the one recieve trx (TBD: or token) via function
     *     @type \Protocol\InternalTransaction\CallValueInfo[]|\Google\Protobuf\Internal\RepeatedField $callValueInfo
     *     @type string $note
     *     @type bool $rejected
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * internalTransaction identity, the root InternalTransaction hash
     * should equals to root transaction id.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * internalTransaction identity, the root InternalTransaction hash
     * should equals to root transaction id.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * the one send trx (TBD: or token) via function
     *
     * Generated from protobuf field <code>bytes caller_address = 2;</code>
     * @return string
     */
    public function getCallerAddress()
    {
        return $this->caller_address;
    }

    /**
     * the one send trx (TBD: or token) via function
     *
     * Generated from protobuf field <code>bytes caller_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->caller_address = $var;

        return $this;
    }

    /**
     * the one recieve trx (TBD: or token) via function
     *
     * Generated from protobuf field <code>bytes transferTo_address = 3;</code>
     * @return string
     */
    public function getTransferToAddress()
    {
        return $this->transferTo_address;
    }

    /**
     * the one recieve trx (TBD: or token) via function
     *
     * Generated from protobuf field <code>bytes transferTo_address = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTransferToAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->transferTo_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.InternalTransaction.CallValueInfo callValueInfo = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCallValueInfo()
    {
        return $this->callValueInfo;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.InternalTransaction.CallValueInfo callValueInfo = 4;</code>
     * @param \Protocol\InternalTransaction\CallValueInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCallValueInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\InternalTransaction\CallValueInfo::class);
        $this->callValueInfo = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes note = 5;</code>
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Generated from protobuf field <code>bytes note = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, False);
        $this->note = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool rejected = 6;</code>
     * @return bool
     */
    public function getRejected()
    {
        return $this->rejected;
    }

    /**
     * Generated from protobuf field <code>bool rejected = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRejected($var)
    {
        GPBUtil::checkBool($var);
        $this->rejected = $var;

        return $this;
    }

}

