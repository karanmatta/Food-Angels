<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


</head>

<body style="background-color:#06C167; ">
    <header>
        <div class="logo">Food<b style="color: #06C167;">Angels</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="fooddonate.html">Donate</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="signin.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function () {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>

    <div class="container">
        <span style="display: flex; justify-content: center;">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_y7qo8rnh.json" background="transparent"
                speed="1" style="width: 250px; height: 170px;" loop autoplay></lottie-player>
        </span>
        <div class="regform">

            <form action="reg.php" method="post">
                <p class="logo">Food <b style="color: #06C167;">Donate</b></p>

                <p id="heading">Create your account</p>

                <div class="input">
                    <label class="textlabel" for="name">User name</label><br>

                    <input type="text" id="name" name="name">
                </div>
                <div class="input">
                    <label class="textlabel" for="email">Email</label>
                    <input type="email" id="email" name="email">

                    <label class="textlabel" for="phoneno">Phone no</label>
                <input type="text" id="phoneno" name="phoneno" >

                </div>
                <label class="textlabel" for="password">Password</label>
                <div class="password">

                    <input type="password" name="password" id="password">
                    
                    <i class="bi bi-eye-slash" id="showpassword"></i>


                </div>

                <div class="radio">

                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>

                </div>
                <div class="btn" style="padding-bottom: 10px;">
                    <button type="submit" name="sign">Continue</button>
                </div>

                <!-- <button type="submit" style="background-color:white ;color: #000; margin-top:5px;  padding: 10px 25px;">
                 <img src="google.svg" style="width:22px" >
                 Continue With  Google </button>  -->

                <div class="signin-up">
                    <p style="font-size: 20px; text-align: center;">Already have an account? <a href="signin.html"> Sign
                            in</a></p>
                </div>


            </form>
        </div>
        <!-- <div class="right">
            <img src="cover.jpg" alt="" width="800" height="700">
        </div> -->

    </div>


    <script src="login.js"></script>

</body>

</html>