<?php
require_once('../controllers/database.php');
function registration($userType, $f_name, $l_name, $gender, $dob, $username, $password, $email, $phone, $address, $profile_picture)
{
    global  $conn;
    $sql = "INSERT INTO usersinfo  (userType,f_name,l_name,gender,dob,username,password,email,phone,address,profile_picture)  values ('{$userType}','{$f_name}', '{$l_name}', '{$gender}','{$dob}','{$username}','{$password}','{$email}','{$phone}','{$address}','{$profile_picture}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
       return true;
    } else
        return false;
}
function login($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM usersinfo WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}
function userinfo($username)
{
    global $conn;
    $sql = "SELECT * FROM usersinfo WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        echo "Error";
}
function userUpdate($f_name, $l_name, $gender, $dob, $username, $email, $phone, $address, $profile_picture)
{
    global  $conn;
    $sql = "UPDATE usersinfo SET f_name = '{$f_name}',l_name = '{$l_name}',gender = '{$gender}',dob = '{$dob}',email = '{$email}',phone = '{$phone}',address = '{$address}',profile_picture = '{$profile_picture}' WHERE username = '{$username}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function updateLoginfo($username, $password, $id)
{
    global  $conn;
    $sql = "UPDATE usersinfo SET username = '{$username}',password = '{$password}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function getAlladmin()
{
    global $conn;
    $sql = "SELECT * from usersinfo WHERE userType = 'admin'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $admins[] = $row;
    }
    return $admins;
}
