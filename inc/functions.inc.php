<?php
function emptyInputSignup($name, $email, $username, $pwd, $rpwd ){
    $result =false;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($rpwd)){
        $result = true;
    }
    return $result;
}

function uidExists($conn, $username, $email){

    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)){
        header ("location: ../sign-up.php?error=stmtfailed");
        exit(); 
    }
    mysqli_stmt_bind_param($stmt, "ss",$username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function creatUser($conn, $name,$email, $username, $pwd){

    $sql = "INSERT INTO users (usersName,usersEmail,usersUid, usersPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header ("location: ../sign-up.php?error=stmtfailed");
        exit(); 
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss",$name, $email,$username,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header ("location: ../sign-up.php?error=none");
    exit();
}