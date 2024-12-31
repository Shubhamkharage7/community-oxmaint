
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently attempting to establish communication between a Micro820 PLC and RSLinx Enterprise using EtherNet/IP. The model of the Micro820 PLC is 2080-LC20-20QWB with CPU firmware version 9, while RSLinx Enterprise is running version 5.90.00 with October 2017 patches. When I navigate to the communication tab, I">
    <meta name="keywords" content="micro820 plc communication setup, rslinx enterprise troubleshooting, ethernet/ip communication issues, micro820 plc firmware version 9, rslinx enterprise version 00">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-setup-of-micro820-plc-with-rslinx-enterprise-via-ethernet-ip">
    <title>Troubleshooting Communication Setup of Micro820 PLC with RSLinx Enterprise via EtherNet/IP | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Setup of Micro820 PLC with RSLinx Enterprise via EtherNet/IP | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently attempting to establish communication between a Micro820 PLC and RSLinx Enterprise using EtherNet/IP. The model of the Micro820 PLC is 2080-LC20-20QWB with CPU firmware version 9, while RSLinx Enterprise is running version 5.90.00 with October 2017 patches. When I navigate to the communication tab, I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-setup-of-micro820-plc-with-rslinx-enterprise-via-ethernet-ip">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Setup of Micro820 PLC with RSLinx Enterprise via EtherNet/IP | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently attempting to establish communication between a Micro820 PLC and RSLinx Enterprise using EtherNet/IP. The model of the Micro820 PLC is 2080-LC20-20QWB with CPU firmware version 9, while RSLinx Enterprise is running version 5.90.00 with October 2017 patches. When I navigate to the communication tab, I">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-setup-of-micro820-plc-with-rslinx-enterprise-via-ethernet-ip"
      },
      "headline": "Troubleshooting Communication Setup of Micro820 PLC with RSLinx Enterprise via EtherNet/IP",
      "description": "Hello, I am currently attempting to establish communication between a Micro820 PLC and RSLinx Enterprise using EtherNet/IP. The model of the Micro820 PLC is 2080-LC20-20QWB with CPU firmware version 9, while RSLinx Enterprise is running version 5.90.00 with October 2017 patches. When I navigate to the communication tab, I",
      "author": {
        "@type": "Person",
        "name": "rleon"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-13",
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
                <h1 class="text-white">Troubleshooting Communication Setup of Micro820 PLC with RSLinx Enterprise via EtherNet/IP</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rleon</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5808</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">244</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently attempting to establish communication between a Micro820 PLC and RSLinx Enterprise using EtherNet/IP. The model of the Micro820 PLC is 2080-LC20-20QWB with CPU firmware version 9, while RSLinx Enterprise is running version 5.90.00 with October 2017 patches. When I navigate to the communication tab, I am able to successfully add the Ethernet Micro820 by entering the correct IP address. However, when I attempt to select the CPU to create a shortcut, the Apply button becomes greyed out and I receive the message "Select a different path. Ethernet. Micro820 cannot be used" in the information bar (Micro820 is the name of my PLC). Can anyone offer suggestions on how to resolve this issue? I have already consulted Rockwell Technote #602066 with no success. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the 820 programmed with its own unique IP address?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>damica1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In alignment with David's thought process, have you attempted to directly upload the file from the Programmable Logic Controller (PLC)? Simply try utilizing RSLinx to browse for the file and determine if it appears.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>damica1 inquired about whether the Allen-Bradley 820 Micro800 PLC comes with a pre-programmed IP address. Can you simply upload programming from the PLC? It may be worth attempting to browse with RSLinx to check if it appears. Indeed, the PLC has a fixed IP address and can be downloaded and monitored using Connected Components Workbench. Additionally, the PLC can be easily identified in RSLinx Classic without any difficulties.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rleon</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What issue arose?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A question posed by geniusintraining: "What was the issue?" The issue at hand is my inability to set up a shortcut in RSLinx Enterprise for the Micro820 PLC. Although I can locate it on the network, selecting it causes the Apply button to grey out and displays the message "Select a different path. Ethernet.Micro820 cannot be used" in the information bar. Despite this, I can still program and download my project from Connected Components Workbench without any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rleon</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance search engine optimization, consider adjusting the shortcut type (found beneath the offline tag file) from processor to symbolic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>FluxCap</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>FluxCap suggested adjusting the shortcut type (located under the offline tag file) from processor to symbolic, which resolved the issue. I am now able to view Micro820 tags in FactoryTalk View. Thank you to FluxCap for the helpful solution, hopefully it will benefit others facing the same problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rleon</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone! I am experiencing a similar issue with creating a connection between Factory Talk and MICRO850 simulation. I have tried various solutions, such as selecting "Shortcut Type = Symbolic," but nothing seems to be working. Additionally, I have updated all EDS and Patch / Pack files without any success. I am running the following software versions on a virtual machine: VMWARE Workstation 15.5.6, Windows 7 Professional 64Bits, Connected Components Workbench (CCW) Ver. 12.00.00, and FactoryTalk View Studio Ver. 11.00.00 (CPR 9 SR 11). FactoryTalk is indicating that the Ethernet connection point cannot be utilized. Can anyone provide insight into this error and offer a solution?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kennio_Eng</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am extremely grateful for this solution, it really saved me in a pinch! FluxCap suggested adjusting the shortcut type from processor to symbolic, located below the offline tag file. Click to learn more about resolving this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  Why is the Apply button greyed out when attempting to select the CPU of the Micro820 PLC in RSLinx Enterprise?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Apply button might become greyed out with the message "Select a different path. Ethernet. Micro820 cannot be used" in the information bar due to a potential configuration or compatibility issue. It is recommended to check the settings and ensure compatibility between the PLC firmware version and the RSLinx Enterprise version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot communication setup issues between a Micro820 PLC and RSLinx Enterprise via EtherNet/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot communication setup problems, you can verify the IP address configuration, check for any firewall or network security settings that may be blocking communication, ensure proper firmware compatibility, and refer to relevant technical notes or documentation for guidance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to resolve the issue of not being able to create a shortcut for the Micro820 PLC in RSLinx Enterprise?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try rechecking the IP address entry for the Micro820 PLC, validating the network connection, confirming the compatibility between the PLC and RSLinx Enterprise versions, and reviewing Rockwell Technote 602066 for additional troubleshooting steps. Additionally, ensuring proper network configuration and device settings can help resolve the shortcut creation issue.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
