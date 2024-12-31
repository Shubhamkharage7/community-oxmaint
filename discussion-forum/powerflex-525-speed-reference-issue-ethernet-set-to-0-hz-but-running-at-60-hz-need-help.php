
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good afternoon, please assist me with a technical issue I am facing. I have set the PowerFlex 525 speed reference to Ethernet/IP, running at 60 Hz. However, the PLC is instructing it to run at 0 Hz, but it continues to run at 60 Hz. The commanded frequency (b002)">
    <meta name="keywords" content="powerflex 525, speed reference, ethernet/ip, plc, commanded frequency, b002, 60 hz, 0 hz, drive pot, speed control, speed command, frequency issue, ethernet override, technical issue, troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/powerflex-525-speed-reference-issue-ethernet-set-to-0-hz-but-running-at-60-hz-need-help">
    <title>PowerFlex 525 Speed Reference Issue: Ethernet set to 0 Hz but running at 60 Hz- Need Help! | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="PowerFlex 525 Speed Reference Issue: Ethernet set to 0 Hz but running at 60 Hz- Need Help! | Oxmaint Community">
    <meta property="og:description" content="Good afternoon, please assist me with a technical issue I am facing. I have set the PowerFlex 525 speed reference to Ethernet/IP, running at 60 Hz. However, the PLC is instructing it to run at 0 Hz, but it continues to run at 60 Hz. The commanded frequency (b002)">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/powerflex-525-speed-reference-issue-ethernet-set-to-0-hz-but-running-at-60-hz-need-help">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PowerFlex 525 Speed Reference Issue: Ethernet set to 0 Hz but running at 60 Hz- Need Help! | Oxmaint Community">
    <meta name="twitter:description" content="Good afternoon, please assist me with a technical issue I am facing. I have set the PowerFlex 525 speed reference to Ethernet/IP, running at 60 Hz. However, the PLC is instructing it to run at 0 Hz, but it continues to run at 60 Hz. The commanded frequency (b002)">
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
        "@id": "https://community.oxmaint.com/discussion-forum/powerflex-525-speed-reference-issue-ethernet-set-to-0-hz-but-running-at-60-hz-need-help"
      },
      "headline": "PowerFlex 525 Speed Reference Issue: Ethernet set to 0 Hz but running at 60 Hz- Need Help!",
      "description": "Good afternoon, please assist me with a technical issue I am facing. I have set the PowerFlex 525 speed reference to Ethernet/IP, running at 60 Hz. However, the PLC is instructing it to run at 0 Hz, but it continues to run at 60 Hz. The commanded frequency (b002)",
      "author": {
        "@type": "Person",
        "name": "Cydog"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-23",
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
                <h1 class="text-white">PowerFlex 525 Speed Reference Issue: Ethernet set to 0 Hz but running at 60 Hz- Need Help!</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">7130</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">272</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good afternoon, please assist me with a technical issue I am facing. I have set the PowerFlex 525 speed reference to Ethernet/IP, running at 60 Hz. However, the PLC is instructing it to run at 0 Hz, but it continues to run at 60 Hz. The commanded frequency (b002) is showing 60.0 Hz. Despite setting all speed references to 15 (Ethernet/IP), changing it to 1 (Drive Pot) brings the speed down to 0, allowing control with the pot. It seems that Ethernet is overriding the speed command. Has anyone encountered this issue before and can offer assistance? Thank you for your support.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After I realized my Frequency Command was set to -1, I inserted an AFI before my MUL instruction to reset it to 0, resulting in a decrease in speed to 0. Instead of using a MUL by 100 to calculate my command frequency, I am now utilizing REAL numbers to set my desired speed accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Disregard this post as it was my mistake in the code. Apologies for the error.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the discussion, Cydog mentioned the importance of using precise numbers when setting speed preferences, rather than relying on a simple multiplication by 100 to determine command frequency. For the PowerFlex 525, it is crucial to understand that the Reference and Feedback values are represented as 16-bit integers (INT), correlating to drive speed in 0.01 Hz increments. To achieve the desired Hz, it is necessary to multiply the value by a scaling factor of 100. For instance, if a speed of 32.5 Hz is required, the INT value sent to the drive would be 32.5 x 100 = 3250. When dealing with a REAL value, such as input from a user on a Human-Machine Interface (HMI), it is essential to not only apply the scaling factor (multiply by 100) but also convert the REAL result to an INT before transmitting it to the drive's output image. This adjustment in approach is highlighted to clarify any potential confusion, as it may appear that using REAL values throughout is a feasible alternative. Regards, George</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geospark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cydog admitted to making an error in the post, attributing it to their own code. Apologies were offered, with the reassurance that mistakes happen and there is no need to feel guilty.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BruceJW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey everyone, I need your immediate assistance. Recently, I upgraded from a PowerFlex 40P to a 525 and replaced three drives. Two of the drives are working perfectly with the correct speed reference, but the third drive's reference is 10 times higher than the actual speed. The reference is 39.1, while the drive speed is 3.91. I'm struggling to pinpoint the issue as all three drives have identical settings. Any suggestions on what could be causing this discrepancy? Your urgent support is greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zhumangi</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you sending the reference via Ethernet for a pf525 drive? The INT parameter for this drive needs to be set to 100 times the desired frequency setpoint. For example, if you want a frequency of 60hz, you would need to send a value of 6000. If you send a value of 391, then the frequency setpoint will be 3.91 Hz.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about how the reference is being transmitted - is it through Ethernet? A pf525 VFD necessitates an INT set at 100 times the target frequency. For instance, to achieve 60Hz, you would send 6000. If you send 391, the frequency setpoint will be 3.91Hz. I have resolved the issue by replacing the MOV instruction, which transferred data from the HMI to the VFD, with a MUL instruction that multiplies the value by 10. This adjustment has successfully resolved the issue. Additionally, the other two drives also utilized MUL instructions with REAL values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zhumangi</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my PowerFlex 525 drive running at 60 Hz even though the speed reference is set to Ethernet/IP at 0 Hz?</h4>
<p class='text-muted'><strong>Answer:</strong> This issue might occur when the drive is receiving conflicting speed commands from different sources, causing it to override the Ethernet/IP speed reference.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the PowerFlex 525 drive when the commanded frequency shows 60.0 Hz despite setting the speed reference to Ethernet/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> You can try changing the speed reference to another source, such as Drive Pot, to see if the drive responds correctly. This can help identify if the issue lies with the Ethernet/IP speed reference setting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should I do if my PowerFlex 525 drive is not responding to the speed commands from the PLC when set to Ethernet/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> If the drive is not following the speed commands from the PLC over Ethernet/IP, you may need to check the communication settings, network configuration, and ensure that there are no conflicting commands being sent to the drive.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Has anyone experienced the PowerFlex 525 drive overriding the speed command set to Ethernet/IP before?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, this issue has been encountered by others where the drive continues to run at a specific frequency despite the Ethernet/IP speed reference being set differently. Troubleshooting steps may be required to resolve this conflict.</p>
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
