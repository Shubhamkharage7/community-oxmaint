
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have two pieces of equipment that are identical in settings, yet one has a cycle time approximately 17% longer than the other. Despite confirming that all gantry speeds and permissive steps for sequences are the same between the two, they should ideally be running at the same cycle">
    <meta name="keywords" content="task overlap discrepancy, studio 5000 l83e machines, cycle time discrepancy, identifying root cause, machine task configuration, gantry speeds">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/identifying-root-cause-of-task-overlap-discrepancy-in-studio-5000-l83e-machines">
    <title>Identifying Root Cause of Task Overlap Discrepancy in Studio 5000 L83E Machines | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Identifying Root Cause of Task Overlap Discrepancy in Studio 5000 L83E Machines | Oxmaint Community">
    <meta property="og:description" content="I have two pieces of equipment that are identical in settings, yet one has a cycle time approximately 17% longer than the other. Despite confirming that all gantry speeds and permissive steps for sequences are the same between the two, they should ideally be running at the same cycle">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/identifying-root-cause-of-task-overlap-discrepancy-in-studio-5000-l83e-machines">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Identifying Root Cause of Task Overlap Discrepancy in Studio 5000 L83E Machines | Oxmaint Community">
    <meta name="twitter:description" content="I have two pieces of equipment that are identical in settings, yet one has a cycle time approximately 17% longer than the other. Despite confirming that all gantry speeds and permissive steps for sequences are the same between the two, they should ideally be running at the same cycle">
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
        "@id": "https://community.oxmaint.com/discussion-forum/identifying-root-cause-of-task-overlap-discrepancy-in-studio-5000-l83e-machines"
      },
      "headline": "Identifying Root Cause of Task Overlap Discrepancy in Studio 5000 L83E Machines",
      "description": "I have two pieces of equipment that are identical in settings, yet one has a cycle time approximately 17% longer than the other. Despite confirming that all gantry speeds and permissive steps for sequences are the same between the two, they should ideally be running at the same cycle",
      "author": {
        "@type": "Person",
        "name": "elons_nephew"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-11",
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
                <h1 class="text-white">Identifying Root Cause of Task Overlap Discrepancy in Studio 5000 L83E Machines</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>elons_nephew</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">301</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">8</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have two pieces of equipment that are identical in settings, yet one has a cycle time approximately 17% longer than the other. Despite confirming that all gantry speeds and permissive steps for sequences are the same between the two, they should ideally be running at the same cycle time. Both machines have the same Task configuration settings - Period = 100ms, Priority = 3, Watchdog = 500. However, one machine is experiencing a significant increase in task overlap count, reaching 2000 within a 5-minute span. When comparing the Max scan times under the Monitor Tab, the slower machine has a 17% higher max scan time than the faster one. On further investigation, adding up all the max scan times for individual programs in the task reveals that both machines have a total of approximately 15ms. The question remains: where should I focus my attention to identify the root cause of the slowdown in this task?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for key indicators in Logix programming, keep an eye out for JMP or FOR instructions, CPS, FAL in "all" mode, and file/shift instructions. Logix doesn't include "blocking" or "wait" instructions, so identifying looping, long-executing instructions, or large AOIs like those found in PlantPAx can help pinpoint issues. Additionally, large arrays in your program may also be a red flag when troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When higher-priority tasks or movements are introduced, they can cause interruptions and delays to your scheduled activities. It is important to avoid having any additional tasks with identical priorities to prevent further disruptions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Contr_Conn, higher priority tasks or motions may interrupt and delay your periodic tasks. It is important to ensure that there are no additional tasks with the same priority level. It has been noted that there is another task with a higher priority and a period of 7ms. Despite this, the equipment has been operating in this manner for years without any clear indication of what may have caused the slowdown. Pointer should be given to any potential changes that could have led to this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>elons_nephew</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When comparing the RPIs of devices, there may or may not be a noticeable impact. This comparison could help in determining the best device for your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am concerned about the overlap of tasks, which can lead to increased scan time for programs and potential watchdog faults. It is crucial to avoid any task overlaps, especially to prevent a rapid increase in them. To address this issue, I will thoroughly examine JMP and JSR instructions to understand their flow. Does a JMP instruction backtrack in the logic, requiring code rescanning? Is the JSR instruction being called multiple times in a single scan? Are there multiple JSRs for a single routine? Is there a FOR-NEXT loop that may cause looping? Any potential causes of looping will be closely examined.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost highlighted the issue of task overlap, which can result in increased scan time for programs and potential watchdog faults. Avoiding task overlaps is crucial to ensure smooth program flow. It is important to analyze JMP and JSR instructions to understand their impact on code execution. Ensuring sequential steps in the ladder logic can improve efficiency and minimize looping issues. Custom AOIs are utilized for controlling each step in the sequence, allowing for a more streamlined process flow. Making adjustments to the ladder logic structure has already shown improvements in program execution. Thank you for the helpful advice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>elons_nephew</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When managing tasks, it is crucial to prioritize effectively to avoid interruptions and delays. Ensure that tasks with the same priority are not competing for resources. During my investigation, I discovered that a high-priority task was occurring frequently, leading to overlaps. By adjusting the period of the high-priority task slightly, I was able to resolve the issue and regain lost cycle time. This adjustment prevented interruptions to lower-priority tasks. Thank you all for your valuable input and assistance in this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>elons_nephew</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the discrepancy in cycle times between two identical machines in Studio 5000 L83E?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in cycle times could be due to factors such as task overlap count, differences in max scan times, or other program-specific settings affecting the execution speed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I identify the root cause of the slowdown in task performance for one of the Studio 5000 L83E machines?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To identify the root cause of the slowdown, you may need to focus on analyzing factors such as task configuration settings, max scan times for individual programs, permissive steps for sequences, and any differences in gantry speeds between the machines.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What role does task overlap count play in determining the performance of Studio 5000 L83E machines?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Task overlap count can impact the performance of machines by affecting the execution efficiency of tasks. A significant increase in task overlap count may lead to slower cycle times and performance issues in Studio 5000 L83E machines.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I troubleshoot differences in max scan times between two Studio 5000 L83E machines?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot differences in max scan times, you can compare the max scan times under the Monitor Tab for both machines and analyze the individual program max scan times to identify any discrepancies that may be contributing to the slowdown.</p>
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
