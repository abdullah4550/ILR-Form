            // this sets the date to today's date
            var date = new Date();
            document.getElementById("now").innerHTML = "Date: " + date.toDateString();
            
            // this is to set "other major" text field visible
            function setVisible(element){
                document.getElementById(element).style.visibility= 'visible';  
            }



//            function validateForm() {
//            var UID = document.forms["myForm"]["ID"].value;
//           // var Lname = document.forms["myForm"]["fName"].value;
//            //var Lname = document.forms["myForm"]["lName"].value;
//                
//            if (ID == "") {
//                alert("Name must be filled out");
//                return false;
//                }
//            }
//                
//            if (fName == "") {
//                alert("Name must be filled out");
//                return false;
//                }
//                
//            if (lName == "") {
//                alert("Name must be filled out");
//                return false;
//                }
//            }