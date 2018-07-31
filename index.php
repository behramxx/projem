
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script type="text/javascript">
        
       $(document).ready(function(){
           
           $('#submit').click(function(){
               
               var name=$('#name').val();
               var email=$('#email').val();
                            
               
               $.ajax({
                   
                   type: "POST",
                   dataType: "text",
                   url: "mailer.php",
                   data: {
                      name: name,  //baştaki name bizim maillere gönderdiğiniz parametre, ikinci name yukarıda senin tanımladığın inputtan gelen verinin tutulduğu değişken.
                      email: email, //burasıda yukarıdaki gibi...  
                   },
                   
                   success: function(){
                       alert("Mail gönderildi");
                   }
                   
               })
           });
           
       });
       
       
           </script>

    
   
</head>


    
<body>

<input type="text" name="name" id="name"/>
<label for="name">Name</label>
<br /><br />
<input type="text" name="email" id="email"/>
<label for="email">Email</label>

<br>

<button id="submit" style="background-color:green; color:white;">Click me to submit</button>

</body>
</html>
