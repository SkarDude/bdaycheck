<!-- Alex Nagel, CIS 3003, Assignment 3 -->
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="main.css" media="screen" />
  <title>Birthday Script Result</title>
</head>
<body>
<?PHP
	function subDates($date1, $date2){
		return $date1->diff($date2);
	}
	if(isset($_POST["bday"]))
		{
			$birth = new DateTime($_POST["bday"]);
			$today = new DateTime();
			if($today > $birth){
				$age = subDates($birth, $today);
				$age = $age->format("%Y");
				echo '<h1>'.$age.' years old!</h1>';
				if ($today->format("%d") == $birth->format("%d") && $today->format("%m") == $birth->format("%m"))
					echo '<img src="bday.gif" alt="Happy Birthday">';
			}
			else
				echo '<h1>Not born yet!</h1>';
		}
?>
<a href="index.html" class="button">Check Again</a>
</body>
