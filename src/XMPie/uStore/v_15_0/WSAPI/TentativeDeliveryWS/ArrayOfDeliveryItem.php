<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\TentativeDeliveryWS;

class ArrayOfDeliveryItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeliveryItem[] $DeliveryItem
     */
    protected $DeliveryItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeliveryItem[]
     */
    public function getDeliveryItem()
    {
      return $this->DeliveryItem;
    }

    /**
     * @param DeliveryItem[] $DeliveryItem
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\TentativeDeliveryWS\ArrayOfDeliveryItem
     */
    public function setDeliveryItem(array $DeliveryItem = null)
    {
      $this->DeliveryItem = $DeliveryItem;
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
      return isset($this->DeliveryItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeliveryItem
     */
    public function offsetGet($offset): DeliveryItem
    {
      return $this->DeliveryItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeliveryItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->DeliveryItem[] = $value;
      } else {
        $this->DeliveryItem[$offset] = $value;
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
      unset($this->DeliveryItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeliveryItem Return the current element
     */
    public function current(): DeliveryItem
    {
      return current($this->DeliveryItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->DeliveryItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->DeliveryItem);
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
      reset($this->DeliveryItem);
    }

    /**
     * Countable implementation
     *
     * @return DeliveryItem Return count of elements
     */
    public function count(): int
    {
      return count($this->DeliveryItem);
    }

}
