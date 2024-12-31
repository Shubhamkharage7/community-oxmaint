
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, this is my first time working with Allen Bradley PLCs and I am encountering major faults on an SLC 500 series CPU, specifically an SLC5/01. Upon checking the goto error, it is indicating a Major Error Halt with the message S: 1/13. The error also specifies a Major">
    <meta name="keywords" content="allen bradley slc 500 series cpu, troubleshooting major fault error, s:1/13 error halt, slc5/01 major error code, allen bradley plc troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-troubleshoot-and-clear-s-1-13-major-fault-error-halt-in-allen-bradley-slc-500-series-cpu">
    <title>How to Troubleshoot and Clear S:1/13 Major Fault Error Halt in Allen Bradley SLC 500 Series CPU | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Troubleshoot and Clear S:1/13 Major Fault Error Halt in Allen Bradley SLC 500 Series CPU | Oxmaint Community">
    <meta property="og:description" content="Hello, this is my first time working with Allen Bradley PLCs and I am encountering major faults on an SLC 500 series CPU, specifically an SLC5/01. Upon checking the goto error, it is indicating a Major Error Halt with the message S: 1/13. The error also specifies a Major">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-troubleshoot-and-clear-s-1-13-major-fault-error-halt-in-allen-bradley-slc-500-series-cpu">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Troubleshoot and Clear S:1/13 Major Fault Error Halt in Allen Bradley SLC 500 Series CPU | Oxmaint Community">
    <meta name="twitter:description" content="Hello, this is my first time working with Allen Bradley PLCs and I am encountering major faults on an SLC 500 series CPU, specifically an SLC5/01. Upon checking the goto error, it is indicating a Major Error Halt with the message S: 1/13. The error also specifies a Major">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-troubleshoot-and-clear-s-1-13-major-fault-error-halt-in-allen-bradley-slc-500-series-cpu"
      },
      "headline": "How to Troubleshoot and Clear S:1/13 Major Fault Error Halt in Allen Bradley SLC 500 Series CPU",
      "description": "Hello, this is my first time working with Allen Bradley PLCs and I am encountering major faults on an SLC 500 series CPU, specifically an SLC5/01. Upon checking the goto error, it is indicating a Major Error Halt with the message S: 1/13. The error also specifies a Major",
      "author": {
        "@type": "Person",
        "name": "JayMurphman"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-23",
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
                <h1 class="text-white">How to Troubleshoot and Clear S:1/13 Major Fault Error Halt in Allen Bradley SLC 500 Series CPU</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JayMurphman</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">156</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">306</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, this is my first time working with Allen Bradley PLC's and I am encountering major faults on an SLC 500 series CPU, specifically an SLC5/01. Upon checking the goto error, it is indicating a Major Error Halt with the message S: 1/13. The error also specifies a Major error code S:6=351h that needs to be corrected for the fault to be cleared. I have already replaced the input card 1746-IV16 but am still unable to clear the error. I am seeking guidance on how to clear this condition and would greatly appreciate any assistance. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The error message indicates a "stuck" runtime error on I/O module 3, prompting the replacement of the input card. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JayMurphman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One common practice in my industry is to set a bit S:1/8 during power up to clear faults. This helps in ensuring smooth operation and avoiding unnecessary disruptions. While there may be some situations where retaining a fault is necessary, in most cases, it is best to clear faults at startup. In the absence of a key switch on the 5/01 model, users can go online with RSLogix 500 to manually clear faults using menu options if the bit is set to "0". However, if there is a different fault or if the new card is also faulty, the CPU will fault again immediately. It's important to note that sometimes a SLC may inaccurately identify the slot as the source of a fault, which has been observed multiple times in the field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of tech troubleshooting, it is not uncommon for a System-Level Change (SLC) to mistakenly pinpoint the wrong slot as the source of a malfunction. In my professional experience, this scenario has occurred multiple times. Interestingly, I have yet to witness an SLC accurately determining the problematic card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: What does the S:1/13 Major Fault Error Halt indicate in an Allen Bradley SLC 500 Series CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The S:1/13 Major Fault Error Halt indicates a major fault condition in the Allen Bradley SLC 500 Series CPU, specifically in this case, the SLC5/01 model.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: How can I correct the Major Error Code S:6=351h to clear the fault?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To clear the fault related to the Major Error Code S:6=351h, troubleshooting steps need to be undertaken to identify and rectify the underlying issue causing this error.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: What steps can I take to troubleshoot and clear the S:1/13 Major Fault Error Halt in an Allen Bradley SLC 500 Series CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps may involve checking connections, reviewing the program logic, inspecting hardware components, and ensuring proper configuration settings to resolve the S:1/13 Major Fault Error Halt in the Allen Bradley SLC 500 Series CPU.</p>
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
