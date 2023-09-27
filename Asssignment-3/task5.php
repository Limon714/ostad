<?php
function generatePassword($length) {
    // Define the characters to include in the password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    
    // Initialize an empty password
    $password = '';
    
    // Get the total number of characters
    $totalCharacters = strlen($characters);
    
    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Generate a random index within the range of characters
        $randomIndex = rand(0, $totalCharacters - 1);
        
        // Append the character at the random index to the password
        $password .= $characters[$randomIndex];
    }
    
    return $password;
}

// Generate a 12-character password
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $password;
?>
