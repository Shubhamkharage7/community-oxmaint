
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings. We are currently facing a frustrating issue with our PLC system. We have one main PLC (1756-L85 with a 1756-en2t ethernet module) and a total of 17 Aentr nodes, consisting of SLC500 chassis and 1769 CompactLogix for remote IO. Each PLC is placed on its own VLAN network">
    <meta name="keywords" content="plc troubleshooting, 1769-ow16 output dropouts, 1756-l85, 1756-en2t ethernet module, aentr nodes, slc500 chassis, 1769 compactlogix, vlan network isolation, random">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-issue-1769-ow16-output-dropouts-randomly">
    <title>Troubleshooting PLC Issue: 1769-OW16 Output Dropouts Randomly | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC Issue: 1769-OW16 Output Dropouts Randomly | Oxmaint Community">
    <meta property="og:description" content="Greetings. We are currently facing a frustrating issue with our PLC system. We have one main PLC (1756-L85 with a 1756-en2t ethernet module) and a total of 17 Aentr nodes, consisting of SLC500 chassis and 1769 CompactLogix for remote IO. Each PLC is placed on its own VLAN network">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-issue-1769-ow16-output-dropouts-randomly">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC Issue: 1769-OW16 Output Dropouts Randomly | Oxmaint Community">
    <meta name="twitter:description" content="Greetings. We are currently facing a frustrating issue with our PLC system. We have one main PLC (1756-L85 with a 1756-en2t ethernet module) and a total of 17 Aentr nodes, consisting of SLC500 chassis and 1769 CompactLogix for remote IO. Each PLC is placed on its own VLAN network">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc-issue-1769-ow16-output-dropouts-randomly"
      },
      "headline": "Troubleshooting PLC Issue: 1769-OW16 Output Dropouts Randomly",
      "description": "Greetings. We are currently facing a frustrating issue with our PLC system. We have one main PLC (1756-L85 with a 1756-en2t ethernet module) and a total of 17 Aentr nodes, consisting of SLC500 chassis and 1769 CompactLogix for remote IO. Each PLC is placed on its own VLAN network",
      "author": {
        "@type": "Person",
        "name": "markquinn24"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Troubleshooting PLC Issue: 1769-OW16 Output Dropouts Randomly</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>markquinn24</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">277</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">58</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings. We are currently facing a frustrating issue with our PLC system. We have one main PLC (1756-L85 with a 1756-en2t ethernet module) and a total of 17 Aentr nodes, consisting of SLC500 chassis and 1769 CompactLogix for remote IO. Each PLC is placed on its own VLAN network to ensure isolation. We are experiencing random dropouts specifically on the OW16 cards across remote IO racks. These dropouts occur unpredictably, affecting different racks and cards each time. The issue persists even with new replacement cards and rearranging the cards in different positions does not resolve it. The RPI is set to 40msec on all cards, though this may not impact connectivity but rather the data refresh rate of the outputs. The firmware V35 is running on the L85 PLC. We have already replaced all cabling and switches to eliminate network-related issues. On the EN2T web page, we can track the dropped cards by their new bridge connection uptime after restoration. Any insights or suggestions would be greatly appreciated. It is important to note that I am not a professional PLC engineer, but I have been self-teaching in order to troubleshoot and solve this issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although the link I will share may not be directly relevant to your individual situation, it is still worth considering. My experience involved an issue with SLC RIO from a PLC-5, which took me a significant amount of time to diagnose. This problem is etched in my memory and comes to mind whenever I come across discussions about card faults related to a 1746-OW16.PLC5-SLC IO Scanner Fault. I encountered a situation where my PLC5 with SLC IO experienced scanner faults labeled as "ESO" and "L03" multiple times a day. The manual indicated it was an IO parity error in slot 3. Despite replacing the scanner, IO cards, backplane, power supply, and even switching power sources, the issue persisted. Our investigations, including observing the power with a scope and even running our specialized communication cabling, did not resolve the problem. For more information on this topic, feel free to visit www.plctalk.net.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a similar issue with a local 1769-OW16, and surprisingly, the culprit was a questionable fan connected to the same 120v power source as our OW16. Despite the fan having constant power and not being controlled by the PLC, it was somehow causing connection losses. After investigating for months, we decided to replace the fan, and ever since then, we have not experienced any further issues with the card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your responses. I am seeking assistance in locating and adjusting settings that can enhance flexibility in the system associated with problematic output cards. Can anyone provide guidance on this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>markquinn24</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the random dropouts on the OW16 cards in the remote IO racks?</h4>
<p class='text-muted'><strong>Answer:</strong> - The random dropouts on the OW16 cards could be caused by various factors such as electrical interference, configuration issues, firmware compatibility, or hardware malfunctions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why are the dropouts occurring unpredictably across different racks and cards each time?</h4>
<p class='text-muted'><strong>Answer:</strong> - The unpredictability of the dropouts may indicate a systemic issue affecting multiple components within the PLC system, rather than isolated problems with specific cards or racks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the issue of random dropouts on the OW16 cards be troubleshooted effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting steps could include checking for loose connections, verifying firmware compatibility, analyzing network traffic, monitoring error logs, and seeking assistance from professional PLC engineers for a more in-depth diagnosis.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Does adjusting the RPI (Requested Packet Interval) setting impact the connectivity or data refresh rate of the outputs on the PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - While adjusting the RPI setting may affect the data refresh rate of the outputs, it is unlikely to directly impact the overall connectivity between the PLC and remote IO racks. The RPI setting determines how frequently the PLC requests data from the remote IO modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What are some potential solutions or suggestions for resolving the random dropouts on the OW16 cards despite trying new replacement cards and rearranging positions?</h4>
<p class='text-muted'><strong>Answer:</strong> - Possible solutions could involve conducting a thorough inspection of</p>
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
