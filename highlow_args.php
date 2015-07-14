<?php  

//Now user inputs their min and max #s
if ($argc == 3) {
	$a = rand($argv[1], $argv[2]);
}

if ($argc != 3) { 
	fwrite(STDOUT, 'Let\'s play a number guessing game. You pick the minimum and maximum numbers in the range, and I\'ll draw the random number for you to guess. Pick the minimum number first... ');
	$argv[1] = trim(fgets(STDIN));
	fwrite(STDOUT, 'Now pick the maximum number... ');
	$argv[2] = trim(fgets(STDIN));
	$a = rand($argv[1], $argv[2]);
};


//output
fwrite(STDOUT, 'I\'ve picked the random number. Can you guess what it is? ');

//input from user
$guess = trim(fgets(STDIN));

while ($guess > 0) {

	if ($a == $guess) {
	$guess = 0;
	fwrite(STDOUT, 'Good guess! YOU WIN! ');
	}

	elseif ($a < $guess) {
	fwrite(STDOUT, 'Try again. Guess lower... ');
	$guess = trim(fgets(STDIN));
	}

	elseif ($a > $guess) {
	fwrite(STDOUT, 'Try again. Guess higher... ');
	$guess = trim(fgets(STDIN));
	}

	else {
		fwrite(STDOUT, 'Looking for a number between 1 and 100. Try again... ');
		$guess = trim(fgets(STDIN));
	}
};

//output
fwrite(STDOUT, 'Want to play again? Enter 0 for yes / Enter 1 for no... ');

//input from user
$playAgain = trim(fgets(STDIN));

if ($playAgain == 0) {
	fwrite(STDOUT, 'Thank you for playing!' . PHP_EOL);
} elseif ($guess == 1)  {
	fwrite(STDOUT, 'Thank you for playing! ' . PHP_EOL);
} else {
	fwrite(STDOUT, 'Enter 0 for yes / Enter 1 for no... ' . PHP_EOL);
}

?>