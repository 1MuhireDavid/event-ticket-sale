<!DOCTYPE html>
<html>
 
<head>
    <title>register</title>
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
         
        // Taking all  values from the form data(input)
        $event_name =  $_REQUEST['event_name'];
        $price = $_REQUEST['price'];
        $num =  $_REQUEST['e_tkts'];
        $date = $_REQUEST['event_date'];
        $location = $_REQUEST['event_place'];
        $org = $_REQUEST['event_organisers'];
        $artist1 = $_REQUEST['artist1'];
        $artist2 = $_REQUEST['artist2'];
         
        // Performing insert query execution
        // here our table name is college
       // $sql = "INSERT INTO `events`(`event_name`, `event_date`, `event_organisers`, `price`, `event_place`, `e_tkts`, `artist1`, `artist2`) VALUES ('$event_name','','','','','','$artist1','')";
        $sql = "INSERT INTO `event`(`event_id`, `event_name`, `event_date`, `event_organisers`, 
        `price`, `event_place`, `e_tkts`, `cid`, `artist1`, `artist2`, `etime`)
         VALUES (null,'$event_name','$date','$org','$price','$location',
         '$num',null,'$artist1','$artist2',default)";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        //     echo nl2br("\n$event_name\n $price\n "
        //         . "$num\n $date\n $org");
        // 
    } 
        else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>