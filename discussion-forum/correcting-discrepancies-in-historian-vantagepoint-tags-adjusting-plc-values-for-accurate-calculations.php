
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have noticed that there are discrepancies in the tags in Historian/VantagePoint, with values off by one decimal point. I have observed that the HMI displays the correct number by multiplying the PLC tag by 0.1. All links in Historian are already set up to the PLC tags, so">
    <meta name="keywords" content="historian, vantagepoint, plc values, discrepancies, tags adjustment, hmi display, decimal point, equation adjustment, rungs/branches, tag retargeting, historian links, calculations, plc tag correction, data accuracy, data discrepancy">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/correcting-discrepancies-in-historian-vantagepoint-tags-adjusting-plc-values-for-accurate-calculations">
    <title>Correcting Discrepancies in Historian/VantagePoint Tags: Adjusting PLC Values for Accurate Calculations | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Correcting Discrepancies in Historian/VantagePoint Tags: Adjusting PLC Values for Accurate Calculations | Oxmaint Community">
    <meta property="og:description" content="I have noticed that there are discrepancies in the tags in Historian/VantagePoint, with values off by one decimal point. I have observed that the HMI displays the correct number by multiplying the PLC tag by 0.1. All links in Historian are already set up to the PLC tags, so">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/correcting-discrepancies-in-historian-vantagepoint-tags-adjusting-plc-values-for-accurate-calculations">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Correcting Discrepancies in Historian/VantagePoint Tags: Adjusting PLC Values for Accurate Calculations | Oxmaint Community">
    <meta name="twitter:description" content="I have noticed that there are discrepancies in the tags in Historian/VantagePoint, with values off by one decimal point. I have observed that the HMI displays the correct number by multiplying the PLC tag by 0.1. All links in Historian are already set up to the PLC tags, so">
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
        "@id": "https://community.oxmaint.com/discussion-forum/correcting-discrepancies-in-historian-vantagepoint-tags-adjusting-plc-values-for-accurate-calculations"
      },
      "headline": "Correcting Discrepancies in Historian/VantagePoint Tags: Adjusting PLC Values for Accurate Calculations",
      "description": "I have noticed that there are discrepancies in the tags in Historian/VantagePoint, with values off by one decimal point. I have observed that the HMI displays the correct number by multiplying the PLC tag by 0.1. All links in Historian are already set up to the PLC tags, so",
      "author": {
        "@type": "Person",
        "name": "CageFreeBMW"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-18",
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
                <h1 class="text-white">Correcting Discrepancies in Historian/VantagePoint Tags: Adjusting PLC Values for Accurate Calculations</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>CageFreeBMW</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">207</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">152</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have noticed that there are discrepancies in the tags in Historian/VantagePoint, with values off by one decimal point. I have observed that the HMI displays the correct number by multiplying the PLC tag by 0.1. All links in Historian are already set up to the PLC tags, so I am exploring options for an easy solution. Is it possible to incorporate an equation to adjust the tag from the PLC within Historian or VantagePoint? Alternatively, I may consider adding additional rungs/branches to the PLC to generate tags with the necessary calculations already implemented. However, this process, along with retargeting all Historian tags, will require significant effort.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>VantagePoint offers a feature called Calculated Tags, allowing users to create and calculate values using mathematical expressions. It is important to note the limit on the number of Calculated Tags that can be created within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost explained that VantagePoint offers a feature for creating Calculated Tags, allowing users to perform mathematical operations to obtain the desired value. While there is a limit to the number of Calculated Tags allowed, the exact number is unknown. This information was exactly what I needed after spending all day searching for a solution to my issue. Despite trying various terms, I had not thought to search for "calculated tags" until now.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CageFreeBMW</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  Why are there discrepancies in the tags in Historian/VantagePoint, with values off by one decimal point?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancies could be due to different scaling factors used in displaying data between the PLC and the HMI, leading to the need for adjustments in the tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is it possible to adjust the tag values within Historian or VantagePoint to match the correct numbers displayed by the HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it may be possible to incorporate an equation within Historian or VantagePoint to adjust the tag values from the PLC, ensuring accurate calculations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are the considerations when deciding between adjusting tags within Historian/VantagePoint or implementing calculations directly in the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Deciding whether to adjust tags in Historian/VantagePoint or modify the PLC directly involves assessing factors such as ease of implementation, maintenance efforts, and the impact on existing systems.</p>
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
