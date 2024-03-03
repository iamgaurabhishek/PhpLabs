<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = '';
            $linkCTA = 'Codeacdemy';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkCTA = 'W3 School';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = '';
            $linkCTA = "MDN.com";
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';
        
        if($linkURL ===''){
            echo '<p>'.$linkCTA.'</p>';
        }else{
            echo '<a>'.$linkURL.'</a>';
        }
        echo '<img src=" '.$linkImage .' "width="200" />';
        echo '<p>'.$linkDescription.'</p>';

        $randGrade = ceil(rand(50,100));

        if($randGrade <=59){
            echo '<h1>Sorry, you failed. You got a F grade:' .$randGrade.'</h>';
        }
        elseif($randGrade>=60 && $randGrade <=69){
            echo '<h1>You barely Passed C grade:' . $randGrade.'</h1>';
        }
        elseif($randGrade>=70 && $randGrade <=80){
            echo '<h1>You Passed B grade:' . $randGrade.'</h1>';
        }
        elseif($randGrade>=81 && $randGrade <=90){
            echo '<h1>You Passed A grade:' . $randGrade.'</h1>';
        }
        elseif($randGrade >=91){
            echo '<h1>You Passed with flying color : A+ grade:' . $randGrade.'</h1>';
        }
        $weekDay = ceil(rand(1,7));

        switch($weekDay){
            case 1 :
                echo "Monday, Busy day";
                break;
            case 2 :
                echo "Tuesday, Again a busy day";
                break;
            case 3 :
                echo "Wednesday, Half way through a beautifull weekend";
                break;
            case 4 :
                echo "Thursday, So pretty well week till now.";
                break;
            case 5 :
                echo "Friday, Well this day we all love.";
                break;
            case 6:
                echo "Saturday, Party night";
                break;
            case 7:
                echo "Sunday, Relax";
                break;
            default:
                echo "Sorry";
                break;
        }
        ?>

    </body>
</html>