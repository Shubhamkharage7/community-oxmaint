
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am encountering an issue with SMC not updating my device groups. I am utilizing the OI-ABCIP server, which has been reliable for WW 2014. However, on this new computer I am configuring, it is not recognizing the device names. I have replicated the setup from the">
    <meta name="keywords" content="smc troubleshooting, wonderware 2014 device groups, oi-abcip server, device names recognition issue, new computer configuration problem, log viewer error, connection issues, setup replication, device group acknowledgment, log viewer analysis, connection problem troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-smc-device-groups-for-wonderware-2014">
    <title>Troubleshooting SMC Device Groups for Wonderware 2014 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting SMC Device Groups for Wonderware 2014 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am encountering an issue with SMC not updating my device groups. I am utilizing the OI-ABCIP server, which has been reliable for WW 2014. However, on this new computer I am configuring, it is not recognizing the device names. I have replicated the setup from the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-smc-device-groups-for-wonderware-2014">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting SMC Device Groups for Wonderware 2014 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am encountering an issue with SMC not updating my device groups. I am utilizing the OI-ABCIP server, which has been reliable for WW 2014. However, on this new computer I am configuring, it is not recognizing the device names. I have replicated the setup from the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-smc-device-groups-for-wonderware-2014"
      },
      "headline": "Troubleshooting SMC Device Groups for Wonderware 2014",
      "description": "Hello everyone, I am encountering an issue with SMC not updating my device groups. I am utilizing the OI-ABCIP server, which has been reliable for WW 2014. However, on this new computer I am configuring, it is not recognizing the device names. I have replicated the setup from the",
      "author": {
        "@type": "Person",
        "name": "NewPLCuser2024"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-11",
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
                <h1 class="text-white">Troubleshooting SMC Device Groups for Wonderware 2014</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">370</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">183</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am encountering an issue with SMC not updating my device groups. I am utilizing the OI-ABCIP server, which has been reliable for WW 2014. However, on this new computer I am configuring, it is not recognizing the device names. I have replicated the setup from the previous computer, including the same device names, yet SMC is not acknowledging these device groups. The log viewer has not provided any useful information, as there are no indications of connection issues. I may have overlooked something at this point. Your assistance is greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Why is the system not accepting the device groups? Are you unable to save the configuration after adding them?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The device groups are not displaying correctly and my access names are not being recognized as device groups. While everything is properly configured in SMC, the device groups are not automatically populated in the diagnostics section. I attempted to switch to the DASABCIP server, but it seems that this did not resolve the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Experiencing issues with InTouch application not reading? Get help from the PLC community on Reddit. Find solutions to problems like yours and troubleshoot with fellow users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you tried manually adding a device in the device groups table in SMC by right-clicking? Devices do not auto-add, so it is important to match the device name with your InTouch topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The setup is complete, including exporting the working computer to SMC for verification. However, there is no incoming data and no devices showing up in the diagnostic groups.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe the data isn't being recognized as part of a device group for any access names, which is why it's not coming in properly. This is the situation I'm dealing with in my work.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using WindowViewer, it seems that the device groups will not appear in the diagnostics section until a client attempts to connect.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently tested the system, but unfortunately, the log viewer did not display any critical errors or warnings in yellow or red. The only message indicated a problem with loading WWSL.DLL. Despite this, all tag uploads have been processed successfully except for one. Could this issue be preventing any data from being transmitted?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named NewPLCuser2024 recently reported a problem with their PLC system. They are experiencing issues with tag uploads, with only one tag not being completed successfully. The log viewer does not show any yellow or red messages, but there is an error related to WWSL.DLL not loading. This DLL is essential for SuiteLink, Wonderware's connection protocol. The failure to load WWSL.DLL is likely the root cause of the issue. Can you provide more details about the error message?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have received numerous messages related to SuiteLink, including "SuiteLink not initialized" and "Suitelink interface is disabled." The error message "!Load of 'WWSL.DLL' failed - error 126 - SuiteLink disabled" has also been reported.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I've never encountered this problem before, but after doing a Google search, I came across a mention of a hotfix for the WWSL.DLL file dating back over a decade. If you downloaded your installation files after that time, it's likely that the hotfix is already included. You could try repairing or reinstalling the software to see if that resolves the issue. Best of luck with fixing it!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am truly grateful for all your assistance and troubleshooting skills, as I was completely stuck on the issue. Thank you for your invaluable support!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a challenging issue on Reddit recently and I am still puzzled by it. I discovered the importance of clearing the cache regularly, particularly when making changes online. While I don't believe the issue lies with you, it may be beneficial to check for and clear cache files to determine if the OI server detects the PLC. For more information on this issue and additional troubleshooting ideas, you can refer to the thread titled "Wonderware Intouch - Power outage and UploadTags Retriggered messages."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response! I have reviewed the article you mentioned, but unfortunately, I am unable to make online edits. Despite running the slsping <host name> <application name>, the system is not recognizing view, DASABCIP, ABCIP as active processes even when they are in operation. I attempted to address this issue by applying the hot fix with the updated WWSL.DLL file, but it did not yield any improvements, which was disappointing. Additionally, I uninstalled the entire WW2014 program and SMC before reinstalling them, but the problem persisted. At this point, I am unsure of the next steps to take, aside from possibly considering a NAD as a troubleshooting measure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is SMC not updating my device groups for Wonderware 2014?</h4>
<p class='text-muted'><strong>Answer:</strong> - SMC may not be recognizing the device names due to a configuration issue on the new computer. Double-check that the setup has been replicated correctly, including the device names.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing SMC to not acknowledge the device groups?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue of SMC not acknowledging device groups could be related to misconfigured settings or setup inconsistencies. Ensure that all configurations are correctly replicated from the previous computer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot SMC device group recognition issues in Wonderware 2014?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot SMC device group recognition problems, check for any errors in the log viewer, verify the connection settings, and ensure that all device names are correctly entered.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps should I take if the log viewer is not providing useful information for SMC connection problems?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the log viewer is not helpful, consider reviewing the network configurations, firewall settings, and permissions to ensure SMC can communicate with the OI-ABCIP server effectively.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Any suggestions on resolving SMC issues with recognizing device names on a new computer?</h4>
<p class='text-muted'><strong>Answer:</strong> - If SMC is not recognizing device names on a new computer, try reconfiguring the device groups, verifying network connectivity, and ensuring that the necessary Wonderware software components are properly installed and updated.</p>
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
