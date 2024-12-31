
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently facing an issue with connecting my M258 PLC (firmware: 2.0.31.40) using Somachine v4.3 software. The target PLC is indicating a different version, prompting me to upgrade the firmware to 4.0.3.6. However, I am unable to select the firmware versions as they are not displaying in">
    <meta name="keywords" content="m258 plc, firmware upgrade issue, firmware file, somachine v3, firmware version, controller assistant, firmware upgrade problem, m258 firmware 6, troubleshooting firmware upgrade, plc firmware update, connecting m">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-m258-plc-firmware-upgrade-issue-and-finding-firmware-file">
    <title>Troubleshooting M258 PLC Firmware Upgrade Issue and Finding Firmware File | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting M258 PLC Firmware Upgrade Issue and Finding Firmware File | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently facing an issue with connecting my M258 PLC (firmware: 2.0.31.40) using Somachine v4.3 software. The target PLC is indicating a different version, prompting me to upgrade the firmware to 4.0.3.6. However, I am unable to select the firmware versions as they are not displaying in">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-m258-plc-firmware-upgrade-issue-and-finding-firmware-file">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting M258 PLC Firmware Upgrade Issue and Finding Firmware File | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently facing an issue with connecting my M258 PLC (firmware: 2.0.31.40) using Somachine v4.3 software. The target PLC is indicating a different version, prompting me to upgrade the firmware to 4.0.3.6. However, I am unable to select the firmware versions as they are not displaying in">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-m258-plc-firmware-upgrade-issue-and-finding-firmware-file"
      },
      "headline": "Troubleshooting M258 PLC Firmware Upgrade Issue and Finding Firmware File",
      "description": "Greetings, I am currently facing an issue with connecting my M258 PLC (firmware: 2.0.31.40) using Somachine v4.3 software. The target PLC is indicating a different version, prompting me to upgrade the firmware to 4.0.3.6. However, I am unable to select the firmware versions as they are not displaying in",
      "author": {
        "@type": "Person",
        "name": "Riyas Mohamed"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-07",
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
                <h1 class="text-white">Troubleshooting M258 PLC Firmware Upgrade Issue and Finding Firmware File</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Riyas Mohamed</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">454</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">122</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings,

I am currently facing an issue with connecting my M258 PLC (firmware: 2.0.31.40) using Somachine v4.3 software. The target PLC is indicating a different version, prompting me to upgrade the firmware to 4.0.3.6. However, I am unable to select the firmware versions as they are not displaying in the controller assistant. Despite searching online, I have been unable to find the necessary firmware file.

I am seeking assistance in resolving why the firmware version is not visible in the controller assistant and also in obtaining the firmware file for the M258 PLC.

Please refer to the attached photo for further clarification. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>This PLC offers versatility as it can be programmed with either the M258 or LMC firmware, catering to those in need of a regular PLC or motion firmware. Both the 2.x and 4.x firmware versions are readily available for download on the TM258LF42DT page, designed for a compact base M258 with 42 I/O and 24 V DC compatibility for CANopen connectivity in Indonesia. To access these firmware options, simply scroll down to the bottom of the page. For further information on programming the M258 PLC, refer to the following link: https://product-help.schneider-electric.com/Machine%20Expert/V1.2/en/m258prg/m258prg/M258_-_Transfer/M258_-_Transfer-2.htm. Schneider Electric Indonesia continues to provide innovative solutions for your automation needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tdoa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Riyas Mohamed inquired:Hello everyone, I have a M258 PLC (firmware: 2.0.31.40) and I am using Somachine v4.3 software. I am facing issues connecting my PLC as it is showing that the target PLC is a different version. Therefore, I need to update the firmware of my PLC to 4.0.3.6. I have tried updating the firmware, but I am unable to select the firmware versions as they are not displayed in the controller assistant. Additionally, I have searched online for the firmware file but have been unsuccessful in finding any. Can someone please provide a solution as to why the firmware version is not appearing in the controller assistant? Kindly share the M258 firmware file with me? Photo attached for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>klewerson miranda</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Klewerson Miranda confirmed if the issue was resolved. Indeed, after properly installing the software on my machine, the firmware version was finally displayed, resolving the problem. Reinstalling the software was the key to solving the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Riyas Mohamed</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the firmware version not visible in the controller assistant for the M258 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The firmware version may not be visible due to compatibility issues with the Somachine software or incorrect configuration settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I resolve the issue of firmware version not displaying in the controller assistant for the M258 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try checking the software settings, ensuring proper connectivity, and verifying compatibility between the PLC model and the software version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find the necessary firmware file for upgrading the M258 PLC from version 2.0.31.40 to 4.0.3.6?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are unable to locate the firmware file online, you may contact the manufacturer or authorized distributors for assistance in obtaining the specific firmware version required for the upgrade.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps can I take to troubleshoot the M258 PLC firmware upgrade issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try resetting the PLC, checking the communication settings, updating the software, and ensuring proper firmware compatibility to troubleshoot the firmware upgrade issue effectively.</p>
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
