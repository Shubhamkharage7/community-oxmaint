
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When a CompactLogix PLC displays a solid red OK indicator, it typically indicates a major fault resulting in the program being cleared from memory. However, in a recent case with a 1769-L16ER-BB1B series B PLC running firmware v24.011, the program was running normally despite the red OK light. The">
    <meta name="keywords" content="troubleshooting, solid red ok indicator, compactlogix plc, 1769-l16er-bb1b, firmware v011, powerup fault, program clearing, power cycling, outputs blinking, inputs functioning">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-a-solid-red-ok-indicator-on-a-running-compactlogix-plc">
    <title>Troubleshooting a Solid Red OK Indicator on a Running CompactLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting a Solid Red OK Indicator on a Running CompactLogix PLC | Oxmaint Community">
    <meta property="og:description" content="When a CompactLogix PLC displays a solid red OK indicator, it typically indicates a major fault resulting in the program being cleared from memory. However, in a recent case with a 1769-L16ER-BB1B series B PLC running firmware v24.011, the program was running normally despite the red OK light. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-a-solid-red-ok-indicator-on-a-running-compactlogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting a Solid Red OK Indicator on a Running CompactLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="When a CompactLogix PLC displays a solid red OK indicator, it typically indicates a major fault resulting in the program being cleared from memory. However, in a recent case with a 1769-L16ER-BB1B series B PLC running firmware v24.011, the program was running normally despite the red OK light. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-a-solid-red-ok-indicator-on-a-running-compactlogix-plc"
      },
      "headline": "Troubleshooting a Solid Red OK Indicator on a Running CompactLogix PLC",
      "description": "When a CompactLogix PLC displays a solid red OK indicator, it typically indicates a major fault resulting in the program being cleared from memory. However, in a recent case with a 1769-L16ER-BB1B series B PLC running firmware v24.011, the program was running normally despite the red OK light. The",
      "author": {
        "@type": "Person",
        "name": "ASF"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Troubleshooting a Solid Red OK Indicator on a Running CompactLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">113</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">490</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When a CompactLogix PLC displays a solid red OK indicator, it typically indicates a major fault resulting in the program being cleared from memory. However, in a recent case with a 1769-L16ER-BB1B series B PLC running firmware v24.011, the program was running normally despite the red OK light. The PLC had been removed from a malfunctioning machine and sent for inspection.

Upon inspection, the PLC had indeed encountered a powerup fault and cleared its program. After clearing the fault, redownloading the program, and power cycling the PLC, it resumed normal operation with outputs blinking as expected and inputs functioning properly. Despite the solid red OK light, the PLC was executing the code normally.

All other indicators (NS, NET, RUN, I/O, etc) were functioning as expected, and the PLC was running its user program without any issues. Even after multiple power cycles, the OK indicator remained red, contradicting the documentation's explanation of a major fault. 

After contacting technical support, the sudden change occurred where the OK indicator turned solid green, signaling normal operation. Subsequent power cycles also resulted in the OK indicator behaving normally. The PLC was eventually returned to the customer with a note of the unusual behavior.

While the issue ultimately resolved itself, it leaves room for curiosity and the question of whether others have encountered similar occurrences or can provide further insights.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To conduct a basic diagnostic, consider using GetAttributeSingle on instance 1 attribute 5 (Status, WORD/INT) or attribute 8 (State, USINT) of Identity (0x01). This method can provide valuable information for troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does a solid red OK indicator on a CompactLogix PLC typically indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> A solid red OK indicator on a CompactLogix PLC usually indicates a major fault that results in the program being cleared from memory.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can a CompactLogix PLC still run its program normally despite a solid red OK light?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, in some cases, a CompactLogix PLC can still run its program normally even with a solid red OK light. This was observed in a specific case with a 1769-L16ER-BB1B series B PLC running firmware v24.011.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can a CompactLogix PLC be restored to normal operation after encountering a powerup fault and clearing its program?</h4>
<p class='text-muted'><strong>Answer:</strong> To restore normal operation after a powerup fault and program clearance, the fault needs to be cleared, the program redownloaded, and the PLC power cycled. This process allowed the PLC mentioned in the discussion to resume normal operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why did the OK indicator remain red despite the PLC executing the code normally?</h4>
<p class='text-muted'><strong>Answer:</strong> The reason for the OK indicator remaining red despite the PLC executing the code normally was not explicitly mentioned in the discussion. However, it was noted that the behavior contradicted the documentation's explanation of a major fault.</p>
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
