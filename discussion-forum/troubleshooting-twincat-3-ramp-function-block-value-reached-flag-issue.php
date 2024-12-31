
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing the TC3 Ramp function block FB_CTRL_RAMP_GENERATOR to control the temperature. The parameters are set as follows: CTRL_RAMP_GENERATOR_PARAMS.tTaskCycleTime and CTRL_RAMP_GENERATOR_PARAMS.tCrtlCycleTime are both set to T#10s. Additionally, the velocity for positive change (VeloPos) is calculated based on the target and initial temperature, ramp time, and a rate of">
    <meta name="keywords" content="twincat 3 ramp function block, fb_ctrl_ramp_generator, troubleshooting twincat 3, ramp function block, value reached flag, tc3 ramp function block, ctrl_ramp_generator_params, temperature control">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-twincat-3-ramp-function-block-value-reached-flag-issue">
    <title>Troubleshooting Twincat 3 RAMP Function Block: Value Reached Flag Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Twincat 3 RAMP Function Block: Value Reached Flag Issue | Oxmaint Community">
    <meta property="og:description" content="I am utilizing the TC3 Ramp function block FB_CTRL_RAMP_GENERATOR to control the temperature. The parameters are set as follows: CTRL_RAMP_GENERATOR_PARAMS.tTaskCycleTime and CTRL_RAMP_GENERATOR_PARAMS.tCrtlCycleTime are both set to T#10s. Additionally, the velocity for positive change (VeloPos) is calculated based on the target and initial temperature, ramp time, and a rate of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-twincat-3-ramp-function-block-value-reached-flag-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Twincat 3 RAMP Function Block: Value Reached Flag Issue | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing the TC3 Ramp function block FB_CTRL_RAMP_GENERATOR to control the temperature. The parameters are set as follows: CTRL_RAMP_GENERATOR_PARAMS.tTaskCycleTime and CTRL_RAMP_GENERATOR_PARAMS.tCrtlCycleTime are both set to T#10s. Additionally, the velocity for positive change (VeloPos) is calculated based on the target and initial temperature, ramp time, and a rate of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-twincat-3-ramp-function-block-value-reached-flag-issue"
      },
      "headline": "Troubleshooting Twincat 3 RAMP Function Block: Value Reached Flag Issue",
      "description": "I am utilizing the TC3 Ramp function block FB_CTRL_RAMP_GENERATOR to control the temperature. The parameters are set as follows: CTRL_RAMP_GENERATOR_PARAMS.tTaskCycleTime and CTRL_RAMP_GENERATOR_PARAMS.tCrtlCycleTime are both set to T#10s. Additionally, the velocity for positive change (VeloPos) is calculated based on the target and initial temperature, ramp time, and a rate of",
      "author": {
        "@type": "Person",
        "name": "derickloo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-28",
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
                <h1 class="text-white">Troubleshooting Twincat 3 RAMP Function Block: Value Reached Flag Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>derickloo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">166</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">486</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing the TC3 Ramp function block FB_CTRL_RAMP_GENERATOR to control the temperature. The parameters are set as follows: CTRL_RAMP_GENERATOR_PARAMS.tTaskCycleTime and CTRL_RAMP_GENERATOR_PARAMS.tCrtlCycleTime are both set to T#10s. Additionally, the velocity for positive change (VeloPos) is calculated based on the target and initial temperature, ramp time, and a rate of 60 units per second. The velocity for negative change (VeloNeg) is set to 0 units per second. 
To initiate the ramp control, the function block is called with the parameters for starting temperature, target temperature, and other settings. 
In this specific case, the starting temperature is 25 degrees and the target temperature is 30 degrees. Upon running the program, the bValueReached flag becomes true even before reaching the target temperature. The issue may be related to the configuration of VeloPos and VeloNeg.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unclear how bValueReached is set to true, but upon closer inspection, it appears that the formulaCode: VeloPos = (fTargetTemp - fInitTemp) / (60.0 * fRampTime) is calculating the velocity (ramp rate) in units per minute instead of units per second as required by the function block. This could potentially result in a lower ramp rate than expected. However, this does not clarify why bValueReached is set to TRUE before fRampOut reaches fTargetTemp. The documentation indicates that the ramp is started by a rising edge of the bEnable input parameter, but in this case, bEnable is constantly True with no rising edge detected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy raised a concern about the unexpected behavior of bValueReached becoming true while analyzing the formulaCode: VeloPos that calculates the velocity (ramp rate) in units per minute instead of units per second. This discrepancy might result in a lower ramp rate than intended, although it does not clarify why bValueReached is triggered before fRampOut reaches fTargetTemp. The documentation mentions that a rising edge of the bEnable input initiates the ramp, but the bEnable input is always set to True, indicating no rising edge. In the actual code, a Start button is implemented for users to initiate the program and set bEnable to True. The question arises whether this action qualifies as a rising edge, or if the Ramp function requires bEnable to alternate between True and False continuously.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>derickloo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my current code, I have implemented a Start button for users to activate. By tapping this button, the program will begin and set the bEnable value to true. Is this considered a rising edge? Does the bEnable function in the Ramp function need to continuously switch between true and false?

When using the CTRL_RAMP_GENERATOR(bEnable := True, ...), it is uncertain whether the instruction will experience a rising edge on the initial scan cycle, but subsequent scan cycles will not occur. To better understand the behavior of this ramp instruction, it is recommended to create a test program containing only this instruction and a few variable tags. Empirically determine the ramp behavior by assigning a Boolean tag like bEnable and controlling it with a pulse function (e.g. five seconds 1, five seconds 0). Adjust the velocity parameter to observe the effects of the bEnable pulse being longer or shorter than the ramp duration.

It is vital to recognize that the PLC and the ramp instruction operate based on precise instructions, regardless of your intentions or expectations. It is essential to grasp that the PLC will strictly adhere to the commands given. The only thing worse than the PLC not functioning as desired is when it follows instructions exactly. Therefore, to effectively utilize the PLC, one must have a thorough understanding of how it will behave in response to specific commands.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the bValueReached flag becoming true before reaching the target temperature when using the TC3 Ramp function block?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue may be related to the configuration of the positive change velocity (VeloPos) and negative change velocity (VeloNeg) parameters within the function block.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How are the parameters like CTRL_RAMP_GENERATOR_PARAMS.tTaskCycleTime and CTRL_RAMP_GENERATOR_PARAMS.tCrtlCycleTime set for the TC3 Ramp function block?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In this case, both CTRL_RAMP_GENERATOR_PARAMS.tTaskCycleTime and CTRL_RAMP_GENERATOR_PARAMS.tCrtlCycleTime are set to T10s.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What values are used to calculate the VeloPos and VeloNeg velocities for the TC3 Ramp function block?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The VeloPos is calculated based on the target and initial temperature, ramp time, and a rate of 60 units per second, while the VeloNeg is set to 0 units per second.</p>
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
