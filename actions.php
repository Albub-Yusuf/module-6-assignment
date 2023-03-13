<?php

if( ((isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['password']))) && (!empty($_POST['name'])   && !empty($_POST['email']) && !empty($_POST['password']))){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
  
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format";
    }else{

        echo "Welcome {$username} your email: {$email} & password: {$password}";
        // create upload folder if it does not exists
        $folder_name = "uploads/";
        if(!is_dir($folder_name)){
            mkdir($folder_name);
        }

        // Set unique file name add date,time with the file and Save profile picture to server
		$uploads_dir = "uploads/";
		$file_name = uniqid() . "_". date("YmdHis")."_". basename($_FILES["profile_picture"]["name"]);
		$file_tmp = $_FILES["profile_picture"]["tmp_name"];
		move_uploaded_file($file_tmp, $uploads_dir . $file_name);

       // store user data to CSV file
		$user_data = array($username, $email, $file_name);
		$file = fopen("users.csv", "a");
		fputcsv($file, $user_data);
		fclose($file);

        // Start session and set cookie
		session_start();
        echo $_SESSION['user'] = $username;

		setcookie("name", $username, time() + 60, "/");
        $rd = 1;
        header("Location:display.php?redirected=true");
    }

    
    


}else{

    echo "please fill out all the fields";

}