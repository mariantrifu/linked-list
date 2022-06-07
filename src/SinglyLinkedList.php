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

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $temp = $this->head;
            while ($data > $temp->getData()) {
                if ($temp->getNext() !== null) {
                    if ($data < $temp->getNext()->getData()) {
                        $newNode->setNext($temp->getNext());
                        $temp->setNext($newNode);
                    } else {
                        $temp = $temp->getNext();
                    }
                } else {
                    $temp->setNext($newNode);
                }
            }
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