
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently started using GE products and have encountered several in my area. After making a minor logic change and verifying it, I received an error message when trying to download: Cannot store memory. Local memory usage exceeds configured limits in _Main. The change I made involved renaming an">
    <meta name="keywords" content="ge 9070, download memory error, exceeding limits, _main, logic change, error message, cannot store memory, local memory usage, configured limits, %q09xxx, bit renaming, troubleshooting, error meaning">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-9070-download-memory-error-exceeding-limits-in-main">
    <title>Troubleshooting GE 9070 Download Memory Error: Exceeding Limits in _Main | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GE 9070 Download Memory Error: Exceeding Limits in _Main | Oxmaint Community">
    <meta property="og:description" content="I recently started using GE products and have encountered several in my area. After making a minor logic change and verifying it, I received an error message when trying to download: Cannot store memory. Local memory usage exceeds configured limits in _Main. The change I made involved renaming an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-9070-download-memory-error-exceeding-limits-in-main">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GE 9070 Download Memory Error: Exceeding Limits in _Main | Oxmaint Community">
    <meta name="twitter:description" content="I recently started using GE products and have encountered several in my area. After making a minor logic change and verifying it, I received an error message when trying to download: Cannot store memory. Local memory usage exceeds configured limits in _Main. The change I made involved renaming an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ge-9070-download-memory-error-exceeding-limits-in-main"
      },
      "headline": "Troubleshooting GE 9070 Download Memory Error: Exceeding Limits in _Main",
      "description": "I recently started using GE products and have encountered several in my area. After making a minor logic change and verifying it, I received an error message when trying to download: Cannot store memory. Local memory usage exceeds configured limits in _Main. The change I made involved renaming an",
      "author": {
        "@type": "Person",
        "name": "MMJX"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Troubleshooting GE 9070 Download Memory Error: Exceeding Limits in _Main</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MMJX</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">172</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">10</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently started using GE products and have encountered several in my area. After making a minor logic change and verifying it, I received an error message when trying to download: "Cannot store memory. Local memory usage exceeds configured limits in _Main." The change I made involved renaming an existing "%Q09XXX" bit, rather than creating something new. I am unsure about the meaning of this error and have been unsuccessful in finding information on it. Has anyone experienced this error before and can offer any assistance? Any help is greatly appreciated!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Does the download work properly if the name is removed?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SCADA expert, Joe, suggested trying to download the file without a name. Is it possible to leave it blank or should it be renamed to a shorter name for a successful download?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MMJX</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When you mentioned that you changed the name, I assumed there was something significant attached to it previously. I recommend reverting the "minor logic change" as well. I'm trying to determine if your adjustment triggered the memory issue or if there is another underlying cause.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SCADA expert, Joe, noted that you mentioned "I changed the name," leading him to think there was something in it previously. He suggested undoing the "minor logic change" to troubleshoot the memory issue. He speculated whether your change triggered the problem or if there is another underlying issue at play. 
 
After consulting with someone else, it was suggested that the memory problem could be due to using a redundant PLC. It was recommended to first implement changes on the standby PLC before switching over to the live PLC. This process should then be repeated on the primary PLC. 

Thank you for your response and assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MMJX</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Making simple changes in a redundant system can become more complex. General Electric (GE) has introduced various redundancy strategies over the years, so it is crucial to refer to the specific system documentation for guidance. It is important to follow the proper procedures, such as stopping the processor before downloading any changes, restarting it, and ensuring it becomes the CPU controlling the outputs. Before attempting any modifications, always consult the documentation to avoid any potential issues. If you need to make changes while the CPU is operational, you may encounter memory limitations, especially if the program block being modified is large. In such cases, GE recommends downloading the complete modified program block to available memory first, then adjusting the pointer to indicate the new starting memory location for that block.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does the error message "Cannot store memory. Local memory usage exceeds configured limits in _Main" mean when trying to download in GE products?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error message indicates that the local memory usage has exceeded the configured limits specifically in the _Main section of the program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I encountering the memory error in GE products after making a minor logic change like renaming an existing bit?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The memory error could occur due to the logic change impacting the memory allocation within the program, especially when dealing with existing bits or variables.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the "Exceeding Limits in _Main" error in GE 9070 downloads?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot this error, you may need to review the memory allocation settings in the _Main section, optimize the program logic to reduce memory usage, or consult GE product documentation for specific guidelines.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Has anyone else faced the "Local memory usage exceeds configured limits in _Main" error while working with GE products?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, others may have encountered similar memory errors when working with GE products, especially after making logic changes that impact memory allocation. Sharing experiences and solutions in relevant forums or communities can help in resolving such errors.</p>
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
