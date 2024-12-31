
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking assistance regarding an issue with my AB HMI programming. I set an IP address yesterday, but when I returned to work today, the IP address was no longer assigned to my HMI device. I followed the process of setting the IP address through Terminal setting">
    <meta name="keywords" content="panel view ip address troubleshooting, ab hmi ip address disappearing, hmi programming network connection issue, network adapters ip address problem, troubleshooting panel view subnet mask, gateway settings for panel">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-panel-view-ip-address-disappears-after-restart">
    <title>Troubleshooting Issue: Panel View IP Address Disappears After Restart | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issue: Panel View IP Address Disappears After Restart | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking assistance regarding an issue with my AB HMI programming. I set an IP address yesterday, but when I returned to work today, the IP address was no longer assigned to my HMI device. I followed the process of setting the IP address through Terminal setting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-panel-view-ip-address-disappears-after-restart">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issue: Panel View IP Address Disappears After Restart | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking assistance regarding an issue with my AB HMI programming. I set an IP address yesterday, but when I returned to work today, the IP address was no longer assigned to my HMI device. I followed the process of setting the IP address through Terminal setting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issue-panel-view-ip-address-disappears-after-restart"
      },
      "headline": "Troubleshooting Issue: Panel View IP Address Disappears After Restart",
      "description": "Hello, I am seeking assistance regarding an issue with my AB HMI programming. I set an IP address yesterday, but when I returned to work today, the IP address was no longer assigned to my HMI device. I followed the process of setting the IP address through Terminal setting",
      "author": {
        "@type": "Person",
        "name": "backendcode"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-05",
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
                <h1 class="text-white">Troubleshooting Issue: Panel View IP Address Disappears After Restart</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">10209</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">411</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello,

I am seeking assistance regarding an issue with my AB HMI programming. I set an IP address yesterday, but when I returned to work today, the IP address was no longer assigned to my HMI device. 

I followed the process of setting the IP address through Terminal setting --> Networks and communications --> Network connections --> Network adapters --> IP address --> Use DHCP (NO). After inputting the IP address, subnet mask, and gateway, I clicked OK and received a message instructing me to reset the device for the new settings to take effect. I followed these steps as shown in the image here: [link to image].

I am puzzled as to why the panel view is unable to retain the IP address. Although the assigned IP address is visible in the terminal settings, it does not appear on the main settings screen as shown in the image. Additionally, I am unable to ping the device.

I would appreciate any insights or suggestions on why this issue is occurring. Thank you for your help.
Best regards,</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To implement the new settings effectively, it is recommended to reset the device. When resetting, ensure that you used a menu function rather than just cycling power. Verify that the IP address, Subnet Mask, and Default Gateway are all compatible and on the same logical subnet. If you used a menu for the reset, make sure it reset the terminal settings to default. If there was an issue with incompatible IP/Subnet/Gateway settings, the terminal may have cleared the settings for reconfiguration. While the possibility of an OS bug exists, it is unlikely in modern embedded systems. Detecting failing nonvolatile memory is rare in such systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Ken,

I successfully performed a reset using the menu button. I then tested a different Ethernet cable and was able to view the IP address. However, I noticed that when I disconnect the Ethernet cable from my PV+, the IP address disappears. Can you explain why this happens? I would expect to see the IP address of my panel view regardless of whether the Ethernet cable is connected or not. 

Thank you for your assistance and insights, they are greatly appreciated.

Best regards,</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the Ethernet cable is disconnected, it is normal for the PanelView to display 0.0.0.0 as the address does not disappear, which is a common occurrence.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder pointed out that the address does not disappear and it is normal for the PanelView to display 0.0.0.0 when the Ethernet cable is unconnected. This is something I have just realized, and I am grateful for the assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I understand it has been some time since this thread was active, but I am facing a similar issue. I have manually configured the IP address, Subnet, and Gateway, and have attempted to reset the HMI both through the screen interface and by power cycling. Despite replacing the ethernet cable and switch, the HMI is still unable to connect to the network, displaying 0.0.0.0 for both the IP address and Subnet on the main configuration screen. Could there be another aspect to investigate? Perhaps the issue lies with the ethernet port itself, as it appears misshapen and may have been damaged from the cable being pulled at a previous customer's site.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jazzy_Kazzy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the HMI is not requesting an IP address, it may be due to an issue with the Rockwell DHCP/BootP server utility. Try starting it to troubleshoot and ensure the correct IP initialization method is being assigned. After setting an IP address successfully, utilize RSLinx to establish a fixed IP address for the HMI. This will help optimize the networking configuration for seamless operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi everyone, it has been a while since this thread was started but I am facing a similar issue. I have manually configured the IP address, Subnet, and Gateway, and have tried resetting the HMI both from the screen and by power cycling. I have also replaced the ethernet cable and switch, but the HMI still cannot connect to the network and displays 0.0.0.0 for both the IP address and Subnet on the main configuration screen. Could there be any other possible solutions? I suspect it may be due to a damaged ethernet port, as I have observed that the port is misshapen and appears to have been pulled when it was at a customer's site. Jazzy, did you manage to find a resolution to this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ian K</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ian K inquired whether Jazzy was successful in resolving the issue at hand. The PanelView may show a 0.0.0.0 IP address despite having one if the network adapter is inactive. This can occur if the network cable is unplugged or if the connected switch port is inactive.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why does my Panel View's IP address disappear after a restart?</h4>
<p class='text-muted'><strong>Answer:</strong> - The IP address disappearing issue can occur if the device is set to use DHCP (Dynamic Host Configuration Protocol), causing it to obtain a new IP address from the network upon restart. Ensure that DHCP is disabled and a static IP address is correctly configured in the device settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the assigned IP address not appearing on the main settings screen of my Panel View?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the assigned IP address is visible in the terminal settings but not on the main settings screen, there may be a display or configuration issue. Try restarting the device or checking for any software updates that may address this discrepancy.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why am I unable to ping my Panel View device after setting a static IP address?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are unable to ping the Panel View device after setting a static IP address, there may be a network connectivity issue. Verify that the IP address, subnet mask, and gateway are correctly configured and that there are no network conflicts or firewall restrictions preventing communication with the device.</p>
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
