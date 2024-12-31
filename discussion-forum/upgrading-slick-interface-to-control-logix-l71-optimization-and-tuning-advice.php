
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have six motors controlled by PID commands, originally programmed in a Slick interface. When the Control Logix with an L71 processor became popular, the program was updated. While timers were upgraded, the PIDs continued to run freely on the main task. The RPI for the feedback (a dancer)">
    <meta name="keywords" content="slick interface upgrade, control logix l71 optimization, pid control tuning tips, control logix pid loop optimization, control logix l71 processor upgrade, pid loop update time adjustment">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upgrading-slick-interface-to-control-logix-l71-optimization-and-tuning-advice">
    <title>Upgrading Slick Interface to Control Logix L71: Optimization and Tuning Advice | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upgrading Slick Interface to Control Logix L71: Optimization and Tuning Advice | Oxmaint Community">
    <meta property="og:description" content="I have six motors controlled by PID commands, originally programmed in a Slick interface. When the Control Logix with an L71 processor became popular, the program was updated. While timers were upgraded, the PIDs continued to run freely on the main task. The RPI for the feedback (a dancer)">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upgrading-slick-interface-to-control-logix-l71-optimization-and-tuning-advice">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upgrading Slick Interface to Control Logix L71: Optimization and Tuning Advice | Oxmaint Community">
    <meta name="twitter:description" content="I have six motors controlled by PID commands, originally programmed in a Slick interface. When the Control Logix with an L71 processor became popular, the program was updated. While timers were upgraded, the PIDs continued to run freely on the main task. The RPI for the feedback (a dancer)">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upgrading-slick-interface-to-control-logix-l71-optimization-and-tuning-advice"
      },
      "headline": "Upgrading Slick Interface to Control Logix L71: Optimization and Tuning Advice",
      "description": "I have six motors controlled by PID commands, originally programmed in a Slick interface. When the Control Logix with an L71 processor became popular, the program was updated. While timers were upgraded, the PIDs continued to run freely on the main task. The RPI for the feedback (a dancer)",
      "author": {
        "@type": "Person",
        "name": "RetiQlum2"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-09",
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
                <h1 class="text-white">Upgrading Slick Interface to Control Logix L71: Optimization and Tuning Advice</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">272</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">112</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have six motors controlled by PID commands, originally programmed in a Slick interface. When the Control Logix with an L71 processor became popular, the program was updated. While timers were upgraded, the PIDs continued to run freely on the main task. The RPI for the feedback (a dancer) is updated every 97 milliseconds. The PID Loop Update Time is set to 100ms, while the L71 program runs at 3ms. 
If I move the PID to a scheduled task at 30ms (1/10 speed) and adjust the Update Time accordingly, should I simply multiply my proportional and integral times by 10, or is there a more intricate relationship involved? Would this be a good starting point for tuning the system? Of course, I will also adjust the sensor update time accordingly. Thank you for your help in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Proportional control operates without a time factor, while integral control should ideally reflect the ratio between the time intervals and real time. This process involves multiple steps, as it not only addresses the initial discrepancy but also adjusts the sampling time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I understand correctly, do I multiply the Integral by ten and keep the proportional value the same?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to achieve optimal system response, it is crucial to consider the sample rate when applying corrections such as P correction. By multiplying the integral by ten and keeping the proportional unchanged, you can ensure stability in your system. However, it is important to choose a sample rate that aligns with the responsiveness of your overall system to prevent any potential instability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your assistance. This is just the beginning, and it's exactly what I was looking for.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few years ago, I encountered a similar situation and conducted thorough bench testing to fully address the question at hand. To delve deeper into this topic, be sure to visit the following thread, especially focusing on post #8.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why was the program updated from a Slick interface to Control Logix with an L71 processor?</h4>
<p class='text-muted'><strong>Answer:</strong> - The program was updated to adapt to the popularity and advancements of the Control Logix with an L71 processor.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the significance of moving the PID to a scheduled task at 30ms and adjusting the Update Time accordingly?</h4>
<p class='text-muted'><strong>Answer:</strong> - Moving the PID to a scheduled task at 30ms can help optimize the performance of the system by better aligning the PID loop update time with the overall program execution time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. When adjusting the PID Loop Update Time to match the scheduled task at 30ms, should the proportional and integral times be simply multiplied by 10?</h4>
<p class='text-muted'><strong>Answer:</strong> - Multiplying the proportional and integral times by 10 may be a good starting point for tuning the system after moving the PID to a scheduled task, but there may be a more intricate relationship involved that should be considered for optimal performance.</p>
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
