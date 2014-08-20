<html>
<head>
	<?php
	function exercise1() {
		$i = 1;
		do {
			echo "<p>$i</p>";
		} while($i++ < 10);
	}
	function exercise2() {
		for($i = 1; $i <= 10; $i++) {
			echo "<p>$i</p>";
		}
	}
	function exercise3() {
		$movies = array("The Princess Bride", "Scott Pilgrim vs. The World", "The Way Way Back");
		foreach ($movies as $film) {
			echo "<p>$film</p>";
		}
	}
	function person_creator($first, $last, $phone) {
		return array('first_name' => $first, 'last_name' => $last, 'phone_number' => $phone);
	}
	?>
</head>

<body>

<?php
	var_dump(person_creator("Mason", "Twitty", "8248887"));
?>
	
</body>

</html>
