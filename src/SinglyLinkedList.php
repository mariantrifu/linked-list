<?php

namespace LinkedList;

class SinglyLinkedList
{
    private ?Node $head;

    public function __construct(?Node $head)
    {
        $this->head = $head;
    }

    public function addElement(int $data): void
    {
        $newNode = new Node($data, null);

        if ($this->head === null || $this->head->getData() >= $newNode->getData()) {
            $newNode->setNext($this->head);
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->getNext() !== null && $current->getNext()->getData() < $newNode->getData()) {
                $current = $current->getNext();
            }
            $newNode->setNext($current->getNext());
            $current->setNext($newNode);
        }
    }

    public function display(): string
    {
        $toDisplay = '';
        while ($this->head !== null) {
            $toDisplay .= $this->head->getData() . PHP_EOL;
            $this->head = $this->head->getNext();
        }
        return $toDisplay;
    }
}