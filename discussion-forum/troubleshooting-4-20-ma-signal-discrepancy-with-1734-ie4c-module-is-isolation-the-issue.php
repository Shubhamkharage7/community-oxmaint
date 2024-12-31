
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am attempting to utilize a device that outputs isolated 4-20 mA signals, but I only have available PLC inputs in a 1734-IE4C module, designed for Non Isolated analog signals. Despite this difference, I connected the devices mA + to the card and the mA - to my 0">
    <meta name="keywords" content="4-20 ma signal, 1734-ie4c module, isolated signals, non-isolated analog signals, ma +, ma -, plc inputs, electrical control cabinet, grounded, reading discrepancy, isolation issue, troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-4-20-ma-signal-discrepancy-with-1734-ie4c-module-is-isolation-the-issue">
    <title>Troubleshooting 4-20 mA Signal Discrepancy with 1734-IE4C Module: Is Isolation the Issue? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 4-20 mA Signal Discrepancy with 1734-IE4C Module: Is Isolation the Issue? | Oxmaint Community">
    <meta property="og:description" content="I am attempting to utilize a device that outputs isolated 4-20 mA signals, but I only have available PLC inputs in a 1734-IE4C module, designed for Non Isolated analog signals. Despite this difference, I connected the devices mA + to the card and the mA - to my 0">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-4-20-ma-signal-discrepancy-with-1734-ie4c-module-is-isolation-the-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 4-20 mA Signal Discrepancy with 1734-IE4C Module: Is Isolation the Issue? | Oxmaint Community">
    <meta name="twitter:description" content="I am attempting to utilize a device that outputs isolated 4-20 mA signals, but I only have available PLC inputs in a 1734-IE4C module, designed for Non Isolated analog signals. Despite this difference, I connected the devices mA + to the card and the mA - to my 0">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-4-20-ma-signal-discrepancy-with-1734-ie4c-module-is-isolation-the-issue"
      },
      "headline": "Troubleshooting 4-20 mA Signal Discrepancy with 1734-IE4C Module: Is Isolation the Issue?",
      "description": "I am attempting to utilize a device that outputs isolated 4-20 mA signals, but I only have available PLC inputs in a 1734-IE4C module, designed for Non Isolated analog signals. Despite this difference, I connected the devices mA + to the card and the mA - to my 0",
      "author": {
        "@type": "Person",
        "name": "A_G"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-17",
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
                <h1 class="text-white">Troubleshooting 4-20 mA Signal Discrepancy with 1734-IE4C Module: Is Isolation the Issue?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>A_G</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">379</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">436</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am attempting to utilize a device that outputs "isolated 4-20 mA" signals, but I only have available PLC inputs in a 1734-IE4C module, designed for Non Isolated analog signals. Despite this difference, I connected the device's mA + to the card and the mA - to my 0 VDC common in the electrical control cabinet, which is not grounded. Although I am getting readings around 4.3 mA in the PLC, I expected a reading closer to 15 mA. Could this discrepancy be due to the non-isolated nature of the 1734-IE4C input card? Is there a way to make it function correctly, or do I need to purchase a different card designed for isolated signals? I have tried searching online for a solution, but as a newcomer to Point IO, I have not found the information I need. Thank you for any assistance you can provide.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Isolated output refers to a sensor or converter with a built-in optocoupler, ensuring that the sensor's power source is separate from the output. This means that the output must be powered by the analog input card, typically through a 2-wire setup where the card supplies the necessary voltage for a 4-20mA loop. It is important to determine whether the card is isolated or non-isolated based on the specific make and part number of the device. In practical terms, the sensor requires a 24v power supply while the analog card needs to be activated by supplying 24v from the card or another source in a 2-wire configuration. For analog cards, the 4-20mA signal power is drawn from the card's internal bus, resulting in a 4-wire connection setup as detailed in the manual for the 1734-IE4C | Allen-Bradley POINT I/O 4 Point Analog Input Module available at www.rockwellautomation.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To check if the device is receiving the necessary 24V, use a V-meter on the input+ and - leads. Verify the output current by measuring 15 mA with an mA-meter on the output+ and - leads. An isolated transmitter can function with a non-isolated PLC input, but the current signal's path to and from the transmitter must be determined. A_G noted that the 0 VDC common is ungrounded, which may be relevant. However, if the 0 VDC is shared between the transmitter and the PLC, it should be acceptable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky explained that having an isolated output in a sensor or converter means that it is equipped with an optocoupler, which separates the sensor's supply from the output. This requires the output to be supplied by the analogue input card through a 2-wire wiring configuration in a 4-20ma loop. In contrast, non-isolated outputs are connected to a shared common.

Essentially, for a sensor to function, a 24v supply is needed, and the analogue card must be active by supplying 24v in a 2-wire setup. In the case of an analogue card, the 4-20ma signal is sourced from the card's internal bus, necessitating a 4-wire configuration as indicated in the user manual for a proper connection.

The "Prismatic Trace Gas Analyzer" instrument requires a +24 VDC supply, but it may not be immediately clear where it should be connected. Contacting the vendor for clarification on wiring instructions is advised. JesperMP recommended using a V-meter to check the input leads for the required 24V and an mA-meter on the output leads for the expected 15 mA output.

I appreciate the guidance provided by both Parky and JesperMP and will follow their suggestions to troubleshoot the wiring of the device. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>A_G</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the discrepancy in the 4-20 mA signal readings on the 1734-IE4C module when using an isolated device?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discrepancy in readings could be due to the 1734-IE4C module being designed for non-isolated analog signals while the device outputs isolated 4-20 mA signals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is the non-isolated nature of the 1734-IE4C input card affecting the readings?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the non-isolated nature of the 1734-IE4C input card could be affecting the readings of the isolated 4-20 mA signals from the device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a way to make the 1734-IE4C module function correctly with isolated signals, or do I need to purchase a different card?</h4>
<p class='text-muted'><strong>Answer:</strong> - It may be necessary to purchase a different input card designed specifically for isolated signals to ensure accurate readings and proper functionality with isolated 4-20 mA signals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Where can I find information or resources to troubleshoot this issue, especially as a newcomer to Point IO?</h4>
<p class='text-muted'><strong>Answer:</strong> - As a newcomer to Point IO, you can seek assistance from online forums, user manuals, technical support from the manufacturer, or consult with experienced professionals in the field for guidance and solutions.</p>
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
