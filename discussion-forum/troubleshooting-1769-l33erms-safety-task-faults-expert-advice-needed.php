
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I have an intriguing puzzle with a historical twist and I am seeking insights or resolutions. Heres the background story: I acquired a 1769-L33ERMS from a previous owner who intended to use it for production but opted for a more budget-friendly PLC instead. This PLC was operating">
    <meta name="keywords" content="1769-l33erms, safety task faults, troubleshooting plc, v36 firmware, downgrade firmware, controlflash, safety task inoperable, type 14 code 07, program dump, troubleshooting methods, program">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1769-l33erms-safety-task-faults-expert-advice-needed">
    <title>Troubleshooting 1769-L33ERMS Safety Task Faults: Expert Advice Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1769-L33ERMS Safety Task Faults: Expert Advice Needed | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I have an intriguing puzzle with a historical twist and I am seeking insights or resolutions. Heres the background story: I acquired a 1769-L33ERMS from a previous owner who intended to use it for production but opted for a more budget-friendly PLC instead. This PLC was operating">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1769-l33erms-safety-task-faults-expert-advice-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1769-L33ERMS Safety Task Faults: Expert Advice Needed | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I have an intriguing puzzle with a historical twist and I am seeking insights or resolutions. Heres the background story: I acquired a 1769-L33ERMS from a previous owner who intended to use it for production but opted for a more budget-friendly PLC instead. This PLC was operating">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1769-l33erms-safety-task-faults-expert-advice-needed"
      },
      "headline": "Troubleshooting 1769-L33ERMS Safety Task Faults: Expert Advice Needed",
      "description": "Greetings everyone, I have an intriguing puzzle with a historical twist and I am seeking insights or resolutions. Heres the background story: I acquired a 1769-L33ERMS from a previous owner who intended to use it for production but opted for a more budget-friendly PLC instead. This PLC was operating",
      "author": {
        "@type": "Person",
        "name": "CLanford"
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
                <h1 class="text-white">Troubleshooting 1769-L33ERMS Safety Task Faults: Expert Advice Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>CLanford</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">416</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">86</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I have an intriguing puzzle with a historical twist and I am seeking insights or resolutions. Here's the background story: I acquired a 1769-L33ERMS from a previous owner who intended to use it for production but opted for a more budget-friendly PLC instead. This PLC was operating on the V36 firmware, a version unfamiliar to the machines on the production floor or to many of us. Upon receiving it, I made the decision to downgrade its firmware to V35, a known stable version that is compatible with multiple machines using Logix.

The downgrade process appeared successful with all blocks downloaded and the log showing a successful update. However, when ControlFlash attempted the power cycle sequence and "poll on powerup" response, the PLC failed to restart and displayed solid red lights. Without wanting to incur additional costs, I decided to explore the internal components and discovered a hidden button on the board near the mode switch. Pressing this button during powerup triggered a series of power cycles indicated by the LEDs, eventually bringing the controller back online.

Despite this success, the PLC now experiences a safety task fault every time it is power cycled, specifically Type 14 code 07: Safety Task Inoperable fault, resulting in a program dump. Only a complete re-download of the program resolves this issue. I have attempted various troubleshooting methods including downloading different programs tailored for this controller and version, creating a new program specifically for the L33ERMS running V35, power cycling the controller in different switch modes, enabling time synchronization, and adjusting the Safety Task scan period.

However, all these efforts yield the same outcome. I am open to suggestions or solutions to address this persistent fault. While another firmware change may be considered as a potential next step, I am cautious due to previous challenges encountered. Your input and expertise are greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am curious about the age of the PLC, as I have noticed that newer models are being sold with a label recommending the use of firmwarexx or newer versions. Have you attempted to reinstall version v36 to see if it resolves the issue you are experiencing?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One user inquired about the age of the PLC, mentioning that newer models come with a label specifying the minimum firmware version required. It was suggested to try reloading version v36 to address any issues. However, considering the age of the PLC, which is likely around 7 years old, and past update challenges, reloading v36 is seen as a last resort. Exploring all possible solutions before attempting another firmware update is preferred.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CLanford</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the device is old, there should be no issues with the firmware limit. Consider re-flashing to V35 to ensure the update was successful.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User alan_505 suggested considering re-flashing the firmware to V35 to ensure that the update was fully installed on the old device. This can be a solution if the current firmware version has limitations. If that doesn't work, exploring other options that haven't been attempted yet is also a possibility before resorting to a firmware update as a last resort.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CLanford</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How reliable is the onboard memory backup? It appears that the program is being lost during power cycles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>robertmee inquired about the reliability of the on-board memory backup. It seems like there may be a program loss during power cycles. I'm not sure how to test that. Can you provide more details on how to verify the on-board memory backup? So far, I have checked the "capacity" section in Logix and the overall memory statistics on the web-server, both of which show sufficient free memory available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CLanford</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CLanford mentioned uncertainty about how to test the on-board memory backup. They only know how to check the "capacity" section in Logix and general memory statistics on the web-server, both of which show available free memory. The compact logix features a capacitor circuit that stores enough energy for the processor to write its program to non-volatile memory in case of power loss. If the capacitor is dried out, energy is lost before the write completes, or the non-volatile memory is faulty. Additionally, an empty SD card could cause issues if the processor tries to load from it upon powering up. Diagnosing a faulty capacitor or memory may require disassembling the unit for electronic testing. While I haven't personally taken one apart or examined the schematics, there was a recent forum discussion on replacing the energy device that might offer insight.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that the CompactLogix features a capacitor circuit that stores sufficient energy to save the processor's program to non-volatile memory in case of power loss. If the capacitor has dried out, it may be losing energy before completing the write process or the non-volatile memory storage could be faulty. It's worth checking if there is an SD card installed, as an empty SD card could potentially cause issues during power-up. Diagnosing a faulty capacitor or memory storage may require disassembly and electronic testing. While I haven't personally dismantled one or examined the schematics, there have been discussions on the forum about replacing the energy device. Upon opening the device, there were four capacitors observed that may be primarily for powering the field bus of connected cards to the local rack. Although there is no SD card present, the device has been booting from onboard NV memory. It seems unlikely that a dried-out capacitor suddenly caused issues after a firmware update, but anything is possible. I will inspect the capacitors without removing them to see if they are the cause of the problem. Thank you for the advice!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CLanford</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my 1769-L33ERMS PLC experiencing a safety task fault (Type 14 code 07) after a firmware downgrade?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The safety task fault (Type 14 code 07) may occur due to a firmware downgrade causing incompatibility issues with the safety tasks. This fault results in a program dump and requires a complete re-download of the program to resolve.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot and resolve the safety task fault on my 1769-L33ERMS PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try troubleshooting methods such as downloading different programs tailored for the controller and firmware version, creating a new program specifically for your PLC running V35, power cycling the controller in different switch modes, enabling time synchronization, and adjusting the Safety Task scan period. If the issue persists, seeking expert advice or considering another firmware change may be necessary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should I do if my 1769-L33ERMS PLC displays solid red lights and fails to restart after a firmware downgrade?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If your PLC displays solid red lights and fails to restart after a firmware downgrade, you can try pressing the hidden button near the mode switch during powerup to trigger a series of power cycles, which might bring the controller back online. If this does not resolve the issue, further troubleshooting and potentially seeking professional assistance may be required.</p>
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
