
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am interested in visually representing and adjusting the placement of multiple objects (up to 64 rectangular or circular shapes) on a Panelview Plus 6. There are three potential methods that come to mind: 1. Animating the position and size of certain pushbuttons on a Panelview Plus 6 2.">
    <meta name="keywords" content="panelview plus 6 object visualization, manipulating multiple objects on panelview plus 6, animating pushbuttons on panelview plus 6, dynamic positioning of shapes on hmi, plc communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-visualize-and-manipulate-multiple-objects-on-panelview-plus-6">
    <title>How to Visualize and Manipulate Multiple Objects on Panelview Plus 6 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Visualize and Manipulate Multiple Objects on Panelview Plus 6 | Oxmaint Community">
    <meta property="og:description" content="I am interested in visually representing and adjusting the placement of multiple objects (up to 64 rectangular or circular shapes) on a Panelview Plus 6. There are three potential methods that come to mind: 1. Animating the position and size of certain pushbuttons on a Panelview Plus 6 2.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-visualize-and-manipulate-multiple-objects-on-panelview-plus-6">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Visualize and Manipulate Multiple Objects on Panelview Plus 6 | Oxmaint Community">
    <meta name="twitter:description" content="I am interested in visually representing and adjusting the placement of multiple objects (up to 64 rectangular or circular shapes) on a Panelview Plus 6. There are three potential methods that come to mind: 1. Animating the position and size of certain pushbuttons on a Panelview Plus 6 2.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-visualize-and-manipulate-multiple-objects-on-panelview-plus-6"
      },
      "headline": "How to Visualize and Manipulate Multiple Objects on Panelview Plus 6",
      "description": "I am interested in visually representing and adjusting the placement of multiple objects (up to 64 rectangular or circular shapes) on a Panelview Plus 6. There are three potential methods that come to mind: 1. Animating the position and size of certain pushbuttons on a Panelview Plus 6 2.",
      "author": {
        "@type": "Person",
        "name": "JasonWade"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">How to Visualize and Manipulate Multiple Objects on Panelview Plus 6</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JasonWade</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5257</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">398</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am interested in visually representing and adjusting the placement of multiple objects (up to 64 rectangular or circular shapes) on a Panelview Plus 6. There are three potential methods that come to mind: 1. Animating the position and size of certain pushbuttons on a Panelview Plus 6 2. Controlling bits on the pressed/released events of graphic shapes that may have dynamic size and position 3. Dynamically positioning shapes and transmitting the x,y coordinates of any screen touch to the PLC, allowing the PLC to determine which shape was pressed. Can someone confirm the feasibility of these approaches and provide guidance on how to accomplish them? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To add animation to an object in FactoryTalk View ME, simply right-click on the object within your display, select the Animation option, and then choose from 10 different animation types. This feature allows you to easily customize and enhance the visual elements of your HMI display.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fitz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Fitz, thank you for your response. However, I am experiencing limited animation options for a pushbutton in FactoryTalk View Studio - Machine Edition 5.00.00 CPR9 Build 55. The only available animation is 'visibility', while the others are greyed out. Could this issue be related to the age of my software?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JasonWade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi Jason, I came across this information in the FT View ME help guide. If your pushbutton is an image, your only option will be the visibility animation. Drawing objects can have various animations such as color, fill, height, rotation, and more. However, image and panel objects only support visibility animation.

For other objects and ActiveX controls, visibility animation is the only option. To add different types of animation, you can create your own pushbutton or use multiple buttons in different positions with visibility control.

I also observed that when I imported a pushbutton from the Symbol Factory in FT View ME, I was able to access all animation options.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fitz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Fitz, if your pushbutton is displayed as an image, that may explain why your only option is for visibility settings. Have you considered creating your own pushbutton design to have more animation options, like using a polygon shape? Unfortunately, it seems challenging to assign a touch event to a custom shape. Another approach could be having multiple buttons in various positions and toggling their visibility as needed, but this may not be practical for infinite positions. Additionally, I discovered that importing a pushbutton from the Symbol Factory in FT View ME provides access to a wider range of animation features. Are you familiar with the Symbol Factory in FT View ME? Where can I find it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JasonWade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand your point about the Push Button (PB) in FactoryTalk View ME treating it like a panel instead of just visibility. The Symbol Factory feature is integrated into FT View ME and can be found in the explorer window on the left, just below Global Objects. With Symbol Factory, you should be able to create a PB that functions the way you desire.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fitz</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>SE supports touch animation, while ME does not support it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>votecoffee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>votecoffee mentioned that touch animation is exclusively supported in SE, not ME. Click to learn more about this resolution of another unsolved mystery.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After being ranked at the top of search results, I decided to share the correct answer here after spending an hour acquiring the knowledge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>votecoffee</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  Can I visualize and manipulate multiple objects on Panelview Plus 6?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to visually represent and adjust the placement of multiple objects on a Panelview Plus 6.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are some methods to achieve this on a Panelview Plus 6?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Some potential methods include animating the position and size of pushbuttons, controlling bits on pressed/released events of graphic shapes, and dynamically positioning shapes while transmitting touch coordinates to the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How many objects can I work with on a Panelview Plus 6?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can work with up to 64 rectangular or circular shapes on a Panelview Plus 6.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I determine which shape was pressed on the Panelview Plus 6?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: By dynamically positioning shapes and transmitting touch coordinates to the PLC, the PLC can determine which shape was pressed based on the x,y coordinates.</p>
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
