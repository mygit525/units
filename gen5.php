<?php
// Set your API key and endpoint for currency data
$apiKey = "6397c15d80e3b065d7c16f54";
$apiUrl = "https://v6.exchangerate-api.com/v6/$apiKey/latest/USD";

// Set the root directory and base URL for your website
$rootDir = "/home/u849707844/domains/measureunits.com/public_html";
$baseUrl = "https://measureunits.com";

// Metadata for sitemap
$lastmod = date("Y-m-d");
$changefreq = "daily";
$priority_home = "1.0";
$priority_default = "0.8";

// Initialize array to store URLs
$urls = [];

// Scan the directory for routes, as before
function scanDirectory($dir, $basePath = "") {
    global $urls, $baseUrl, $lastmod, $changefreq, $priority_home, $priority_default;
    
    $iterator = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
    foreach (new RecursiveIteratorIterator($iterator) as $file) {
        if ($file->getFilename() === "index.html") {
            $relativePath = str_replace($dir, "", $file->getPath());
            $route = rtrim($basePath . str_replace(DIRECTORY_SEPARATOR, "/", $relativePath), '/');
            $url = $baseUrl . $route . "/";

            $priority = ($route === "") ? $priority_home : $priority_default;

            $urls[] = [
                "loc" => $url,
                "lastmod" => $lastmod,
                "changefreq" => $changefreq,
                "priority" => $priority
            ];
        }
    }
}

// Start scanning from the root directory
scanDirectory($rootDir);

// Fetch supported currency codes from the API
$response = file_get_contents($apiUrl);
if ($response !== false) {
    $apiData = json_decode($response, true);
    if (isset($apiData['conversion_rates']) && is_array($apiData['conversion_rates'])) {
        // Get all currency codes from the 'conversion_rates' data
        $currencyCodes = array_keys($apiData['conversion_rates']);

        // Generate currency pair routes for each combination
        foreach ($currencyCodes as $from) {
            foreach ($currencyCodes as $to) {
                if ($from !== $to) { // Skip identical pairs like USD-USD
                    $urls[] = [
                        "loc" => $baseUrl . "/currency/" . strtoupper($from) . "-to-" . strtoupper($to) . "/",
                        "lastmod" => $lastmod,
                        "changefreq" => $changefreq,
                        "priority" => $priority_default
                    ];
                }
            }
        }
    }
}

// Generate the XML sitemap
$dom = new DOMDocument("1.0", "UTF-8");
$dom->formatOutput = true;
$urlset = $dom->createElement("urlset");
$urlset->setAttribute("xmlns", "http://www.sitemaps.org/schemas/sitemap/0.9");
$dom->appendChild($urlset);

foreach ($urls as $urlInfo) {
    $url = $dom->createElement("url");
    
    $loc = $dom->createElement("loc", htmlspecialchars($urlInfo["loc"]));
    $url->appendChild($loc);

    $lastmodElem = $dom->createElement("lastmod", $urlInfo["lastmod"]);
    $url->appendChild($lastmodElem);

    $changefreqElem = $dom->createElement("changefreq", $urlInfo["changefreq"]);
    $url->appendChild($changefreqElem);

    $priorityElem = $dom->createElement("priority", $urlInfo["priority"]);
    $url->appendChild($priorityElem);

    $urlset->appendChild($url);
}

// Save the XML sitemap
$dom->save("$rootDir/sitemap.xml");

echo "Sitemap generated successfully as sitemap.xml";
?>
