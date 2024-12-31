
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am experienced in working with Allen Bradley systems and recently encountered an issue while using Factory Talk View Machine Edition. Despite my experience, I have never been asked to create users via the runtime before. I added buttons on the HMI for adding user and adding/removing users">
    <meta name="keywords" content="allen bradley, hmi, factory talk view machine edition, user creation, troubleshooting, runtime issue, adding user, adding/removing users, groups, new user, basic password, administrators group, login denied error, user permissions, user management, allen">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-hmi-user-creation-in-factory-talk-view-machine-edition">
    <title>Troubleshooting Allen Bradley HMI User Creation in Factory Talk View Machine Edition | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Allen Bradley HMI User Creation in Factory Talk View Machine Edition | Oxmaint Community">
    <meta property="og:description" content="Hello, I am experienced in working with Allen Bradley systems and recently encountered an issue while using Factory Talk View Machine Edition. Despite my experience, I have never been asked to create users via the runtime before. I added buttons on the HMI for adding user and adding/removing users">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-hmi-user-creation-in-factory-talk-view-machine-edition">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Allen Bradley HMI User Creation in Factory Talk View Machine Edition | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am experienced in working with Allen Bradley systems and recently encountered an issue while using Factory Talk View Machine Edition. Despite my experience, I have never been asked to create users via the runtime before. I added buttons on the HMI for adding user and adding/removing users">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-hmi-user-creation-in-factory-talk-view-machine-edition"
      },
      "headline": "Troubleshooting Allen Bradley HMI User Creation in Factory Talk View Machine Edition",
      "description": "Hello, I am experienced in working with Allen Bradley systems and recently encountered an issue while using Factory Talk View Machine Edition. Despite my experience, I have never been asked to create users via the runtime before. I added buttons on the HMI for adding user and adding/removing users",
      "author": {
        "@type": "Person",
        "name": "kevilay"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
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
                <h1 class="text-white">Troubleshooting Allen Bradley HMI User Creation in Factory Talk View Machine Edition</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">185</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">321</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am experienced in working with Allen Bradley systems and recently encountered an issue while using Factory Talk View Machine Edition. Despite my experience, I have never been asked to create users via the runtime before. I added buttons on the HMI for "adding user" and "adding/removing users to groups" in order to create a new user named 2 with a basic password and assign them to the "administrators" group. However, when attempting to log in as user 2, I encountered a login denied error. Can anyone provide insight into why this may be happening? Thank you, Kevin.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The issue has been resolved by granting individual user level access instead of accessing the group as a whole.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I encountering a login denied error when trying to log in as a new user created using Factory Talk View Machine Edition?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The login denied error could be due to various reasons such as incorrect user credentials, user permissions, or group settings. Double-check the user creation process and ensure that the user is added to the correct group with appropriate permissions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I create new users and assign them to specific groups in Factory Talk View Machine Edition?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To create new users and assign them to groups in Factory Talk View Machine Edition, you can typically use the runtime interface to add users, set passwords, and assign them to relevant groups with the necessary access levels. Ensure that you follow the correct steps and configurations to avoid login issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I am familiar with Allen Bradley systems but have not worked on user creation in Factory Talk View Machine Edition before. How can I navigate this process effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are new to user creation in Factory Talk View Machine Edition, refer to the user manual or online resources provided by Rockwell Automation for step-by-step guidance. Additionally, you can seek help from online forums or communities to troubleshoot specific issues you encounter during the user creation process.</p>
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
