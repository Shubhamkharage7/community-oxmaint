
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="During application verification, a warning code 8402 may appear indicating insufficient power usage at 105.43% of the total system power supplied. This warning, located in Rack 0, Slot 0, could potentially cause system startup issues. If the system fails to start normally, there may be intermittent problems that require">
    <meta name="keywords" content="ge 90-30 troubleshooting, power warning code 8402, insufficient power usage, system startup issues, plc interaction, proficy process, ge 90-">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-90-30-power-warning-code-8402-insufficient-power-usage-issue-detected">
    <title>Troubleshooting GE 90-30 Power Warning Code 8402: Insufficient Power Usage Issue Detected | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GE 90-30 Power Warning Code 8402: Insufficient Power Usage Issue Detected | Oxmaint Community">
    <meta property="og:description" content="During application verification, a warning code 8402 may appear indicating insufficient power usage at 105.43% of the total system power supplied. This warning, located in Rack 0, Slot 0, could potentially cause system startup issues. If the system fails to start normally, there may be intermittent problems that require">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-90-30-power-warning-code-8402-insufficient-power-usage-issue-detected">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GE 90-30 Power Warning Code 8402: Insufficient Power Usage Issue Detected | Oxmaint Community">
    <meta name="twitter:description" content="During application verification, a warning code 8402 may appear indicating insufficient power usage at 105.43% of the total system power supplied. This warning, located in Rack 0, Slot 0, could potentially cause system startup issues. If the system fails to start normally, there may be intermittent problems that require">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ge-90-30-power-warning-code-8402-insufficient-power-usage-issue-detected"
      },
      "headline": "Troubleshooting GE 90-30 Power Warning Code 8402: Insufficient Power Usage Issue Detected",
      "description": "During application verification, a warning code 8402 may appear indicating insufficient power usage at 105.43% of the total system power supplied. This warning, located in Rack 0, Slot 0, could potentially cause system startup issues. If the system fails to start normally, there may be intermittent problems that require",
      "author": {
        "@type": "Person",
        "name": "juhlik"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-12",
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
                <h1 class="text-white">Troubleshooting GE 90-30 Power Warning Code 8402: Insufficient Power Usage Issue Detected</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>juhlik</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2687</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">378</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>During application verification, a warning code 8402 may appear indicating insufficient power usage at 105.43% of the total system power supplied. This warning, located in Rack 0, Slot 0, could potentially cause system startup issues. If the system fails to start normally, there may be intermittent problems that require online interaction with the Programmable Logic Controller (PLC) and starting the process from Proficy. Any insights or solutions to resolve this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If your I/O module selection is causing the power supply to exceed its capacity, consider upgrading to a higher capacity power supply or redistributing modules to different baseplates. Occasionally, you may experience issues with the process not starting smoothly until you go online with the PLC and initiate it through Proficy. The software uses a conservative algorithm to estimate power consumption, so there may be instances where you can get by with the current module configuration. This could be the reason behind the intermittent issues. Additionally, review the PLC's fault tables for any indications of what might be causing it to stop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Building upon Steve's insightful analysis, I would like to share one of my own experiences. When utilizing relay output modules, it is important to note that the coils for the relays on these modules consume more power compared to solid-state output modules. This factor becomes particularly significant if your application involves having most of the outputs activated simultaneously. However, for scenarios where only a few outputs are active at a time - such as in a central vacuum system where only one valve is open at any given moment - the power consumption may not be a major concern. It is crucial to conduct a thorough evaluation of your system to determine the best course of action. Despite being slightly over the recommended power threshold by just 5%, there is potential for optimization in your setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paul B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>juhlik mentioned encountering a warning (8402: Insufficient power) while verifying their application. The warning indicated that the system was using 105.43% of the total system power supplied. Juhlik expressed concerns about this warning potentially causing issues with the system's normal startup process, leading to intermittent problems that require manual intervention with the PLC and Proficy to start the process.Thank you in advance for any insights provided. More details about your hardware configuration could help in providing further assistance. If your CPU has built-in Ethernet, low power might be the root cause of the intermittent startup issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am transitioning from a GB controller to a PNS controller for an IO system. The system consists of 5 632 relays, 2 940 relays, and 1 650 relay. One of the 940 relays is not in use. It is possible for 2 to 4 of the other 940 relays to be activated simultaneously. Currently, with both 940 relays activated, I am at 168% capacity. If I deactivate one 940 relay, the capacity drops to 136%. The same 2 to 4 relays may be activated concurrently. Is this acceptable? The PNS controller consumes 1.1 Amps, which may be a concern.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CMC_1320</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Boost your device's performance with a more powerful power supply.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey recommends upgrading to a higher capacity power supply for optimal performance. Currently, only one power supply is offered for the VersaMax rack. However, the power booster base allows for the addition of another power supply. Have you tried using the IC200PWB001 with an additional power supply? Share your experience with this hardware configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CMC_1320</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully upgraded systems multiple times in the past. One notable instance was when I transitioned from a 90-30/Genius system to Rx3i/Profinet a few years ago. I was impressed by how smoothly the upgrade process went and I experienced no delays during a planned shutdown. The transition was seamless and I was able to avoid being a bottleneck in the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey confirmed that he has successfully upgraded a redundant system from 90-30/Genius to Rx3i/Profinet multiple times, stating that it works as advertised. The transition was done during a planned shutdown and he was pleasantly surprised at how smooth the process turned out. He never experienced any delays or issues, and is now proceeding with ordering more of the products. He will update on the progress soon.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CMC_1320</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What does warning code 8402 in a GE 90-30 system indicate?
- Warning code 8402 indicates insufficient power usage at 105.43% of the total system power supplied.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Where is the warning code 8402 typically located in the system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The warning code 8402 is typically located in Rack 0, Slot 0 of the GE 90-30 system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can insufficient power usage affect system startup in a GE 90-30 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Insufficient power usage, indicated by warning code 8402, can potentially cause system startup issues and lead to intermittent problems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps can be taken to resolve the issue of insufficient power usage in a GE 90-30 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the system fails to start normally due to insufficient power usage, online interaction with the Programmable Logic Controller (PLC) and starting the process from Proficy may help resolve the issue.</p>
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
