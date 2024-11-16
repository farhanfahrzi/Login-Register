<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php

        include("database/config.php");
        if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $verify_query = mysqli_query ($con,"SELECT Email FROM users WHERE Email='$email'");
        if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                    <p>This email is used, Try another One Please! </p>
                </div> <br>";
            echo "<a href='Javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
            else{
                mysqli_query ($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$hashed_password')") or die("Error Occured");
                echo "<div class='message' >
                        <p>Registration Succesfully</p>
                    </div> <br>";
                echo "<a href='index.php'><button class='btn'>Login Now</button>";
                    
            }
        }else{
        ?>
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    <img src="https://as1.ftcdn.net/v2/jpg/05/91/81/98/1000_F_591819872_JmdnpNAxXtLFxpmnNupZbuZbZAjijuWz.jpg" 
                         alt="Show Password" 
                         class="pass-icon" 
                         id="pass-icon">
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register"required>
                </div>

                <div class="links">
                    Already a member ? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    <script src="js/script.js"></script>
</body>
</html>