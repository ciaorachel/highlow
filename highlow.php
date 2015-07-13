<?php  

$a = rand(1, 100);

//output
fwrite(STDOUT, 'I\'ve picked a random number between 1 and 100. Can you guess what it is? ');

//input from user
$guess = trim(fgets(STDIN));

while ($guess > 0) {

	if ($a == $guess) {
	$guess = 0;
	fwrite(STDOUT, 'Good guess! YOU WIN! ');
	/*echo "{$a}\n";*/
	/*echo "Good guess! YOU WIN!\n";*/
	}

	elseif ($a < $guess) {
	fwrite(STDOUT, 'Try again. Guess lower... ');
	$guess = trim(fgets(STDIN));
	/*echo "Try again. Guess lower...\n";*/
	}

	elseif ($a > $guess) {
	fwrite(STDOUT, 'Try again. Guess higher... ');
	$guess = trim(fgets(STDIN));
	/*echo "Try again. Guess higher...\n";*/
	}

	else {
		fwrite(STDOUT, 'Looking for a number between 1 and 100. Try again... ');
		$guess = trim(fgets(STDIN));
	}
}

//output
fwrite(STDOUT, 'Want to play again? Enter 1 for yes / Enter 0 for no... ');

//input from user
$playAgain = trim(fgets(STDIN));

if ($playAgain == 1) {
	fwrite(STDOUT, 'OK, cool! ' . PHP_EOL);
} else {
	fwrite(STDOUT, 'Thank you for playing!');
}

?>