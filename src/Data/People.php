<?php
    namespace Programmerzamannow\Data;

    class People {
        public function __construct(private string $name) {

        }

        public function sayHello(string $name) {
            echo "Hello $name, My name is $this->name";
        }
    }