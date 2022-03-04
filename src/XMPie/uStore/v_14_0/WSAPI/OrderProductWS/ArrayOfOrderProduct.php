<?php

namespace XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS;

class ArrayOfOrderProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderProduct[] $OrderProduct
     */
    protected $OrderProduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderProduct[]
     */
    public function getOrderProduct()
    {
      return $this->OrderProduct;
    }

    /**
     * @param OrderProduct[] $OrderProduct
     * @return \XMPieWsdlClient\XMPie\uStore\v_14_0\WSAPI\OrderProductWS\ArrayOfOrderProduct
     */
    public function setOrderProduct(array $OrderProduct = null)
    {
      $this->OrderProduct = $OrderProduct;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->OrderProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderProduct
     */
    public function offsetGet($offset)
    {
      return $this->OrderProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderProduct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderProduct[] = $value;
      } else {
        $this->OrderProduct[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderProduct Return the current element
     */
    public function current()
    {
      return current($this->OrderProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderProduct);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->OrderProduct);
    }

    /**
     * Countable implementation
     *
     * @return OrderProduct Return count of elements
     */
    public function count()
    {
      return count($this->OrderProduct);
    }

}
