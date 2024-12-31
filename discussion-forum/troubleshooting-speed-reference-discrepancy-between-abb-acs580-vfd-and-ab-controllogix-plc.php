
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am seeking assistance with understanding the connection between my ABB VFD and Rockwell PLC. I have configured the VFD parameters following the provided ABB worksheet for ODVA extended parameters. An image of the parameter settings from the ABB Spreadsheet has been uploaded for reference. My main">
    <meta name="keywords" content="abb acs580 vfd, ab controllogix plc, troubleshooting speed reference discrepancy, vfd parameter configuration, odva extended parameters, speed reference control, plc to">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-speed-reference-discrepancy-between-abb-acs580-vfd-and-ab-controllogix-plc">
    <title>Troubleshooting Speed Reference Discrepancy Between ABB ACS580 VFD and AB ControlLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Speed Reference Discrepancy Between ABB ACS580 VFD and AB ControlLogix PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am seeking assistance with understanding the connection between my ABB VFD and Rockwell PLC. I have configured the VFD parameters following the provided ABB worksheet for ODVA extended parameters. An image of the parameter settings from the ABB Spreadsheet has been uploaded for reference. My main">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-speed-reference-discrepancy-between-abb-acs580-vfd-and-ab-controllogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Speed Reference Discrepancy Between ABB ACS580 VFD and AB ControlLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am seeking assistance with understanding the connection between my ABB VFD and Rockwell PLC. I have configured the VFD parameters following the provided ABB worksheet for ODVA extended parameters. An image of the parameter settings from the ABB Spreadsheet has been uploaded for reference. My main">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-speed-reference-discrepancy-between-abb-acs580-vfd-and-ab-controllogix-plc"
      },
      "headline": "Troubleshooting Speed Reference Discrepancy Between ABB ACS580 VFD and AB ControlLogix PLC",
      "description": "Hello everyone! I am seeking assistance with understanding the connection between my ABB VFD and Rockwell PLC. I have configured the VFD parameters following the provided ABB worksheet for ODVA extended parameters. An image of the parameter settings from the ABB Spreadsheet has been uploaded for reference. My main",
      "author": {
        "@type": "Person",
        "name": "PLCENGR014"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-14",
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
                <h1 class="text-white">Troubleshooting Speed Reference Discrepancy Between ABB ACS580 VFD and AB ControlLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCENGR014</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1037</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">180</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am seeking assistance with understanding the connection between my ABB VFD and Rockwell PLC. I have configured the VFD parameters following the provided ABB worksheet for ODVA extended parameters. An image of the parameter settings from the ABB Spreadsheet has been uploaded for reference. My main issue lies with the speed reference control. When sending a speed reference command from the PLC to the VFD over Ethernet, such as 100 RPM, I expect the reference value returned from the VFD to match exactly. However, this is not the case. Despite sending a reference of 100 RPM as an INT data type per the ABB documentation, I receive a value of 1111 RPM. While I understand this value may actually represent 111.1 RPM, consistent with other data transfers, the discrepancy of 11.1 RPM is causing a system tolerance issue. I am seeking insight from ABB and Rockwell experts on the origin of this additional 11.1 RPM and how I can calibrate or eliminate it to ensure consistent matching of sent and received references. Thank you in advance for any assistance provided!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have an encoder integrated into your drive motor setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, this system does not have an encoder. It's important to note that the return reference does not represent the actual speed of the system; rather, it pertains to the VFD's control reference command. Essentially, it validates that the Commanded speed in the PLC aligns with the instructed speed in the VFD's control algorithm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCENGR014</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have discovered the solution to my problem, and it turned out to be simpler than I had anticipated. The data returned is calibrated on a scale of 0-20000. Therefore, all I had to do was adjust the data to align with the 0-1800 RPM format that I needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCENGR014</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After coming across a solution to my problem, I realized it was actually quite simple. The data I received was on a 0-20000 scale, whereas I needed it to be in a 0-1800 RPM format. When the drive is in "scaler" or "V/hz" mode, the reference and feedback are based on the motor's synchronous speed. However, when switched to vector mode, the reference and feedback units are in 1:1 rpm. For further clarification, you can refer to the FEIP-Manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why is there a speed reference discrepancy between the ABB ACS580 VFD and AB ControlLogix PLC?
- The discrepancy may be due to how the speed reference values are interpreted and transferred between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I ensure consistent matching of sent and received speed references between the VFD and PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You may need to calibrate or adjust the parameter settings in both the VFD and PLC to ensure accurate speed reference communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be the possible reasons for receiving a different speed reference value (1111 RPM) instead of the expected value (100 RPM)?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discrepancy could be related to data type conversion, scaling factors, or communication protocols between the ABB VFD and Rockwell PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a specific configuration or setting that needs to be adjusted to eliminate the 11.1 RPM discrepancy in speed reference values?</h4>
<p class='text-muted'><strong>Answer:</strong> - You may need to review and adjust the data type settings, scaling factors, or communication parameters to address the discrepancy and achieve accurate speed reference control.</p>
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
