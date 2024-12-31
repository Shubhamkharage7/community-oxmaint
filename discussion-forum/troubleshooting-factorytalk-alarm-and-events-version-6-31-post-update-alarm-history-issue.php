
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Following software updates, we upgraded our systems to FactoryTalk Service Platform 6.31 and applied a patch roll up on Dec 22. Our network-connected Alarm and Event DB, which has been functioning without issues for years, started experiencing problems after the update. While active alarms are working as expected, the">
    <meta name="keywords" content="factorytalk service platform 31 troubleshooting, factorytalk alarm and events post-update issues, ftsp 31 patch roll up problems, alarm history not logging after ftsp update, ft">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-alarm-and-events-version-6-31-post-update-alarm-history-issue">
    <title>Troubleshooting FactoryTalk Alarm and Events (Version 6.31) Post-Update Alarm History Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FactoryTalk Alarm and Events (Version 6.31) Post-Update Alarm History Issue | Oxmaint Community">
    <meta property="og:description" content="Following software updates, we upgraded our systems to FactoryTalk Service Platform 6.31 and applied a patch roll up on Dec 22. Our network-connected Alarm and Event DB, which has been functioning without issues for years, started experiencing problems after the update. While active alarms are working as expected, the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-alarm-and-events-version-6-31-post-update-alarm-history-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FactoryTalk Alarm and Events (Version 6.31) Post-Update Alarm History Issue | Oxmaint Community">
    <meta name="twitter:description" content="Following software updates, we upgraded our systems to FactoryTalk Service Platform 6.31 and applied a patch roll up on Dec 22. Our network-connected Alarm and Event DB, which has been functioning without issues for years, started experiencing problems after the update. While active alarms are working as expected, the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-alarm-and-events-version-6-31-post-update-alarm-history-issue"
      },
      "headline": "Troubleshooting FactoryTalk Alarm and Events (Version 6.31) Post-Update Alarm History Issue",
      "description": "Following software updates, we upgraded our systems to FactoryTalk Service Platform 6.31 and applied a patch roll up on Dec 22. Our network-connected Alarm and Event DB, which has been functioning without issues for years, started experiencing problems after the update. While active alarms are working as expected, the",
      "author": {
        "@type": "Person",
        "name": "theloop82"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-26",
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
                <h1 class="text-white">Troubleshooting FactoryTalk Alarm and Events (Version 6.31) Post-Update Alarm History Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>theloop82</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2013</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">316</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Following software updates, we upgraded our systems to FactoryTalk Service Platform 6.31 and applied a patch roll up on Dec 22. Our network-connected Alarm and Event DB, which has been functioning without issues for years, started experiencing problems after the update. While active alarms are working as expected, the alarm history stopped logging after the upgrade from FTSP 6.30 to 6.31. An error message in the event viewer appears every couple of minutes indicating an issue with executing SQL statements. This problem is affecting both older FTView SE ver 12 Network Station HMI's and newer FTView SE Network Distributed HMI systems. Although we have reviewed relevant Knowledgebase articles, we have not found a solution specific to our version of FTSP (6.31) or the error message we are encountering. If anyone has encountered similar issues following software updates, we would appreciate any insights or suggestions.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering database connectivity issues? Make sure to review the paths. If you're unfamiliar with Alarms and Events, navigating to the communications tab in the project and runtime settings, similar to FT View Studio, is a good place to start troubleshooting the path verification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have confirmed that the settings in the admin console connections, alarm and events server settings, and SQL database settings remain unchanged after the updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theloop82</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you found a solution?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pahko</span></li>
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
<h4 class='text-dark'>FAQ: 1.  After updating to FactoryTalk Service Platform 6.31, our Alarm and Event DB stopped logging alarm history. How can we resolve this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> It seems like the upgrade may have caused a problem with executing SQL statements, resulting in the history logging issue. You may need to troubleshoot the SQL execution error and possibly check for compatibility issues with the new version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  We are experiencing alarm history logging issues after updating to FTSP 6.31. Are there any specific solutions available for this version?</h4>
<p class='text-muted'><strong>Answer:</strong> While there might not be a specific solution documented for FTSP 6.31, you could try reaching out to Rockwell Automation's support for assistance. They may have insights or workarounds for the issue you are facing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Our FTView SE HMI systems are affected by the alarm history problem post-update. How can we ensure compatibility between the HMI systems and the upgraded FactoryTalk Service Platform?</h4>
<p class='text-muted'><strong>Answer:</strong> Ensuring compatibility between the HMI systems and the upgraded FTSP version is crucial. You may need to check for any known compatibility issues, update drivers or software components if necessary, and verify configuration settings to ensure smooth operation.</p>
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
