
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have been facing difficulties in resetting a totalizer on an E300 flowmeter using HART protocol from my PLC (Studio 5000 version 32 with an L81e processor). I have consulted EandHs technical support twice, and they recommended adding an input board and sending an input to perform">
    <meta name="keywords" content="e300 flowmeter, hart protocol, totalizer reset, studio 5000, l81e processor, eandh, input board, plc, e200 flowmeters, hex code, technical support, troubleshooting, reset procedure, step">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-reset-eandh-e300-flowmeter-totalizer-with-hart-protocol-step-by-step-guide">
    <title>How to Reset EandH E300 Flowmeter Totalizer with HART Protocol - Step-by-Step Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Reset EandH E300 Flowmeter Totalizer with HART Protocol - Step-by-Step Guide | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have been facing difficulties in resetting a totalizer on an E300 flowmeter using HART protocol from my PLC (Studio 5000 version 32 with an L81e processor). I have consulted EandHs technical support twice, and they recommended adding an input board and sending an input to perform">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-reset-eandh-e300-flowmeter-totalizer-with-hart-protocol-step-by-step-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Reset EandH E300 Flowmeter Totalizer with HART Protocol - Step-by-Step Guide | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have been facing difficulties in resetting a totalizer on an E300 flowmeter using HART protocol from my PLC (Studio 5000 version 32 with an L81e processor). I have consulted EandHs technical support twice, and they recommended adding an input board and sending an input to perform">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-reset-eandh-e300-flowmeter-totalizer-with-hart-protocol-step-by-step-guide"
      },
      "headline": "How to Reset EandH E300 Flowmeter Totalizer with HART Protocol - Step-by-Step Guide",
      "description": "Hello everyone, I have been facing difficulties in resetting a totalizer on an E300 flowmeter using HART protocol from my PLC (Studio 5000 version 32 with an L81e processor). I have consulted EandHs technical support twice, and they recommended adding an input board and sending an input to perform",
      "author": {
        "@type": "Person",
        "name": "hstrauss"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-25",
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
                <h1 class="text-white">How to Reset EandH E300 Flowmeter Totalizer with HART Protocol - Step-by-Step Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>hstrauss</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">185</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">368</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have been facing difficulties in resetting a totalizer on an E300 flowmeter using HART protocol from my PLC (Studio 5000 version 32 with an L81e processor). I have consulted E&H's technical support twice, and they recommended adding an input board and sending an input to perform this task. However, I am skeptical about this solution. We also have E200 flowmeters, and we can reset their totalizer easily by using a different hex code. Any assistance or suggestions would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're struggling to figure out how to do it without purchasing and wiring an input board, simply incorporate a totalizer into your logic. This alternative method can help you achieve your desired outcome without the need for additional equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you wonder why you are utilizing and resetting the internal totalizer on the meter instead of simply totalizing within the processor? Gain insight on the best approach for tracking data efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 inquired: Why are you choosing to utilize and reset the meter's built-in totalizer instead of simply using the processor for totalization? How can I address this issue? The totalizer reset functionality allows the customer to have control over when to reset it, whether it is never, once a month, daily, or annually. This variability makes it challenging to find an efficient coding solution instead of directly importing data from the meter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hstrauss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 posed the question: "Why are you utilizing and resetting the meter's built-in totalizer instead of solely totalizing in the processor?" How can I approach this situation? The totalizer reset function allows customers to control their resetting preferences. They may choose to reset it regularly or not at all, making it unpredictable and challenging to create a coding solution instead of retrieving data directly from the meter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hstrauss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Totalizer function block in RsLogix allows you to input the Process Variable (PV) readings from a flow meter, enabling you to continuously calculate and store the total flow volume. Implementing this function requires basic ladder logic for resetting the totalizer and transferring the accumulated data to the desired location.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While I may not have hands-on experience with this specific meter and protocol, it is important to ensure that the meter display aligns with the PLC data when using a reading protocol. This synchronization is crucial for accuracy and efficiency. When utilizing a separate totalizer, it can lead to discrepancies between the display total and the PLC data. Rest assured, there may be a solution to meet the original poster's request.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>patrickmoneyy asked if the totalizer function block in rslogix can deduct from the total when there is reverse flow. This feature allows users to input the process variable (PV) from the flow meter into the totalizer and includes basic ladder logic for resetting and transferring the data as needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hstrauss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing the TOT function in Studio 5000 allows for accurate totalization of flow rates at specified intervals, ensuring discrepancies between the calculated total and the meter total are avoided. In cases where discrepancies may occur, implementing a reset function in the PLC can help maintain accurate totalizer readings by subtracting the present flowmeter total from the protocol-based total. This creates a separate display total for operators, giving the appearance of a reset while preserving the actual totalizer delta from the meter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When there is reverse flow, the block may deduct from the overall total. The impact varies based on the setup you choose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I may not be well-versed in the specifics of the HART protocol, I faced a learning curve when navigating the reset process with E I/P. Rather than solely relying on the status change of the reset bit, the meter seeks a change in the reset variable value. From my understanding, you input a value into a register to indicate whether you want to reset and stop or reset and continue, then toggle the reset bit to reset the totalizer. However, unless you adjust the register value back to a different value, the totalizer won't reset the next time you toggle the reset bit. It requires a change in value to recognize the reset. It seems that their own AOI maintains the reset bit set and only adjusts the variable dictating how the reset should occur.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is intriguing that the HART and Modbus protocols are typically consistent across different models from the same manufacturer. This indicates that what works for the E200 should also work for the E300. Although the E200 is equipped with HART 7, the User Manual only provides instructions for defining process variables (PV, SV, TV, QV) and burst mode variables. There is a lack of details on HART commands, as mentioned on page 57 of the manual at https://www.instrumart.com/assets/Promass-E-200-manual.pdf. It seems that Endress+Hauser (E&H) may provide detailed HART information in a separate manual, as is common practice among many manufacturers, but this manual could not be located online.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I reset the totalizer on an E300 flowmeter using HART protocol from a PLC?
- To reset the totalizer on an E300 flowmeter using HART protocol from a PLC, E&H's technical support recommends adding an input board and sending an input to perform this task. However, some users have reported success in resetting the totalizer on E200 flowmeters using a different hex code.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is an input board necessary to reset the totalizer on an E300 flowmeter with HART protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - An input board is recommended by E&H's technical support to reset the totalizer on an E300 flowmeter using HART protocol as it facilitates sending an input to perform this task. This approach may differ from the method used for E200 flowmeters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there alternative methods to reset the totalizer on an E300 flowmeter without adding an input board?</h4>
<p class='text-muted'><strong>Answer:</strong> - While E&H's technical support suggests adding an input board, some users have reported success in resetting the totalizer on E200 flowmeters using a different hex code. It may be worth exploring different approaches or consulting with other users for alternative solutions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can I reset the totalizer on an E300 flowmeter directly from Studio 5000 version 32 with an L81e processor?</h4>
<p class='text-muted'><strong>Answer:</strong> - Resetting the totalizer on an E300 flowmeter directly from Studio 5000 version 32 with an L81e processor</p>
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
