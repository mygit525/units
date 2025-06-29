<?php
// Define API key and endpoint
$apiKey = "6397c15d80e3b065d7c16f54";
$apiUrl = "https://v6.exchangerate-api.com/v6/$apiKey/latest/USD";

// Define path to units-data.js
$unitsDataFile = "/home/u849707844/domains/measureunits.com/public_html/units-data.txt"; // Replace with your actual file path

// Fetch currency data from the API
$response = file_get_contents($apiUrl);
if ($response === false) {
    die("Failed to fetch data from the API.");
}

$data = json_decode($response, true);
if (!isset($data['conversion_rates']) || !is_array($data['conversion_rates'])) {
    die("Invalid API response.");
}

// Mapping of currency codes to full names and common symbols
$currencyDetails = [
    'USD' => ['label' => 'US Dollar', 'symbol' => '$'],
    'EUR' => ['label' => 'Euro', 'symbol' => '€'],
    'GBP' => ['label' => 'British Pound', 'symbol' => '£'],
    'JPY' => ['label' => 'Japanese Yen', 'symbol' => '¥'],
    'CHF' => ['label' => 'Swiss Franc', 'symbol' => 'Fr'],
    'CAD' => ['label' => 'Canadian Dollar', 'symbol' => 'C$'],
    'AUD' => ['label' => 'Australian Dollar', 'symbol' => 'A$'],
    'CNY' => ['label' => 'Chinese Yuan', 'symbol' => '¥'],
    // Add more currency codes as needed
];

// Generate the currency units array in JavaScript format
$currencyUnits = [];
foreach ($data['conversion_rates'] as $code => $rate) {
    // Use mapped details if available; otherwise, default to code
    $label = isset($currencyDetails[$code]) ? $currencyDetails[$code]['label'] : $code;
    $symbol = isset($currencyDetails[$code]) ? $currencyDetails[$code]['symbol'] : '';
    $currencyUnits[] = "{ label: '$label', value: '$code', symbol: '$symbol' }";
}

// Format the currency array for JavaScript
$currencyUnitsJs = implode(",\n      ", $currencyUnits);

// Read the original units-data.js file
$unitsDataContent = file_get_contents($unitsDataFile);
if ($unitsDataContent === false) {
    die("Failed to read units-data.txt file.");
}

// Replace the currency units section with the generated list
$pattern = "/(id: 'currency',.*?units: \[)(.*?)(\][^\]]*?\})/s";
$replacement = "\$1\n      $currencyUnitsJs\n    \$3";
$updatedContent = preg_replace($pattern, $replacement, $unitsDataContent);

if ($updatedContent === null) {
    die("Failed to update units-data.txt content.");
}

// Write the updated content back to units-data.js
file_put_contents($unitsDataFile, $updatedContent);

echo "units-data.txt file updated successfully!";
echo "Attempting to read file at: " . $unitsDataFile . "\n";
$unitsDataFile = "/home/u849707844/domains/measureunits.com/public_html/units-data.txt"; // Ensure this is correct

// Test if file exists and is readable
if (!file_exists($unitsDataFile)) {
    die("File does not exist at the specified path.");
}
if (!is_readable($unitsDataFile)) {
    die("File exists but is not readable. Check permissions.");
}

// Continue with the rest of the script


?>
