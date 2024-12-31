
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have been struggling to find a solution to my issue, as I am using AB RSLogix500 with SLC 5/05 CPU for my control system. My setup includes a simple three-button control panel with options for Speed up, Slow down, and Emergency stop (Estop). I am seeking to develop">
    <meta name="keywords" content="ab rslogix500, slc 5/05 cpu, analog output control, speed up, slow down, emergency stop, estop, control panel, logical sequence, adjustment rates, rmp instruction, timing intervals, control logic, analog">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-control-analog-output-with-speed-up-slow-down-and-emergency-stop-in-ab-rslogix500">
    <title>How to Control Analog Output with Speed Up, Slow Down, and Emergency Stop in AB RSLogix500 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Control Analog Output with Speed Up, Slow Down, and Emergency Stop in AB RSLogix500 | Oxmaint Community">
    <meta property="og:description" content="I have been struggling to find a solution to my issue, as I am using AB RSLogix500 with SLC 5/05 CPU for my control system. My setup includes a simple three-button control panel with options for Speed up, Slow down, and Emergency stop (Estop). I am seeking to develop">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-control-analog-output-with-speed-up-slow-down-and-emergency-stop-in-ab-rslogix500">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Control Analog Output with Speed Up, Slow Down, and Emergency Stop in AB RSLogix500 | Oxmaint Community">
    <meta name="twitter:description" content="I have been struggling to find a solution to my issue, as I am using AB RSLogix500 with SLC 5/05 CPU for my control system. My setup includes a simple three-button control panel with options for Speed up, Slow down, and Emergency stop (Estop). I am seeking to develop">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-control-analog-output-with-speed-up-slow-down-and-emergency-stop-in-ab-rslogix500"
      },
      "headline": "How to Control Analog Output with Speed Up, Slow Down, and Emergency Stop in AB RSLogix500",
      "description": "I have been struggling to find a solution to my issue, as I am using AB RSLogix500 with SLC 5/05 CPU for my control system. My setup includes a simple three-button control panel with options for Speed up, Slow down, and Emergency stop (Estop). I am seeking to develop",
      "author": {
        "@type": "Person",
        "name": "Jnox"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">How to Control Analog Output with Speed Up, Slow Down, and Emergency Stop in AB RSLogix500</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jnox</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>21 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">7935</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">286</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have been struggling to find a solution to my issue, as I am using AB RSLogix500 with SLC 5/05 CPU for my control system. My setup includes a simple three-button control panel with options for Speed up, Slow down, and Emergency stop (Estop). I am seeking to develop a logical sequence that will regulate an analog output (ranging from 0-10V) based on the specific input received (Speed up, Slow down, or Estop). It is crucial to note that Speed up and Slow down functions have different adjustment rates compared to Estop, which requires an immediate stop. 

Thus far, I have been experimenting with using a RMP instruction to achieve this control logic. However, I am facing challenges in assigning different timing intervals between RMP instructions. Could anyone suggest a faster and more effective method to accomplish this task successfully?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Counters can be utilized by implementing a "CTU" and a "CTD" instruction using the same counter address (such as C5:0). This setup should include three distinct self-resetting timers: one for increasing speed, one for decreasing speed, and one for emergency stops (e-stops).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you clarify how the "Speed Up" button functions? Does holding it down gradually increase speed, or is speed incremented by pressing the button repeatedly? Additionally, the description of the E-Stop suggests it acts more as a stop button than a true emergency stop feature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Norml</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Norml inquired about the functionality of the "Speed Up" button, wondering if holding it down gradually increases the speed or if pushing it repeatedly does so in steps. Additionally, there was concern about the description of the E-Stop, which seemed more like a regular stop button rather than an emergency stop. 

To clarify, holding the button will smoothly adjust the speed (e.g. from 0-10V in 15 seconds), while the E-Stop will quickly decrease the output (e.g. from 10V to 0 in 7 seconds). Hopefully, this explanation clears up any confusion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jnox</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective strategy suggested by Mickey is to utilize counters by implementing both a "CTU" and a "CTD" instruction with the designated counter address (e.g. C5:0). Additionally, setting up three distinct self-resetting timers can help control the speed increase, decrease, and emergency stop functions. However, the challenge lies in adjusting the counter to effectively modify the 0-10v analog signal and determining the rate at which the signal should increase or decrease. This requires a thoughtful approach to ensure optimal signal adjustment and system performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jnox</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Programming the Jnox system for a consistent rate of output increase or decrease is fairly simple. For instance, if the analog output card has a range of 0-32767 for a 0-10V output, you can smoothly ramp up the output from 0 to 10V over 15 seconds by incrementing by one-fifteenth of 32767 each second. To achieve a smoother transition, you can increase by 218 every 0.1 seconds, or even smoother, by 22 every 0.01 seconds.

To control the rate of output adjustment, you can use buttons to input values into the programming for raising/lowering (e.g. 22) or Emergency Stop (e.g. 250). It is essential to include limit-checking on the values sent to the Analog Output to ensure they fall within the accepted range.

It is important to note that the term "EStop" should be used carefully, as what is described in the system functionality may not be recognized as an Emergency Stop but rather a "Faster Stop." Emergency Stops should not be solely controlled by a PLC system for safety purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When adjusting the counter to increase or decrease a 0-10v analog signal, consider modifying the timers' preset values for a more controlled rate of increase or decrease. By adjusting the counter's ACC to match the requirements of your analog output cards, you can fine-tune the signal output accordingly. This method provides a precise way to manage the analog signal output.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, utilizing a timer may simplify this process. To achieve the desired increment or decrement, simply add or subtract on a time base. Copy these two sections into a Scheduled Time Interval (STI) File set at 10 milliseconds for it to function properly. By executing the specified ladder logic, you can control the speed of a motor effectively. This method involves manipulating values within the range of 0 to 32767 for a 0-10V output. Keep in mind that a 15-second ramp requires 1500 steps at a time base of 0.01 seconds. (Calculations show that 32768 divided by 1500 equals approximately 21.8, rounded up to 22). Consider implementing the suggested actions to adjust the speed accordingly: Increase Speed, Decrease Speed, and Fast Decrease Speed. Ensure that the necessary precautions are taken when converting raw values to be sent to an analog card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In post #4, Jnox suggested implementing an "EStop/Fast" slowdown that occurs twice as quickly (7 seconds full span) as the regular full ramps. In the program example provided by Daba, you can adjust the '-220' value to match your desired rate. For the 7-second slowdown, a value of -47 would be appropriate. Adjust as necessary for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to daba, the use of a counter may add complexity to this process. While I understand the point, I am suggesting an alternative approach that may work better.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing the processor's scan time for ramping in a PLC can result in the most seamless ramping process. For more details, refer to the PDF document.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jac</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am truly impressed by your expertise! I may have overcomplicated things by using an RMP instruction. I will implement the suggested solutions in the coming hours to see how they work out. Rest assured, I will keep you updated on the progress. Thank you for the valuable assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jnox</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jac, can you explain how you set the scan time of the processor to F8:0? I attempted to follow your approach but the result quickly jumps to 32767.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jnox</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Calculating the average scan time in a SLC can be simplified by multiplying the s:23 value (average scan in tenths of a millisecond) by 100. s:23 is the seconds clock in a PLC5.F8:0 = S:23 | 100.0 However, to get a more accurate calculation, it is advisable to continuously monitor the average scan time. This can be done by timing how long it takes to complete 500 scans and then dividing that total time by 500. I trust this explanation is helpful for your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jac</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am capable of counting up and down using the program, however, the output reaches 32767 instantly without any delay. How can I adjust the program settings to regulate the output speed? For instance, when the speed up button is pressed for 7 seconds (out of a total of 14 seconds), the output shows approximately 16000. If the speed up button is pressed for the entire 14 seconds, the output displays approximately 32767. The output will vary accordingly for any duration in between.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jnox</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey everyone, I'm looking to create a ladder diagram with digital input increase/decrease push buttons. Can anyone assist me with this? I need the output to vary from 4-20mA when holding down any of these buttons for a certain time, such as 60 seconds. Can someone please help me with this task as discussed earlier?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hussam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Which PLC Make and Model is Best for Implementing Analog Output Increase and Decrease? Typically, a timebase is required to control the increase or decrease of analog output when buttons are pressed. You have the flexibility to choose the amount of increment and decrement. Once the buttons are released, the Analog Out will maintain its current output level.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Attached is a simple FBD/LAD diagram that can easily be converted to ladder logic. The timer used in this diagram is an IEC type with a timebase in seconds or milliseconds. If the PLC make is not specified, you can assume it is a standard turn-on timer. Depending on the timebase, you may need to adjust the time increments, such as to 0.5 seconds. Additionally, the analog value for 4-20mA will vary based on scaling (0-100%) or raw values (0-32767). Make sure to adjust the 4 to 20 mA raw values in the compare checks to prevent negative readings or exceeding the maximum count.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to enhance performance is by implementing a secondary timer function that gradually reduces the timer value after a short delay. This feature can simulate a quick button press for a slow increment, while holding the button longer increases the speed of the increment. This can result in a smoother user experience and added control over timing adjustments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The example provided by @parky is excellent and deserves thorough examination. One suggestion for improvement is to incorporate logic for incrementing or decrementing the analog value immediately upon pressing either button, rather than waiting for a timer expiry. One approach to achieve this is by adapting@parky's logic to utilize a TOF and repositioning the timer rung after the rungs responsible for adjusting the analog value. However, using a TOF may restrict the operator from rapidly incrementing or decrementing the value by repeatedly pressing a button before the preset time elapses. To address this, a TON could be implemented to reset the timer when the button is released before expiry, along with a one-shot for button presses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to different methods for achieving a goal, this particular approach sets the (mean) scan cycle time as its timer tick, rather than using a TON or TOF. I am hesitant about implementing this in a real-world scenario without proper annotations. Additionally, it immediately increases the analog output by one at the onset of either ramp button's rising edge, instead of waiting for the "timer preset" (N7:5) to elapse before the first increase. The PLC's handling of rounding in division will influence certain behavioral nuances. The variable rate can be adjusted through the period indicated in the tag CYCLES_PER_STOP (N7:5), with a maximum period determined by the analog output range and data types employed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I concur with Brian's point about the unknown variables involved in scaling the analogue signal. Factors such as whether the raw value is being directly written or scaled in floating point can impact the speed and control of the PLC scan. While there are many questions that need to be answered for reliable solutions, the suggestions in previous posts can provide some guidance. Adjusting the values accordingly can help achieve a more reasonable control over the increment and decrement processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I control analog output with Speed up, Slow down, and Emergency Stop in AB RSLogix500 using SLC 5/05 CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To achieve this, you can develop a logical sequence in RSLogix500 that regulates the analog output (0-10V) based on the specific input received (Speed up, Slow down, or Emergency stop). You may need to consider different adjustment rates for Speed up, Slow down, and Emergency stop functions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What challenges might one face when using RMP instruction in AB RSLogix500 for controlling analog output with different timing intervals?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Challenges may arise when trying to assign different timing intervals between RMP instructions for Speed up, Slow down, and Emergency stop functions. It is essential to find a method that allows for effective control logic without these timing issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a faster and more effective method than using RMP instruction in AB RSLogix500 to control analog output with Speed up, Slow down, and Emergency Stop functions?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While experimenting with RMP instruction, you may face challenges in assigning different timing intervals. Considering this, it would be beneficial to explore alternative methods or instructions within RSLogix500 that can provide a more efficient solution for controlling analog output with varying adjustment rates for Speed up, Slow down, and Emergency stop functions.</p>
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
