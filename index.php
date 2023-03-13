<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-6</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-body{
            width: 500px;
            height: 400px;
            border: 2px solid grey;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 10px 10px 20px grey;
        }
        .form-body h3{
            text-align: center;
            padding: 20px;
        }
        label {
  
            font-weight: bold;
            width: 130px;
            float: left;

        }


        input {
        padding: 5px;
        font-size: 14px;
        font-weight: 600;
        width: 300px;
        
        }

        #submit{
            text-align: center;
            margin: 0 auto;
            width: 100%;
            height: 50px;
        }



    </style>
</head>
<body>
    <div class="container">
        <div class="form-body">
            <h3>Enter User Information</h3>
            <hr><br>
            <form action="actions.php" method="POST" enctype="multipart/form-data">
                <label for="name">Name: </label>
                <input type="text" name="name" placeholder="Enter your name..." ><br><br>
                <label for="email">Email: </label>
                <input type="text" name="email" placeholder="Enter your email..." required><br><br>
                <label for="password">Password: </label>
                <input type="password" name="password" placeholder="Enter your password..." required><br><br>
                <label for="profile_picture">Profile Picture</label>
                <input type="file" name="profile_picture" accept="image/*" required><br><br><br><br>
                <input type="submit" value="Submit" id="submit">
            </form>
        </div>
    </div>
</body>
</html>