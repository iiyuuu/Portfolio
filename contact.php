<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect('127.0.0.1', 'root', '', 'test') or die('connection failed');
$conn->set_charset('utf8mb4');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "SELECT * 
    FROM test.contact_form 
        WHERE name = '$name' 
        AND email = '$email'
        AND phone_number = '$number'
        AND message = '$msg';
    ";

    $select_message = $conn->prepare('SELECT * FROM test.contact_form WHERE name = ? AND email = ? ANd phone_number = ? AND message = ?');
    $select_message->bind_param('ssss', $name, $email, $number, $msg);
    $select_message->execute() or die('query failed');
    $select_message->store_result();
    $select_message->bind_result($_, $name, $email, $number, $msg);
    $select_message->fetch();
    $num_rows = $select_message->num_rows;
    $select_message->close();
    
    if($num_rows > 0){
        $message[] = 'message sent already';    
    }else{
        $query = $conn->prepare("
        INSERT INTO 
            test.contact_form (name, email, phone_number, message) 
        VALUES(?, ?, ?, ?)
        ");
        $query->bind_param('ssss', $name, $email, $number, $msg);
        $query->execute() or die('query failed');
        $query->close();
        $message[] = 'message sent successfully'; 
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portolio Website</title>

    <!-- font cdl link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<?php include 'nav_menu.php'; ?>

<?php 
if(!$message){
    foreach($messsage as $mes){
        echo '<div class="message">
        <span>'.$mes.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>';
    }
}
?>

array(1) { [0]=> string(20) "message sent already" } 
Warning: Array to string conversion in C:\Users\nnath\Downloads\Personal_Portfolio\contact.php on line 65 
Warning: Undefined variable $Array in C:\Users\nnath\Downloads\Personal_Portfolio\contact.php on line 65 
Warning: Undefined variable $messsage in C:\Users\nnath\Downloads\Personal_Portfolio\contact.php on line 66 
Warning: Undefined variable $ in C:\Users\nnath\Downloads\Personal_Portfolio\contact.php on line 66 
Warning: foreach() argument must be of type array|object, null given in C:\Users\nnath\Downloads\Personal_Portfolio\contact.php on line 66 
array(1) { [0]=> string(20) "message sent already" } 
Warning: Array to string conversion in C:\Users\nnath\Downloads\Personal_Portfolio\contact.php on line 64 
Warning: Undefined variable $Array in C:\Users\nnath\Downloads\Personal_Portfolio\contact.php on line 64 NULL




<body>

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact me</span></h1>

    <form action="" method="post">
        <div class="flex">
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
        <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
        
        <input type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+123-456-7890</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>name@domain.com</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>[insert address here]</p>
        </div>



    </div>


</section>    


<div class="credit"> &copy; copyright  @<?php echo date('Y'); ?> by <span> [insert company name here]</span></div>

















<script src="js/script.js"></script>

</body>
</html>