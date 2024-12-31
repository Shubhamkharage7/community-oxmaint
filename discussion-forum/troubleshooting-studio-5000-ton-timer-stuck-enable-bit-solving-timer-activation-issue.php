
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my program, I am utilizing a SystemTimer with a capacity of one ton, which I adjust based on different conditions. I am in the process of migrating an IDEC ladder to work with an AB PLC. The IDEC ladder utilized a singular global timer that would reset in">
    <meta name="keywords" content="troubleshooting studio 5000, ton timer, enable bit, timer activation, systemtimer, idec ladder, ab plc, global timer, preset value, activation issue, dn bit, cross references, rung logic, solen">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-studio-5000-ton-timer-stuck-enable-bit-solving-timer-activation-issue">
    <title>Troubleshooting Studio 5000 TON Timer Stuck Enable Bit - Solving Timer Activation Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Studio 5000 TON Timer Stuck Enable Bit - Solving Timer Activation Issue | Oxmaint Community">
    <meta property="og:description" content="In my program, I am utilizing a SystemTimer with a capacity of one ton, which I adjust based on different conditions. I am in the process of migrating an IDEC ladder to work with an AB PLC. The IDEC ladder utilized a singular global timer that would reset in">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-studio-5000-ton-timer-stuck-enable-bit-solving-timer-activation-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Studio 5000 TON Timer Stuck Enable Bit - Solving Timer Activation Issue | Oxmaint Community">
    <meta name="twitter:description" content="In my program, I am utilizing a SystemTimer with a capacity of one ton, which I adjust based on different conditions. I am in the process of migrating an IDEC ladder to work with an AB PLC. The IDEC ladder utilized a singular global timer that would reset in">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-studio-5000-ton-timer-stuck-enable-bit-solving-timer-activation-issue"
      },
      "headline": "Troubleshooting Studio 5000 TON Timer Stuck Enable Bit - Solving Timer Activation Issue",
      "description": "In my program, I am utilizing a SystemTimer with a capacity of one ton, which I adjust based on different conditions. I am in the process of migrating an IDEC ladder to work with an AB PLC. The IDEC ladder utilized a singular global timer that would reset in",
      "author": {
        "@type": "Person",
        "name": "michaelpappas"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-25",
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
                <h1 class="text-white">Troubleshooting Studio 5000 TON Timer Stuck Enable Bit - Solving Timer Activation Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>michaelpappas</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">568</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">486</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my program, I am utilizing a SystemTimer with a capacity of one ton, which I adjust based on different conditions. I am in the process of migrating an IDEC ladder to work with an AB PLC. The IDEC ladder utilized a singular global timer that would reset in a similar manner. As the program transitions to various phases of the process, it will update the timer's preset value and activate it under new conditions, causing it to reset. The problem arises when the timer reaches its preset value, triggering the DN bit, but continues to remain enabled. Upon investigating the cross references for SystemTimer.EN, I identified a specific rung that was causing this issue. Despite this rung not being true, it was still enabling the timer. By replacing the SolenoidRetract XIC and Autoswitch1Bottom XIC with a toggleable bit, I was able to successfully reset the timer by setting SystemTimer.EN to false. Are there any hidden factors at play here? Could there be an unseen trigger causing the timer to remain active despite the lack of indication in the cross references? Thank you, Michael.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing the TON instruction with the same Timer address in multiple sections, the EN bit will be set if any preceding rungs have a "rung-in-true" condition. It is advisable to use only one TON instruction for the timer as long as it is continuously scanned, and employ the RES (reset) instruction to reset it after loading a new preset. Make sure not to keep the RES instruction true as it will prevent the timer from functioning properly. To manage different conditions for operating the timer in various functions, it is recommended to OTE different bits based on the conditions for each machine state, and then place those bits on parallel branches to enable a single instance of the TON. Be cautious of avoiding overlaps where multiple sets of conditions remain true unintentionally. It is easier to identify such issues if all branches are on a single TON rung.

This scenario involves machinery control with conditional subroutines, which may seem ideal for a computer programmer but can be challenging for a PLC technician in practice. When a condition routine is stopped using an OTE instruction, its address remains unchanged. Similarly, a TON instruction stops being evaluated but the enabled or done bits will still be set until another destructive instruction affecting that element is encountered by the PLC.

Conditional subroutines in ladder logic should be primarily used for data handling rather than machinery control. It is essential to carefully consider the application to ensure optimal PLC operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One issue that stands out is the repeated use of the timer tag in 7 TON instructions. This can lead to confusion and inefficiencies in programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I realize that using the same timer tag in 7 different places may not be the most optimal design choice, but I was advised to replicate the IDEC code as closely as possible. Upon further investigation into how the timer is activated, I discovered that a unique bit was added to a branch near each set of instructions for enabling the SystemTimer. Despite SolenoidRetract being false, indicating that the rung should not evaluate as true for the timer or retractTimer bit, I wanted to pinpoint where the timer was actually being enabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>michaelpappas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon examining the cross references for "retractTimer," it appears that the only instance of it being written to is on this particular rung.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>michaelpappas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that a conditional routine has ceased being scanned, leading to the current state where the SolenoidRetract bit is not being updated. Your programming software continues to update the states of addresses, indicating that your new test bit is true. However, since the PLC is no longer instructed to act on the test bit, it retains its last known state (on).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Michaelpappas mentioned that although using the same timer tag in multiple places may not be the ideal logic design decision, he was asked to imitate the IDEC code. Upon further investigation into the timer's activation process, a unique bit was added alongside the instructions to enable the SystemTimer to track where it is being activated. Despite SolenoidRetract being false, indicating that the rung should not evaluate as true for the timer or the retractTimer bit, there may be some issues to resolve. To potentially troubleshoot this, consider pressing Ctrl+T on retractTimer to toggle its status and see if it responds accordingly. If it can be manipulated freely, it suggests that the routine is not being scanned as intended. It would also be helpful to share screenshots of any other sections referencing the TON. Additionally, it's important to determine if these separate routines are constantly being scanned or if there are conditional JSRs in the main routine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears they are heading in the right direction, but an important step would be to perform a cross reference on SolenoidRetract. If the solenoid is activated above a certain point and deactivated below it, Studio 5000 may register it as "off" even though it is actually "on" during the evaluation of the TON's rung. This could help resolve any discrepancies in the programming logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One possible solution is to utilize eight separate timer objects (e.g., SystemTimer_01, SystemTimer_02, etc.). This approach eliminates the need to update the presets. While it deviates from the IDEC code, it maintains the same functionality and takes advantage of the affordable cost of memory. Whenever the code updates the .PREset for a single timer, a corresponding RESET SystemTimer command can be issued. This command will reset the .DN bit and prepare the timer object for the next routine it will be used in. Typically, only one of the _NN_... routines will be called on any given scan cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  What could be causing a TON timer in Studio 5000 to remain enabled even after reaching the preset value?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One possible cause could be a rung in the ladder logic that is incorrectly enabling the timer even when it should not be. It's important to carefully review the logic and cross-references to identify any unintended activation conditions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a TON timer activation issue in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot a TON timer activation problem, start by examining the ladder logic and cross-references related to the timer's enable bit. Look for any conditions or rungs that might be inadvertently keeping the timer enabled, even when it should be reset.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it possible for hidden factors to cause a TON timer in Studio 5000 to stay active?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, there could be hidden factors contributing to a TON timer remaining enabled, such as unexpected logic conditions, incorrect rung configurations, or overlooked triggers. Careful inspection of the ladder logic and cross-references can help identify and address these hidden factors.</p>
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
