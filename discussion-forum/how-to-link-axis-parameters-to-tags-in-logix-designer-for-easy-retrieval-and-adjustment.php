
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am looking to display specific parameters such as HomeSpeed for an axis on the HMI, even though there is no tag linked to each parameter. I am wondering if there is a method to link an axiss parameter to a tag for easy retrieval or adjustment. I">
    <meta name="keywords" content="link axis parameters, tags in logix designer, axis parameter retrieval, logix designer version 30, hmi parameter display, axis tag linking, easy adjustment">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-link-axis-parameters-to-tags-in-logix-designer-for-easy-retrieval-and-adjustment">
    <title>How to Link Axis Parameters to Tags in Logix Designer for Easy Retrieval and Adjustment | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Link Axis Parameters to Tags in Logix Designer for Easy Retrieval and Adjustment | Oxmaint Community">
    <meta property="og:description" content="Hello, I am looking to display specific parameters such as HomeSpeed for an axis on the HMI, even though there is no tag linked to each parameter. I am wondering if there is a method to link an axiss parameter to a tag for easy retrieval or adjustment. I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-link-axis-parameters-to-tags-in-logix-designer-for-easy-retrieval-and-adjustment">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Link Axis Parameters to Tags in Logix Designer for Easy Retrieval and Adjustment | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am looking to display specific parameters such as HomeSpeed for an axis on the HMI, even though there is no tag linked to each parameter. I am wondering if there is a method to link an axiss parameter to a tag for easy retrieval or adjustment. I">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-link-axis-parameters-to-tags-in-logix-designer-for-easy-retrieval-and-adjustment"
      },
      "headline": "How to Link Axis Parameters to Tags in Logix Designer for Easy Retrieval and Adjustment",
      "description": "Hello, I am looking to display specific parameters such as HomeSpeed for an axis on the HMI, even though there is no tag linked to each parameter. I am wondering if there is a method to link an axiss parameter to a tag for easy retrieval or adjustment. I",
      "author": {
        "@type": "Person",
        "name": "chantecler"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-15",
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
                <h1 class="text-white">How to Link Axis Parameters to Tags in Logix Designer for Easy Retrieval and Adjustment</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>chantecler</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">244</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">412</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am looking to display specific parameters such as "HomeSpeed" for an axis on the HMI, even though there is no tag linked to each parameter. I am wondering if there is a method to link an axis's parameter to a tag for easy retrieval or adjustment. I am currently utilizing Logix Designer Version 30 for this task. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The availability of tags in an axis setup depends on your specific requirements. Some default tags, like commanded Position and actual Position, are readily available. Others, such as torque, can be configured as cyclic parameters within the axis, but they are read-only. Additional parameters like Home related position and speed can be accessed through GSVs and adjusted using SSVs. Certain parameters, like motor temperature, can be retrieved using MSG instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for your help. My goal is to display various parameters on the HMI, such as Homing Speed, Actuator Scaling, Velocity Limit, and Acceleration Limit. Currently, I have these values displayed as "Read only" on the HMI for informational purposes. However, I am concerned because these values are manually inputted and may not always reflect the actual values. If these values change in the future and are not updated in the system, the HMI will display incorrect information. To address this issue, I plan to utilize the GSV instruction and run it at startup to ensure the most up-to-date values are being displayed. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chantecler</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Success! The GSV tutorial was a complete success. Goodbye.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chantecler</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I link an axis parameter to a tag in Logix Designer for easy retrieval and adjustment?
- To link an axis parameter like "HomeSpeed" to a tag for easy retrieval and adjustment in Logix Designer, you can utilize the software's functionality to create connections between the axis parameters and corresponding tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can you provide a step-by-step guide on linking axis parameters to tags in Logix Designer?</h4>
<p class='text-muted'><strong>Answer:</strong> - Certainly! To link axis parameters to tags in Logix Designer for easy retrieval and adjustment, you can follow these steps: 
   1. Open your Logix Designer project.
   2. Navigate to the axis configuration settings.
   3. Look for the option to link parameters to tags.
   4. Create connections between the desired axis parameters (e.g., "HomeSpeed") and the tags you want to use for retrieval and adjustment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to display axis parameters on the HMI without having individual tags for each parameter?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to display specific axis parameters like "HomeSpeed" on the HMI without having individual tags for each parameter by linking the axis parameters directly to tags within Logix Designer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Which version of Logix Designer supports linking axis parameters to tags for easy retrieval and adjustment?</h4>
<p class='text-muted'><strong>Answer:</strong> - The functionality to link axis parameters to tags for easy retrieval and adjustment is available in Logix Designer Version 30 and potentially in other versions as well. It is recommended to check the specific</p>
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
