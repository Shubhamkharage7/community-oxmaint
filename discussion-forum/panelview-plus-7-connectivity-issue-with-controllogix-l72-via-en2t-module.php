
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am facing an unusual issue with the performance of our PanelView Plus 7 units, which are connected to a ControlLogix via an EN2T module. While they usually work fine, there are instances when reconnecting a PVP to the Stratix 2000 16-port switch results in it not functioning properly.">
    <meta name="keywords" content="panelview plus 7, connectivity issue, controllogix l72, en2t module, cip fwdopen rejected, cip fwd open failed, stratix 2000 16-port switch, cip bad field/other">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/panelview-plus-7-connectivity-issue-with-controllogix-l72-via-en2t-module">
    <title>PanelView Plus 7 Connectivity Issue with ControlLogix L72 via EN2T Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="PanelView Plus 7 Connectivity Issue with ControlLogix L72 via EN2T Module | Oxmaint Community">
    <meta property="og:description" content="I am facing an unusual issue with the performance of our PanelView Plus 7 units, which are connected to a ControlLogix via an EN2T module. While they usually work fine, there are instances when reconnecting a PVP to the Stratix 2000 16-port switch results in it not functioning properly.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/panelview-plus-7-connectivity-issue-with-controllogix-l72-via-en2t-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PanelView Plus 7 Connectivity Issue with ControlLogix L72 via EN2T Module | Oxmaint Community">
    <meta name="twitter:description" content="I am facing an unusual issue with the performance of our PanelView Plus 7 units, which are connected to a ControlLogix via an EN2T module. While they usually work fine, there are instances when reconnecting a PVP to the Stratix 2000 16-port switch results in it not functioning properly.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/panelview-plus-7-connectivity-issue-with-controllogix-l72-via-en2t-module"
      },
      "headline": "PanelView Plus 7 Connectivity Issue with ControlLogix L72 via EN2T Module",
      "description": "I am facing an unusual issue with the performance of our PanelView Plus 7 units, which are connected to a ControlLogix via an EN2T module. While they usually work fine, there are instances when reconnecting a PVP to the Stratix 2000 16-port switch results in it not functioning properly.",
      "author": {
        "@type": "Person",
        "name": "sshah1988"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-09",
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
                <h1 class="text-white">PanelView Plus 7 Connectivity Issue with ControlLogix L72 via EN2T Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sshah1988</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">224</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">50</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am facing an unusual issue with the performance of our PanelView Plus 7 units, which are connected to a ControlLogix via an EN2T module. While they usually work fine, there are instances when reconnecting a PVP to the Stratix 2000 16-port switch results in it not functioning properly. The error message displayed on the PVP is "CIP FWDOPEN rejected" or "CIP FWD OPEN failed." Upon checking the EN2T webpage, I noticed that the "CIP Bad field/other rejects" counters were at 90, which I believe may be causing the CIP FWD OPEN failures. Your assistance in resolving this issue would be greatly appreciated. Please refer to the attached screenshot of the counters. It is important to note that the TCP and CIP connections have not been maxed out and are well below the allowable limits. The IO packet rate is only 1400 pps and the HMI\MSG PPS is between 6 to 9, both of which are below the limits. However, I suspect that the issue lies with the "Bad field/other rejects" shown in the image.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Before proceeding, it is crucial to verify that the device is negotiating 100mbps at full duplex. If not, try reconnecting the ethernet cable to the en2t port. Consider using a tester to ensure proper connectivity. Furthermore, it is advisable to explore Rockwell's product compatibility and download center for relevant information. Look into the firmware version of your panel views and review the release notes and download options. Keep an eye out for any notifications regarding a necessary firmware update for your en2t or, in rare cases, a potential hardware revision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting network connectivity, ensure that the device is negotiating at 100mbps full duplex. Try reseating the ethernet cable for the EN2T module and use a tester if available. Refer to Rockwell's product compatibility and download center for further assistance. Verify the firmware version of your panel views and review the release notes for any relevant information. It is possible that your EN2T module may require a firmware update or even a new hardware revision. After conducting various troubleshooting steps, a Wireshark analysis revealed issues with "Invalid Attribute values" responses from the EN2T modules when attempting to establish connections with PVP or ME applications. The error message "CIP Connection open failed" was consistently observed on the HMI diagnostics. This issue persisted regardless of whether the HMI application was running on PVP or PC. Check out the Wireshark snippet below for a visual representation of the problem encountered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sshah1988</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the "CIP FWDOPEN rejected" or "CIP FWD OPEN failed" error messages on the PanelView Plus 7 units connected to ControlLogix via the EN2T module?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "CIP FWDOPEN rejected" or "CIP FWD OPEN failed" error messages may be caused by high counts of "CIP Bad field/other rejects" on the EN2T module, as indicated in the attached screenshot.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can the issue of "CIP Bad field/other rejects" counters being at 90 on the EN2T module be resolved?</h4>
<p class='text-muted'><strong>Answer:</strong> - To resolve the issue of high "CIP Bad field/other rejects" counters on the EN2T module, troubleshooting steps such as checking for network configuration errors, ensuring proper cabling, and verifying device compatibility can be helpful.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there specific network settings or configurations that need to be adjusted to prevent the "CIP FWDOPEN rejected" or "CIP FWD OPEN failed" errors on the PanelView Plus 7 units?</h4>
<p class='text-muted'><strong>Answer:</strong> - Adjusting network settings, reviewing switch configurations, and ensuring proper network communication protocols can help prevent the occurrence of "CIP FWDOPEN rejected" or "CIP FWD OPEN failed" errors on the PanelView Plus 7 units connected to ControlLogix via the EN2T module.</p>
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
