<html>
<head>
	<?php
		class boardgame {
			public $game_name = '';
			public $min_players = 0;
			public $max_players = 0;

			public function __construct($name, $min_p, $max_p) {
				$this->game_name = $name;
				$this->min_players = $min_p;
				$this->max_players = $max_p;
			}
			public function play() {
				echo "You're playing $this->game_name.<br>";
			}
			public function players_supported() {
				if($this->min_players == $this->max_players) {
					echo "This game supports $this->min_players players.<br>";
				}
				else {
					echo "This game supports $this->min_players to $this->max_players players.<br>";
				}
			}
		}

		
	?>
</head>

<body>

<?php
	$carc = new boardgame('Carcassonne', 2, 5);
	$carc->play();
	$carc->players_supported();

	$jaipur = new boardgame('Jaipur', 2, 2);
	$jaipur->play();
	$jaipur->players_supported();
?>
	
</body>

</html>
