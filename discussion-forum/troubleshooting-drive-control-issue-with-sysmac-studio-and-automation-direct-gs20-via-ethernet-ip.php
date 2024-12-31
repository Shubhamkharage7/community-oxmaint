
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently attempting to control a drive using Sysmac Studio. I am able to successfully ping the drive and observe the logic bits changing as commanded. However, despite all parameters appearing correct on both the drive and PLC connection sides, the drive is not performing its operations.">
    <meta name="keywords" content="troubleshooting drive control, sysmac studio, automation direct gs20, ethernet/ip, ping drive, logic bits, drive operations, fwd/stop indicators, keypad, plc connection, resolve drive control issue, drive parameters, drive troubleshooting, sys">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-drive-control-issue-with-sysmac-studio-and-automation-direct-gs20-via-ethernet-ip">
    <title>Troubleshooting Drive Control Issue with Sysmac Studio and Automation Direct GS20 via Ethernet/IP | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Drive Control Issue with Sysmac Studio and Automation Direct GS20 via Ethernet/IP | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently attempting to control a drive using Sysmac Studio. I am able to successfully ping the drive and observe the logic bits changing as commanded. However, despite all parameters appearing correct on both the drive and PLC connection sides, the drive is not performing its operations.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-drive-control-issue-with-sysmac-studio-and-automation-direct-gs20-via-ethernet-ip">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Drive Control Issue with Sysmac Studio and Automation Direct GS20 via Ethernet/IP | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently attempting to control a drive using Sysmac Studio. I am able to successfully ping the drive and observe the logic bits changing as commanded. However, despite all parameters appearing correct on both the drive and PLC connection sides, the drive is not performing its operations.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-drive-control-issue-with-sysmac-studio-and-automation-direct-gs20-via-ethernet-ip"
      },
      "headline": "Troubleshooting Drive Control Issue with Sysmac Studio and Automation Direct GS20 via Ethernet/IP",
      "description": "Hello, I am currently attempting to control a drive using Sysmac Studio. I am able to successfully ping the drive and observe the logic bits changing as commanded. However, despite all parameters appearing correct on both the drive and PLC connection sides, the drive is not performing its operations.",
      "author": {
        "@type": "Person",
        "name": "Manthan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-24",
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
                <h1 class="text-white">Troubleshooting Drive Control Issue with Sysmac Studio and Automation Direct GS20 via Ethernet/IP</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>21 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">928</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">94</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently attempting to control a drive using Sysmac Studio. I am able to successfully ping the drive and observe the logic bits changing as commanded. However, despite all parameters appearing correct on both the drive and PLC connection sides, the drive is not performing its operations. The FWD/STOP indicators on the keypad are illuminated. Have you faced this issue before? If you have, please share how you resolved it. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure safety compliance, ensure proper wiring of both STO1 and STO2 to +24vdc if the safety torque option is not being utilized. Check and set the following parameters for communication cards: P00.21 and P00.31 to 5, P00.20 and P00.30 to 8. Additionally, set P09.74 to 1 for Ethernet IP functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The STO fault appears when the circuit is disconnected, indicating a connection issue that needs to be tested. It is important to ensure that all components are correctly connected to prevent any disruptions in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure you have verified the following settings: P00.21 and P00.31 should be set to 5 on the communication card, while P00.20 and P00.30 should be set to 8 on the same communication card. Additionally, ensure that P09.74 is set to 1 for Ethernet IP connectivity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, all of them are set to be exactly like that.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Every setting in this image has been configured accordingly, except for the IP address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you inputted "2" into P09.91 bit1=1 to transfer parameters from the drive to the communication card?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After the comm card receives an IP address, it can be successfully pinged. Additionally, the Stanca drive is displaying as online. However, despite entering the "run fwd" command, it is still not functioning as expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in need of a code snippet? Make sure to set bit 1 in control word 0 and consider setting bit 4 simultaneously. Check if the speed sent to control word 1 is showing up on the VFD display. (Remember, all numbering is based on 0).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing instance 100 in the system, I noticed that both bits 0.1 and 0.4 are activated when I transfer word 18. I experimented with transferring individual bits and the entire word, focusing on both RUN FWD and RUN REV operations. However, the VFD did not respond to any operations. The same scenario played out when I examined instance 101 (Monitor) - when adjusting VFD settings from keypad controls to Eip control, bits 1.8 and 1.10 were triggered, indicating that the VFD communicated with the PLC. These signals ceased when I reverted back to keypad control. Additionally, when running the VFD via the keypad, the PLC displayed activation of bits 1.0, 1.1 (for RUN), and bit 1.12 (indicating VFD operation).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to see the PLC-controlled speed being shown on the VFD display?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I did not check the VFD side, but on the PLC side, the display shows both the commanded frequency and output frequency remaining at 0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you want to control speed through the PLC or utilize the Keypad speed functionality in REM mode? If you prefer the PLC method, you must input a speed value (multiplied by 100) into control word 1. This value will be visible on the VFD interface in REM mode, even when the motor is not in operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am transferring data (command frequency) from a Programmable Logic Controller (PLC) to a Variable Frequency Drive (VFD) through Word 1. I am sending a signal of 6000 (60Hz) but the VFD is displaying 00.00 Hz.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>On page 26 of the manual, you can find a detailed example of how to control a VFD using an Automation Direct PLC. This resource may be beneficial for those looking to automate their processes. Visit the link below to access the manual: https://cdn.automationdirect.com/static/manuals/gs20m/appxd.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Manthan confirmed that data (command frequency) is being sent from the PLC to the VFD via Word 1 at a rate of 6000 (60Hz). However, the VFD is displaying 00.00 Hz. If the displayed frequency on the VFD does not match your command frequency, it indicates a configuration issue. Double-check the parameters and ensure that P00.20 is set to 8 for proper operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I do not receive any feedback from the Variable Frequency Drive (VFD) through EtherNet/IP or keypad control, I would assume that it has not been properly configured. However, whenever I adjust the VFD parameters, the VFD monitoring system updates accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the Variable Frequency Drive (VFD) is showing 0Hz even though the Programmable Logic Controller (PLC) is sending a 60Hz command, it may be due to an incorrect configuration setting in the VFD. The VFD should accurately display the commanded frequency from Ethernet/IP (E/IP) at all times, regardless of whether it is running or not. This issue can be resolved by ensuring that the VFD parameters are set up correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm curious to learn more about what I may be overlooking in regards to VFDs and their reluctance to control speed. What other factors should I be considering?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you confirmed that the drive is not set to LOCAL control mode? While the GS20 may not have dedicated Local/Remote buttons like the GS4, it is possible to switch modes using parameters or digital input settings. Make sure to check and adjust the control mode settings accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I can confirm that the issue is being managed through EIP (Ethernet/IP). I have been in contact with technical support from both Sysmac and Automation Direct, but they are unable to determine why the system is not responding to commands.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manthan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider performing a factory reset on the drive and entering the parameters again. This step may assist in resolving any issues you are experiencing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the drive not performing its operations despite correct parameters and successful communication?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The illuminated FWD/STOP indicators on the keypad could indicate a specific fault condition or error that is preventing the drive from operating as expected. Further troubleshooting may be required to identify and resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a drive control issue between Sysmac Studio and an Automation Direct GS20 drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the issue, you can start by checking the drive's fault codes, ensuring correct parameter settings, verifying the communication setup in Sysmac Studio, and confirming that the command signals are being sent correctly to the drive.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to resolve a drive control issue when using Ethernet/IP communication?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Some steps to resolve the issue could include checking the network configuration, ensuring proper data exchange between the PLC and drive, verifying the firmware compatibility, and reviewing the communication settings in both Sysmac Studio and the drive's configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How important is it to monitor the logic bits changing in Sysmac Studio while troubleshooting a drive control issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Monitoring the logic bits changing in Sysmac Studio can help confirm that the command signals are being transmitted as intended from the PLC to the drive. However, it is also crucial to investigate further if the drive is not responding as expected despite the logic bits changing.</p>
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
