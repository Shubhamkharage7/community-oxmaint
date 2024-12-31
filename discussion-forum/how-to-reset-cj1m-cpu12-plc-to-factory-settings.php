
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im in need of assistance with my CJ1M CPU12 PLC and ETN11 ethernet card. After downloading an application, the CPU went into STOP mode and communication with the PLC and ethernet card is now impossible. Is there a way to reset the PLC to its factory settings?">
    <meta name="keywords" content="cj1m cpu12 plc, etn11 ethernet card, factory settings reset, plc stop mode, communication issues, err/alm error, battery removal, memory clearance, reset process, troubleshooting guide, cj series plc, omron plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-reset-cj1m-cpu12-plc-to-factory-settings">
    <title>How to Reset CJ1M CPU12 PLC to Factory Settings | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Reset CJ1M CPU12 PLC to Factory Settings | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im in need of assistance with my CJ1M CPU12 PLC and ETN11 ethernet card. After downloading an application, the CPU went into STOP mode and communication with the PLC and ethernet card is now impossible. Is there a way to reset the PLC to its factory settings?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-reset-cj1m-cpu12-plc-to-factory-settings">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Reset CJ1M CPU12 PLC to Factory Settings | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im in need of assistance with my CJ1M CPU12 PLC and ETN11 ethernet card. After downloading an application, the CPU went into STOP mode and communication with the PLC and ethernet card is now impossible. Is there a way to reset the PLC to its factory settings?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-reset-cj1m-cpu12-plc-to-factory-settings"
      },
      "headline": "How to Reset CJ1M CPU12 PLC to Factory Settings",
      "description": "Hello everyone, Im in need of assistance with my CJ1M CPU12 PLC and ETN11 ethernet card. After downloading an application, the CPU went into STOP mode and communication with the PLC and ethernet card is now impossible. Is there a way to reset the PLC to its factory settings?",
      "author": {
        "@type": "Person",
        "name": "supporter"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-29",
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
                <h1 class="text-white">How to Reset CJ1M CPU12 PLC to Factory Settings</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>supporter</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">10152</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">368</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm in need of assistance with my CJ1M CPU12 PLC and ETN11 ethernet card. After downloading an application, the CPU went into STOP mode and communication with the PLC and ethernet card is now impossible. Is there a way to reset the PLC to its factory settings? I have already tried removing the battery, but the PLC continues to show ERR/ALM upon powering up. How long should I wait to ensure the memory is cleared? Any advice would be greatly appreciated. Thank you! //Supporter</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To reset the memory and clear the ERR/ALM light on your system, disconnect the battery for no more than thirty minutes. The ERR/ALM light can indicate various issues, such as the absence of an END instruction or unset I/O table. Connect using TOOLBUS (default for CJ1) to the RS232 peripheral port. The default setting for the Host port (9 pin) is also TOOLBUS. If you continue to experience difficulties, please reach out for further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gtsuport</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, the power has been out for approximately 2 hours, yet the ERR/ALM LED remains illuminated after I reconnected the power a few minutes ago. I attempted to connect to the PLC using both Toolbus and Sysmac methods, but was unsuccessful. Do you have any suggestions to resolve this issue? Your assistance is greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>supporter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear supporter, It appears that you may have unintentionally transferred some unusual port settings while transferring the application (Please check the 'Settings' section in the Project Tree). If this is the case, then you will need to adjust the PLC DIP switch settings as follows: Set switch 4 to OFF to automatically detect CX-P parameters at the peripheral port and set switch 5 to ON to automatically detect CX-P parameters at the 232 port. Reset the Peripheral and/or 232 port settings to their default values in the 'Network Settings' of the 'Change PLC' dialogue and make sure to check the Baud Rate auto-detect checkbox. Next, go to the 'PLC' menu and select 'Auto Online'. We hope this information is helpful to you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paulus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Paulus, I want to thank you for your assistance with the issue I encountered after downloading an application via ethernet. I followed your recommendations, and disabling SW5 allowed me to successfully connect to the PLC using Hostlink. However, I am now facing a new issue with the PLC displaying an error message: IO Setting Error. Despite downloading a new, empty application, the ERR/ALM LED continues to light up. Do you have any suggestions on how to resolve this issue? Thank you for your support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>supporter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One user in need of assistance mentioned: "I am facing an issue with my PLC where I am unable to clear the IO Setting Error. Even after downloading a new application, the ERR/ALM LED continues to light up. Any advice on resolving this issue?" To resolve this problem, you may need to create the IO table. Simply switch the PLC to Program Mode, locate the IO Table Component in the Project Workspace, and double click it. From there, select the 'Options' menu and choose 'Create'. Confirm by clicking 'Yes' on the dialogue boxes that appear. This should rectify the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paulus</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Paulus, I just wanted to express my gratitude - you truly saved the day! Thank you so much. Best regards, Supporter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>supporter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude to Paulus, a valued supporter. Thanks to www.plctalk.net, my issue has been resolved twice now. Sincerely, Taufik.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Taufik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome Taufik! We are glad to have you on board in this valuable forum. We appreciate your initiative in seeking out a relevant thread for your issue - you are proactive in finding solutions. Another helpful platform for you to explore is MRPLC.com. We are excited to hear your insights and contributions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bluebyu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thanks to the information provided in this discussion thread, I was able to successfully resolve a similar issue. I am grateful to everyone for their valuable assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmarcelo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey there, I'm currently facing communication issues with my NX1P2 PLC. The PLC shows 3 lights - Net run, net error, and link/acc. However, when I connect the RJ45, all lights turn off. Additionally, I am unable to ping the IP address from my PC. I am curious if there is an option to perform a factory reset using the dip switch settings. Any advice on this matter would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Djill</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I reset a CJ1M CPU12 PLC to factory settings?
- To reset a CJ1M CPU12 PLC to factory settings, you can try removing the battery and waiting for a period of time. If that does not work, there may be other reset procedures specific to this model.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should I do if my CJ1M CPU12 PLC shows ERR/ALM upon powering up after attempting a reset?</h4>
<p class='text-muted'><strong>Answer:</strong> - If your CJ1M CPU12 PLC continues to show ERR/ALM after attempting a reset, there may be an issue with the reset process or the PLC itself. You may need to seek further assistance from technical support or consult the user manual for troubleshooting steps.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a specific waiting period recommended to ensure the memory is cleared when resetting a CJ1M CPU12 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - While there is no specific waiting period mentioned in the discussion thread, it is advisable to wait for a few minutes after removing the battery to ensure the memory is cleared. If the issue persists, you may need to explore other reset methods or seek professional help.</p>
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
