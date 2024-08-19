<?php

function preparedQuery($connection, $query, $params, $types){
    $types = $types ?: str_repeat("s", count($params));
    $statement = $connection->prepare($query);
    $statement->bind_param($types, ...$params);
    $statement->execute() or die('query failed');
    return $statement;
}

function messageExists($connection, $name, $email, $number, $msg){
    $query = "SELECT * 
    FROM test.contact_form 
        WHERE name = ?
        AND email = ?
        AND phone_number = ?
        AND message = ?" ;

    $id = '';

    $select_message = preparedQuery($connection, $query, [$name, $email, $number, $msg], 'ssss');

    $select_message->store_result();
    $select_message->bind_result($id, $name, $email, $number, $msg);
    $select_message->fetch();
    $num_rows = $select_message->num_rows;
    $select_message->close();

    return $num_rows > 0;
}

function uploadMessage($connection){
    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        http_response_code(405);
        $response = json_encode(array('message' => 'Error: Method not allowed'));
        return;
    }
    
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $number = mysqli_real_escape_string($connection, str_replace('-', '', $_POST['number']));
    $msg = mysqli_real_escape_string($connection, $_POST['message']);
    $message = '';
    
    if(messageExists($connection, $name, $email, $number, $msg)){
        http_response_code(202);
        $message = 'message sent already';   
    }
    else{
        $query = "
        INSERT INTO 
            test.contact_form (name, email, phone_number, message) 
        VALUES(?, ?, ?, ?)";
        preparedQuery($connection, $query, [$name, $email, $number, $msg], 'ssss');
        $message = 'message sent successfully';    
        http_response_code(202); 
    }

    $response = json_encode(array('message' => $message));
    return $response;
}

function process(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = mysqli_connect('127.0.0.1', 'root', 'g3JRvSxr_=iqqzD', 'test') or die('connection failed');
    $conn->set_charset('utf8mb4');

    $response = uploadMessage($conn);
    echo $response;
}

process();
