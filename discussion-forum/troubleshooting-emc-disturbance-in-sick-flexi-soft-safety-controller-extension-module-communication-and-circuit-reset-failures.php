
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on integrating a system with a SICK safety controller, specifically the SICK Flexi Soft main module FX3-CPU3 along with various extension I/O modules. Upon generating a safety report, I have identified a recurring issue related to Extension module 2: FLEXBUS+ communication being disturbed.">
    <meta name="keywords" content="emc disturbance, sick flexi soft, safety controller, extension module 2, flexbus+ communication, safety report, fx3-cpu3, safety circuit, circuit reset failures, emc issues, safety controller integration, sick safety">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-emc-disturbance-in-sick-flexi-soft-safety-controller-extension-module-communication-and-circuit-reset-failures">
    <title>Troubleshooting EMC Disturbance in SICK Flexi Soft Safety Controller: Extension Module Communication and Circuit Reset Failures | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting EMC Disturbance in SICK Flexi Soft Safety Controller: Extension Module Communication and Circuit Reset Failures | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on integrating a system with a SICK safety controller, specifically the SICK Flexi Soft main module FX3-CPU3 along with various extension I/O modules. Upon generating a safety report, I have identified a recurring issue related to Extension module 2: FLEXBUS+ communication being disturbed.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-emc-disturbance-in-sick-flexi-soft-safety-controller-extension-module-communication-and-circuit-reset-failures">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting EMC Disturbance in SICK Flexi Soft Safety Controller: Extension Module Communication and Circuit Reset Failures | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on integrating a system with a SICK safety controller, specifically the SICK Flexi Soft main module FX3-CPU3 along with various extension I/O modules. Upon generating a safety report, I have identified a recurring issue related to Extension module 2: FLEXBUS+ communication being disturbed.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-emc-disturbance-in-sick-flexi-soft-safety-controller-extension-module-communication-and-circuit-reset-failures"
      },
      "headline": "Troubleshooting EMC Disturbance in SICK Flexi Soft Safety Controller: Extension Module Communication and Circuit Reset Failures",
      "description": "Hello everyone, I am currently working on integrating a system with a SICK safety controller, specifically the SICK Flexi Soft main module FX3-CPU3 along with various extension I/O modules. Upon generating a safety report, I have identified a recurring issue related to Extension module 2: FLEXBUS+ communication being disturbed.",
      "author": {
        "@type": "Person",
        "name": "Afranius"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-12",
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
                <h1 class="text-white">Troubleshooting EMC Disturbance in SICK Flexi Soft Safety Controller: Extension Module Communication and Circuit Reset Failures</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Afranius</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">168</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">384</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on integrating a system with a SICK safety controller, specifically the SICK Flexi Soft main module FX3-CPU3 along with various extension I/O modules. Upon generating a safety report, I have identified a recurring issue related to Extension module 2: FLEXBUS+ communication being disturbed. This could potentially be due to EMC disturbance. 

I have also observed occasional failures in the controller when resetting the safety circuit in the cell, indicated by flashing red LEDs on the CPU and other modules. Is there a connection between these issues? Thank you for your insights.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you experiencing high levels of electromagnetic interference in your vicinity? This could be caused by various sources such as power lines, radio and TV signals, wireless devices, switching power supplies, and microwave ovens. Additionally, running low voltage or DC wires alongside 120VAC or higher voltage levels in the same conduit may also result in electromagnetic compatibility (EMC) disturbances.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AustinC1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AustinC1 inquired about the presence of electromagnetic interference in the vicinity, which could stem from various sources like power lines, radio and TV broadcast signals, wireless devices, switching power supplies, and microwave ovens. It's crucial to avoid running low voltage or DC wires in the same conduit as 120VAC or higher voltage levels, as this could lead to EMC disturbance. Given that it's a shop floor, there is a likelihood of encountering such interferences in the area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Afranius</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is there a recurring issue with Extension module 2: FLEXBUS+ communication in the SICK Flexi Soft safety controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - The recurring issue with the Extension module 2: FLEXBUS+ communication in the SICK Flexi Soft safety controller could be attributed to EMC disturbance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing occasional failures in the controller when resetting the safety circuit, leading to flashing red LEDs on the CPU and other modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - Occasional failures in resetting the safety circuit in the cell, indicated by flashing red LEDs on the CPU and other modules, could be related to EMC disturbance or communication issues with the extension modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a connection between the EMC disturbance affecting Extension module 2 communication and the failures during safety circuit resets in the SICK Flexi Soft safety controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there could be a connection between EMC disturbance affecting Extension module 2 communication and the failures during safety circuit resets in the SICK Flexi Soft safety controller, as both issues may be related to interference or disruptions in the communication and operation of the system components.</p>
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
