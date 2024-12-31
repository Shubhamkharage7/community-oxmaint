
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I have successfully installed FactoryTalk AssetCentre (FTAC) on a single PC using the Admin account. This PC is accessible by multiple users. However, when I try to launch the FTAC client using a different user account, the application fails to run and errors are displayed in the">
    <meta name="keywords" content="factorytalk assetcentre, ftac v11, client access issue, troubleshooting, multiple user accounts, application error, event viewer, installation problem, admin account, user permissions, pc accessibility, software conflict, technical support, error messages, user">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-assetcentre-client-access-issue-on-multiple-user-accounts">
    <title>Troubleshooting FactoryTalk AssetCentre Client Access Issue on Multiple User Accounts | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FactoryTalk AssetCentre Client Access Issue on Multiple User Accounts | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I have successfully installed FactoryTalk AssetCentre (FTAC) on a single PC using the Admin account. This PC is accessible by multiple users. However, when I try to launch the FTAC client using a different user account, the application fails to run and errors are displayed in the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-assetcentre-client-access-issue-on-multiple-user-accounts">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FactoryTalk AssetCentre Client Access Issue on Multiple User Accounts | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I have successfully installed FactoryTalk AssetCentre (FTAC) on a single PC using the Admin account. This PC is accessible by multiple users. However, when I try to launch the FTAC client using a different user account, the application fails to run and errors are displayed in the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-assetcentre-client-access-issue-on-multiple-user-accounts"
      },
      "headline": "Troubleshooting FactoryTalk AssetCentre Client Access Issue on Multiple User Accounts",
      "description": "Hello everyone! I have successfully installed FactoryTalk AssetCentre (FTAC) on a single PC using the Admin account. This PC is accessible by multiple users. However, when I try to launch the FTAC client using a different user account, the application fails to run and errors are displayed in the",
      "author": {
        "@type": "Person",
        "name": "aliazizi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Troubleshooting FactoryTalk AssetCentre Client Access Issue on Multiple User Accounts</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aliazizi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">214</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">110</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I have successfully installed FactoryTalk AssetCentre (FTAC) on a single PC using the Admin account. This PC is accessible by multiple users. However, when I try to launch the FTAC client using a different user account, the application fails to run and errors are displayed in the event viewer. This issue is with FTAC V11.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings, based on the error displayed in the screenshot, it appears that a gMSA account was utilized during the installation process. To resolve this issue, it is essential to ensure that all other Windows users are included in the FactoryTalk Administrators group within the Admin Console. Additionally, verify that they are not members of any other FactoryTalk groups that could potentially impose limitations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>freckles1029</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is FactoryTalk AssetCentre (FTAC) failing to run when using a different user account on the same PC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue might be related to user account permissions or configurations within FTAC. Ensure that the user account has the necessary permissions to run FTAC and that the application is properly configured for multiple users.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the event viewer errors that occur when trying to access FTAC using a different user account?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot event viewer errors related to FTAC, check the specific error messages in the event logs for more details. You may need to investigate further to identify the root cause of the access issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a specific configuration or setting in FTAC V11 that needs to be adjusted to allow access for multiple user accounts?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It's possible that there are specific settings or configurations in FTAC V11 that need to be adjusted to enable access for multiple user accounts. Review the FTAC documentation or contact Rockwell Automation support for guidance on configuring FTAC for multi-user environments.</p>
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
