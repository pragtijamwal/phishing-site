<!DOCTYPE html>
<html>
<head>
    <title>Bank of America</title>
    <style>
        body {
            background-color: #f2f2f2;
        }
        #form-container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .toggle-link {
            text-align: center;
            margin-top: 10px;
            cursor: pointer;
            color: #007BFF;
        }
    </style>
    <script>
        function login(event) {
            event.preventDefault(); // Prevent the form from submitting

            var username = document.getElementById('login-username').value;
            var password = document.getElementById('login-password').value;

            // Retrieve stored username and password from local storage
            var storedUsername = localStorage.getItem('username');
            var storedPassword = localStorage.getItem('password');

            // Check if the entered credentials match the stored ones
            if (username === storedUsername && password === storedPassword) {
                // Redirect to the message page
                window.location.href = 'message.html';
            } else {
                alert("Invalid username or password.");
            }
        }

        function toggleForms() {
            var signupForm = document.getElementById('signup-form');
            var loginForm = document.getElementById('login-form');
            if (signupForm.style.display === "none") {
                signupForm.style.display = "block";
                loginForm.style.display = "none";
            } else {
                signupForm.style.display = "none";
                loginForm.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <div id="form-container">
        <div id="signup-form">
            <h2>Sign Up</h2>
            <form action="signup.php" method="POST">
                <input type="text" id="signup-username" name="username" placeholder="Create Username" required>
                <input type="password" id="signup-password" name="password" placeholder="Create Password" required>
                <input type="submit" value="Sign Up">
            </form>
            <div class="toggle-link" onclick="toggleForms()">Already have an account? Log in</div>
        </div>

        <div id="login-form" style="display:none;">
            <h2>Login</h2>
            <form onsubmit="login(event)">
                <input type="text" id="login-username" placeholder="Username" required>
                <input type="password" id="login-password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
            <div class="toggle-link" onclick="toggleForms()">Don't have an account? Sign up</div>
        </div>
    </div>
</body>
</html>
