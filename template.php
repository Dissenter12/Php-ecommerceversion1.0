<?php
  $items = [
        ['name' => '  Sword Art Online Hollow Realization PlayStation 4 BRAND NEW - Region Free',
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
?>
<?php
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
    echo "<center><img src = '".$item['img']."'></center>";
      
    echo "<center><h3>" . $item['name'] . "</h3></center>";

    echo "<center>" . $item['price'] . "</center>";

    echo "<p>" . $item['description'] . "</p>";
  }
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">Mail</div>
    <div class="w3-center w3-padding-16">Ps4 Games</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/steak.jpg" alt="Steak" style="width:100%">
      <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/cherries.jpg" alt="Cherries" style="width:100%">
      <h3>Cherries, interrupted</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
      <h3>All I Need Is a Popsicle</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/salmon.jpg" alt="Salmon" style="width:100%">
      <h3>Salmon For Your Skin</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect Sandwich, A Real Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/croissant.jpg" alt="Croissant" style="width:100%">
      <h3>Le French</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
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
    <h3>About Me, The Food Man</h3><br>
    <img src="/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
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
