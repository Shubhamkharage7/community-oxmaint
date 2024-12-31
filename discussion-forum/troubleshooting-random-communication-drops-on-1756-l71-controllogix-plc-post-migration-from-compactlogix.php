
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, we are facing an issue with our CompactLogix PLC (L27ERM) as it can only handle up to 16 CIP connections. Since we are currently at 15 connections, we are considering replacing it with a ControlLogix PLC (L71 with EN2T). We have successfully migrated all the logic and">
    <meta name="keywords" content="1756-l71 controllogix, compactlogix plc, communication drops, troubleshooting, migration, cip connections, en2t module, intermittent communication losses, inconsistencies, 1783-us16t">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-random-communication-drops-on-1756-l71-controllogix-plc-post-migration-from-compactlogix">
    <title>Troubleshooting Random Communication Drops on 1756-L71 ControlLogix PLC Post Migration from CompactLogix | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Random Communication Drops on 1756-L71 ControlLogix PLC Post Migration from CompactLogix | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, we are facing an issue with our CompactLogix PLC (L27ERM) as it can only handle up to 16 CIP connections. Since we are currently at 15 connections, we are considering replacing it with a ControlLogix PLC (L71 with EN2T). We have successfully migrated all the logic and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-random-communication-drops-on-1756-l71-controllogix-plc-post-migration-from-compactlogix">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Random Communication Drops on 1756-L71 ControlLogix PLC Post Migration from CompactLogix | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, we are facing an issue with our CompactLogix PLC (L27ERM) as it can only handle up to 16 CIP connections. Since we are currently at 15 connections, we are considering replacing it with a ControlLogix PLC (L71 with EN2T). We have successfully migrated all the logic and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-random-communication-drops-on-1756-l71-controllogix-plc-post-migration-from-compactlogix"
      },
      "headline": "Troubleshooting Random Communication Drops on 1756-L71 ControlLogix PLC Post Migration from CompactLogix",
      "description": "Hello everyone, we are facing an issue with our CompactLogix PLC (L27ERM) as it can only handle up to 16 CIP connections. Since we are currently at 15 connections, we are considering replacing it with a ControlLogix PLC (L71 with EN2T). We have successfully migrated all the logic and",
      "author": {
        "@type": "Person",
        "name": "Fourpaw"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-06",
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
                <h1 class="text-white">Troubleshooting Random Communication Drops on 1756-L71 ControlLogix PLC Post Migration from CompactLogix</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Fourpaw</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">206</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">496</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, we are facing an issue with our CompactLogix PLC (L27ERM) as it can only handle up to 16 CIP connections. Since we are currently at 15 connections, we are considering replacing it with a ControlLogix PLC (L71 with EN2T). We have successfully migrated all the logic and connections to the new PLC while keeping the same IP address. However, we are experiencing random, intermittent communication losses which result in inconsistencies. The system runs smoothly for a while before devices in the EN2T I/O tree start flickering with caution signs. We use a couple of 1783-US16T's to connect the devices and the L71 PLC needs to communicate with a SLC 5/05 as well. Any suggestions on how to resolve these communication issues?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Capture a screenshot of your Input-Output (IO) tree, specifically focusing on the devices located under the EN2t. This will help us identify the Brand, Make, and Model of each device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The inventory includes three Cognex Insight Micro 1000 Series Cameras, one Keyence NU-EP18 camera, four Beckhoff BK9105 cameras, and three AB 20 Comm-E for PF70 cameras.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fourpaw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are utilizing the continuous task, it may appear to be a potential overhead time slice problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The consistent task involves implementing the same logic setup in both the CMPTLGX and CTLGX, with only a change in processor and utilization of the EN2T instead of the onboard Ethernet. The rack solely consists of the processor and the EN2T card, with no additional I/O. The only modification to the logic involves adding a prefix in MSG paths to establish communication between the CTLGX and the SLC. The ultimate objective is to phase out the SLC in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fourpaw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do they rely on implicit connections? Check out the EN2T diagnostic log to troubleshoot. Disable all devices and gradually enable them one by one until the issue reoccurs. This method helps identify the root cause of the problem efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>The L71 PLC outperforms the L27 in terms of scanning speed. If your program contains rungs similar to the ones mentioned, it may lead to device overload. Additionally, the L7x series offers the "System Overhead Time Slice" feature which allows you to allocate more time for communication tasks, especially beneficial for systems with multiple nodes. Be sure to prioritize communication tasks by adjusting parameters like XIO(msg.EN) MSG(msg).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What could be causing the random communication drops on the ControlLogix PLC post-migration from CompactLogix?
- The random communication drops could be caused by various factors such as network configuration issues, compatibility issues between devices, or inadequate network bandwidth.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How many CIP connections can the ControlLogix PLC (L71 with EN2T) handle?</h4>
<p class='text-muted'><strong>Answer:</strong> - The ControlLogix PLC (L71 with EN2T) can handle a significantly higher number of CIP connections compared to the CompactLogix PLC (L27ERM), but it is important to ensure that it is configured properly to handle the required connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some troubleshooting steps to resolve intermittent communication losses on the EN2T I/O tree connected to the ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting steps may include checking network settings, verifying device compatibility, ensuring an adequate number of available CIP connections, and monitoring network traffic for any abnormalities that could be causing the communication losses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can one ensure stable communication when the ControlLogix PLC (L71) needs to communicate with a SLC 5/05?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure stable communication between the ControlLogix PLC (L71) and the SLC 5/05, it is important to verify compatibility, configure proper communication settings, and troubleshoot any issues that may arise during the communication process.</p>
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
