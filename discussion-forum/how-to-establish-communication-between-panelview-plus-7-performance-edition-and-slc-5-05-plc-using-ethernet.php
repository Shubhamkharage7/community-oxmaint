
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is it possible for a PVP7 to communicate with an SLC 5/05 PLC? I am encountering difficulties establishing communication between the two devices. While I have successfully set up PVPs with Control and Compact Logix systems in the past, I am struggling to make these two devices talk to">
    <meta name="keywords" content="panelview plus 7 performance edition, slc 5/05 plc, ethernet communication, pvp7 and slc 5/05 compatibility, establish communication between pvp7 and">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-establish-communication-between-panelview-plus-7-performance-edition-and-slc-5-05-plc-using-ethernet">
    <title>How to Establish Communication Between PanelView Plus 7 Performance Edition and SLC 5/05 PLC Using Ethernet? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Establish Communication Between PanelView Plus 7 Performance Edition and SLC 5/05 PLC Using Ethernet? | Oxmaint Community">
    <meta property="og:description" content="Is it possible for a PVP7 to communicate with an SLC 5/05 PLC? I am encountering difficulties establishing communication between the two devices. While I have successfully set up PVPs with Control and Compact Logix systems in the past, I am struggling to make these two devices talk to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-establish-communication-between-panelview-plus-7-performance-edition-and-slc-5-05-plc-using-ethernet">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Establish Communication Between PanelView Plus 7 Performance Edition and SLC 5/05 PLC Using Ethernet? | Oxmaint Community">
    <meta name="twitter:description" content="Is it possible for a PVP7 to communicate with an SLC 5/05 PLC? I am encountering difficulties establishing communication between the two devices. While I have successfully set up PVPs with Control and Compact Logix systems in the past, I am struggling to make these two devices talk to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-establish-communication-between-panelview-plus-7-performance-edition-and-slc-5-05-plc-using-ethernet"
      },
      "headline": "How to Establish Communication Between PanelView Plus 7 Performance Edition and SLC 5/05 PLC Using Ethernet?",
      "description": "Is it possible for a PVP7 to communicate with an SLC 5/05 PLC? I am encountering difficulties establishing communication between the two devices. While I have successfully set up PVPs with Control and Compact Logix systems in the past, I am struggling to make these two devices talk to",
      "author": {
        "@type": "Person",
        "name": "mjggjm12"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-26",
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
                <h1 class="text-white">How to Establish Communication Between PanelView Plus 7 Performance Edition and SLC 5/05 PLC Using Ethernet?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mjggjm12</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2791</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">257</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is it possible for a PVP7 to communicate with an SLC 5/05 PLC? I am encountering difficulties establishing communication between the two devices. While I have successfully set up PVPs with Control and Compact Logix systems in the past, I am struggling to make these two devices talk to each other. Does anyone know if these devices are compatible? Any guidance on this matter would be highly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is uncertain if this is feasible, but it has been observed that 5/05 models with older firmware lack support for Ethernet IP, whereas newer versions do. This could potentially be the root of your problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reaching out to Rockwell for assistance, I realized that the issue stemmed from a discrepancy between the topic name I had set for the tag import and the runtime target shortcut name. As I am more accustomed to working with offline tag files in Logix 5000, the importance of matching names when importing the .EAS file from Logix 500 had slipped my mind.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mjggjm12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your SLC-5/05 controller is around 20 years old, it may not be compatible with PanelView Plus. The original SLC-5/05 controllers only supported A-B's proprietary Ethernet protocol known as "Client-Server Protocol version 4". However, most SLC-5/05 controllers can be firmware upgraded to support both CSPv4 and EtherNet/IP, except for the very first Series A hardware SLC-5/04 controllers (manufactured between 1993-1995). SLC-5/05 controllers with the "Series C" network daughtercard that supports 10/100 Mb/s Ethernet definitely support both CSPv4 as well. You can determine which protocol your controller supports by attempting to browse it with the "Ethernet Devices" driver and the "EtherNet/IP" driver in RSLinx Classic. If it only appears in the older Ethernet Devices driver, it is likely an older CSPv4 only controller. Additionally, you can check the Series and FRN number using RSLinx Classic by right-clicking on the device properties. Controllers with FRN5 and later support EtherNet/IP. Note: Sometimes, providing details may be delayed due to evolving events.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're trying to determine which protocol your controller supports, a good method is to test it using the "Ethernet Devices" and "EtherNet/IP" drivers in RSLinx Classic. Controllers that only appear with the older Ethernet Devices driver are likely to be older CSPv4-only models. In ControlLogix systems, some machines with eNBT cards may be visible with the Ethernet IP driver, while others may not. Those that aren't detected by the Ethernet IP driver can often be found using the Ethernet Devices driver, but you'll need to have their IP address handy. It remains unclear why certain eNBT cards don't show up in the Ethernet IP driver.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Tim, that's an excellent question! In RSLinx Classic, the "EtherNet/IP" driver utilizes a broadcast packet containing the CIP Command "List Identity" to communicate with devices. Each device receiving this packet sends back its Identity Object, which RSLinx uses to generate a graphical browse schema. On the other hand, the "Ethernet Devices" driver establishes individual TCP connections with devices in its station list.

It is expected that every 1756-ENBT device is compatible with the "EtherNet/IP" driver in RSLinx Classic. However, there may be specific configuration, network mask, VPN, or other issues that could potentially impact the driver's performance. Despite these factors, the 1756-ENBT has consistently responded to the EtherNet/IP driver browse.

Please note that older devices like the SLC-5/05 Series A or the 1756-ENET may not support the broadcast packet method and therefore will not be visible in the EtherNet/IP driver browse. Keep in mind that my knowledge is based on what I currently know, and there could be firmware nuances that I may not recall, especially on a Monday morning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently facing connectivity issues with my SLC 5/05 PLC communicating at 10/half duplex. Previously, an old serial PanelView was connected to it, but it recently failed. We replaced it with a PanelView Plus 7 connected via Ethernet at 100/full duplex. Both devices are connected to a plant-managed switch whose speeds have been verified by the network team. However, the PanelView keeps dropping and reconnecting its connection every 2-5 minutes. We encountered the same issue when using a Stratix 2000 switch to connect the PLC and PanelView to the plant network. Both the PLC and HMI have the correct gateway settings, and we have checked for duplicate IPs. Despite being visible on the network, the intermittent communication loss is causing frustration. Additionally, tags being read by a Wonderware application are also experiencing intermittency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ppezzop</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you explored the 5/05 website for troubleshooting communication issues or errors?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting connectivity issues, it is crucial to inspect the quality of the cabling. Ensure that the cables are of high quality, free from sharp bends or kinks, and isolated from high-voltage signals or sources of electrical interference. Conduct a pull test on both ends of the cable to check for reliable connectors. If needed, try using alternate cables for testing purposes. This thorough examination of the cabling will help identify and address any potential issues affecting network performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore suggested checking the May 2025 web page for communication issues, but no definitive evidence was discovered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ppezzop</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can a PanelView Plus 7 communicate with an SLC 5/05 PLC over Ethernet?</h4>
<p class='text-muted'><strong>Answer:</strong> - While PanelView Plus 7 models are typically compatible with Control and Compact Logix systems, establishing communication with an SLC 5/05 PLC may present challenges.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing difficulties in setting up communication between a PanelView Plus 7 and an SLC 5/05 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The compatibility issues between these devices could be a common reason for the communication difficulties.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there specific configuration settings or steps required to make a PanelView Plus 7 communicate with an SLC 5/05 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Given the differences in communication protocols and capabilities between the PanelView Plus 7 and SLC 5/05 PLC, there may be specific configuration settings or steps that need to be followed to establish successful communication.</p>
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
