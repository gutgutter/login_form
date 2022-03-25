<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleRegister.css">
     
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login here</h2>
                    <form action="validation.php" onsubmit="return validate()" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="user" class="form-control" requied>

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" requied>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2>Register here</h2>
                    <form id="account-form" action="registration.php" 
                    onsubmit="return register()" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="user" 
                            class="form-control" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" 
                            name="password" class="form-control" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" id="confirmPassword" 
                            name="confirmPassword" class="form-control" 
                            required>
                            <div id="alert"></div>
                            
                        </div>
                        <div class="buttons">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            function register() {
                var name = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;
  
                if (name.value == "") {
                    window.alert("Please enter your name.");
                    name.focus();
                    return false;
                }
  
                if (password.value == "") {
                    window.alert("Please enter your password.");
                    password.focus();
                    return false;
                }
  
                if (confirmPassword.value == "") {
                    window.alert(
                      "Please enter your confirm password.");
                    confirmPassword.focus();
                    return false;
                }
    
                if(password != confirmPassword) {
                    window.alert("Passwords do not match.")
                    return false
                } else {
                    return true;
                }                
            }

            function validate() {
                var name = document.getElementById("username").value;
                var password = document.getElementById("password").value;

                if (name.value == "") {
                    window.alert("Please enter your name.");
                    name.focus();
                    return false;
                } else if (password.value == "") {
                    window.alert("Please enter your password.");
                    password.focus();
                    return false;
                } else {
                    return true;
                }

            }
                    
    </script>
</body>

</html>