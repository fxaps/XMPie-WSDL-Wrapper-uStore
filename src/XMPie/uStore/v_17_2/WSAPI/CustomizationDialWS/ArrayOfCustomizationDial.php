<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS;

class ArrayOfCustomizationDial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomizationDial[] $CustomizationDial
     */
    protected $CustomizationDial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomizationDial[]
     */
    public function getCustomizationDial()
    {
      return $this->CustomizationDial;
    }

    /**
     * @param CustomizationDial[] $CustomizationDial
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\ArrayOfCustomizationDial
     */
    public function setCustomizationDial(array $CustomizationDial = null)
    {
      $this->CustomizationDial = $CustomizationDial;
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
      return isset($this->CustomizationDial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomizationDial
     */
    public function offsetGet($offset): CustomizationDial
    {
      return $this->CustomizationDial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomizationDial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->CustomizationDial[] = $value;
      } else {
        $this->CustomizationDial[$offset] = $value;
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
      unset($this->CustomizationDial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomizationDial Return the current element
     */
    public function current(): CustomizationDial
    {
      return current($this->CustomizationDial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->CustomizationDial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->CustomizationDial);
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
      reset($this->CustomizationDial);
    }

    /**
     * Countable implementation
     *
     * @return CustomizationDial Return count of elements
     */
    public function count(): int
    {
      return count($this->CustomizationDial);
    }

}
