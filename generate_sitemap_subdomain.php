<?php
// Configuration
$base_url = "https://community.oxmaint.com/"; // Base URL of your subdomain
$output_file = "sitemap.xml"; // Output file name for subdomain

// Directories to exclude (if needed, adjust accordingly for subdomain)
$exclude_dirs = ['private-data', 'temp'];

// Pages to exclude (relative to the directory)
$exclude_pages = [
    'index.php',
    'include/header.php',
    'include/footer.php',
    'generate_sitemap_subdomain.php',
    'testimonials.html',
    'examples/test-page.html' // Add paths to specific files you want to exclude
];

// URLs to include explicitly (provide full URLs here)
$include_pages = [
    'https://community.oxmaint.com',
    'https://community.oxmaint.com/discussion-forum/',
    'https://community.oxmaint.com/blog/',
    'https://community.oxmaint.com/faq/',
    'https://community.oxmaint.com/events/'
];

// Function to recursively scan the website directory
function getDirectoryFiles($dir, $exclude_dirs, $exclude_pages) {
    $files = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item == '.' || $item == '..') continue;

        $filePath = $dir . '/' . $item;

        // Skip directories that are in the exclude list
        foreach ($exclude_dirs as $exclude) {
            if (strpos($filePath, $exclude) !== false) {
                continue 2; // Skip this file or directory
            }
        }

        if (is_dir($filePath)) {
            $files = array_merge($files, getDirectoryFiles($filePath, $exclude_dirs, $exclude_pages));
        } else {
            if (preg_match('/\.(html|php)$/', $filePath)) {
                // Skip pages that are in the exclude list
                foreach ($exclude_pages as $exclude_page) {
                    if (strpos($filePath, $exclude_page) !== false) {
                        continue 2; // Skip this file
                    }
                }
                // Remove file extensions
                $cleanPath = preg_replace('/\.(html|php)$/', '', $filePath);
                $files[] = $cleanPath;
            }
        }
    }
    return $files;
}

// Generate sitemap content
$files = getDirectoryFiles('.', $exclude_dirs, $exclude_pages);
$sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$sitemap .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

// Include specified URLs explicitly
foreach ($include_pages as $page_url) {
    $sitemap .= "  <url>\n";
    $sitemap .= "    <loc>$page_url</loc>\n";
    $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
    $sitemap .= "    <changefreq>daily</changefreq>\n";
    $sitemap .= "    <priority>0.80</priority>\n";
    $sitemap .= "  </url>\n";
}

// Add detected files to the sitemap
foreach ($files as $file) {
    $file = str_replace('./', '', $file);
    $file_url = $base_url . $file;
    $lastmod = date('Y-m-d', filemtime($file));
    $sitemap .= "  <url>\n";
    $sitemap .= "    <loc>$file_url</loc>\n";
    $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
    $sitemap .= "    <changefreq>daily</changefreq>\n";
    $sitemap .= "    <priority>0.68</priority>\n";
    $sitemap .= "  </url>\n";
}

$sitemap .= "</urlset>\n";

// Save to sitemap.xml file
file_put_contents($output_file, $sitemap);

echo "Subdomain sitemap generated successfully!";
?>