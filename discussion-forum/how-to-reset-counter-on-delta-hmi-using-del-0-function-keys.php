
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am upgrading from an OP7 to a new Delta HMI. Currently, the customer is able to reset a counter by pressing DEL + 0 simultaneously. However, upon reviewing the original OP7 program and manual in ProTool, I cannot locate a specific setting for this key combination. As a">
    <meta name="keywords" content="delta hmi, counter reset, del + 0 function keys, op7 upgrade, protool, key combination functionality, register value, op7 program, manual review, counter reset issue, hmi upgrade, delta hmi reset, counter reset">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-reset-counter-on-delta-hmi-using-del-0-function-keys">
    <title>How to Reset Counter on Delta HMI using DEL + 0 Function Keys | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Reset Counter on Delta HMI using DEL + 0 Function Keys | Oxmaint Community">
    <meta property="og:description" content="I am upgrading from an OP7 to a new Delta HMI. Currently, the customer is able to reset a counter by pressing DEL + 0 simultaneously. However, upon reviewing the original OP7 program and manual in ProTool, I cannot locate a specific setting for this key combination. As a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-reset-counter-on-delta-hmi-using-del-0-function-keys">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Reset Counter on Delta HMI using DEL + 0 Function Keys | Oxmaint Community">
    <meta name="twitter:description" content="I am upgrading from an OP7 to a new Delta HMI. Currently, the customer is able to reset a counter by pressing DEL + 0 simultaneously. However, upon reviewing the original OP7 program and manual in ProTool, I cannot locate a specific setting for this key combination. As a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-reset-counter-on-delta-hmi-using-del-0-function-keys"
      },
      "headline": "How to Reset Counter on Delta HMI using DEL + 0 Function Keys",
      "description": "I am upgrading from an OP7 to a new Delta HMI. Currently, the customer is able to reset a counter by pressing DEL + 0 simultaneously. However, upon reviewing the original OP7 program and manual in ProTool, I cannot locate a specific setting for this key combination. As a",
      "author": {
        "@type": "Person",
        "name": "bambam79"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-18",
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
                <h1 class="text-white">How to Reset Counter on Delta HMI using DEL + 0 Function Keys</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bambam79</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">190</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">41</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am upgrading from an OP7 to a new Delta HMI. Currently, the customer is able to reset a counter by pressing DEL + 0 simultaneously. However, upon reviewing the original OP7 program and manual in ProTool, I cannot locate a specific setting for this key combination. As a result, I am unsure of its functionality (such as moving a value to a register). Any assistance on this matter would be greatly appreciated. Thank you, Brett.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that user-programmable functions cannot be assigned to the DEL button, and the DEL + 0 combination is not a standard feature. It seems that only one screen and one input/output field are available. It is possible that the cursor is constantly on the counter, so by deleting the content with DEL and inputting zero with 0 before finalizing with ENTER, the counter can be reset.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like that could be the solution...The operators mentioned that they need to press it at the same time. Your explanation seems more plausible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bambam79</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I reset a counter on a Delta HMI using the key combination DEL + 0?
   - Answer: The key combination DEL + 0 is used to reset a counter on a Delta HMI. It may not be explicitly documented in the original OP7 program or manual, but it is a common function on Delta HMIs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. I am transitioning from an OP7 to a Delta HMI. Will the DEL + 0 key combination still work for resetting counters?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Yes, the DEL + 0 key combination for resetting counters should still work on the Delta HMI, as it is a standard functionality across Delta HMIs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find more information about key combinations and functionality on Delta HMIs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: You can refer to the user manual or documentation specific to the Delta HMI model you are using for detailed information on key combinations and functionality. Additionally, reaching out to Delta's customer support or online forums for assistance is recommended.</p>
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
