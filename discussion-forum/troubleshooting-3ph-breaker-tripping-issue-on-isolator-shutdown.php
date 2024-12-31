
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am in the process of recommissioning an old Control Cabinet and have equipped it with new control gear. I am eager to put it back into operation, but when I switch off the isolator on the Panel, it causes the 16A Breaker for the Socket its">
    <meta name="keywords" content="troubleshooting, 3ph breaker tripping, isolator shutdown, control cabinet, control gear, ground faults, short-circuits, 4 pole isolator, plug wiring, simanics v20 vfd">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-3ph-breaker-tripping-issue-on-isolator-shutdown">
    <title>Troubleshooting 3Ph Breaker Tripping Issue on Isolator Shutdown | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 3Ph Breaker Tripping Issue on Isolator Shutdown | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am in the process of recommissioning an old Control Cabinet and have equipped it with new control gear. I am eager to put it back into operation, but when I switch off the isolator on the Panel, it causes the 16A Breaker for the Socket its">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-3ph-breaker-tripping-issue-on-isolator-shutdown">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 3Ph Breaker Tripping Issue on Isolator Shutdown | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am in the process of recommissioning an old Control Cabinet and have equipped it with new control gear. I am eager to put it back into operation, but when I switch off the isolator on the Panel, it causes the 16A Breaker for the Socket its">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-3ph-breaker-tripping-issue-on-isolator-shutdown"
      },
      "headline": "Troubleshooting 3Ph Breaker Tripping Issue on Isolator Shutdown",
      "description": "Hello everyone, I am in the process of recommissioning an old Control Cabinet and have equipped it with new control gear. I am eager to put it back into operation, but when I switch off the isolator on the Panel, it causes the 16A Breaker for the Socket its",
      "author": {
        "@type": "Person",
        "name": "Doyler"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">Troubleshooting 3Ph Breaker Tripping Issue on Isolator Shutdown</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Doyler</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">79</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">158</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am in the process of recommissioning an old Control Cabinet and have equipped it with new control gear. I am eager to put it back into operation, but when I switch off the isolator on the Panel, it causes the 16A Breaker for the Socket it's connected to trip. I have thoroughly checked for Ground Faults and Short-circuits, but all seems to be in order. The isolator is a 4 Pole (3Ph + N) and the Plug wiring appears to be correct. The Cabinet contains a Simanics V20 VFD and Logo8 Controls, and the motor does not start when powered down, so there should not be any inductive kickback. The Trip Switch is a Hager ADM420c B20 - could it be that its tripping characteristics are not suitable? Any advice on this issue would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In some cases, the isolator may experience a delay in breaking or an early connection in the neutral. This can potentially cause disruptions to specific equipment. To troubleshoot this issue, consider testing by linking out or bypassing the neutral and observing the results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the 16A breaker tripping when the isolator on the panel is switched off?</h4>
<p class='text-muted'><strong>Answer:</strong> - The breaker tripping issue could be due to various reasons, such as incompatible tripping characteristics of the Hager ADM420c B20 trip switch or potential wiring issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What steps have been taken to troubleshoot the breaker tripping problem?</h4>
<p class='text-muted'><strong>Answer:</strong> - The individual has checked for ground faults, short circuits, and verified the correct wiring of the isolator and plug, but the problem persists.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Could the VFD (Simanics V20) or Logo8 Controls be causing the breaker tripping issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - The user mentioned that the motor does not start when powered down, indicating there should not be any inductive kickback. However, further investigation may be needed to rule out the control gear as the source of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there any specific advice for resolving the isolator shutdown breaker tripping issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - Suggestions could include checking the compatibility of the Hager ADM420c B20 trip switch, inspecting the wiring connections thoroughly, and seeking professional assistance if needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can I effectively troubleshoot and resolve breaker tripping issues in a control cabinet?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting techniques may involve systematically checking components, verifying wiring connections, testing individual devices, and consulting with experts in electrical systems and equipment.</p>
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
