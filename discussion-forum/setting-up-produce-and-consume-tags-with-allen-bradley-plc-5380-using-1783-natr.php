
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am seeking some recommendations, thank you for taking the time to read =) I have two Allen Bradley PLC 5380 devices, one running on firmware version 32 and the other on version 36. I am attempting to set up produced/consumed tags through a 1783-NATR setup. The">
    <meta name="keywords" content="allen bradley plc 5380, 1783-natr setup, produced/consumed tags, plc 5380 firmware versions, setting up plc communication, ip address configuration, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-produce-and-consume-tags-with-allen-bradley-plc-5380-using-1783-natr">
    <title>Setting up Produce and Consume Tags with Allen Bradley PLC 5380 Using 1783-NATR | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up Produce and Consume Tags with Allen Bradley PLC 5380 Using 1783-NATR | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am seeking some recommendations, thank you for taking the time to read =) I have two Allen Bradley PLC 5380 devices, one running on firmware version 32 and the other on version 36. I am attempting to set up produced/consumed tags through a 1783-NATR setup. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-produce-and-consume-tags-with-allen-bradley-plc-5380-using-1783-natr">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up Produce and Consume Tags with Allen Bradley PLC 5380 Using 1783-NATR | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am seeking some recommendations, thank you for taking the time to read =) I have two Allen Bradley PLC 5380 devices, one running on firmware version 32 and the other on version 36. I am attempting to set up produced/consumed tags through a 1783-NATR setup. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-produce-and-consume-tags-with-allen-bradley-plc-5380-using-1783-natr"
      },
      "headline": "Setting up Produce and Consume Tags with Allen Bradley PLC 5380 Using 1783-NATR",
      "description": "Hello everyone! I am seeking some recommendations, thank you for taking the time to read =) I have two Allen Bradley PLC 5380 devices, one running on firmware version 32 and the other on version 36. I am attempting to set up produced/consumed tags through a 1783-NATR setup. The",
      "author": {
        "@type": "Person",
        "name": "MartinHM"
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
                <h1 class="text-white">Setting up Produce and Consume Tags with Allen Bradley PLC 5380 Using 1783-NATR</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MartinHM</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">99</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">202</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am seeking some recommendations, thank you for taking the time to read =) I have two Allen Bradley PLC 5380 devices, one running on firmware version 32 and the other on version 36. I am attempting to set up produced/consumed tags through a 1783-NATR setup. 

The PLC_A is located on the private network with the IP address 192.168.1.2, while PLC_B is on the public network with the IP address 153.0.0.2. I have configured the translation table on the NATR to translate the IP of PLC_A to 153.0.0.3. The gateway for PLC_A is set to the IP of the NATR on the private network.

I have added PLC_A to the I/O Tree of PLC_A using the translated IP from the NAT, and I have added PLC_B to the I/O Tree of PLC_A using its original IP from the public network. There is an "Advanced" menu available for configuring the ethernet address, especially useful for NAT devices, which I have not been able to utilize effectively.

I have ensured that the tags have the same name and UDT, which were copied and pasted from one project to another. I have also enabled the necessary settings for the produced and consumed tags.

The results indicate that PLC_B is able to consume from PLC_A. However, on PLC_A, PLC_B in the I/O tree shows a fault with "16#0117 Connection Request Error: Invalid Connection Point." Despite this, I can see the information of PLC_B in the "Module Info" and "Internet Protocol" tabs, which were previously empty before the correct configuration was applied.

I would appreciate any guidance or ideas you may have to resolve this issue. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The error message "Invalid connection point" often indicates that the tag you are attempting to use has not been configured as a produced tag or does not exist. It is important to verify the correct spelling of the tag on both ends and ensure that it has been properly set up as a produced tag. Double-checking these details can help resolve the issue and establish a successful connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential to verify the firmware compatibility, as we encountered an issue requiring a processor upgrade to enable smooth data exchange between two firmware versions. Although the specifics escape me currently, we were able to resolve the issue by referring to a relevant technote. This underscores the importance of keeping firmware updated for seamless operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vadoola</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set up produced/consumed tags with Allen Bradley PLC 5380 using 1783-NATR?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up produced/consumed tags with Allen Bradley PLC 5380 using 1783-NATR, ensure that you have the correct firmware versions on your devices, configure the translation table on the NATR, add the devices to the I/O Tree with the appropriate IP addresses, and properly configure the ethernet addresses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be the reason for the "160117 Connection Request Error: Invalid Connection Point" fault on PLC_A?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "160117 Connection Request Error: Invalid Connection Point" fault on PLC_A could be due to incorrect configuration settings, mismatched tags, or issues with the network setup. Double-check the settings, ensure tags have the same name and UDT, and verify the network configurations to troubleshoot this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I resolve the issue of PLC_B consuming from PLC_A despite the fault on PLC_A?</h4>
<p class='text-muted'><strong>Answer:</strong> - To resolve the issue of PLC_B consuming from PLC_A despite the fault on PLC_A, review the configuration settings, ensure proper tag matching, check network configurations, and troubleshoot any potential issues with the setup. You may also need to verify the translation table and gateway settings on the NATR for correct communication.</p>
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
