
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experiencing a problem with a 4-20mA output signal drive connecting to a PLC, as it is only outputting 14-15mA instead of the expected rate at 60Hz. It is suspected that the scale may have been altered. The drive has an additional I/O module on port 4, but accessing its">
    <meta name="keywords" content="troubleshooting 4-20ma output signal, powerflex 753 ao drive issue, plc connection problem, adjusting scale for 4-20ma signal, i/o module configuration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-4-20ma-output-signal-drive-issue-with-powerflex-753-ao">
    <title>Troubleshooting 4-20mA Output Signal Drive Issue with Powerflex 753 Ao | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 4-20mA Output Signal Drive Issue with Powerflex 753 Ao | Oxmaint Community">
    <meta property="og:description" content="Experiencing a problem with a 4-20mA output signal drive connecting to a PLC, as it is only outputting 14-15mA instead of the expected rate at 60Hz. It is suspected that the scale may have been altered. The drive has an additional I/O module on port 4, but accessing its">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-4-20ma-output-signal-drive-issue-with-powerflex-753-ao">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 4-20mA Output Signal Drive Issue with Powerflex 753 Ao | Oxmaint Community">
    <meta name="twitter:description" content="Experiencing a problem with a 4-20mA output signal drive connecting to a PLC, as it is only outputting 14-15mA instead of the expected rate at 60Hz. It is suspected that the scale may have been altered. The drive has an additional I/O module on port 4, but accessing its">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-4-20ma-output-signal-drive-issue-with-powerflex-753-ao"
      },
      "headline": "Troubleshooting 4-20mA Output Signal Drive Issue with Powerflex 753 Ao",
      "description": "Experiencing a problem with a 4-20mA output signal drive connecting to a PLC, as it is only outputting 14-15mA instead of the expected rate at 60Hz. It is suspected that the scale may have been altered. The drive has an additional I/O module on port 4, but accessing its",
      "author": {
        "@type": "Person",
        "name": "Bsmith530"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-05",
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
                <h1 class="text-white">Troubleshooting 4-20mA Output Signal Drive Issue with Powerflex 753 Ao</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bsmith530</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">445</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">70</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Experiencing a problem with a 4-20mA output signal drive connecting to a PLC, as it is only outputting 14-15mA instead of the expected rate at 60Hz. It is suspected that the scale may have been altered. The drive has an additional I/O module on port 4, but accessing its parameters through the HMI has proven difficult. Would connecting to a laptop with specialized software be necessary to adjust these settings? Thank you for your assistance in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking to access all parameters for the 20-HIM-A3, simply follow these steps: Press and release the ALT key, then press and release the parameter key before entering the specific parameter number you need.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to locate the PN's on the board, please refer to the attached document for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bsmith530</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 20-HIM-A3 keypad can be easily installed on the drive or cabinet door, providing convenient access and control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DarrylR inquired about the availability of the 20-HIM-A3 keypad, which allows for viewing all parameters. To access the parameters, simply press and release the ALT key, followed by the parameter key, and then enter the parameter number. The 20-HIM-A3 keypad can be installed on the front of the drive or the cabinet door. However, it is important to note that the HMI will only display parameters for port 00, as all DIs, DOs, AOs, and AIs are programmed to port 4.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bsmith530</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Configure analog output settings for Drive Port 0 by adjusting Parameters 270 to 282. Parameter 280 allows you to set the high output, Parameter 281 sets the low output, and Parameter 282 displays the current output level (read-only).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to DarrylR, Drive Port 0 has parameters 270-282 for analog output settings, including 280 for high output setting, 281 for low output setting, and 282 for current output level (which is read-only). I am looking to access similar parameters, but for port 4.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bsmith530</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm not sure if you can access the parameters by adding the port number before the parameter number (e.g. 040280.value). If not, you may have to use the CCW software to connect with the drive. Test entering 040280 as the parameter number to check the current setting. It is important to ensure that all settings are properly configured for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will attempt this method during my next on-site visit and provide an update. Can anyone confirm if the CCW software is available for free download?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bsmith530</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Get your free download now and take advantage of this easy-to-use tool. Make sure to refer to the manual for accurate parameter numbers on Port 4, as they may differ from Port 0. When using the HIM again, consider entering 040019 as it could be the high or low set value you're looking for.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'll make sure to look into that. Thank you for your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bsmith530</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access parameters on different ports of the HIM, you will need to navigate using the device itself. The process may vary depending on the specific HIM model. For example, with the 20-HIM-A6, you can access parameters on other ports by pressing the button resembling a folder on the HIM interface.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access and adjust parameters on every port, simply choose the device through the HIM interface. The default port is Port 0, designated for the drive. When it comes to scaling, the PF753 typically operates in RPMs. Have you configured the drive to utilize HZ instead?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up a PF753 drive, make sure to select the device from the HIM to view/edit parameters on all ports, with the default being Port 0. The drive operates in RPMs by default, but can be configured for scaling as needed. If you encounter difficulties, refer to the status screen per the manual's instructions. Give this a try during your next site visit to troubleshoot effectively. Thanks for the tip!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bsmith530</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my 4-20mA output signal drive only outputting 14-15mA instead of the expected rate?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be due to a potential alteration in the scale settings of the drive.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I access and adjust the parameters of the additional I/O module on port 4 of the drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If accessing the parameters through the HMI is proving difficult, connecting to a laptop with specialized software might be necessary for adjusting these settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take to troubleshoot the 4-20mA output signal drive issue with a Powerflex 753 Ao?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is recommended to check the scale settings, consider using specialized software on a laptop for parameter adjustments, and ensure all connections are secure and properly configured.</p>
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
