
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, at my workplace, we recently acquired a CompactLogix L18ER-BB1B from eBay that required powering up and updating the PLC firmware. I have experience with updating CompactLogix PLCs over both Ethernet and USB connections, having done so successfully on numerous occasions. However, when attempting to update the firmware">
    <meta name="keywords" content="compactlogix, firmware update, troubleshooting, communication error, flash failure, ethernet connection, usb connection, plc, ip address, control flash logs, factorytalk assetcentre, log message, ice1, firmware validation, firmware transfer, firmware update error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-a-compactlogix-firmware-update-issue-communication-error-and-flash-failure">
    <title>Troubleshooting a CompactLogix Firmware Update Issue: Communication Error and Flash Failure | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting a CompactLogix Firmware Update Issue: Communication Error and Flash Failure | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, at my workplace, we recently acquired a CompactLogix L18ER-BB1B from eBay that required powering up and updating the PLC firmware. I have experience with updating CompactLogix PLCs over both Ethernet and USB connections, having done so successfully on numerous occasions. However, when attempting to update the firmware">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-a-compactlogix-firmware-update-issue-communication-error-and-flash-failure">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting a CompactLogix Firmware Update Issue: Communication Error and Flash Failure | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, at my workplace, we recently acquired a CompactLogix L18ER-BB1B from eBay that required powering up and updating the PLC firmware. I have experience with updating CompactLogix PLCs over both Ethernet and USB connections, having done so successfully on numerous occasions. However, when attempting to update the firmware">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-a-compactlogix-firmware-update-issue-communication-error-and-flash-failure"
      },
      "headline": "Troubleshooting a CompactLogix Firmware Update Issue: Communication Error and Flash Failure",
      "description": "Hello everyone, at my workplace, we recently acquired a CompactLogix L18ER-BB1B from eBay that required powering up and updating the PLC firmware. I have experience with updating CompactLogix PLCs over both Ethernet and USB connections, having done so successfully on numerous occasions. However, when attempting to update the firmware",
      "author": {
        "@type": "Person",
        "name": "MateuszM"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-15",
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
                <h1 class="text-white">Troubleshooting a CompactLogix Firmware Update Issue: Communication Error and Flash Failure</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MateuszM</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">892</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">488</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, at my workplace, we recently acquired a CompactLogix L18ER-BB1B from eBay that required powering up and updating the PLC firmware. I have experience with updating CompactLogix PLCs over both Ethernet and USB connections, having done so successfully on numerous occasions. However, when attempting to update the firmware on this particular device, I encountered a communication error and flash failure.

Despite following the usual procedures, such as configuring the IP address and leaving the system to update over Ethernet IP, I was unsuccessful. Now, the solid red OK light is on, and I am unable to establish a connection over either Ethernet or USB.

Any assistance in resolving this issue would be greatly appreciated. Below are the Control Flash logs for reference:

- [-------] User must install FactoryTalk AssetCentre Client 2.31 or above if attempting to log a message to FactoryTalk AssetCentre Server.
- [SUCCESS] User [DESKTOP-63LPSI5\MALCO] logged in ControlFLASH successfully.
- [FAILURE] Load Script: Error #1902: Invalid 'Identity3' item in the script file's [Device] section.
- [SUCCESS] Load Driver: AB_ASA.DLL
- [SUCCESS] Initialize Driver: AB_ASA.DLL
- [SUCCESS] Device Identity: Controller ICE1
- [SUCCESS] Validate: Maj Rev=20, Min Rev=14
- [SUCCESS] The current logon user [DESKTOP-63LPSI5\MALCO] is authorized to update firmware.
- [SUCCESS] Program: Catalog Number = 1769-L18ER/B LOGIX5318ER, Serial Number = 605FBEC9, Size = 8914216 byte(s).
- [SUCCESS] Transfer: Start transfer of update.
- [FAILURE] Transfer: Error #11003: Unconnected Send timed out waiting for a response.
- [FAILURE] Load Script: Error #1902: Invalid 'Identity3' item in the script file's [Device] section.

If you have any insights or solutions to this issue, please share them. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a suspicion of encountering counterfeit goods, which I have experienced in the past with items purchased from eBay. It's worth noting that any counterfeit AB products I've come across have failed to start the firmware update process. A solid red light typically indicates a faulty processor. Have you considered the possibility of a faulty ethernet cable or connection causing the issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>WhinnieThePooh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recall a discussion on this online message board suggesting that RA software has the capability to render a controller inoperable if it recognizes a counterfeit product.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, there are no counterfeit versions of the CompactLogix available in the market. However, there have been reports that 5069 series devices purchased from China may become inoperable. To resolve this issue, try loading the firmware onto an SD card using a different L18 device. This should help restore functionality to the device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining mentioned that there are no counterfeit versions of CompactLogix available yet. They warned that if a 5069 series PLC was purchased from China, it may become unusable. They recommended loading the firmware onto an SD card and inserting it into another L18 PLC to resolve the issue. When inserting the SD card with the firmware into the "bricked" PLC, the system should boot automatically. Stay tuned for updates as I attempt this solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MateuszM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Update: I recently encountered an issue with an L18 PLC, which I attempted to solve by loading firmware onto the SD Card. Unfortunately, despite my efforts, the PLC continued to boot up with a solid red Ok Light. These specific L18 models do not feature a removable battery, so I also attempted to reset the device by opening it up and shorting the super capacitor to clear any remaining memory. Regrettably, this method did not resolve the issue, but I wanted to mention it in case others encounter a similar problem and wish to attempt it.

Ultimately, I was unable to successfully restore the PLC's functionality and had to discard it, opting to secure a new one instead. I am eager to understand what may have caused this issue and how to address it effectively in the future. It strikes me as peculiar that a reputable brand like Allen Bradley could produce a PLC that is susceptible to becoming "bricked," but perhaps I simply lack the expertise to rectify such situations. Your insights and suggestions are greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MateuszM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential for optimal performance to ensure that your programming PC does not allow any ports to go to sleep during activity. To do this, navigate to Power Options or Device Manager, access advanced settings, and adjust the settings to prevent your USB and NIC from entering sleep mode. This will help maintain a seamless workflow and prevent disruptions during critical tasks. It is important to keep your ports active at all times to avoid any potential issues with connectivity or data transfer speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC recommended ensuring your programming PC does not disable any ports during activity. To prevent this, access Power Options or Device Manager, navigate to advanced settings, and configure your USB and NIC to never enter sleep mode. This adjustment will optimize your system for uninterrupted productivity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MateuszM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MateuszM provides an update on iPhone repairs: He has successfully done it twice before and is open to repairing yours as well. Click to find out more about his services.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was immediately hooked when you mentioned "ebay".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears to be a counterfeit product. V35 and V36 updates are designed to intentionally disable fake controllers in order to safeguard consumers from purchasing fake items.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to tlf30, it appears that there may be counterfeit V35 and V36 controllers being intentionally rendered useless by Rockwell to safeguard their profits. Click here to learn more about this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>harryting jokingly mentioned that the mention of "ebay" immediately caught their attention. It doesn't seem like their top choice either.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MateuszM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum thread, tlf30 pointed out that controllers V35 and V36 are programmed to purposely disable counterfeit units in order to safeguard the consumer. This means that if you encounter issues with a controller, it could potentially be a counterfeit that has been bricked intentionally. Is there a way to identify a counterfeit controller through controlflash logs, or is it a matter of trial and error?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MateuszM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>From my understanding, this function is typically handled by the firmware image on the controller, and may not be explicitly reflected in the logs. However, if you happen to come across any traces of this function in the logs, we would greatly appreciate it if you could share them here for future reference. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although you may not have gone through the "authorized" channel, it would be beneficial to reach out to your local distributor's Rockwell representative to gauge Rockwell's interest. At the very least, they would appreciate being informed about the situation. I can confidently say that some manufacturers I collaborate with would be willing to examine the part regardless of its source and have their engineers assess it. However, Rockwell is a different case, especially considering the company's evolution over the years. In the past, Rockwell/AB may have been more open to such inquiries, but this is the "new" Rockwell/AB we are dealing with now.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MateuszM posted a query about a CompactLogix L18ER-BB1B PLC purchased from eBay and encountered firmware update issues. Despite having successfully updated similar devices in the past, an error occurred during the process. The PLC now shows a solid red OK light and cannot connect via Ethernet or USB. Assistance is needed to troubleshoot this issue. Control Flash Logs raise concerns about the firmware update process. Any insights into resolving this problem would be appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
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
<h4 class='text-dark'>FAQ: What could be the possible reasons for encountering a communication error and flash failure while updating the firmware on a CompactLogix L18ER-BB1B PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Possible reasons for such issues could include incorrect configuration settings (such as IP address), script file errors, unresponsive device, or compatibility issues with the firmware update process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How can I troubleshoot a CompactLogix PLC that shows a solid red OK light and fails to establish a connection over Ethernet or USB after a failed firmware update?</h4>
<p class='text-muted'><strong>Answer:</strong> Troubleshooting steps may involve checking the network settings, verifying the USB connection, ensuring the compatibility of the firmware version, examining the Control Flash logs for error details, and attempting a recovery procedure recommended by the manufacturer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What actions can be taken to resolve the 'Unconnected Send timed out waiting for a response' error during the firmware update process on a CompactLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> To address this error, you can try verifying the network connectivity, restarting the update process, ensuring the device is responsive, checking for any firewall or security settings that may be blocking the communication, and seeking guidance from technical support or the manufacturer.</p>
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
