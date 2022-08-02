<!DOCTYPE html>
<html>
 
<head>
    <title>ticket</title>
</head>
 
<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => tickets_online
        $conn = mysqli_connect("localhost", "root", "", "tickets_online");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking 3 values from the form data(input)
        $cname =  $_REQUEST['cname'];
        $email = $_REQUEST['email'];
        $tel =  $_REQUEST['tel'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO `client`(`cname`, `email`, `tel`) VALUES ('$cname','$email','$tel')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>