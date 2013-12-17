<?php

    class Stack{

        protected $stack;
        protected $limit;

        public function __construct($limit=10){
            $this->stack = array();
            $this->limit = $limit;
        }

        public function push($item){
            if(count($this->stack) < $this->limit){
                array_unshift($this->stack,$item);
            } else {
                throw new RuntimeException("Stack is full");
            }
        }

        public function pop(){
            if(!empty($this->stack)){
                array_shift($this->stack);
            } else {
                throw new RuntimeException("Stack is empty");
            }
        }

        public function top(){
            return current($this->stack);
        }

        public function isEmpty(){
            return empty($this->stack);
        }
    }