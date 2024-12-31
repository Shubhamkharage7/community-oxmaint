
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am trying to transfer all the data from one S7-1200 PLC to another, but I am encountering difficulty with the GET function as it does not allow me to select the entire DB, only individual words or bytes. Any suggestions on how to successfully move the entire database">
    <meta name="keywords" content="transfer database, s7-1200 plc, put/get function, data transfer, plc programming, siemens plc, entire db transfer, database migration, plc data exchange, get function issue, database transfer methods, plc communication, plc troubleshooting, data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-transfer-entire-database-between-s7-1200-plcs-using-put-get">
    <title>How to Transfer Entire Database Between S7-1200 PLCs Using PUT/GET | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Transfer Entire Database Between S7-1200 PLCs Using PUT/GET | Oxmaint Community">
    <meta property="og:description" content="I am trying to transfer all the data from one S7-1200 PLC to another, but I am encountering difficulty with the GET function as it does not allow me to select the entire DB, only individual words or bytes. Any suggestions on how to successfully move the entire database">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-transfer-entire-database-between-s7-1200-plcs-using-put-get">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Transfer Entire Database Between S7-1200 PLCs Using PUT/GET | Oxmaint Community">
    <meta name="twitter:description" content="I am trying to transfer all the data from one S7-1200 PLC to another, but I am encountering difficulty with the GET function as it does not allow me to select the entire DB, only individual words or bytes. Any suggestions on how to successfully move the entire database">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-transfer-entire-database-between-s7-1200-plcs-using-put-get"
      },
      "headline": "How to Transfer Entire Database Between S7-1200 PLCs Using PUT/GET",
      "description": "I am trying to transfer all the data from one S7-1200 PLC to another, but I am encountering difficulty with the GET function as it does not allow me to select the entire DB, only individual words or bytes. Any suggestions on how to successfully move the entire database",
      "author": {
        "@type": "Person",
        "name": "MrQ"
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
                <h1 class="text-white">How to Transfer Entire Database Between S7-1200 PLCs Using PUT/GET</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MrQ</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1008</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">46</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am trying to transfer all the data from one S7-1200 PLC to another, but I am encountering difficulty with the GET function as it does not allow me to select the entire DB, only individual words or bytes. Any suggestions on how to successfully move the entire database between the PLCs?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure to send the total number of bytes in the database. Set it to non-optimized access as well, in case you were not aware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mr. Q inquired about transferring values from one S7-1200 to another by utilizing the GET function. However, there was difficulty in selecting the entire DB, as only word and byte options were available. Any suggestions for resolving this issue? Additionally, I am looking to move the values of two specific tags, DB5.DBD566 (real) and DB1.DBW456 (int). How can I set this in the get block? I attempted P# DB5.DBD566 REAL 1 but the value turned out to be invalid. Any help would be appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Question: How can I transfer the entire database between S7-1200 PLCs using PUT/GET function?
Answer: To transfer the entire database between S7-1200 PLCs using PUT/GET function, you can create a custom script that reads and writes the data block (DB) in chunks to overcome the limitation of not being able to select the entire DB at once.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Why does the GET function in S7-1200 PLCs not allow selecting the entire DB for transfer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The GET function in S7-1200 PLCs does not directly support transferring the entire database in one go, as it is designed to work with individual words or bytes. This limitation requires users to implement a workaround like scripting to move the entire DB.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there any specific best practices or tips for successfully transferring the entire database between S7-1200 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When transferring the entire database between S7-1200 PLCs, it is recommended to carefully plan and execute the data transfer process to ensure data integrity. Using scripting, chunking the data, and verifying the transfer can help in successfully moving the entire database between the PLCs.</p>
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
