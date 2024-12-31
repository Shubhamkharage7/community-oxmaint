
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently experimenting with integrating the .@Description feature to retrieve description strings from a CompactLogix system and display them dynamically on a C-More HMI. Is this functionality exclusive to PanelView or can it be utilized across multiple platforms?">
    <meta name="keywords" content="c-more hmi, compactlogix, tag descriptions, dynamic display, integrating description feature, panelview, hmi system, compactlogix system, description strings, display functionality, panel platforms, panel compatibility, dynamically display">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/utilizing-c-more-hmi-to-dynamically-display-tag-descriptions-from-compactlogix">
    <title>Utilizing C-More HMI to Dynamically Display Tag Descriptions from CompactLogix | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Utilizing C-More HMI to Dynamically Display Tag Descriptions from CompactLogix | Oxmaint Community">
    <meta property="og:description" content="I am currently experimenting with integrating the .@Description feature to retrieve description strings from a CompactLogix system and display them dynamically on a C-More HMI. Is this functionality exclusive to PanelView or can it be utilized across multiple platforms?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/utilizing-c-more-hmi-to-dynamically-display-tag-descriptions-from-compactlogix">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Utilizing C-More HMI to Dynamically Display Tag Descriptions from CompactLogix | Oxmaint Community">
    <meta name="twitter:description" content="I am currently experimenting with integrating the .@Description feature to retrieve description strings from a CompactLogix system and display them dynamically on a C-More HMI. Is this functionality exclusive to PanelView or can it be utilized across multiple platforms?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/utilizing-c-more-hmi-to-dynamically-display-tag-descriptions-from-compactlogix"
      },
      "headline": "Utilizing C-More HMI to Dynamically Display Tag Descriptions from CompactLogix",
      "description": "I am currently experimenting with integrating the .@Description feature to retrieve description strings from a CompactLogix system and display them dynamically on a C-More HMI. Is this functionality exclusive to PanelView or can it be utilized across multiple platforms?",
      "author": {
        "@type": "Person",
        "name": "d x l"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-25",
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
                <h1 class="text-white">Utilizing C-More HMI to Dynamically Display Tag Descriptions from CompactLogix</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>d x l</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">65</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">112</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently experimenting with integrating the .@Description feature to retrieve description strings from a CompactLogix system and display them dynamically on a C-More HMI. Is this functionality exclusive to PanelView or can it be utilized across multiple platforms?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to note that extended properties can only be accessed through a symbolic tag read, rather than a logical read as stated in the manual. Since these values typically remain constant, it may not be necessary to optimize their reading. However, it is advisable to investigate how your device performs CIP tag reads for accuracy. If I am mistaken, I apologize for any confusion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Can the .@Description feature be used to dynamically display tag descriptions from a CompactLogix system on a C-More HMI?
- Yes, the .@Description feature can be utilized to retrieve description strings from a CompactLogix system and display them dynamically on a C-More HMI.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is the functionality of displaying tag descriptions dynamically limited to PanelView systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, this functionality is not exclusive to PanelView systems and can be implemented across multiple platforms, including C-More HMIs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I set up the integration of tag descriptions from a CompactLogix system to be displayed dynamically on a C-More HMI using the .@Description feature?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can achieve this by configuring the .@Description feature to access tag descriptions from the CompactLogix system and then dynamically displaying them on the C-More HMI interface.</p>
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
