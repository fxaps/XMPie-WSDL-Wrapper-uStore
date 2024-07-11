<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS;

class ArrayOfTentativeDelivery implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TentativeDelivery[] $TentativeDelivery
     */
    protected $TentativeDelivery = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TentativeDelivery[]
     */
    public function getTentativeDelivery()
    {
      return $this->TentativeDelivery;
    }

    /**
     * @param TentativeDelivery[] $TentativeDelivery
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\TentativeDeliveryWS\ArrayOfTentativeDelivery
     */
    public function setTentativeDelivery(array $TentativeDelivery = null)
    {
      $this->TentativeDelivery = $TentativeDelivery;
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
      return isset($this->TentativeDelivery[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TentativeDelivery
     */
    public function offsetGet($offset): TentativeDelivery
    {
      return $this->TentativeDelivery[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TentativeDelivery $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->TentativeDelivery[] = $value;
      } else {
        $this->TentativeDelivery[$offset] = $value;
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
      unset($this->TentativeDelivery[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TentativeDelivery Return the current element
     */
    public function current(): TentativeDelivery
    {
      return current($this->TentativeDelivery);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->TentativeDelivery);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->TentativeDelivery);
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
      reset($this->TentativeDelivery);
    }

    /**
     * Countable implementation
     *
     * @return TentativeDelivery Return count of elements
     */
    public function count(): int
    {
      return count($this->TentativeDelivery);
    }

}
