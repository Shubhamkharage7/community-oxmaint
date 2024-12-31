
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing the DTM browser to conduct Modbus polling from an RTAC. While I am successful in retrieving points in the first polling object, I am encountering difficulties retrieving data in the second polling object. Due to the limit of 125 registers per object, I am required to">
    <meta name="keywords" content="dtm browser, modbus polling, rtac, multiple polling objects, 125 registers, data retrieval, modbus points, second polling object, data limitations, modbus communication, industrial automation, dtm software, modbus protocol, register limits">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-dtm-browser-for-multiple-modbus-polling">
    <title>How to Use DTM Browser for Multiple Modbus Polling | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use DTM Browser for Multiple Modbus Polling | Oxmaint Community">
    <meta property="og:description" content="I am utilizing the DTM browser to conduct Modbus polling from an RTAC. While I am successful in retrieving points in the first polling object, I am encountering difficulties retrieving data in the second polling object. Due to the limit of 125 registers per object, I am required to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-dtm-browser-for-multiple-modbus-polling">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use DTM Browser for Multiple Modbus Polling | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing the DTM browser to conduct Modbus polling from an RTAC. While I am successful in retrieving points in the first polling object, I am encountering difficulties retrieving data in the second polling object. Due to the limit of 125 registers per object, I am required to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-dtm-browser-for-multiple-modbus-polling"
      },
      "headline": "How to Use DTM Browser for Multiple Modbus Polling",
      "description": "I am utilizing the DTM browser to conduct Modbus polling from an RTAC. While I am successful in retrieving points in the first polling object, I am encountering difficulties retrieving data in the second polling object. Due to the limit of 125 registers per object, I am required to",
      "author": {
        "@type": "Person",
        "name": "haksarfarooq"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">How to Use DTM Browser for Multiple Modbus Polling</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>haksarfarooq</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">209</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">126</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing the DTM browser to conduct Modbus polling from an RTAC. While I am successful in retrieving points in the first polling object, I am encountering difficulties retrieving data in the second polling object. Due to the limit of 125 registers per object, I am required to utilize multiple polling objects. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The discrepancy in Unit ID between the first and second poll (254 vs. 255) raises questions about the Modbus Slave's behavior towards Unit IDs. Is the Modbus Slave capable of ignoring the Unit ID? It is important to note that the Modbus protocol imposes a maximum limit of 125 registers or 2000 bits (equivalent to 16 bits per word multiplied by 125 words) per transfer, as a design specification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I use the DTM browser for multiple Modbus polling objects?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To conduct Modbus polling using multiple objects in the DTM browser, you can create separate polling objects for each set of registers you want to retrieve data from. This is necessary when you reach the limit of 125 registers per object.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What could be causing difficulties in retrieving data from the second polling object in DTM browser?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Difficulties in retrieving data from the second polling object could be due to configuration issues, incorrect Modbus addressing, or communication errors. Ensure that the settings for the second polling object are correctly configured and aligned with the Modbus device you are communicating with.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can I overcome the limit of 125 registers per Modbus polling object in the DTM browser?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To overcome the limit of 125 registers per Modbus polling object in the DTM browser, you can create additional polling objects to retrieve data from more registers. By dividing the registers into multiple polling objects, you can effectively retrieve the desired data from your Modbus device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Is there a recommended approach for managing multiple Modbus polling objects in the DTM browser?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is recommended to organize your Modbus polling objects logically based on the registers you want to access. By structuring your polling objects in a systematic manner, you can efficiently manage and retrieve</p>
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
