
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="After working with ecockpit for a few months, I successfully completed a significant project utilizing a wagp plc. However, a challenge has arisen between my boss and me when attempting to make online changes to the program without disrupting the plc while it is in RUN mode. It seems">
    <meta name="keywords" content="wago ecockpit online changes, plc programming tips, wago ecockpit troubleshooting, online changes in ecockpit, how to update wago plc online, wago ecock">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-make-wago-ecockpit-online-changes-from-multiple-computers-without-downloading-entire-project">
    <title>How to Make Wago Ecockpit Online Changes from Multiple Computers without Downloading Entire Project | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Make Wago Ecockpit Online Changes from Multiple Computers without Downloading Entire Project | Oxmaint Community">
    <meta property="og:description" content="After working with ecockpit for a few months, I successfully completed a significant project utilizing a wagp plc. However, a challenge has arisen between my boss and me when attempting to make online changes to the program without disrupting the plc while it is in RUN mode. It seems">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-make-wago-ecockpit-online-changes-from-multiple-computers-without-downloading-entire-project">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Make Wago Ecockpit Online Changes from Multiple Computers without Downloading Entire Project | Oxmaint Community">
    <meta name="twitter:description" content="After working with ecockpit for a few months, I successfully completed a significant project utilizing a wagp plc. However, a challenge has arisen between my boss and me when attempting to make online changes to the program without disrupting the plc while it is in RUN mode. It seems">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-make-wago-ecockpit-online-changes-from-multiple-computers-without-downloading-entire-project"
      },
      "headline": "How to Make Wago Ecockpit Online Changes from Multiple Computers without Downloading Entire Project",
      "description": "After working with ecockpit for a few months, I successfully completed a significant project utilizing a wagp plc. However, a challenge has arisen between my boss and me when attempting to make online changes to the program without disrupting the plc while it is in RUN mode. It seems",
      "author": {
        "@type": "Person",
        "name": "Anonysmous"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-05",
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
                <h1 class="text-white">How to Make Wago Ecockpit Online Changes from Multiple Computers without Downloading Entire Project</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Anonysmous</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">125</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">115</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>After working with ecockpit for a few months, I successfully completed a significant project utilizing a wagp plc. However, a challenge has arisen between my boss and me when attempting to make online changes to the program without disrupting the plc while it is in RUN mode. It seems that if my boss wants to connect and make changes using the same updated file that I last saved, he is only given the option to download the entire project rather than a 50kb online change. Is there a workaround for this issue without requiring us to use the same computer for these modifications? Are there any settings in ecockpit that allow changes to be made as long as the file name remains the same?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to ensure accurate compilation on a different machine, it is essential to transfer all compile files along with the project file. Using a shared drive is my preferred method, as it eliminates any potential issues. The Pro version of Codesys offers added functionality for this purpose. However, if you are using eCockpit, these features may not be available. Have you recently switched to eCockpit, or has your company been utilizing Wago products for an extended period?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>durallymax recommended moving both the project file and the compile files when transferring Codesys to a different machine to avoid any compilation discrepancies. Alternatively, using a shared drive is a reliable option without any complications. The Pro version of Codesys offers additional tools for this purpose, but it seems like you are using eCockpit instead. Have you recently started using eCockpit, or has your company been utilizing Wago for an extended period?

They have been using Wago for a significant amount of time, likely since the inception of the company about 1-2 years ago. While I have had some experience with Beckhoff, my primary programming expertise lies with Allen Bradley.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Anonysmous</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user mentioned that they have been utilizing the technology for a considerable amount of time. Although the exact duration is uncertain, it seems to have been integrated into the company's operations since its inception, approximately 1-2 years ago. While I have some familiarity with Beckhoff, my primary programming expertise lies with Allen Bradley. It is worth noting that the new Wago controllers now employ vanilla CODESYS, while eCockpit! remains available for long-time users. My workaround solutions are geared towards vanilla CODESYS, and they may also be applicable to eCockpit!, but results may vary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I make online changes to a Wago Ecockpit project from multiple computers without downloading the entire project?</h4>
<p class='text-muted'><strong>Answer:</strong> - Currently, Wago Ecockpit does not offer a direct option for making partial online changes from multiple computers while keeping the project in RUN mode. However, there are workarounds that can help streamline this process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a way to avoid downloading the entire project when making online changes in Wago Ecockpit?</h4>
<p class='text-muted'><strong>Answer:</strong> - Unfortunately, Wago Ecockpit typically requires downloading the entire project when making online changes, even if the modifications are minimal. This can be a limitation when trying to make quick adjustments without disrupting the PLC's operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there settings in Wago Ecockpit to enable online changes without downloading the entire project?</h4>
<p class='text-muted'><strong>Answer:</strong> - Wago Ecockpit does not have built-in settings that allow for selective online changes without downloading the entire project. Users may need to explore alternative methods or approaches to address this challenge effectively.</p>
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
