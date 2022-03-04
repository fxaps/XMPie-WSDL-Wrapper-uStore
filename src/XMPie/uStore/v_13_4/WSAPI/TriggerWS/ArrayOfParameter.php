<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS;

class ArrayOfParameter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Parameter[] $Parameter
     */
    protected $Parameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Parameter[]
     */
    public function getParameter()
    {
      return $this->Parameter;
    }

    /**
     * @param Parameter[] $Parameter
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\TriggerWS\ArrayOfParameter
     */
    public function setParameter(array $Parameter = null)
    {
      $this->Parameter = $Parameter;
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
      return isset($this->Parameter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Parameter
     */
    public function offsetGet($offset)
    {
      return $this->Parameter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Parameter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Parameter[] = $value;
      } else {
        $this->Parameter[$offset] = $value;
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
      unset($this->Parameter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Parameter Return the current element
     */
    public function current()
    {
      return current($this->Parameter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Parameter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Parameter);
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
      reset($this->Parameter);
    }

    /**
     * Countable implementation
     *
     * @return Parameter Return count of elements
     */
    public function count()
    {
      return count($this->Parameter);
    }

}
