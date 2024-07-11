<?php

namespace XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS;

class ArrayOfUser implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var User[] $User
     */
    protected $User = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return User[]
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param User[] $User
     * @return \XMPieWsdlClient\XMPie\uStore\v_17_2\WSAPI\UserWS\ArrayOfUser
     */
    public function setUser(array $User = null)
    {
      $this->User = $User;
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
      return isset($this->User[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return User
     */
    public function offsetGet($offset): User
    {
      return $this->User[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param User $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->User[] = $value;
      } else {
        $this->User[$offset] = $value;
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
      unset($this->User[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return User Return the current element
     */
    public function current(): User
    {
      return current($this->User);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->User);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->User);
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
      reset($this->User);
    }

    /**
     * Countable implementation
     *
     * @return User Return count of elements
     */
    public function count(): int
    {
      return count($this->User);
    }

}
