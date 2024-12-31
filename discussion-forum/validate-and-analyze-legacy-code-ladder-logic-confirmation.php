
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently reviewing some legacy code and would appreciate an experts validation of my findings. Upon analysis, I have discovered the following: 1. The B64:22/3 instruction will remain latched and never release. 2. The T75:77 timer will remain set and not reset. 3. The operation T75:77.TT is">
    <meta name="keywords" content="legacy code validation, ladder logic analysis, b64:22/3 instruction, t75:77 timer, boolean identity, legacy code review, b64:22/3 latched, t75:77 timer reset, ladder logic confirmation, legacy">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/validate-and-analyze-legacy-code-ladder-logic-confirmation">
    <title>Validate and Analyze Legacy Code: Ladder Logic Confirmation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Validate and Analyze Legacy Code: Ladder Logic Confirmation | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently reviewing some legacy code and would appreciate an experts validation of my findings. Upon analysis, I have discovered the following: 1. The B64:22/3 instruction will remain latched and never release. 2. The T75:77 timer will remain set and not reset. 3. The operation T75:77.TT is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/validate-and-analyze-legacy-code-ladder-logic-confirmation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Validate and Analyze Legacy Code: Ladder Logic Confirmation | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently reviewing some legacy code and would appreciate an experts validation of my findings. Upon analysis, I have discovered the following: 1. The B64:22/3 instruction will remain latched and never release. 2. The T75:77 timer will remain set and not reset. 3. The operation T75:77.TT is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/validate-and-analyze-legacy-code-ladder-logic-confirmation"
      },
      "headline": "Validate and Analyze Legacy Code: Ladder Logic Confirmation",
      "description": "Hello, I am currently reviewing some legacy code and would appreciate an experts validation of my findings. Upon analysis, I have discovered the following: 1. The B64:22/3 instruction will remain latched and never release. 2. The T75:77 timer will remain set and not reset. 3. The operation T75:77.TT is",
      "author": {
        "@type": "Person",
        "name": "BeepBob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">Validate and Analyze Legacy Code: Ladder Logic Confirmation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">615</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">123</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently reviewing some legacy code and would appreciate an expert's validation of my findings. Upon analysis, I have discovered the following: 

1. The B64:22/3 instruction will remain latched and never release. 
2. The T75:77 timer will remain set and not reset. 
3. The operation T75:77.TT is equivalent to T75:77.EN AND negate(T75:77.DN). This simplifies to T75:77.TT AND T75:77.TT, which aligns with the boolean identity A + A = A. 

Upon further investigation, I noted that there is no indication of B64:22/3 being written to in any other part of the code, such as BTW, COPY, or MOV instructions. Despite this, I cannot comprehend the rationale behind writing the code in such a manner. It appears as though the intention was to ensure the completion of timer T75:90.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When reaching an agreement, it is important to ensure that there are no Human-Machine Interface (HMI) or other external devices that can manipulate the value of B64:22/32 to zero. However, there may be a disagreement if the T75:77 value is reset between rungs 8 and 10 when the I:021/0 value is 13. It is crucial to note that T75:90 on rung 11 will be reset just before reaching its expiration due to a reset in T75:77/TT value on the scan cycle. This adjustment ensures that T75:90 does not expire prematurely.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a way to set WORD B64:22 to zero? This process will help you clear all bits in the WORD.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore is inquiring about a way to set all bits in the WORD B64:22 to zero. This can be achieved by referencing MOV or mathematical instructions and COP instructions that manipulate B64:x, with x being less than or equal to 22. For more details on this topic, scroll up in the x-ref section and search for relevant instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>1. It is highly likely that data is being written to B64:22 as all the bits in that word are being latched, indicating a need for something to reset them. Without a reset mechanism, the bits would remain on indefinitely, even after a power cycle. Take Joseph's advice and check the cross-reference for a command using the full word, as CLR or MOV commands cannot reset individual bits. Instead, consider using unlatches for individual bits or a COP or FLL to reset multiple words.

2. By resolving the issue mentioned in question 1, you will understand how the timer is reset. Despite the screenshot showing no visible logic to reset the timer, it does reset during a power cycle or when the controller transitions from Program to Run mode. Keep in mind that TON instructions reset during these transitions, while latches and RTO timers do not.

3. The /DN and /DN inputs on rung 11 are redundant with the /TT. Simplify the logic by using only the /TT input here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing the screenshot, Operaghost stated that the timer visible in the logic will not reset. However, I disagree. By pressing down on I:021/0, the discrete input value will reset T75:77 on Rung 8 each scan cycle. Once I:021/0 has been continuously valued at 1 for 40cs after a download, B64:22/3 will be latched to 1 on Rung 9, causing T75:77/EN to always be 1 after Rung 10 evaluation. The behavior of T75:77 is dependent on the input I:021/0, continuously resetting on each evaluation of Rung 8 and restarting on each evaluation of Rung 10.

As long as I:021/0 remains at 1, the value of T75:77/TT will stay at 1 until the next scan cycle when the reset will clear it back to 0. T75:77 will not expire as it is constantly reset by I:021/0. T75:77 constantly restarting enables T75:90 to expire, unlike T75:77, which resets each cycle.

Changes happen when I:021/0 transitions from 0 to 1; T75:77 resets/start cycle each scan cycle as long as I:021/0=1, and T75:90 times out 1s later. T75:90 remains in its expired state until 1s after I:021/0 goes back to 0. This pattern repeats with each transition of I:021/0 value, effectively mimicking its behavior with a 1s delay in T75:90/DN.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
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
            <p>Brian, that was a lot to take in. I missed the RES on the initial go-around. OG</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If that assumption is correct, it highlights the importance of the often criticized Time-Off Delay (TOF) instruction. This complex sequence can be streamlined by using the following simpler logic:XIC I:021/0TOF T75:77 1.0 1 0XIC T75:77/DNTON T75:90 1.0 1 0Although there may not be a 40cs delay at startup, I believe this approach is valid. In the Logix software, it could potentially be consolidated into a single rung.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why does the B64:22/3 instruction remain latched and never release in the legacy code?</h4>
<p class='text-muted'><strong>Answer:</strong> - The B64:22/3 instruction remains latched and never releases because there is no indication of it being written to in any other part of the code, such as BTW, COPY, or MOV instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the reason behind the T75:77 timer remaining set and not resetting in the legacy code?</h4>
<p class='text-muted'><strong>Answer:</strong> - The T75:77 timer remains set and does not reset due to the code logic and the absence of reset instructions associated with it.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What does the operation T75:77.TT = T75:77.EN AND negate(T75:77.DN) simplify to in the legacy code?</h4>
<p class='text-muted'><strong>Answer:</strong> - The operation T75:77.TT = T75:77.EN AND negate(T75:77.DN) simplifies to T75:77.TT AND T75:77.TT, which aligns with the boolean identity A + A = A.</p>
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
