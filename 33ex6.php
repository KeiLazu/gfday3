<!-- 6.
Write a function to compute the future investment value at a given interest rate for a specified number 
of years. 
Sample data (Monthly compounded) and Output:
Input the investment amount: 1000
Input the rate of interest: 10
Input number of years: 5
Expected Output:
Years    FutureValue                                     
1            1104.71                                     
2            1220.39                                     
3            1348.18                                     
4            1489.35                                     
5            1645.31 -->

<?php
    function computeInvestment($investmentAmount = 1000, $RoI = 7, $numberYears = 5)
    {
        echo "Years     Future Value\n";
        $numberYears+= 1;
        for ($i=1; $i < $numberYears; $i++) {

            // for ($j=0; $j < 12; $j++) { 
            //     $investmentAmount += mt_rand(0.01, $RoI);
            // }

            $investmentAmount += ($investmentAmount * ($RoI/100));

            $flooring = floor($investmentAmount);

            // output
            echo"$i         $flooring\n";

        }

    }

    computeInvestment();

?>