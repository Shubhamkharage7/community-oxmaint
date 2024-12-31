
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am attempting to implement tag substitution for a faceplate in order to display the description of my AOI. While using the tag /*S:0 {[Packaging Line 1]MyP_PF52x.@Description}*/ yields successful results, using /*S:0 {#2.@Description}*/ results in question marks appearing. I have directed #2 to [Packaging Line 1]MyP_PF52x, but the issue">
    <meta name="keywords" content="tag substitution, faceplate description, factory talk view studio me, troubleshooting, aoi (add-on instruction), syntax error, packaging line 1">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-tag-substitution-for-faceplate-description-in-factory-talk-view-studio-me">
    <title>Troubleshooting Tag Substitution for Faceplate Description in Factory Talk View Studio ME | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Tag Substitution for Faceplate Description in Factory Talk View Studio ME | Oxmaint Community">
    <meta property="og:description" content="I am attempting to implement tag substitution for a faceplate in order to display the description of my AOI. While using the tag /*S:0 {[Packaging Line 1]MyP_PF52x.@Description}*/ yields successful results, using /*S:0 {#2.@Description}*/ results in question marks appearing. I have directed #2 to [Packaging Line 1]MyP_PF52x, but the issue">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-tag-substitution-for-faceplate-description-in-factory-talk-view-studio-me">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Tag Substitution for Faceplate Description in Factory Talk View Studio ME | Oxmaint Community">
    <meta name="twitter:description" content="I am attempting to implement tag substitution for a faceplate in order to display the description of my AOI. While using the tag /*S:0 {[Packaging Line 1]MyP_PF52x.@Description}*/ yields successful results, using /*S:0 {#2.@Description}*/ results in question marks appearing. I have directed #2 to [Packaging Line 1]MyP_PF52x, but the issue">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-tag-substitution-for-faceplate-description-in-factory-talk-view-studio-me"
      },
      "headline": "Troubleshooting Tag Substitution for Faceplate Description in Factory Talk View Studio ME",
      "description": "I am attempting to implement tag substitution for a faceplate in order to display the description of my AOI. While using the tag /*S:0 {[Packaging Line 1]MyP_PF52x.@Description}*/ yields successful results, using /*S:0 {#2.@Description}*/ results in question marks appearing. I have directed #2 to [Packaging Line 1]MyP_PF52x, but the issue",
      "author": {
        "@type": "Person",
        "name": "dternosky"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-29",
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
                <h1 class="text-white">Troubleshooting Tag Substitution for Faceplate Description in Factory Talk View Studio ME</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dternosky</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">295</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">449</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am attempting to implement tag substitution for a faceplate in order to display the description of my AOI. While using the tag /*S:0 {[Packaging Line 1]MyP_PF52x.@Description}*/ yields successful results, using /*S:0 {#2.@Description}*/ results in question marks appearing. I have directed #2 to [Packaging Line 1]MyP_PF52x, but the issue persists. Could the problem lie in incorrectly executing the syntax? I seem to be overlooking something crucial.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>dternosky asked for help with tag substitution on a faceplate to display the description of their AOI. Using the tag /*S:0 {[Packaging Line 1]MyP_PF52x.@Description}*/ worked perfectly, but when trying /*S:0 {#2.@Description}*/, question marks appeared. Despite pointing #2 to [Packaging Line 1]MyP_PF52x, the issue persisted. Is there a mistake in the syntax? Unsure of what is missing. Remember to GO BLUE!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Experience the thrill of a Big 10 sniper drive-by! Count me in. Hey dternosky, could you try entering the direct tag reference version to find what you're searching for? While I may not be a pro at FTVS, I've never seen a data member with a format like .@Description before. Is this just a placeholder for this post, Keith?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kamenges asked Dternosky to try using the direct version of the tag reference to locate the desired information. While not expert in FTVS, Kamenges mentioned never encountering a data member with a format of .@Description before, unless it is used as a placeholder in the post. It was noted that the direct reference was successful, indicating an extended tag property related to the description of the specified tag. Logix has supported extended tag properties since version 21. The FTView ME manual provides detailed information on this topic.

In relation to the original poster's issue, the tag seems to not be resolving properly when using the parameter. It might be due to an improper loading of the parameter or an input error. Testing with a simpler substitution like '/*S:0 {[Packaging Line 1]#2.@Description}*/' where #2 is 'MyP_PF52x' can help determine if the parameter is loading correctly. If it does not work, the focus should be on fixing the parameter loading issue before delving into syntax errors. If it works, then there may be a syntax problem such as the parameter not accepting square brackets or spaces.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I've discovered that your parameter reference includes spaces in the initial section ("Packaging Line 1"). Dealing with spaces in parameter file references can be troublesome due to an issue with the ASCII code for that space character that FTView does not favor. One solution is to delete each space and input ALT + 0160 (no-break space) instead to see if that resolves the issue. Another option is to rename your shortcut without spaces. Additionally, while going through parameter files for a recent project, I noticed a double colon before the tag reference (Example:::[Packaging Line 1]MyP_PF52x). You could also consider trying this approach. I hope these suggestions are beneficial to you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ck8177</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After encountering an issue with my processor shortcut, I resolved it by changing it to simply "L1," which successfully fixed the reference. Grateful for the support from everyone!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dternosky</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I implement tag substitution for a faceplate in Factory Talk View Studio ME?
   - You can use tag substitution by specifying the tag path within appropriate syntax like /S:0 {[ControllerName]TagName}/.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I seeing question marks instead of the desired text when using tag substitution for a faceplate?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue of question marks appearing may be due to incorrect syntax or path referencing. Double-check the syntax and ensure the tag path is correctly specified.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be causing the problem of tag substitution not displaying the description of an AOI?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue might be related to how the tags are linked or the way the tag path is referenced. Verify that the tag path is accurately directed to the desired AOI description.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot tag substitution errors in Factory Talk View Studio ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot tag substitution errors, review the syntax used, confirm the tag path connections, and ensure that the referencing is correctly set up between the faceplate and the AOI description tag.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Are there specific considerations to keep in mind when setting up tag substitution for faceplate descriptions?</h4>
<p class='text-muted'><strong>Answer:</strong> - When setting up tag substitution for faceplate descriptions, it is crucial to accurately reference the tag path, use the correct syntax, and ensure proper linking between the faceplate and the desired tag.</p>
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
