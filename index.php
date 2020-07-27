<!DOCTYPE html>
<html>
<head>

<title>Art gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://unpkg.com/pattern.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="des.css">
	<style>
	body{
	  background: #e1e1f2;  /* fallback for old browsers */
	  background: -webkit-linear-gradient(to right, #fac0a5, #f5f2f3);  /* Chrome 10-25, Safari 5.1-6 */
	  background: linear-gradient(to right, #fac0a5, #eeedf5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	  background-attachment:fixed;
	  }
	</style>
  <style>
    * {box-sizing: border-box;}

    .gal {
     margin-left: 150px;
      margin-top: 40px;
      position: relative;
      width: 70%;
      height:50%;
      max-width: 1000px;
    }
    .overl {
     position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .3s ease;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 51,0.8);
      text-align:center;

      font-color:blue;
      padding-top:30% ;

    }

    .gal:hover .overl {
      opacity: 1;
    }
</style>
</head>
	<script language="JavaScript">
	  /**
		* Disable right-click of mouse, F12 key, and save key combinations on page
		* By Arthur Gareginyan (https://www.arthurgareginyan.com)
		* For full source code, visit https://mycyberuniverse.com
		*/
	  window.onload = function() {

		document.addEventListener("contextmenu", function(e){
		  e.preventDefault();
		}, false);
		document.addEventListener("keydown", function(e) {
		//document.onkeydown = function(e) {
		  // "I" key
		  if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
			disabledEvent(e);
		  }
		  // "J" key
		  if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
			disabledEvent(e);
		  }
		  // "S" key + macOS
		  if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
			disabledEvent(e);
		  }
		  // "U" key
		  if (e.ctrlKey && e.keyCode == 85) {
			disabledEvent(e);
		  }
		  // "F12" key
		  if (event.keyCode == 123) {
			disabledEvent(e);
		  }
		}, false);
		function disabledEvent(e){
		  if (e.stopPropagation){
			e.stopPropagation();
		  } else if (window.event){
			window.event.cancelBubble = true;
		  }
		  e.preventDefault();
		  return false;
		}
	  };
	</script>
	<style>
	  body {

		  font-family: 'HelveticaNeue';
		  }

		  .content {
			padding: 60px;
			background:url(pn7.jpg) top right repeat; background-attachment:fixed;
			}

			h1 {
			  color: Black;
			  text-shadow: 4px 2px brown;
			  font-size: 3.5rem;
			  font-weight: bolder;
				text-align:center;

			}

	#staticText{
	  font-size: 2rem;
	  line-height: 1;
	  font-family: 'HelveticaNeue';
	  font-weight: 120;
	  postion: fixed;
	  margin-left:420px;
	color: black;
	}


	#typeline {
	  font-size: 2rem;
	  line-height: 1.2;
	  font-weight: 150;
	  color: Black;


	}

	@-webkit-keyframes blink-caret { 90% { border-color: transparent; } }
	em {
		border-right: .1em solid black;
		width: 20ch;
		white-space: nowrap;
		overflow: hidden;
		margin-top: 0;
		animation:
		typing 3.5s steps(40, end),
		blink-caret .75s step-end infinite;

		color: #3295dd;

		-----------
	}


	</style>
	<body oncontextmenu="return false;">
  	  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	  <script>
  	  AOS.init();
  	  </script>
  	<div class="content">

  	  <h1>Neha's Sketchbook</h1>
  	 <span id = "staticText" >Sketching Is <span id="typeline" ></span></span>

  	 </div>
  	 <nav class="navbar  navbar-expand-sm bg-dark  sticky-top">
  	 <a class="navbar-brand" href="#">
  			   <image src="lg.png" alt="" width="50" height="50">
  			 </a>
  	   <a class="navbar-brand" href="index.php">Home</a>
  	   <ul class="navbar-nav">

  		 <li class="nav-item">
  		   <a class="nav-link" href="gallery.php">Art gallery</a>
  		 </li>
  	   </ul>
  	 </nav>



  	 <div class="container-fluid" >
  	   <div class="card1" >
  	   <div class="row ">
  		 <div class="col-md-4" >
  		   <div id="CarouselTest" class="carousel slide"style="width:400px;" data-ride="carousel" data-aos="fade-right" data-aos-duration="500">
  			 <ol class="carousel-indicators">
  			   <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
  			   <li data-target="#CarouselTest" data-slide-to="1"></li>
  			   <li data-target="#CarouselTest" data-slide-to="2"></li>

  			 </ol>
  			 <div class="carousel-inner">
  			   <div class="carousel-item active">
  				 <img class="d-block" src="1s.jpg" alt="">
  			   </div>
  			   <div class="carousel-item">
  				 <img class="d-block" src="2s.jpg" alt="">
  			   </div>
  			   <div class="carousel-item">
  				 <img class="d-block" src="3s.jpg" alt="">
  			   </div>
  			   <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
  	   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  	   <span class="sr-only">Previous</span>
  	 </a>
  			   <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
  	   <span class="carousel-control-next-icon" aria-hidden="true"></span>
  	   <span class="sr-only">Next</span>
  	 </a>
  			 </div>
  		   </div>
  		 </div>
  		 <div class="col-md-8 px-3">
  		   <div class="card-block px-6" data-aos="fade-left" data-aos-duration="500">
  			 <h3 class="card-title" style="font-color:red; " >Welcome to Neha's Sketchbook</h3>
  			 <p class="card-text" style="font-size:18px;" >
  			  I used drawing as a primary language for capturing thoughts, exploring ideas, and then sharing those ideas. Teachers and mentors encouraged me, helping to sustain sketching as a key skill throughout school and into my professional career. Good fortune has ignited my passion to become a sketch advocate, helping others rediscover sketching as a powerful problem-solving and communication tool. I’m excited to share why sketching can be so beneficial, show samples of sketches, and provide helpful resources.</p>
  			 <br>
  			 <br>

  		   </div>
  		 </div>
  		 <!-- Carousel start -->

  		 <!-- End of carousel -->
  	   </div>
  	 </div>
   <!-- End of card -->


  	 <br>
  	<div class="card" data-aos="zoom-in" data-aos-duration="1000" >

  	<p style="font-size:18px;">
  		<bold>We</bold> can proudly say the we are the best handmade artistic sketches,
  		drawings, paintings with various mediums. You can be a part of this creative work by gifting
  		your loved one with unique handmade charcoal sketch and mouth that on wall forever more. Your
  		will know how proud you are to have Him/ Her .Furthermore, adding to its grace would be the most favorite picture. </p></div>
  		<a href="gallery.php">
    		<div class="gal">
          <img src="17.jpg" alt="Avatar" class="image" style="display: block;
    		  width: 100%;
    		  height: auto;">
          <div class="overl"><h3>Click here to visit our Gallery</h3></div>
    		</div>
  		</a>
  	</div>

  <footer class="mainfooter" role="contentinfo">
  	   <div class="footer-middle">
  	   <div class="container">
  		 <div class="row">
    		   <div class="col-md-3 col-sm-6">
    			 <!--Column1-->
    			 <div class="footer-pad">

    			   <a class="navbar-brand" href="#">
    			   <image src="lg.png" alt="" width="160" height="160" style="border:0px;">
    			 </a>
    			 </div>
    		   </div>
    		   <div class="col-md-3">
    			 <!--Column1-->
    			 <div class="footer-pad">
    			   <h4>About us</h4>
    			   <ul class="list-unstyled">
      				 <li><a href="#">Website Tutorial</a></li>
      				 <li><a href="#">Accessibility</a></li>
      				 <li><a href="#">Disclaimer</a></li>
      				 <li><a href="#">Privacy Policy</a></li>
            </ul>
           </div>
    		   </div>
    		   <div class="col-md-2">
    			 <!--Column1-->
    			 <div class="footer-pad">
    						<h4>Follow Us</h4>
    				 <ul class="social-network social-circle">
    				  <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    				  <li><a href="https://instagram.com/nehas_sketchbook?igshid=1w803qvlast94" class="icoLinkedin" title="insta"><i class="fa fa-instagram"></i></a></li>
    				 </ul>
    			 </div>
    		   </div>
    			<div class="col-md-4">
          	<?php
          	 //index.php
               $error = '';
            	 $name = '';
            	 $email = '';

            	 $message = '';

            	 function clean_text($string)
            	 {
            	  $string = trim($string);
            	  $string = stripslashes($string);
            	  $string = htmlspecialchars($string);
            	  return $string;
            	 }

            	 if(isset($_POST["submit"]))
            	 {
            	  if(empty($_POST["name"]))
            	  {
            	   $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
            	  }
            	  else
            	  {
            	   $name = clean_text($_POST["name"]);
            	   if(!preg_match("/^[a-zA-Z ]*$/",$name))
            	   {
            		     $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
            	   }
            	  }
            	  if(empty($_POST["email"]))
            	  {
            	     $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
            	  }
            	  else
            	  {
              	   $email = clean_text($_POST["email"]);
              	  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
              	  {
              		    $error .= '<p><label class="text-danger">Invalid email format</label></p>';
              	  }
            	  }

            	  if(empty($_POST["message"]))
            	  {
            	     $error .= '<p><label class="text-danger">Message is required</label></p>';
            	  }
            	  else
            	  {
            	     $message = clean_text($_POST["message"]);
            	  }

            	  if($error == '')
              	  {
              	   $file_open = fopen("contact_data.csv", "a");
              	   $no_rows = count(file("contact_data.csv"));
              	   if($no_rows > 1)
              	   {
              		$no_rows = ($no_rows - 1) + 1;
              	   }
              	   $form_data = array(
              		'sr_no'  => $no_rows,
              		'name'  => $name,
              		'email'  => $email,

              		'message' => $message
              	   );
              	   fputcsv($file_open, $form_data);
              	   $error = '<label class="text-success">Thank for your feedback</label>';
              	   $name = '';
              	   $email = '';

              	   $message = '';
              	  }
            	 }
          	 ?>
          	 <form method="post">
            		  <?php echo $error; ?>
            		  <div class="form-group">
            			     <h4>Feedback form</h4>
            		       <label>Enter Name</label>
            		       <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
            		  </div>
            		  <div class="form-group">
              		  <label>Enter Email</label>
              		  <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
            		  </div>

            		  <div class="form-group">
              		   <label>Write your feedback here</label>
              		   <textarea name="message" class="form-control" placeholder="Enter Message"><?php echo $message; ?></textarea>
              		</div>
            		  <div class="form-group" align="center">
            		      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
            		  </div>
          		</form>
          	</div>
      	</div>
  		  <div class="row">
  			     <div class="col-md-12 copy">
  				         <p class="text-center"> Copyright &copy; 2020, Neha's Sketchbook</p>
  			     </div>
  	   </div>
    </div>
  	</div>
  </footer>
    <script>
      function write (obj, sentence, i, cb) {
  			if (i != sentence.length) {
  			  setTimeout(function () {
  				i++
  				console.log('in timeout', i)
  				obj.innerHTML = sentence.substr(0, i+1) +' <em aria-hidden="true"></em>';
  				write(obj, sentence, i, cb)
  			  }, 50)
  			} else {
  			  console.log(i)
  			  cb()
  			}
  		  }
  		   function erase (obj, cb,i) {
  		   var sentence = obj.innerText
  			  if (sentence.length != 0) {
  			   setTimeout(function () {
  			   sentence = sentence.substr(0,sentence.length-1)
  			   console.log('in timeout', i)
  			   obj.innerText = sentence
  			   erase(obj, cb)
  				}, 18/(i*(i/10000000)))
  				} else {
  				obj.innerText = " "
  				cb()
  			 }
  			}
  			var typeline = document.querySelector("#typeline")

  			 function writeerase(obj, sentence, time, cb) {
  			  write(obj, sentence, 0, function () {
  			   setTimeout(function () {
  			   erase(obj, cb) }, time) })
  			   }

  		  var sentences = [
  			"Creativity. ",
  			"Imagination. ",
  			"Expression. ",
  			"Passion. "
  		  ]

  		  var counter = 0
  		  function loop () {
  			var sentence = sentences[counter % sentences.length]
  			writeerase(typeline, sentence, 3000, loop)
  			counter++
  		  }

  		  loop()
  	</script>

  </body>
</html>
