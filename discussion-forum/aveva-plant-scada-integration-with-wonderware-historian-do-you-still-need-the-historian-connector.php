
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, we are in the process of configuring an Aveva Plant SCADA node to link it with a Wonderware Historian node. I have been researching online and it seems that the Citect SCADA Wonderware Historian Connector is required to facilitate data storage from a Citect node to a Historian">
    <meta name="keywords" content="aveva plant scada, wonderware historian, historian connector, citect scada, aveva family, scada integration, data storage, node configuration, compatibility, aveva wonderware integration, scada node, citect integration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/aveva-plant-scada-integration-with-wonderware-historian-do-you-still-need-the-historian-connector">
    <title>Aveva Plant SCADA Integration with Wonderware Historian: Do You Still Need the Historian Connector? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Aveva Plant SCADA Integration with Wonderware Historian: Do You Still Need the Historian Connector? | Oxmaint Community">
    <meta property="og:description" content="Hello, we are in the process of configuring an Aveva Plant SCADA node to link it with a Wonderware Historian node. I have been researching online and it seems that the Citect SCADA Wonderware Historian Connector is required to facilitate data storage from a Citect node to a Historian">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/aveva-plant-scada-integration-with-wonderware-historian-do-you-still-need-the-historian-connector">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Aveva Plant SCADA Integration with Wonderware Historian: Do You Still Need the Historian Connector? | Oxmaint Community">
    <meta name="twitter:description" content="Hello, we are in the process of configuring an Aveva Plant SCADA node to link it with a Wonderware Historian node. I have been researching online and it seems that the Citect SCADA Wonderware Historian Connector is required to facilitate data storage from a Citect node to a Historian">
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
        "@id": "https://community.oxmaint.com/discussion-forum/aveva-plant-scada-integration-with-wonderware-historian-do-you-still-need-the-historian-connector"
      },
      "headline": "Aveva Plant SCADA Integration with Wonderware Historian: Do You Still Need the Historian Connector?",
      "description": "Hello, we are in the process of configuring an Aveva Plant SCADA node to link it with a Wonderware Historian node. I have been researching online and it seems that the Citect SCADA Wonderware Historian Connector is required to facilitate data storage from a Citect node to a Historian",
      "author": {
        "@type": "Person",
        "name": "halberta"
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
                <h1 class="text-white">Aveva Plant SCADA Integration with Wonderware Historian: Do You Still Need the Historian Connector?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>halberta</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">401</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">89</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, we are in the process of configuring an Aveva Plant SCADA node to link it with a Wonderware Historian node. I have been researching online and it seems that the Citect SCADA Wonderware Historian Connector is required to facilitate data storage from a Citect node to a Historian node. However, now that Citect SCADA is part of the Aveva family, I am unsure if the Historian Connector is still necessary or if it is compatible with this setup. Any insights would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Citect SCADA Wonderware Historian Connector offers a more efficient way to set up the Historian compared to manual configuration. However, one drawback is that if the Plant SCADA system goes offline, so does the Historian data. An alternative approach is to connect the IO device directly to the Historian using an IOServer to OPC protocol converter or software gateway. This eliminates the dependency on the SCADA system for data transmission.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chiefski</span></li>
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
<h4 class='text-dark'>FAQ: 1. Do I still need the Historian Connector for integrating Aveva Plant SCADA with Wonderware Historian since Citect SCADA is now part of the Aveva family?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the Historian Connector was traditionally required for linking Citect SCADA with Wonderware Historian, with Citect now being part of the Aveva family, it's worth exploring if the Connector is still necessary or compatible with this setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is the integration process different now that Citect SCADA is part of the Aveva family?</h4>
<p class='text-muted'><strong>Answer:</strong> - The integration process may have changed with the acquisition of Citect by Aveva. It's recommended to check for any updated procedures or compatibility considerations in integrating Aveva Plant SCADA with Wonderware Historian.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any new features or tools available for data storage and integration between Aveva Plant SCADA and Wonderware Historian post the merger with Citect?</h4>
<p class='text-muted'><strong>Answer:</strong> - Following the merger of Citect with Aveva, there might be new features or tools available for data storage and integration between Aveva Plant SCADA and Wonderware Historian. It's advisable to explore any advancements that could streamline the integration process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are the best practices for configuring Aveva Plant SCADA to effectively link with Wonderware Historian without the Historian Connector?</h4>
<p class='text-muted'><strong>Answer:</strong> - In case the Historian Connector is no longer required, it's important to understand the best practices for configuring Aveva</p>
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
