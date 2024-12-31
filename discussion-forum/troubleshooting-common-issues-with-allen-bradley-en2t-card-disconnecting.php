
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! Are you familiar with any common problems that can result in the EN2T card (running firmware 10.001) losing communication? Symptoms include the webpage displaying but RSLinx unable to browse, HMI disconnecting from the PLC, and no ping responses. A power cycle temporarily resolves the issue, but it tends">
    <meta name="keywords" content="allen bradley en2t card, firmware 001, communication issues, troubleshooting, rslinx, hmi disconnect, ping responses, power cycle, wireshark analysis, faulty card, network problem, plc communication, internet connectivity, en">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-common-issues-with-allen-bradley-en2t-card-disconnecting">
    <title>Troubleshooting Common Issues with Allen Bradley EN2T Card Disconnecting | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Common Issues with Allen Bradley EN2T Card Disconnecting | Oxmaint Community">
    <meta property="og:description" content="Greetings! Are you familiar with any common problems that can result in the EN2T card (running firmware 10.001) losing communication? Symptoms include the webpage displaying but RSLinx unable to browse, HMI disconnecting from the PLC, and no ping responses. A power cycle temporarily resolves the issue, but it tends">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-common-issues-with-allen-bradley-en2t-card-disconnecting">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Common Issues with Allen Bradley EN2T Card Disconnecting | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! Are you familiar with any common problems that can result in the EN2T card (running firmware 10.001) losing communication? Symptoms include the webpage displaying but RSLinx unable to browse, HMI disconnecting from the PLC, and no ping responses. A power cycle temporarily resolves the issue, but it tends">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-common-issues-with-allen-bradley-en2t-card-disconnecting"
      },
      "headline": "Troubleshooting Common Issues with Allen Bradley EN2T Card Disconnecting",
      "description": "Greetings! Are you familiar with any common problems that can result in the EN2T card (running firmware 10.001) losing communication? Symptoms include the webpage displaying but RSLinx unable to browse, HMI disconnecting from the PLC, and no ping responses. A power cycle temporarily resolves the issue, but it tends",
      "author": {
        "@type": "Person",
        "name": "BeepBob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-02",
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
                <h1 class="text-white">Troubleshooting Common Issues with Allen Bradley EN2T Card Disconnecting</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">259</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">473</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! Are you familiar with any common problems that can result in the EN2T card (running firmware 10.001) losing communication? Symptoms include the webpage displaying but RSLinx unable to browse, HMI disconnecting from the PLC, and no ping responses. A power cycle temporarily resolves the issue, but it tends to recur. I have a new card on the way and intend to use Wireshark for analysis. Have you encountered this issue before – perhaps a faulty card? This issue has occurred at two different sites.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upgrade to the latest firmware version 12 for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jstolaruk mentioned upgrading to the latest firmware version, 12. After seeing the recommendation to update to version 12, I plan on implementing this change across all our locations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What firmware version is currently installed on your ControlLogix processor? We recently encountered a similar issue with version 36 when using v12 EN2T cards, specifically on the controller's ethernet port. Reverting back to firmware version 33 resolved the issue for us. While we have other systems that did not experience the same problem, simply replacing the controller did not solve it. It appears that there may be a compatibility issue with the v12/v36 firmware combination. Rockwell Automation is investigating the issue. This may be relevant to your situation, as we faced the same problem on the controller's ethernet port.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tlf30 inquired about the firmware version of the ControlLogix processor. They experienced a similar issue with version 36 and version 12 EN2T cards, specifically with the controller's ethernet port. Reverting back to version 33 resolved the issue. Despite having two identical systems without the problem, even replacing the controller did not solve it. The v12/v36 firmware combination seemed to be the root cause. Rockwell Automation is investigating. This issue may be relevant to what you are encountering, as it was the same problem but with the controller's ethernet port. I am currently on V20 and the L72, and I am planning to update the L72 to V32.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Recently, there was a recurring problem with EN2T and L83ES, running on versions 11 and 34. The web analytics indicated a high number of auto negotiate errors. Both the Cisco switch and EN2T were set to auto negotiate. Changing the settings to 100MB for each seemed to fix the issues. There have been no further complaints in the past few weeks. The symptoms were consistent - the module appeared to be working fine, but pinging was unsuccessful and Ignition IO would lose communication. A simple reboot of the module solved the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee recently dealt with a similar issue involving EN2T and L83ES modules running on Version 11 and 34, respectively. Web statistics indicated a high number of auto negotiate errors. Both the Cisco switch and EN2T were initially set to auto negotiate, but after switching to 100MB full duplex settings, the issues seemed to clear up. In the following weeks, there were no further complaints regarding connectivity issues. Despite the module showing good status, there were issues with pinging and communication with Ignition IO. A simple reboot of the module would usually fix the problem. If the problem persists after adjusting both the EN2T and switchport settings to 100 MBps full duplex, further troubleshooting may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to BeepBob, even after adjusting the settings of both the EN2T and switchport to full duplex 100 MBps, the issue persisted. However, in our situation, this has not been a recurring problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you! We will definitely give that a try after updating to firmware version 12.001.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a possibility that DLR models may be impacted?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  What are some common reasons for an Allen Bradley EN2T card disconnecting and losing communication?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Some common reasons for EN2T card disconnecting issues may include firmware glitches, network configuration errors, hardware malfunctions, or interference within the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot an EN2T card disconnecting issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the EN2T card disconnecting problem, you can try power cycling the card, checking network settings, updating firmware, analyzing network traffic with tools like Wireshark, and testing the card on a different network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is a faulty card a possible cause for the Allen Bradley EN2T card disconnecting issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, a faulty card could be a possible cause for the EN2T card disconnecting problem. It is recommended to test with a new card to see if the issue persists.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What can be done if the EN2T card disconnecting issue occurs at multiple sites?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the EN2T card disconnecting issue occurs at multiple sites, it might indicate a broader network issue or a recurring problem with the cards themselves. Further investigation and analysis are recommended to determine the root cause.</p>
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
