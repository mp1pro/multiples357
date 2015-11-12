<?php

function solution($N) {
    // write your code in PHP5.5
    //$length=$N;
    /*echo $length;
    echo $N;
    for ($i=1;$i>=$N;$i++) {

        echo $N;
    }*/
    for ($x = 1; $x <= $N; $x++) {
        if ($x%3 != 0){


            if ($x%5 == 0){
                echo "Buzz";
                if ($x%7== 0) {
                    echo "Cuzz";
                }
            }
            else{
                if ($x%7 == 0){
                    echo "Cuzz";
                }
                else {
                    echo "$x";
                }
            }


        }
        else{
            echo"Fizz";

            if ($x%5== 0) {
                echo "Buzz";
            }
            if ($x%7== 0) {
                echo "Cuzz";
            }



        }
        echo"</br>";
        //echo " $x <br>";
    }
}
solution(105);


/*function solution($N) {
    // write your code in PHP5.5
    $length==$N;
    for (i=1;i>=$N;i++){

        print $N;

    }
}
$divisible_Bythree = false;
$divisible_Byfive = false;
$divisible_Byseven = false;

function byNumber(){
    if ($N%3 != 0){
        $divisible_Bythree=true;
        if ($N%5 != 0){
            $divisible_Byfive = true;
            if ($N%7 != 0){
                $divisible_Byseven = true;
            }
        }
    }*/