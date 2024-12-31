
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am reaching out to see if anyone has encountered any issues with the MDX91A drives in their installations. We have a large setup with approximately 30 of these drives that have been running smoothly for the past 12-18 months. However, in June 2023, we experienced our">
    <meta name="keywords" content="sew movi-c mdx91a drives, c0 fault code, module bus problems, drive failure troubleshooting, sew drive installation, master-slave configuration, sew">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/common-issues-with-sew-movi-c-mdx91a-drives-c0-fault-code-and-module-bus-problems">
    <title>Common Issues with SEW MOVI-C MDX91A Drives - C0 Fault Code and Module Bus Problems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Common Issues with SEW MOVI-C MDX91A Drives - C0 Fault Code and Module Bus Problems | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am reaching out to see if anyone has encountered any issues with the MDX91A drives in their installations. We have a large setup with approximately 30 of these drives that have been running smoothly for the past 12-18 months. However, in June 2023, we experienced our">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/common-issues-with-sew-movi-c-mdx91a-drives-c0-fault-code-and-module-bus-problems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Common Issues with SEW MOVI-C MDX91A Drives - C0 Fault Code and Module Bus Problems | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am reaching out to see if anyone has encountered any issues with the MDX91A drives in their installations. We have a large setup with approximately 30 of these drives that have been running smoothly for the past 12-18 months. However, in June 2023, we experienced our">
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
        "@id": "https://community.oxmaint.com/discussion-forum/common-issues-with-sew-movi-c-mdx91a-drives-c0-fault-code-and-module-bus-problems"
      },
      "headline": "Common Issues with SEW MOVI-C MDX91A Drives - C0 Fault Code and Module Bus Problems",
      "description": "Hello everyone, I am reaching out to see if anyone has encountered any issues with the MDX91A drives in their installations. We have a large setup with approximately 30 of these drives that have been running smoothly for the past 12-18 months. However, in June 2023, we experienced our",
      "author": {
        "@type": "Person",
        "name": "0151paul"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">Common Issues with SEW MOVI-C MDX91A Drives - C0 Fault Code and Module Bus Problems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>0151paul</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">384</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">384</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am reaching out to see if anyone has encountered any issues with the MDX91A drives in their installations. We have a large setup with approximately 30 of these drives that have been running smoothly for the past 12-18 months. However, in June 2023, we experienced our first drive failure with a C0 fault related to the module bus issue. Despite setting all drives as masters and configuring the S3 switch correctly, the drives are exhibiting slave behavior due to a disconnection with the master.

Recently, in March 2024, after a scheduled plant shutdown and restart, we have had 5 drives fail with the same C0 fault issue. These failures seem to be random across the installation, affecting only the SEW drives while other types, like Powerflex and Nord, remain unaffected. Some of the failed drives were even mounted and powered next to each other in the same panels.

SEW has acknowledged the problem and provided replacement drives, albeit on a non-fault basis. Given the challenges faced during the COVID era in the supply chain, we suspect there may be a manufacturing issue causing these failures. Despite SEW claiming this to be an isolated incident, we are curious if others have encountered similar issues. Your insights would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Update: Last week, SEW engineers replaced all the 'faulty' drives. These units were then sent to the service department in Germany for inspection, but surprisingly, no issues were found and they all functioned correctly once powered up. However, after a routine maintenance power down, two more drives experienced the same issue. Despite attempting a hardwired reset through the front IO terminals and a factory reset, the C0 fault persisted. We have now replaced the faulty drives with spares and successfully powered them up in a non-production machine. Currently awaiting a response from SEW.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>0151paul</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the common issue being faced with SEW MOVI-C MDX91A drives mentioned in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> The common issue being faced is a C0 fault related to the module bus problem, causing the drives to exhibit slave behavior instead of operating as masters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How many drives have experienced the C0 fault issue, and over what period did these failures occur?</h4>
<p class='text-muted'><strong>Answer:</strong> The initial drive failure was experienced in June 2023, and after a scheduled plant shutdown and restart in March 2024, 5 more drives failed with the same C0 fault issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are the drive failures localized to SEW drives only, or have other drive types been affected as well?</h4>
<p class='text-muted'><strong>Answer:</strong> The drive failures seem to be localized to SEW drives only, with other types like Powerflex and Nord remaining unaffected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How has SEW responded to the reported issues with the MDX91A drives?</h4>
<p class='text-muted'><strong>Answer:</strong> SEW has acknowledged the problem and provided replacement drives, although on a non-fault basis. They claim it to be an isolated incident, but the users suspect a manufacturing issue may be causing the failures.</p>
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
