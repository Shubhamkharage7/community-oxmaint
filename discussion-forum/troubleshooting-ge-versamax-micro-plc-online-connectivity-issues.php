
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am experiencing an issue with a GE Versamax micro PLC. When I try to go online through Port 1, the OK LED indicator turns off while the Power LED remains on. There is no response at all when using Port 2. I have tested the cable and settings">
    <meta name="keywords" content="ge versamax micro plc, troubleshooting online connectivity issues, port 1, ok led indicator, power led, port 2, cable testing, settings, versamax micro plc, online connectivity problem, ge plc issues, connectivity errors, trou">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-versamax-micro-plc-online-connectivity-issues">
    <title>Troubleshooting GE Versamax Micro PLC Online Connectivity Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GE Versamax Micro PLC Online Connectivity Issues | Oxmaint Community">
    <meta property="og:description" content="I am experiencing an issue with a GE Versamax micro PLC. When I try to go online through Port 1, the OK LED indicator turns off while the Power LED remains on. There is no response at all when using Port 2. I have tested the cable and settings">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-versamax-micro-plc-online-connectivity-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GE Versamax Micro PLC Online Connectivity Issues | Oxmaint Community">
    <meta name="twitter:description" content="I am experiencing an issue with a GE Versamax micro PLC. When I try to go online through Port 1, the OK LED indicator turns off while the Power LED remains on. There is no response at all when using Port 2. I have tested the cable and settings">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ge-versamax-micro-plc-online-connectivity-issues"
      },
      "headline": "Troubleshooting GE Versamax Micro PLC Online Connectivity Issues",
      "description": "I am experiencing an issue with a GE Versamax micro PLC. When I try to go online through Port 1, the OK LED indicator turns off while the Power LED remains on. There is no response at all when using Port 2. I have tested the cable and settings",
      "author": {
        "@type": "Person",
        "name": "BlackBoxRobotics"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-18",
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
                <h1 class="text-white">Troubleshooting GE Versamax Micro PLC Online Connectivity Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BlackBoxRobotics</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">570</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">441</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am experiencing an issue with a GE Versamax micro PLC. When I try to go online through Port 1, the "OK LED" indicator turns off while the Power LED remains on. There is no response at all when using Port 2. I have tested the cable and settings on another Versamax micro PLC and they are functioning properly. Regards, John.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To reconnect the 'OK' LED, try disconnecting from Port 1 and power cycling. Keep in mind that Port 2 supports RS485, and Port 1 supports RS232. What interface are you utilizing to connect to Port 2? Also, do you possess the project file for the PLC program?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings, Steve! By unplugging the cable from Port1, the "ok LED" lights up again without requiring a power cycle. I attempted to establish communication on Port 2 by utilizing a cable with a converter. My objective is to upload the latest program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BlackBoxRobotics</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to start the PLC using the run/stop switch with the cable disconnected, it appears that the OK LED is also lost when connecting the cable to Port 1 without it being linked to the computer running Machine Edition. It is worth noting that there is 5VDC power on the port, and it is possible that something is causing a drop in this power supply when the cable is connected. To verify this, it is recommended to monitor the 5VDC between pins 5 and 7 of Port 2 while plugging the cable into Port 1. According to information found in the manual GFK1645G, the issue you are facing may be related to a short occurring across 5VDC on a serial port of a VersaMaxMicro or Nano PLC manufactured after June 2005. If a short is detected, indicated by a date code of 523 or higher, the unit will shut down until the short is resolved. Removing the short will allow the unit to fully recover and function properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you Steve for your response. Your guidance led me in the right direction to troubleshoot the issue. I found that using an older laptop with a physical com port and running Windows XP with ME 5.5 resolved the communication problems with the Versamax micro. However, when using my other laptop, I had to use a USB-RS232 converter for communication, which caused issues when attempting to communicate by clicking the communication button in ME. The firmware version for the Versamax Micro is 2.71. Thank you for your assistance and support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BlackBoxRobotics</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: What could be the reason for the "OK LED" turning off when trying to go online through Port 1 on a GE Versamax micro PLC?
    The "OK LED" turning off could indicate a communication issue between the PLC and the device trying to connect. It might be due to incorrect settings, faulty cable, or issues with the port itself.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is there no response at all when attempting to go online through Port 2 on the GE Versamax micro PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> The lack of response on Port 2 could suggest a more severe connectivity problem, possibly related to the port's hardware failure or a configuration issue specific to Port 2.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot online connectivity issues with a GE Versamax micro PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> To troubleshoot online connectivity problems, start by checking the cable connections, verifying the communication settings, ensuring the appropriate drivers are installed, and confirming the PLC's port configurations. If issues persist, consult the PLC's documentation or contact technical support for assistance.</p>
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
