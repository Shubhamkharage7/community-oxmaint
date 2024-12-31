
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is my debut post, and I am eager to participate more in this community to expand my knowledge and offer assistance to others. Any suggestions or support would be greatly appreciated. Currently, I am in the process of creating a pump station controller board, which includes a Kingfisher">
    <meta name="keywords" content="4-20ma loop issues, troubleshooting, multiple power sources, common ground sharing, pump station controller board, kingfisher plc, io-3 model card, schneider vsd/vfd, tank level sensor, speed reference signal, motor current signal">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-4-20ma-loop-issues-with-multiple-power-sources-can-commons-be-shared">
    <title>Troubleshooting 4-20mA Loop Issues with Multiple Power Sources: Can Commons be Shared? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 4-20mA Loop Issues with Multiple Power Sources: Can Commons be Shared? | Oxmaint Community">
    <meta property="og:description" content="This is my debut post, and I am eager to participate more in this community to expand my knowledge and offer assistance to others. Any suggestions or support would be greatly appreciated. Currently, I am in the process of creating a pump station controller board, which includes a Kingfisher">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-4-20ma-loop-issues-with-multiple-power-sources-can-commons-be-shared">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 4-20mA Loop Issues with Multiple Power Sources: Can Commons be Shared? | Oxmaint Community">
    <meta name="twitter:description" content="This is my debut post, and I am eager to participate more in this community to expand my knowledge and offer assistance to others. Any suggestions or support would be greatly appreciated. Currently, I am in the process of creating a pump station controller board, which includes a Kingfisher">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-4-20ma-loop-issues-with-multiple-power-sources-can-commons-be-shared"
      },
      "headline": "Troubleshooting 4-20mA Loop Issues with Multiple Power Sources: Can Commons be Shared?",
      "description": "This is my debut post, and I am eager to participate more in this community to expand my knowledge and offer assistance to others. Any suggestions or support would be greatly appreciated. Currently, I am in the process of creating a pump station controller board, which includes a Kingfisher",
      "author": {
        "@type": "Person",
        "name": "Vaughan91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
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
                <h1 class="text-white">Troubleshooting 4-20mA Loop Issues with Multiple Power Sources: Can Commons be Shared?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Vaughan91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">942</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">387</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>This is my debut post, and I am eager to participate more in this community to expand my knowledge and offer assistance to others. Any suggestions or support would be greatly appreciated. Currently, I am in the process of creating a pump station controller board, which includes a Kingfisher PLC with an IO-3 model card, a Schneider VSD/VFD, and a tank level sensor. The PLC sends a 4-20mA speed reference signal to the VSD, while the VSD needs to transmit a 4-20mA motor current signal back to the PLC. Additionally, a 4-20mA tank level signal is required to be sent to the PLC. I have some concerns regarding the external power supply for the level sensor and whether it can share the same common ground. According to the Kingfisher PLC manual, multiple power sources should not be connected to the digital input side. I am a bit perplexed by this issue. For a clearer understanding, please refer to the wiring diagram in the link shared on my OneDrive: [insert link].</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to include a hyperlink to Kingfisher PLC, which is known as Kingfisher Public Limited Company in the UK? Finding a Programmable Logic Controller manufactured by a company named Kingfisher through a web search can be challenging due to the company's presence in the UK.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @BryanG, thank you for your message! Here is a link to the manuals I am using for this PLC & VSD on my OneDrive: https://gitteljed-my.sharepoint.com/:f:/g/personal/vaughangittel_gitteljed_onmicrosoft_com/Em6RANaCTKdIufOTi3iGPjYBUw3YP3RT15lXRCwfIkLGeg?e=CYK2CX.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vaughan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The interconnection of the commons is clearly outlined in the block diagram found on page 133 of section 9.1.1 in the 4th edition of "kingfisher plus" PDF. This diagram illustrates how the commons are internally connected within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To prevent any potential issues, it is recommended to utilize a 4-20 mA barrier/isolator. This device helps in ensuring a smooth and trouble-free operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>diat150</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BryanG requested a link to Kingfisher PLC, which is the Kingfisher Public Limited Company in the UK. However, searching for a Programmable Logic Controller made by a company named Kingfisher may lead to confusion due to the company name overlap. This led to a moment of confusion as it seemed like Screwfix and B&Q were entering the automation industry. Screwfix and B&Q are popular general DIY/trade suppliers in the UK.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensuring isolation and joining all commons at a single point, such as in the input/output module, prevents any potential issues with power supplies. It is important to avoid creating common loops and adding additional cables to connect common points at various junctions. This practice promotes electrical safety and efficiency in system operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can multiple power sources be shared in a 4-20mA loop system?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, according to the Kingfisher PLC manual, it is advised not to connect multiple power sources to the digital input side of the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should I handle the external power supply for the level sensor in my pump station controller board setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to avoid sharing the common ground for the external power supply of the level sensor with other power sources to prevent potential issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the implications of sharing a common ground in a 4-20mA loop system with multiple power sources?</h4>
<p class='text-muted'><strong>Answer:</strong> - Sharing a common ground can lead to interference and inaccurate readings within the system, potentially causing malfunctions or errors in data transmission. It is best to follow the manufacturer's guidelines for proper wiring configurations.</p>
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
