<?php
// Declare a recursive function
function recursiveDirectoryTraversal($root) {
    // Initialize a static variable to keep track of the depth of the directory
    static $depth = 0;

    // List all of the files in the specified directory
    $fileList = scandir($root);

    // Loop through each of the files in the directory
    foreach ($fileList as $entry) {
        // Increment the directory depth
        $depth++;

        // Ignore the current and parent directories
        if ($entry != '.' && $entry != '..') {
            $fullPath = $root . "/" . $entry;

            // Output the file name
            echo str_repeat('  ', $depth) . $entry . "\n";

            // If the entry is a directory, recall the function
            if (is_dir($fullPath)) {
                recursiveDirectoryTraversal($fullPath);
            }
        }

        // Decrement the directory depth
        $depth--;
    }
}

// Call the recursiveDirectoryTraversal()
recursiveDirectoryTraversal('/path/to/directory');