
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="\cssbuy\ticketstyles.css">
    <link rel="icon" type="image/x-icon" href="\images\fav.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TICKETS ONLINE</title>
</head>
<body>
    <header>
        <div class="nav">
               
                <div class="navbar">
                    <a class="logo" href="/TICKET SELL/TICKET.html">TICKETS<span>ONLINE</span></a>
                    <a href="/TICKET SELL/TICKET.html"><i class="fa fa-fw fa-home"></i> Home</a> 
                    <a href="/TICKET SELL/event.html"><i class="fa fa-fw fa-EVENTS"></i>EVENTS</a> 
                    <a href="#"><i class="fa fa-fw fa-Contact"></i> Contact Us</a> 
                  </div>
              </div>
    </header>
    <section class="quantity">
        <div class="container-quantity">
            <h2>MAIN AUDI CONCERT WITH KENNY SOL</h2>
        <h3>TICKET NAME</h3>
        <hr>
        <p>Access to showcases, concerts and performances with DJ's and live bands. Artistic activites like dancing for kids</p>
       <hr>
       <form action="ticket1_valid.php" method="post">
    <label>Quantity(umubare wa tike ushaka ukugura)</label><br>
    <input type="number" name="quantity" id="" class="count"><br><br><br>
    <i class="amount">
        <?php
        $total= $_POST["quantity"] * 2000;
echo " Total amount to pay is ".$total;
  ?>
  <span>RWF</span></i><br>
    <hr><br>
    <button type="submit" class="choose">Choose</button>
    </form>
    <br>
    </section>
    <section class="nav2">
        <div class="container">
              <div class="form">
                 <form action="ticket1_valid.php" method="post">
                     <fieldset>
                      <legend>GET YOUR TICKET NOW</legend>
                      <label class="input">WHO ARE YOU?</label>
                      <input type="radio" id="radio" name="stud">STUDENT
                      <input type="radio" id="radio" name="stud">NOT A STUDENT <br><br>
                      <label>Name</label>
                      <input type="text" class="input" id="" name="cname" required><br><br>
                      <label for="EMAIL">EMAIL</label>
                      <input type="email" class="input" id="email" name="email" required><br><br>
                      <label for="Tel">Phone number</label>
                      <input type="tel" class="input" id="tel" name="tel" required><br><br>
                      <label for="select">ARE YOU GOING TO PAY USING</label>
                      <select name="pay" id="pay" require><option value="pay">MOMO</option><option value="pay">Airtel Money</option></select><br><br>
                      <button type="submit" class="buy-ticket">Submit</button><br><br>
                     </fieldset>
                    </form>
            </div>
        </div>
     </section>
</body>
</html>

