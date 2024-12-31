
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have always believed that only one HMI server is allowed per physical or virtual server. However, in testing some FTView upgrades on a non-live system without data servers, I created a test system with two HMI servers on the same physical server, each serving a separate application area.">
    <meta name="keywords" content="ftview se, hmi server, running multiple instances, single physical server, virtual server, test system, data servers, application area, flat file structure, system flexibility, merge small systems, overhead, server configuration, system organization, h">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/ftview-se-hmi-server-running-multiple-instances-on-one-server-exploring-new-possibilities">
    <title>FTView SE HMI Server: Running Multiple Instances on One Server - Exploring New Possibilities | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="FTView SE HMI Server: Running Multiple Instances on One Server - Exploring New Possibilities | Oxmaint Community">
    <meta property="og:description" content="I have always believed that only one HMI server is allowed per physical or virtual server. However, in testing some FTView upgrades on a non-live system without data servers, I created a test system with two HMI servers on the same physical server, each serving a separate application area.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/ftview-se-hmi-server-running-multiple-instances-on-one-server-exploring-new-possibilities">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FTView SE HMI Server: Running Multiple Instances on One Server - Exploring New Possibilities | Oxmaint Community">
    <meta name="twitter:description" content="I have always believed that only one HMI server is allowed per physical or virtual server. However, in testing some FTView upgrades on a non-live system without data servers, I created a test system with two HMI servers on the same physical server, each serving a separate application area.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/ftview-se-hmi-server-running-multiple-instances-on-one-server-exploring-new-possibilities"
      },
      "headline": "FTView SE HMI Server: Running Multiple Instances on One Server - Exploring New Possibilities",
      "description": "I have always believed that only one HMI server is allowed per physical or virtual server. However, in testing some FTView upgrades on a non-live system without data servers, I created a test system with two HMI servers on the same physical server, each serving a separate application area.",
      "author": {
        "@type": "Person",
        "name": "creativepaper"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">FTView SE HMI Server: Running Multiple Instances on One Server - Exploring New Possibilities</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>creativepaper</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">185</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">493</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have always believed that only one HMI server is allowed per physical or virtual server. However, in testing some FTView upgrades on a non-live system without data servers, I created a test system with two HMI servers on the same physical server, each serving a separate application area. This setup surprised me as I thought it was not permitted. 

I am unsure if this is a recent change or if I have misunderstood something. Typically, I would use a single HMI server for small unrelated systems with all the displays organized in a flat file structure. However, the ability to have each system as its own HMI server poses some interesting possibilities, though I am not sure of the advantages it may offer. It may result in more overhead, but it does provide flexibility, especially when trying to merge two small systems on individual servers into a single server.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is officially possible to host two HMI Servers on one machine, enabling each computer to serve as a redundant backup for the other. For instance, Computer A can act as the primary server for Area A and the backup for Area B, while Computer B can be the primary server for Area B and the backup for Area A. Despite Rockwell Automation suggesting a limit of two servers for performance reasons, there is no definitive restriction on the number of HMI Servers that can be hosted on a single machine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can multiple instances of FTView SE HMI Server run on one physical or virtual server?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to have multiple instances of the FTView SE HMI Server running on the same physical or virtual server, as observed by the user in the discussion thread.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is running multiple HMI servers on a single server a recent change in FTView SE?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is unclear if this capability is a recent change or if it has always been possible. The user in the discussion thread was surprised by the setup and questioned if they had misunderstood the limitations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the advantages of running separate HMI servers for different application areas?</h4>
<p class='text-muted'><strong>Answer:</strong> - Running separate HMI servers for different application areas can provide flexibility, especially when merging small systems from individual servers into a single server. However, it may result in increased overhead compared to using a single HMI server for all systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How does organizing systems with separate HMI servers impact system performance?</h4>
<p class='text-muted'><strong>Answer:</strong> - While having separate HMI servers may offer flexibility, it is important to consider the potential impact on system performance due to increased overhead. Users should weigh the advantages of flexibility against the resource implications.</p>
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
