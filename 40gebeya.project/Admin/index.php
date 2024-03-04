<?php
session_start();
?>

<head>
    <title>40Gebeya</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Welcome.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Welcome.css">
  
  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;"
>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="fa fa-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
       <img src="image/logo.jpg" alt="logo" width="50dvb"  ></a>
   
          <a class="navbar-brand" href="index.php">40Gebeya </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <div class="switch">
        <input
          id="language-toggle"
          class="check-toggle check-toggle-round-flat"
          type="checkbox"
        />
        <label for="language-toggle"></label>
        <span class="on">EN</span>
        <span class="off">አማ</span>
      </div>
          </ul>

            
          <ul class="nav navbar-nav navbar-right">
              
              <li><a href="signup" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-pencil"></span> Sign Up <span class="caret"></span> </a>
                  <ul class="dropdown-menu">
                      <li> <a href="adminsignup.php"> Admin Sign-up</a></li>
                  </ul>
              </li>
              <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-sign-in"></span> Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li> <a href="adminlogin.php">Admin Login</a></li>
                  </ul>
              </li>
          </ul>
            
            

         
            
        </div>
    </div>
</nav>

    <div id="english-content">
      
      <div class="carousel">
        
        <div class="list">
          <div class="item">
            <img src="image/abaya.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Lake Abaya</div>
              <div class="topic">አባያ ሀይቅ</div>
              <div class="des" id="am-abaya">
                Lake Abaya is a large lake in Ethiopia, east of the Guge Mountains. It has a reddish-brown color, many crocodiles, and three rivers flowing into it. The town of Arba Minch and the Nechisar National Park are on its shores. Lake Chamo is south ofit, separated by the Bridge of God.
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="image/chamo.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Lake Chamo</div>
              <div class="topic">ጫሞ ሀይቅ</div>
              <div class="des" id="am-chamo">
                Lake Chamo is a lake in southern Ethiopia, located in the Main Ethiopian Rift. It is south of Lake Abaya and the city of Arba Minch, and west of the Amaro Mountains. The lake is part of the Nechisar National Park, which is home to various wildlife. Lake Chamo is famous for its large population of crocodiles and hippos, which can be seen from boat trips or the Bridge of God, a natural land bridge that separates it from Lake Abaya.
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="image/croc.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Crocodile</div>
              <div class="topic">አዞ</div>
              <div class="des" id="am-crocodile">
                Arbaminch is known for its crocodile ranch, the Arba Minch Crocodile Ranch (AMCR).This government-run facility houses a large number of crocodiles. The ranch has been in service for over three decades and was relocated 7km from Arba Minch town after being damaged by a flood about 15 years ago. The crocodiles at the ranch are either hatched from eggs collected in the lakes or are young crocodiles that have been captured and reared on the farm.
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="image/hippopotamus.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Hippopotamus</div>
              <div class="topic">ጉማሬ</div>
              <div class="des" id="am-Hippopotamus">
                Lake Chamo in Arbaminch is a popular spot for viewing hippos. These semi-aquatic mammals are known for their large size and their ability to stay underwater for up to 5 minutes. They are herbivores, feeding mostly on grasses, and are most active during the night.
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="image/kudu.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Kudu</div>
              <div class="topic">ኩዱ</div>
              <div class="des" id="am-Kudu">
                The Greater and Lesser Kudu are among the wildlife that can be seen in the Nechisar National Park near Arbaminch. Kudus are known for their long, spiral horns and their ability to jump high fences.  They are browsers and feed on leaves, flowers, and fruits of a wide variety of plants.
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="image/Pelican.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Pelican</div>
              <div class="topic">ፔሊካን</div>
              <div class="des" id="am-Pelican">
                Pelicans are among the aquatic birds that can be seen on Lake Chamo in Arbaminch.These large water birds are known for their distinctive pouch under their beak,and they use it to catch fish and, sometimes, to cool off.
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="image/warthog.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Warthog</div>
              <div class="topic">ከርከሮ</div>
              <div class="des" id="am-Warthog">
                Warthogs are a common sight in the plains of Arbaminch. These wild pigs are easily recognizable by their distinct tusks and facial wattles. Despite their somewhat fierce appearance, warthogs are generally peaceful animals. They are known to inhabit the grasslands and savannas, and are often seen in the vicinity of Paradise Lodge Arbaminch.
              </div>
              
            </div>
          </div>
          <div class="item">
            <img src="image/zebra.jpg" />
            <div class="content">
              <div class="author" id="author"><h2>Welcome to 40Gebeya</h2></div>
              <div class="title">Zebra</div>
              <div class="topic">የሜዳ አህያ</div>
              <div class="des" id="am-Zebra">
                Zebras are one of the many species that can be seen in the Nechisar National Park near Arbaminch. These animals are known for their distinctive black and white striped coats. Each zebra's stripes are unique, much like human fingerprints. Zebras are social animals and are often seen in small family groups consisting of a male, several females, and their young.
              </div>
              <div class="buttons">
                <button id="toggleButton" onclick="toggleVisibility()"><div id="to-hide">Show</div></button>
              </div>
            </div>
          </div>
        </div>
        <!-- thumbnail list -->
        <div class="thumbnail">
          <div class="item">
            <img src="image/abaya.jpg" />
            <div class="content">
              <div class="title">Name Slider</div>
              <div class="description">Description</div>
            </div>
          </div>
          <div class="item">
            <img src="image/chamo.jpg" />
            <div class="content">
              <div class="title">Lake Chamo</div>
              <div class="description">ጫሞ</div>
            </div>
          </div>
          <div class="item">
            <img src="image/croc.jpg" />
            <div class="content">
              <div class="title">Crocodile</div>
              <div class="description">አዞ</div>
            </div>
          </div>
          <div class="item">
            <img src="image/hippopotamus.jpg" />
            <div class="content">
              <div class="title">Hippopotamus</div>
              <div class="description">ጉማሬ</div>
            </div>
          </div>
          <div class="item">
            <img src="image/kudu.jpg" />
            <div class="content">
              <div class="title">Kudu</div>
              <div class="description">ኩዱ</div>
            </div>
          </div>
          <div class="item">
            <img src="image/Pelican.jpg" />
            <div class="content">
              <div class="title">Pelican</div>
              <div class="description">ፔሊካን</div>
            </div>
          </div>
          <div class="item">
            <img src="image/warthog.jpg" />
            <div class="content">
              <div class="title">Warthog</div>
              <div class="description">ከርከሮ</div>
            </div>
          </div>
          <div class="item">
            <img src="image/zebra.jpg" />
            <div class="content">
              <div class="title">Zebra</div>
              <div class="description">የሜዳ አህያ</div>
            </div>
          </div>
        </div>
        <!-- image transition -->
        <div class="arrows">
          <button id="prev"></button>
          <button id="next"></i></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
      </div>
    </div>

    <script src="js/transition.js"></script>
    <script src="js/lang-welcome.js"></script>

    <script type="text/JavaScript">

function toggleVisibility() {
    var myDiv = document.getElementById('side-login');
    if (myDiv.style.display !== 'none') {
        myDiv.style.display = 'none';
    } else {
        myDiv.style.display = 'block';
    }
}
document.getElementById("am-login").innerHTML = "ግባ"
    </script>
</body>
</html>