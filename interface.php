<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style_interface.css">
    <title>interface</title>
</head>
<body>
    <div class="borde">
        <h2>zaid ibrahem</h2>
        <i class='bx bx-user'></i>
        <p>Book a flight ticket<p>
        
        
         <form action="customer.php" method="post">
            <div class="info">
             <h3>Booking information</h3>
                
                    <label for="rev">FROM</label><br>
                    <input type="text"name="rev" required placeholder="Name or code of the departure destination"><br>

                    <label for="rev">TO</label><br>
                    <input type="text"name="rev" required placeholder="Name or code of the destination"><br>

                    <label for="Ecoomic">ticket type</label> 
                      <select name="Ecoomic" id="Ecoomic">
                        <optgroup>
                          <option value="">Economy class</option>
                          <option value="">First class</option>
                          <option value="">Business class</option>
                         </optgroup>
                       </select><br>
                   <nav class="nav1"> <label for="date">Departure Time</label><br>
                    <input type="date" name="Departure" required>   <input type="Time"><br>
                    <label for="date">Return Time</label><br>
                    <input type="date"name="return" required> <input type="Time" required><br>
                    </nav>
                     <nav class="nav2">
                    <label for="">Number of passengers</label><br>
                    <select name="numbers" id="numbers">
                        <optgroup>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        </optgroup>    
                    </select><br>
                    <label for="">Payment method</label><br>
                    <select name="Payment method" id="">
                        <option value="">Paypal</option>
                        <option value="">Skrill</option>
                        <option value="">Neteller</option>
                        <option value="">casc App</option>
                        <option value="">cash</option>
                    </select>
                    </nav>
            </div>

                <div class="customer">
                    <h3>customer information</h3>

                    <label>Name</label><br>
                    <input type="text" name="name" required ><br>

                    <label>Phone Number</label><br>
                    <input type="text" name="Number" required><br>

                    <label>Email</label><br>
                    <input type="text" name="Email" required><br>

                    <label>Personal Identification</label><br>
                    <select name="personal">
                        <option value="1">Personal ID</option>
                        <option value="2">Passport</option>
                    </select><br>

                    <label for="">address</label><br>
                    <input type="text" name="address" required><br>
                    <button type="submit" name="add">reserve</button> 
                    <?php
                     include('customer.php'); //ربط بصفحة الكاستمر
                    ?>
                </div>
                

        </form>
    </div>
   
</body>
</html>