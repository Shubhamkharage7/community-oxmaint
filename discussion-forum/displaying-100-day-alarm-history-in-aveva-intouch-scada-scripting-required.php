
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im curious about how to display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA. Ive searched the AlarmDbVeiwCtrl1 Properties but couldnt find an option for this. Do we need to write a script to achieve this? Please refer to the attached file">
    <meta name="keywords" content="aveva intouch scada alarm history, display 100-day alarm history, alarm summary in aveva intouch scada, scada scripting for alarm history, aveva intouch alarm">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/displaying-100-day-alarm-history-in-aveva-intouch-scada-scripting-required">
    <title>Displaying 100-Day Alarm History in Aveva Intouch SCADA: Scripting Required? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Displaying 100-Day Alarm History in Aveva Intouch SCADA: Scripting Required? | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im curious about how to display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA. Ive searched the AlarmDbVeiwCtrl1 Properties but couldnt find an option for this. Do we need to write a script to achieve this? Please refer to the attached file">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/displaying-100-day-alarm-history-in-aveva-intouch-scada-scripting-required">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Displaying 100-Day Alarm History in Aveva Intouch SCADA: Scripting Required? | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im curious about how to display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA. Ive searched the AlarmDbVeiwCtrl1 Properties but couldnt find an option for this. Do we need to write a script to achieve this? Please refer to the attached file">
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
        "@id": "https://community.oxmaint.com/discussion-forum/displaying-100-day-alarm-history-in-aveva-intouch-scada-scripting-required"
      },
      "headline": "Displaying 100-Day Alarm History in Aveva Intouch SCADA: Scripting Required?",
      "description": "Hello everyone, Im curious about how to display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA. Ive searched the AlarmDbVeiwCtrl1 Properties but couldnt find an option for this. Do we need to write a script to achieve this? Please refer to the attached file",
      "author": {
        "@type": "Person",
        "name": "RockyNivas"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-23",
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
                <h1 class="text-white">Displaying 100-Day Alarm History in Aveva Intouch SCADA: Scripting Required?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1097</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">101</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm curious about how to display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA. I've searched the AlarmDbVeiwCtrl1 Properties but couldn't find an option for this. Do we need to write a script to achieve this? Please refer to the attached file for more details. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're searching for a comprehensive overview of all alarms, the Alarm Summary display will not suffice. Consider checking out the Alarm History display instead, which provides a complete record of both current and past alarms.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for getting back to me. I've noticed that the Alarm History feature doesn't seem to offer any search or filtering options, which is causing some confusion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are utilizing AlarmDB with a database already in place, it is important to use AlarmDBCtrl instead of the one initially showcased. Keep in mind that if you are only accessing Historical Alarms, they may not retain data for up to 100 days as they are stored in memory and are limited by the buffer size. To ensure Historical Alarms are stored for a longer period, it is necessary to configure AlarmDB accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello there, thank you for getting back to me. I will configure with AlarmDBCtrl. I would also like to know if I need to set up the database with the server. I apologize if this is a basic question, as I am new to Aveva Intouch. Please provide guidance on this. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RockyNivas inquired: "Hey there, thanks for responding. I will set up AlarmDBCtrl. Do I need to link the database to the server as well? I'm new to Aveva Intouch and would appreciate your advice on this. Thanks for your help!" 

In Aveva Intouch, the Alarm DB Logger Manager located at the bottom left of the Windows Pane in Wonderware (WW) enables you to easily create the database.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For a hassle-free way to manage alarms without dealing with setting up the Alarm DB, you can opt to utilize the Alarm Printer Utility for printing to a file instead. This streamlined approach simplifies the process and saves you time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to NetNathan, if you want to avoid the hassle of setting up the Alarm DB, you have the option to utilize the Alarm Printer Utility and save alarms to a file. Can someone clarify whether using the Alarm Printer Utility with the logging option selected will still display alarms in the Alarm history? This is important as previous alarms seem to disappear whenever the Scada system is restarted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RockyNivas inquired about the Alarm Printer Utility and its logging option in the output. They were concerned whether the alarms would still appear in the Alarm history after restarting the Scada system, as the old alarms seemed to disappear. However, it is important to note that the Alarm History is stored in a memory buffer and for a persistent history, alarms should be stored in a database. It is possible to print the alarms to a file, as suggested by Nathan, but additional scripting may be required to display them in Intouch. Utilizing the AlarmDB function is recommended, as it is specifically designed for managing alarms in Intouch and simplifies the process by creating and managing the database automatically.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to robertmee's comment, it is important to note that Alarm History is stored in a memory buffer and for persistent tracking of alarms, it is necessary to store them in a database. While printing them to a file as suggested by Nathan is an option, it would require writing scripts to read and display the file in Intouch. Alternatively, using the AlarmDB function is recommended as it is designed for this purpose, with Intouch managing the database and providing built-in controls for querying it.

Hello, thank you for your response. I have attempted to utilize the AlarmDB function, however, I am encountering a connection error when trying to display the alarms in the Alarm history. I have entered my PC name as the server name and the database name as WWALMDB. The Username and Password fields are not enabled in the DB Logger Manager. Could you please point out where I may have made a mistake? Kindly refer to the attachments for more information. Thank you in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockyNivas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There may be a couple of key steps you are overlooking in setting up your SQL Manager for optimal performance. First, you must establish a password for the SA account. Additionally, ensure that your SQL is configured for both SQL and Windows Authentication Modes. Once these tasks are completed, create the Alarm Database in Intouch using SQL authentication and <local>. For a detailed walkthrough, refer to this tutorial, which may require slight adjustments depending on your Intouch version: https://cdn.logic-control.com/docs/...Configure SQL and Alarm DB Logger Manager.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA, you may need to write a script to achieve this as the option might not be available directly in the AlarmDbVeiwCtrl1 Properties.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Where can I find the option to display a 100-day alarm history in Aveva (Intouch) SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The option to display a 100-day alarm history may not be readily available in the AlarmDbVeiwCtrl1 Properties. You might need to explore scripting to implement this feature.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is scripting required to show a longer alarm history in Aveva (Intouch) SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, if you want to display a 100-day alarm history in the Alarm Summary section of Aveva (Intouch) SCADA, you may need to write a script as the built-in options might not support this feature directly.</p>
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
