
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am experiencing an issue with my ftvme v13 software where it fails to go live with the PLC when I initiate the play button, indicating a potential communication problem. Despite the path shortcut being correct and the communications tab showing successful browsing of the PLC (with all">
    <meta name="keywords" content="ftvme v13 software troubleshooting, plc communication issue fix, live plc communication problem, ftvme v13 software live plc error, debugging ftvme v13 software, trou">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ftvme-v13-software-live-plc-communication-issue">
    <title>Troubleshooting Ftvme V13 Software Live PLC Communication Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Ftvme V13 Software Live PLC Communication Issue | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am experiencing an issue with my ftvme v13 software where it fails to go live with the PLC when I initiate the play button, indicating a potential communication problem. Despite the path shortcut being correct and the communications tab showing successful browsing of the PLC (with all">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ftvme-v13-software-live-plc-communication-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Ftvme V13 Software Live PLC Communication Issue | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am experiencing an issue with my ftvme v13 software where it fails to go live with the PLC when I initiate the play button, indicating a potential communication problem. Despite the path shortcut being correct and the communications tab showing successful browsing of the PLC (with all">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ftvme-v13-software-live-plc-communication-issue"
      },
      "headline": "Troubleshooting Ftvme V13 Software Live PLC Communication Issue",
      "description": "Greetings, I am experiencing an issue with my ftvme v13 software where it fails to go live with the PLC when I initiate the play button, indicating a potential communication problem. Despite the path shortcut being correct and the communications tab showing successful browsing of the PLC (with all",
      "author": {
        "@type": "Person",
        "name": "Kdeezy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-24",
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
                <h1 class="text-white">Troubleshooting Ftvme V13 Software Live PLC Communication Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kdeezy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">105</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">162</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am experiencing an issue with my ftvme v13 software where it fails to go live with the PLC when I initiate the play button, indicating a potential communication problem. Despite the path shortcut being correct and the communications tab showing successful browsing of the PLC (with all PLC modules appearing), the diagnosis list reveals that an attempt to open an ftld session has failed (reason code 80004005). Strangely, this issue appears to be isolated to my laptop, as others using different laptops do not encounter the same problem. I would greatly appreciate any assistance in diagnosing and resolving this issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you properly configured the path in the Design Environment (Local) rather than the Runtime Environment (Remote)? Double-check to ensure your settings are correct for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting the path in the Design environment, make sure it is set correctly in the local directory, not the remote one. I have confirmed that it is set up correctly on my local machine. Despite a colleague having no issues with their setup, I am unable to access it on my laptop. I have tried reinstalling FactoryTalk View (FTV) and Linx to troubleshoot the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kdeezy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my ftvme v13 software failing to go live with the PLC even though the path shortcut is correct and the communications tab shows successful browsing of the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue you are facing could be due to a failed attempt to open an ftld session, indicated by reason code 80004005. This error can disrupt communication between the software and the PLC, preventing it from going live.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the ftvme v13 software live PLC communication issue to be specific to my laptop, while others using different laptops do not encounter the same problem?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The problem being isolated to your laptop suggests that there may be a configuration or compatibility issue specific to your system. It could be related to settings, network configurations, firewall settings, or other software conflicts on your laptop.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I diagnose and resolve the ftvme v13 software live PLC communication issue I am facing?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To diagnose and resolve the issue, you can start by checking the error code (80004005) to understand the specific reason for the failed ftld session. Additionally, review your laptop's settings, network configurations, and firewall settings to ensure they are compatible with the software. You may also consider updating drivers, checking for software conflicts, or seeking assistance from technical support for further troubleshooting.</p>
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
