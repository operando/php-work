<?php

$greet = function($name) {
    printf("Hello %s\n",$name);
};

$greet("PHP");


function counter() {
    $count = 0;
    return function() use (&$count) {
        return ++$count;
    };
}

$counter = counter();
echo $counter() . PHP_EOL;
echo $counter() . PHP_EOL;
echo $counter() . PHP_EOL;
$count = 0;
echo $count . PHP_EOL;
echo $counter() . PHP_EOL;

class User {
    private $id;
    
    function __construct($id) {
        $this->id = $id;
    }

    public function getId() {
        return function() { return $this->id; };
    }
}

$user = new User(5);
$getUserId = $user->getId();
echo $getUserId() . PHP_EOL;

