
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings to all PLC experts! I am currently in the process of measuring the signal propagation time within an S7-1500 PLC. To provide a concrete example, imagine a scenario where a specific condition within the PLC program triggers a boolean signal that is then transmitted to an output (e.g.">
    <meta name="keywords" content="s7-1500 plc, signal propagation time, scl programming, plc logic, signal travel duration, boolean signal, relay activation, responsesig, input/output, signal transmission, approximate estimation, function block, simplification">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/estimating-signal-propagation-time-in-s7-1500-plc-simplifying-with-scl-programming-suggestions">
    <title>Estimating Signal Propagation Time in S7-1500 PLC: Simplifying with SCL Programming Suggestions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Estimating Signal Propagation Time in S7-1500 PLC: Simplifying with SCL Programming Suggestions | Oxmaint Community">
    <meta property="og:description" content="Greetings to all PLC experts! I am currently in the process of measuring the signal propagation time within an S7-1500 PLC. To provide a concrete example, imagine a scenario where a specific condition within the PLC program triggers a boolean signal that is then transmitted to an output (e.g.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/estimating-signal-propagation-time-in-s7-1500-plc-simplifying-with-scl-programming-suggestions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Estimating Signal Propagation Time in S7-1500 PLC: Simplifying with SCL Programming Suggestions | Oxmaint Community">
    <meta name="twitter:description" content="Greetings to all PLC experts! I am currently in the process of measuring the signal propagation time within an S7-1500 PLC. To provide a concrete example, imagine a scenario where a specific condition within the PLC program triggers a boolean signal that is then transmitted to an output (e.g.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/estimating-signal-propagation-time-in-s7-1500-plc-simplifying-with-scl-programming-suggestions"
      },
      "headline": "Estimating Signal Propagation Time in S7-1500 PLC: Simplifying with SCL Programming Suggestions",
      "description": "Greetings to all PLC experts! I am currently in the process of measuring the signal propagation time within an S7-1500 PLC. To provide a concrete example, imagine a scenario where a specific condition within the PLC program triggers a boolean signal that is then transmitted to an output (e.g.",
      "author": {
        "@type": "Person",
        "name": "Pandiani"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">Estimating Signal Propagation Time in S7-1500 PLC: Simplifying with SCL Programming Suggestions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">347</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">455</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings to all PLC experts! I am currently in the process of measuring the signal propagation time within an S7-1500 PLC. To provide a concrete example, imagine a scenario where a specific condition within the PLC program triggers a boolean signal that is then transmitted to an output (e.g. Q0.1). This signal activates a relay, and the relay's contacts relay this information (ResponseSig) back to the PLC through a designated input (such as I0.1).

After conducting thorough research across various online forums, I was able to find a solution that effectively fulfills my objective. It is not imperative for me to obtain an exact time measurement; rather, I am interested in obtaining an approximate estimation. In essence, my goal is to assess the duration required for a signal to travel from the PLC's logic to its output, and subsequently return to the PLC.

The current function block implemented for this task is quite intricate, leading me to ponder whether a simpler solution could be devised, perhaps utilizing SCL programming. I welcome any recommendations or insights you may have on streamlining this process.

Your assistance is truly valued. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the TIME_TCK block to read the system time and trigger, saving times from both input and output rising edges. By calculating the time difference, you can optimize PLC scan cycle (OBx) execution. In Siemens, scan first inputs, update the process image, execute PLC code, and update outputs accordingly. Select the OB controlling card process image from the IO-card. Assuming a relay delay of approximately 10-20ms. Opt for peripheral IO syntax (IO address: P) for faster IO reads/writes during PLC scan. The process image is not necessary. Consider the following pseudo code:

// save system time on pulse
IF Input_pulse = TRUE
    AND Input_pulseOld = FALSE
    Then
    input_trig_time := TIME_TCK();
End if

// save edge detection bit
Input_pulseOld := Input_pulse;
   
// save system time on pulse
IF Output_pulse = TRUE
    AND Output_pulseOld = FALSE
    Then
    Output_trig_time := TIME_TCK();
End if

// save edge detection bit
Output_pulseOld := Output_pulse;

// calculate time difference
Time_diff := Output_trig_time - input_trig_time ;</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate it, Lare. Your assistance was just what I was looking for. I have attached the SCL implementation as requested.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Pandiani expressed his gratitude to Lare, stating that it was exactly what he needed. The SCL implementation is attached for reference. Consider changing TIME_TCK to read on every scan for potential time savings. This adjustment would involve reading systime once in the code, but whether it is more efficient than reading TIME_TCK directly only at triggers is uncertain. The code snippet below illustrates this concept:

IF Input_pulse = TRUE
    AND Input_pulseOld = FALSE
    Then
    input_trig_time :=Systime now;</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Lare, initially it may seem like a less efficient implementation to call the system function on each scan and include the extra variable SysTimeNow. However, in my test example, I didn't notice any impact on performance, such as longer scan times.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent conversation, Pandiani discussed the implementation of the system function and the use of the variable SysTimeNow during scans. While this may initially seem like a performance drawback, there was no noticeable impact on scan times in testing. This approach is partially inspired by Siemens' Sitop power supply diagnostic block code (LPSU6200_SignalevaluationS71500 block), which offers a straightforward solution.

Despite potential concerns raised by Siemens regarding time accesses on Hot standby CPU systems due to syncronize loads from instructions like RD_SYS_T, WR_SYS_T, and RD_LOC_T, no issues have been experienced with the LPSU6200 and TIME_TCK() executing at 10ms intervals. Therefore, this implementation should work fine for both single CPU and R/H systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>An enhanced version of the code has been implemented to calculate time differences only when the output is more recent than the input trigger. Through testing with a clock pulse and a single variable, the time difference was calculated for both positive and negative values, disregarding the trigger order in the code.

Code:
// Record system time on pulse
IF (#Input_pulse = TRUE) AND (#Input_pulseOld = FALSE) THEN
    #Input_trig_time := TIME_TCK();
END_IF;

// Save edge detection bit
#Input_pulseOld := #Input_pulse;

// Record system time on pulse
IF (#output_pulse = TRUE) AND (#Output_pulseOld = FALSE) THEN
    #Output_trig_time := TIME_TCK();
END_IF;

// Save edge detection bit
#Output_pulseOld := #output_pulse;

// Calculate time difference only if output time is newer than input
IF #Output_trig_time >= #Input_trig_time THEN
    #Time_diff := #Output_trig_time - #Input_trig_time;
END_IF;

// Update time values
#ElapsedTime_ms := #Time_diff;
#ElapsedTime_Sec := DINT_TO_REAL(TIME_TO_DINT(#Time_diff)) / 1000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As mentioned in your previous post, there might be a slight issue with aliasing depending on whether TIME_TCK() captures the current "tick" or the "tick" at a specific event like the start of program processing. Implementing your suggestion of assigning Systime now := TIME_TCK(); once per scan cycle would enhance accuracy, although it may not significantly improve accuracy since the scan cycle time is the primary source of error. It is advisable to calculate #ElapsedTime_* only within the IF #output_pulse AND NOT #Output_pulseOld THEN-END_IF clause, without the need for an additional check IF #Output_trig_time >= #Input_trig_time. This approach ensures more precise calculations while minimizing unnecessary operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a response to @Lareas, drbitboy acknowledged the possibility of aliasing in the code, which may be dependent on whether TIME_TCK() captures the current "tick" or the "tick" at a predefined event, such as the start of program processing. Implementing the suggestion of tracking Systime on each scan cycle can improve accuracy, but it might be excessive given that scan cycle time is the primary source of error. Calculating #ElapsedTime_* is only necessary within the IF #output_pulse AND NOT #Output_pulseOld THEN-END_IF clause, eliminating the need for the IF #Output_trig_time >= #Input_trig_time check.

In terms of efficiency, using IEC timer instead of TIME_TCK could be a viable alternative for 1200 series CPUs. By utilizing the code snippet below:

#IEC_Timer_0_Instance(IN := NOT #timer_pulse,
                      PT := t#2147483647ms,
                      Q => #timer_pulse,
                      ET => #timer_ET);

...

#Output_trig_time := timer_ET;

...

It is possible to optimize the code for improved performance without compromising accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This code snippet utilizes the Start/Stop Circuit pattern to control the timer. When the condition IF #output_pulse AND #IEC_ton.IN is met, a one-shot action is triggered, setting #Output_trig_time to #IEC_ton.ET. The #IEC_ton function is configured with the IN logic using the Start/Stop Circuit pattern, ensuring the timer continues to run until the output pulse resets it. This implementation optimizes the efficiency and reliability of the automation process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method is to utilize an oscilloscope and set the trigger to Q0.1 in order to monitor I0.1. By doing this, you can accurately measure the response time of the remote I/O device. The PLC should activate Q0.1 when it detects a change in I.01. By creating a repetitive loop that toggles Q0, you can calculate the time it takes for the PLC to change Q0.1 after I0.1 changes, thus determining the PLC's response time. This approach involves minimal programming to avoid interfering with the evaluation of the PLC's response time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I estimate signal propagation time in an S7-1500 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To estimate signal propagation time, you can create a scenario where a signal is triggered within the PLC program, transmitted to an output, and relayed back to the PLC through a designated input. By measuring the duration of this process, you can obtain an approximate estimation of the signal propagation time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it necessary to obtain an exact time measurement for signal propagation time in the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is not imperative to obtain an exact time measurement; an approximate estimation suffices for assessing the duration required for a signal to travel from the PLC's logic to its output and back to the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can SCL programming be used to simplify the function block for estimating signal propagation time?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, SCL programming can be utilized to simplify the function block implemented for estimating signal propagation time in the S7-1500 PLC. By exploring simpler solutions through SCL programming, you may streamline the process and achieve your objective more efficiently.</p>
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
