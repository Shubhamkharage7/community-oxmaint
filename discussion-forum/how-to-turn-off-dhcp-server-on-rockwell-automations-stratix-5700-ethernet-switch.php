
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking to disable the DHCP server on your Stratix 5700 Ethernet switch running on a Rockwell Automation machine? We have connected the G1 (or G2) port with a fixed IP address to our engineering office for monitoring and support. However, the switch is unexpectedly acting as a DHCP server,">
    <meta name="keywords" content="rockwell automation stratix 5700 ethernet switch, dhcp server disable guide, rockwell stratix 5700 switch configuration, fixing dhcp server issue on ethernet switch, rockwell automation 178">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-turn-off-dhcp-server-on-rockwell-automations-stratix-5700-ethernet-switch">
    <title>How to Turn Off DHCP Server on Rockwell Automations Stratix 5700 Ethernet Switch | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Turn Off DHCP Server on Rockwell Automations Stratix 5700 Ethernet Switch | Oxmaint Community">
    <meta property="og:description" content="Looking to disable the DHCP server on your Stratix 5700 Ethernet switch running on a Rockwell Automation machine? We have connected the G1 (or G2) port with a fixed IP address to our engineering office for monitoring and support. However, the switch is unexpectedly acting as a DHCP server,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-turn-off-dhcp-server-on-rockwell-automations-stratix-5700-ethernet-switch">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Turn Off DHCP Server on Rockwell Automations Stratix 5700 Ethernet Switch | Oxmaint Community">
    <meta name="twitter:description" content="Looking to disable the DHCP server on your Stratix 5700 Ethernet switch running on a Rockwell Automation machine? We have connected the G1 (or G2) port with a fixed IP address to our engineering office for monitoring and support. However, the switch is unexpectedly acting as a DHCP server,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-turn-off-dhcp-server-on-rockwell-automations-stratix-5700-ethernet-switch"
      },
      "headline": "How to Turn Off DHCP Server on Rockwell Automations Stratix 5700 Ethernet Switch",
      "description": "Looking to disable the DHCP server on your Stratix 5700 Ethernet switch running on a Rockwell Automation machine? We have connected the G1 (or G2) port with a fixed IP address to our engineering office for monitoring and support. However, the switch is unexpectedly acting as a DHCP server,",
      "author": {
        "@type": "Person",
        "name": "Kataeb"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-19",
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
                <h1 class="text-white">How to Turn Off DHCP Server on Rockwell Automations Stratix 5700 Ethernet Switch</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2132</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">388</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Looking to disable the DHCP server on your Stratix 5700 Ethernet switch running on a Rockwell Automation machine? We have connected the G1 (or G2) port with a fixed IP address to our engineering office for monitoring and support. However, the switch is unexpectedly acting as a DHCP server, assigning IP addresses to the office computers. To resolve this issue, we need to eliminate all DHCP settings on the switch. Learn more about the 1783-BMS20CGN Stratix 5700 switch on Rockwell Automation's official website.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Does the system have automatic IP address assignment for new drives enabled? If this feature is in use, it is advised not to turn off DHCP. Additionally, it is not recommended to connect automation equipment directly to corporate networks. It is better to consider installing a hardware firewall to secure both networks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To deactivate the DHCP server feature on your Stratix switch, you must have the login credentials, password, and IP address of the device. You can access the internal web server for this purpose. Alternatively, if you are proficient in using the command line interface, you can disable the DHCP server through the terminal software using telnet. Be sure to refer to the manual for guidance on this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We followed the recommended steps to eliminate all forms of DHCP. Please refer to the attached document for more information. Is there anything else we should consider?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Did you properly reset the switch after implementing the updates?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore inquired if the switch was rebooted or restarted after implementing the changes. Instead, the switch was simply powered off in the cabinet. Is there any additional action that should be taken in this situation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Attempt to navigate to the web browser on the Stratix device to check if the DHCP server is turned off.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The ongoing issue with the DHCP server on the Stratix switch persists, despite attempts by the supplier to resolve it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kataeb recently addressed ongoing DHCP server issues with the Stratix switch, expressing frustration that even the supplier was unable to resolve the problem. Are you able to access the switch via SSH or terminal? Please provide the output of a "show run" command from the CLI to further troubleshoot the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your switch is configured to boot from the SD card internally, be sure to adjust the settings to prevent this. Make sure to also save any changes made to the running configuration to the SD card. This will ensure that the switch does not attempt to boot from the SD card and that your changes are properly saved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Micoo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The supplier has confirmed that the Switch needs to handle DHCP. As an alternative solution, could we consider adding a device (such as a router) between the Switch's G1 port and the Laptop's ethernet port to prevent DHCP interference? This setup would allow the Laptop to communicate with the Switch independently, without relying on DHCP for address assignment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Kataeb, the supplier claims that the Switch needs to perform DHCP. I beg to differ with the supplier on this matter. DHCP necessitates an address pool from which it can allocate IP addresses. If there is no address pool specified, then where exactly is the Switch obtaining IP addresses from? This issue should be addressed in the switch configuration settings. It is likely that alterations are being made in the run config, while the switch is set to boot from an SD card which may be overwriting any changes made.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The wireless router connected to the machine was creating a lot of excitement! It is linked to the Switch to provide wireless connectivity to the plc for programming and monitoring. We turned off the wifi DHCP function to prevent it from freely distributing IP addresses through the Switch to the offices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Great news! For those who have been dealing with this issue since December, it's a relief to see that you have shared your experience with the forum. Your contribution is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I turn off the DHCP server on a Rockwell Automation Stratix 5700 Ethernet switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - To disable the DHCP server on a Rockwell Automation Stratix 5700 Ethernet switch, you will need to access the switch's configuration settings and eliminate all DHCP settings. You can connect to the switch using its G1 or G2 port with a fixed IP address for monitoring and support.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is my Rockwell Automation Stratix 5700 switch acting as a DHCP server?</h4>
<p class='text-muted'><strong>Answer:</strong> - If your Rockwell Automation Stratix 5700 switch is unexpectedly acting as a DHCP server and assigning IP addresses to connected devices, it may be due to existing DHCP settings on the switch. To resolve this issue, you need to eliminate all DHCP settings on the switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find more information about the Rockwell Automation 1783-BMS20CGN Stratix 5700 switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can learn more about the Rockwell Automation 1783-BMS20CGN Stratix 5700 switch on Rockwell Automation's official website. They provide detailed information about the switch's features, specifications, and configuration options.</p>
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
