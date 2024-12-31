
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In the reset process, there is a step involving rollers controlled by a pneumatic cylinder. The rollers are raised when the output is on and return to the home position when the output is off. However, there is no feedback to confirm their position. To address this, a 4-second">
    <meta name="keywords" content="allen-bradley plc, compactlogix l18er, troubleshooting, one-shot timer issue, move instruction, pneumatic cylinder, feedback, 4-second timer, reset cycle, logic modification, stuck step, scan order, saw_reset.step">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-compactlogix-l18er-one-shot-timer-issue-with-move-instruction">
    <title>Troubleshooting Allen-Bradley CompactLogix L18ER: One-Shot Timer Issue with Move Instruction | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Allen-Bradley CompactLogix L18ER: One-Shot Timer Issue with Move Instruction | Oxmaint Community">
    <meta property="og:description" content="In the reset process, there is a step involving rollers controlled by a pneumatic cylinder. The rollers are raised when the output is on and return to the home position when the output is off. However, there is no feedback to confirm their position. To address this, a 4-second">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-compactlogix-l18er-one-shot-timer-issue-with-move-instruction">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Allen-Bradley CompactLogix L18ER: One-Shot Timer Issue with Move Instruction | Oxmaint Community">
    <meta name="twitter:description" content="In the reset process, there is a step involving rollers controlled by a pneumatic cylinder. The rollers are raised when the output is on and return to the home position when the output is off. However, there is no feedback to confirm their position. To address this, a 4-second">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-compactlogix-l18er-one-shot-timer-issue-with-move-instruction"
      },
      "headline": "Troubleshooting Allen-Bradley CompactLogix L18ER: One-Shot Timer Issue with Move Instruction",
      "description": "In the reset process, there is a step involving rollers controlled by a pneumatic cylinder. The rollers are raised when the output is on and return to the home position when the output is off. However, there is no feedback to confirm their position. To address this, a 4-second",
      "author": {
        "@type": "Person",
        "name": "voos.charley"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-05",
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
                <h1 class="text-white">Troubleshooting Allen-Bradley CompactLogix L18ER: One-Shot Timer Issue with Move Instruction</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>voos.charley</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">289</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">392</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In the reset process, there is a step involving rollers controlled by a pneumatic cylinder. The rollers are raised when the output is on and return to the home position when the output is off. However, there is no feedback to confirm their position. To address this, a 4-second timer has been added to allow the cylinders to move before proceeding. If the rollers are already at the home position, the step is skipped. Despite various attempts to modify the logic, the reset cycle still gets stuck at this step until the timer runs out. This issue persists even when using the OSR instruction or creating custom one-shot logic. When SAW_RESET.Step is set to 50 and O_ROLLERS_UP_SV is off, zzz_CJV.7 turns on but SAW_RESET.Step remains at 50 until ResetRollersTimer.DN is on. Suggestions for improving the code are welcome, as I am struggling to grasp the scan order for Allen-Bradley PLCs and determine where I am going wrong.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Installing a position sensor in the pneumatic cylinder is essential for accurately tracking the cylinder's position. This method is highly efficient and reliable for monitoring the location of the cylinder.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to attach a sensor to the cylinder as I lack the necessary control. My task is to program it to function effectively within the existing parameters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>voos.charley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could the issue be related to writing a value of 50 to that tag? It is possible that the MOV instruction is causing a trigger, resulting in two simultaneous writes to the tag. Consequently, the value temporarily jumps to 60. Consider adding a test latch bit after the MOV 60 instruction for added assurance, even though you may have already verified it. My hypothesis is that whenever the timer is finished, it consistently writes 60 when the input value is 50. This could potentially lead to multiple consecutive scans triggering until the other write instruction resolves the discrepancy and stops attempting to write 50.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KenWiegers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am having trouble comprehending your code, but have you considered implementing this on the lower section of rung 5? The code snippet includes a timer function and a move command to control rollers based on certain conditions. Make sure to include the necessary logic for the rollers to move up.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When zzz_CJV.7 activates, it indicates that RollersResetOSR_OB was active but the move instruction failed to write a 60 to SAW_RESET.Step. The accuracy of this statement is crucial. If the condition is met, the next action sets SAW_RESET.Step to 60. To verify this, add an OTL bit parallel to the MOVE instruction. The key question to address is, "What caused SAW_RESET.Step to revert to 50 before the logic section was reached again?"

In addressing your issue, it is essential to consider the following factors: the rollers' position at the home position and the lack of feedback to determine if they are extended or at home. Essentially, you want the system to act based on data that is not provided. Incorporating a position sensor to detect when the rollers are at home is the recommended solution. If this is not feasible, using a timer on the output being off could be a temporary workaround. However, this method is not ideal and could pose risks, such as incomplete retraction of the cylinder or potential flow restrictions.

It is important to assess the implications of relying solely on a timer for this process. Consider the possibility of the cylinder not fully retracting or encountering obstacles that affect its movement. Assess the potential risks and determine if occasional mishaps are acceptable in your operation. It is vital to ensure the safety and efficiency of the system by addressing these concerns.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure accurate measurement of whether the cylinder is extended or retracted, a great solution would be to install proximity sensors on it. This would provide the necessary data to confirm its position with precision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamaroman68</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What comes next after reaching 60 steps?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RAYBRITO</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After analyzing your feedback, I have discovered an improved approach to coding and have identified the root cause of the bug. I will provide a comprehensive response later with details on the problem, resolution, and responses to inquiries and recommendations. I am grateful for all the valuable input from everyone, as it was a collective effort that helped me identify my mistake. Lesson learned!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>voos.charley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am still unsure about the issue in my code, but it seems that the reset process was triggered multiple times when the reset button was pressed. I am perplexed as to how this occurred. The reset button should only trigger the process if it was not completed in one scan, but if the saw was already at the home position, the reset process should only require one scan. I admit that I made a mistake somewhere, but I am unable to pinpoint it. Nevertheless, I managed to resolve the reset button issue by ensuring that it remains inactive once the reset process begins until it is finished and the machine status indicates the need for another reset.

Moving forward, I plan to address comments directly as I believe it will help clarify my solution better. Ken Wiegers raised a valid point about the MOV instruction triggering and causing two writes to the tag simultaneously, resulting in a temporary value of 60. I had already tested this scenario and placed a test latch bit after the MOV 60 instruction for verification. The discovery that the 50 was being written only in the previous rung (step 40) provided a clue that led me to realize the reset process was restarting multiple times. I had also separated the MOV 60 instruction from the latch bit for clearer observation.

In response to lmscar12's suggestion about modifying rung 5, I explained that the proposed solution would not work as it would turn off the O_ROLLERS_UP_SV output, leading to unintended consequences. I acknowledged that my initial approach with the one-shot system was confusing and ineffective, and I am exploring better alternatives to resolve the issue effectively.

Addressing plvlce's input regarding the logic and the need for a position sensor, I clarified that I was treating the cylinder position based on the O_ROLLERS_UP_SV output status. While I understand that a position switch would be a more reliable solution, I am limited in my options to add additional sensors to the machine. I have implemented a version of the timer solution linked to the O_ROLLERS_UP_SV status in a separate routine, eliminating the need for complex timing and one-shot logic. I acknowledge that this is not the optimal solution but it serves the purpose in this scenario where safety risks are minimal.

Overall, I appreciate the feedback and suggestions provided by the commenters. If there are any further questions or clarifications needed, please feel free to ask, and I will address them promptly. Thank you for your assistance and input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>voos.charley</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my Allen-Bradley CompactLogix L18ER reset cycle getting stuck at the step involving a one-shot timer with a move instruction?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the logic sequence and timing configuration in your PLC program. It seems like the feedback mechanism for confirming the position of the rollers controlled by the pneumatic cylinder is causing the cycle to get stuck. You may need to review and adjust the logic to ensure proper operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I improve the code to address the one-shot timer issue with the move instruction in my Allen-Bradley PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To improve the code and address the issue with the one-shot timer, consider reviewing the scan order and sequence of operations in your program. Ensure that the logic for controlling the rollers and the timer is correctly structured to allow smooth operation without getting stuck at any step.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there specific programming techniques or instructions that can help resolve the problem with the one-shot timer in Allen-Bradley PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using techniques like the OSR (One-Shot Rising) instruction and creating custom one-shot logic can be beneficial in handling timer-based operations in Allen-Bradley PLC programming. Make sure to properly implement these instructions in your code to manage the timing and sequencing of your control system effectively.</p>
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
