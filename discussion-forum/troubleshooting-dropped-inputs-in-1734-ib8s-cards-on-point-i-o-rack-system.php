
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! My colleague and I have been troubleshooting a challenging issue with our Point I/O rack system. We have a setup consisting of a 1734-AENT Ethernet adapter, 5 1734-IB8S input cards, a 1734-EP24DC power supply, 3 1734-O8BS output cards, and an additional 1734-IB8S card. Recently, we have been">
    <meta name="keywords" content="troubleshooting dropped inputs, point i/o rack system issues, 1734-ib8s card problems, point i/o rack troubleshooting, input card drops in point i/o system">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-dropped-inputs-in-1734-ib8s-cards-on-point-i-o-rack-system">
    <title>Troubleshooting dropped inputs in 1734-IB8S cards on Point I/O rack system | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting dropped inputs in 1734-IB8S cards on Point I/O rack system | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! My colleague and I have been troubleshooting a challenging issue with our Point I/O rack system. We have a setup consisting of a 1734-AENT Ethernet adapter, 5 1734-IB8S input cards, a 1734-EP24DC power supply, 3 1734-O8BS output cards, and an additional 1734-IB8S card. Recently, we have been">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-dropped-inputs-in-1734-ib8s-cards-on-point-i-o-rack-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting dropped inputs in 1734-IB8S cards on Point I/O rack system | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! My colleague and I have been troubleshooting a challenging issue with our Point I/O rack system. We have a setup consisting of a 1734-AENT Ethernet adapter, 5 1734-IB8S input cards, a 1734-EP24DC power supply, 3 1734-O8BS output cards, and an additional 1734-IB8S card. Recently, we have been">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-dropped-inputs-in-1734-ib8s-cards-on-point-i-o-rack-system"
      },
      "headline": "Troubleshooting dropped inputs in 1734-IB8S cards on Point I/O rack system",
      "description": "Hello everyone! My colleague and I have been troubleshooting a challenging issue with our Point I/O rack system. We have a setup consisting of a 1734-AENT Ethernet adapter, 5 1734-IB8S input cards, a 1734-EP24DC power supply, 3 1734-O8BS output cards, and an additional 1734-IB8S card. Recently, we have been",
      "author": {
        "@type": "Person",
        "name": "ApoSloth"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-30",
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
                <h1 class="text-white">Troubleshooting dropped inputs in 1734-IB8S cards on Point I/O rack system</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ApoSloth</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">304</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">9</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! My colleague and I have been troubleshooting a challenging issue with our Point I/O rack system. We have a setup consisting of a 1734-AENT Ethernet adapter, 5 1734-IB8S input cards, a 1734-EP24DC power supply, 3 1734-O8BS output cards, and an additional 1734-IB8S card. 
Recently, we have been experiencing dropped inputs from cards in slots 1, 2, 3, and 9 at unpredictable times. This issue is affecting various inputs, including crucial ones connected to a light curtain module. We have observed drops of about 15ms, occurring randomly. Despite our efforts to adjust the power source and configurations, the problem persists. 
After experimenting with different solutions, we found that connecting the problematic inputs directly to the +24V line of the rack somewhat resolved the issue. However, this workaround is not foolproof, as the light curtains also connect to the same +24V line and have their own outputs in the safe state. We have tried replacing the light curtains and rewiring them to the Point IO rack, but the problem persists. 
The dropped inputs are scattered throughout the machine and do not follow any specific wiring patterns. The common denominator appears to be the Point IO rack and power supply. Despite replacing parts and troubleshooting extensively, the issue remains unresolved. 
We are seeking suggestions for potential solutions to this persistent problem. Any advice would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I am unfamiliar with this topic, I came across a helpful tech note (available to everyone) that discusses resolving flickering issues at the end of a light curtain. The tech note, QA46751, emphasizes the importance of correctly configuring the IB8S input channels for OSSD or pulse testing. Did you remember to reconfigure the input channels each time you experimented with different wiring?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know the date code for your IB8S module? There has been a reported issue with IB8S units causing unexpected drops of 1734 racks. You can find more information on this in the Rockwell Knowledge Base. From what I remember, the problematic modules were manufactured around 2021.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Issue resolved! By utilizing an oscilloscope, we identified a 1.4VAC @ 12KHz voltage between rack 0V and ground, with pulsing peaks reaching ±5V. This induced current was caused by two SEW Movidrives, where the ground wire was intertwined with the motor wires using a ferrite core. By separating the ground wires and re-routing them directly, the induced current decreased by 70%, resolving the problem. This solution required some mental effort, but the valuable information provided by others was greatly appreciated. Though it may not have been the exact fix this time, acquiring more knowledge is always beneficial!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ApoSloth</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the dropped inputs in the 1734-IB8S cards on the Point I/O rack system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The dropped inputs could be caused by various factors such as power supply issues, wiring problems, or potential hardware malfunctions within the Point I/O rack system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What steps have been taken to troubleshoot the dropped inputs issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - The users have tried adjusting the power source, reconfiguring settings, connecting inputs directly to the +24V line, replacing light curtains, and rewiring components to the Point I/O rack.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Have any specific patterns or common factors been identified in the dropped inputs occurrence?</h4>
<p class='text-muted'><strong>Answer:</strong> - The dropped inputs seem to be scattered throughout the machine without following specific wiring patterns, suggesting a potential issue related to the Point I/O rack system or power supply.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any temporary solutions or workarounds to address the dropped inputs problem?</h4>
<p class='text-muted'><strong>Answer:</strong> - Connecting the problematic inputs directly to the +24V line of the rack has somewhat resolved the issue temporarily, but it is not a foolproof solution due to conflicts with other connected devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What additional troubleshooting steps can be recommended to address the persistent dropped inputs issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is advisable to conduct a thorough inspection of the wiring, check for grounding issues, consider testing with different power supplies, and consult with technical support from the manufacturer for further assistance in resolving the problem.</p>
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
