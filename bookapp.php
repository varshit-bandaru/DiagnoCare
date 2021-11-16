<!DOCTYPE html>
<html>
<head>
	<title>DiagnoCare</title>
			<style type="text/css">
			.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 200px;
  max-height: 300px;
 
  text-align: center;
}

.title {
  color: grey;
  font-size: 12px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 14px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.card{
    float:left;
    margin-left:4%;
    height: 10%;
    
}
.book_for_app{
	width:600px;
	height:200px;
	background-color: black;
	color:white;
  margin-top: 5%;
	/*border-radius: 5px;*/
	cursor: pointer;
	margin-left:10%;
	font-size: 25px
}
		</style>
</head>
<body>


		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<div class="card">
  
    <h3>Likhitha's Diagnostics & Speciality Lab </h3>
    
    <p>Phone Number</p>
    <a href="#">6464346545</a>
    <p>Email</p>
    <a href="#">Likhitha@gmail.com</a>
    
    
   
</div>
<div class="card">
  
    <h3>Dhanunjay Diagnostic Centre</h3>
    
    <p>Phone Number</p>
    <a href="#">646434623</a>
    <p>Email</p>
    <a href="#">Dhanunjay@gmail.com</a>
   
    
    
  </div>
  <div class="card">
  
    <h3>Vijaya Diagnostic Center</h3>
    
    <p>Phone Number</p>
    <a href="#">6464346578</a>
    <p>Email</p>
    <a href="#">Vijaya@gmail.com</a>
   
    
   
  </div>
  <div class="card">
    <h3>Sri Sai Diagnostic Centre</h3>
    
    <p>Phone Number</p>
    <a href="#">6464346556</a>
    <p>Email</p>
    <a href="#">Sai@gmail.com</a>
    
  </div>
  
  <div class="card">
  
    <h3>Hyderabad Diagnostic Centre</h3>
    
    <p>Phone Number</p>
    <a href="#">6464346545</a>
    <p>Email</p>
    <a href="#">Hyderabad@gmail.com</a>
    
    
    
  </div><br><br><br><br><br><br><br><br><br><br><br><br>
  <form  method="post" action="http://localhost/diagno/index.php/diagno/bookservice">
    <div id="bookimg" style="height:300px;background-image: url('http://localhost/diagno/public/images/bookingpage.png');background-repeat: no-repeat;background-size: cover;">
      <input  type="submit" name="bookapp" value="Book For Service" class="book_for_app">

    </div>
    <!-- <img src="http://localhost/diagno/public/images/bookingpage.png" style="width:100%;height:200px"> -->
  	
  </form>
</body>
</html>