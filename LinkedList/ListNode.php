<?php

 class ListNode {

    /**
     * @author Semeton Balogun <balogunsemeton@gmail.com>
     */
    
    public $data = NULL;
    public $next = NULL;
    
    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }
 }
//  