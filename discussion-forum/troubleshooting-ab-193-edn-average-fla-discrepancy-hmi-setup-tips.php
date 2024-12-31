
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently troubleshooting an AB 193-EDN and encountering an issue with the Average %FLA showing 70-75, while my clamp meter is reading about 4.9 on all three legs. Our E1 overload is set to trip at 20amps, so I am confused if this is a percentage">
    <meta name="keywords" content="ab 193-edn, average %fla, troubleshooting, hmi setup, tips, clamp meter, e1 overload, scaling adjustment, maintenance, percentage display, trip setting, current reading, electrical issue, maintenance purposes">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-193-edn-average-fla-discrepancy-hmi-setup-tips">
    <title>Troubleshooting AB 193-EDN Average %FLA Discrepancy: HMI Setup Tips | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting AB 193-EDN Average %FLA Discrepancy: HMI Setup Tips | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently troubleshooting an AB 193-EDN and encountering an issue with the Average %FLA showing 70-75, while my clamp meter is reading about 4.9 on all three legs. Our E1 overload is set to trip at 20amps, so I am confused if this is a percentage">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-193-edn-average-fla-discrepancy-hmi-setup-tips">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting AB 193-EDN Average %FLA Discrepancy: HMI Setup Tips | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently troubleshooting an AB 193-EDN and encountering an issue with the Average %FLA showing 70-75, while my clamp meter is reading about 4.9 on all three legs. Our E1 overload is set to trip at 20amps, so I am confused if this is a percentage">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ab-193-edn-average-fla-discrepancy-hmi-setup-tips"
      },
      "headline": "Troubleshooting AB 193-EDN Average %FLA Discrepancy: HMI Setup Tips",
      "description": "Hello everyone, I am currently troubleshooting an AB 193-EDN and encountering an issue with the Average %FLA showing 70-75, while my clamp meter is reading about 4.9 on all three legs. Our E1 overload is set to trip at 20amps, so I am confused if this is a percentage",
      "author": {
        "@type": "Person",
        "name": "abarajas"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">Troubleshooting AB 193-EDN Average %FLA Discrepancy: HMI Setup Tips</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>abarajas</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">170</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">201</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently troubleshooting an AB 193-EDN and encountering an issue with the "Average %FLA" showing 70-75, while my clamp meter is reading about 4.9 on all three legs. Our E1 overload is set to trip at 20amps, so I am confused if this is a percentage display or if I need to adjust the scaling. I am aiming to show this information on a HMI for maintenance purposes. Any advice or insights would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In Chapter 4 of Publication 193-UM006A-EN-P, you can find information on monitoring the average motor current. This data is presented as a percentage of the motor's rated current, which is determined by the dial setting on the E1 Plus Overload Relay. The current is displayed in increments of 5, providing valuable insights for tracking motor performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What could be causing the discrepancy between the "Average %FLA" displayed on the AB 193-EDN and the readings from the clamp meter?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy could be due to scaling issues or incorrect settings on the AB 193-EDN. It is important to verify the scaling and configuration of the device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Is the "Average %FLA" a percentage display or does it need adjustment based on actual current readings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "Average %FLA" is typically a percentage display based on the Full Load Amps (FLA) of the motor. However, adjustments may be needed if there are discrepancies with actual current readings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can I ensure accurate monitoring of motor current for maintenance purposes on a HMI using the AB 193-EDN?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure accurate monitoring, it is important to calibrate and verify the settings of the AB 193-EDN, including the scaling factors and configurations related to current measurements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: What steps can I take to troubleshoot the issue with the "Average %FLA" display on the AB 193-EDN?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the scaling settings, verifying the accuracy of the clamp meter readings, and consulting the device's manual or technical support for guidance on troubleshooting and calibration.</p>
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
