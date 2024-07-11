<?php

namespace XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserGroupWS;

class ArrayOfUserGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UserGroup[] $UserGroup
     */
    protected $UserGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserGroup[]
     */
    public function getUserGroup()
    {
      return $this->UserGroup;
    }

    /**
     * @param UserGroup[] $UserGroup
     * @return \XMPieWsdlClient\XMPie\uStore\v_15_0\WSAPI\UserGroupWS\ArrayOfUserGroup
     */
    public function setUserGroup(array $UserGroup = null)
    {
      $this->UserGroup = $UserGroup;
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
      return isset($this->UserGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserGroup
     */
    public function offsetGet($offset): UserGroup
    {
      return $this->UserGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->UserGroup[] = $value;
      } else {
        $this->UserGroup[$offset] = $value;
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
      unset($this->UserGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserGroup Return the current element
     */
    public function current(): UserGroup
    {
      return current($this->UserGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->UserGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->UserGroup);
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
      reset($this->UserGroup);
    }

    /**
     * Countable implementation
     *
     * @return UserGroup Return count of elements
     */
    public function count(): int
    {
      return count($this->UserGroup);
    }

}
