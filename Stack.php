<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($element)
    {
        if (!$this->isFull()) {
            return array_unshift($this->stack, $element);
        } else {
            throw new Exception("Stack isn't full!");
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->stack);
        } else {
            throw new Exception("Stack isn't empty!");
        }
    }

    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->stack[count($this->stack) - 1];
        } else {
            throw new Exception("Stack isn't empty!");
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function isFull()
    {
        return count($this->stack) == $this->limit;
    }
}