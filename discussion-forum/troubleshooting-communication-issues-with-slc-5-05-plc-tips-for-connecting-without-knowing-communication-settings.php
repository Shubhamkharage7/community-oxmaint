
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am having trouble establishing communication with my SLC 5/05 PLC, which has both RS-232 and Ethernet ports. Despite trying to monitor traffic with Wireshark in promiscuous mode, I did not observe any activity from the PLCs Ethernet port. The ENET LED on the PLC is on, but">
    <meta name="keywords" content="slc 5/05 plc, communication issues, troubleshooting, rs-232, ethernet port, wireshark, promiscuous mode, enet led, rj45 port leds, df-1, rslinx, crc error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-slc-5-05-plc-tips-for-connecting-without-knowing-communication-settings">
    <title>Troubleshooting Communication Issues with SLC 5/05 PLC: Tips for Connecting Without Knowing Communication Settings | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issues with SLC 5/05 PLC: Tips for Connecting Without Knowing Communication Settings | Oxmaint Community">
    <meta property="og:description" content="Hello, I am having trouble establishing communication with my SLC 5/05 PLC, which has both RS-232 and Ethernet ports. Despite trying to monitor traffic with Wireshark in promiscuous mode, I did not observe any activity from the PLCs Ethernet port. The ENET LED on the PLC is on, but">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-slc-5-05-plc-tips-for-connecting-without-knowing-communication-settings">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issues with SLC 5/05 PLC: Tips for Connecting Without Knowing Communication Settings | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am having trouble establishing communication with my SLC 5/05 PLC, which has both RS-232 and Ethernet ports. Despite trying to monitor traffic with Wireshark in promiscuous mode, I did not observe any activity from the PLCs Ethernet port. The ENET LED on the PLC is on, but">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-slc-5-05-plc-tips-for-connecting-without-knowing-communication-settings"
      },
      "headline": "Troubleshooting Communication Issues with SLC 5/05 PLC: Tips for Connecting Without Knowing Communication Settings",
      "description": "Hello, I am having trouble establishing communication with my SLC 5/05 PLC, which has both RS-232 and Ethernet ports. Despite trying to monitor traffic with Wireshark in promiscuous mode, I did not observe any activity from the PLCs Ethernet port. The ENET LED on the PLC is on, but",
      "author": {
        "@type": "Person",
        "name": "slick_william"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Troubleshooting Communication Issues with SLC 5/05 PLC: Tips for Connecting Without Knowing Communication Settings</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">193</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">119</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am having trouble establishing communication with my SLC 5/05 PLC, which has both RS-232 and Ethernet ports. Despite trying to monitor traffic with Wireshark in promiscuous mode, I did not observe any activity from the PLC's Ethernet port. The ENET LED on the PLC is on, but the RJ45 port LEDs show no activity. I also attempted to connect using DF-1 through RSLinx, trying various configurations such as CRC and BCC error checking, as well as adjusting the station number, but was unsuccessful. Is there a simple way to connect to the PLC if I am unsure of the communication settings? If a factory reset is possible to clear any existing program, that would be ideal. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're struggling to connect online due to unknown communication settings, there is a simple solution. By removing the memory backup battery and shorting the GND and VBB terminals on the controller board for 60 seconds, you can reset the device to its factory default settings. This process will erase the memory and restore the communication settings to their original configuration. No need to worry about the program inside the device – this method will do the trick. Thanks for the question!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much, Bit_Bucket! Wishing you all the best with your coffee and coding endeavors. Good luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot communication issues with my SLC 5/05 PLC when I am unsure of the communication settings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach is to attempt a factory reset on the PLC to clear any existing settings and programs. This can help in establishing a new connection without the need for specific communication settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are some common methods to connect to a SLC 5/05 PLC without knowing the communication settings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try using tools like Wireshark to monitor network traffic and observe any activity from the PLC's Ethernet port. Additionally, attempting to connect through RSLinx using DF-1 protocol with different configurations such as CRC and BCC error checking, and adjusting the station number, may help establish a connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How do I know if my SLC 5/05 PLC is properly connected when the ENET LED is on but there is no activity shown on the RJ45 port LEDs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the ENET LED is on but there is no activity on the RJ45 port LEDs, it indicates that the PLC is powered and Ethernet is enabled, but there may be issues with the network configuration or communication settings that need to be addressed to establish a successful connection.</p>
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
