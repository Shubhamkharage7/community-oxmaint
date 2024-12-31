
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are experiencing intermittent communication issues with this PLC, with three different sources reporting problems - two Rockwell Logix PLCs, one Safety PLC, and our PI-OSI Interface which is used for data archiving. This suggests a problem with the Rockwell 6000 8-port Switch, the wire connecting the switch to">
    <meta name="keywords" content="plc communication issues, logix5571 ethernet/ip card, troubleshooting, intermittent communication problems, rockwell logix plcs, safety plc, pi-osi interface, data archiving, rockwell 6000 8-port switch">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-communication-issues-with-logix5571-ethernet-ip-card-can-cards-be-hot-swapped">
    <title>Troubleshooting PLC Communication Issues with Logix5571 EtherNet/IP Card: Can Cards Be Hot Swapped? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC Communication Issues with Logix5571 EtherNet/IP Card: Can Cards Be Hot Swapped? | Oxmaint Community">
    <meta property="og:description" content="We are experiencing intermittent communication issues with this PLC, with three different sources reporting problems - two Rockwell Logix PLCs, one Safety PLC, and our PI-OSI Interface which is used for data archiving. This suggests a problem with the Rockwell 6000 8-port Switch, the wire connecting the switch to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-communication-issues-with-logix5571-ethernet-ip-card-can-cards-be-hot-swapped">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC Communication Issues with Logix5571 EtherNet/IP Card: Can Cards Be Hot Swapped? | Oxmaint Community">
    <meta name="twitter:description" content="We are experiencing intermittent communication issues with this PLC, with three different sources reporting problems - two Rockwell Logix PLCs, one Safety PLC, and our PI-OSI Interface which is used for data archiving. This suggests a problem with the Rockwell 6000 8-port Switch, the wire connecting the switch to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc-communication-issues-with-logix5571-ethernet-ip-card-can-cards-be-hot-swapped"
      },
      "headline": "Troubleshooting PLC Communication Issues with Logix5571 EtherNet/IP Card: Can Cards Be Hot Swapped?",
      "description": "We are experiencing intermittent communication issues with this PLC, with three different sources reporting problems - two Rockwell Logix PLCs, one Safety PLC, and our PI-OSI Interface which is used for data archiving. This suggests a problem with the Rockwell 6000 8-port Switch, the wire connecting the switch to",
      "author": {
        "@type": "Person",
        "name": "Colt Hero"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-28",
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
                <h1 class="text-white">Troubleshooting PLC Communication Issues with Logix5571 EtherNet/IP Card: Can Cards Be Hot Swapped?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Colt Hero</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">180</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">427</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We are experiencing intermittent communication issues with this PLC, with three different sources reporting problems - two Rockwell Logix PLCs, one "Safety" PLC, and our PI-OSI Interface which is used for data archiving. This suggests a problem with the Rockwell 6000 8-port Switch, the wire connecting the switch to the PLC, or even the Ethernet card in the PLC chassis. Although we initially tried replacing the wire, the communication errors have persisted. Considering that the switch has already been replaced, we are considering swapping out the Ethernet card in the chassis. Can this be done seamlessly with another card from one of the Chiller Bays, which are similar in setup except for their IP addresses? We are wondering if any re-configuration would be necessary, or if the card would automatically adjust in the PLC system.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully hot-swapped the 1756-ENBT module on numerous occasions. After configuring the spare with the correct IP address and firmware, I simply remove the old module and install the new one. While the swap may temporarily disrupt any connections dependent on the module, it is a reliable process. Through our experience, we have learned that updating the firmware to the latest version can resolve various issues. As a precaution, we always keep a few spare modules on hand for quick replacements when needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to the physical hardware, these components are hot-swappable without causing harm to any circuit boards. However, the amount of configuration required will vary depending on the exact replacement and the module setup within the PLC. Setting the IP address is the minimum requirement, as recommended by @joseph_e2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to hot-swapping the 1756-ENBT module, it is a process that can be done smoothly by ensuring the spare module is properly set up with the correct IP address and firmware. While swapping the modules, any connections that rely on the module being swapped will experience interruptions, but this method works effectively.

In certain situations, upgrading the firmware to the latest version has proven to resolve various issues, so it is recommended to keep a couple of spare modules ready for quick replacement if needed. The physical hardware of the modules is hot-swappable without causing damage to circuit boards. However, depending on the exact replacement and configuration in the PLC, some reconfiguration may be necessary, such as setting the IP address.

In a scenario where multiple Chiller Bays have EtherNet/IP Cards communicating with PLCs, swapping the cards between bays to troubleshoot communication errors may require changing the IP addresses in real-time via ControlLogix Software. Since there are no spare devices or lab environment for pre-configuration, initially swapping the cards may result in data being sent to the wrong destination. It is important to consider whether the PLC will recognize this and how to prevent any potential issues.

Despite the possibility of shutting down both bays to avoid these issues, it is preferred not to disrupt operations. The PLC hardware in all three bays was installed at the same time, making it identical in nature. The PLC experiencing communication errors is not directly controlling a chiller but serves as an interface between the Vendor package for the chiller and two other Rockwell PLCs. This means that the Ethernet/IP Cards used are interchangeable between bays due to their uniformity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Colt Hero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Colt Hero noted that the three Chiller Bays are essentially identical, with each equipped with an EtherNet/IP Card communicating with the other two PLCs - "Supervisor" and "Safety." To troubleshoot communication errors, he proposed swapping the EtherNet/IP Cards between Bays to test if the issue persists. He also considered changing the IP addresses in real-time using ControlLogix Software, which would not require a re-download.

Due to the lack of a lab environment for pre-IP configuration and the absence of spare cards, Colt Hero acknowledged that initially swapping the cards would result in incorrect IP addresses. This could potentially lead to data originally intended for one Chiller Bay being sent to another. He questioned whether the PLC would be able to detect this misdirected data.

It was mentioned that shutting down both Bays to avoid issues could be an option, although not preferred. Despite all three Bays having similar PLC hardware installed simultaneously twelve years ago, the Bay experiencing communication errors is not directly controlling a Chiller but rather interfacing with vendor software and other Rockwell PLCs.

Considering the uncertainty surrounding the PLC card configurations, including message instructions and produced/consumed tags, it was advised against swapping cards without adjusting IPs unless a thorough understanding of the program is obtained. Changing the IP address of a card can be done without a download, even through RSLinx without accessing ControlLogix. For conducting a swap test, the recommendation was to assign dummy IPs to both cards, swap them, and then input the correct swapped IPs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can Ethernet cards in a Logix5571 PLC be hot swapped?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, Ethernet cards in a Logix5571 PLC cannot be hot swapped. It is recommended to power down the PLC before replacing the Ethernet card to avoid any potential damage.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should be considered before swapping out the Ethernet card in the PLC chassis?</h4>
<p class='text-muted'><strong>Answer:</strong> - Before swapping out the Ethernet card in the PLC chassis, it is important to ensure that the replacement card is compatible with the PLC model and firmware version. Additionally, make sure to have a backup of the PLC program and configuration settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Will re-configuration be necessary after replacing the Ethernet card in the Logix5571 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, re-configuration will be necessary after replacing the Ethernet card in the Logix5571 PLC. The new card will need to be configured with the appropriate IP address, subnet mask, and other network settings to ensure proper communication within the system.</p>
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
