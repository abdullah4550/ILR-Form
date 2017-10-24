// this sets the date to today's date
var date = new Date();
document.getElementById("now").innerHTML = "Date: " + date.toDateString();



//This will be excuted when an other major is selected
function showfield(name) {
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
    text = "Input not valid - Student ID must be a 6 digit number";
} else {

    text = "Input OK";

}
document.getElementById("demo").innerHTML = text;
}





// This code is for previewing the image before uploading to the database
var loadFile = function(event) {
          
            var reader = new FileReader();
          
            reader.onload = function(){
          
                var output = document.getElementById('output');
                output.src = reader.result;
                
            };
          
            reader.readAsDataURL(event.target.files[0]);
          
      };
     
     
     $(document).ready(function(){ 
         
          $('#insert').click(function(){ 
              
               var image_name = $('#image').val(); 
              
               if(image_name == ''){  
                   
                    alert("Please Select Image");  
                    return false;  
                   
               } else { 
                   
                    var extension = $('#image').val().split('.').pop().toLowerCase();  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1) 
                        
                    {  
                         alert('Invalid Image File');  
                         $('#image').val('');  
                         return false;  
                    }  
               }  
          });  
     });  