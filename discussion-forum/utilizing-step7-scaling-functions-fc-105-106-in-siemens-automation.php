
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is my first experience with Simatic Manager Step7, as I initially began my Siemens journey with TIA, which offers a user-friendly interface and automates many processes. Currently, I am utilizing the scaling functions provided in the Step7 library, specifically FC-105 for scaling and FC-106 for unscaling. Given the">
    <meta name="keywords" content="siemens step7 scaling functions, fc-105 and fc-106 in siemens automation, step7 library scaling functions, siemens tia vs step7 automation, analog inputs scaling in siemens step7, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/utilizing-step7-scaling-functions-fc-105-106-in-siemens-automation">
    <title>Utilizing Step7 Scaling Functions FC-105/106 in Siemens Automation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Utilizing Step7 Scaling Functions FC-105/106 in Siemens Automation | Oxmaint Community">
    <meta property="og:description" content="This is my first experience with Simatic Manager Step7, as I initially began my Siemens journey with TIA, which offers a user-friendly interface and automates many processes. Currently, I am utilizing the scaling functions provided in the Step7 library, specifically FC-105 for scaling and FC-106 for unscaling. Given the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/utilizing-step7-scaling-functions-fc-105-106-in-siemens-automation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Utilizing Step7 Scaling Functions FC-105/106 in Siemens Automation | Oxmaint Community">
    <meta name="twitter:description" content="This is my first experience with Simatic Manager Step7, as I initially began my Siemens journey with TIA, which offers a user-friendly interface and automates many processes. Currently, I am utilizing the scaling functions provided in the Step7 library, specifically FC-105 for scaling and FC-106 for unscaling. Given the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/utilizing-step7-scaling-functions-fc-105-106-in-siemens-automation"
      },
      "headline": "Utilizing Step7 Scaling Functions FC-105/106 in Siemens Automation",
      "description": "This is my first experience with Simatic Manager Step7, as I initially began my Siemens journey with TIA, which offers a user-friendly interface and automates many processes. Currently, I am utilizing the scaling functions provided in the Step7 library, specifically FC-105 for scaling and FC-106 for unscaling. Given the",
      "author": {
        "@type": "Person",
        "name": "aamirawan91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-02",
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
                <h1 class="text-white">Utilizing Step7 Scaling Functions FC-105/106 in Siemens Automation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">349</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">1</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>This is my first experience with Simatic Manager Step7, as I initially began my Siemens journey with TIA, which offers a user-friendly interface and automates many processes. Currently, I am utilizing the scaling functions provided in the Step7 library, specifically "FC-105" for scaling and "FC-106" for unscaling. Given the numerous analog inputs requiring scaling and a few analog outputs needing unscaling, I find myself consistently calling upon these functions. I encountered an issue when attempting to use the FC-105 function for a second time, receiving a prompt indicating that the object already exists and prompting whether I wish to overwrite it. In this situation, should I choose to rename the object or overwrite it? How will my selection impact the program's functionality?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After adding the item from the library, it will become available in your project. Make sure to access it from the project blocks folder going forward.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of manually invoking the function a second time, I mistakenly dragged and dropped it from the library once more. It was an oversight on my part.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>aamirawan91 admitted feeling foolish but is actually just in the process of learning. It's common for individuals to have to revisit concepts and information periodically in order to retain and reinforce their knowledge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: 1.  I am encountering an issue in Step7 when using the FC-105 scaling function for the second time. What should I do when prompted to overwrite the existing object or rename it?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When prompted to overwrite the existing object or rename it, it is generally recommended to rename the object to avoid any potential conflicts or unintended consequences in the program's functionality. By renaming the object, you can ensure that each scaling function is uniquely identified and called upon as needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How does the FC-106 unscaling function in Siemens Step7 differ from the FC-105 scaling function, and in what scenarios should I utilize each of them?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The FC-105 scaling function in Step7 is used for scaling analog inputs, while the FC-106 function is specifically designed for unscaling analog outputs. You should utilize FC-105 when you need to convert raw analog input values into meaningful engineering units, and FC-106 when you need to reverse this process and convert scaled engineering units back into raw values for analog outputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can you provide some best practices for efficiently utilizing the scaling functions FC-105 and FC-106 in Siemens Step7 to handle multiple analog inputs and outputs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To efficiently handle multiple analog inputs and outputs requiring scaling and unscaling, consider creating separate instances of FC-105 and FC-106 functions for each input/output variable. By doing so, you can avoid conflicts</p>
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
