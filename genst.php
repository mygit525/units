<?php
// Define base URL
$base_url = "https://measureunits.com";

// Define all routes
$routes = [
    "/",  // Homepage
    // Temperature
    "/temperature/",
    "/temperature/celsius-to-fahrenheit/",
    "/temperature/celsius-to-kelvin/",
    "/temperature/fahrenheit-to-celsius/",
    "/temperature/fahrenheit-to-kelvin/",
    "/temperature/kelvin-to-celsius/",
    "/temperature/kelvin-to-fahrenheit/",
    // Weight
    "/weight/",
    "/weight/grams-to-kilograms/",
    "/weight/grams-to-metric_tons/",
    "/weight/grams-to-ounces/",
    "/weight/grams-to-pounds/",
    "/weight/kilograms-to-grams/",
    "/weight/kilograms-to-metric_tons/",
    "/weight/kilograms-to-ounces/",
    "/weight/kilograms-to-pounds/",
    "/weight/metric_tons-to-grams/",
    "/weight/metric_tons-to-kilograms/",
    "/weight/metric_tons-to-ounces/",
    "/weight/metric_tons-to-pounds/",
    "/weight/ounces-to-grams/",
    "/weight/ounces-to-kilograms/",
    "/weight/ounces-to-metric_tons/",
    "/weight/ounces-to-pounds/",
    "/weight/pounds-to-grams/",
    "/weight/pounds-to-kilograms/",
    "/weight/pounds-to-metric_tons/",
    "/weight/pounds-to-ounces/",
    // Volume
    "/volume/",
    "/volume/cubic_feet-to-cubic_meters/",
    "/volume/cubic_feet-to-fluid_ounces/",
    "/volume/cubic_feet-to-gallons/",
    "/volume/cubic_feet-to-liters/",
    "/volume/cubic_feet-to-milliliters/",
    "/volume/cubic_meters-to-cubic_feet/",
    "/volume/cubic_meters-to-fluid_ounces/",
    "/volume/cubic_meters-to-gallons/",
    "/volume/cubic_meters-to-liters/",
    "/volume/cubic_meters-to-milliliters/",
    "/volume/fluid_ounces-to-cubic_feet/",
    "/volume/fluid_ounces-to-cubic_meters/",
    "/volume/fluid_ounces-to-gallons/",
    "/volume/fluid_ounces-to-liters/",
    "/volume/fluid_ounces-to-milliliters/",
    "/volume/gallons-to-cubic_feet/",
    "/volume/gallons-to-cubic_meters/",
    "/volume/gallons-to-fluid_ounces/",
    "/volume/gallons-to-liters/",
    "/volume/gallons-to-milliliters/",
    "/volume/liters-to-cubic_feet/",
    "/volume/liters-to-cubic_meters/",
    "/volume/liters-to-fluid_ounces/",
    "/volume/liters-to-gallons/",
    "/volume/liters-to-milliliters/",
    "/volume/milliliters-to-cubic_feet/",
    "/volume/milliliters-to-cubic_meters/",
    "/volume/milliliters-to-fluid_ounces/",
    "/volume/milliliters-to-gallons/",
    "/volume/milliliters-to-liters/",
    // Area
    "/area/",
    "/area/acres-to-hectares/",
    "/area/acres-to-square_feet/",
    "/area/acres-to-square_kilometers/",
    "/area/acres-to-square_meters/",
    "/area/acres-to-square_miles/",
    "/area/hectares-to-acres/",
    "/area/hectares-to-square_feet/",
    "/area/hectares-to-square_kilometers/",
    "/area/hectares-to-square_meters/",
    "/area/hectares-to-square_miles/",
    "/area/square_feet-to-acres/",
    "/area/square_feet-to-hectares/",
    "/area/square_feet-to-square_kilometers/",
    "/area/square_feet-to-square_meters/",
    "/area/square_feet-to-square_miles/",
    "/area/square_kilometers-to-acres/",
    "/area/square_kilometers-to-hectares/",
    "/area/square_kilometers-to-square_feet/",
    "/area/square_kilometers-to-square_meters/",
    "/area/square_kilometers-to-square_miles/",
    "/area/square_meters-to-acres/",
    "/area/square_meters-to-hectares/",
    "/area/square_meters-to-square_feet/",
    "/area/square_meters-to-square_kilometers/",
    "/area/square_meters-to-square_miles/",
    "/area/square_miles-to-acres/",
    "/area/square_miles-to-hectares/",
    "/area/square_miles-to-square_feet/",
    "/area/square_miles-to-square_kilometers/",
    "/area/square_miles-to-square_meters/",
    // Time
    "/time/",
    "/time/days-to-hours/",
    "/time/days-to-minutes/",
    "/time/days-to-months/",
    "/time/days-to-seconds/",
    "/time/days-to-weeks/",
    "/time/days-to-years/",
    "/time/hours-to-days/",
    "/time/hours-to-minutes/",
    "/time/hours-to-months/",
    "/time/hours-to-seconds/",
    "/time/hours-to-weeks/",
    "/time/hours-to-years/",
    "/time/minutes-to-days/",
    "/time/minutes-to-hours/",
    "/time/minutes-to-months/",
    "/time/minutes-to-seconds/",
    "/time/minutes-to-weeks/",
    "/time/minutes-to-years/",
    "/time/months-to-days/",
    "/time/months-to-hours/",
    "/time/months-to-minutes/",
    "/time/months-to-seconds/",
    "/time/months-to-weeks/",
    "/time/months-to-years/",
    "/time/seconds-to-days/",
    "/time/seconds-to-hours/",
    "/time/seconds-to-minutes/",
    "/time/seconds-to-months/",
    "/time/seconds-to-weeks/",
    "/time/seconds-to-years/",
    "/time/weeks-to-days/",
    "/time/weeks-to-hours/",
    "/time/weeks-to-minutes/",
    "/time/weeks-to-months/",
    "/time/weeks-to-seconds/",
    "/time/weeks-to-years/",
    "/time/years-to-days/",
    "/time/years-to-hours/",
    "/time/years-to-minutes/",
    "/time/years-to-months/",
    "/time/years-to-seconds/",
    "/time/years-to-weeks/",
    // Speed
    "/speed/",
    "/speed/feet_per_second-to-kilometers_per_hour/",
    "/speed/feet_per_second-to-knots/",
    "/speed/feet_per_second-to-meters_per_second/",
    "/speed/feet_per_second-to-miles_per_hour/",
    "/speed/kilometers_per_hour-to-feet_per_second/",
    "/speed/kilometers_per_hour-to-knots/",
    "/speed/kilometers_per_hour-to-meters_per_second/",
    "/speed/kilometers_per_hour-to-miles_per_hour/",
    "/speed/knots-to-feet_per_second/",
    "/speed/knots-to-kilometers_per_hour/",
    "/speed/knots-to-meters_per_second/",
    "/speed/knots-to-miles_per_hour/",
    "/speed/meters_per_second-to-feet_per_second/",
    "/speed/meters_per_second-to-kilometers_per_hour/",
    "/speed/meters_per_second-to-knots/",
    "/speed/meters_per_second-to-miles_per_hour/",
    "/speed/miles_per_hour-to-feet_per_second/",
    "/speed/miles_per_hour-to-kilometers_per_hour/",
    "/speed/miles_per_hour-to-knots/",
    "/speed/miles_per_hour-to-meters_per_second/",
    // Fuel Consumption
    "/fuel/",
    "/fuel/gallons_per_100miles-to-kilometers_per_liter/",
    "/fuel/gallons_per_100miles-to-liters_per_100km/",
    "/fuel/gallons_per_100miles-to-miles_per_gallon/",
    "/fuel/gallons_per_100miles-to-miles_per_liter/",
    "/fuel/kilometers_per_liter-to-gallons_per_100miles/",
    "/fuel/kilometers_per_liter-to-liters_per_100km/",
    "/fuel/kilometers_per_liter-to-miles_per_gallon/",
    "/fuel/kilometers_per_liter-to-miles_per_liter/",
    "/fuel/liters_per_100km-to-gallons_per_100miles/",
    "/fuel/liters_per_100km-to-kilometers_per_liter/",
    "/fuel/liters_per_100km-to-miles_per_gallon/",
    "/fuel/liters_per_100km-to-miles_per_liter/",
    "/fuel/miles_per_gallon-to-gallons_per_100miles/",
    "/fuel/miles_per_gallon-to-kilometers_per_liter/",
    "/fuel/miles_per_gallon-to-liters_per_100km/",
    "/fuel/miles_per_gallon-to-miles_per_liter/",
    "/fuel/miles_per_liter-to-gallons_per_100miles/",
    "/fuel/miles_per_liter-to-kilometers_per_liter/",
    "/fuel/miles_per_liter-to-liters_per_100km/",
    "/fuel/miles_per_liter-to-miles_per_gallon/"
];

// Metadata
$lastmod = date("Y-m-d");
$changefreq = "daily";
$priority_home = "1.0";
$priority_default = "0.8";

// Create XML structure with formatting
$dom = new DOMDocument("1.0", "UTF-8");
$dom->formatOutput = true;
$urlset = $dom->createElement("urlset");
$urlset->setAttribute("xmlns", "http://www.sitemaps.org/schemas/sitemap/0.9");
$dom->appendChild($urlset);

// Add each route to the sitemap
foreach ($routes as $route) {
    $url = $dom->createElement("url");

    $loc = $dom->createElement("loc", htmlspecialchars($base_url . $route));
    $url->appendChild($loc);

    $lastmodElem = $dom->createElement("lastmod", $lastmod);
    $url->appendChild($lastmodElem);

    $changefreqElem = $dom->createElement("changefreq", $changefreq);
    $url->appendChild($changefreqElem);

    $priority = ($route == "/") ? $priority_home : $priority_default;
    $priorityElem = $dom->createElement("priority", $priority);
    $url->appendChild($priorityElem);

    $urlset->appendChild($url);
}

// Save the XML to a file with proper indentation
$dom->save("sitemap.xml");

echo "Sitemap generated successfully as sitemap.xml";
?>
