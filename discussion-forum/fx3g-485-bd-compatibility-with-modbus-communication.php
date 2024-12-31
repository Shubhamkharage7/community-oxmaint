
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently managing a project that involves capturing data from a Mitsubishi PLC FX3G using RS485. Through my research, I have discovered that I need to incorporate a communication module. I have two options: FX3G-485-BD and FX3G-CNV-ADP - FX3U-485ADP-MB. Unfortunately, I do not have enough space in the">
    <meta name="keywords" content="fx3g-485-bd, modbus communication, mitsubishi plc fx3g, rs485, communication module, fx3g-cnv-adp, fx3u-485adp-mb, plc space constraints, communication protocol support">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/fx3g-485-bd-compatibility-with-modbus-communication">
    <title>FX3G-485-BD: Compatibility with Modbus Communication | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="FX3G-485-BD: Compatibility with Modbus Communication | Oxmaint Community">
    <meta property="og:description" content="I am currently managing a project that involves capturing data from a Mitsubishi PLC FX3G using RS485. Through my research, I have discovered that I need to incorporate a communication module. I have two options: FX3G-485-BD and FX3G-CNV-ADP - FX3U-485ADP-MB. Unfortunately, I do not have enough space in the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/fx3g-485-bd-compatibility-with-modbus-communication">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FX3G-485-BD: Compatibility with Modbus Communication | Oxmaint Community">
    <meta name="twitter:description" content="I am currently managing a project that involves capturing data from a Mitsubishi PLC FX3G using RS485. Through my research, I have discovered that I need to incorporate a communication module. I have two options: FX3G-485-BD and FX3G-CNV-ADP - FX3U-485ADP-MB. Unfortunately, I do not have enough space in the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/fx3g-485-bd-compatibility-with-modbus-communication"
      },
      "headline": "FX3G-485-BD: Compatibility with Modbus Communication",
      "description": "I am currently managing a project that involves capturing data from a Mitsubishi PLC FX3G using RS485. Through my research, I have discovered that I need to incorporate a communication module. I have two options: FX3G-485-BD and FX3G-CNV-ADP - FX3U-485ADP-MB. Unfortunately, I do not have enough space in the",
      "author": {
        "@type": "Person",
        "name": "anandozzz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">FX3G-485-BD: Compatibility with Modbus Communication</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>anandozzz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">261</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">464</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently managing a project that involves capturing data from a Mitsubishi PLC FX3G using RS485. Through my research, I have discovered that I need to incorporate a communication module. I have two options: FX3G-485-BD and FX3G-CNV-ADP -> FX3U-485ADP-MB. Unfortunately, I do not have enough space in the PLC to accommodate the second option as it needs to be added to the left of the PLC. Therefore, the first choice is the most suitable for me. Can the FX3G-485-BD module support the Modbus communication protocol? Any assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>No, it does not automatically generate the CRC, so you will need to create your own. I encountered this situation a few years back when the PLC was equipped with the 232 BD board. Initially, the task of generating the CRC16 for each message seemed daunting, but the process itself is straightforward. Sending and receiving data is also simple - just fill the registers with the necessary values and activate the send bit. However, when receiving data, it is important to verify its validity by running the CRC check and ensuring it matches the received CRC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky stated that the second option does not support the Modbus Protocol because it does not generate the necessary CRC. It would require writing your own code for this purpose. This situation was encountered a few years ago when dealing with a programmable logic controller (PLC) equipped with the 232 BD board. The process involves generating the CRC16 for each message, but after that, sending and receiving data is straightforward. To send data, simply populate the registers with the desired values and set the send bit. Receiving data is also uncomplicated, but it is important to verify the data's validity by running the CRC check and confirming it matches the received CRC. Additionally, the inquiry is made about addressing Modbus from the PLC tags.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>anandozzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The FX3U 485-MB version reportedly includes its own processor that handles numerous functions, such as generating CRC. While I personally have not utilized this feature, a programming manual for the FX3U-485ADP-MB model can be found in a video on Bing. You can access the manual directly at https://dl.mitsubishielectric.com/dl/fa/document/manual/plc_fx/jy997d26201/jy997d26201g.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1. Is the FX3G-485-BD module compatible with Modbus communication protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the FX3G-485-BD module supports Modbus communication protocol for capturing data from a Mitsubishi PLC FX3G using RS485.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the differences between FX3G-485-BD and FX3G-CNV-ADP -> FX3U-485ADP-MB modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - The FX3G-485-BD module is a direct communication module for the FX3G PLC, while the FX3G-CNV-ADP -> FX3U-485ADP-MB module requires more space as it needs to be added to the left of the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why is the FX3G-485-BD module considered more suitable when space is limited?</h4>
<p class='text-muted'><strong>Answer:</strong> - The FX3G-485-BD module is more suitable for limited space as it can be directly incorporated into the PLC without requiring additional space to the left of the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific considerations to keep in mind when using the FX3G-485-BD module for Modbus communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to ensure proper configuration and setup of the FX3G-485-BD module to enable successful communication using the Modbus protocol.</p>
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
