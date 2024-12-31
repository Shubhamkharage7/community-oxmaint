
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently using an L33ER PLC with version 21.11 firmware. However, I do not have this specific version on my computer and it seems to be unavailable for download. In order to update the firmware, I have a copy of the offline program, but I first need to">
    <meta name="keywords" content="updating l33er plc firmware, l33er plc version 11, studio 5000, upload program, offline program, online upload, firmware update, plc firmware update, plc tag values, tag values retrieval, plc programming">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/updating-l33er-plc-firmware-without-version-21-11-how-to-upload-program-using-studio-5000">
    <title>Updating L33ER PLC Firmware without Version 21.11: How to Upload Program Using Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Updating L33ER PLC Firmware without Version 21.11: How to Upload Program Using Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="I am currently using an L33ER PLC with version 21.11 firmware. However, I do not have this specific version on my computer and it seems to be unavailable for download. In order to update the firmware, I have a copy of the offline program, but I first need to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/updating-l33er-plc-firmware-without-version-21-11-how-to-upload-program-using-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Updating L33ER PLC Firmware without Version 21.11: How to Upload Program Using Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="I am currently using an L33ER PLC with version 21.11 firmware. However, I do not have this specific version on my computer and it seems to be unavailable for download. In order to update the firmware, I have a copy of the offline program, but I first need to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/updating-l33er-plc-firmware-without-version-21-11-how-to-upload-program-using-studio-5000"
      },
      "headline": "Updating L33ER PLC Firmware without Version 21.11: How to Upload Program Using Studio 5000",
      "description": "I am currently using an L33ER PLC with version 21.11 firmware. However, I do not have this specific version on my computer and it seems to be unavailable for download. In order to update the firmware, I have a copy of the offline program, but I first need to",
      "author": {
        "@type": "Person",
        "name": "wine_sparky"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">Updating L33ER PLC Firmware without Version 21.11: How to Upload Program Using Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>wine_sparky</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">179</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">267</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently using an L33ER PLC with version 21.11 firmware. However, I do not have this specific version on my computer and it seems to be unavailable for download. In order to update the firmware, I have a copy of the offline program, but I first need to perform an online upload to retrieve the current tag values. Is there a way for me to accomplish this task without access to version 21.11?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Typically, it is important for the software version to align with the firmware version in the Programmable Logic Controller (PLC). I have noticed that the latest version available for download is v21.03.02. I believe this version should be compatible. Is it possible that you have a different v21 version installed that is causing issues?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking to download version 21, you may need to request it as it may not be readily available. Just recently, a similar inquiry was posted on this platform.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After some trial and error, I have realized the solution. Rather than attempting to connect online, I opted for the "upload" option. A prompt confirmed that it would convert the file during upload. Also, it's important to note that V21.03 is not supported by V21.11. Thank you for the help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>wine_sparky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The latest software updates, V20 and V21, have been causing headaches for users. The compatibility issues between different minor releases within versions 20 and 21 are likely the root of the problem you are experiencing. For a more detailed explanation, refer to SeeID: IN8221. Simply create a free account to access the article. If you have a TechConnect agreement, there are additional resources available in the knowledge base for further information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In general, smaller updates are usually compatible with existing versions. However, a security update in versions v20 and v21 caused compatibility issues when moving from the .01 revision to the .03 revision. While v20.04 addressed this problem, v21 did not receive a similar fix. As Ken Roach humorously pointed out, software managers can get just as excited about minor version updates as a cat with catnip. The peculiar addition of a leading zero in version numbers like v21.011 can be puzzling to users, and the complexities of sub-revision numbers can be confusing. Shawn Tierney's explanation sheds light on why the ".03" revisions in Studio 5000 v20 and v21 are not compatible with the ".01" revisions. 

If you are using firmware version 21.11, which predates the compatibility-breaking update, you will need a compatible software version like v21.00.04. Before installing a new version, ensure to uninstall any existing versions. Upgrading the firmware is recommended to avoid compatibility issues. If upgrading, a higher software version than the existing one can be used for online operations, with the software automatically converting files to the installed version.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I update the firmware of my L33ER PLC without having access to version 21.11?
- Answer: You can update the firmware by performing an online upload to retrieve the current tag values and then use the offline program for the update.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it necessary to have the exact firmware version (21.11) on my computer to update the PLC firmware?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: No, you can update the firmware using the offline program and the current tag values obtained through an online upload, even if you don't have version 21.11 on your computer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can I upload the program using Studio 5000 without having the specific firmware version installed?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Yes, you can upload the program using Studio 5000 by performing an online upload to retrieve the current tag values and then proceed with the firmware update using the offline program.</p>
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
