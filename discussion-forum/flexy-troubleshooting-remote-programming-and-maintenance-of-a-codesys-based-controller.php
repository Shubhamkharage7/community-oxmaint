
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Have you ever used an **** Flexy for remote programming and maintenance of a Codesys-based controller? Our customer has chosen to use an **** Flexy instead of the native remote access functionality of our hardware. They have set up an eCatcher login profile for me, allowing me to successfully">
    <meta name="keywords" content="flexy troubleshooting, remote programming, maintenance, codesys-based controller, **** flexy, ecatcher login profile, remote access functionality, hmi, controller, ip addresses, vnc access, technical support document, broadcastforwarder parameter, plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/flexy-troubleshooting-remote-programming-and-maintenance-of-a-codesys-based-controller">
    <title>**** Flexy: Troubleshooting Remote Programming and Maintenance of a CodeSys-based Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="**** Flexy: Troubleshooting Remote Programming and Maintenance of a CodeSys-based Controller | Oxmaint Community">
    <meta property="og:description" content="Have you ever used an **** Flexy for remote programming and maintenance of a Codesys-based controller? Our customer has chosen to use an **** Flexy instead of the native remote access functionality of our hardware. They have set up an eCatcher login profile for me, allowing me to successfully">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/flexy-troubleshooting-remote-programming-and-maintenance-of-a-codesys-based-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="**** Flexy: Troubleshooting Remote Programming and Maintenance of a CodeSys-based Controller | Oxmaint Community">
    <meta name="twitter:description" content="Have you ever used an **** Flexy for remote programming and maintenance of a Codesys-based controller? Our customer has chosen to use an **** Flexy instead of the native remote access functionality of our hardware. They have set up an eCatcher login profile for me, allowing me to successfully">
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
        "@id": "https://community.oxmaint.com/discussion-forum/flexy-troubleshooting-remote-programming-and-maintenance-of-a-codesys-based-controller"
      },
      "headline": "**** Flexy: Troubleshooting Remote Programming and Maintenance of a CodeSys-based Controller",
      "description": "Have you ever used an **** Flexy for remote programming and maintenance of a Codesys-based controller? Our customer has chosen to use an **** Flexy instead of the native remote access functionality of our hardware. They have set up an eCatcher login profile for me, allowing me to successfully",
      "author": {
        "@type": "Person",
        "name": "martinAPD"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-27",
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
                <h1 class="text-white">**** Flexy: Troubleshooting Remote Programming and Maintenance of a CodeSys-based Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>martinAPD</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">429</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">118</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Have you ever used an **** Flexy for remote programming and maintenance of a Codesys-based controller? Our customer has chosen to use an **** Flexy instead of the native remote access functionality of our hardware. They have set up an eCatcher login profile for me, allowing me to successfully connect to the ****. While I am able to ping the IP addresses of our HMI and controller, I am unable to log in to the controller. However, I can access the HMI graphics using VNC.

After reviewing a ***** Technical Support Document, it was recommended to enable the “BroadcastForwarder” parameter in the comcfg.txt file and activate the “PLC Discovery”, which our customer has already done. We are currently using CodeSys v3.5.10.5, with Gateway-1 set to "IP-Address: localhost" and "Port: 1217" in the Comms Settings. Despite manually entering the IP address of the device, CodeSys displays a "No Device is responding..." message.

One consideration is whether the IP address for Gateway-1 should be "localhost" or the WAN/LAN IP of the ****. I have tried both options without success. Any suggestions or tips on what to investigate next would be appreciated.

Thank you,
Martin</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For clarification, the acronym assigned by the Forum should be "e.w.o.n."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>martinAPD</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you encounter a bug in the SP10 version of the gateway, simply install a newer version of the editor to resolve the issue. It's important to maintain your project at SP10 to prevent any library errors, or select 'don't update' when opening. Additionally, you won't be able to 'scan for devices'; instead, you must manually enter the PLC's IP address for connectivity. This troubleshooting tip can help maintain smooth operations and avoid technical setbacks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paraffin power</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the information regarding the Gateway issue in SP10, @paraffin power. I have multiple versions of CodeSys installed (v3.5.13.30 and v3.5.17.0) and have tried opening my project and a new project in both versions, but I am still unable to connect to our controller through the e.w.o.n. I always enter the Controller's IP Address directly and do not use the Scan for Devices feature. Do you know of any specific settings in the e.w.o.n that I should review or adjust?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>martinAPD</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I utilize Service Pack 10 through Service Pack 17 for my system configuration. Although my gateway is currently set at Service Pack 17, I have also found it to function well at Service Pack 13. I am using a remote-access gateway that is similar to Ewon and have not experienced any issues. Is there any possibility that Ewon blocks certain ports?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paraffin power</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to send a ping to check its connectivity?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paraffin power</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I have been using these settings for a long time, and while I used to have to manually adjust them, I am not sure if they are still necessary. However, the "Forward to WAN" setting is essential for sending out emails through the system. The "Nat and TF on WAN" setting was originally crucial for resolving issues that could not be fixed with the standard e.w.o.n configuration. Both of these values can be found in the com configuration section under storage. It may be beneficial to experiment with these settings: NatItf = 2 (Nat and TF on WAN) and FwrdToWAN = 1 (Forward LAN traffic to WAN).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot connectivity issues when trying to log in to a controller using an  Flexy for remote programming?</h4>
<p class='text-muted'><strong>Answer:</strong> To troubleshoot connectivity issues, ensure that the "BroadcastForwarder" parameter is enabled in the comcfg.txt file, activate "PLC Discovery," and verify the settings such as Gateway-1 IP address. Consider checking if the correct IP address (localhost or WAN/LAN IP of the ) is set in the configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I getting a "No Device is responding..." message in CodeSys despite entering the IP address of the device manually?</h4>
<p class='text-muted'><strong>Answer:</strong> If you encounter the "No Device is responding..." message in CodeSys, double-check the settings in CodeSys (such as Gateway-1 configuration) and ensure proper network connectivity between your devices. Verify that the IP address entered matches the actual IP address of the device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What can I do if I can access HMI graphics using VNC but cannot log in to the controller remotely with an  Flexy?</h4>
<p class='text-muted'><strong>Answer:</strong> If you can access HMI graphics using VNC but face issues logging in to the controller, focus on troubleshooting the connectivity and configuration settings specific to remote access and controller login. Review the  Flexy's settings, network configurations, and CodeSys parameters to ensure proper communication between devices.</p>
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
