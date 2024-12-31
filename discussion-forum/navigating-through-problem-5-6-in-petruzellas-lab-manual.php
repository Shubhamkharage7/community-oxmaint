
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone! I am currently taking on the challenge of learning on my own and following along with Franks textbook and lab manual. I have encountered a roadblock on problem 5-6 and could use some guidance to help me navigate through it. The issue I am facing pertains to">
    <meta name="keywords" content="petruzella lab manual problem 5-6, navigating through problem 5-6, frank's textbook lab manual, learning challenges in automation, plc troubleshooting guide, control relay">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/navigating-through-problem-5-6-in-petruzellas-lab-manual">
    <title>Navigating Through Problem 5-6 in Petruzellas Lab Manual | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Navigating Through Problem 5-6 in Petruzellas Lab Manual | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone! I am currently taking on the challenge of learning on my own and following along with Franks textbook and lab manual. I have encountered a roadblock on problem 5-6 and could use some guidance to help me navigate through it. The issue I am facing pertains to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/navigating-through-problem-5-6-in-petruzellas-lab-manual">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Navigating Through Problem 5-6 in Petruzellas Lab Manual | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone! I am currently taking on the challenge of learning on my own and following along with Franks textbook and lab manual. I have encountered a roadblock on problem 5-6 and could use some guidance to help me navigate through it. The issue I am facing pertains to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/navigating-through-problem-5-6-in-petruzellas-lab-manual"
      },
      "headline": "Navigating Through Problem 5-6 in Petruzellas Lab Manual",
      "description": "Greetings everyone! I am currently taking on the challenge of learning on my own and following along with Franks textbook and lab manual. I have encountered a roadblock on problem 5-6 and could use some guidance to help me navigate through it. The issue I am facing pertains to",
      "author": {
        "@type": "Person",
        "name": "ThundamentalsFan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-23",
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
                <h1 class="text-white">Navigating Through Problem 5-6 in Petruzellas Lab Manual</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ThundamentalsFan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">187</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">366</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone! I am currently taking on the challenge of learning on my own and following along with Frank's textbook and lab manual. I have encountered a roadblock on problem 5-6 and could use some guidance to help me navigate through it.

The issue I am facing pertains to Rung 0 & 3 in my attempted solution. When PB1 & LS1 are both true on Rung 1, CR1 locks itself along with PL1, regardless of PB1. However, when control relays are removed, the signal cannot be locked in despite PB1. Initially, I considered replacing CR1 with LS1, but this would make PB1 unnecessary.

Similarly, on Rung 3, the same problem arises where PB2 becomes unnecessary with the solution I have come up with.

Thank you in advance for any assistance, and I hope I have not made a mess of my first post. - Thunda</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider this question: If I were to have CR1, which part of the program would consistently match CR1 after the initial rung? Pose the same question for CR2 and CR3 as well. This may seem like a simple issue, but it's important to ensure you're not overlooking any nuances.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome aboard to our community forum!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the constant value of a specific bit in a program after the initial rung execution is a common query among programmers. Typically, this value remains the same for specific rungs, such as PL1 for rung 0, Sol A for rung 1, and Sol C / PL2 for rung 3. While it may seem straightforward to use contacts based on these outputs instead of contact relays, one might question if this truly eliminates the need for contact relays or simply replicates the same principle. Is this issue as straightforward as it appears, or is there a subtle detail that I am overlooking? Sometimes, it's easy to overthink such matters. If the solution is indeed simple, I will humorously subject myself to 10 lashes of shame. Welcome to the forum, and thank you for the warm greeting!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThundamentalsFan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider utilizing a countertop to substitute the coil.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robb B suggested utilizing a counter as a potential alternative to replacing the coil in this situation. However, it is important to note that the lab manual only extensively covers counters in Chapter 8. Therefore, it is assumed that the solution to this problem involves using only the specified I/O without a counter. Ultimately, the best course of action may involve working within the parameters given, despite any uncertainties.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThundamentalsFan</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing your proposed solution, I noticed that your ladder logic rungs mainly consist of inputs serving as conditions, leading to an output at the end. While it is acceptable to utilize an output data point as a condition within a rung, it is important to avoid using specific internal logical bits, such as B3:0/0, as instructed. This restriction does not prevent you from using other conditions, like 0:2/0, to trigger subsequent actions. This practice is commonly recommended for beginners learning the fundamentals of PLC programming, specifically focusing on the patterns of Contact and Coil within Ladder Logic. Improve your understanding of PLC programming by mastering these basic concepts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's clear and helpful, thank you for your contribution. I consider this matter closed for future reference, in case someone else comes across it with the same issue years down the line.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThundamentalsFan</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What specific problem is Thunda facing in problem 5-6 of Petruzella's lab manual?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Thunda is encountering issues related to Rung 0 & 3 in their attempted solution, particularly regarding the behavior of PB1, LS1, CR1, and PL1.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does CR1 lock itself along with PL1 when PB1 & LS1 are both true on Rung 1?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In the described scenario, CR1 locks itself along with PL1 regardless of PB1 due to a specific control logic setup that causes the signal to be locked in.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What is the problem with PB1 and PB2 in Thunda's solution for Rung 1 and Rung 3?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Thunda has identified PB1 and PB2 as becoming unnecessary in their solutions for Rung 1 and Rung 3, respectively, which is causing confusion in their logic design.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What alternative solutions can Thunda consider to address the issues with PB1 and PB2 in their ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Thunda may explore different ways to design the ladder logic to address the issues with PB1 and PB2, such as considering the roles of LS1 and CR1 in the control system.</p>
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
