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
        
        
        <h2 id="title">Student Database</h2> 
        
        
    <body>
    
<html>
    
    
<!--Here is the design of the form for the database -->
<html lang="en">
         

    <head>

      <meta charset="UTF-8">
      <title>database connections</title>

    </head>


    
    <body>

         <table border="2" style= "background-color: brown; color: white; margin: 0 auto;" >
             
          <thead>

                <tr>

                  <th>Unique_id</th>
                  <th>First_Name</th>
                  <th>Last_Name</th>
                  <th>Major</th>
                  <th>Semester</th>
                  <th>Year</th>
                  <th>Date Added/updated</th>

                </tr>

          </thead>
             
      <tbody>


<?php


    include("connection.php");

    $query = "SELECT * FROM `Students`";

    if ($result = mysqli_query($link, $query)) {

        while($row = mysqli_fetch_array($result)){


            echo
            "<tr>

                  <td>{$row['Student_UniqueID']}</td>
                  <td>{$row['Student_FirstName']}</td>
                  <td>{$row['Student_LastName']}</td>
                  <td>{$row['Student_Major']}</td>
                  <td>{$row['Student_Semster']}</td>
                  <td>{$row['Student_Year']}</td> 
                  <td>{$row['Date_Modified']}</td> 

            </tr>\n";
        }
    }

?>
          
             </tbody>
        </table>
    </body>
</html>

