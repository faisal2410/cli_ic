<?php

if($argc!==4){
    echo "Arguments not provided. Switching to interactive mode. \n";
    $num1= (float)readline("Enter the first number: ");
    $operator= readline("Enter the operator (+, -, *, /, %): "); 
    $num2= (float)readline("Enter the second number: ");
    // var_dump($num1);
    // var_dump($operator);
    // var_dump($num2);
} else{
    $num1=(float)$argv[1];
    $operator=$argv[2];
    $num2=(float)$argv[3];

    // var_dump($num1);
    // var_dump($operator);
    // var_dump($num2);
}


switch($operator){
    case '+':
    echo $num1+$num2 . "\n";
    break;

    case '-':
    echo $num1-$num2 ."\n";
    break;

    case '*':
    echo $num1*$num2 . "\n";
    break;

    case '/':
    if($num2==0){
        echo "Error: Division by zero .\n";
        break;
    }else{
            echo $num1 / $num2 . "\n";
            break;
    }
    

    case '%':
        if ($num2 == 0) {
            echo "Error: Division by zero .\n";
            break;
        } else {
            echo $num1 % $num2 . "\n";
            break;
        }
    default:
    echo "Unsupported operator.\n";
    break;
}



