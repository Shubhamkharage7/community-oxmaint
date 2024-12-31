
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Just started a new job where the control systems are outdated compared to what Im used to with Allen Bradley and Siemens. Im interested in upgrading a pair of Superior Slo-Syn Drives to kollmorgen akd servo drives, but my boss wants to stick with the existing GE 90-30 IC69APU301">
    <meta name="keywords" content="slo-syn drives, kollmorgen akd servo drives, ge 90-30 plc integration, control systems upgrade, allen bradley, siemens, ic69apu301 plc, drive program, servo drive integration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-upgrade-slo-syn-drives-to-kollmorgen-akd-servo-drives-with-ge-90-30-plc-integration">
    <title>How to Upgrade Slo-Syn Drives to Kollmorgen AKD Servo Drives with GE 90-30 PLC Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Upgrade Slo-Syn Drives to Kollmorgen AKD Servo Drives with GE 90-30 PLC Integration | Oxmaint Community">
    <meta property="og:description" content="Just started a new job where the control systems are outdated compared to what Im used to with Allen Bradley and Siemens. Im interested in upgrading a pair of Superior Slo-Syn Drives to kollmorgen akd servo drives, but my boss wants to stick with the existing GE 90-30 IC69APU301">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-upgrade-slo-syn-drives-to-kollmorgen-akd-servo-drives-with-ge-90-30-plc-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Upgrade Slo-Syn Drives to Kollmorgen AKD Servo Drives with GE 90-30 PLC Integration | Oxmaint Community">
    <meta name="twitter:description" content="Just started a new job where the control systems are outdated compared to what Im used to with Allen Bradley and Siemens. Im interested in upgrading a pair of Superior Slo-Syn Drives to kollmorgen akd servo drives, but my boss wants to stick with the existing GE 90-30 IC69APU301">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-upgrade-slo-syn-drives-to-kollmorgen-akd-servo-drives-with-ge-90-30-plc-integration"
      },
      "headline": "How to Upgrade Slo-Syn Drives to Kollmorgen AKD Servo Drives with GE 90-30 PLC Integration",
      "description": "Just started a new job where the control systems are outdated compared to what Im used to with Allen Bradley and Siemens. Im interested in upgrading a pair of Superior Slo-Syn Drives to kollmorgen akd servo drives, but my boss wants to stick with the existing GE 90-30 IC69APU301",
      "author": {
        "@type": "Person",
        "name": "IHICONN"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">How to Upgrade Slo-Syn Drives to Kollmorgen AKD Servo Drives with GE 90-30 PLC Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>IHICONN</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">255</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">111</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Just started a new job where the control systems are outdated compared to what I'm used to with Allen Bradley and Siemens. I'm interested in upgrading a pair of Superior Slo-Syn Drives to kollmorgen akd servo drives, but my boss wants to stick with the existing GE 90-30 IC69APU301 PLC. I have the manual for the PLC, but I'm having trouble understanding its role in the system. It appears to store the drive program, but I would appreciate an experienced perspective on how to approach programming it to integrate the new servo drives. While the wiring seems straightforward for the swap, I need guidance on transferring the drive program seamlessly.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The module has the ability to both run pre-programmed functions and follow specific commands for movement. It generates a -10 volt to +10 volt DC analog speed reference and interprets signals from an encoder for feedback. To run a pre-programmed function, the PLC activates a specific %Q output bit linked to the APU301 module. For a direct movement command, the PLC sends a command code and relevant data to the %AQ analog output addresses associated with the module. If your company allows, share the PLC program here and I can help identify the logic controlling the current servo operation. If confidentiality is a concern, reach out to me privately for my email address to send the program directly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can I upgrade Slo-Syn drives to Kollmorgen AKD servo drives while keeping the existing GE 90-30 IC69APU301 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to upgrade the drives while retaining the GE 90-30 PLC. The PLC's role includes storing the drive program, and with the right programming, you can integrate the new servo drives into the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I program the GE 90-30 IC69APU301 PLC to work with Kollmorgen AKD servo drives?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To program the PLC for integration with the new servo drives, you may need to refer to the PLC manual and seek guidance from experienced professionals in the field. Understanding the PLC's role in the system and transferring the drive program seamlessly are important steps in this process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the wiring straightforward when upgrading from Slo-Syn drives to Kollmorgen AKD servo drives?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While the wiring for the drive swap may seem straightforward, it is essential to ensure proper connections and compatibility between the drives and the PLC. Seeking guidance on the wiring requirements for the new servo drives can help in ensuring a successful upgrade process.</p>
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
