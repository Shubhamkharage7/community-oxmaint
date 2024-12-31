
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am currently facing an issue with the TimeDateDisplay feature in FactoryTalk ME, as the PanelView is experiencing random time loss on Window CE. To address this, I have opted to utilize the Time and Date data stored within the PLC5 (S files) and leverage the RsLogix 5000">
    <meta name="keywords" content="factorytalk me panelview, rslogix 5000 clock update tool, time loss issue, window ce time loss, plc5 s files, rslogix 5000, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/fixing-time-loss-issue-in-factorytalk-me-panelview-with-rslogix-5000-clock-update-tool">
    <title>Fixing Time Loss Issue in FactoryTalk ME PanelView with RsLogix 5000 Clock Update Tool | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Fixing Time Loss Issue in FactoryTalk ME PanelView with RsLogix 5000 Clock Update Tool | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am currently facing an issue with the TimeDateDisplay feature in FactoryTalk ME, as the PanelView is experiencing random time loss on Window CE. To address this, I have opted to utilize the Time and Date data stored within the PLC5 (S files) and leverage the RsLogix 5000">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/fixing-time-loss-issue-in-factorytalk-me-panelview-with-rslogix-5000-clock-update-tool">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fixing Time Loss Issue in FactoryTalk ME PanelView with RsLogix 5000 Clock Update Tool | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am currently facing an issue with the TimeDateDisplay feature in FactoryTalk ME, as the PanelView is experiencing random time loss on Window CE. To address this, I have opted to utilize the Time and Date data stored within the PLC5 (S files) and leverage the RsLogix 5000">
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
        "@id": "https://community.oxmaint.com/discussion-forum/fixing-time-loss-issue-in-factorytalk-me-panelview-with-rslogix-5000-clock-update-tool"
      },
      "headline": "Fixing Time Loss Issue in FactoryTalk ME PanelView with RsLogix 5000 Clock Update Tool",
      "description": "Greetings! I am currently facing an issue with the TimeDateDisplay feature in FactoryTalk ME, as the PanelView is experiencing random time loss on Window CE. To address this, I have opted to utilize the Time and Date data stored within the PLC5 (S files) and leverage the RsLogix 5000",
      "author": {
        "@type": "Person",
        "name": "BeepBob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Fixing Time Loss Issue in FactoryTalk ME PanelView with RsLogix 5000 Clock Update Tool</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">193</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">168</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am currently facing an issue with the TimeDateDisplay feature in FactoryTalk ME, as the PanelView is experiencing random time loss on Window CE. To address this, I have opted to utilize the Time and Date data stored within the PLC5 (S files) and leverage the RsLogix 5000 Clock Update Tool, which has proven to be effective. However, I have encountered a challenge with the data format, as the Month and day are represented as integers (e.g. "8" for August). How can I set up the expression editor to display the month as its corresponding name (e.g. "August") in the string display object? Please refer to the attached screenshot. I intend to create a nested if statement for all 12 months and days of the week to resolve this issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you noticed that the PanelView is experiencing issues with its clock, such as resetting to incorrect dates or jumping ahead by a century? I'm interested in learning more about what you mean by the system time being "lost." The PanelView Plus relies on a global connection for syncing its time with the controller, but this feature is often misused. The programming language used for PanelView Plus expressions lacks certain features like "return" statements or semicolons, which can lead to errors. For example, an IF statement needs to have both a THEN and an ELSE clause to handle the True and False outcomes. One common mistake is not providing a value for the ELSE clause, resulting in errors like missing values. Instead of using a CASE...OF instruction, FactoryTalk View Machine Edition does not support VBA or VBScript for more advanced programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach inquired about the PanelView losing its system time, whether it resets to earlier years or jumps ahead. The PanelView Plus relies on a global connection to sync time from the controller, but it is often misused. The PV+ expressions lack standard syntax rules, such as "return" or semicolons. An IF statement needs both THEN and ELSE clauses to define its outcomes accurately. The absence of a value, even a null string, can lead to errors in code execution. Using a CASE...OF instruction would be beneficial, but FTView ME lacks support for VBA or VBScript. 

Thank you, Ken, for your input. This particular PanelView is set to 2023, with the global connection transmitting remote time to a file location in PLC5 for computing. Instead of relying on the global connection, using the S files time and date updated by the RS Logix 5000 clock tool could be a more efficient approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for providing additional detail and context! I would like to address the issue of misusing PV+ global connections, which occurs when both the PV → PLC time register writes and the PLC → PV time register reads (along with the Update trigger) are inadvertently used simultaneously. This can result in introducing a delay into the clock, leading to what appears to be significant drift. It is important to remember that while wearing one watch allows you to know the time, wearing two watches can create confusion and uncertainty.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having two Rolex watches is never a problem!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What is the issue being faced with the TimeDateDisplay feature in FactoryTalk ME PanelView?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The PanelView is experiencing random time loss on Window CE.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How is the issue of time loss being addressed in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The user is utilizing the Time and Date data stored within the PLC5 (S files) and leveraging the RsLogix 5000 Clock Update Tool.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What challenge has been encountered with the data format when using the Clock Update Tool?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Month and day are represented as integers (e.g. "8" for August) instead of their corresponding names.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: How can one set up the expression editor to display the month as its corresponding name in the string display object?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The user intends to create a nested if statement for all 12 months and days of the week to resolve this issue.</p>
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
