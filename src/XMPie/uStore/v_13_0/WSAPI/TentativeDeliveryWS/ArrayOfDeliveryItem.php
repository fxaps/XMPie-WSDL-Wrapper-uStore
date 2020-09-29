<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\TentativeDeliveryWS;

use ArrayAccess;
use Countable;
use Iterator;

class ArrayOfDeliveryItem implements ArrayAccess, Iterator, Countable
{

    /**
     * @var DeliveryItem[] $DeliveryItem
     */
    protected $DeliveryItem = null;


    public function __construct()
    {

    }

    /**
     * @return DeliveryItem[]
     */
    public function getDeliveryItem()
    {
        return $this->DeliveryItem;
    }

    /**
     * @param DeliveryItem[] $DeliveryItem
     * @return ArrayOfDeliveryItem
     */
    public function setDeliveryItem(array $DeliveryItem = null)
    {
        $this->DeliveryItem = $DeliveryItem;
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
        return isset($this->DeliveryItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeliveryItem
     */
    public function offsetGet($offset)
    {
        return $this->DeliveryItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeliveryItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->DeliveryItem[] = $value;
        } else {
            $this->DeliveryItem[$offset] = $value;
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
        unset($this->DeliveryItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeliveryItem Return the current element
     */
    public function current()
    {
        return current($this->DeliveryItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->DeliveryItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->DeliveryItem);
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
        reset($this->DeliveryItem);
    }

    /**
     * Countable implementation
     *
     * @return DeliveryItem Return count of elements
     */
    public function count()
    {
        return count($this->DeliveryItem);
    }

}
