<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ActualDeliveryWS;

class ArrayOfInt implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var int[] $int
     */
    protected $int = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getInt()
    {
      return $this->int;
    }

    /**
     * @param int[] $int
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ActualDeliveryWS\ArrayOfInt
     */
    public function setInt(array $int = null)
    {
      $this->int = $int;
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
      return isset($this->int[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return int
     */
    public function offsetGet($offset): int
    {
      return $this->int[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param int $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->int[] = $value;
      } else {
        $this->int[$offset] = $value;
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
      unset($this->int[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return int Return the current element
     */
    public function current(): int
    {
      return current($this->int);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->int);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->int);
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
      reset($this->int);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->int);
    }

}
