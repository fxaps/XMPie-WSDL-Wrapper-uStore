<?php

namespace XMPieWsdlClient\XMPie\uStore\v_12_1\WSAPI\LocalizationWS;

use ArrayAccess;
use Countable;
use Iterator;

class ArrayOfLocalizationResource implements ArrayAccess, Iterator, Countable
{

    /**
     * @var LocalizationResource[] $LocalizationResource
     */
    protected $LocalizationResource = null;


    public function __construct()
    {

    }

    /**
     * @return LocalizationResource[]
     */
    public function getLocalizationResource()
    {
        return $this->LocalizationResource;
    }

    /**
     * @param LocalizationResource[] $LocalizationResource
     * @return ArrayOfLocalizationResource
     */
    public function setLocalizationResource(array $LocalizationResource = null)
    {
        $this->LocalizationResource = $LocalizationResource;
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
        return isset($this->LocalizationResource[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LocalizationResource
     */
    public function offsetGet($offset)
    {
        return $this->LocalizationResource[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LocalizationResource $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->LocalizationResource[] = $value;
        } else {
            $this->LocalizationResource[$offset] = $value;
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
        unset($this->LocalizationResource[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LocalizationResource Return the current element
     */
    public function current()
    {
        return current($this->LocalizationResource);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->LocalizationResource);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->LocalizationResource);
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
        reset($this->LocalizationResource);
    }

    /**
     * Countable implementation
     *
     * @return LocalizationResource Return count of elements
     */
    public function count()
    {
        return count($this->LocalizationResource);
    }

}
