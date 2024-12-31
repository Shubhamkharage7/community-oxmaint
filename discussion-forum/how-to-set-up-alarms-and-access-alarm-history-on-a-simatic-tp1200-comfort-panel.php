
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am seeking assistance with setting up alarms on a Simatic TP1200 Comfort Panel. As a beginner, I am struggling to create a table for saving alarms that can be easily accessed by operators on the screen. This feature should allow operators to view past alarms based">
    <meta name="keywords" content="simatic tp1200 comfort panel, alarm setup, alarm history access, hmi screen alarms, operator alarm view, alarms table, saving alarms, alarm memory resources, alarm log generation, external file saving, alarm viewing tutorial, operator guidance">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-up-alarms-and-access-alarm-history-on-a-simatic-tp1200-comfort-panel">
    <title>How to Set Up Alarms and Access Alarm History on a Simatic TP1200 Comfort Panel | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set Up Alarms and Access Alarm History on a Simatic TP1200 Comfort Panel | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am seeking assistance with setting up alarms on a Simatic TP1200 Comfort Panel. As a beginner, I am struggling to create a table for saving alarms that can be easily accessed by operators on the screen. This feature should allow operators to view past alarms based">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-up-alarms-and-access-alarm-history-on-a-simatic-tp1200-comfort-panel">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Up Alarms and Access Alarm History on a Simatic TP1200 Comfort Panel | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am seeking assistance with setting up alarms on a Simatic TP1200 Comfort Panel. As a beginner, I am struggling to create a table for saving alarms that can be easily accessed by operators on the screen. This feature should allow operators to view past alarms based">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-up-alarms-and-access-alarm-history-on-a-simatic-tp1200-comfort-panel"
      },
      "headline": "How to Set Up Alarms and Access Alarm History on a Simatic TP1200 Comfort Panel",
      "description": "Hello everyone, I am seeking assistance with setting up alarms on a Simatic TP1200 Comfort Panel. As a beginner, I am struggling to create a table for saving alarms that can be easily accessed by operators on the screen. This feature should allow operators to view past alarms based",
      "author": {
        "@type": "Person",
        "name": "Aleksandra"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">How to Set Up Alarms and Access Alarm History on a Simatic TP1200 Comfort Panel</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Aleksandra</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5423</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">462</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am seeking assistance with setting up alarms on a Simatic TP1200 Comfort Panel. As a beginner, I am struggling to create a table for saving alarms that can be easily accessed by operators on the screen. This feature should allow operators to view past alarms based on available memory resources. While I have come across information on how to generate an alarm log, it appears to involve saving alarms to an external file. This leaves me unsure of how operators can view alarms on the HMI screen. Could someone provide guidance, a tutorial, PDF, or similar resources on this matter? Any assistance would be greatly appreciated. Thank you for your help in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Create an alarm log and then develop an alarm view displaying exclusively the alarms recorded in the log. This will help you easily monitor and manage alarms efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>spaderkung</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The alarm view also includes an alarm history feature, known as the alarm buffer. This feature allows the device to store a record of all recent alarms in a buffer, with the capacity typically set at around 1000 alarms (exact number varies by model). This feature is useful for tracking alarm incidents and patterns.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the alarm view, there is an option for alarm history, also known as the alarm buffer, where the device records all alarms in a buffer that can hold around 1000 entries (quantity may vary based on the model). I'm glad this is the feature I was looking for! I now need to determine if it's possible to prevent an alarm from appearing three times with the states: incoming (I), incoming acknowledged (I), and incoming acknowledged outgoing (IA). Currently, the same alarm is displayed in three separate lines with different statuses. I would prefer to have it displayed on a single line with dynamically updated status.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aleksandra</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the WinCC V13 Manual, I came across a passage stating that alarms in the system have events such as "Incoming," "Outgoing," and "Acknowledge." Each event triggers the output of a new alarm with the updated status. This raises the question of whether it is feasible to dynamically update the alarm status without creating a new alarm simultaneously. Is this a limitation of the system? :/</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aleksandra</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude to everyone who helped me resolve the issue with the alarm filter string. Your assistance was invaluable and greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aleksandra</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Aleksandra reported success in resolving the issue with the alarm filter string. She expressed gratitude for the assistance received, stating that it was greatly appreciated. Is there a method available to display alarms in the same line as the incoming and outgoing times?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DanShinde</span></li>
            </ul>
        </div>
        
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I set up alarms on a Simatic TP1200 Comfort Panel?
- To set up alarms on a Simatic TP1200 Comfort Panel, you can follow the steps provided in the panel's user manual or seek guidance from online tutorials or forums.
  
2. How can I create a table for saving alarms on the screen for easy access by operators?
- You can create a table for saving alarms on the screen by configuring the alarm settings in the HMI software to display past alarms based on available memory resources.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can operators view past alarms on the HMI screen without saving them to an external file?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, operators can view past alarms on the HMI screen without saving them to an external file by setting up the alarm log feature within the HMI software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Where can I find resources or tutorials for setting up alarms and accessing alarm history on a Simatic TP1200 Comfort Panel?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can search online for tutorials, user manuals, or forums dedicated to Simatic TP1200 Comfort Panel programming to find resources and guidance on setting up alarms and accessing alarm history.</p>
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
