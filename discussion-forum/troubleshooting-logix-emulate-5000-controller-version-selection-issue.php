
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am new to Rockwell PLC programming and currently in the process of simulating an existing project for debugging purposes. Coming from a background of working with Siemens software for several years, I find the simulation process in Logix Emulate a bit challenging. I am using Studio">
    <meta name="keywords" content="logix emulate 5000, controller version selection, troubleshooting, rockwell plc programming, simulating projects, debugging, siemens software, studio 5000, logix emulate, rs linx classic, windows 7 professional">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-logix-emulate-5000-controller-version-selection-issue">
    <title>Troubleshooting Logix Emulate 5000 Controller Version Selection Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Logix Emulate 5000 Controller Version Selection Issue | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am new to Rockwell PLC programming and currently in the process of simulating an existing project for debugging purposes. Coming from a background of working with Siemens software for several years, I find the simulation process in Logix Emulate a bit challenging. I am using Studio">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-logix-emulate-5000-controller-version-selection-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Logix Emulate 5000 Controller Version Selection Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am new to Rockwell PLC programming and currently in the process of simulating an existing project for debugging purposes. Coming from a background of working with Siemens software for several years, I find the simulation process in Logix Emulate a bit challenging. I am using Studio">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-logix-emulate-5000-controller-version-selection-issue"
      },
      "headline": "Troubleshooting Logix Emulate 5000 Controller Version Selection Issue",
      "description": "Hello everyone, I am new to Rockwell PLC programming and currently in the process of simulating an existing project for debugging purposes. Coming from a background of working with Siemens software for several years, I find the simulation process in Logix Emulate a bit challenging. I am using Studio",
      "author": {
        "@type": "Person",
        "name": "scalo94"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-02",
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
                <h1 class="text-white">Troubleshooting Logix Emulate 5000 Controller Version Selection Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>scalo94</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5575</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">426</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am new to Rockwell PLC programming and currently in the process of simulating an existing project for debugging purposes. Coming from a background of working with Siemens software for several years, I find the simulation process in Logix Emulate a bit challenging. I am using Studio 5000 version 33.0, Logix Emulate version 33.0, and RS Linx Classic 4.20 CPR 9 SR 12.0 on Windows 7 Professional.

The issue I am facing is that when I try to add a simulated 5570 controller in any available slot (ranging from slot 2 to slot 16) in Logix Emulate, the controller version selection appears blank and does not display any options. Upon clicking "next" and then "finish," an error message stating "internal error! failed to install Studio 5000 Logix Emulate in slot!" pops up.

This being my first venture into Rockwell programming, I am unsure if I am missing a step or doing something incorrectly. Any guidance or assistance on this matter would be highly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like the issue could be related to the installation process. Make sure you are able to see various version options (v20 - 33) in the drop-down menu. I recommend trying to reinstall EmulateOG. Additionally, refer to a RA Tech Note which suggests repairing the installation first. If that doesn't work, uninstall and then reinstall the program. To do this, access the Windows registry through REGEDIT and locate the appropriate registry key based on your Windows system (HKEY_LOCAL_MACHINE\Software\Rockwell Automation\VirtualBackplaneMonitor for 32-bit Windows, HKEY_LOCAL_MACHINE\Software\Wow6432Node\Rockwell Automation\VirtualBackplaneMonitor for 64-bit Windows). Delete the VirtualBackplaneMonitor folder from there. Afterward, restart your computer and proceed with the reinstallation process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost suggested that the issue may be related to an installation problem. Ideally, you should see various version choices (v20 - 33) in the dropdown menu. I recommend trying to reinstall EmulateOG. Additionally, a RA Tech Note suggests repairing the installation. If that doesn't work, the next step would be to uninstall and then reinstall the software. To do this, navigate to the Windows registry using REGEDIT and modify the appropriate registry key based on your Windows version. For 32-bit Windows, access HKEY_LOCAL_MACHINE\Software\Rockwell Automation\VirtualBackplaneMonitor, and for 64-bit Windows, go to HKEY_LOCAL_MACHINE\Software\Wow6432Node\Rockwell Automation\VirtualBackplaneMonitor. Within the registry, delete the VirtualBackplaneMonitor folder, then reboot and reinstall the software. After following these steps, the issue was resolved for me. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>scalo94</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you frequently encounter this scenario, stay alert for FactoryTalk Logix Echo as it serves as a suitable alternative to RSLogix 5000 Emulate. This tool addresses many of the issues found in Emulate, although it may not be as user-friendly as Siemens counterparts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>New to Rockwell PLC programming, scalo94 seeks help with simulating an existing project for debugging purposes. Having experience with Siemens software, they are finding Logix Emulate in Studio 5000 version 33.0 challenging. When attempting to add a simulated 5570 controller in Logix Emulate, scalo94 encounters an issue where the controller version is not selectable, resulting in an "internal error" message. Seeking assistance from the community, scalo94 hopes to resolve this problem to successfully debug the project. Can anyone provide assistance or the necessary installer to address this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EstebanPLC</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the controller version selection blank when trying to add a simulated 5570 controller in Logix Emulate?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The blank controller version selection issue may be due to a compatibility or configuration mismatch between the software versions being used. Make sure that the Studio 5000, Logix Emulate, and RS Linx Classic versions are all compatible with each other.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the "internal error! failed to install Studio 5000 Logix Emulate in slot!" message when adding a controller in Logix Emulate?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve this error message, ensure that the software installations are correctly done and that the necessary components are properly configured. Check for any installation errors or conflicts that could be causing the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should I take to troubleshoot the controller version selection issue in Logix Emulate for Rockwell PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Start by verifying the compatibility of the software versions, ensuring proper installation and configuration. You may also want to check for any specific settings or requirements for simulating a controller in Logix Emulate. Consulting the Rockwell Automation documentation or seeking assistance from their support team can also be helpful in troubleshooting the issue.</p>
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
