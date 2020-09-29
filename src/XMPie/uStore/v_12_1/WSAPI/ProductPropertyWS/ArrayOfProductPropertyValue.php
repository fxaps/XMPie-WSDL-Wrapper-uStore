<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductPropertyWS;

use ArrayAccess;
use Countable;
use Iterator;

class ArrayOfProductPropertyValue implements ArrayAccess, Iterator, Countable
{

    /**
     * @var ProductPropertyValue[] $ProductPropertyValue
     */
    protected $ProductPropertyValue = null;


    public function __construct()
    {

    }

    /**
     * @return ProductPropertyValue[]
     */
    public function getProductPropertyValue()
    {
        return $this->ProductPropertyValue;
    }

    /**
     * @param ProductPropertyValue[] $ProductPropertyValue
     * @return ArrayOfProductPropertyValue
     */
    public function setProductPropertyValue(array $ProductPropertyValue = null)
    {
        $this->ProductPropertyValue = $ProductPropertyValue;
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
        return isset($this->ProductPropertyValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductPropertyValue
     */
    public function offsetGet($offset)
    {
        return $this->ProductPropertyValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductPropertyValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ProductPropertyValue[] = $value;
        } else {
            $this->ProductPropertyValue[$offset] = $value;
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
        unset($this->ProductPropertyValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductPropertyValue Return the current element
     */
    public function current()
    {
        return current($this->ProductPropertyValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ProductPropertyValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ProductPropertyValue);
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
        reset($this->ProductPropertyValue);
    }

    /**
     * Countable implementation
     *
     * @return ProductPropertyValue Return count of elements
     */
    public function count()
    {
        return count($this->ProductPropertyValue);
    }

}
