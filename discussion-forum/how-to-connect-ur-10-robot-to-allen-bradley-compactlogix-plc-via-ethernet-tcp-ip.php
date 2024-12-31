
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking to switch the connection of my device from a UR 10 robot with a UR Cap to an Allen Bradley CompactLogix 5069-L306ER PLC in order to use it with multiple robots. The device communicates via Ethernet TCP/IP and I have its IP address and native protocol">
    <meta name="keywords" content="ur 10 robot, allen bradley compactlogix plc, ethernet tcp/ip, device communication, ip address, native protocol, msg instruction, cip read, cip generic, get_state, register_client, communication setup, device connectivity, ur cap">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-ur-10-robot-to-allen-bradley-compactlogix-plc-via-ethernet-tcp-ip">
    <title>How to Connect UR 10 Robot to Allen Bradley CompactLogix PLC via Ethernet TCP/IP | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect UR 10 Robot to Allen Bradley CompactLogix PLC via Ethernet TCP/IP | Oxmaint Community">
    <meta property="og:description" content="I am looking to switch the connection of my device from a UR 10 robot with a UR Cap to an Allen Bradley CompactLogix 5069-L306ER PLC in order to use it with multiple robots. The device communicates via Ethernet TCP/IP and I have its IP address and native protocol">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-ur-10-robot-to-allen-bradley-compactlogix-plc-via-ethernet-tcp-ip">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect UR 10 Robot to Allen Bradley CompactLogix PLC via Ethernet TCP/IP | Oxmaint Community">
    <meta name="twitter:description" content="I am looking to switch the connection of my device from a UR 10 robot with a UR Cap to an Allen Bradley CompactLogix 5069-L306ER PLC in order to use it with multiple robots. The device communicates via Ethernet TCP/IP and I have its IP address and native protocol">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-ur-10-robot-to-allen-bradley-compactlogix-plc-via-ethernet-tcp-ip"
      },
      "headline": "How to Connect UR 10 Robot to Allen Bradley CompactLogix PLC via Ethernet TCP/IP",
      "description": "I am looking to switch the connection of my device from a UR 10 robot with a UR Cap to an Allen Bradley CompactLogix 5069-L306ER PLC in order to use it with multiple robots. The device communicates via Ethernet TCP/IP and I have its IP address and native protocol",
      "author": {
        "@type": "Person",
        "name": "Lobo12"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-07",
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
                <h1 class="text-white">How to Connect UR 10 Robot to Allen Bradley CompactLogix PLC via Ethernet TCP/IP</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Lobo12</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">645</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">384</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking to switch the connection of my device from a UR 10 robot with a UR Cap to an Allen Bradley CompactLogix 5069-L306ER PLC in order to use it with multiple robots. The device communicates via Ethernet TCP/IP and I have its IP address and native protocol details. I am new to device communication and have been attempting to send specific commands like "Get_State" (0x00 02) and "Register_Client" (0x00 03) using the MSG instruction with CIP read and CIP generic, but encountering difficulties. Any assistance on how to properly set up the communication between the device and the PLC would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the CIP Card to convert HEX into Decimal before sending the equivalent decimal values. Analyze the CIP Command outputs using Wireshark on TCP/IP, adjusting settings until the correct messages are received. Compare data between the Robot and PC as well as the Robot and PLC for reference. While it may take some time to decipher the commands, setting up Wireshark on a spare PC with a network HUB (not a Switch) between the PLC and Robot can help capture data effectively. Ensure the PLC, Robot, and PC are on the same network range (e.g. 192.168.1.xxx with mask 255.255.255.000) for successful data capture.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mad4x4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mad4x4 suggested using the CIP Card for converting HEX to Decimal and sending the decimal equivalent. By utilizing Wireshark to analyze the CIP Command outputs on TCP/IP, one can modify them as needed to receive the correct messages. Cross-referencing between the Robot, PC, and PLC is essential in this process. While it may require some time to decipher the commands, setting up Wireshark on a spare PC with a network HUB (not a Switch) between the PLC and Robot allows for data capture. It is crucial for the PLC, robot, and PC to be on the same network range (e.g., 192.168.1.xxx with a 255.255.255.000 mask). This approach proved successful for one user who appreciated the innovative idea and plans to utilize it for future debugging purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lobo12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Easily achievable! Learn how with this guide on Ethernet IP for collaborative robot support - 18712.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I connect a UR 10 robot to an Allen Bradley CompactLogix PLC via Ethernet TCP/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> - To establish the connection, ensure you have the IP address and native protocol details of the UR 10 robot. Use the MSG instruction with CIP read and CIP generic to send specific commands like "Get_State" and "Register_Client" from the PLC to the robot.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are common issues faced when setting up communication between a UR 10 robot and an Allen Bradley CompactLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some common issues users face include difficulties in sending specific commands, such as "Get_State" and "Register_Client," using the MSG instruction with CIP read and CIP generic. Troubleshoot by checking the configuration settings, IP addresses, and ensuring proper communication protocols are followed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I ensure successful communication between multiple robots and an Allen Bradley CompactLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Ensure proper setup of the communication parameters, such as IP addresses and native protocols, for each robot. Use the appropriate instructions, like MSG with CIP read and CIP generic, to send commands effectively between the PLC and the robots. Regularly test and troubleshoot the communication setup to ensure smooth operation.</p>
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
