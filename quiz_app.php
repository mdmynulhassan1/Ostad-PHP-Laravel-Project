<?php
echo"-------------- Quiz App -----------------\n\n\n";

$result= 0;
// Question 1;
echo"1. What is the capital of Bangladesh? \n";
echo"a. Dinajpur\n";
echo"b. Dhaka\n";
echo"c. Chittagong\n";
echo "Enter your answer: \n";
$result1 = trim(fgets(STDIN));
if($result1 == "b"){
    echo"Your Answer $result1 is correct\n\n";
    $result++;
}else {
echo "Your Answer is Wrong\n";
echo "Correct Answer is b. Dhaka\n";
}


// Question 2;
echo"2. Which district of Bangladesh is famous for litchi? \n";
echo"a. Dinajpur\n";
echo"b. Dhaka\n";
echo"c. Chittagong\n";
echo "Enter your answer: \n";
$result2 = trim(fgets(STDIN));
if($result2 == "a"){
    echo"Your Answer $result2 is correct\n\n";
    $result++;
}else {
echo "Your Answer is Wrong\n";
echo "Correct Answer is a. Dinajpur\n";
}


// Question 3;
echo"3. Which is the commercial capital of Bangladesh? \n";
echo"a. Dinajpur\n";
echo"b. Dhaka\n";
echo"c. Chittagong\n";
echo "Enter your answer: \n";
$result3 = trim(fgets(STDIN));
if($result3 == "c"){
    echo"Your Answer $result3 is correct\n\n";
    $result++;
}else {
echo "Your Answer is Wrong\n";
echo "Correct Answer is c. Chittagong\n";
}


echo"You Got $result out of 3 \n\n";
echo "Thank you for playing the quiz app \nPower by Mynul hassan"; 


?>

