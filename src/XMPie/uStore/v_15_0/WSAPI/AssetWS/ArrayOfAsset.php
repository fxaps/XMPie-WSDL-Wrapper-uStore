<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS;

class ArrayOfAsset implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Asset[] $Asset
     */
    protected $Asset = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Asset[]
     */
    public function getAsset()
    {
      return $this->Asset;
    }

    /**
     * @param Asset[] $Asset
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\AssetWS\ArrayOfAsset
     */
    public function setAsset(array $Asset = null)
    {
      $this->Asset = $Asset;
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
      return isset($this->Asset[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Asset
     */
    public function offsetGet($offset): Asset
    {
      return $this->Asset[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Asset $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->Asset[] = $value;
      } else {
        $this->Asset[$offset] = $value;
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
      unset($this->Asset[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Asset Return the current element
     */
    public function current(): Asset
    {
      return current($this->Asset);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Asset);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Asset);
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
      reset($this->Asset);
    }

    /**
     * Countable implementation
     *
     * @return Asset Return count of elements
     */
    public function count(): int
    {
      return count($this->Asset);
    }

}
