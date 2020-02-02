
Factorial using Forward For Loop in PHP
$fact = 1;  
//getting value from input text box 'number'  
$number = 4;  
echo "Factorial of $number:";  
//start loop  
for ($i = 1; $i <= $number; $i++){         
  $fact = $fact * $i;  
}  
echo $fact . "<br>";  

Factorial using Reverse For Loop in PHP

$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial"; 

Factorial using Recursion in PHP

function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  
echo "Factorial of 6 is " .fact(4); 
