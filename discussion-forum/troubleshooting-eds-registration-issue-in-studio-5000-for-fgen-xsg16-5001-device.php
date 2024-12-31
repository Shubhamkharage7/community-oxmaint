
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am experiencing an issue with a FGEN-XSG16-5001 device not being properly registered in my Studio 5000 program. Even though I have installed the required EDS file and it is showing up as registered in RSlinx, it is not reflecting in my Studio program. The FGEN device is">
    <meta name="keywords" content="eds registration, studio 5000 troubleshooting, fgen-xsg16-5001 device, rslinx registration issue, hardware tree question marks, studio 5000 v30, rslinx v00, windows">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-eds-registration-issue-in-studio-5000-for-fgen-xsg16-5001-device">
    <title>Troubleshooting EDS Registration Issue in Studio 5000 for FGEN-XSG16-5001 Device | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting EDS Registration Issue in Studio 5000 for FGEN-XSG16-5001 Device | Oxmaint Community">
    <meta property="og:description" content="Hello, I am experiencing an issue with a FGEN-XSG16-5001 device not being properly registered in my Studio 5000 program. Even though I have installed the required EDS file and it is showing up as registered in RSlinx, it is not reflecting in my Studio program. The FGEN device is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-eds-registration-issue-in-studio-5000-for-fgen-xsg16-5001-device">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting EDS Registration Issue in Studio 5000 for FGEN-XSG16-5001 Device | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am experiencing an issue with a FGEN-XSG16-5001 device not being properly registered in my Studio 5000 program. Even though I have installed the required EDS file and it is showing up as registered in RSlinx, it is not reflecting in my Studio program. The FGEN device is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-eds-registration-issue-in-studio-5000-for-fgen-xsg16-5001-device"
      },
      "headline": "Troubleshooting EDS Registration Issue in Studio 5000 for FGEN-XSG16-5001 Device",
      "description": "Hello, I am experiencing an issue with a FGEN-XSG16-5001 device not being properly registered in my Studio 5000 program. Even though I have installed the required EDS file and it is showing up as registered in RSlinx, it is not reflecting in my Studio program. The FGEN device is",
      "author": {
        "@type": "Person",
        "name": "jkaranas"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-07",
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
                <h1 class="text-white">Troubleshooting EDS Registration Issue in Studio 5000 for FGEN-XSG16-5001 Device</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jkaranas</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">24346</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">380</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am experiencing an issue with a FGEN-XSG16-5001 device not being properly registered in my Studio 5000 program. Even though I have installed the required EDS file and it is showing up as registered in RSlinx, it is not reflecting in my Studio program. The FGEN device is functioning properly and being actively controlled, but I am looking to resolve the presence of multiple yellow question marks in my hardware tree.

My system is running Studio 5000 V30 and RSLinx V3.80.00 on a Windows 7 64bit machine. It is configured with a 5069-L320ERM CompactLogix Processor with port 1 assigned a static IP for the Plant Network, and port 2 set with a static IP of 192.168.1.1 for the PLC I/O network.

I would appreciate any assistance with resolving this issue promptly.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum! Did you receive this program from someone else and then use it to connect to a PLC in operation? This issue can often occur when the necessary EDS files are not installed on the computer, causing a mismatch between the expected EDS file and the actual connected device. To prevent this, I always provide non-Rockwell EDS files along with the PLC program to customers upon machine delivery.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the PLCTalk forum community! Are you experiencing issues with the Module object in the I/O tree not displaying certain tabs like device configuration or parameter settings besides the usual ones like General, Connection, Module Info, Internet Protocol, and Port Configuration? This issue may arise even after registering the Turck EDS files, which list 17 Parameters. Ensure that the Module object is in the Run state without any errors or faults. If you see a yellow question mark instead of the expected module icon, it may indicate a faulty or inhibited connection. This could be due to an incorrect Icon file during the EDS registration process. Check if the correct icons display in an RSLinx Classic browse for confirmation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the responses. This software came pre-configured with the hardware setup. I received the EDS files from my colleagues, who were the original designers. When trying to install these files, I see a yellow question mark next to each device with the message "<EDS not registered>". Despite successfully registering the EDS files, I am unable to view the device properties. In RSLinx, the device is correctly displayed with the appropriate icon. These modules are designed to monitor discrete inputs, all of which are updating accurately. This leads me to believe that the Turck devices are not experiencing any faults.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jkaranas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are facing compatibility issues with your devices, it may be due to incorrect EDS files. To resolve this issue, make sure to obtain the correct EDS files by locating the device part numbers and downloading them from the Turck website. Installing the accurate EDS files will help ensure smooth device operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to access the configuration settings for the device, and it seems irrelevant. After registering the folder containing FGEN devices on my computer, I cannot find any tabs for configuration in the I/O object within Studio 5000. The user manual indicates that all configuration should be done through the Web interface. It is possible that an old version of RSLinx Classic (pre-3.7) is still installed, causing this issue. This could be a problem with EDS registration, but I am unsure of how to resolve it. My next troubleshooting step would be to register the entire folder of EDS files for this device family. It is worth noting that the EDS registration process changed significantly after the transition from 2.59 to 3.x, along with Studio 5000 v21. This could be related to an RSLinx Classic problem or another issue with the installation. It appears that the Turck modules do not utilize EDS-based AOP features for configuration, so leaving them as they are should not cause any harm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully completed the task, Ken. You can find the necessary information at the following link: http://pdb2.turck.de/en/DE/product/0000000500035db70006003a. The EDS package consists of 8 modules, one of which is the FGEN-XSG16-5001. I have already registered these modules on my Windows 7 x64 system, which is currently running Studio 5000 v30 and RSLinx Classic v3.90.00. I have added an instance of the FGEN-XSG16-5001 module in v30, and it appears correctly in the I/O configuration with accessible properties. While I do not have a physical module to test the connection, I am confident in the connection's reliability. 

I noticed you do not have RSLinx Classic v3.90.00, which is typically included with Studio 5000 v30. The previous version, v3.80.00, should have been updated during the installation of v30. Although I cannot confirm that v30/v3.80.00 is causing the issues, I recommend upgrading to RSLinx Classic v3.90.00 unless you have a specific reason for not doing so. 

Best regards, 
George</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geospark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The provided EDS files are incorrect, which is causing the issue at hand. Initially, I visited the Turck website to address this issue, but the files obtained from their site yielded the same results. It seems there may be a malfunction in the EDS registration process, and I am unsure of how to rectify it. Despite not affecting my testing progress, I have been concerned about potential issues arising when modifying hardware configurations. To address this, I removed and re-added 8 files related to the FGEN series using the EDS Hardware Installation tool, which successfully resolved the problem. It is possible that registering the EDS files from Studio 5000 may have caused the malfunction, although this is not confirmed. I appreciate any insights on resolving this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jkaranas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing that update! I am glad to hear that unregistering and re-registering the EDS files resolved the issue. In the past, RSLinx utilized the Windows Registry for this task, but it now utilizes a silently installed version of Microsoft SQL Server Express. This new method is not only more reliable and faster but can still encounter occasional difficulties.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although this thread is old, I wanted to share that the issue is still occurring in 2024. I encountered a similar problem with a Lumberg (Belden) 0980 LSL-3111-121-0006-002 IO-Link master, as well as with another Lumberg IO-Link master when the original one failed to work. I am currently using Windows 10 (with plans to migrate to 11 this month) and Studio 5000 version 36.11. I followed the same steps as jkaranas by unregistering and restarting my computer before registering again. As a result, the device now appears correctly in Studio 5000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>FearTheNoFear</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is my FGEN-XSG16-5001 device not properly registered in Studio 5000 even after installing the required EDS file?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue could be related to compatibility or configuration settings within Studio 5000. Ensure that the EDS file is the correct version and try re-importing it into the software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I resolve the presence of multiple yellow question marks in my hardware tree in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - The yellow question marks indicate a communication issue or missing device information. Check the network settings, device connections, and ensure proper configuration within Studio 5000.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be causing the discrepancy between the device showing as registered in RSlinx but not reflecting in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - There may be a synchronization issue between RSlinx and Studio 5000. Try refreshing the devices or restarting both software tools to ensure they are communicating properly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific compatibility requirements for using the FGEN-XSG16-5001 device with Studio 5000 V30 and RSLinx V3.80.00?</h4>
<p class='text-muted'><strong>Answer:</strong> - Verify that the device is supported by the software versions being used. Check for any known compatibility issues or updates that may be needed to ensure proper integration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can I troubleshoot my Studio 5000 program to ensure proper control and functionality of the FGEN-XSG16-5001 device?</h4>
<p class='text-muted'><strong>Answer:</strong> - Review the program logic, tags, and connections within Studio 500</p>
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
