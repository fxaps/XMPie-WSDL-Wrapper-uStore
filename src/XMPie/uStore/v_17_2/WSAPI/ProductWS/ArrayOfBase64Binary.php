<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS;

class ArrayOfBase64Binary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var base64Binary[] $base64Binary
     */
    protected $base64Binary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return base64Binary[]
     */
    public function getBase64Binary()
    {
      return $this->base64Binary;
    }

    /**
     * @param base64Binary[] $base64Binary
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS\ArrayOfBase64Binary
     */
    public function setBase64Binary(array $base64Binary = null)
    {
      $this->base64Binary = $base64Binary;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
      return isset($this->base64Binary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return base64Binary
     */
    public function offsetGet($offset): base64Binary
    {
      return $this->base64Binary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param base64Binary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->base64Binary[] = $value;
      } else {
        $this->base64Binary[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset): void
    {
      unset($this->base64Binary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return base64Binary Return the current element
     */
    public function current(): base64Binary
    {
      return current($this->base64Binary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->base64Binary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->base64Binary);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid(): bool
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind(): void
    {
      reset($this->base64Binary);
    }

    /**
     * Countable implementation
     *
     * @return base64Binary Return count of elements
     */
    public function count(): int
    {
      return count($this->base64Binary);
    }

}
