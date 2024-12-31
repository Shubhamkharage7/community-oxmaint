
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experiencing an unusual issue with Panelview Plus 7s and thumb drive USBs used to store daily trend screen shots. After power cycling the HMI, the print screen feature fails to recognize the USB, defaulting to saving images on the local Panelview hard drive. Despite attempting different HMIs, firmwares, and">
    <meta name="keywords" content="panelview plus 7, print screen issue, usb storage, troubleshooting, hmi, power cycling, trend screen shots, firmware, usb sticks, fat formats, os, me software, detect usb, redirect path, firmware versions">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-7-print-screen-issue-with-usb-storage">
    <title>Troubleshooting Panelview Plus 7 Print Screen Issue with USB Storage | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Panelview Plus 7 Print Screen Issue with USB Storage | Oxmaint Community">
    <meta property="og:description" content="Experiencing an unusual issue with Panelview Plus 7s and thumb drive USBs used to store daily trend screen shots. After power cycling the HMI, the print screen feature fails to recognize the USB, defaulting to saving images on the local Panelview hard drive. Despite attempting different HMIs, firmwares, and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-7-print-screen-issue-with-usb-storage">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Panelview Plus 7 Print Screen Issue with USB Storage | Oxmaint Community">
    <meta name="twitter:description" content="Experiencing an unusual issue with Panelview Plus 7s and thumb drive USBs used to store daily trend screen shots. After power cycling the HMI, the print screen feature fails to recognize the USB, defaulting to saving images on the local Panelview hard drive. Despite attempting different HMIs, firmwares, and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-7-print-screen-issue-with-usb-storage"
      },
      "headline": "Troubleshooting Panelview Plus 7 Print Screen Issue with USB Storage",
      "description": "Experiencing an unusual issue with Panelview Plus 7s and thumb drive USBs used to store daily trend screen shots. After power cycling the HMI, the print screen feature fails to recognize the USB, defaulting to saving images on the local Panelview hard drive. Despite attempting different HMIs, firmwares, and",
      "author": {
        "@type": "Person",
        "name": "LoganB"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-14",
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
                <h1 class="text-white">Troubleshooting Panelview Plus 7 Print Screen Issue with USB Storage</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>LoganB</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">149</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">238</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Experiencing an unusual issue with Panelview Plus 7s and thumb drive USBs used to store daily trend screen shots. After power cycling the HMI, the print screen feature fails to recognize the USB, defaulting to saving images on the local Panelview hard drive. Despite attempting different HMIs, firmwares, and USB sticks with varying FAT formats, the problem persists. This recurring issue with losing the print screen path upon power cycling seems to be an OS or ME software flaw. It appears that the HMI fails to detect the USB until manually redirected. This issue has been encountered across firmware versions 10-14. Any insights on resolving this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>As a next step, the desktop's "Print2PDF" tool is experiencing issues with retaining the file path to the USB stick.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LoganB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I find it interesting that I use Print2PDF to save files on my local storage volume in the "\My Documents" folder, which I later transfer over FTP. With PV+, you have access to internal storage memory ("\My Documents"), a removable SD card ("\Storage Card2"), and one or more USB storage devices ("\USB Storage").

Have you ever removed a USB device while the terminal is powered on? If so, does Print2PDF still work in those circumstances? If an ActiveX attempts to access a removable device that is not connected, the OS creates an "\External Storage2" folder on the internal storage instead of causing an error. Do you know if screenshots are saved in this folder or in "\My Documents"?

According to a knowledgebase document I found (https://rockwellautomation.custhelp.com/app/answers/answer_view/a_id/1074719), if this situation occurs, the OS may get stuck in that state and require you to reset the file paths and pointers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my Panelview Plus 7 not recognizing the USB drive for saving print screen images after power cycling?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of the HMI failing to detect the USB drive for saving images after power cycling could be related to an OS or ME software flaw, as mentioned in the discussion thread.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I have tried different HMIs, firmwares, and USB sticks with varying FAT formats but the problem persists. What could be causing this recurring issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Despite various attempts, if the Panelview Plus 7 continues to default to saving images on the local hard drive instead of the USB drive, it suggests a potential flaw in the HMI's software system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I resolve the issue of the Panelview Plus 7 losing the print screen path upon power cycling and failing to detect the USB until manually redirected?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One suggested solution could involve troubleshooting the firmware versions 10-14 to identify any specific version-related issues that might be causing the problem. Additionally, seeking assistance from Rockwell Automation or the HMI manufacturer could provide insights on resolving this issue.</p>
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
