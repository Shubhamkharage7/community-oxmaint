
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently utilizing Datastream 7 for Asset management. A client has requested that I retrieve all work orders with tasks assigned to a specific company using the Dataspy feature. Upon trying to customize the Dataspy query, I discovered that the default SQL only selects information about">
    <meta name="keywords" content="datastream 7 asset management, work orders retrieval, assigned tasks query, dataspy feature customization, sql query modification, retrieving work order tasks, customize datas">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-retrieve-work-orders-with-assigned-tasks-for-a-specific-company-using-datastream-7">
    <title>How to Retrieve Work Orders with Assigned Tasks for a Specific Company Using Datastream 7 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Retrieve Work Orders with Assigned Tasks for a Specific Company Using Datastream 7 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently utilizing Datastream 7 for Asset management. A client has requested that I retrieve all work orders with tasks assigned to a specific company using the Dataspy feature. Upon trying to customize the Dataspy query, I discovered that the default SQL only selects information about">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-retrieve-work-orders-with-assigned-tasks-for-a-specific-company-using-datastream-7">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Retrieve Work Orders with Assigned Tasks for a Specific Company Using Datastream 7 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently utilizing Datastream 7 for Asset management. A client has requested that I retrieve all work orders with tasks assigned to a specific company using the Dataspy feature. Upon trying to customize the Dataspy query, I discovered that the default SQL only selects information about">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-retrieve-work-orders-with-assigned-tasks-for-a-specific-company-using-datastream-7"
      },
      "headline": "How to Retrieve Work Orders with Assigned Tasks for a Specific Company Using Datastream 7",
      "description": "Hello everyone, I am currently utilizing Datastream 7 for Asset management. A client has requested that I retrieve all work orders with tasks assigned to a specific company using the Dataspy feature. Upon trying to customize the Dataspy query, I discovered that the default SQL only selects information about",
      "author": {
        "@type": "Person",
        "name": "Daniele Vangi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">How to Retrieve Work Orders with Assigned Tasks for a Specific Company Using Datastream 7</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Daniele Vangi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2164</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">485</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently utilizing Datastream 7 for Asset management. A client has requested that I retrieve all work orders with tasks assigned to a specific company using the Dataspy feature. Upon trying to customize the Dataspy query, I discovered that the default SQL only selects information about the first task of the work orders. An example of a query that only selects the first task is: AND (a.act_act=(select min(b.act_act) from r5activities b where b.act_event=a.act_event) or a.act_act is null). Is it possible to modify the standard query for the work orders Dataspy? If so, how can I go about making this modification? I am aware that the Menu Query displays all configured queries, but I am unable to locate the specific one I am looking for. How can I find it?

I then attempted to create a new Form assuming that a new Form would not have a default query. However, upon opening the new Form, I encountered an Internet Explorer error stating "Page not found", indicating a potential mistake in configuring the URL. The Administrator Manual provides an example URL format: http://app.server.com?USERID=:utente&PWD=:password but does not offer guidance on configuring the URL. Is creating another Form a viable solution to address my client's issue? If so, could you provide instructions on how to correctly configure the URL? Any assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, it is possible to execute this query by writing some code on the Advanced tab of the dataspy tool. However, I would need more clarification on the tasks assigned to companies. If you need assistance, feel free to contact me, and I can guide you through the necessary tables and fields to query. Please specify the software version you are using - Forms or EWS, and whether it is Oracle or SQL Server. You can reach me at 804-337-6464. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Faith Perry</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Daniele,

When it comes to analyzing data, creating a User Defined Grid is a more recommended approach compared to using a dataspy. A User Defined Grid can be customized to meet your specific needs and preferences. If you have any questions or would like to discuss further, please don't hesitate to reach out to me at ajith.shinde@bwir.com.

Best Regards,
Ajit Shinde
Senior Consultant at BWIR

Visit www.bwir.com for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Uma Fisher</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I modify the standard query for work orders in Datastream 7 to retrieve all tasks assigned to a specific company?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to modify the standard query for work orders in Datastream 7 to retrieve all tasks assigned to a specific company. You may need to adjust the SQL query to include information about all tasks associated with the work orders, rather than just the first task.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I find a specific query in Datastream 7's Menu Query to retrieve work orders with assigned tasks for a specific company?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To locate the specific query you are looking for in Datastream 7's Menu Query, you can try searching for keywords related to work orders, tasks, or the specific company. Alternatively, you can contact Datastream 7 support for assistance in locating the query.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Is creating a new Form in Datastream 7 a viable solution to retrieve work orders with assigned tasks for a specific company?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Creating a new Form in Datastream 7 can be a potential solution to address the issue of retrieving work orders with assigned tasks for a specific company. However, make sure to correctly configure the URL to avoid encountering Internet Explorer errors. Refer to the Administrator Manual for guidance on configuring the URL format correctly.</p>
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
