<?php
    class person
    {
        var $name;
        function __construct($persons_name,){
            $this -> name = $persons_name;
        }
        function get_name(){
            return $this -> name;
        }
        public function set_name($new_name){
            if($new_name != "Jimmy Two Guns"){
                $this -> name = strtoupper($new_name);
            }
            //$this -> name = $new_name;
        }
    }
    class employee extends person
    {
        
        public function set_name($new_name){
            if($new_name == "Stefan Sucks"){
                $this -> name = $new_name;
            }elseif($new_name == "Johnny Fingers"){
                person::set_name($new_name);
            }
        }
        function __construct($employee_name){
            $this -> set_name($employee_name);
        }
    }
?>