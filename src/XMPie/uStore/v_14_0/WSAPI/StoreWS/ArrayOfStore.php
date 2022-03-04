<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\StoreWS;

class ArrayOfStore implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Store[] $Store
     */
    protected $Store = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Store[]
     */
    public function getStore()
    {
      return $this->Store;
    }

    /**
     * @param Store[] $Store
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\StoreWS\ArrayOfStore
     */
    public function setStore(array $Store = null)
    {
      $this->Store = $Store;
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
      return isset($this->Store[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Store
     */
    public function offsetGet($offset)
    {
      return $this->Store[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Store $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Store[] = $value;
      } else {
        $this->Store[$offset] = $value;
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
      unset($this->Store[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Store Return the current element
     */
    public function current()
    {
      return current($this->Store);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Store);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Store);
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
      reset($this->Store);
    }

    /**
     * Countable implementation
     *
     * @return Store Return count of elements
     */
    public function count()
    {
      return count($this->Store);
    }

}
