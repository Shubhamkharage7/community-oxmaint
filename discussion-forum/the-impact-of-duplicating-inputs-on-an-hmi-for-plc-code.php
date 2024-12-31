
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone! While I am aware that having duplicate destructive bits in PLC code is not recommended, I am curious about the implications of writing to the same tag using two buttons on an HMI. Currently, I have three servo screens where users can input a desired position and">
    <meta name="keywords" content="plc code duplication impact, hmi input duplication consequences, duplicate inputs in plc code, hmi button duplication effects, servo screen duplicate button concerns, plc code best practices, h">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/the-impact-of-duplicating-inputs-on-an-hmi-for-plc-code">
    <title>The impact of duplicating inputs on an HMI for PLC code | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="The impact of duplicating inputs on an HMI for PLC code | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone! While I am aware that having duplicate destructive bits in PLC code is not recommended, I am curious about the implications of writing to the same tag using two buttons on an HMI. Currently, I have three servo screens where users can input a desired position and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/the-impact-of-duplicating-inputs-on-an-hmi-for-plc-code">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The impact of duplicating inputs on an HMI for PLC code | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone! While I am aware that having duplicate destructive bits in PLC code is not recommended, I am curious about the implications of writing to the same tag using two buttons on an HMI. Currently, I have three servo screens where users can input a desired position and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/the-impact-of-duplicating-inputs-on-an-hmi-for-plc-code"
      },
      "headline": "The impact of duplicating inputs on an HMI for PLC code",
      "description": "Greetings everyone! While I am aware that having duplicate destructive bits in PLC code is not recommended, I am curious about the implications of writing to the same tag using two buttons on an HMI. Currently, I have three servo screens where users can input a desired position and",
      "author": {
        "@type": "Person",
        "name": "TheRooster"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-17",
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
                <h1 class="text-white">The impact of duplicating inputs on an HMI for PLC code</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">241</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">441</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone! While I am aware that having duplicate destructive bits in PLC code is not recommended, I am curious about the implications of writing to the same tag using two buttons on an HMI. Currently, I have three servo screens where users can input a desired position and either press a button to move to it or press a button to return home. The tags used are HMIPB.GoHome or HMIin.MoveTo, triggering a servo move after certain logic is applied. I simply duplicated the inputs/buttons, but now I am apprehensive about potential issues that may arise in the future.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience, I have never encountered any issues with HMIs regarding button functions. Typically, a button only activates when there is a change in state. Pressing the button signals the PLC to change the assigned bit to 1, while releasing it sets it back to 0. The other buttons do not have any impact until they are pressed or released. Similarly, numeric inputs write their value once you press enter, without affecting the PLC when left untouched.

In essence, linking multiple buttons to the same tag is akin to connecting buttons in parallel to a single physical input. If any button is pressed, the input activates, but the PLC cannot distinguish which button triggered the input. It is important to note that the displayed state of the buttons on the HMI may vary depending on the setup, showing either the individual button states or the overall input status (e.g., all buttons appearing as 'pushed' when one is pressed). *assuming momentary pushbutton.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ah, I see now how the concept of wiring in parallel can be easily understood. Thank you for your response. This analogy provides a clear explanation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Is it advisable to have duplicate inputs/buttons on an HMI for writing to the same tag in PLC code?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While it is generally not recommended to have duplicate destructive bits in PLC code, duplicating inputs/buttons on an HMI to write to the same tag can lead to potential issues and should be approached with caution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the implications of using two buttons on an HMI to control the same tag for servo positioning in PLC code?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using two buttons on an HMI to control the same tag for servo positioning can introduce complexities in logic and may result in unintended behaviors such as conflicting commands or erratic movements of the servo.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can duplicating inputs/buttons on an HMI affect the reliability and future maintenance of the PLC code?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Duplicating inputs/buttons on an HMI for writing to the same tag in PLC code can make the code harder to troubleshoot, maintain, and modify in the future. It may also increase the risk of introducing errors or inconsistencies in the control system.</p>
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
