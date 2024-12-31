
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dear Wizards, I am attempting to update the firmware on this small HMI using a USB to serial converter from Automation Direct, specifically the blue model. I have configured the COM port and assigned it based on the guidance provided in the programming softwares documentation. However, I am encountering">
    <meta name="keywords" content="eztouch ez-t4c-fs hmi, usb to serial converter, troubleshooting connection issues, firmware update, automation direct, com port configuration, programming software, error code 2, command 18, hmi detection problem, firmware">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connection-issues-with-eztouch-ez-t4c-fs-hmi-using-usb-to-serial-converter">
    <title>Troubleshooting Connection Issues with EZtouch EZ-T4C-FS HMI using USB to Serial Converter | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connection Issues with EZtouch EZ-T4C-FS HMI using USB to Serial Converter | Oxmaint Community">
    <meta property="og:description" content="Dear Wizards, I am attempting to update the firmware on this small HMI using a USB to serial converter from Automation Direct, specifically the blue model. I have configured the COM port and assigned it based on the guidance provided in the programming softwares documentation. However, I am encountering">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connection-issues-with-eztouch-ez-t4c-fs-hmi-using-usb-to-serial-converter">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connection Issues with EZtouch EZ-T4C-FS HMI using USB to Serial Converter | Oxmaint Community">
    <meta name="twitter:description" content="Dear Wizards, I am attempting to update the firmware on this small HMI using a USB to serial converter from Automation Direct, specifically the blue model. I have configured the COM port and assigned it based on the guidance provided in the programming softwares documentation. However, I am encountering">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connection-issues-with-eztouch-ez-t4c-fs-hmi-using-usb-to-serial-converter"
      },
      "headline": "Troubleshooting Connection Issues with EZtouch EZ-T4C-FS HMI using USB to Serial Converter",
      "description": "Dear Wizards, I am attempting to update the firmware on this small HMI using a USB to serial converter from Automation Direct, specifically the blue model. I have configured the COM port and assigned it based on the guidance provided in the programming softwares documentation. However, I am encountering",
      "author": {
        "@type": "Person",
        "name": "Rsflipflop256"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-08",
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
                <h1 class="text-white">Troubleshooting Connection Issues with EZtouch EZ-T4C-FS HMI using USB to Serial Converter</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">817</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">121</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Dear Wizards, I am attempting to update the firmware on this small HMI using a USB to serial converter from Automation Direct, specifically the blue model. I have configured the COM port and assigned it based on the guidance provided in the programming software's documentation. However, I am encountering difficulties as the HMI is not being detected, with an error code 2 and command 18 being displayed. Any insights or suggestions would be greatly valued. Enjoy your Friday.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>User Rsflipflop256 is seeking assistance with flashing an HMI using a USB to serial converter from Automation Direct. Despite setting up the COM port as per the programming software's documentation, an error code 2, command 18 is displayed, preventing recognition of the HMI. Further details are needed to provide insights. Which specific cable from Automation Direct is being utilized - a USB to RS232 converter? Please provide the exact error code text and details of when and where it appears. Additionally, have you attempted using a null modem since there seems to be no pinout available for the serial port on the panel? Any additional information would be helpful. Happy Friday!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently replaced the original AD EA-MG-PGM-CBL with an Amazon cable, but encountered the same error message: "Incorrect communication packet (Time-out error)." To troubleshoot, I checked the cable, comms port, and port assignment on the panel. However, I do not have access to a null modem. After researching, I found that the cable is USB and from the brand NXT Technologies. Despite trying both cables and rearranging com ports, I am still stuck with the same error. Unsure of what steps to take next, the error code is 2 and the command is 18.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, Rsflipflop256 shared their experience with an AD cable error, trying both an Amazon cable and an NXT Technologies brand without success. The error message displayed was "Incorrect communication packet (Time-out error)," prompting them to troubleshoot the cable, comms port, and panel assignment. They also mentioned struggling with error code 2 and command 18, unsure about the quality of the AD cable.

To address the issue, Rsflipflop256 recommended a reliable converter like the Tripp-Lite USA-19HS and emphasized the importance of a null modem for proper communication. They also discussed the possibility of counterfeit chips in prolific drivers used by the EA-MG-PGM-CBL, cautioning against cheap, unreliable products. Overall, they advised sticking with reputable brands to avoid compatibility issues commonly seen with counterfeit adapters on the market.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How to connect an AD adapter to an HMI with 2 serial ports, a db9, and db15? There is no RJ12 port for the AD adapter's correct pinout. It is recommended to use breakout boards to create a custom cable for accurate connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing communication errors, it is important to ensure that you are using the correct EZ-PGMCBL cable and not a standard RS-232 cable. You can purchase an EZ-PGMCBL or create one on site using the wiring diagram provided in Appendix A. Verify the cable's integrity by checking for continuity.

To troubleshoot further, refer to Appendix B to determine if there is a software/firmware incompatibility. Check the port selection on the EZTouchPanel by pressing the upper and lower left corners simultaneously, selecting COM1 as the computer port, and ensuring it is reporting as such. If not, adjust the settings using the EZTouch software.

It appears that the necessary diagram is included in the document's appendix. You have the option to purchase the recommended adapter or create one to loop DTR, DSR, and CTS back to the adapter for successful communication with the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Issue resolved: The default baud rate of the com port was set at 9600, while the device was configured for 19200. Grateful for the assistance provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After some troubleshooting, Rsflipflop256 discovered that the default baud rate of the com port was set at 9600, while the device required 19200. Grateful for the resolution, they expressed relief that a different adapter was not necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently experiencing a problem with uploading data from the EZ-T10C-F device using an RS232 cable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CJMcCrea</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: I am using a USB to serial converter from Automation Direct to connect to my EZtouch EZ-T4C-FS HMI for firmware update but encountering detection issues. How can I resolve this?
    Ensure that the COM port is correctly configured and assigned as per the programming software's documentation. Check for error codes like 2 and command 18, which may indicate specific issues that need troubleshooting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What does error code 2 and command 18 mean when attempting to connect the HMI using a USB to serial converter?</h4>
<p class='text-muted'><strong>Answer:</strong> Error code 2 and command 18 typically indicate communication or connectivity problems between the HMI and the connected device. Troubleshooting steps may include checking cable connections, driver installations, and COM port configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot connection issues with my EZtouch EZ-T4C-FS HMI and USB to serial converter?</h4>
<p class='text-muted'><strong>Answer:</strong> Start by verifying the COM port settings, ensuring the correct driver is installed for the USB to serial converter, checking cable integrity, and confirming software compatibility. Additionally, checking for error codes and specific commands displayed can provide insights into the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any common troubleshooting tips for resolving HMI connection issues using a USB to serial converter?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, common tips include double-checking COM port assignments, ensuring the device drivers are up to date, trying different USB ports, and confirming proper cabling. Additionally,</p>
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
