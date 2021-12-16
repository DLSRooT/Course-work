<?php 

$dbhost = "localhost";
$dbname = "main_db";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_single_all(){
    global $db;
    $single = $db->query("SELECT * FROM product");
    return $single;
}

function get_single_random(){
    global $db;
    $single = $db->query("SELECT * FROM product ORDER BY rand() LIMIT 5");
    return $single;
}

function get_single_by_id($id){
    global $db;
  $single = $db->query("SELECT * FROM product WHERE id = $id");
    foreach ($single as $singles){
        return $singles;
    }
}

function register($name, $last_name, $email, $phone, $pasword, $link){
    global $db;
    $singles = $db->query("SELECT * FROM user");
    foreach ($singles as $single){
        if ($single["name"] == $name or $single["last_name"] == $last_name) {
            return FALSE;
        }
    }
    $db =  new mysqli('localhost', 'root', '','main_db');
    $query ="INSERT INTO `user`( `name`, `last_name`, `phone`, `pasword`, `mail`, `link`) VALUES ('$name','$last_name','$phone','$pasword','$email','$link')";
if($db->query($query)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $db->error;
}
    if($db){
    return TRUE;
    }
    else{
    return FALSE;
    }
}

function login($email, $pasword){
    global $db;
    $singles = $db->query("SELECT * FROM user");
    foreach ($singles as $single){
        if ($single["mail"] == $email or $single["pasword"] == $pasword) {
            return TRUE;
        }
    }
    return FALSE;
}
