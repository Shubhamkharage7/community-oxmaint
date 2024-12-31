
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nice to meet you! I am new here and currently working on converting STL code from an S7-400 to SCL for an S7-1500 PLC. When running the STL on the S7-1500, the values transferred to #DB_number_1 are random, causing network issues. Can someone assist me in converting this STL">
    <meta name="keywords" content="stl to scl conversion, tia v17 programming, s7-400 to s7-1500 conversion, plc programming assistance, #db_number_1 issues, data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/converting-stl-to-scl-in-tia-v17-assistance-needed">
    <title>Converting STL to SCL in TIA v17 - Assistance Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Converting STL to SCL in TIA v17 - Assistance Needed | Oxmaint Community">
    <meta property="og:description" content="Nice to meet you! I am new here and currently working on converting STL code from an S7-400 to SCL for an S7-1500 PLC. When running the STL on the S7-1500, the values transferred to #DB_number_1 are random, causing network issues. Can someone assist me in converting this STL">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/converting-stl-to-scl-in-tia-v17-assistance-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Converting STL to SCL in TIA v17 - Assistance Needed | Oxmaint Community">
    <meta name="twitter:description" content="Nice to meet you! I am new here and currently working on converting STL code from an S7-400 to SCL for an S7-1500 PLC. When running the STL on the S7-1500, the values transferred to #DB_number_1 are random, causing network issues. Can someone assist me in converting this STL">
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
        "@id": "https://community.oxmaint.com/discussion-forum/converting-stl-to-scl-in-tia-v17-assistance-needed"
      },
      "headline": "Converting STL to SCL in TIA v17 - Assistance Needed",
      "description": "Nice to meet you! I am new here and currently working on converting STL code from an S7-400 to SCL for an S7-1500 PLC. When running the STL on the S7-1500, the values transferred to #DB_number_1 are random, causing network issues. Can someone assist me in converting this STL",
      "author": {
        "@type": "Person",
        "name": "PeterGotta"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-14",
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
                <h1 class="text-white">Converting STL to SCL in TIA v17 - Assistance Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PeterGotta</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">601</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">229</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Nice to meet you! I am new here and currently working on converting STL code from an S7-400 to SCL for an S7-1500 PLC. When running the STL on the S7-1500, the values transferred to #DB_number_1 are random, causing network issues. Can someone assist me in converting this STL to SCL? The code snippet includes TAR1T, TAR2T, Block 1L, Block 2L, and Block 3L with corresponding instructions for data manipulation. Let's work together to fix this issue and ensure a smooth transition to SCL.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Share the original S7-400 code with the block interface included for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What steps should be taken to optimize the block's performance? It may be more beneficial to approach the problem with optimization in mind, possibly leading to a solution that requires restructuring the data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for the lengthy code. This is the original source code I used to send data using a Multiplexer for BSend Communications. It worked flawlessly on an S7-400, but encountered issues on an S7-1500.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PeterGotta</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your programming workflow in Simatic Manager, it is recommended to establish a library and transfer the necessary reduced block(s) into it. After archiving the library, attach it to a post. Currently, the issue of DB_Number_1 being overwritten by the direct access to temporary data is apparent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PeterGotta mentioned that he used a section of code to send data through a Multiplexer for BSend Communications. While it worked flawlessly on the S7-400, it encountered issues on the S7-1500. Provide a detailed explanation of the code's intended functionality before transitioning to a new, streamlined SCL code. Disregard the previously used STL code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I convert STL code from an S7-400 to SCL for an S7-1500 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To convert STL code to SCL, you can manually rewrite the logic or use conversion tools provided by Siemens. Ensure proper mapping of instructions and data types during the conversion process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing random values transferred to DB_number_1 when running STL on the S7-1500?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Random values in DB_number_1 could indicate issues with data handling or incorrect mapping of variables during the conversion process. Check for inconsistencies in variable declarations and data manipulation instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot network issues caused by random values transferred during the conversion process?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot network issues, validate the data transfer process, check for data integrity, review network configurations, and ensure proper communication settings between the PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Can anyone provide assistance in converting specific STL instructions like TAR1T, TAR2T, Block 1L, Block 2L, and Block 3L to SCL?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Seek guidance from experienced programmers or Siemens support resources to understand the equivalent SCL instructions for TAR1T, TAR2T, and other specific STL instructions during the conversion process.</p>
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
