
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently updated our plants WindowMaker application and encountered difficulties when trying to deploy the changes to the live runtime. While attempting to deploy the main Galaxy_ViewEng along with two terminal ViewEngs from the deployment window, a message stating Changes made to runtime, restart application required popped up on">
    <meta name="keywords" content="troubleshooting deployment, hmi changes, archestra ide, windowmaker application, galaxy_vieweng, terminal viewengs, runtime changes, restart application, live hmi, deploy changes, graphics deployment, archestra ide tips, deployment">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-deployment-issues-for-hmi-changes-using-archestra-ide">
    <title>Troubleshooting Deployment Issues for HMI Changes Using Archestra IDE | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Deployment Issues for HMI Changes Using Archestra IDE | Oxmaint Community">
    <meta property="og:description" content="I recently updated our plants WindowMaker application and encountered difficulties when trying to deploy the changes to the live runtime. While attempting to deploy the main Galaxy_ViewEng along with two terminal ViewEngs from the deployment window, a message stating Changes made to runtime, restart application required popped up on">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-deployment-issues-for-hmi-changes-using-archestra-ide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Deployment Issues for HMI Changes Using Archestra IDE | Oxmaint Community">
    <meta name="twitter:description" content="I recently updated our plants WindowMaker application and encountered difficulties when trying to deploy the changes to the live runtime. While attempting to deploy the main Galaxy_ViewEng along with two terminal ViewEngs from the deployment window, a message stating Changes made to runtime, restart application required popped up on">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-deployment-issues-for-hmi-changes-using-archestra-ide"
      },
      "headline": "Troubleshooting Deployment Issues for HMI Changes Using Archestra IDE",
      "description": "I recently updated our plants WindowMaker application and encountered difficulties when trying to deploy the changes to the live runtime. While attempting to deploy the main Galaxy_ViewEng along with two terminal ViewEngs from the deployment window, a message stating Changes made to runtime, restart application required popped up on",
      "author": {
        "@type": "Person",
        "name": "TheColt46"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-16",
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
                <h1 class="text-white">Troubleshooting Deployment Issues for HMI Changes Using Archestra IDE</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheColt46</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">288</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">47</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently updated our plants' WindowMaker application and encountered difficulties when trying to deploy the changes to the live runtime. While attempting to deploy the main Galaxy_ViewEng along with two terminal ViewEngs from the deployment window, a message stating "Changes made to runtime, restart application required" popped up on the live HMI. However, the new graphics were not pushed after this notification. Any suggestions on effectively deploying changes via the Archestra IDE would be highly welcomed.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Just a quick heads up, this is indeed a managed application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheColt46</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your website's performance, it is essential to redeploy the template generated by $IntouchViewApp instead of $ViewEngine. Unless you are utilizing OMI, evident from your mention of WindowMaker, in which case you should be using the template from $ViewApp. This step will ensure a smoother user experience and better search engine visibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm glad that solution worked! Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheColt46</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I resolve deployment issues for HMI changes using Archestra IDE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve deployment issues, ensure that the changes are properly saved and synchronized within the Archestra IDE before attempting to deploy. Additionally, consider restarting the application after receiving the notification to ensure that the new graphics are pushed successfully.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if changes made in WindowMaker are not reflecting in the live runtime?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If changes made in WindowMaker are not reflecting in the live runtime, try restarting the application as prompted by the message "Changes made to runtime, restart application required." This step can help in pushing the new graphics effectively.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I effectively deploy the main Galaxy_ViewEng and terminal ViewEngs in Archestra IDE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To effectively deploy the main Galaxy_ViewEng and terminal ViewEngs, ensure that all necessary changes are saved and synchronized in the Archestra IDE before initiating the deployment process. Restart the application if prompted to do so for the changes to take effect in the live HMI.</p>
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
