<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(../images/67.jpg); height: 100vh; background-size: cover; background-position: center;">

<div class="container">
    <div class="col-md-12">
        <div class="login_page">
            <div class="form">
                <form class="register_form" method="POST" action="registration.php">
                    <input type="text" placeholder="Username" name="registerUsername">
                    <input type="password" placeholder="Password" name="registerPassword">
                    <input type="email" placeholder="Email" name="registerEmail">
                    <div style="margin-bottom: 9px;">
                        <textarea name="bio_id" placeholder="Tell us about yourself" rows="13" cols="35" maxlength="500"></textarea>
                    </div>
                    <button type="submit">Create</button>
                    <p class="message">Already Registered? <a href="#" onclick="toggleForms()">Login</a></p>
                </form>
                <form class="login_form">
                    <input type="text" placeholder="Username" id="loginUsername">
                    <input type="password" placeholder="Password" id="loginPassword">
                    <button type="button" onclick="login()">Login</button>
                    <p class="message">Not Registered? <a href="#" onclick="toggleForms()">Register Now!</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function toggleForms() {
        $(".form").toggleClass("register_form");
    }

    // Implement your login logic here
    // For demonstration, use simple credentials
    function login() {
        var username = $("#loginUsername").val();
        var password = $("#loginPassword").val();

        if (username === "user" && password === "pass") {
            alert("Login successful!");
            window.location.href = "Dashboard.html"; // Redirect to dashboard page
        } else {
            alert("Login failed. Invalid credentials.");
        }
    }
</script>

<style>
    .login_page {width: 360px; padding: 10% 0 0; margin: auto;}
    .form {position: relative; z-index: 1; background: rgba(7, 40, 195, 0.8); max-width: 360px; margin: 0 auto 100px; padding: 45px; text-align: center; border-radius: 6px;}
    .form input {font-family: "Roboto", Sans-serif; outline: 1; width: 100%; border: 0; margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px; border-radius: 2px;}
    .form button {font-family: "Roboto", Sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50; width: 100%; border: none; border-radius: 4px; padding: 15px; color: #fff; font-size: 14px; cursor: pointer;}
    .form button:hover, .form button:active {background: #43A047;}
    .form .message {margin: 15px 0 0; color: aliceblue; font-size: 16px;}
    .form .message a {color: #4CAF50; text-decoration: none;}
    .form .register_form {display: none;}
</style>
</body>
</html>
