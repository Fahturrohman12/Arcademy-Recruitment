<?php 
// Recursive PHP program to   
// count total number of 
// handshakes when a person 
// can shake hand with only one. 
  
// function to find all  
// possible handshakes 
function handshake($n)  
{ 
    // when n becomes 0 that means  
    // all the persons have done 
    // handshake with other 
    if ($n == 0)  
        return 0; 
    else
        return ($n - 1) + handshake($n - 1);  
} 
  
// Driver Code 
$n = 3;
echo "n3 =>"; 
echo(handshake($n)); 
echo "</br>";
// Driver Code 
$n = 6; 
echo "n6 =>"; 
echo(handshake($n)); 
  
// This code is contributed  
// by Shivi_Aggarwal 
?> 