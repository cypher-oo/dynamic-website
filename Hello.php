<!DOCTYPE html>
<html >
  <head>
      <title>Hello World</title>
	  
	    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<style type="text/css">
		
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
		}
		
		.carousel-inner img{
			
			
			width: 100%;
			height: 90vh;
		}
		
		
		
		.card{
			 height: 300px !important;
			   width:600px;
			
			position:relative;
			top: 150px;
			right:60px;
			
		
		}
		 
		  .nature{
			  font-display:4px;
			  position:absolute;
			  top: 150px;
			  left: 160px;
		  }
		
		  .letter2{
			  padding:3px;
			  position:absolute;
			  top: 240px;
			  left: 160px;
		  }
		  
		  .letter3{
			  padding:3px;
			  position:absolute;
			  top: 320px;
			  left: 160px;
		  }
		  
		  
		 .container{
			
			 text-align:centre;
			 position:relative;
			margin-top:550px;
			 right: 80px;
			
		 }
          
            
				  
		</style>
	
	</head>
	  
  <body>
	  
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	 <a class="navbar-brand" href="Hello.php">Navbar</a>
     
  
        <ul class="navbar-nav ml-auto"> 
             <a class="nav-link" href="Hello.php">Home <span class="sr-only">(current)</span></a>
           
                <a class="nav-link" href="#"> 
                   Services 
                </a> 
				  <a class="nav-link" href="about.php"> 
                  About 
                </a> 
				  <a class="nav-link" href="#"> 
                 Contact
                </a> 
           
              
        </ul> 
		 <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
	</nav>
	
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
        <img src="losangles.jpeg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="chicago.jpeg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="Newyork.jpeg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
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
	
 
      
	   
		
		          <div class="col-lg-4 col-md-4col-12">
			     <img src="scene.jpeg" class="card"  >
			</div>	
				 <div class="col-lg-6 col-md-6 col-12">
				 <h2 class="nature"> I am Priti Kumari.</h2>
				 <p  class="letter2"> Lorem ipsum dolor sit amet, consectetur adiption
				 <br> Ut enim ad minim venim,quis nost ullamco nisi ut ex</p>
				 <div class="letter3"> 
				<a href="about.php"class=  "btn btn-success" > check More </a>
                 </div>
				</div>
			<div class="container">
			 <div class="w-50 m-auto " >
  <h1>Contact Form</h1>
  
  <div class="w-80 m-auto" >
  <form action="userinfo.php" method="post">
  <div class="form-group">
      <label for="email">Username:</label>
      <input type="user" class="form-control " id="user" placeholder="Enter username" name="user" autocomplete="off"/>
    </div>
    <div class="form-group">
      <label for="email">Email Id:</label>
      <input type="email" class="form-control " id="email" placeholder="Enter email" name="email" autocomplete="off"/>
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile No" name="mobile"  autocomplete="off"/>
    </div>
  
 
    <button type="submit" class="btn btn-success w-30">Submit</button>
  
  </form>
  </div>
</div>
   
  
  
      
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.16.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	 </body>
	 
</html>
	  