<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to UEM KOLKATA</title>
    <link rel="stylesheet" href="style.css" />
    <script src="./JSLink/Booking.js"></script>
    
  <script src="./JSLink/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="main">
      <div class="register">
        <h3>BOOK YOUR SEAT HERE</h3>
        <!--<p class="submitmsg">thanks for filling out the form</p>-->

        <form action="booking_act.php" method="post">
          <label>Your name</label>
          <br />
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Enter your name here: "
          />
          <br /><br />
          <label>Your age</label>
          <br />
          <input
            type="text"
            name="age"
            id="age"
            placeholder="Enter your age here: "
          />
          <br /><br />
          <label>Your contact number</label>
          <br />
          <input
            type="phone"
            name="phone"
            id="phone"
            placeholder="Enter your phone number here: "
          />
          <br /><br />
          <label>Date</label>
          <br />
          <input type="date" name="date" id="date" />
          <br /><br />
          <label>Time</label>
          <br />
          <select id="time" name="time">
            <option value="9to12">9:00 am to 12:00 pm</option>
            <option value="1to4">1:00 pm to 4:00 pm</option>
            <option value="5to8">5:00 pm to 8:00 pm</option>
            <option value="8to11">8:00 pm to 11:00 pm</option>
          </select>
          <br /><br />
          <label>Column</label>
          <br />
          <select id="columns" name="columns">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select>
          <br /><br />
          <label>Row</label>
          <br />
          <select id="rows" name="rows">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
          </select>
          <br /><br />
          <input type="submit" value="book now" name="submit" id="submit">
          <br><br>
          <input type="reset" value="reset" name="reset" id="reset">
        </form>
      </div>
    </div>
    <br>
    <img src="seatingplan.jpg" alt="" class="center">
    <br><br>
    <script src="index.js"></script> -->

    <!---->
  </body>
</html>
