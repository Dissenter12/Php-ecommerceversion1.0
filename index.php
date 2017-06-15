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
<head>
	<title>My PS4 games</title>
</head>
<body>
<?php
	$items = [
				['name' => '	Sword Art Online Hollow Realization PlayStation 4 BRAND NEW - Region Free',
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
// to make a category : $category = 

			$category = array_column($items, 'category');
			$category = array_unique($category);
			echo "<form method='POST'>";
			
			echo "<br><input type='submit' value='Let me Scan' class='button' name='submit'> <br> ";
			echo create_dropdown('category',$category). "</form>";
			
				
				
			foreach ($items as $item) {		
				if (!isset($_POST['category']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
					echo display_item($item);
				}
			}

?>


</body>
</html>