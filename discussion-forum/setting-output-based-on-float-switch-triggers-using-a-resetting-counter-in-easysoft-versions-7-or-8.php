
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am new to this and it seems a bit challenging for me, even though it may actually be quite simple. In Easysoft (version 7 or 8), I am working on a system where a float switch (I1) needs to alternate between activating two pumps (Q1 or Q2). Another">
    <meta name="keywords" content="easysoft version 7, easysoft version 8, float switch triggers, resetting counter, alternating pumps, pump deactivation, leak detector, counter function, pump activation, system integration, pump control, float switch i1, float switch i2">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-output-based-on-float-switch-triggers-using-a-resetting-counter-in-easysoft-versions-7-or-8">
    <title>Setting output based on float switch triggers using a resetting counter in Easysoft versions 7 or 8 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting output based on float switch triggers using a resetting counter in Easysoft versions 7 or 8 | Oxmaint Community">
    <meta property="og:description" content="I am new to this and it seems a bit challenging for me, even though it may actually be quite simple. In Easysoft (version 7 or 8), I am working on a system where a float switch (I1) needs to alternate between activating two pumps (Q1 or Q2). Another">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-output-based-on-float-switch-triggers-using-a-resetting-counter-in-easysoft-versions-7-or-8">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting output based on float switch triggers using a resetting counter in Easysoft versions 7 or 8 | Oxmaint Community">
    <meta name="twitter:description" content="I am new to this and it seems a bit challenging for me, even though it may actually be quite simple. In Easysoft (version 7 or 8), I am working on a system where a float switch (I1) needs to alternate between activating two pumps (Q1 or Q2). Another">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-output-based-on-float-switch-triggers-using-a-resetting-counter-in-easysoft-versions-7-or-8"
      },
      "headline": "Setting output based on float switch triggers using a resetting counter in Easysoft versions 7 or 8",
      "description": "I am new to this and it seems a bit challenging for me, even though it may actually be quite simple. In Easysoft (version 7 or 8), I am working on a system where a float switch (I1) needs to alternate between activating two pumps (Q1 or Q2). Another",
      "author": {
        "@type": "Person",
        "name": "TGM"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-01",
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
                <h1 class="text-white">Setting output based on float switch triggers using a resetting counter in Easysoft versions 7 or 8</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TGM</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">504</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">151</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am new to this and it seems a bit challenging for me, even though it may actually be quite simple. In Easysoft (version 7 or 8), I am working on a system where a float switch (I1) needs to alternate between activating two pumps (Q1 or Q2). Another float switch (I2) is used to deactivate the pump. Additionally, there is a leak detector integrated into the system. I believe I can handle that part.

I am considering using a counter that increments each time I1 is triggered, resetting back to 1 after reaching 2, in order to determine which pump should be activated. However, I am struggling to understand how counters function. Is there a more straightforward approach to achieve this?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Basic counters, such as the ones described here, work by incrementing when the input signal, often referred to as "enable," switches from false to true. The counter only increments on this transition and will not continue counting if the input signal remains true. By comparing the counter value to either 1 or 2, you can determine which pump to activate. Alternatively, there is a method that does not involve using a counter, which is suitable for those without Easysoft software. It is essential to note that this method may require pulse bits, which are not available in all software versions. Additionally, timers can be used to debounce level controls, which can prevent issues such as product "sloshing" when pumps are started or stopped.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the internal workings of counters is crucial. Some counters have a discrete (boolean) input pin known as a Reset bit. By setting the preset (PV) input pin to 2 and linking the counter's "done" bit to the Reset pin, the counter will increment from 0 to 1, then from 1 to 2 with each rising edge. However, once the count reaches 2, the counter will reset back to 0. This concept is commonly used in programming applications, like the Level_Latch in@parky's popular program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for your assistance! I've spent hours working on this response and every time I attempted to ask more questions, a new idea would come to mind and I would go on a search to find the information I needed. I am almost finished with the program, just needing to include the off/auto switches. 
In my previous attempts, I have finally figured out how to use the latching coil by selecting the "M-Marker" from a drop-down menu instead of the "N-Marker" as shown in past versions. Understanding how the counters work and utilizing a comparator to send a signal has been a great help, although I am still facing some challenges with resetting the counter. 
One of the issues I encountered is the difficulty in translating information from other programs into Easysoft. Additionally, I have been unable to locate a Pulse function in Easysoft, or it may be labeled differently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TGM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You may come across a oneshot (ONS) in some software, which can be identified by a contact with an UP or down arrow. These oneshots can also be customized as per your requirements. Attached are some examples that can be utilized for reference. In the first rung, a oneshot contact only triggers on a rising edge for one scan. The second rung operates on the same principle but on a falling edge. The third example shows how you can create your own oneshot that triggers on a rising edge. Explore these options to optimize your programming efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here are three out of four programming methods commonly used with Programmable Logic Controllers (PLC), the fourth being "Structured Text" where the program is written in a language like C+. I am exploring options like using an "impulse relay," although I need more time to fully understand its capabilities. Thank you for all the assistance! In case you are interested, I found a workaround to make the pumps alternate, though it may not be the most elegant solution. Unfortunately, the program details, including alarms, hand/off/auto switching, and the block diagrams for timers, counters, and comparators, are not fully displayed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TGM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of programming, TGM advised to embrace learning without grimacing or showing distaste. The logic of "running both pumps at once" on rung Rung 9 will not impact pump operation since the output values of Q01 and Q02 will always be overwritten on Rungs 15 and 16. This programming structure, known as the "Duplicate destructive" bits pattern, is commonly used in the industry. Those who have succeeded typically only use it once. If you doubt its effectiveness, try manually triggering the High level input while one pump is running at the Low level - the other pump will not start. The system should function as follows: a level switch input (LS_?:I??) with values of 0 or 1 depending on the level, turn on one pump at a time above the debounced Low Level switch (LS_L:I01) after a specified duration. The unnecessary [NOT LS_L:I01] contacts can be removed as they do not affect the outcome. Turn both pumps off below the LowLow Level switch (I02:LS_LL) and attempt to turn both pumps on simultaneously above the debounced High Level switch (LS_H:I03) after a specific duration. The [NOT LS_H:I03] contact at the start of Rung 007 is also deemed unnecessary in this scenario.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here is a simplified version of the process with some changes made. I have removed four branches in total and reorganized it for better clarity. In my opinion, the NOT-Low debounce timer is not necessary as it is not being used effectively due to potential noise interference with the Low LS_L:I01 input signal, which could cause multiple triggers of the alternator counter when transitioning from below-Low to above-Low.

It does not make sense to trigger the alternator counter simultaneously with the activation of one of the pumps. Instead, a more efficient approach, as demonstrated in the last step, is to initiate the alternator counter count when transitioning below LowLow (LS_LL:I02 value is 1) to ensure the pumps are inactive. The counter should reset once it has completed counting (C01OF value is 1) and the level is above Low (LS_L:I01 value is 0). This transition from below-LowLow to above-Low serves as a time-debounce mechanism, eliminating the need for timers.

Furthermore, resetting the timer above Low should precede setting M03 and M04 values to prevent potential fluctuations. By utilizing the low bit of the counter's accumulator instead of direct comparisons, resetting the counter from 2 to 0 would maintain consistency in M03/M04 states without abrupt changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An important safety concern to consider is the use of Set/Reset for controlling the outputs of M02/M03/M04 bits in a PLC system. In the event of a power outage at the plant, there is a risk that the PLC may retain the previous state of these bits when power is restored, potentially causing one or both pumps to start unexpectedly. This could pose a safety hazard in the plant environment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience with programming pump control logic for duplex and triplex stations, I have found it crucial to debounce float switch states for at least 5 to 10 seconds. I also make sure to wait until all pump calls and run proof bits are off for a minimum of 30 seconds before initiating alternation. This ensures that the next pump to start is clear, preventing unnecessary alternation caused by manual switch interference. These practices are particularly important in sewer lift stations and water pump plants. However, in systems with shorter response times or faster pump operations, different timing strategies may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Absolutely, as @OkiePC mentioned, searching for "lead" and "lag" on this forum will yield numerous examples of the concept you are referring to. Additionally, you can find a helpful resource in the "Downloads" section above, specifically in the "Allen Bradley" folder, named "Alternator Methods.pdf." This file outlines various techniques for toggling a bit's value between two states, all of which involve utilizing a rising edge. The methods involving counters are particularly useful as they come equipped with built-in rising edge detection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here are four ladder rungs comprising atomic instructions (contacts and coils) with the exception of the counter. By optimizing the two counter logic rungs, one rung and three instructions can be eliminated. The final two rungs may appear complex, but they actually follow the canonical Start/Stop Circuit pattern (click here), which offers an alternative to the Set/Reset pattern commonly utilized. If you are struggling to comprehend the functionality of these rungs, I can simplify them to their canonical form initially and gradually build back up, allowing you to grasp the progression and the differences in principles compared to the canonical form.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To prevent disruptions during maintenance, it is recommended to break down the Start/Stop Circuit patterns into separate sections across multiple rungs. The layout decision ultimately depends on your specific site requirements, but the fundamental logic remains consistent regardless of configuration. Making this choice can help avoid inconveniences caused by late-night maintenance tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the previous example was too complex to understand easily, here is a simplified version to clarify the underlying principles of a two alternating lead-lag pump system. The low level switch above triggers a pump to start, while a low-low level triggers the pump to stop. For simplicity, the high level trigger and permissives (such as pump Auto/Manual, Alarm test, Leak indicator, Heat/Seal indicator) are excluded at this stage. The Start/Stop Circuit pattern consists of four key components.

Note that the Start Condition is a combination of two separate conditions: (Above Low level) AND (Pump selected). By examining this basic example, you can better comprehend the full implementation in the PDF document, including the high level trigger and permissives. You can also isolate the compound Start and Stop conditions of the pump-run rungs by mentally visualizing boxes around them to see how they fit the same pattern as the simpler case presented here.

If you prefer using the Set/Reset pattern over the Start/Stop Circuit pattern, you can apply the same Start and (inverted) Stop conditions on separate rungs to control the Set and Reset instructions, respectively. Additionally, you can incorporate timers for debounce and other delays, as suggested by @OkiePC.

The pump-select toggle logic has also been streamlined, reducing it from two rungs with eight instructions to a single rung with four instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC mentioned the importance of debouncing float switch states for approximately 5 to 10 seconds when writing pump control logic for duplex and triplex stations. This technique, also known as Anti-Chatter, is crucial for preventing rapid on and off cycles of valves triggered by float switches in processing lines with sprayers and liquid-filled tanks. Without debounce, a valve could cycle up to 120 times per minute at the trigger point. Typically, the debounce time is set at 10 seconds to avoid this issue. In addition to valves, anti-chatter is also applied to heat controls for dryers. To simplify the process, setting/resetting bits labeled Pump1_Last_Ran and Pump2_Last_Ran can be used. These bits do not directly control the outputs but are instead used to determine which pump was last run. By checking the status of these bits, the appropriate pump can be started. For instance, if Pump1_Last is ON, Pump2 is started, and vice versa. When Pump 1 starts, the Pump1_Last bit is set and Pump2_Last is reset, and vice versa for Pump 2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I use a resetting counter in Easysoft versions 7 or 8 to control pump activation based on float switch triggers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can use a counter that increments each time the float switch (I1) is triggered, resetting back to 1 after reaching 2, to determine which pump should be activated.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a simpler method to alternate between activating two pumps based on float switch triggers in Easysoft?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While using a counter is one approach, there may be alternative methods to achieve the desired pump activation based on float switch triggers in Easysoft. It's recommended to explore other logic functions within the software that could simplify the process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I utilize Easysoft (version 7 or 8) to integrate a leak detector into the system along with float switch-triggered pump control?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To integrate a leak detector into the system along with controlling the pumps based on float switch triggers, you can utilize the logic and programming capabilities of Easysoft to create a comprehensive control system. Consulting the software's documentation or seeking online tutorials may provide additional guidance.</p>
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
