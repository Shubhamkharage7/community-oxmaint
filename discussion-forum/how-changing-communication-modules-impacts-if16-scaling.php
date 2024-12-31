
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recently, we upgraded an ENBT module to an EN2T in both our Main ControlLogix Rack, which houses an L82E processor, and a remote Rack connected to multiple 1794 racks. Additionally, we replaced 3-1794-AENT modules with 1794-AENTR modules. Following the upgrades, we encountered a issue with the scaling of inputs">
    <meta name="keywords" content="communication module upgrade, if16 module scaling issue, enbt to en2t upgrade impact, controllogix rack, l82e processor, 1794-aentr module">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-changing-communication-modules-impacts-if16-scaling">
    <title>How Changing Communication Modules Impacts IF16 Scaling | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How Changing Communication Modules Impacts IF16 Scaling | Oxmaint Community">
    <meta property="og:description" content="Recently, we upgraded an ENBT module to an EN2T in both our Main ControlLogix Rack, which houses an L82E processor, and a remote Rack connected to multiple 1794 racks. Additionally, we replaced 3-1794-AENT modules with 1794-AENTR modules. Following the upgrades, we encountered a issue with the scaling of inputs">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-changing-communication-modules-impacts-if16-scaling">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How Changing Communication Modules Impacts IF16 Scaling | Oxmaint Community">
    <meta name="twitter:description" content="Recently, we upgraded an ENBT module to an EN2T in both our Main ControlLogix Rack, which houses an L82E processor, and a remote Rack connected to multiple 1794 racks. Additionally, we replaced 3-1794-AENT modules with 1794-AENTR modules. Following the upgrades, we encountered a issue with the scaling of inputs">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-changing-communication-modules-impacts-if16-scaling"
      },
      "headline": "How Changing Communication Modules Impacts IF16 Scaling",
      "description": "Recently, we upgraded an ENBT module to an EN2T in both our Main ControlLogix Rack, which houses an L82E processor, and a remote Rack connected to multiple 1794 racks. Additionally, we replaced 3-1794-AENT modules with 1794-AENTR modules. Following the upgrades, we encountered a issue with the scaling of inputs",
      "author": {
        "@type": "Person",
        "name": "PermaBrett"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-26",
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
                <h1 class="text-white">How Changing Communication Modules Impacts IF16 Scaling</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PermaBrett</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">110</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">369</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Recently, we upgraded an ENBT module to an EN2T in both our Main ControlLogix Rack, which houses an L82E processor, and a remote Rack connected to multiple 1794 racks. Additionally, we replaced 3-1794-AENT modules with 1794-AENTR modules. Following the upgrades, we encountered a issue with the scaling of inputs on an IF16 module in the Remote Rack. Any insights on how the module replacement may have affected these analog inputs? Any suggestions or advice would be greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that it is not possible to simply modify the cards in the project tree; they must be deleted and re-created. It seems that the ENBT was deleted and replaced with the EN2T, and the AENT was replaced with the AENTR in a similar manner. It is likely that the configuration for the IF16 was not properly set after the module was added to the tree. If you have a previous version of the program, you can compare the settings in that project with the current configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you unable to locate a 1794-IF16 module? Is your IF16 installed in a remote 1756 chassis, or do you have a different input module in the Flex IO chassis? While you cannot alter an existing module, upgrades can be done without removing any data. It may require going offline to download, which can be a little cumbersome, but it's a simpler alternative to deleting and re-inserting. In a recent project, a L81 controller with an ENBT in slot 2 and a 1794-AENT on the network was successfully configured. Adding an EN2T in another slot and transferring the 1794 rack was easily done. Module transfer between chassis, such as from ENBT to EN2T or from AENT to AENTR, proved to be seamless. Ensure to update the slot/IP address to match the old configuration and remove any unused adapters. The only issue that may arise is with MSG instructions pointing to specific modules, which will require reconfiguration. It is recommended to compare settings with an older version of the program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MikeyN mentioned that there is no direct way to change the cards in the project tree without deleting and recreating them. It appears that someone deleted the ENBT and replaced it with the EN2T, and the same process was followed for the AENT to AENTR. It is likely that the configuration for the IF16 module was not set to the same settings as before when adding it to the tree. To avoid this issue and maintain module configurations, it is recommended to add the new communication module first, transfer existing modules from the old to the new one, delete the old module, and then configure the IP and name of the new module to match the old one. If you still have an older version of the program, you can compare the settings from the previous project to the current one for reference. Edit: Joseph made a similar suggestion earlier.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. How might changing communication modules, such as upgrading from an ENBT to an EN2T and replacing 1794-AENT modules with 1794-AENTR modules, impact the scaling of analog inputs on an IF16 module in a Remote Rack?</h4>
<p class='text-muted'><strong>Answer:</strong> - The changes in communication modules may affect the way data is transmitted and processed between the devices, potentially leading to issues with scaling analog inputs on the IF16 module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing the scaling issue on the IF16 module following the module replacements in the ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue with analog input scaling on the IF16 module could be due to compatibility issues, configuration changes, or communication settings that need to be adjusted after the module replacements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the scaling issue on the IF16 module be resolved after upgrading communication modules and replacing modules in the ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - To address the scaling issue, it is recommended to review the configuration settings of the IF16 module, verify the communication setup between the devices, and ensure that the replacement modules are properly configured and compatible with the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there specific troubleshooting steps or best practices to follow when encountering scaling issues on analog inputs after changing communication modules in a ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - When facing scaling problems post-module replacements, it is advisable to check for firmware updates, validate the module configurations, inspect the wiring connections, and consult the device manuals or technical support for further guidance on resolving the issue.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
