<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\XMPieInternalWS;

class ArrayOfOrderProductJoined implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderProductJoined[] $OrderProductJoined
     */
    protected $OrderProductJoined = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderProductJoined[]
     */
    public function getOrderProductJoined()
    {
      return $this->OrderProductJoined;
    }

    /**
     * @param OrderProductJoined[] $OrderProductJoined
     * @return \XMPieWsdlClient\XMPie\uStore\v_13_4\WSAPI\XMPieInternalWS\ArrayOfOrderProductJoined
     */
    public function setOrderProductJoined(array $OrderProductJoined = null)
    {
      $this->OrderProductJoined = $OrderProductJoined;
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
      return isset($this->OrderProductJoined[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderProductJoined
     */
    public function offsetGet($offset)
    {
      return $this->OrderProductJoined[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderProductJoined $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderProductJoined[] = $value;
      } else {
        $this->OrderProductJoined[$offset] = $value;
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
      unset($this->OrderProductJoined[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderProductJoined Return the current element
     */
    public function current()
    {
      return current($this->OrderProductJoined);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderProductJoined);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderProductJoined);
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
      reset($this->OrderProductJoined);
    }

    /**
     * Countable implementation
     *
     * @return OrderProductJoined Return count of elements
     */
    public function count()
    {
      return count($this->OrderProductJoined);
    }

}
