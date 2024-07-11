<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS;

class ArrayOfFieldOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FieldOption[] $FieldOption
     */
    protected $FieldOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldOption[]
     */
    public function getFieldOption()
    {
      return $this->FieldOption;
    }

    /**
     * @param FieldOption[] $FieldOption
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\CustomizationDialWS\ArrayOfFieldOption
     */
    public function setFieldOption(array $FieldOption = null)
    {
      $this->FieldOption = $FieldOption;
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
      return isset($this->FieldOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FieldOption
     */
    public function offsetGet($offset): FieldOption
    {
      return $this->FieldOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FieldOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->FieldOption[] = $value;
      } else {
        $this->FieldOption[$offset] = $value;
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
      unset($this->FieldOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FieldOption Return the current element
     */
    public function current(): FieldOption
    {
      return current($this->FieldOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->FieldOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->FieldOption);
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
      reset($this->FieldOption);
    }

    /**
     * Countable implementation
     *
     * @return FieldOption Return count of elements
     */
    public function count(): int
    {
      return count($this->FieldOption);
    }

}
