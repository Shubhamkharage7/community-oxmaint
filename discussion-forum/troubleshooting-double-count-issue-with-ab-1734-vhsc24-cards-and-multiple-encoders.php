
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am facing an issue with a system that has two encoders from different manufacturers connected to two separate 1734-VHSC cards on different nodes within the machine. Every 1.3 to 1.5 seconds, the cards register a double count. This means that the count goes from 4000 to">
    <meta name="keywords" content="ab 1734-vhsc24 cards, troubleshoot double count issue, multiple encoders, system issue, different manufacturers, 1734-vhsc cards, machine nodes, count spikes, filter settings, counting process, rpi adjustment">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-double-count-issue-with-ab-1734-vhsc24-cards-and-multiple-encoders">
    <title>Troubleshooting Double Count Issue with AB 1734-VHSC24 Cards and Multiple Encoders | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Double Count Issue with AB 1734-VHSC24 Cards and Multiple Encoders | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am facing an issue with a system that has two encoders from different manufacturers connected to two separate 1734-VHSC cards on different nodes within the machine. Every 1.3 to 1.5 seconds, the cards register a double count. This means that the count goes from 4000 to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-double-count-issue-with-ab-1734-vhsc24-cards-and-multiple-encoders">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Double Count Issue with AB 1734-VHSC24 Cards and Multiple Encoders | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am facing an issue with a system that has two encoders from different manufacturers connected to two separate 1734-VHSC cards on different nodes within the machine. Every 1.3 to 1.5 seconds, the cards register a double count. This means that the count goes from 4000 to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-double-count-issue-with-ab-1734-vhsc24-cards-and-multiple-encoders"
      },
      "headline": "Troubleshooting Double Count Issue with AB 1734-VHSC24 Cards and Multiple Encoders",
      "description": "Hello everyone, I am facing an issue with a system that has two encoders from different manufacturers connected to two separate 1734-VHSC cards on different nodes within the machine. Every 1.3 to 1.5 seconds, the cards register a double count. This means that the count goes from 4000 to",
      "author": {
        "@type": "Person",
        "name": "asyl"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-14",
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
                <h1 class="text-white">Troubleshooting Double Count Issue with AB 1734-VHSC24 Cards and Multiple Encoders</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>asyl</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">222</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">445</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am facing an issue with a system that has two encoders from different manufacturers connected to two separate 1734-VHSC cards on different nodes within the machine. Every 1.3 to 1.5 seconds, the cards register a double count. This means that the count goes from 4000 to 8000 and then back to 4000 on the next scan. The trends show a consistent pattern until this interval, where there is a sudden spike in the count. I have experimented with various filter settings on the cards, but they only result in the cards stopping the counting process altogether. Adjusting the RPI and routine periods has also been unsuccessful in resolving the issue. When the RPI and routine periods match, the intervals are consistent. However, when they do not match, the system behaves erratically and produces double counts at random intervals.

Current system configuration:
- Processor: 1756-L72S V.30.11
- Rack Comms: 1756-EN2TR
- Cards: 1734-VHSC24 in separate nodes with 1734-AENTR communication modules
- Card RPI: 50ms
- AENTR RPI: 20ms
- Routine periods: 50ms
- Encoder 1: Beta LaserMike laser encoder set for 10k pulses per foot
- Encoder 2: Dynapar 10k PPR rotary encoder with 4.25" diameter wheel</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for the best practices for encoder signal wiring? Learn about encoder wiring tips from Dynapar here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The encoders are connected to inputs a, a not, b, and b not. The cards are configured for encoder x1, with a roll over setting of 16777216, a preset value of 0, and an attenuator set to 1. This same setup is also applied to x4. Initially, I tried using x1 due to its capability of handling frequencies up to 1Mhz, while x4 is limited to 250Khz. Shielded cables are utilized for connecting the encoders to the cards. One of the cables used is a factory-made AMCI cable for the dynapar encoder, while the other cable for the laser encoder is a Belden cable with 3 shielded pairs. The wiring is positioned away from any 480v lines and servo motors to avoid interference. The laser encoder is connected to a dynapar splitter card, which then sends the signal to both the VHSC card and a flying cut off controller. The cut off system is functioning properly. Despite observing periodic spikes on both encoders, I suspect that the issue may not be related to electrical noise but rather a communication setting problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asyl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you disabled the default AC 50hz filter? This setting can lead to inaccurate counts at higher speeds. If direction sensing is not required, try switching to Count mode to troubleshoot the issue further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I turned off the filters because the card stops counting when any filter is activated. I will test the count mode on Monday. The direction is not important, as I just require the speed and distance data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asyl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome back to the PLCTalk forum community! When the RPI and routine periods are in sync, the system operates smoothly. However, if they don't match up, the system can become erratic and result in sporadic double counts. 

The primary function of the 1734-VHSC modules is to accurately count up to a specific pulse number, typically representing a distance, and quickly activate onboard outputs. Alternatively, they are proficient at measuring rates. Due to only reporting accumulated values via the module RPI, these modules may not be ideal for most distributed motion applications and do not support true "motion control" with CIP Motion.

Regarding the Card RPI (50ms), AENTR RPI (20ms), and routine periods (50ms), it is crucial to focus on the module DPI and routine for effective operation. Adjusting the RPI for both VHSCs to 25 milliseconds or less may help ensure a data update between routines. Utilizing the Copy Synchronous (CPS) instruction to transfer data into a UDT before running logic can also improve performance.

Additionally, incorporating GSV instructions to monitor EntryStatus for the 1734-VHSC modules every 5 or 10 ms can help prevent connection issues. Setting up a mirrored Ethernet switch port and using Wireshark to analyze traffic on one of the 1734-AENT adapters can identify any glitches in the data transmission process. by analyzing the EtherNet/IP traffic, any frequency of glitches can be easily identified.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I am intrigued by the Beta LaserMike laser encoder set to produce 10,000 pulses per foot and am curious to learn more about its functionality. My experience has mostly been with "absolute incremental encoders" that transmit an absolute value through a series of incremental pulses. Is this similar to what the Beta LaserMike does, while the Dynapar is more commonly used for contact wheel and rotary applications?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Dynapar RIMSS2 splitter card allows you to receive split signals in various voltages, making it versatile for different applications. For example, my servo controller requires a 5 VDC signal, while a 1734-VHSC24 with 24 VDC can also be used. When using this card, ensure that your power supply can handle the necessary power for the card, encoder, and outputs on channel 1.

Looking for an encoder signal splitter? The RIM SS2 Encoder Splitter from Dynapar splits one encoder's signal into two outputs, providing optically isolated outputs to combat noise and interference issues. Find out more at www.dynapar.com.

The laser encoder is equipped with isolated relays that generate a signal similar to a traditional rotary encoder. It features setup software for adjusting resolutions and other settings like walking thresholds. This device emits two lasers that intersect around 12 inches from the lens, requiring material to be present at the intersection for proper reading. The encoder produces quadrature signals on the relays and offers various other signal options. Newer versions of the laser encoder also support Ethernet IP integration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asyl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am utilizing a 1734-VSHC card to monitor a motor encoder for position. It was essential for us to enable the filters to ensure accurate readings. Below are the settings I have configured that might be beneficial for your setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kekrahulik mentioned using a 1734-VSHC card to monitor a motor encoder for position. They discovered that enabling filters was necessary for optimal performance. They shared their settings in the attachment (72578). Make sure to click on the attachment to view it. It is recommended to use counter mode, as suggested earlier. Happy monitoring!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the double count issue with AB 1734-VHSC24 cards and multiple encoders?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The double count issue could be a result of mismatched RPI and routine periods, leading to erratic behavior and double counts at random intervals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the double count problem with the 1734-VHSC cards?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Experiment with different filter settings on the cards, ensure the RPI and routine periods are matching, and check for any inconsistencies in the system configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it common for the 1734-VHSC24 cards to register double counts intermittently?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: No, the double count issue is not a common occurrence and usually indicates a specific configuration or synchronization problem within the system setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What impact do different encoder types have on the double count issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The use of different encoder types, such as the Beta LaserMike laser encoder and Dynapar rotary encoder, could contribute to the double count problem if their pulses per revolution (PPR) settings or wheel diameters are not properly synchronized.</p>
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
