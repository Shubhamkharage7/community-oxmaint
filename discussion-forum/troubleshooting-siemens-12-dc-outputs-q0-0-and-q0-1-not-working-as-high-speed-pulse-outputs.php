
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Siemens 12 (DC/DC/DC) output Q0.0 and Q0.1 are not functioning properly after being used as high-speed pulse outputs. The indicator lights on the PLC are not turning on. What could be causing this issue? The outputs are working fine with the stepper motor. How can the high-speed output">
    <meta name="keywords" content="- siemens 12 dc outputs troubleshooting, - siemens dc pulse outputs issue, - plc indicator lights not turning on, - high-speed pulse outputs problem, - deactivating high-speed output on plc, - siemens plc output malfunction, - trou">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-12-dc-outputs-q0-0-and-q0-1-not-working-as-high-speed-pulse-outputs">
    <title>Troubleshooting Siemens 12 DC Outputs Q0.0 and Q0.1 Not Working as High-Speed Pulse Outputs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Siemens 12 DC Outputs Q0.0 and Q0.1 Not Working as High-Speed Pulse Outputs | Oxmaint Community">
    <meta property="og:description" content="The Siemens 12 (DC/DC/DC) output Q0.0 and Q0.1 are not functioning properly after being used as high-speed pulse outputs. The indicator lights on the PLC are not turning on. What could be causing this issue? The outputs are working fine with the stepper motor. How can the high-speed output">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-12-dc-outputs-q0-0-and-q0-1-not-working-as-high-speed-pulse-outputs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Siemens 12 DC Outputs Q0.0 and Q0.1 Not Working as High-Speed Pulse Outputs | Oxmaint Community">
    <meta name="twitter:description" content="The Siemens 12 (DC/DC/DC) output Q0.0 and Q0.1 are not functioning properly after being used as high-speed pulse outputs. The indicator lights on the PLC are not turning on. What could be causing this issue? The outputs are working fine with the stepper motor. How can the high-speed output">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-12-dc-outputs-q0-0-and-q0-1-not-working-as-high-speed-pulse-outputs"
      },
      "headline": "Troubleshooting Siemens 12 DC Outputs Q0.0 and Q0.1 Not Working as High-Speed Pulse Outputs",
      "description": "The Siemens 12 (DC/DC/DC) output Q0.0 and Q0.1 are not functioning properly after being used as high-speed pulse outputs. The indicator lights on the PLC are not turning on. What could be causing this issue? The outputs are working fine with the stepper motor. How can the high-speed output",
      "author": {
        "@type": "Person",
        "name": "Vishnu244"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Troubleshooting Siemens 12 DC Outputs Q0.0 and Q0.1 Not Working as High-Speed Pulse Outputs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Vishnu244</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">177</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">26</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>The Siemens 12 (DC/DC/DC) output Q0.0 and Q0.1 are not functioning properly after being used as high-speed pulse outputs. The indicator lights on the PLC are not turning on. What could be causing this issue? The outputs are working fine with the stepper motor. How can the high-speed output be deactivated on the PLC?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have turned off the PTO function in your project, it is necessary to disable it in order to use it as a regular output.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Once you have deactivated it, make sure to retrieve the Hardware Configuration onto the PLC. Switch to Offline mode before proceeding with the download.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sir, the issue has been resolved. Thank you for your prompt response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vishnu244</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the Siemens 12 DC outputs Q0.0 and Q0.1 not to function properly as high-speed pulse outputs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Possible causes for this issue could include incorrect programming, overload on the outputs, faulty wiring connections, or a malfunction in the PLC itself.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why are the indicator lights on the PLC not turning on when using Q0.0 and Q0.1 as high-speed pulse outputs?</h4>
<p class='text-muted'><strong>Answer:</strong> - The indicator lights may not be turning on due to a lack of proper signal output from the PLC, incorrect configuration settings, or a hardware malfunction in the output modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot the Siemens 12 DC outputs if they are working fine with a stepper motor but not as high-speed pulse outputs?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot this issue, you can check the programming logic for the outputs, verify the wiring connections, ensure the outputs are not overloaded, and inspect the PLC configuration settings related to high-speed pulse outputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a way to deactivate the high-speed output functionality on the PLC for Q0.0 and Q0.1?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can deactivate the high-speed output functionality by adjusting the programming logic in the PLC to stop generating high-speed pulses on Q0.0 and Q0.1. Review the program and modify the relevant instructions to disable the high-speed output feature.</p>
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
