<?php
    // Display prompt
    print("Ticket price in rubles: "); 
    $n = intval(fgets(STDIN)); // Input ticket price
    $x = 0; // Number of 4-ruble tokens
    $y = 0; // Number of 7-ruble tokens
    $n_orig = $n; // Store original price for output
    // Iterate through the number of 7-ruble tokens from maximum to 0
    $max_y = intdiv($n, 7); 
    for ($y = $max_y; $y >= 0; $y--)
    {
        $remainder = $n - 7 * $y; // Amount remaining after using 7-ruble tokens
        if ($remainder % 4 == 0)  // Check if remainder can be covered by 4-ruble tokens
        {
            // If the full amount is successfully covered, exit the loop
            $x = intdiv($remainder, 4); 
            // Display the found solution
            print("The entered price " . $n_orig . " can be exchanged for tokens:\r\n"); 
            print("Number of 4-ruble tokens: " . $x . "\r\n"); 
            print("Number of 7-ruble tokens: " . $y . "\r\n"); 
            break; 
        }
    }
    // No solution found for the specified amount
    if (($x <= 0) && ($y <= 0))
    {
        print("The entered price " . $n_orig . " cannot be exchanged for tokens"); 
    }
?>