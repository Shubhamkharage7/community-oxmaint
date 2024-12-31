
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Having a system utilizing an Allen Bradley 1394-STJ10-A servo controller that experienced a malfunction in the memory module, I had to replace the controller. The original controller was a firmware version 7.1 series C, while the new one is version 7.1 series A. The main difference between the series">
    <meta name="keywords" content="allen bradley 1394-stj10-a servo controller, 1756-m02ae module troubleshooting, position error resolution, resolver vs absolute encoder, firmware version 1 series c vs series">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-position-error-on-1756-m02ae-module-with-allen-bradley-1394-stj10-a-servo-controller">
    <title>Troubleshooting Position Error on 1756-M02AE Module with Allen Bradley 1394-STJ10-A Servo Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Position Error on 1756-M02AE Module with Allen Bradley 1394-STJ10-A Servo Controller | Oxmaint Community">
    <meta property="og:description" content="Having a system utilizing an Allen Bradley 1394-STJ10-A servo controller that experienced a malfunction in the memory module, I had to replace the controller. The original controller was a firmware version 7.1 series C, while the new one is version 7.1 series A. The main difference between the series">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-position-error-on-1756-m02ae-module-with-allen-bradley-1394-stj10-a-servo-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Position Error on 1756-M02AE Module with Allen Bradley 1394-STJ10-A Servo Controller | Oxmaint Community">
    <meta name="twitter:description" content="Having a system utilizing an Allen Bradley 1394-STJ10-A servo controller that experienced a malfunction in the memory module, I had to replace the controller. The original controller was a firmware version 7.1 series C, while the new one is version 7.1 series A. The main difference between the series">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-position-error-on-1756-m02ae-module-with-allen-bradley-1394-stj10-a-servo-controller"
      },
      "headline": "Troubleshooting Position Error on 1756-M02AE Module with Allen Bradley 1394-STJ10-A Servo Controller",
      "description": "Having a system utilizing an Allen Bradley 1394-STJ10-A servo controller that experienced a malfunction in the memory module, I had to replace the controller. The original controller was a firmware version 7.1 series C, while the new one is version 7.1 series A. The main difference between the series",
      "author": {
        "@type": "Person",
        "name": "stateline"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-30",
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
                <h1 class="text-white">Troubleshooting Position Error on 1756-M02AE Module with Allen Bradley 1394-STJ10-A Servo Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>stateline</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">235</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">484</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Having a system utilizing an Allen Bradley 1394-STJ10-A servo controller that experienced a malfunction in the memory module, I had to replace the controller. The original controller was a firmware version 7.1 series C, while the new one is version 7.1 series A. The main difference between the series is the removal of a fan in the newer version with plugs on the older version. After installation, I consistently encounter a position error on my 1756-M02AE module. There are four axis modules connected to the controller, with only the M02AE module faulting out. The M02AE utilizes an absolute encoder, while the axis modules use a resolver. Two out of the four modules fault immediately upon enabling, while the remaining two fault when attempting to move them. Additionally, the non-faulting modules move slowly without a command speed from the M02AE. The program shows a command speed of around 45 for one and -15 for the other on the HIM once enabled, suggesting possible noise interference. Furthermore, the tolerance for the position error on the M02AE is set to .05 for three of them and .5 for the remaining one. I managed to move the modules by jumpering power to the enable signals and using the jog button on the HIM, indicating that the motors and drives are functioning properly. What other factors should I consider troubleshooting? Additionally, I replaced both M02AE cards in the rack as a precaution and backed up the program on the HIM for transfer to the new controller.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>This may pose a challenge as something may have been lost or damaged in the servo controller configuration or encoder. Is your 1394 controlling the servomotor with a motor-mounted resolver? Where is the physically mounted encoder connected to the M02AE? In essence, "M02AE" stands for "Motion, 2 Axis, Analog Output, Encoder Feedback." Typically, the encoder types used are quadrature incremental encoders. For SSI, you would require a 1756-M02AS, or for a magnetostrictive absolute encoder, a HYD02 may be needed. To troubleshoot servo controllers, try using a "Direct Command" on the motion module to set the 0-10V command to a fixed output without closing the position loop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have the 1394-SJT10-A User Manual PDF from Rockwell Automation? This device is not a GMC or Turbo motion controller, but rather a digital servo drive that accepts Analog 0-10 V position or torque commands. It features numerous programmable parameters that need to be manually loaded from the PLC. Visit the link for more information: https://literature.rockwellautomation.com/idc/groups/literature/documents/um/1394-um000_-en-p.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the position error on the 1756-M02AE module after replacing the Allen Bradley 1394-STJ10-A servo controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The position error on the M02AE module could be caused by various factors such as differences in firmware versions between the old and new controllers, encoder type differences, potential noise interference, or incorrect tolerance settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why are some axis modules faulting immediately while others fault when attempting to move after enabling?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The faulting of the axis modules could be related to issues with communication, power supply, encoder type compatibility, or noise interference impacting the module's performance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the slow movement of non-faulting modules without a command speed from the M02AE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the slow movement issue, consider checking for noise interference, verifying proper power supply, ensuring correct encoder settings, and examining communication between the modules and the controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are the potential implications of the different tolerance settings for the position error on the M02AE module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The tolerance settings on the M02AE module can impact how sensitive the system is to position errors, with different settings affecting the allowable margin of error in positioning. It's important to ensure that the tolerance settings are appropriate for the application and equipment being used.</p>
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
