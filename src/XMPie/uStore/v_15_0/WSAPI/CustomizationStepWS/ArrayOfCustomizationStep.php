<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS;

class ArrayOfCustomizationStep implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomizationStep[] $CustomizationStep
     */
    protected $CustomizationStep = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomizationStep[]
     */
    public function getCustomizationStep()
    {
      return $this->CustomizationStep;
    }

    /**
     * @param CustomizationStep[] $CustomizationStep
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CustomizationStepWS\ArrayOfCustomizationStep
     */
    public function setCustomizationStep(array $CustomizationStep = null)
    {
      $this->CustomizationStep = $CustomizationStep;
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
      return isset($this->CustomizationStep[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomizationStep
     */
    public function offsetGet($offset): CustomizationStep
    {
      return $this->CustomizationStep[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomizationStep $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->CustomizationStep[] = $value;
      } else {
        $this->CustomizationStep[$offset] = $value;
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
      unset($this->CustomizationStep[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomizationStep Return the current element
     */
    public function current(): CustomizationStep
    {
      return current($this->CustomizationStep);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->CustomizationStep);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->CustomizationStep);
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
      reset($this->CustomizationStep);
    }

    /**
     * Countable implementation
     *
     * @return CustomizationStep Return count of elements
     */
    public function count(): int
    {
      return count($this->CustomizationStep);
    }

}
