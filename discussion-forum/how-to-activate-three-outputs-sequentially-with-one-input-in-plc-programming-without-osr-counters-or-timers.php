
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is there a method to sequentially activate three outputs with a single input in PLC programming without utilizing OSR, counters, or timers? I am not enrolled in any formal class but am eager to learn PLC programming techniques. Thank you.">
    <meta name="keywords" content="plc programming, activate outputs sequentially, single input control, no osr, no counters, no timers, learn plc techniques, sequential output activation, plc programming methods, formal class, plc programming without timers, plc programming without counters, plc programming without">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-activate-three-outputs-sequentially-with-one-input-in-plc-programming-without-osr-counters-or-timers">
    <title>How to Activate Three Outputs Sequentially with One Input in PLC Programming Without OSR, Counters, or Timers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Activate Three Outputs Sequentially with One Input in PLC Programming Without OSR, Counters, or Timers | Oxmaint Community">
    <meta property="og:description" content="Is there a method to sequentially activate three outputs with a single input in PLC programming without utilizing OSR, counters, or timers? I am not enrolled in any formal class but am eager to learn PLC programming techniques. Thank you.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-activate-three-outputs-sequentially-with-one-input-in-plc-programming-without-osr-counters-or-timers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Activate Three Outputs Sequentially with One Input in PLC Programming Without OSR, Counters, or Timers | Oxmaint Community">
    <meta name="twitter:description" content="Is there a method to sequentially activate three outputs with a single input in PLC programming without utilizing OSR, counters, or timers? I am not enrolled in any formal class but am eager to learn PLC programming techniques. Thank you.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-activate-three-outputs-sequentially-with-one-input-in-plc-programming-without-osr-counters-or-timers"
      },
      "headline": "How to Activate Three Outputs Sequentially with One Input in PLC Programming Without OSR, Counters, or Timers",
      "description": "Is there a method to sequentially activate three outputs with a single input in PLC programming without utilizing OSR, counters, or timers? I am not enrolled in any formal class but am eager to learn PLC programming techniques. Thank you.",
      "author": {
        "@type": "Person",
        "name": "robertmee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">How to Activate Three Outputs Sequentially with One Input in PLC Programming Without OSR, Counters, or Timers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>29 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">24062</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">183</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is there a method to sequentially activate three outputs with a single input in PLC programming without utilizing OSR, counters, or timers? I am not enrolled in any formal class but am eager to learn PLC programming techniques. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unsure about the intentions behind your second sentence, one way to make three outputs activate from a single input is by connecting the three output coils in parallel. This configuration allows the one input to trigger all three outputs simultaneously.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.robert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like he is interested in creating a triple-state flip-flop instead of the usual two states. Perhaps he could customize one of the numerous flip-flop code samples available on this website. Utilize the search feature with the keyword "flip flop" to find relevant examples.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear visitor, if this task is not part of a school project, what is the reason behind prohibiting the use of a counter or a one-shot approach? If your aim is solely to challenge yourself intellectually, why not attempt it on your own? The response to your query is affirmative.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover numerous methods to achieve this task by exploring the various one-shot alternatives in this forum. Consider utilizing bit shift operations as an example to enhance your approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>panic mode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One solution to your query could be using a drum timer. However, accomplishing what you desire may be challenging or even unlikely to some extent. From my understanding, you aim to activate outputs sequentially after a single input triggers the process. This requires a mechanism to detect when one output sequence finishes to initiate the next one. Alternatively, are you suggesting that each press of a momentary pushbutton should advance the sequence one step at a time? In this scenario, a drum timer or methods like bit shifts, adds and compares, or holding coils and flag bits can be effective. It is crucial to frame your question accurately to receive a satisfactory answer. Also, I remain skeptical about your assertion of not being a student!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear reader, let's avoid devolving this into a personal attack. Educators often impose certain limitations on students' solutions to encourage them to utilize a particular method when tackling problems. If you're looking to develop a practical software application, your inquiry is similar to questioning the possibility of constructing a house without using a hammer. While it is indeed possible, the next logical question to ask is, "Why?"</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it also prohibited to use bitshift operation? It might be worth considering utilizing a lookup table instead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>panic mode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you fail to utilize a one-shot, it is likely that the 'circuit' will cycle through all three states within 100 milliseconds of the button being pressed. By not taking advantage of the available structure elements such as one-shots, timers, and counters, you will miss out on valuable learning opportunities regarding PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rdrast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you want to excel as a programmer, it is essential to delve deep into the world of PLCs. While you may be able to troubleshoot basic PLC programs without a thorough understanding of Boolean operations, a true mastery of programming languages requires a strong foundation in these fundamental concepts. Whether you are utilizing assembly language, VB logical instructions, or ladder logic instructions, grasping Boolean operations is essential for tackling complex programming puzzles.

While it may be easy to utilize common PLC functions like TON timers or Do-Every-Thing instructions, true programming proficiency is demonstrated when you can create intricate sequences like making 3 lights flash in response to a switch closure using assembly language. By embracing challenges set by expert instructors, you can expand your programming skills across various languages and platforms.

It is worth noting that relying too heavily on specialized instructions like WhizBangDoEveryting can limit your programming capabilities. By mastering basic instructions like XIO, XIC, OTE, OTL, and OTU, you are forced to think critically and creatively to solve programming challenges. This approach not only enhances your programming skills but also prepares you to adapt to different programming environments and requirements.

In conclusion, skipping over the basics of programming can hinder your growth as a programmer. Embrace challenges that push you to think outside the box and develop a solid understanding of fundamental programming concepts. Remember, true programming proficiency lies in mastering the basics and continually pushing yourself to tackle new and complex programming tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bill Simpson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Bill Simpson's response was spot on. I used to assign this task to maintenance technicians at the end of their training. It's fascinating how many of them struggle and believe it can't be accomplished using just internal relays, with no set or reset relays involved. This exercise encourages critical thinking and deep involvement with the PLC, as stated by Bill. Let's break it down step by step. When the first input is turned on, the first output stays on. Now, consider what happens when the input is turned off. The input is off, but output 1 remains on. Utilize this to activate an internal relay named "output 1 on ack" and keep it on. When you turn the input on again, think about what changes from the previous cycle. I won't provide you with all the answers, but ponder on it. Whether this is for a school project or not, you'll benefit more by figuring it out yourself rather than being given the solution outright. Remember, the main purpose of this task is to stimulate your critical thinking abilities. Best of luck with it!TIM beerchug</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While the initial setup shows promise, there are some issues to address. Assuming the initial scan is completed, but the Input is not yet activated, Output 1 should be ON while Output 2 and Output 3 are OFF. Once the Input is activated, Output 2 turns ON and Output 1 turns OFF as expected. However, a problem arises when the PLC reaches line 4 - Output 2 is already ON, causing Output 3 to also turn ON and Output 2 to turn OFF again. By rearranging lines 2, 3, and 4, the issue can be somewhat resolved, especially if the Input is set as a one-shot trigger.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you achieve the task you described of activating three outputs one by one without using osr, counter, or timer? Steve's solution is almost correct, but I would suggest a different approach. Instead of involving a first scan, focus solely on the input as the condition. My proposed solution ensures that Output 1 is activated first whenever the input is ON, followed by Outputs 2 and 3 in sequence before starting over. However, it's important to note that due to the PLC scan cycle, the outputs may switch so quickly that it appears as a rapid blink rather than a noticeable progression. To make this logic more practical, consider introducing an additional variable like a timer to control the duration of each output activation. This adjustment will enhance the functionality and usability of the circuit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lancie1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lancie1 requested advice on how to activate three outputs sequentially with one input signal, keeping each output on until the next one is activated, all without relying on OSR, counters, or timers. A user named "Guest" clarified the query for better understanding. Instead of using SET and RESET relays, Guest suggested utilizing internal relays for the task. Let's simplify and optimize the process by following this guidance. Cheers!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I must confess, I was eager to share some code but anotherguest beat me to it...cheers to that!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>panic mode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for a quick solution for programming an Allen-Bradley (AB) PLC, here's a simple method to achieve your desired outcome. Take note of the importance of organizing your instructions correctly to ensure seamless execution.

To begin, replace the following addresses with the corresponding names:
- B3:0/0 → "Input"
- B3:0/13 → "Output 1"
- B3:0/14 → "Output 2"
- B3:0/15 → "Output 3"

Additionally, B3:0/1 and B3:0/2 will be used for creating a custom one-shot timer functionality. 

This method not only demonstrates how to implement a roll-your-own one-shot but also highlights the significance of proper instruction sequencing. It’s a straightforward approach for those learning to program an AB PLC. - Marc</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>msinclair</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Optimizing the performance and efficiency of a system often requires the use of two main lines of code. By utilizing accumulator functions and employing operation mathematics such as addition, subtraction, multiplication, and division, engineers can determine the sequence for controlling various components like motors, soft starters, and activation selections. In some cases, output limitations can be managed using masks and resetting variables to zero when needed. These techniques are essential for achieving maximum efficiency and performance in any system. Always aim for continuous improvement and innovation to ensure the best possible outcomes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dandrade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree with Bill that the guest's problem could have been easily resolved using relay logic. If everyone acknowledges this fact, then basic logic gates such as AND, NAND, OR, and NOR can effectively address the issue. I won't provide the guest with the answer immediately; I encourage him to think it over. By considering a setup where a single input triggers output 'A' and incorporating a self-hold circuit for 'A' with an inverted input, a new set of conditions can be established. For instance, when the input goes high next time, output 'B' will go high while output 'A' goes low. Approach the problem in this manner, "guest." A Programmable Logic Controller (PLC) essentially functions as a logic controller. - Jim.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JVPSUK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Whether you prefer a step-by-step approach or making quick, impulsive decisions, I have a solution for you. Instead of using PLC control, I recommend utilizing control relays. By understanding Relay Diagram Circuit, specifically step-by-step or impulse switch applications, you can easily resolve your issue. Even if your process involves numerous steps, such as 10, 30, or even 50, you can control multiple outputs with just one input. While this may require more control relays, it is a cost-effective solution compared to investing in timers or counters. If you'd like to see an example, I'd be happy to provide some visuals for guidance in the future. Reach out if you need further assistance. - Mechatronics RIT, Nonthaburi Campus.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Platootod</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear friends,

I have posted some example pictures for you to use as a guide for this question. Please note that these are not the definitive answers but rather a helpful reference. This circuit was simulated using the constructor software available at www.koldwater.com. 

When you press switch S2 for the first time, capacitor C1 will turn on. Pressing S2 a second time will turn on C2, a third time for C3, and a fourth time for C4 (C4 is not a bomb, just to clarify). 

I hope that this guidance can be applied to answer your question effectively.

Best regards,
Platootod
Mechatronics Engineer at Rit.Nonthaburi</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Platootod</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When you press the Sw S2 (fifth) button, switches c1 to c4 will turn off. Attention, valued guest! You have the ability to analyze the circuit and adjust it according to your specific requirements. If additional steps are necessary and the contact of a1 (control relay) is insufficient, simply add more parallel a1 no. 2, a1 no. 3, and so on. Sawasdee Krub, Platootod.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Platootod</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here's an alternative method to achieve your goal....</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sleepy Wombat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A common query often searched on search engines is how to activate three outputs individually using a single input in PLC programming. The goal is to keep one output activated until the next one is triggered, all without utilizing osr, counter, or timer functions. This method is particularly useful for individuals seeking to learn PLC programming on their own.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kopeley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The discussion took a turn from "Not doing your homework for you" to providing a myriad of strategies for completing your assignments. It appears that the original poster has discovered the power of motivating engineers to assist by challenging their knowledge and skills.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In summary, this thread dates back 20 years and upon careful review, it appears that the original poster intended for the successive rising edges of the input to trigger each step of the sequence. The implicit nature of these rising edges can be inferred from the use of the word "again" in post #7. The one-shot logic presented in the first step of @msinclair's post #20 is crucial to the solution, making it relatively straightforward. While the Start/Stop Circuit pattern is commonly discussed when explaining relay ladder logic, the one-shot logic is equally fascinating. Perhaps the reason for the emphasis on the Start/Stop Circuit is due to the fact that most PLCs come with a built-in one-shot function, eliminating the need to build one from scratch.

For the remaining 30% of the scenario, where "again" indicates that the input remains active for the next scan cycle, the sequence will progress one step per scan cycle (or after a set number of scan cycles if additional delay logic is incorporated), causing the lights to change states too quickly to observe. This leads me to believe that the 70% likelihood lies in the interpretation of rising edges. It is evident from the responses that many others also recognize the ambiguity in the problem statement, which unfortunately remains unresolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Wow, what a surprise to see such an old post being revived!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you wish to continue seamlessly, just follow the pattern: 1, 2, 3, 1, 2, 3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I look forward to reuniting with everyone again in two decades.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I must have missed the post's date - they're likely retired by now.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>idiotsecant mentioned: "See you all in another two decades, God willing!" Looking forward to a reunion in 20 years!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Can outputs be activated sequentially with a single input in PLC programming without using OSR, counters, or timers?
   - Yes, there are alternative methods to achieve sequential activation without relying on OSR, counters, or timers in PLC programming.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are some approaches to sequentially activate multiple outputs with a single input in PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some techniques include utilizing latches, state machines, or shift registers to achieve sequential activation based on a single input signal.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there resources available for self-learning PLC programming techniques?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there are various online tutorials, forums, and resources that can help individuals learn PLC programming concepts and techniques independently.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I enhance my understanding of PLC programming without formal classes?</h4>
<p class='text-muted'><strong>Answer:</strong> - Engaging in practical projects, experimenting with PLC software simulations, and seeking guidance from online communities can help improve your PLC programming skills without formal classes.</p>
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
