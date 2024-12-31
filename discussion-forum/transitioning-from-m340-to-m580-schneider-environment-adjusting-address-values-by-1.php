
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I apologize for my lack of proficiency in English, but I discovered this website through a Google search while seeking guidance on transitioning a program from the M340 to M580 environment, both from Schneider. According to my father, the M340 environment starts addresses with 1 due to its older">
    <meta name="keywords" content="m340, m580, schneider environment, address values, program transition, system words, %sw138, %sw141, data editor, offset values, programming adjustment, legacy system, plc migration, address conversion, schneider electric, program compatibility">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/transitioning-from-m340-to-m580-schneider-environment-adjusting-address-values-by-1">
    <title>Transitioning from M340 to M580 Schneider Environment: Adjusting Address Values by -1 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Transitioning from M340 to M580 Schneider Environment: Adjusting Address Values by -1 | Oxmaint Community">
    <meta property="og:description" content="I apologize for my lack of proficiency in English, but I discovered this website through a Google search while seeking guidance on transitioning a program from the M340 to M580 environment, both from Schneider. According to my father, the M340 environment starts addresses with 1 due to its older">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/transitioning-from-m340-to-m580-schneider-environment-adjusting-address-values-by-1">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Transitioning from M340 to M580 Schneider Environment: Adjusting Address Values by -1 | Oxmaint Community">
    <meta name="twitter:description" content="I apologize for my lack of proficiency in English, but I discovered this website through a Google search while seeking guidance on transitioning a program from the M340 to M580 environment, both from Schneider. According to my father, the M340 environment starts addresses with 1 due to its older">
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
        "@id": "https://community.oxmaint.com/discussion-forum/transitioning-from-m340-to-m580-schneider-environment-adjusting-address-values-by-1"
      },
      "headline": "Transitioning from M340 to M580 Schneider Environment: Adjusting Address Values by -1",
      "description": "I apologize for my lack of proficiency in English, but I discovered this website through a Google search while seeking guidance on transitioning a program from the M340 to M580 environment, both from Schneider. According to my father, the M340 environment starts addresses with 1 due to its older",
      "author": {
        "@type": "Person",
        "name": "mellonge"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-03",
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
                <h1 class="text-white">Transitioning from M340 to M580 Schneider Environment: Adjusting Address Values by -1</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mellonge</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">666</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">405</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I apologize for my lack of proficiency in English, but I discovered this website through a Google search while seeking guidance on transitioning a program from the M340 to M580 environment, both from Schneider. According to my father, the M340 environment starts addresses with 1 due to its older version, while the M580 starts with 0. He is currently attempting to transfer a program from M340 to M580, but encounters an issue with the starting address values. He mentioned that to use the existing program on M580, the address values need to be offset by -1. Schneider recommended using system words %SW138 and %SW141, but I am unsure how to implement them. I tried adding %SW138 and %SW141 in the data editor, but saw no changes. Can anyone provide guidance on how to adjust the program's address values by -1?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The ongoing issues with Modbus offsets have long troubled the protocol, sparking negative sentiments among some users on this platform. One key challenge pertains to aligning addresses for data types like REALs that span multiple registers. While older Quantum processors allowed for placing REALs at both odd and even %MW addresses, newer ARM-based processors such as the M340 and M580 require them to be positioned at even-numbered %MW addresses. This disparity can necessitate significant adjustments when translating programs from older to newer processors. However, this issue is less likely to arise in a direct M340 to M580 conversion due to their shared reliance on newer CPUs. Potential compatibility concerns may instead surface in relation to HMIs or communication with other devices, particularly when transitioning from a Quantum to a modern CPU. The discrepancy lies in how a register identified as '400100' in legacy interfaces corresponds to processor mapping, with variations between models leading to differing %MW assignments. Most HMI software, including ours, offers the flexibility to configure read and write commands to accommodate such discrepancies and ensure seamless integration with the processor's addressing scheme. Schneider Electric has also provided system registers as a workaround for maintaining HMI functionality, allowing users to adjust settings at the HMI level while retaining default values for system registers. It is advisable to avoid using %MW0 for HMI data to prevent potential conflicts. If facing challenges during an M340 to M580 conversion, it may be necessary to review and potentially adjust variable addresses to align with the new processor. Clarifying your specific concerns with Schneider's support team could help address any uncertainties and facilitate a smoother migration process. Share more details to receive tailored assistance from the community. Welcome to the forum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The system is functioning properly, but an issue has arisen with the display (GP-Pro). The user is trying to restore the previous display settings, but encountered a discrepancy where the address value was increased by 1 and the data value was unexpectedly shifted backward.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mellonge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to Modbus integration, developers may face challenges depending on how they approach programming their protocol. Typically, the address is set at either 0 or +1. If encountering issues, consider dissecting the code and reconstructing it for improved functionality and stability. This process can help provide a more meaningful and dependable solution for Modbus compatibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you do not have peer-to-peer communications with other PLCs, the focus should be on the HMI. Access the program and add some MOVE blocks to each of the %SW system words. Experiment with values like 0, +1, and -1 on the left side of the block to observe changes on the HMI. It may be necessary to power cycle after each adjustment. Personally, I have not utilized these blocks as we typically make adjustments directly on the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why do M340 and M580 Schneider environments have different starting address values?</h4>
<p class='text-muted'><strong>Answer:</strong> - The M340 environment starts addresses with 1 due to its older version, while the M580 starts with 0.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I adjust address values by -1 when transitioning a program from M340 to M580 environment?</h4>
<p class='text-muted'><strong>Answer:</strong> - To adjust the program's address values by -1 when transitioning from M340 to M580, Schneider recommends using system words %SW138 and %SW141.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. I tried adding %SW138 and %SW141 in the data editor but saw no changes. What should I do?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are unsure how to implement %SW138 and %SW141 to adjust address values by -1, you may need guidance on the specific steps to correctly apply these system words in the program.</p>
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
