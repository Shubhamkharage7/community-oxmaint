
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We recently attempted to replace a 1769-L24ER-QBFC1B Series A controller with the newer Series B controller. The Series A controller had firmware version 20 installed, and the program was loaded onto the SD card along with the option to load both the program and firmware upon power up. When">
    <meta name="keywords" content="troubleshooting series a/b firmware problems, compactlogix 1769-qbfc1b controller, series a controller, series b controller, firmware update failure, loading program, sd card issue, studio 5000 conversion, controlflash">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-series-a-b-firmware-problems-with-compactlogix-1769-qbfc1b-controller">
    <title>Troubleshooting Series A/B Firmware Problems with CompactLogix 1769-QBFC1B Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Series A/B Firmware Problems with CompactLogix 1769-QBFC1B Controller | Oxmaint Community">
    <meta property="og:description" content="We recently attempted to replace a 1769-L24ER-QBFC1B Series A controller with the newer Series B controller. The Series A controller had firmware version 20 installed, and the program was loaded onto the SD card along with the option to load both the program and firmware upon power up. When">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-series-a-b-firmware-problems-with-compactlogix-1769-qbfc1b-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Series A/B Firmware Problems with CompactLogix 1769-QBFC1B Controller | Oxmaint Community">
    <meta name="twitter:description" content="We recently attempted to replace a 1769-L24ER-QBFC1B Series A controller with the newer Series B controller. The Series A controller had firmware version 20 installed, and the program was loaded onto the SD card along with the option to load both the program and firmware upon power up. When">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-series-a-b-firmware-problems-with-compactlogix-1769-qbfc1b-controller"
      },
      "headline": "Troubleshooting Series A/B Firmware Problems with CompactLogix 1769-QBFC1B Controller",
      "description": "We recently attempted to replace a 1769-L24ER-QBFC1B Series A controller with the newer Series B controller. The Series A controller had firmware version 20 installed, and the program was loaded onto the SD card along with the option to load both the program and firmware upon power up. When",
      "author": {
        "@type": "Person",
        "name": "dmned64"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-14",
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
                <h1 class="text-white">Troubleshooting Series A/B Firmware Problems with CompactLogix 1769-QBFC1B Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dmned64</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">305</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">222</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We recently attempted to replace a 1769-L24ER-QBFC1B Series A controller with the newer Series B controller. The Series A controller had firmware version 20 installed, and the program was loaded onto the SD card along with the option to load both the program and firmware upon power up. When we inserted the SD card into the Series B controller and powered it up, the process failed, leaving the Series B controller in a nonfunctioning state. Subsequently, we converted the program offline in Studio 5000 to firmware version 31.

Any endeavor to download the program to the Series B controller initiates a firmware upgrade from the factory 1.x version. Unfortunately, all attempts to upgrade the firmware have resulted in failure, displaying the message "Manually Reset module." Even using ControlFlash and ControlFlashPLUS have yielded the same outcome.

While I was able to adjust the Series B controller's IP address using BOOTP and RSLinx, these actions do not seem to be related to updating the firmware or downloading the program. Is there a way to reset the Series B controller or restore it to a functioning state where the firmware can be updated and the program can be downloaded?

I have come across suggestions of creating an SD card in a separate Series B controller with the correct firmware, but these discussions have not provided a definitive solution. I hope to avoid permanently damaging the Series B controller by inadvertently using an SD card with incompatible firmware. Although the controller bears a warning sticker regarding the risk of programming issues with wrong firmware, it is puzzling why the process of loading the wrong firmware onto the SD card did not simply fail, instead of leaving the controller inoperable.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Was the previous SD card used to load firmware version 20 onto the CPU? If so, consider loading the appropriate firmware from a new SD card. How long has the latest PLC been in use? It's likely that firmware version 34 or higher is required for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining asked if the old SD card loaded firmware V20 to the CPU. If so, they suggest trying to load the correct firmware from an SD. The age of the new PLC is also a factor, as it may require at least version V34 or newer. 

We successfully verified that the SD card with the v20 program loads on the series A PLC. However, when this card was used on the series B PLC, it failed due to compatibility issues with the lower version firmware. As a result, the series B PLC was unable to receive a firmware update from ControlFlash or ControlFlashPLUS.

A new series B PLC is on its way with a v31 program ready to be loaded. The plan is to update this new PLC to V31, download the program, and burn an SD card with the option to load the firmware. It is hoped that inserting this SD card into the potentially "bricked" series B PLC will restore it to a working state. This is the final option left to attempt for fixing the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmned64</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I don't use CMPL often, I'm wondering if there are any io expansion modules installed on this rack. According to information in the knowledge base, upgrading from series A to series B may result in a solid red LED if older expansion io modules are present. To troubleshoot this issue, consider removing all modules, replacing the endcap, and observing if there are any changes in the boot process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up a new Programmable Logic Controller (PLC), it is crucial to have firmware V34 or above to avoid potentially damaging the device. Be sure to verify this before proceeding to prevent any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Finding information on compatible firmware for your device may not be as straightforward as expected. Attempting to load the wrong firmware or an incompatible version can result in a mismatch error. However, loading from an SD card may bypass this issue and attempt to load regardless of the version. In a similar situation, I mistakenly caused a L24er error but was able to recover it by creating a new SD card with a newer V34 version.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
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
            <p>When it comes to compatibility and downloads, it's important to carefully select the right firmware for your devices. Series A controllers are compatible with firmware versions ranging from V20.019 to V36, while Series B controllers require a firmware of V30 or higher. However, not all later revisions are guaranteed to be compatible. Initially, Series B L2 controllers were labeled to only work with firmware V34 and above, but Rockwell later released earlier compatible firmware versions going back to V30. It's unclear if newer Series B controllers still come with this label, but it is no longer accurate. Unfortunately, we do not have any additional advice on recovering your controller at this time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mike__T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Mike__T, the initial shipments of Series B L2's included a sticker indicating compatibility only with v34 and newer firmware versions. This specific sticker was the one I observed, so thank you for pointing that out, Mike.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the replies and suggestions. The sticker on the series B controller indicates that a firmware version of 30.016, 31.014, 32.015, 33.014, 34.011, or later is required. Unfortunately, I was not present when the box was opened and the PLC was removed. I should have been more diligent in ensuring the PLC model and firmware version were checked before proceeding. A new series B controller is being sent to me, and I have successfully loaded firmware version 31.014 on a series B controller before, so I am confident I can do it again. I plan to create an SD card with the new firmware and test it on the unresponsive series B controller, as suggested by @geniusintraining. Our initial attempt with the v20 SD card and expansion cards did not work, prompting further testing with methods like ControlFlash without the expansion cards. I will try updating the firmware when downloading the program with the new controller this week.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmned64</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Exciting news! I successfully updated the firmware of the second series B controller to v31.14 and transferred the v31.14 program from the series A v20 controller. After burning an SD card with the firmware update option, I inserted it into the first series B controller. This triggered a sequence of LED lights, indicating the firmware update process was underway. Upon completion, I verified that the first series B controller now runs on v31.14 firmware with the v31.14 program. This project was a success!

It's worth noting that I performed these steps without the expansion I/O and end cap installed. As a result, I encountered an "I/O Not Responding" issue, which included the embedded I/O due to the missing end cap. 

I have sent the second series B controller to its intended location and will keep the first controller as a backup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmned64</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the update, I'm glad everything worked out successfully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I resolve firmware update failures on a CompactLogix 1769-QBFC1B Series B controller?
- To resolve firmware update failures on the Series B controller, you may need to create an SD card with the correct firmware version and load it into the controller. Be cautious not to use an SD card with incompatible firmware to avoid damaging the controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a way to reset a nonfunctioning CompactLogix 1769-QBFC1B Series B controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try resetting the Series B controller by manually resetting the module as prompted, or by exploring options within the programming software to restore it to a functioning state for firmware updates and program downloads.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I update the firmware and download a program to a CompactLogix 1769-QBFC1B Series B controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can attempt to update the firmware and download the program by ensuring the correct firmware version is loaded onto an SD card and inserted into the Series B controller. Utilize programming tools like ControlFlash and ControlFlashPLUS to assist in the process.</p>
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
