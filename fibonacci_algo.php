<?php

$limit = 24;


$prev2 = 0;
$prev1 = 1;

echo $prev2;
echo " ";
echo $prev1;
echo " ";


// original solution
// for($i = 0; $i < $limit; $i++){
//     $nextnumber = $prev1 + $prev2;
//      echo $nextnumber;
//     echo " ";
//     $prev2 = $prev1;
//     $prev1 = $nextnumber;
// };

// if it has an condition
// for($i = 0; $i < $limit; $i++){
//     $nextnumber = $prev1 + $prev2;
//     echo $nextnumber;
//         echo " ";
//         $prev2 = $prev1;
//         $prev1 = $nextnumber;

//     if($nextnumber === 21){
//         // echo "i find it ";
//         // echo "<br>";
//         break; //stops at 21
//     }
// };
 echo "<br>";
 echo "<br>";
 echo "<br>";
$previous1 = 0;
$previous2 = 1;

echo $previous1;
echo " ";
echo $previous2;
echo " ";

for($i = 0; $i < $limit; $i++){
    $sumNextNum = $previous1 + $previous2;
    echo $sumNextNum;
    echo " ";
    $previous1 = $previous2;
    $previous2 = $sumNextNum;

};