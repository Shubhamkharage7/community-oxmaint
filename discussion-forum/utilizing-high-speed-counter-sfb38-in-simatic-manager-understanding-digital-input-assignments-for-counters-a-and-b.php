
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In Simatic Manager, I am utilizing the System Function Block SFB38 for the High Speed Counter. This block comes with input parameters such as ENPRES, COMPEN, COUNTRESET, and SET_COMP. According to the manual, digital inputs 126.0 and 126.1 are to be used for counter A, while inputs 126.2 and">
    <meta name="keywords" content="simatic manager, sfb38, high speed counter, digital input assignments, enpres, compen, countreset, set_comp, counter a, counter b, inputs 0, 1">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/utilizing-high-speed-counter-sfb38-in-simatic-manager-understanding-digital-input-assignments-for-counters-a-and-b">
    <title>Utilizing High Speed Counter SFB38 in Simatic Manager: Understanding Digital Input Assignments for Counters A and B | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Utilizing High Speed Counter SFB38 in Simatic Manager: Understanding Digital Input Assignments for Counters A and B | Oxmaint Community">
    <meta property="og:description" content="In Simatic Manager, I am utilizing the System Function Block SFB38 for the High Speed Counter. This block comes with input parameters such as ENPRES, COMPEN, COUNTRESET, and SET_COMP. According to the manual, digital inputs 126.0 and 126.1 are to be used for counter A, while inputs 126.2 and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/utilizing-high-speed-counter-sfb38-in-simatic-manager-understanding-digital-input-assignments-for-counters-a-and-b">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Utilizing High Speed Counter SFB38 in Simatic Manager: Understanding Digital Input Assignments for Counters A and B | Oxmaint Community">
    <meta name="twitter:description" content="In Simatic Manager, I am utilizing the System Function Block SFB38 for the High Speed Counter. This block comes with input parameters such as ENPRES, COMPEN, COUNTRESET, and SET_COMP. According to the manual, digital inputs 126.0 and 126.1 are to be used for counter A, while inputs 126.2 and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/utilizing-high-speed-counter-sfb38-in-simatic-manager-understanding-digital-input-assignments-for-counters-a-and-b"
      },
      "headline": "Utilizing High Speed Counter SFB38 in Simatic Manager: Understanding Digital Input Assignments for Counters A and B",
      "description": "In Simatic Manager, I am utilizing the System Function Block SFB38 for the High Speed Counter. This block comes with input parameters such as ENPRES, COMPEN, COUNTRESET, and SET_COMP. According to the manual, digital inputs 126.0 and 126.1 are to be used for counter A, while inputs 126.2 and",
      "author": {
        "@type": "Person",
        "name": "USMAN SHAH"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-01",
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
                <h1 class="text-white">Utilizing High Speed Counter SFB38 in Simatic Manager: Understanding Digital Input Assignments for Counters A and B</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>USMAN SHAH</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">114</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">208</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In Simatic Manager, I am utilizing the System Function Block SFB38 for the High Speed Counter. This block comes with input parameters such as ENPRES, COMPEN, COUNTRESET, and SET_COMP. According to the manual, digital inputs 126.0 and 126.1 are to be used for counter A, while inputs 126.2 and 126.3 are assigned to counter B. My query revolves around the connection between digital inputs and counter values. How do we determine when to utilize inputs 126.0 and 126.1 versus inputs 126.2 and 126.3? Is there a way to identify which input value corresponds to counter A or B? (A related screenshot is provided for reference.)</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are utilizing an S731x IFM processor, follow these steps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Affirmative</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>USMAN SHAH</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you unable to see a count after enabling predefined looks? Check the "true" status in the vat table.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am able to see a count when I use inputs 126.0 and 126.1, but no count is displayed when I use inputs 126.2 and 126.3. Why is this happening? How do I link my inputs to the counter to resolve this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>USMAN SHAH</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How do I determine when to use inputs 126.0 and 126.1 versus inputs 126.2 and 126.3 for counters A and B in Simatic Manager's High Speed Counter SFB38?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Inputs 126.0 and 126.1 are assigned to counter A, while inputs 126.2 and 126.3 are assigned to counter B. You can refer to the manual for specific details on when to use each set of inputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a way to identify which input value corresponds to counter A or B in the High Speed Counter SFB38 setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: As per the setup instructions, digital inputs 126.0 and 126.1 are designated for counter A, while inputs 126.2 and 126.3 are for counter B. By following these assignments, you can easily determine which input value corresponds to each counter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can you provide guidance on mapping digital inputs to counters A and B in the Simatic Manager's SFB38 High Speed Counter configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To map digital inputs to counters A and B, use inputs 126.0 and 126.1 for counter A and inputs 126.2 and 126.3 for counter B. This clear assignment helps in identifying the connection between digital inputs and counter values.</p>
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
