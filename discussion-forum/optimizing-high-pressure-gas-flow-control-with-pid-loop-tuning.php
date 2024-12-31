
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am new to the world of tuning and may not be familiar with all the technical jargon. However, I am currently working on tuning a 3 Fisher sliding stem PCV for a flow control valve in an amine plant. The goal is to ensure that when the set">
    <meta name="keywords" content="high pressure gas flow control, pid loop tuning, fisher sliding stem pcv, flow control valve, amine plant, set pressure, gas flow diversion, prv, valve behavior, output limit, setpoint, tuning parameters">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-high-pressure-gas-flow-control-with-pid-loop-tuning">
    <title>Optimizing High Pressure Gas Flow Control with PID Loop Tuning | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing High Pressure Gas Flow Control with PID Loop Tuning | Oxmaint Community">
    <meta property="og:description" content="I am new to the world of tuning and may not be familiar with all the technical jargon. However, I am currently working on tuning a 3 Fisher sliding stem PCV for a flow control valve in an amine plant. The goal is to ensure that when the set">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-high-pressure-gas-flow-control-with-pid-loop-tuning">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing High Pressure Gas Flow Control with PID Loop Tuning | Oxmaint Community">
    <meta name="twitter:description" content="I am new to the world of tuning and may not be familiar with all the technical jargon. However, I am currently working on tuning a 3 Fisher sliding stem PCV for a flow control valve in an amine plant. The goal is to ensure that when the set">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-high-pressure-gas-flow-control-with-pid-loop-tuning"
      },
      "headline": "Optimizing High Pressure Gas Flow Control with PID Loop Tuning",
      "description": "I am new to the world of tuning and may not be familiar with all the technical jargon. However, I am currently working on tuning a 3 Fisher sliding stem PCV for a flow control valve in an amine plant. The goal is to ensure that when the set",
      "author": {
        "@type": "Person",
        "name": "jhutto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-05",
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
                <h1 class="text-white">Optimizing High Pressure Gas Flow Control with PID Loop Tuning</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jhutto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">405</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">80</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am new to the world of tuning and may not be familiar with all the technical jargon. However, I am currently working on tuning a 3" Fisher sliding stem PCV for a flow control valve in an amine plant. The goal is to ensure that when the set pressure is exceeded, the valve will gradually shut to divert gas flow to a PRV without disrupting the plant's operations. Unfortunately, the valve is behaving erratically, opening and closing too quickly and sometimes even shutting off completely despite my attempts to set a minimum output limit of 10%. My target pressure is 11,500 mcf with a setpoint of 11,750. The current tuning parameters are: Kc - 0.8, Ti - 0.4, Td - 0.0, Time mode - Timed, Deadband - 5 (unclear if this is in percentage), Feed Forward Bias - 5 (unclear what this means). I would greatly appreciate any advice or guidance on how to properly tune this system for optimal performance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your system performance, consider adjusting the Td parameter to 0.2 and monitoring the outcome. This tweak could greatly impact your results!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bdauliya</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you measuring your Ti in seconds or minutes? Whichever it is, it appears to be short. Consider recalibrating using the lambda tuning method, a straightforward and reliable technique for optimizing loops with a single CV step adjustment. You can easily find detailed explanations and calculation methods by searching for it on Google. It is unusual that your feedforward remains constant, as it is typically used to react quickly to significant disturbances. The PID instruction uses the scaled measurement of the disturbance to adjust the output CV accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jhutto expressed concern about their lack of expertise in tuning, particularly when it comes to a 3" fisher sliding stem PCV within an amine plant's flow control valve system. The goal is to ensure that when the desired PV is surpassed, the valve gradually redirects gas flow to a PRV rather than overwhelming the plant. However, the valve is currently behaving erratically, opening and closing rapidly and occasionally dropping to 0% output. They are making adjustments to prevent this, with a desired PV of 11,500 mcf and a scaled setpoint of 11,750.

The current tuning settings include Kc - 0.8, Ti - 0.4, Td - 0.0, Time mode - Timed, Deadband - 5, and Feed Forward Bias - 5. Seeking guidance on how to improve the tuning process, jhutto is open to suggestions for a beginner-friendly approach. 

For those unfamiliar with PIDE autotune, it is recommended as a helpful tool for optimizing control systems. A standardized set of ladders can be used with direct-acting control systems like this one, particularly for flow and pressure control. However, it may not be as effective for level control.

To utilize PIDE autotune effectively, ensure it is in ProgAuto mode when active and ProgManual mode with PVTracking on when not in use. Adjust the PID_TON.PRE based on system response and set the CVProg (% between min and max set in PIDE FBD) to achieve a steady response before initiating autotuning. 

Begin the autotuning process in manual mode at the steady CVProg value, adjusting the autotune tag, CV step size, and initiating the autotune (optional PV change limit). Once the desired tune is applied, return to normal operation by toggling Temp_Prog_Man_Req and conducting testing to validate the adjustments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the loop update time set in the PID instruction and how can you guarantee that the PID instruction runs at that specified loop update time? It's important to remember that PIDs revolve around timing. It's essential to note that you aren't tuning the PID itself, but rather the system, which is composed of the process and the PID controller. System tuning can be a complex task, especially for beginners. If you're new to this, consider using the auto-tune feature of PIDE as suggested by @AMarks95.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring for guidance on tuning a system? Unfortunately, providing a solid starting point without knowing crucial details like PV/SP and CV scalings, process gain, response time, control valve speed, and type of PV (possibly flow). Ambiguities like PCV (Pressure Control Valve) or PRV (Pressure Relief Valve) further complicate matters. Additionally, mismatched loop update times can lead to poorly tuned systems. One approach could be manually adjusting the valve to a desired CV position, monitoring PV and CV trends as the system stabilizes. Make sure to display trends in PID scaled percentages with labeled time units for accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
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
            <p>Looking for tips on tuning a PID system from scratch? Consider hiring a technician to assist you with setting up closed loops. Many users find the PIDE auto-tune function helpful, especially for flow and pressure control. However, it may not be as effective for level control due to differences in plant characteristics. To troubleshoot further, consider examining the system's performance curves and potential issues with value/time scaling or faulty valves. For more insights, check out the advice from drbitboy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to jhutto's question about the function of a pressure relief valve (PRV) when a valve shuts after exceeding the desired pressure, it is essential to understand that the PRV is designed to slowly redirect gas flow to ensure the plant's safety and prevent overrides.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is PID loop tuning and why is it important for high pressure gas flow control?</h4>
<p class='text-muted'><strong>Answer:</strong> - PID loop tuning is the process of adjusting the parameters of a PID (Proportional-Integral-Derivative) controller to achieve optimal system performance. In the context of high pressure gas flow control, proper PID loop tuning ensures that the control valve responds appropriately to changes in pressure, maintaining stability and accuracy in the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot erratic behavior in a flow control valve despite setting a minimum output limit?</h4>
<p class='text-muted'><strong>Answer:</strong> - Erratic behavior in a control valve could be a result of improper PID tuning parameters. Check and adjust the proportional gain (Kc), integral time (Ti), and derivative time (Td) values to better suit the characteristics of the system. Additionally, ensure that the deadband setting is appropriate to prevent rapid opening and closing of the valve.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What does the Feed Forward Bias parameter signify in PID loop tuning for gas flow control valves?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Feed Forward Bias parameter in PID loop tuning is a feature that allows the controller to anticipate and compensate for disturbances in the system before they occur. A positive bias value adds an offset to the controller output, helping to preemptively adjust for changes in setpoint or process conditions.</p>
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
