
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings to my fellow engineers, I am currently facing a unique challenge as we upgrade one of our oldest systems to PLC controls. As part of this process, we are integrating an Accu-Sort AV6010 scanner with serial communications (RS232) connected to a Siemens ASCII scanner. However, we are encountering">
    <meta name="keywords" content="troubleshooting communication problems, 1769-ascii scanner, accusort av6010 scanner, plc controls, serial communications, rs232, siemens ascii scanner, profibus, serial port settings, baudrate 19200, stopbits">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-1769-ascii-scanner-and-accusort-av6010-scanner">
    <title>Troubleshooting Communication Problems with 1769-ASCII Scanner and AccuSort AV6010 Scanner | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Problems with 1769-ASCII Scanner and AccuSort AV6010 Scanner | Oxmaint Community">
    <meta property="og:description" content="Greetings to my fellow engineers, I am currently facing a unique challenge as we upgrade one of our oldest systems to PLC controls. As part of this process, we are integrating an Accu-Sort AV6010 scanner with serial communications (RS232) connected to a Siemens ASCII scanner. However, we are encountering">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-1769-ascii-scanner-and-accusort-av6010-scanner">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Problems with 1769-ASCII Scanner and AccuSort AV6010 Scanner | Oxmaint Community">
    <meta name="twitter:description" content="Greetings to my fellow engineers, I am currently facing a unique challenge as we upgrade one of our oldest systems to PLC controls. As part of this process, we are integrating an Accu-Sort AV6010 scanner with serial communications (RS232) connected to a Siemens ASCII scanner. However, we are encountering">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-1769-ascii-scanner-and-accusort-av6010-scanner"
      },
      "headline": "Troubleshooting Communication Problems with 1769-ASCII Scanner and AccuSort AV6010 Scanner",
      "description": "Greetings to my fellow engineers, I am currently facing a unique challenge as we upgrade one of our oldest systems to PLC controls. As part of this process, we are integrating an Accu-Sort AV6010 scanner with serial communications (RS232) connected to a Siemens ASCII scanner. However, we are encountering",
      "author": {
        "@type": "Person",
        "name": "nspr2195"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-10",
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
                <h1 class="text-white">Troubleshooting Communication Problems with 1769-ASCII Scanner and AccuSort AV6010 Scanner</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>nspr2195</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">289</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">46</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings to my fellow engineers,

I am currently facing a unique challenge as we upgrade one of our oldest systems to PLC controls. As part of this process, we are integrating an Accu-Sort AV6010 scanner with serial communications (RS232) connected to a Siemens ASCII scanner. However, we are encountering issues where the system is only receiving data and not sending acknowledgments back to the scanner.

The existing system setup involves a PC-based controller communicating with the Siemens ASCII scanner through Profibus. The scanner sends a heartbeat signal to the existing system every 5 seconds. The serial port settings on the scanner are as follows: BaudRate 19200, stopbits 1, parity none, databits 8, flowcontrol none.

In our new configuration, we are using an L83E/A4 Backplane with a 1769-Aen2tr that has a 1769 ASCII Scanner on its backplane. We have replicated similar settings as above to configure our ASCII scanner and used a cable with swapped connections (2-3, 3-2) while keeping 5-5 consistent. We are utilizing RS232 to connect to the 1769 ASCII scanner.

The issue we are facing is that we are not receiving data consistently at the transmit point. Sometimes we receive data in the correct location, while other times it is delayed by 30-40 seconds after scanning is completed. We are seeking assistance in identifying and resolving this issue. 

If anyone has any insights or solutions to share, please do not hesitate to reach out.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting, it's beneficial to have a breakout box for monitoring RS232 traffic with a laptop. It's important to verify if the AV6010 relies on hardware handshakes. Can you confirm if the cable pinout is the same as the previous one, with TXD-RXD and common connections?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the customer, handshakes are not involved in their system. After disconnecting the TXD wire from the Siemens ASCII scanner, they found that the system was only receiving scanner information without transmitting anything back. The setup utilized only TXD, RXD, and Common cables, which were tested multiple times with consistent results. Despite trying different pinout configurations found on the internet, the Siemens ASCII scanner only has 3 wires connecting to slots 4, 5, and 8 for TXD/RXD and Common functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nspr2195</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To clarify, does the current system not initiate a request to the AV6010 for data without a TXD connection? Does the AV6010 simply transmit data at regular intervals, or is there a specific signal or mechanism that prompts it to do so? This is reminiscent of how we previously had to remotely trigger Cognex cameras.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, nspr2195 mentioned the issue of the system only receiving scanner information without transmitting any data back to the scanner. This could be resolved by ensuring a locally wired photoeye triggers the scanner, followed by various possibilities such as transmitting based on position or timing after trigger. Another common method includes using a transmit delay to add time for falling edge or encoder transmits. It is also common to have a separate 'timeout' send with an error code. This equipment may be used in conveyor systems. It is worth noting that Accusort is now part of Datalogic, and they may provide assistance if there are hardware issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KenWiegers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jstolaruk inquired about the data transfer process of the AV6010 system. Is there no TXD connection for requesting data from the AV6010? Does the AV6010 simply send out data periodically or is there a hardware signal that prompts it to do so, similar to a remote trigger used with Cognex cameras? Once a barcode is scanned, the data is transmitted to the system without the need for a relay or TXD connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nspr2195</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In situations like this, one would typically expect a locally connected photoeye to trigger the scanner. There are several possible scenarios that may occur in this setup: the scanner may have a local encoder for position-based transmission, a transmission based purely on timing after the trigger, or a trigger-eye rising edge to turn on the scanner and a falling edge to send data. Another common practice is to use transmit delay to add time to the falling edge or have the encoder transmit data as well. It's also common to have a separate 'timeout' send with an error code in addition to the above methods. This equipment is typically used in conveyor systems, with Accusort being now part of Datalogic. However, Datalogic may not be able to offer assistance or software support for this obsolete product.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nspr2195</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Returning to your initial post, have you ensured that the configuration of the 1769-ASCII is accurate and aligned with the data transmitted by the scanner? This includes verifying the correct termination character. Additionally, how is the logic handling the extraction of data from the module functioning?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After seeing Ken Roach's recommendation online, I invested in the EZ-Tap RS232 Protocol Analyzer a few years back. Despite only using it once so far, this device has already proven to be a valuable time-saving tool. The EZ-Tap, offered by Stratus Engineering, is widely regarded as the top choice for RS232 protocol analysis. Its compact design makes it an ideal solution for monitoring hardware-based RS232 serial port communication. By capturing traffic from your existing system, you can easily replicate it with the new system and confirm if they are compatible. Be sure to visit stratusengineering.com for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to your initial inquiry, have you ensured that the 1769-ASCII configuration is accurately set up according to the scanner's data transmission, particularly regarding the termination character? Additionally, how is the logic extracting data from the module functioning? Attached are screenshots of my module configurations and settings from the customer scanner config file. As for retrieving the data, I am utilizing a method similar to what Rockwell has provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nspr2195</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After disabling the termination start and termination delimiters, the logic may be unable to properly extract strings from the module until the receive buffer reaches full capacity. This could result in concatenated strings that do not make sense when read from the beginning. Can you provide information on the format of the data transmitted by the scanner?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, jstolaruk pointed out that due to the disabling of start and end delimiters, the logic may have trouble extracting strings from the module's receive buffer. This can result in strings appearing concatenated, making it difficult to interpret the data. Can you confirm the format of the data sent by the scanner? The barcode format typically follows the pattern $02xxxxxxxx$03. In cases where multiple barcodes are present on a single box, the format is $02xxxxxx,xxxxxxxx$03. Attempts were made to include delimiters, but since $02 and $03 are not among the available options, they had to be left disabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nspr2195</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When programming, it is important to note that $02 (or STX) is represented as $R and $03 (or ETX) is denoted as $S. Consult the module's manual for guidance on specifying control characters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you need to customize the output messages for the AV6010, you can easily do so through its web interface. For detailed instructions, you can refer to the manual for the AV6010 available for download at https://2d-barcodes.com/wp-content/uploads/2021/03/Datalogic-AV6010-System-Manual.pdf. The manual provides comprehensive guidance on configuring the AV6010.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JimmyJimJames</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the common serial port settings for the Accu-Sort AV6010 scanner in this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The serial port settings for the Accu-Sort AV6010 scanner in this setup are: BaudRate 19200, stopbits 1, parity none, databits 8, flowcontrol none.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is the issue being faced with the communication between the Siemens ASCII scanner and the 1769 ASCII scanner?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue being faced is that the system is only receiving data and not sending acknowledgments back to the scanner consistently. Sometimes data is received at the correct location, while other times there is a delay of 30-40 seconds after scanning is completed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How is the new configuration different from the existing system setup in terms of communication protocols?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The existing system setup involves a PC-based controller communicating with the Siemens ASCII scanner through Profibus, while the new configuration uses an L83E/A4 Backplane with a 1769-Aen2tr that has a 1769 ASCII Scanner on its backplane, utilizing RS232 for communication.</p>
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
