
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello compressor expert, I am in need of assistance! I am currently working on connecting an Elektronikon MKIV controller to a Yaskawa GA800 VFD, replacing an ABB ACS800 VSD through Modbus communication. The MKIV controller, serial number 1900 0710 32, is connected to the ACS800 through its RMBA-01 module">
    <meta name="keywords" content="elektronikon mkiv, modbus rtu, yaskawa ga800 vfd, troubleshooting, communication, rmba-01 module, db9 configuration, node id, modbus node id, redlion gateway, mod">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-elektronikon-mkiv-modbus-rtu-communication-with-yaskawa-ga800-vfd">
    <title>Troubleshooting Elektronikon MKIV Modbus RTU Communication with Yaskawa GA800 VFD | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Elektronikon MKIV Modbus RTU Communication with Yaskawa GA800 VFD | Oxmaint Community">
    <meta property="og:description" content="Hello compressor expert, I am in need of assistance! I am currently working on connecting an Elektronikon MKIV controller to a Yaskawa GA800 VFD, replacing an ABB ACS800 VSD through Modbus communication. The MKIV controller, serial number 1900 0710 32, is connected to the ACS800 through its RMBA-01 module">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-elektronikon-mkiv-modbus-rtu-communication-with-yaskawa-ga800-vfd">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Elektronikon MKIV Modbus RTU Communication with Yaskawa GA800 VFD | Oxmaint Community">
    <meta name="twitter:description" content="Hello compressor expert, I am in need of assistance! I am currently working on connecting an Elektronikon MKIV controller to a Yaskawa GA800 VFD, replacing an ABB ACS800 VSD through Modbus communication. The MKIV controller, serial number 1900 0710 32, is connected to the ACS800 through its RMBA-01 module">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-elektronikon-mkiv-modbus-rtu-communication-with-yaskawa-ga800-vfd"
      },
      "headline": "Troubleshooting Elektronikon MKIV Modbus RTU Communication with Yaskawa GA800 VFD",
      "description": "Hello compressor expert, I am in need of assistance! I am currently working on connecting an Elektronikon MKIV controller to a Yaskawa GA800 VFD, replacing an ABB ACS800 VSD through Modbus communication. The MKIV controller, serial number 1900 0710 32, is connected to the ACS800 through its RMBA-01 module",
      "author": {
        "@type": "Person",
        "name": "kay_gsr13"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-08",
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
                <h1 class="text-white">Troubleshooting Elektronikon MKIV Modbus RTU Communication with Yaskawa GA800 VFD</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kay_gsr13</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">576</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">177</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello compressor expert, I am in need of assistance! I am currently working on connecting an Elektronikon MKIV controller to a Yaskawa GA800 VFD, replacing an ABB ACS800 VSD through Modbus communication. The MKIV controller, serial number 1900 0710 32, is connected to the ACS800 through its RMBA-01 module via a DB9 on 2X2 configuration, without a ComBox-S. The MKIV has a Node ID of 31, which I believe is its Modbus Node ID. 

To enable communication between the MKIV and the Yaskawa GA800, I have set up a RedLion gateway to relay the register data via Modbus TCP/IP. However, I am facing difficulties in establishing communication between the MKIV and the RedLion gateway through RS485 Modbus. I have tried swapping the TxA and TxB lines, but it did not resolve the issue. 

I have provided the communication parameters and pinouts for your reference. Unfortunately, I am unable to access the MKIV settings to verify them without the necessary software. Could you please provide guidance on how to connect the RedLion gateway to the MKIV and share any information on the internal Modbus Holding Registers used by the MKIV to control the ACS-800? Your insights would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Most drives operate as Modbus server/slaves, with Node ID 31 typically assigned to the old ACS800 as the slave node. A Modbus master does not require a node ID. The Red Lion device acts as a Modbus RTU/Modbus TCP converter or gateway. Configuration of the Red Lion includes setting the slave node ID to 31 and adjusting serial settings such as baud rate, parity, word size (8 bits), and stop bit. Are the serial settings mentioned the default settings or those from the previous RTU network?

To communicate with the new drive, the client side of the Red Lion must be configured with the target IP address, Modbus Function Code, and register address(es). The new drive will need its own IP address and potentially a slave node ID. Register addresses on the new drive may differ from the old drive, requiring reference to the respective documentation for comparison.

The Red Lion device may offer various hardware configuration options such as Ethernet using a default IP, USB connectivity, or alternatives to the RS-485 bus.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unsure about the MkIV's actions on Modbus, I recommend using a Windows Modbus slave utility program (such as ModSim, Modpoll's slave, or Simply Modbus RTU slave) with a USB/RS-485 converter. Set the slave as node ID 31 with the appropriate serial settings. Analyze the traffic from the master to identify the Function Codes and registers being accessed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While most drives operate as Modbus server/slaves, the Node ID 31 serves as the slave node ID for the old ACS800. It is important to note that a Modbus master does not have a node ID. The Red Lion device likely functions as a Modbus RTU/Modbus TCP converter or gateway. Configuration of the Red Lion is necessary, specifically setting the slave node ID to 31 and adjusting the serial settings such as baud rate, parity, word size, and stop bit.

On the client side of the Red Lion, information required includes the target IP address of the new drive, the Modbus Function Code, and the register address(es). The new drive will need an IP address and possibly a slave node ID. It is crucial to verify the register addresses on the new drive as they may differ from those on the former drive. The Red Lion may have a hardware configuration bus such as Ethernet on a Default IP, USB, or RS-485.

In cases where communication issues persist, it is essential to determine if Node 31 on the MKIV Controller is a Modbus or CAN address. If the MKIV is the Modbus master, ensure that the RL RS485 side is configured as a Modbus RTU Slave with the appropriate address. Despite using serial settings from the old RTU network, communication may still be problematic. Consulting documentation and seeking assistance from experts like@Ken Roach or technical support may be necessary to resolve communication challenges effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kay_gsr13</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kay_gsr13 mentioned that most devices can act as protocol converters, allowing communication between RL and VFD (Modbus TCP/IP). The challenge lies in determining if Node 31 in the MKIV Controller is a Modbus or CAN address, hindering communication from RL. Despite setting the RL RS485 side as a Modbus RTU Slave with address 1, there is still no communication. Research suggests using a Combox-S for PLC communication with the MKIV via Modbus. Can anyone advise on the issue of communication between the FC302 Danfoss drive and the GA22 VSD compressor, with the MKIV showing Node ID 31 and the micromaster displaying address 1?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Najeeb138</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I am encountering an issue with a GA22 VSD compressor where the faulty drive was replaced with a FC302 Danfoss drive. However, the new drive is not communicating through RS485 communication. Despite trying various options, I have been unsuccessful in resolving this issue. The MKIV is displaying a NODE ID of 31, while the Micromaster parameter is showing an address of 1. Can anyone advise on where I may be going wrong in this situation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Najeeb138</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Najeeb138 shared his issue with a faulty VFD in a GA22 VSD compressor. Despite replacing the Micro Master 440 with a Danfoss FC302, he encountered communication problems through RS485. The NODE ID being 31 is the CAN Address for the MKIV, acting as the Master, while the VSD/VFD is at Modbus address 1. To establish communication, it is crucial to send consecutive commands in the correct sequence and understand the register mapping of both devices. By using a Modbus Master like RedLion DA30, you can observe feedback and manipulate the word structure for proper communication. Understanding the register exchanges between the MKIV and devices like the ABB ACS-800 is essential. Utilizing the Elektronikon MkIV Field Downloading Program can provide further insight into address mapping. Good luck with resolving the communication issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kay_gsr13</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. It appears that I need to understand the communication mapping between Micromaster and MKIV before setting up the same mapping in the FC302 Danfoss VFD as bits. I can access the Micromaster software online to view the BICO and hopefully locate the MKIV address for configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Najeeb138</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: How can I troubleshoot communication issues between an Elektronikon MKIV controller and a Yaskawa GA800 VFD via Modbus?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure correct wiring connections, verify communication parameters, and check for any software configuration requirements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: What is the role of a RedLion gateway in establishing communication between the MKIV and the Yaskawa VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The RedLion gateway can be used as a relay for register data transmission via Modbus TCP/IP.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: How can I connect a RedLion gateway to an Elektronikon MKIV controller for RS485 Modbus communication?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Verify correct pinouts and wiring connections, and consider checking the configuration settings on the RedLion gateway.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: How can I access and verify the communication parameters on an Elektronikon MKIV controller without the necessary software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Contact the manufacturer or supplier for the required software or tools to access and verify the settings on the MKIV controller.</p>
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
