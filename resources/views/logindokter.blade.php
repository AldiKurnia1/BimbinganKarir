<html>
<head>
    <title>Poliklinik Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e9ecef;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .login-container h1 span {
            font-weight: normal;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
            width: calc(100% - 40px);
        }
        .login-container .input-group {
            display: flex;
            align-items: center;
            position: relative;
        }
        .login-container .input-group i {
            position: absolute;
            right: 10px;
            color: #6c757d;
        }
        .login-container .error-message {
            color: red;
            font-size: 12px;
            margin-bottom: 10px;
        }
        .login-container .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .login-container .remember-me input {
            margin-right: 5px;
        }
        .login-container button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Poli<span>klinik</span></h1>
        <p>Sign in</p>
        <form>
            <div class="input-group">
                <input type="text" placeholder="AdiDok" required>
                <i class="fas fa-envelope"></i>
            </div>
            <div class="input-group">
                <input type="password" placeholder="********" required>
                <i class="fas fa-lock"></i>
            </div>
            <p class="error-message">Username dan Password Tidak Cocok</p>
            <div class="remember-me">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>