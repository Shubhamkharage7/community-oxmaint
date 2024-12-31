
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there! I am currently attempting to make improvements to an existing program that is poorly written. Specifically, I am working on a system using an A-B MicroLogix 1200. In the ladder diagram provided, I have a question: If Input B is not activated but Input A is, will">
    <meta name="keywords" content="a-b micrologix 1200, ladder diagram, input a, input b, coil activation, program improvement, existing program, system upgrade, plc system, logic controller, automation system, input activation, coil logic, electrical control, industrial">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/will-the-coil-be-activated-if-input-b-is-not-active-but-input-a-is-in-an-a-b-micrologix-1200-system">
    <title>Will the coil be activated if Input B is not active but Input A is in an A-B MicroLogix 1200 system? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Will the coil be activated if Input B is not active but Input A is in an A-B MicroLogix 1200 system? | Oxmaint Community">
    <meta property="og:description" content="Hello there! I am currently attempting to make improvements to an existing program that is poorly written. Specifically, I am working on a system using an A-B MicroLogix 1200. In the ladder diagram provided, I have a question: If Input B is not activated but Input A is, will">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/will-the-coil-be-activated-if-input-b-is-not-active-but-input-a-is-in-an-a-b-micrologix-1200-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Will the coil be activated if Input B is not active but Input A is in an A-B MicroLogix 1200 system? | Oxmaint Community">
    <meta name="twitter:description" content="Hello there! I am currently attempting to make improvements to an existing program that is poorly written. Specifically, I am working on a system using an A-B MicroLogix 1200. In the ladder diagram provided, I have a question: If Input B is not activated but Input A is, will">
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
        "@id": "https://community.oxmaint.com/discussion-forum/will-the-coil-be-activated-if-input-b-is-not-active-but-input-a-is-in-an-a-b-micrologix-1200-system"
      },
      "headline": "Will the coil be activated if Input B is not active but Input A is in an A-B MicroLogix 1200 system?",
      "description": "Hello there! I am currently attempting to make improvements to an existing program that is poorly written. Specifically, I am working on a system using an A-B MicroLogix 1200. In the ladder diagram provided, I have a question: If Input B is not activated but Input A is, will",
      "author": {
        "@type": "Person",
        "name": "Skidood"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Will the coil be activated if Input B is not active but Input A is in an A-B MicroLogix 1200 system?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Skidood</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">326</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">271</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there! I am currently attempting to make improvements to an existing program that is poorly written. Specifically, I am working on a system using an A-B MicroLogix 1200. In the ladder diagram provided, I have a question: If Input B is not activated but Input A is, will the coil still be activated?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The coil value is updated individually for each rung in the ladder logic. On the second rung, the coil is set to false. Because the 1200 PLC updates outputs at the end of each scan, there is no chance for it to become energized, not even for a moment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Imagine toggling offline in a program undergoing updates and taking on the logic yourself. Start by scanning from top to bottom, left to right. If Input A is false, then Coil A is Low. If Input B is false, Coil A remains Low. Send data to ensure Coil A stays low. In the next scan, if Input A is true, Coil A becomes high. If Input B is false, Coil A stays low. Send data to maintain Coil A low based on the last received information. In the following scan, if Input A is false, Coil A is low. If Input B is true, Coil A becomes high. Send data to set Coil A high according to the last received information. By reading from top to bottom, left to right, the final decision for the coil will be based on the last read state of the logic. While there may be instances where there is a (L) in multiple places, causing intermittent output issues, an OTE is a one-time use, and any instance of the coil before the last one scanned is irrelevant to the final decision-making process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The OTE coil instruction stands out for its unique functionality - it performs actions both when it is true and when it is false. This differs from most output instructions, which only act when true and remain inactive when false. As pointed out by Cheeseface, the physical outputs are updated at the end of the scan cycle. In cases where two rungs try to control the same output using OTE instructions, the principle of "last one wins" applies. Consequently, Input_B will always determine the status of the physical output Coil_A. The first rung becomes redundant and can be deleted since it has no impact on the physical output. If Input_B is open, the output is disabled, whereas if Input_B is closed, the output is activated. Despite being technically valid in the code, this setup may not function as expected due to the programming logic involved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you everyone for your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Skidood</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ron Beaufort provides a simple explanation for Output Energizing (OTE) in PLC programming. Essentially, it assigns a value of 1 to the tag when the previous rung is true, and a value of 0 when the rung is false. This action does not physically activate an output. The physical output is only affected when the tag is evaluated during the IO update process. In Micro Logix, the IO update occurs at the end of the ladder scan, but in situations like immediate IO or Control Logix, the IO may be updated asynchronously to the scan. To ensure sequential IO update, it is recommended to map real-world IO to intermediate tags and incorporate these tags into your logic. This practice also facilitates the reuse of code across different PLCs with varying IO configurations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Will the coil be activated if Input B is not active but Input A is in an A-B MicroLogix 1200 system?
   - No, the coil will not be activated if Input B is not active even if Input A is active. Both Input A and Input B need to be active for the coil to be activated in an A-B MicroLogix 1200 system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is it necessary for both Input A and Input B to be active for the coil to be activated?</h4>
<p class='text-muted'><strong>Answer:</strong> - In ladder logic programming, the logical AND function is represented by connecting two inputs with an AND instruction. This means that for the coil to be activated, both Input A and Input B must be active simultaneously to satisfy the logical AND condition.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I modify the ladder diagram to ensure the coil is activated if either Input A or Input B is active?</h4>
<p class='text-muted'><strong>Answer:</strong> - To achieve this behavior, you can use an OR instruction in the ladder logic programming. By connecting Input A and Input B with an OR instruction before the coil, the coil will be activated if either Input A or Input B is active, providing the desired functionality.</p>
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
