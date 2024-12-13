<?php
$num = readline("Enter a value: ");
print "Guess the number! Hint: it's between 0 and $num... \r\n";
$trueNum = random_int(1,$num);
$attempts = 10;
while (true){
    print "You have $attempts attempts left. \r\n";
    $guessNum = readline("Guess the number: ");
    if ($guessNum == $trueNum){
        print "Congrats, you guess the number!";
        break;
    }
    else{
        print "That's not correct... \r\n";
        $attempts --;
        if ($attempts == 0){
            print "GAME OVER, you lost...";
            break;
        }
    }
}
