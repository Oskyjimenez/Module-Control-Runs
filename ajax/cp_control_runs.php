<?php
header('Content-Type: application/json');

$fileContent = file_get_contents("../assets/runs.json");


foreach(json_decode($fileContent,true) as $key => $value){
    
    $value['drive'] = ($value['drive'])?"<input type=\"checkbox\" checked disabled>":"<input type=\"checkbox\" disabled><i></i></label>";
    $value['nas'] = ($value['nas'])?"<input  type=\"checkbox\" checked disabled>":"<input type=\"checkbox\" disabled>";
    $column[$key] = $value;
}

$return['data'] = $column ;


echo json_encode($return);