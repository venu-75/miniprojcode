<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
	body {
    font-family: Arial, sans-serif;
    background-image: url('pic1.jpg'); /* Replace 'background.jpg' with your image file name or path */
    background-size: cover; /* Ensures the image covers the entire background */
    background-repeat: no-repeat; /* Prevents image repetition */
    background-attachment: fixed; /* Keeps the image fixed while scrolling */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
	
	background-color:red;
	
}
	
        body {
            font-family: Arial, sans-serif;
           
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
			border:cover;
        }
		

        .container {
            background-color:#EEE3ED;
            padding: 25px;
			border:2px black;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 500px;
        }

        .container h2 {
            text-align: center;
        }

        .form-group {
            margin: 10px 0;
        }

        .form-group label {
            display: block;
        }

        .form-group input {
            width: 95%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
			margin-right:10px;
            border: 1px solid black;
            border-radius: 3px;
        }

        .form-group select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 3px;
        }

        .form-group button {
            
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    require('db.php');
    if (isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username); 
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con,$phone);
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con,$name);
        $date = $_REQUEST['date'];
        $occasion = $_REQUEST['occasion'];
        $service = $_REQUEST['service'];
        $guests = $_REQUEST['guests'];
            $query = "INSERT into `eventvenue` (username, email, phone, name, date, occasion, service, guests)
    VALUES ('$username', '$email','$phone', '$name', '$date', '$occasion', '$service', '$guests')";
            $result = mysqli_query($con,$query);
            if($result){
                header("Location:/miniprojcode/confirmation.php");
            }
        }else{
    ?>
    <div class="container">
        <h2><br><br>Registration Form</h2>
        <form name="registration" action="" method="post">
             <div class="form-group">
                <label for="name">Name:</label>
                <input type="text"  id="name" name="username" required />
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required />
            </div>
			
			 <div class="form-group">
                <label for="Venuename">Venue Name:</label>
                <input type="text" id="name" name="name" required />
            </div>
            
            <div class="form-group">
                <label for="date">Planning Date:</label>
                <input type="date" id="date" name="date" required />
            </div>
           
            
          <div class="form-group">
    <label for="occasion">Occasion:</label>
    <select id="occasion" name="occasion" required>
        <option value="wedding">Wedding</option>
        <option value="birthday">Birthday</option>
        <option value="anniversary">Engagement</option>
        <option value="corporate">Namingy</option>
       
    </select>
</div>


          <div class="form-group">
    <label for="Services">Services:</label>
    <select id="occasion" name="service" required>
        <option value="All Services">All Services</option>
		<option value="Catering">Catering</option>
		<option value="Decoration">Decoration</option>
		<option value="Photography">Photography</option>
        <option value="Catering and Decoration">Catering and Decoration</option>
        <option value="Catering and photography">Catering and photography</option>
        <option value="Decoration and photography">Decoration and photography</option>
       
    </select>
</div>




<div class="form-group">
                <label for="guests">Capacity of Guests:</label>
                <input type="number" id="guests" name="guests" required />
            </div>


            
        <div class="form-group">
            <input style="color:blue" type="submit" name="submit" Value="Submit"/>
			
        </div>
        </form>
    </div>
    <?php } ?>
</body>
</html>