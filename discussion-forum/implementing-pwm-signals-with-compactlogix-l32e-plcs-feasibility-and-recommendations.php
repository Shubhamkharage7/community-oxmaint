
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone! Apologies for the elementary inquiries. As a novice in PLC technology, I am curious about the feasibility of incorporating pulse-width modulation (PWM) with the CompactLogix L32E without the need for signal conditioning. Can this PLC support the implementation of 6 distinct PWMs with its available timers? Would">
    <meta name="keywords" content="implementing pwm signals, compactlogix l32e plcs, feasibility, recommendations, plc technology, pulse-width modulation, pwm implementation, compactlogix l32e timers, 1769-ob32 board, pwm frequency">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/implementing-pwm-signals-with-compactlogix-l32e-plcs-feasibility-and-recommendations">
    <title>Implementing PWM Signals with CompactLogix L32E PLCs: Feasibility and Recommendations | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Implementing PWM Signals with CompactLogix L32E PLCs: Feasibility and Recommendations | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone! Apologies for the elementary inquiries. As a novice in PLC technology, I am curious about the feasibility of incorporating pulse-width modulation (PWM) with the CompactLogix L32E without the need for signal conditioning. Can this PLC support the implementation of 6 distinct PWMs with its available timers? Would">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/implementing-pwm-signals-with-compactlogix-l32e-plcs-feasibility-and-recommendations">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Implementing PWM Signals with CompactLogix L32E PLCs: Feasibility and Recommendations | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone! Apologies for the elementary inquiries. As a novice in PLC technology, I am curious about the feasibility of incorporating pulse-width modulation (PWM) with the CompactLogix L32E without the need for signal conditioning. Can this PLC support the implementation of 6 distinct PWMs with its available timers? Would">
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
        "@id": "https://community.oxmaint.com/discussion-forum/implementing-pwm-signals-with-compactlogix-l32e-plcs-feasibility-and-recommendations"
      },
      "headline": "Implementing PWM Signals with CompactLogix L32E PLCs: Feasibility and Recommendations",
      "description": "Greetings everyone! Apologies for the elementary inquiries. As a novice in PLC technology, I am curious about the feasibility of incorporating pulse-width modulation (PWM) with the CompactLogix L32E without the need for signal conditioning. Can this PLC support the implementation of 6 distinct PWMs with its available timers? Would",
      "author": {
        "@type": "Person",
        "name": "clebermarques"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-03",
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
                <h1 class="text-white">Implementing PWM Signals with CompactLogix L32E PLCs: Feasibility and Recommendations</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>clebermarques</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6727</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">135</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone! Apologies for the elementary inquiries. As a novice in PLC technology, I am curious about the feasibility of incorporating pulse-width modulation (PWM) with the CompactLogix L32E without the need for signal conditioning. Can this PLC support the implementation of 6 distinct PWMs with its available timers? Would it be prudent to utilize a board like the 1769-OB32 for this purpose? The desired frequency for the PWM signals is approximately 50Hz, with duty cycles ranging from 5% to 10%.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The majority of PWM outputs typically necessitate a higher frequency, but the CompactLogix lacks hardware-based PWM outputs. For instance, if you specify a 5% duty cycle at 50 Hz, your ON-pulse will equal 5% of 50/1000, resulting in 2.5 milliseconds. This is nearing the hardware's physical limitations (0.1 ms ON delay, 1.0 ms OFF delay) and the software's logical constraints (minimum RPI and Scantime considerations) for the controller. What devices are being controlled by the PWM signal?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken, you are correct. When I mention a 5% duty cycle at 50Hz, it translates to a 1ms ON-pulse within a 20ms cycle. This limitation seems to pose challenges for implementing PWM with CompactLogix. Is it feasible to drive a small servomotor using this controller, considering it will also be controlling other final elements in a MIMO plant?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>clebermarques</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By utilizing a third-party IO module like the Turck BL20 module along with the suitable gateway, you have the ability to obtain PWM outputs. Explore more about this functionality in the official Turck BL20 module datasheet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CLXlifestyle</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response! In a discussion with Ken Roach, he mentioned that the hardware is nearing its physical limit with a 0.1 ms ON delay and 1.0 ms OFF delay, as well as the software reaching its logical limit with considerations such as minimum RPI and Scantime for the controller. 
What exactly does a 0.1 ms ON delay and 1.0 ms OFF delay refer to? Could it be related to commutation delay? And what is RPI? Any additional references on this topic would be greatly appreciated.
In order to clarify, my goal is to adjust the duty cycle within a range of 1.5 - 2 milliseconds for the on-pulse/high level and between 18.5 - 18 milliseconds for the off-pulse/low level. Thank you once again!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>clebermarques</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken mentioned switching times of 0.1 and 1 milliseconds for the OB32 output card, which is equipped with protection components that limit the speed of switching. The RPI refers to the backplane communication speed. Achieving the necessary speed with multiple cards in your rack may be challenging. It's important to note that the OB32, like other output cards, can generate transient pulses of 1 millisecond if the output current is less than 1mA during start-up. Refer to the installation PDF for the 1769-OB32 for more information. Another option to consider is the ML1100 (Version 1763-L16BBB) micro PLC, which features 2 high-speed FET outputs (2 & 3) and a PWM instruction. It also includes Ethernet communication capabilities to communicate with your L32E. Additionally, it offers high-speed inputs for feedback if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pal</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Explore the Pulse Width Modulation (PWM) module compatible with the Allen-Bradley 1734 series Point IO distributed IO system. Enhance your PLC automation capabilities with this top-of-the-line PWM module from AMCI. Visit the link below for more information:
https://www.amci.com/plc-automation/pulse-width-modulation-plc-module-allen-bradley/</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CodingGodCory</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can the CompactLogix L32E PLC support pulse-width modulation (PWM) without signal conditioning?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the CompactLogix L32E PLC can support PWM without the need for signal conditioning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How many distinct PWM signals can be implemented with the available timers on the CompactLogix L32E?</h4>
<p class='text-muted'><strong>Answer:</strong> - The CompactLogix L32E PLC can support the implementation of 6 distinct PWM signals with its available timers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it recommended to utilize a board like the 1769-OB32 for implementing PWM with the CompactLogix L32E?</h4>
<p class='text-muted'><strong>Answer:</strong> - It may be prudent to utilize a board like the 1769-OB32 for implementing PWM signals with the CompactLogix L32E PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the desired frequency for the PWM signals mentioned in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> - The desired frequency for the PWM signals is approximately 50Hz.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What is the range of duty cycles for the PWM signals mentioned in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> - The duty cycles for the PWM signals mentioned range from 5% to 10%.</p>
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
