
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is it possible to call a Popup GoToPage in a User Defined action with Complex Code? I am trying to confirm a machine function only under specific conditions. The current logic works, but it takes me to a Normal Page instead of a Popup, like my other confirmations. The">
    <meta name="keywords" content="popup gotopage, redlion crimson 0, complex code, user defined action, machine function, normal page, confirmations, code snippet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-call-a-popup-gotopage-with-complex-code-in-redlion-crimson-3-0">
    <title>How to Call a PopUp GoToPage with Complex Code in RedLion Crimson 3.0 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Call a PopUp GoToPage with Complex Code in RedLion Crimson 3.0 | Oxmaint Community">
    <meta property="og:description" content="Is it possible to call a Popup GoToPage in a User Defined action with Complex Code? I am trying to confirm a machine function only under specific conditions. The current logic works, but it takes me to a Normal Page instead of a Popup, like my other confirmations. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-call-a-popup-gotopage-with-complex-code-in-redlion-crimson-3-0">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Call a PopUp GoToPage with Complex Code in RedLion Crimson 3.0 | Oxmaint Community">
    <meta name="twitter:description" content="Is it possible to call a Popup GoToPage in a User Defined action with Complex Code? I am trying to confirm a machine function only under specific conditions. The current logic works, but it takes me to a Normal Page instead of a Popup, like my other confirmations. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-call-a-popup-gotopage-with-complex-code-in-redlion-crimson-3-0"
      },
      "headline": "How to Call a PopUp GoToPage with Complex Code in RedLion Crimson 3.0",
      "description": "Is it possible to call a Popup GoToPage in a User Defined action with Complex Code? I am trying to confirm a machine function only under specific conditions. The current logic works, but it takes me to a Normal Page instead of a Popup, like my other confirmations. The",
      "author": {
        "@type": "Person",
        "name": "forsakenplc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-06",
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
                <h1 class="text-white">How to Call a PopUp GoToPage with Complex Code in RedLion Crimson 3.0</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>forsakenplc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">279</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">86</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is it possible to call a "Popup" GoToPage in a User Defined action with Complex Code? I am trying to confirm a machine function only under specific conditions. The current logic works, but it takes me to a Normal Page instead of a Popup, like my other confirmations. The code snippet I have so far is: if (Tag_X) GoToPage (Confirm_Action_Y); else Action_Y=1; Additionally, can Action_Y be set as a Momentary NO, similar to a one-shot? I currently have my PLC unlatching Action_Y after the function is initiated, but I am exploring options for future use. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After successfully configuring the ShowPopup function based on Tag_X, I want to ensure that Action_Y remains a one-shot or Momentary NO. Despite my efforts, I am struggling to find a straightforward solution for this. Can anyone offer any guidance on how to achieve this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>forsakenplc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of utilizing if(Tag_x), you have the option to activate an action in the Tag settings. This Trigger occurs when there is a change in the Tag's status, ensuring it only happens once. The example shown in the image depicts simple Triggers where Tag1 increments by 1 when Tag2 switches to On, and Tag1 decrements by 1 when Tag2 switches to Off. Without knowledge of where your Complex Code is being called, it's uncertain if this information is beneficial for your situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can a "Popup" GoToPage be called in a User Defined action with Complex Code in RedLion Crimson 3.0?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to call a "Popup" GoToPage in a User Defined action with Complex Code. Ensure that the code snippet includes the appropriate conditions for displaying the popup page.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does the current logic take me to a Normal Page instead of a Popup in RedLion Crimson 3.0?</h4>
<p class='text-muted'><strong>Answer:</strong> - If your current logic is taking you to a Normal Page instead of a Popup, check the code snippet to ensure that the correct function for displaying a popup is being used. Verify the conditions and GoToPage method.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to set an Action as a Momentary NO (one-shot) in RedLion Crimson 3.0?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can set an Action as a Momentary NO (one-shot) in RedLion Crimson 3.0. Explore options within your PLC to configure the desired behavior, such as unlatching the action after initiation. Consider how this functionality can be utilized in future scenarios.</p>
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
