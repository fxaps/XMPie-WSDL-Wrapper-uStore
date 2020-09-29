<?php

namespace XMPieWsdlClient\XMPie\uStore\v_13_0\WSAPI\OrderProductWS;

use ArrayAccess;
use Countable;
use Iterator;

class ArrayOfDocumentPage implements ArrayAccess, Iterator, Countable
{

    /**
     * @var DocumentPage[] $DocumentPage
     */
    protected $DocumentPage = null;


    public function __construct()
    {

    }

    /**
     * @return DocumentPage[]
     */
    public function getDocumentPage()
    {
        return $this->DocumentPage;
    }

    /**
     * @param DocumentPage[] $DocumentPage
     * @return ArrayOfDocumentPage
     */
    public function setDocumentPage(array $DocumentPage = null)
    {
        $this->DocumentPage = $DocumentPage;
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
        return isset($this->DocumentPage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DocumentPage
     */
    public function offsetGet($offset)
    {
        return $this->DocumentPage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DocumentPage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->DocumentPage[] = $value;
        } else {
            $this->DocumentPage[$offset] = $value;
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
        unset($this->DocumentPage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DocumentPage Return the current element
     */
    public function current()
    {
        return current($this->DocumentPage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->DocumentPage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->DocumentPage);
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
        reset($this->DocumentPage);
    }

    /**
     * Countable implementation
     *
     * @return DocumentPage Return count of elements
     */
    public function count()
    {
        return count($this->DocumentPage);
    }

}
