
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there, I am trying to change the IP address of my 1769-L33 CompactLogix PLC. Unfortunately, the BOOTP software isnt detecting the device. I attempted to disable the firewall on my Windows 10 system, but it still didnt work. Is it possible that BOOTP doesnt recognize a device that">
    <meta name="keywords" content="troubleshooting ip address setup, bootp software, 1769-l33 compactlogix plc, change ip address, bootp device detection, firewall settings, windows 10, ip address assignment, bootp recognition, device configuration, network setup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ip-address-setup-with-bootp-for-1769-l33-compactlogix-plc">
    <title>Troubleshooting IP Address Setup with BOOTP for 1769-L33 CompactLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting IP Address Setup with BOOTP for 1769-L33 CompactLogix PLC | Oxmaint Community">
    <meta property="og:description" content="Hello there, I am trying to change the IP address of my 1769-L33 CompactLogix PLC. Unfortunately, the BOOTP software isnt detecting the device. I attempted to disable the firewall on my Windows 10 system, but it still didnt work. Is it possible that BOOTP doesnt recognize a device that">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ip-address-setup-with-bootp-for-1769-l33-compactlogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting IP Address Setup with BOOTP for 1769-L33 CompactLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello there, I am trying to change the IP address of my 1769-L33 CompactLogix PLC. Unfortunately, the BOOTP software isnt detecting the device. I attempted to disable the firewall on my Windows 10 system, but it still didnt work. Is it possible that BOOTP doesnt recognize a device that">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ip-address-setup-with-bootp-for-1769-l33-compactlogix-plc"
      },
      "headline": "Troubleshooting IP Address Setup with BOOTP for 1769-L33 CompactLogix PLC",
      "description": "Hello there, I am trying to change the IP address of my 1769-L33 CompactLogix PLC. Unfortunately, the BOOTP software isnt detecting the device. I attempted to disable the firewall on my Windows 10 system, but it still didnt work. Is it possible that BOOTP doesnt recognize a device that",
      "author": {
        "@type": "Person",
        "name": "rejoe.koshy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-29",
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
                <h1 class="text-white">Troubleshooting IP Address Setup with BOOTP for 1769-L33 CompactLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rejoe.koshy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">348</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">3</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there, I am trying to change the IP address of my 1769-L33 CompactLogix PLC. Unfortunately, the BOOTP software isn't detecting the device. I attempted to disable the firewall on my Windows 10 system, but it still didn't work. Is it possible that BOOTP doesn't recognize a device that already has an IP address assigned?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Changing the IP settings on a device can be easily done through RSLinx. If the device has already obtained an IP address, it will no longer send out BootP requests. To clear out the IP address, simply power cycle the device. If the device is configured with a static IP, you will need to establish communication on the correct subnet, which may require changing the IP address of your PC. Once communication is established, you can use RSLinx to modify the IP settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are unsure of the current IP address, an alternative method is to establish a connection via USB in RSLinx. This can be a helpful solution for troubleshooting network connectivity issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>voos.charley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up a device to communicate with another, utilize Wireshark to directly capture and analyze the outgoing packets, revealing its IP address. If unsuccessful, Zenmap can be used for a ping scan. However, without any knowledge of the subnet, the ping scan process may be lengthy. It is recommended to start with Wireshark for more efficient results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Charley from Voos recommends using USB to connect through RSLinx if you are unsure of the current IP address. This alternative option is especially handy as Rockwell has incorporated USB connectivity into their modules, making the process even easier.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. Question: Why is BOOTP not detecting my 1769-L33 CompactLogix PLC when I try to change its IP address?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There could be several reasons for this issue, such as network configuration problems, firewall settings, or compatibility issues between the PLC and the BOOTP software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: I disabled the firewall on my Windows 10 system, but BOOTP still couldn't detect the PLC. What else could be causing the problem?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Apart from the firewall, ensure that there are no other security settings or network restrictions blocking the communication between the BOOTP software and the PLC. Also, check if the PLC is properly connected to the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Can BOOTP recognize a device that already has an IP address assigned to it?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: BOOTP typically assigns IP addresses to devices that do not have one already. If the device already has a static IP address assigned, BOOTP may not be able to detect it. In such cases, you might need to manually change the IP address on the PLC itself.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Are there any specific network requirements or settings that need to be configured for BOOTP to work with the 1769-L33 CompactLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure that the network settings on both the PLC and the computer running the BOOTP software are correctly configured, including subnet masks, gateway addresses, and DHCP server settings. Additionally, check</p>
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
