<?php

//actions
//push() - insert data on top of the stack
//pop(() - remove data in top of the stack
//peek() - return top data on the stack
//size() - returns the value of 

//isEmpty - check if the stack is empty
//isFulll - check if the stack is full

$stackofFruits = [];

$limit_of_Stack = array_slice($stackofFruits, 0, 5);
print_r($limit_of_Stack);



function push($item){
    $stackofFruits[] = $item;

    return  print_r($stackofFruits);
};



function isEmpty($stackofFruits){
    $array = $stackofFruits;

    if(count($array) <= 0){
         echo "the stack is Empty";
    }else{
        echo "not empty";
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="">
            <h3>Stack Data Structure</h3>
            <p>Last in First out</p>
            <p>First in Last out</p>
        </div>
    </main>
    
</body>
</html>