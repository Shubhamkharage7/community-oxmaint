
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello! I am currently in the process of learning about HMI programming, specifically in relation to creating and managing recipes. After watching a video on this topic, I have been able to implement most of the concepts successfully. However, I am encountering an issue when it comes to selecting">
    <meta name="keywords" content="hmi programming, managing recipes, job numbers, style numbers, factorytalk hmi, plc input, robot automation, data sets, unique style numbers, streamlining process, overlapping settings, multiple data sets, job selection, automation challenges, recipe management">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/streamlining-plc-input-managing-job-numbers-and-style-numbers-in-factorytalk-hmi">
    <title>Streamlining PLC Input: Managing Job Numbers and Style Numbers in FactoryTalk HMI | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Streamlining PLC Input: Managing Job Numbers and Style Numbers in FactoryTalk HMI | Oxmaint Community">
    <meta property="og:description" content="Hello! I am currently in the process of learning about HMI programming, specifically in relation to creating and managing recipes. After watching a video on this topic, I have been able to implement most of the concepts successfully. However, I am encountering an issue when it comes to selecting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/streamlining-plc-input-managing-job-numbers-and-style-numbers-in-factorytalk-hmi">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Streamlining PLC Input: Managing Job Numbers and Style Numbers in FactoryTalk HMI | Oxmaint Community">
    <meta name="twitter:description" content="Hello! I am currently in the process of learning about HMI programming, specifically in relation to creating and managing recipes. After watching a video on this topic, I have been able to implement most of the concepts successfully. However, I am encountering an issue when it comes to selecting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/streamlining-plc-input-managing-job-numbers-and-style-numbers-in-factorytalk-hmi"
      },
      "headline": "Streamlining PLC Input: Managing Job Numbers and Style Numbers in FactoryTalk HMI",
      "description": "Hello! I am currently in the process of learning about HMI programming, specifically in relation to creating and managing recipes. After watching a video on this topic, I have been able to implement most of the concepts successfully. However, I am encountering an issue when it comes to selecting",
      "author": {
        "@type": "Person",
        "name": "Foxtrot2050"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-11",
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
                <h1 class="text-white">Streamlining PLC Input: Managing Job Numbers and Style Numbers in FactoryTalk HMI</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Foxtrot2050</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">308</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">294</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello! I am currently in the process of learning about HMI programming, specifically in relation to creating and managing recipes. After watching a video on this topic, I have been able to implement most of the concepts successfully. However, I am encountering an issue when it comes to selecting a job number and automatically populating a corresponding style number to the PLC for the Robot.

In the PLC, I have a designated tag for the Style Number. My goal is to streamline the process by allowing users to select a job number, which will trigger the PLC to input the appropriate style number. The challenge I am facing is that there are 200 jobs with unique style numbers (e.g., Job 1 = Style 1). Currently, when I modify the value for one job, it impacts others as well, leading to overlapping settings.

I have attempted to address this by creating multiple data sets, but I am uncertain if this is the correct approach. I am wondering if there is a way to create additional data sets or if I should be approaching this issue differently. If you require further clarification, please feel free to ask. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're solely updating the {[PLC]Style_Number} tag for your recipe without any additional parameters, consider using a list selector over a recipe selector for better customization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PiNkYnotBrain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you guide me on the steps to achieve this? Additionally, what are the distinctions between them?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Foxtrot2050</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One key distinction is that recipes are designed for handling multiple variables rather than just one tag. While you can utilize a recipe selector in your application, setting it up may require more time and effort. To access the "control list selector," navigate to the advanced tab in the objects menu. Create your list selector and specify the desired number of states in the properties. Assign names and values to each state (e.g. Style 1 value 1, Style 2 value 2, etc.).

In the connections tab, consider linking the value to a different tag (such as "style list select") and create another tag as a boolean indicator (e.g. "style select enter"). In your PLC program, use XIC to monitor the "enter" boolean tag, followed by a MOV operation to transfer the list selector value to {[PLC]Style_Number}.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PiNkYnotBrain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Incorporate your up, down, and enter buttons onto the screen using the objects drop-down menu.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PiNkYnotBrain</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I streamline the process of selecting a job number and automatically populating a corresponding style number to the PLC for the Robot?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To streamline this process, you can create a mapping system where each job number corresponds to a unique style number. This way, when a user selects a job number, the PLC can automatically input the associated style number without the risk of overlapping settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if modifying the value for one job number impacts others, causing overlapping settings in the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To avoid overlapping settings, you should ensure that each job number is linked to a distinct style number. Consider implementing a structured approach, such as using a lookup table or database, to maintain the integrity of the job-to-style number mapping.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is creating multiple data sets the correct approach to managing job numbers and style numbers in FactoryTalk HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While creating multiple data sets can be a solution, it may complicate the management of job and style numbers. It's recommended to explore alternative methods like using arrays or structured data types to efficiently handle the relationship between job and style numbers.</p>
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
