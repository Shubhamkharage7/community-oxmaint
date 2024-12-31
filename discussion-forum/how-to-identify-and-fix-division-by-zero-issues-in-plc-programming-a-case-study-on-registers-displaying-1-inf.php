
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings to all readers! I delved into the world of PLC programming about a year ago, mainly working with GE/Emerson products such as RX3i and 90/30. To kickstart my journey, I attended an entry-level programming class offered by Emerson and received invaluable guidance from experienced programmers at my workplace.">
    <meta name="keywords" content="plc programming, division by zero issues, registers displaying #inf, ge/emerson plc products, rx3i, 90/30, automotive seat frames testing, logic duplication, station variables, anomaly detection, analog logic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-identify-and-fix-division-by-zero-issues-in-plc-programming-a-case-study-on-registers-displaying-1-inf">
    <title>How to Identify and Fix Division by Zero Issues in PLC Programming: A Case Study on Registers Displaying 1.#INF | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Identify and Fix Division by Zero Issues in PLC Programming: A Case Study on Registers Displaying 1.#INF | Oxmaint Community">
    <meta property="og:description" content="Greetings to all readers! I delved into the world of PLC programming about a year ago, mainly working with GE/Emerson products such as RX3i and 90/30. To kickstart my journey, I attended an entry-level programming class offered by Emerson and received invaluable guidance from experienced programmers at my workplace.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-identify-and-fix-division-by-zero-issues-in-plc-programming-a-case-study-on-registers-displaying-1-inf">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Identify and Fix Division by Zero Issues in PLC Programming: A Case Study on Registers Displaying 1.#INF | Oxmaint Community">
    <meta name="twitter:description" content="Greetings to all readers! I delved into the world of PLC programming about a year ago, mainly working with GE/Emerson products such as RX3i and 90/30. To kickstart my journey, I attended an entry-level programming class offered by Emerson and received invaluable guidance from experienced programmers at my workplace.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-identify-and-fix-division-by-zero-issues-in-plc-programming-a-case-study-on-registers-displaying-1-inf"
      },
      "headline": "How to Identify and Fix Division by Zero Issues in PLC Programming: A Case Study on Registers Displaying 1.#INF",
      "description": "Greetings to all readers! I delved into the world of PLC programming about a year ago, mainly working with GE/Emerson products such as RX3i and 90/30. To kickstart my journey, I attended an entry-level programming class offered by Emerson and received invaluable guidance from experienced programmers at my workplace.",
      "author": {
        "@type": "Person",
        "name": "ProgrammingNoob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-17",
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
                <h1 class="text-white">How to Identify and Fix Division by Zero Issues in PLC Programming: A Case Study on Registers Displaying 1.#INF</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ProgrammingNoob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">118</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">474</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings to all readers! I delved into the world of PLC programming about a year ago, mainly working with GE/Emerson products such as RX3i and 90/30. To kickstart my journey, I attended an entry-level programming class offered by Emerson and received invaluable guidance from experienced programmers at my workplace. Our primary task involves using PLC controllers to test automotive seat frames. Each controller houses multiple versions of the same logic, which we refer to as stations (e.g., station 1, station 2). 

Recently, I encountered an issue where I had to duplicate an existing functional logic, adjust it for a new sheet, and assign specific variables to correspond with the station number. However, during this process, I observed that certain registers in the new logic were displaying "1.#INF." According to a colleague, this anomaly might be caused by division by zero. Despite looking through the Analog Logic, Output Logic, and Test Logic sections, I couldn't pinpoint where the division by zero occurred. Is there a more efficient way to identify this zero division without manually checking every rung?

I attempted to share a screenshot for better clarity, but encountered some technical difficulties. Below is a snippet of the code I'm working on:

COMMENT /* ANALOG INPUT/OUTPUT FOR POWER STATION 6 */;
COMMENT /* POWER STATION 6 CURRENT DRAW */;
H_WIRE; INT_TO_REAL AI0022,G,%AI0022 R06000,G,%R06000; END_RUNG;
H_WIRE; SUB_REAL R06000,G,%R06000 -60.0 R06002,G,%R06002; H_WIRE; H_WIRE; MUL_REAL R06002,G,%R06002 -1.0 R06004,G,%R06004; H_WIRE; H_WIRE; DIV_REAL R06004,G,%R06004 1050.0 R06006,G,%R06006; END_RUNG;
...

This snippet showcases the complexity of the programming tasks I'm dealing with in relation to power station operations. If you have any insights or solutions to my zero division issue, I would greatly appreciate your input. Thank you for your time and assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Numeric variables are initialized to zero by default, but any variables intended for use as divisors in a DIV function should have a nonzero initial value. To quickly identify instances of division by zero in your ladder logic program, conduct a search for all DIV functions. For better results, use the "Find in Target" search option over the standard "Find" search. Ensure that your PLC target is active within the project before performing the search. This will help optimize your troubleshooting process and prevent errors in your program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I express my gratitude to Steve for prompting me to review my logic, leading me to discover a mistake in a variable. I had mistakenly used the wrong register in a MOVE REAL instruction, causing errors in all my calculations. After identifying and correcting this issue by using the correct register, all the mathematical operations functioned correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ProgrammingNoob</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I identify and fix division by zero issues in PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - To identify division by zero issues in PLC programming, you can use tools like runtime error monitoring, debug mode, or specific PLC programming software features that highlight such errors. Fixing the issue involves reviewing the logic where the division operation occurs and adding checks to prevent division by zero.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a more efficient way to pinpoint division by zero errors in PLC logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, instead of manually checking every rung, you can use debugging tools provided by the PLC programming software to step through the code and identify the specific location where the division by zero occurs. Additionally, you can utilize error logs or monitoring features to track such errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be causing registers to display "1.INF" in PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - The display of "1.INF" in registers typically indicates a result of infinity, which can result from division by zero operations in the PLC logic. It is essential to review the code related to the affected registers and implement safeguards to prevent such zero division scenarios.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot and resolve anomalies like "1.INF" in PLC registers?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting anomalies like "1.INF" in PLC registers involves analyzing the logic related to the affected registers, checking for division operations, and ensuring that appropriate checks are in place to handle division by zero scenarios. Utilizing debugging tools and seeking input from experienced programmers can also aid in</p>
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
