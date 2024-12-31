
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="While I am experienced with PLCs, I have encountered a new issue. In the ladder logic, one of my indirectly addressed tags is displaying as a ?? However, when I check the tag in the Program Tags tab, the correct data is shown. Despite my attempts to overwrite the">
    <meta name="keywords" content="rslogix 5000, troubleshooting, tag display, indirectly addressed tag, ladder logic, program tags, data display issue, overwrite data, plc issue, indirect tag problem, rslogix error, tag">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rslogix-5000-tag-displaying-as-how-to-fix-indirectly-addressed-tag-issue">
    <title>Troubleshooting RSLogix 5000 Tag Displaying as ?? - How to Fix Indirectly Addressed Tag Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting RSLogix 5000 Tag Displaying as ?? - How to Fix Indirectly Addressed Tag Issue | Oxmaint Community">
    <meta property="og:description" content="While I am experienced with PLCs, I have encountered a new issue. In the ladder logic, one of my indirectly addressed tags is displaying as a ?? However, when I check the tag in the Program Tags tab, the correct data is shown. Despite my attempts to overwrite the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rslogix-5000-tag-displaying-as-how-to-fix-indirectly-addressed-tag-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting RSLogix 5000 Tag Displaying as ?? - How to Fix Indirectly Addressed Tag Issue | Oxmaint Community">
    <meta name="twitter:description" content="While I am experienced with PLCs, I have encountered a new issue. In the ladder logic, one of my indirectly addressed tags is displaying as a ?? However, when I check the tag in the Program Tags tab, the correct data is shown. Despite my attempts to overwrite the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rslogix-5000-tag-displaying-as-how-to-fix-indirectly-addressed-tag-issue"
      },
      "headline": "Troubleshooting RSLogix 5000 Tag Displaying as ?? - How to Fix Indirectly Addressed Tag Issue",
      "description": "While I am experienced with PLCs, I have encountered a new issue. In the ladder logic, one of my indirectly addressed tags is displaying as a ?? However, when I check the tag in the Program Tags tab, the correct data is shown. Despite my attempts to overwrite the",
      "author": {
        "@type": "Person",
        "name": "Tango7"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-06",
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
                <h1 class="text-white">Troubleshooting RSLogix 5000 Tag Displaying as ?? - How to Fix Indirectly Addressed Tag Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tango7</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6761</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">88</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>While I am experienced with PLCs, I have encountered a new issue. In the ladder logic, one of my indirectly addressed tags is displaying as a "??" However, when I check the tag in the Program Tags tab, the correct data is shown. Despite my attempts to overwrite the data in the ladder logic viewer, the "??" persists. Has anyone else experienced this issue and what steps should I take to resolve it? Any assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While an example would be beneficial, I will attempt to explain without one. When programming multiple TON instances with an array of TON tags and a variable index, the preset and accumulator may display as ??. This is due to the lack of a single correct value for the instruction, as multiple values exist within the array of TON tags. If this explanation does not help, can you offer an example to clarify the issue further?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mellis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Similar to this scenario, it is surprising but effective that the data type being used is a string.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you tried reinitializing the "ProductIDPointerValue" variable? It's possible that it is being assigned a value corresponding to an invalid element in the "PCData" array. However, it may then be updated to a valid number before the condition is met and the inequality comparison is made. Subsequently, it could be reverted back to an invalid number, causing the output to always display as '??'. This is just my hypothesis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheStarr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Despite initial doubts, the approach turned out to be effective and the process ran smoothly. To improve efficiency, I made adjustments to the logic by eliminating the indirect address and simply utilizing the tag "ProductIDPointerValue" in the comparison, along with another DINT. My aim was not to hijack the conversation, but rather to offer insight into the issue at hand for the benefit of others who may be experiencing a similar problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Has anyone encountered or found a solution to this issue with their PLC? After flashing my PLC, it started behaving oddly, frequently entering major fault mode. I had to make adjustments to the non-volatile memory parameters to prevent this from happening. While some values are fine, others, such as the array values like alarmstimers.[1].Pre, only show ?? instead of the expected 4000ms. This abnormal behavior is puzzling and needs to be addressed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>taward31</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is possible that the indirect address provided may not be valid. If the tag value within the [square brackets] points to a location that does not exist, it is likely that the error signal will appear. Make sure to verify the correctness of the indirect address to avoid encountering this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ron Beaufort</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for not being clear earlier. The issue I am facing seems to be related to using an array of Strings or Timers. I am experiencing constant crashes and disconnections, with a recurring error message of '??'. I suspect the problem lies with a defective controller, as it requires a complete fault clear and re-download whenever I reconnect. The logged fault on 1/1/1998 at 12:00:03 AM indicates a Power-up Fault (Code 60) that is deemed Non-recoverable. The fault information dump includes: Info[0]: f104a82c, Info[1]: 000000ea, Info[2]: 000000a5, Info[3]: 00000000. Thank you, Tom.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>taward31</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In addressing ladder display challenges, it's important to note that indirection can pose limitations. The ladder display lacks the ability to track which tags correspond to certain values. Indirect addressing can either utilize the value of another tag or calculate the indirection from within square brackets. While RSLogix/Studio5000 can show directly referenced tag elements like MyTimers[56].ACC, it struggles to display indirectly referenced tags such as MyTimers[Pointer_into_MyTimers].ACCHowever, accessing the tag database allows you to view indirectly referenced data by decoding or evaluating the array index. If you've recently flashed your controller, please provide the model number and revision for further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to daba, the ladder display in RSLogix/Studio5000 may not be able to resolve indirection when it comes to tracking which tags hold specific values. Indirect addresses can either use another tag's value or calculate indirection from an expression within square brackets. While directly referenced tag elements like MyTimers[56].ACC can be displayed, indirectly referenced tag elements like MyTimers[Pointer_into_MyTimers].ACC cannot be directly viewed. However, by exploring the tag database and decoding the array index, the indirectly referenced data can still be accessed. It's important to note that some limitations exist, such as displaying "?? on strings. For individuals like taward31, they may experience different issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder pointed out that the software can handle indirect addresses, except when accessing strings indirectly, resulting in the display of '??' for strings. It appears that there may be additional factors affecting taward31 compared to the Original Poster. Your timer example, daba, will indeed show the ACC in both cases.

It is possible that the displayed ACC value for the indirectly addressed timer reflects the data fetched by RSLinx half a second earlier. If the indirection tag is widely used throughout the code, consistency may be a concern. The ladder view operates asynchronously, updating at a slower rate than the PLC code execution. Thus, what is observed on the ladder display in RSLogix/Studio 5000 may not align with actual code execution.

During training sessions, rung order and placement are emphasized through the use of extensive FOR loops to mimic real programs. The inconsistent display of indirectly addressed STRING data in visualization software could be attributed to the software's snapshot nature, capturing the ever-changing environment at intervals.

The SLC500 platform was renowned for its debugging modes, such as single scan, offering valuable insights for troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>daba speculated whether the ACC value captured at the moment RSLinx retrieved data from the indirectly addressed timer half a second earlier would be shown. In scenarios where the indirection tag is extensively used in the code, it is important to note that the ladder view operates asynchronously and is updated at a significantly slower rate than the PLC code execution. Therefore, the information displayed in RSLogix/Studio5000 may not accurately reflect real-time operations. It is crucial to understand that integers are correctly displayed when indirectly addressed, whereas strings may not appear as expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I stumbled upon a helpful solution today that solved a frustrating issue I was facing. I encountered trouble while using an equals instruction to compare strings, particularly with the "Unknown" value in the indirectly addressed string causing me much frustration. I have realized the importance of using a buffer tag to capture the value at the moment the string is updated, instead of trying to read the indirectly addressed value. Despite having experience in this field since 2007, this issue is new to me. It seems I was fortunate to come across this solution now.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RockwellParachuteTester</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my indirectly addressed tag in RSLogix 5000 displaying as "??" in the ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The display of "??" for an indirectly addressed tag in RSLogix 5000 indicates that the data for that tag is not being properly resolved or displayed in the ladder logic viewer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I fix the issue of an indirectly addressed tag showing as "??" in RSLogix 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve this issue, you may need to check the data integrity of the tag, ensure proper addressing and referencing in the ladder logic, and potentially troubleshoot any communication or configuration issues that could be causing the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should I take if I encounter the problem of a correct tag data displaying in the Program Tags tab but as "??" in the ladder logic viewer in RSLogix 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are facing this issue, you can try overwriting the data in the ladder logic viewer, verifying the addressing and references in the ladder logic, and seeking assistance from other experienced PLC users who may have encountered and resolved similar problems.</p>
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
