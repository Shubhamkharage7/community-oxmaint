
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone! In this scenario, suppose I have a UDT controller tag called My_UDT with Member1, Member2, and Member3 as its members. After opening the Controller Tags window and entering Member2 in the Filter, I noticed that no matches were displayed. I had anticipated seeing My_UDT.Member2 in the search">
    <meta name="keywords" content="rslogix, udt, member tag, filtering, troubleshooting, issue, controller tags, my_udt, member1, member2, member3, filter, search results, show, configure, include data types, user-defined, filtering">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-rslogix-udt-member-tag-filtering">
    <title>Troubleshooting issue with RSLogix UDT member tag filtering | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting issue with RSLogix UDT member tag filtering | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone! In this scenario, suppose I have a UDT controller tag called My_UDT with Member1, Member2, and Member3 as its members. After opening the Controller Tags window and entering Member2 in the Filter, I noticed that no matches were displayed. I had anticipated seeing My_UDT.Member2 in the search">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-rslogix-udt-member-tag-filtering">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting issue with RSLogix UDT member tag filtering | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone! In this scenario, suppose I have a UDT controller tag called My_UDT with Member1, Member2, and Member3 as its members. After opening the Controller Tags window and entering Member2 in the Filter, I noticed that no matches were displayed. I had anticipated seeing My_UDT.Member2 in the search">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-rslogix-udt-member-tag-filtering"
      },
      "headline": "Troubleshooting issue with RSLogix UDT member tag filtering",
      "description": "Greetings everyone! In this scenario, suppose I have a UDT controller tag called My_UDT with Member1, Member2, and Member3 as its members. After opening the Controller Tags window and entering Member2 in the Filter, I noticed that no matches were displayed. I had anticipated seeing My_UDT.Member2 in the search",
      "author": {
        "@type": "Person",
        "name": "Elcan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">Troubleshooting issue with RSLogix UDT member tag filtering</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Elcan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">385</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">248</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone! In this scenario, suppose I have a UDT controller tag called "My_UDT" with Member1, Member2, and Member3 as its members. After opening the "Controller Tags" window and entering "Member2" in the Filter, I noticed that no matches were displayed. I had anticipated seeing My_UDT.Member2 in the search results. I also tried going to Show -> Configure -> Include Data Types and selected "User-Define." What could be the issue here? Is it not feasible to filter UDT members in this way?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To the best of my knowledge, the filter specifically targets top-level tag names. It is worth noting that the find function (Ctrl-f) can also locate UDT members.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The filter is based on the tag name instead of the structure member names, which means you can't use it to display all Done bits or timer presets. Unfortunately, this feature does not support filtering for those specific criteria.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I had a feeling that was the case. Appreciate your responses!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Elcan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Let's delve deeper into this question - perhaps it deserves its own thread. Is there a method available to mass update tag member values efficiently? For instance, if you have a hundred UDT tags named Valve1, Valve2,...Valve100, each with a .SubSystemIdentifier member (let's say a DINT), it would be great to find a way to update them all at once like a pro. The individual who can offer a practical solution to this will receive eternal Christmas cards from me, give or take.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Marzipani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Marzipani proposed taking the question to the next level by potentially creating a new thread. How can tag member values be updated in bulk? For instance, if there are one hundred UDT tags - such as Valve1, Valve2, up to Valve100 - each with a .SubSystemIdentifier member (let's say a DINT), is there a way to update them all at once? Any solutions provided will receive lifetime Christmas cards from Marzipani. Unsure about what you're asking? You have the ability to add, delete, or rename members of a UDT, and all tags of that UDT type will be automatically updated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
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
            <p>When it comes to modifying user-defined types (UDTs), it may not be obvious what actions you're looking to take. Whether you want to add, remove, or change members of a UDT, all instances of that UDT will be automatically adjusted. To efficiently update the data, consider organizing them as an array and utilizing indirect addressing for iteration. This way, instead of using separate tags like Valve1, Valve2, you can simplify the process by using a format like Valve[1], Valve[2]. This method is commonly used and ensures smoother data management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to plvlce, it seems the suggestion is to update data by using arrays and indirect addressing to iterate through them. This approach, such as using Valve[1], Valve[2] instead of Valve1, Valve2, is often the most straightforward method. I frequently use this technique with arrays of User-Defined Types (UDTs), but I'm unsure about the specific question being asked.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Marzipani posed an interesting question: how can tag member values be updated in bulk? For instance, if there are one hundred UDT tags named Valve1, Valve2, …Valve100, each with a .SubSystemIdentifier member (let's say a DINT), is there a way to update them all at once? Any suggestions on achieving this efficiently will earn you lifetime Christmas cards from Marzipani. 

One approach, if you're not utilizing the Valve[1], Valve[2]... method with a FOR loop, is to create a subroutine. In this subroutine, you can assign a new value to each tag's .SubSystemIdentifier member, such as: 
- MOV NewValue Valve1.SubSystemIdentifier
- MOV NewValue Valve2.SubSystemIdentifier
- ...

Simply input the desired value into the NewValue tag for bulk copying. This subroutine can be called conditionally when needed to update the values. While it may require writing a hundred MOVs initially, it is a one-time task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Elcan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oh, yes! I definitely meant to mention updating the data. Both options are fantastic, although they seemed to slip my mind at first. Using arrays makes perfect sense, but my messy methods have caused issues with PLCs due to sloppy array work. I personally prefer the 'MOV...' routine approach because I can quickly create it in Excel, run it once, and then remove it. Thank you so much for your help. (By the way, I'll be running out of Christmas cards soon, just so you know).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Marzipani</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why can't I filter UDT member tags in RSLogix by entering the member name in the filter field?
- Filtering UDT member tags in RSLogix by entering the member name directly may not work as expected due to the way RSLogix handles tag filtering.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should I do if I can't find UDT member tags when filtering in RSLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are unable to find UDT member tags when filtering in RSLogix, try checking the tag filter settings and ensure that you have selected the appropriate options for data types inclusion.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to filter UDT member tags in RSLogix using the Filter feature?</h4>
<p class='text-muted'><strong>Answer:</strong> - While RSLogix allows filtering of tags, including UDT members, the filtering functionality may not directly display UDT member tags as expected. It is recommended to explore alternative methods for locating specific UDT members within the controller tags.</p>
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
