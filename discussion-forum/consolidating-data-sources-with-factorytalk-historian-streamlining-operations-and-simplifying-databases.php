
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you a water/wastewater plant that collects real-time and manually inputted data? Currently, we utilize FactoryTalk Historian (OSI PI) for real-time data collection and a homemade MySQL database with an Access interface for manually inputted data. We rely on Excel for generating reports and accessing data using PI Datalink">
    <meta name="keywords" content="factorytalk historian, osi pi, mysql database, access interface, excel reports, pi datalink, ms query, data consolidation, lims, employee turnover, vendor support, data sources, data types, data collection, real-time data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/consolidating-data-sources-with-factorytalk-historian-streamlining-operations-and-simplifying-databases">
    <title>Consolidating Data Sources with FactoryTalk Historian: Streamlining Operations and Simplifying Databases | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Consolidating Data Sources with FactoryTalk Historian: Streamlining Operations and Simplifying Databases | Oxmaint Community">
    <meta property="og:description" content="Are you a water/wastewater plant that collects real-time and manually inputted data? Currently, we utilize FactoryTalk Historian (OSI PI) for real-time data collection and a homemade MySQL database with an Access interface for manually inputted data. We rely on Excel for generating reports and accessing data using PI Datalink">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/consolidating-data-sources-with-factorytalk-historian-streamlining-operations-and-simplifying-databases">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Consolidating Data Sources with FactoryTalk Historian: Streamlining Operations and Simplifying Databases | Oxmaint Community">
    <meta name="twitter:description" content="Are you a water/wastewater plant that collects real-time and manually inputted data? Currently, we utilize FactoryTalk Historian (OSI PI) for real-time data collection and a homemade MySQL database with an Access interface for manually inputted data. We rely on Excel for generating reports and accessing data using PI Datalink">
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
        "@id": "https://community.oxmaint.com/discussion-forum/consolidating-data-sources-with-factorytalk-historian-streamlining-operations-and-simplifying-databases"
      },
      "headline": "Consolidating Data Sources with FactoryTalk Historian: Streamlining Operations and Simplifying Databases",
      "description": "Are you a water/wastewater plant that collects real-time and manually inputted data? Currently, we utilize FactoryTalk Historian (OSI PI) for real-time data collection and a homemade MySQL database with an Access interface for manually inputted data. We rely on Excel for generating reports and accessing data using PI Datalink",
      "author": {
        "@type": "Person",
        "name": "andrewhall"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">Consolidating Data Sources with FactoryTalk Historian: Streamlining Operations and Simplifying Databases</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>andrewhall</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">272</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">325</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you a water/wastewater plant that collects real-time and manually inputted data? Currently, we utilize FactoryTalk Historian (OSI PI) for real-time data collection and a homemade MySQL database with an Access interface for manually inputted data. We rely on Excel for generating reports and accessing data using PI Datalink and MS Query.

In an effort to streamline our operations and simplify our databases, we are considering consolidating our two data sources into one using FactoryTalk Historian for all data types. Have you encountered a similar situation before? Is this solution feasible?

Some considerations we are pondering include:
1. Although an off-the-shelf LIMS may be more suitable, consolidating applications and data sources is a priority.
2. High employee turnover poses challenges in training and expertise. Working with a single vendor for support can reduce complexity.
3. Existing reports will be adjusted to utilize PI Datalink exclusively.
4. We have numerous other queries and concerns to address.

Do you have any insights or advice on this matter? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Achieving your goal is entirely possible. If you only have a few data points to input, Excel can be used along with data link. At a previous job, we had a client who input all their "LIMS" data into PI. They enlisted the expertise of an OSI-PI integrator who developed a customized front end for them. Custom reports were also created for their specific needs. As a former PI administrator, I had some experience with it, but dedicated professionals in the field are much more adept and efficient. To find resources on OSI-PI manual entry, try conducting a web search. You can also reach out to PI directly for recommendations in your area. A top result from my search was the PI Manual Logger - Overview.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>FTHistorian offers a PI product known as PI Asset Framework, which boasts the desired functionality you seek. This feature-rich tool is designed to meet your specific needs and requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your input. I will explore both options further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>andrewhall</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What data sources are currently being used by the water/wastewater plant discussed in the thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The plant is currently using FactoryTalk Historian (OSI PI) for real-time data collection and a homemade MySQL database with an Access interface for manually inputted data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is the plant considering consolidating its data sources into one using FactoryTalk Historian?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The plant aims to streamline operations and simplify databases by consolidating data sources, which includes real-time and manually inputted data, into FactoryTalk Historian to improve efficiency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are some considerations the plant is pondering while contemplating the consolidation of data sources?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Some considerations include the priority of consolidating applications and data sources, challenges posed by high employee turnover in terms of training and expertise, adjusting existing reports to utilize PI Datalink exclusively, and addressing various queries and concerns.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How does the plant plan to address challenges related to employee turnover and training expertise in the context of consolidating data sources?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The plant considers that working with a single vendor for support can reduce complexity and ease training challenges posed by high employee turnover.</p>
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
