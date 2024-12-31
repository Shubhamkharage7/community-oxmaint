
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently using Studio 5000 version 33.12 with PLC firmware 33.012. My PLC model is the Compactlogix 5370 1769-L16ER-BB1B. When attempting to connect to it with a simple program in Studio 5000, I encounter an error preventing me from downloading the program to the PLC. The">
    <meta name="keywords" content="ab 1769-l16er-bb1b troubleshooting, studio 5000 plc error 747-0, compactlogix 5370 firmware issue, plc remote program mode transition error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-1769-l16er-bb1b-plc-mode-change-error-error-747-0">
    <title>Troubleshooting AB 1769-L16ER-BB1B PLC Mode Change Error - Error 747-0 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting AB 1769-L16ER-BB1B PLC Mode Change Error - Error 747-0 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently using Studio 5000 version 33.12 with PLC firmware 33.012. My PLC model is the Compactlogix 5370 1769-L16ER-BB1B. When attempting to connect to it with a simple program in Studio 5000, I encounter an error preventing me from downloading the program to the PLC. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-1769-l16er-bb1b-plc-mode-change-error-error-747-0">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting AB 1769-L16ER-BB1B PLC Mode Change Error - Error 747-0 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently using Studio 5000 version 33.12 with PLC firmware 33.012. My PLC model is the Compactlogix 5370 1769-L16ER-BB1B. When attempting to connect to it with a simple program in Studio 5000, I encounter an error preventing me from downloading the program to the PLC. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ab-1769-l16er-bb1b-plc-mode-change-error-error-747-0"
      },
      "headline": "Troubleshooting AB 1769-L16ER-BB1B PLC Mode Change Error - Error 747-0",
      "description": "Hello everyone, I am currently using Studio 5000 version 33.12 with PLC firmware 33.012. My PLC model is the Compactlogix 5370 1769-L16ER-BB1B. When attempting to connect to it with a simple program in Studio 5000, I encounter an error preventing me from downloading the program to the PLC. The",
      "author": {
        "@type": "Person",
        "name": "Batman42"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-21",
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
                <h1 class="text-white">Troubleshooting AB 1769-L16ER-BB1B PLC Mode Change Error - Error 747-0</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Batman42</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6192</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">288</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently using Studio 5000 version 33.12 with PLC firmware 33.012. My PLC model is the Compactlogix 5370 1769-L16ER-BB1B. When attempting to connect to it with a simple program in Studio 5000, I encounter an error preventing me from downloading the program to the PLC. The error message reads: "The controller acknowledged the request for a transition to Remote Program mode, but it has not completed the transition. You can't download until the transition completes." Error 747-0. While the PLC's Run light is steady green, there is no corresponding Run light in Studio 5000 and the option to switch back to program mode is unavailable. The key switch is in Remote mode with no visible faults. However, after some time, the PLC gives a fault 16x0203, indicating an I/O connection timeout fault. There are no additional I/O cards installed, only internal I/O on the front with no expansion modules. Is there a way to perform a factory reset on the PLC, wiping all settings and IP configurations? I have attempted to reset by removing the SD card and holding the reset button on powerup, but the settings remain the same. Any assistance or suggestions on resolving this issue would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If your program has configured I/O modules in the I/O tree but the physical I/O is not present, you may encounter this issue. Have you checked for I/O modules in your setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing thoroughly, I have confirmed that there are no I/O configurations set up in the I/O tree. Within the system, there is an Embedded Discrete_IO, which appears to be the internal I/O situated on the PLC's front panel. Additionally, there is an empty folder labeled Expansion I/O, potentially indicating space for additional modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Batman42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Recently, I encountered an issue with a PLC (programmable logic controller) while working on an L16 with V32 firmware. To resolve the issue, I placed the switch in PROG mode and rebooted the PLC. After the reboot, I successfully downloaded the new program without switching back to RUN or REM mode. It's worth noting that the PLC had been unused for some time and was originally programmed with external IO that was no longer part of my setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted it but unfortunately had no success. Appreciate the recommendation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Batman42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@Batman42, does your program include any MSG instructions? Or does the controller currently have a program with MSG instructions? I remember encountering an issue where the MSG instruction was hindering the transition because network access was removed from the controller. Once we disabled it, the transition went smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hellsbishop34</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>No specific instructions are provided in the message. The program includes an alias for input 0 designated as "start" and an output alias for output 0 on a single rung. This constitutes the entirety of the program. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Batman42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is possible that a malfunctioning controller could be the cause of the issue. Another factor to consider is the RPI interval for the embedded IO. If this is set too low, it may be contributing to the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hellsbishop34</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hellsbishop34 suggested that a faulty controller may be causing the issue, but in my experience with hundreds of controllers, I have never encountered a defective one. While it is a possibility, I am skeptical. Batman42 mentioned that the PLC firmware version is 33.012. I recommend upgrading it to V32 and trying again, as flashing the firmware can fix any corruption issues in the program. I suggest using a USB or SD card to flash the firmware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I currently manage hundreds of systems that have been running smoothly without any major issues. While it's always possible to encounter a faulty unit, I have not experienced it yet. In addition to the functioning systems, there are also five faulty units in front of me, with one being a refurbished unit and the other four being bricked due to various causes.

Despite these challenges, we have hundreds of five racks that are still operational. My experience as a hardware developer in R&D for a leading Sensing manufacturer has taught me not to underestimate any potential issues. It may be worth flashing the system to V32 to reload any corrupted firmware or programs. Using a USB or SD card for flashing could also be effective.

It's a good idea to consider ruling out firmware issues, especially if the OP has already tried using the reset button on power-up to restore the controller to its factory default settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hellsbishop34</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, user Hellsbishop34 noted that the original poster (OP) suggested utilizing the reset button on powerup to restore the controller to its factory default settings. However, this action primarily clears the programmed settings without affecting the firmware. It's important to note that factory default settings do not include any loaded firmware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is this product listed on eBay? Does it come with an end cap? Can it be accessed online? Are you able to connect to it directly, bypassing any switches? Have you attempted to flash the firmware?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A helpful tip would be to update the firmware to V32 and then attempt flashing it again using either a USB or SD card. This process will help reload any corrupt files in the firmware or program. Additionally, it's recommended to use the reset button on powerup to revert the controller to factory default settings, which will clear the program but not the firmware. By holding the reset button, the program will be cleared and the ethernet settings will be reset to default. This step can help rule out any issues with the firmware. Have a great day!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hellsbishop34</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted to downgrade and upgrade the firmware on a PLC I salvaged from work, which was being discarded, to align with my Studio 5000 software. However, the internal I/O remains disconnected and cannot be detected. The device includes an end cap with a default plastic slip. My next plan is to open it up and reseat any internal components associated with the I/O. Thank you to everyone for their troubleshooting assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Batman42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure to review your Areas of Interest (AOIs) for any signs of an infinite loop during the prescan process. The issue you are encountering can easily be replicated by setting one up on your own.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This brand-new program does not have any additional AOIs added yet. I recently made a small adjustment by adding a single rung that includes a normally open contact connected to an input, and an output tied to a PLC output for testing I/O functionality. However, the PLC does not seem to be recognizing the internal I/O card, giving the impression that it may be faulty or that there is a connection issue with the main card. To get a more accurate diagnosis, I have decided to send it to Radwell for professional evaluation as I do not have the necessary parts for testing. I attempted to search for the specific part numbers on the internal chips to potentially order replacements, but was unsuccessful. If anyone can provide recommendations on where to purchase internal components or reputable repair services, your input would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Batman42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for the best repair companies to send your device to, I can help. Simply reach out to me via email at [email protected] and we'll take a look at it with no evaluation charges. Check out our services at https://www.plccable.com/ for more information. Batman42 recommends me for all your repair needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you determined the cause of the problem? I am experiencing a similar issue with my L18ER-BB1B model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mbuldyke</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does error 747-0 mean on a Compactlogix 5370 1769-L16ER-BB1B PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Error 747-0 indicates that the transition to Remote Program mode has not completed, preventing the download of a program to the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot error 16x0203 on a Compactlogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Error 16x0203 indicates an I/O connection timeout fault. Check if there are any issues with the I/O connections or modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a way to perform a factory reset on a Compactlogix 1769-L16ER-BB1B PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Performing a factory reset on the PLC involves removing the SD card and holding the reset button on powerup. If the settings remain the same, further troubleshooting may be required.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why is the Run light in Studio 5000 not corresponding to the steady green light on the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy between the Run light on the PLC and Studio 5000 could be due to issues in the transition to Remote Program mode. Further investigation is needed to resolve this discrepancy.</p>
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
