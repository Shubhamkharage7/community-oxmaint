
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am attempting to upgrade my 1769-L24ER-BB1B controller to version 34xx, but I am encountering a flashing red light and a faulted status. When I attempt to perform the flash, I receive a notification saying the controller needs to be reset as it is not in the proper state.">
    <meta name="keywords" content="allen bradley 1769-l24er-bb1b, firmware flashing problem, troubleshooting, upgrade controller firmware, version 34xx, flashing red light, faulted status, controller reset, proper state, version 005">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-1769-l24er-bb1b-firmware-flashing-problem">
    <title>Troubleshooting Allen Bradley 1769-L24ER-BB1B Firmware Flashing Problem | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Allen Bradley 1769-L24ER-BB1B Firmware Flashing Problem | Oxmaint Community">
    <meta property="og:description" content="I am attempting to upgrade my 1769-L24ER-BB1B controller to version 34xx, but I am encountering a flashing red light and a faulted status. When I attempt to perform the flash, I receive a notification saying the controller needs to be reset as it is not in the proper state.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-1769-l24er-bb1b-firmware-flashing-problem">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Allen Bradley 1769-L24ER-BB1B Firmware Flashing Problem | Oxmaint Community">
    <meta name="twitter:description" content="I am attempting to upgrade my 1769-L24ER-BB1B controller to version 34xx, but I am encountering a flashing red light and a faulted status. When I attempt to perform the flash, I receive a notification saying the controller needs to be reset as it is not in the proper state.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-1769-l24er-bb1b-firmware-flashing-problem"
      },
      "headline": "Troubleshooting Allen Bradley 1769-L24ER-BB1B Firmware Flashing Problem",
      "description": "I am attempting to upgrade my 1769-L24ER-BB1B controller to version 34xx, but I am encountering a flashing red light and a faulted status. When I attempt to perform the flash, I receive a notification saying the controller needs to be reset as it is not in the proper state.",
      "author": {
        "@type": "Person",
        "name": "geniusintraining"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-05",
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
                <h1 class="text-white">Troubleshooting Allen Bradley 1769-L24ER-BB1B Firmware Flashing Problem</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">468</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">233</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am attempting to upgrade my 1769-L24ER-BB1B controller to version 34xx, but I am encountering a flashing red light and a faulted status. When I attempt to perform the flash, I receive a notification saying the controller needs to be reset as it is not in the 'proper state'. Despite having version 1.005 loaded, I am unable to go online as the firmware is required beforehand. I have attempted switching to programming mode and rebooting, but I am still facing the same issue. Any suggestions on how to resolve this? Thank you, Mark.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to update firmware to a different version, such as v32?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jstolaruk asked about the possibility of flashing it to a different version like v32. Here are my opinions on the matter...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The latest version of the sticker on the front indicates it is 34 or newer. I attempted to update using ControlFlash Plus and Logix Designer, but encountered the same error message: "Failed to begin update." This suggests that the target device is not in the correct mode to accept updates. To resolve this issue, a manual reset of the module may be necessary. Click to expand for further instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider flashing your device with firmware version 33 to determine if it is compatible. If successful, it may indicate a potential issue with the 34 firmware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering the same problems at age 35, facing the same persistent error message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Be cautious when attempting to flash different firmware versions, as a user recently reported encountering issues when trying to downgrade their CompactLogix 1769-L24ER Series B controller. The firmware version was not supported and caused complications. Thank you for any help you can provide! This is my first post, so please inform me if any changes need to be made. We inadvertently flashed a CompactLogix 1769-L24ER-QB1B Series B controller with an incompatible firmware version. For more information, visit www.plctalk.net.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted to flash version 35 on my L24er PLC because the sticker indicated it could support 34 or higher versions. I noticed a small button on the L24er and suspect it may be for performing a factory reset. However, I am unable to locate any instructions on how to do so. I came across a YouTube video demonstrating a reset on a 5069 model using the button, but it doesn't seem to work on the L24er, especially since I do not have a display for guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon inspecting the CPU, I noticed a minute pin hole that could potentially serve as a "reset button."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're encountering the ControlFLASH Error message "target device is not in the proper mode to accept an update," you can refer to KB entry QA10161 for troubleshooting tips. This entry lists various factors to consider, some of which may relate to the programming device rather than the product itself.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to jstolaruk, it is noted that a KB entry (QA10161) addresses a message regarding the ControlFLASH Error target device not being in the correct mode for an update. The entry also mentions potential issues with programming devices. Unfortunately, without access to a tech connect, troubleshooting can be challenging. Despite a reset button being available, minimal progress is being made, and information on its usage is unclear in the manual provided. For further assistance, refer to the following link: https://literature.rockwellautomation.com/idc/groups/literature/documents/um/1769-um021_-en-p.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently received advice from a friend on how to perform a manual reset on the CPU by cycling power while holding down the button. However, the issue persisted even after the reboot without the flash card being recognized. This situation is quite perplexing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could this problem be related to browsing beyond the backplane? Have you perhaps navigated too deep into the system?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I opted for the first box but experienced some issues. It seems like the problem arose from using the wrong firmware on the flashcard - the new one required firmware version 34 or higher, while the old one had version 28. I'll create a new flashcard with the correct firmware and test it out. If it doesn't work, I might end up with a costly door stop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Exciting update! I successfully flashed the CPU with a new flashcard, and both are now functioning properly. Has anyone else encountered difficulties creating a new SD card with the correct firmware and successfully loading it from the SD card to save? Thank you to everyone who offered assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why am I encountering a flashing red light and a faulted status when trying to upgrade my 1769-L24ER-BB1B controller firmware?</h4>
<p class='text-muted'><strong>Answer:</strong> - This issue may occur if the controller is not in the proper state for flashing. The controller may need to be reset before proceeding with the firmware upgrade.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I resolve the notification prompting a controller reset during the firmware flashing process?</h4>
<p class='text-muted'><strong>Answer:</strong> - To resolve this issue, try switching the controller to programming mode and rebooting it. This may help to reset the controller and allow for a successful firmware upgrade.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why am I unable to go online despite having version 1.005 loaded on my controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - Going online may require the firmware to be updated first. Ensure that the firmware upgrade is successful before attempting to go online with the controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What should I do if I am still facing issues after switching to programming mode and rebooting the controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the issue persists, consider seeking assistance from technical support or referring to the controller's user manual for further troubleshooting steps.</p>
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
