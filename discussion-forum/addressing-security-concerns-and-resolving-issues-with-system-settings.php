
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I would like to inquire about security settings in our system. We are using MP2 (SQL-Server 6 with patch 050319) that was recently migrated by a colleague from an older version. Unfortunately, this migration led to issues with incorrect indexes in some tables. Additionally, security settings were not">
    <meta name="keywords" content="security settings, system settings, resolving security concerns, incorrect indexes, sql server 6, patch 050319, migration issues, sysadmin rights, creating new roles, purchase requests, role limitations, addressing security concerns, resolving system settings">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/addressing-security-concerns-and-resolving-issues-with-system-settings">
    <title>Addressing Security Concerns and Resolving Issues with System Settings | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Addressing Security Concerns and Resolving Issues with System Settings | Oxmaint Community">
    <meta property="og:description" content="Hello, I would like to inquire about security settings in our system. We are using MP2 (SQL-Server 6 with patch 050319) that was recently migrated by a colleague from an older version. Unfortunately, this migration led to issues with incorrect indexes in some tables. Additionally, security settings were not">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/addressing-security-concerns-and-resolving-issues-with-system-settings">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Addressing Security Concerns and Resolving Issues with System Settings | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I would like to inquire about security settings in our system. We are using MP2 (SQL-Server 6 with patch 050319) that was recently migrated by a colleague from an older version. Unfortunately, this migration led to issues with incorrect indexes in some tables. Additionally, security settings were not">
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
        "@id": "https://community.oxmaint.com/discussion-forum/addressing-security-concerns-and-resolving-issues-with-system-settings"
      },
      "headline": "Addressing Security Concerns and Resolving Issues with System Settings",
      "description": "Hello, I would like to inquire about security settings in our system. We are using MP2 (SQL-Server 6 with patch 050319) that was recently migrated by a colleague from an older version. Unfortunately, this migration led to issues with incorrect indexes in some tables. Additionally, security settings were not",
      "author": {
        "@type": "Person",
        "name": "L.B. Weber"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-27",
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
                <h1 class="text-white">Addressing Security Concerns and Resolving Issues with System Settings</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>L.B. Weber</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3730</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">131</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I would like to inquire about security settings in our system. We are using MP2 (SQL-Server 6 with patch 050319) that was recently migrated by a colleague from an older version. Unfortunately, this migration led to issues with incorrect indexes in some tables. Additionally, security settings were not properly configured, resulting in almost everyone having sysadmin rights. I attempted to create new roles but encountered a major issue - non-sysadmins are unable to create purchase requests, even when the new role has no limitations. How should I address this security concern and resolve the issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Assign the responsibility for creating purchase requests to each designated role.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Isaiah Gomez</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Josh, it seems like a good idea. However, from what I gather about MP2's security settings, creating a new role gives them almost all the same privileges as a sysadmin. My understanding is that I can restrict certain features in the security settings to limit their permissions. Am I mistaken in this assumption? How can I enhance the security of a role?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jack Parker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have recently updated to the latest version, you may have noticed changes in the security model tables and internal references. This may result in issues with the MP2 GUI. If you require assistance with the updated security tables, feel free to reach out to me at stuart.kiddle@gmail.com. The 6.0 update introduced significant changes to security, particularly with the introduction of multi-site functionality. If you are facing challenges with this, I am located in the UK and willing to assist. Feel free to send me a sanitized database for a review. Formerly worked with ex Datastream MP2 technical issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mia Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Maintiger! If you need further assistance with setting up security, feel free to reach out. I can provide documentation and walk you through the process via phone call. Don't hesitate to contact me at jennifer.ohl@midwestsoft.com for help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Andrew Clark</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the common security concerns when migrating to a new system version?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common security concerns during a system migration include incorrect indexes in tables, misconfigured security settings, and granting excessive permissions to users.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I address security issues related to incorrect indexes in tables after a system migration?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve issues with incorrect indexes in tables after a migration, it is recommended to conduct a thorough review of the database structure and update indexes as needed to ensure optimal performance and data integrity.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I fix the problem of non-sysadmins being unable to create purchase requests despite having a new role with no limitations?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the issue of non-sysadmins being unable to create purchase requests, you may need to review the specific permissions and access controls assigned to the new role, ensuring that the necessary privileges are granted to perform the required tasks. It could also involve revisiting the role configuration and possibly adjusting permissions accordingly.</p>
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
