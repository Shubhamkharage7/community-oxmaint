
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there! One of my clients recently brought up an issue specific to the micro800 series processors in their facility, alongside compactlogix and controllogix systems. Occasionally, certain variables within the micro800 project database lose connection with the SCADA system (FTView), while others function properly. One temporary solution we found">
    <meta name="keywords" content="micro800 series plc, scada system data loss, troubleshooting micro800 series plc, scada system connectivity, micro800 project database, ftview scada, compactlog">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-micro800-series-plc-data-loss-issue-in-scada-system">
    <title>Troubleshooting Micro800 Series PLC Data Loss Issue in SCADA System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Micro800 Series PLC Data Loss Issue in SCADA System | Oxmaint Community">
    <meta property="og:description" content="Hello there! One of my clients recently brought up an issue specific to the micro800 series processors in their facility, alongside compactlogix and controllogix systems. Occasionally, certain variables within the micro800 project database lose connection with the SCADA system (FTView), while others function properly. One temporary solution we found">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-micro800-series-plc-data-loss-issue-in-scada-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Micro800 Series PLC Data Loss Issue in SCADA System | Oxmaint Community">
    <meta name="twitter:description" content="Hello there! One of my clients recently brought up an issue specific to the micro800 series processors in their facility, alongside compactlogix and controllogix systems. Occasionally, certain variables within the micro800 project database lose connection with the SCADA system (FTView), while others function properly. One temporary solution we found">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-micro800-series-plc-data-loss-issue-in-scada-system"
      },
      "headline": "Troubleshooting Micro800 Series PLC Data Loss Issue in SCADA System",
      "description": "Hello there! One of my clients recently brought up an issue specific to the micro800 series processors in their facility, alongside compactlogix and controllogix systems. Occasionally, certain variables within the micro800 project database lose connection with the SCADA system (FTView), while others function properly. One temporary solution we found",
      "author": {
        "@type": "Person",
        "name": "Revnus"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-28",
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
                <h1 class="text-white">Troubleshooting Micro800 Series PLC Data Loss Issue in SCADA System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">266</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">476</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there! One of my clients recently brought up an issue specific to the micro800 series processors in their facility, alongside compactlogix and controllogix systems. Occasionally, certain variables within the micro800 project database lose connection with the SCADA system (FTView), while others function properly. One temporary solution we found was to toggle between the secondary and primary data servers, which restored the offline variables. This problem affects multiple Micro8xx PLCs, all set up as symbolic in the communication configuration. Any advice on where to start troubleshooting this issue would be greatly appreciated. Let me know your thoughts.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there anyone who can help? Let's connect and find a solution together.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One potential solution could be updating the Firmware to the latest version on each PLC. It's important to consider the communication protocol being used and ensure that the network is configured to support the necessary Bandwidth. It's worth noting that the Micro800 series may have different scan times compared to Contrologix or Compactlogix PLCs. These are just a few suggestions to consider.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the common issue being faced with the Micro800 Series PLCs in the SCADA system?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue involves certain variables within the Micro800 project database losing connection with the SCADA system (FTView) intermittently.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How are the affected Micro800 PLCs set up in the communication configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> The affected Micro800 PLCs are all set up as symbolic in the communication configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What temporary solution was discovered for restoring the offline variables in the SCADA system?</h4>
<p class='text-muted'><strong>Answer:</strong> Toggling between the secondary and primary data servers helped restore the offline variables temporarily.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are other PLC systems like CompactLogix and ControlLogix also experiencing similar issues?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, alongside the Micro800 Series processors, there are reports of issues with CompactLogix and ControlLogix systems in the facility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Where should one begin troubleshooting this data loss issue with the Micro800 PLCs in the SCADA system?</h4>
<p class='text-muted'><strong>Answer:</strong> It is recommended to start troubleshooting by investigating the communication setup, configurations, and potential network issues impacting the connectivity between the Micro800 PLCs and the SCADA system.</p>
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
