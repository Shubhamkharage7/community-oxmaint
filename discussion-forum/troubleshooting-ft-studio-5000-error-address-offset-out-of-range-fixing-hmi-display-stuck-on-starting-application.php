
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When the customer turns off the machine and then turns it back on, the HMI display remains stuck on Starting Application. If you encounter this issue and try to save Studio 5000 online, you may encounter error messages similar to those detailed in this technical note: URL. The FT">
    <meta name="keywords" content="ft studio 5000 troubleshooting, hmi display stuck on starting application fix, address offset out of range error, fixing plc save error 732-80044402, studio 5000 error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ft-studio-5000-error-address-offset-out-of-range-fixing-hmi-display-stuck-on-starting-application">
    <title>Troubleshooting FT Studio 5000 Error: Address Offset Out of Range - Fixing HMI Display Stuck on Starting Application | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FT Studio 5000 Error: Address Offset Out of Range - Fixing HMI Display Stuck on Starting Application | Oxmaint Community">
    <meta property="og:description" content="When the customer turns off the machine and then turns it back on, the HMI display remains stuck on Starting Application. If you encounter this issue and try to save Studio 5000 online, you may encounter error messages similar to those detailed in this technical note: URL. The FT">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ft-studio-5000-error-address-offset-out-of-range-fixing-hmi-display-stuck-on-starting-application">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FT Studio 5000 Error: Address Offset Out of Range - Fixing HMI Display Stuck on Starting Application | Oxmaint Community">
    <meta name="twitter:description" content="When the customer turns off the machine and then turns it back on, the HMI display remains stuck on Starting Application. If you encounter this issue and try to save Studio 5000 online, you may encounter error messages similar to those detailed in this technical note: URL. The FT">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ft-studio-5000-error-address-offset-out-of-range-fixing-hmi-display-stuck-on-starting-application"
      },
      "headline": "Troubleshooting FT Studio 5000 Error: Address Offset Out of Range - Fixing HMI Display Stuck on Starting Application",
      "description": "When the customer turns off the machine and then turns it back on, the HMI display remains stuck on Starting Application. If you encounter this issue and try to save Studio 5000 online, you may encounter error messages similar to those detailed in this technical note: URL. The FT",
      "author": {
        "@type": "Person",
        "name": "janner_10"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-29",
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
                <h1 class="text-white">Troubleshooting FT Studio 5000 Error: Address Offset Out of Range - Fixing HMI Display Stuck on Starting Application</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">23270</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">209</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When the customer turns off the machine and then turns it back on, the HMI display remains stuck on "Starting Application." If you encounter this issue and try to save Studio 5000 online, you may encounter error messages similar to those detailed in this technical note: <URL>. 
The FT Studio errors include "Failed tag information upload on route cip=<path> at <IP address> and Symbol upload ends with error for CIP=<path> at <IP address>," as well as a PLC Save Error: "Error 732-80044402 - Data upload did not complete. CIP Error: Address offset out of range." Following the instructions in the technical note, rebuilding and downloading the project can resolve the errors and restore the display. However, the note does not provide a specific root cause for the issue. Have you encountered this error before?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Absolutely! I was in shock when I finally got mine working. Initially, my HMIs were running on v9, which made my situation even worse. Only when I updated one of them to v12 did the application finally load, but I encountered CIP route errors when uploading tags. Surprisingly, the upgrade to v12 didn't resolve the issue, but upgrading the CPU (specifically, our 5069-L310ERS2 model) to v33 did the trick. I discovered that by creating a UDT through online editing and utilizing it in the program, then cycling power on the machine, I would encounter CIP route errors. While I cannot guarantee that upgrading the CPU alone will solve your issue, I can confirm that there were no issues between v33 and v12. I hope this information proves helpful to you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JordanCClark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although this issue began a while ago, I am experiencing the same problem. My idea is to increase the Programmable Logic Controller (PLC) from 32.011 to 32.014 instead of 33. However, my current Control Flash programs are not advanced enough to make this change, so they also require an upgrade. It seems that complexity is always present in the world of Rockwell.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JohnCalderwood</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am experiencing the same issue with my Controller V32 and FTV V12. Despite seeking help from ROCKWELL Support, I have yet to find a solution. As the machine is ready for shipment to the US, I am feeling lost and turned to online searches for answers. Here are some key details regarding the problem:

1. The system does not recover after restarting the PLC or HMI.
2. Occasionally, going online with FTV or pressing the "play" button helps in recovering.
3. Compiling and downloading the FTV project to the HMI has also led to recovery.
4. There was one instance where it recovered on its own after 24 hours.
5. Downloading the latest firmware to the HMI took an unusually long time, hinting at a potential network issue.

I am looking to prepare a V33 software/firmware for installation on-site. If anyone has any other suggestions or ideas, please share them as the project deadline is approaching quickly. Your input is greatly appreciated. Greetings from Germany.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kev27</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there any involvement of managed switches in this scenario?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We have not experienced this issue since updating to version 33.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Within our network, we currently have three Stratix 1783-LMS8 switches that have not been configured. As per the manual, they are supposed to function as unmanaged switches. However, when I directly connected the PLC to the HMI to troubleshoot, I encountered the same issue. An error message appeared stating "write operation failed for 1 items because write connection could not be established on route cip=1." After initiating the running man, I observed a message indicating "write connection established on route cip=2," and the system began functioning properly once more. I am curious about the significance of "cip route x" as I could not locate any information on it, and even the ROCKWELL support team was unable to provide clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kev27</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, leaving managed switches unconfigured is more detrimental than utilizing unmanaged switches. Make sure to review HMI designer shortcuts and delete any that are not being used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you encounter the PLC Save Error 732-80044402 with a CIP Error stating "Address offset out of range" while attempting to save your program, try using the Save As feature to resolve the issue. This error is commonly reported on V32 systems. If saving as didn't work, consider using the Compact feature as an alternative solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lord Farquaad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered the same issue with Studio V32.04 on a 1756-L72 controller running V32.11. To resolve this, I performed a direct upload without opening a project file (by accessing Studio 5000 Launcher and selecting Open -> From Upload). None of the previously mentioned solutions were effective, possibly due to changes in AOIs and UDTs causing unoptimized bytes allocation. I discovered that ControlLogix (CLX) does not optimize a sequence of bools with 4-byte gaps between them, allocating 32 bits for each sequence separately. I made adjustments to the UDT to reduce the total byte usage, which was reflected in the block's byte summary. It is likely that the outdated ACD file contained structures and UDTs in a different sequence, causing an error when uploading data from the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zan778</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a communication problem between the 5069-L306MRS2 v32 controller and Panelview 7 v10 at our factory. Despite successful debugging, the HMI-PLC communication failed after the machine was powered off overnight. Upgrading the PLC to version v33 resolved the issue, even after power cycling with a one-minute wait. This demonstrates the importance of keeping your PLC firmware up to date to maintain seamless communication between devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DonSebas</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What should I do if my HMI display is stuck on "Starting Application" in FT Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If your HMI display is stuck on "Starting Application" in FT Studio 5000, you may encounter error messages such as "Failed tag information upload" and "PLC Save Error: Address offset out of range." You can try rebuilding and downloading the project as a troubleshooting step to resolve these errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I fix FT Studio 5000 errors related to CIP and IP address issues?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Errors in FT Studio 5000 related to CIP and IP address issues, such as "Failed tag information upload on route cip=<path> at <IP address>" and "Symbol upload ends with error for CIP=<path> at <IP address>," can be resolved by following the instructions in the technical note provided in the discussion thread.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What is the recommended solution for resolving the PLC Save Error related to address offset out of range in FT Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you encounter a PLC Save Error in FT Studio 5000 with the message "Error 732-80044402 - Data upload did not complete. CIP Error: Address offset out of range," you can try rebuilding and downloading the project to fix the error and restore the display functionality.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
