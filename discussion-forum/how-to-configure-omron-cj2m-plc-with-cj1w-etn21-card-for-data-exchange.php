
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am seeking guidance on the configuration of the following setup: CJ2M PLC with the IP address 192.168.10.01 and subnet mask 255.255.255.0, along with ETN21 with the IP address 192.168.20.1 and subnet mask 255.255.255.0. The PLC is tasked with gathering tag data from the 192.168.10.XXX network and">
    <meta name="keywords" content="omron cj2m plc, cj1w-etn21 card, data exchange, configuration, ip address, subnet mask, tag data, network, transmission, receive instructions, setup, data transfer, plc configuration, omron plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-configure-omron-cj2m-plc-with-cj1w-etn21-card-for-data-exchange">
    <title>How to Configure Omron CJ2M PLC with CJ1W-ETN21 Card for Data Exchange | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Configure Omron CJ2M PLC with CJ1W-ETN21 Card for Data Exchange | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am seeking guidance on the configuration of the following setup: CJ2M PLC with the IP address 192.168.10.01 and subnet mask 255.255.255.0, along with ETN21 with the IP address 192.168.20.1 and subnet mask 255.255.255.0. The PLC is tasked with gathering tag data from the 192.168.10.XXX network and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-configure-omron-cj2m-plc-with-cj1w-etn21-card-for-data-exchange">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Configure Omron CJ2M PLC with CJ1W-ETN21 Card for Data Exchange | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am seeking guidance on the configuration of the following setup: CJ2M PLC with the IP address 192.168.10.01 and subnet mask 255.255.255.0, along with ETN21 with the IP address 192.168.20.1 and subnet mask 255.255.255.0. The PLC is tasked with gathering tag data from the 192.168.10.XXX network and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-configure-omron-cj2m-plc-with-cj1w-etn21-card-for-data-exchange"
      },
      "headline": "How to Configure Omron CJ2M PLC with CJ1W-ETN21 Card for Data Exchange",
      "description": "Hello everyone, I am seeking guidance on the configuration of the following setup: CJ2M PLC with the IP address 192.168.10.01 and subnet mask 255.255.255.0, along with ETN21 with the IP address 192.168.20.1 and subnet mask 255.255.255.0. The PLC is tasked with gathering tag data from the 192.168.10.XXX network and",
      "author": {
        "@type": "Person",
        "name": "Jothiswarup"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">How to Configure Omron CJ2M PLC with CJ1W-ETN21 Card for Data Exchange</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jothiswarup</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2088</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">461</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am seeking guidance on the configuration of the following setup: CJ2M PLC with the IP address 192.168.10.01 and subnet mask 255.255.255.0, along with ETN21 with the IP address 192.168.20.1 and subnet mask 255.255.255.0. The PLC is tasked with gathering tag data from the 192.168.10.XXX network and transmitting/receiving it to the 192.168.20.XXX network. How should I set up the send and receive instructions for this data exchange? Your assistance is greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about setup advice for PLC network configuration, Jothiswarup seeks assistance in setting up communication between a CJ2M PLC with IP address 192.168.10.01 (Subnet: 255.255.255.0) and an ETN21 device with IP address 192.168.20.1 (Subnet: 255.255.255.0). The PLC needs to transfer data between the 192.168.10.XXX and 192.168.20.XXX networks. How should the send and receive instructions be configured in this scenario? It is important to determine if they are on the same LAN or if gateways need to be configured. Additionally, consideration should be given to whether this involves Ethernet/IP routing similar to TCP/IP.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For better understanding, it's recommended that you consult the W420 manual, particularly the section on IP addressing and networking. Make sure to take advantage of the support provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gtsuport</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the response. I have successfully implemented the RECV function. However, I am facing a challenge with the unit number setting on my CJ2M PLC. The RECV function for both the CJ2M and the Omron FB for MODBUS TCP via ETN21 requires the unit number to be set to 0. If I were to set the unit number to 1 on the CJ2M, how can I ensure that the RECV function still works effectively?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jothiswarup</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This thread can be marked as closed as I have successfully implemented the instructions. Appreciate the assistance. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jothiswarup</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jothiswarup mentioned that the thread can be closed as they were able to successfully implement the instructions. Thank you for your assistance. I also encountered the same issue, could you provide some guidance on how to resolve it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>akuntester</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, in the setup, CJ2M was located at unit 0 within the same network as other PLCs and utilized the RECV instruction. On the other hand, ETN21 was on a separate network and employed the MTCP_ETN_Server function block. A routing table was established to configure the different networks. In cases where communication is needed between two Omron PLCs, there is specialized software that facilitates FINS transfer between tags without requiring the use of SEND/RECV instructions. Unfortunately, the exact name of the software escapes me at the moment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jothiswarup</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How do I configure the Omron CJ2M PLC with CJ1W-ETN21 Card for data exchange between different IP networks?
   - To configure the data exchange between different IP networks using a CJ2M PLC and CJ1W-ETN21 Card, you need to set up the IP addresses and subnet masks correctly for both devices. Ensure the PLC is set to gather tag data from one network and transmit/receive it to the other network using appropriate send and receive instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What IP address and subnet mask should be assigned to the CJ2M PLC and CJ1W-ETN21 Card in this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - In the provided setup, the CJ2M PLC should be assigned the IP address 192.168.10.01 with subnet mask 255.255.255.0, while the ETN21 should have the IP address 192.168.20.1 with the same subnet mask.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I configure the send and receive instructions on the CJ2M PLC for data exchange between networks?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure the send and receive instructions on the CJ2M PLC, you need to use the appropriate networking functions provided by Omron. Consult the PLC programming manual for details on setting up communication between different networks using the CJ1W-ETN21 Card.</p>
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
