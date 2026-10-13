<?php
    print("Ticket price in rubles: "); 
    $n = intval(fgets(STDIN)); // Input ticket price
    $x = 0; // Number of 4-ruble tokens
    $y = intdiv($n, 7); // Start with the maximum number of 7-ruble tokens
    $found = false; // Flag indicating if a solution has been found
    // Iterate through the number of 7-ruble tokens from maximum down to 0
    // until a solution is found or we run out of 7-ruble tokens
    while (($y >= 0) && (!$found))
    {
        $remainder = $n - 7 * $y; // Amount after using 7-ruble tokens
        if ($remainder % 4 == 0)  // Check if the remainder can be covered by 4-ruble tokens
        {
            $x = intdiv($remainder, 4); // If the full amount is covered, end the loop
            // Output the found solution to the screen
            print("The entered price " . $n . " can be exchanged for tokens:\r\n"); 
            print("Number of 4-ruble tokens: " . $x . "\r\n"); 
            print("Number of 7-ruble tokens: " . $y . "\r\n"); 
            // Set the flag variable to true
            // because a solution was found
            $found = true; 
        }
        $y -= 1; // Decrease the number of 7-ruble tokens
    }
    // No solution exists for the specified amount
    if (!$found)
    {
        print("The entered price " . $n . " cannot be exchanged for tokens\r\n"); 
    }
?>