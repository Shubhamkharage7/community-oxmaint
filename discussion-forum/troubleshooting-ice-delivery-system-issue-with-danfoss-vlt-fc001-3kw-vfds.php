
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am experiencing an issue with the ice delivery system after transitioning from contactor to VFD control using Danfoss VLT FC001 3kW VFDs to regulate 3-phase asynchronous 2.2kW motors driving augers and scrapers. While the system operates smoothly under light loads, it struggles when faced with clumped ice">
    <meta name="keywords" content="danfoss vlt fc001, 3kw vfds, ice delivery system, troubleshooting, 3-phase asynchronous motors, augers, scrapers, contactors, power loss, ramp-up times, torque limits">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ice-delivery-system-issue-with-danfoss-vlt-fc001-3kw-vfds">
    <title>Troubleshooting Ice Delivery System Issue with Danfoss VLT FC001 3kW VFDs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Ice Delivery System Issue with Danfoss VLT FC001 3kW VFDs | Oxmaint Community">
    <meta property="og:description" content="Hello, I am experiencing an issue with the ice delivery system after transitioning from contactor to VFD control using Danfoss VLT FC001 3kW VFDs to regulate 3-phase asynchronous 2.2kW motors driving augers and scrapers. While the system operates smoothly under light loads, it struggles when faced with clumped ice">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ice-delivery-system-issue-with-danfoss-vlt-fc001-3kw-vfds">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Ice Delivery System Issue with Danfoss VLT FC001 3kW VFDs | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am experiencing an issue with the ice delivery system after transitioning from contactor to VFD control using Danfoss VLT FC001 3kW VFDs to regulate 3-phase asynchronous 2.2kW motors driving augers and scrapers. While the system operates smoothly under light loads, it struggles when faced with clumped ice">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ice-delivery-system-issue-with-danfoss-vlt-fc001-3kw-vfds"
      },
      "headline": "Troubleshooting Ice Delivery System Issue with Danfoss VLT FC001 3kW VFDs",
      "description": "Hello, I am experiencing an issue with the ice delivery system after transitioning from contactor to VFD control using Danfoss VLT FC001 3kW VFDs to regulate 3-phase asynchronous 2.2kW motors driving augers and scrapers. While the system operates smoothly under light loads, it struggles when faced with clumped ice",
      "author": {
        "@type": "Person",
        "name": "Itrim"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">Troubleshooting Ice Delivery System Issue with Danfoss VLT FC001 3kW VFDs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Itrim</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">262</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">488</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am experiencing an issue with the ice delivery system after transitioning from contactor to VFD control using Danfoss VLT FC001 3kW VFDs to regulate 3-phase asynchronous 2.2kW motors driving augers and scrapers. While the system operates smoothly under light loads, it struggles when faced with clumped ice or excessive ice on the scrapers. Instead of tripping, it appears to lose power. Despite adjusting ramp-up times, torque and current limits, load compensation settings, and frequency levels, the issue persists. Before reverting to contactors, I am seeking advice on other settings that may need adjustment. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, it's important to assess the frequency drive output voltage when encountering issues, such as struggling and abnormal currents. If the voltage output of the drive reads 380/400V at 50Hz, there may be a fault in your electric motor. It is crucial to monitor and troubleshoot these factors to ensure optimal performance and prevent potential damages.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PaulTee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that the drive is configured with the motor nameplate data before proceeding. If the drive is utilizing "SVC Mode" to enhance torque capability, it is crucial to complete the "Autotune" procedure detailed in the manual. Failure to do so may result in inaccurate assumptions about the motor. If your VFD does not have SCV mode, it may be time to upgrade to a better VFD for optimal performance. Additionally, it is important to note that the drive in question is HVAC rated, designed for simpler applications like centrifugal pumps and fans in HVAC systems, and may not be suitable for your specific needs. Consider investing in a "Constant Torque" or "Heavy Duty" rated drive for this application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jraef</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the ice delivery system struggling under heavy loads with the Danfoss VLT FC001 3kW VFDs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue might be related to the VFD settings not being optimized for handling clumped ice or excessive loads on the scrapers. Despite adjusting various parameters like ramp-up times, torque limits, current limits, load compensation settings, and frequency levels, the problem persists.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the ice delivery system to lose power instead of tripping when faced with clumped ice or excessive loads?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The power loss issue may be due to the VFDs not being able to effectively regulate the motors under heavy loads. It's possible that the VFD settings need further adjustments to handle these specific scenarios more efficiently.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there other settings on the Danfoss VLT FC001 3kW VFDs that can be adjusted to improve performance under challenging conditions?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Before reverting to contactors, it's advisable to explore other settings on the VFDs that could help address the power loss issue. This could involve fine-tuning parameters related to motor control, overload protection, or fault handling to better suit the ice delivery system's operational requirements.</p>
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
