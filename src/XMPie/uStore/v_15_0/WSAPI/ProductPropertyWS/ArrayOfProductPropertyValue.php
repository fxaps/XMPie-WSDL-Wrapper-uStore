<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductPropertyWS;

class ArrayOfProductPropertyValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductPropertyValue[] $ProductPropertyValue
     */
    protected $ProductPropertyValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductPropertyValue[]
     */
    public function getProductPropertyValue()
    {
      return $this->ProductPropertyValue;
    }

    /**
     * @param ProductPropertyValue[] $ProductPropertyValue
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\ProductPropertyWS\ArrayOfProductPropertyValue
     */
    public function setProductPropertyValue(array $ProductPropertyValue = null)
    {
      $this->ProductPropertyValue = $ProductPropertyValue;
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
      return isset($this->ProductPropertyValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductPropertyValue
     */
    public function offsetGet($offset): ProductPropertyValue
    {
      return $this->ProductPropertyValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductPropertyValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->ProductPropertyValue[] = $value;
      } else {
        $this->ProductPropertyValue[$offset] = $value;
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
      unset($this->ProductPropertyValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductPropertyValue Return the current element
     */
    public function current(): ProductPropertyValue
    {
      return current($this->ProductPropertyValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->ProductPropertyValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->ProductPropertyValue);
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
      reset($this->ProductPropertyValue);
    }

    /**
     * Countable implementation
     *
     * @return ProductPropertyValue Return count of elements
     */
    public function count(): int
    {
      return count($this->ProductPropertyValue);
    }

}
