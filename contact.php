<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/index-style.css">
  	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <title>ITAmi Software Solutions Contact</title>
<!-- favicon code -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

 <body>
   <!--  navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="index.html"><img class="mini-logo" src="images/logo-mini.png" alt="mini aiAmi logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav justify-content-center d-flex flex-fill">
          <div class="d-flex flex-fill"><!--spacer--> </div>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="solutions.html">Solutions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#section3">Contact<span class="sr-only">(current)</span></a>
          </li>
          </li>
        </ul>
      <div class="d-flex flex-fill"><!--spacer--> </div>
      </div>
    </nav>
  <!-- navbar end here -->
 	<div class="contact-background">
    <div id="section3" class="container-fluid">
    <br>
    <br>
    <br>
      <div class="row">
        <div class="col-12 text-center">
          <div id="wrapper">
              <div id="typewriter">
                  <span class="tag-contact">Let's Work Together</span>
              </div>
          </div>
        </div>
      </div>
      <script>
          function animate(elements, callback) {
          var i = 0;
          (function iterate() {
              if (i < elements.length) {
                  elements[i].style.display = "block"; 
                  animateNode(elements[i], iterate); 
                  i++;
              } else
                  callback();
          })();
          function animateNode(element, callback) {
              var pieces = [];
              if (element.nodeType==1) {
                  while (element.hasChildNodes())
                      pieces.push(element.removeChild(element.firstChild));
                  setTimeout(function childStep() {
                      if (pieces.length) {
                          animateNode(pieces[0], childStep); 
                          element.appendChild(pieces.shift());
                      } else
                          callback();
                  }, 10000/100);
              } else if (element.nodeType==3) {
                  pieces = element.data.match(/.{0,1}/g); 
                  element.data = "";
                  (function addText(){
                      element.data += pieces.shift();
                      setTimeout(pieces.length
                          ? addText
                          : callback,
                        10000/100);
                  })();
              }
          }
      }

      animate($("#typewriter").children());
      </script>
    </div>
	 	<div class="container contact-container">
	 		<div class="row contact-header">
	 			<div class="col-12 text-center">
	 				<h1>Lets Talk</h1>
	 			</div>
	 		</div>
				<div class="contact-content">
					<div class="row slide">
						<div class="offset-md-3 col-sm-6 text-center contact-text"><img class="logo" src="images/logo.jpg" alt="aiAmi logo" />
						</div>
					</div>
			<div class="row text-center">
				<div class="col-sm-12">
					<h4>Let us solve your software challenges today</h4>
					<br>
        </div>
	  	</div>
          <hr>
	  		</div>
        <div class="row text-center">
          <div class="offset-md-3 col-md-6">
          <h4>Feel free to send an inquiry regarding our services, and we'll contact you as soon as we can.</h4>
        </div>
        </div>
        <br>
	  		<div class="row text-center">
        <div class="col-md-6 offset-md-3">
          <div class="form-container">
            <form method=GET action="contact.php">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input class="form-control" name="email" placeholder="Email Address" type="email" required>
              </div>
              <div class="form-group">
                <input type="text" name ="subject" class="form-control" placeholder="Inquiry Subject" type="text" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="body" type="text" placeholder="Your message here" rows="6" required></textarea>
              </div>
              <div class="g-recaptcha" data-sitekey="6LfwmVYUAAAAAHDl9zzDT4pofkuIeim5l-x--NCv"></div>
              <p><input id="mybtn" type="submit" value="Send"><span id="status"></span></p>
            <br>
            <br>
            </form>
            <?
			$toAddress = "inquiries@itamionline.com";
			$from = $_GET['email'];
			$fromAddress = "From: $from\r\n" .
			   "Reply-To: " . $from . "\r\n" .
			   "X-Mailer: PHP/" . phpversion();
			$subject = $_GET['subject'];
			$body = $_GET['body'];

			
			mail($toAddress, $subject, $body, $fromAddress);
			?>
          </div>
        </div>
        <hr>
        <br>
    </div>
    </div>
  </div>
	</div>
    <!-- footer -->
   <footer class="container-fluid">
    <br>
    <div class="row">
      <div class="offset-1 col-md-4">
        <img class="sm-logo" src="images/footer logo.jpg" alt="aiAmi logo" />
        <div class="row">
          <div class="col-md-4">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-6">
            276 1st Ave Loop New York, NY, 10009
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1">
              <a href="https://www.linkedin.com/company/itami-software-solutions/" alt="linkedIn link"><img class="footer-logo" src=images/png/linkedIn.png alt="linkedIn Link Logo" /></a>
            </div>
            <div class="offset-md-1 col-md-3">
              <a href="https://www.facebook.com/ITAmiSoftwareSolutions/" alt="facebook link"><img class="footer-logo" src=images/png/facebook.png alt="facebook Link Logo" /></a>
            </div>
        </div>
      </div>
      <br>
      <hr>
      <div class="offset-md-1 col-md-5">
        <div id="googleMap" style="width:100%;height:400px;">
        </div>
      </div>
    </div>
      <script>
        function myMap() {
        var myCenter = new google.maps.LatLng(40.732845, -73.979877);
        var mapProp= {
            center:myCenter,
            zoom:17,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker(
          {position:myCenter,
            title: "276 1st Ave Loop New York, NY, 10009"
          });
        marker.setMap(map);
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkrpyrvITaOV6VgwVVNHiakGTMLfOisBs&callback=myMap">
      </script>
    <div class="footer-end">
    <hr>
      <div class="row">
        <div class="offset-1 col-md-2">
          ©ITAmi Software Solutions 2018. All Rights Reserved. 
        </div>
      </div>
      <div class="row">
        <div class="offset-1 col-md-4">
          <a class="profile-link" href="https://www.linkedin.com/in/simon-brady11/">Simon Brady Designs</a></p> 
        </div>
      </div> 
    </div> 
  </footer>
</body>
<script>
  $(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
</html>