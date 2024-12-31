
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for guidance on linking two tags to a Wonderware on/off switch? The current setup isnt working as expected. I need the on/off bypass switch to activate two separate PLC tags. Ive set this up as an action script, but it might be the wrong type. In the script,">
    <meta name="keywords" content="wonderware on/off switch, linking two tags, troubleshooting wonderware switch, wonderware action script, plc tags activation, wonderware script setup, wonderware bypass switch, wonderware tag configuration, wonderware troubleshooting guide, wonderware switch">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-link-two-tags-to-a-wonderware-on-off-switch-troubleshooting-and-setup-advice">
    <title>How to link two tags to a Wonderware on/off switch: Troubleshooting and setup advice | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to link two tags to a Wonderware on/off switch: Troubleshooting and setup advice | Oxmaint Community">
    <meta property="og:description" content="Looking for guidance on linking two tags to a Wonderware on/off switch? The current setup isnt working as expected. I need the on/off bypass switch to activate two separate PLC tags. Ive set this up as an action script, but it might be the wrong type. In the script,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-link-two-tags-to-a-wonderware-on-off-switch-troubleshooting-and-setup-advice">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to link two tags to a Wonderware on/off switch: Troubleshooting and setup advice | Oxmaint Community">
    <meta name="twitter:description" content="Looking for guidance on linking two tags to a Wonderware on/off switch? The current setup isnt working as expected. I need the on/off bypass switch to activate two separate PLC tags. Ive set this up as an action script, but it might be the wrong type. In the script,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-link-two-tags-to-a-wonderware-on-off-switch-troubleshooting-and-setup-advice"
      },
      "headline": "How to link two tags to a Wonderware on/off switch: Troubleshooting and setup advice",
      "description": "Looking for guidance on linking two tags to a Wonderware on/off switch? The current setup isnt working as expected. I need the on/off bypass switch to activate two separate PLC tags. Ive set this up as an action script, but it might be the wrong type. In the script,",
      "author": {
        "@type": "Person",
        "name": "Ones_Zeros"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-19",
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
                <h1 class="text-white">How to link two tags to a Wonderware on/off switch: Troubleshooting and setup advice</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">156</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">167</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Looking for guidance on linking two tags to a Wonderware on/off switch? The current setup isn't working as expected. I need the on/off bypass switch to activate two separate PLC tags. I've set this up as an action script, but it might be the wrong type. In the script, I have specified that on a Left Click/Key/Touch Down action, both tags should be set to a "true" state: Tag#1 = 1 and Tag#2 = 1. When the bypass switch is turned off, both tags should be set to a "false" state: Tag#1 = 0 and Tag#2 = 0. Any assistance with the script and action for the on/off switch would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do the two tags belong to separate Programmable Logic Controllers (PLCs)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are having trouble getting it to function properly, try initiating the trigger in the Programmable Logic Controller (PLC). This can help resolve any issues and make sure everything is running smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lostcontrol</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I inquired about the proximity of the two tags within the same Programmable Logic Controller (PLC) because in that case, only one tag is necessary. Although I am not well-versed in Wonderware, I believe that creating a script triggered by the switch position would entail setting Tag#1 and Tag#2 to TRUE. In a separate script, Tag#1 and Tag#2 would need to be set to FALSE to achieve desired functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The two tags are situated in separate programmable logic controllers (PLCs). When the on/off switch is toggled, both tags must be set to true, and switched back to false when in the off position. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I link two tags to a Wonderware on/off switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - To link two tags to a Wonderware on/off switch, you can set up an action script specifying the desired states for each tag when the switch is activated or deactivated. Ensure that the script is correctly configured to update both Tag1 and Tag2 accordingly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the current setup not working as expected for linking two tags to a Wonderware on/off switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - The current setup may not be working as expected due to a potential issue in the type of action script being used. Verify that the script is correctly programmed to activate both tags to a "true" state when the switch is on and set them to a "false" state when the switch is off.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I consider when setting up an action script for an on/off switch in Wonderware?</h4>
<p class='text-muted'><strong>Answer:</strong> - When setting up an action script for an on/off switch in Wonderware, ensure that the script is triggered by the correct action (e.g., Left Click/Key/Touch Down) and that the instructions within the script accurately update the desired states of both PLC tags based on the switch's status.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot issues with linking tags to a Wonderware on/off switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot issues with linking tags to a Wonderware on/off switch, review the action script for any errors or inconsistencies in setting the states of Tag1 and Tag2. Double-check the switch</p>
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
