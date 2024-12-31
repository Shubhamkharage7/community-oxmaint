
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="While trying to display only part of a string tags value, I am unable to find a straightforward solution using text or string objects. It seems that the only option available is to concatenate strings together. For example, if the string in {#100} is Sump Pump 23, I can">
    <meta name="keywords" content="display partial values, string tags, factorytalk view se v10, string tag value, concatenate strings, text objects, display part of string, string tag solution, partial string display, mid function, excel functions, sump pump 23">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-display-partial-values-of-string-tags-in-factorytalk-view-se-v10">
    <title>How to Display Partial Values of String Tags in FactoryTalk View SE V10 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Display Partial Values of String Tags in FactoryTalk View SE V10 | Oxmaint Community">
    <meta property="og:description" content="While trying to display only part of a string tags value, I am unable to find a straightforward solution using text or string objects. It seems that the only option available is to concatenate strings together. For example, if the string in {#100} is Sump Pump 23, I can">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-display-partial-values-of-string-tags-in-factorytalk-view-se-v10">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Display Partial Values of String Tags in FactoryTalk View SE V10 | Oxmaint Community">
    <meta name="twitter:description" content="While trying to display only part of a string tags value, I am unable to find a straightforward solution using text or string objects. It seems that the only option available is to concatenate strings together. For example, if the string in {#100} is Sump Pump 23, I can">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-display-partial-values-of-string-tags-in-factorytalk-view-se-v10"
      },
      "headline": "How to Display Partial Values of String Tags in FactoryTalk View SE V10",
      "description": "While trying to display only part of a string tags value, I am unable to find a straightforward solution using text or string objects. It seems that the only option available is to concatenate strings together. For example, if the string in {#100} is Sump Pump 23, I can",
      "author": {
        "@type": "Person",
        "name": "Tanquen"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">How to Display Partial Values of String Tags in FactoryTalk View SE V10</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tanquen</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4941</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">351</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>While trying to display only part of a string tag's value, I am unable to find a straightforward solution using text or string objects. It seems that the only option available is to concatenate strings together. For example, if the string in {#100} is "Sump Pump 23", I can add text like {#100} + " Running" to get "Sump Pump 23 Running". However, there doesn't appear to be a direct way to display just "Pump 23 Running" without additional functions like MID in Excel.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're not comfortable with VBA, it may seem like the only option is to concatenate strings. However, I discovered a workaround using the string variable "Fixed number of characters" and "Right-most characters in string are displayed" options. By utilizing this method, I was able to display the last 5 characters that I required. It's possible to remove characters from the front but not from the middle or left. This raises the question: why include a right option but not a mid or left option?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tanquen</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are new to Rockwell HMIs, be aware that their HMI products may not meet your expectations. There are numerous instances where they fall short of what is expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Phrog30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a new mouse with a scroll wheel?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LoganB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>LoganB inquired about the functionality of a mouse scroll wheel. Visit this discussion thread for more information: http://www.plctalk.net/qanda/showthread.php?p=753587#post753587. @Tanquen suggested using VBA to easily extract substrings. Utilizing VBA wisely in FactoryTalk View (FTV) can help avoid potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>crawler009</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why should I consider using VBA in my software development process? Although it may seem complicated at first, there are numerous benefits to using VBA. While it may require additional objects and precautionary measures to prevent slowdowns, VBA offers a range of functionalities that can streamline tasks. Despite its historical use and longevity, there are still unresolved issues such as disappearing handles when selecting objects, which can be frustrating for users. Additionally, the high cost of certain software packages and difficulties with implementing protocols like OPC-UA can be barriers to efficient workflow. In my experience, incorporating VBA with global objects has presented challenges, leading to crashes and corrupted screens. Despite these obstacles, VBA remains a valuable tool with the potential to enhance productivity and streamline processes in software development projects.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tanquen</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Tanquen expressed concerns about using VBA in software, citing complexity and potential issues with handling objects. Despite being expensive and long-standing, there are lingering unresolved issues with the software. The challenges with implementing global objects in FactoryTalk View were highlighted, with comparisons made to other software like Zenon from copa data. The frustration with the software's flaws and the reluctance of Rockwell to address them were also noted. Customers, especially in the US, continue to prefer running their plants with FactoryTalk View despite its shortcomings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>crawler009</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When individuals are making a substantial profit, they are less motivated to invest the necessary effort into implementing improvements. This lack of incentive can hinder progress and hinder growth in their endeavors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LoganB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To extract the first characters from a string, you can specify a fixed number of characters. To get the last characters, specify both a fixed number of characters and select the Right-Most option. This allows you to extract specific portions of a string easily.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TechBuddyPro</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I display only part of a string tag's value in FactoryTalk View SE V10?
- To display only part of a string tag's value in FactoryTalk View SE V10, you can concatenate strings together to achieve the desired output. For example, by using the expression {100} + " Running", you can display a modified version of the string tag's value.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a direct way to display a specific portion of a string tag's value without using additional functions like MID?</h4>
<p class='text-muted'><strong>Answer:</strong> - In FactoryTalk View SE V10, there isn't a direct built-in function to display a specific portion of a string tag's value without using additional functions like MID. You can achieve this by concatenating strings and manipulating the output to display the desired partial value.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can I display a substring of a string tag's value in FactoryTalk View SE V10 without complex Excel-like functions?</h4>
<p class='text-muted'><strong>Answer:</strong> - While FactoryTalk View SE V10 may not offer a direct method to display a substring of a string tag's value without complex functions, you can still achieve partial value display by creatively using string concatenation and manipulation within the software.</p>
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
