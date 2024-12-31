
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Utilizing an AB 2085-OF4 module to regulate process current control for multiple VFDs, I have the channels set at 0-20mA but am controlling the output within a 4-20mA range. All 4 channels of the card are in use. Despite proper configuration, channels 0, 1, and 3 do not show">
    <meta name="keywords" content="ab 2085-of4 module, micro800 troubleshooting, lack of current output, process current control, vfd channels, 4-20ma range, fluke 789 process meter, output measurement, channel configuration, voltage output, diagnostic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-lack-of-current-output-on-micro800-2085-of4-module">
    <title>Troubleshooting Lack of Current Output on Micro800 2085-OF4 Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Lack of Current Output on Micro800 2085-OF4 Module | Oxmaint Community">
    <meta property="og:description" content="Utilizing an AB 2085-OF4 module to regulate process current control for multiple VFDs, I have the channels set at 0-20mA but am controlling the output within a 4-20mA range. All 4 channels of the card are in use. Despite proper configuration, channels 0, 1, and 3 do not show">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-lack-of-current-output-on-micro800-2085-of4-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Lack of Current Output on Micro800 2085-OF4 Module | Oxmaint Community">
    <meta name="twitter:description" content="Utilizing an AB 2085-OF4 module to regulate process current control for multiple VFDs, I have the channels set at 0-20mA but am controlling the output within a 4-20mA range. All 4 channels of the card are in use. Despite proper configuration, channels 0, 1, and 3 do not show">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-lack-of-current-output-on-micro800-2085-of4-module"
      },
      "headline": "Troubleshooting Lack of Current Output on Micro800 2085-OF4 Module",
      "description": "Utilizing an AB 2085-OF4 module to regulate process current control for multiple VFDs, I have the channels set at 0-20mA but am controlling the output within a 4-20mA range. All 4 channels of the card are in use. Despite proper configuration, channels 0, 1, and 3 do not show",
      "author": {
        "@type": "Person",
        "name": "rbarbee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-25",
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
                <h1 class="text-white">Troubleshooting Lack of Current Output on Micro800 2085-OF4 Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rbarbee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3353</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">385</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Utilizing an AB 2085-OF4 module to regulate process current control for multiple VFDs, I have the channels set at 0-20mA but am controlling the output within a 4-20mA range. All 4 channels of the card are in use. Despite proper configuration, channels 0, 1, and 3 do not show any current output to the VFDs, while channel 2 does operate within the desired 4-20mA range. While using a Fluke 789 process meter, attempts to measure the card's output yield no results on any channels, including the functioning one. However, switching the card's output to voltage allows for successful readings. This discrepancy raises questions regarding the functionality of the card. Despite no fault indications from the diagnostic LED, the inability to output current remains a concern. Any suggestions on troubleshooting or resolving this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When operating in incurrent mode, what is the output voltage for different current settings? If the output voltage consistently measures above 5-10 V, it is important to verify the loop resistance at the receiving end for accuracy. This will ensure optimal performance and prevent potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pturmel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This module still experiences a glitch where removing the wire can disable the channel output in the 4-20mA configuration. It is uncertain if this issue also affects the 0-10V configuration. To resolve this, I re-downloaded the program, though I am unsure if there is a less disruptive method to reset it. Rockwell ought to address this anomaly, as it deviates from the usual behavior observed in the 1769 series of controllers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rbarbee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>rbarbee shared that there is a glitch in a module where removing the wire disables the channel output in the 4-20mA configuration. It is unknown if this issue also applies to the 0-10V configuration. To resolve this issue, rbarbee redownloaded the program, suggesting that Rockwell address this uncommon behavior in the 1769 series of controllers. One solution is to create a push button on the HMI to toggle a bit that will reset the control bit of the specific AO card (3848) back to 0 after a 2-second delay. An image is provided for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jasoncb0983</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently encountered this problem. Is this a common issue? Is there a more effective solution than simply having a button on the screen?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>diat150</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Today I encountered an issue with the reset button in the image above. I modified it to automatically reset the analog card every time the pump is activated, ensuring that the 4-20 signal is sent out without any open wire faults. In our upcoming projects, we plan to connect AOs to isolators to prevent the occurrence of open wire faults. It is disappointing that Rockwell has not addressed and resolved this problematic design flaw.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>heatfireash</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that they consider it a feature, not a bug. I recall encountering a similar issue with an analog module from 1794 in the past. When the rack powered up before the field device, it would cause that channel to be blocked. This behavior could be a safeguard for the module's circuitry, although it has been some time since I last addressed this specific issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This claim is completely baseless and untrue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>diat150</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are channels 0, 1, and 3 on my AB 2085-OF4 module not showing any current output to the VFDs?</h4>
<p class='text-muted'><strong>Answer:</strong> - This issue might be related to configuration settings, wiring problems, or potential faults within the module itself. Troubleshooting steps could involve checking the configuration parameters, verifying the wiring connections, and considering the possibility of a faulty module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does channel 2 on my AB 2085-OF4 module operate within the desired 4-20mA range while other channels do not?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discrepancy in channel performance could point towards specific channel configuration differences or potential hardware issues. Investigating the configuration settings for each channel and conducting further diagnostics on the module may help identify the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why am I unable to measure the current output on any channels of my AB 2085-OF4 module using a Fluke 789 process meter?</h4>
<p class='text-muted'><strong>Answer:</strong> - The inability to measure current output could indicate issues with the module's current output circuitry, the meter setup, or potential communication problems. Troubleshooting steps might involve verifying the meter's settings, checking for proper connections, and assessing the module's output functionality under different conditions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot the lack of current output on my AB 2085-OF4 module despite no fault indications from the diagnostic LED?</h4>
<p class='text-muted'><strong>Answer:</strong> - When facing a situation where the module shows no fault indications but fails</p>
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
