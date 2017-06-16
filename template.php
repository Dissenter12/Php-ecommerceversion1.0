<?php
  $items = [
        ['name' => '  Sword Art Online Hollow Realization',
        'price' => 'Php 1421.00',
        'description' => 'developed by Aquria and published by Bandai Namco Entertainment for the PlayStation 4 and PlayStation Vita, based on the Japanese light novel series, Sword Art Online. It is the fourth video game in the series and the successor to Sword Art Online: Lost Song.',
        'img' => 'sao.jpg',
        'category' => 'Role Playing Game'
        ],
        ['name' => 'The Witcher III: Wild Hunt Complete Edition',
        'price' => 'Php 2401.00',
        'description' => 'The Witcher 3: Wild Hunt is an action role-playing video game developed by CD Projekt and published by CD Projekt RED. It was released worldwide on 19 May 2015 ',
        'img' => 'wh.jpg',
        'category' => 'Role Playing Game'
        ],
        ['name' => 'Horizon Zero Dawn',
        'price' => 'Php 1519.00',
        'description' => 'Horizon Zero Dawn won the award for Best Original Game at the Game Critics Awards in 2015 and 2016. At release, it received generally favourable reviews from critics, who praised the open world, story, visuals, combat, the character of Aloy and the performance provided by her voice actress Ashly Burch, whilst giving criticism to the dialogue, melee combat and character models.',
        'img' => 'horizonzero.jpg',
        'category' => 'Action'
        ],
        ['name' => 'Bloodborne',
        'price' => 'Php 2795.00',
        'description' => 'Bloodborne is an action role-playing video game developed by FromSoftware and published by Sony Computer Entertainment.',
        'img' => 'bloodborne.jpg',
        'category' => 'Action'
        ],
        ['name' => 'Lara Croft Go',
        'price' => 'Php 441.00',
        'description' => 'Lara Croft Go is a 2015 turn-based puzzle video game in the Tomb Raider series. The player moves Lara Croft as a puzzle piece through a board game while avoiding obstacles and manipulating the environment.',
        'img' => 'tr.jpg',
        'category' => 'Strategy'
        ],
        ['name' => 'Final Fantasy XIV: A Realm Reborn',
        'price' => 'Php 975.00',
        'description' => 'It was developed and published by Square Enix, with Naoki Yoshida as producer and director, and was released worldwide on August 27, 2013. Final Fantasy XIV: A Realm Reborn takes place in the fictional land of Eorzea, five years after the events of the original release.',
        'img' => 'ff14.png',
        'category' => 'Strategy'
        ],
        ['name' => 'Just dance 2017 gold edition',
        'price' => 'Php 1958.00',
        'description' => 'Just Dance 2017 is a dance video game developed and published by Ubisoft. It was unveiled on June 13, 2016, during its E3 press conference, and was released on October 25, 2016.',
        'img' => 'jd.jpg',
        'category' => 'Fitness'
        ],
        ['name' => 'Street Fighter V',
        'price' => 'Php 1958.00',
        'description' => 'Street Fighter V is a fighting video game developed by Capcom and Dimps. It is the sixth main numbered entry in the Street Fighter series.',
        'img' => 'streetf.jpg',
        'category' => 'Action'
        ]
      ];

// $users = [['username' => 'admin', 'password' => 'admin'],
//           ['username' => 'Mavs', 'password' => 'gwapo!']];

// $fp = fopen('users.json','w');
// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
// fclose($fp);
$string = file_get_contents('users.json');
$users = json_decode($string, true);


  function create_dropdown($name_dropdown,$category){
    echo "<select name='$name_dropdown'>";
    echo "<option value='All'>All</option>";
    foreach ($category as $value) {
      if (isset($_POST[$name_dropdown]) && $_POST[$name_dropdown] == $value) {
        echo "<option selected value='$value'>$value</option>";
      } else {
        echo "<option value='$value'>$value</option>";  
      }

    }
    echo "</select>";
    
  }
  function display_item($item){
    echo "<div class='w3-quarter  div_height'>";
    echo "<center><img src = '".$item['img']."'style='width:70%'></center>";
      
    echo "<center><h3>" . $item['name'] . "</h3></center>";

    echo "<center>" . $item['price'] . "</center>";

    echo "<p>" . $item['description'] . "</p>";
    echo "</div>";
  }
?>
<!DOCTYPE html>
<html>
<title>My Ps4 Games</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
video{width: 100%; margin-bottom: -3%; position: relative; z-index: -1}
.w3-bar-block .w3-bar-item {padding:20px;}
.div_height{height:560px; }
.aboutme{display:block;margin:auto; width:40%; border-radius: 80px;}
.sign_out{font-size: 15px;}
.register{}
#login{}


.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
 
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
   <center><form action="" method="POST" id="login">
    Username:<br>
      <input type="text" name="username"><br>
    Password:<br>
      <input type="password" name="password"><br>
      <input type="submit" value="Login" class="button" name="login"> 
  </form></center>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Games</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>
<!-- The Modal -->
  <div id="myModal" class="modal">

  <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Register</h2>
      </div>
      <div class="modal-body">
            <center><form action="" method="POST" id="login">
              Username:<br>
            <input type="text" name="username_reg" placeholder="Username"><br>
              Password:<br>
            <input type="password" name="password_reg" placeholder="Password"><br>
             First Name:<br>
            <input type="text" name="first_reg"><br>
              Last Name:<br>
            <input type="password" name="last_reg"><br>
            <input type="submit" value="submit" class="button" name="register"> 
            </form></center>
            <?php
              if (isset($_POST['register'])) {
                $new_user['username'] = $_POST['username_reg'];
                $new_user['password'] = $_POST['password_reg'];

                $users[]=$new_user;
                
                $fp = fopen('users.json','w');
                fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
                fclose($fp);
              }
            ?>
      </div>
    </div>
  </div>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px; margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">
    <span class="sign_out">
    <?php
      if (isset($_POST['login'])) {
        foreach ($users as $user) {
          if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
            echo "Welcome! ".$user['username']." ".$user['password']."";
            echo " [ <a href='#''>sign out</a> ]</span>&nbsp";
          } 
        }
      }
    ?>
    <span class="sign_out"><button id="myBtn">Register</button> &nbsp</span> 
     
    </div>
    <div class="w3-center w3-padding-16">Ps4 Games</div>
  </div>
</div>
<video muted autoplay loop>
        <source src="https://media.playstation.com/is/content/SCEA/playstation-4-king-tv-spot-video-hero-04-ps4-us-10nov16"><h1>yeabah!</h1>
</video>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px; margin-top: -20%; background-color:  rgba(255, 255, 255, 0.5); ">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <?php
            $category = array_column($items, 'category');
      $category = array_unique($category);
      echo "<form method='POST'>";
      
      echo "<input type='submit' value='Filter' class='button' name='submit'> <br> ";
      echo create_dropdown('category',$category). "</form>";
      
        
    ?>
    <br>
    <?php
      foreach ($items as $item) {   
        if (!isset($_POST['category']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
            echo display_item($item);
        }
      }
    ?>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Me, The Game Man</h3><br>
    <img src="me.jpg" alt="Me" class="aboutme">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>With Passion For Real, Good Game</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of Ps4 but dont have one. I want to share my world with you.</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
      and
      <p>Powered by <a href="http://www.tuitt.com" target="_blank">Tuitt</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
