
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Why does my timer only run once in this case? After the initial use, the elapsed time remains at 0ms consistently. This issue is occurring within a Facebook (FB) environment.">
    <meta name="keywords" content="facebook environment, timer issue, timer problem, timer not working, elapsed time 0ms, facebook timer bug, timer bug fix, facebook app timer, timer runs once, timer facebook environment, timer stopped working, timer not updating, facebook timer">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/timer-only-runs-once-in-facebook-environment">
    <title>Timer only runs once in Facebook environment | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Timer only runs once in Facebook environment | Oxmaint Community">
    <meta property="og:description" content="Why does my timer only run once in this case? After the initial use, the elapsed time remains at 0ms consistently. This issue is occurring within a Facebook (FB) environment.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/timer-only-runs-once-in-facebook-environment">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Timer only runs once in Facebook environment | Oxmaint Community">
    <meta name="twitter:description" content="Why does my timer only run once in this case? After the initial use, the elapsed time remains at 0ms consistently. This issue is occurring within a Facebook (FB) environment.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/timer-only-runs-once-in-facebook-environment"
      },
      "headline": "Timer only runs once in Facebook environment",
      "description": "Why does my timer only run once in this case? After the initial use, the elapsed time remains at 0ms consistently. This issue is occurring within a Facebook (FB) environment.",
      "author": {
        "@type": "Person",
        "name": "Tomz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Timer only runs once in Facebook environment</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tomz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">425</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">190</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Why does my timer only run once in this case? After the initial use, the elapsed time remains at 0ms consistently. This issue is occurring within a Facebook (FB) environment.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I may need a bit of a refresher when it comes to Siemens programming, but I have a few questions to clarify. Is the -(p)- instruction triggered by a rising edge? Is S_ODT a type of on delay timer or an off delay timer? And does TV represent its setpoint?

If (p) is a pulse lasting 1 scan and S_ODT functions as an on-delay timer, it will not complete unless the scan time exceeds 10 seconds. This is because #varpom will activate for one PLC scan, initiating T71. Before T71 reaches its timeout, the PLC scan will switch back to Network 2, detect that #varpom is "on", and then reset its RLO to 0, halting the timer. If S_ODT is actually an off-delay timer, your code should function correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In short, the program logic dictates that the instruction only executes once.

In more detail, it seems that the -(p)- instruction acts as a one-shot, while S_ODT functions as an On-Delay Timer. When the #pombit transitions from 0 to 1, the output rung of the -(p)- instruction becomes True for just one scan cycle. Subsequently, the timer is triggered and starts counting.

During the following scan cycles, even though #pombit retains a value of 1, the -(p)- instruction output will be False as the one-shot already occurred. This leads to the timer being reset when the False output is detected. Consequently, the timer's output cannot become True, keeping the #pombit value at 1 and the timer in a reset state.

As suggested by @joseph_e2, switching to an Off-Delay Timer could resolve the issue. Alternatively, eliminating the one-shot instruction would allow the S_ODT timer to continue timing until expiration, resetting the #pombit value to 0 and restarting the process.

A more efficient approach might involve implementing the logic using a Start/Stop Circuit pattern instead of Set and Reset instructions. While Set and Reset instructions are functional, they can make the logic harder to comprehend and troubleshoot.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, I will give it a shot. Would it be possible for you to provide screenshots of those solutions? I have just recently begun using Step 7 within the last month.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tomz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tomz expressed gratitude and mentioned he would give it a try. He also requested screenshots of the suggested solutions since he recently started using Step7. Is this related to schoolwork or a professional project? For @joseph_e2's solution, try removing the #(p)#varpominstruction and confirm if it works. The link in my previous post contains an image of the Start/Stop Circuit pattern. It may require some analysis to determine which elements to use for the Start, Stop, and Seal-In/Run components. I recommend watching a video series mentioned in the post to assist with this. If you are unfamiliar with the PLC scan cycle, consider watching a video series that explains 80% of what is needed to program PLCs in less than two hours.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring Minds Want to Know: Is this task for academic purposes or tangible job-related responsibilities? It's a learning experience in the field of work, navigating uncharted waters with limited experience. Despite the challenges, I successfully maneuvered through it. Grateful for the helpful responses!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tomz</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why does my timer only run once in a Facebook environment?
   - The issue of the timer running only once in a Facebook environment could be due to limitations or restrictions imposed by the Facebook platform on certain scripts or functionalities. It's possible that there are constraints on continuous timer functions within the FB environment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the timer issue in a Facebook environment?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the timer issue in a Facebook environment, you can try testing the timer functionality outside of Facebook to determine if the issue is specific to the platform. Additionally, checking for any console errors or debugging tools provided by Facebook can help identify the root cause of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any workarounds for the timer problem in a Facebook setting?</h4>
<p class='text-muted'><strong>Answer:</strong> - One possible workaround for the timer issue in a Facebook environment could be to explore alternative timer implementations that are compatible with the platform. You can also consider reaching out to Facebook's developer support or community forums for insights on handling timers within their environment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Does Facebook have any specific guidelines or restrictions related to timers in apps or pages?</h4>
<p class='text-muted'><strong>Answer:</strong> - Facebook may have specific guidelines or restrictions related to timers and dynamic content within apps or pages to ensure a smooth user experience and prevent potential misuse. It's advisable to review Facebook's developer documentation or guidelines for any information on using timers or time-based functionalities within their platform.</p>
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
