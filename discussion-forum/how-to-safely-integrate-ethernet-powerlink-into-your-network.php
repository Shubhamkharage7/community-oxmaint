
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have inherited a system that utilizes a Parker ACR9000 motion controller with the Ethernet PowerLink option to control five Parker Compax3 servo drives. Each device is equipped with a two-port Ethernet PowerLink option board, currently set up in a simple daisy chain configuration. The ACR9000 communicates with ACR-View">
    <meta name="keywords" content="ethernet powerlink integration, parker acr9000 motion controller, parker compax3 servo drives, ethernet powerlink configuration, daisy chain setup, acr-view 6 software, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-safely-integrate-ethernet-powerlink-into-your-network">
    <title>How to Safely Integrate Ethernet PowerLink into Your Network | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Safely Integrate Ethernet PowerLink into Your Network | Oxmaint Community">
    <meta property="og:description" content="I have inherited a system that utilizes a Parker ACR9000 motion controller with the Ethernet PowerLink option to control five Parker Compax3 servo drives. Each device is equipped with a two-port Ethernet PowerLink option board, currently set up in a simple daisy chain configuration. The ACR9000 communicates with ACR-View">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-safely-integrate-ethernet-powerlink-into-your-network">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Safely Integrate Ethernet PowerLink into Your Network | Oxmaint Community">
    <meta name="twitter:description" content="I have inherited a system that utilizes a Parker ACR9000 motion controller with the Ethernet PowerLink option to control five Parker Compax3 servo drives. Each device is equipped with a two-port Ethernet PowerLink option board, currently set up in a simple daisy chain configuration. The ACR9000 communicates with ACR-View">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-safely-integrate-ethernet-powerlink-into-your-network"
      },
      "headline": "How to Safely Integrate Ethernet PowerLink into Your Network",
      "description": "I have inherited a system that utilizes a Parker ACR9000 motion controller with the Ethernet PowerLink option to control five Parker Compax3 servo drives. Each device is equipped with a two-port Ethernet PowerLink option board, currently set up in a simple daisy chain configuration. The ACR9000 communicates with ACR-View",
      "author": {
        "@type": "Person",
        "name": "Ken Roach"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-26",
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
                <h1 class="text-white">How to Safely Integrate Ethernet PowerLink into Your Network</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">338</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">57</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have inherited a system that utilizes a Parker ACR9000 motion controller with the Ethernet PowerLink option to control five Parker Compax3 servo drives. Each device is equipped with a two-port Ethernet PowerLink option board, currently set up in a simple "daisy chain" configuration. The ACR9000 communicates with ACR-View 6 software and a custom Windows application via a separate Ethernet port connected to an unmanaged switch.

While the Compax3 can communicate over Ethernet PowerLink and TCP/IP through the EPL port on TCP ports 44821 and 44822, as well as RS-232 and RS-485 on its serial port, I have limited experience with Ethernet PowerLink. It is known for being fast and easy, operating similar to CANOpen over Ethernet, and compatible with ordinary Ethernet switches.

However, my concern lies in the potential impact on my network if I connect the Ethernet PowerLink daisy-chain to the unmanaged switch. Will this result in Ethernet PowerLink frames congesting the network for normal Ethernet TCP/IP devices and PLCs? Is a "gateway" necessary to separate the real-time traffic from the LAN? Would a switch with VLAN routing suffice, and does Ethernet PowerLink support VLAN tags?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have previously utilized Hischler gateways with older Parker servos, although it has been quite some time. If you're in need of a gateway, Anybus offers a solution. The Anybus Ethernet Powerlink 2023 provides seamless integration with various fieldbus and Industrial Ethernet networks. This gateway also comes equipped with integrated Powerlink connectivity through Anybus CompactCom. For more information and to explore your options, visit www.anybus.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Based on my observations of B&R Powerlink, all Powerlink devices operate within the 192.168.100.xx network. The unit number on each device corresponds to the host number in the IP address. Since Powerlink uses a broadcast protocol, it is recommended to separate it from your main network. Setting up a NAT router and using 1:1 mappings can help isolate the broadcast traffic and enable TCP/IP access to the individual devices. Consider this approach to enhance network security and efficiency for your Powerlink devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Ken, I wanted to share with you the specifications for Ethernet Powerlink. Here's a link for you to check out: Powerlink specification for Ethernet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone! When I read the specifications and white papers, it reminds me of the challenge of transitioning from DH+ and Modbus Plus to Ethernet. I am particularly concerned about having raw Ethernet frames on my switch, not only for its switching speed but also for the potential impact on the customer PC and my HMI. I wonder if your average PLC or HMI device can handle a PowerLink network. It seems like those writing specifications and whitepapers are hesitant to provide clear guidance on what can be connected to the EPL network. 

To address this challenge, I plan to install a Red Lion DA50D, which features two separate, isolated Ethernet ports. This setup will allow me to connect one port to the customer PC and ACR9000's programming port, while the other connects to the EPL network containing the Compax3's. For testing purposes, I will utilize a Red Lion DSPSX and my PC's NIC by connecting them to the daisy-chain of the EPL network. I am eager to see how they perform in this setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Confirmation has been received that an EPL network typically operates with TCP/IP on the 192.168.100.x subnet, with the host number representing the PowerLink node. This highlights the necessity for a router, bridge, or NAT device to facilitate communication between these networks. This is crucial as my enterprise connection utilizes the 192.168.10.x subnet, with addresses that are unfortunately hard-coded into compiled executables.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Will integrating Ethernet PowerLink into my network cause congestion for other devices?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Integrating Ethernet PowerLink into your network may congest the network for normal Ethernet TCP/IP devices and PLCs. Consider separating real-time traffic from the LAN using a gateway or a switch with VLAN routing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is a "gateway" required to separate Ethernet PowerLink traffic from regular LAN traffic?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using a gateway can help separate real-time Ethernet PowerLink traffic from the LAN, ensuring smoother communication and reducing congestion for other devices on the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can VLAN routing on a switch help manage Ethernet PowerLink integration?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using a switch with VLAN routing capabilities can assist in managing Ethernet PowerLink integration by segregating traffic and ensuring efficient communication. Consider checking if Ethernet PowerLink supports VLAN tags for better network organization.</p>
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
