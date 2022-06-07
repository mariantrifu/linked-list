<?php

namespace LinkedList;

class Node
{
    private int $data;
    private ?Node $next;

    public function __construct(int $data, ?Node $next)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function getData(): int
    {
        return $this->data;
    }

    public function setData(int $data): void
    {
        $this->data = $data;
    }

    public function getNext(): ?Node
    {
        return $this->next;
    }

    public function setNext(?Node $next): void
    {
        $this->next = $next;
    }
}