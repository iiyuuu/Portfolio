<?php

function messageExists($connection, $name, $email, $number, $msg){
    $query = "SELECT * 
    FROM test.contact_form 
        WHERE name = '" . $name . "' 
        AND email = '" . $email . "'
        AND phone_number = '". $number . "'
        AND message = '" . $msg ."'" ;

    $id = '';

    $select_message = $connection->prepare($query);
    $select_message->execute() or die('query failed');
    $select_message->store_result();
    $select_message->bind_result($id, $name, $email, $number, $msg);
    $select_message->fetch();
    $num_rows = $select_message->num_rows;
    $select_message->close();

    return $num_rows > 0;
}

function uploadMessage($connection){
    if(!$_SERVER["REQUEST_METHOD"] == "POST"){
        return;
    }
    
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $number = mysqli_real_escape_string($connection, str_replace('-', '', $_POST['number']));
    $msg = mysqli_real_escape_string($connection, $_POST['message']);
    
    if(messageExists($connection, $name, $email, $number, $msg)){
        $message = 'message sent already';    
    }
    else{
        $query = $connection->prepare("
        INSERT INTO 
            test.contact_form (name, email, phone_number, message) 
        VALUES('" . $name . "', '" . $email . "', '" . $number . "', '" . $msg . "')");
        $query->execute() or die('query failed');
        $query->close();
        $message = 'message sent successfully'; 
    }

    if(isset($message)){
        $_SESSION['snackbar_message'] = $message;
    }
}

function process(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = mysqli_connect('127.0.0.1', 'root', 'g3JRvSxr_=iqqzD', 'test') or die('connection failed');
    $conn->set_charset('utf8mb4');

    uploadMessage($conn);
}

process();
