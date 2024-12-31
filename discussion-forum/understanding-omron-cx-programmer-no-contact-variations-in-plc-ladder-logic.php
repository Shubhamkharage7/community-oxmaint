
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently in the process of translating an OMRON CPM2* PLC program from CX-Programmer to Siemens TIA Portal for compatibility with a new S7-1215 CPU. The program utilizes ladder logic, however, I have encountered a discrepancy with the NO contact instructions in the OMRON program. Despite searching">
    <meta name="keywords" content="omron cx-programmer, plc ladder logic, no contact variations, omron cpm2*, siemens tia portal, s7-1215 cpu, ladder diagram, no contacts, parallel contacts, double vertical line, statement list format">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-omron-cx-programmer-no-contact-variations-in-plc-ladder-logic">
    <title>Understanding OMRON CX-Programmer NO Contact Variations in PLC Ladder Logic | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding OMRON CX-Programmer NO Contact Variations in PLC Ladder Logic | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently in the process of translating an OMRON CPM2* PLC program from CX-Programmer to Siemens TIA Portal for compatibility with a new S7-1215 CPU. The program utilizes ladder logic, however, I have encountered a discrepancy with the NO contact instructions in the OMRON program. Despite searching">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-omron-cx-programmer-no-contact-variations-in-plc-ladder-logic">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding OMRON CX-Programmer NO Contact Variations in PLC Ladder Logic | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently in the process of translating an OMRON CPM2* PLC program from CX-Programmer to Siemens TIA Portal for compatibility with a new S7-1215 CPU. The program utilizes ladder logic, however, I have encountered a discrepancy with the NO contact instructions in the OMRON program. Despite searching">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-omron-cx-programmer-no-contact-variations-in-plc-ladder-logic"
      },
      "headline": "Understanding OMRON CX-Programmer NO Contact Variations in PLC Ladder Logic",
      "description": "Hello, I am currently in the process of translating an OMRON CPM2* PLC program from CX-Programmer to Siemens TIA Portal for compatibility with a new S7-1215 CPU. The program utilizes ladder logic, however, I have encountered a discrepancy with the NO contact instructions in the OMRON program. Despite searching",
      "author": {
        "@type": "Person",
        "name": "rich_goodchild"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-25",
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
                <h1 class="text-white">Understanding OMRON CX-Programmer NO Contact Variations in PLC Ladder Logic</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rich_goodchild</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">278</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">106</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently in the process of translating an OMRON CPM2* PLC program from CX-Programmer to Siemens TIA Portal for compatibility with a new S7-1215 CPU. The program utilizes ladder logic, however, I have encountered a discrepancy with the NO contact instructions in the OMRON program. Despite searching extensively, I have been unable to determine the distinction between the two types of NO contacts present.

I have included a screenshot (labeled 'ladder.png') to illustrate the issue: the ladder diagram displays standard NO contacts 'P_On' and 'BWASH_INIT1' on the left side, followed by two additional NO contacts in parallel below - labeled '203.09' and 'MAN_BWASH2' - featuring a double vertical line on the left side of the NO contact symbol instead of a single line.

When viewing the rung in statement list format, a different view is presented (refer to 'STL.png' for comparison).

I would greatly appreciate any insights or explanations regarding the distinction between these two variations of NO contacts. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In Mitsubishi PLCs, the contacts from a DIFU function have a unique arrangement that sets them apart from regular N/O or N/C contacts. Instead of having to call the DIFU or DIFD function, the differentiation is indicated by an up arrow or down arrow inside the contact - a feature not found in other PLCs. This distinction helps to visually identify oneshot contacts. It appears that you are located in Derby, which is only a short distance from my location.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the clarification, it all makes sense now. I have been a lifelong resident of Derby, but I find myself working in various locations due to my PLC engineering role at a systems integrator. Wishing you a great weekend and thanks once more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rich_goodchild</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I can relate to the struggle of finding job opportunities that are either located far from home or require relocation. Although my roots are in Burton, I have spent the majority of my career spanning over 16 years in London, Wigan, and other northern regions. It can be challenging to find employment close to home, but expanding your search nationwide can lead to exciting opportunities in various locations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the difference between standard NO contacts and the NO contacts with a double vertical line in OMRON CX-Programmer ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - The standard NO contacts have a single line symbol, while the NO contacts with a double vertical line in OMRON CX-Programmer represent a specific variation that may have a different functionality or purpose.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I translate OMRON CX-Programmer ladder logic with different NO contact variations to Siemens TIA Portal for S7-1215 CPU compatibility?</h4>
<p class='text-muted'><strong>Answer:</strong> - Translating ladder logic programs with different NO contact variations involves understanding the specific logic implemented by each variation and replicating it in the target platform.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a specific naming convention or significance associated with the NO contact variations labeled '203.09' and 'MAN_BWASH2' in the ladder diagram?</h4>
<p class='text-muted'><strong>Answer:</strong> - The specific labels '203.09' and 'MAN_BWASH2' assigned to NO contacts in the ladder diagram may indicate their respective functions or connections within the PLC program. Understanding the context of these labels is essential for interpreting their roles accurately.</p>
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
