
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there, I encountered an issue while upgrading the firmware on a new controlLogix 5571 controller to version 20.04.01 using ControlFlash. During the installation, communication was lost between the controller and my laptop, resulting in RsLinx being unable to detect the controller. I would appreciate any suggestions on resolving">
    <meta name="keywords" content="controllogix 5571 firmware upgrade, controlflash troubleshooting, rslinx communication issue, firmware upgrade lost communication, controllogix controller upgrade problem, resolving firmware upgrade errors">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-5571-firmware-upgrade-issue-lost-communication-with-rslinx">
    <title>Troubleshooting ControlLogix 5571 Firmware Upgrade Issue: Lost Communication with RsLinx | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ControlLogix 5571 Firmware Upgrade Issue: Lost Communication with RsLinx | Oxmaint Community">
    <meta property="og:description" content="Hello there, I encountered an issue while upgrading the firmware on a new controlLogix 5571 controller to version 20.04.01 using ControlFlash. During the installation, communication was lost between the controller and my laptop, resulting in RsLinx being unable to detect the controller. I would appreciate any suggestions on resolving">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-5571-firmware-upgrade-issue-lost-communication-with-rslinx">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ControlLogix 5571 Firmware Upgrade Issue: Lost Communication with RsLinx | Oxmaint Community">
    <meta name="twitter:description" content="Hello there, I encountered an issue while upgrading the firmware on a new controlLogix 5571 controller to version 20.04.01 using ControlFlash. During the installation, communication was lost between the controller and my laptop, resulting in RsLinx being unable to detect the controller. I would appreciate any suggestions on resolving">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-5571-firmware-upgrade-issue-lost-communication-with-rslinx"
      },
      "headline": "Troubleshooting ControlLogix 5571 Firmware Upgrade Issue: Lost Communication with RsLinx",
      "description": "Hello there, I encountered an issue while upgrading the firmware on a new controlLogix 5571 controller to version 20.04.01 using ControlFlash. During the installation, communication was lost between the controller and my laptop, resulting in RsLinx being unable to detect the controller. I would appreciate any suggestions on resolving",
      "author": {
        "@type": "Person",
        "name": "Muye"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
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
                <h1 class="text-white">Troubleshooting ControlLogix 5571 Firmware Upgrade Issue: Lost Communication with RsLinx</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">391</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">166</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there, I encountered an issue while upgrading the firmware on a new controlLogix 5571 controller to version 20.04.01 using ControlFlash. During the installation, communication was lost between the controller and my laptop, resulting in RsLinx being unable to detect the controller. I would appreciate any suggestions on resolving this problem. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings. Which interface are you currently utilizing? Have you attempted using a USB connection?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently utilizing an Ethernet cable with the Ethernet module on the rack. I will also test the USB connection. Thank you for your response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing connectivity issues between your PC, PLC, and field devices, it could be due to an incompatible IP address on your computer. Compatible IP settings are crucial for seamless communication between these devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alfredo Quintero inquired: "Which interface are you currently utilizing? Have you attempted connecting via USB? I have tried using various USB cables and laptops, but the pop-up dialog for installing a new device is not appearing."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alfredo Quintero noted that a possible issue may be an incompatible IP address on your PC in relation to the IP settings of the PLC and field devices. However, I can confirm that the IP address is indeed compatible, as I am able to successfully communicate with both the redundancy module and controlnet module located on the same rack.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Logix5571 Module screen is oscillating between displaying 'TEST' and 'WAIT'.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steps to troubleshoot an issue: First, remove the CompactFlash card. Next, take out all other modules in the chassis. Make sure the mode key is in PROG, and not in REM or Run. Consider putting the controller in a different slot or swapping it into another chassis if possible. OG</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost recommended troubleshooting steps such as removing the CompactFlash card, eliminating all other modules in the chassis, and setting the mode key to PROG, not REM or Run. It may also be worth trying to relocate the controller to a different slot or testing it in another chassis if possible. Click here to read more. I will attempt to place it in a different chassis as suggested.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Muye attempted to insert the item in a new chassis, resulting in a 'Major Fault T01:C61 non-recoverable' error on the ControlLogix 5561 controller display. This has raised concerns about the possibility of it being permanently damaged or "bricked".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Resolved the issue of 'Major Fault T01:C61 non-recoverable' by following these steps: Inserted the key into PROG,REM mode and repeatedly ran back and forth until 'No PROJECT' appeared on the display and the 'Ok' LED changed from red to green. Problem solved! Muye discovered that placing the key in a different chassis with ControlLogix 5561 resulted in the same 'Major Fault T01:C61 non-recoverable' error. Is the controller bricked? Click for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Would you like to attempt updating the firmware?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Muye successfully resolved the issue of 'Major Fault T01:C61 non-recoverable' by following these steps: placing the key in PROG, REM, then running back and forth until 'No PROJECT' appeared and the 'Ok' Led turned from red to green. It's all sorted now! Click to know more details. Well done on finding your solution. Fantastic job!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AlfredoQuintero suggested attempting to upgrade the firmware on your device. Click here for instructions on how to do so.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muye</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why did communication get lost during the firmware upgrade process with ControlFlash on my ControlLogix 5571 controller?
   - Communication may have been lost due to various reasons such as interruptions in the network connection, incompatible firmware versions, or errors during the upgrade process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I resolve the issue of RsLinx being unable to detect the ControlLogix 5571 controller after a failed firmware upgrade?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try troubleshooting steps such as restarting the controller, checking the network connection, reinstalling drivers, or using alternate communication protocols.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some best practices to follow to avoid communication issues during firmware upgrades on ControlLogix controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to ensure a stable network connection, verify firmware compatibility, back up important data before upgrades, and follow proper procedures outlined in the firmware upgrade documentation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a way to recover the ControlLogix 5571 controller after a failed firmware upgrade and lost communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - Depending on the specific situation, there might be recovery options like restoring from a backup, using a USB connection for communication, or contacting technical support for assistance.</p>
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
