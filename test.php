<?php

    require "stack.php";

    $test = new Stack();

    //Let’s add some items to the stack:
    $test->insertFirst("Vinoth");
    $test->insertFirst("Kevin");
    $test->insertFirst("Ryan");
    //Let’s see If our stack is empty
    echo $test->isEmpty();

    //Let’s see what’s at the top of the stack:
    echo $test->top();

    //To remove some items from the stack:
    $test->removeFirst();

    echo $test->top();
