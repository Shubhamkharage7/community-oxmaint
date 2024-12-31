
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am encountering an issue with double quotes appearing within selections instead of at the beginning and end. Below is the script, and I would appreciate assistance in identifying the necessary changes. Initialization Data Script: HDWDataDir = D:\Data Logging; {The log files are located in the History">
    <meta name="keywords" content="fixing double quote placement issue, intouch scada, initialization data script, double quotes, script issue, script error, data logging directory, application directory, start date, start time, duration, interval, file path, historical data script, tag">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/fixing-double-quote-placement-issue-in-intouch-scada-initialization-data-script">
    <title>Fixing Double Quote Placement Issue in Intouch SCADA Initialization Data Script | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Fixing Double Quote Placement Issue in Intouch SCADA Initialization Data Script | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am encountering an issue with double quotes appearing within selections instead of at the beginning and end. Below is the script, and I would appreciate assistance in identifying the necessary changes. Initialization Data Script: HDWDataDir = D:\Data Logging; {The log files are located in the History">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/fixing-double-quote-placement-issue-in-intouch-scada-initialization-data-script">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fixing Double Quote Placement Issue in Intouch SCADA Initialization Data Script | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am encountering an issue with double quotes appearing within selections instead of at the beginning and end. Below is the script, and I would appreciate assistance in identifying the necessary changes. Initialization Data Script: HDWDataDir = D:\Data Logging; {The log files are located in the History">
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
        "@id": "https://community.oxmaint.com/discussion-forum/fixing-double-quote-placement-issue-in-intouch-scada-initialization-data-script"
      },
      "headline": "Fixing Double Quote Placement Issue in Intouch SCADA Initialization Data Script",
      "description": "Hello everyone, I am encountering an issue with double quotes appearing within selections instead of at the beginning and end. Below is the script, and I would appreciate assistance in identifying the necessary changes. Initialization Data Script: HDWDataDir = D:\Data Logging; {The log files are located in the History",
      "author": {
        "@type": "Person",
        "name": "RockyNivas"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Fixing Double Quote Placement Issue in Intouch SCADA Initialization Data Script</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1030</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">104</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am encountering an issue with double quotes appearing within selections instead of at the beginning and end. Below is the script, and I would appreciate assistance in identifying the necessary changes.

Initialization Data Script:
HDWDataDir = "D:\Data Logging"; {The log files are located in the History directory}
HDWDBDir = "C:\Users\Public\Wonderware\Intouch Applications\Patching SIP"; {The application directory}
HDWStartDate = "02/01/2024";
HDWStartTime = "11:00:00";
HDWDuration = "1h";
HDWInterval = "1m";
HDWFilename = "C:\Temp\H1.csv";
HDWTags = "$date,$time";

Tag Selection Script from historical data:
SelectTags= HTSelectTag();
HDWTags= HDWTags + "," + SelectTags;

Please refer to the provided image for clarification. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For effective SEO strategies, it is crucial that HDWTags is formatted as a message tag. The correct format for HDWTags would be: HDWTags = $DateString + " " + $TimeString.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>muusic_man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a query, muusic_man suggested that HDWTags should be formatted as a message tag like this: HDWTags = $DateString + " " + $TimeString. However, a recurring issue with double quotes persist when selecting the tag. The script has been adjusted accordingly. Please refer to the attachment for further details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RockyNivas expressed gratitude for the reply. The HDWTags message tag has been modified in the script, but there is a recurring issue with double quotes appearing every other time the tag is selected. Please refer to the attachment for more information. Don't forget to check out the updated script.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee asked for the updated script to be displayed. Here is the script provided:

Initialize Data Script:
The HDWDataDir is set to "D:\Data Logging", which is the directory where log files are stored. The HDWDBDir is set to "C:\Users\Public\Wonderware\Intouch Applications\Patching SIP", which is the application directory. The HDWStartDate is "02/01/2024", the HDWStartTime is "11:00:00", the HDWDuration is "1h", the HDWInterval is "1m", the HDWFilename is "C:\Temp\H1.csv", and the HDWTags are identified by $DateString + "" + $TimeString.

Select Tags Script:
The SelectTags function is called to retrieve tags. The HDWTags are then updated with the SelectTags information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you want to showcase the tag names or their actual string values on the final line of your display? If you wish to display the tag name in your string animation, consider using Tagname.Name instead of Tagname. This will help you accurately depict the tag names in your animation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
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
            <p>Robertmee asked for an updated script. Are you looking to display the tag names or their string values on the last line? To show the tag name in your string animation, use Tagname.Name instead of Tagname. 

I am aiming to display the tag names. When I press the Initialise button, default values will be filled in the SCADA page, as shown in the previous images. Pressing the select button will navigate me to the logged data tag page, like the user definable trend. I can then select multiple tags. However, I am encountering issues with commas and double quotes appearing after every tag instead of at the beginning and end. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RockyNivas mentioned a process of displaying Tag names on the SCADA page. By pressing the Initialise button, default values will be populated as shown in previous images. Subsequently, selecting the Select button will navigate to the logged data tag page, where user-definable trends can be viewed. Users can freely choose tags, separated by commas and double quotes. Make sure to click on the Tagname.Name for the desired outcome. Thank you for your attention.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are double quotes appearing within selections instead of at the beginning and end in the Initialization Data Script?</h4>
<p class='text-muted'><strong>Answer:</strong> - This issue may be due to how the concatenation of strings is being handled in the script. Check for any errors in adding the double quotes at the beginning and end of the selections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What changes can be made to fix the double quote placement issue in the script?</h4>
<p class='text-muted'><strong>Answer:</strong> - To fix the issue, ensure that the double quotes are correctly placed at the beginning and end of each selection. Review the concatenation of strings and verify the placement of double quotes in the script.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I identify and resolve issues with double quotes in the Initialization Data Script?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can carefully review the script and pay attention to how strings are being concatenated and formatted. Check if there are any missing or misplaced double quotes that are causing the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a specific way to handle string concatenation to avoid double quote placement issues?</h4>
<p class='text-muted'><strong>Answer:</strong> - When concatenating strings in scripts, make sure to properly include double quotes where needed. Consider using escape characters or different methods of string manipulation to ensure correct placement of double quotes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Can the Tag Selection Script be causing the double quote placement issue in the Initialization Data Script?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Tag Selection Script could potentially impact the concatenation of strings in the Initialization Data Script. Review both scripts to see if there are any interactions or dependencies causing the double quote placement problem.</p>
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
