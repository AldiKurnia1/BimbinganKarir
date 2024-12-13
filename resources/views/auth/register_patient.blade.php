<html>
<head>
    <title>Poliklinik Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .container h1 span {
            color: #007bff;
        }
        .container p {
            margin-bottom: 20px;
            color: #6c757d;
        }
        .form-group {
            margin-bottom: 15px;
            position: relative;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            padding-right: 40px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .form-group i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }
        .form-group label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #495057;
        }
        .form-check {
            text-align: left;
            margin-bottom: 15px;
        }
        .form-check input {
            margin-right: 5px;
        }
        .form-check label {
            color: #495057;
        }
        .form-check a {
            color: #007bff;
            text-decoration: none;
        }
        .form-check a:hover {
            text-decoration: underline;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .login-link {
            margin-top: 10px;
            display: block;
            color: #007bff;
            text-decoration: none;
        }
        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Poli<span>klinik</span></h1>
        <p>Register a new account</p>
        <div class="form-group">
            <input type="text" placeholder="Full name">
            <i class="fas fa-user"></i>
        </div>
        <div class="form-group">
            <input type="text" placeholder="alamat">
            <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="form-group">
            <input type="text" placeholder="No ktp">
            <i class="fas fa-id-card"></i>
        </div>
        <div class="form-group">
            <input type="text" placeholder="NO HP">
            <i class="fas fa-phone"></i>
        </div>
        <div class="form-check">
            <input type="checkbox" id="terms">
            <label for="terms">I agree to the <a href="#">terms</a></label>
        </div>
        <button type="submit" class="btn">Register</button>
        <a href="#" class="login-link">already have an account?</a>
    </div>
</body>
</html>