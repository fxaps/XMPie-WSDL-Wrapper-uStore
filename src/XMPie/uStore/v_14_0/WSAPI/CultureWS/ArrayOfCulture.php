<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CultureWS;

class ArrayOfCulture implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Culture[] $Culture
     */
    protected $Culture = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Culture[]
     */
    public function getCulture()
    {
      return $this->Culture;
    }

    /**
     * @param Culture[] $Culture
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\CultureWS\ArrayOfCulture
     */
    public function setCulture(array $Culture = null)
    {
      $this->Culture = $Culture;
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
      return isset($this->Culture[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Culture
     */
    public function offsetGet($offset)
    {
      return $this->Culture[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Culture $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Culture[] = $value;
      } else {
        $this->Culture[$offset] = $value;
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
      unset($this->Culture[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Culture Return the current element
     */
    public function current()
    {
      return current($this->Culture);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Culture);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Culture);
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
      reset($this->Culture);
    }

    /**
     * Countable implementation
     *
     * @return Culture Return count of elements
     */
    public function count()
    {
      return count($this->Culture);
    }

}
