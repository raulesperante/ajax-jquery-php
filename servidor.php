<?php
include('database.php');


if(!empty($_POST['search'])){
    $search = $_POST['search'];
    $query = "SELECT * FROM task WHERE name LIKE '%$search%'";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('Query error' . mysqli_error($connection));
    }
    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'name' => $row['name'],
            'description' => $row['description'],
            'row' => $row['id']
        ); 
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
    
}




