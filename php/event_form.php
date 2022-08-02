<!DOCTYPE html>
<html>
<head>
  <title>CREATE EVENT</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:rgb(190, 168, 68)">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="insert.php">
  	<div class="input-group">
  	  <label>EVENT NAME</label>
  	  <input type="text" name="event_name" id="eventname" required>
  	</div>
	  <div class="input-group">
  	  <label>PRICE</label>
  	  <input type="number" name="price" id="price" required>
  	</div>
	  <div class="input-group">
  	  <label>NUMBER OF TICKETS</label>
  	  <input type="number" name="e_tkts" id="e_tkts" required>
  	</div>
	  <div class="input-group">
  	  <label>EVENT DATE</label>
  	  <input type="date" name="event_date" id="dates" required>
  	</div>
  	<div class="input-group">
  	  <label>EVENT LOCATION</label>
  	  <input type="text" name="event_place" id="place" required>
  	</div>
  	<div class="input-group">
  	  <label>EVENT ORGANISERS</label>
  	  <input type="text" name="event_organisers" required>
  	</div>
  	<div class="input-group">
  	  <label>ARTIST 1</label>
  	  <input type="text" name="artist1" required>
  	</div>
	  <div class="input-group">
  	  <label>ARTIST 2</label>
  	  <input type="text" name="artist2" required>
  	</div>
  	<div class="input-group">
  	  <input type="submit" class="btn" name="reg_user" value="Submit">
  	</div>
  </form>
</body>
</html>