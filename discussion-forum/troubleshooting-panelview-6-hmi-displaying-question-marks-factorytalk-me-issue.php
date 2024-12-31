
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently experiencing an issue with my PanelView 6+ running a Machine Edition (ME) program. Lately, I have noticed that my HMI graphics are displaying question marks across the screens. A simple solution seems to be restarting the panel/system, which resolves the issue. Do you have any insights">
    <meta name="keywords" content="panelview 6+, hmi display, factorytalk me, troubleshooting, question marks, machine edition, graphics issue, restarting panel, system restart, display problem, hmi error, panelview issue, me program, displaying question">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-6-hmi-displaying-question-marks-factorytalk-me-issue">
    <title>Troubleshooting PanelView 6+ HMI Displaying Question Marks - Factorytalk ME Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PanelView 6+ HMI Displaying Question Marks - Factorytalk ME Issue | Oxmaint Community">
    <meta property="og:description" content="I am currently experiencing an issue with my PanelView 6+ running a Machine Edition (ME) program. Lately, I have noticed that my HMI graphics are displaying question marks across the screens. A simple solution seems to be restarting the panel/system, which resolves the issue. Do you have any insights">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-6-hmi-displaying-question-marks-factorytalk-me-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PanelView 6+ HMI Displaying Question Marks - Factorytalk ME Issue | Oxmaint Community">
    <meta name="twitter:description" content="I am currently experiencing an issue with my PanelView 6+ running a Machine Edition (ME) program. Lately, I have noticed that my HMI graphics are displaying question marks across the screens. A simple solution seems to be restarting the panel/system, which resolves the issue. Do you have any insights">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-6-hmi-displaying-question-marks-factorytalk-me-issue"
      },
      "headline": "Troubleshooting PanelView 6+ HMI Displaying Question Marks - Factorytalk ME Issue",
      "description": "I am currently experiencing an issue with my PanelView 6+ running a Machine Edition (ME) program. Lately, I have noticed that my HMI graphics are displaying question marks across the screens. A simple solution seems to be restarting the panel/system, which resolves the issue. Do you have any insights",
      "author": {
        "@type": "Person",
        "name": "michael30"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-24",
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
                <h1 class="text-white">Troubleshooting PanelView 6+ HMI Displaying Question Marks - Factorytalk ME Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>michael30</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2200</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">92</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently experiencing an issue with my PanelView 6+ running a Machine Edition (ME) program. Lately, I have noticed that my HMI graphics are displaying question marks across the screens. A simple solution seems to be restarting the panel/system, which resolves the issue. Do you have any insights on what may be causing this problem?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there may be a disconnect between the HMI and the PLC, as indicated by the display of question marks instead of values from PLC tags. Multistate indicators will also show an 'Error' indication when failing to read values. This issue could be due to a loss of connection between the HMI and PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When question marks appear, it indicates that the PV is unable to retrieve data from the PLC. This issue could be due to a faulty tag name, expression, or loss of communication. Since the question marks are intermittent, it is unlikely to be a problem with the expression/tag. The most probable cause is a loss of communication. Start by checking the connections at the PV, PLC, or switches to troubleshoot the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few months ago, I encountered a recurring issue at work with the HMI system. After proposing various potential problems and their solutions, my boss's innovative fix was to install a toggle switch to reset power to the HMI. This simple solution successfully resolved the issue, allowing operations to continue smoothly until the facility eventually closed down.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BOWILLY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the Human Machine Interface (HMI) is experiencing connectivity issues with the Programmable Logic Controller (PLC), all tags may display an "Error" instead of a question mark. This situation could arise if the "Application Language" has been switched to a language different from the one used during the application's development. For example, changing the Application Language from "English (United Kingdom), en-GB" to "English (United Kingdom), en-US" resulted in a similar issue for us. Our machine was originally developed in Great Britain, where English is used but dates are formatted as Day-Month-Year instead of Month-Day-Year. Switching the language to US caused all text in the application to display as "?" (including buttons, messages, alarms, etc.), although the application continued to function properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RJStaunton</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  Why is my PanelView 6+ HMI displaying question marks on the screens?</h4>
<p class='text-muted'><strong>Answer:</strong> The appearance of question marks on the HMI graphics could be due to a communication error or data corruption within the FactoryTalk ME program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What can I do to resolve the issue of question marks on my PanelView 6+ display?</h4>
<p class='text-muted'><strong>Answer:</strong> One simple solution that often helps is restarting the panel or the entire system. This can sometimes clear any temporary glitches causing the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any specific troubleshooting steps I should follow to address the question mark display on my PanelView 6+ HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> It is recommended to check the communication settings, connections, and the integrity of the FactoryTalk ME program. Verifying the data transfer and ensuring no corruption in the program may help resolve the issue.</p>
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
