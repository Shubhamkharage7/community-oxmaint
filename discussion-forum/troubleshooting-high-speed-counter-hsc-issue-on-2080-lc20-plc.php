
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, has anyone encountered a problem with the High-Speed Counter (HSC) on the 2080-LC20 PLC? The PLC is being used on a cut off press, and occasionally, after resetting the HSC to zero, it fails to count. We have tried various methods to reset the HSC, but sometimes it">
    <meta name="keywords" content="troubleshooting, high-speed counter, hsc, 2080-lc20 plc, cut off press, counting issue, resetting problem, stuck hsc, powering down, resolve issue, plc error, hsc malfunction">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-high-speed-counter-hsc-issue-on-2080-lc20-plc">
    <title>Troubleshooting High-Speed Counter (HSC) Issue on 2080-LC20 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting High-Speed Counter (HSC) Issue on 2080-LC20 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello, has anyone encountered a problem with the High-Speed Counter (HSC) on the 2080-LC20 PLC? The PLC is being used on a cut off press, and occasionally, after resetting the HSC to zero, it fails to count. We have tried various methods to reset the HSC, but sometimes it">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-high-speed-counter-hsc-issue-on-2080-lc20-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting High-Speed Counter (HSC) Issue on 2080-LC20 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello, has anyone encountered a problem with the High-Speed Counter (HSC) on the 2080-LC20 PLC? The PLC is being used on a cut off press, and occasionally, after resetting the HSC to zero, it fails to count. We have tried various methods to reset the HSC, but sometimes it">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-high-speed-counter-hsc-issue-on-2080-lc20-plc"
      },
      "headline": "Troubleshooting High-Speed Counter (HSC) Issue on 2080-LC20 PLC",
      "description": "Hello, has anyone encountered a problem with the High-Speed Counter (HSC) on the 2080-LC20 PLC? The PLC is being used on a cut off press, and occasionally, after resetting the HSC to zero, it fails to count. We have tried various methods to reset the HSC, but sometimes it",
      "author": {
        "@type": "Person",
        "name": "RobertKoto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-01",
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
                <h1 class="text-white">Troubleshooting High-Speed Counter (HSC) Issue on 2080-LC20 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RobertKoto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">216</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">56</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, has anyone encountered a problem with the High-Speed Counter (HSC) on the 2080-LC20 PLC? The PLC is being used on a cut off press, and occasionally, after resetting the HSC to zero, it fails to count. We have tried various methods to reset the HSC, but sometimes it gets stuck and requires powering down the PLC to reset it. Please see the attached printout. Any ideas or suggestions on how to resolve this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In all honesty, I have found that the 800 series PLCs and their high-speed functions often encounter issues. When attempting to use the HSC for an encoder, I consistently faced glitches. As a workaround, I opted for lower resolution encoders or developed my own pulse counter logic, albeit with limited success. It is crucial to adjust the scan rate on the input terminal or designate it as high-speed. The specific terminology used in CCW for this escapes me at the moment. Furthermore, it is important to monitor the controller scan rate with these 800 series PLCs, as excessive code can easily slow their operation to the 1/2 - 1 1/2 second range.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the High-Speed Counter (HSC) on the 2080-LC20 PLC to fail to count even after resetting it to zero?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be due to various factors such as wiring problems, input signal issues, or configuration settings. It is essential to troubleshoot each possibility to identify the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the High-Speed Counter (HSC) issue on the 2080-LC20 PLC when it gets stuck and requires a power cycle to reset?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the issue, you can check the wiring connections, ensure the input signals are reaching the PLC, review the HSC configuration settings, and monitor any error messages or alarms in the PLC's diagnostics.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there specific methods or best practices to reset the High-Speed Counter (HSC) on the 2080-LC20 PLC effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When resetting the HSC, it is recommended to follow the manufacturer's guidelines and ensure that the reset process is completed accurately. Additionally, reviewing the PLC's user manual for specific reset procedures can be beneficial in resolving the issue.</p>
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
