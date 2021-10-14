<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome in MTA India</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">


    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    body{
        background-color:white;
    }
    form{
        margin: 5%;
        border-radius: 15px;
        width:90%;
        text-align: left;
        padding: 10px;
        background-color: rgb(182, 182, 216);
        padding-bottom: 30px;
    }
    select,option{
        width: 80%;
        font-size: large;
    }
    input{
        width: 80%;
        font-size: large;
    }
    h2,h3{
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    #sub{
        height: 45px;
        width: 10%;
        background-color: rgb(64, 64, 238);
        margin-left: 10%;
        border-radius: 5px;
        color: white;
        box-shadow: 3px 3px rgb(34, 32, 32);
    }
   

    </style>
</head>
<body>
 <?php include('homeheader.php');?>
 
  <center>
<form action="studentregister.php" method="post">
     <center><span><h2>Register Page</h2>
     </span></center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">
            <div class="form-group">
            <label for="program">Program</label>
                <select name="program" id="" class="form-control" Required>
                    <option value="-1">--select Program--</option>

                    <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `registerprogram`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>


                <option value="<?php echo $column[1]; ?>"><?php echo $column[1]; ?></option>
                <?php
                }
                ?>
            </select>
            </div>
            </div>
            <div class="col-md-3 "><label for="selectlocation">Select location</label>
                <select name="location" id="" class="form-control">
                    <option value="-1">--select location--</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Noida">Noida</option>
                    <option value="Hyderabad">Hyderabad</option>
                            <option value="Vishakapatnam">Vishakapatnam</option>
                            <option value="Guwahati">Guwahati</option>
                            <option value="Bengaluru">Bengaluru</option>
                            <option value="Dehradun">Dehradun</option>
                            <option value="Lucknow">Lucknow</option>
                            <option value="Raipur">Raipur</option>
                            <option value="Patna">Patna</option>
                            <option value="Kanpur">Kanpur</option>
                            <option value="Ghaziabad">Ghaziabad</option>
                        </select></div>
                        <div class="col-md-3 "><label for="selecttechnology">Select Technology</label>
                            <select name="technology" id="" class="form-control" Required>
                                <option value="-1">--select technology--</option>

                                <?php
        
        // include('config.php');
 $execute = "SELECT * FROM `selecttechnology`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>                   



                                <option value="<?php echo $column[1]; ?>"><?php echo $column[1]; ?></option>
                               <?php
                               }
                               ?>
                            </select></div>
                            <div class="col-md-3"><label for="batch">Batch</label>
                                <select name="batch" id="" class="form-control" Required>
                                    <option value="-1">--select batch--</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select></div>
                            </div>
                            <br>
                    <div class="row">
                        <div class="col-md-4 "><label for="fullname">Full Name</label>
                        <input type="text" name="name" id="" class="form-control" Required></div>
                        <div class="col-md-4 "><label for="username">Username</label>
                                <input type="text" name="userid" id="" class="form-control" Required></div>
                            <div class="col-md-4 "><label for="password">Password</label>
                                <input type="password" name="password" id="" class="form-control" Required></div>
                            </div>
                            
                            <br>
                            <div class="row">
                                <div class="col-md-4 "><label for="gender">Gender</label>
                                    <select name="gender" id="" class="form-control" Required>
        <option value="-1">--select--</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select> </div>
    <div class="col-md-4 "><label for="email">Email</label>
        <input type="email" name="email" id="" placeholder="abc@xyz.com" class="form-control " Required></div>
    <div class="col-md-4 "><label for="program">Contact no</label>
        <input type="text" name="contact" id="" maxlength="10" class="form-control" Required></div>
    </div>
<br>
<div class="row">
    <div class="col-md-4 "><label for="dateofbirth">Date Of Birth</label>
        <input type="date" name="dob" id="" class="form-control" Required></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 "> <label for="selectstate">Select State</label>
            <select name="state" id="" class="form-control" Required>
                <option value="-1">--select state--</option>
                <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                <option value="Utrakhand">Utrakhand</option>
                <option value="Punjab">Punjab</option>
                <option value="Goa">Goa</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Tamil nadu">TamilNadu</option>
                <option value="Manipur">Manipur</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Bihar">Bihar</option>
                <option value="Sikkim">Sikkim</option>
            </select></div>
            <div class="col-md-4 "><label for="selectcity">Enter City</label>
               <input type="text" name="city" class="form-control" Required>  </div>
                <div class="col-md-4 "><label for="university">University</label>
                    <input type="text" name="university" id="" placeholder="Enter University Name" class="form-control" Required></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 "><label for="college">College</label>
                        <input type="text" name="college" id="" placeholder="Enter College Name" class="form-control" Required></div>
                        <div class="col-md-4 "> <label for="program">Select Course</label>
                            <select name="course" id="" class="form-control" Required>
                                <option value="-1">--select--</option>
                                <option value="B.SC">B.Sc IT</option>
                                <option value="B.Tech">B.Tech</option>
                                <option value="M.Tech">M.Tech</option>
                                <option value="MCA">MCA</option>
                                <option value="B.Sc">B.Sc</option>
                                <option value="M.Sc">M.Sc</option>
                                <option value="B.E">B.E</option>
                                <option value="Diploma">Diploma</option>
                                <option value="B.Com">B.Com</option>
                                <option value="B.Pharm">B.Pharm</option>
                                <option value="M.B.A">M.B.A</option>
                            </select></div>
                            <div class="col-md-4 "><label for="branch">Branch</label>
                                <input type="text" name="branch" id="" placeholder="Enter Branch Name" class="form-control" Required></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4 "><label for="semester">Semester</label>
                                    <select name="semester" id="" class="form-control" Required>
                                        <option value="-1">--select--</option>
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
                                    </select></div>
                                    <div class="col-md-4 "><label for="passingyear">Passing Year</label>
                                        <select name="passingyear" id="" class="form-control" Required>
                                            <option value="-1">--select--</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select></div>
                        <div class="col-md-4 "> <label for="howfind">How did you find Us ?</label>
                            <select name="find" id="" class="form-control" Required>
                                <option value="-1">--select--</option>
                                <option value="College">College</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Friends">Friends</option>
                                <option value="Student Of MTA">Student Of MTA</option>
                            <option value="Newspaper">Newspaper</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Google">Google</option>
                            <option value="Other Social Sites">Other Social Sites</option>
                            <option value="Internet Advertisement">Internet Advertisement</option>
                        </select></div>
                    </div>
                    
                </div>
                <div class="row">
                <div class="col-md-1">
                <input type="checkbox" name="check" id="check" class="checkbox" Required>
                 </div>
                 <div class="col-md-11">
                 <font color="red">* I have read the disclaimer and accepted the terms and conditions. I hereby subscribe to Email / SMS updates and offers.</font>
                </div>
                </div>
                <br>
                <input  type="Submit" name="sub" id="sub" value="Submit">
            </form>
        </center>
            


<?php include('homefooter.php');?>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>