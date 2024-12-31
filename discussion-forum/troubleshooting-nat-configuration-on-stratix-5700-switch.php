
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently purchased a Stratix 5700 switch with NAT capability (1783-BMS10CGN) but have been unable to get NAT to work properly. Despite following the step-by-step instructions in the NAT quickstart guide from the knowledge base and replicating their setup, I have not been successful. My network setup includes VLan10">
    <meta name="keywords" content="troubleshooting nat configuration, stratix 5700 switch nat setup, stratix 5700 nat configuration guide, nat configuration issues on stratix 5700 switch, stratix 5700">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-nat-configuration-on-stratix-5700-switch">
    <title>Troubleshooting NAT Configuration on Stratix 5700 Switch | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting NAT Configuration on Stratix 5700 Switch | Oxmaint Community">
    <meta property="og:description" content="I recently purchased a Stratix 5700 switch with NAT capability (1783-BMS10CGN) but have been unable to get NAT to work properly. Despite following the step-by-step instructions in the NAT quickstart guide from the knowledge base and replicating their setup, I have not been successful. My network setup includes VLan10">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-nat-configuration-on-stratix-5700-switch">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting NAT Configuration on Stratix 5700 Switch | Oxmaint Community">
    <meta name="twitter:description" content="I recently purchased a Stratix 5700 switch with NAT capability (1783-BMS10CGN) but have been unable to get NAT to work properly. Despite following the step-by-step instructions in the NAT quickstart guide from the knowledge base and replicating their setup, I have not been successful. My network setup includes VLan10">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-nat-configuration-on-stratix-5700-switch"
      },
      "headline": "Troubleshooting NAT Configuration on Stratix 5700 Switch",
      "description": "I recently purchased a Stratix 5700 switch with NAT capability (1783-BMS10CGN) but have been unable to get NAT to work properly. Despite following the step-by-step instructions in the NAT quickstart guide from the knowledge base and replicating their setup, I have not been successful. My network setup includes VLan10",
      "author": {
        "@type": "Person",
        "name": "Helliana"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">Troubleshooting NAT Configuration on Stratix 5700 Switch</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Helliana</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">20537</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">279</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently purchased a Stratix 5700 switch with NAT capability (1783-BMS10CGN) but have been unable to get NAT to work properly. Despite following the step-by-step instructions in the NAT quickstart guide from the knowledge base and replicating their setup, I have not been successful.

My network setup includes VLan10 with the following configurations: 192.168.1.200, 255.255.255.0 for the VLAN interface, 192.168.1.2 for the PC, and 192.168.1.3 for the PLC. However, the NAT feature does not seem to be functioning as expected. I have tried various configurations in the NAT settings section, including specifying the VLAN, creating translations with Private and Public IP addresses, and setting gateway translations.

Despite my efforts, I have been unable to ping 192.168.1.254 from within the NAT or 10.50.68.249 from outside the NAT. I am currently stuck and unsure of what I might be overlooking. Is there anyone who has successfully configured the Stratix 5700 switch with NAT and can provide some insights into what I might be missing? Any tips or guidance would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Has anyone successfully set up this new device? Share your experiences!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helliana</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have ordered two items and once they arrive, I will need to configure NAT as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob A</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Helliana reported difficulties in setting up NAT on her Stratix 5700 w/ NAT switch (1783-BMS10CGN). Despite following the NAT quickstart guide step by step, the NAT feature does not seem to be functioning correctly. The network setup includes VLAN 10 with IP addresses assigned to devices such as a PC and PLC, as well as a Plant Public Network Switch. In the NAT configuration, specific settings were adjusted, but the NAT feature remains non-operational. Helliana seeks advice on troubleshooting the issue and clarifying the role of certain IP addresses in the setup. A visual representation of the network setup is recommended to better understand and address the NAT configuration challenges. Remember, for successful NAT configuration, each private address must have a corresponding public address assigned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Private Gateway translation address 192.168.1.254 has been configured for individual NAT translations on every device within the 192.xxx subnet. While communication between devices within the subnet is successful, the translated gateway is unresponsive. As per AB documentation, the Private Gateway is designated as any available address within the subnet, with the Public gateway set to the network gateway. My configuration closely resembles AB Publication# IASIMP-QS038A-EN-P, with the only discrepancy being the public IP range of 10.50.68.0, subnet 255.255.254.0, and gateway at 10.50.68.1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helliana</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing 96 unique public IP addresses, all within VLAN 10? Having everything on the same VLAN can lead to troubleshooting difficulties. Consider creating separate VLANs for stations 1-12 and routing them through the 8300 for a smoother and more organized setup. This approach can help streamline your network configuration and management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently working with a single 5700 switch, along with a PLC, PC, and remote I/O device. My focus is on getting this setup operational before proceeding to the next steps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helliana</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your network settings, be sure to set up the necessary NAT entries in both the General tab and the public to private tab. Confirm that the Gig port is correctly connected to VLAN 10 and that VLAN trunking is activated. Additionally, ensure that the smart port is configured for switch automation. These steps are crucial for seamless connectivity and network efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to confirm that all the ports being utilized are set to automatic negotiation to ensure seamless communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I had everything set up except for the SmartPort being set to None... could that be the problem? I don't recall seeing that mentioned in the user manual. Additionally, not everything is configured on VLAN 10. It's puzzling why Rockwell chose to use that as their example. Our goal is to connect the Stratix5700 to our corporate IT network, an environment inaccessible to anyone in our facility, hence the necessity for NAT.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helliana</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After four months of neglecting it on my desk, I finally managed to get the switch up and running. I owe a huge thanks to PLCKid for helping me out!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helliana</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm pleased to hear that you were able to successfully get it running.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>The Plc Kid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are generic 1GB SD cards compatible with Stratix switches? Are there any specific formatting requirements for the SD card to work with Stratix switches? Your comments and suggestions are welcome. Thank you, David.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dadof3and3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>David, have you read the manual's requirement for using the 1784-SD1 card from Rockwell Automation with the Stratix switches? The manual also states that Rockwell Automation reserves the right to withhold support if a non-Rockwell SD card is used. It's always best to follow the manufacturer's recommendations to avoid any issues. You can find more information in the manual here: http://literature.rockwellautomation.com/idc/groups/literature/documents/um/1783-um007_-en-p.pdf. It's possible that using a different SD card may cause problems, so it's safer to just go with the 1784-SD1 card to ensure compatibility. It's likely that Rockwell has encountered issues in the past due to the use of incompatible SD cards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Gremlin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your follow-up. We are looking to buy around 30 items for an upcoming project and are eager to find ways to cut costs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dadof3and3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello friends, I have attempted to configure my NAT access following the quick start guide, but have been unsuccessful despite numerous attempts. I have attached a diagram of my network setup. My goal is to establish access from the Server PC to the PLC. I have set the General and Public to Private tabs as shown in the image. 
The Server PC is connected to Gi1/1 (native LAN) and all Smartports are set to none except for Gi1/1 as the switch for automation. Port settings are all set to autonegotiate and the administrative mode to dynamic auto, with Gi1/1 functioning as a trunk.
Despite this configuration, I am unable to ping the PLC (which has a public address of 192.168.190.1) from the Server PC. What could be causing this issue? I have tried multiple troubleshooting steps without success so far. Thank you for your assistance in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asteroide</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you please help me resolve this problem?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
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
<h4 class='text-dark'>FAQ: 1.  I have a Stratix 5700 switch with NAT capability, but I am unable to get NAT to work properly. What could be the issue?</h4>
<p class='text-muted'><strong>Answer:</strong> There could be several reasons why NAT is not functioning as expected. One common issue could be misconfiguration of the NAT settings, such as incorrect VLAN configurations, translation rules, or gateway settings. Ensure that all settings are correctly configured according to the device's specifications and the network requirements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I have followed the step-by-step instructions in the NAT quickstart guide for the Stratix 5700 switch, but NAT is still not working. What should I do next?</h4>
<p class='text-muted'><strong>Answer:</strong> If following the provided instructions did not resolve the issue, consider double-checking the VLAN configurations, IP addresses, and translation rules for any discrepancies. It might also be helpful to reach out to technical support for further assistance or consult online forums for troubleshooting tips from experienced users.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Despite configuring translations with Private and Public IP addresses on the Stratix 5700 switch, I cannot ping certain IP addresses. How can I troubleshoot this problem?</h4>
<p class='text-muted'><strong>Answer:</strong> If you are unable to ping specific IP addresses, verify that the translation rules are correctly set up to map private IP addresses to public IP addresses and vice versa. Additionally, ensure that routing and NAT configurations are consistent across all devices on the network to facilitate proper communication.</p>
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
