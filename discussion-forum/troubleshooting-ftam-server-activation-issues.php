
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is there anyone here with experience managing an activation server? Our plants IT department is responsible for managing our server, which is currently running on version 4.xx. We recently updated our maintenance laptops to Studio 5000 v34, which also updated FTAM to version 5.xx. However, we are now facing">
    <meta name="keywords" content="troubleshooting ftam server, activation server management, it department, maintenance laptops, studio 5000 v34, ftam version xx, activation issues, server update, legacy equipment compatibility, server upgrade, vxx to v5">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ftam-server-activation-issues">
    <title>Troubleshooting FTAM Server Activation Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FTAM Server Activation Issues | Oxmaint Community">
    <meta property="og:description" content="Is there anyone here with experience managing an activation server? Our plants IT department is responsible for managing our server, which is currently running on version 4.xx. We recently updated our maintenance laptops to Studio 5000 v34, which also updated FTAM to version 5.xx. However, we are now facing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ftam-server-activation-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FTAM Server Activation Issues | Oxmaint Community">
    <meta name="twitter:description" content="Is there anyone here with experience managing an activation server? Our plants IT department is responsible for managing our server, which is currently running on version 4.xx. We recently updated our maintenance laptops to Studio 5000 v34, which also updated FTAM to version 5.xx. However, we are now facing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ftam-server-activation-issues"
      },
      "headline": "Troubleshooting FTAM Server Activation Issues",
      "description": "Is there anyone here with experience managing an activation server? Our plants IT department is responsible for managing our server, which is currently running on version 4.xx. We recently updated our maintenance laptops to Studio 5000 v34, which also updated FTAM to version 5.xx. However, we are now facing",
      "author": {
        "@type": "Person",
        "name": "cncsparky"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-05",
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
                <h1 class="text-white">Troubleshooting FTAM Server Activation Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>cncsparky</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">541</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">235</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is there anyone here with experience managing an activation server? Our plant's IT department is responsible for managing our server, which is currently running on version 4.xx. We recently updated our maintenance laptops to Studio 5000 v34, which also updated FTAM to version 5.xx. However, we are now facing activation issues as our laptops are not able to activate using the server. A message indicates that the server needs to be on version 5.00 or higher. Despite the need for an update, our IT department is reluctant to update the server, citing concerns that our plant's 'legacy' equipment may not be compatible with the newer version. In the past, I have successfully had them update the server for the same reason without any issues. I fail to see any potential issues that may arise from upgrading the server from v4.xx to v5.xx. Does anyone have any insights on this matter? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you own multiple activations, it is likely that you have a Rockwell Tech Connect support contract. Contact Tech Connect to inquire about the necessary system requirements for installing v5 of the activation server software. This information may also be available on the Rockwell website. It is important for customers to know the specific system requirements, such as the Windows version needed. Unfortunately, I cannot search for this information at the moment as I do not have access to my laptop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>A_G</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Remove version 5.xx from your workstation and upgrade to the newest release of version 4.xx. This temporary solution will work well until you complete the upgrade of your license server. Additionally, I have never encountered any issues with updating the license server using older software versions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my previous experience, I have encountered challenges with Factorytalk Activation Manager when older versions of the FTAM Client are not able to communicate effectively with the FTAM server due to significant version differences. To resolve this issue, I found it beneficial to update the clients to align with the server version. Fortunately, this upgrade process alleviated most major issues.

I would suggest utilizing Wireshark on the licensing server to track the number of connected clients. This can be done through the Resource Manager or the FTAM settings. By monitoring the IPs connected to the server, you can identify which ones to focus on during the upgrade process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tlf30 recommended uninstalling version 5.xx from the workstation and installing the latest version of 4.xx as a temporary solution until the license server upgrade is complete. He also mentioned that he has not encountered any problems with updating the license server using older software. Thank you for the suggestion, I will attempt a downgrade on one of my laptops using FTAM.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cncsparky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is causing the activation issues between Studio 5000 v34 and the FTAM server running on version 4.xx?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue arises because Studio 5000 v34 requires FTAM server version 5.00 or higher for activation, which is not compatible with the current server version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is the IT department hesitant to update the FTAM server to version 5.xx despite the activation issues?</h4>
<p class='text-muted'><strong>Answer:</strong> The IT department is concerned about the compatibility of the newer version with the plant's 'legacy' equipment, fearing potential issues with the upgrade.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Has updating the FTAM server from v4.xx to v5.xx caused any problems in the past with legacy equipment?</h4>
<p class='text-muted'><strong>Answer:</strong> The individual asking the question has successfully had the server updated in the past without any issues, and fails to see any potential problems that may arise from the upgrade.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any insights or recommendations from others who have faced similar activation issues with FTAM server upgrades?</h4>
<p class='text-muted'><strong>Answer:</strong> Seek advice or experiences from individuals who have encountered similar activation issues when upgrading FTAM servers to newer versions for compatibility with software updates like Studio 5000 v34.</p>
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
