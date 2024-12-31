
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently dealing with a challenge involving tracing communication between numerous PLCs that contain multiple MSG instructions. Is there a method to identify the specific tags serving as the source or destination in these MSG instructions without having to manually open each instructions setup dialog? Surprisingly, the tags">
    <meta name="keywords" content="rockwell logix version 24, msg instructions, source tags, destination tags, plc communication, tracing communication, multiple msg instructions, identify tags, setup dialog, cross-reference, rockwell oversight, plcs, communication tracing, rockwell log">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-identify-source-destination-tags-in-rockwells-logix-version-24-msg-instructions">
    <title>How to Identify Source/Destination Tags in Rockwells Logix Version 24 MSG Instructions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Identify Source/Destination Tags in Rockwells Logix Version 24 MSG Instructions | Oxmaint Community">
    <meta property="og:description" content="I am currently dealing with a challenge involving tracing communication between numerous PLCs that contain multiple MSG instructions. Is there a method to identify the specific tags serving as the source or destination in these MSG instructions without having to manually open each instructions setup dialog? Surprisingly, the tags">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-identify-source-destination-tags-in-rockwells-logix-version-24-msg-instructions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Identify Source/Destination Tags in Rockwells Logix Version 24 MSG Instructions | Oxmaint Community">
    <meta name="twitter:description" content="I am currently dealing with a challenge involving tracing communication between numerous PLCs that contain multiple MSG instructions. Is there a method to identify the specific tags serving as the source or destination in these MSG instructions without having to manually open each instructions setup dialog? Surprisingly, the tags">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-identify-source-destination-tags-in-rockwells-logix-version-24-msg-instructions"
      },
      "headline": "How to Identify Source/Destination Tags in Rockwells Logix Version 24 MSG Instructions",
      "description": "I am currently dealing with a challenge involving tracing communication between numerous PLCs that contain multiple MSG instructions. Is there a method to identify the specific tags serving as the source or destination in these MSG instructions without having to manually open each instructions setup dialog? Surprisingly, the tags",
      "author": {
        "@type": "Person",
        "name": "ErmaGersh"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">How to Identify Source/Destination Tags in Rockwells Logix Version 24 MSG Instructions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ErmaGersh</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">311</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">86</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently dealing with a challenge involving tracing communication between numerous PLCs that contain multiple MSG instructions. Is there a method to identify the specific tags serving as the source or destination in these MSG instructions without having to manually open each instruction's setup dialog? Surprisingly, the tags are not listed in the cross-reference as arguments for the MSG instruction, indicating a potential oversight by Rockwell.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Would you like to save your project as a L5K file and then use a text editor to easily locate the MSG instructions and view their configuration settings?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the MSG tag, you can identify and modify the remote element (the source for reading and the destination for writing) as 'RemoteElement'. While you can view and monitor the elements of other tags, the local element is not accessible in the programming software for security reasons. One possible way to view the configuration of MSG instructions is to save as a L5K file and use an editor to search for them. This method may provide insights into the stored location of the local element within the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ErmaGersh inquired about how to efficiently trace communications between multiple PLCs with numerous MSG instructions. Is there a method to identify the source/destination tags in MSG instructions without manually accessing each instruction's configuration dialog? Surprisingly, the tags do not appear in cross-references as arguments for MSG instructions, which appears to be a significant omission by Rockwell. Cross-references solely search for symbols (tag names), while message source/destination elements serve as pointers to tag data values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Message Tag displays the Remote Source/Destination as the RemoteElement, allowing you to easily categorize tags by Type. By cross-referencing "*", you can identify the PLC Source/Destination. Sort the Element column and locate the MSG tags to view associated tags in the Reference Column, including the Source tag. Each instance pair includes the MSG tag and the corresponding PLC tag being written to. This process provides clarity and streamlines tag management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee explained how to identify PLC Source and Destination by cross-referencing "*", sorting the Element column, and locating MSG. By examining the tags associated with MSG in the Reference Column, you can find the Source tag for each instance pair. This pair includes the MSG tag and the PLC tag being written to. It is interesting to learn this method. How did you discover it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>User plvlce mentioned that they learned something new today. They were curious about how someone managed to discover a certain piece of information. When it comes to finding out what tags are used in MSG instructions, it can be helpful to cross-reference the tag name to see where it is used. This can provide insight into the specific tags being utilized in MSG instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to jstolaruk, understanding the tag name allows for cross-referencing to identify its usage in the MSG instruction. The inquiry at hand is regarding the tags utilized in MSG instructions. By using a wildcard (*) for cross-referencing and sorting by Reference (MSG), one can view all tags employed in MSG instructions. Click to expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce mentioned they learned something new today. How did you uncover that? I accepted the challenge from the original poster and made an educated guess which turned out to be successful. This experience added another valuable tool to my arsenal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee confirmed that by using a wildcard * and sorting by Reference (MSG), you can view all the tags specified in MSG instructions. Can you share how you achieved this? Did you use the * tags for this purpose?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When cross-referencing with a wildcard *, sorting by Reference (MSG) reveals all tags utilized in MSG instructions. However, I am experiencing difficulty entering "*" in the Name field for cross-referencing. Am I overlooking something? Despite entering it, the results are empty upon refreshing the page.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ErmaGersh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ErmaGersh expressed frustration with the cross-reference tool not allowing them to enter "*" in the Name field. Despite trying to refresh the page, no results were returned. However, the tool worked successfully for another user on version 34. It is unclear if this restriction was a new addition to Studio along the way.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ErmaGersh expressed frustration over the inability to enter "*" in the Name field for cross-referencing. Despite being able to input it, no results are returned upon refresh. This issue also puzzled Robertmee. While it worked for him on version 34, he was unsure if this feature was added to Studio. However, it did not work in version 32, while someone confirmed it worked in version 36.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jstolaruk confirmed that the feature was not working in version 32, but is working in version 36. Click to expand for more information. It's frustrating when things don't go as expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ErmaGersh expressed frustration over the inability to use "*" in the Name field for cross-referencing. Despite being able to enter the asterisk, no results are returned upon refreshing. Upon further investigation, it was discovered that newer versions such as v34 support wildcards, while older versions like v24 and v32 do not. This change in wildcard usage in xref appears to be recent. Interestingly, it was also observed that versions lacking wildcard support will instead match partial entries as if the asterisk is added before and after the input. This means that even if message tags have similarities in their names, you can utilize this feature to create xrefs similar to using wildcards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, user robertmee mentioned that using a specific method worked well for them in upgrading their ACDs to version 34. Despite being on a different version (24), they believe this method could have been an added feature in Studio overtime. Other users in the thread also appreciated the advice and expressed gratitude for the assistance provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ErmaGersh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee expressed his frustration by saying "Well ain't that a pisser," but added that it was a nice addition and good to know.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce mentioned that they tested a program with a MSG using wildcards, and it worked fine with v34. However, when testing with v24 and v32, the wildcards did not match anything. This suggests that the usage of wildcards may have recently changed. During testing, they also observed that versions without wildcard support will match partial entries as if there were wildcards added before and after the input. Additionally, they raised a question about what would happen if an asterisk (*) is followed by a space or two. Unfortunately, they were unable to check this on their early VMs due to time constraints.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about a potential solution for accessing early VMs without opening them - what happens if you input * followed by a space or two? Despite this attempt, there was still no progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ErmaGersh</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I identify the source or destination tags in MSG instructions in Rockwell's Logix Version 24 without manually opening each setup dialog?
- Unfortunately, Rockwell's Logix Version 24 does not list the tags as arguments in the cross-reference for MSG instructions, making it challenging to identify them without manual intervention.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a workaround to quickly identify specific tags serving as the source or destination in multiple MSG instructions in Rockwell's Logix Version 24?</h4>
<p class='text-muted'><strong>Answer:</strong> - Due to the oversight by Rockwell in not listing the tags in the cross-reference, users may need to manually open each MSG instruction's setup dialog to identify the source or destination tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any tools or features within Rockwell's Logix Version 24 that can streamline the process of tracing communication between PLCs with multiple MSG instructions?</h4>
<p class='text-muted'><strong>Answer:</strong> - Rockwell's Logix Version 24 does not offer a direct method to identify source or destination tags in MSG instructions, and users may have to rely on manual inspection of each instruction's setup dialog.</p>
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
