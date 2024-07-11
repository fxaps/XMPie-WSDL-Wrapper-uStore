<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CircleAnalyticsWS;

class ArrayOfCircleAnalyticsAPIModel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CircleAnalyticsAPIModel[] $CircleAnalyticsAPIModel
     */
    protected $CircleAnalyticsAPIModel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CircleAnalyticsAPIModel[]
     */
    public function getCircleAnalyticsAPIModel()
    {
      return $this->CircleAnalyticsAPIModel;
    }

    /**
     * @param CircleAnalyticsAPIModel[] $CircleAnalyticsAPIModel
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\CircleAnalyticsWS\ArrayOfCircleAnalyticsAPIModel
     */
    public function setCircleAnalyticsAPIModel(array $CircleAnalyticsAPIModel = null)
    {
      $this->CircleAnalyticsAPIModel = $CircleAnalyticsAPIModel;
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
      return isset($this->CircleAnalyticsAPIModel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CircleAnalyticsAPIModel
     */
    public function offsetGet($offset): CircleAnalyticsAPIModel
    {
      return $this->CircleAnalyticsAPIModel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CircleAnalyticsAPIModel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->CircleAnalyticsAPIModel[] = $value;
      } else {
        $this->CircleAnalyticsAPIModel[$offset] = $value;
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
      unset($this->CircleAnalyticsAPIModel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CircleAnalyticsAPIModel Return the current element
     */
    public function current(): CircleAnalyticsAPIModel
    {
      return current($this->CircleAnalyticsAPIModel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->CircleAnalyticsAPIModel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->CircleAnalyticsAPIModel);
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
      reset($this->CircleAnalyticsAPIModel);
    }

    /**
     * Countable implementation
     *
     * @return CircleAnalyticsAPIModel Return count of elements
     */
    public function count(): int
    {
      return count($this->CircleAnalyticsAPIModel);
    }

}
