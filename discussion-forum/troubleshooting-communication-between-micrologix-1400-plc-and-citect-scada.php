
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I require assistance in establishing a connection between a Micrologic 1400 PLC and Citect SCADA version 7.2. In my setup, I am utilizing the ABMLXEIP protocol to set up the IODevice in Citect. However, when attempting to read a bit address on the Micrologix 1400 PLC using">
    <meta name="keywords" content="micrologix 1400 plc communication troubleshooting, citect scada connectivity issues, abmlxeip protocol setup guide, establishing communication between micrologix 1400 plc and citect scada">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-micrologix-1400-plc-and-citect-scada">
    <title>Troubleshooting Communication between Micrologix 1400 PLC and Citect SCADA | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication between Micrologix 1400 PLC and Citect SCADA | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I require assistance in establishing a connection between a Micrologic 1400 PLC and Citect SCADA version 7.2. In my setup, I am utilizing the ABMLXEIP protocol to set up the IODevice in Citect. However, when attempting to read a bit address on the Micrologix 1400 PLC using">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-micrologix-1400-plc-and-citect-scada">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication between Micrologix 1400 PLC and Citect SCADA | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I require assistance in establishing a connection between a Micrologic 1400 PLC and Citect SCADA version 7.2. In my setup, I am utilizing the ABMLXEIP protocol to set up the IODevice in Citect. However, when attempting to read a bit address on the Micrologix 1400 PLC using">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-micrologix-1400-plc-and-citect-scada"
      },
      "headline": "Troubleshooting Communication between Micrologix 1400 PLC and Citect SCADA",
      "description": "Hello everyone, I require assistance in establishing a connection between a Micrologic 1400 PLC and Citect SCADA version 7.2. In my setup, I am utilizing the ABMLXEIP protocol to set up the IODevice in Citect. However, when attempting to read a bit address on the Micrologix 1400 PLC using",
      "author": {
        "@type": "Person",
        "name": "gnash-"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-27",
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
                <h1 class="text-white">Troubleshooting Communication between Micrologix 1400 PLC and Citect SCADA</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>gnash-</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">11056</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">253</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I require assistance in establishing a connection between a Micrologic 1400 PLC and Citect SCADA version 7.2. In my setup, I am utilizing the ABMLXEIP protocol to set up the IODevice in Citect. However, when attempting to read a bit address on the Micrologix 1400 PLC using Tag Debug after compiling the Citect project, I am unable to retrieve any data. I am unsure of how to determine if there is any communication between the PLC and Citect.

According to the Schneider Electric FAQ on ABMLXEIP, a 1761 NET-ENI Module is necessary for the protocol to function properly. However, I do not have this module and instead am utilizing the RJ45 (COM Port 1) port configured as an Ethernet Channel on the Micrologix 1400. Could this lack of the 1761 NET-ENI Module be the reason for the issue? If so, what steps can I take to establish communication between my Micrologix 1400 PLC and Citect without the 1761 NET-ENI Module? Any assistance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One important consideration is whether the IP address is correctly set up on the same subnet as the SCADA system. This configuration plays a crucial role in ensuring smooth communication and device interaction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danatomega</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 2008 FAQ does not include information on Ethernet/IP capabilities for the MicroLogix 1100 and 1400 series. However, based on your hardware setup, you should be in good shape.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>shawnhimself</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, to verify the communication between Citect and the PLC, it is important to create a test page in Citect with all the boards properly assigned. When connecting the test page, it should display the status as either "Comms Good" or "Comms Bad". This step is crucial in ensuring a successful connection between the Citect software and the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>duckman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The MLX 1400 comes with built-in Ethernet which can be utilized as an option. I have experience working with this in version 6.1 and can demonstrate an Ethernet setup in Citect if needed. To verify if the server is functioning properly, you can use the kernel and examine the 'driver' section by scrolling through the page. If possible, please provide some screenshots of the communication setup. If there are communication issues, you may see #com on the screens, indicating a problem. For the 1000 and 1200 series MicroLogix PLCs, the serial driver is typically used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robbo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance thus far. Have you ensured that the IP address is correctly configured on the same subnet as the SCADA system? It appears that both the PLC and Citect have matching Subnet Masks, and when I tested the connection by "pinging" the PLC from the Citect server, I received a response. The MLX 1400 comes equipped with onboard Ethernet - could that be a possible solution? I believe that's what I'm currently connected to, as I mentioned the RJ45 (COM Port 1) port. 

To Duckman and Roboregarding troubleshooting the communication between Citect and the PLC: I have examined the Citect Kernel and it seems that the IO device is offline. I have included images of the Kernel reading and the communication settings for the IO device. It seems that the ABMLXEIP board (BOARD4) is functioning well with other IO devices, but not with this one so far.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gnash-</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to test the connectivity between the PLC and the PC where Citect is operating? I'm unsure if RSLinx (full version) is required for this task. Can you confirm if the PLC is visible in RSLinx?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robbo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I am able to successfully ping the PLC from the Citect server computer, I am encountering an issue with visibility in RSLinx Classic. As I am new to RSLinx, I am unsure if the PLC must be visible in RSLinx for communication with Citect to occur. Can anyone provide guidance on this matter?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gnash-</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to recall it at the moment, but I will conduct a test on the bench tomorrow if no one has assisted by then.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robbo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you need the full version of RSLinx to communicate with Citect? Let me know if this is what you have.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>duckman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, we do possess the complete edition of RSLinx; however, it appears that we currently have version 2.57.00.14 CPR 9 SR 3. I will upgrade to the newest version, 3.60.00, to observe any improvements...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gnash-</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently configured a virtual PC with only Citect installed, without RSLinx, and it is functioning properly. The ABMLXEIP also operates smoothly with just the dongle activation from Citect. It is advisable to check the gateway setup of your network, as this could be causing issues. Try connecting your Citect machine directly to the PLC without a managed switch - if it works, then there may be gateway issues impacting your system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robbo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have configured my IO device in Citect with both a primary and standby lot. Upon reviewing the IOServer kernals, I discovered that my IO device is listed as "Active" on the standby server but not on the primary server. Both the primary and standby Citect servers share the same Subnet Masks and Default Gateways. The only distinction in the IO device settings between the two servers is that the Standby server's Board is labeled as "BATCIT82" in the "Special Opt" field. After checking the Citect.ini file, I found the following information under [LAN]:Node = BATCIT82TCPIP = 1! #CSE:UserItem# Can anyone explain what could be causing this discrepancy?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gnash-</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I'm Vikram from India and I'm experiencing difficulties in connecting Micrologix 1400 with Citect SCADA 2018. I would appreciate any assistance you can offer in resolving this issue. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vikram4188</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings, I am Vikram, a resident of India. I, too, am encountering difficulties in establishing communication between Micrologix 1400 and Citect SCADA 2018. Any assistance or guidance would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vikram4188</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What protocol is being used to establish communication between the Micrologix 1400 PLC and Citect SCADA in this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The ABMLXEIP protocol is being utilized to set up the IODevice in Citect.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is the user unable to retrieve any data when attempting to read a bit address on the Micrologix 1400 PLC using Tag Debug in Citect SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There may be issues with the communication between the PLC and Citect.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the lack of a 1761 NET-ENI Module causing the communication issue between the Micrologix 1400 PLC and Citect SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The absence of the 1761 NET-ENI Module, and instead using the RJ45 port configured as an Ethernet Channel on the Micrologix 1400, could potentially be a reason for the communication problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What steps can be taken to establish communication between the Micrologix 1400 PLC and Citect SCADA without the 1761 NET-ENI Module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Alternative steps or configurations may be required to establish communication without the 1761 NET-ENI Module, such as adjusting settings or using different modules.</p>
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
