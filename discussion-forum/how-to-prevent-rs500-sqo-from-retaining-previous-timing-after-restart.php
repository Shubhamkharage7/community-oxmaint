
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently working on a program that involves using a SQO instruction. The program consists of 5 steps, starting at zero. I have implemented a RTO to ensure there is an 8-second delay between each step. However, I have encountered an issue where, upon restarting the process,">
    <meta name="keywords" content="prevent rs500 sqo, retaining previous timing, restart, program, sqo instruction, 5 steps, rto, 8-second delay, issue, restarting process, advances to next step, retains timing, solution, address issue, correct approach">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-prevent-rs500-sqo-from-retaining-previous-timing-after-restart">
    <title>How to prevent RS500 SQO from retaining previous timing after restart | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to prevent RS500 SQO from retaining previous timing after restart | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently working on a program that involves using a SQO instruction. The program consists of 5 steps, starting at zero. I have implemented a RTO to ensure there is an 8-second delay between each step. However, I have encountered an issue where, upon restarting the process,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-prevent-rs500-sqo-from-retaining-previous-timing-after-restart">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to prevent RS500 SQO from retaining previous timing after restart | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently working on a program that involves using a SQO instruction. The program consists of 5 steps, starting at zero. I have implemented a RTO to ensure there is an 8-second delay between each step. However, I have encountered an issue where, upon restarting the process,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-prevent-rs500-sqo-from-retaining-previous-timing-after-restart"
      },
      "headline": "How to prevent RS500 SQO from retaining previous timing after restart",
      "description": "Hello, I am currently working on a program that involves using a SQO instruction. The program consists of 5 steps, starting at zero. I have implemented a RTO to ensure there is an 8-second delay between each step. However, I have encountered an issue where, upon restarting the process,",
      "author": {
        "@type": "Person",
        "name": "Joewiza1"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">How to prevent RS500 SQO from retaining previous timing after restart</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Joewiza1</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1354</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">102</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently working on a program that involves using a SQO instruction. The program consists of 5 steps, starting at zero. I have implemented a RTO to ensure there is an 8-second delay between each step. However, I have encountered an issue where, upon restarting the process, the program advances to the next step but retains the timing from the previous step. I have attached a picture of my latest attempt to address this issue. Can anyone advise if this solution is effective, or suggest the correct approach to resolve this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you want the initial step to last 8 seconds once more, reset the timer for your stop bit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I am on the second step and the timer has counted down to 4 seconds, pressing the stop button once and then restarting takes me to the next step. However, the timer retains the accumulated value from the previous step, only timing for the remaining duration. To ensure the timer stays in the same position after restarting, it is essential for it to retain its value.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Joewiza1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the timer instruction utilizing T4:0 classified as an RTO or TON function?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rung 0004 will not trigger a call to U:3 due to the condition where XIO B3:0/0 evaluates to True because the value of B3:0/0 is 0. As a result, the XIC T4:0/EN will evaluate to False since T4:0/EN is set to 0 in rung 0002. This relationship works in reverse as well. This logic helps optimize the program flow and prevent unnecessary calls to U:3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using the timer instruction that references T4:0, is it considered an RTO or a TON in PLC programming? The answer is that it is classified as an RTO.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Joewiza1</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In the programming context, drbitboy pointed out that rung 0004 will not engage with U:3 due to the evaluation of XIO B3:0/0 resulting in a value of 0. Consequently, the XIC T4:0/EN will be false since it has been set to 0 on rung 0002. Therefore, it may be beneficial to remove B3:0/0 from rung 4 for clearer logic flow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Joewiza1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I am on step two and press the stop pushbutton after the timer has counted for 4 seconds, it moves to the next step but the timer retains the previous value. This means it will only time for the remaining duration on the timer. I need the timer to retain its value after a restart to stay in the same position. I'm not clear on the purpose of the JSR that is not being called and forcing outputs. Additionally, if you want the timer to reset, make sure to reset it when B3:0/0 is lost.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Joewiza1's suggestion, it may be more efficient to remove the JSR instruction on rung 4 instead of just removing b3:0\0. It's unclear what the goal is with the JSR, but there might be a simpler logic-based solution available. Click to expand for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum thread, Joewiza1 suggested eliminating the B3:0\0 component on rung 4 in a programming scenario. This decision hinges on the desired circumstances for triggering SBR U:3. If the goal is for SBR U:3 to replace O:4.0 during every scan cycle when B3:0/0 is 0 and the timer is active but not yet complete, then removing XIO B3:0/0 would achieve this outcome.

Additionally, there is a discrepancy between the Start PB input in the main program file and in program file U:3, which may impact the overall functionality. To clarify the objective, the current code aims to ensure that O:4.0 remains at 0 when the Hold value is 0, sets Hold to 1 when Start PB is pressed and Stop/E-Stop are inactive, and changes O:4.0 to 5 in U:3 when Hold is 1 and Start PB is held down.

It is presumed that XIO B3:0/0 in rung 0004 has been removed to initiate an 8-second repeating timer. Each time this timer elapses, the R6:0 position is incremented, and the corresponding N7:[R6:0.POS] value is assigned to O:4.0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, Joewiza1 mentioned a challenge they are facing with a programming process where the Rhe "RTO" continues to hold the time from the previous step even after the process is stopped and restarted. They shared a screenshot of their latest attempt and are seeking advice on how to overcome this issue. One possible solution suggested was to replace the RTO instruction with a TON instruction using T4:0, which would reset the accumulator to 0 whenever the "Hold" value is 0. This adjustment would streamline the process and remove the need for Rung 0002, as the timer would automatically reset upon expiration during each scan. Can anyone confirm if this solution will work effectively or provide guidance on the proper approach?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In determining when SBR U:3 should be activated, it is essential to consider specific conditions. For instance, if the B3:0/0 value is 0 and the timer is still running, overwriting O:4.0 during any scan cycle, then removing XIO B3:0/0 is necessary. Additionally, there seems to be a discrepancy in the Start PB designation between rung 0001 in the main program file and rung 0000 in program file U:3. Can you provide a brief overview of your objectives? As per the current code, certain criteria need to be met: Hold value should always be 0, pressing the Start PB should set Hold to 1 as long as Stop and E-Stop are 0, Hold being 1 should trigger specific actions, including updating O:4.0 and managing a timer. It appears you are aiming to implement a multi-step process involving 5 outputs, each active for 8 seconds before advancing to the next stage. It is crucial that the counter retains its count when stopped, and the position remains unchanged upon restarting. While acknowledging this task is for a class project, it is imperative to include a mov instruction and a jsr in the solution. Assistance may be limited, but it is crucial to seek guidance to avoid mistakes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Joewiza1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To improve efficiency and eliminate the need for unnecessary programming, consider changing the RTO instruction utilizing T4:0 to a TON instruction. This adjustment will ensure that T4:0 resets its accumulator to 0 whenever the Hold value is reset to 0. As a result, Rung 0002 can be removed as the timer will automatically reset on each scan when it reaches its set time (i.e. when T4:0/DN value switches to 1). This change will streamline the process and optimize functionality in the PLC program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Joewiza1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For a better understanding of the TON and RTO instructions, I recommend reviewing their descriptions and timing diagrams. Pay close attention to how the .ACC attribute is affected when the rung condition transitions from 1 to 0, especially when the timer does not reach the .PRE value. These differences are illustrated in the timing diagrams found at the bottom of page 79 for RTO and page 98 for TON.

Please note that the links provided are specific to Logix/Studio 5000, but the functionality of the timers is similar in RSLogix 500. The main distinction is that the 5000 timers use a single timebase of 1ms (0.001s), eliminating the need for a Timebase input parameter. However, this does not alter the core logic and operation of the timers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joewiza1 commented that an RTO is necessary for the program. However, the main purpose of using an RTO is to preserve accumulated time when the condition is false, which you mentioned you do not want in your initial post. If there is another reason you are considering using an RTO, as suggested by @robertmee, the solution may be to reset the accumulated time to 0 when the value of Hold is 0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many users find the Rockwell step instructions to be cumbersome and not as intuitive as a drum. However, with Rockwell software, creating personalized instructions is a breeze. These customized instructions are not only easier to understand and follow, even in the early hours of the morning, but they can also be easily edited and adapted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When moving from step two to the next while dealing with timers in PLC programming, it is crucial to ensure that the timer retains its value even after a restart. One common issue that may occur is the Timer Accumulation (ACC) continuing from the last scan, causing the timer to show an incorrect value. To avoid this, make sure to scan the Reset Timer On (RTO) properly using the Master Control Relay (MCR). By monitoring the status of the RTO and utilizing the Enable (EN) bit effectively, you can prevent the timer from accumulating time incorrectly. By addressing this issue, you can ensure that the timer stays in its correct position and accurately measures time intervals in your PLC program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@Aarwizz has excellently addressed the issue. The Programmable Logic Controller (PLC) operates solely based on the commands it receives, without taking into consideration your preferences. It follows instructions rigorously and without exception. To implement a Stop press/Start press sequence that interrupts the current action and moves to the next one, you must provide the PLC with those specific instructions. Could you kindly share the details of the assignment mentioned in post #12? While we can offer guidance, we cannot provide complete code solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: Why is my RS500 SQO retaining the previous timing after a restart?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of the RS500 SQO retaining the previous timing after a restart can occur due to the way the program is structured and how the RTO instruction is implemented.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I prevent my RS500 SQO from retaining the previous timing after a restart?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To prevent the RS500 SQO from retaining the previous timing after a restart, you may need to review and potentially adjust the logic of your program and how the timing is managed between steps.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Is implementing a reset logic like the one shown in the attached picture an effective solution?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The effectiveness of the reset logic shown in the attached picture can vary depending on the specific details of your program. It's advisable to thoroughly test this approach and consider alternative methods if needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: What is the correct approach to resolving the issue of RS500 SQO retaining previous timing?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The correct approach to resolving the issue of RS500 SQO retaining previous timing involves reviewing your program structure, logic, and how timing is handled to ensure that it resets appropriately during a restart. Consulting the RS500 manual or seeking advice from experienced professionals may also be beneficial.</p>
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
