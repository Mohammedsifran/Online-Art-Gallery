<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet1.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
	
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
}
</style>
</head>
<body>
	

<div class="topnav">
  <a class="active" href="Home.php">Home</a>
  <a href="#about">Login</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
	  <div>
		 <input type="text" name="search" id="search" placeholder="Search image" class="form-control" />
   		 <ul class="list-group" id="result"></ul>
	</div>
	</div>
<!--    <form action="/action_page.php">-->
<!--
      <input type="text" placeholder="Search.." name="search" id="search">
      <button type="submit"><i class="fa fa-search"></i></button>
-->
<!--    </form>-->
	  
	  	
	  
<!--  </div>-->
</div>

<div style="padding-left:16px">
  <h2 align="center">LEONID AFREMOV – RAIN’S RUSTLE</h2>
  <table align="center" width="200" border="0">
  <tbody>
    <tr>
      <td height="514" colspan="2"><img src="Famous-Paintings-5-1.jpg" width="832" height="525" alt=""/></td>
    </tr>
    <tr>
      <td width="255" height="39"> <strong>Artist</strong></td>
      <td width="441"><strong>Description</strong></td>
    </tr>
    <tr>
      <td height="309"><p><img src="800px-jean-auguste-dominique-ingres-autoportrait-vingt-quatre-ans-google-art-project-1.jpg!Portrait.jpg" width="243" height="256" alt=""/></p>
        <p>LEONID AFREMOV</p></td>
      <td width="441">Leonid Afremov's signature theme.<br>
        He's created many absolutely breathtaking paintings of autumn parks with people walking there, warmed by the light of lanterns as well as rainy cityscapes of famous European cities. He achieves such an outstanding &ldquo;wet&rdquo; effect with the help of his unique painting technique.</td>
    </tr>
  </tbody>
</table>

</div>
	
	

</html>

<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
	 
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
	  	  console.log("file loaded here");

   $.each(data, function(key, value){
    if (value.name.search(expression) != -1 || value.location.search(expression) != -1)
    {
			  	  console.log("file loaded here  " + value.image);

     $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail" /> '+value.name+' | <span class="text-muted">'+value.location+'</span></li>');
    } else {
		 $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail" /> '+value.name+' | <span class="text-muted">'+value.location+'</span></li>');
	}
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html();
 });
});
</script>
	
	<section class="footer" align="center">
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
