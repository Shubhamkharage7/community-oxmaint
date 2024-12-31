
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have set up a test rig to retool some old equipment, using a 315 PN/DP PLC with all green lights indicating no errors on the profibus network. The network consists of only 2 nodes: 1 ET200X with 8 input and 8 output modules for Cylinder I/O, functioning properly,">
    <meta name="keywords" content="troubleshooting et200s output card malfunctions, et200s output card not working, how to fix et200s output card issues, siemens et200s output card troubleshooting guide, et200">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-et200s-output-card-malfunctions">
    <title>Troubleshooting ET200S Output Card Malfunctions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ET200S Output Card Malfunctions | Oxmaint Community">
    <meta property="og:description" content="I have set up a test rig to retool some old equipment, using a 315 PN/DP PLC with all green lights indicating no errors on the profibus network. The network consists of only 2 nodes: 1 ET200X with 8 input and 8 output modules for Cylinder I/O, functioning properly,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-et200s-output-card-malfunctions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ET200S Output Card Malfunctions | Oxmaint Community">
    <meta name="twitter:description" content="I have set up a test rig to retool some old equipment, using a 315 PN/DP PLC with all green lights indicating no errors on the profibus network. The network consists of only 2 nodes: 1 ET200X with 8 input and 8 output modules for Cylinder I/O, functioning properly,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-et200s-output-card-malfunctions"
      },
      "headline": "Troubleshooting ET200S Output Card Malfunctions",
      "description": "I have set up a test rig to retool some old equipment, using a 315 PN/DP PLC with all green lights indicating no errors on the profibus network. The network consists of only 2 nodes: 1 ET200X with 8 input and 8 output modules for Cylinder I/O, functioning properly,",
      "author": {
        "@type": "Person",
        "name": "Aleronick"
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
                <h1 class="text-white">Troubleshooting ET200S Output Card Malfunctions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Aleronick</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">234</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">173</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have set up a test rig to retool some old equipment, using a 315 PN/DP PLC with all green lights indicating no errors on the profibus network. The network consists of only 2 nodes: 1 ET200X with 8 input and 8 output modules for Cylinder I/O, functioning properly, and 1 ET200S with multiple input and output cards for panel I/O and safety solenoids. While the inputs on the ET200S are working fine, none of the outputs seem to be functioning. I have tried toggling M bits to activate the coils, similar to the ET200X, but the outputs only appear in one part of the code. The LED on the card does not illuminate, and the solenoid does not activate. However, when I adjust the value in the hardware configuration, both the LED and solenoid work properly. It has been a while since I worked with older Siemens equipment, and I am unsure of what I may be overlooking. Any suggestions would be greatly appreciated!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you please provide a screenshot of the hardware configuration for review? This will help us better understand the setup and make any necessary adjustments. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I realize now that I made a mistake by not setting the I/O image size high enough for the retool nodes addresses. I have only used the PLC as a testing tool and have never required more than 128 bytes of data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aleronick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aleronick mentioned that he didn't configure the I/O image size to accommodate the retool nodes addresses properly. He admitted that after using 1500s for a long time, he had overlooked this important aspect. Good observation!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are the outputs on the ET200S not functioning even though the inputs are working fine?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue with the outputs on the ET200S not functioning could be related to the configuration settings or the programming logic. Make sure to check the configuration settings and the programming code to ensure proper activation of the outputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the ET200S output card malfunctions?</h4>
<p class='text-muted'><strong>Answer:</strong> - When troubleshooting ET200S output card malfunctions, ensure that the hardware configuration settings are correct. Check the programming logic to see if the outputs are being activated properly. Verify the connections and ensure that the solenoids are receiving the appropriate signals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why do the LED on the output card not illuminate and the solenoid not activate?</h4>
<p class='text-muted'><strong>Answer:</strong> - The LED not illuminating and the solenoid not activating could indicate a problem with the signal transmission or the hardware configuration. Check the wiring connections, the programming code, and the hardware configuration to identify and resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What could be causing the outputs on the ET200S to only appear in one part of the code?</h4>
<p class='text-muted'><strong>Answer:</strong> - The outputs only appearing in one part of the code could be due to a programming error or a misconfiguration in the logic. Review the code to ensure that the outputs are being activated correctly at the required points. Check for any discrepancies in the logic that may be causing this issue.</p>
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
