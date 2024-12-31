
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! After conducting extensive research on various forums and blogs, it appears that the 1794-VHSC module is not popular among users. I encountered some issues myself while using this module to count pulses from a flow meter. Initially, I was unsure if I needed the module or if">
    <meta name="keywords" content="1794-vhsc module, pulse counter module, troubleshooting, flow meter, pulse output, digital input, wiring, a input, 0v reference, encoder, faults, flashing module, status bits, plc 1769">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1794-vhsc-pulse-counter-module-issues">
    <title>Troubleshooting 1794-VHSC Pulse Counter Module Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1794-VHSC Pulse Counter Module Issues | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! After conducting extensive research on various forums and blogs, it appears that the 1794-VHSC module is not popular among users. I encountered some issues myself while using this module to count pulses from a flow meter. Initially, I was unsure if I needed the module or if">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1794-vhsc-pulse-counter-module-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1794-VHSC Pulse Counter Module Issues | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! After conducting extensive research on various forums and blogs, it appears that the 1794-VHSC module is not popular among users. I encountered some issues myself while using this module to count pulses from a flow meter. Initially, I was unsure if I needed the module or if">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1794-vhsc-pulse-counter-module-issues"
      },
      "headline": "Troubleshooting 1794-VHSC Pulse Counter Module Issues",
      "description": "Hello everyone! After conducting extensive research on various forums and blogs, it appears that the 1794-VHSC module is not popular among users. I encountered some issues myself while using this module to count pulses from a flow meter. Initially, I was unsure if I needed the module or if",
      "author": {
        "@type": "Person",
        "name": "AD-PLC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-14",
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
                <h1 class="text-white">Troubleshooting 1794-VHSC Pulse Counter Module Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">523</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">499</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! After conducting extensive research on various forums and blogs, it appears that the 1794-VHSC module is not popular among users. I encountered some issues myself while using this module to count pulses from a flow meter. Initially, I was unsure if I needed the module or if a digital input would suffice. Luckily, the flow meter offers a scalable pulse output feature, which I have set to 100:1.

My inquiry consists of two parts. Firstly, does anyone have information on the correct wiring for this module? I managed to get it to count on the A input, although the manual indicates that the A indicator should be flashing. After discussing with a colleague, we connected 0V to the A- terminal, which resolved the issue. However, we noticed that the pulses were rising even when there was no flow, and the count exceeded 1000 pulses after reaching the target. The manual specifies that the A and A_ inputs are 24V, possibly intended for an encoder (with which I have limited experience). Do I need a 0V reference for the card to function properly?

Secondly, has anyone encountered faults with this module? It worked flawlessly for several days before suddenly starting to flash (not to be confused with the 1794-AENTR module). Despite checking the power supply, ensuring it was not in PROG mode, and verifying network connections, status bits like Status.1 and Status.15 were set to one. The flashing module prevented pulse capture, with no active filters and a rollover set to 16777215. The PLC in use is the 1769-L30, housed in a rack containing an AENTR, digital input/output modules, analog input module, and the VHSC module.

Overall, it seems like a configuration issue is at play, but I'm unsure of the exact cause. Let's continue troubleshooting together!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using a flow meter with a specific type of output and voltage? Most discrete modules have a 0V common reference and require a +24V supply for each input. However, encoders often use differential signaling for noise immunity. The VHSC was designed to accommodate these signals. To use a single-ended device with a differential input, connect the DC Common to the -Signal terminal as suggested by your colleague.

For a single pulse generator, connect the flowmeter output to +A and the flowmeter DC common to -A. Refer to Page 19 of the user manual for a diagram illustrating a mechanical dry contact connected to the second counter's Z-input. The -Z is linked to the module DC Common, while the +Z goes through the dry contact to the module +24V power, combining the module's logic power and input channel power.

One common issue across the FLEX line is that using the same power supply for the network adapter and analog/specialty I/O modules can sometimes cause the network adapter to not recognize the analog/specialty module during startup. To address this, add a timing relay to ensure specialty modules boot up before the I/O Adapter.

If the module is accumulating pulses when there is no flow, check if the input is flashing, indicating a signal that is recognized as a pulse. Using an oscilloscope or scopemeter can help analyze signals of this nature.

In Counter mode, the module will continuously count without stopping at the preset value. It will only stop counting if a Reset pulse or software Reset command is received. For flow meter applications, it is recommended to set the module in Rate Measurement mode to count pulses on Channel A over a defined period and provide both a pulse count and pulses/time rate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am also confused about the possible configuration error. Can you specify where you observed the setting of Bit 1 and Bit 15?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear @Ken Roach, I took some time to research the terminology you mentioned (single vs diff) to gain a better understanding of these circuits. The diagram shows the recommended connection method by the OEM for the pulse output, which is an open-collector type utilizing an optocoupler. The TurbineInc meter is powered by a 24VDC source connected to terminal 5 with a 1.5Kohm pull-up resistor, approved by the OEM. From terminal 5, the power goes to the A input while terminal 6 receives 0V.

The OEM suggests using a separate power source for the meter instead of loop power. Initially, I had loop power connected, but I switched to battery operation, as the pulses were erratic when using loop power. Despite following recommendations and making adjustments, the pulses continued to exhibit irregular behavior even when the system was not running, overshooting by about 1000 pulses before stabilizing.

I also encountered issues with lost pulses, indicated by an "E" status on the flow meter monitor, with approximately 50-60% of pulses being lost. The screenshots display this status in the monitor tag section of the controller tags. Upon inspecting the vhsc counter module, no faults were detected, but active bits were present in the status section, based on WORD values.

It appears that configuration-related issues were causing the erratic behavior, as even after making recommended changes to eliminate errors from the flow meter monitor, the pulses continued to fluctuate. The status.14 bit seemed active, as per the saved data before going offline.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, @AD-PLC! I am experiencing a problem similar to yours. Have you discovered any solutions for your issue yet? Thank you for your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mavericks</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Within the 1794-VHSC setup, the counters tab includes various filtering options. I currently have filtering enabled for A, B, and Z. However, if these filters are not set, my pulse count fluctuates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Mavericks,

I encountered a similar issue as you, but after retesting with new units, I was unable to replicate the problem. One key change I made was ensuring that I don't have multiple AENTRs on the network and using CAT6 cable. Everything now appears to be functioning properly. Some units in the field will be updated soon, with a digital input for counting being utilized. I will provide an update on this in a couple of weeks.

In the monitor tab, there should be indicators showing what's happening. Have you checked that? Additionally, is the VHSC module LED also flashing?

When the issue occurred, the manual suggests eight potential causes. It's important to systematically eliminate each possibility to identify the root cause.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user, kekrahulik, mentioned the options for filtering in the counters tab of the 1794-VHSC setup. They had set filtering for A, B, and Z, but experienced issues with losing and gaining pulses when these filters were not set. However, after setting up the pulses correctly, they were able to resolve the issue. It turned out that the problem lay in incorrect wiring, which was identified by examining the pulse output on the flow meter. The solution seemed straightforward after communicating with the OEM for guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @AD-PLC, I encountered a similar problem to yours. Have you made any progress in solving it? Upon revisiting the system, I discovered that the issue was related to the AENTR. By removing and reinserting one of the ethernet cables, the blinking light issue was resolved. It seems that wiggling the cable caused a loss in communication. While I can't confirm if this is the root cause, I suggest replacing the module to determine if it resolves the issue. Since taking this action, the problem has not recurred.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How should the 1794-VHSC Pulse Counter Module be wired for proper functionality?
   - The A indicator should be flashing when the module is counting pulses. If this is not happening, ensure that 0V is connected to the A- terminal. This reference connection may be necessary for correct operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why are pulses rising even when there is no flow, and the pulse count exceeds the target with the 1794-VHSC module?</h4>
<p class='text-muted'><strong>Answer:</strong> - The A and A_ inputs on the module are 24V, which might be intended for an encoder setup. For proper functioning, it is advised to have a 0V reference connected. Verify the wiring and make sure the connections are correct.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be causing the 1794-VHSC Pulse Counter Module to suddenly start flashing and prevent pulse capture?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the module starts flashing and disrupts pulse capture, check the power supply, ensure it is not in PROG mode, and verify network connections. Additionally, monitor status bits like Status.1 and Status.15 for any anomalies that might indicate a fault in the module's operation.</p>
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
