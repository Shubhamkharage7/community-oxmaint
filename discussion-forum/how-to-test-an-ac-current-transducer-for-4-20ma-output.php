
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone,I have an AC current transducer that I need to test to ensure it is producing a 4-20mA output. I am using an AE001 unit with a simple M12 cable. I have connected the brown wire to L+ on the 24V supply of the PLC, the blue wire">
    <meta name="keywords" content="ac current transducer, 4-20ma output, ae001 unit, m12 cable, plc, io-link output, x20ds4387 io-link module, current sensor, bench testing, act050-42l-f, if">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-test-an-ac-current-transducer-for-4-20ma-output">
    <title>How to Test an AC Current Transducer for 4-20mA Output | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Test an AC Current Transducer for 4-20mA Output | Oxmaint Community">
    <meta property="og:description" content="Hello everyone,I have an AC current transducer that I need to test to ensure it is producing a 4-20mA output. I am using an AE001 unit with a simple M12 cable. I have connected the brown wire to L+ on the 24V supply of the PLC, the blue wire">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-test-an-ac-current-transducer-for-4-20ma-output">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Test an AC Current Transducer for 4-20mA Output | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone,I have an AC current transducer that I need to test to ensure it is producing a 4-20mA output. I am using an AE001 unit with a simple M12 cable. I have connected the brown wire to L+ on the 24V supply of the PLC, the blue wire">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-test-an-ac-current-transducer-for-4-20ma-output"
      },
      "headline": "How to Test an AC Current Transducer for 4-20mA Output",
      "description": "Hello everyone,I have an AC current transducer that I need to test to ensure it is producing a 4-20mA output. I am using an AE001 unit with a simple M12 cable. I have connected the brown wire to L+ on the 24V supply of the PLC, the blue wire",
      "author": {
        "@type": "Person",
        "name": "afm"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-13",
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
                <h1 class="text-white">How to Test an AC Current Transducer for 4-20mA Output</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">217</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">483</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone,I have an AC current transducer that I need to test to ensure it is producing a 4-20mA output. I am using an AE001 unit with a simple M12 cable. I have connected the brown wire to L+ on the 24V supply of the PLC, the blue wire to L- on the PLC's ground, and the black wire to the IO-Link output of the PLC. My PLC is powered by an X20DS4387 IO-link module. However, I am not receiving any output when monitoring my PLC live. There are no terminals on this CT for external bench testing like other transducers I have used in the past. (Current sensor with IO-Link)Previously, I successfully used an ACT050-42L-F with an IFM DP2200 connected in the same way to my PLC. I was able to see an output of 4.0 mA with no load. My objective is to replace these two components with this single sensor. As a newcomer to instrumentation, any advice would be greatly appreciated. Thank you!Currently, I have limited testing and measuring equipment available, including a basic multimetre, signal generator, and adjustable power supply for bench testing. You can find these tools here:https://www.amazon.com/Adjustable-Generator-Simulator-Controller-Calibration/dp/B0991ZSBHJ/https://www.amazon.com/SHNITPWR-Universal-Adjustable-Switching-100V-240V/dp/B08N4R48LJ/«Last Edit: Today at 04:51:38 pm by am1»</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you receiving the 4-20 mA signal through the white wire? Utilizing this signal for the PLC's analog input could streamline your system. Which specific PLC model are you using?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The system in question is a B&R X20CP0483 with a limited analog input module for +/-10V signals (X20AI4222). I also have an IO-Link module (X20DS4387) capable of functioning as IO-Link or standard input/outputs. I was considering bypassing the need for a converter to obtain my desired output. However, it seems that a converter is necessary when utilizing this hardware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To convert a 4-20 mA signal to a 0-10 V voltage, connect a 500 ohm resistor between your analog input and ground. This simple modification allows for easy monitoring and control of the signal output.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The voltage range may vary from 2 to 10 volts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I test an AC current transducer for a 4-20mA output?
- To test an AC current transducer for a 4-20mA output, ensure correct wiring by connecting the brown wire to L+, the blue wire to L-, and the black wire to the IO-Link output of the PLC.
  
2. Why am I not receiving any output when monitoring my PLC live?
- If you are not receiving any output when monitoring your PLC live, double-check the wiring connections and ensure they are correctly aligned with the transducer specifications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What equipment can I use for testing and measuring the AC current transducer?</h4>
<p class='text-muted'><strong>Answer:</strong> - For testing and measuring the AC current transducer, you can use basic equipment like a multimeter, signal generator, and an adjustable power supply for bench testing.</p>
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
