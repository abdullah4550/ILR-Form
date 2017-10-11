            // this sets the date to today's date
            var date = new Date();
            document.getElementById("now").innerHTML = "Date: " + date.toDateString();


            
//            function checkOther(){
//            let Major = document.getElementById('major').value;
//             if (Major == 'other'){
//
//                document.getElementById('other').style.visibility ='visible';
//             }
//            }


            function showfield(name){
              if(name=='Other')document.getElementById('div1').innerHTML='Other: <input type="text" name="other" />';
              else document.getElementById('div1').innerHTML='';
            }


            // this is to set "other major" text field visible
            function setVisible(element){
                document.getElementById(element).style.visibility= 'visible';  
            }




            // Id valdation 
            function validateID() {
            var x, text;

            // Get the value of the input field with id="numb"
            x = document.getElementById("ID").value;

            // If x is Not a Number or less than one or greater than 10
            if (isNaN(x) || x < 1 || x > 999999) {
                text = "Input not valid - Student ID must be between 1 & 999999";
            } else {
                text = "Input OK";
            }
            document.getElementById("demo").innerHTML = text;
        }