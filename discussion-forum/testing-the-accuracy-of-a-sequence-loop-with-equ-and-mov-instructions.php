
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I have developed a sequential loop using EQU and MOV instructions and would like to ensure that it is functioning correctly. I have included a visual representation of the sequence. The sequence consists of two actions performed in succession, with a 2-second delay between each action. Each action">
    <meta name="keywords" content="sequence loop, equ instruction, mov instruction, accuracy testing, plc testing, sequential loop, 2-second delay, action repetition, phase_running bit, start bit, logic verification, plc sequence, larger sequence, correct logic, sequence accuracy, plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/testing-the-accuracy-of-a-sequence-loop-with-equ-and-mov-instructions">
    <title>Testing the Accuracy of a Sequence Loop with EQU and MOV Instructions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Testing the Accuracy of a Sequence Loop with EQU and MOV Instructions | Oxmaint Community">
    <meta property="og:description" content="Hello, I have developed a sequential loop using EQU and MOV instructions and would like to ensure that it is functioning correctly. I have included a visual representation of the sequence. The sequence consists of two actions performed in succession, with a 2-second delay between each action. Each action">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/testing-the-accuracy-of-a-sequence-loop-with-equ-and-mov-instructions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Testing the Accuracy of a Sequence Loop with EQU and MOV Instructions | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I have developed a sequential loop using EQU and MOV instructions and would like to ensure that it is functioning correctly. I have included a visual representation of the sequence. The sequence consists of two actions performed in succession, with a 2-second delay between each action. Each action">
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
        "@id": "https://community.oxmaint.com/discussion-forum/testing-the-accuracy-of-a-sequence-loop-with-equ-and-mov-instructions"
      },
      "headline": "Testing the Accuracy of a Sequence Loop with EQU and MOV Instructions",
      "description": "Hello, I have developed a sequential loop using EQU and MOV instructions and would like to ensure that it is functioning correctly. I have included a visual representation of the sequence. The sequence consists of two actions performed in succession, with a 2-second delay between each action. Each action",
      "author": {
        "@type": "Person",
        "name": "lespoils"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-03",
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
                <h1 class="text-white">Testing the Accuracy of a Sequence Loop with EQU and MOV Instructions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>lespoils</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1094</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">215</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I have developed a sequential loop using EQU and MOV instructions and would like to ensure that it is functioning correctly. I have included a visual representation of the sequence. The sequence consists of two actions performed in succession, with a 2-second delay between each action. Each action is repeated four times. The initial setup of the sequence is not a concern for me, as the Phase_running and Start bits are for testing purposes. My main focus is on verifying the accuracy of the sequence loop. After testing it on my PLC, it appeared to be working properly. I plan to incorporate this sequence loop into a larger sequence and want to confirm that the logic is correct. Thank you for any insights. - Lespoils</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance the efficiency of your programming logic in Studio5000, consider adding an ONS instruction to the Start button rung to prevent continuous writing of 10 to the sequence. Alternatively, include an EQU statement in the rung to ensure the Sequence is equal to 0, avoiding potential restarts mid-sequence. Implementing event-driven checks by arranging the sequence in reverse order, with Sequence 10 as the last rung and Sequence 30 as the first, can compel the processor to evaluate the entire code before proceeding to the next step. Additionally, adjusting the scan order of the counter RES and prioritizing it as the first branch, followed by MOV 0 to Sequence as the last branch, can optimize performance. Alternatively, consider creating a separate rung stating Sequence = 0 RES counter to maintain logic consistency and ensure the counter resets when the Sequence is 0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesCash</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To improve the clarity of the code, consider the following suggestions. The code can be organized by separating different functions onto individual rungs for better visibility. Additionally, combining cascading timers into a single timer with a specific duration can streamline the code's functionality. It may be beneficial to keep certain instructions on separate branches or rungs for clarity.

For example, a 4000ms timer named TIMER12 can replace TIMER1 and TIMER2, triggering the action when TIMER12.ACC surpasses 1999. The same concept can be applied to TIMER3 and TIMER4. 

The Start button serves as the initiation for a Start/Stop Circuit pattern, with the Stop condition being a combination of Counter.DN and Phase_Running. 

Seal-in and OTE write to a Runbit, while the activities of Actions 1 and 2 can be triggered based on specific conditions. 

The XIO instructions on the feed rungs to the TONs can be removed, as the sequence of Counter.DN values will reset the timers accordingly. Similarly, the XIO instructions on the feed branches to the TONs are redundant due to the advancement of the SEQUENCE value resetting the timer.

Overall, organizing the code into clear rungs and optimizing the use of timers can enhance the functionality and readability of the program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There is no need for a oneshot instruction; simply insert an equals 0 condition in the initial rung to ensure it is only triggered once when the sequence is at 0. This will prevent multiple executions and ensure efficient programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate everyone for their prompt and informative responses. I will review the recommended changes tonight when I return home. I am intrigued by the concept of reducing timers and resetting the counter at the beginning of the sequence once it is completed. This is precisely the information I was seeking! I will make these adjustments tonight and share the updated program afterwards. Thank you very much. -Lespoils</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lespoils</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In an unconventional move, I would suggest isolating the Phase running contacts in a separate routine and only triggering it when necessary. This way, each time you move to a new Step, you can easily keep track of where to resume if you need to pause the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree with Cardosocea's point that managing a stop/re-start process depends on the specific tasks at hand. Whether you need to reset the sequence to 0, pick up where you left off, or perform a controlled shutdown/startup, keeping track is key. One simple way to do this is to save the current sequence number every time it is accessed before moving on to another task. Different methods can be used to maintain the sequence, such as keeping the number in place and using a routine to hold motors or valves, then reversing this process on restart. Another option is to store the current sequence number and switch to a controlled stop routine, reversing this when resuming. These strategies help ensure a smooth and efficient stop/start process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to maintain a sequence, there are several methods that can be utilized. One option is to retain the sequence number and utilize a routine to control actions such as holding or enabling motors/valves. Another approach is to save the current sequence number and switch to a designated stop routine, then reverse the actions upon resuming. However, the effectiveness of these methods will vary depending on the specific process being managed. Some processes may require specific conditions to be met before progressing to a certain step, such as maintaining a certain temperature. In such cases, interrupting the sequence may necessitate revisiting previous steps. Despite these challenges, these techniques can be valuable in implementing a control strategy for various processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree that going back a few steps or restarting a routine can be beneficial. I have transitioned from drum or bit controlled sequences to using numeric ones, allowing for easy addition of steps in increments like 10 or 20. This sequence variable can be utilized on HMI's SCADA system to show the current process, displaying text lists or lookup tables in SQL for added flexibility and customization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello once more,

I have revised the loop sequence based on the feedback I received yesterday. However, I still have a question regarding the counter and its repetitive nature. I was initially expecting the loop to run five times, but it only loops four times. Here's what I had in mind:

- First loop: Perform actions, counter increments from 0 to 1, proceed to sequence 10
- Second loop: Perform actions, counter increments from 1 to 2, proceed to sequence 10
- Third loop: Perform actions, counter increments from 2 to 3, proceed to sequence 10
- Fourth loop: Perform actions, counter increments from 3 to 4, proceed to sequence 10
- Fifth loop: Perform actions, counter at 4 (completed), move back to sequence 0

I initially included a normally closed counter DN in sequence 10 and 20 to avoid the actions repeating for a fifth time. However, I am now curious as to why it works as it does. It seems like sequence 30 is executing both the CTU and MOV to 0 simultaneously, which seems incorrect.

Your insights on this matter would be greatly appreciated.

Thank you,
Lespoils</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lespoils</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User lespoils is seeking assistance in understanding why a specific sequence is functioning the way it is. The concern is that sequence 30 may be executing both the CTU and the MOV to 0 simultaneously, which could be incorrect. However, it is important to note that these actions actually occur on the same scan cycle, not exactly at the same time. To gain a better grasp of this situation, it is recommended to include a diagnostic rung with the following code: EQU SEQUENCE 30 XIC Counter.DN ADD Trigger 1 Trigger, where Trigger should be a numeric data type like REAL, INT, or DINT (preferably REAL to prevent overflow faults). Additionally, it is unnecessary to have the XIO Counter.DN feeding the CTU as each EQU SEQUENCE 30 = True is already a one-shot event. Remember, asking when something occurs is more crucial than asking what is happening.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lespoils mentioned concerns about the sequence 30 rung affecting both the CTU and MOV to 0 simultaneously. This scenario might seem unexpected, but the explanation lies in the order of evaluation within the ladder logic instructions.

In the detailed mnemonic representation of the fourth rung, it is evident that the XIO Counter.DN instruction (true if Counter.DN value is 0) and the XIC Counter.DN instruction (true if Counter.DN value is 1) can both produce a True output on the same scan cycle. This is due to the sequence of evaluation where XIO is evaluated before XIC.

When analyzing the evaluation timeline, it becomes clear that the CTU Counter 4 0 instruction is evaluated between the XIO and XIC instructions. This allows for the Counter.DN value to change from 0 to 1 during the scan cycle, ultimately resulting in the MOV 0 SEQUENCE instruction being executed.

Understanding the sequence of evaluation is crucial in PLC programming to avoid unexpected outcomes like the one described by Lespoils. For further insights into similar PLC behaviors, refer to this informative video series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, drbitboy, for your assistance in helping me understand the rung scan order better. I found the last reply very helpful, and I also appreciate the informative videos you provided. After going through the entire series, I still have a question regarding scanning branching rungs.

The branching demonstrated in the video series is known as the "seal in" type, where branching occurs at the input or conditions of the rung. In my case, however, branching occurs at the output. From the image I have attached, it appears that the evaluation of the branching rung follows this sequence: In1 is evaluated first, then In2, In3, Out1, In4, and finally Out2.

I am aware that scan orders can vary between different PLC models. My work PLC is a 1769-L30ERMS, while my home PLC, where I conduct tests, is a 1769-L24ER. Both are Compactlogix PLCs, and I presume they scan in a similar manner.

Thank you for your continued support and insights.

Lespoils</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lespoils</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The order of evaluation in the example rung follows a left-to-right and top-to-bottom approach, with evaluation stopping at the right-side vertical bar of parallel branches. The order then jumps back to the corresponding left-side vertical bar and continues downwards (top-to-bottom; XIC In2 following XIC In1 in the example). After evaluating the bottom branch of parallel branches, the evaluation continues left-to-right from the top of the right-side vertical bar (XIC In3 in the example). This order can be confirmed by checking the mnemonic form in Logix by double-clicking on the rung number to see the mnemonic form, where the left-to-right order of instructions reflects the evaluation sequence on the rung.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I greatly appreciate your prompt and accurate response. Thank you! Lespoils</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lespoils</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In summary, here is a more concise version of the instructions with fewer steps and only one timer. The Phase_Running timer is not included but only needs to be on the first rung. To make adjustments, you can replace the timer reset at the end of the first rung with an XIO T4:0/DN before the TON instruction. However, this may cause ACTION_1 to briefly fire at the end of ACTION_2 on the fourth cycle. To remedy this, you can add an XIO T4:0/DN to the second rung or move everything after the TON to a new third rung after the second one. While this change is not inherently problematic, it does divide the sequencing logic and action outputs, which can make the code more challenging to comprehend. It's important to note that this exercise is primarily for fun and to challenge yourself. Stick with your original code as it is more straightforward to understand the sequence logic. The use of two timers allows for more flexibility in timing for different actions and makes it easier to incorporate additional actions in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I test the accuracy of a sequence loop using EQU and MOV instructions?</h4>
<p class='text-muted'><strong>Answer:</strong> - To test the accuracy of a sequence loop, you can visually represent the sequence, ensure the correct timing between actions, and verify that each action is repeated as intended. Additionally, testing the sequence on a PLC can help confirm its proper functioning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are some key components to consider when verifying the accuracy of a sequence loop?</h4>
<p class='text-muted'><strong>Answer:</strong> - Key components to consider include the timing between actions, the number of repetitions, the initial setup for testing purposes, and ensuring the logic of the sequence loop is correct before incorporating it into a larger sequence.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I incorporate a tested sequence loop into a larger sequence with confidence?</h4>
<p class='text-muted'><strong>Answer:</strong> - To incorporate a tested sequence loop into a larger sequence with confidence, you should thoroughly verify the accuracy of the loop, ensure it functions as intended on a PLC, and validate that the logic aligns with the requirements of the larger sequence to avoid any issues during integration.</p>
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
