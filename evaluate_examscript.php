﻿<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="questionform.css">
    
     <style>
    
    body {
	/*background: #ffe4b7;
	font-family: "Lucida Console", "Courier New", monospace;*/

      background-image: url("background.jpg");
      background-size: cover;

    }


        ::placeholder{
          color:white;
        }

        ::-ms-input-placeholder{
          color:white;
        }

        :-ms-input-placeholder{
          color:white;
        }


header {
  position: relative;
  z-index: 1;
}

.menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  list-style: none;
}

.dropdown {
  position: relative;
}

.dropdown-toggle {
  display: block;
  color: #f2f2f2; /*bottom navbar letter colour*/
  text-decoration: none;
  padding: 10px;
  transition: background-color 0.2s ease;
}

.dropdown-toggle:hover {
  background-color: rgba(242,242,242, 0.27); /*drop down main button*/
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-image: url("background.jpg");
      background-size: cover;

  /*background-color: #923d60*/;/*drop down color*/
  padding: 10px;
  list-style: none;
  min-width: 100%;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu li a {
  display: block;
  color: #f2f2f2; /*drop down letter colour*/
  text-decoration: none;
  padding: 10px;
  line-height: 1.5;
}

.dropdown-menu li a:hover {
  background-color: rgba(242,242,242, 0.27); /*drop down hover*/
}
.navigation-container {

	box-shadow: 0 0 50px 2px rgba(242, 242, 242);
	border-radius: 20px;
  
	display: flex;
  	flex-direction: column;
	background-image: url("background.jpg")
  	/*background-color: #ffe4b7; Nav bar colour*/ 
	margin-top: 15px; 
	margin-left: 15px; 
	margin-right: 15px;
}

.top-nav, .bottom-nav {

	
	border-radius: 10px;

  display: flex;
  justify-content: center;
  padding: 10 px;

}

ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

li {
  margin-right: 20px;
}

a {
  color: #ffffff;
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
}

a:hover {
  text-decoration: underline;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  position: relative;
}

nav ul li a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #f2f2f2; /*Top and bottom letter colour*/
}

nav ul li ul {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  width: 200px;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
}

nav ul li:hover ul {
  display: block;
}

nav ul li ul li a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: #333;
}

nav ul li ul li a:hover {
  background-color: #f2f2f2;
}

</style>
</head>
<body>
<div class="navigation-container">
  <nav class="top-nav">
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="login.php">Logout</a></li>
    </ul>
  </nav>
  <nav class="bottom-nav">
       <ul>
	      <li><a href="add_exam.php">Add Exam</a></li>
	      <li><a href="view_exam.php">View Exam</a></li>
	      <li><a href="evaluate_examscript.php">Evaluate Exam Script</a></li>
    </ul>
  </nav>
</div>

      <form method="post">
      <div style="display:flex;justify-content:space-evenly;margin-top:50px;">
        
        <input type="text" style="background-color:#15449a;box-shadow: 0 0 20px 2px rgba(242, 242, 242);height:36px;cursor: pointer;border-radius: 5px;
           font-size: 14px;letter-spacing:2px;font-weight: bold;text-transform: uppercase;border: none;
           outline:none;text-align:center;color:white;width:250px;margin-top:0px;" 
           placeholder="Exam Name" name="examName"/>


      <select style="height: 35px;text-align:center;font-weight: bold; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase;background-color: #15449a;width:250px;margin-left:0px;margin-top:0px;" name="courseID" class="select">
     <option disabled selected>Course</option>
     <option value="CSC101">CSC101</option>
      <option value="EEE131">EEE131</option>
      <option value="ENG101">ENG101</option>
     </select>              

    <select style="height: 35px;text-align:center;font-weight: bold; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase;background-color: #15449a;width:250px;margin-left:0px;margin-top:0px;" name="sectionNum" class="select">
    <option disabled selected>Section</option>
    <option value="1">section-1</option>
    <option value="2">section-2</option>
    <option value="3">section-3</option>
    <option value="4">section-4</option>
    </select>  

    </div>  <!-- div row-1 ends here -->

  

    <!-- div row-2 starts here -->

    <div style="display:flex;justify-content:space-evenly;margin-top:50px;">

    <select style="height: 35px;text-align:center;font-weight: bold; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase;background-color: #15449a;width:250px;margin-left:0px;margin-top:0px;" name="semester" class="select">
       <option disabled selected>Semester</option>
       <option value="spring">spring</option>
       <option value="summer">summer</option>
       <option value="autumn">autumn</option>
     </select>              


    


     <select style="height: 35px;text-align:center;font-weight: bold; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase;background-color: #15449a;width:250px;margin-left:0px;margin-top:0px;" name="year" class="select">
       <option disabled selected>year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
     </select> 
     
     
    </div>


<div>
<input type="submit" style="background:#00BFFF;border-radius:10px;border:none;outline:none;color:#fff;font-size:14px;letter-spacing:2px;
              text-transform:uppercase;cursor:pointer;font-weight:bold;margin-top:100px;margin-bottom:50px ;margin-left:45%;height: 36px;width: 100px;" name="submit" value="Submit" class="submitButton">
</div>
    
   </form>    

   <?php
      if(isset($_POST['submit'])){
      $_SESSION['examName']=$_POST['examName'];
      $_SESSION['courseID']=$_POST['courseID'];
      $_SESSION['sectionNum']=$_POST['sectionNum'];
      $_SESSION['semester']=$_POST['semester'];
      $_SESSION['year']=$_POST['year'];

      header('location:answerScriptGrading.php');
      } 
  ?>  

  </body>

</html>