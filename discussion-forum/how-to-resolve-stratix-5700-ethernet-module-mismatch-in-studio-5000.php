
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I recently integrated a Stratix 5700 switch (rev13.001) into Studio5000 (rev 33.02.00) as an Ethernet Module. However, there is a mismatch indicated by a yellow triangle on the module in the Project tree. I am unable to access the module properties online despite downloading the appropriate Add-On Profile">
    <meta name="keywords" content="stratix 5700, ethernet module, studio 5000, module mismatch, yellow triangle, project tree, access module properties, online, add-on profile (aop), resolve issue, integration, rev001, rev">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-resolve-stratix-5700-ethernet-module-mismatch-in-studio-5000">
    <title>How to Resolve Stratix 5700 Ethernet Module Mismatch in Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Resolve Stratix 5700 Ethernet Module Mismatch in Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="Greetings, I recently integrated a Stratix 5700 switch (rev13.001) into Studio5000 (rev 33.02.00) as an Ethernet Module. However, there is a mismatch indicated by a yellow triangle on the module in the Project tree. I am unable to access the module properties online despite downloading the appropriate Add-On Profile">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-resolve-stratix-5700-ethernet-module-mismatch-in-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Resolve Stratix 5700 Ethernet Module Mismatch in Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I recently integrated a Stratix 5700 switch (rev13.001) into Studio5000 (rev 33.02.00) as an Ethernet Module. However, there is a mismatch indicated by a yellow triangle on the module in the Project tree. I am unable to access the module properties online despite downloading the appropriate Add-On Profile">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-resolve-stratix-5700-ethernet-module-mismatch-in-studio-5000"
      },
      "headline": "How to Resolve Stratix 5700 Ethernet Module Mismatch in Studio 5000",
      "description": "Greetings, I recently integrated a Stratix 5700 switch (rev13.001) into Studio5000 (rev 33.02.00) as an Ethernet Module. However, there is a mismatch indicated by a yellow triangle on the module in the Project tree. I am unable to access the module properties online despite downloading the appropriate Add-On Profile",
      "author": {
        "@type": "Person",
        "name": "Chibu"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-28",
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
                <h1 class="text-white">How to Resolve Stratix 5700 Ethernet Module Mismatch in Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Chibu</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">521</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">461</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I recently integrated a Stratix 5700 switch (rev13.001) into Studio5000 (rev 33.02.00) as an Ethernet Module. However, there is a mismatch indicated by a yellow triangle on the module in the Project tree. I am unable to access the module properties online despite downloading the appropriate Add-On Profile (AOP). Any suggestions or solutions for resolving this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you access the Stratix web server to verify the current firmware version of the device, and ensure that your configurations align with the device?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The version information provided is accessible through the Device Manager using a web browser.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chibu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When accessing the module info tab of the Stratix 5700 in Studio while online, what information does it provide? Typically, it will display the reason for any mismatch detected. If the module info tab is blank, it indicates a communication issue between the Stratix and the processor. To troubleshoot, try pinging both IP addresses of the PLC and Stratix from your PC's command window. This can help diagnose and resolve any connectivity issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to access the module properties while online, the Studio5000 software freezes indefinitely, forcing me to reboot my computer. This issue with Studio5000 freezing when accessing module properties online is a common problem that many users may experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chibu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to ping both the PLC and Stratix devices? Are you able to detect the presence of the Stratix device in RSlinx? Explore network connectivity between PLC and Stratix devices in RSlinx.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly, I am capable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chibu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Chibu, I experienced the same issue but have since found a solution. I am sharing it here to help others facing the same problem. The Stratix 5700 switch I am using is running firmware version 15.02 and is connected to an L85E with firmware version 34. The maximum IO configuration revision available is 13. After installing Stratix AOP V 40.14, I expected to have revision 15 but that was not the case. Upon checking the switch in RSLinx, I discovered that the actual revision of the switch is 8. Once I adjusted this in the IO configuration, the communication with the PLC was successful. Lesson learned: Firmware does not necessarily correspond to the revision level.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>volker81k</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: Why am I seeing a mismatch indication (yellow triangle) on the Stratix 5700 Ethernet Module in Studio 5000?
    The mismatch indication could be due to compatibility issues between the Stratix 5700 switch firmware version and the Studio 5000 software version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I have downloaded the Add-On Profile (AOP) for the Stratix 5700 switch, but still can't access the module properties online. What should I do?</h4>
<p class='text-muted'><strong>Answer:</strong> Ensure that the downloaded AOP is compatible with both the Stratix 5700 switch firmware version and the Studio 5000 software version. If the issue persists, consider updating the firmware of the switch or Studio 5000 software to achieve compatibility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I resolve the Ethernet Module mismatch between the Stratix 5700 switch and Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> To resolve the mismatch issue, consider updating the firmware of the Stratix 5700 switch to a version that is compatible with the Studio 5000 software version being used. Additionally, ensure that the correct Add-On Profile (AOP) is installed and configured properly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any specific troubleshooting steps I can follow to address the Stratix 5700 Ethernet Module mismatch in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, you can try re-downloading and re-installing the Add-On Profile (AOP)</p>
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
