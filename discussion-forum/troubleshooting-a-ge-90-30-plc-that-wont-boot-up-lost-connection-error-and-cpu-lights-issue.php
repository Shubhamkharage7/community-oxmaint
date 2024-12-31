
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Struggling with a GE 90-30 system that wont boot up? While able to download the logic, encountering issues when trying to download hardware configuration, with a message indicating a lost connection with the device. The CPU shows EOK, LAN, and STAT lights blinking steadily simultaneously. Tried troubleshooting by resetting,">
    <meta name="keywords" content="ge 90-30 plc, troubleshooting, boot up issue, lost connection error, cpu lights, eok, lan, stat lights, blinking lights, hardware configuration, firmware version, resetting plc, changing cpu, backplane troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-a-ge-90-30-plc-that-wont-boot-up-lost-connection-error-and-cpu-lights-issue">
    <title>Troubleshooting a GE 90-30 PLC That Wont Boot Up: Lost Connection Error and CPU Lights Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting a GE 90-30 PLC That Wont Boot Up: Lost Connection Error and CPU Lights Issue | Oxmaint Community">
    <meta property="og:description" content="Struggling with a GE 90-30 system that wont boot up? While able to download the logic, encountering issues when trying to download hardware configuration, with a message indicating a lost connection with the device. The CPU shows EOK, LAN, and STAT lights blinking steadily simultaneously. Tried troubleshooting by resetting,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-a-ge-90-30-plc-that-wont-boot-up-lost-connection-error-and-cpu-lights-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting a GE 90-30 PLC That Wont Boot Up: Lost Connection Error and CPU Lights Issue | Oxmaint Community">
    <meta name="twitter:description" content="Struggling with a GE 90-30 system that wont boot up? While able to download the logic, encountering issues when trying to download hardware configuration, with a message indicating a lost connection with the device. The CPU shows EOK, LAN, and STAT lights blinking steadily simultaneously. Tried troubleshooting by resetting,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-a-ge-90-30-plc-that-wont-boot-up-lost-connection-error-and-cpu-lights-issue"
      },
      "headline": "Troubleshooting a GE 90-30 PLC That Wont Boot Up: Lost Connection Error and CPU Lights Issue",
      "description": "Struggling with a GE 90-30 system that wont boot up? While able to download the logic, encountering issues when trying to download hardware configuration, with a message indicating a lost connection with the device. The CPU shows EOK, LAN, and STAT lights blinking steadily simultaneously. Tried troubleshooting by resetting,",
      "author": {
        "@type": "Person",
        "name": "dkk1683"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-06",
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
                <h1 class="text-white">Troubleshooting a GE 90-30 PLC That Wont Boot Up: Lost Connection Error and CPU Lights Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dkk1683</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">88</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">444</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Struggling with a GE 90-30 system that won't boot up? While able to download the logic, encountering issues when trying to download hardware configuration, with a message indicating a lost connection with the device. The CPU shows EOK, LAN, and STAT lights blinking steadily simultaneously. Tried troubleshooting by resetting, changing CPU, backplane, and power supply, along with pressing the reset button without success. Firmware version also checked. Feeling completely puzzled and seeking any assistance possible.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you ensuring that the hardware configuration you are attempting to download matches the physical components in place? It appears that you have a CPU with an ethernet connection and the configuration is attempting to modify the IP address. Once you have downloaded the hardware configuration, you will need to adjust the Machine Edition communication settings to reflect the new IP address. Alternatively, you can opt for serial communications during the hardware configuration download and then switch to ethernet once the setup is complete. It is worth considering that the current hardware configuration may be programmed to load from flash memory after a power loss, potentially causing conflicts with your goals. Have you tried uploading the existing configuration to check for any issues?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: What could be causing the issue of a GE 90-30 PLC not booting up and showing a lost connection error?
    The issue could be related to a variety of factors such as faulty hardware components, incorrect firmware version, or communication problems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What does it mean when the CPU lights on a GE 90-30 system show EOK, LAN, and STAT lights blinking simultaneously?</h4>
<p class='text-muted'><strong>Answer:</strong> When these lights are blinking simultaneously, it typically indicates a specific error or issue with the system that needs to be addressed during troubleshooting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are some common troubleshooting steps to take when encountering a lost connection error and steady blinking lights on a GE 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Common troubleshooting steps include resetting the system, checking and replacing hardware components like the CPU, backplane, and power supply, verifying the firmware version, and ensuring proper communication connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  If pressing the reset button and changing hardware components do not resolve the issue, what other options can be explored to troubleshoot a GE 90-30 PLC that won't boot up?</h4>
<p class='text-muted'><strong>Answer:</strong> In such cases, it may be helpful to consult the GE 90-30 PLC manual for specific error code interpretations, seek assistance from technical support or experienced professionals, or consider further diagnostics to identify the root cause of the problem.</p>
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
