<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    if (empty($_POST["submit"])) {
        echo "Could not insert data!";
    } else {
        $file = fopen("storage/users.csv", "a");
        $srt="fullname:".$name."~Email:".$email . "~password:".$password;// create your string 
        echo fwrite($file, $srt);
        fclose($file);
    
        echo "User Successfully Registered";
    }
}
echo "User Successfully Registered";


