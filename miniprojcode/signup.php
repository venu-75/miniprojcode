<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
	  
	
</head>
	<body background="https://previews.123rf.com/images/kotenko/kotenko1403/kotenko140300008/26854631-snowy-winter-in-a-mountain-forest-sunny-cold-day-with-snow-covered-trees-carpathian-mountains-ukrain.jpg">
    <div class="login-container">
        <h2>Signup</h2>
        <!-- onsubmit="return redirectToNextPage();" -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="input-container">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-container">
                <label for="password">Phone number</label>
                <input type="number" id="password" name="phone" required>
            </div>
			
			<div class="input-container">
                <label for="name">Password</label>
                <input type="password" id="name" name="password" required>
            </div>
			
			<div class="input-container">
                <label for="name">Confirm Password</label>
                <input type="password" id="name" name="confirm" required>
            </div>

            <div>
            <input type="submit" name="submit" value="Signup">
            </div>
			
        </form>
       
    </div>
	
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // collect value of input field
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $password = $_REQUEST['password'];
        $confirm = $_REQUEST['confirm'];
    

        $servername = "localhost";
        $username = "root";
        $pwd = "";
        $dbname = "registration";
        
        // Create connection
        $conn = new mysqli($servername, $username, $pwd, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: "
                . $conn->connect_error);
        }
        
        $sql = "INSERT INTO login (Name, Phone, Password, Confirm) VALUES ($name, $phone, $password, $confirm) ";

        
        if ($conn->query($sql) == TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

?>
    
</body>
</html>

