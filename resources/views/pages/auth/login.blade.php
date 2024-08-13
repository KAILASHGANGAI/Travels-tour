<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    @include('includes.links')
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.signup-container {
    padding: 30px;
    border-radius: 10px;
    width: 400px;
    text-align: center;
    background-color: #f39c12;

    background-image: 
    linear-gradient(rgba(243, 156, 18, 0.7), rgba(243, 156, 18, 0.7)), 
    url({{ asset('web/images/bg/e1386ef8-db01-43aa-a7c9-b84819d815cd.jpg') }});
    background-size: cover;
}

.signup-box h2 {
    font-size: 18px;
    color: #6e5046;
    margin-bottom: 10px;
}

.signup-box p {
    font-size: 14px;
    color: #6e5046;
    margin-bottom: 20px;
}

.signup-box input,
.signup-box input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.signup-box button {
    background-color: #e74c3c;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

.signup-box button:hover {
    background-color: #c0392b;
}

.w-100{
    width: 100%;
}

</style>
<body>
    <div class="signup-container">
        <div class="signup-box">
            <h2 class="text-white fw-bold">Sign up for BREATHE DREAM GO DISPATCHES and get inspiration to live your travel dreams.</h2>
            <p class="text-white">Sign up now and get a free copy of SONG OF INDIA.</p>
            <div>
                <form action="#">
                    <input class="form-control w-100" type="email" name="email" placeholder="Email">
                    <input class="form-control w-100" type="password" name="password" placeholder="Password ">
                    <button class="w-100" type="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
