
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, we are currently working with Rockwell FlexIO ethernet modules (5094-AEN2TR) and are attempting to assign a specific static IP address. The module allows for adjustment of the fourth octet using rotary dials, making it easy to set an IP like 192.168.1.xxx, where xxx corresponds to the dial setting.">
    <meta name="keywords" content="rockwell flexio, ethernet modules, 5094-aen2tr, static ip, set static ip, ip address, configure ip address, rotary dials, bootp method, bootp protocol, mac address, led blinking, command timeout">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-static-ip-on-rockwell-flexio-ethernet-modules-5094-aen2tr">
    <title>How to Set Static IP on Rockwell FlexIO Ethernet Modules (5094-AEN2TR) | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set Static IP on Rockwell FlexIO Ethernet Modules (5094-AEN2TR) | Oxmaint Community">
    <meta property="og:description" content="Hello, we are currently working with Rockwell FlexIO ethernet modules (5094-AEN2TR) and are attempting to assign a specific static IP address. The module allows for adjustment of the fourth octet using rotary dials, making it easy to set an IP like 192.168.1.xxx, where xxx corresponds to the dial setting.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-static-ip-on-rockwell-flexio-ethernet-modules-5094-aen2tr">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Static IP on Rockwell FlexIO Ethernet Modules (5094-AEN2TR) | Oxmaint Community">
    <meta name="twitter:description" content="Hello, we are currently working with Rockwell FlexIO ethernet modules (5094-AEN2TR) and are attempting to assign a specific static IP address. The module allows for adjustment of the fourth octet using rotary dials, making it easy to set an IP like 192.168.1.xxx, where xxx corresponds to the dial setting.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-static-ip-on-rockwell-flexio-ethernet-modules-5094-aen2tr"
      },
      "headline": "How to Set Static IP on Rockwell FlexIO Ethernet Modules (5094-AEN2TR)",
      "description": "Hello, we are currently working with Rockwell FlexIO ethernet modules (5094-AEN2TR) and are attempting to assign a specific static IP address. The module allows for adjustment of the fourth octet using rotary dials, making it easy to set an IP like 192.168.1.xxx, where xxx corresponds to the dial setting.",
      "author": {
        "@type": "Person",
        "name": "slick_william"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-04",
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
                <h1 class="text-white">How to Set Static IP on Rockwell FlexIO Ethernet Modules (5094-AEN2TR)</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">666</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">348</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, we are currently working with Rockwell FlexIO ethernet modules (5094-AEN2TR) and are attempting to assign a specific static IP address. The module allows for adjustment of the fourth octet using rotary dials, making it easy to set an IP like 192.168.1.xxx, where xxx corresponds to the dial setting. However, we require an IP address within a different range, such as 172.xxx.xxx.xxx, and are exploring alternative methods to configure the IP.

We have experimented with the BOOTP method, but encountered difficulties. By setting the rotary dials to 999 (BOOTP mode), connecting a computer to the ethernet module via an ethernet cable, running the BOOTP protocol, and power cycling the module while periodically restarting BOOTP for communication, we managed to display the MAC address. However, attempts to write the IP command to the module resulted in the LED blinking and the command timing out, preventing the IP address from being set successfully.

Is there a simpler approach to assigning a static IP to these modules? We attempted configuring the IP online with the address 192.168.1.xxx, but the rotary dial settings took priority and the IP was not retained. Additionally, the absence of a USB port limits our options. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you sure your computer's network interface card (NIC) is configured for the desired subnet, such as 172.xxx.xx.xx? Also, make sure you are using the correct version of the EtherNet/IP commissioning tool. The 5069-AENTR installation instructions recommend using version 3.02 or later. In the past, I have encountered issues with the BOOTP/DHCP tool failing to disable BOOTP/DHCP, but I have always been able to assign addresses successfully as long as there are no conflicts with firewalls or VPNs. Make sure there are no routers, access points, or other devices on the network that may be assigning IP addresses before the utility can.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Once you have connected to the internet using the IP address 192.168.1.xxx and configured the necessary settings, adjust the dials to a number above 254, as well as different values for 999 and 888.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User slick_william inquired about a simpler method to configure a static IP on a specific device. Explore our extensive range of SIM-IPE Allen-Bradley Ethernet IP Pro Address Explorer tools equipped with DHCP and Bootp server capabilities, ideal for PLC systems and industrial automation. Find all your PLC cables, trainers, and automation supplies at plccable.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach inquired about the settings for the computer NIC for a specific subnet (172.xxx.xx.xx) and which version of the EtherNet/IP commissioning tool is being utilized. According to the 5069-AENTR installation instructions, a version of 3.02 or later is recommended. Troubles have been encountered in the past with the BOOTP/DHCP tool failing to disable BOOTP/DCHP, but address assignment has been successful when firewall or VPN issues are not present. It is important to ensure that no other devices on the network are providing IP addresses before the utility can respond. The issue with Bootp disabling bootp after IP assignment occurs when the controller takes ownership immediately in an IO configuration, making it impossible to disable bootp or linx. To resolve this, the module must be opened in the project online, the connection inhibited, and the IP set to static in the internet properties of the module in Studio. A fail-proof procedure is outlined as follows: Bootp until IP assignment appears, go online with the PLC, open properties, inhibit connections, set internet connections to static, remove inhibition, and complete. If a controller is not yet online with the module in its IO tree, simply disable bootp and set to static by right-clicking on the module in rslinx, selecting module configuration, internet protocol, and setting to static. It is crucial to match the IP octets of the device being set with the laptop or PC IP with bootp enabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having difficulty configuring IP addresses? One solution is to temporarily set the IP address to 192.168.1.1 by dialing 001. Ensure your laptop is within the same range, then access the module via a web browser. From there, customize the IP address to your desired one and disable BootP. While a bit time-consuming, this method has proven effective in resolving IP address issues. Cheers, Mark.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MarkNightingale</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After adjusting the gateway address to include a valid last octet of .1, we successfully resolved the issue.  The previous address provided was invalid and had a zero in the last octet. Thank you to everyone for your guidance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Last week, I encountered a connectivity issue with a Siemens WiFi Access Point regarding subnet CIDR notation. While it accepted "192.168.1.1/24," it wouldn't recognize "192.168.1.0/24." Thank you for sharing your resolution, it was greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up your devices for BOOTP, ensure that the ethernet adapter on your laptop is the only active adapter. If the wireless connection to the plant's Wi-Fi is enabled, it can complicate the setup process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can the Rockwell FlexIO ethernet modules (5094-AEN2TR) support setting a static IP address outside the 192.168.1.xxx range using the rotary dials?</h4>
<p class='text-muted'><strong>Answer:</strong> The module's rotary dials allow adjustment of the fourth octet for IPs within the 192.168.1.xxx range, making it challenging to set IPs in different ranges like 172.xxx.xxx.xxx.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What alternative method can be used to configure a static IP address on the Rockwell FlexIO ethernet modules if the rotary dial settings are limited to a specific IP range?</h4>
<p class='text-muted'><strong>Answer:</strong> One alternative method is to try using the BOOTP protocol, but users may encounter difficulties in writing the IP command to the module and setting the desired IP address successfully.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can the BOOTP method be used to set a static IP on the Rockwell FlexIO ethernet modules (5094-AEN2TR)?</h4>
<p class='text-muted'><strong>Answer:</strong> To attempt setting a static IP using BOOTP, users can set the rotary dials to 999 (BOOTP mode), connect a computer to the module, run the BOOTP protocol, and power cycle the module while ensuring proper communication. However, issues such as LED blinking and command timing out may prevent successful IP configuration.</p>
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
