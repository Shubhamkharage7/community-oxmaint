
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im a newcomer to this forum seeking guidance on troubleshooting my PowerFlex755 EENET frequency inverter. My goal is to perform a point-to-point positioning task, but Im encountering a problem where the inverter consistently runs at 5Hz when I issue the start command, regardless of the reference input.">
    <meta name="keywords" content="powerflex755 eenet inverter, troubleshooting, frequency inverter, point-to-point positioning, reference input, minimum frequency setting, output frequency, start command, positioning tasks, programming examples, resources, parameter setting, powerflex755, point-to">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex755-eenet-inverter-for-point-to-point-positioning-task">
    <title>Troubleshooting PowerFlex755 EENET Inverter for Point-to-Point Positioning Task | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PowerFlex755 EENET Inverter for Point-to-Point Positioning Task | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im a newcomer to this forum seeking guidance on troubleshooting my PowerFlex755 EENET frequency inverter. My goal is to perform a point-to-point positioning task, but Im encountering a problem where the inverter consistently runs at 5Hz when I issue the start command, regardless of the reference input.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex755-eenet-inverter-for-point-to-point-positioning-task">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PowerFlex755 EENET Inverter for Point-to-Point Positioning Task | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im a newcomer to this forum seeking guidance on troubleshooting my PowerFlex755 EENET frequency inverter. My goal is to perform a point-to-point positioning task, but Im encountering a problem where the inverter consistently runs at 5Hz when I issue the start command, regardless of the reference input.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex755-eenet-inverter-for-point-to-point-positioning-task"
      },
      "headline": "Troubleshooting PowerFlex755 EENET Inverter for Point-to-Point Positioning Task",
      "description": "Hello everyone, Im a newcomer to this forum seeking guidance on troubleshooting my PowerFlex755 EENET frequency inverter. My goal is to perform a point-to-point positioning task, but Im encountering a problem where the inverter consistently runs at 5Hz when I issue the start command, regardless of the reference input.",
      "author": {
        "@type": "Person",
        "name": "Matthis"
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
                <h1 class="text-white">Troubleshooting PowerFlex755 EENET Inverter for Point-to-Point Positioning Task</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Matthis</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">566</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">272</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm a newcomer to this forum seeking guidance on troubleshooting my PowerFlex755 EENET frequency inverter. My goal is to perform a point-to-point positioning task, but I'm encountering a problem where the inverter consistently runs at 5Hz when I issue the start command, regardless of the reference input. Even when setting the reference speed to 10.0Hz, the output frequency exceeds 12.X (refer to the images attached). I suspect a minimum frequency setting might be causing this issue, but I haven't been able to locate the parameter responsible. Furthermore, could someone share their experience with positioning tasks utilizing a PowerFlex755 and Point-to-Point positioning? I believe addressing the aforementioned issue is essential for success in this task. Any programming examples or resources on Point-to-Point positioning would be greatly appreciated. Thank you in advance for your assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to precise positioning, consider programming it as an axis with an encoder in the system. By utilizing motor parameters, the drive will adjust the output frequency to reach 10hz, providing accurate feedback and control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mathieu1881</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe programming an axis may not be necessary if using PtP positioning. I have a SSI Encoder installed in the system, which provides accurate readings that change when a magnet is moved along the encoder bar. However, I am puzzled why the motor continues to run at 5Hz even after stopping the drive.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Matthis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the drive is maintaining the motor at zero speed instead of stopping it. Instructing the drive to "stop" the motor does not necessarily mean it stops controlling the motor. With an encoder, the VFD relies on the encoder input to indicate zero speed. The output observed is the minimal amount of torque needed to keep the motor at zero speed. Based on the tag names used, it seems you may be involved in a lifting application where the drive's torque output is necessary to counteract gravity's pull on the load.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lynx777</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, Lynx777 pointed out that it seems like the drive is keeping the motor at a standstill. Issuing a "stop" command to the drive may not necessarily stop it from controlling the motor. With an encoder in place, the VFD relies on the encoder input to confirm zero speed. The observed torque is likely needed to maintain the motor at this standstill. Additionally, based on the tag names used, it seems there may be a lifting application involved, where the drive's torque output supports the load against gravity. In my situation, I am testing with a small 0.3kW motor and do not have a load present. Could this behavior be due to my PtP mode parameters? I attempted a PtP task and noticed the motor running even without a reference command. It appears the issue lies in the PAR784 PTP command, which remains constant and matches the actual position of the SSI encoder.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Matthis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I haven't personally utilized PTP mode with a PF755, I have experience using them in servo mode, also known as positioning mode or axis mode, and have observed similar behavior even with no load. Based on this, I believe that operating in PTP mode would yield comparable results. In my opinion, what you are witnessing is typical behavior of the drive as it maintains control of the motor to keep it in a specific position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lynx777</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your input! Can an asynchronous motor be utilized in axis mode as well?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Matthis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing a motor with an encoder can make a significant difference in flow control accuracy. While it may not offer the same precision as a traditional servo setup, it can still be effective in certain scenarios. I recently upgraded several large "needle style" flow control valves to improve the accuracy of material flow. Previously, I could only control the flow within ~ +/- 50lbs per minute, but now, with the addition of an encoder to the 5hp motor and a PID for logic control using a PF755 VFD, I can control the flow within ~ +/- 10 lbs per minute. The previous setup relied on a PF40 VFD without encoder feedback, adjusting the needle based on a timer. The new setup offers improved control and accuracy, demonstrating the benefits of upgrading to a motor with an encoder for enhanced precision in flow control systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lynx777</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I currently have a UFB Encoder Card paired with an SSI Encoder bar attached to the motor, without a direct encoder. Will this pose any issues? It seems promising! The addition of encoder feedback significantly enhances accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Matthis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not familiar with a servo setup that does not have an encoder directly linked to the motor, so I cannot determine if it would pose any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lynx777</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my PowerFlex755 EENET frequency inverter running at 5Hz regardless of the reference input for a point-to-point positioning task?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue might be related to a minimum frequency setting in the parameters. Check the inverter's settings to adjust the minimum frequency parameter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I address the problem of the inverter exceeding the set reference speed in a point-to-point positioning task with PowerFlex755?</h4>
<p class='text-muted'><strong>Answer:</strong> To address this issue, review the inverter's settings and ensure that the parameters are correctly configured to match the desired reference speed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can someone share their experience with positioning tasks using PowerFlex755 and Point-to-Point positioning?</h4>
<p class='text-muted'><strong>Answer:</strong> Other users may share their experiences with positioning tasks utilizing PowerFlex755 and provide insights or tips on how to troubleshoot common issues like the one mentioned.</p>
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
