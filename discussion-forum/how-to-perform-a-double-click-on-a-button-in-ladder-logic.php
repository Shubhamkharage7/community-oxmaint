
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for the easiest method to perform a double click of a button in ladder logic? Im new here and hoping this question hasnt been covered already.">
    <meta name="keywords" content="double click button ladder logic, how to perform double click in ladder logic, button double click programming, ladder logic button behavior, easy method for button double click, plc ladder logic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-perform-a-double-click-on-a-button-in-ladder-logic">
    <title>How to Perform a Double Click on a Button in Ladder Logic | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Perform a Double Click on a Button in Ladder Logic | Oxmaint Community">
    <meta property="og:description" content="Looking for the easiest method to perform a double click of a button in ladder logic? Im new here and hoping this question hasnt been covered already.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-perform-a-double-click-on-a-button-in-ladder-logic">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Perform a Double Click on a Button in Ladder Logic | Oxmaint Community">
    <meta name="twitter:description" content="Looking for the easiest method to perform a double click of a button in ladder logic? Im new here and hoping this question hasnt been covered already.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-perform-a-double-click-on-a-button-in-ladder-logic"
      },
      "headline": "How to Perform a Double Click on a Button in Ladder Logic",
      "description": "Looking for the easiest method to perform a double click of a button in ladder logic? Im new here and hoping this question hasnt been covered already.",
      "author": {
        "@type": "Person",
        "name": "itjustme"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-31",
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
                <h1 class="text-white">How to Perform a Double Click on a Button in Ladder Logic</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>itjustme</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>22 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">704</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">130</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Looking for the easiest method to perform a double click of a button in ladder logic? I'm new here and hoping this question hasn't been covered already.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Before implementing a double click event on your HMI, verify that the system supports this feature. If it does, consider using a sequencer to manage the process effectively. Start by monitoring transitions from the HMI button to advance the sequencer to the next step. Follow the same process for subsequent steps, ensuring smooth transitions triggered by the HMI button clicks. To avoid any delays, incorporate a watchdog timer to automatically revert to the waiting state if the sequence is prolonged.

This approach outlines a practical method for integrating double click functionality into your HMI button controls. However, it's essential to note the potential challenges associated with hard-wired buttons, particularly in the case of double events. To mitigate any confusion, consider establishing a sufficient time interval between consecutive clicks to ensure accurate implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using an AB PicoSoft PLC unit and want to simulate a double click action similar to that of a computer mouse on a Banner Optical Touch Button to activate the output command.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>itjustme</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm not acquainted with that specific model. Could it possibly be a PLC/HMI blend?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Input and Output (I/O) in a Programmable Logic Controller (PLC)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>itjustme</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>similar products</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>itjustme</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To implement this logic, the key is to identify the rising edge of the discrete input twice within a specified time frame. If your PLC supports rising edge contact or oneshot instructions, utilize these to initiate a timer and a counter. Ensure the timer continues running while counting, and reset the counter once the timer expires. Set the counter preset to 2 - if the counter reaches this value, it indicates that the button has been tapped twice. Use the counter done bit to trigger the next action. For guidance on integrating this logic with your specific controller, it is recommended to seek assistance from those who are experienced in its operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One common issue in capturing a double click from a hard-wired input is dealing with multiple input events caused by contact bounce. This phenomenon can lead to erratic behavior in pushbutton signals, with voltage spikes and troughs creating false positives. To address this issue, search for information on "debounce inputs" in online forums. Analyzing the input signal with an oscilloscope can help identify and filter out these false events.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Create an event trigger on the button press that initiates a short timer. The timer will stay active until the button is pressed again during a rising one-shot event, triggering a double click response. Ensure the double click output is placed before the timer output in the ladder logic. Additionally, utilize the double click input to reset the timer latch if needed. This logic is similar to Okie's method but does not require a counter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>No need to secure with excessive force, simply use a touch of pressure. Is this comparable to a double-handed button setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy suggested avoiding excessive latching by utilizing a two-touch control. Is this similar to a two-handed button setup? Not quite. It involves pressing a single button twice, similar to double-clicking a mouse. While I fail to see the necessity for such automation, especially with Opto-Touch buttons primarily designed for Cycle Starting, I cannot understand the original poster's intentions. It has been a while since I last encountered a Pico (programmable relay) - in fact, the sole one I encountered was replaced by an ML1100 due to being fried and discontinued. In emergencies, I have resorted to using a single button with a counter for dual functions, although this was promptly rectified.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy mentioned that instead of latching a lot, you can simply use a two-hand operation function. Is this similar to a two-hand button setup? I personally prefer to steer clear of TOFs as many technicians and myself find them frustrating and prefer not to use them. They are viewed as an ineffective invention, much like inverted coil instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee adamantly refuses to use TOFs, likening them to the plague. Both technicians and himself despise them, declaring them as impractical as an inverted coil instruction. While recognizing their limited usefulness in certain instances, he personally has never found a need for them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Regardless of the type of timer used, the approach suggested by @robertmee remains consistent as shown in the image provided. This method assumes that the "clicked" bit, B3:0/0 in the image, is initially set to 1 from an HMI and then cleared to 0 to create a one-shot effect. I am simulating the HMI by setting B3:0.0 to 1 in online mode. When a physical button triggers a PLC input, it should be processed through a one-shot/rising-edge/pulse instruction as advised by @robertmee.

Please note that the code in the image is designed to count double clicks only; a different process may require alternative handling. The preset timer of 500ms for detecting the second click is arbitrary. Any subsequent clicks during the timing period will register as additional double-clicks, necessitating extra logic to prevent such occurrences if needed.

Dealing with the TON scenario is simpler as the detected double-click can reset the timer, whereas managing the TOF scenario is also feasible. Additional logic may be necessary for physical inputs to ensure that a single press with bounce is not mistakenly detected as a double-click. It may be more beneficial to distinguish between short and long presses rather than single and double clicks.

Furthermore, addressing input bounce is crucial as it can lead to false short-press detections. Additional precautions and adjustments may need to be incorporated to handle such issues effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One useful feature is the double click, which is a single input signal that is only active for one scan cycle. If you want to send this signal to an HMI, you may need to latch it and reset it using a timer or another method. Because the signal is only on for one scan, communication to and from the HMI may not pick it up. Alternatively, you can achieve the same result using a counter set to a value of 2. This ensures that the signal is properly transmitted to the HMI system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Don't forget, the device being used is a Pico without any mention of an HMI, which may not be supported. While it does support timers and counters, it lacks advanced features like suggestions. It's essentially a smart relay rather than a traditional PLC as we are familiar with. Here is a link to the Pico manual for more information. Perhaps Bit can understand it better with this resource.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Implement Flip Flop logic and detect the falling edge using ONSF. It is important to consider contact bounce as it may affect the accuracy of the detection process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Padees mentioned that while timers may seem terrible, they do have specific uses. In a recent post, they discussed the Timer Off Delay function. To clarify, if you need to activate something after a set time, use TON and monitor the DN bit. Conversely, if you need to deactivate something after a set time, use TOF and monitor the DN bit. 

There are situations where you can interchange TON and TOF by swapping XIC and XIO, but sometimes this approach is not effective due to an undesired startup state. For instance, when handling a simple task involving a projector with an On/Off button and two outputs (a fan and a lamp), using a TOF makes it easier to ensure that both outputs energize when the unit is turned on, and the fan runs for 30 seconds after the unit is turned off.

Students often struggle with using a TON in this scenario, resorting to a mix of one shots and latches. As a result, the fan may turn on immediately upon entering run mode and then shut off after 30 seconds, which is not the desired outcome. It is crucial to understand that the fan should only run when the unit is on or during the cooldown period when transitioning from on to off.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A common concern with the Timer Off (TOF) function in PLC programming is that the Done bit (DN) becomes TRUE as soon as the input conditions are met and remains TRUE until a specified time delay after the TOF rung goes false. This unique behavior differs from other functions typically monitored in a PLC. I tend to steer clear of using TOF functions whenever possible, opting for alternative methods in over 98% of cases.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I utilize Time-Over-Flow (TOF) in order to extend pump run times in sump pits even after receiving the stop signal. This allows me to extract more water than the level probes would typically permit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC addressed a common issue with Timer Off Delay (TOF) in PLC programming. He pointed out that the DN bit in TOF becomes TRUE once the rung-in conditions are met and remains TRUE until a time delay after the TOF rung goes false. This differs from the typical behavior of other functions in a PLC. While some may find TOF confusing, OkiePC sees it as just another tool in the toolbox that should be used when necessary. Despite its backward design, TOF serves a specific purpose and can be useful in certain situations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy explained that he utilizes time-over-frequency control (TOF) to extend pump operation for a few additional seconds beyond the stop signal in sump pits. This small adjustment allows for the extraction of more water than what the level probes typically permit. This can also be achieved by implementing a time-over-noise (TON) delay on the level probe triggering the pump shutdown.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I understand that we may be straying off topic, as an instructor, I feel compelled to address this issue. Time and again, I have witnessed individuals expend excessive effort trying to fit a large amount of information into an application that was intended for a different purpose. This has led to the creation of convoluted code in many of the projects I have been involved in. Utilizing an on-delay function to postpone the deactivation of a process can actually be more bewildering than utilizing a time-off function. The use of XIO instructions on the DN bit can trigger unnecessary complications each time the system enters run mode, necessitating the writing of additional code to address this issue. Surprisingly, there is a minimal distinction between TON and TOF timers, upon closer examination. 

In a TON timer, the "done" bit becomes active when the rung becomes true and a specified time has elapsed. Conversely, in a TOF timer, the "done" bit becomes active when the rung becomes true without any delay. As for deactivation, in a TON timer, the "done" bit becomes inactive when the rung becomes false without a delay. On the other hand, in a TOF timer, the "done" bit becomes inactive when the rung becomes false after a specified delay. Essentially, both timers operate based on the rung's truth value, with the key distinction lying in when the delay factor comes into effect.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I implement a double click functionality for a button in ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> One approach is to use a timer to detect the time interval between two clicks. You can set up a timer that starts counting when the button is pressed once, and if the button is pressed again within a certain time window, you can consider it a double click.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a specific ladder logic function block or instruction for detecting double clicks on a button?</h4>
<p class='text-muted'><strong>Answer:</strong> While ladder logic programming varies depending on the PLC manufacturer, most systems do not have a built-in function specifically for detecting double clicks. You may need to create your own logic using timers and memory bits to achieve this functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What considerations should I keep in mind when implementing double click functionality in ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> It's important to choose an appropriate time window for detecting double clicks that is not too short to cause false positives or too long to be unresponsive. Additionally, ensure that your ladder logic program accounts for button debouncing to prevent unintended multiple clicks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Can you provide a sample ladder logic code snippet for implementing double click functionality on a button?</h4>
<p class='text-muted'><strong>Answer:</strong> Here is a simplified example:
   
   ```
   Network 1:
   // Detect button press
   I:1.0 (Button) ----| |----] [----(T5s)----[</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
