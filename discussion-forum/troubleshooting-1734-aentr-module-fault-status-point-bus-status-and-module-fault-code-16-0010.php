
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, I recently acquired a 1734-AENTR module to practice configuring it using LogixDesigner and establishing communication. Im encountering a flashing red light indicating Point Bus Status and a module fault code of 16#0010. Despite setting the chassis size to 1 and power cycling multiple times, the issue persists.">
    <meta name="keywords" content="1734-aentr module, logixdesigner, communication setup, point bus status, module fault code 16#0010, chassis size setting, power cycling, web interface access, ping module, troubleshooting, fault status, configuration issues, flashing">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aentr-module-fault-status-point-bus-status-and-module-fault-code-16-0010">
    <title>Troubleshooting 1734-AENTR Module Fault Status: Point Bus Status and Module Fault Code 16#0010 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1734-AENTR Module Fault Status: Point Bus Status and Module Fault Code 16#0010 | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, I recently acquired a 1734-AENTR module to practice configuring it using LogixDesigner and establishing communication. Im encountering a flashing red light indicating Point Bus Status and a module fault code of 16#0010. Despite setting the chassis size to 1 and power cycling multiple times, the issue persists.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aentr-module-fault-status-point-bus-status-and-module-fault-code-16-0010">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1734-AENTR Module Fault Status: Point Bus Status and Module Fault Code 16#0010 | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, I recently acquired a 1734-AENTR module to practice configuring it using LogixDesigner and establishing communication. Im encountering a flashing red light indicating Point Bus Status and a module fault code of 16#0010. Despite setting the chassis size to 1 and power cycling multiple times, the issue persists.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aentr-module-fault-status-point-bus-status-and-module-fault-code-16-0010"
      },
      "headline": "Troubleshooting 1734-AENTR Module Fault Status: Point Bus Status and Module Fault Code 16#0010",
      "description": "Hey everyone, I recently acquired a 1734-AENTR module to practice configuring it using LogixDesigner and establishing communication. Im encountering a flashing red light indicating Point Bus Status and a module fault code of 16#0010. Despite setting the chassis size to 1 and power cycling multiple times, the issue persists.",
      "author": {
        "@type": "Person",
        "name": "PLCrookiee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Troubleshooting 1734-AENTR Module Fault Status: Point Bus Status and Module Fault Code 16#0010</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCrookiee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">511</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">196</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I recently acquired a 1734-AENTR module to practice configuring it using LogixDesigner and establishing communication. I'm encountering a flashing red light indicating 'Point Bus Status' and a module fault code of "16#0010". Despite setting the chassis size to '1' and power cycling multiple times, the issue persists. I've attempted accessing the web interface, but the chassis size isn't displayed for confirmation. However, I am able to ping the module from my laptop. I'm beginning to wonder if adding at least one card to the module is necessary for resolving the Point Bus Status issue. Can someone provide clarification on this matter?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're setting up a Rockwell device through a web browser, the first step is to click on Configuration and then Identity (found in the left pane). Next, enter your username and password (this should be the default password if your device is new). After that, input the desired size chassis in the chassis size box. Click on apply changes and then power cycle the adapter. I haven't personally configured one of these devices yet, so I can't confirm if any modules are required. However, I haven't found any information in the knowledge base suggesting that they are. Following these steps should help you successfully configure your device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bering C Sparky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does a flashing red light indicating 'Point Bus Status' and a module fault code of "160010" mean on a 1734-AENTR module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: A flashing red light indicating 'Point Bus Status' and a module fault code of "160010" typically indicates a communication issue or fault within the module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the 'Point Bus Status' issue and module fault code "160010" on a 1734-AENTR module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the 'Point Bus Status' issue and module fault code "160010", you can try setting the chassis size to '1', power cycling the module, checking the web interface for chassis size confirmation, and ensuring proper communication settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Do I need to add at least one card to the 1734-AENTR module to resolve the 'Point Bus Status' issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Adding at least one card to the 1734-AENTR module may help resolve the 'Point Bus Status' issue, as it can ensure proper communication and configuration of the module within the system.</p>
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
