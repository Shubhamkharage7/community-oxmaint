
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking for a way to incorporate translucent polygons in FTV for a manufacturing line dashboard. When the line stops, I want to create a flashing effect to alert operators and passersby. Despite my efforts, I have not found a solution yet. Initially, I attempted to use a">
    <meta name="keywords" content="factorytalk view, translucent polygons, manufacturing line dashboards, flashing effect, alert operators, manufacturing line dashboard, top layer, overlapping objects, red shades, background polygon, visual alerts, operator notification, real-time monitoring, manufacturing display, translucent effects">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-create-flashing-translucent-polygons-in-factorytalk-view-for-manufacturing-line-dashboards">
    <title>How to create flashing translucent polygons in FactoryTalk View for manufacturing line dashboards | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to create flashing translucent polygons in FactoryTalk View for manufacturing line dashboards | Oxmaint Community">
    <meta property="og:description" content="I am looking for a way to incorporate translucent polygons in FTV for a manufacturing line dashboard. When the line stops, I want to create a flashing effect to alert operators and passersby. Despite my efforts, I have not found a solution yet. Initially, I attempted to use a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-create-flashing-translucent-polygons-in-factorytalk-view-for-manufacturing-line-dashboards">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to create flashing translucent polygons in FactoryTalk View for manufacturing line dashboards | Oxmaint Community">
    <meta name="twitter:description" content="I am looking for a way to incorporate translucent polygons in FTV for a manufacturing line dashboard. When the line stops, I want to create a flashing effect to alert operators and passersby. Despite my efforts, I have not found a solution yet. Initially, I attempted to use a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-create-flashing-translucent-polygons-in-factorytalk-view-for-manufacturing-line-dashboards"
      },
      "headline": "How to create flashing translucent polygons in FactoryTalk View for manufacturing line dashboards",
      "description": "I am looking for a way to incorporate translucent polygons in FTV for a manufacturing line dashboard. When the line stops, I want to create a flashing effect to alert operators and passersby. Despite my efforts, I have not found a solution yet. Initially, I attempted to use a",
      "author": {
        "@type": "Person",
        "name": "benjayyyyy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-07",
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
                <h1 class="text-white">How to create flashing translucent polygons in FactoryTalk View for manufacturing line dashboards</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>benjayyyyy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">203</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">84</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking for a way to incorporate translucent polygons in FTV for a manufacturing line dashboard. When the line stops, I want to create a flashing effect to alert operators and passersby. Despite my efforts, I have not found a solution yet. Initially, I attempted to use a background polygon in varying shades of red to achieve the flashing effect, but other objects with white backgrounds overlapped, creating a distracting display. If I could place the polygon as the top layer and make it flash, I believe I could achieve the desired effect. Do you have any suggestions on how to accomplish this?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your design, consider utilizing the Visibility animation feature on shapes like rectangles or polygons, or opt for a "Panel" object with the "Blink" option activated. For a more realistic transparent effect, try incorporating a PNG image with an alpha channel and adjusting the red transparency level to xx%. To create a flashing effect, simply apply the Visibility animation once more to your design elements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 suggested using the Visibility animation on a rectangle or polygon, or utilizing a "Panel" object with the "Blink" property activated for creating visual effects. To achieve true transparency, incorporating a PNG image with an alpha channel and adjusting the red transparency percentage may be helpful. To make the effect more dynamic, consider applying the Visibility animation once again. Thank you for the tip regarding alpha channel images; I will consider it as a backup plan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>benjayyyyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 explained that the Visibility animation can be used on shapes like rectangles or polygons, or on a "Panel" object with the "Blink" feature activated. For true transparency effects, consider using a PNG image with an alpha channel and adjusting the red transparency to your liking. To create a flashing effect, simply utilize the Visibility animation once more. Another query arose regarding the implementation of a 1000 millisecond clock with 5 images displaying varying levels of red opacity. Each image was set to appear within different time ranges of the 1000 milliseconds, yet it was observed that the visibility changes only occurred every 2-4 seconds. Could this issue be related to the FTV data refresh rate? Is it not recommended to work at the millisecond level for optimal performance?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>benjayyyyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Avoid attempting to create flashes using a PLC tag. Instead, utilize the system seconds tag and perform a modulo operation by 2 to achieve a 1-second on/off flash effect. By following this method, you can avoid being reliant on tag update rates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I create flashing translucent polygons in FactoryTalk View for manufacturing line dashboards?</h4>
<p class='text-muted'><strong>Answer:</strong> - To create flashing translucent polygons in FactoryTalk View, you can try placing the polygon as the top layer and implementing a flashing effect to alert operators and passersby when the manufacturing line stops.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What was the issue with using a background polygon in varying shades of red for the flashing effect in FactoryTalk View?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue with using a background polygon in varying shades of red was that other objects with white backgrounds overlapped, creating a distracting display. Placing the polygon as the top layer may help to resolve this problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific tips or tricks to successfully incorporate translucent polygons with flashing effects in FactoryTalk View?</h4>
<p class='text-muted'><strong>Answer:</strong> - One tip is to ensure that the translucent polygon is placed as the top layer to prevent overlapping with other objects. Implementing a flashing effect can help to draw attention and alert operators effectively.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I effectively use translucent polygons in FactoryTalk View dashboards for manufacturing lines?</h4>
<p class='text-muted'><strong>Answer:</strong> - To effectively use translucent polygons in FactoryTalk View dashboards for manufacturing lines, consider the placement of the polygons, their transparency level, and any flashing effects to ensure they serve their intended purpose of alerting operators and passersby.</p>
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
