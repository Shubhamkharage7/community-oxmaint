
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="One of my clients is using FactoryTalk View SE version 11, while my development system is running version 13. After importing their backup file (APB) into my system, their v11 application was automatically upgraded to v13. How can I edit and transfer these changes back to their v11 system?">
    <meta name="keywords" content="factorytalk view se, version 11, version 13, edit changes, transfer changes, backup file, apb, upgrade application, factorytalk view studio, development system, import file, simultaneous versions, application editing, factorytalk view se versions">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-edit-and-transfer-changes-between-factorytalk-view-se-versions-11-and-13">
    <title>How to edit and transfer changes between FactoryTalk View SE versions 11 and 13? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to edit and transfer changes between FactoryTalk View SE versions 11 and 13? | Oxmaint Community">
    <meta property="og:description" content="One of my clients is using FactoryTalk View SE version 11, while my development system is running version 13. After importing their backup file (APB) into my system, their v11 application was automatically upgraded to v13. How can I edit and transfer these changes back to their v11 system?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-edit-and-transfer-changes-between-factorytalk-view-se-versions-11-and-13">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to edit and transfer changes between FactoryTalk View SE versions 11 and 13? | Oxmaint Community">
    <meta name="twitter:description" content="One of my clients is using FactoryTalk View SE version 11, while my development system is running version 13. After importing their backup file (APB) into my system, their v11 application was automatically upgraded to v13. How can I edit and transfer these changes back to their v11 system?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-edit-and-transfer-changes-between-factorytalk-view-se-versions-11-and-13"
      },
      "headline": "How to edit and transfer changes between FactoryTalk View SE versions 11 and 13?",
      "description": "One of my clients is using FactoryTalk View SE version 11, while my development system is running version 13. After importing their backup file (APB) into my system, their v11 application was automatically upgraded to v13. How can I edit and transfer these changes back to their v11 system?",
      "author": {
        "@type": "Person",
        "name": "patjdixon"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-29",
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
                <h1 class="text-white">How to edit and transfer changes between FactoryTalk View SE versions 11 and 13?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>patjdixon</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">136</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">154</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>One of my clients is using FactoryTalk View SE version 11, while my development system is running version 13. After importing their backup file (APB) into my system, their v11 application was automatically upgraded to v13. How can I edit and transfer these changes back to their v11 system? Is it possible to have both version 11 and version 13 of FactoryTalk View Studio on my development system simultaneously?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, there is no way to save an application in View SE for use with an older version. However, this can be done in ME, but not in SE. It is also not possible to install both versions simultaneously. To work around this limitation, I typically utilize a VM with the specific version required. Our team has set up VMware virtual machines for each version.OG</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I edit and transfer changes made in FactoryTalk View SE version 13 back to version 11?
- To transfer changes back to version 11 from version 13, you can export the application from version 13 and import it into version 11. Be mindful of compatibility issues and test thoroughly after the transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to have both FactoryTalk View Studio version 11 and version 13 on the same development system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to have multiple versions of FactoryTalk View Studio installed on the same system. This allows you to work with projects of different versions without conflicts. Just ensure proper project backups and version control to avoid any issues.</p>
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
