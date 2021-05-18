
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Contact Us </title>
    <style>
        *{
            padding:0px;
            margin:0px;
        }

        .container
        {
            max-width:40%; 
            padding: 34px; 
            position:fixed;
            margin-left:500px;
            margin-right:500px;
            top:100px;
            background-color:white;
            border-radius: 30px;
        }
        body
        {
            background: linear-gradient(to bottom, #66ffcc 0%, #ccff99 100%);
            background-size:cover;
            height:100vh;
        }
        h1
        {
            color:rgb(26, 219, 155);
            font-family: 'Josefin Sans', sans-serif;
        }

        input[type="text"]
        {
            padding:8px;
            margin:11px;
            size:15;
            border: 2px solid black;
            border-radius: 6px;
            outline: none;
        }
        .textarea
        {
            border: 2px solid black;
            border-radius: 6px;
            outline: none;
            font-size: 16px;
            margin: 8px 0px;
            padding: 8px;
        }
        label{
            font-size:20px;
            font-family: 'Pragati Narrow', sans-serif;
        }

        .btn{
            color: white;
            background: rgb(7, 168, 141);
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
            margin:auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="contact_act.php" method="post">
        <h1>GET IN TOUCH </h1>
        <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
        ?>

        <label for="fname">Enter your name </label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Enter your email </label>
        <input type="text" name="email" id="email" required><br>

        <label for="phn">Enter your phone</label>
        <input type="text" name="phone" id="phone" required><br>
        
        <label for="msg">Message</label><br>
        <textarea  class="textarea" name="msg" id="msg" rows="5" cols="35" id="message" required></textarea><br>
        <!--<input type="textarea" name="msg" id="msg">
         <input type="submit" name="btn" id="button" value="submit">-->
         <center><button name="submit" class="btn">Submit</center></button>

    </div>
   </form>
<script src="">
       //
    </script>
</body>
</html>
<!--body {
    text-align: center;
}
form {
    display: inline-block;
}-->