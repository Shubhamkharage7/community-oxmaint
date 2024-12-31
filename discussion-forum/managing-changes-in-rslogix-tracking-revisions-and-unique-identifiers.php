
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there! I understand that my title may be a bit cryptic, but Im currently involved in a rehabilitation project where we are having a dilemma regarding the existing InTouch windows. The customer wants us to keep them, but we would prefer not to add duplicate data that would">
    <meta name="keywords" content="rslogix, tracking revisions, unique identifiers, intouch windows, duplicate data, budget constraints, isa-101 guidelines, resource management, practical decisions, plc modifications, schneider feature, date and time tracking, full build, minor build">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/managing-changes-in-rslogix-tracking-revisions-and-unique-identifiers">
    <title>Managing Changes in RSLogix - Tracking Revisions and Unique Identifiers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Managing Changes in RSLogix - Tracking Revisions and Unique Identifiers | Oxmaint Community">
    <meta property="og:description" content="Hello there! I understand that my title may be a bit cryptic, but Im currently involved in a rehabilitation project where we are having a dilemma regarding the existing InTouch windows. The customer wants us to keep them, but we would prefer not to add duplicate data that would">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/managing-changes-in-rslogix-tracking-revisions-and-unique-identifiers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Managing Changes in RSLogix - Tracking Revisions and Unique Identifiers | Oxmaint Community">
    <meta name="twitter:description" content="Hello there! I understand that my title may be a bit cryptic, but Im currently involved in a rehabilitation project where we are having a dilemma regarding the existing InTouch windows. The customer wants us to keep them, but we would prefer not to add duplicate data that would">
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
        "@id": "https://community.oxmaint.com/discussion-forum/managing-changes-in-rslogix-tracking-revisions-and-unique-identifiers"
      },
      "headline": "Managing Changes in RSLogix - Tracking Revisions and Unique Identifiers",
      "description": "Hello there! I understand that my title may be a bit cryptic, but Im currently involved in a rehabilitation project where we are having a dilemma regarding the existing InTouch windows. The customer wants us to keep them, but we would prefer not to add duplicate data that would",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-11",
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
                <h1 class="text-white">Managing Changes in RSLogix - Tracking Revisions and Unique Identifiers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">475</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">287</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there! I understand that my title may be a bit cryptic, but I'm currently involved in a rehabilitation project where we are having a dilemma regarding the existing InTouch windows. The customer wants us to keep them, but we would prefer not to add duplicate data that would require extra effort to manage. This may seem like a trivial issue, but it actually doubles our workload, especially considering the budget constraints we are working with. The ISA-101 guidelines are open to interpretation, which adds another layer of complexity to the situation.

Given the contractual challenges we are facing from the customer, I am striving to make the most of the existing resources and make practical decisions, even if the layout is subpar. This leads me to the issue of modifying strings that require manual changes in the PLCs, which realistically may not happen frequently.

While pondering this issue, I came across a feature in Schneider where I could track the date and time of the last full build and minor build, providing insight into any changes made by the customer while I am working on a new configuration. This proactive approach allows me to ensure I am working with the most up-to-date information before implementing any changes. However, I am curious if there is a similar functionality in RSLogix / Studio 5000 to track changes or unique identifiers. I have come across the Audit feature with a GSV, but I am unsure of its functionality.

Any insights on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While I may not be an expert in loops, I am definitely a beginner. What is happening in this code snippet? The code declares two integer variables, iLEN and iLOOP. iLEN is assigned the length of the string GX_LOGIN_PASSWORD. The password is then hidden by replacing each character with an asterisk using a loop. However, it currently only replaces the characters with ***. This seems like a lazy approach. I want to modify it so that it always shows a consistent number of asterisks, regardless of the password length. I will experiment with the code iLEN = StringLen(GX_LOGIN_PASSWORD);, but I am still unsure how it determines to use *** instead of 123. The line GX_LOGIN_PASSWORD_HIDDEN = GX_LOGIN_PASSWORD_HIDDEN + "*"; is perplexing to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Who would utilize a flag displaying the word "start" alongside it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dalporto expressed confusion over the statement GX_LOGIN_PASSWORD_HIDDEN = GX_LOGIN_PASSWORD_HIDDEN + "*". The equals sign acts as a gateway in time. Upon execution, the expression on the right side of the = sign is evaluated using the values any tags had before the statement is executed. The result is temporarily stored in a buffer. After evaluation, this result is then moved into the tag on the left side of the = sign. 

During each iteration of the loop, the + sign indicates that the string "*" is appended to the value of GX_LOGIN_PASSWORD_HIDDEN on the right side of the = sign. The concatenated result is then written to GX_LOGIN_PASSWORD_HIDDEN on the left side of the = sign. 
Initially, GX_LOGIN_PASSWORD_HIDDEN is an empty string. On each iteration, "*" is added to the existing value, gradually filling GX_LOGIN_PASSWORD_HIDDEN with asterisks until it matches the length of GX_LOGIN_PASSWORD.

This process continues until all characters in GX_LOGIN_PASSWORD_HIDDEN are replaced with asterisks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After clarifying the process, I realize I need to further experiment on my own to fully grasp it. In the meantime, I may have gone overboard or made a foolish decision, but it is producing the desired results. In the code snippet below, I am initializing variables iLEN and iLOOP as integers. The GX_LOGIN_PASSWORD_HIDDEN is set to an empty string, and if GX_LOGIN_PASSWORD is also empty, the iLEN is set to 0; otherwise, it is set to 20. Using a loop from 1 to iLEN, the GX_LOGIN_PASSWORD_HIDDEN is populated with "*" characters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this code snippet, IF the GX_LOGIN_PASSWORD is empty, then the GX_HIDDEN_PASSWORD is also set to empty. However, if the GX_LOGIN_PASSWORD is not empty, the GX_HIDDEN_PASSWORD is set to a string of asterisks. This simple IF-ELSE statement helps secure sensitive information in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe it would be more efficient to avoid running a partially ineffective loop. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to note that Brian is correct, but let's focus on the crucial aspect you inquired about. When it comes to racing events, the checkered flag symbolizes the conclusion of the race. To enhance clarity, start by replacing the Start flag with a solid green one. Then, adjust the checkered flag to read "Finish." Additionally, consider reviewing and updating any relevant tags for accuracy. Best of luck with your edits!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rube</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I wouldn't be shocked if they decided to weigh in on the recent change in flag design. "Operators are accustomed to this kind of situation, so they probably won't even come across the page now!"</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What challenges are faced when managing changes in RSLogix and tracking revisions in a rehabilitation project?</h4>
<p class='text-muted'><strong>Answer:</strong> Challenges may include dealing with existing InTouch windows, customer demands to keep certain data, avoiding duplicate data, managing workload effectively, considering budget constraints, interpreting ISA-101 guidelines, and making practical decisions while maintaining resource efficiency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I efficiently handle modifications that require manual changes in PLCs and ensure up-to-date information is utilized?</h4>
<p class='text-muted'><strong>Answer:</strong> Exploring functionalities like tracking the date and time of the last full build and minor build, similar to the feature in Schneider, can provide insights into changes made by customers and help in working with the most recent information before implementing modifications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a feature in RSLogix / Studio 5000 to track changes or unique identifiers like in Schneider's tool?</h4>
<p class='text-muted'><strong>Answer:</strong> While RSLogix / Studio 5000 may have functionalities like the Audit feature with a GSV, further exploration and understanding of its capabilities are needed to effectively track changes and unique identifiers in the project.</p>
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
