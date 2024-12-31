
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are currently working on a v20 project utilizing a 1769-L32E controller and are looking to migrate it to a 5380 controller (5069-L320ER) which requires v28 software or later. I have access to v35 software, but as someone new to Logix Designer, I am facing challenges during the conversion">
    <meta name="keywords" content="rslogix 5000, logix designer, rslogix 5000 v20 project, 5380 controller, 1769-l32e controller, 506">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/guide-for-migrating-an-rslogix-5000-v20-project-to-logix-designer-using-a-5380-controller">
    <title>Guide for Migrating an RSLogix 5000 v20 Project to Logix Designer using a 5380 Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Guide for Migrating an RSLogix 5000 v20 Project to Logix Designer using a 5380 Controller | Oxmaint Community">
    <meta property="og:description" content="We are currently working on a v20 project utilizing a 1769-L32E controller and are looking to migrate it to a 5380 controller (5069-L320ER) which requires v28 software or later. I have access to v35 software, but as someone new to Logix Designer, I am facing challenges during the conversion">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/guide-for-migrating-an-rslogix-5000-v20-project-to-logix-designer-using-a-5380-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Guide for Migrating an RSLogix 5000 v20 Project to Logix Designer using a 5380 Controller | Oxmaint Community">
    <meta name="twitter:description" content="We are currently working on a v20 project utilizing a 1769-L32E controller and are looking to migrate it to a 5380 controller (5069-L320ER) which requires v28 software or later. I have access to v35 software, but as someone new to Logix Designer, I am facing challenges during the conversion">
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
        "@id": "https://community.oxmaint.com/discussion-forum/guide-for-migrating-an-rslogix-5000-v20-project-to-logix-designer-using-a-5380-controller"
      },
      "headline": "Guide for Migrating an RSLogix 5000 v20 Project to Logix Designer using a 5380 Controller",
      "description": "We are currently working on a v20 project utilizing a 1769-L32E controller and are looking to migrate it to a 5380 controller (5069-L320ER) which requires v28 software or later. I have access to v35 software, but as someone new to Logix Designer, I am facing challenges during the conversion",
      "author": {
        "@type": "Person",
        "name": "technolog"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">Guide for Migrating an RSLogix 5000 v20 Project to Logix Designer using a 5380 Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">249</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">283</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We are currently working on a v20 project utilizing a 1769-L32E controller and are looking to migrate it to a 5380 controller (5069-L320ER) which requires v28 software or later. I have access to v35 software, but as someone new to Logix Designer, I am facing challenges during the conversion process. When attempting to open the v20 project in Logix Designer, it automatically opens in RSLogix 5000. Can anyone provide guidance on this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon posting, I quickly tested changing the controller in RSLogix 5000 and was pleasantly surprised to find the 5069-L320ER as an available option, along with the ability to select v35 firmware. I successfully converted the project and now have it open with the 5069-L320ER controller in v35 of Logix Designer. Next step is to add IO modules and resolve any conversion errors (reportedly 82).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I migrate an RSLogix 5000 v20 project to Logix Designer for a 5380 controller?
- To migrate an RSLogix 5000 v20 project to Logix Designer for a 5380 controller, you will need to use the Logix Designer software version 28 or later. Ensure you have the correct software version for the migration process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. I have Logix Designer v35 software but facing challenges opening a v20 project. What should I do?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing challenges opening a v20 project in Logix Designer using v35 software, try checking the project compatibility settings. Adjust the compatibility settings to ensure the project is opened correctly in Logix Designer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why does my v20 project automatically open in RSLogix 5000 instead of Logix Designer?</h4>
<p class='text-muted'><strong>Answer:</strong> - If your v20 project is opening in RSLogix 5000 instead of Logix Designer, it could be due to default settings. To resolve this issue, you may need to adjust the file association settings on your computer to ensure v20 projects open in Logix Designer for the migration process.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
