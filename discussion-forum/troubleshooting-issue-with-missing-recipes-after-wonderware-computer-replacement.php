
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An ongoing project involved replacing an outdated computer running Wonderware with a new one. Despite successfully establishing communication between the new computer and the PLC, an issue arose when the LoadRecipe screen failed to display the list of recipes from the Excel file as it previously did. Although I">
    <meta name="keywords" content="wonderware troubleshooting, computer replacement issue, missing recipes problem, loadrecipe screen, excel file recipes, plc communication, new computer setup, recipe manager installation, recipe creation, recipe modification, quickscript review, sql script reference, troubleshooting guidance">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-missing-recipes-after-wonderware-computer-replacement">
    <title>Troubleshooting Issue with Missing Recipes after Wonderware Computer Replacement | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issue with Missing Recipes after Wonderware Computer Replacement | Oxmaint Community">
    <meta property="og:description" content="An ongoing project involved replacing an outdated computer running Wonderware with a new one. Despite successfully establishing communication between the new computer and the PLC, an issue arose when the LoadRecipe screen failed to display the list of recipes from the Excel file as it previously did. Although I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-missing-recipes-after-wonderware-computer-replacement">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issue with Missing Recipes after Wonderware Computer Replacement | Oxmaint Community">
    <meta name="twitter:description" content="An ongoing project involved replacing an outdated computer running Wonderware with a new one. Despite successfully establishing communication between the new computer and the PLC, an issue arose when the LoadRecipe screen failed to display the list of recipes from the Excel file as it previously did. Although I">
    <meta name="twitter:image" content="https://community.oxmaint.com/assets/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-Y6M0T9NLP4');
    </script>

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-missing-recipes-after-wonderware-computer-replacement"
      },
      "headline": "Troubleshooting Issue with Missing Recipes after Wonderware Computer Replacement",
      "description": "An ongoing project involved replacing an outdated computer running Wonderware with a new one. Despite successfully establishing communication between the new computer and the PLC, an issue arose when the LoadRecipe screen failed to display the list of recipes from the Excel file as it previously did. Although I",
      "author": {
        "@type": "Person",
        "name": "CageFreeBMW"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-06",
      "image": "https://community.oxmaint.com/assets/img/favicon.png"
    }
    </script>

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>
<body>
    <div class="content-wrapper bg-gray">
        <?php include "../include/header.php" ?>
        <!-- /header -->
        <div class="container my-5">
            

            <div class="bg-primary card p-4 mb-4">
                <h1 class="text-white">Troubleshooting Issue with Missing Recipes after Wonderware Computer Replacement</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>CageFreeBMW</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">640</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">292</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>An ongoing project involved replacing an outdated computer running Wonderware with a new one. Despite successfully establishing communication between the new computer and the PLC, an issue arose when the LoadRecipe screen failed to display the list of recipes from the Excel file as it previously did. Although I am new to Wonderware and only discovered its existence a month ago (typically working with Rockwell), the initial installation and setup were conducted by an external contractor before my tenure here. Unfortunately, we are unable to reach the contractor for assistance.

One observation I made is that Recipe Manager is not installed on the new computer, whereas it was present on the old one. I am unsure whether it is essential for regular operations or solely for creating and modifying recipes. Additionally, I suspect the location where the Excel file is stored may have changed (e.g., different user name), but I am uncertain where to locate this information within the software or its online documentation.

Any guidance on where to begin troubleshooting would be greatly appreciated. Upon reviewing the QuickScript utilized for LoadRecipe, it seems to be functioning correctly as it references an SQL script.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure optimal functionality, it is recommended to install RecipeManager on your new PC. While the Recipe functions can still be accessed without it, having RecipeManager makes managing recipes easier, especially when dealing with the complex structure of the CSV file. This file consists of three levels - Units, Recipes, and Values - each stored in separate compartments but appearing flat in Excel. Typically, the Recipe file is stored in the application directory with a .csv extension, but it can be located elsewhere as well. The file name and path are specified in scripting calls like Load Recipe and Save Recipe. If the file is indicated by a string tag name, refer to the application script or the string tag itself for clues on its location.

Regarding SQL calls, these are not related to the Recipe template, which is a CSV file, but to a SQL database. Make sure to transfer all databases to your new PC if needed. For further clarification on the differences between Recipe and SQL functions, refer to this PDF: https://cdn.logic-control.com/docs/aveva/hmi-scada/intouch/ITSupplementary.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will investigate the PLC to check for a string tag indicating the location. This project was unexpectedly assigned to me by someone who upgraded the computer system. It appears that all the files from the previous computer have been successfully transferred. Last week, I spent around 8 hours troubleshooting because the previous technician forgot to add necessary firewall exceptions to communicate with the PLC. My lack of familiarity with Wonderware and the previous technician's actions contributed to the delays. 

In Wonderware, there is a screen displaying a list of recipes from an Excel spreadsheet. Users can search for specific recipes using the search bar. When double-clicked, a ListBox Control window named RecipeListBox with a Tagname RecipeSelected appears. However, I cannot find corresponding names in the Scripts section, but I suspect it might be under RecipeNameCheck or RecipeOverwrite. 

There is a section of the script involving SQL that performs data selection and checks for duplicates in the database. The process for adding new recipes involves updating the Excel sheet on the Wonderware computer, which then refreshes the list automatically. 

I appreciate your assistance and have been reviewing the manual provided. While I am making progress, I still feel I lack fundamental knowledge of Wonderware. I will continue to work on it until I fully understand it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CageFreeBMW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to troubleshooting the PLC and locating a string tag, I am not entirely sure as this project was handed over to me unexpectedly. The files from the old computer seem to be intact, but I had to spend a considerable amount of time fixing firewall exceptions that were missing following a recent computer upgrade. This was challenging for me as I am not familiar with Wonderware or the previous work done by the person who handled the upgrade.

In Wonderware, there is a display window that should show a list of recipes from an Excel spreadsheet. Users can search for specific recipes using the search bar. Upon further inspection, I noticed a ListBox Control window with the Control Name as RecipeListBox and Tagname as RecipeSelected. I suspect that the corresponding scripts are either RecipeNameCheck or RecipeOverwrite, as I couldn't find exact matches in the Scripts section.

I have been informed that new recipes are added by updating the Excel spreadsheet on the Wonderware computer. However, it seems that the script is trying to retrieve information from an SQL database instead of a CSV file. Have you checked the Old PLC for a recipe database in SQL Manager? Functions like RecipeLoad, RecipeSave, and RecipeDelete typically work with CSVs from Recipe Manager. If the list box is being populated with selectable recipes, it is more likely connected to an SQL database rather than a Recipe CSV.

Thank you for your assistance in resolving this issue!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the information! I will search both the legacy and current computer systems to locate the SQL database. Is there a specific location in Wonderware where the file directory is displayed? I will continue to explore the options you mentioned earlier as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CageFreeBMW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When searching for the SQL database in Wonderware, consider checking the RecipeLoad, RecipeSave, and RecipeDelete calls. These calls may directly reference a file name (e.g. RecipeLoad ("C:\MyfileName")) or use a tag (e.g. RecipeLoad (MyRecipeLocationTag)). If using a tag, the string value can be loaded from an Application script or set as the initial value of the tag. For an IO string Tag, the name is typically sourced from the PLC.

One way to locate the value is to modify a screen and add a string indicator linked to show the string MyRecipeLocationTag. This will help you identify the file directory in your Wonderware system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Great! I will investigate further and provide updates on any possible solutions that I uncover.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CageFreeBMW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have not found a complete solution yet, but my investigation revealed that the contractor who installed the new computer neglected to install the SQL Access Manager, as well as the Recipe Manager. As a result, the SQL callouts in the QuickScripts are not functioning properly. This was discovered when I clicked the "verify" button in the QuickScript window containing the SQL callout and received an error prompting me to define SQLConnect(). After consulting various manuals, I learned that an SQL Bind List must be added in the Tools menu before the SQLConnect() command can be recognized.

I had to revert back to the old system after encountering issues with Recipe/SQL functionalities. Additionally, Wonderware stopped sending commands to the PLC after approximately 90 minutes of operation. Although the touch screen was responsive (button feedback indicated this), the machine itself did not respond. Rebooting the software temporarily resolved the issue, but it recurred after another 90 minutes.

I plan to set up the system at my desk to familiarize myself with it and address the setup more effectively than my predecessor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CageFreeBMW</span></li>
            </ul>
        </div>
        
                        </div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 outer-container">
        <!-- Related Topics -->
    <?php include "./related-topic.php" ?>
    </div>
            </div>
             <!-- cta button -->
        <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: Why are recipes missing after replacing the Wonderware computer?
    Recipes may be missing due to potential issues such as the Recipe Manager not being installed on the new computer, changes in the location of the Excel file storing the recipes, or other configuration differences between the old and new systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is Recipe Manager essential for regular Wonderware operations?</h4>
<p class='text-muted'><strong>Answer:</strong> Recipe Manager is typically used for creating and modifying recipes. While it may not be essential for regular operations, its absence could impact tasks related to managing recipes within Wonderware.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I locate the Excel file storing the recipes in Wonderware?</h4>
<p class='text-muted'><strong>Answer:</strong> To locate the Excel file storing recipes, you may need to check the configuration settings within Wonderware or refer to the software's documentation for guidance on file locations and how to update them.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Where should I start troubleshooting the issue with missing recipes in Wonderware?</h4>
<p class='text-muted'><strong>Answer:</strong> Begin troubleshooting by checking if Recipe Manager is installed, verifying the location of the Excel file, reviewing any relevant software settings or configurations, and ensuring that the necessary scripts or connections are correctly configured. You may also consider reaching out to Wonderware support for further assistance.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <script src="like-view-counter.js"></script>
    </div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    function initializeToggleFunctionality() {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");
        const noRepliesMessage = document.querySelector(".no-replies-message");

        if (!toggleLink || !moreRepliesContent || !noRepliesMessage) {
            console.error("Required elements not found. Ensure the correct class names are used.");
            console.log({
                toggleLink,
                moreRepliesContent,
                noRepliesMessage,
            });
            return;
        }

        const hasReplies = Array.from(moreRepliesContent.children).some(
            (child) => child.nodeType === Node.ELEMENT_NODE
        );

        if (hasReplies) {
            noRepliesMessage.style.display = "none";
        } else {
            noRepliesMessage.style.display = "block";
            toggleLink.style.display = "none";
            return;
        }

        toggleLink.addEventListener("click", (event) => {
            event.preventDefault();
            const isHidden = getComputedStyle(moreRepliesContent).display === "none";
            moreRepliesContent.style.display = isHidden ? "block" : "none";
            toggleLink.textContent = isHidden ? "Hide More Replies" : "More Replies →";
        });
    }

    initializeToggleFunctionality();

    const observer = new MutationObserver(() => {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");

        if (toggleLink && moreRepliesContent) {
            initializeToggleFunctionality();
            observer.disconnect();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});
</script>
</body>
</html>
