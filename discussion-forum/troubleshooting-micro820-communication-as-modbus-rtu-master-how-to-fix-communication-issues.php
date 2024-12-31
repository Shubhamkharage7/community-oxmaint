
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im a new member here and excited to share my first post! My background includes working with Siemens Logo PLCs and using ladder logic. I also have training in Beckhoff, as well as experience in Python, C, C++, and Arduino programming. Currently, I am working on a">
    <meta name="keywords" content="troubleshooting micro820 communication, modbus rtu master communication, micro820 plc communication issues, modbus device integration, plc communication problem solving, micro820 protocol control settings, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-micro820-communication-as-modbus-rtu-master-how-to-fix-communication-issues">
    <title>Troubleshooting Micro820 Communication as Modbus RTU Master: How to Fix Communication Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Micro820 Communication as Modbus RTU Master: How to Fix Communication Issues | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im a new member here and excited to share my first post! My background includes working with Siemens Logo PLCs and using ladder logic. I also have training in Beckhoff, as well as experience in Python, C, C++, and Arduino programming. Currently, I am working on a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-micro820-communication-as-modbus-rtu-master-how-to-fix-communication-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Micro820 Communication as Modbus RTU Master: How to Fix Communication Issues | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im a new member here and excited to share my first post! My background includes working with Siemens Logo PLCs and using ladder logic. I also have training in Beckhoff, as well as experience in Python, C, C++, and Arduino programming. Currently, I am working on a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-micro820-communication-as-modbus-rtu-master-how-to-fix-communication-issues"
      },
      "headline": "Troubleshooting Micro820 Communication as Modbus RTU Master: How to Fix Communication Issues",
      "description": "Hello everyone, Im a new member here and excited to share my first post! My background includes working with Siemens Logo PLCs and using ladder logic. I also have training in Beckhoff, as well as experience in Python, C, C++, and Arduino programming. Currently, I am working on a",
      "author": {
        "@type": "Person",
        "name": "kemosabian"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-03",
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
                <h1 class="text-white">Troubleshooting Micro820 Communication as Modbus RTU Master: How to Fix Communication Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kemosabian</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1229</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">317</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm a new member here and excited to share my first post! My background includes working with Siemens Logo PLCs and using ladder logic. I also have training in Beckhoff, as well as experience in Python, C, C++, and Arduino programming.

Currently, I am working on a project to upgrade a control system by integrating Modbus devices. The original PLC used was a Rievtech micro PLC, but I decided to go with the Micro820 due to its cost, size, and performance advantages.

However, I have encountered two main issues:
1) I accidentally changed my IP address settings and now cannot communicate with the PLC. Despite trying various solutions found on forums and YouTube, such as updating firmware and using RS232 connections, I have not been successful. I am determined to resolve this communication problem.
2) Although I have successfully polled the device (set to address 2) using the built-in RS485 connection, the Micro820 does not seem to receive any responses or recognize a time-out. I suspect the issue may be related to the "message turnaround delay" of the slave device, as mentioned in the manual. I have tried adjusting the Micro820 protocol control settings to address this, but so far, it has not solved the problem.

Could someone offer guidance or advice on these issues? Any help would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>1) Can you provide the current IP address and netmask of both the PC and the Micro820 PLC? 

2) For more information, refer to the manual at this link:https://literature.rockwellautomati.../documents/um/2080-um005_-en-e.pdf#G4.1045129 If you suspect that the Modbus (slave) device is Modbus RTU using RS-485, consider swapping the wires on the Micro820 serial port pins 1 and 2. Make sure to trigger the MSG_MODBUS instruction with a rising edge on its enable pin. Share the Micro820/CCW code (screenshot or PDF) that implements the Modbus RTU Master instruction, along with details from the LocalCfg/MODBUSLOCPARA and TargetCfg/MODBUSTARPARA input parameter blocks. Feel free to introduce yourself on the forum!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Brian, I appreciate your assistance. Firstly, the PC's Ethernet adapter settings are as follows: the subnet mask is likely 255.255.255.0, with a link speed of 100/100 (Mbps). The IPv4 address is 169.254.0.1, and it is a Realtek USB GbE Family Controller #3. The PLC is configured with an IP address of 169.254.120.50 and a subnet mask of 255.255.0.0, although there may have been a typo while setting a static IP, causing a loss of communication.

I have attempted to switch the wires several times. Initially, the device displayed that it was receiving requests and acknowledging them. I am not currently pulsing the Modbus enable pin; it remains consistently high. I believe setting the Trigger.Type to 1 is the most effective way to continuously poll the device. My program is currently focused solely on Modbus communication, with plans to expand once the communication is established.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kemosabian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you configure the PC netmask as 255.255.0.0, you should be able to establish communication with the PLC. Alternatively, you can try setting the PC IP Address to 169.254.120.1. While the Modbus settings appear to be correct, there may be concerns about using TriggerType=1 via serial connection. The documentation for Micro8xx is limited, mentioning values 0 and 1 as valid options, with values 2-255 labeled as "Reserved". However, there is an example with TriggerType=100 provided. For reliable communication, it is suggested to use TriggerType=0 and implement a repeating TON with PT=T#1024ms triggering the IN pin of the MSG_MODBUS instruction. If faster data transfer is required, adjusting the TON .PT value incrementally to determine the optimal setting for successful communication with the Modbus Slave device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to drbitboy, the Modbus settings appear to be in order. However, there are a few key points to consider. It is assumed that the Modbus node address for the device you are trying to retrieve data from is 2. Additionally, it is assumed that you are looking to retrieve data from two holding registers. Specifically, the first holding register you are interested in is the 1004th register of the target device, which is located at an offset of 1003 from the first register of the device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot communication issues with a Micro820 PLC after accidentally changing the IP address settings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot communication issues after changing the IP address settings on a Micro820 PLC, you can try solutions like updating firmware, checking RS232 connections, and ensuring the correct IP settings are configured on both the PLC and the device you are trying to communicate with.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the Micro820 PLC to not receive responses or recognize a time-out when polling a Modbus device?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of not receiving responses or recognizing a time-out when polling a Modbus device with a Micro820 PLC could be related to factors such as the message turnaround delay of the slave device. You can try adjusting the Micro820 protocol control settings to address this issue and ensure proper communication setup between the devices.</p>
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
