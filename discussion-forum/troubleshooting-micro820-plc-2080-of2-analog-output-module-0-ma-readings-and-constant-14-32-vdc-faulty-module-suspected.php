
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I encountered an issue while trying to install a 2080-OF2 module for the first time on a Micro820 PLC. I suspect that the brand new module, purchased from an authorized distributor, may be faulty. Despite sending valid raw output counts from my logic, I am getting 0 mA on">
    <meta name="keywords" content="troubleshooting micro820 plc, 2080-of2 module, 0 ma readings, 32 vdc, faulty module, analog output, raw output counts, logic, root cause, constant voltage, current values, dam">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-micro820-plc-2080-of2-analog-output-module-0-ma-readings-and-constant-14-32-vdc-faulty-module-suspected">
    <title>Troubleshooting Micro820 PLC 2080-OF2 Analog Output Module: 0 mA Readings and Constant 14.32 VDC - Faulty Module Suspected? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Micro820 PLC 2080-OF2 Analog Output Module: 0 mA Readings and Constant 14.32 VDC - Faulty Module Suspected? | Oxmaint Community">
    <meta property="og:description" content="I encountered an issue while trying to install a 2080-OF2 module for the first time on a Micro820 PLC. I suspect that the brand new module, purchased from an authorized distributor, may be faulty. Despite sending valid raw output counts from my logic, I am getting 0 mA on">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-micro820-plc-2080-of2-analog-output-module-0-ma-readings-and-constant-14-32-vdc-faulty-module-suspected">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Micro820 PLC 2080-OF2 Analog Output Module: 0 mA Readings and Constant 14.32 VDC - Faulty Module Suspected? | Oxmaint Community">
    <meta name="twitter:description" content="I encountered an issue while trying to install a 2080-OF2 module for the first time on a Micro820 PLC. I suspect that the brand new module, purchased from an authorized distributor, may be faulty. Despite sending valid raw output counts from my logic, I am getting 0 mA on">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-micro820-plc-2080-of2-analog-output-module-0-ma-readings-and-constant-14-32-vdc-faulty-module-suspected"
      },
      "headline": "Troubleshooting Micro820 PLC 2080-OF2 Analog Output Module: 0 mA Readings and Constant 14.32 VDC - Faulty Module Suspected?",
      "description": "I encountered an issue while trying to install a 2080-OF2 module for the first time on a Micro820 PLC. I suspect that the brand new module, purchased from an authorized distributor, may be faulty. Despite sending valid raw output counts from my logic, I am getting 0 mA on",
      "author": {
        "@type": "Person",
        "name": "Eric @ ITC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">Troubleshooting Micro820 PLC 2080-OF2 Analog Output Module: 0 mA Readings and Constant 14.32 VDC - Faulty Module Suspected?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Eric @ ITC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1222</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">159</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I encountered an issue while trying to install a 2080-OF2 module for the first time on a Micro820 PLC. I suspect that the brand new module, purchased from an authorized distributor, may be faulty. Despite sending valid raw output counts from my logic, I am getting 0 mA on both channels. I have researched similar posts to troubleshoot my problem, but they mainly discuss the "raw count" issue, which I believe is not the root cause. Even though I am receiving a constant 14.32 VDC instead of the expected 0-10 VDC range, I am not getting any current values. This leads me to believe that the module might be damaged due to the higher voltage, preventing the current values from registering. Do you think this is a reasonable assumption? Let me know your thoughts on this issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountered a problem with the micro-controller that locks a channel when a broken wire is detected. One solution to try is to reset the module after a wire is disconnected on 2/24/2021. The 2085-OF4 module may stop working due to hardware errors detected by the DAC, like broken wires or high resistance loads on a specific channel. To resolve this issue, the corresponding channel is disabled until the error is cleared by the user. To learn more, refer to the Micro800 Discrete and Analog Expansion I/0 User Manual Publication 2080-UM003. CE errors can be addressed during run mode to clear hardware error bits and re-enable the disabled channel. Specific bits are associated with each channel (CEO for Bit 8, CE1 for Bit 9, CE2 for Bit 10, and CE3 for Bit 11). A value of 3848 will reset all 4 channels, while a value of 2056 will reset channel 3 (CE3).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>diat150</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the reply, diat150. I have noticed that the troubleshooting options for a 2085 expansion module differ from those for a 2080 plugin module. The plugin module only displays raw values without diagnostic bits. Moving the module to a different slot or power cycling it did not resolve the issue. It is puzzling to see voltage readings when no wires are connected to the terminals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eric @ ITC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I discovered a troubleshooting guide available to everyone regarding erratic readings in a specific module. While it may not directly address your issue, the recommended "fix" is definitely worth a shot. According to the guide on Rockwell Automation's website, the problem could potentially be caused by a corrupted project. The suggested solution involves removing the module from the project, saving it, downloading it to the PLC, re-inserting it, and downloading it again. This may seem unconventional, but it is recommended to give it a try.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The solution suggested by joseph_e2 may have seemed unusual, but it turned out to work perfectly! Despite hours of technical support with RA, this simple fix wasn't mentioned. Many thanks to joseph_e2 for sharing this valuable tech note here.

If you stumble upon this thread while searching for a similar issue in the future, consider diat150's advice on clearing Channel errors. joseph_e2's suggestion indirectly achieved this, albeit with a different module. This solution worked for me, and I am grateful for their assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eric @ ITC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Eric from ITC praised joseph_e2 for finding an unconventional yet effective solution to a technical issue. Despite struggling for three days with RA Technical Support, the solution provided by joseph_e2 proved to be successful. This underscores the importance of sharing knowledge and experiences in troubleshooting tech problems.

For future reference, diat150's advice on clearing Channel errors aligns with joseph_e2's recommendation, which resolved the issue at hand. The solution may vary depending on the specific module being used, such as a plugin versus an expansion module. Nonetheless, the collaborative effort between the community members led to a successful outcome.

If you encounter a similar problem, remember to refer back to this thread for potential solutions. In a related experience with the 2080-OF2 module installation, the shared solution proved effective once again. This highlights the value of collective problem-solving in resolving technical challenges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>greetprincipal</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, the micro line appears to be of low quality and not worth considering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>diat150</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user, diat150, expressed dissatisfaction with the micro line, describing it as subpar. I have also faced challenges with a Micro820 in the past, struggling to power it on and connect the recommended 24V power supply with the CPU. This experience has led me to reconsider using this line of products in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Eric from ITC expressed astonishment at the unconventional solution proposed by joseph_e2, which surprisingly resolved the issue. Despite the prolonged back-and-forth with RA Technical Support, this solution was not suggested. Grateful for joseph_e2's effort in uncovering and sharing the technical note. This thread may be helpful for others facing a similar dilemma in the future. diat150's advice on clearing Channel errors aligns with joseph_e2's solution. While dealing with a plugin module instead of an expansion module limited access to Clear Error bits, this workaround proved effective. Gratitude to both contributors for their assistance.

joseph_e2 mentioned past difficulties with a Micro820 and the challenge of connecting the "recommended" 24V power supply to the CPU. This experience led to a preference for not pursuing that route again.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>greetprincipal</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, a user named diat150 shared a problem regarding the micro **** where the controller locks the channel if it detects a broken wire. Another user, Drift Boss, suggested a solution on 2/24/2021 regarding a module (2085-OF4) that stopped working after disconnecting a wire. The answer provided was that the Module DAC identifies hardware errors such as broken wires or high load resistance on channel x, causing the channel to be disabled until the user resolves the error. More information on resolving such issues can be found in the Micro800 Discrete and Analog Expansion I/O User Manual Publication 2080-UM003. During run mode, clearing □AC hardware error bits using CEx values can re-enable the error-disabled channels. Specific bits correspond to different channels, such as Bit 8 for CEO, Bit 9 for CE1, Bit 10 for CE2, and Bit 11 for CE3. Resetting with a value of 3848 will reset all 4 channels, while a value of 2056 will reset channel 3 (CE3). Click for more details. Appreciation was expressed for the helpful response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>willms</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I getting 0 mA readings on both channels of my 2080-OF2 Analog Output Module despite sending valid raw output counts?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue could potentially be related to a fault in the module, especially if you are receiving a constant 14.32 VDC instead of the expected 0-10 VDC range.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Could the constant 14.32 VDC output instead of the expected 0-10 VDC range indicate a faulty module?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, the constant higher voltage output could be a sign of a damaged module, potentially preventing the current values from registering as expected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the problem with my 2080-OF2 Analog Output Module if I suspect it to be faulty?</h4>
<p class='text-muted'><strong>Answer:</strong> If you suspect a faulty module, you may need to consider contacting the authorized distributor for support or possibly requesting a replacement to address the issue.</p>
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
