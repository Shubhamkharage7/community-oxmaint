
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you a new Kepware user struggling to collect OEE data from a ControlLogix PLC through another ControlLogix backplane? If youre encountering invalid device id errors, it might be due to incorrect formatting. The path weve set is 10.1.ww.yy.1.2.2 192.168.xx.zz.1.010.1.ww.yy, which involves an EWEB card, the backplane, the ENET">
    <meta name="keywords" content="kepware oee data collection, troubleshooting controllogix plc, kepware routing tips, oee data collection errors, controllogix backplane setup, kepware">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-kepware-routing-for-oee-data-collection-from-controllogix-plc">
    <title>Troubleshooting Kepware Routing for OEE Data Collection from ControlLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Kepware Routing for OEE Data Collection from ControlLogix PLC | Oxmaint Community">
    <meta property="og:description" content="Are you a new Kepware user struggling to collect OEE data from a ControlLogix PLC through another ControlLogix backplane? If youre encountering invalid device id errors, it might be due to incorrect formatting. The path weve set is 10.1.ww.yy.1.2.2 192.168.xx.zz.1.010.1.ww.yy, which involves an EWEB card, the backplane, the ENET">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-kepware-routing-for-oee-data-collection-from-controllogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Kepware Routing for OEE Data Collection from ControlLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="Are you a new Kepware user struggling to collect OEE data from a ControlLogix PLC through another ControlLogix backplane? If youre encountering invalid device id errors, it might be due to incorrect formatting. The path weve set is 10.1.ww.yy.1.2.2 192.168.xx.zz.1.010.1.ww.yy, which involves an EWEB card, the backplane, the ENET">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-kepware-routing-for-oee-data-collection-from-controllogix-plc"
      },
      "headline": "Troubleshooting Kepware Routing for OEE Data Collection from ControlLogix PLC",
      "description": "Are you a new Kepware user struggling to collect OEE data from a ControlLogix PLC through another ControlLogix backplane? If youre encountering invalid device id errors, it might be due to incorrect formatting. The path weve set is 10.1.ww.yy.1.2.2 192.168.xx.zz.1.010.1.ww.yy, which involves an EWEB card, the backplane, the ENET",
      "author": {
        "@type": "Person",
        "name": "stretch_af"
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
                <h1 class="text-white">Troubleshooting Kepware Routing for OEE Data Collection from ControlLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>stretch_af</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1385</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">264</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you a new Kepware user struggling to collect OEE data from a ControlLogix PLC through another ControlLogix backplane? If you're encountering "invalid device id" errors, it might be due to incorrect formatting. The path we've set is <10.1.ww.yy>.1.2.2 <192.168.xx.zz>.1.010.1.ww.yy, which involves an EWEB card, the backplane, the ENET card in slot 2, and the other PLC. While it seems right, there could be an issue. Any insights? - Justin</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, the information appears to be accurate. Just remember to include a "." before the second IP address. It's important to note that ControlLogix slots always begin at Slot 0. Assuming that the second Ethernet module is in the third physical slot (2) of the chassis and the ControlLogix CPU is in the first physical slot (0), have you been able to replicate this setup in RSLinx Classic? Setting up an OPC Topic and testing it with the Test Client could also be beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, I manually entered that pathway and accidentally forgot to include the ".". I am able to access the processor through Linx. My next inquiry involves DH+ on the same 10.1 chassis, which also has DH+ cards. Can anyone provide guidance on the structure of the pathway through the backplane and out through a DH+ card?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stretch_af</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unsure about how Kepware interprets the 1756-DHRIO.MSG instructions from PLCs, which are designed for the DHRIO module and include a command payload to execute a PCCC/DH+ command on a specific channel with a target node, gateway node, and link ID. Unlike in RSLinx Classic, there is no CIP path that directly incorporates the channel, node, gateway, and link ID. This could be a unique configuration issue specific to Kepware that I may not be able to address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Despite my efforts, I have been unsuccessful in achieving the desired outcome. I am able to communicate via Ethernet using a physical connection from Rack 1 Slot 4. Rack 1 and Rack 2 are linked through EN2Ts installed in Slot 2 of their respective racks. The EN2T in Rack 1 has an address of a.b.c.d. My goal is to establish a connection to the PLC in Rack 2 Slot 1 by utilizing the EN2T in Rack 2 Slot 2, which has an IP address of w.x.y.z. In KepServer, I have configured the following path: <a.b.c.d>,1,2,2,<w.x.y.z>,1,1. However, this configuration consistently leads to an error message stating "Invalid Device ID."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kk10494</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing "invalid device id" errors when trying to collect OEE data from a ControlLogix PLC through another ControlLogix backplane?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "invalid device id" errors could be due to incorrect formatting of the path being used for data collection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What path should be set for collecting OEE data from a ControlLogix PLC through another ControlLogix backplane?</h4>
<p class='text-muted'><strong>Answer:</strong> - The path that should be set is <10.1.ww.yy>.1.2.2 <192.168.xx.zz>.1.010.1.ww.yy, involving an EWEB card, the backplane, the ENET card in slot 2, and the other PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot issues with collecting OEE data from a ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can start by ensuring that the path formatting is correct and verifying the configuration of the devices involved in the data collection process.</p>
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
