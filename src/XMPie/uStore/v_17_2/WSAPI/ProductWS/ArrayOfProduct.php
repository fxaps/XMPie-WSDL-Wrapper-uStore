<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS;

class ArrayOfProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Product[] $Product
     */
    protected $Product = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Product[]
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param Product[] $Product
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\ProductWS\ArrayOfProduct
     */
    public function setProduct(array $Product = null)
    {
      $this->Product = $Product;
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
      return isset($this->Product[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Product
     */
    public function offsetGet($offset): Product
    {
      return $this->Product[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Product $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->Product[] = $value;
      } else {
        $this->Product[$offset] = $value;
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
      unset($this->Product[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Product Return the current element
     */
    public function current(): Product
    {
      return current($this->Product);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Product);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Product);
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
      reset($this->Product);
    }

    /**
     * Countable implementation
     *
     * @return Product Return count of elements
     */
    public function count(): int
    {
      return count($this->Product);
    }

}
