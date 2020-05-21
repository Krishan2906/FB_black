<?php 
require 'connect.php';

$create='CREATE TABLE details(FirstName varchar(20),LastName varchar(20),Email varchar(50) PRIMARY KEY,Passcode varchar(20),DOB date,Gender varchar(1));';
if($conn->query($create)===true){
//  echo "created";
}
else{
// echo "error: ".$conn->error;
}
?>


<html>
    <head>
        <title>FaceBook</title>
        <link rel="icon" href="url">
        <link rel='stylesheet' href="css/style.css" type="text/css">
    </head>
    <body>
        <div class="Navigator">
            <div class="title"> <b>facebook</b></div>
            <div class="login">
                <form action="user.php" method="get">
                <div class="label"><label>Email or phone</label>
                <label>Password</label></div><br>
                <div class="input"><input type="text" name="user" required><input type="password" name="password" required>
                <button>Login</button><br></div>
                <div class="recovery">Forgotten Password?</div>
                </div>
                </form>
            </div>
        </div>

        <div class="main">

            <div class="image"><img src="/learning/Project1/images/indexpage.png"></div>
            <div class="signup">
                <h1>Create an account</h1>
                <h3>It's quick and easy</h3>
                <form action="welcome.php" method="post">
                <section class="details">
                <div class="name"><input type="text" name="fname" placeholder="First Name" required> <input type="text" name="lname" placeholder="Last Name" required></div>
                <div class="mno"><input type="text" name="mail" placeholder="Email" required></div>
                <div class="pass"><input type="password" name="password" placeholder="Password" required></div>
                </section>

                <br>
                <span>Birthday</span>
                <div class="date">
                <select class="day" name="day">
                    <option>Day</option>
                    <option value = "1">1</option><option value = "2">2</option><option value = "3">3</othreeption><option value = "4">4</option><option value = "5">5</option>
                    <option value = "6">6</option><option value = "7">7</option><option value = "8">8</option><option value = "9">9</option><option value = "10">10</option>
                    <option value = "11">11</option><option value = "12">12</option><option value = "13">13</option><option value = "14">14</option><option value = "15">15</option>
                    <option value = "16">16</option><option value = "17">17</option><option value = "18">18</option><option value = "19">19</option><option value = "20">20</option>
                    <option value = "21">21</option><option value = "22">22</option><option value = "23">23</option><option value = "24">24</option><option value = "25">25</option>
                    <option value = "26">26</option><option value = "27">27</option><option value = "28">28</option><option value = "29">29</option><option value = "30">30</option>
                </select>
                <select name="month">
                    <option>Month</option>
                    <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option>
                    <option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                </select>
                <input class="year" type="number" placeholder="Year" name="year">
                </div>
                
                <br>
                <span>Gender</span><br><br>
                <section class="genders">
                <input type="radio" id="male" name="gender" value="M">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="F">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="O">
                <label for="other">Other</label>
                </section>
                <br>
                <button type="submit" class="submit">Sign Up</button>
                </form>
            </div>
        </div>
        <div class="dltacc">
        Delete my account
        </div>

    </body>
</html>
