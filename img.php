<!DOCTYPE html>
<html>
<head>
<title>blah</title>
<title>Art gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="des.css">



</head>

<style>


body {

    font-family: HelveticaNeueLight;
}

.content {
    padding: 60px;
    background:url(pn2.jpg) top right repeat; background-attachment:fixed;

}

h1 {
    color: white;
    text-shadow: 4px 2px black;
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
color: white;
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
<body>
<div class="content">

  <h1>Neha's Sketchbook</h1>
 <span id = "staticText" >Sketching Is <span id="typeline" ></span></span>

 </div>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
 <a class="navbar-brand" href="#">
           <image src="lg.png" alt="" width="60" height="60">
         </a>
   <a class="navbar-brand" href="#">About</a>
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" href="feedback.php">Feedback</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="gallery.html">Art gallery</a>
     </li>
   </ul>
 </nav>

 <div class="container-fluid"><br>
   <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
   <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
   <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
   <p>I used drawing as a primary language for capturing thoughts, exploring ideas, and then sharing those ideas. Teachers and mentors encouraged me, helping to sustain sketching as a key skill throughout school and into my professional career. Good fortune has ignited my passion to become a sketch advocate, helping others rediscover sketching as a powerful problem-solving and communication tool.

 I’m excited to share why sketching can be so beneficial, show samples of sketches, and provide helpful resources. My goal is to encourage you—whether you’re a designer, front-end developer, coder, writer or whatever you may be—to add sketching to your toolkit.</p>
 </div>
  	<footer class="mainfooter" role="contentinfo">
   <div class="footer-middle">
   <div class="container">
     <div class="row">
       <div class="col-md-3 col-sm-6">
         <!--Column1-->
         <div class="footer-pad">

           <a class="navbar-brand" href="#">
           <image src="lg.png" alt="" width="150" height="150" border=opx>
         </a>
         </div>
       </div>
       <div class="col-md-3">
         <!--Column1-->
         <div class="footer-pad">
           <h4>Heading 2</h4>
           <ul class="list-unstyled">
             <li><a href="#">Website Tutorial</a></li>
             <li><a href="#">Accessibility</a></li>
             <li><a href="#">Disclaimer</a></li>
             <li><a href="#">Privacy Policy</a></li>
             <li><a href="#">FAQs</a></li>
             <li><a href="#">Webmaster</a></li>
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
