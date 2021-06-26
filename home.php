<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS_NEW</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="navbar">
        <a class="active" id="brand" href="#"><img src="GreenPeace.svg" class="brandIcon" alt=""></i>GreenPeace</a>
        <a href="About.php" class="nav-link"><i class="fa fa-fw fa-info"></i> About Us</a>
    </div>
    <div class="centered">
        <h1 style="margin-bottom: 0px;">Let's Get Started</h1>
        <hr id="newHr">
        <button class="mButtons" id="login" onclick="">Login</button>
        <button class="mButtons" id="signup" onclick="/chairty_proj/signup.php">Signup</button>
    </div>
    <img src="children.jpg" class="happy" alt="Happiness">

    <footer>
        <div class="footer-content">
            <div class="left-col">
                <img src="GreenPeace.svg" alt="" class="charity" style="width: 50px; height: 50px; padding-top: 90px;">
                <ul style="list-style: none; padding-left: 0;">
                    <li style="margin-bottom:15px" class="aboutList"><a href="#"><b>GreenPeace</b></a></li>
                    <li class="aboutList"><a href="About.php">Info</a></li>
                    <li class="aboutList"><a href="#">Blog</a></li>
                    <li class="aboutList"><a href="#">Services</a></li>
                </ul>
                
            </div>
            <div>
                <h1 style="color: #1E212D;">KNOW US</h1>
                <p>GreenPeace is an interaactive web application for all the NGOs to host funds and for<br>people who want to contribute to society</p> 
            </div>
            <div class="right-col">
                <h1>CONNECT WITH US</h2>
                <a href="#" class="fa fa-twitter" style="margin: 10px;color: #cc2d43; font-size: 15pt"></a>
                <a href="#" class="fa fa-facebook" style="margin: 10px;color: #cc2d43; font-size: 15pt"></a>
                <a href="#" class="fa fa-instagram" style="margin: 10px;color: #cc2d43; font-size: 15pt"></a>
                <a href="#" class="fa fa-google" style="margin: 10px;color: #cc2d43; font-size: 15pt"></a>
            </div>
        </div>
        <p class="right-text">&copy; 2021 created by GP Foundation</p>
    </footer>
    <script>
        const loginButton = document.getElementById("login");
        loginButton.addEventListener("click",()=>{
            window.location.href="login_1.php";
        })

        const signupButton = document.getElementById("signup");
        signupButton.addEventListener("click",()=>{
            window.location.href="signup.php";
        })
    </script>
</body>
</html>