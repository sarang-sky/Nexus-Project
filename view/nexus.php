
<!Doctype html>
<html lang="en-US">
	<head>
		<title>|Home Page|</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
			<link rel="stylesheet" type="text/css" href="css/custom.css">
		
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 1900
    })
  });
</script>
<style type="text/css">
	
	.navbar{
		height: 100px;
	}
	.navbar-brand{
		float: left;
		margin-left: 0px;
		margin-bottom: 10px;
	}
	.navbar-brand img{
		margin-bottom: 50px;
		border-radius: 10px;
		
	}
	.navbar-brand label{
		font-family: Comic sans MS;
		font-size: 40px;
		margin-top: 20px;
	}
	.form-inline input[type="search"]{
		margin-top: 5px;

	}
	.form-inline {
		margin-top: 3%;
	}

	.album h1{
		font-family: Comic sans MS;
	}

</style>

		
	</head>
	<body>
		<header class="bg-light ">
			<div class="container">
<nav class="navbar navbar-light bg-light navbar-expand-md ">
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="80" height="60" class="d-inline-block align-top" alt="">
    <label>Nexus</label>
  </a>

  <form class="form-inline" method="POST" action="searchResults.php">
    <input class="form-control mr-sm-2" type="search" name="Search" placeholder="Search Here" aria-label="Search" size="80">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
  </form>
</nav>

</div>
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
        <img src="img/1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/2.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/3.png" alt="New york" style="width:100%;">
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
</header>
 <div class="album py-5 bg-light">
        <div class="container">
        	<h1>Featured</h1>

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <a href="#"><img class="card-img-top" src="img/hotel1.jpg" alt="Card image cap" height="180"></a>
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p>
              </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/hotel2.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="img/hotel3.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/hotel4.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="img/hotel5.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/hotel6.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="img/hotel1.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/hotel4.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/hotel1.jpg" alt="Card image cap" height="180">
                <div class="card-body">
                  <p class="card-text"><p>Name:</p>
                  <p>Address:</p>
                  <p>Price:</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Book</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
             <div class="container" align="right">
              <h1>Book Hotel</h1>
              <form action="<?php echo URL; ?>Book/addCustomer" method="POST">
                <label>Your Name:</label>
                <input type="text" name="name" value="" required /><br>
                <label>Phone Number:</label>
                <input type="text" name="phone number" value="" required /><br>
                <label>Email:</label>
                <input type="email" name="email" value="" /><br>
                <label>Hotel Name:</label>
                <input type="text" name="Hotel Name" value="" /><br>
                <input type="submit" name="submit_add_customer" value="Submit" />
             </form>
            </div>
            <div>
              <a href="view/Page3.php">Add Hotel</a>
            </div>
          </div>
        </div>
      </div>



</body>