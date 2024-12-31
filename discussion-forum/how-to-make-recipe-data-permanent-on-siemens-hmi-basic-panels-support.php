
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently using the KTP Basic series HMII and have created a recipe in the TIA Portal named xxxx. The data I input into the TIA Portal is stored permanently, however, the data saved via the HMI is not retained after a restart. This means that after">
    <meta name="keywords" content="recipe data, siemens hmi, basic panels, ktp basic series, tia portal, data storage, permanent data, hmi restart, data retention, recipe management, data saving, data persistence, panel support, siemens automation, recipe handling">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-make-recipe-data-permanent-on-siemens-hmi-basic-panels-support">
    <title>How to make recipe data permanent on Siemens HMI: Basic panels support? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to make recipe data permanent on Siemens HMI: Basic panels support? | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently using the KTP Basic series HMII and have created a recipe in the TIA Portal named xxxx. The data I input into the TIA Portal is stored permanently, however, the data saved via the HMI is not retained after a restart. This means that after">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-make-recipe-data-permanent-on-siemens-hmi-basic-panels-support">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to make recipe data permanent on Siemens HMI: Basic panels support? | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently using the KTP Basic series HMII and have created a recipe in the TIA Portal named xxxx. The data I input into the TIA Portal is stored permanently, however, the data saved via the HMI is not retained after a restart. This means that after">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-make-recipe-data-permanent-on-siemens-hmi-basic-panels-support"
      },
      "headline": "How to make recipe data permanent on Siemens HMI: Basic panels support?",
      "description": "Hello, I am currently using the KTP Basic series HMII and have created a recipe in the TIA Portal named xxxx. The data I input into the TIA Portal is stored permanently, however, the data saved via the HMI is not retained after a restart. This means that after",
      "author": {
        "@type": "Person",
        "name": "bonera16"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-19",
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
                <h1 class="text-white">How to make recipe data permanent on Siemens HMI: Basic panels support?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bonera16</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">127</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">215</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently using the KTP Basic series HMII and have created a recipe in the TIA Portal named xxxx. The data I input into the TIA Portal is stored permanently, however, the data saved via the HMI is not retained after a restart. This means that after restarting the HMI, only the data from TIA Portal remains. Is there a way to ensure that the recipe data saved on the HMI is permanent? Can basic panels support this feature?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you adopted the standard recipe system? While basic panels are suitable for recipes, they are limited to the 'standard' recipe view only.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After restarting the HMI, the saved data is deleted, including any new information entered into the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bonera16</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I make recipe data permanent on Siemens HMI Basic panels?
- To make recipe data permanent on Siemens HMI Basic panels, you may need to ensure that the data saved via the HMI is retained even after a restart. One common issue is that the data saved via HMI is lost upon restart, while the data from TIA Portal remains.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the recipe data saved on the HMI not retained after a restart?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue of recipe data not being retained on the HMI after a restart could be due to settings or configurations that need adjustment to ensure permanent storage.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a way to ensure that the recipe data saved on the HMI is permanent?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there are ways to address the problem of recipe data not being permanently stored on the HMI. By configuring the settings properly, you can ensure that the data remains saved even after a restart.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can Basic panels support permanent storage of recipe data on Siemens HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Basic panels should be able to support permanent storage of recipe data on Siemens HMI. However, it might require proper configuration and settings adjustment to ensure that the data remains saved even after system restarts.</p>
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
