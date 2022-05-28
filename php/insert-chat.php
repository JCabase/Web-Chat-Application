<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $img_name_chat = $_FILES['image']['name'];
        $img_type_chat = $_FILES['image']['type'];
        $tmp_name_chat = $_FILES['image']['tmp_name'];


        $img_explode = explode('.', $img_name_chat);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true){
            $types =  ["image/jpeg", "image/jpg", "image/png"];
            if(in_array($img_type, $types) === true){
                $ran_img = rand(time(), 100000);
            }
        }

        //ENCRYPT MESSAGE
        $ciphering = "AES-128-CTR";
        $iv_len = openssl_cipher_iv_length($ciphering);
        $options = 0;

        $encryption_iv = '1234567891011121';
        $encryption_key = "GeeksforGeeks";

        $encryption = openssl_encrypt($message, $ciphering,
            $encryption_key, $options, $encryption_iv);



        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$encryption}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>