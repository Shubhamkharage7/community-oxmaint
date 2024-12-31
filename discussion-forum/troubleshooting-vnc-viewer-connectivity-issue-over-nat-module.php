
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good morning everyone! Ive been troubleshooting an issue with my network setup and Im encountering some challenges. My system consists of a private machine network with IP addresses in the 192.168.1.xxx range. Im using a 1783-NATR to connect to the plant network with IP addresses in the 172.16.5.xxx range.">
    <meta name="keywords" content="vnc viewer, connectivity issue, nat module, troubleshooting, network setup, ip addresses, communication, ethernet switch, hmi, weintek emt3105p, plc, ping, lan, plant network, private network">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-vnc-viewer-connectivity-issue-over-nat-module">
    <title>Troubleshooting VNC Viewer Connectivity Issue Over NAT Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting VNC Viewer Connectivity Issue Over NAT Module | Oxmaint Community">
    <meta property="og:description" content="Good morning everyone! Ive been troubleshooting an issue with my network setup and Im encountering some challenges. My system consists of a private machine network with IP addresses in the 192.168.1.xxx range. Im using a 1783-NATR to connect to the plant network with IP addresses in the 172.16.5.xxx range.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-vnc-viewer-connectivity-issue-over-nat-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting VNC Viewer Connectivity Issue Over NAT Module | Oxmaint Community">
    <meta name="twitter:description" content="Good morning everyone! Ive been troubleshooting an issue with my network setup and Im encountering some challenges. My system consists of a private machine network with IP addresses in the 192.168.1.xxx range. Im using a 1783-NATR to connect to the plant network with IP addresses in the 172.16.5.xxx range.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-vnc-viewer-connectivity-issue-over-nat-module"
      },
      "headline": "Troubleshooting VNC Viewer Connectivity Issue Over NAT Module",
      "description": "Good morning everyone! Ive been troubleshooting an issue with my network setup and Im encountering some challenges. My system consists of a private machine network with IP addresses in the 192.168.1.xxx range. Im using a 1783-NATR to connect to the plant network with IP addresses in the 172.16.5.xxx range.",
      "author": {
        "@type": "Person",
        "name": "PLC Pie Guy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Troubleshooting VNC Viewer Connectivity Issue Over NAT Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">545</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">349</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good morning everyone! I've been troubleshooting an issue with my network setup and I'm encountering some challenges. My system consists of a private machine network with IP addresses in the 192.168.1.xxx range. I'm using a 1783-NATR to connect to the plant network with IP addresses in the 172.16.5.xxx range. The communication between the two networks is working smoothly.

I'm trying to keep the HMI on the machine network and enable access to it from the LAN using a NAT rule for the VNC viewer, instead of adding a second Ethernet switch in the cabinet for the Plant LAN. The HMI is a Weintek eMT3105P and it successfully communicates with my PLC from both sides of the NATR. I can also ping the HMI from my PC while it's connected to either side of the NATR.

However, I'm facing an issue where the VNC viewer on my PC is not able to connect to the HMI through the NAT module, even though all other communications are functioning correctly. Any insights on why the VNC viewer is not working over the NATR despite the successful connections on other fronts? I have confirmed that the VNC is operational on the HMI as I can access it from the machine network.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To the best of my knowledge, the 1:1 NAT feature on these devices does not include any TCP Port or protocol specific restrictions, allowing RSLinx, IGMP PING, and VNC to function seamlessly. While it is commonly said that "NAT is not routing," the 1783-NATR user manual (page 46) mentions the significance of setting the Default Gateway for devices on the Private side. According to the manual, the gateway address for any device on the private network that is being translated must be set to the 1783-NATR Private port address.

This week, I am delving into a NAT system that was set up by others approximately five years ago, utilizing Stratix 5700. The configuration of NAT rules on these devices can be a bit more complex.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Ken Roach, the 1:1 NAT feature on these devices does not have any TCP port or protocol-specific filters, allowing RSLinx, IGMP PING, and VNC to function the same. While it is commonly known that "NAT is not routing," the user manual for the 1783-NATR (page 46) indicates the importance of matching the Default Gateway for devices on the Private side with the NATR module's Private Network IP address. This configuration enables successful Pings and communication between the PLC and HMI. However, issues arise when attempting to use VNC or download to the HMI over the NATR from the Plant LAN to the Private Network. Despite the Ping functioning well, the software does not connect and prompts to check IP addresses and connections. Therefore, I temporarily relocated the HMI to the Plant LAN to proceed without interruptions. The inconsistent functionality is puzzling, as I expected it to either work entirely or not at all. Additionally, I discovered that configuring a rule on the NATR to monitor a Plant LAN IP address results in an IP conflict when a device with that address is present on the Plant LAN, even if not physically connected to the private network. This situation is quite intriguing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been quite some time since I last worked with a 1783-NATR router, but have you attempted configuring a custom rule to allow Port 5900 (VNC) through the web interface NAT settings?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KuulKuum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering similar issues with a newly installed machine on our floor, I found it easy to access AB equipment through the NATR. However, I faced difficulties with the Cognex cameras, MyCloud NAS, and other devices we needed to connect with. While I could ping everything, establishing a connection was a challenge. Upon realizing a discrepancy in the web interface from the manual, I discovered the option to create custom rules for each connection, allowing me to open the necessary TCP and UDP ports. Despite this, the Cognex Cameras required more than the 5 ports allowed, hindering complete access. However, I did manage to access their web page. The screenshots I provided were obtained from the Network Address Translation tab in the Device Manager Web-Interface. This issue seems to be specific to Product Revision 1.005 Build 50. To identify the ports in use, I utilized WireShark, uncovering common ones like port 80 for web interface, as well as undocumented ones for different operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my VNC viewer unable to connect to the HMI through the NAT module despite successful connections on other fronts?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to specific VNC viewer settings, firewall configurations, or port forwarding rules within the NAT module that may need adjustment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot VNC connectivity issues over a NAT module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot VNC connectivity problems, you can start by checking the VNC viewer settings, verifying firewall rules, ensuring proper port forwarding is configured in the NAT module, and confirming that the HMI is accessible within the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a specific configuration required to enable VNC viewer access through a NAT module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, to enable VNC viewer access through a NAT module, you may need to set up appropriate port forwarding rules in the NAT device to forward incoming VNC traffic to the internal IP address of the HMI on the machine network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Can successful communication between devices over a NAT module indicate that the VNC connectivity issue is not related to network setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While successful communication between devices over a NAT module is a positive sign, specific VNC-related configurations such as port settings, network protocols, or authentication methods could still be causing the VNC viewer connectivity problem.</p>
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
