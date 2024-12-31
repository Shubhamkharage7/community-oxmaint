
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I own a MicroLogix 1200 PLC with 8 inputs and 16 outputs. Every six months to a year, I encounter a fault where the system fails to recognize one of the expansion modules. By clearing the error and resetting the controllers power, the issue is resolved. I suspect that">
    <meta name="keywords" content="micrologix 1200 plc, expansion module recognition issue, troubleshooting plc faults, plc expansion modules, s:1/8 processor setting, clearing plc errors, power cycling plc, plc relocation issues, new facility program, microlog">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-micrologix-1200-plc-expansion-module-recognition-issue">
    <title>Troubleshooting MicroLogix 1200 PLC Expansion Module Recognition Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting MicroLogix 1200 PLC Expansion Module Recognition Issue | Oxmaint Community">
    <meta property="og:description" content="I own a MicroLogix 1200 PLC with 8 inputs and 16 outputs. Every six months to a year, I encounter a fault where the system fails to recognize one of the expansion modules. By clearing the error and resetting the controllers power, the issue is resolved. I suspect that">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-micrologix-1200-plc-expansion-module-recognition-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting MicroLogix 1200 PLC Expansion Module Recognition Issue | Oxmaint Community">
    <meta name="twitter:description" content="I own a MicroLogix 1200 PLC with 8 inputs and 16 outputs. Every six months to a year, I encounter a fault where the system fails to recognize one of the expansion modules. By clearing the error and resetting the controllers power, the issue is resolved. I suspect that">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-micrologix-1200-plc-expansion-module-recognition-issue"
      },
      "headline": "Troubleshooting MicroLogix 1200 PLC Expansion Module Recognition Issue",
      "description": "I own a MicroLogix 1200 PLC with 8 inputs and 16 outputs. Every six months to a year, I encounter a fault where the system fails to recognize one of the expansion modules. By clearing the error and resetting the controllers power, the issue is resolved. I suspect that",
      "author": {
        "@type": "Person",
        "name": "roxusa"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-14",
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
                <h1 class="text-white">Troubleshooting MicroLogix 1200 PLC Expansion Module Recognition Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>roxusa</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">849</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">380</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I own a MicroLogix 1200 PLC with 8 inputs and 16 outputs. Every six months to a year, I encounter a fault where the system fails to recognize one of the expansion modules. By clearing the error and resetting the controller's power, the issue is resolved. I suspect that by setting something in the processor, possibly S:1/8, the fault can be cleared with a power cycle. This PLC was recently relocated to a different facility with a new program, and after running smoothly for a year, it has encountered another fault. Can setting S:1/8 help clear the fault upon power cycling? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe I previously utilized this forum to address a similar issue years ago. Do I need to set S:1/8 & S:1/15 to 1 in order to successfully clear a fault on power cycle?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>roxusa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Focus more on preventing faults from happening rather than solely on fixing them after they occur. If you're experiencing issues with an expansion module, it could be due to a physical connection problem caused by dirty contacts. This is a common issue with plug-in modules on ControlLogix, CompactLogix, and similar systems. Try reseating the modules and using a specialized contact cleaner spray to ensure proper connections. Additionally, consider implementing controlled heating in the panel to prevent it from reaching dew point. Keep panel enclosures closed when not in use to minimize the risk of issues. Remember, it's always better to prevent faults than to rely on temporary fixes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After relocating the processor to a new facility, I realigned the cables connecting the PLC to the Expansion modules (1762 modules). It seems that the 3 modules currently in use are different from those at the previous location. The issue possibly lies in the PLC side connection. This fault has unexpectedly appeared after a year at the current facility. Consider replacing the ML1200 with a ML1400 to address the issue effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>roxusa</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the MicroLogix 1200 PLC to fail recognizing one of the expansion modules periodically?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to various factors such as wiring connections, communication settings, or module compatibility. Regular maintenance and troubleshooting can help identify the root cause of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the recognition issue of the expansion module in my MicroLogix 1200 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can begin troubleshooting by checking the wiring connections, ensuring compatibility with the PLC model, verifying communication settings, and examining the configuration of the expansion modules in the program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it recommended to reset the controller's power to resolve the issue of the PLC not recognizing an expansion module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While power cycling the controller may temporarily resolve the recognition issue, it is important to investigate the underlying cause to prevent future occurrences. Consider checking the configuration settings and conducting a thorough inspection of the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can setting S:1/8 in the MicroLogix 1200 PLC processor potentially help clear faults upon power cycling?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Setting S:1/8 in the processor may have an impact on fault clearing behavior during power cycling. It is advisable to consult the PLC's documentation or contact the manufacturer for specific details on utilizing this feature effectively.</p>
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
