
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently using a L33ER Compact Logix Controller with RSLogix 5000 version 20 control logic and implementing a PID block for control purposes. I have encountered situations where I need to set the maximum output of the PID block to a value other than 100% and the minimum">
    <meta name="keywords" content="rslogix 5000, pid controller, l33er compact logix controller, version 20, control logic, pid block, output limits, .maxo tag, .mino tag, control variable, clamp output, analog output">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-output-limits-in-rslogix-5000-pid-controller">
    <title>How to Set Output Limits in RSLogix 5000 PID Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set Output Limits in RSLogix 5000 PID Controller | Oxmaint Community">
    <meta property="og:description" content="I am currently using a L33ER Compact Logix Controller with RSLogix 5000 version 20 control logic and implementing a PID block for control purposes. I have encountered situations where I need to set the maximum output of the PID block to a value other than 100% and the minimum">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-output-limits-in-rslogix-5000-pid-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Output Limits in RSLogix 5000 PID Controller | Oxmaint Community">
    <meta name="twitter:description" content="I am currently using a L33ER Compact Logix Controller with RSLogix 5000 version 20 control logic and implementing a PID block for control purposes. I have encountered situations where I need to set the maximum output of the PID block to a value other than 100% and the minimum">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-output-limits-in-rslogix-5000-pid-controller"
      },
      "headline": "How to Set Output Limits in RSLogix 5000 PID Controller",
      "description": "I am currently using a L33ER Compact Logix Controller with RSLogix 5000 version 20 control logic and implementing a PID block for control purposes. I have encountered situations where I need to set the maximum output of the PID block to a value other than 100% and the minimum",
      "author": {
        "@type": "Person",
        "name": "nmontev"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-13",
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
                <h1 class="text-white">How to Set Output Limits in RSLogix 5000 PID Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>nmontev</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5515</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">297</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently using a L33ER Compact Logix Controller with RSLogix 5000 version 20 control logic and implementing a PID block for control purposes. I have encountered situations where I need to set the maximum output of the PID block to a value other than 100% and the minimum output to something other than 0%. Despite my attempts to write to the .MAXO and .MINO tags of the PID controller, I have not been successful in affecting the control variable. I am seeking advice on how to clamp the output of the PID block without relying on a compare function that sets limits at the physical analog output. Any suggestions would be greatly appreciated. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up PID controllers, it is common practice to run them with a standard output range of 0 to 100%. However, it may be necessary to scale the output externally to meet specific requirements. Adjusting the clamp value is a straightforward process - simply multiply the output by a different value. For example, to achieve a range of 0 to 80%, multiply the output by 0.8, and for 0 to 20%, multiply by 0.2.

It is important to note that different tuning may be required for various scalers, especially when dealing with tight loops and varying scaling factors. In such cases, tuning to the midpoint of the target range is recommended. 

For a wider input range of -100 to +100%, a simple calculation can be applied by subtracting 50 from the output and then multiplying the result by 2. To ensure accurate results, initialize the PID to 50 when starting from 0 trim. This approach also works effectively for adjustments outside the standard 0 to 100% range.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rdrast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Incorporating the clamp logic outside of the PID block based on your input. Appreciate the feedback.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nmontev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am attempting to replicate nmontev's approach, but with the added requirement of clamping the output of the PID (or the control variable) within a specific range. Despite my attempts to update the MINCV and MAXCV values, the PID does not seem to incorporate these changes once it is enabled. Furthermore, I aim to maintain the PID's previous accumulated output when adjusting the range, ruling out external scaling as a solution. Ideally, if the output exceeds the new range, it should be clamped and resume from that point, similar to the behavior when switching from manual to automatic mode. While I understand this may be a challenging task, I am hopeful that there is a method to achieve this. Any assistance you can provide would be highly valued!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>broman973</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to optimize your PID control system, it is recommended to adjust the output scaling within the range of 0 to 100% and then apply external scaling as needed. By multiplying the output by a specific value, such as 0.8 for 0 to 80% or 0.2 for 0 to 20%, you can easily customize the clamp value. Keep in mind that fine-tuning may be required for different scaling factors, especially if there is a substantial variance in scaling. It is advisable to set the PID loop to the midpoint of the target range for optimal performance. 

If you require a wider range, such as -100 to +100%, you can achieve this by subtracting 50 from the output and then multiplying the result by 2. Make sure to initialize the PID with a starting value of 50 for 0 trim. By properly adjusting the output scaling, you can effectively "detune" the PID response and ensure consistent feedback for improved control system performance. Consider implementing limit values to .MAXO for a more streamlined approach to managing output clamp settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reviewing the documentation, it is unclear why MaxO and MinO are not functioning as expected. Have you considered utilizing a PIDE instruction instead? By doing so, you can easily establish the windup lo and hi limit flags to prevent the output from exceeding specified conditions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PCMusicGuy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>broman973 mentioned a desire to adjust the PID output range to a new setpoint, while still maintaining the previous accumulated output. However, attempts to write new values to MINCV and MAXCV did not yield the desired results. It was found that updating the MINCV and MAXCV via MOV did not update the PID correctly until the PID block settings were opened and modified. For example, changing the MINCV from 0 to 10 while the output was at 100 resulted in the output reaching 110 until the PID block settings were adjusted. Alternatively, keeping MINCV and MAXCV as constants of 0 and 100, and utilizing MINO and MAXO instead, proved to be a more effective solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AMarks95 shared that they discovered an issue with updating the PID when changing the MINCV and MAXCV values using the MOV command on setpoints. The PID would not update correctly until the settings were manually adjusted and saved. For example, if the MINCV was originally set at 0 and MAXCV at 100, with an output of 100, changing the setpoint to MINCV 10 would result in an output of 110 until the PID settings were modified and saved. However, keeping MINCV and MAXCV constant at 0 and 100 respectively, and using MINO and MAXO instead, proved to be more effective. Have you tried cycling the PID.INI tag after adjusting the constants using MOV?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a question from user Robertmee, the PID.INI tag was not cycled when adjusting the constants using a MOV command. This was not a problem for the O method, where the changes were successful without cycling the tag. It was observed that hitting ok on the PID block settings popup seemed to be the key to the correct implementation of the changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using a PID block, there may be instances where adjusting the maximum output to something other than 100% is desired. Similarly, there may be cases where setting the minimum output to a value other than 0% is necessary. 

Attempts to modify the .MAXO and .MINO tags of the PID controller have not been successful, impacting the control variable. Seeking guidance on how to clamp the output of the PID block without using a comparison method that limits the physical analog output. Any recommendations would be appreciated. 

Considerations should be made regarding scaling and external limits to prevent integrator wind-up when the process variable (PV) does not reach the setpoint (SP) due to limits. Additionally, it is important to assess if limiting the output to 80% will still allow the PV to reach the SP under various loads. It is advised to provide details about the application and the specific problem being addressed for better assistance, as similar challenges may have been tackled previously.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey emphasized the importance of addressing problems in the most effective way possible. It is crucial to consider the scalability of solutions and ensure that external limits do not hinder the integrator's performance. Furthermore, limitations on output must be carefully considered to prevent instances where the process variable (PV) does not reach the setpoint (SP) under varying loads. It is vital for individuals seeking help to provide detailed information about their application and the specific challenges they are facing. By learning from past experiences and seeking advice from knowledgeable sources, one can improve their problem-solving approach. Considering the original question was posed in 2013, we can only hope that the individual has since learned valuable lessons and improved their methods.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Adjusting the limits of a PID instruction can be beneficial in certain scenarios. For example, in a system that manages the open position of effluent valves for water filters (flow control PID), adjusting the valve opening after backwashing is crucial to maintaining water quality. If the flow rate exceeds the upper limit setpoint, the CVH value is checked and adjusted slightly above the current CV value. Additionally, when the flow rate is below the target for a period of time due to dirty filters, the upper limit is increased. This approach prevents overshooting the target and producing cloudy water, especially during the initial stages of plant operation when the flow signal may take some time to stabilize due to external factors beyond PLC control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Water that appears "cloudy" due to suspended particles or other impurities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion about "cloudy" water, drbitboy shared some insights gained from working in the water industry. Firstly, the cost of water is often underestimated. Secondly, having a personal well is a blessing. While once skeptical of purchasing bottled water, drbitboy now understands the importance, especially with the added filtration process. The experiences in the water industry have opened eyes to the importance of water quality and the need for reliable sources.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set output limits in RSLogix 5000 PID Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set output limits in RSLogix 5000 PID Controller, you can write to the .MAXO and .MINO tags of the PID controller. However, if this method is not affecting the control variable, there are other approaches to consider.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to set a maximum output value different from 100% in RSLogix 5000 PID Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to set a maximum output value other than 100% in RSLogix 5000 PID Controller by adjusting the .MAXO tag of the PID block.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I set a minimum output value different from 0% in RSLogix 5000 PID Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set a minimum output value other than 0% in RSLogix 5000 PID Controller, you can modify the .MINO tag of the PID block.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What should I do if writing to .MAXO and .MINO tags of the PID controller does not affect the control variable?</h4>
<p class='text-muted'><strong>Answer:</strong> - If writing to the .MAXO and .MINO tags of the PID controller does not affect the control variable, consider alternative methods such as implementing a compare function or exploring other techniques within RSLogix 5000.</p>
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
