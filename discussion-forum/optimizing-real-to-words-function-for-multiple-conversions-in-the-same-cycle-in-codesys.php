
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="While using the same instance, everything seemed to be functioning correctly until I had a sudden realization that it might be incorrect. For instance, in the code snippet provided as an example, the function realToWords is called with the parameter REAL_TO_WORD2. Here is how it is used: ``` realToWords(rInput:=temperaturePumpKelvin,">
    <meta name="keywords" content="optimizing real to words function, multiple conversions, codesys, realtowords, real_to_word2, function call, instance usage, code snippet, temperature conversion, parameter usage, swap bytes, output assignment, function repetition, codebase instances">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-real-to-words-function-for-multiple-conversions-in-the-same-cycle-in-codesys">
    <title>Optimizing Real To Words function for multiple conversions in the same cycle in Codesys | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Real To Words function for multiple conversions in the same cycle in Codesys | Oxmaint Community">
    <meta property="og:description" content="While using the same instance, everything seemed to be functioning correctly until I had a sudden realization that it might be incorrect. For instance, in the code snippet provided as an example, the function realToWords is called with the parameter REAL_TO_WORD2. Here is how it is used: ``` realToWords(rInput:=temperaturePumpKelvin,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-real-to-words-function-for-multiple-conversions-in-the-same-cycle-in-codesys">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Real To Words function for multiple conversions in the same cycle in Codesys | Oxmaint Community">
    <meta name="twitter:description" content="While using the same instance, everything seemed to be functioning correctly until I had a sudden realization that it might be incorrect. For instance, in the code snippet provided as an example, the function realToWords is called with the parameter REAL_TO_WORD2. Here is how it is used: ``` realToWords(rInput:=temperaturePumpKelvin,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-real-to-words-function-for-multiple-conversions-in-the-same-cycle-in-codesys"
      },
      "headline": "Optimizing Real To Words function for multiple conversions in the same cycle in Codesys",
      "description": "While using the same instance, everything seemed to be functioning correctly until I had a sudden realization that it might be incorrect. For instance, in the code snippet provided as an example, the function realToWords is called with the parameter REAL_TO_WORD2. Here is how it is used: ``` realToWords(rInput:=temperaturePumpKelvin,",
      "author": {
        "@type": "Person",
        "name": "edvard_munch"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">Optimizing Real To Words function for multiple conversions in the same cycle in Codesys</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>edvard_munch</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">123</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">185</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>While using the same instance, everything seemed to be functioning correctly until I had a sudden realization that it might be incorrect. For instance, in the code snippet provided as an example, the function realToWords is called with the parameter REAL_TO_WORD2.

Here is how it is used:

```
realToWords(rInput:=temperaturePumpKelvin, xSwapBytes:=FALSE,
                wOutput1=> hmiOutput.temperaturePumpWordTwo,
                wOutput2=> hmiOutput.temperaturePumpWordOne);
    
realToWords(rInput:=temperatureBoxRead, xSwapBytes:=FALSE,
                wOutput1=> hmiOutput.temperatureBoxWordTwo,
                wOutput2=> hmiOutput.temperatureBoxWordOne);
```

Furthermore, there are approximately 10 other instances where this same function is called within the codebase.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Edvard, the functionality of this may vary depending on how it is implemented. It is recommended to use separate instances when working with static variables in Function Blocks to avoid interference. If the values, like conversion coefficients, remain constant, using only one instance should be sufficient. However, if you need to change static variable values within the block, using multiple instances is advised to prevent unintentional changes to multiple outputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Edvard, I'm intrigued as to where you discovered the theta library. I searched for "OCL.REAL_TO_WORD2" but only found a document in Russian describing blocks. Can you share the source of this library for further exploration?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the purpose of the realToWords function in Codesys?</h4>
<p class='text-muted'><strong>Answer:</strong> - The realToWords function in Codesys is used to convert a real number into two integer words.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the xSwapBytes parameter set to FALSE in the provided code snippet?</h4>
<p class='text-muted'><strong>Answer:</strong> - The xSwapBytes parameter being set to FALSE indicates that byte swapping is not performed during the conversion process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How does the function realToWords handle multiple conversions in the same cycle?</h4>
<p class='text-muted'><strong>Answer:</strong> - The function realToWords can handle multiple conversions in the same cycle by providing different input real numbers and output word variables for each conversion call, as demonstrated in the code snippet.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What happens if the same instance of realToWords is called multiple times within the codebase?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the same instance of realToWords is called multiple times within the codebase, each call will perform a separate conversion with its specified input and output variables without interfering with the other calls.</p>
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
