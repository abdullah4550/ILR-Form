<!--//this file is the php file for entering a new student to the db-->

<html>
    
    

    <head>
        
        <link rel="stylesheet" type="text/css" href="Test.css"> 
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
        
        
        <h2 id="title">Biographical Information </h2> 
        
    
        <div id="form-div1">
            
            <form action="" method="post" enctype="multipart/form-data">

                <!-- these are some text field -->
                <strong><br> Unique ID:</strong> <input type="text" name="ID" id="ID" required>
                <button type="button" onclick="validateID()">Validate</button><p id="demo"></p>
                
                
                <strong>First Name:</strong> <input type="text" name="fName" required>
                <strong>Last Name:</strong> <input type="text" name="lName" required> 

                
                <!-- this is a checked box and printing date -->
                <p id="now">  <p>Student is still enrolled at Laroche: <input type="checkbox" name="enrolled" checked></p>

                
                <!-- these are some radio buttons to for major -->
                <p id="div"><strong>Student Major:</strong>
                    
<!--
                <input type="radio" name="major" required value="chemistry"> Chemistry
                <input type="radio" name="major" required value="bioChemistry"> BioChemistry
                <input type="radio"  name="major" required value="other"   onclick="setVisible('other')"> 
                

                Other:
                <input type="text" name="major" id='other' placeholder="Type other major" required style='visibility: hidden'>
-->
                    
                    
                    <select required name="major" id="major" onchange="showfield(this.options[this.selectedIndex].value)">
        
                        <option value="chemistry">chemistry</option>
                        <option value="biochemestry">biochemestry</option>
                        <option value="Other">Other</option>
                        
                    </select>
                <div id="div1"></div>
                    


                    
                <!-- this is another radio menue for semster -->
                <strong>Semester:</strong> 

                Fall <input type="radio" name="semester" required value="Fall">
                Spring <input type="radio" name="semester" required value="Spring">
                Summer <input type="radio" name="semester" required value="Summer"><p>

                
                <!-- this is a selecting menue for year -->
                <p><strong>Year:</strong>

                <select name="year" required>
                        
                    <option>Freshmen</option>
                    <option>Sophomore</option>
                    <option>Junior</option>
                    <option>Senior</option>
                        
                </select>


                <!-- uploading photo -->
                <p><strong>Upload photo:</strong> <input type="file" name="image" accept="image/*"> </p> 
                
                
          


                <!-- buttons -->
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">


            </form>
            
        </div>
        
        <script type="text/javascript" src="scriptFile.js"></script>
        
    <body>
    
<html>
    
    
    
    
    
    
    
 <?php
    
    //Chekcing if a student ID has been entered to make the connection or link to the datebase. 
    if (array_key_exists('ID', $_POST)) {
        
        $link = mysqli_connect("localhost", "ILRdb", "", "ILRdb");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
       
       
       
       
        // Here we check if an entered ID exists in the database
        $query = "SELECT `UniqueID` FROM `Students` WHERE UniqueID = '".mysqli_real_escape_string($link, $_POST['ID'])."'";
            
        $result = mysqli_query($link, $query);
            
        if (mysqli_num_rows($result) > 0) {
                
            echo '<script type="text/javascript">alert("Student exists in the database");</script>';
            

        } else {
            
            
            //Entring feild inputs to each column of "Studnts table" of "ILRdb datsbase"
            $query = "INSERT INTO `Students` (`UniqueID`, `FirstName`, `LastName`, `Major`, `Semster`, `Year`, `Date`) VALUES ('".mysqli_real_escape_string($link, $_POST['ID'])."', '".mysqli_real_escape_string($link, $_POST['fName'])."', '".mysqli_real_escape_string($link, $_POST['lName'])."', '".mysqli_real_escape_string($link, $_POST['major'])."', '".mysqli_real_escape_string($link, $_POST['semester'])."', '".mysqli_real_escape_string($link, $_POST['year'])."', CURRENT_TIMESTAMP)";
            
            
            
            
            
        /*    if(is_uploaded_file($_FILES['image']['Chemicals'])){
                
                $sImage = addslashes(fread(fopen($_FILES['image']['Chemicals'], "r"), filesize(['image']['Chemicals'])));
                $stu->set_student_photo($SImage);
                */
                
                
            
            
            
            
            
            
            //This will check if a student has been entered before or not
            if (mysqli_query($link, $query)) {

                echo '<script type="text/javascript">alert("Student has been added");</script>';

            } else {

                echo "<p>There was a problem adding the student form!";

            }
            
            
            
            
            
            /*//After adding a new student to the db, this will show all students in the database
            $query = "SELECT * FROM `Students`";

            if ($result = mysqli_query($link, $query)) {
                
                while($row = mysqli_fetch_array($result)){
                    
                     echo "<p>Student ID is: --> ".$row[0]."<p>Student first name is: --> ".$row[1]."<p>Student last name: --> ".$row[2]." <p>Student major is: --> ".$row[3]."<p>Student semester is: --> ".$row[4]."<p>Student year is: --> ".$row[5]."<p/> <br>";
                    
                }
        }*/
    }  
}
    
    
?>