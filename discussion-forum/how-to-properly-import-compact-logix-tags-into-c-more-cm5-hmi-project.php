
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have extensive experience in programming Studio 5000 PLCs and C-More HMIs. However, integrating a C-More HMI with a Compact Logix PLC is a new challenge for me. I am currently facing difficulties in exporting my PLC tags for import into my C-More HMI project. In Studio 5000 v33.11,">
    <meta name="keywords" content="compact logix, c-more cm5, hmi project, studio 5000 plcs, plc tags, c-more hmi, integrating, exporting tags, import tags, studio 5000 v11, .csv format">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-properly-import-compact-logix-tags-into-c-more-cm5-hmi-project">
    <title>How to Properly Import Compact Logix Tags into C-More CM5 HMI Project | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Properly Import Compact Logix Tags into C-More CM5 HMI Project | Oxmaint Community">
    <meta property="og:description" content="I have extensive experience in programming Studio 5000 PLCs and C-More HMIs. However, integrating a C-More HMI with a Compact Logix PLC is a new challenge for me. I am currently facing difficulties in exporting my PLC tags for import into my C-More HMI project. In Studio 5000 v33.11,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-properly-import-compact-logix-tags-into-c-more-cm5-hmi-project">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Properly Import Compact Logix Tags into C-More CM5 HMI Project | Oxmaint Community">
    <meta name="twitter:description" content="I have extensive experience in programming Studio 5000 PLCs and C-More HMIs. However, integrating a C-More HMI with a Compact Logix PLC is a new challenge for me. I am currently facing difficulties in exporting my PLC tags for import into my C-More HMI project. In Studio 5000 v33.11,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-properly-import-compact-logix-tags-into-c-more-cm5-hmi-project"
      },
      "headline": "How to Properly Import Compact Logix Tags into C-More CM5 HMI Project",
      "description": "I have extensive experience in programming Studio 5000 PLCs and C-More HMIs. However, integrating a C-More HMI with a Compact Logix PLC is a new challenge for me. I am currently facing difficulties in exporting my PLC tags for import into my C-More HMI project. In Studio 5000 v33.11,",
      "author": {
        "@type": "Person",
        "name": "MikeVT"
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
                <h1 class="text-white">How to Properly Import Compact Logix Tags into C-More CM5 HMI Project</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MikeVT</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">500</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">132</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have extensive experience in programming Studio 5000 PLCs and C-More HMIs. However, integrating a C-More HMI with a Compact Logix PLC is a new challenge for me. I am currently facing difficulties in exporting my PLC tags for import into my C-More HMI project. In Studio 5000 v33.11, I have only found options to export tags in .CSV or .TXT formats. After reaching out to Automation Direct Tech Support, I was advised to export the tags in an .L5X file format. Despite multiple attempts using the .CSV and .TXT files, I have been unable to successfully import the tags. I am seeking guidance on how to properly import my tags into my C-More CM-5 project. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted to save your project in the L5X file format? To do so, navigate to File -> Save As and choose L5X (or L5K) from the file type dropdown menu. Alternatively, you can create a tag of each type in the C-More software, export it to understand the format, use Excel to match the Logix file format to the C-More file, and transfer the tags before re-importing. Keep in mind that you may need to make adjustments to the CSV file, as Excel tends to add or remove elements like single quotes that are necessary for C-More compatibility. In such cases, using find & replace in Notepad++ after making edits in Excel may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Appreciate the help, Joseph_e2! Converting my project, particularly the primary program, to an L5X file solved the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeVT</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What file format should I use to export Compact Logix PLC tags for importing into a C-More CM5 HMI project?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To properly import Compact Logix tags into a C-More CM5 HMI project, it is recommended to export the tags in an .L5X file format.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I am facing difficulties importing PLC tags into my C-More HMI project. What can I do to resolve this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are experiencing issues with importing tags, ensure that you are exporting the tags from Studio 5000 in the correct .L5X format instead of .CSV or .TXT files.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I export Compact Logix PLC tags in Studio 5000 for integration with a C-More HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In Studio 5000 v33.11, look for the option to export tags in the .L5X file format. This format is recommended for successful import into a C-More CM5 HMI project.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  I have experience with Studio 5000 PLCs and C-More HMIs but am new to integrating a Compact Logix PLC with a C-More HMI. Any tips for a smooth integration process?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When integrating a Compact Logix PLC with a C-More HMI, ensure you export your PLC tags in the .L5X file format for seamless</p>
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
