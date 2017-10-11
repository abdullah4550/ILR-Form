<!--this file is the php file for searching a student by id in the db.-->

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
        
        
        <h2 id="title">Search for student</h2> 
        
    
        <div id="form-div1">
            
            <form method="post">

                <!-- these are the 3 required text field to search for a student-->
                <p><strong>Unique ID:</strong> <input name="ID" type="text" required placeholder="student unique ID">
   
                    
                    
             <!--   <form method="POST" action="index.php" enctype="multipart/form-data">
                    
                    <input type="hidden" name="size" value="1000000">
                    
                    <div>
                        
                        <input type="file" name="image">
                        
                    </div>
                    
                    <div>
                        
                        <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
                        
                    </div>
                    
                    <div>
                        
                        <button type="submit" name="upload">POST</button>
                        
                    </div>-->

                
                    
                    
                    
                    
                <!-- buttons -->
                <p><input type="submit" value="Search">
                    
                    
                <input type="reset" value="Clear">

            </form>
            
        </div>
        
    <body>
    
<html>
    
    
    
    
    
    
    
<!--Here is the design of the form for the search form -->
<html lang="en">
         

    <head>

      <meta charset="UTF-8">
      <title>database connections</title>

    </head>


    
    <body>

         <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
             
          <thead>

                <tr>

                  <th>Unique_id</th>
                  <th>First_Name</th>
                  <th>Second_Name</th>
                  <th>Major</th>
                  <th>Semester</th>
                  <th>Year</th>
                  <th>Date Added/updated</th>

                </tr>

          </thead>
             
      <tbody>


    
<?php
    $db_hostname = 'localhost';
    $db_username = 'ILRdb';
    $db_password = '';
    $db_database = 'ILRdb';

    // Database Connection String
    $con = mysqli_connect($db_hostname,$db_username,$db_password, $db_username);
    if (!$con){
        
      die('Could not connect: ' . mysql_error());
        
      }

    mysqli_select_db($con, $db_database);


    if (!empty($_REQUEST['ID'])){

        $term = mysqli_real_escape_string($con, $_REQUEST['ID']);     

        $sql = "SELECT * FROM Students WHERE UniqueID LIKE '%".$term."%'"; 
        $result = mysqli_query($con, $sql); 

        if (mysqli_num_rows($result) < 1) {

            echo '<script type="text/javascript">alert("Student is not found");</script>';
            
        } else {


            while($row = mysqli_fetch_array($result)){ 
                
            echo
            "<tr>

              <td>{$row['UniqueID']}</td>
              <td>{$row['FirstName']}</td>
              <td>{$row['LastName']}</td>
              <td>{$row['Major']}</td>
              <td>{$row['Semster']}</td>
              <td>{$row['Year']}</td> 
              <td>{$row['Date']}</td> 

            </tr>\n";
                
                }  
            }
        }        
?> 