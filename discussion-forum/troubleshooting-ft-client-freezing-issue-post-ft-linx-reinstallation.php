
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, we are currently experiencing issues with FactoryTalk Linx on one of our two standalone FactoryTalk Site Edition clients. The problem arose after a power failure, causing the software to stop working. To resolve this issue, we uninstalled and reinstalled all FactoryTalk software. Initially, the software appeared to be">
    <meta name="keywords" content="troubleshooting ft client freezing issue, factorytalk linx reinstallation problems, ft client freezing diagnostics viewer, factorytalk site edition client issues, ethernet driver communication errors, res">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ft-client-freezing-issue-post-ft-linx-reinstallation">
    <title>Troubleshooting FT Client Freezing Issue Post FT Linx Reinstallation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FT Client Freezing Issue Post FT Linx Reinstallation | Oxmaint Community">
    <meta property="og:description" content="Hello, we are currently experiencing issues with FactoryTalk Linx on one of our two standalone FactoryTalk Site Edition clients. The problem arose after a power failure, causing the software to stop working. To resolve this issue, we uninstalled and reinstalled all FactoryTalk software. Initially, the software appeared to be">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ft-client-freezing-issue-post-ft-linx-reinstallation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FT Client Freezing Issue Post FT Linx Reinstallation | Oxmaint Community">
    <meta name="twitter:description" content="Hello, we are currently experiencing issues with FactoryTalk Linx on one of our two standalone FactoryTalk Site Edition clients. The problem arose after a power failure, causing the software to stop working. To resolve this issue, we uninstalled and reinstalled all FactoryTalk software. Initially, the software appeared to be">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ft-client-freezing-issue-post-ft-linx-reinstallation"
      },
      "headline": "Troubleshooting FT Client Freezing Issue Post FT Linx Reinstallation",
      "description": "Hello, we are currently experiencing issues with FactoryTalk Linx on one of our two standalone FactoryTalk Site Edition clients. The problem arose after a power failure, causing the software to stop working. To resolve this issue, we uninstalled and reinstalled all FactoryTalk software. Initially, the software appeared to be",
      "author": {
        "@type": "Person",
        "name": "celso3093"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-02",
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
                <h1 class="text-white">Troubleshooting FT Client Freezing Issue Post FT Linx Reinstallation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>celso3093</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">170</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">463</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, we are currently experiencing issues with FactoryTalk Linx on one of our two standalone FactoryTalk Site Edition clients. The problem arose after a power failure, causing the software to stop working. To resolve this issue, we uninstalled and reinstalled all FactoryTalk software. Initially, the software appeared to be functioning properly, but we soon noticed that the FactoryTalk Client was intermittently freezing. When examining the Diagnostics Viewer during these freezing episodes, we received messages such as: "Driver Ethernet re-established a session to IP" and "Driver Ethernet lost communications to IP: connection reset by peer." These messages pertain to IP addresses that are not crucial to our operations, as we only use PLCs in the Communication Setup. These messages are specific to one station only, even though the FactoryTalk Linx drivers and devices on both stations are almost identical.

Despite attempting to remove the problematic devices, it seems that the Ethernet driver automatically scans the network, and we are unsure how to modify this setting. We would greatly appreciate any assistance or insights you can provide to help us troubleshoot this issue. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted to remove all shortcuts and recreate them, but unfortunately, that did not resolve the issue. Next, I tried uninstalling the RSLinx Enterprise server, but that also did not produce any results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>celso3093</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the FactoryTalk Client to freeze intermittently after reinstalling FactoryTalk Linx?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The freezing issue could be related to messages in the Diagnostics Viewer such as "Driver Ethernet re-established a session to IP" and "Driver Ethernet lost communications to IP: connection reset by peer" that pertain to non-critical IP addresses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can we troubleshoot the issue of FactoryTalk Linx freezing on one of our standalone FactoryTalk Site Edition clients?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try removing the problematic devices and investigating how the Ethernet driver automatically scans the network, as modifying this setting might help resolve the freezing problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why are the freezing episodes specific to one station only, even though the FactoryTalk Linx drivers and devices on both stations are almost identical?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the network configuration or specific settings on that particular station, which may need to be reviewed and adjusted to address the freezing problem.</p>
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
