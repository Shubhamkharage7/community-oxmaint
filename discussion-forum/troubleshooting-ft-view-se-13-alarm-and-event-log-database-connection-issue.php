
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, we currently face an issue with two PCs running the FT SE local application and sharing the same project. One of the PCs is displaying errors in the alarm and event log, showing only the message Lost connection to alarm and event log Alarms when the alarm log">
    <meta name="keywords" content="troubleshooting, ft view se 13, alarm and event log, database connection issue, ft se local application, alarm log errors, lost connection, alarms, sql database, ft diagnostics viewer, error messages, project sharing, pc errors">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ft-view-se-13-alarm-and-event-log-database-connection-issue">
    <title>Troubleshooting FT View SE 13: Alarm and Event Log Database Connection Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FT View SE 13: Alarm and Event Log Database Connection Issue | Oxmaint Community">
    <meta property="og:description" content="Greetings, we currently face an issue with two PCs running the FT SE local application and sharing the same project. One of the PCs is displaying errors in the alarm and event log, showing only the message Lost connection to alarm and event log Alarms when the alarm log">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ft-view-se-13-alarm-and-event-log-database-connection-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FT View SE 13: Alarm and Event Log Database Connection Issue | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, we currently face an issue with two PCs running the FT SE local application and sharing the same project. One of the PCs is displaying errors in the alarm and event log, showing only the message Lost connection to alarm and event log Alarms when the alarm log">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ft-view-se-13-alarm-and-event-log-database-connection-issue"
      },
      "headline": "Troubleshooting FT View SE 13: Alarm and Event Log Database Connection Issue",
      "description": "Greetings, we currently face an issue with two PCs running the FT SE local application and sharing the same project. One of the PCs is displaying errors in the alarm and event log, showing only the message Lost connection to alarm and event log Alarms when the alarm log",
      "author": {
        "@type": "Person",
        "name": "vaibaras"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-01",
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
                <h1 class="text-white">Troubleshooting FT View SE 13: Alarm and Event Log Database Connection Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>vaibaras</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">898</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">306</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, we currently face an issue with two PCs running the FT SE local application and sharing the same project. One of the PCs is displaying errors in the alarm and event log, showing only the message "Lost connection to alarm and event log Alarms" when the alarm log page is opened. The other PC is functioning properly with the same project. The SQL database is intact, and all settings are correct. The FT diagnostics viewer indicates some errors, as shown in the attached file. What could be causing this problem?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The final log displayed in the image holds the key clue. It appears that there are connectivity problems between the malfunctioning computer and the one storing the database. This issue may be hindering the proper functioning of your network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your response. I have thoroughly reviewed all the settings and compared them with those on another PC, but I keep receiving the error message "Lost connection to alarm and event log." Do you have any suggestions or solutions for this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vaibaras</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is one of the PCs running FT View SE displaying errors in the alarm and event log while the other PC is functioning properly with the same project?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue could be related to a specific configuration or connectivity problem on the affected PC, causing it to lose connection to the alarm and event log database.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the "Lost connection to alarm and event log Alarms" error in FT View SE?</h4>
<p class='text-muted'><strong>Answer:</strong> You can start by checking the network connectivity, database settings, and FT View SE configuration on the problematic PC to identify and resolve the connection issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should I do if the FT diagnostics viewer shows errors related to the alarm and event log database connection issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Review the errors indicated in the FT diagnostics viewer to gather more specific information about the problem. These errors can help in diagnosing and resolving the connectivity issue affecting the alarm and event log functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How do I ensure that the SQL database settings are correctly configured for the alarm and event log in FT View SE?</h4>
<p class='text-muted'><strong>Answer:</strong> Verify the database connection settings, permissions, and network configuration to ensure that the SQL database is properly set up and accessible by FT View SE for logging alarms and events.</p>
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
