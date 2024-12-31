
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for an efficient method to check the connection status of different ethernet nodes in RSlogix? I have a small automation setup with cameras and barcode readers that communicate directly with my robot, not listed in the RSLogix hardware tree. I want to monitor their communication status on the">
    <meta name="keywords" content="ethernet node status, rslogix monitoring, rslogix ethernet nodes, ethernet communication status, monitoring automation setup, rslogix hmi monitoring, hirshmann ethernet switch, cisco ie-2000 switch, msg instruction rslogix, ip">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-monitor-ethernet-node-status-in-rslogix-step-by-step-guide">
    <title>How to Monitor Ethernet Node Status in RSLogix: Step-by-Step Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Monitor Ethernet Node Status in RSLogix: Step-by-Step Guide | Oxmaint Community">
    <meta property="og:description" content="Looking for an efficient method to check the connection status of different ethernet nodes in RSlogix? I have a small automation setup with cameras and barcode readers that communicate directly with my robot, not listed in the RSLogix hardware tree. I want to monitor their communication status on the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-monitor-ethernet-node-status-in-rslogix-step-by-step-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Monitor Ethernet Node Status in RSLogix: Step-by-Step Guide | Oxmaint Community">
    <meta name="twitter:description" content="Looking for an efficient method to check the connection status of different ethernet nodes in RSlogix? I have a small automation setup with cameras and barcode readers that communicate directly with my robot, not listed in the RSLogix hardware tree. I want to monitor their communication status on the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-monitor-ethernet-node-status-in-rslogix-step-by-step-guide"
      },
      "headline": "How to Monitor Ethernet Node Status in RSLogix: Step-by-Step Guide",
      "description": "Looking for an efficient method to check the connection status of different ethernet nodes in RSlogix? I have a small automation setup with cameras and barcode readers that communicate directly with my robot, not listed in the RSLogix hardware tree. I want to monitor their communication status on the",
      "author": {
        "@type": "Person",
        "name": "bubbagumper6"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-04",
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
                <h1 class="text-white">How to Monitor Ethernet Node Status in RSLogix: Step-by-Step Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bubbagumper6</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1852</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">197</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Looking for an efficient method to check the connection status of different ethernet nodes in RSlogix? I have a small automation setup with cameras and barcode readers that communicate directly with my robot, not listed in the RSLogix hardware tree. I want to monitor their communication status on the HMI. In the past, I used a Hirshmann ethernet switch to read port status, but with a Cisco IE-2000 switch in use now, I can't find instructions on how to do so. Is there a way to utilize the MSG instruction to send a basic "Are you alive" message to an IP address and receive a pass/fail response? The processor is a 1769-L33ER running software version 30.11.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to determine if the devices are EtherNet/IP compatible, I have utilized the MSG command to execute a CIP Generic message for reading Class 1, Instance 1, Attribute 1 (Vendor ID). As the Identity Object (Class 0x01) is a required component, EtherNet/IP devices will always provide a response. While there isn't a direct method for conducting an ICMP PING with ControlLogix, a potential approach could involve modifying the Generic Sockets code to establish a TCP connection with any open TCP ports on these devices, such as port 80 for a HTTP webpage or port 502 for Modbus/TCP functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am aware that my barcode scanners are compatible with Ethernet I/P, but I am unsure if the vision camera, being essentially a PC, also supports this feature. It is worth a try. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bubbagumper6</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although this thread is old, it seems to relate to my current project. I am working on setting up a CIP generic message to check the online status of a Nematron HMI. I just need a basic status update. Despite receiving connection timeout errors, I am able to ping the device. Can anyone offer assistance with this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Trey_S</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to incorporate the Human Machine Interface (HMI) into the Input/Output (IO) tree/configuration of the ControlLogix (CLX) system? With the GSV Module EntryStatus instruction, you have the capability to access and interact with any ethernet device listed in the IO tree.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about the possibility of integrating the Human Machine Interface (HMI) into the Input/Output (IO) tree and configuration of the ControlLogix (CLX). It is possible to communicate with any Ethernet device in the IO tree using the GSV Module EntryStatus instruction. However, attempts to connect the HMI as a generic device or through messages have been unsuccessful, leaving Robertmee puzzled by the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Trey_S</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to successfully ping both the Nematron and PLC from your PC? It is important to ensure that they are physically connected to the same network. How are the Nematron and PLC interconnected, and is the ENxt module located on the same subnet as well? Checking these connections is crucial for seamless communication within your network infrastructure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Devices on the same subnet within a network have <1ms ping times, even when separated by a few switches. The desktop from which pings are sent is located on the same network as the other devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Trey_S</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you debating between using managed switches or dumb switches for your industrial networking needs? Which model should you choose: Nematron, ENxt, or PLC? Explore the best options for your network infrastructure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully managed 1783-10 ports, although I don't recall the exact model number on the HMI. It is an EN2T module equipped with an L83 processor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Trey_S</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your L83 device has an onboard ethernet connection, it's important to ensure that you are pinging the correct device from your PC to avoid any connectivity issues. If your en2t is linked to your nematron, but you are pinging the L83 port instead, this could lead to misleading connectivity results. Double-check to confirm proper device connectivity for accurate pinging results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Additionally, I'm curious if the error encountered when incorporating the Nematron as a standard module was a #0206 code or a different issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted to send the message using the PLC port and the EN2T interface. While I can't remember the exact code, 0206 seems like it could be correct. Apologies for being away from the computer for the rest of the evening.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Trey_S</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I monitor the connection status of different Ethernet nodes in RSLogix when they are not listed in the hardware tree?</h4>
<p class='text-muted'><strong>Answer:</strong> - One way to monitor the communication status of Ethernet nodes not listed in the hardware tree is by using the MSG instruction in RSLogix. This allows you to send a basic "Are you alive" message to an IP address and receive a pass/fail response.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can I use the MSG instruction to check the connection status of devices connected to a Cisco IE-2000 switch in RSLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can use the MSG instruction in RSLogix to monitor the connection status of devices connected to a Cisco IE-2000 switch. By sending a simple message to the IP address of the device, you can receive a response indicating whether the device is reachable.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What type of processor and software version is required to implement Ethernet node status monitoring in RSLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> - To implement Ethernet node status monitoring in RSLogix using the MSG instruction, you can use a processor like the 1769-L33ER running software version 30.11. This setup allows you to efficiently monitor the communication status of various Ethernet nodes in your automation setup.</p>
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
