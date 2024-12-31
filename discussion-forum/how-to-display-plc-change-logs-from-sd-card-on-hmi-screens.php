
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am excited to be sharing my first post on this forum, a community that I have been a part of for several years. My goal is to effectively download and display the latest 20 change logs for the PLC AB on the HMI for our maintenance">
    <meta name="keywords" content="plc change logs, sd card, hmi screens, maintenance team, mechanical issues, controllogix l82, v34 firmware, msg commands, gsv commands, display logs, access logs, showcase information, dde, opc, ftp">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-display-plc-change-logs-from-sd-card-on-hmi-screens">
    <title>How to Display PLC Change Logs from SD Card on HMI Screens | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Display PLC Change Logs from SD Card on HMI Screens | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am excited to be sharing my first post on this forum, a community that I have been a part of for several years. My goal is to effectively download and display the latest 20 change logs for the PLC AB on the HMI for our maintenance">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-display-plc-change-logs-from-sd-card-on-hmi-screens">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Display PLC Change Logs from SD Card on HMI Screens | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am excited to be sharing my first post on this forum, a community that I have been a part of for several years. My goal is to effectively download and display the latest 20 change logs for the PLC AB on the HMI for our maintenance">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-display-plc-change-logs-from-sd-card-on-hmi-screens"
      },
      "headline": "How to Display PLC Change Logs from SD Card on HMI Screens",
      "description": "Greetings everyone, I am excited to be sharing my first post on this forum, a community that I have been a part of for several years. My goal is to effectively download and display the latest 20 change logs for the PLC AB on the HMI for our maintenance",
      "author": {
        "@type": "Person",
        "name": "Mr Bradley"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-02",
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
                <h1 class="text-white">How to Display PLC Change Logs from SD Card on HMI Screens</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mr Bradley</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">132</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">472</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, 

I am excited to be sharing my first post on this forum, a community that I have been a part of for several years. My goal is to effectively download and display the latest 20 change logs for the PLC AB on the HMI for our maintenance team's reference. This will help them determine if any issues are mechanical in nature or if changes to the PLC have been made. Currently, I am storing these change logs on an SD card and would like to find a way to access and showcase this information on the HMI screens. Is it possible to achieve this using MSG / GSV commands? Unfortunately, I do not have a computer on site, ruling out options like DDE / OPC / FTP. 

I am working with Controllogix L82 with v34 firmware. Any advice or assistance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are not using AB, there might be a simpler solution you haven't considered yet. It's important to clarify where the SD card is connected - whether it's in the PLC, HMI, or elsewhere. If the SD card is in the PLC, one efficient solution would be to store change logs both on the SD card and in a string array in the PLC. This way, you can easily display the string array on the HMI without the need to worry about transferring files from the SD card to the HMI. This method streamlines the process and eliminates unnecessary steps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I display PLC change logs from an SD card on HMI screens?</h4>
<p class='text-muted'><strong>Answer:</strong> - To display PLC change logs from an SD card on HMI screens, you can use MSG / GSV commands to access and showcase the information. This method does not require a computer on site and can be implemented with the Controllogix L82 with v34 firmware.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is it important to display PLC change logs on HMI screens for the maintenance team?</h4>
<p class='text-muted'><strong>Answer:</strong> - Displaying PLC change logs on HMI screens allows the maintenance team to easily access the latest 20 change logs for the PLC AB. This helps them identify any mechanical issues or changes made to the PLC, aiding in troubleshooting and maintenance tasks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some alternative methods to display PLC change logs if a computer is not available on site?</h4>
<p class='text-muted'><strong>Answer:</strong> - If a computer is not available on site, options like DDE, OPC, or FTP may not be feasible. In such cases, utilizing MSG / GSV commands to access and display change logs from an SD card on HMI screens can be a practical solution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can the Controllogix L82 with v34 firmware support the display of PLC change logs on HMI screens?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the Controllogix L82 with v34 firmware can support the display of PLC change logs on HMI screens using MSG / GSV commands. This setup allows for efficient monitoring and tracking of changes for maintenance purposes.</p>
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
