
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good morning! We recently encountered a communication issue with a 1756-L62 processor in our second episode within a span of four weeks. Despite changing the Power Supply, Backplane, and other components, the problem persisted. Rockwell provided Technical Note ID 41204, which highlighted a noise issue in 1756 modules manufactured">
    <meta name="keywords" content="troubleshooting communication problems, controllogix 1756-l62 processor, communication issue, power supply, backplane, rockwell technical note, noise issue, 1756 modules, asic component, atmel, rs linx, 175">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-controllogix-1756-l62-processor">
    <title>Troubleshooting Communication Problems with ControlLogix 1756-L62 Processor | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Problems with ControlLogix 1756-L62 Processor | Oxmaint Community">
    <meta property="og:description" content="Good morning! We recently encountered a communication issue with a 1756-L62 processor in our second episode within a span of four weeks. Despite changing the Power Supply, Backplane, and other components, the problem persisted. Rockwell provided Technical Note ID 41204, which highlighted a noise issue in 1756 modules manufactured">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-controllogix-1756-l62-processor">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Problems with ControlLogix 1756-L62 Processor | Oxmaint Community">
    <meta name="twitter:description" content="Good morning! We recently encountered a communication issue with a 1756-L62 processor in our second episode within a span of four weeks. Despite changing the Power Supply, Backplane, and other components, the problem persisted. Rockwell provided Technical Note ID 41204, which highlighted a noise issue in 1756 modules manufactured">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-problems-with-controllogix-1756-l62-processor"
      },
      "headline": "Troubleshooting Communication Problems with ControlLogix 1756-L62 Processor",
      "description": "Good morning! We recently encountered a communication issue with a 1756-L62 processor in our second episode within a span of four weeks. Despite changing the Power Supply, Backplane, and other components, the problem persisted. Rockwell provided Technical Note ID 41204, which highlighted a noise issue in 1756 modules manufactured",
      "author": {
        "@type": "Person",
        "name": "Cydog"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-09",
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
                <h1 class="text-white">Troubleshooting Communication Problems with ControlLogix 1756-L62 Processor</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2771</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">100</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good morning! We recently encountered a communication issue with a 1756-L62 processor in our second episode within a span of four weeks. Despite changing the Power Supply, Backplane, and other components, the problem persisted. Rockwell provided Technical Note ID 41204, which highlighted a noise issue in 1756 modules manufactured between September 2006 and June 2007. The note mentioned a potential failure in modules with an ATMEL stamped on the ASIC component. In case of failure, specific slots display faults, while others remain unaffected. RS Linx only detects the Processor and 1756-ENBT module. Have you encountered a similar situation before? Any assistance would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the correct power supply size for part number L62? There seems to be a discrepancy as the initial statement refers to L62, while later on, L61 is mentioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies, but I can only offer the 1756-L62 Power Supply alongside the 1756-PB72.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To increase computer performance and troubleshoot issues, try removing all modules except the CPU and reinstalling them one by one. This step-by-step method can help identify any faulty modules causing system errors. By carefully testing each module individually, you can ensure optimal hardware functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why is it important to continue this process? It seems like we're caught in a cycle of repeating the same actions over and over again - a classic case of insanity, right? LOL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few weeks ago, there was a discussion about similar issues involving a 1756-L6x SERCOS module and all other modules showing faults. Upon reviewing Cydog's post history, it seems like the current situation is just a coincidence. The question of "why do I have to keep troubleshooting" may seem rhetorical, but it's essential to continue troubleshooting until the problem is identified and resolved. Using a basic process of elimination can help pinpoint the issue. If the CPU and backplane are ruled out, and the problem has not occurred in a decade, it's likely the 1756 SERCOS module causing the malfunction. These modules have a more advanced backplane interface compared to I/O modules, and a malfunction in the backplane chip can disrupt communication with other modules and the CPU or Ethernet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you! This module is brand new and specifically designed for SERCOS communication protocol.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Did you successfully identify the issue and come up with a resolution?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bc12</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What could be causing communication problems with a ControlLogix 1756-L62 processor?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Communication problems with the 1756-L62 processor could be due to a noise issue in modules manufactured between September 2006 and June 2007, as highlighted in Technical Note ID 41204.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I identify potential failures in ControlLogix 1756 modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Modules with an ATMEL stamped on the ASIC component may be prone to failure, as mentioned in the technical note. Specific slots may display faults while others remain unaffected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Why does RS Linx only detect the Processor and 1756-ENBT module in this scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: RS Linx may only detect specific components due to communication issues related to the 1756-L62 processor and the affected modules.</p>
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
