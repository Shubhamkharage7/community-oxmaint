
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good afternoon! Below is the network diagram detailing the configuration of the supervisor on the en2tr module. The Stratix is currently operating in RSTP mode, causing it to block one of the Gi1/2 ports on a line with Multiport Automation Device roles. When I activate the first supervisor on">
    <meta name="keywords" content="network configuration, troubleshooting, stratix 5700, en2tr supervisor, rstp mode, gi1/2 ports, multiport automation device roles, supervisor module, backplane addresses, fiber optic lines, plc connections, rslinx">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-network-configuration-with-stratix-5700-and-en2tr-supervisor">
    <title>Troubleshooting Network Configuration with Stratix 5700 and EN2TR Supervisor | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Network Configuration with Stratix 5700 and EN2TR Supervisor | Oxmaint Community">
    <meta property="og:description" content="Good afternoon! Below is the network diagram detailing the configuration of the supervisor on the en2tr module. The Stratix is currently operating in RSTP mode, causing it to block one of the Gi1/2 ports on a line with Multiport Automation Device roles. When I activate the first supervisor on">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-network-configuration-with-stratix-5700-and-en2tr-supervisor">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Network Configuration with Stratix 5700 and EN2TR Supervisor | Oxmaint Community">
    <meta name="twitter:description" content="Good afternoon! Below is the network diagram detailing the configuration of the supervisor on the en2tr module. The Stratix is currently operating in RSTP mode, causing it to block one of the Gi1/2 ports on a line with Multiport Automation Device roles. When I activate the first supervisor on">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-network-configuration-with-stratix-5700-and-en2tr-supervisor"
      },
      "headline": "Troubleshooting Network Configuration with Stratix 5700 and EN2TR Supervisor",
      "description": "Good afternoon! Below is the network diagram detailing the configuration of the supervisor on the en2tr module. The Stratix is currently operating in RSTP mode, causing it to block one of the Gi1/2 ports on a line with Multiport Automation Device roles. When I activate the first supervisor on",
      "author": {
        "@type": "Person",
        "name": "desa"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-23",
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
                <h1 class="text-white">Troubleshooting Network Configuration with Stratix 5700 and EN2TR Supervisor</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>desa</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">744</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">288</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good afternoon! Below is the network diagram detailing the configuration of the supervisor on the en2tr module. The Stratix is currently operating in RSTP mode, causing it to block one of the Gi1/2 ports on a line with Multiport Automation Device roles. When I activate the first supervisor on the en2tr module, I can only access backplane addresses within the same cabinet, not those in other locations connected via fiber optic lines. Despite both PLC and RSLinx connections being established, I am unable to view backplanes from other cabinets. Time synchronization is temporarily disabled, and the speed is consistently set to 100 across all devices. What could be causing this issue? Any insights would be greatly appreciated. Thanks!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to note that Spanning Tree and DLR cannot be combined on the same network ring. All ports on a Stratix switch involved in DLR must be correctly configured for DLR and Smartport to work effectively with a Multiport Automation device, using access port single VLAN. Additionally, it is advisable to use Fiber for switch-to-switch connections, requiring SFPs that support 100Mb speeds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn mentioned the importance of not mixing Spanning Tree Protocol (STP) and Device Level Ring (DLR) on the same network ring. All ports on Stratix involved in DLR must be properly configured as DLR and Smartports set for a Multiport Automation device, with access port single VLAN settings. Additionally, it is assumed that the switch to switch connections are via Fiber, requiring 100Mb SFPs.

After implementing these configurations, a successful setup was achieved, although there was a discrepancy in identifying the network as DLR. Furthermore, an issue was encountered where the Cisco device became disconnected from the Stratix switch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>desa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your Cisco is disconnected despite appearing as a regular ring, there may be a separate underlying issue. This could be due to multiple pathways leading to a distribution point that necessitates a redundant gateway.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Contr_Conn, it appears that your ring is displaying as a typical ring structure, which could be why your Cisco device is disconnected. This issue may stem from a separate underlying problem, such as multiple pathways to a distribution point necessitating a redundant gateway. Thank you for the clarification and insight provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>desa</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the Stratix 5700 blocking one of the Gi1/2 ports on a line with Multiport Automation Device roles in RSTP mode?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Stratix 5700 may be blocking one of the Gi1/2 ports due to a configuration issue or a network loop. Check the RSTP configuration settings and ensure there are no loops in the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why can I only access backplane addresses within the same cabinet when activating the first supervisor on the en2tr module?</h4>
<p class='text-muted'><strong>Answer:</strong> - The limitation to access backplane addresses in other locations connected via fiber optic lines could be due to network routing or VLAN configuration issues. Verify the network routing setup and VLAN configurations to ensure proper communication across locations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Despite established PLC and RSLinx connections, why am I unable to view backplanes from other cabinets?</h4>
<p class='text-muted'><strong>Answer:</strong> - The inability to view backplanes from other cabinets despite established connections could indicate a network segmentation issue or firewall restrictions. Check the network segmentation settings and firewall rules to enable communication between cabinets.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What could be causing the issue if time synchronization is temporarily disabled and the speed is consistently set to 100 across all devices?</h4>
<p class='text-muted'><strong>Answer:</strong> - Disabling time synchronization and maintaining consistent speed settings across devices should not directly impact the ability to view backplanes from other locations. Consider checking for IP address conflicts, subnetting issues, or routing problems that may be affecting cross-cabinet communication.</p>
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
