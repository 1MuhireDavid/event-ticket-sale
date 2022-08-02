<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="home.css">
    <title>HOME PAGE</title>
<body>
<header>

        <div class="navbar">
                
        <a class="logo" href="TICKET.html">TICKETS<span>ONLINE</span></a>
                <div  style=float:right>
                    
                    <a  href="index.php"><i class="fa fa-fw fa-home"></i> HOME</a> 
                    <a href="event.php"><i class="fa fa-fw fa-search"></i>EVENTS</a> 
                    <a href="event_form.php"><i class="fa fa-fw fa-search"></i>CREATE EVENT</a> 
                    <button>logout</button>
                  </div>
                  
              </div>
</header>
<section>
</section>
</body>
</html>