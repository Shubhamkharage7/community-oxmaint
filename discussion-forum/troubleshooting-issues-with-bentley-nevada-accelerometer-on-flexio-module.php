
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking for information on working with a Bentley Nevada 330400/425 accelerometer. Our setup involves wiring into a Flex IO 1794 IE8 module, with power connected to C-34, positive to A-12 (input 6), and negative to B29 common (input 6). The shield is grounded. However, we are experiencing">
    <meta name="keywords" content="bentley nevada accelerometer, flexio module, troubleshooting, 330400/425 accelerometer, 1794 ie8 module, wiring issues, sensor activation, raw counts, fluke reading, signal problems, wiring inspection, sensor setup, bentley nevada">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-bentley-nevada-accelerometer-on-flexio-module">
    <title>Troubleshooting Issues with Bentley Nevada Accelerometer on FlexIO Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issues with Bentley Nevada Accelerometer on FlexIO Module | Oxmaint Community">
    <meta property="og:description" content="I am looking for information on working with a Bentley Nevada 330400/425 accelerometer. Our setup involves wiring into a Flex IO 1794 IE8 module, with power connected to C-34, positive to A-12 (input 6), and negative to B29 common (input 6). The shield is grounded. However, we are experiencing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-bentley-nevada-accelerometer-on-flexio-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issues with Bentley Nevada Accelerometer on FlexIO Module | Oxmaint Community">
    <meta name="twitter:description" content="I am looking for information on working with a Bentley Nevada 330400/425 accelerometer. Our setup involves wiring into a Flex IO 1794 IE8 module, with power connected to C-34, positive to A-12 (input 6), and negative to B29 common (input 6). The shield is grounded. However, we are experiencing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-bentley-nevada-accelerometer-on-flexio-module"
      },
      "headline": "Troubleshooting Issues with Bentley Nevada Accelerometer on FlexIO Module",
      "description": "I am looking for information on working with a Bentley Nevada 330400/425 accelerometer. Our setup involves wiring into a Flex IO 1794 IE8 module, with power connected to C-34, positive to A-12 (input 6), and negative to B29 common (input 6). The shield is grounded. However, we are experiencing",
      "author": {
        "@type": "Person",
        "name": "sjatx72"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">Troubleshooting Issues with Bentley Nevada Accelerometer on FlexIO Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sjatx72</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">135</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">381</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking for information on working with a Bentley Nevada 330400/425 accelerometer. Our setup involves wiring into a Flex IO 1794 IE8 module, with power connected to C-34, positive to A-12 (input 6), and negative to B29 common (input 6). The shield is grounded. However, we are experiencing issues as we only see a reading of 1.2mA and 2016 raw counts with no change when the sensor is activated. Connecting to just the fluke yields a reading of -8.43V, which aligns with the manual and shows changes when the sensor is activated. We have double-checked the wiring based on the manuals provided by Flex IO and Bentley Nevada, as well as inspected the fuses. Can anyone offer insight into why we are unable to see the signal through the Flex module? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For improved sensor performance, link the B lead of your sensor to the negative/common terminal B-29, and connect the C lead to the power 24VDC terminal C-47. Next, connect the A lead to the current input 6 terminal A-12 on your Flex IO system. Lastly, ensure to connect the shield cable to C-45 for optimal operation. This setup will maximize sensor functionality and accuracy in your industrial setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IsraelFer_32</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the manual, it appears that the sensor is not a 4-20mA type but rather an mV transducer designed for use with Bently monitoring systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the input. After reviewing it, it appears that a different sensor may be necessary. Robertmee, I believe we should consider exploring alternative sensor options.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sjatx72</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I only seeing a reading of 1.2mA and 2016 raw counts with no change when using the Bentley Nevada accelerometer with the Flex IO module?</h4>
<p class='text-muted'><strong>Answer:</strong> This issue could be due to incorrect wiring or configuration settings. Double-check the wiring connections and ensure they are aligned with the manuals provided by Flex IO and Bentley Nevada. Additionally, verify the configuration settings on the Flex IO module to ensure they are correctly set for the accelerometer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the discrepancy in readings between the Fluke and the Flex IO module when using the Bentley Nevada accelerometer?</h4>
<p class='text-muted'><strong>Answer:</strong> The discrepancy in readings could be attributed to potential issues with the Flex IO module itself. It is recommended to inspect the module for any faults or malfunctions that may be affecting the signal transmission from the accelerometer. Additionally, ensure that the module is compatible with the Bentley Nevada accelerometer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the signal connectivity issues with the Bentley Nevada accelerometer on the Flex IO module?</h4>
<p class='text-muted'><strong>Answer:</strong> To troubleshoot the signal connectivity issues, start by systematically checking each component and connection point. Verify the wiring connections, inspect the fuses, review the configuration settings on the Flex IO module, and ensure compatibility between the accelerometer and the module. If the issue persists, consider consulting technical support from Bentley Nevada or the manufacturer of the Flex IO module for further assistance.</p>
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
