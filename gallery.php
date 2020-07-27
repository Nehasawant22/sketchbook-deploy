<!DOCTYPE html>
<html lang="en">
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
        #myBtn {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: red;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 15px;

      }

      #myBtn:hover {
        background-color: #555;

      }
    </style>
    <style>
      body	{ background:url(bg9.jpg) top right repeat; background-attachment:fixed;
        margin: 0;
        font-family: 'HelveticaNeue';
      }
      * {
        box-sizing: border-box;
      }
      img{

        border-style: groove;
          border-width: 10px;
          border-color: black;

      }
      .header {
        text-align: center;
        padding: 32px;
      }

      /* Create two equal columns that floats next to each other */
      .column {
        float: left;
        width: 50%;
        padding-right:  20px;
      }

      .column img {
        margin-top: 12px;

      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      .contain {
        position: relative;
        width: 100%;

      }

      .image {
        display: block;
        width: 100%;
        height: auto;
      }

      .overlay {
        position: absolute;
        top: 0;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.3); /* Black see-through */
        color: #f1f1f1;
        width: 100%;
        transition: .5s ease;
        opacity:0;
        color: white;
        font-size: 15px;
        padding: 20px;
        text-align: center;
      }

      .contain:hover .overlay {
        opacity: 1;
      }
      @media screen and (max-width: 800px) {
        .column {
          -ms-flex: 50%;
          flex: 50%;
          max-width: 50%;
        }
      }

      /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 600px) {
        .column {
          -ms-flex: 100%;
          flex: 100%;
          max-width: 100%;
        }
      }
    </style>
    <script type='text/javascript'>
      var isCtrl = false;
      document.onkeyup=function(e)
        {
          if(e.which == 17 || e.which==16 || e.which==99)
          isCtrl=false;
        }
      document.onkeydown=function(e)
      {
        if(e.which == 123)
        isCtrl=true;
        if (((e.which == 85) || (e.which == 65) || (e.which == 88) || (e.which == 67) || (e.which == 86) || (e.which == 2) || (e.which == 3) || (e.which == 123)||(e.which == 99)|| (e.which ==16) || (e.which == 83)) && isCtrl == true)
          {
            alert('ALERT:content is protected');
            return false;
          }
      }
      // right click code
      var isNS = (navigator.appName == "Netscape") ? 1 : 0;
      if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
      function mischandler()
        {
            alert('ALERT:content is protected');
            return false;
        }
      function mousehandler(e)
        {
          var myevent = (isNS) ? e : event;
          var eventbutton = (isNS) ? myevent.which : myevent.button;
          if((eventbutton==2)||(eventbutton==3)) return false;
        }
      document.oncontextmenu = mischandler;
      document.onmousedown = mousehandler;
      document.onmouseup = mousehandler;
      //select content code disable  alok goyal
      function killCopy(e)
        {
          return false
        }
      function reEnable()
        {
          return true
        }
      document.onselectstart=new Function ("return false")
      if (window.sidebar)
        {
          document.onmousedown=killCopy
          document.onclick=reEnable
        }
    </script>
  </head>

  <body >

  <button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fa fa-arrow-up"></i></button>
      <h1>Art Gallery</h1>
     <span id = "staticText" >Gallery presents <span id="typeline" ></span></span>

     </div>
     <nav class="navbar  navbar-expand-sm bg-dark  sticky-top">

       <a class="navbar-brand" href="index.php">Home</a>
       <ul class="navbar-nav">

         <li class="nav-item">
           <a class="nav-link" href="gallery.php">Art gallery</a>
         </li>
       </ul>
     </nav>

      <h3 class="font-weight-bold">Wecome to Neha's sketchbook !! </h3>
      <div class="card" data-aos="zoom-in">
          <p style="font-size:18px;">Art is not, as the metaphysicians say, the manifestation of some mysterious idea of beauty or God; it is not, as the aesthetical physiologists say, a game in which man lets off his excess of stored-up energy; it is not the expression of man’s emotions by external signs; it is not the production of pleasing objects; and, above all, it is not inly pleasure; but it is a means of union among men, joining them together in the same feelings, and indispensable for the life and progress toward well-being of individuals and of humanity -Leo Tolstoy</p></div>

        <!-- Photo Grid -->
          <div class="row">
          <div class="column">
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000" >
              <img src="1.jpg" alt="Avatar" class="image style="width:100%" >
              <div class="overlay">Eye Sketch</div>
            </div>
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
              <img src="2.jpg" alt="Avatar" class="image style="width:100%">
              <div class="overlay">Mask with emotions</div>
            </div>
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
              <img src="3.jpg" alt="Avatar" class="image style="width:100%">
              <div class="overlay">Save earth </div>
            </div>
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
                <img src="8.jpg" alt="Avatar" class="image style="width:100%">
                <div class="overlay">Real life heros #covid-19</div>
              </div>
              <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
                <img src="17.jpg" alt="Avatar" class="image style="width:100%">
                <div class="overlay">3D sketch</div>
              </div>
          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="9.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Girl Sketch</div>
          </div>
        </div>
          <div class="column">
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
              <img src="20.jpg" alt="Avatar" class="image style="width:100%">
              <div class="overlay">Potrait Drawing</div>
            </div>
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
              <img src="10.jpg" alt="Avatar" class="image style="width:100%">
              <div class="overlay">Creative Sketch of nature</div>
            </div>
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
              <img src="11.jpg" alt="Avatar" class="image style="width:100%">
              <div class="overlay">Two faces of women "Evil and virtuous"</div>
            </div>
            <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
              <img src="19.jpg" alt="Avatar" class="image style="width:100%">
              <div class="overlay">3D art</div>
              <div class="contain">
                <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="4.jpg" alt="Avatar" class="image style="width:100%">
                  <div class="overlay">Emotions of nature</div>
                  </div>
                <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="16.jpg" alt="Avatar" class="image style="width:100%">
                  <div class="overlay">Doodle Art</div>
                </div>
              </div>
            </div>
        </div>
        <div class="column" data-aos="zoom-in" data-aos-duration="1000">
          <div class="contain">
            <img src="5.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Lord krishna</div>
          </div>
          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="6.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Boy Sketch</div>
          </div>

          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="12.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Changes in the girl With increasing age</div>
          </div>
          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="18.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Creative Sketch with bookshelf</div>
          </div>
        </div>
        <div class="column">
          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="13.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Creative Sketch with city</div>
          </div>
          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="14.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay"> Relation of mother and baby  </div>
          </div>
          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="15.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Eye with Imaginary Dream</div>
          </div>
          <div class="contain" data-aos="zoom-in" data-aos-duration="1000">
            <img src="7.jpg" alt="Avatar" class="image style="width:100%">
            <div class="overlay">Girl Sketch</div>
          </div>
        </div>
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
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  AOS.init();
  </script>
  <style>
  /*header section*/
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
        font-size: 4rem;
        font-weight: bolder;
    	text-align:left;

    }

    #staticText{
      font-size: 2rem;
      line-height: 1;
      font-family: 'HelveticaNeue';
      font-weight: 120;
      postion: fixed;
      margin:center;

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
  <script>
  //header section
  function write (obj, sentence, i, cb)
    {
        if (i != sentence.length) {
          setTimeout(function () {
            i++
            console.log('in timeout', i)
            obj.innerHTML = sentence.substr(0, i+1) +' <em aria-hidden="true"></em>';
            write(obj, sentence, i, cb)
          }, 50)
        }
        else {
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

        "collection of Pencil Sketches... ",

      ]

      var counter = 0
      function loop () {
        var sentence = sentences[counter % sentences.length]
        writeerase(typeline, sentence, 3000, loop)
        counter++
      }

      loop()
  </script>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  </body>
</html>
