
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! Thanks to the guidance provided by Ajit Shinde on our forum, I have successfully installed and configured our RptSvr. I am now able to create new reports, extract data from Oracle, and format it as needed. However, I have encountered an issue when trying to save my">
    <meta name="keywords" content="save customized reports, consumer reports_82 folder, troubleshooting permissions error, rptsvr, oracle data extraction, formatting reports, update permissions error, delete permissions error, webdav functionality, apache web server, error id: cm-req-">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-save-customized-reports-to-consumer-reports-82-folder-troubleshooting-permissions-error">
    <title>How to Save Customized Reports to Consumer Reports_82 Folder - Troubleshooting Permissions Error | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Save Customized Reports to Consumer Reports_82 Folder - Troubleshooting Permissions Error | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! Thanks to the guidance provided by Ajit Shinde on our forum, I have successfully installed and configured our RptSvr. I am now able to create new reports, extract data from Oracle, and format it as needed. However, I have encountered an issue when trying to save my">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-save-customized-reports-to-consumer-reports-82-folder-troubleshooting-permissions-error">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Save Customized Reports to Consumer Reports_82 Folder - Troubleshooting Permissions Error | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! Thanks to the guidance provided by Ajit Shinde on our forum, I have successfully installed and configured our RptSvr. I am now able to create new reports, extract data from Oracle, and format it as needed. However, I have encountered an issue when trying to save my">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-save-customized-reports-to-consumer-reports-82-folder-troubleshooting-permissions-error"
      },
      "headline": "How to Save Customized Reports to Consumer Reports_82 Folder - Troubleshooting Permissions Error",
      "description": "Hello everyone! Thanks to the guidance provided by Ajit Shinde on our forum, I have successfully installed and configured our RptSvr. I am now able to create new reports, extract data from Oracle, and format it as needed. However, I have encountered an issue when trying to save my",
      "author": {
        "@type": "Person",
        "name": "Nguyen Huu Trong"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">How to Save Customized Reports to Consumer Reports_82 Folder - Troubleshooting Permissions Error</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Nguyen Huu Trong</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1507</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">422</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! Thanks to the guidance provided by Ajit Shinde on our forum, I have successfully installed and configured our RptSvr. I am now able to create new reports, extract data from Oracle, and format it as needed. However, I have encountered an issue when trying to save my customized reports to the consumer reports_82 or basic reports_82 folder. An error message stating "You do not have permission to update or delete the object /Public Folders/consumer reports_82 or a related object" with error ID: CM-REQ-4012 is displayed. I have enabled Webdav functionality for my Apache web server by uncommenting two dav lines, but the issue persists. Any assistance on how to resolve this matter would be greatly appreciated. Thank you for your continued support. Best regards, TrongNH</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello trongnh, 

Please note that Infor EAM does not permit the addition or modification of reports in the EAM consumer/basic folder without the purchase of author licenses. 

If you have any questions or would like to discuss this further, please feel free to contact me at ajith.shinde@bwir.com. 

Thank you and best regards, 
Ajit Shinde 
Senior Consultant at www.bwir.com</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Heather Coleman</span></li>
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
<h4 class='text-dark'>FAQ: 1.  I am encountering a permissions error when trying to save customized reports to specific folders in RptSvr. How can I resolve this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> To resolve the permissions error when saving reports to folders like consumer reports_82 or basic reports_82, you may need to check and adjust the permissions settings for those folders in RptSvr. Ensure that your user account has the necessary permissions to update or delete objects within those folders.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I have enabled Webdav functionality for my Apache web server, but the permissions error persists. What else can I do to troubleshoot this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> If enabling Webdav did not resolve the permissions error, you may need to further investigate the permissions settings within the RptSvr system. Check if there are any specific permissions configurations required for saving reports to those particular folders, and make sure your user account is correctly set up with the appropriate permissions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What does the error message "You do not have permission to update or delete the object /Public Folders/consumer reports_82 or a related object" with error ID: CM-REQ-4012 mean in RptSvr?</h4>
<p class='text-muted'><strong>Answer:</strong> The error message indicates that your user account does not have the necessary permissions to modify or delete objects within the specified folders like consumer reports_82. This typically requires adjusting the permissions settings within RptSvr to grant your account</p>
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
