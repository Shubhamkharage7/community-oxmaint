
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have upcoming modifications to make on a redundant S7-1500R/H system that must continue to operate without interruption. While I am experienced in working with individual S7-1500 PLCs, this will be my first time working with redundant Siemens PLCs. I have a few questions: 1. In the TIA Portal">
    <meta name="keywords" content="s7-1500r/h systems, redundant siemens plcs, tia portal setup, plc_1 program blocks, software changes, download synchronization, allen-bradley redundant system, ge proficy redundant system, software-only change download">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/making-online-changes-to-redundant-s7-1500r-h-systems-ensuring-continuity-and-synchronization">
    <title>Making Online Changes to Redundant S7-1500R/H Systems: Ensuring Continuity and Synchronization. | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Making Online Changes to Redundant S7-1500R/H Systems: Ensuring Continuity and Synchronization. | Oxmaint Community">
    <meta property="og:description" content="I have upcoming modifications to make on a redundant S7-1500R/H system that must continue to operate without interruption. While I am experienced in working with individual S7-1500 PLCs, this will be my first time working with redundant Siemens PLCs. I have a few questions: 1. In the TIA Portal">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/making-online-changes-to-redundant-s7-1500r-h-systems-ensuring-continuity-and-synchronization">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Making Online Changes to Redundant S7-1500R/H Systems: Ensuring Continuity and Synchronization. | Oxmaint Community">
    <meta name="twitter:description" content="I have upcoming modifications to make on a redundant S7-1500R/H system that must continue to operate without interruption. While I am experienced in working with individual S7-1500 PLCs, this will be my first time working with redundant Siemens PLCs. I have a few questions: 1. In the TIA Portal">
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
        "@id": "https://community.oxmaint.com/discussion-forum/making-online-changes-to-redundant-s7-1500r-h-systems-ensuring-continuity-and-synchronization"
      },
      "headline": "Making Online Changes to Redundant S7-1500R/H Systems: Ensuring Continuity and Synchronization.",
      "description": "I have upcoming modifications to make on a redundant S7-1500R/H system that must continue to operate without interruption. While I am experienced in working with individual S7-1500 PLCs, this will be my first time working with redundant Siemens PLCs. I have a few questions: 1. In the TIA Portal",
      "author": {
        "@type": "Person",
        "name": "AndrewT88"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-31",
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
                <h1 class="text-white">Making Online Changes to Redundant S7-1500R/H Systems: Ensuring Continuity and Synchronization.</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AndrewT88</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">161</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">158</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have upcoming modifications to make on a redundant S7-1500R/H system that must continue to operate without interruption. While I am experienced in working with individual S7-1500 PLCs, this will be my first time working with redundant Siemens PLCs. I have a few questions:

1. In the TIA Portal setup, I noticed that only PLC_1 contains the program blocks. Can I make software changes solely in PLC_1?
2. Once the changes are made, is it sufficient to download them to PLC_1 only? Will the changes automatically synchronize to PLC_2? I noticed an option to download to the backup PLC as well, and I would like confirmation that it will synchronize similarly to an Allen-Bradley redundant system, or if it requires separate downloads to both PLCs like an older GE Proficy redundant system.
3. During a software-only change download, will the PLC continue to operate without any interruptions?

Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>1. When making code changes, PLC1 always points to the primary CPU, which controls the system. This could be either CPU1 or CPU2, but in the TIA portal, it always refers to CPU1. It is important for the system to be in a redundant state before making online changes to both CPUs simultaneously.

2. Synchronization or downloading to CPU 2 is only necessary after hardware modifications. Both CPUs need to be stopped during hardware changes. While it is possible to make some hardware changes in the code, there are limited resources available on how to do so.

3. Only hardware downloads will halt the CPUs. However, making online changes may slow down the PLC scan during the download process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can software changes be made solely in PLC_1 of a redundant S7-1500R/H system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, software changes can be made solely in PLC_1 as it contains the program blocks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Will changes made to PLC_1 automatically synchronize to PLC_2 in a redundant system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, after downloading changes to PLC_1, they will synchronize to PLC_2. It is not necessary to download separately to both PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Will the PLC continue to operate without interruptions during a software-only change download?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the PLC will continue to operate without interruptions during a software-only change download.</p>
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
