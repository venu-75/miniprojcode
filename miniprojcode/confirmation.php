
<?php

// echo"<a href='/Projects/slapp/index.php'>Go Back to Home</a><br><br>";
$con=mysqli_connect("localhost", "root", "", "registration");
/*if (!$con)
{
    die("unable to connect");
}
else{
    echo"connected successfully";
}*/
echo"<style>table,th,td{border:1px solid black;}</style>";

$qry="SELECT * FROM `eventvenue`";
$res=mysqli_query($con, $qry);
if (mysqli_num_rows($res)>0) {
    echo'<table style="width:100%"><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Venue</th><th>Date</th><th>Occasion</th><th>Service</th><th>Guests</th></tr>';
    $id=0;
    while ($row=mysqli_fetch_assoc($res)) {
        //echo "id : ".$row["Id"]."<br>"." Name : ".$row["Name"]."<br>"." Regno : ".$row["Regno"]."<br>"." Mark : ".$row["Mark"];
        $id+=1;
        echo"<tr><td>"."$id"."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["name"]."</td><td>".$row["date"]."</td><td>".$row["occasion"]."</td><td>".$row["service"]."</td><td>".$row["guests"]."</td>";
    }
    echo"</table>";
} else {
    echo "No Data";
}
mysqli_close($con);
?>
