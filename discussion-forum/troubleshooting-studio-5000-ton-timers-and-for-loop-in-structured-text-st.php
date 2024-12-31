
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, Im fairly new to working with Rockwell PLCs and Im currently attempting to execute the following code snippet. When Switch 1 is active, the variable bit should increment gradually with a 5-second delay for each step. However, when running the code, the bit increments rapidly by 20 without">
    <meta name="keywords" content="studio 5000, ton timers, for loop, structured text, rockwell plcs, troubleshooting, switch 1, structured programming, program execution, code snippet, variable increment, delay, rapid increment, desired outcome, guidance, restructuring">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-studio-5000-ton-timers-and-for-loop-in-structured-text-st">
    <title>Troubleshooting Studio 5000 TON Timers and FOR Loop in Structured Text (ST) | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Studio 5000 TON Timers and FOR Loop in Structured Text (ST) | Oxmaint Community">
    <meta property="og:description" content="Hello, Im fairly new to working with Rockwell PLCs and Im currently attempting to execute the following code snippet. When Switch 1 is active, the variable bit should increment gradually with a 5-second delay for each step. However, when running the code, the bit increments rapidly by 20 without">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-studio-5000-ton-timers-and-for-loop-in-structured-text-st">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Studio 5000 TON Timers and FOR Loop in Structured Text (ST) | Oxmaint Community">
    <meta name="twitter:description" content="Hello, Im fairly new to working with Rockwell PLCs and Im currently attempting to execute the following code snippet. When Switch 1 is active, the variable bit should increment gradually with a 5-second delay for each step. However, when running the code, the bit increments rapidly by 20 without">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-studio-5000-ton-timers-and-for-loop-in-structured-text-st"
      },
      "headline": "Troubleshooting Studio 5000 TON Timers and FOR Loop in Structured Text (ST)",
      "description": "Hello, Im fairly new to working with Rockwell PLCs and Im currently attempting to execute the following code snippet. When Switch 1 is active, the variable bit should increment gradually with a 5-second delay for each step. However, when running the code, the bit increments rapidly by 20 without",
      "author": {
        "@type": "Person",
        "name": "musterhere"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-29",
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
                <h1 class="text-white">Troubleshooting Studio 5000 TON Timers and FOR Loop in Structured Text (ST)</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>musterhere</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">777</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">455</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I'm fairly new to working with Rockwell PLCs and I'm currently attempting to execute the following code snippet. When Switch 1 is active, the variable bit should increment gradually with a 5-second delay for each step. However, when running the code, the bit increments rapidly by 20 without any delays. Can someone please clarify how Studio 5000 executes programs and provide guidance on restructuring the code to achieve the desired outcome? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Visualize the sequence in your mind and observe that the "bit +=1" action occurs consistently in each iteration regardless of the timer's state. Consider relocating this line within the "if delay.DN" condition. Additionally, please note that the loop will not halt during timer operation; instead, it will continuously run 20 times consecutively. To address this, you may want to switch to using a "while" loop instead of a traditional for-next loop. A modified version of the code could be: 

While bit is less than 20 and delay.DN is true, increment bit by 1 and set xEnable to 0
end while

This adjustment ensures smoother execution and coordination with the timer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Firstly, the bit:=bit+1 code is not included in the delay.DN If-Then structure. Therefore, it will immediately start counting up to 20. Secondly, the For-Next loop is not impacted by the timer completion, causing it to continuously loop from 1 to 20 and update the timer. This process repeats in each scan, incrementing the bit by 1 until it reaches 20 while also setting xEnable to 0. Once the timer reaches completion, it will reset the loop, clear the TimerEnable bit, reset the .DN and .ACC bits, and begin the process anew.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the discussion thread, joseph_e2 suggests visually looping through the code to understand that the bit +=1 instruction occurs in each loop regardless of the timer status. To ensure the instruction only runs when the delay.DN condition is met, it is recommended to place it within the "if delay.DN" statement.

It's important to note that the code will not pause while the timer is running; it will instead run continuously 20 times. Consider using a "while" loop instead of a for-next loop. An alternative approach could be:

```
While bit < 20
   If delay.DN then
      bit += 1
      xEnable := 0
   End if
Wend
```

However, using a while loop may not be ideal if you are waiting for a timer outside the loop to finish. If your goal is to increment "bit" each time delay.DN is true, you can simplify the code by using:

```
If delay.DN AND (bit < 20) then
   bit += 1
   xEnable := 0
End if
```</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>musterhere inquired about Rockwell PLC programming, seeking guidance on a code implementation issue. The code in question is intended to increment a variable gradually with a 5-second delay between each step when a switch is activated. However, the current code seems to be incrementing the variable immediately without any delays. The user is seeking clarification on how Studio 5000 executes programs and advice on reorganizing the code to achieve the desired outcome.

Background:
Understanding the scan cycle is essential in PLC programming, as it dictates when events occur. If unfamiliar with the scan cycle, watching a video series can be helpful.

General:
Given the provided code and the user's novice status, it appears there may be a need for a better understanding of the scan cycle. PLC programming differs significantly from conventional programming, and previous programming experience may be beneficial. Is this task part of a course assignment?

Specific:
As highlighted by others, the current code does not align with typical PLC operation. The FOR loop incrementing to 20 on every scan cycle, coupled with the 5-second timer expiry, results in unexpected behavior. Additionally, the TONR instruction may not be suitable for this scenario, and using TON could reset the timer as needed.

It's important to grasp the scan cycle's implications fully before delving deeper into PLC programming. Familiarity with how the cycle influences program execution, such as the behavior of the .DN bit in the "delay" structure, is crucial for successful programming. Watching educational resources on the scan cycle can aid in uncovering insights and resolving issues in PLC code implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I understand correctly, you are requesting a number to automatically increase by 1 every 5 seconds until it reaches 20. When the counter hits 20, should it reset to 0 or remain at 20? It seems like a loop may not be necessary for the issue you are tackling. Can you provide more details about the problem you are trying to solve?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>APS_Programming</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>According to drbitboy, PLC programming revolves around the concept of time. However, I take a different stance on this matter. Relying on time as a method of control for a PLC can be problematic. The assumption that specific events will consistently take the same amount of time is not always accurate, as daily experiences demonstrate. 

If you find yourself resorting to time-based control, it's essential to question where you may be going wrong. In some cases, the lack of suitable sensors or budget constraints may force you to opt for time-based control. However, it's crucial not to forget that this decision is based on a potentially faulty assumption.

Timers are commonly used in PLC programming due to the inconsistency of the PLC's scan time. Even timed interrupts do not guarantee precise timing, as interrupts with higher priorities or lengthy code in timed tasks can introduce delays. While humans think in terms of seconds and minutes, PLCs operate on milliseconds. Thus, using timers such as TONs simplifies the process for us.

Ultimately, it is important to be honest with ourselves and the PLC about our compromises, assumptions, and shortcuts. Failure to acknowledge these factors can lead to unforeseen issues down the line.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aardwizz expressed disagreement with a statement, suggesting a possible misunderstanding of its meaning. The concept being discussed is that in PLC programming, the timing of events is more crucial than the events themselves. This idea emphasizes the importance of when something happens over what specifically happens. When referring to PLC programming as primarily being about time, it signifies that the order of events, represented by the scan cycle, acts as the clock. Rather than a fixed measure of time, this perspective focuses on the relative timing of events. When reviewing numerous "why does this not work" threads, the common issue often stems from a misunderstanding of when certain events occur within the PLC system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aardwizz emphasized the importance of self-reflection when relying on time delays for control purposes, urging individuals to question their approach. I concur with this perspective based on my extensive coding experience. Whenever I found myself resorting to time delays to troubleshoot issues, it always felt like a temporary and less than ideal solution. This practice often indicates a deeper underlying problem that should be addressed directly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named musterhere is seeking help with implementing a program in Rockwell PLC. They are facing challenges with the timing and implementation of the code. The goal is to gradually increment a variable with a 5-second delay for each step when a specific switch is activated. However, the current code is causing the variable to increment instantly by 20 without any delays. The user is seeking guidance on how Studio 5000 executes programs and how to reorganize the code to achieve the desired outcome.

An alternate suggestion is to try using LAD format instead of ST for easier implementation. Additionally, adding a MOV instruction to assign a step-dependent timer preset may help in achieving the desired functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vagabondengineer83</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my Studio 5000 program not executing the TON timers and FOR loop as expected?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Studio 5000 executes programs in a deterministic manner, meaning it scans through the logic repeatedly at a fixed rate. If the TON timers and FOR loop are not functioning correctly, it could be due to improper logic structure or conflicting instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I create a 5-second delay for each step in my Rockwell PLC program using Structured Text (ST)?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To achieve a 5-second delay between each step, you can utilize TON timers within the FOR loop. By setting the TON timer's preset value to 5 seconds and triggering the increment of the variable bit after the timer has timed out, you can introduce the desired delay.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take to troubleshoot rapid incrementing of a variable without delays in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the issue of rapid incrementation without delays in Studio 5000, you should first check the logic of your code to ensure that the TON timers and FOR loop are properly structured. Additionally, verify that the switch activation condition and variable incrementation are correctly synchronized within the program.</p>
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
