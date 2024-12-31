
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When configuring an FT View SE server, it is important to ensure access to the historian is available for data analysis. If you are unable to locate a client for historian access on the server, consider the possibility of it being located elsewhere for organizational purposes. However, it is">
    <meta name="keywords" content="ft view se server configuration, historian access best practices, data analysis in ft view se, client setup for historian access, server configuration for data management, ft view se historian access">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-practice-for-configuring-ft-view-se-server-with-historian-access">
    <title>Best Practice for Configuring FT View SE Server with Historian Access | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Practice for Configuring FT View SE Server with Historian Access | Oxmaint Community">
    <meta property="og:description" content="When configuring an FT View SE server, it is important to ensure access to the historian is available for data analysis. If you are unable to locate a client for historian access on the server, consider the possibility of it being located elsewhere for organizational purposes. However, it is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-practice-for-configuring-ft-view-se-server-with-historian-access">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Practice for Configuring FT View SE Server with Historian Access | Oxmaint Community">
    <meta name="twitter:description" content="When configuring an FT View SE server, it is important to ensure access to the historian is available for data analysis. If you are unable to locate a client for historian access on the server, consider the possibility of it being located elsewhere for organizational purposes. However, it is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-practice-for-configuring-ft-view-se-server-with-historian-access"
      },
      "headline": "Best Practice for Configuring FT View SE Server with Historian Access",
      "description": "When configuring an FT View SE server, it is important to ensure access to the historian is available for data analysis. If you are unable to locate a client for historian access on the server, consider the possibility of it being located elsewhere for organizational purposes. However, it is",
      "author": {
        "@type": "Person",
        "name": "Tim Ganz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-06",
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
                <h1 class="text-white">Best Practice for Configuring FT View SE Server with Historian Access</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">336</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">265</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When configuring an FT View SE server, it is important to ensure access to the historian is available for data analysis. If you are unable to locate a client for historian access on the server, consider the possibility of it being located elsewhere for organizational purposes. However, it is recommended to also have a client on the historian server box for convenient access. Is this best practice for data management and analysis in FT View SE servers?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To set up trends for clients accessing historical data, you must have a machine equipped with an SMT (System Management Tool). This tool should be included in the historian installation and be native to the historian system. With this setup, users can easily trend, add, delete, and perform other functions within the historian.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is recommended to restrict access to the Historian server to only those who manage its configuration. An option is to have a "client" such as FactoryTalk VantagePoint or Excel DataLink add-on for administrative use. In the past, Rockwell had a licensed OSI PI tool called 'Process Book', but its current availability is uncertain. The SMT tool mentioned by Ken is intended for administrator-level use. Our usual setup allows end-users to access data through FactoryTalk Directory member computers with VantagePoint, Excel DataLink, and/or TrendPro objects on SE graphics. Additionally, there are third-party client applications that can be configured to access Historian data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>glennz</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why is it important to ensure access to the historian when configuring an FT View SE server?
- Access to the historian is crucial for data analysis and historical data retrieval, which are essential for monitoring and improving system performance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Should the client for historian access be located on the FT View SE server or elsewhere for organizational purposes?</h4>
<p class='text-muted'><strong>Answer:</strong> - While it is acceptable to have the client located elsewhere for organizational reasons, it is recommended to also have a client on the historian server box for convenient access and efficient data management.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is having a client on the historian server box considered a best practice for data management and analysis in FT View SE servers?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, having a client on the historian server box is considered a best practice as it provides easier access to historical data for analysis and troubleshooting purposes within the FT View SE environment.</p>
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
