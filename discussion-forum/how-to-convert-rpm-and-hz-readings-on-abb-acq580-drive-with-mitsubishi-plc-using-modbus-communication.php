
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am seeking assistance in configuring the ABB ACQ580 drive connected to a Mitsubishi PLC using Modbus communications. I am struggling to convert the RPM and Hz readings using parameters and have to send the raw value of 20000. Can this conversion be done in the drive, or should">
    <meta name="keywords" content="abb acq580 drive, mitsubishi plc, modbus communication, rpm conversion, hz conversion, modbus parameters, drive configuration, plc software">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-convert-rpm-and-hz-readings-on-abb-acq580-drive-with-mitsubishi-plc-using-modbus-communication">
    <title>How to Convert RPM and Hz Readings on ABB ACQ580 Drive with Mitsubishi PLC using Modbus Communication | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Convert RPM and Hz Readings on ABB ACQ580 Drive with Mitsubishi PLC using Modbus Communication | Oxmaint Community">
    <meta property="og:description" content="I am seeking assistance in configuring the ABB ACQ580 drive connected to a Mitsubishi PLC using Modbus communications. I am struggling to convert the RPM and Hz readings using parameters and have to send the raw value of 20000. Can this conversion be done in the drive, or should">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-convert-rpm-and-hz-readings-on-abb-acq580-drive-with-mitsubishi-plc-using-modbus-communication">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Convert RPM and Hz Readings on ABB ACQ580 Drive with Mitsubishi PLC using Modbus Communication | Oxmaint Community">
    <meta name="twitter:description" content="I am seeking assistance in configuring the ABB ACQ580 drive connected to a Mitsubishi PLC using Modbus communications. I am struggling to convert the RPM and Hz readings using parameters and have to send the raw value of 20000. Can this conversion be done in the drive, or should">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-convert-rpm-and-hz-readings-on-abb-acq580-drive-with-mitsubishi-plc-using-modbus-communication"
      },
      "headline": "How to Convert RPM and Hz Readings on ABB ACQ580 Drive with Mitsubishi PLC using Modbus Communication",
      "description": "I am seeking assistance in configuring the ABB ACQ580 drive connected to a Mitsubishi PLC using Modbus communications. I am struggling to convert the RPM and Hz readings using parameters and have to send the raw value of 20000. Can this conversion be done in the drive, or should",
      "author": {
        "@type": "Person",
        "name": "bertybassett"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-25",
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
                <h1 class="text-white">How to Convert RPM and Hz Readings on ABB ACQ580 Drive with Mitsubishi PLC using Modbus Communication</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bertybassett</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">331</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">75</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am seeking assistance in configuring the ABB ACQ580 drive connected to a Mitsubishi PLC using Modbus communications. I am struggling to convert the RPM and Hz readings using parameters and have to send the raw value of 20000. Can this conversion be done in the drive, or should it be done in the PLC software? Any guidance would be appreciated as I am new to this and constantly learning. Thank you, Bob.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing pages 248, 488, and 506 of the ACQ580 Firmware Manual, it appears that the Modbus value range is -20000 to +20000 when parameter 58.26 or 58.27 is configured for "Speed or frequency" (0), "Speed" (4), or "Frequency" (5). Parameters 46.01 and 46.02 determine the interpretation of a Modbus value of 20000 within the drive. For instance, if 46.01 is set to 1800.00 rpm, a Modbus value of 20000 corresponds to a speed of 1800.00 rpm, while a Modbus value of 10000 corresponds to a speed of 900.00 rpm. To ensure compatibility with a Mitsubishi PLC, you may need to adjust the scaling of the Modbus value to align with parameters 46.01 and 46.02 in the drive. Alternatively, modifying parameters 58.26 and 58.27 to "Transparent" (1) or "General" (2) could sync the Modbus value with the drive's frequency/speed value (or 100x the value for "General" (2)). Remember to power cycle the drive for changes to take effect. Please note that the instructions assume access to Modbus registers 400002 (Reference 1) or 400003 (Reference 2).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to jschulze, the ACQ580 Firmware Manual indicates that the Modbus value range is -20000 to +20000 when parameter 58.26 or 58.27 is set to "Speed or frequency" (0), "Speed" (4), or "Frequency" (5). Parameters 46.01 and 46.02 determine the interpretation of a Modbus value of 20000 for the drive. For instance, if 46.01 is set to 1800.00 rpm, a Modbus value of 20000 corresponds to a speed of 1800.00 rpm. To match the scaling defined by parameters 46.01 and 46.02 in the drive, the Modbus value in the Mitsubishi PLC needs to be adjusted.

Alternatively, changing parameters 58.26 and 58.27 to "Transparent" (1) or "General" (2) on the drive may align the Modbus value with the frequency/speed value of the drive, or 100 times the value if set to "General" (2). A power cycle of the drive may be required for settings to take effect when making changes. This solution assumes access to Modbus registers 400002 (Reference 1) or 400003 (Reference 2).

Bob, thank you for addressing the issue. When the site's monitoring system displays values of 20000 instead of 50Hz or rpm, it can cause confusion for engineers. Your feedback on trying the transparent and general settings or making software adjustments is appreciated. Please update on your findings after testing on site.

Best regards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bertybassett</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I convert RPM and Hz readings on an ABB ACQ580 drive connected to a Mitsubishi PLC using Modbus communication?
- The conversion of RPM and Hz readings can be done either in the drive itself or in the PLC software. You can choose to perform the conversion based on your system requirements and ease of implementation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What parameters should be used to convert the raw value of 20000 for RPM and Hz readings?</h4>
<p class='text-muted'><strong>Answer:</strong> - To convert the raw value of 20000 for RPM and Hz readings, you may need to refer to the user manual of the ABB ACQ580 drive and the documentation for the Mitsubishi PLC to identify the specific parameters and formulas required for the conversion.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there any specific guidance available for configuring the ABB ACQ580 drive with a Mitsubishi PLC using Modbus communications?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can refer to the user manuals, technical documents, and online resources provided by ABB and Mitsubishi for detailed guidance on configuring the ACQ580 drive with a Mitsubishi PLC using Modbus communications. Additionally, seeking assistance from experienced professionals or contacting technical support from both companies can also be helpful.</p>
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
