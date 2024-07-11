<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductionWS;

class ArrayOfString implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var string[] $string
     */
    protected $string = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getString()
    {
      return $this->string;
    }

    /**
     * @param string[] $string
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductionWS\ArrayOfString
     */
    public function setString(array $string = null)
    {
      $this->string = $string;
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
      return isset($this->string[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    public function offsetGet($offset): string
    {
      return $this->string[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param string $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->string[] = $value;
      } else {
        $this->string[$offset] = $value;
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
      unset($this->string[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return string Return the current element
     */
    public function current(): string
    {
      return current($this->string);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->string);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->string);
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
      reset($this->string);
    }

    /**
     * Countable implementation
     *
     * @return string Return count of elements
     */
    public function count(): int
    {
      return count($this->string);
    }

}
