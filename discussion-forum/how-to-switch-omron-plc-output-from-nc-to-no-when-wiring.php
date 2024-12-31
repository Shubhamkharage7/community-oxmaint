
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I could use some assistance with my Omron PLC system. I am currently working with the CP1L model. While programming, everything seems to be functioning correctly. However, I am facing an issue where the common and output are normally closed (NC) instead of normally open (NO) when">
    <meta name="keywords" content="omron plc, cp1l model, plc output wiring, switch nc to no, programming issue, common and output, normally closed, normally open, program structure, input wiring, troubleshooting plc output, omron plc programming, wiring guidance, nc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-switch-omron-plc-output-from-nc-to-no-when-wiring">
    <title>How to switch Omron PLC output from NC to NO when wiring | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to switch Omron PLC output from NC to NO when wiring | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I could use some assistance with my Omron PLC system. I am currently working with the CP1L model. While programming, everything seems to be functioning correctly. However, I am facing an issue where the common and output are normally closed (NC) instead of normally open (NO) when">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-switch-omron-plc-output-from-nc-to-no-when-wiring">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to switch Omron PLC output from NC to NO when wiring | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I could use some assistance with my Omron PLC system. I am currently working with the CP1L model. While programming, everything seems to be functioning correctly. However, I am facing an issue where the common and output are normally closed (NC) instead of normally open (NO) when">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-switch-omron-plc-output-from-nc-to-no-when-wiring"
      },
      "headline": "How to switch Omron PLC output from NC to NO when wiring",
      "description": "Hello everyone, I could use some assistance with my Omron PLC system. I am currently working with the CP1L model. While programming, everything seems to be functioning correctly. However, I am facing an issue where the common and output are normally closed (NC) instead of normally open (NO) when",
      "author": {
        "@type": "Person",
        "name": "Ark95"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-08",
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
                <h1 class="text-white">How to switch Omron PLC output from NC to NO when wiring</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ark95</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">149</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">385</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I could use some assistance with my Omron PLC system. I am currently working with the CP1L model. While programming, everything seems to be functioning correctly. However, I am facing an issue where the common and output are normally closed (NC) instead of normally open (NO) when wiring. Can anyone provide guidance on how to switch it back to NO? The program structure is as follows: -Normal input-| -|--------( )-| -|--------( )-|</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What category do your outputs fall into: Sink, Source, or Relay? Understanding the classification of your outputs is crucial for optimizing performance and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Liam Moran</span></li>
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
<h4 class='text-dark'>FAQ: 1. How do I switch the Omron PLC output from NC to NO when wiring?</h4>
<p class='text-muted'><strong>Answer:</strong> To switch the Omron PLC output from normally closed (NC) to normally open (NO) when wiring, you can simply change the wiring configuration in the program. You need to modify the ladder logic to switch the output state from NC to NO.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can you provide step-by-step guidance on changing the Omron PLC output from NC to NO?</h4>
<p class='text-muted'><strong>Answer:</strong> Here are the steps to switch the Omron PLC output from normally closed (NC) to normally open (NO):
   - Access the ladder logic program in your Omron PLC software.
   - Locate the section where the output is configured as NC.
   - Modify the logic to change the output state from NC to NO.
   - Verify and download the updated program to the PLC.
   - Test the output to ensure it is now functioning as normally open (NO).</p>
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
