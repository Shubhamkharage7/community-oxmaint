
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I often struggle with communication procedures, but luckily Keyence has provided me with the BT-A700 Wireless Scanner, an Android-based scanner that connects via Wifi and has a private APP called KeyCP. This APP allows me to scan and automatically send data through TCP/IP or Ethernet TCP/IP. To">
    <meta name="keywords" content="keyence bt-a700, wireless scanner, compactlogix plc, keycp app, tcp/ip communication, ethernet/ip, ip address parameters, port configuration, ocr text scanning, plc tag transfer, router setup, red lion gateway, keyence iv">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-keyence-bt-a700-wireless-scanner-to-compactlogix-plc">
    <title>How to Connect Keyence BT-A700 Wireless Scanner to CompactLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect Keyence BT-A700 Wireless Scanner to CompactLogix PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I often struggle with communication procedures, but luckily Keyence has provided me with the BT-A700 Wireless Scanner, an Android-based scanner that connects via Wifi and has a private APP called KeyCP. This APP allows me to scan and automatically send data through TCP/IP or Ethernet TCP/IP. To">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-keyence-bt-a700-wireless-scanner-to-compactlogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect Keyence BT-A700 Wireless Scanner to CompactLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I often struggle with communication procedures, but luckily Keyence has provided me with the BT-A700 Wireless Scanner, an Android-based scanner that connects via Wifi and has a private APP called KeyCP. This APP allows me to scan and automatically send data through TCP/IP or Ethernet TCP/IP. To">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-keyence-bt-a700-wireless-scanner-to-compactlogix-plc"
      },
      "headline": "How to Connect Keyence BT-A700 Wireless Scanner to CompactLogix PLC",
      "description": "Hello everyone, I often struggle with communication procedures, but luckily Keyence has provided me with the BT-A700 Wireless Scanner, an Android-based scanner that connects via Wifi and has a private APP called KeyCP. This APP allows me to scan and automatically send data through TCP/IP or Ethernet TCP/IP. To",
      "author": {
        "@type": "Person",
        "name": "PO44O"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-27",
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
                <h1 class="text-white">How to Connect Keyence BT-A700 Wireless Scanner to CompactLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PO44O</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">308</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">269</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I often struggle with communication procedures, but luckily Keyence has provided me with the BT-A700 Wireless Scanner, an Android-based scanner that connects via Wifi and has a private APP called "KeyCP." This APP allows me to scan and automatically send data through TCP/IP or Ethernet TCP/IP. To make this work with the CompactLogix, which only communicates via Ethernet/IP, I need to figure out the parameters of an IP address and port on the APP.

My goal is to scan OCR text and transfer it to a PLC tag for future use. Currently, my setup includes a router on 192.168.1.1, the PLC on 192.168.1.10 (connected to the router), the scanner on 192.168.1.101 (Wifi), and my PC on 192.168.1.252 (connected to the router).

Before considering a Red Lion gateway for conversion, I would appreciate any alternative suggestions. I have experience setting up a Keyence IV3, which used Ethernet/IP, so I know it's different from this Wireless Scanner's TCP/IP. Thank you for any insights.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Need help transferring data from your scanner to your PC? If you can successfully transfer the information to your computer, it will be a simple process to then connect it to your Programmable Logic Controller (PLC) using Python. I had planned on consulting the manual for assistance, but I'm hesitant to deal with the repercussions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder asked if you can transfer scanner information to your PC. If you are able to do so, it would be simple to then send the data from your PC to your PLC using Python. Despite having remote access to the scanner, the app appears to have restricted functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PO44O</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're interested in learning more about the "Push to Talk" software available for download on their website, be sure to check out the Manuals/Software section of the BT-A700 Series on KEYENCE America's website. This section showcases barcode readers, traceability solutions, POS systems, and inventory management tools offered by KEYENCE CORPORATION, a leading specialist in barcodes, 2D codes, and RFID technology. For more information, visit www.keyence.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder expressed interest in the "Push to Talk" software available for download on the KEYENCE America website. The software is part of the BT-A700 Series, which includes barcode readers, traceability, POS, and inventory management systems. KEYENCE CORPORATION specializes in barcodes, 2D codes, and RFID technology. It appears that the software enables radio communication between a PC and a handheld device. Visit www.keyence.com for more information and to download the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PO44O</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the software capable of receiving scanned data from the scanner? If so, is it possible to manipulate the data once it has been received, such as storing it in a file? My idea is to analyze the software with Wireshark to understand the complexity of the interface. If it simply listens for messages on a specific port, creating a solution to capture and relay the data to the PLC may not be too challenging. However, if the interface is more complex, Keyence software could potentially save the data for further manipulation before relaying it to the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I connect the Keyence BT-A700 Wireless Scanner to a CompactLogix PLC that only communicates via Ethernet/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To connect the Wireless Scanner to the CompactLogix PLC, you will need to configure the IP address and port parameters on the KeyCP app to match the network settings of your devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What setup is required to transfer OCR text scanned by the Keyence BT-A700 Wireless Scanner to a PLC tag for future use?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure that the router, PLC, scanner, and PC are on the same network with appropriate IP addresses (e.g., router on 192.168.1.1, PLC on 192.168.1.10, scanner on 192.168.1.101, and PC on 192.168.1.252) to facilitate data transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any alternative suggestions to using a Red Lion gateway for conversion between the Wireless Scanner's TCP/IP and the CompactLogix's Ethernet/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Before considering a Red Lion gateway, explore other potential solutions or configurations to bridge the communication gap between the Wireless Scanner's TCP/IP and the CompactLogix's Ethernet/IP, leveraging your existing network setup knowledge.</p>
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
