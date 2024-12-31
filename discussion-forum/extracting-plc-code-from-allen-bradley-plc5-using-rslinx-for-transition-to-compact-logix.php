
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are in the process of gradually upgrading control panels at a clients site, with the majority being controlled by PLC5. Our goal is to replace these PLCs with Compact Logix. However, we do not have a copy of RSLogix 5 at the moment. Is it feasible to extract">
    <meta name="keywords" content="plc5, allen bradley, rslinx, rslogix 5, compact logix, control panel upgrade, plc code extraction, transition process, rslinx gateway, plc5 processor, code conversion, guidance, control panel migration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/extracting-plc-code-from-allen-bradley-plc5-using-rslinx-for-transition-to-compact-logix">
    <title>Extracting PLC code from Allen Bradley PLC5 using RSlinx for transition to Compact Logix | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Extracting PLC code from Allen Bradley PLC5 using RSlinx for transition to Compact Logix | Oxmaint Community">
    <meta property="og:description" content="We are in the process of gradually upgrading control panels at a clients site, with the majority being controlled by PLC5. Our goal is to replace these PLCs with Compact Logix. However, we do not have a copy of RSLogix 5 at the moment. Is it feasible to extract">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/extracting-plc-code-from-allen-bradley-plc5-using-rslinx-for-transition-to-compact-logix">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Extracting PLC code from Allen Bradley PLC5 using RSlinx for transition to Compact Logix | Oxmaint Community">
    <meta name="twitter:description" content="We are in the process of gradually upgrading control panels at a clients site, with the majority being controlled by PLC5. Our goal is to replace these PLCs with Compact Logix. However, we do not have a copy of RSLogix 5 at the moment. Is it feasible to extract">
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
        "@id": "https://community.oxmaint.com/discussion-forum/extracting-plc-code-from-allen-bradley-plc5-using-rslinx-for-transition-to-compact-logix"
      },
      "headline": "Extracting PLC code from Allen Bradley PLC5 using RSlinx for transition to Compact Logix",
      "description": "We are in the process of gradually upgrading control panels at a clients site, with the majority being controlled by PLC5. Our goal is to replace these PLCs with Compact Logix. However, we do not have a copy of RSLogix 5 at the moment. Is it feasible to extract",
      "author": {
        "@type": "Person",
        "name": "PBC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Extracting PLC code from Allen Bradley PLC5 using RSlinx for transition to Compact Logix</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PBC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">248</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">376</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We are in the process of gradually upgrading control panels at a client's site, with the majority being controlled by PLC5. Our goal is to replace these PLCs with Compact Logix. However, we do not have a copy of RSLogix 5 at the moment. Is it feasible to extract the PLC code from a PLC5 processor using the RSlinx gateway for conversion to Compact Logix? Any guidance on how to proceed with this transition would be highly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When purchasing Compact Logix components, make sure to seek assistance from the distributor on retrieving the program from the PLC5. It's important to note that while conversion tools exist, they may not always produce a perfect conversion from PLC5 logic to Compact Logix. It's recommended to explore the new platform's additional features and options that were not available during the PLC5's prime.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey mentioned that the distributor you are buying the Compact Logix components from should be able to assist you in extracting the program from the PLC5. It is important to note that while conversion tools exist, they may not provide a perfect solution and it may not always be ideal to directly convert PLC5 logic to Compact Logix. The newer platform may offer features that were not previously available during the PLC5's prime. Thank you for your response, Steve. We have encountered the limitations of the conversion tool and its reliability has been questionable at times.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PBC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In every job of this type, the distributor provides a 30-day PLC 5 license. Additionally, you have the option to download and run a new version of RSLogix5 for a 7-day trial period.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having limited PLC-5 software can pose a challenge for successfully migrating applications. Deep application knowledge or runtime observations of existing logic and processes are essential for phased and staged migrations. RSLinx does not upload automatically; RSLogix 5 is required for the upload process or hiring someone with the software. Consider utilizing Rockwell Automation's field service group or distributor for assistance with accessing necessary tools.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Furthermore, when uploading a PLC-5, there is a lack of "ANY" comments being provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can we extract PLC code from an Allen Bradley PLC5 using RSlinx for transition to Compact Logix without RSLogix 5?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to extract the PLC code from a PLC5 processor using the RSlinx gateway even without RSLogix 5.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the recommended approach for transitioning from PLC5 to Compact Logix?</h4>
<p class='text-muted'><strong>Answer:</strong> - The recommended approach would involve extracting the PLC code from PLC5 using RSlinx and then converting it for use with Compact Logix.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How important is it to have a copy of RSLogix 5 for this transition?</h4>
<p class='text-muted'><strong>Answer:</strong> - While having RSLogix 5 would be ideal, it is not a strict requirement as the PLC code extraction can be done using RSlinx.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific steps or considerations to keep in mind during the transition process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, during the transition process, it is important to ensure compatibility between the extracted PLC code and the Compact Logix system. Testing and verification are also crucial steps in ensuring a successful transition.</p>
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
