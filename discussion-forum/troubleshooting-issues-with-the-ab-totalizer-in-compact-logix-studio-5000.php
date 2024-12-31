
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I believe I may be missing a simple solution while using the Compact Logix Studio 5000 and the predefined totalizer block for the first time. Despite correctly configuring a REAL input, the totalizer does not work as expected. Even though I am unable to upload a screenshot, the settings">
    <meta name="keywords" content="ab totalizer, compact logix studio 5000, troubleshooting, real input, totalizer block, configuration issues, predefined block, gain setting, progprogreq, progstartreq, rtstime, enableout">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-the-ab-totalizer-in-compact-logix-studio-5000">
    <title>Troubleshooting issues with the AB Totalizer in Compact Logix Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting issues with the AB Totalizer in Compact Logix Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="I believe I may be missing a simple solution while using the Compact Logix Studio 5000 and the predefined totalizer block for the first time. Despite correctly configuring a REAL input, the totalizer does not work as expected. Even though I am unable to upload a screenshot, the settings">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-the-ab-totalizer-in-compact-logix-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting issues with the AB Totalizer in Compact Logix Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="I believe I may be missing a simple solution while using the Compact Logix Studio 5000 and the predefined totalizer block for the first time. Despite correctly configuring a REAL input, the totalizer does not work as expected. Even though I am unable to upload a screenshot, the settings">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-the-ab-totalizer-in-compact-logix-studio-5000"
      },
      "headline": "Troubleshooting issues with the AB Totalizer in Compact Logix Studio 5000",
      "description": "I believe I may be missing a simple solution while using the Compact Logix Studio 5000 and the predefined totalizer block for the first time. Despite correctly configuring a REAL input, the totalizer does not work as expected. Even though I am unable to upload a screenshot, the settings",
      "author": {
        "@type": "Person",
        "name": "Chris_M"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">Troubleshooting issues with the AB Totalizer in Compact Logix Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Chris_M</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">648</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">378</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I believe I may be missing a simple solution while using the Compact Logix Studio 5000 and the predefined totalizer block for the first time. Despite correctly configuring a REAL input, the totalizer does not work as expected. Even though I am unable to upload a screenshot, the settings include: EnableIn = 1, In = 27.5 (REAL input), Gain = 1.0, ProgProgReq = 1, ProgStartReq = 1, RTSTime = 1, EnableOut = 1, with everything else set to default. The totalizer fails to run, with both Total and RunStop remaining at 0. Any insights on resolving this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the totalizer part of a subroutine that is being invoked?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey expressed concern over the totalizer possibly being located within a subroutine that is currently being executed. Rest assured, I have thoroughly verified this and can confirm that the subroutine is fully completed and operational. In fact, I have gone the extra mile by including an on/off indicator light for further validation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris_M</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure the ProgStopReq is set to 0, double check if both Stop and Start are activated. If they are both true, the totalizer function will be disabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Aardwizz, it is important to ensure that the ProgStopReq is set to zero. If both Stop and Start are activated, the totalizer will not be operational. Rest assured, ProgStopReq is indeed at zero.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris_M</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure historical records, I did not activate OperStartReq. It is essential to trigger this function every time the totalizer commences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris_M</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Chris_M explained that it is important to trigger OperStartReq each time the totalizer starts functioning. This is especially true if ProgOper is set to 0, in which case setting ProgProgReq to 1 won't suffice - instead, setting ProgOperReq to 1 is necessary. If there is an old value of 1 in either ProgOperReq or OperOperReq, the totalizer will still function in Operator mode rather than Program mode, responding to Oper commands like start, stop, and reset.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What sets Operator mode apart from Program mode? Explore the distinctions between these two operating modes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris_M</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This program is designed for PLC systems to efficiently control the totalizer. Operators, who have access to the HMI, are responsible for overseeing this process. The FTView and PlantPAX libraries offer graphics specifically tailored for the totalizer instruction, optimizing its usage. It is recommended to limit operator intervention for optimal system performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is recommended to remove the operator from the situation in many cases. In my experience, I discovered that operators are valuable sources of advice on the operation of machinery and the necessary information to display on the HMI. My career and that of cardosocea seem to exist in separate dimensions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey suggested that his career and the career of cardosocea may have unfolded in different dimensions. It seems that Steve was fortunate to work for companies that prioritized modern practices rather than relying on outdated methods. One particular company he worked for excelled in ergonomics, with such well-developed graphics that they didn't need detailed manuals to operate equipment. This level of excellence is not commonly seen in many industries today.

Steve also found that operators were a valuable resource for advice on machinery operations and information display on the HMI. He recalls a project involving control of 4 reactors, where the operators requested various animations and views of the plant. However, through collaboration with the operators, they were able to streamline the dashboard to focus on essential data, ultimately improving the efficiency of the system.

Steve reflects on the importance of understanding the needs of customers, even when it means challenging their requests. He acknowledges the influence of past experiences on operator preferences and emphasizes the significance of a well-designed alarming and messaging system to reduce the necessity for elaborate animations. By prioritizing crucial data and collaborating with operators, a more effective and user-friendly system can be achieved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey mentioned that his career and that of cardosocea seemed to unfold in different worlds. He found it beneficial to seek advice from operators on how to operate machinery and what information should be displayed on the Human Machine Interface (HMI). While consulting operators is valuable, there are instances where taking control away from users is necessary for safety reasons. This is evident in the distinction between Prog and Oper mode, as well as the ability for the Programmable Logic Controller (PLC) to request control or for the Operator to do the same, independently. This was a crucial factor in addressing the issue faced by the OP, where the Totalizer remained in Oper mode despite correct PLC control requests.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the AB Totalizer in Compact Logix Studio 5000 not working despite correct configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the totalizer is not running as expected even after configuring the settings correctly, there may be issues related to the input signal, programming logic, or block parameters that need to be investigated.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be the possible reasons for the Total and RunStop values in the totalizer block remaining at 0?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Total and RunStop values staying at 0 could indicate that the totalizer block is not receiving the expected input signal, the programming requirements are not being met, or there are errors in the configuration parameters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot issues with the AB Totalizer in Compact Logix Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot problems with the totalizer, you can check the input signal, verify the programming logic, review the parameter settings, ensure all necessary requirements are met, and consider any potential compatibility issues within the Studio 5000 environment.</p>
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
