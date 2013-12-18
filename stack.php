<?php

    class Stack{

        protected $stack;
        protected $limit;

        public function __construct($limit=10){
            $this->stack = array();
            $this->limit = $limit;
        }

        public function insertFirst($item){
            if(count($this->stack) < $this->limit){
                return array_unshift($this->stack,$item);
            } else {
                throw new RuntimeException("Stack is full");
            }
        }

        public function insertLast($item){
            if(count($this->stack) < $this->limit){
                return array_push($this->stack,$item);
            } else {
                throw new RuntimeException("Stack is full");
            }
        }

        public function removeFirst(){
            if(!empty($this->stack)){
                return array_shift($this->stack);
            } else {
                throw new RuntimeException("Stack is empty");
            }
        }

        public function removeLast(){
            if(!empty($this->stack)){
                return array_pop($this->stack);
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
