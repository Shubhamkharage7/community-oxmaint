
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working with a CPU 1212C DC\DC\DC running firmware version 4.4. I am in need of the GATHER_BLK instruction, but it is not showing up in the MOVE instructions section of my Tia Portal v16 update 7 software. Can anyone provide guidance on how to">
    <meta name="keywords" content="gather_blk instruction, tia portal v16, cpu 1212c dc\dc\dc, firmware version 4, move instructions, software update, instruction update, plc programming, troubleshooting, siemens tia portal, firmware compatibility">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-access-gather-blk-instruction-in-tia-portal-v16-update-7-with-cpu-1212c-dc-dc-dc-firmware-version-4-4">
    <title>How to Access GATHER_BLK Instruction in Tia Portal v16 Update 7 with CPU 1212C DC\DC\DC Firmware Version 4.4 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Access GATHER_BLK Instruction in Tia Portal v16 Update 7 with CPU 1212C DC\DC\DC Firmware Version 4.4 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working with a CPU 1212C DC\DC\DC running firmware version 4.4. I am in need of the GATHER_BLK instruction, but it is not showing up in the MOVE instructions section of my Tia Portal v16 update 7 software. Can anyone provide guidance on how to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-access-gather-blk-instruction-in-tia-portal-v16-update-7-with-cpu-1212c-dc-dc-dc-firmware-version-4-4">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Access GATHER_BLK Instruction in Tia Portal v16 Update 7 with CPU 1212C DC\DC\DC Firmware Version 4.4 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working with a CPU 1212C DC\DC\DC running firmware version 4.4. I am in need of the GATHER_BLK instruction, but it is not showing up in the MOVE instructions section of my Tia Portal v16 update 7 software. Can anyone provide guidance on how to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-access-gather-blk-instruction-in-tia-portal-v16-update-7-with-cpu-1212c-dc-dc-dc-firmware-version-4-4"
      },
      "headline": "How to Access GATHER_BLK Instruction in Tia Portal v16 Update 7 with CPU 1212C DC\DC\DC Firmware Version 4.4",
      "description": "Hello everyone, I am currently working with a CPU 1212C DC\DC\DC running firmware version 4.4. I am in need of the GATHER_BLK instruction, but it is not showing up in the MOVE instructions section of my Tia Portal v16 update 7 software. Can anyone provide guidance on how to",
      "author": {
        "@type": "Person",
        "name": "Dmx11"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-13",
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
                <h1 class="text-white">How to Access GATHER_BLK Instruction in Tia Portal v16 Update 7 with CPU 1212C DC\DC\DC Firmware Version 4.4</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Dmx11</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">92</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">129</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working with a CPU 1212C DC\DC\DC running firmware version 4.4. I am in need of the GATHER_BLK instruction, but it is not showing up in the MOVE instructions section of my Tia Portal v16 update 7 software. Can anyone provide guidance on how to update the instructions or offer any suggestions on what steps to take? Your help is much appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're searching for it, you may find it under one of the sections on the right or below the basic instructions. Siemens products often require some assembly, just as you're discovering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: Why is the GATHER_BLK instruction not showing up in the MOVE instructions section of Tia Portal v16 update 7 with CPU 1212C DC\DC\DC firmware version 4.4?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The absence of the GATHER_BLK instruction could be due to compatibility issues or specific software versions. It may require updating or additional steps to access this instruction.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I update the instructions in Tia Portal v16 update 7 to access the GATHER_BLK instruction for CPU 1212C DC\DC\DC firmware version 4.4?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To update the instructions or add functionalities like the GATHER_BLK instruction, you may need to check for software updates, firmware updates, or consult the Siemens support documentation for guidance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there any alternative methods or workarounds to access the GATHER_BLK instruction with my current setup of CPU 1212C DC\DC\DC running firmware version 4.4?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the GATHER_BLK instruction is not available in your current setup, you could explore alternative instructions or programming techniques to achieve similar functionalities. Consulting Siemens support or online forums for specific solutions might also be helpful.</p>
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
