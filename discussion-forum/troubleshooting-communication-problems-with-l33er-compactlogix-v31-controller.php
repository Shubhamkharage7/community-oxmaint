
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need help with an issue Im experiencing after upgrading my L32E V16 controllers to L33ER V31.011. The problem arises when the DCS communication link to the L33ER controller (which communicates via an ALE111 card over ethernet/IP) is lost intermittently, resulting in a fault on the DCS">
    <meta name="keywords" content="l33er compactlogix v31 controller, troubleshooting communication problems, dcs communication link, ale111 card, ethernet/ip, fault a320, connection shutdown, studio5000, controller diagnostics, cipstatus, connection timeout notification">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-l33er-compactlogix-v31-controller">
    <title>Troubleshooting Communication Problems with L33ER CompactLogix V31 Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Problems with L33ER CompactLogix V31 Controller | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need help with an issue Im experiencing after upgrading my L32E V16 controllers to L33ER V31.011. The problem arises when the DCS communication link to the L33ER controller (which communicates via an ALE111 card over ethernet/IP) is lost intermittently, resulting in a fault on the DCS">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-l33er-compactlogix-v31-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Problems with L33ER CompactLogix V31 Controller | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need help with an issue Im experiencing after upgrading my L32E V16 controllers to L33ER V31.011. The problem arises when the DCS communication link to the L33ER controller (which communicates via an ALE111 card over ethernet/IP) is lost intermittently, resulting in a fault on the DCS">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-l33er-compactlogix-v31-controller"
      },
      "headline": "Troubleshooting Communication Problems with L33ER CompactLogix V31 Controller",
      "description": "Hello everyone, I need help with an issue Im experiencing after upgrading my L32E V16 controllers to L33ER V31.011. The problem arises when the DCS communication link to the L33ER controller (which communicates via an ALE111 card over ethernet/IP) is lost intermittently, resulting in a fault on the DCS",
      "author": {
        "@type": "Person",
        "name": "sjames"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-13",
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
                <h1 class="text-white">Troubleshooting Communication Problems with L33ER CompactLogix V31 Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sjames</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2467</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">339</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need help with an issue I'm experiencing after upgrading my L32E V16 controllers to L33ER V31.011. The problem arises when the DCS communication link to the L33ER controller (which communicates via an ALE111 card over ethernet/IP) is lost intermittently, resulting in a fault on the DCS (A320 - 'connection shutdown when transmitting to the connected socket'). This issue only occurs with the updated L33ER controllers, while the previous L32 controllers had no such problems.

Despite the communication loss between the PLC and DCS, I can still ping the PLC and ALE cards without any issues, and Studio5000 does not disconnect. Additionally, there are no fault counts in the controller diagnostics that indicate any issues. Upon further investigation, I noticed recurring messages in the advanced diagnostics section of the controller's webpage, specifically 'CipStatus: Generated on device' and 'Connection timeout notification'. These messages appear every 52 minutes but do not seem to directly correlate with the DCS communication fault.

I tried upgrading the firmware to the latest version V33, but the recurring messages persist. Interestingly, re-downloading the properties of the ALE111 card temporarily stops the spamming of these messages and resolves the communication dropouts on the DCS. However, cycling the power to the PLC clears the event log but reintroduces the recurring messages and DCS communication issues.

I am uncertain if the event log spamming is a normal occurrence or a sign of an underlying issue. Any insights or suggestions would be greatly appreciated. Thank you, SJ.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there any obstacles preventing you from testing or using the most recent version, 33? While there may not be a quick solution to the issue at hand, exploring the newest update could provide valuable insights and improvements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. I attempted using V33 in the controller and installed a new ALE111 card in the DCS, but unfortunately, I am still encountering issues. Despite triggering a different DCS fault, I am consistently observing the same event log messages in the PLC through the web browser.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sjames</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you equipped with an Ethernet TAP to collect Wireshark traces and troubleshoot issues effectively?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have not had the opportunity to check it yet, as I am currently off site. However, I will address this issue soon. If anyone has any prior knowledge or experience with the messages in the event log of the L33ER controller, it would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sjames</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The log indicates a timeout error with the connection. There are numerous factors that could contribute to this issue, making it difficult to determine a specific cause. Additional information is needed to accurately diagnose the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's been a while, have you discovered a resolution yet?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>misterleite</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing intermittent communication loss between the L33ER V31 controller and the DCS system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The intermittent communication loss could be related to the firmware update or the properties of the ALE111 card. There may be issues with compatibility or configuration settings causing the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the 'Connection shutdown when transmitting to the connected socket' fault on the DCS system with the L33ER V31.011 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps could include checking for recurring messages in the advanced diagnostics section of the controller's webpage, upgrading firmware to the latest version, and re-downloading the properties of the ALE111 card to temporarily resolve communication dropouts.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why do I keep seeing messages like 'CipStatus: Generated on device' and 'Connection timeout notification' in the advanced diagnostics section of the L33ER V31 controller's webpage?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: These messages may indicate underlying issues causing the recurring communication faults. It's essential to investigate further to determine the root cause and potential solutions to prevent communication disruptions.</p>
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
