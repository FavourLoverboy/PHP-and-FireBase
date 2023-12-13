<?php
    session_start();
    include('includes/config.php');
    if(isset($_POST['save_push_data'])){
        extract($_POST);

        $data = [
            'username' => $username,
            'email' => $email,
            'phone' => $phone
        ];

        // $postData = $database->getReference('contact')->set($data);
        // $postData = $database->getReference('contact')->update($data);
        $postData = $database->getReference('contact')->push($data);

        if($postData){
            $_SESSION['status'] = "Data Inserted Successfully";
            header("Location: index.php");
        }else{
            $_SESSION['status'] = "Data Not Inserted, Something went wrong";
            header("Location: index.php");
        }
    }

?>