
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have a main routine where I use the XIC Run instruction. Below it, there is a JSR. Inside the logic of the subroutine, there is an OTL for Run. In this setup, the Run instruction does not latch. However, when I move the JSR above the">
    <meta name="keywords" content="xic run instruction, plc subroutine execution, jsr behavior, otl run instruction, logic execution order, instruction latching, destructive ote, bit state overwrite, subroutine logic, scanning sequence, understanding xic run, plc programming, ladder logic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-xic-run-instruction-behavior-in-plc-subroutine-execution">
    <title>Understanding XIC Run Instruction Behavior in PLC Subroutine Execution | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding XIC Run Instruction Behavior in PLC Subroutine Execution | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have a main routine where I use the XIC Run instruction. Below it, there is a JSR. Inside the logic of the subroutine, there is an OTL for Run. In this setup, the Run instruction does not latch. However, when I move the JSR above the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-xic-run-instruction-behavior-in-plc-subroutine-execution">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding XIC Run Instruction Behavior in PLC Subroutine Execution | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have a main routine where I use the XIC Run instruction. Below it, there is a JSR. Inside the logic of the subroutine, there is an OTL for Run. In this setup, the Run instruction does not latch. However, when I move the JSR above the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-xic-run-instruction-behavior-in-plc-subroutine-execution"
      },
      "headline": "Understanding XIC Run Instruction Behavior in PLC Subroutine Execution",
      "description": "Hello everyone, I have a main routine where I use the XIC Run instruction. Below it, there is a JSR. Inside the logic of the subroutine, there is an OTL for Run. In this setup, the Run instruction does not latch. However, when I move the JSR above the",
      "author": {
        "@type": "Person",
        "name": "patrickmoneyy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-13",
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
                <h1 class="text-white">Understanding XIC Run Instruction Behavior in PLC Subroutine Execution</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">367</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">285</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have a main routine where I use the XIC "Run" instruction. Below it, there is a JSR. Inside the logic of the subroutine, there is an OTL for "Run". In this setup, the "Run" instruction does not latch. However, when I move the JSR above the desired instruction, "Run" latches as expected. I believe the order in which the logic is executed is the reason for this behavior, but I am struggling to find a clear explanation. I tested removing a destructive OTE that comes after the subroutine, and the behavior aligned with my expectations. It seems that a destructive reference can overwrite the state of a bit until it is scanned again.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When the JSR is activated and Run=1, a rung that is logically false will reset the "Run" output to zero. This concept aligns with the idea in traditional ladder logic where the last examined condition takes precedence.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore explained that when the JSR runs and the "Run" equals 1, a rung that is logically false will reset the "Run" output enable (OTE) to zero. This aligns with the principle in traditional ladder logic where the last examined condition takes precedence. It's common to encounter challenges with destructive bits, but it's usually a matter of overthinking the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In PLC programming, timing is crucial, with the scan cycle acting as the clock that dictates the sequence of evaluating rungs and instructions. As Ken Moore advises, the last examined instruction "wins," emphasizing the importance of the timing of when actions are executed over what actions are performed. To ensure proper functionality, consider rearranging the order of instructions, such as moving the OTE before the OTL so that the OTL can dominate when its XIC condition is met. This adjustment can help prevent issues caused by conflicting instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to drbitboy, shifting the OTE before the OTL can lead to a successful outcome, especially when the XIC feed is True. In addition, after some experimentation, it was discovered that replacing the OTE with an OTL eliminates conflicts. It is advisable to keep latching outputs consistent to avoid any potential issues. Mixing and matching should be avoided to prevent conflicts from arising.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Patrickmoneyy shared his findings that switching from an Output Energize (OTE) to an Output Latch (OTL) does not cause conflicts. It is advised to keep latching outputs consistent to avoid potential issues. Understanding the functions of OTE, OTL, and Output Unlatch (OTU) in relation to scan process is crucial. 

An OTE writes both 1 and 0 to a tag address every scan based on the rung's true or false conditions. On the other hand, an OTL only writes a 1 when the rung is true, while an OTU only writes a 0 when the rung is true. While these instructions modify memory, using multiple OTLs and OTUs on the same address is common and does not trigger a duplicate warning. 

Each OTE instance should only appear once in the code. Combining OTEs with OTLs or OTUs is not recommended as it may lead to duplicate warnings. Remember, the scan process does not retain memory. Once a rung is evaluated and the appropriate value is written to the tag, it remains unchanged unless another destructive instruction writes to the same tag later in the scan.

For example, if an OTE is true in rung 1 and false in rung 100, the tag will only be ON between rung 1 and 99. Similarly, an OTL or OTU will maintain the tag's state based on their conditions. By simplifying these instructions as writing 0 or 1 to a tag address, their functionality becomes easier to grasp.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I really appreciate the thorough breakdown you provided!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. Why does the XIC "Run" instruction not latch in a PLC subroutine execution setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The XIC "Run" instruction may not latch as expected in a PLC subroutine execution setup due to the order in which the logic is executed. Moving the JSR above the desired instruction can cause the "Run" instruction to latch as intended.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How does the order of logic execution impact the behavior of PLC instructions like XIC and OTL?</h4>
<p class='text-muted'><strong>Answer:</strong> - The order of logic execution can significantly impact the behavior of PLC instructions. In the provided scenario, the placement of the JSR instruction before the desired logic can affect whether the "Run" instruction latches or not.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What role does a destructive OTE play in the behavior of the XIC "Run" instruction within a PLC subroutine?</h4>
<p class='text-muted'><strong>Answer:</strong> - A destructive OTE that comes after the subroutine can overwrite the state of a bit until it is scanned again, potentially affecting the behavior of instructions like XIC "Run" within the PLC subroutine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I ensure consistent behavior of the XIC "Run" instruction in my PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure consistent behavior of the XIC "Run" instruction in your PLC program, consider carefully managing the order of logic execution, avoiding destructive references that may interfere with instruction states, and testing different configurations to align the behavior with your expectations.</p>
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
