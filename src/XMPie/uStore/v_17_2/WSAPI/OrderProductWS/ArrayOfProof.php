<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderProductWS;

class ArrayOfProof implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Proof[] $Proof
     */
    protected $Proof = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Proof[]
     */
    public function getProof()
    {
      return $this->Proof;
    }

    /**
     * @param Proof[] $Proof
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\OrderProductWS\ArrayOfProof
     */
    public function setProof(array $Proof = null)
    {
      $this->Proof = $Proof;
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
      return isset($this->Proof[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Proof
     */
    public function offsetGet($offset): Proof
    {
      return $this->Proof[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Proof $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->Proof[] = $value;
      } else {
        $this->Proof[$offset] = $value;
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
      unset($this->Proof[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Proof Return the current element
     */
    public function current(): Proof
    {
      return current($this->Proof);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Proof);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Proof);
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
      reset($this->Proof);
    }

    /**
     * Countable implementation
     *
     * @return Proof Return count of elements
     */
    public function count(): int
    {
      return count($this->Proof);
    }

}
