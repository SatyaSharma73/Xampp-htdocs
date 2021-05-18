<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>Welcome</title>
    <style>

        *
        {
            margin:0;
            padding:0;
            font-family:'Poppins',sans-serif;
    
        }

        #banner
        {
            background: linear-gradient(rgba(0,0,0,0.5),#009688),url(banner.jpg);
            background-size: cover;
            background-position: center;
            height:100vh;
        }

        .banner-text
        {
            text-align:center;
            color:#fff;
            padding-top:180px;
        }

        .banner-text h1
        {
            font-size:80px;
            font-family: 'Kaushan Script', cursive;
        }

        .banner-text p{
            font-size:25px;
            font-style:italic;
        }
        .banner-btn
        {
            margin:50px auto 0;
        }
        .banner-btn a{
            width:150px;
            text-decoration:none;
            display:inline-block;
            margin: 0 10px;
            padding: 10px 0;
            color:white;
            border: .5px solid #fff;
        }
    </style>

</head>
<body>
    <section id="banner">
    <div class="banner-text">
        <h1> MOVIEBOOK</h1>
        <p> Welcome to moviebook. </p>
        <p>It is a online movie ticket booking portal. </p>
        <p>Booking movie tickets have been made easy </p>
        <div class="banner-btn">
            <a href="home.php"> Return to home screen</a>
    
        </div>
    </div>
    </section>
</body>
</html>