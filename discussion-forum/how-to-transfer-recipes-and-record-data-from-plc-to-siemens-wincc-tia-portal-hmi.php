
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello! A customer is interested in using a barcode reader to automate recipe selection on a TP1500 Comfort HMI. They already have recipe management set up on the HMI and are exploring options to select recipes and record data from the PLC as a primary or alternative method. Additionally,">
    <meta name="keywords" content="plc, siemens wincc tia portal hmi, recipe transfer, data recording, barcode reader, automation, tp1500 comfort hmi, recipe management, recipe selection, data transfer, alternative methods, recipe control, hmi to plc transfer">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-transfer-recipes-and-record-data-from-plc-to-siemens-wincc-tia-portal-hmi">
    <title>How to Transfer Recipes and Record Data from PLC to Siemens WinCC TIA Portal HMI | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Transfer Recipes and Record Data from PLC to Siemens WinCC TIA Portal HMI | Oxmaint Community">
    <meta property="og:description" content="Hello! A customer is interested in using a barcode reader to automate recipe selection on a TP1500 Comfort HMI. They already have recipe management set up on the HMI and are exploring options to select recipes and record data from the PLC as a primary or alternative method. Additionally,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-transfer-recipes-and-record-data-from-plc-to-siemens-wincc-tia-portal-hmi">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Transfer Recipes and Record Data from PLC to Siemens WinCC TIA Portal HMI | Oxmaint Community">
    <meta name="twitter:description" content="Hello! A customer is interested in using a barcode reader to automate recipe selection on a TP1500 Comfort HMI. They already have recipe management set up on the HMI and are exploring options to select recipes and record data from the PLC as a primary or alternative method. Additionally,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-transfer-recipes-and-record-data-from-plc-to-siemens-wincc-tia-portal-hmi"
      },
      "headline": "How to Transfer Recipes and Record Data from PLC to Siemens WinCC TIA Portal HMI",
      "description": "Hello! A customer is interested in using a barcode reader to automate recipe selection on a TP1500 Comfort HMI. They already have recipe management set up on the HMI and are exploring options to select recipes and record data from the PLC as a primary or alternative method. Additionally,",
      "author": {
        "@type": "Person",
        "name": "swedeleaner"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-08",
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
                <h1 class="text-white">How to Transfer Recipes and Record Data from PLC to Siemens WinCC TIA Portal HMI</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">483</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">2</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello! A customer is interested in using a barcode reader to automate recipe selection on a TP1500 Comfort HMI. They already have recipe management set up on the HMI and are exploring options to select recipes and record data from the PLC as a primary or alternative method. Additionally, they need to transfer recipes from the HMI to the PLC. Is it possible to achieve this setup?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's been a while since I've used it, but you have the option to utilize the Job mailbox in the PLC to submit requests on the HMI:SIOS system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manglemender</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After researching the Job Mailbox, I came across job number 67, which involved transferring data from a Programmable Logic Controller (PLC) to a Human-Machine Interface (HMI). However, despite performing the task, the recipe did not update on the HMI as expected. When transferring a recipe to the PLC, the HMI's DataRecords in the designated Area Pointer should change accordingly. Additionally, the DataRecord should also update when executing the Job Mailbox operation. What could be the missing piece of this puzzle?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I researched the Job Mailbox and came across Job 69, which involves reading from a PLC and writing to an HMI. However, despite completing the task, the recipe did not update on the HMI. It seems that when downloading a recipe to the PLC, the DataRecords in the HMI Area pointer also change to reflect the new recipe. The DataRecord is also updated when the Job Mailbox is executed. Can you help me figure out what may be missing in this process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reflection, I do recall there being a peculiar aspect regarding the accuracy of the name. Upon reviewing a previous project in S7, I found that a function block was utilized to oversee the transfer process. Within the PLC, the recipe was specified as a UDT with two versions: a working version utilized by the machine and an upload/download version used by the recipe system. Initially, the monitoring FC identifies any failed transfers (status >0 >3S). Subsequently, if a transfer is ongoing (status =2), no further actions are taken. If a new download is not detected (status !=4), the working recipe copy is moved to the upload/download copy. In the case of a new download being detected: a) transfer the upload/download copy to the working copy, b) reset the status to 0. The HMI displays the recipe name from the working copy rather than the upload/download copy. I am unsure if the data record name undergoes any changes in the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manglemender</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While exploring the recipe view, I discovered that by selecting Properties/General, there are two tags that can alter the recipe and data record from the PLC. I appreciate your assistance, but I have found what I needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I use a barcode reader to automate recipe selection on a TP1500 Comfort HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to use a barcode reader to automate recipe selection on a TP1500 Comfort HMI. This can streamline the process and improve efficiency in selecting recipes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I transfer recipes from the HMI to the PLC in Siemens WinCC TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> - To transfer recipes from the HMI to the PLC in Siemens WinCC TIA Portal, you can utilize communication protocols such as Profinet or Profibus to exchange data between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to record data from the PLC to the HMI for recipe management purposes?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to record data from the PLC to the HMI for recipe management purposes. By setting up appropriate communication and data logging functions, you can capture and store relevant data for analysis and tracking.</p>
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
