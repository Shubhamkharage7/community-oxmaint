
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When accessing the Module Information in Simatic Manager under PLC - Diagnostic/Settings, users will come across three key memory areas: Load Memory, Work Memory, and Retentive Memory. Interestingly, when making changes to the hardware configuration, such as adding I/O Cards, these alterations do not show up in these memory">
    <meta name="keywords" content="siemens plc hardware configuration, simatic manager memory areas, module information, load memory, work memory, retentive memory, i/o cards, blocks, object properties, system data memory bytes, hardware configuration changes, memory area updates, plc diagnostic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/where-is-siemens-plc-hardware-configuration-stored-in-simatic-manager-memory-areas">
    <title>Where is Siemens PLC Hardware Configuration stored in Simatic Manager Memory Areas? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Where is Siemens PLC Hardware Configuration stored in Simatic Manager Memory Areas? | Oxmaint Community">
    <meta property="og:description" content="When accessing the Module Information in Simatic Manager under PLC - Diagnostic/Settings, users will come across three key memory areas: Load Memory, Work Memory, and Retentive Memory. Interestingly, when making changes to the hardware configuration, such as adding I/O Cards, these alterations do not show up in these memory">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/where-is-siemens-plc-hardware-configuration-stored-in-simatic-manager-memory-areas">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Where is Siemens PLC Hardware Configuration stored in Simatic Manager Memory Areas? | Oxmaint Community">
    <meta name="twitter:description" content="When accessing the Module Information in Simatic Manager under PLC - Diagnostic/Settings, users will come across three key memory areas: Load Memory, Work Memory, and Retentive Memory. Interestingly, when making changes to the hardware configuration, such as adding I/O Cards, these alterations do not show up in these memory">
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
        "@id": "https://community.oxmaint.com/discussion-forum/where-is-siemens-plc-hardware-configuration-stored-in-simatic-manager-memory-areas"
      },
      "headline": "Where is Siemens PLC Hardware Configuration stored in Simatic Manager Memory Areas?",
      "description": "When accessing the Module Information in Simatic Manager under PLC - Diagnostic/Settings, users will come across three key memory areas: Load Memory, Work Memory, and Retentive Memory. Interestingly, when making changes to the hardware configuration, such as adding I/O Cards, these alterations do not show up in these memory",
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
      "datePublished": "2024-07-21",
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
                <h1 class="text-white">Where is Siemens PLC Hardware Configuration stored in Simatic Manager Memory Areas?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>USMAN SHAH</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">163</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">347</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When accessing the Module Information in Simatic Manager under PLC -> Diagnostic/Settings, users will come across three key memory areas: Load Memory, Work Memory, and Retentive Memory. Interestingly, when making changes to the hardware configuration, such as adding I/O Cards, these alterations do not show up in these memory areas. However, switching over to Blocks -> Object properties -> Blocks reveals that changes in hardware configuration do impact the System Data Memory Bytes. This raises the question: Why do changes fail to reflect in Work, Load, or Retentive Memory despite modifications in hardware configuration?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the hardware is stored in the system data area rather than in working or loading memory. It seems like you have found the answer to your own question regarding hardware storage within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why do hardware configuration changes not appear in Load Memory, Work Memory, or Retentive Memory in Siemens PLC Simatic Manager?</h4>
<p class='text-muted'><strong>Answer:</strong> Changes to the hardware configuration, such as adding I/O Cards, do not reflect in Load Memory, Work Memory, or Retentive Memory because these memory areas store program data and not hardware configuration details. Hardware configuration changes impact System Data Memory Bytes, which are reflected in Blocks -> Object properties -> Blocks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the key memory areas in Siemens PLC Simatic Manager related to hardware configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> The key memory areas related to hardware configuration in Simatic Manager are Load Memory, Work Memory, and Retentive Memory. While changes to the hardware configuration are not directly stored in these memory areas, they can affect System Data Memory Bytes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I view the impact of hardware configuration changes on memory areas in Siemens PLC Simatic Manager?</h4>
<p class='text-muted'><strong>Answer:</strong> To view the impact of hardware configuration changes on memory areas in Simatic Manager, navigate to Blocks -> Object properties -> Blocks. Changes in hardware configuration, such as adding I/O Cards, are reflected in the System Data Memory Bytes rather than Load Memory, Work Memory, or Retentive Memory.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What is the significance of Load Memory, Work Memory, and Retentive Memory in Siemens PLC Simatic Manager?</h4>
<p class='text-muted'><strong>Answer:</strong> A</p>
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
