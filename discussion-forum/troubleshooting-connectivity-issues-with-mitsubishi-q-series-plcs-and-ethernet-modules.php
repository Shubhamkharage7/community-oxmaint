
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am facing a challenge with connecting my 2 Mitsubishi Q series PLCs, each with a built-in IP address of 192.168.3.xx, to our SCADA system using Ethernet modules QJ71E71-100 with IP addresses of 192.168.4.xx. Despite my efforts, I am unable to ping these modules from our current">
    <meta name="keywords" content="troubleshooting mitsubishi q series plcs, mitsubishi q series plc connectivity issues, ethernet modules qj71e71-100 troubleshooting, mitsubishi q series plc configuration, mitsubishi q series plc ethernet connectivity">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-mitsubishi-q-series-plcs-and-ethernet-modules">
    <title>Troubleshooting connectivity issues with Mitsubishi Q series PLCs and Ethernet modules | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting connectivity issues with Mitsubishi Q series PLCs and Ethernet modules | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am facing a challenge with connecting my 2 Mitsubishi Q series PLCs, each with a built-in IP address of 192.168.3.xx, to our SCADA system using Ethernet modules QJ71E71-100 with IP addresses of 192.168.4.xx. Despite my efforts, I am unable to ping these modules from our current">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-mitsubishi-q-series-plcs-and-ethernet-modules">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting connectivity issues with Mitsubishi Q series PLCs and Ethernet modules | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am facing a challenge with connecting my 2 Mitsubishi Q series PLCs, each with a built-in IP address of 192.168.3.xx, to our SCADA system using Ethernet modules QJ71E71-100 with IP addresses of 192.168.4.xx. Despite my efforts, I am unable to ping these modules from our current">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-mitsubishi-q-series-plcs-and-ethernet-modules"
      },
      "headline": "Troubleshooting connectivity issues with Mitsubishi Q series PLCs and Ethernet modules",
      "description": "Hello everyone! I am facing a challenge with connecting my 2 Mitsubishi Q series PLCs, each with a built-in IP address of 192.168.3.xx, to our SCADA system using Ethernet modules QJ71E71-100 with IP addresses of 192.168.4.xx. Despite my efforts, I am unable to ping these modules from our current",
      "author": {
        "@type": "Person",
        "name": "tientran"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-10",
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
                <h1 class="text-white">Troubleshooting connectivity issues with Mitsubishi Q series PLCs and Ethernet modules</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1182</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">248</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am facing a challenge with connecting my 2 Mitsubishi Q series PLCs, each with a built-in IP address of 192.168.3.xx, to our SCADA system using Ethernet modules QJ71E71-100 with IP addresses of 192.168.4.xx. Despite my efforts, I am unable to ping these modules from our current router, which has the address 192.168.50.xx. On the other hand, we have successfully connected Siemens S7-300 and S7-400 PLCs to a router with the address 10.133.120.xxx in the past.

Unlike the Siemens PLCs, the QJ71E71-100 modules do not have settings to set the gateway for router connectivity. I need to find a solution to connect these Ethernet modules to the 192.168.50.xx router to enable communication with Kepware. Previously, the Siemens PLCs were configured with the help of the OEM company to work seamlessly with the router. How can I achieve the same level of connectivity for the Mitsubishi PLCs? Any advice would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Insufficient information is available in Post #1 to address the question effectively. To simplify, a hand-drawn sketch depicting the different LANs and their connections, labeled with network addresses like 192.168.50.0/24 (not variations like 192.168.50.xx), along with routers and devices labeled with their IP addresses, could be helpful. If the Mitsubishi PLCs are connected to the 192.168.50.xx side of the router, it is necessary to change the IP addresses on each Mitsubishi PLC from 192.168.3.xx or 192.168.4.xx to 192.169.50.xx. If the Mitsubishi PLCs are not on the 192.168.50.xx side of the router, devices on that side must be configured to use the router as the gateway to the respective LAN, and all routers in between should be aware of routes to LANs like 192.168.3.xx (192.168.3.0/24?) and 192.168.4.xx (192.168.4.0/24). Despite the limitations of the provided information, this response aims to offer the best possible guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize UDP for the Kepware as there have been ongoing issues with using TCPIP, unless it has been recently updated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a query posed by user drbitboy, it appears that additional information is required to accurately address the question at hand. One suggestion to simplify the process would be to provide a hand-drawn sketch detailing the various LANs and their connections, with network addresses (e.g. 192.168.50.0/24) and IP addresses for routers and devices clearly labeled. If the Mitsubishi PLCs are connected to the 192.168.50.xx side of the router, it will be necessary to change at least one IP address on each PLC to 192.168.50.xx. If the PLCs are not on the 192.168.50.xx side of the router, configuration adjustments will be needed for devices on that side to utilize the router as the gateway. Additionally, all routers involved must have knowledge of the routes to LANs 192.168.3.xx and 192.168.4.xx.

In a separate context, a user expressed encountering issues while working with a Mitsubishi PLC Q series for the first time. Upon uploading the PLC program to their PC, they noticed only one GD2 file compared to the multiple XML files from previous backups. The user is uncertain if this discrepancy indicates a problem with their GX Works2 software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper network connectivity, the first step is to establish the subnet configuration for the plant's requirements. For two IPs to communicate, they must be within the same subnet or have a gateway managing traffic between multiple subnets. A recommended approach is to assign all IPs to the same subnet; for instance, utilizing the 192.168.1.x range with the standard network mask 255.255.255.0 (/24). For a larger network requiring 500 IPs, a subnet mask of 255.255.254.0 (/23) can be utilized. Opting for a more restrictive subnet mask is advisable for improved network performance. Additionally, ensure all network cables are routed from the same switch rack for an efficient physical connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the original programmer coded in GXWorks2 and used Function Block Diagram (FBD) or Ladder Diagram (LAD), the program is likely structured. However, without the source file or if the symbolic information wasn't downloaded to the PLC, the ladder program may appear messy with numerous jumps to routines and lacking comments. Additionally, if a simple single file project was selected during upload, there may be differences such as missing comments or symbols. It is crucial to have a copy of the source file when working with Mitsi and GXWorks to maintain the program's format, especially if the symbolic file was downloaded to the PLC as it affects the FBD format and structure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How to connect a QJ71E71-100 module with an address of 192.168.50.xxx to a PC with an IP address of 192.168.50.23 through a router with an IP address of 192.168.50.1? What are the necessary settings for this connection? This setup aims to enable connectivity to Kepware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tientran asked about changing the IP address of a QJ71E71-100 module to 192.168.50.xxx and connecting it to a PC with the address 192.168.50.23 via a router with the address 192.168.50.1. What are the necessary settings for this setup? The goal is to establish a connection to Kepware. If the PLC, router, and PC all have a netmask of 255.255.255.0 (or /24) configured, there should be no issues with connectivity. It's important to note that not all devices may respond to ping requests, so lack of response does not necessarily indicate a connection problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After uploading the project from the PLC, the current configuration of the QJ71E71-100 is as follows. Picture 1 displays the IP address of the PC where Kepserverex4 is installed, while Pictures 2, 3, and 4 show the settings of the QJ71E71-100. To enable connection to the QJ71E71-100 via router 192.168.50.1 for access from multiple PCs on the same network, the IP address of the QJ71E71-100 needs to be changed to 192.168.50.10. In this case, the Kepserverex settings should be configured as 192.168.50.10:N2:255, UDP port 5001.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing connectivity issues with Kepserver (specifically version 5.xx) over TCP, consider using UDP (IEEE802.3) as an alternative. Ensure that you set the host IP address and port in the "network Parameter" for optimal performance. While I don't have a QJ71 to test this solution, it should be similar to what was mentioned in a previous post about Mitsubishi QJ71E71 + Kepware Connectivity. If you are looking to connect a Mitsubishi Q series PLC using a QJ71E71 Ethernet card to Kepware, try using TCP Protocol. However, if you are facing random disconnections, try power cycling the station to reestablish connectivity. For more information and discussions on this topic, visit www.plctalk.net.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot connectivity issues between Mitsubishi Q series PLCs and Ethernet modules QJ71E71-100 with a different IP address range than the SCADA system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot connectivity issues, you can start by checking the network settings on both the PLCs and the Ethernet modules to ensure they are on the same subnet. You may also need to verify the routing configuration on the network to allow communication between devices on different IP address ranges.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is it possible to connect Mitsubishi Q series PLCs with QJ71E71-100 Ethernet modules to a router with a different IP address range than the modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to connect devices with different IP address ranges by configuring proper routing and subnet settings. Ensure that the gateway settings are correctly configured on the devices to enable communication with devices on different subnets.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I configure the gateway for router connectivity on Mitsubishi Q series PLCs with QJ71E71-100 Ethernet modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Mitsubishi Q series PLCs with QJ71E71-100 Ethernet modules do not have built-in settings to configure the gateway for router connectivity. In such cases, you may need to configure the routing tables on the network infrastructure to facilitate communication between devices on different subnets. Consulting the user manual or contacting Mitsubishi support for guidance on advanced networking configurations is recommended.</p>
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
