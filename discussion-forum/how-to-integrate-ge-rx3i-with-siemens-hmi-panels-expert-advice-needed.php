
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a question for the group members regarding integrating GE equipment into a Siemens-standardized building. While the typical progression for a 90-30 system is to upgrade to an Rx3i, the business does not own GE software like Ignition, Wonderware, or Proface. This has led me to consider creating">
    <meta name="keywords" content="ge rx3i, siemens hmi panels, integration, expert advice, 90-30 system, modbus tcp/ip, profinet gateway, emerson rx3i racks, siemens simatic comfort, unified, tp1200, custom packet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-integrate-ge-rx3i-with-siemens-hmi-panels-expert-advice-needed">
    <title>How to Integrate GE Rx3i with Siemens HMI Panels - Expert Advice Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Integrate GE Rx3i with Siemens HMI Panels - Expert Advice Needed | Oxmaint Community">
    <meta property="og:description" content="I have a question for the group members regarding integrating GE equipment into a Siemens-standardized building. While the typical progression for a 90-30 system is to upgrade to an Rx3i, the business does not own GE software like Ignition, Wonderware, or Proface. This has led me to consider creating">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-integrate-ge-rx3i-with-siemens-hmi-panels-expert-advice-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Integrate GE Rx3i with Siemens HMI Panels - Expert Advice Needed | Oxmaint Community">
    <meta name="twitter:description" content="I have a question for the group members regarding integrating GE equipment into a Siemens-standardized building. While the typical progression for a 90-30 system is to upgrade to an Rx3i, the business does not own GE software like Ignition, Wonderware, or Proface. This has led me to consider creating">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-integrate-ge-rx3i-with-siemens-hmi-panels-expert-advice-needed"
      },
      "headline": "How to Integrate GE Rx3i with Siemens HMI Panels - Expert Advice Needed",
      "description": "I have a question for the group members regarding integrating GE equipment into a Siemens-standardized building. While the typical progression for a 90-30 system is to upgrade to an Rx3i, the business does not own GE software like Ignition, Wonderware, or Proface. This has led me to consider creating",
      "author": {
        "@type": "Person",
        "name": "ZestyMozzarella"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">How to Integrate GE Rx3i with Siemens HMI Panels - Expert Advice Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ZestyMozzarella</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">179</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">373</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a question for the group members regarding integrating GE equipment into a Siemens-standardized building. While the typical progression for a 90-30 system is to upgrade to an Rx3i, the business does not own GE software like Ignition, Wonderware, or Proface. This has led me to consider creating an HMI project in Siemens, utilizing the Modbus TCP/IP and Profinet gateway modules of Emerson Rx3i racks. I am wondering if it is possible to connect a Siemens Simatic Comfort, Unified, or TP1200 with another PLC brand through custom packet TCP/IP drivers, OPC UA, or similar methods. I have WinCC Advanced software available, but I am seeking advice from the community on whether this would be a viable solution. Any insights or recommendations would be appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully integrated Ignition with a GE/Emerson Cimplicity collector using OPC UA with ease. The old Cimplicity system had to be maintained for the operator screens. Ultimately, the key factor is whether the software is able to establish a connection with OPC UA.opc ua integration with ge/emerson cimplicity collector successful. It was a smooth process. The old Cimplicity system had to be kept for operator screens. The crucial point is if the software can connect to opc ua.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KenWiegers</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. Can a Siemens HMI panel be integrated with a GE Rx3i PLC using custom packet TCP/IP drivers, OPC UA, or similar methods?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to connect a Siemens Simatic Comfort, Unified, or TP1200 with another PLC brand like GE Rx3i through custom packet TCP/IP drivers, OPC UA, or similar methods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it necessary to have GE software like Ignition, Wonderware, or Proface to integrate GE equipment into a Siemens-standardized building?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, having GE software is not a necessity. You can utilize the Modbus TCP/IP and Profinet gateway modules of Emerson Rx3i racks for integration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What software is recommended for creating an HMI project in Siemens for integrating GE equipment?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is mentioned that WinCC Advanced software is available, which can be used for creating an HMI project in Siemens for this integration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific considerations or challenges to be aware of when integrating GE Rx3i with Siemens HMI panels?</h4>
<p class='text-muted'><strong>Answer:</strong> - While integrating GE Rx3i with Siemens HMI panels, consider factors like communication protocols, compatibility of hardware and software, and the need for custom drivers or protocols to ensure successful integration.</p>
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
