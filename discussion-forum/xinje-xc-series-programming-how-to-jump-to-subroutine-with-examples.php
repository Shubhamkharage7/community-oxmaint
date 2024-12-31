
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I need assistance in identifying the equivalent instruction for Jump to Subroutine (JSR) in Xinje XC Series programming. I would greatly appreciate it if you could also provide a brief example. Thank you in advance for your help.">
    <meta name="keywords" content="xinje xc series programming, jump to subroutine, jsr instruction, xinje xc examples, subroutine programming, xinje xc jsr, plc programming, xinje xc series examples, xinje xc tutorial, xinje xc programming tips">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/xinje-xc-series-programming-how-to-jump-to-subroutine-with-examples">
    <title>Xinje XC Series programming: How to Jump to Subroutine with examples | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Xinje XC Series programming: How to Jump to Subroutine with examples | Oxmaint Community">
    <meta property="og:description" content="Hello, I need assistance in identifying the equivalent instruction for Jump to Subroutine (JSR) in Xinje XC Series programming. I would greatly appreciate it if you could also provide a brief example. Thank you in advance for your help.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/xinje-xc-series-programming-how-to-jump-to-subroutine-with-examples">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Xinje XC Series programming: How to Jump to Subroutine with examples | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I need assistance in identifying the equivalent instruction for Jump to Subroutine (JSR) in Xinje XC Series programming. I would greatly appreciate it if you could also provide a brief example. Thank you in advance for your help.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/xinje-xc-series-programming-how-to-jump-to-subroutine-with-examples"
      },
      "headline": "Xinje XC Series programming: How to Jump to Subroutine with examples",
      "description": "Hello, I need assistance in identifying the equivalent instruction for Jump to Subroutine (JSR) in Xinje XC Series programming. I would greatly appreciate it if you could also provide a brief example. Thank you in advance for your help.",
      "author": {
        "@type": "Person",
        "name": "tharinduk"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-07",
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
                <h1 class="text-white">Xinje XC Series programming: How to Jump to Subroutine with examples</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">258</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">266</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I need assistance in identifying the equivalent instruction for Jump to Subroutine (JSR) in Xinje XC Series programming. I would greatly appreciate it if you could also provide a brief example. Thank you in advance for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Conditional jumps and subroutine calls, known as CJ and Call in Mitsubishi programming, are important functions. To execute a conditional jump, follow these steps: Assume input X0 is the jump to a pointer, then use JC P1 to specify where the logic should run from the jump. Create a label P1 at the desired location for the jump. 

For subroutine calls that jump to a section of code and then return, do the following: Write the code, call the subroutine with A X0Call P10, and continue with more code. Remember to include FEND at the end of the main routine. The subroutine code should come after FEND but before the END instruction to prevent unintended program execution in the subroutines.

You can find more information in the programming manual. While the manual may not be readily available online, you can access it at manuals.lib.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello @parky, I wanted to express my gratitude for your response. Your input is greatly appreciated. I will definitely give it a try. Wishing you a fantastic day ahead!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is crucial to ensure proper formatting from the beginning. Take a look at the code below to make sure it aligns with your PLC's requirements. It is essential to get the formatting right initially for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky emphasized the importance of precise formatting to ensure smooth operation of PLC code. Feel free to refer to the code snippet provided below for guidance. 

I have completed the programming and plan to share it in the previous thread where I left off nearly two months ago. If you could spare a moment, I would appreciate your feedback on the program. Thank you in advance for your help! @parky.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Question: What is the equivalent instruction for Jump to Subroutine (JSR) in Xinje XC Series programming?
   Answer: In Xinje XC Series programming, the equivalent instruction for Jump to Subroutine (JSR) is usually called by different names such as "Call Subroutine" or "Call Instruction."</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Can you provide a brief example of how to implement a subroutine call in Xinje XC Series programming?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Sure! Here's an example:
   ```
   Call Subroutine MySubroutine
   ```</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How do you define a subroutine in Xinje XC Series programming?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To define a subroutine in Xinje XC Series programming, you typically use a specific syntax or structure to encapsulate a set of instructions that can be called from different parts of the program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: What are the benefits of using subroutines in Xinje XC Series programming?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using subroutines in Xinje XC Series programming can help improve code organization, simplify program logic, and promote code reusability by allowing you to call the same set of instructions from multiple locations in the program.</p>
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
