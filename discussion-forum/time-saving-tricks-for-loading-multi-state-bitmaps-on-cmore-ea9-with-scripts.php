
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my personal project, I am utilizing a CMORE device to load approximately 200 multi-state bitmaps, each with a unique position and reference tag. As a programmer, I aim to avoid manual copying, pasting, moving, and re-tagging. Upon exploring my Productivity Suite projects, I found that the saved file">
    <meta name="keywords" content="cmore ea9, multi-state bitmaps, loading images, time-saving tricks, productivity suite projects, xml files, scripting, automation, developer tips, cmore device, programming, bitmap management, tagging, positioning, script failure">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/time-saving-tricks-for-loading-multi-state-bitmaps-on-cmore-ea9-with-scripts">
    <title>Time-Saving Tricks for Loading Multi-State Bitmaps on CMORE EA9 with Scripts | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Time-Saving Tricks for Loading Multi-State Bitmaps on CMORE EA9 with Scripts | Oxmaint Community">
    <meta property="og:description" content="In my personal project, I am utilizing a CMORE device to load approximately 200 multi-state bitmaps, each with a unique position and reference tag. As a programmer, I aim to avoid manual copying, pasting, moving, and re-tagging. Upon exploring my Productivity Suite projects, I found that the saved file">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/time-saving-tricks-for-loading-multi-state-bitmaps-on-cmore-ea9-with-scripts">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Time-Saving Tricks for Loading Multi-State Bitmaps on CMORE EA9 with Scripts | Oxmaint Community">
    <meta name="twitter:description" content="In my personal project, I am utilizing a CMORE device to load approximately 200 multi-state bitmaps, each with a unique position and reference tag. As a programmer, I aim to avoid manual copying, pasting, moving, and re-tagging. Upon exploring my Productivity Suite projects, I found that the saved file">
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
        "@id": "https://community.oxmaint.com/discussion-forum/time-saving-tricks-for-loading-multi-state-bitmaps-on-cmore-ea9-with-scripts"
      },
      "headline": "Time-Saving Tricks for Loading Multi-State Bitmaps on CMORE EA9 with Scripts",
      "description": "In my personal project, I am utilizing a CMORE device to load approximately 200 multi-state bitmaps, each with a unique position and reference tag. As a programmer, I aim to avoid manual copying, pasting, moving, and re-tagging. Upon exploring my Productivity Suite projects, I found that the saved file",
      "author": {
        "@type": "Person",
        "name": "imcottengim"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-02",
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
                <h1 class="text-white">Time-Saving Tricks for Loading Multi-State Bitmaps on CMORE EA9 with Scripts</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>imcottengim</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">281</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">247</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my personal project, I am utilizing a CMORE device to load approximately 200 multi-state bitmaps, each with a unique position and reference tag. As a programmer, I aim to avoid manual copying, pasting, moving, and re-tagging. Upon exploring my Productivity Suite projects, I found that the saved file consists of XML files, which can be easily scripted. However, this approach did not work in this scenario. Are there any developers out there aware of any time-saving tricks for this task?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're considering manually tagging a large number of items, I recommend creating duplicates to test the screen lag on your HMI first. Using multistate bitmaps can be resource-intensive, and loading 200 addresses individually could cause delays. It's important to test the performance before committing to displaying all 200 items on the same screen to avoid potential disappointment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There is a restriction on the number of elements you can add to each screen. Unfortunately, the exact limit slips my mind at the moment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeexplorer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're considering automating mouse clicks, consider using a program designed for this purpose. Organize everything into arrays, begin with one screen containing one instance at the first index, record clicks, duplicate the screen, increase the arrays on objects by one, and then initiate the program. However, before investing significant time on this task, be aware that having 200 multi-state bit maps may cause lag and make the Human-Machine Interface (HMI) unusable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have discovered in the EA9 that having more than 20 global events can significantly impact performance, especially when using the on-screen keyboard. I attempted to replicate the pilot list selector functionality from a PV+ in an EA9, and while I achieved success, it resulted in noticeable slowdowns. The same issue arose with the built-in alarm handling - once the number of alarms exceeded a certain point, performance began to suffer. It is important to test your application with a small number of events before considering implementing an automated programming tool. However, if you are simply looking for a challenge and enjoy experimenting, it may still be worth pursuing. In a professional setting, I would recommend exploring alternative solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I efficiently load multiple multi-state bitmaps on a CMORE EA9 device without manual copying, pasting, and re-tagging?
- One efficient approach is to utilize scripting to automate the process. While attempting to script the XML files directly may not work in this scenario, there are alternative time-saving tricks that developers have discovered.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are there any specific tips or techniques for loading a large number of multi-state bitmaps with unique positions and reference tags on a CMORE device?</h4>
<p class='text-muted'><strong>Answer:</strong> - To streamline the process of loading numerous multi-state bitmaps with unique attributes, developers have explored various strategies such as leveraging scripting capabilities within the Productivity Suite projects.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can scripting be used to automate the loading of 200 multi-state bitmaps on a CMORE EA9 device?</h4>
<p class='text-muted'><strong>Answer:</strong> - Although directly scripting the XML files might not yield the desired results, developers have found ways to automate the process of loading multiple multi-state bitmaps efficiently on a CMORE device through alternative methods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are some time-saving tricks that developers have discovered for loading multi-state bitmaps on a CMORE EA9 device?</h4>
<p class='text-muted'><strong>Answer:</strong> - Developers have shared insights on leveraging scripting, exploring automation possibilities within the Productivity Suite projects, and seeking alternative approaches to efficiently handle the loading of a large number of multi-state bitmaps on a CMORE device.</p>
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
