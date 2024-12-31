
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently developing a servo motor linear positioning system using a ball screw. I have successfully established communication between my HMI and servo drive via RS-232, allowing me to seamlessly write and read parameters from the drive. Currently, I am configuring the positioning command using PUUs.">
    <meta name="keywords" content="inches to puus conversion, hmi servo drive communication, rs-232 parameter read write, servo motor linear positioning system, ball screw positioning, puus configuration, operator input conversion, macro command implementation, length conversion inches to puus">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-convert-inches-to-puus-on-hmi-for-servo-drive-input">
    <title>How to Convert Inches to PUUs on HMI for Servo Drive Input | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Convert Inches to PUUs on HMI for Servo Drive Input | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently developing a servo motor linear positioning system using a ball screw. I have successfully established communication between my HMI and servo drive via RS-232, allowing me to seamlessly write and read parameters from the drive. Currently, I am configuring the positioning command using PUUs.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-convert-inches-to-puus-on-hmi-for-servo-drive-input">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Convert Inches to PUUs on HMI for Servo Drive Input | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently developing a servo motor linear positioning system using a ball screw. I have successfully established communication between my HMI and servo drive via RS-232, allowing me to seamlessly write and read parameters from the drive. Currently, I am configuring the positioning command using PUUs.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-convert-inches-to-puus-on-hmi-for-servo-drive-input"
      },
      "headline": "How to Convert Inches to PUUs on HMI for Servo Drive Input",
      "description": "Hello everyone, I am currently developing a servo motor linear positioning system using a ball screw. I have successfully established communication between my HMI and servo drive via RS-232, allowing me to seamlessly write and read parameters from the drive. Currently, I am configuring the positioning command using PUUs.",
      "author": {
        "@type": "Person",
        "name": "ivanbenitezmx"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-29",
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
                <h1 class="text-white">How to Convert Inches to PUUs on HMI for Servo Drive Input</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ivanbenitezmx</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">220</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">202</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently developing a servo motor linear positioning system using a ball screw. I have successfully established communication between my HMI and servo drive via RS-232, allowing me to seamlessly write and read parameters from the drive. 

Currently, I am configuring the positioning command using PUUs. However, I am looking to simplify the operator's tasks by enabling them to input the positioning command in inches. I am considering utilizing a macro command for this conversion process, but I am seeking advice on how to proceed. My primary objective is to input the length to move in inches while having the HMI convert and write the parameter to the servo drive in PUUs.

I would greatly appreciate any ideas or recommendations on how to achieve this goal! The equipment used in the system includes the following:
- HMI: Delta-DOP107EG
- Servo Drive: ASDA2 0721 M
- Servo Motor: ECMA-C10807ES
- PLC: DVP28SV11R2</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm not sure about the delta HMI, but your explanation is a bit unclear. However, the formula for determining the steps per inch is as follows: back when I needed it, I searched for it and saved the formula in my PLC for future reference. The calculation is as follows: steps per inch = (motor steps * microstepping) / (travel at one turn of the motor in inches). For instance, if your microstepping is set at 16 (1/16 on the driver) and you are using a sprocket and chain with a pitch of .25 inches and 12 teeth on the drive sprocket, the calculation would be: (200 * 16) / (12 * .25) = 3200 / 3 = 1066.666 steps per inch. Similarly, for a lead screw with a travel of .5 inches at one turn, such as a 5 start 1/2 inch lead screw and using 4 microsteps per step (1/4), the calculation would be: (200 * 4) / (.5) = 800 / .5 = 1600 steps per inch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I convert inches to PUUs on my HMI for servo drive input in my linear positioning system?
   - You can achieve this by setting up a macro command on your HMI to convert the length input in inches to PUUs before writing the parameter to the servo drive.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What communication protocol are you using between the HMI and servo drive in your system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The communication protocol being used is RS-232 to establish seamless communication between the HMI and servo drive for reading and writing parameters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What equipment are you using in your system for the servo motor linear positioning setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The equipment used includes HMI: Delta-DOP107EG, Servo Drive: ASDA2 0721 M, Servo Motor: ECMA-C10807ES, and PLC: DVP28SV11R2.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I simplify the operator's task of inputting the positioning command in inches for the servo drive?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can simplify this task by enabling the operator to input the length in inches on the HMI, which will then convert and write the parameter to the servo drive in PUUs using a macro command.</p>
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
