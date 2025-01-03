<?php
include"connect.php";
if(isset($_POST['IT']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="style.css">
    <title>user registration| تسجيل المستخدمين</title>
</head>
<body>
    <!--start info----->
    <div class="reverations">
        <form action="index.php" method="post">
            <nav>
                <img src="plane.jpg" alt="">
                <h3>reverations</h3>
                   
                
                <input type="text"name="name" placeholder="user name"><br>
                
               
                <input type="text" name="email" placeholder="email"><br>

                
                <input type="password" name="password" placeholder="password" ><br>


                <button type="reset">reset</button>
                <button type="submit" name="sub">add</button>

                <div class="social">
                <i class="fa-brands fa-facebook"></i>    
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-twitter"></i>  

                </div>

            </nav>
            
          <div class="info">
          <table>
            <tr>
                <td>id</td>
                <td>user name</td>
                <td>email</td>
    
                <td>password</td>
                
            </tr>
            </table> 
            </div>   
            </form>  
             
    </div>
    
</body>
</html>