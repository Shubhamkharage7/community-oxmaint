
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When using Logix 5000 v32 on the 1769-L16ERI PLC, I utilized the FBC instruction to scan through an array of DINTs for true bits. While the instruction successfully functions as intended, a peculiar observation arose that seems illogical. The Result Array of the FBC stores the memory locations of">
    <meta name="keywords" content="logix 5000 v32 plcs, 1769-l16eri plc, fbc instruction, result array in logix 5000 v32, logic fbc instruction, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-the-logic-fbc-instruction-and-result-array-in-logix-5000-v32-plcs-on-1769-l16eri">
    <title>Understanding the Logic FBC Instruction and Result Array in Logix 5000 v32 PLCs on 1769-L16ERI | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding the Logic FBC Instruction and Result Array in Logix 5000 v32 PLCs on 1769-L16ERI | Oxmaint Community">
    <meta property="og:description" content="When using Logix 5000 v32 on the 1769-L16ERI PLC, I utilized the FBC instruction to scan through an array of DINTs for true bits. While the instruction successfully functions as intended, a peculiar observation arose that seems illogical. The Result Array of the FBC stores the memory locations of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-the-logic-fbc-instruction-and-result-array-in-logix-5000-v32-plcs-on-1769-l16eri">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding the Logic FBC Instruction and Result Array in Logix 5000 v32 PLCs on 1769-L16ERI | Oxmaint Community">
    <meta name="twitter:description" content="When using Logix 5000 v32 on the 1769-L16ERI PLC, I utilized the FBC instruction to scan through an array of DINTs for true bits. While the instruction successfully functions as intended, a peculiar observation arose that seems illogical. The Result Array of the FBC stores the memory locations of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-the-logic-fbc-instruction-and-result-array-in-logix-5000-v32-plcs-on-1769-l16eri"
      },
      "headline": "Understanding the Logic FBC Instruction and Result Array in Logix 5000 v32 PLCs on 1769-L16ERI",
      "description": "When using Logix 5000 v32 on the 1769-L16ERI PLC, I utilized the FBC instruction to scan through an array of DINTs for true bits. While the instruction successfully functions as intended, a peculiar observation arose that seems illogical. The Result Array of the FBC stores the memory locations of",
      "author": {
        "@type": "Person",
        "name": "TheWaterboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-06",
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
                <h1 class="text-white">Understanding the Logic FBC Instruction and Result Array in Logix 5000 v32 PLCs on 1769-L16ERI</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">170</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">375</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When using Logix 5000 v32 on the 1769-L16ERI PLC, I utilized the FBC instruction to scan through an array of DINTs for true bits. While the instruction successfully functions as intended, a peculiar observation arose that seems illogical. The Result Array of the FBC stores the memory locations of true bits from the source array, leading to a potential risk of overflowing if all bits are true. This means that the Result array must be significantly larger than the source array - for instance, a 100 DINT source array would require a 3200 DINT result array to prevent overflow and potential PLC faults. This raises the question of whether there is a specific reason for this design or if there may be a misunderstanding in using this instruction effectively. In reality, it would be more practical to have an array size based on the maximum number of expected true bits to avoid potential issues down the line.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The .LEN attribute in the CONTROL structure (and first FBC Length parameter) defines the number of bits to compare. On the other hand, the .LEN attribute in the RESULT structure (and second FBC Length parameter) determines the maximum number of non-matching bits that can be identified. The instruction will stop without error when the result.POS value equals the result.LEN value, even if the number of bits tested (control.POS) is less than the number of bits specified for testing (control.LEN). This ensures accurate comparison and detection of discrepancies within the specified bit range.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, that solution addressed the issue. Although it may seem inefficient to need an additional array, it serves a specific function. The result array is not populated sequentially and is not cleared when all bits are set to zero. I appreciate your assistance in resolving this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
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
