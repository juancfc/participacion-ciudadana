<?php
function db_query($query) {
    $connection = mysqli_connect("localhost","root","","basetest");
    $result = mysqli_query($connection,$query);

    return $result;
}



 function insert($fCiudadano,$form_data){
    $fields = array_keys($form_data);
    $sql="INSERT INTO ".$fCiudadano."(".implode(',', $fields).")  VALUES('".implode("','", $form_data)."')";
    
    return db_query($sql);

}

function delete($fCiudadano,$field_id,$id_nombre){

    $sql = "delete from ".$nombres." where ".$field_id."=".$id_nombre."";
    
    return db_query($sql);
}

function edit($fCiudadano,$form_data,$field_id,$id_nombre){
    $sql = "UPDATE ".$nombres." SET ";
    $data = array();

    foreach($form_data as $column=>$value){

        $data[] =$column."="."'".$value."'";

    }
    $sql .= implode(',',$data);
    $sql.=" where ".$field_id." = ".$id_nombre."";
    return db_query($sql); 
}

function select_id($fCiudadano,$field_name,$field_id){
    $sql = "Select * from ".$fCiudadano." where ".$field_name." = ".$field_id."";
    $db=db_query($sql);
    $GLOBALS['row'] = mysqli_fetch_object($db);

    return $sql;

}
?>