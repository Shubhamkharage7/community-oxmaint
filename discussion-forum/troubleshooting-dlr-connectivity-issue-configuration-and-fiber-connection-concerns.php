
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The physical connection in the attached picture has been established. To resolve connectivity issues with 5094-AENSFPR, we need to configure DLR supervisor at specific locations. Prioritizing the configuration is crucial. Do we also need to connect fiber between the two Etaps? When both single-mode fibers are connected from the">
    <meta name="keywords" content="troubleshooting dlr connectivity issue, configuration concerns, fiber connection, 5094-aensfpr, dlr supervisor, ethernet adapter module, single-mode fiber, controller disqualified state, connectivity problems, network configuration, physical connection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-dlr-connectivity-issue-configuration-and-fiber-connection-concerns">
    <title>Troubleshooting DLR Connectivity Issue: Configuration and Fiber Connection Concerns | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting DLR Connectivity Issue: Configuration and Fiber Connection Concerns | Oxmaint Community">
    <meta property="og:description" content="The physical connection in the attached picture has been established. To resolve connectivity issues with 5094-AENSFPR, we need to configure DLR supervisor at specific locations. Prioritizing the configuration is crucial. Do we also need to connect fiber between the two Etaps? When both single-mode fibers are connected from the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-dlr-connectivity-issue-configuration-and-fiber-connection-concerns">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting DLR Connectivity Issue: Configuration and Fiber Connection Concerns | Oxmaint Community">
    <meta name="twitter:description" content="The physical connection in the attached picture has been established. To resolve connectivity issues with 5094-AENSFPR, we need to configure DLR supervisor at specific locations. Prioritizing the configuration is crucial. Do we also need to connect fiber between the two Etaps? When both single-mode fibers are connected from the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-dlr-connectivity-issue-configuration-and-fiber-connection-concerns"
      },
      "headline": "Troubleshooting DLR Connectivity Issue: Configuration and Fiber Connection Concerns",
      "description": "The physical connection in the attached picture has been established. To resolve connectivity issues with 5094-AENSFPR, we need to configure DLR supervisor at specific locations. Prioritizing the configuration is crucial. Do we also need to connect fiber between the two Etaps? When both single-mode fibers are connected from the",
      "author": {
        "@type": "Person",
        "name": "jilu john"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Troubleshooting DLR Connectivity Issue: Configuration and Fiber Connection Concerns</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jilu john</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">210</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">368</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>The physical connection in the attached picture has been established. To resolve connectivity issues with 5094-AENSFPR, we need to configure DLR supervisor at specific locations. Prioritizing the configuration is crucial. Do we also need to connect fiber between the two Etaps? When both single-mode fibers are connected from the converter to 5094-AENSFPR, the Ethernet Adapter module loses connectivity, causing the controller to enter a Disqualified state.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, there are numerous errors that need to be addressed in your network setup. To begin, it is essential to activate a DLR supervisor, preferably on port 5094, although there are other suitable options available. If using just one supervisor, keep the precedence as it is, but adjustments may be necessary in Beacon parameters for fiber configuration.

Moving on, it is not possible to designate only one EN2TR port for DLR; both ports must be either DLR-compatible or not. Additionally, inserting an unmanaged switch into the DLR is not recommended; instead, opt for an ETAP device. Connecting Device ports of ETAPs as shown in the setup can result in a loop, which should be avoided.

Furthermore, only DLR-rated fiber media converters should be used, with single-mode media compatible with Stratix or 5094 adapters exclusively. Multimode media is supported by ETAP devices. Lastly, the network architecture must prioritize redundancy for reliability. To learn more about these configurations, refer to publications ENET-AT007 and HIGHAV-RM002.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you are not utilizing DLR on EN2TR and are connecting to the ring using Device ports on the ETAP. In this scenario, using an unmanaged switch can create a loop, which is not a recommended setup. It is advised to use another ETAP on the ring instead to avoid this issue. Furthermore, utilizing an "indirect" DLR for redundancy is not recommended according to HIGHAV-RM002. I suggest using EN2TRs within the ring and employing ETAP rather than an unmanaged switch. However, it is important to address the media converter issue that still needs to be resolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to addressing errors in your setup, it's important to start by enabling a DLR supervisor on a specific port, such as 5094. Be sure to adjust Beacon parameters for fiber as needed. Avoid setting only one EN2TR port to DLR and never use an unmanaged switch in a DLR configuration - opt for ETAP instead. Avoid creating loops by connecting Device ports of ETAPs. Utilize DLR-rated fiber media converters, like Stratix or 5094 adapters for single mode media. For multimode media, ETAP is your best bet. Keep in mind that network redundancy is crucial for reliability. Dive into publications ENET-AT007 and HIGHAV-RM002 for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jilu john</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is prioritizing the configuration of the DLR supervisor crucial in resolving connectivity issues with 5094-AENSFPR?</h4>
<p class='text-muted'><strong>Answer:</strong> - Prioritizing the configuration of the DLR supervisor is crucial because it helps ensure that the network is set up correctly and can effectively communicate with the 5094-AENSFPR device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it necessary to connect fiber between the two Etaps to resolve the connectivity issues?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, connecting fiber between the two Etaps is necessary for establishing a proper connection. Without the fiber connection, the Ethernet Adapter module may lose connectivity, leading to issues such as the controller entering a Disqualified state.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What happens when both single-mode fibers are connected from the converter to 5094-AENSFPR?</h4>
<p class='text-muted'><strong>Answer:</strong> - When both single-mode fibers are connected from the converter to 5094-AENSFPR, it can cause the Ethernet Adapter module to lose connectivity, which in turn can lead to the controller entering a Disqualified state.</p>
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
