
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I want to thank everyone for their assistance. I am becoming more comfortable with the S7-300 PLC. In the meantime, I have completed a course on TIA for a new machine featuring S7-1500 and I am impressed with the capabilities of the TIA portal. However, I am facing">
    <meta name="keywords" content="s7-300 plc, tia portal, s7-1500, plc logic, pulse generation, accumulated time, retentive timer, timer reset, logic rung, timers, counters, adders, complex coding">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-create-a-pulse-every-half-second-based-on-accumulated-time-in-s7-300-plcs">
    <title>How to create a pulse every half-second based on accumulated time in S7-300 PLCs? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to create a pulse every half-second based on accumulated time in S7-300 PLCs? | Oxmaint Community">
    <meta property="og:description" content="Hello, I want to thank everyone for their assistance. I am becoming more comfortable with the S7-300 PLC. In the meantime, I have completed a course on TIA for a new machine featuring S7-1500 and I am impressed with the capabilities of the TIA portal. However, I am facing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-create-a-pulse-every-half-second-based-on-accumulated-time-in-s7-300-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to create a pulse every half-second based on accumulated time in S7-300 PLCs? | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I want to thank everyone for their assistance. I am becoming more comfortable with the S7-300 PLC. In the meantime, I have completed a course on TIA for a new machine featuring S7-1500 and I am impressed with the capabilities of the TIA portal. However, I am facing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-create-a-pulse-every-half-second-based-on-accumulated-time-in-s7-300-plcs"
      },
      "headline": "How to create a pulse every half-second based on accumulated time in S7-300 PLCs?",
      "description": "Hello, I want to thank everyone for their assistance. I am becoming more comfortable with the S7-300 PLC. In the meantime, I have completed a course on TIA for a new machine featuring S7-1500 and I am impressed with the capabilities of the TIA portal. However, I am facing",
      "author": {
        "@type": "Person",
        "name": "BobTheBlob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-19",
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
                <h1 class="text-white">How to create a pulse every half-second based on accumulated time in S7-300 PLCs?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BobTheBlob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">194</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">146</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I want to thank everyone for their assistance. I am becoming more comfortable with the S7-300 PLC. In the meantime, I have completed a course on TIA for a new machine featuring S7-1500 and I am impressed with the capabilities of the TIA portal. However, I am facing challenges with my S7-300 PLCs. I am seeking guidance on creating logic to generate a pulse every half-second based on accumulated time. In Rockwell systems, there is a retentive timer that holds the accumulated value when the input (enable) toggles on and off, and resets the cumulative value to zero with a timer reset. I have experimented with various timers in the S7-300, but have not found a suitable solution. How can a logic rung be set up to achieve this? How can a pulse be triggered for every 500 milliseconds of accumulated value? I am open to utilizing a combination of timers, counters, adders, and other functions, but I am struggling to implement this without complex coding. Any guidance or suggestions would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Please note that my expertise lies in working with STEP7 Classic for PLCs such as the S7-300 or S7-400. Within STEP7 Classic, there is a helpful library known as TI-S7 that includes a block called FC80 TONR. While I am unsure of its compatibility with or availability in TIA, the code in TONR is relatively straightforward. By following the same principles, you can create your own version. Essentially, in OB1, you must transfer the local variable #OB1_PREV_CYCLE to a global INT variable (marker). This allows you to increment the timer value during each scan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>On other platforms where there is no Real-Time Operating System (RTO), I have implemented a method using a one-second timer to accurately count up. By continuously running the timer and triggering the counter conditionally, you can avoid losing valuable time during the start and stop process. Through my testing on a CLX system for a month, I have found that this technique only resulted in a 2-second discrepancy over tens of thousands of starts and stops. Utilize the counter accumulator feature to reset and maintain accurate timing measurements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that when working with an S7-300 or S7-400 PLC, they specifically use STEP7 Classic. Within STEP7 Classic, there is a library known as TI-S7 that contains a block called FC80 TONR. It is uncertain if this block is compatible with or available in TIA. The code within TONR is relatively straightforward, allowing users to create their own based on similar principles. To achieve this, one must transfer the local variable #OB1_PREV_CYCLE to a global INT variable (marker) within OB1. This marker can then be utilized to increment the timer value in each scan. I will explore the library for the "converting block," even though the Step 7 version I am using is not in the TIA portal but rather in 5.4 on an XP VM.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BobTheBlob</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I create a pulse every half-second based on accumulated time in S7-300 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - To achieve this in S7-300 PLCs, you can set up a logic rung using timers, counters, adders, and other functions. You may need to utilize a combination of these elements to create the desired pulse every 500 milliseconds based on accumulated time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a retentive timer function in S7-300 PLCs similar to Rockwell systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - While S7-300 PLCs do not have a specific retentive timer function like Rockwell systems, you can still achieve similar functionality by using timers and counters effectively in your logic programming.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I hold the accumulated value when the input toggles on and off in S7-300 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can simulate the behavior of holding the accumulated value when the input toggles on and off by carefully designing your logic using timers and counters to maintain the accumulated value until it needs to be reset.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What approach should I take to implement the pulse generation without complex coding in S7-300 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - While implementing the pulse generation logic in S7-300 PLCs may require a thoughtful combination of timers, counters, and other functions, you can simplify the process by breaking down the task into smaller subtasks and implementing each part step by step. Keep the logic as clear and concise as possible to avoid unnecessary complexity</p>
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
