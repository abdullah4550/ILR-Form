<html>
    
    

    <head>
        
        <link rel="stylesheet" href="Test.css"> 
        <title>ILR Form</title>
     
    </head>
    
    
    
    <body>
        
        
      <!-- top navigation -->
        <div class="topnav">
            
              <a class="active" href="index-studentdb.php">Student Database</a>
              <a href="index-addStudent.php">Add a new student</a>
              <a href="index-search.php">Search for Student</a>
              <a href="index-updateStudent.php">Update Student</a>
              <a href="index-addStudent.php">New</a>
              <a href="index-addStudent.php">New</a>
              <a href="index-addStudent.php">New</a>
              <a href="index-addStudent.php">Settings</a>
              <a class="logOut" href="index-signIn.php?logout=1">Logout</a>
            
        </div>
         
            
        
         <!-- LRC logo -->
        <img src="LRCLogo.png" alt="Logo" style="width:200px;height:80px;">
        
        
        <header>
            
                <h1>Chemistry Department</h1><br> 
                <h2>Undergraduate Individual Learning Record</h2>
            
        </header>
        
        
        <h2 id="title">Updating Students</h2> 
        
        
        <div id="form-div1">
        
          <form method="post">

                <br>ID To Update: <input type="text" name="UniqueID" ><br><br>

                Updated First Name:<input type="text" name="FirstName" ><br><br>

                Updated Last Name:<input type="text" name="LastName" ><br><br>

                Updated Major:<input type="text" name="Major" ><br><br>
              
                Updated Semester:<input type="text" name="Semster" ><br><br>
              
                Updated Year:<input type="text" name="Year" ><br><br>

                <input type="submit" name="update" value="Update Data">

            </form>
          
        </div>
        
    <body>
    
<html>
        
    


<?php

// php code to Update data from mysql database Table

    if(isset($_POST['update'])){

           $hostname = "localhost";
           $username = "ILRdb";
           $password = "";
           $databaseName = "ILRdb";

           $connect = mysqli_connect($hostname, $username, $password, $databaseName);

           // get values form input text and number

           $id = $_POST['UniqueID'];
           $fname = $_POST['FirstName'];
           $lname = $_POST['LastName'];
           $major = $_POST['Major'];
           $semester = $_POST['Semster'];
           $year = $_POST['Year'];

           // mysql query to Update data
            $query = "UPDATE `Students` SET `FirstName`='".$fname."',`LastName`='".$lname."',`Major`='".$major."',`Semster`='".$semester."',`Year`='".$year."' WHERE `UniqueID` = $id";
        
           $result = mysqli_query($connect, $query);

        
           if($result){
               
                echo '<script type="text/javascript">alert("Student data is updated");</script>';
               
           } else {
               
               echo 'Data Not Updated';
               
           }
           mysqli_close($connect);
    }

?>