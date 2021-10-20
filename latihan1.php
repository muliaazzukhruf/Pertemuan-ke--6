<?php

//prosedur

    function sik(){
        echo "Hello SIK, nama saya lia ". $a . "panggilan saya ". $b .;
    }

    //fungsi

    function sik2(){
    $a = 3;
    $b =5;

    $c = 3+5;

    return $c;

    }
    

    $k = "nur mulia";
    $j = "lia";
    sik($k,$j);

    echo "<br>";
    echo sik2(3,5);

    echo "<br>";

    //array 2 dimensi

    $mahasiswa = array(

        array("afrizal", 18), //indeks 0
        array("azzukhruf", 19), //indeks 1
        array("tri yanti", 20), //indeks 2
        array("nabilah", 19) //indeks 3
    );

    echo $mahasiswa[1][0];



?>