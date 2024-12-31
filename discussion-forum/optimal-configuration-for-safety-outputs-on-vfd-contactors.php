
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I have a query regarding the design of a safety circuits output side. I have a setup consisting of 7 VFDs, each with 2 safety contactors connected in series on the load side. All VFDs output contactors will be controlled by the same safety events. I plan to">
    <meta name="keywords" content="vfd contactor safety circuit design, safety outputs on vfd contactors, optimal configuration for safety circuits, vfd contactor setup, safety plc output channels, safety events control for">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimal-configuration-for-safety-outputs-on-vfd-contactors">
    <title>Optimal Configuration for Safety Outputs on VFD Contactors | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimal Configuration for Safety Outputs on VFD Contactors | Oxmaint Community">
    <meta property="og:description" content="Greetings, I have a query regarding the design of a safety circuits output side. I have a setup consisting of 7 VFDs, each with 2 safety contactors connected in series on the load side. All VFDs output contactors will be controlled by the same safety events. I plan to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimal-configuration-for-safety-outputs-on-vfd-contactors">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimal Configuration for Safety Outputs on VFD Contactors | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I have a query regarding the design of a safety circuits output side. I have a setup consisting of 7 VFDs, each with 2 safety contactors connected in series on the load side. All VFDs output contactors will be controlled by the same safety events. I plan to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimal-configuration-for-safety-outputs-on-vfd-contactors"
      },
      "headline": "Optimal Configuration for Safety Outputs on VFD Contactors",
      "description": "Greetings, I have a query regarding the design of a safety circuits output side. I have a setup consisting of 7 VFDs, each with 2 safety contactors connected in series on the load side. All VFDs output contactors will be controlled by the same safety events. I plan to",
      "author": {
        "@type": "Person",
        "name": "wine_sparky"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">Optimal Configuration for Safety Outputs on VFD Contactors</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>wine_sparky</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">346</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">21</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I have a query regarding the design of a safety circuit's output side. I have a setup consisting of 7 VFDs, each with 2 safety contactors connected in series on the load side. All VFDs' output contactors will be controlled by the same safety events. I plan to use separate output channels from my Safety PLC to switch each safety contactor per VFD. My question is: Is it advisable to use the same 2 outputs for all VFD contactor pairs (total of 2 outputs), or should each VFD contactor pair have its own 2 distinct outputs (total of 14 outputs)? I hope this explanation is clear. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up your system, it is essential to check the rating of the output points and the inrush/holding current of the contactors. Additionally, it is recommended to incorporate a feedback loop for safety integrity monitoring with each set of safety contactors to detect welded contactors.

If all contactors are driven from one pair of outputs, the feedback loop must pass through all 14 contactors. In this setup, a single stuck contactor can prevent a reset for all 14 contactors. Alternatively, by wiring each drive to individual pairs of safety outputs, each contactor pair's feedback loop can be connected to its own safety input, ensuring that a single contactor fault only impacts that specific motor.

While safety I/O can be costly, it is worth considering this approach for improved safety monitoring. Typically, a single pair of safety contactors is used for a single safety function, with Safe Torque Off wires paralleled off the coils for all VSD's. However, this setup may not be sufficient if your drives lack STO capabilities or if the required Performance Level exceeds the drives' STO rating.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up safety contactors, it is essential to check the output points' ratings and the contactors' inrush/holding current. It is also advisable to incorporate a feedback loop for safety integrity monitoring, such as welded contactor detection. If all contactors are controlled by a single pair of outputs, a loop through all contactors may be necessary, causing a single stuck contactor to affect all 14 contactors. Alternatively, wiring each drive to individual pairs of safety outputs allows for each contactor pair to have its own feedback loop, ensuring that a single contactor fault only affects that particular motor.

While safety I/O can be costly, considering this approach is worthwhile. Typically, a single pair of safety contactors feeding the DOLs with Safe Torque Off wires for VSDs is seen for a single safety function. However, depending on the PL rating desired, verifying the safe state before reset is crucial. This means ensuring that each drive is off and not running before resetting. Implementing individual safety output resets for each drive or a collective reset for all 14 drives is essential.

If cost and rack space are not constraints, opting for individual safety output resets is recommended. This setup allows for potential future zoning adjustments and ensures that a single safety contactor failure does not impact all drives simultaneously, providing more flexibility and reliability in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. Should I use the same outputs for all VFD contactor pairs or provide each pair with distinct outputs?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is advisable to use separate output channels for each safety contactor per VFD to ensure independent control over each VFD contactor pair. This approach would require a total of 14 outputs for all 7 VFDs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the benefit of using separate outputs for each VFD contactor pair?</h4>
<p class='text-muted'><strong>Answer:</strong> - Using distinct outputs for each VFD contactor pair provides individual control and monitoring capability, allowing for better safety and flexibility in managing the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the considerations when designing safety outputs for VFD contactors?</h4>
<p class='text-muted'><strong>Answer:</strong> - When designing safety outputs for VFD contactors, factors such as redundancy, independence, and fault detection should be taken into account to ensure the overall safety and reliability of the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I effectively connect safety contactors in series on the load side of VFDs?</h4>
<p class='text-muted'><strong>Answer:</strong> - When connecting safety contactors in series on the load side of VFDs, ensure proper wiring, coordination with the Safety PLC, and adherence to safety standards to maintain the integrity of the safety circuit.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What should be the priority when configuring safety outputs for VFD contactors?</h4>
<p class='text-muted'><strong>Answer:</strong> - The priority should be on ensuring the safe operation of the system by implementing a robust safety circuit design that offers redundancy and individual control over each VFD contactor pair</p>
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
