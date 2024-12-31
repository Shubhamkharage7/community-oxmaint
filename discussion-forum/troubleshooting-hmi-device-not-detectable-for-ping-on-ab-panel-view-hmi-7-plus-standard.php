
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our AB Panel View HMI 7 Plus Standard is facing an issue where it cannot be pinged through the CMD prompt, while all other devices in the series can be successfully pinged. The IP address is displayed on the screen and in the RS Logix Network, but the HMI">
    <meta name="keywords" content="hmi device, ab panel view, hmi troubleshooting, ping issue, hmi not detectable, ip address problem, rs logix network, dhcp off, subnet gateway, hmi settings, ip ping access, resolve issue, troubleshooting guide">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-device-not-detectable-for-ping-on-ab-panel-view-hmi-7-plus-standard">
    <title>Troubleshooting: HMI Device Not Detectable for Ping on AB Panel View HMI 7 Plus Standard | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting: HMI Device Not Detectable for Ping on AB Panel View HMI 7 Plus Standard | Oxmaint Community">
    <meta property="og:description" content="Our AB Panel View HMI 7 Plus Standard is facing an issue where it cannot be pinged through the CMD prompt, while all other devices in the series can be successfully pinged. The IP address is displayed on the screen and in the RS Logix Network, but the HMI">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-device-not-detectable-for-ping-on-ab-panel-view-hmi-7-plus-standard">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting: HMI Device Not Detectable for Ping on AB Panel View HMI 7 Plus Standard | Oxmaint Community">
    <meta name="twitter:description" content="Our AB Panel View HMI 7 Plus Standard is facing an issue where it cannot be pinged through the CMD prompt, while all other devices in the series can be successfully pinged. The IP address is displayed on the screen and in the RS Logix Network, but the HMI">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-device-not-detectable-for-ping-on-ab-panel-view-hmi-7-plus-standard"
      },
      "headline": "Troubleshooting: HMI Device Not Detectable for Ping on AB Panel View HMI 7 Plus Standard",
      "description": "Our AB Panel View HMI 7 Plus Standard is facing an issue where it cannot be pinged through the CMD prompt, while all other devices in the series can be successfully pinged. The IP address is displayed on the screen and in the RS Logix Network, but the HMI",
      "author": {
        "@type": "Person",
        "name": "Digvijay J"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Troubleshooting: HMI Device Not Detectable for Ping on AB Panel View HMI 7 Plus Standard</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Digvijay J</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">261</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">122</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our AB Panel View HMI 7 Plus Standard is facing an issue where it cannot be pinged through the CMD prompt, while all other devices in the series can be successfully pinged. The IP address is displayed on the screen and in the RS Logix Network, but the HMI device is not being detected. DHCP is turned off and the IP, subnet, and gateway are correctly entered. If you know of any settings to enable HMI IP ping access or how to resolve this issue, please refer to the screenshot below:

[Include screenshot image here]

The IP detection results are as follows:
- 10.194.68.67 PLC: detected
- 10.194.68.69 HMI: not detected
- 10.194.68.72 Valve bank: detected

If you have any insights or solutions to this problem, please let us know. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in need of more information about setting up a new HMI system or troubleshooting an existing one that has lost communication? Have you attempted a direct connection between your workstation and the HMI, or are you utilizing a managed switch?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the physical connection between the HMI and your network? How about the PLC and your Laptop? Are you able to view the PanelView in RSLinx? Do you see a link or activity light on the PanelView Plus Ethernet port?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up a new Series B HMI, the default setting disables the ping response, which prevents pinging to a Panelview Plus 7 HMI. However, FT Linx is still functional for communication. To enable the ping response on a Panelview Plus Series B HMI, refer to page 151 of the user manual, which can be found at the following link: https://literature.rockwellautomation.com/idc/groups/literature/documents/um/2711p-um008_-en-p.pdf. This will allow for ICMP (Ping) communication to the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Picklemon</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have the PanelView Plus 7 (PVP7) in its "Standard" version, there is currently no option to toggle ping support on or off. However, this feature may be added in the future. The device is powered by the Windows CE 6.0 operating system.

There is also a "Performance" version of the PVP7. Starting with the Series B release, this version utilizes Windows IOT as its base operating system, specifically Windows 10 IOT Core. Unlike the Standard version, the "Performance" model does offer the option to enable or disable ping support, with support disabled by default.

If you are using the Performance edition, you can follow the instructions provided in a previous post to configure ping support. For users of the Standard edition, if ping support is not working, the issue may lie in the switch settings. It is possible that Rockwell will release an update in the future to switch the PanelView Standard terminals to Windows IOT, like the Performance models, but for now, they still run on Windows CE.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the correction OG. It seems like my reading skills are failing me today.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Picklemon</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>No need to worry. The issue mentioned by the original poster aligns perfectly with the suggestion you made for a possible solution. OG</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method to check the network connectivity of a PanelView Plus is by utilizing the Windows PowerShell "Test-NetConnection" command on TCP Port 44818. Even if ICMP PING is turned off, the PanelView Plus will still permit a TCP connection on that port. Alternatively, you can send an EtherNet/IP broadcast for "List Identity" for a more in-depth network analysis. This approach provides a comprehensive way to troubleshoot connectivity issues on PanelView Plus devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my AB Panel View HMI 7 Plus Standard not detectable for ping on the network?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There could be various reasons for this issue, such as incorrect network settings, firewall restrictions, or HMI-specific configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the problem of my HMI device not being pingable despite correct IP settings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start troubleshooting by verifying the IP address, subnet mask, and gateway configuration on the HMI device, checking for any firewall restrictions, and ensuring that the network settings are correctly configured.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take to enable HMI IP ping access on my AB Panel View HMI 7 Plus Standard?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To enable HMI IP ping access, you may need to check the network settings, ensure that the correct IP address is assigned, and troubleshoot any connectivity issues that may be preventing the device from being detected on the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I resolve the issue of my HMI device not being detected for ping while other devices in the series are pingable?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try resetting the network settings on the HMI device, checking for any conflicting IP addresses, verifying the network configuration with the manufacturer's guidelines, and consulting technical support for further assistance.</p>
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
