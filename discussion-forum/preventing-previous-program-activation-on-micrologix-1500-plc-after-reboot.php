
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently installed a new software on my MicroLogix 1500 PLC. After powering it off and back on, the previous program became active again. Is there a solution to prevent this from happening? Thank you.">
    <meta name="keywords" content="micrologix 1500 plc, preventing program activation, plc reboot issue, software installation plc, micrologix program retention, plc program persistence, prevent program reload, stopping program restart, plc program memory, software persistence plc, plc reboot">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/preventing-previous-program-activation-on-micrologix-1500-plc-after-reboot">
    <title>Preventing Previous Program Activation on MicroLogix 1500 PLC After Reboot | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Preventing Previous Program Activation on MicroLogix 1500 PLC After Reboot | Oxmaint Community">
    <meta property="og:description" content="I recently installed a new software on my MicroLogix 1500 PLC. After powering it off and back on, the previous program became active again. Is there a solution to prevent this from happening? Thank you.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/preventing-previous-program-activation-on-micrologix-1500-plc-after-reboot">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Preventing Previous Program Activation on MicroLogix 1500 PLC After Reboot | Oxmaint Community">
    <meta name="twitter:description" content="I recently installed a new software on my MicroLogix 1500 PLC. After powering it off and back on, the previous program became active again. Is there a solution to prevent this from happening? Thank you.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/preventing-previous-program-activation-on-micrologix-1500-plc-after-reboot"
      },
      "headline": "Preventing Previous Program Activation on MicroLogix 1500 PLC After Reboot",
      "description": "I recently installed a new software on my MicroLogix 1500 PLC. After powering it off and back on, the previous program became active again. Is there a solution to prevent this from happening? Thank you.",
      "author": {
        "@type": "Person",
        "name": "jscampbell210"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-26",
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
                <h1 class="text-white">Preventing Previous Program Activation on MicroLogix 1500 PLC After Reboot</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jscampbell210</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">205</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">495</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently installed a new software on my MicroLogix 1500 PLC. After powering it off and back on, the previous program became active again. Is there a solution to prevent this from happening? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the memory module has write protection enabled, which cannot be disabled once set. To load a new or changed program, you will need to switch to a different module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access Processor Status online, simply click on the "Mem Module" tab and adjust the setting to 0Memory Module Loaded during boot S5:/0. Alternatively, you have the option to overwrite the memory module by accessing the menu, then selecting Comms, EEPROM, and finally, Store to EEPROM. This process allows you to efficiently manage your memory settings and optimize system performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that a memory module is being utilized and the program is configured to load from the memory module upon power-up, either consistently or in case of a memory error. The S:5/8 bit serves as an indicator to show whether it loaded during boot, rather than a control. It is advisable to follow harryting's suggestion to save your program to the memory module. If the module is accessible and not set to read-only, updating it with your changes should make the new program "permanent". While online, review the status of the bits on the System file (S2-STATUS) Mem Module page to determine if any of these bits are influencing a behavior that you should be aware of. In scenarios where I have utilized a memory module, I typically prefer it to load only upon a memory error (S:1/10), and I usually set up an alarm on an HMI if it occurs (S:5/8). This way, the operator can be alerted if their adjustments have been reset to previous values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I prevent the previous program from becoming active on my MicroLogix 1500 PLC after a reboot?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To prevent the previous program from activating after a reboot on your MicroLogix 1500 PLC, you can utilize the feature of setting the desired program to run automatically on power-up. This can be achieved by configuring the PLC to select the specific program to be executed upon reboot.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What steps should I follow to ensure that the new program remains active on my MicroLogix 1500 PLC after a power cycle?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure that the new program remains active on your MicroLogix 1500 PLC after a power cycle, you may need to check and adjust the program selection settings within the PLC software. By configuring the PLC to prioritize the newly installed program, you can prevent the previous program from automatically becoming active upon reboot.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a way to retain the newly installed program as the active one on my MicroLogix 1500 PLC even after a restart?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you can retain the newly installed program as the active one on your MicroLogix 1500 PLC even after a restart by configuring the PLC to specify the desired program to run on power-up. By setting the appropriate program selection parameters, you can ensure that the new program remains active and prevents the previous program from taking over after a reboot.</p>
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
