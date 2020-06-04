<?php
    $errors = array();
    $name = '';
    $email = '';
    $db = mysqli_connect('localhost', 'root', '', 'accounts');
    $connection = new mysqli('localhost', 'root', '', 'accounts');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];

        if(empty($name)){
            $errors['name'] = "შეიყვანეთ სახელი";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email address is invalide';
        }
        if(empty($email)){
            $errors['email'] = "required email";
        }
        if(empty($pass)){
            $errors['pass'] = "required password";
        }
        if($pass!==$confirm){
            $errors['confirm'] = "Two password do not match";
        }
        $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
        $stm = $connection->prepare($emailQuery);
        $stm -> bind_param('s',$email);
        $stm->execute();
        $result = $stm->get_result();
        $userCount = $result->num_rows;
        if($userCount>0){
            $errors['email']='Emails already exist';
        }
        if(count($errors === 0)){
            $pass = password_hash($pass,PASSWORD_DEFAULT);
            $token = bin2hex(random_bytes(50));
            $confirm = false;

            $sql = "INSERT INTO users(name,phone,email,pass,confirm)VALUES(?,?,?,?,?)";
            $stm = $connection->prepare($sql);
            $stm -> bind_param('sisss',$name,$phone,$email,$pass,$confirm);
            if($stm->execute()){
                $user_id = $connection->$insert_id;
                $_SESSION['id'] = $user_id;
                $_SESSION['name'] = $name;
                $_SESSION['phone'] = $phone;
                $_SESSION['email'] = $email;
                $_SESSION['pass'] = $pass;
                $_SESSION['confirm'] = $confirm;
                $_SESSION['message'] = "You are now logged in";
                $_SESSION['alert-class'] = 'alert-succes';
                exit();
            }
        }
    }
?>