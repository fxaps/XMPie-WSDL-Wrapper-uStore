<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS;

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
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CultureWS\ArrayOfCulture
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
    public function offsetExists($offset): bool
    {
      return isset($this->Culture[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Culture
     */
    public function offsetGet($offset): Culture
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
      unset($this->Culture[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Culture Return the current element
     */
    public function current(): Culture
    {
      return current($this->Culture);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Culture);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Culture);
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
      reset($this->Culture);
    }

    /**
     * Countable implementation
     *
     * @return Culture Return count of elements
     */
    public function count(): int
    {
      return count($this->Culture);
    }

}
