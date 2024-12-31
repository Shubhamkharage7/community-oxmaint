
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In our efforts to integrate a new Omron PLC (NX/NS Series) with Citect / Aveva Plant SCADA, we are utilizing the Ethernet/IP CIP Protocol to access status and alarm tags from the system. Unlike our previous experience with older PLCs such as the CJ2M-CPUxx using the OMFINS3 driver and">
    <meta name="keywords" content="omron plc, nx/ns series, citect scada, ethernet/ip, io device integration, cip protocol, fins protocol, rj45 ports, ethercat, opc-ua server, omfins3 driver, schneider support, om">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-omron-nx-ns-plc-with-citect-scada-using-ethernet-ip-for-io-device-integration">
    <title>Setting up Omron NX/NS PLC with Citect SCADA using Ethernet/IP for IO Device Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up Omron NX/NS PLC with Citect SCADA using Ethernet/IP for IO Device Integration | Oxmaint Community">
    <meta property="og:description" content="In our efforts to integrate a new Omron PLC (NX/NS Series) with Citect / Aveva Plant SCADA, we are utilizing the Ethernet/IP CIP Protocol to access status and alarm tags from the system. Unlike our previous experience with older PLCs such as the CJ2M-CPUxx using the OMFINS3 driver and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-omron-nx-ns-plc-with-citect-scada-using-ethernet-ip-for-io-device-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up Omron NX/NS PLC with Citect SCADA using Ethernet/IP for IO Device Integration | Oxmaint Community">
    <meta name="twitter:description" content="In our efforts to integrate a new Omron PLC (NX/NS Series) with Citect / Aveva Plant SCADA, we are utilizing the Ethernet/IP CIP Protocol to access status and alarm tags from the system. Unlike our previous experience with older PLCs such as the CJ2M-CPUxx using the OMFINS3 driver and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-omron-nx-ns-plc-with-citect-scada-using-ethernet-ip-for-io-device-integration"
      },
      "headline": "Setting up Omron NX/NS PLC with Citect SCADA using Ethernet/IP for IO Device Integration",
      "description": "In our efforts to integrate a new Omron PLC (NX/NS Series) with Citect / Aveva Plant SCADA, we are utilizing the Ethernet/IP CIP Protocol to access status and alarm tags from the system. Unlike our previous experience with older PLCs such as the CJ2M-CPUxx using the OMFINS3 driver and",
      "author": {
        "@type": "Person",
        "name": "plcplcplcplc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Setting up Omron NX/NS PLC with Citect SCADA using Ethernet/IP for IO Device Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>plcplcplcplc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">777</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">73</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In our efforts to integrate a new Omron PLC (NX/NS Series) with Citect / Aveva Plant SCADA, we are utilizing the Ethernet/IP CIP Protocol to access status and alarm tags from the system. Unlike our previous experience with older PLCs such as the CJ2M-CPUxx using the OMFINS3 driver and FINS protocol, the new NX102-1100 OEM PLCs have FINS disabled and exclusively use Ethernet/IP CIP for tag publication to the HMI. Although the PLC unit has 3 RJ45 Ports (P1/P2 for EIP & P3 for EtherCAT), the OEM has disabled P2, the only port capable of using FINS. Despite the OPC-UA Server capability being built-in, it has also been disabled. 

After seeking support from Schneider, we were advised to continue using the OMFINS3 driver. However, there is no mention of this driver supporting the Ethernet/IP CIP protocol in the documentation. Aveva's knowledge and support center mentions a driver, OMRON 1.24, that supports Omron Ethernet/CIP, but it seems to be a Wonderware Driver rather than one for Citect. 

If the OMFINS3 driver could potentially work with EIP CIP, it is noted that name-based/tag-based addressing in OMRON NJ/NS/NX Series is not supported with Citect's current OMFINS driver offering. This might require a workaround involving address translation in Omron's Sysmac studio to convert the tags to a traditional memory register format. Unfortunately, as we are unable to modify the PLC code and only have a list of EIP tags, we are facing limitations in this integration process.

We are seeking advice or suggestions on successfully setting up these systems with Citect / Aveva Plant SCADA. Any insights or workarounds would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are unable to use port 2, FINS will not be a viable option for you. One alternative solution could be to utilize Kepware as a middleware and establish communication between Citect and Kepware using OPC. Kepware offers support for Ethernet/IP communications with the latest Omron PLC models.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Chelton! I will definitely give this a try. Let's see how it goes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plcplcplcplc</span></li>
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
<h4 class='text-dark'>FAQ: 1. Is it possible to integrate Omron NX/NS PLCs with Citect SCADA using Ethernet/IP CIP protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - Integrating Omron NX/NS PLCs with Citect SCADA using Ethernet/IP CIP protocol might pose challenges due to the differences in protocols and limitations in the PLC setup, such as disabled ports and protocols. Workarounds involving address translation may be required.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What driver should be used for integrating Omron PLCs with Citect SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the OMFINS3 driver has been suggested for use with Omron PLCs, it is important to note that the documentation does not explicitly mention support for Ethernet/IP CIP protocol. Aveva's knowledge and support center mentions a driver called OMRON 1.24 that supports Omron Ethernet/CIP, but it may be specific to Wonderware rather than Citect.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any limitations in tag addressing when integrating Omron NJ/NS/NX Series PLCs with Citect using the OMFINS driver?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the current OMFINS driver offering with Citect might not support name-based/tag-based addressing in Omron NJ/NS/NX Series PLCs. This limitation could require address translation in Omron's Sysmac studio to convert tags to a traditional memory register format, which may be challenging if PLC code modification is not possible.</p>
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
