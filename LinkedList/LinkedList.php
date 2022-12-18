<?php
class LinkedList{
    private $_firstNode = NULL;
    private $_totalNodes = 0;

    public function insert(string $data=NULL)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return true;
    }
    
    public function display()
    {
        echo "Total book title: ".$this->_totalNodes."\n";
        $currentNode = $this->_firstNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data."\n";
            $currentNode = $currentNode->next;
        }
    }
}