
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As I work on developing an HMI application using FactoryTalk View Studio, I am seeking guidance on incorporating a pop-up keypad or keyboard for touchscreen input. Despite searching the Rockwell Knowledgebase, I have not yet found a solution. Any assistance would be greatly appreciated. Thank you in advance!">
    <meta name="keywords" content="factorytalk view studio, hmi application, pop-up keypad, pop-up keyboard, touchscreen input, rockwell knowledgebase, incorporating keypad in factorytalk view studio, touch input solution, hmi development, touchscreen interface, touch input design, rockwell">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-add-a-pop-up-keypad-for-touchscreen-input-in-factorytalk-view-studio">
    <title>How to Add a Pop-Up Keypad for Touchscreen Input in FactoryTalk View Studio | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Add a Pop-Up Keypad for Touchscreen Input in FactoryTalk View Studio | Oxmaint Community">
    <meta property="og:description" content="As I work on developing an HMI application using FactoryTalk View Studio, I am seeking guidance on incorporating a pop-up keypad or keyboard for touchscreen input. Despite searching the Rockwell Knowledgebase, I have not yet found a solution. Any assistance would be greatly appreciated. Thank you in advance!">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-add-a-pop-up-keypad-for-touchscreen-input-in-factorytalk-view-studio">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Add a Pop-Up Keypad for Touchscreen Input in FactoryTalk View Studio | Oxmaint Community">
    <meta name="twitter:description" content="As I work on developing an HMI application using FactoryTalk View Studio, I am seeking guidance on incorporating a pop-up keypad or keyboard for touchscreen input. Despite searching the Rockwell Knowledgebase, I have not yet found a solution. Any assistance would be greatly appreciated. Thank you in advance!">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-add-a-pop-up-keypad-for-touchscreen-input-in-factorytalk-view-studio"
      },
      "headline": "How to Add a Pop-Up Keypad for Touchscreen Input in FactoryTalk View Studio",
      "description": "As I work on developing an HMI application using FactoryTalk View Studio, I am seeking guidance on incorporating a pop-up keypad or keyboard for touchscreen input. Despite searching the Rockwell Knowledgebase, I have not yet found a solution. Any assistance would be greatly appreciated. Thank you in advance!",
      "author": {
        "@type": "Person",
        "name": "kedarkg"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-29",
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
                <h1 class="text-white">How to Add a Pop-Up Keypad for Touchscreen Input in FactoryTalk View Studio</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kedarkg</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">15428</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">9</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As I work on developing an HMI application using FactoryTalk View Studio, I am seeking guidance on incorporating a pop-up keypad or keyboard for touchscreen input. Despite searching the Rockwell Knowledgebase, I have not yet found a solution. Any assistance would be greatly appreciated. Thank you in advance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>User kedarkg inquired about utilizing Factory Talk View Studio for developing HMI applications and how to bring up a pop-up keypad or keyboard for inputting values on the touchscreen. Despite checking the Rockwell knowledgebase without finding a solution, kedarkg sought assistance. One solution suggested was using the numeric input tab, which automatically brings up the keypad. Additional advice included referring to the help files for further guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Myles</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your display, simply right-click on the screen, choose "Display Settings," then navigate to the "Behavior" tab. On the right side, tick the box for "Display On-Screen Keyboard." If you only need to input numbers, try downloading the "Numeric Keypad for RSView32 1.00.0060" for a more efficient alternative to the standard keyboard.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rdrast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand that this post is old, but I stumbled upon it while searching online. To quickly activate this feature for all screens, you can enable the on-screen keyboard in the FT Client setup. This option will take precedence over individual display settings if it is not selected for a specific screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>machCTRL</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While browsing the internet, I stumbled upon an old machCTRL post about enabling on-screen keyboards for all displays within the FT Client setup. I found this to be a faster and more efficient solution than adjusting individual display settings. It's great to see that this solution is still relevant in 2024.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RammRras</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I add a pop-up keypad for touchscreen input in FactoryTalk View Studio?
   Answer: To add a pop-up keypad in FactoryTalk View Studio, you can create a custom pop-up display using objects like buttons and numeric entry fields. By assigning actions to these objects, you can trigger the pop-up keypad to appear when needed for touchscreen input.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a specific feature or function within FactoryTalk View Studio that provides a built-in pop-up keypad for touchscreen input?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: FactoryTalk View Studio does not have a built-in pop-up keypad feature. However, you can design and implement your own pop-up keypad using the available objects and scripting capabilities within the software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any resources or tutorials available to help me create a pop-up keypad in FactoryTalk View Studio?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can explore online tutorials, forums, and Rockwell Automation's support resources for guidance on creating a pop-up keypad in FactoryTalk View Studio. Additionally, experimenting with scripting and object interactions within the software can help you customize a solution that fits your HMI application requirements.</p>
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
