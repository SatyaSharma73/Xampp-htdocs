

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Signin Page</title>

    <style>
        .container
        {
            width:30%;
            margin:auto;
            padding:20px;
            border-radius: 10px;
            background-color: rgb(208, 243, 243);
            opacity: 0.6;
            position:fixed;
            top:25%;
            left:32%;
        }

        h1
        {
            font-family: 'Roboto', sans-serif; 
            letter-spacing: 3px; 
            position:absolute;
            top:70px;
            left:520px;
    
        }
        input[type= text],input[type=password]
        {
            border: 2px solid black;
            border-radius: 6px;
            outline: none;
            font-size: 16px;
            width: 90%;
            margin: 11px 10px;
            padding: 7px;
        }
        input[type=checkbox]
        {
            font-size:12px;
            padding:7px;
        }
        .btn
        {
            width:80%;
            background-color:rgb(118, 107, 218);
            color: white;
            padding:10px;
            border: none;
            margin: 20px 30px;
            font-size:20px;
            
        }
        /* body
        {  
            width:50%;
            background-image:url(ticket.jpg);
        }*/
    </style>
</head>
<body>

<marquee behavior="scroll" direction="left" scrollamount="25">
        <img class="img" src="poster.jpeg" width="100%">
        <img class="img" src="poster.jpeg" width="100%">
        <img class="img" src="poster.jpeg" width="100%">
        
    </marquee>
    <form action="login_act.php" method="post">
	<h1 style="{text-align:center,padding-top:0;}">Heading</h1>
       <center><h2> SIGN IN HERE </h2></center> 
        <div class="container">

            <!--<i class="fa fa-id-card"></i>-->
            <input type="text" name="name" id="name" placeholder=" Fullname">

            <!--<i class="fa fa-user" aria-hidden="true"></i>-->
            <input type="text" name="email" id="email" placeholder=" Email Address">
            
            <!--<i class="fa fa-lock"></i>-->
            <input type="password" name="password" id="password" placeholder=" Password ">

            <br>
            <input type="checkbox" name="ckbox" id="ckbox">  Keep me signed in
            <button name ="submit" class="btn">LOG IN </button>
    </form>
        </div>
    <script src="">
       //
    </script>
</body>
</html>