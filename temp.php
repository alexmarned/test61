<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Http;

/**
 * Description of temp
 *
 * @author alexm
 */
class temp {
    
    public $raram ;
    public function __construct($hello) {
        $this->param = $hello;
        echo $this->param;
    }
    
    //put your code here
    private function functionName($a, $b) {
        return $a + $b;
    }

    
    public function testFunc($param){
      return $this->raram  ; 
    }
    
    
}

$data = new temp('hello, Alex2 , hello nem');
echo $data->testFunc('Hello, Alex');

////////////////////////////

