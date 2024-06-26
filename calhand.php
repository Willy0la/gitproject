<?php

class Callhand{


    public function callhand(){

        if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['num1'], $_POST['num2'], $_POST['operators'])){

            $num1 = htmlspecialchars($_POST['num1']);
            $num2 = htmlspecialchars($_POST['num2']);
            $operators =  htmlspecialchars($_POST['operators']);
        
           switch ($operators) {
        
            case '+':
                $result = $num1 + $num2;
             break;
        
            case'-':
                $result= $num1-$num2;
            break;
            
        
            case'/':
                $result= $num1/$num2;
            break;
        
            case'*':
                $result= $num1*$num2;
            break;
            
            default:
            
                break;
           }
        
        echo 'This is your result'; 
        echo '<br>';
        echo  $result;
        } 
        
    }
}

