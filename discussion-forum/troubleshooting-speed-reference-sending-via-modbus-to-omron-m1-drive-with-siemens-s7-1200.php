
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing challenges in sending a speed reference via Modbus to an Omron M1 drive. I have successfully sent a run command and confirmed the communication between the two devices. However, I am struggling with the documentation for the Omron M1 drive. I have included">
    <meta name="keywords" content="modbus speed reference troubleshooting, omron m1 drive speed reference via modbus, siemens s7-1200 modbus communication issues, troubleshooting omron m1 drive documentation, modbus">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-speed-reference-sending-via-modbus-to-omron-m1-drive-with-siemens-s7-1200">
    <title>Troubleshooting Speed Reference Sending via Modbus to Omron M1 Drive with Siemens S7-1200 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Speed Reference Sending via Modbus to Omron M1 Drive with Siemens S7-1200 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing challenges in sending a speed reference via Modbus to an Omron M1 drive. I have successfully sent a run command and confirmed the communication between the two devices. However, I am struggling with the documentation for the Omron M1 drive. I have included">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-speed-reference-sending-via-modbus-to-omron-m1-drive-with-siemens-s7-1200">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Speed Reference Sending via Modbus to Omron M1 Drive with Siemens S7-1200 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing challenges in sending a speed reference via Modbus to an Omron M1 drive. I have successfully sent a run command and confirmed the communication between the two devices. However, I am struggling with the documentation for the Omron M1 drive. I have included">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-speed-reference-sending-via-modbus-to-omron-m1-drive-with-siemens-s7-1200"
      },
      "headline": "Troubleshooting Speed Reference Sending via Modbus to Omron M1 Drive with Siemens S7-1200",
      "description": "Hello everyone, I am currently facing challenges in sending a speed reference via Modbus to an Omron M1 drive. I have successfully sent a run command and confirmed the communication between the two devices. However, I am struggling with the documentation for the Omron M1 drive. I have included",
      "author": {
        "@type": "Person",
        "name": "KalvMavin"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">Troubleshooting Speed Reference Sending via Modbus to Omron M1 Drive with Siemens S7-1200</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>KalvMavin</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">502</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">253</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing challenges in sending a speed reference via Modbus to an Omron M1 drive. I have successfully sent a run command and confirmed the communication between the two devices. However, I am struggling with the documentation for the Omron M1 drive. I have included a screenshot of the MB_MASTER block used for the run command, which is functioning correctly. As a novice in Modbus, I am unsure about the parameters needed to write a speed reference to the drive. The M1 manual suggests writing to address S05 for the run command, but my attempts have not been successful. Any assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Am I correct in assuming that the address I should use is 45005? I've attempted to use this address without success. However, I'm unsure if this is the right address for my specific needs...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KalvMavin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you confirm if the correct address to write to is 45005? Based on the parameter S05's address being in 5005h, the Modbus address for the parameter could likely be 420485. This information is crucial for communication protocols and data transmission accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted this without success, but I'm beginning to question if I'm addressing the correct register. Could I be targeting the wrong audience altogether?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KalvMavin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you checked parameter S05 to confirm if the value you are attempting to write is being received? Or is your concern regarding the drive not operating at the desired speed as you are commanding? Typically, a specific parameter must be set in the drive to indicate which speed command to use. This could be a 4-20 mA signal at terminal X, a 0-10 volt signal at terminal Y, a speed command from the keypad, or a speed command via the network. This parameter is separate from the one that enables the drive to accept the run command from the network. This information is drawn from my general experience with drives, and may vary for your specific model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The M1 manual provides a modbus write example for setting the C99 frequency at address 1388h. C99 serves as the first frequency reference, while E109 is identified as the second frequency reference. I have not yet had the opportunity to use Omron VFDs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I want to provide an update on the issue I was facing. Thanks for your responses. I mistakenly wrote to S05 instead of the correct destination, S01. I have corrected this mistake and everything is now functioning properly. It turns out I was over complicating the use of modbus due to not using it for some time. Thank you once again for your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KalvMavin</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the specific challenge faced when sending a speed reference via Modbus to an Omron M1 drive?</h4>
<p class='text-muted'><strong>Answer:</strong> - The challenge is related to understanding the parameters required to write a speed reference to the Omron M1 drive, specifically addressing the issue of unsuccessful attempts to write to address S05 as suggested in the M1 manual.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I confirm successful communication between the devices in a Modbus setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - One way to confirm successful communication is by sending a run command, as mentioned in the discussion thread. Additionally, checking for any error codes or indicators of successful data transmission can help verify the communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. As a novice in Modbus, what resources or guidance can help in understanding the necessary parameters for writing a speed reference to the Omron M1 drive?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to thoroughly review the Omron M1 drive's manual for specific instructions on setting speed references. Consulting Modbus communication guides or seeking assistance from experienced professionals in Modbus configuration can also provide valuable insights.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps can be taken to troubleshoot unsuccessful attempts at writing a speed reference to the Omron M1 drive, despite successful run command communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some troubleshooting steps may include verifying the data format and structure being sent via Modbus, ensuring the correct Modbus function codes are used for writing speed references, and double-checking the device addresses and configurations to match the requirements of the Omron M</p>
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
