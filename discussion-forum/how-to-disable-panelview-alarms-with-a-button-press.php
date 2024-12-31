
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am facing a situation with an old PV program that has over 2000 configured alarms, many of which are warnings and messages that continuously appear on the alarm page, causing inconvenience for operators. While the HMI will eventually be updated, the client is looking for a">
    <meta name="keywords" content="panelview alarms, disable alarms, button press, pv program, configured alarms, warning messages, alarm page, operators, hmi update, temporary solution, two panelviews, streamline process, manage hmi programs, disable al">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-disable-panelview-alarms-with-a-button-press">
    <title>How to Disable PanelView Alarms with a Button Press | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Disable PanelView Alarms with a Button Press | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am facing a situation with an old PV program that has over 2000 configured alarms, many of which are warnings and messages that continuously appear on the alarm page, causing inconvenience for operators. While the HMI will eventually be updated, the client is looking for a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-disable-panelview-alarms-with-a-button-press">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Disable PanelView Alarms with a Button Press | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am facing a situation with an old PV program that has over 2000 configured alarms, many of which are warnings and messages that continuously appear on the alarm page, causing inconvenience for operators. While the HMI will eventually be updated, the client is looking for a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-disable-panelview-alarms-with-a-button-press"
      },
      "headline": "How to Disable PanelView Alarms with a Button Press",
      "description": "Hello everyone, I am facing a situation with an old PV program that has over 2000 configured alarms, many of which are warnings and messages that continuously appear on the alarm page, causing inconvenience for operators. While the HMI will eventually be updated, the client is looking for a",
      "author": {
        "@type": "Person",
        "name": "DRB"
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
                <h1 class="text-white">How to Disable PanelView Alarms with a Button Press</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DRB</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">200</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">5</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am facing a situation with an old PV program that has over 2000 configured alarms, many of which are warnings and messages that continuously appear on the alarm page, causing inconvenience for operators. While the HMI will eventually be updated, the client is looking for a temporary solution by installing two PanelViews next to each other - one to display alarms and the other for regular operation. To streamline this process and avoid having to manage two separate HMI programs, I am exploring options to disable alarms on one HMI with the press of a button, such as using a macro or system tag, or having the program differentiate between which HMI it is running on to prevent the alarm display. This would allow me to use the same program on both PanelViews. Although I have doubts about the feasibility of this solution, I am hopeful that there may be a way to achieve it.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to address nuisance alarms in a PLC program is to deactivate unnecessary bits to avoid constant interruptions. Setting an excessive number of alarms can be counterproductive as operators may start to disregard important alerts if inundated with insignificant ones. The overload of alarms can also impact the speed of the HMI, particularly when utilizing serial communications. This is because the HMI constantly updates the alarm statuses along with the tags required to refresh the displayed page.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I fully concur with your perspective. Eliminating the problem at its source is indeed the most effective solution. However, I have not been tasked with that by the client, as it is something they will address in the future. At this moment, my focus is on finding a solution related to HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Alarm page keeps appearing constantly in FactoryTalk View ME. The software has three features that open pop-up Displays automatically: Alarms, Messages, and Diagnostics. These Displays are preset to launch when needed. Disabling the Alarm Display in the HMI project is simple - just uncheck the box. While it may be concerning that alarms won't be displayed, creating a separate runtime file without alarms is an easy solution. You can also take the time to filter out nuisance alarms or group them for easier management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Ken, for your suggestion. I have also considered the option of running two programs simultaneously, one with alarms enabled and the other with alarms disabled. I was looking for a way to have identical programs running on both HMIs. To address concerns, the preference is to have both programs running concurrently, allowing the operator to view alarms on a separate screen. This is a temporary solution until they upgrade to SE.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRB</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can alarms on a PanelView be disabled with a button press?</h4>
<p class='text-muted'><strong>Answer:</strong> - While it may not be a standard feature, there are ways to potentially achieve this by exploring options like using macros, system tags, or programming logic to differentiate between HMIs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to have one PanelView display alarms while the other does not?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it may be possible to configure the HMI program to prevent alarm display on one PanelView while showing them on the other by implementing specific logic or conditions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Will disabling alarms on one PanelView affect the functionality of the alarms system overall?</h4>
<p class='text-muted'><strong>Answer:</strong> - Disabling alarms on one PanelView should not impact the functionality of the alarms system itself, as it is more about controlling the display of alarms on the HMI interface.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a recommended approach to managing a large number of alarms on a PanelView?</h4>
<p class='text-muted'><strong>Answer:</strong> - While a temporary solution like the one described can help alleviate the issue, it is advisable to eventually update the HMI program to handle alarms more efficiently, especially with a large number of configured alarms.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What are the limitations or challenges in implementing a solution to disable alarms on one PanelView with a button press?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some challenges may include ensuring seamless integration between the two PanelViews, maintaining consistency in alarm handling, and testing thoroughly to confirm that the solution works as intended without affecting other aspects of the HMI program.</p>
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
