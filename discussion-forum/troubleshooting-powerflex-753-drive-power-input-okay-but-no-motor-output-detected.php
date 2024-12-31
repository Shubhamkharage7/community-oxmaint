
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Have you encountered a PowerFlex 753 drive that is receiving power but not providing output to the motor, without displaying any fault codes? The Human Interface Module (HIM) indicates that it is running at the correct speed and all systems are functioning properly.">
    <meta name="keywords" content="powerflex 753 troubleshooting, powerflex 753 drive issues, powerflex 753 motor output problem, powerflex 753 drive troubleshooting guide, powerflex 753 drive fault codes, power">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex-753-drive-power-input-okay-but-no-motor-output-detected">
    <title>Troubleshooting PowerFlex 753 Drive: Power Input Okay but No Motor Output Detected | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PowerFlex 753 Drive: Power Input Okay but No Motor Output Detected | Oxmaint Community">
    <meta property="og:description" content="Have you encountered a PowerFlex 753 drive that is receiving power but not providing output to the motor, without displaying any fault codes? The Human Interface Module (HIM) indicates that it is running at the correct speed and all systems are functioning properly.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex-753-drive-power-input-okay-but-no-motor-output-detected">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PowerFlex 753 Drive: Power Input Okay but No Motor Output Detected | Oxmaint Community">
    <meta name="twitter:description" content="Have you encountered a PowerFlex 753 drive that is receiving power but not providing output to the motor, without displaying any fault codes? The Human Interface Module (HIM) indicates that it is running at the correct speed and all systems are functioning properly.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex-753-drive-power-input-okay-but-no-motor-output-detected"
      },
      "headline": "Troubleshooting PowerFlex 753 Drive: Power Input Okay but No Motor Output Detected",
      "description": "Have you encountered a PowerFlex 753 drive that is receiving power but not providing output to the motor, without displaying any fault codes? The Human Interface Module (HIM) indicates that it is running at the correct speed and all systems are functioning properly.",
      "author": {
        "@type": "Person",
        "name": "fgoodsky"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-28",
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
                <h1 class="text-white">Troubleshooting PowerFlex 753 Drive: Power Input Okay but No Motor Output Detected</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>fgoodsky</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2068</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">460</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Have you encountered a PowerFlex 753 drive that is receiving power but not providing output to the motor, without displaying any fault codes? The Human Interface Module (HIM) indicates that it is running at the correct speed and all systems are functioning properly.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the device instructed to operate at a speed of zero? And where is it configured to receive instructions for its operation and speed settings?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The device was instructed to operate at 60 hz, however, no voltage was being delivered to the motor. After consulting with RA, it was revealed that the IGBT had malfunctioned, causing the VFD to operate under the assumption that everything was functioning properly. Therefore, it is necessary to replace the entire unit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>fgoodsky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a problem with my PF 753 drive where it had 640VAC in and "310VAC Out" but no actual voltage output. I suspected an IGBT issue, so I replaced the VFD. Upon dismantling the old VFD, I found the IGBT in pieces with burn marks. I ordered a new IGBT in an attempt to salvage the VFD, but even after installation, there was still no output voltage. This leads me to believe that the IGBT may not have been the only issue. When I commanded the motor to stop, the VFD decelerated to 0 Hz. However, when I tried to start it again, there was a sudden loss of power and a sound resembling a gunshot. I will reassess the situation when the maintenance lead returns from vacation, but I suspect I may have wasted several hundred dollars.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>erikdburkett</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A 640VAC input translates to a 904VDC bus, which likely caused the transistors to fry.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jraef</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are 753s available that are capable of supporting input power up to 600VAC and 690VAC. It is hoped that this is the case.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for bringing up this topic late, but I am experiencing a similar issue with my VFD AB PF753. I have replaced the blown IGBT, but I am still encountering an under-voltage fault when I connect the motor to the output. Have the problems with your VFDs been fixed, @fgoodsky and @erikdburkettdid?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Syed Kazmi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Syed Kazmi mentioned that it may be a bit late to bring up, but he apologizes and wants to discuss an issue with the VFD AB PF753. Despite changing the blown IGBT, he is still experiencing an under-voltage fault when the motor is put on output. To @fgoodsky and @erikdburkett, did your VFD problems get fixed? It seems that a solution was found by purchasing a new 753 unit and disposing of the old one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>erikdburkett</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When jraef mentioned a 640VAC input, it raised concerns about the high 904VDC bus causing the transistors to fry. Could this be a typo for "460VAC"? Explore more to find out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be the possible reasons for a PowerFlex 753 drive to have power input but no motor output without showing any fault codes?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There could be various reasons for this issue, such as internal drive faults, incorrect parameter settings, motor issues, or external factors affecting the drive's operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can one troubleshoot a PowerFlex 753 drive that is not sending output to the motor despite receiving power?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps may include checking parameter settings, inspecting motor connections, verifying wiring integrity, testing with a different motor, and consulting the drive's documentation for further guidance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it common for a PowerFlex 753 drive to indicate correct speed on the Human Interface Module (HIM) while not providing motor output?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is unusual for the HIM to display correct speed while the drive is not delivering output to the motor. This discrepancy may indicate a specific issue that needs to be investigated further.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are some potential solutions to resolve the issue of a PowerFlex 753 drive having power input but no motor output?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Solutions may involve checking for loose connections, verifying parameter settings, performing a reset on the drive, inspecting the motor for faults, and consulting the user manual or contacting technical support for assistance.</p>
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
