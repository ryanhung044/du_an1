<?php
function user_email($email)
{
    $sql = "SELECT * FROM users WHERE email='$email'";
    return pdo_query_one($sql);
}

function user_username($username)
{
    $sql = "SELECT * FROM users WHERE username = '$username'";
    return pdo_query_one($sql);
}

function insert_user($email, $username, $password)
{
    $sql = "INSERT INTO users(email,username,password) VALUES ('$email','$username','$password')";
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "SELECT * FROM users WHERE  email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function check_user($username, $password)
{
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    return pdo_query_one($sql);
}

function update_tk($id, $name, $username, $email, $phone, $address)
{

    $sql = "UPDATE users SET name='$name',username='$username',email='$email',phone='$phone',address='$address' WHERE id=$id ";

    pdo_execute($sql);
}
function updatemk($id, $password_n)
{
    $sql = "UPDATE users SET password='$password_n' WHERE id=$id ";

    pdo_execute($sql);
}
