
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Version 22.00.00 of the software is experiencing an issue where the EQL instruction is incorrectly evaluating as true even when the inputs are not equal. Input #1 is a Dint Tag, while Input #2 is static. Different values are being input into Tag #1 and updating correctly. The EQL">
    <meta name="keywords" content="ccw software version 00, eql instruction, inputs not equal, dint tag, static input, software bug, issue diagnosis, run time evaluation, logic rung, plc programming, debugging software, input value dis">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/issue-with-ccw-software-version-22-00-00-eql-instruction-stuck-as-true-despite-inputs-being-not-equal">
    <title>Issue with CCW Software Version 22.00.00: EQL Instruction Stuck as True Despite Inputs Being Not Equal | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Issue with CCW Software Version 22.00.00: EQL Instruction Stuck as True Despite Inputs Being Not Equal | Oxmaint Community">
    <meta property="og:description" content="Version 22.00.00 of the software is experiencing an issue where the EQL instruction is incorrectly evaluating as true even when the inputs are not equal. Input #1 is a Dint Tag, while Input #2 is static. Different values are being input into Tag #1 and updating correctly. The EQL">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/issue-with-ccw-software-version-22-00-00-eql-instruction-stuck-as-true-despite-inputs-being-not-equal">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Issue with CCW Software Version 22.00.00: EQL Instruction Stuck as True Despite Inputs Being Not Equal | Oxmaint Community">
    <meta name="twitter:description" content="Version 22.00.00 of the software is experiencing an issue where the EQL instruction is incorrectly evaluating as true even when the inputs are not equal. Input #1 is a Dint Tag, while Input #2 is static. Different values are being input into Tag #1 and updating correctly. The EQL">
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
        "@id": "https://community.oxmaint.com/discussion-forum/issue-with-ccw-software-version-22-00-00-eql-instruction-stuck-as-true-despite-inputs-being-not-equal"
      },
      "headline": "Issue with CCW Software Version 22.00.00: EQL Instruction Stuck as True Despite Inputs Being Not Equal",
      "description": "Version 22.00.00 of the software is experiencing an issue where the EQL instruction is incorrectly evaluating as true even when the inputs are not equal. Input #1 is a Dint Tag, while Input #2 is static. Different values are being input into Tag #1 and updating correctly. The EQL",
      "author": {
        "@type": "Person",
        "name": "Verne LaRue"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-01",
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
                <h1 class="text-white">Issue with CCW Software Version 22.00.00: EQL Instruction Stuck as True Despite Inputs Being Not Equal</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Verne LaRue</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">333</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">437</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Version 22.00.00 of the software is experiencing an issue where the "EQL" instruction is incorrectly evaluating as true even when the inputs are not equal. Input #1 is a Dint Tag, while Input #2 is static. Different values are being input into Tag #1 and updating correctly. The "EQL" comment is typically used at the beginning of the rung, but even with Input #1 equal to 0 and Input #2 static at 25, the rung is still evaluating as true.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you kindly share the code online with the input values displayed? I am not very experienced with the EQL "instruction" in CCW.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies, EQU instead of EQL - Understanding the Difference and How it Impacts Your Results</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Verne LaRue</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Step 35 in your PLC program is straightforward, with only one subtraction instruction. The remaining part of the rung focuses on managing steps. If other parts of your logic follow a similar pattern of sequential evaluations, keep in mind that a significant portion of your sequence can be executed in a single scan. This may result in multiple repetitions of the sequence instead of an "stuck" EQU situation. When constructing sequence steps in this manner, timer and counter instructions may not experience rung-in-false conditions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of PLC programming, timing plays a crucial role as the scan cycle acts as the heartbeat of the process. PLCs are known for being discrete devices, meaning they can only perform one task at a time. When monitoring something in the online mode of CCW, it's important to remember that the information displayed is sampled at a specific point in time. This means that even if a sequence step tag appears in multiple instructions, it doesn't mean it was the same value at the time of evaluation.

Take a look at the attached program and images for a clearer understanding. The PDF shows the static program, while the PNG files capture instant snapshots of the program in action. Pay close attention to how the value of the step tag changes throughout the program, while the online display shows a sampled value at a specific time point. This discrepancy can lead to confusion, such as when an EQU comparison instruction shows a displayed value of 0 for the step tag being equal to 1, 2, or 3. This discrepancy occurs because at the time of evaluation, the step tag had different values than the displayed 0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering a program and its online state, it is important to note that reversing the steps can impact the evaluation of EQU comparisons. In this scenario, only one step's EQU comparison can be True for a single scan sequence. For example, if step 1 is being evaluated, the value of step will be incremented to 2 at the end of the rung guarded by EQU step 1. Since the rung with EQU step 2 is executed before the rung with EQU step 1 in a single scan cycle, the EQU step 2 will not be evaluated and produce a True result until the next scan cycle.

In the online state image provided, step is displayed as 2, while step initial, step 3, and step 2 are displayed as 1. This indicates that step was 1 at the beginning and 2 at the end of the scan cycle when it was sampled for online mode display. The comparison for rung 3 (EQU step 3) is True, while the comparison for rung 5 (EQU step 2) is False, suggesting that the online states of the rungs are sampled asynchronously at different times from the tags.

Overall, using the online mode display may not always provide an accurate representation of a running PLC program's state. This highlights the importance of being able to predict the program's behavior over time in PLC programming, as timing is crucial in determining the outcome of events.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The LES, also referred to as the Less Than instruction, is commonly used in programming to compare two values. It works by taking two integers, floats, or constants and determining if the value in “Source A” is less than the value in “Source B”. It will return TRUE if the value in “Source A” is smaller than that of “Source B”. This instruction is useful for establishing an upper limit for analog sensors and alerting the programmer if the limit is exceeded. In RSLogix 500, it is not possible to compare two constants, a limitation that does not exist in RSLogix 5000 and Studio 5000. This applies to all comparison instructions as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asteamtechno</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the specific issue with CCW Software Version 22.00.00 mentioned in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue is related to the "EQL" instruction incorrectly evaluating as true even when the inputs are not equal.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Which inputs are causing the problem in CCW Software Version 22.00.00?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Input 1 (a Dint Tag) and Input 2 (static value) are causing the problem, where despite different values being input into Tag 1, the "EQL" instruction is still evaluating as true.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How is the "EQL" instruction typically used in the software rung?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "EQL" instruction is typically used at the beginning of the rung to compare two values for equality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What is an example of the issue described in the thread, where Input 1 is 0 and Input 2 is static at 25, yet the rung evaluates as true?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The problem occurs when Input 1 is set to 0 and Input 2 is set to a static value of 25, but the "EQL" instruction incorrectly evaluates as true despite the inputs not being equal.</p>
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
