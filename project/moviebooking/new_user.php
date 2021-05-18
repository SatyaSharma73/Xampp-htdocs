
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Sign Up </title>
    <style>
        .container
        {
            width:30%;
            margin:auto;
            padding:20px;
            border-radius: 10px;
            background-color: rgb(49, 247, 165);
            opacity: 0.8;
            position:fixed;
            top:22%;
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
        input[type= text],input[type=password],input[type=email]
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
            background-color:rgb(241, 232, 99);
            color: white;
            padding:10px;
            border: none;
            margin: 20px 30px;
            font-size:20px;
            
        }
        .img{
            opacity:0.4;
        }
    </style>
</head>
<body>
    <form action="signup_act.php" method="post">
        <center><h1> SIGN UP HERE </h1></center> 
         <div class="container">
            
             <!--<i class="fa fa-id-card"></i>-->
             <input type="text" name="name" id="name" placeholder=" Fullname" required>
 
             <!--<i class="fa fa-user" aria-hidden="true"></i>-->
             <input type="email" name="email" id="email" placeholder=" Email Address" required>
             
             <!--<i class="fa fa-lock"></i>-->
             <input type="password" name="password" id="password" placeholder=" Password " required>
 
             <input type="password" name="password" id="password" placeholder="  Confirm Password " required>
            
             
             <button name= "submit" class="btn"> SIGN UP </button>
     </form>
         </div>

    
</body>
</html>