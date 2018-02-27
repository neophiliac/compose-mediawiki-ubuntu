<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
    exit;
}

######## Place your settings below ########
### GA
require_once "$IP/extensions/googleAnalytics/googleAnalytics.php";
// Replace xxxxxxx-x with YOUR GoogleAnalytics UA number
$wgGoogleAnalyticsAccount = 'UA-xxxxxxx-x';
// Add HTML code for any additional web analytics (can be used alone or with $wgGoogleAnalyticsAccount)
$wgGoogleAnalyticsOtherCode = '<script type="text/javascript" src="https://analytics.example.com/tracking.js"></script>';

// Optional configuration (for defaults see googleAnalytics.php)
// Store full IP address in Google Universal Analytics (see https://support.google.com/analytics/answer/2763052?hl=en for details)
$wgGoogleAnalyticsAnonymizeIP = false;
// Array with NUMERIC namespace IDs where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnoreNsIDs = array(500);
// Array with page names (see magic word Extension:Google Analytics Integration) where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnorePages = array('ArticleX', 'Foo:Bar');
// Array with special pages where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnoreSpecials = array( 'Userlogin', 'Userlogout', 'Preferences', 'ChangePassword', 'OATH');
// Use 'noanalytics' permission to exclude specific user groups from web analytics, e.g.
$wgGroupPermissions['sysop']['noanalytics'] = true;
$wgGroupPermissions['bot']['noanalytics'] = true;
// To exclude all logged in users give 'noanalytics' permission to 'user' group, i.e.
$wgGroupPermissions['user']['noanalytics'] = true;

### WikiSEO
wfLoadExtension( 'WikiSEO' );

### permissions
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['sysop']['createaccount'] = true;
$wgGroupPermissions['user']['edit'] = true;
$wgGroupPermissions['sysop']['edit'] = true;

# Bakerpedia skin
wfLoadSkin( 'Bakerpedia' );

### Navigation Menu Configuration ###
$wgBakerpediaNavigation = array(
  "Home" => array(
    "href" => "http://bakerpedia.com/"
  ),
  "Podcasts" => array(
    "href" => "http://bakerpedia.com/podcasts",
    "sub-menu" => array(
      "BAKED in Science" => array(
        "href" => "http://bakerpedia.com/podcasts/baked-in-science/"
      ),
      "Pitching a Loaf" => array(
        "href" => "http://bakerpedia.com/podcasts/pitching-a-loaf-podcast/"
      ),
    )
  ),
  "Blog" => array(
    "href" => "http://bakerpedia.com/blog",
    "sub-menu" => array(
      "Research Corner" => array(
        "href" => "http://bakerpedia.com/research-corner/"
      )
    )
  ),
  "Ingredients" => array(
    "href" => "http://bakerpedia.com/ingredients/"
  ),
  "Processes" => array(
    "href" => "http://bakerpedia.com/processes/"
  ),
  "Food Safety" => array(
    "href" => "http://bakerpedia.com/food-safety/"
  ),
  "Recipes" => array(
    "href" => "http://bakerpedia.com/baking-recipes/"
  ),
  "Specialities" => array(
    "href" => "http://bakerpedia.com/specialties/",
    "sub-menu" => array(
      "Bread" => array(
        "href" => "http://bakerpedia.com/specialties/bread/"
      ),
      "Cake" => array(
        "href" => "http://bakerpedia.com/specialties/cake/"
      ),
      "Cookie" => array(
        "href" => "http://bakerpedia.com/specialties/cookie/"
      ),
      "Cracker" => array(
        "href" => "http://bakerpedia.com/specialties/cracker/"
      ),
      "Donut" => array(
        "href" => "http://bakerpedia.com/specialties/donut/"
      ),
      "Gluten Free Baking" => array(
        "href" => "http://bakerpedia.com/specialties/gluten-free-baking/"
      ),
      "Healthy Baking" => array(
        "href" => "http://bakerpedia.com/specialties/healthy-baking/"
      ),
      "Organic Baking" => array(
        "href" => "http://bakerpedia.com/specialties/organic-baking/"
      ),
      "Pastries" => array(
        "href" => "http://bakerpedia.com/specialties/pastries/"
      ),
      "Pie" => array(
        "href" => "http://bakerpedia.com/specialties/pie/"
      ),
      "Pizza" => array(
        "href" => "http://bakerpedia.com/specialties/pizza/"
      ),
    )
  ),
  "Resources" => array(
    "href" => "/#",
    "sub-menu" => array(
      "The Academy" => array(
        "href" => "http://bakerpedia.com/resources/the-academy/",
        "sub-menu" => array(
          "Production of Gluten-free Baking" => array(
            "href" => "http://bakerpedia.com/product/production-of-gluten-free-baking/"
          ),
          "Science of Bread Production" => array(
            "href" => "http://bakerpedia.com/product/science-bread-production/"
          ),
          "Production of Artisan and Healthy Breads" => array(
            "href" => "http://bakerpedia.com/product/production-artisan-healthy-breads/"
          ),
          ">Production of Muffins and Cakes" => array(
            "href" => "http://bakerpedia.com/product/production-of-muffins-and-cakes/"
          ),
          "Science of Flour" => array(
            "href" => "http://bakerpedia.com/product/science-of-flour/"
          ),
          "Science of Sourdough" => array(
            "href" => "http://bakerpedia.com/product/the-science-of-sourdough/"
          ),
          "Production of Cookies and Desserts" => array(
            "href" => "http://bakerpedia.com/product/production-cookies-desserts/"
          )
        )
      ),
      "E-Books for Purchase" => array(
        "href" => "http://bakerpedia.com/e-books-for-purchase/"
      ),
      "Free Downloads" => array(
        "href" => "http://bakerpedia.com/free-downloads/"
      ),
      "Sponsor Showcase" => array(
        "href" => "http://bakerpedia.com/resources/sponsor-showcase/"
      ),
      "Tech Help" => array(
        "href" => "http://bakerpedia.com/tech-help/"
      ),
      "Baking Technology" => array(
        "href" => "http://bakerpedia.com/resources/baking-technology/"
      ),
      "Baking Calculators" => array(
        "href" => "/#",
        "sub-menu" => array(
          "Length Conversions" => array(
            "href" => "http://bakerpedia.com/resources/baking-calculators/length-conversions-2/"
          ),
          "Mass Conversions" => array(
            "href" => "http://bakerpedia.com/resources/baking-calculators/mass-conversion/"
          ),
          "Temperature Conversions" => array(
            "href" => "http://bakerpedia.com/resources/baking-calculators/temperature-conversions-2/"
          ),
          "Volume Conversions" => array(
            "href" => "http://bakerpedia.com/resources/baking-calculators/volume-conversions-2/"
          )
        )
      ),
    ),
  ),
  "About" => array(
    "href" => "#",
    'sub-menu' => array(
      "About BAKERpedia" => array(
        "href" => "http://bakerpedia.com/about-us/about-bakerpedia/"
      ),
      "Lin Carson, PhD" => array(
        "href" => "http://bakerpedia.com/about-us/lin-carson-phd/"
      ),
      "Advertise With Us" => array(
        "href" => "http://bakerpedia.com/about-us/advertise-with-us/"
      ),
      "Careers" => array(
        "href" => "http://bakerpedia.com/home/careers/"
      ),
      "Contact Us" => array(
        "href" => "http://bakerpedia.com/about-us/contact-us/"
      )
    )
  )
);

