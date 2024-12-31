
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When comparing position control systems in Beckhoff and Siemens, there are notable differences. In a Beckhoff setup utilizing Beckhoff drives on Ethercat, the CSP profile sends the position to the drive each cycle. The drive then interpolates this data to generate a velocity signal. Conversely, in Siemens systems with">
    <meta name="keywords" content="beckhoff position control system, siemens position control system, comparison of beckhoff and siemens position control, beckhoff drives on ethercat, siemens drives on profinet, csp profile, velocity signal in position control systems, interpolation in beckhoff">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/comparison-of-position-control-systems-in-beckhoff-and-siemens">
    <title>Comparison of Position Control Systems in Beckhoff and Siemens | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Comparison of Position Control Systems in Beckhoff and Siemens | Oxmaint Community">
    <meta property="og:description" content="When comparing position control systems in Beckhoff and Siemens, there are notable differences. In a Beckhoff setup utilizing Beckhoff drives on Ethercat, the CSP profile sends the position to the drive each cycle. The drive then interpolates this data to generate a velocity signal. Conversely, in Siemens systems with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/comparison-of-position-control-systems-in-beckhoff-and-siemens">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Comparison of Position Control Systems in Beckhoff and Siemens | Oxmaint Community">
    <meta name="twitter:description" content="When comparing position control systems in Beckhoff and Siemens, there are notable differences. In a Beckhoff setup utilizing Beckhoff drives on Ethercat, the CSP profile sends the position to the drive each cycle. The drive then interpolates this data to generate a velocity signal. Conversely, in Siemens systems with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/comparison-of-position-control-systems-in-beckhoff-and-siemens"
      },
      "headline": "Comparison of Position Control Systems in Beckhoff and Siemens",
      "description": "When comparing position control systems in Beckhoff and Siemens, there are notable differences. In a Beckhoff setup utilizing Beckhoff drives on Ethercat, the CSP profile sends the position to the drive each cycle. The drive then interpolates this data to generate a velocity signal. Conversely, in Siemens systems with",
      "author": {
        "@type": "Person",
        "name": "aand74"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">Comparison of Position Control Systems in Beckhoff and Siemens</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aand74</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">984</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">311</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When comparing position control systems in Beckhoff and Siemens, there are notable differences. In a Beckhoff setup utilizing Beckhoff drives on Ethercat, the CSP profile sends the position to the drive each cycle. The drive then interpolates this data to generate a velocity signal. Conversely, in Siemens systems with drives on Profinet and DSC technology, a velocity signal is sent to the drive for precontrol, while a position error is sent for position control within the drive. Are you familiar with the advantages and disadvantages of these two systems?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>As a motion control specialist, I focus on staying updated on industry terminology and practices. I prefer a more traditional approach and am not a fan of systems that solely rely on downloading position data every millisecond for calculating velocity and acceleration. I believe that it is essential for motion controllers and drives to receive accurate and consistent position feedback with time stamping. While mathematically these methods may seem similar, the devil lies in the implementation details.

In my opinion, it would be more efficient for the master to download jerk values every millisecond instead. By integrating the jerk, the drive can accurately generate target acceleration, velocity, and positions. This approach allows for better control and precision in motion control systems.

Additionally, I believe that Ethercat has the capability to handle larger packets of data compared to CAN Open, allowing for more information to be transmitted efficiently. Stay updated on industry trends and technologies to ensure optimal performance in motion control systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CSP stands for Cyclic Synchronous Positioning. Best regards, Patrick.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zensequitur</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are debating whether to use CSV instead of CSP due to newer card and software defaults, think twice. CSV is unreliable and has limited functionality. Stick with CSP for seamless performance. Set your cards to CSP, compile, download, activate, and repeat the process if needed. Ensure everything is correctly configured to CSP to avoid confusion and frustration. During communication cycles from the controller PLC to the servo controller card, the controller card autonomously manages operations to update rapidly while the controller is idle for a set period. During this interim, the controller card regulates velocity (CSV), position (CSP), or torque (CST). In my experience of configuring numerous servo motors on various machines over a decade, sticking with CSP is the way to go. Deviating from CSP led to unexpected issues and confusion. Remember that various tuning parameters may be disregarded based on the selected mode. Stick with CSP unless you have strong reasons not to. Choosing CSP typically results in smoother operation and fewer complications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HTFU</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the advantages of using Beckhoff position control systems with Ethercat and CSP profile?</h4>
<p class='text-muted'><strong>Answer:</strong> - The advantages include sending position data to the drive each cycle, allowing for data interpolation to generate a velocity signal efficiently.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the advantages of using Siemens position control systems with Profinet and DSC technology?</h4>
<p class='text-muted'><strong>Answer:</strong> - The advantages include sending a velocity signal to the drive for precontrol and a position error for position control within the drive, providing precise control capabilities.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the notable differences between Beckhoff and Siemens position control systems in terms of data transmission and control methods?</h4>
<p class='text-muted'><strong>Answer:</strong> - Beckhoff systems utilize the CSP profile to send position data for velocity signal generation, while Siemens systems employ Profinet and DSC technology to send velocity signals for precontrol and position errors for precise control.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can you elaborate on the disadvantages of using Beckhoff position control systems compared to Siemens systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - The disadvantages of Beckhoff systems may include limitations in control precision and complexity when compared to Siemens systems that offer enhanced control capabilities with DSC technology.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How do the Beckhoff and Siemens position control systems differ in their approach to interpolating data for velocity signal generation?</h4>
<p class='text-muted'><strong>Answer:</strong> - Beckhoff systems send position data to the drive for interpolation, while Siemens systems send a velocity signal for precontrol and a position error for precise control within the drive.</p>
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
