
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am a beginner user of FTView Studio (both ME and SE versions), so please excuse any clumsiness in my question. I am working with FactoryTalk View Studio version 8.10, as per the clients specifications. I have converted an ME application to an SE application. In the original ME">
    <meta name="keywords" content="ftview studio se, tag values, displays, version 10, plc tag, hmi, current_screen, me to se conversion, display properties, setting tag values, display navigation, factorytalk view studio, tag value setting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-tag-values-for-displays-in-ftview-studio-se-version-8-10">
    <title>How to Set Tag Values for Displays in FTView Studio SE version 8.10 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set Tag Values for Displays in FTView Studio SE version 8.10 | Oxmaint Community">
    <meta property="og:description" content="I am a beginner user of FTView Studio (both ME and SE versions), so please excuse any clumsiness in my question. I am working with FactoryTalk View Studio version 8.10, as per the clients specifications. I have converted an ME application to an SE application. In the original ME">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-tag-values-for-displays-in-ftview-studio-se-version-8-10">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Tag Values for Displays in FTView Studio SE version 8.10 | Oxmaint Community">
    <meta name="twitter:description" content="I am a beginner user of FTView Studio (both ME and SE versions), so please excuse any clumsiness in my question. I am working with FactoryTalk View Studio version 8.10, as per the clients specifications. I have converted an ME application to an SE application. In the original ME">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-tag-values-for-displays-in-ftview-studio-se-version-8-10"
      },
      "headline": "How to Set Tag Values for Displays in FTView Studio SE version 8.10",
      "description": "I am a beginner user of FTView Studio (both ME and SE versions), so please excuse any clumsiness in my question. I am working with FactoryTalk View Studio version 8.10, as per the clients specifications. I have converted an ME application to an SE application. In the original ME",
      "author": {
        "@type": "Person",
        "name": "dreardon"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-04",
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
                <h1 class="text-white">How to Set Tag Values for Displays in FTView Studio SE version 8.10</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dreardon</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">278</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">64</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am a beginner user of FTView Studio (both ME and SE versions), so please excuse any clumsiness in my question. I am working with FactoryTalk View Studio version 8.10, as per the client's specifications. I have converted an ME application to an SE application.

In the original ME application, a PLC tag (HMI[1].Current_Screen) would be set when a specific display was shown, thanks to a property within that display. However, this property is not present in the SE application. Nevertheless, I still need to set this tag value when each display is shown.

Since I will need to repeat this action for multiple displays, ease of implementation is important. How can I set the value of a tag when a particular display is shown in FTView Studio?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To customize display settings in a software application, go to the View menu and select Display Settings. Navigate to the "Behavior" tab to assign a specific command to run at Startup. This command can either be a macro file or a simple command like "&Set TAGNAME VALUE." Customize your display settings efficiently using these steps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To adjust settings in FTView Studio, navigate through the menus by selecting View and then Display Settings. However, if you are unable to locate the "Behavior" tab as mentioned, it is possible that you are using a different version of the software. In such cases, consider incorporating VBA code into an object within the display to manipulate tag values. Alternatively, you can explore the option of adding a 'hidden' object with its Tag/Expression value in the Connections setting to achieve the desired outcome. Keep in mind that proficiency in VBA may be required for these tasks.¯\_(ツ)_/¯</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dreardon</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The dynamic top menu bar adjusts based on your current task. When you open a display and select it, the view menu will offer relevant commands for that display. Additionally, you can access Display Settings by right-clicking on an empty area within the display.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After stumbling upon this method following my last post, I decided to dive right in and start testing it out. Your response further validated that I was heading in the right direction. After successfully completing my experiment, I wanted to express my gratitude to Cheeseface for the helpful advice. I look forward to returning for more insights. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dreardon</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I set tag values for displays in FactoryTalk View Studio SE version 8.10?
   - Answer: In FactoryTalk View Studio SE version 8.10, you can set tag values for displays using the visibility animation feature. This allows you to map a tag to a display element's visibility property, effectively changing the tag value when the display is shown.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. I have converted an ME application to an SE application in FactoryTalk View Studio version 8.10. How do I set tag values for displays in the SE application?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: When transitioning from an ME to an SE application, you can achieve the functionality of setting tag values for displays by utilizing visibility animations in FactoryTalk View Studio SE version 8.10.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I do if the property for setting tag values in displays is missing in my SE application created in FactoryTalk View Studio version 8.10?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: If the property for setting tag values is not present in your SE application in FactoryTalk View Studio version 8.10, you can still set tag values for displays using visibility animations, which provide a flexible solution for updating tag values based on display visibility changes.</p>
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
