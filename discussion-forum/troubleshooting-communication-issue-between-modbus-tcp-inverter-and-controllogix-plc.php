
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a Modbus TCP-only inverter that needs to communicate with a Controllogix PLC via Ethernet/IP network. I am currently using a Prosoft PLX32-EIP-MBTCP gateway for this purpose. However, I am facing a problem where the gateway loses communication with the inverter after multiple connection attempts, requiring a cold">
    <meta name="keywords" content="modbus tcp inverter, controllogix plc, ethernet/ip network, prosoft plx32-eip-mbtcp gateway, communication issue, troubleshooting, cold reboot, automatic solutions, prevent communication loss, long timeout period, gateway loses communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-modbus-tcp-inverter-and-controllogix-plc">
    <title>Troubleshooting Communication Issue between Modbus TCP Inverter and Controllogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issue between Modbus TCP Inverter and Controllogix PLC | Oxmaint Community">
    <meta property="og:description" content="I have a Modbus TCP-only inverter that needs to communicate with a Controllogix PLC via Ethernet/IP network. I am currently using a Prosoft PLX32-EIP-MBTCP gateway for this purpose. However, I am facing a problem where the gateway loses communication with the inverter after multiple connection attempts, requiring a cold">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-modbus-tcp-inverter-and-controllogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issue between Modbus TCP Inverter and Controllogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="I have a Modbus TCP-only inverter that needs to communicate with a Controllogix PLC via Ethernet/IP network. I am currently using a Prosoft PLX32-EIP-MBTCP gateway for this purpose. However, I am facing a problem where the gateway loses communication with the inverter after multiple connection attempts, requiring a cold">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-modbus-tcp-inverter-and-controllogix-plc"
      },
      "headline": "Troubleshooting Communication Issue between Modbus TCP Inverter and Controllogix PLC",
      "description": "I have a Modbus TCP-only inverter that needs to communicate with a Controllogix PLC via Ethernet/IP network. I am currently using a Prosoft PLX32-EIP-MBTCP gateway for this purpose. However, I am facing a problem where the gateway loses communication with the inverter after multiple connection attempts, requiring a cold",
      "author": {
        "@type": "Person",
        "name": "Revnus"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">Troubleshooting Communication Issue between Modbus TCP Inverter and Controllogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">542</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">197</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a Modbus TCP-only inverter that needs to communicate with a Controllogix PLC via Ethernet/IP network. I am currently using a Prosoft PLX32-EIP-MBTCP gateway for this purpose. However, I am facing a problem where the gateway loses communication with the inverter after multiple connection attempts, requiring a cold reboot of the inverter to restore communication. I am seeking insights into why this behavior occurs and if there are any automatic solutions available to prevent it without setting a long timeout period. Any advice would be appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To receive accurate responses, it is important to provide specific details about the Variable Frequency Drive (VFD). Different drives have communication parameters that affect their response to communication loss when configured to operate through a communication port. These parameters include a timeout setting that determines how frequently the VFD needs to be polled to prevent a timeout. Another parameter dictates the VFD's reaction to a loss of communication. It is unlikely that these settings would cause the VFD to stop responding to polls, as you mentioned. 

I have encountered a few devices in the past that would stop responding if I polled them too quickly or tried to access an illegal address. For instance, one device only allowed me to read 8 consecutive holding registers per message using Modbus RTU on RS485, not Modbus TCP. Recently, I came across a Toshiba VFD on Modbus RTU that restricted me to reading or writing a single holding register per message. Fortunately, for my specific application, I only needed to read 3 and write 2 registers, so I had to create five staggered PLC messages to accomplish this task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your VFD is experiencing a communication loss, it may not reestablish communication automatically. To troubleshoot this, consider disabling the fault in the VFD or checking if the VFD has a parameter for automatically resetting faults. This issue could be a possible cause for the VFDfaulting out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for providing answers. I apologize for the error in my previous information – the device in question is not an inverter, but rather a pump control module (Xylem Flygt Pareo 711). Unfortunately, the available Modbus/TCP registers and settings on the module's HMI do not allow for controlling the timeout and fault reset functions. The module's HMI does not display a specific fault related to communication loss, nor does it offer an auto-reset feature.

Prior to using the gateway from Prosoft, communication was established directly with the module via MSG. When communication was lost a few times, manual restarts were required. The Prosoft gateway communicates with the PLC using IO connection class 1, enabling it to trigger a reset of the module after experiencing a timeout.

It is unclear whether the issue lies with the module itself or the Modbus TCP network. I am hopeful that the problem may be related to the network, as the module lacks extensive configuration options. This suggests that a potential solution may exist within the Modbus TCP network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why use this pump module when your PLC doesn't natively support its protocol? It seems like a superficial decision made by a non-technical manager, pushing for IIOT without considering functionality. The optional modbus feature lacks proper documentation and is unreliable, often requiring hard reboots. It's better to rely on the PLC for control, rather than this unreliable add-on. Consider discarding the module and sticking to the PLC for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Strantor raised a valid question - why utilize the pump module when the PLC in place lacks native support for its protocol? This scenario reeks of a decision made by a non-technical manager enamored with a new gadget, rather than a practical solution. This situation hints at the Industrial Internet of Things (IIOT), designed for remote control via smartphone apps, with a haphazardly implemented modbus feature. Surprisingly, the modbus functionality is listed as "optional," with no clear documentation on its parameters. The unreliable modbus implementation necessitates frequent reboots, leading to the suggestion of discarding the module in favor of the PLC's capabilities.

The company operates multiple pumps with just one PLC, requiring continuous motor control even in the event of a communication failure. While some pumps utilize the E300 with Ethernet IP, bypassing the communication issue, there's a lingering confusion about why the E300 option was initially requested. With over 10 of these questionable modules in use, a cost-effective replacement with the E300 is not feasible, leaving limited options for pump management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you currently utilizing FC 16 for write operations in your ProSoft gateway configuration? If yes, are you aware of the options available in the enable section of the command, such as No, Yes, and Conditional? If the setting is currently set to Yes, it may be beneficial to switch it to Conditional. A discussion on control.com addressed a similar issue where the ProSoft (a PLC card) was establishing multiple TCP connections, causing the server device to run out of sockets and reject new connections. This resulted in Modbus slaves ceasing to listen on ports. Recently, I encountered a similar issue in my control devices network, which consists of 88 devices with 29 Modbus slaves. After adding 4 Maxcess Spyder Plus tension control modules, the network experienced...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the setup of the ProSoft gateway, are you utilizing FC 16 for write functions? If you are, are there choices available in the enable section such as No, Yes, and Conditional? If the current setting is set to Yes, it might be beneficial to switch it to Conditional. A detailed discussion on a similar issue was found on control.com. It was discovered that the ProSoft device (specifically a PLC card) was generating multiple TCP connections, causing the server device to run out of sockets and preventing new connections from being established.

Recently, there has been an issue with Modbus slaves ceasing to respond on ports. The network dedicated to our control devices has been operating flawlessly for 7 years, with all switches being AB Stratix 5700. With a total of 88 devices connected, 29 of them are Modbus slaves. The problem arose when 4 new Maxcess Spyder Plus tension control modules were added to the network, leading to...control.com. Currently, I am utilizing two write commands (FC 5 and FC 16), both set to Conditional. For reading purposes, I have two commands consistently set to Yes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there any limitations on the maximum number of TCP sessions supported by your interver? If so, is it currently configured to allow only up to 4 sessions?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there are two main issues happening. Firstly, there is a communication drop after establishing a connection, requiring a new connection for communication to resume. Secondly, the Xylem device seems to be experiencing a shortage of TCP sockets, leading to a failure in recycling old sockets. As these problems are occurring with both ProSoft and PLC's native MSG instructions, it is likely that the Xylem device is the root cause.

I suggest setting up a managed switch for port mirroring and using Wireshark to capture the issue in action. This analysis may reveal the cause of the communication dropouts. If the problem is indeed a firmware bug in the Xylem device, providing them with the Wireshark captures could help prompt a resolution or at least validate the issue on their end.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Forcing a Hard Reboot of Your Device: A Simple Guide for Troubleshooting and Fixing Common Tech Issues</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>idiotsecant asked if your router has a maximum TCP sessions setting, is it configured to 4? Unfortunately, it is not. jschulze suggested that the communication dropouts and TCP socket depletion issues may be attributed to the Xylem device. To troubleshoot, jschulze recommended setting up a managed switch for port mirroring and using Wireshark to capture the issue. This could help pinpoint the cause of the communication dropouts. With the issues prevalent in mining locations, jschulze clarified that IO connections are used instead of MSG instructions. Although unfamiliar with Wireshark, it was advised to provide evidence to Xylem for a potential firmware update. A recent discovery showed that the module's HMI falsely indicates a stable connection when communication dropouts occur. While considering a firmware update request, the suggestion of a hard reboot was made by drbitboy. Streamlining solutions is key in troubleshooting processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why does the Prosoft PLX32-EIP-MBTCP gateway lose communication with the Modbus TCP inverter after multiple connection attempts?
- The issue could be related to network congestion, timing mismatches, or configuration settings causing communication disruptions.
  
2. Is there an automatic solution available to prevent the communication issue without setting a long timeout period?
- One potential solution could be to adjust the gateway's configuration settings, such as retry intervals or connection parameters, to stabilize communication without relying on long timeout periods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot and resolve the communication problem between the Modbus TCP inverter and Controllogix PLC effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can start by checking network configurations, gateway settings, and communication protocols to identify any potential sources of the issue. Additionally, consulting the gateway's user manual or reaching out to technical support for assistance may provide further insights.</p>
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
