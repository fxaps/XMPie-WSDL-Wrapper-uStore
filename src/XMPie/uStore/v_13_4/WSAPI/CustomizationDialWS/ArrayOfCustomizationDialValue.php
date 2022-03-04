<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CustomizationDialWS;

class ArrayOfCustomizationDialValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomizationDialValue[] $CustomizationDialValue
     */
    protected $CustomizationDialValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomizationDialValue[]
     */
    public function getCustomizationDialValue()
    {
      return $this->CustomizationDialValue;
    }

    /**
     * @param CustomizationDialValue[] $CustomizationDialValue
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\CustomizationDialWS\ArrayOfCustomizationDialValue
     */
    public function setCustomizationDialValue(array $CustomizationDialValue = null)
    {
      $this->CustomizationDialValue = $CustomizationDialValue;
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
      return isset($this->CustomizationDialValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomizationDialValue
     */
    public function offsetGet($offset)
    {
      return $this->CustomizationDialValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomizationDialValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomizationDialValue[] = $value;
      } else {
        $this->CustomizationDialValue[$offset] = $value;
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
      unset($this->CustomizationDialValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomizationDialValue Return the current element
     */
    public function current()
    {
      return current($this->CustomizationDialValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomizationDialValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomizationDialValue);
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
      reset($this->CustomizationDialValue);
    }

    /**
     * Countable implementation
     *
     * @return CustomizationDialValue Return count of elements
     */
    public function count()
    {
      return count($this->CustomizationDialValue);
    }

}
