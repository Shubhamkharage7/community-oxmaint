
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you looking to set up Preventive Maintenance Plans to be scheduled on specific days of the week? We have several Gas Compressors that require maintenance on designated days for operational purposes. For example, Station 1 Compressor needs to be serviced on the first Tuesday of every month for">
    <meta name="keywords" content="scheduled preventive maintenance plans, specific days of the week, gas compressors, maintenance schedule, operational maintenance, compressor servicing, pm session, pipeline maintenance, outage planning, shutdown procedures, maintenance scheduling, maintenance due dates, prevent">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/scheduled-preventive-maintenance-plans-by-specific-days-of-the-week">
    <title>Scheduled Preventive Maintenance Plans by Specific Days of the Week | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Scheduled Preventive Maintenance Plans by Specific Days of the Week | Oxmaint Community">
    <meta property="og:description" content="Are you looking to set up Preventive Maintenance Plans to be scheduled on specific days of the week? We have several Gas Compressors that require maintenance on designated days for operational purposes. For example, Station 1 Compressor needs to be serviced on the first Tuesday of every month for">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/scheduled-preventive-maintenance-plans-by-specific-days-of-the-week">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Scheduled Preventive Maintenance Plans by Specific Days of the Week | Oxmaint Community">
    <meta name="twitter:description" content="Are you looking to set up Preventive Maintenance Plans to be scheduled on specific days of the week? We have several Gas Compressors that require maintenance on designated days for operational purposes. For example, Station 1 Compressor needs to be serviced on the first Tuesday of every month for">
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
        "@id": "https://community.oxmaint.com/discussion-forum/scheduled-preventive-maintenance-plans-by-specific-days-of-the-week"
      },
      "headline": "Scheduled Preventive Maintenance Plans by Specific Days of the Week",
      "description": "Are you looking to set up Preventive Maintenance Plans to be scheduled on specific days of the week? We have several Gas Compressors that require maintenance on designated days for operational purposes. For example, Station 1 Compressor needs to be serviced on the first Tuesday of every month for",
      "author": {
        "@type": "Person",
        "name": "Jim W"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-09",
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
                <h1 class="text-white">Scheduled Preventive Maintenance Plans by Specific Days of the Week</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jim W</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1628</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">253</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you looking to set up Preventive Maintenance Plans to be scheduled on specific days of the week? We have several Gas Compressors that require maintenance on designated days for operational purposes. For example, Station 1 Compressor needs to be serviced on the first Tuesday of every month for a 4-hour PM session, while Station 2 Compressor is scheduled for the first Wednesday of every month. Station 3 Compressor is due for maintenance on the first Thursday of each month. As these compressors are on different pipelines, operations plan for a 4-hour outage and shut down the lines accordingly. To ensure proper scheduling, how can I display the specific days of the week when each maintenance plan is due?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have not personally utilized the function described, but according to SAP assistance, it appears that the SAP User Exit IPRM0002 will be necessary. The SAP Help document for this function is provided below. An illustration of a Customer Exit IPRM0002 (2) is as follows: Customer exit: IPRM0002 Function module: EXIT_SAPLIPM5_002 The system automatically calculates the scheduled dates for your machinery based on specified cycles. If you need to customize these dates to align with your company's unique needs, you will require the user exit IPRM0002. For instance, you may want the system to always generate scheduled dates on workdays, avoiding Sundays and holidays. This means, for example, if a scheduled date falls on January 1, the system should determine the next workday. Another scenario could be setting up inspections and maintenance to consistently occur on the first Monday of each month.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rebecca Murphy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the "Time-key date" scheduling indicator in the Maintenance plan scheduling parameter to set up your package for optimal performance. This feature can greatly improve your maintenance planning process and ensure timely completion of tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nina Sanders</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The "time-key date" feature in scheduling can help guarantee that your plan is consistently scheduled on a specific date every month, such as the 4th of the month. Keep in mind that this feature cannot guarantee that the task will always take place on the first Tuesday of the month.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Naomi Simmons</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Establish Factory Calendars with a unique schedule where only the first Tuesday (or any preferred day) is designated as a work day. Subsequently, develop maintenance plans using the "Time-factory calendar" setting with a cycle unit of 1 day.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kelly Hughes</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set up Preventive Maintenance Plans to be scheduled on specific days of the week?</h4>
<p class='text-muted'><strong>Answer:</strong> - To schedule maintenance on specific days of the week, you can create individual maintenance plans for each equipment or asset specifying the day and frequency of maintenance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I display the specific days of the week when each maintenance plan is due?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can utilize a maintenance management software or system that allows you to input and visualize maintenance schedules by specific days of the week for each equipment or asset.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can I assign different maintenance days for various equipment or assets?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can customize maintenance schedules for different equipment or assets based on their operational requirements. For example, you can set up maintenance plans for Gas Compressors on different days of the week as needed.</p>
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
