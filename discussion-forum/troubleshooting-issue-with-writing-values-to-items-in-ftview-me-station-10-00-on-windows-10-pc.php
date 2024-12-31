
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, everyone! I am currently using a Windows 10 PC with a FTView ME Station 10.00 installed. My .mer file has a version of 6.00 and has been functioning smoothly for quite some time. However, after a recent disconnection and reconnection, I am encountering several faults, with the main">
    <meta name="keywords" content="ftview me station 00 troubleshooting, windows 10 pc communication errors, writing values to items fault, hmi-plc communication issues, ftview me error messages, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-writing-values-to-items-in-ftview-me-station-10-00-on-windows-10-pc">
    <title>Troubleshooting Issue with Writing Values to Items in FTView ME Station 10.00 on Windows 10 PC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issue with Writing Values to Items in FTView ME Station 10.00 on Windows 10 PC | Oxmaint Community">
    <meta property="og:description" content="Greetings, everyone! I am currently using a Windows 10 PC with a FTView ME Station 10.00 installed. My .mer file has a version of 6.00 and has been functioning smoothly for quite some time. However, after a recent disconnection and reconnection, I am encountering several faults, with the main">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-writing-values-to-items-in-ftview-me-station-10-00-on-windows-10-pc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issue with Writing Values to Items in FTView ME Station 10.00 on Windows 10 PC | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, everyone! I am currently using a Windows 10 PC with a FTView ME Station 10.00 installed. My .mer file has a version of 6.00 and has been functioning smoothly for quite some time. However, after a recent disconnection and reconnection, I am encountering several faults, with the main">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-writing-values-to-items-in-ftview-me-station-10-00-on-windows-10-pc"
      },
      "headline": "Troubleshooting Issue with Writing Values to Items in FTView ME Station 10.00 on Windows 10 PC",
      "description": "Greetings, everyone! I am currently using a Windows 10 PC with a FTView ME Station 10.00 installed. My .mer file has a version of 6.00 and has been functioning smoothly for quite some time. However, after a recent disconnection and reconnection, I am encountering several faults, with the main",
      "author": {
        "@type": "Person",
        "name": "rajish.wagh"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">Troubleshooting Issue with Writing Values to Items in FTView ME Station 10.00 on Windows 10 PC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rajish.wagh</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">291</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">325</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, everyone! I am currently using a Windows 10 PC with a FTView ME Station 10.00 installed. My .mer file has a version of 6.00 and has been functioning smoothly for quite some time. However, after a recent disconnection and reconnection, I am encountering several faults, with the main issue being related to writing values to specific items. The error messages include "Problem writing value '0' to item '.....ChangeScreenAltTab'" and "Problem writing value '1' to item '.....ChangeScreenAltTab'". Additionally, there are multiple errors indicating that certain items are no longer available.

Upon further investigation, I have confirmed that the communication between the HMI (PC) and PLC is functioning correctly, and the HMI program is correctly configured with the appropriate IP address. Despite this, the issue persists.

If anyone has any insights or suggestions on how to troubleshoot this issue, it would be greatly appreciated. Thank you in advance (TIA) for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that one or more tags listed in the project's Global Connections are no longer present in the PLC system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
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
