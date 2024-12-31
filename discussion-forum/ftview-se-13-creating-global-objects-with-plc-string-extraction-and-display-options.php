
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently setting up a global object within FTView SE 13. The objective is to extract a string from the PLC and present it on the screen, specifically the tagname. For example, by placing the string on a rectangle and grouping them, I can create the desired global">
    <meta name="keywords" content="ftview se 13, global objects, plc string extraction, display options, tagname, string display, numeric and string, text formatting, array dimension, drawing text, pre-runtime tag substitution, graphic design, hmi tags, parameter popup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/ftview-se-13-creating-global-objects-with-plc-string-extraction-and-display-options">
    <title>FTView SE 13: Creating Global Objects with PLC String Extraction and Display Options | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="FTView SE 13: Creating Global Objects with PLC String Extraction and Display Options | Oxmaint Community">
    <meta property="og:description" content="I am currently setting up a global object within FTView SE 13. The objective is to extract a string from the PLC and present it on the screen, specifically the tagname. For example, by placing the string on a rectangle and grouping them, I can create the desired global">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/ftview-se-13-creating-global-objects-with-plc-string-extraction-and-display-options">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FTView SE 13: Creating Global Objects with PLC String Extraction and Display Options | Oxmaint Community">
    <meta name="twitter:description" content="I am currently setting up a global object within FTView SE 13. The objective is to extract a string from the PLC and present it on the screen, specifically the tagname. For example, by placing the string on a rectangle and grouping them, I can create the desired global">
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
        "@id": "https://community.oxmaint.com/discussion-forum/ftview-se-13-creating-global-objects-with-plc-string-extraction-and-display-options"
      },
      "headline": "FTView SE 13: Creating Global Objects with PLC String Extraction and Display Options",
      "description": "I am currently setting up a global object within FTView SE 13. The objective is to extract a string from the PLC and present it on the screen, specifically the tagname. For example, by placing the string on a rectangle and grouping them, I can create the desired global",
      "author": {
        "@type": "Person",
        "name": "cjjeeper"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-23",
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
                <h1 class="text-white">FTView SE 13: Creating Global Objects with PLC String Extraction and Display Options</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>cjjeeper</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">383</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">55</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently setting up a global object within FTView SE 13. The objective is to extract a string from the PLC and present it on the screen, specifically the tagname. For example, by placing the string on a rectangle and grouping them, I can create the desired global object. Using Objects -> Numeric and String -> String Display allows me to configure properties like {[BOP]HMI_TAGs[#3]}, where I can substitute #3 with the array dimension number successfully, although formatting options are limited.

However, if I utilize Drawing -> Text instead, I can incorporate variables such as /*S:0 {[BOP]HMI_TAGs[#3]}*/, without encountering errors. Yet, when combining this with a rectangle and pasting it as a global object into a graphic, the tag substitution function does not display upon right-clicking. During testing, a parameter popup appears, prompting a value for parameter #3.

It seems that while String Display enables tag substitution but lacks text formatting capabilities, Text allows text customization but faces issues with pre-runtime tag substitution visibility. Have you encountered this dilemma and found a solution?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you right-click on String Display, accessing Properties will provide you with a range of formatting options to choose from. This feature allows you to customize the appearance of your display according to your preferences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>glennz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Glennz suggested that accessing the right-click menu and selecting "Properties" should provide the formatting options required. However, upon attempting this, the desired options were not found.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cjjeeper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the instructions, cjjeeper confirmed: "I see it now." To ensure the Property Panel is visible, right-click and make sure to click on it. The Property Panel should then appear on the right side of the screen if it is Docked. This panel provides access to various properties, including font settings. Make sure to adjust these properties as needed for a better user experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>glennz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Glennz confirmed that the Property Panel can be accessed by right-clicking and ensuring it is exposed. This panel, which contains font and other properties, can be found on the far right assuming it is Docked. If you have closed the panel, you can use the object explorer to navigate back to it. Thanks for the tip!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cjjeeper</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<h4 class='text-dark'>FAQ: 1. How can I extract a string from a PLC and display it on the screen using FTView SE 13?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can achieve this by creating a global object and utilizing Objects -> Numeric and String -> String Display options to configure properties like {[BOP]HMI_TAGs[3]}.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What formatting options are available when configuring string display properties in FTView SE 13?</h4>
<p class='text-muted'><strong>Answer:</strong> - While formatting options are limited in the String Display properties, you can still substitute array dimension numbers successfully.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why am I facing issues with tag substitution visibility when using Drawing -> Text in FTView SE 13?</h4>
<p class='text-muted'><strong>Answer:</strong> - When incorporating variables such as /S:0 {[BOP]HMI_TAGs[3]}/, you might encounter issues with tag substitution visibility in Text objects when used in combination with rectangles as global objects.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the difference between utilizing String Display and Text options for displaying PLC strings in FTView SE 13?</h4>
<p class='text-muted'><strong>Answer:</strong> - String Display enables tag substitution but lacks text formatting capabilities, while Text allows for text customization but faces issues with pre-runtime tag substitution visibility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Have you found a solution to the dilemma of tag substitution visibility issues in FTView SE 13 when combining Text objects with rectangles for global objects?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you encounter tag substitution visibility issues with Text objects in global objects, you may need to investigate further or seek support from the FTView SE 13 community for a solution</p>
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
