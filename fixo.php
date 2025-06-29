<?php
// Define the root directory to start the search (usually the public_html or the directory where this script is placed)
$rootDir = __DIR__;

// Function to recursively search and update all index.html files
function updateAssetPaths($dir) {
    // Create a RecursiveDirectoryIterator to go through each file in the directory
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($iterator as $file) {
        // Process only index.html files
        if ($file->isFile() && $file->getFilename() === 'index.html') {
            $filePath = $file->getRealPath();
            $content = file_get_contents($filePath);

            // Check if the file contains relative asset paths
            if (strpos($content, './assets/') !== false) {
                // Replace ./assets/ with /assets/
                $updatedContent = str_replace('./assets/', '/assets/', $content);

                // Save the updated content back to the file
                file_put_contents($filePath, $updatedContent);

                echo "Updated asset paths in: $filePath\n";
            } else {
                echo "No changes needed in: $filePath\n";
            }
        }
    }
}

// Run the function on the root directory
updateAssetPaths($rootDir);

echo "Asset path update complete.\n";
?>
