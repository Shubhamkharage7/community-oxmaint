
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently started a new job and inherited some tasks from my predecessor. Currently, I am working with a Click PLC C0-11DRE-D, a Cognex DMR-280Q camera, and a 7 HMI system. The system is designed for the operator to input a lot number into the PLC, which then instructs">
    <meta name="keywords" content="troubleshooting qr code, click plc, cognex camera, communication issue, lot number input, hmi system, qr code capture, camera software, code translation, modbus configuration, click protocol, ladder logic, plc communication, camera">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-qr-code-communication-issue-with-click-plc-and-cognex-camera">
    <title>Troubleshooting QR Code Communication Issue with Click PLC and Cognex Camera | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting QR Code Communication Issue with Click PLC and Cognex Camera | Oxmaint Community">
    <meta property="og:description" content="I recently started a new job and inherited some tasks from my predecessor. Currently, I am working with a Click PLC C0-11DRE-D, a Cognex DMR-280Q camera, and a 7 HMI system. The system is designed for the operator to input a lot number into the PLC, which then instructs">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-qr-code-communication-issue-with-click-plc-and-cognex-camera">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting QR Code Communication Issue with Click PLC and Cognex Camera | Oxmaint Community">
    <meta name="twitter:description" content="I recently started a new job and inherited some tasks from my predecessor. Currently, I am working with a Click PLC C0-11DRE-D, a Cognex DMR-280Q camera, and a 7 HMI system. The system is designed for the operator to input a lot number into the PLC, which then instructs">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-qr-code-communication-issue-with-click-plc-and-cognex-camera"
      },
      "headline": "Troubleshooting QR Code Communication Issue with Click PLC and Cognex Camera",
      "description": "I recently started a new job and inherited some tasks from my predecessor. Currently, I am working with a Click PLC C0-11DRE-D, a Cognex DMR-280Q camera, and a 7 HMI system. The system is designed for the operator to input a lot number into the PLC, which then instructs",
      "author": {
        "@type": "Person",
        "name": "Gossamer1969"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-28",
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
                <h1 class="text-white">Troubleshooting QR Code Communication Issue with Click PLC and Cognex Camera</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Gossamer1969</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">613</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">53</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently started a new job and inherited some tasks from my predecessor. Currently, I am working with a Click PLC C0-11DRE-D, a Cognex DMR-280Q camera, and a 7" HMI system. The system is designed for the operator to input a lot number into the PLC, which then instructs the camera to capture a QR code and send the same number back. Despite seeing the code translation in the camera software, the number is not being communicated to the PLC - only receiving 0's/$$. I tried configuring the camera to use Modbus to align with the click protocol, but the issue persists. While I have experience with ladder logic, cameras are not my forte. Any advice or guidance on this matter would be greatly appreciated as I am currently facing some difficulties.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Based on your details, it seems that the Click device functions as the Modbus master in this setup. The suggested sequence of actions should follow as such: 1. The Click device activates a specific bit in the Cognex command word to prompt the scanning of the QR code. 2. The Click device constantly checks the Cognex status word until it confirms that the QR code has been successfully scanned. 3. Once the scanning is complete, the Click device then deactivates the aforementioned bit in the Cognex command word. 4. Following this, the Click device proceeds to request the QR code data from the Cognex. 5. Finally, the Click device retrieves the QR code data from the Cognex. Can you confirm if these steps are being executed accurately as planned?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Keep in mind that the majority of barcode scanners (cameras) typically transmit barcode or QR code data in ASCII format. Therefore, do not anticipate receiving values in decimal form. Consult the camera's manual to identify which Modbus registers store the data for the last scanned code. Extract these registers from the PLC system. Typically, each character (letter/number) is assigned its own byte, so you may need to retrieve multiple registers simultaneously in order to obtain the complete code, depending on its length.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for more information on Modbus TCP communication, be sure to check out this link: https://support.cognex.com/docs/dms...Manual/Content/Topics/PDF/DMCAP/ModbusTCP.htm. This resource provides valuable insights into setting up and troubleshooting Modbus TCP connections.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: Why is my Click PLC not receiving the correct data from the Cognex camera despite configuring it to align with the Click protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue might be related to the configuration settings or communication setup between the PLC and the camera. It's important to ensure that the communication protocols, data formats, and addressing are correctly configured on both devices for seamless data transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: How can I troubleshoot communication issues between my Click PLC and Cognex camera in a QR code system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the communication settings, verifying the data being sent and received, testing with different input scenarios, and ensuring that the PLC and camera are compatible in terms of protocols and data formats.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: What steps can I take to debug the problem of only receiving 0's/$$ in the PLC instead of the expected lot number from the Cognex camera?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try monitoring the data flow between the camera and PLC, checking for any errors in the data transmission, confirming the correct data mapping, and validating the communication setup to identify and resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: I have experience with ladder logic but not with cameras. How can I effectively troubleshoot the QR code communication issue between the Click PLC and Cognex camera?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can seek assistance from experts in camera systems, review the documentation for both the PLC and camera, experiment with different configurations, and use diagnostic tools to</p>
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
