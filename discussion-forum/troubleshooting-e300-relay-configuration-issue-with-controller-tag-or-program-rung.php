
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="After installing a new module in the Ethernet tree through Logix Designer, the I/O indicator is showing a solid Green light. I am able to observe tag updates on my PC using the Logix Designer and the Local I/O on a relay. This relay is connected to a Forward">
    <meta name="keywords" content="troubleshooting, e300 relay configuration, controller tag, program rung, logix designer, ethernet tree, i/o indicator, tag updates, local i/o, forward & reversing starter, re-configure command, energize relay">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-e300-relay-configuration-issue-with-controller-tag-or-program-rung">
    <title>Troubleshooting E300 Relay Configuration Issue with Controller Tag or Program Rung | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting E300 Relay Configuration Issue with Controller Tag or Program Rung | Oxmaint Community">
    <meta property="og:description" content="After installing a new module in the Ethernet tree through Logix Designer, the I/O indicator is showing a solid Green light. I am able to observe tag updates on my PC using the Logix Designer and the Local I/O on a relay. This relay is connected to a Forward">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-e300-relay-configuration-issue-with-controller-tag-or-program-rung">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting E300 Relay Configuration Issue with Controller Tag or Program Rung | Oxmaint Community">
    <meta name="twitter:description" content="After installing a new module in the Ethernet tree through Logix Designer, the I/O indicator is showing a solid Green light. I am able to observe tag updates on my PC using the Logix Designer and the Local I/O on a relay. This relay is connected to a Forward">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-e300-relay-configuration-issue-with-controller-tag-or-program-rung"
      },
      "headline": "Troubleshooting E300 Relay Configuration Issue with Controller Tag or Program Rung",
      "description": "After installing a new module in the Ethernet tree through Logix Designer, the I/O indicator is showing a solid Green light. I am able to observe tag updates on my PC using the Logix Designer and the Local I/O on a relay. This relay is connected to a Forward",
      "author": {
        "@type": "Person",
        "name": "RHEX-Jeff"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">Troubleshooting E300 Relay Configuration Issue with Controller Tag or Program Rung</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RHEX-Jeff</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">178</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">159</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>After installing a new module in the Ethernet tree through Logix Designer, the I/O indicator is showing a solid Green light. I am able to observe tag updates on my PC using the Logix Designer and the Local I/O on a relay. This relay is connected to a Forward & Reversing Starter, which operates correctly. However, when I try to re-configure the command to access the controller, I can write a 1 to Tag E300 Relay #(0), but it fails to energize as it did with local control. On the other hand, Relay #2 responded correctly to the configuration command (tripRelay) and energized successfully. What could I be overlooking in this setup?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you configured your motor control operating mode settings, including Control Strategy and Relay mode settings on all three relays? If you are utilizing the local control module or LCD interface, have you ensured that it is switched out of local mode before conducting control tests with the PLC processor? Have you attempted to reset any trips or faults that have occurred?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the device setup parameters are visible on the screen shots. Additionally, it is worth noting that both the MS and NS LED indicators are solid green.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RHEX-Jeff</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to RHEX-Jeff, it seems that the parameters for the device setup are causing some confusion. The LED lights for MS & NS are solid green, indicating a connection. However, upon reviewing the screenshots provided, there doesn't seem to be an obvious issue. It's important to note that a relay set as a "Control Relay" will not activate if the E300 is tripped. To further troubleshoot, you can check the configuration in Studio 5000 by accessing the device in your IO tree. This will display a wiring diagram that should match your actual electrical setup. Additionally, you have the ability to modify the configuration offline, while in the programming phase, or by deleting and re-adding the module. 

If you are utilizing the local station configuration, it's possible that the control operating mode may be incorrect. It's recommended to cross-reference the web diagnostic and Studio 5000 descriptions to ensure they align properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have extensively tested different configurations by switching between hard-wire inputs (input 0 and input 1) for forward and reverse functions. All parameters are functioning normally, and I have tested the trip feature which disables output 0 and output 1 while output 2 opens the neutral. By resetting the E300 using the remote or blue reset button, everything starts working again. However, when switching back to PLC control, everything loads correctly but activating output relay #0 using Controller Tag or Program Rung seems to be in a read-only mode. Although I can see the tag update from the program rung, output relay #0 and output #1 do not energize, which is quite perplexing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RHEX-Jeff</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The E300 inputs are functioning correctly on a local level as shown in the first picture, but there is an issue with the PLC Controller Tag not working as depicted in the second picture.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RHEX-Jeff</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're experiencing issues with your controller not working with local inputs, it might be a configuration issue. Try changing the config to "Controller or Local Inputs" and connect a toggle switch to IN3 for better results. To troubleshoot further, switch the "Control Strategy" to "Overload" and set R0 and R1 to "General Purpose". Test the output controller tags to see if the outputs are functioning properly. This should help narrow down the possible causes of the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When operating the E300 in starter modes, consider switching from using Pt00Data to LogicDefinedPt00Data. In these modes, the E300 relies on internal DeviceLogix programming to manage its outputs. The PLC controller does not directly control the outputs; instead, it manipulates the logic outputs, which in turn interact with the DeviceLogix program within the E300 module.

Referencing the manual (193-UM015), the E300 relay's Operating Mode Reversing Starter (Network) relies on network tags like LogicDefinedPt00Data in Output Assembly 144 to manage Relay 0, controlling the forward contactor coil. Similarly, LogicDefinedPt01Data in Output Assembly 144 is used for Relay 1, which manages the reversing contactor coil. Both LogicDefinedPt00Data and LogicDefinedPt01Data are persistent values, ensuring that the reversing starter remains active when either has a value of 1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I proceeded to modify the "Control Strategy" to "Overload" and adjusted both R0 & R1 to "General Purpose." After downloading the changes, I was able to access the controller tags and successfully update the data from 0 to 1, causing each relay to activate. It appears that the adjustment in the control strategy to "Overload" is not related to motor overload. Nonetheless, I can still work with this in programming to achieve my intended goals. As an experiment, I will also implement your second suggestion to see its impact.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RHEX-Jeff</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I should have sought assistance yesterday around midday! Thank you for your help, it worked perfectly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RHEX-Jeff</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That's fantastic news! Just a reminder that when in "General Purpose" mode, the relay will not deactivate automatically if the E300 is tripped.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I conducted a test without much thought and the trip was successful, causing it to drop out. I also utilized relay 2 as a trigger and passed the coil neutral through it, leading to the starters dropping out. I will perform further testing and tidy up the setup. Additionally, I tested energizing both R0 and R1 simultaneously, and the software configuration successfully deactivated both. I have also cross-wired both coils through Aux contacts. Thank you once again for your assistance and time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RHEX-Jeff</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the E300 Relay failing to energize after re-configuring the command to access the controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue could be related to the configuration settings or communication setup between the relay and the controller. Check for any misconfigurations or communication errors that may be preventing the E300 Relay from responding correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing the E300 Relay to not respond to the configuration command while Relay 2 works fine?</h4>
<p class='text-muted'><strong>Answer:</strong> - There might be specific settings or parameters unique to the E300 Relay that need to be adjusted or checked. Compare the configuration settings of the E300 Relay with Relay 2 to identify any discrepancies that could be causing the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot the E300 Relay configuration issue with the controller tag or program rung?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can start by verifying the configuration of the E300 Relay in the Logix Designer software, ensuring that the tag updates are correctly mapped and that the communication setup with the controller is configured properly. Additionally, check for any errors or warnings in the software that could provide clues to the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a specific step-by-step process to troubleshoot E300 Relay configuration issues in Logix Designer?</h4>
<p class='text-muted'><strong>Answer:</strong> - Begin by checking the tag mappings and communication settings for the E300 Relay in the Logix Designer software. Verify that the controller tag is correctly linked to the relay and that the program rung logic is set up properly. If the issue persists,</p>
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
