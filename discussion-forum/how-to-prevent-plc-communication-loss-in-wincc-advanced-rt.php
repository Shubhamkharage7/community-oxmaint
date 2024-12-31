
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, in WinCC Advanced RT (also in WinCC Flexible), if the connection to the PLC is lost, the output field (real) displays ####. This usually means that the tag value of the field has gone to a high number. The same tag is linked to an analog alarm">
    <meta name="keywords" content="plc communication loss prevention, wincc advanced rt, wincc flexible, plc connection issues, analog alarm triggers, plc disconnect solution, communication loss troubleshooting, tag value display issue, prevent alarm triggering, real output field problem, resolving communication loss, plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-prevent-plc-communication-loss-in-wincc-advanced-rt">
    <title>How to Prevent PLC Communication Loss in WinCC Advanced RT | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Prevent PLC Communication Loss in WinCC Advanced RT | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, in WinCC Advanced RT (also in WinCC Flexible), if the connection to the PLC is lost, the output field (real) displays ####. This usually means that the tag value of the field has gone to a high number. The same tag is linked to an analog alarm">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-prevent-plc-communication-loss-in-wincc-advanced-rt">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Prevent PLC Communication Loss in WinCC Advanced RT | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, in WinCC Advanced RT (also in WinCC Flexible), if the connection to the PLC is lost, the output field (real) displays ####. This usually means that the tag value of the field has gone to a high number. The same tag is linked to an analog alarm">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-prevent-plc-communication-loss-in-wincc-advanced-rt"
      },
      "headline": "How to Prevent PLC Communication Loss in WinCC Advanced RT",
      "description": "Hello everyone, in WinCC Advanced RT (also in WinCC Flexible), if the connection to the PLC is lost, the output field (real) displays ####. This usually means that the tag value of the field has gone to a high number. The same tag is linked to an analog alarm",
      "author": {
        "@type": "Person",
        "name": "apetkov5"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-25",
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
                <h1 class="text-white">How to Prevent PLC Communication Loss in WinCC Advanced RT</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>apetkov5</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">357</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">327</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, in WinCC Advanced RT (also in WinCC Flexible), if the connection to the PLC is lost, the output field (real) displays "####." This usually means that the tag value of the field has gone to a high number. The same tag is linked to an analog alarm that is programmed to trigger when the tag value exceeds "100." The issue arises when the PLC disconnects (resulting in "####" being displayed, and the alarm being triggered). Is there a way to prevent this? Can the tag value be set to "0" or another value in the event of a communication loss?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the tag value of that field expected to increase significantly? Click to expand... No, the "#######" simply indicates that there is no valid value to display. The same tag is linked to an analog alarm set to trigger when the tag value exceeds "100". The issue arises when the PLC is disconnected (displaying #### triggers the alarm). How can this be avoided? Click to expand... Instead of using an analog alarm, consider generating a bit alarm in the PLC. Is it feasible for the tag value to switch to "0" in case of communication loss? Click to expand... Doing so would lead to inaccurate information. Displaying "#######" when there is no online connection is the intended functionality by Siemens.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  How can I prevent the PLC communication loss issue in WinCC Advanced RT?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To prevent the issue of PLC communication loss in WinCC Advanced RT, you can consider setting up a mechanism to handle the situation when the connection is lost, such as setting the tag value to a specific value like "0" when communication is interrupted.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What does it mean when the output field in WinCC shows "" after a PLC communication loss?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In WinCC Advanced RT, when the connection to the PLC is lost, and the output field displays "," it indicates that the tag value of the field has gone to a high number due to the lost connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I avoid false alarms triggered by a disconnected PLC in WinCC Advanced RT?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To prevent false alarms triggered by a disconnected PLC in WinCC Advanced RT, you can set up the system to handle communication losses by adjusting the tag value to a predefined value (e.g., "0") when the connection is lost.</p>
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
