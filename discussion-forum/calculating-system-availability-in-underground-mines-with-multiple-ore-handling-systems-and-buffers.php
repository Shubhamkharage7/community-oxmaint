
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I have a lingering question regarding the calculation of system availability in the context of an underground mine with multiple ore handling systems. Specifically, I am looking into how to factor in the presence of buffers in the overall availability assessment. The mine has two main systems and">
    <meta name="keywords" content="system availability, underground mines, ore handling systems, buffers in availability assessment, central shaft hoisting system, breakdown data, preventive maintenance, mean time between failures, mtbf, mean time to repair, mttr, series system, equipment availability">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/calculating-system-availability-in-underground-mines-with-multiple-ore-handling-systems-and-buffers">
    <title>Calculating System Availability in Underground Mines with Multiple Ore Handling Systems and Buffers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Calculating System Availability in Underground Mines with Multiple Ore Handling Systems and Buffers | Oxmaint Community">
    <meta property="og:description" content="Hello, I have a lingering question regarding the calculation of system availability in the context of an underground mine with multiple ore handling systems. Specifically, I am looking into how to factor in the presence of buffers in the overall availability assessment. The mine has two main systems and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/calculating-system-availability-in-underground-mines-with-multiple-ore-handling-systems-and-buffers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Calculating System Availability in Underground Mines with Multiple Ore Handling Systems and Buffers | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I have a lingering question regarding the calculation of system availability in the context of an underground mine with multiple ore handling systems. Specifically, I am looking into how to factor in the presence of buffers in the overall availability assessment. The mine has two main systems and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/calculating-system-availability-in-underground-mines-with-multiple-ore-handling-systems-and-buffers"
      },
      "headline": "Calculating System Availability in Underground Mines with Multiple Ore Handling Systems and Buffers",
      "description": "Hello, I have a lingering question regarding the calculation of system availability in the context of an underground mine with multiple ore handling systems. Specifically, I am looking into how to factor in the presence of buffers in the overall availability assessment. The mine has two main systems and",
      "author": {
        "@type": "Person",
        "name": "Jeff Lever"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-10",
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
                <h1 class="text-white">Calculating System Availability in Underground Mines with Multiple Ore Handling Systems and Buffers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jeff Lever</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">988</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">469</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I have a lingering question regarding the calculation of system availability in the context of an underground mine with multiple ore handling systems. Specifically, I am looking into how to factor in the presence of buffers in the overall availability assessment. The mine has two main systems and an auxiliary system that hoist ore up through a central shaft. 

There are two methods we use to calculate availability: one involves using data on breakdowns, operations, idling, and preventive maintenance hours over a set period to determine availability. The other method considers Mean Time Between Failures (MTBF) and Mean Time To Repair (MTTR). 

For example, if we have 10 pieces of equipment in one of the systems (such as bins, conveyors, crushers), and we treat it as a series system where the failure of one component can halt production, the overall availability is the product of each equipment's availability. 

However, I am unsure about how to account for equipment like bins or ore passes that have capacity buffers. Even if the lower conveyor fails, the bin several levels above can still receive ore and remain operational. Should I exclude these buffers and focus solely on the mechanical equipment for availability calculations? While the bins and other components do undergo maintenance and occasionally experience hangups, they are still considered part of the system.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello AJ. While I'm not an expert in this area, it's important to have data for each individual capacity buffer. In order to calculate availability, you need to assign a redundancy factor to each buffer and then incorporate this into the overall formula. This formula combines parallel and series calculations using adjusted figures for each buffer. It is calculated as x1 * x2 * x3 * x4 * x5 * x6 * x7 * x8 * x9 * (time monitored - (downtime(bin1 + bin2 + bin3 + bin4 + bin5) * redundancy factor) / time monitored. This calculation assumes a uniform redundancy factor of 20% above. I hope this explanation clarifies things, but feel free to reach out if you need further assistance or information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Charlie Evans</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can system availability be calculated in underground mines with multiple ore handling systems and buffers?</h4>
<p class='text-muted'><strong>Answer:</strong> - System availability in such mines can be calculated using methods that consider breakdowns, operations, idling, preventive maintenance hours, Mean Time Between Failures (MTBF), and Mean Time To Repair (MTTR).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How does the presence of buffers impact the overall availability assessment of underground mine systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Buffers like bins and ore passes can complicate availability calculations as they may continue to function even if a lower-level component fails. Deciding whether to include or exclude buffers in availability calculations depends on their criticality to the overall system operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Should equipment like bins or ore passes with capacity buffers be included in availability calculations for underground mine systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - While bins and other components with buffers undergo maintenance and can experience issues, they are still integral parts of the system. Deciding on their inclusion in availability calculations should consider their role in system functionality and potential impact on production.</p>
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
