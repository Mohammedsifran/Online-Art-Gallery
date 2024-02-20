<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet1.css" />
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
	<h1 style="font-size:40px;" align="center">Torrent Art Institute</h1>
	
	<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
      	<a href="Page 2.php">  <img src="Famous-Paintings-5-1.jpg" alt="Los Angeles" height="750" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>PORTRAIT OF MADAME RECAMIER</h3>
          <p>Top pixel artists reveal why there's never been a better time to explore the medium.</p>
        </div>
      </div>

      <div class="item">
       	<a href="Page 3.php"> <img src="Famous-Paintings-15-1 (1).jpg" alt="Chicago" height="750" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>PERSISTENCE OF MEMORY</h3>
          <p>Top pixel artists reveal why there's never been a better time to explore the medium.</p>
        </div>
      </div>
    
      <div class="item">
       	<a href="Page 1.php"> <img src="famous-paintings-1-1.jpg" alt="New York" height="750" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3>LEONID AFREMOV – RAIN’S RUSTLE</h3>
          <p>Top pixel artists reveal why there's never been a better time to explore the medium.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<script>
	
	function openmenu(){
		
	document.getElementById("side-menu").style.display="block";
	document.getElementById("menu-btn").style.display="none";
	document.getElementById("close-btn").style.display="block";
	}
	function closemenu()
	{
		
	document.getElementById("side-menu").style.display="none";
	document.getElementById("menu-btn").style.display="block";
	document.getElementById("close-btn").style.display="none";
	}
	
	
	
	</script>
	<section class="footer">
	<div class="container text-center">
			<div class="col-md-3">
			<div class="col-md-3">
				</div>
		</div>
		<hr>
		<p class="copyright"><hr>ETF ASSIGMENT 2<br>M.S.M. SIFRAN (IT18227178)</p>
		</div>	
	</section>
	

</body>
</html>


