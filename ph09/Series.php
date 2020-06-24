<?php


namespace App\classes;


class Series
{
    public function createSeries(){
        $result='';
    $data=(object)$_POST;
    for($i=$data->starting_number; $i<=$data->ending_number; $i++){
        $result .=$i.' ';

    }
        return $result;

    }
}