
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our compressors are equipped with an SLC 5/04 controller that utilizes DH+ for connectivity to the PanelView, Data Highway, and Hwl Experion SCADA channel. However, we are experiencing communication issues, resulting in the SLC being unable to communicate with the PanelView or SCADA system. The PanelView displays an error">
    <meta name="keywords" content="slc 5/04, panelview, dh+ network, communication issues, troubleshooting, data highway, hwl experion scada, connectivity problems, error message, n:0, station 2, dh+">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-between-slc5-04-and-panel-view-on-dh-network">
    <title>Troubleshooting Communication Issues between SLC5/04 and Panel View on DH+ Network | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issues between SLC5/04 and Panel View on DH+ Network | Oxmaint Community">
    <meta property="og:description" content="Our compressors are equipped with an SLC 5/04 controller that utilizes DH+ for connectivity to the PanelView, Data Highway, and Hwl Experion SCADA channel. However, we are experiencing communication issues, resulting in the SLC being unable to communicate with the PanelView or SCADA system. The PanelView displays an error">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-between-slc5-04-and-panel-view-on-dh-network">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issues between SLC5/04 and Panel View on DH+ Network | Oxmaint Community">
    <meta name="twitter:description" content="Our compressors are equipped with an SLC 5/04 controller that utilizes DH+ for connectivity to the PanelView, Data Highway, and Hwl Experion SCADA channel. However, we are experiencing communication issues, resulting in the SLC being unable to communicate with the PanelView or SCADA system. The PanelView displays an error">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-between-slc5-04-and-panel-view-on-dh-network"
      },
      "headline": "Troubleshooting Communication Issues between SLC5/04 and Panel View on DH+ Network",
      "description": "Our compressors are equipped with an SLC 5/04 controller that utilizes DH+ for connectivity to the PanelView, Data Highway, and Hwl Experion SCADA channel. However, we are experiencing communication issues, resulting in the SLC being unable to communicate with the PanelView or SCADA system. The PanelView displays an error",
      "author": {
        "@type": "Person",
        "name": "ctrleng14"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-08",
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
                <h1 class="text-white">Troubleshooting Communication Issues between SLC5/04 and Panel View on DH+ Network</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ctrleng14</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">201</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">282</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our compressors are equipped with an SLC 5/04 controller that utilizes DH+ for connectivity to the PanelView, Data Highway, and Hwl Experion SCADA channel. However, we are experiencing communication issues, resulting in the SLC being unable to communicate with the PanelView or SCADA system. The PanelView displays an error message stating: "No acknowledgement reading N:10.0- N10.65 from the SLC at station 2 on the DH+ driver."</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>ctrleng14 mentioned a connectivity issue with their SLC 5/04 compressors, which are linked to Panelview and Datahighway via DH+. This has caused a loss in communication with the Hwl Experion SCADA system. The error message on the Panelview indicates a lack of acknowledgment from the SLC at station 2 on the DH+ network. To resolve this issue, it is crucial to troubleshoot and identify the point of failure in the link. It is recommended to check if other devices on the DH+ network are communicating properly and to test by disconnecting devices and adjusting terminating resistors to pinpoint the faulty device or cable. If you are experiencing similar connectivity problems, consider following these steps to diagnose and resolve the issue efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Recently encountered a communication loss problem with DH+, which was successfully remedied by re-terminating a single node. The issue was caused by a short circuit, resulting in sudden communication loss despite the network functioning properly. Looking forward to the day when DH+ and DeviceNet technology are no longer in use before my retirement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to access the DH+ network online? Which nodes can be identified in RSLynx? Explore the online capabilities of the DH+ network and discover the various nodes displayed in RSLynx.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate everyone for their responses. By "installing" the termination resistor, the problem was successfully resolved. It seems that the EOL resistor may have been accidentally shorted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ctrleng14</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What could be causing the communication issues between the SLC5/04 controller and PanelView on the DH+ network?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Communication issues can be caused by various factors such as incorrect network settings, faulty cables, improper addressing, or configuration mismatch between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I troubleshoot the "No acknowledgement reading N:10.0- N10.65 from the SLC at station 2 on the DH+ driver" error message on the PanelView?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot this error, check the network configuration, verify the addressing settings on both the SLC and PanelView, ensure proper cable connections, and confirm that the DH+ driver settings are correctly configured.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Is there a specific protocol or communication setup required for the SLC5/04 controller to communicate with the PanelView and SCADA system on the DH+ network?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, the SLC5/04 controller needs to be properly configured with the correct DH+ network settings, including node addressing, baud rate, and communication protocol to establish seamless communication with the PanelView and SCADA system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: What steps should I take to resolve communication issues between the SLC5/04 controller and PanelView when encountering errors like "No acknowledgement reading N:10.0- N10.65"?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Start by checking the physical</p>
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
