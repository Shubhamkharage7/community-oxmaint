
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am currently working on fixing a Powerflex 753 (480-600V) unit. After replacing all the optocouplers and IGBT, the VFD is up and running, showing output voltage on the DMM (although this method is not ideal for checking output voltage). However, when I connect the motor, the voltages">
    <meta name="keywords" content="powerflex 753 vfd, under-voltage fault, troubleshooting, powerflex 753 unit, optocouplers, igbt replacement, output voltage, dmm, motor connection, firing mechanism, voltage drop, fault triggering">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-under-voltage-fault-on-powerflex-753-vfd">
    <title>Troubleshooting Under-Voltage Fault on Powerflex 753 VFD | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Under-Voltage Fault on Powerflex 753 VFD | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am currently working on fixing a Powerflex 753 (480-600V) unit. After replacing all the optocouplers and IGBT, the VFD is up and running, showing output voltage on the DMM (although this method is not ideal for checking output voltage). However, when I connect the motor, the voltages">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-under-voltage-fault-on-powerflex-753-vfd">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Under-Voltage Fault on Powerflex 753 VFD | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am currently working on fixing a Powerflex 753 (480-600V) unit. After replacing all the optocouplers and IGBT, the VFD is up and running, showing output voltage on the DMM (although this method is not ideal for checking output voltage). However, when I connect the motor, the voltages">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-under-voltage-fault-on-powerflex-753-vfd"
      },
      "headline": "Troubleshooting Under-Voltage Fault on Powerflex 753 VFD",
      "description": "Greetings! I am currently working on fixing a Powerflex 753 (480-600V) unit. After replacing all the optocouplers and IGBT, the VFD is up and running, showing output voltage on the DMM (although this method is not ideal for checking output voltage). However, when I connect the motor, the voltages",
      "author": {
        "@type": "Person",
        "name": "Syed Kazmi"
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
                <h1 class="text-white">Troubleshooting Under-Voltage Fault on Powerflex 753 VFD</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Syed Kazmi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">297</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">254</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am currently working on fixing a Powerflex 753 (480-600V) unit. After replacing all the optocouplers and IGBT, the VFD is up and running, showing output voltage on the DMM (although this method is not ideal for checking output voltage). However, when I connect the motor, the voltages drop significantly and an under-voltage fault is triggered. It appears to be an issue with the firing mechanism. Can anyone offer guidance on troubleshooting this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It would be advisable to inspect the power bridge rectifier as it appears that some of the rectifiers may be faulty or non-functional. This component plays a crucial role in converting AC to DC power in electronic devices, so it is important to ensure its proper functioning for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are the motor windings verified to be free from shorts?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your responses. I replaced the motor, but the outcome remained unchanged. I also attempted to operate the VFD directly by applying DC voltage to bypass the AC to DC conversion, yet the issue persists.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Syed Kazmi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It may be time to consider replacing your VFD, as you have likely spent too much time already trying to fix it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, I don't have the luxury of opting out - I need to address this and repair it. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Syed Kazmi</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>When connecting the motor, consider whether it is operating under no load or loaded conditions. If it is under heavy load requiring a significant amount of torque, it's possible that there could be a blown fuse affecting the power supply to the system. This could particularly be an issue if the drive and motor are at their maximum capacity. These are just some general thoughts to consider, as I don't have firsthand experience with PowerFlex systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Syed Kazmi inquired: Greetings, I am currently fixing a Powerflex 753 (480-600V) VFD. After replacing the optocouplers and IGBT and confirming their functionality, the VFD starts up and produces output voltage, though I acknowledge that using a meter may not be the most accurate method to measure it. However, when I connect the motor, the voltage drops significantly, leading to an under-voltage fault. This issue appears to be related to the firing mechanism. Can anyone provide guidance on this matter? It is recommended to use a meter with a low pass filter to accurately measure the VFD output voltage. Additionally, when troubleshooting electronics without schematics, utilizing a known working unit as a reference can be beneficial in understanding its operation and assessing the condition of the components on the board.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: What could be causing the under-voltage fault on a Powerflex 753 VFD after replacing optocouplers and IGBT?
    The dropping voltages and under-voltage fault when connecting the motor may indicate an issue with the firing mechanism.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the under-voltage fault on my Powerflex 753 VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> Troubleshooting steps may include checking the firing mechanism, verifying motor connections, and ensuring compatibility between the VFD and motor.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a recommended method to check output voltage on a Powerflex 753 VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> While using a DMM to check output voltage is not ideal, it can provide some indication. Consider consulting the VFD manual for recommended testing procedures.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are some common causes of under-voltage faults in VFD units like the Powerflex 753?</h4>
<p class='text-muted'><strong>Answer:</strong> Under-voltage faults in VFD units can be caused by issues such as inadequate power supply, motor overload, or problems with the firing mechanism.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Can anyone provide guidance on resolving an under-voltage fault on a Powerflex 753 VFD after component replacement?</h4>
<p class='text-muted'><strong>Answer:</strong> Seek advice on checking the firing mechanism, inspecting motor connections, and ensuring proper setup and compatibility to troubleshoot and resolve the under-voltage fault.</p>
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
