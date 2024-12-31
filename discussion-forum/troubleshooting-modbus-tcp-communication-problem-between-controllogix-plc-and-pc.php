
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, currently I am attempting to establish communication between a ControlLogix PLC and a PC using Modbus TCP AOI. The Client resides on the PLC while the Server is located on the PC. To ensure compatibility, I have upgraded my ControlLogix firmware to version 20.19 and my Ethernet">
    <meta name="keywords" content="modbus tcp communication, controllogix plc, pc, aoi, firmware upgrade, ethernet module, error code -9, connection failure, troubleshooting suggestions, tcp client, periodic task, continuous task, drawbacks, advice, rockwell manual, compatibility">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-communication-problem-between-controllogix-plc-and-pc">
    <title>Troubleshooting Modbus TCP communication problem between ControlLogix PLC and PC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus TCP communication problem between ControlLogix PLC and PC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, currently I am attempting to establish communication between a ControlLogix PLC and a PC using Modbus TCP AOI. The Client resides on the PLC while the Server is located on the PC. To ensure compatibility, I have upgraded my ControlLogix firmware to version 20.19 and my Ethernet">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-communication-problem-between-controllogix-plc-and-pc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus TCP communication problem between ControlLogix PLC and PC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, currently I am attempting to establish communication between a ControlLogix PLC and a PC using Modbus TCP AOI. The Client resides on the PLC while the Server is located on the PC. To ensure compatibility, I have upgraded my ControlLogix firmware to version 20.19 and my Ethernet">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-communication-problem-between-controllogix-plc-and-pc"
      },
      "headline": "Troubleshooting Modbus TCP communication problem between ControlLogix PLC and PC",
      "description": "Hello everyone, currently I am attempting to establish communication between a ControlLogix PLC and a PC using Modbus TCP AOI. The Client resides on the PLC while the Server is located on the PC. To ensure compatibility, I have upgraded my ControlLogix firmware to version 20.19 and my Ethernet",
      "author": {
        "@type": "Person",
        "name": "Dragonen"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-11",
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
                <h1 class="text-white">Troubleshooting Modbus TCP communication problem between ControlLogix PLC and PC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Dragonen</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">307</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">355</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, currently I am attempting to establish communication between a ControlLogix PLC and a PC using Modbus TCP AOI. The Client resides on the PLC while the Server is located on the PC. To ensure compatibility, I have upgraded my ControlLogix firmware to version 20.19 and my Ethernet module 1756-EN2T to version 5.009. I followed Rockwell's manual for guidance, but encountered error code -9 indicating a connection failure. Are there any troubleshooting suggestions to rectify this issue? I have successfully connected a TCP client on my computer to the server running on another PC. The manual suggests placing the instruction in a periodic task, but can it also be used in a continuous task? What are the potential drawbacks of doing so? Any advice on this matter would be greatly appreciated. Thank you for your help!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Troubleshooting connectivity issues between a CL PLC and a ModbusServer on a PC can be complex, especially when a second PC can successfully connect. The first step is to validate the settings of the ModbusClientAOI on the PLC, including the IP address and port number. Next, confirm if the PLC can establish a TCP/IP connection with the first PC on Modbus Port 502. Consider factors like LAN setup, involvement of a router, and potential port filtering from devices like routers or PC antivirus software.

For a more in-depth analysis, consider using Wireshark or a similar application to compare packet transmissions between the second PC and the PLC. Check if the packets from the PLC are visible on the LAN of the first PC and on the PLC's own LAN. This thorough approach can help pinpoint any discrepancies and facilitate troubleshooting to ensure successful connectivity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're experiencing issues with your code, it may be due to incorrect parameters like DestAddress or LocalSlot. An incorrect LocalSlot could trigger errors in creating messages. To troubleshoot, expand the MSG_Connect message configuration to view the error code. Remember, if your PC and PLC are not connected on the same network, make sure to configure a gateway address for the EN2T module to ensure proper communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will provide additional details. The 1756-EN2T module is set up with the IP address 192.168.1.1, while the PC's Ethernet connection is configured as 192.168.1.180. I have used this IP address and port 502 in the DestAdress setting. The 1756-EN2T module is linked to a Stratix 6000 managed switch via an Ethernet cable. From the Stratix 6000 switch, there is another Ethernet cable connecting to a Stratix 2000 unmanaged switch, and finally, a cable runs from the unmanaged switch to the PC. This network setup was established prior to my involvement, so I am unfamiliar with how the Stratix 6000 switch is configured.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dragonen</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon my observation, it seems that your PC is unable to establish a connection on port 502. To resolve this issue, it is recommended to conduct a Wireshark trace and enable port mirroring on your switch. Another possibility is that the AOI was duplicated instead of being imported, which could lead to similar errors occurring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Contr_Conn, your PC may be blocking connections on port 502. To troubleshoot, try capturing a Wireshark trace and ensure port mirroring is enabled on your switch. Another possibility is that someone may have mistakenly copied the AOI instead of importing it, leading to similar errors. 

I recently connected my PC directly to a Stratix 6000 switch, bypassing the unmanaged Stratix 2000. This resulted in a successful connection after enabling it. However, when I tried the old method involving two switches (plc and pc), the connection failed. Even when I replaced the Stratix 2000 switch with another unmanaged switch, the same issue persisted. Is there a configuration setting on the Stratix 6000 switch that needs to be adjusted? Additionally, I confirmed that port 502 on the PC is open and functioning properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dragonen</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the Modbus TCP communication problem between the ControlLogix PLC and PC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Possible causes could include incorrect firmware versions, improper configuration settings, network issues, or compatibility issues with the Modbus TCP AOI.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a Modbus TCP connection issue with error code -9 on a ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Some troubleshooting suggestions could include double-checking the configuration settings, verifying network connectivity, ensuring firmware compatibility, and examining the error logs for more specific information.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can the Modbus TCP instruction be used in a continuous task on the ControlLogix PLC, rather than a periodic task as suggested in the manual?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While the manual may recommend placing the instruction in a periodic task for optimal performance, it may still be possible to use it in a continuous task. However, doing so could potentially impact the overall PLC performance and responsiveness.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are the potential drawbacks of using the Modbus TCP instruction in a continuous task on the ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Running the Modbus TCP instruction in a continuous task could lead to increased scan times, reduced PLC processing speed, and potential delays in other critical tasks running on the PLC. It is recommended to follow Rockwell's manual guidance for best practices.</p>
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
