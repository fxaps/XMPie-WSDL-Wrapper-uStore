<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\ProductGroupWS;

use ArrayAccess;
use Countable;
use Iterator;

class ArrayOfProductGroup implements ArrayAccess, Iterator, Countable
{

    /**
     * @var ProductGroup[] $ProductGroup
     */
    protected $ProductGroup = null;


    public function __construct()
    {

    }

    /**
     * @return ProductGroup[]
     */
    public function getProductGroup()
    {
        return $this->ProductGroup;
    }

    /**
     * @param ProductGroup[] $ProductGroup
     * @return ArrayOfProductGroup
     */
    public function setProductGroup(array $ProductGroup = null)
    {
        $this->ProductGroup = $ProductGroup;
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
        return isset($this->ProductGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductGroup
     */
    public function offsetGet($offset)
    {
        return $this->ProductGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ProductGroup[] = $value;
        } else {
            $this->ProductGroup[$offset] = $value;
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
        unset($this->ProductGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductGroup Return the current element
     */
    public function current()
    {
        return current($this->ProductGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ProductGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ProductGroup);
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
        reset($this->ProductGroup);
    }

    /**
     * Countable implementation
     *
     * @return ProductGroup Return count of elements
     */
    public function count()
    {
        return count($this->ProductGroup);
    }

}
