
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing MP2 6.1 SQL at the moment. Recently, I incorporated new fields into our Work Order table using MP2 designer. The process went smoothly, and the new fields are now visible on our Work Order form. While I am able to input data in MP2 and see">
    <meta name="keywords" content="mp2 1 sql reports, adding new fields in mp2 1 sql, mp2 designer new fields, work order table customization in mp2, mp2">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-include-newly-added-fields-in-mp2-6-1-sql-reports">
    <title>How to include newly added fields in MP2 6.1 SQL reports | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to include newly added fields in MP2 6.1 SQL reports | Oxmaint Community">
    <meta property="og:description" content="I am utilizing MP2 6.1 SQL at the moment. Recently, I incorporated new fields into our Work Order table using MP2 designer. The process went smoothly, and the new fields are now visible on our Work Order form. While I am able to input data in MP2 and see">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-include-newly-added-fields-in-mp2-6-1-sql-reports">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to include newly added fields in MP2 6.1 SQL reports | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing MP2 6.1 SQL at the moment. Recently, I incorporated new fields into our Work Order table using MP2 designer. The process went smoothly, and the new fields are now visible on our Work Order form. While I am able to input data in MP2 and see">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-include-newly-added-fields-in-mp2-6-1-sql-reports"
      },
      "headline": "How to include newly added fields in MP2 6.1 SQL reports",
      "description": "I am utilizing MP2 6.1 SQL at the moment. Recently, I incorporated new fields into our Work Order table using MP2 designer. The process went smoothly, and the new fields are now visible on our Work Order form. While I am able to input data in MP2 and see",
      "author": {
        "@type": "Person",
        "name": "Kevin Oliver"
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
                <h1 class="text-white">How to include newly added fields in MP2 6.1 SQL reports</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kevin Oliver</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1209</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">94</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing MP2 6.1 SQL at the moment. Recently, I incorporated new fields into our Work Order table using MP2 designer. The process went smoothly, and the new fields are now visible on our Work Order form. While I am able to input data in MP2 and see it transfer to the work order history form upon closure, I am encountering difficulties in pulling this new data into reports. Despite my efforts, the new fields do not appear on either the visible or hidden fields list when building the reports. Can you provide guidance on how I can address this issue effectively?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize an older version of Crystal Reports to update essential reports such as the WO print out from the backend. List reports within the application are fixed and require a customization purchase from the MP2 owner for any modifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Diana Spencer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. Just to clarify, are you confirming that it's not possible to include additional fields in a report such as {Reports > Work Orders > Simple} without buying customization services?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zoe Peterson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have yet to find a suitable solution for my needs. Upon reaching out to MP2 several years ago, I was only offered a customization quote as their response. If you come across a more helpful solution, please share your findings. Best of luck in your search!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Xander Cooper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, modifying canned MP2 reports is not a simple task. However, forms like work orders and purchase orders can be edited using Crystal Reports 8.5. By recreating canned reports in Crystal Reports 8.5, they can be easily accessed from within MP2. Additionally, a Quick Access bar icon can be assigned for convenience. If you have any specific requirements, please let me know. Regards, Donal Fleming from flemingtechnical.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vince Myers</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I include newly added fields in MP2 6.1 SQL reports?
- To include newly added fields in MP2 6.1 SQL reports, you may need to ensure that the fields have been properly added to the database tables and are accessible in the SQL queries used for report generation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why are the newly added fields not showing up in the visible or hidden fields list when building reports in MP2 6.1 SQL?</h4>
<p class='text-muted'><strong>Answer:</strong> - The newly added fields may not appear in the visible or hidden fields list when building reports in MP2 6.1 SQL if they have not been correctly linked or synchronized with the report builder tool. You may need to check the data dictionary and report configuration settings to ensure the new fields are included.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot issues with pulling new data into reports in MP2 6.1 SQL?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing difficulties in pulling new data into reports in MP2 6.1 SQL, you can start by verifying the field mappings, database connections, and report design settings. Make sure that the new fields are properly defined in the system and are accessible for reporting purposes.</p>
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
