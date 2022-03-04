<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS;

class ArrayOfAddress implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Address[] $Address
     */
    protected $Address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address[] $Address
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\AddressWS\ArrayOfAddress
     */
    public function setAddress(array $Address = null)
    {
      $this->Address = $Address;
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
      return isset($this->Address[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Address
     */
    public function offsetGet($offset)
    {
      return $this->Address[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Address $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Address[] = $value;
      } else {
        $this->Address[$offset] = $value;
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
      unset($this->Address[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Address Return the current element
     */
    public function current()
    {
      return current($this->Address);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Address);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Address);
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
      reset($this->Address);
    }

    /**
     * Countable implementation
     *
     * @return Address Return count of elements
     */
    public function count()
    {
      return count($this->Address);
    }

}
