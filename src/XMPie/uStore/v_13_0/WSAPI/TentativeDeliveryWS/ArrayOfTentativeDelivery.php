<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TentativeDeliveryWS;

use ArrayAccess;
use Countable;
use Iterator;

class ArrayOfTentativeDelivery implements ArrayAccess, Iterator, Countable
{

    /**
     * @var TentativeDelivery[] $TentativeDelivery
     */
    protected $TentativeDelivery = null;


    public function __construct()
    {

    }

    /**
     * @return TentativeDelivery[]
     */
    public function getTentativeDelivery()
    {
        return $this->TentativeDelivery;
    }

    /**
     * @param TentativeDelivery[] $TentativeDelivery
     * @return ArrayOfTentativeDelivery
     */
    public function setTentativeDelivery(array $TentativeDelivery = null)
    {
        $this->TentativeDelivery = $TentativeDelivery;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->TentativeDelivery[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TentativeDelivery
     */
    public function offsetGet($offset)
    {
        return $this->TentativeDelivery[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TentativeDelivery $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->TentativeDelivery[] = $value;
        } else {
            $this->TentativeDelivery[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->TentativeDelivery[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TentativeDelivery Return the current element
     */
    public function current()
    {
        return current($this->TentativeDelivery);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->TentativeDelivery);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->TentativeDelivery);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->TentativeDelivery);
    }

    /**
     * Countable implementation
     *
     * @return TentativeDelivery Return count of elements
     */
    public function count()
    {
        return count($this->TentativeDelivery);
    }

}
