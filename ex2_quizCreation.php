<!DOCTYPE html>
<html>
    <style>
        body
        {
            background-color: aliceblue;
        }
    </style>

    <head>

    </head>
    <body>
    
        <h3>Chemistry Quiz Results</h3>

        <?php

            $q1 = $_POST["q1"];
            $q2 = $_POST["q2"];
            $q3 = $_POST["q3"];
            $q4 = $_POST["q4"];
            $q5 = $_POST["q5"];

            $ans1 = $_POST["q1Ans"];
            $ans2 = $_POST["q2Ans"];
            $ans3 = $_POST["q3Ans"];
            $ans4 = $_POST["q4Ans"];
            $ans5 = $_POST["q5Ans"];

            $correctAns1 = $_POST["correctAns1"];
            $correctAns2 = $_POST["correctAns2"];
            $correctAns3 = $_POST["correctAns3"];
            $correctAns4 = $_POST["correctAns4"];
            $correctAns5 = $_POST["correctAns5"];

            $correctCount = 0;

            if ($ans1 == "Antimony")
            {
                $correctCount++;
            }
            if ($ans2 == "Osmium")
            {
                $correctCount++;
            }
            if ($ans3 == "Pb")
            {
                $correctCount++;
            }
            if ($ans4 == "Hydrogen")
            {
                $correctCount++;
            }
            if ($ans5 == "Germanium")
            {
                $correctCount++;
            }

            $correctPercent = ($correctCount / 5) * 100;

            echo "Question 1: Which element does the chemical symbol Sb represent?";
            echo "<br>";
            echo "Your Answer: " .$ans1;
            echo "<br>";
            echo "Correct Answer: Antimoney";
            echo "<br>";

            echo "<br>";
            echo "Question 2: Which element is NOT a Nobel Gas?";
            echo "<br>";
            echo "Your Answer: " .$ans2;
            echo "<br>";
            echo "Correct Answer: Osmium";
            echo "<br>";

            echo "<br>";
            echo "Question 3: What is the chemical symbol for Lead?";
            echo "<br>";
            echo "Your Answer: " .$ans3;
            echo "<br>";
            echo "Correct Answer: Pb";
            echo "<br>";

            echo "<br>";
            echo "Question 4: Which element is the most abundant in the universe?";
            echo "<br>";
            echo "Your Answer: " .$ans4;
            echo "<br>";
            echo "Correct Answer: Hydrogen";
            echo "<br>";

            echo "<br>";
            echo "Question 5: Which element is a Metalloid?";
            echo "<br>";
            echo "Your Answer: " .$ans5;
            echo "<br>";
            echo "Correct Answer: Germanium";
            echo "<br>";

            echo "<br>";
            echo "Correct: " .$correctCount . " / 5";
            echo "<br>";

            echo "Percentage: " .$correctPercent . "%";
            echo "<br>";

        ?>

    </body>

</html>