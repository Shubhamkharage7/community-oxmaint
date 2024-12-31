
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a project that involves nine Eaton Variable Frequency Drives (VFDs): two DG1, four DE1, and three DC1 drives. I am utilizing a CompactLogix system to communicate with the drives via Ethernet/IP. I am in the process of setting up the IP addresses">
    <meta name="keywords" content="eaton vfds, compactlogix system, ip addresses, dg1 drive, de1 drive, dc1 drive, ethernet/ip communication, dx-net-ethernet-2-2 adapter, embedded webserver, ethernet switch, ip">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-ip-addresses-for-eaton-vfds-using-compactlogix-system">
    <title>Setting Up IP Addresses for Eaton VFDs using CompactLogix System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting Up IP Addresses for Eaton VFDs using CompactLogix System | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a project that involves nine Eaton Variable Frequency Drives (VFDs): two DG1, four DE1, and three DC1 drives. I am utilizing a CompactLogix system to communicate with the drives via Ethernet/IP. I am in the process of setting up the IP addresses">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-ip-addresses-for-eaton-vfds-using-compactlogix-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting Up IP Addresses for Eaton VFDs using CompactLogix System | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a project that involves nine Eaton Variable Frequency Drives (VFDs): two DG1, four DE1, and three DC1 drives. I am utilizing a CompactLogix system to communicate with the drives via Ethernet/IP. I am in the process of setting up the IP addresses">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-ip-addresses-for-eaton-vfds-using-compactlogix-system"
      },
      "headline": "Setting Up IP Addresses for Eaton VFDs using CompactLogix System",
      "description": "Hello everyone, I am currently working on a project that involves nine Eaton Variable Frequency Drives (VFDs): two DG1, four DE1, and three DC1 drives. I am utilizing a CompactLogix system to communicate with the drives via Ethernet/IP. I am in the process of setting up the IP addresses",
      "author": {
        "@type": "Person",
        "name": "RBergmann"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-03",
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
                <h1 class="text-white">Setting Up IP Addresses for Eaton VFDs using CompactLogix System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RBergmann</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1399</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">199</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a project that involves nine Eaton Variable Frequency Drives (VFDs): two DG1, four DE1, and three DC1 drives. I am utilizing a CompactLogix system to communicate with the drives via Ethernet/IP. I am in the process of setting up the IP addresses for the drives. The DG1 drive's IP address is configured through its parameters, while the DC1 and DE1 drives require a DX-NET-ETHERNET-2-2 adapter with IP configuration done through an embedded webserver.

Although I was able to configure the drives individually, I encountered issues when they were connected to the Ethernet switch, with the IP addresses working intermittently. I suspect that the DX adapter may have had previous issues. Has anyone dealt with multiple DC1/DE1 drives in a closed network before? In total, there are 14 devices in the setup, including four Allen Bradley (AB) devices and one RTA Modbus gateway.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>RBergmann inquired about configuring IP addresses for (9) Eaton VFDs on a project site, including (2) DG1, (4) DE1, and (3) DC1 drives connected via Ethernet/IP using a CompactLogix. While the DG1 drive can be configured through drive parameters, the DC1 and DE1 drives require a DX-NET-ETHERNET-2-2 adapter with IP configuration done through an embedded webserver. Despite successful individual drive configurations, issues arose when connected to the Ethernet switch, potentially due to past problems with the DX adapter. Seeking advice on integrating multiple DC1/DE1 drives into a closed network with a total of (14) devices, including (4) AB and (1) RTA Modbus gateway. Any solutions for setting IP addresses on Eaton drives within a device level ring network (DLR), especially for a DC1 drive in conjunction with Powerflex 525 drives?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mavericks</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set up the IP addresses for Eaton VFDs with a CompactLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - For Eaton VFDs like DG1, DE1, and DC1 drives, the IP address configuration varies. DG1 drives can have their IP address set through parameters, while DC1 and DE1 drives require a DX-NET-ETHERNET-2-2 adapter with IP configuration done through an embedded webserver.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why are the IP addresses of the VFDs working intermittently when connected to the Ethernet switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - The intermittent IP address issues could be due to problems with the DX adapter. It's advisable to check the adapter for any previous issues and ensure proper configuration and connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Has anyone experienced challenges with multiple DC1/DE1 drives in a closed network setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing issues with multiple DC1/DE1 drives in a closed network setup, it could be helpful to seek advice from others who have dealt with similar configurations. Sharing experiences and troubleshooting steps can aid in resolving connectivity problems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What other devices are part of the setup along with the Eaton VFDs and CompactLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - In addition to the Eaton VFDs and CompactLogix system, the setup includes four Allen Bradley (AB) devices and one RTA Modbus gateway. It's essential to consider the interactions between all devices in the network to ensure seamless communication and operation.</p>
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
