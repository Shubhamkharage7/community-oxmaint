
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am a beginner in ladder logic programming. I have successfully written a code for a machine I am working on using the Xinje PLC XC3-32RT-E. However, I am facing an issue where the program runs once and then stops, and I am having difficulty creating a loop">
    <meta name="keywords" content="xinje plc programming, xinje plc troubleshooting, looping issue resolution, ladder logic programming, xinje plc xc3-32rt-e, plc programming for beginners, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-looping-issue-in-xinje-plc-programming">
    <title>Troubleshooting Looping Issue in Xinje PLC Programming | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Looping Issue in Xinje PLC Programming | Oxmaint Community">
    <meta property="og:description" content="Hello, I am a beginner in ladder logic programming. I have successfully written a code for a machine I am working on using the Xinje PLC XC3-32RT-E. However, I am facing an issue where the program runs once and then stops, and I am having difficulty creating a loop">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-looping-issue-in-xinje-plc-programming">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Looping Issue in Xinje PLC Programming | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am a beginner in ladder logic programming. I have successfully written a code for a machine I am working on using the Xinje PLC XC3-32RT-E. However, I am facing an issue where the program runs once and then stops, and I am having difficulty creating a loop">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-looping-issue-in-xinje-plc-programming"
      },
      "headline": "Troubleshooting Looping Issue in Xinje PLC Programming",
      "description": "Hello, I am a beginner in ladder logic programming. I have successfully written a code for a machine I am working on using the Xinje PLC XC3-32RT-E. However, I am facing an issue where the program runs once and then stops, and I am having difficulty creating a loop",
      "author": {
        "@type": "Person",
        "name": "tharinduk"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">Troubleshooting Looping Issue in Xinje PLC Programming</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>32 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2300</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">197</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am a beginner in ladder logic programming. I have successfully written a code for a machine I am working on using the Xinje PLC XC3-32RT-E. However, I am facing an issue where the program runs once and then stops, and I am having difficulty creating a loop in the program. If needed, I can share the code with you and provide more details about the machine. Could you please suggest a solution on how to proceed? Your help is greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are multiple ways to implement looping in a program, such as using a for-next loop or a conditional jump. Although I have not personally worked with this particular programmable logic controller (PLC), it appears to be very similar to Mitsubishi PLCs. However, upon reviewing the manual, I did not find the "break" instruction commonly found in Mitsubishi PLCs for exiting loops. In cases where the loop is variable, the CJ (conditional jump) function would need to be utilized. Additionally, I was unable to locate information on the Indirect address or index registers (referred to as Z in Mitsubishi), which allow for offsetting variable addresses and can be incremented. If possible, it would be helpful to share a pdf of the code for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Mitsi code provided does not seem to have a break function for variable for/next loops, nor does it show how to indirectly reference variables like Mitsi. Nevertheless, attached is some example code for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that they provided Mitsi code, but after a quick check of the manual, it wasn't clear if the for/next loop has a break function for variable loops. There was also confusion on how to indirectly point to variables like Mitsi. However, attached is some code that they use. Thank you, Parky, for your response. I truly appreciate it.

Although I have managed to create a loop, I am facing another issue. But before discussing that, let me briefly explain my project. The purpose of this machine is to cut garment panels into two parts. The inputs and outputs are as follows:

Inputs:
X0 - Emergency
X1 - Selector Switch
X2 - Home (Proximity) Sensor
X3 - Photo Electric Sensor 1
X4 - Photo Electric Sensor 2
X5 - Reed Switch

Outputs:
Y0 - Motor Pulse
Y1 - Motor Direction
Y2 - Pneumatic Cylinders
Y3 - Scissor

My program involves actuating the pneumatic cylinders to hold the garments and then cutting them. However, I am facing an issue with the loop functionality. It successfully moves the scissor forward and backward once, but fails to return in the second loop. All other functions work correctly. I suspect the issue lies in resetting the motor direction and pulses. Can you assist me with this issue? I have attached a PDF and the Xinje PLC program for reference. Thank you for your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the motor control instructions for the Mitsubishi PLC, some differences can be observed compared to other models. For instance, the STOP function seems to be missing. The use of the STL function, which is essentially a flow, raises questions as it is not typically used in cyclic programs. To address this, I prefer using an integer variable like Seq_Number (D20) to execute each step in the ladder logic program.

For example, let's consider a sequence breakdown:
Seq. 0 = IDLE
Seq. 10 = Start button pressed, waiting for part
Seq. 20 = Part detected, clamping part
Seq. 30 = Clamped part ready to move motor
Seq. 40 = Motor moving forward
Seq. 50 = Motor reaches position, stops
Seq. 60 = Part stamping
Seq. 70 = Returning motor
Seq. 80 = Unclamping
Seq. 90 = Unclamped, moving to Seq. 10

By incrementing steps in multiples of 10, flexibility is maintained for adding extra steps without disrupting the sequence flow. Additionally, utilizing symbols for memory bits and adding ladder comments can enhance the comprehensibility of the program for future reference.

To illustrate the concept, consider a simple two-way traffic light system controlled by a sequence. While this example uses timers, a practical implementation would involve sensors and timers to transition between states efficiently. It is advisable to incorporate detailed documentation to facilitate understanding for others and future revisions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the discussion, tharinduk noted conflicting information regarding motor direction in the programming. The program indicates Y1 as the Motor Direction, while comments in the PDF point to Y6. This inconsistency makes it challenging to comprehend the interactions between contacts and coils throughout the program.

@parky has proposed a more efficient approach by suggesting the use of integer steps for easier programming. Each output can be controlled independently on a single rung using a single coil based on the step number value. For example, specific actions like extending clamp cylinders or running the motor can be triggered at designated step numbers. This method allows for better organization of output control and logic maintenance, resulting in a clearer and more readable program structure. By utilizing integer step numbers and coils, the program becomes more streamlined and easier to manage compared to using SET and RST instructions for output control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
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
            <p>For those looking to manage state tracking with bits instead of integer step numbers, the canonical Step pattern is a great option. This pattern utilizes seal-in (latch) logic and unconditional coils, simplifying logic organization by consolidating all step logic onto one rung. This approach improves readability and comprehension, ensuring ease of understanding even after a significant amount of time has passed. By utilizing bits in this pattern, similar functionality to SET/RST logic is achieved, as writing a value to an integer is equivalent to SET/RST instructions for multiple bits. The sealed-in nature of each step's bit in the canonical Step pattern mirrors the behavior of SET/RST instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the code provided by tharinduk, there seems to be an issue with the scissor not returning back after completing a loop. While all other functions are working correctly, the motor is not being actuated in the second loop. This could potentially be related to resetting the motor direction and pulses. One suggestion would be to consider setting the M9 value to 1 instead of resetting it to 0 in order to maintain the original state from the first loop.

Additionally, the M4 value is set to 1 at address 107, which then sets the M5 value to 1 at address 111. However, the M4 value is never reset to 0, causing the M5 value to remain at 1 on subsequent scan cycles. This can result in the M5 value being continuously set back to 1, making it important to review the logic behind the SET/RST operations throughout the program.

Understanding and troubleshooting SET/RST logic can be challenging, especially when these operations are scattered throughout the code. It is a good exercise to address this issue to gain a better understanding of the complexities involved in this approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing the SET/RST technique, we frequently encounter spaghetti code in our programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @tharinduk, are you anticipating that the code will continuously and autonomously execute numerous cuts, with each new material piece activating X3 and X4 garment sensors to start a new cut? Or should the X1 button be pressed individually for each cut?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For those transitioning from different coding languages, it's important to remember that PLC programming inherently operates in a loop structure. Each line of code you write is contained within this loop. While some situations may warrant additional nested loops within the logic, the primary PLC loop must finish within the watchdog time to avoid errors. These guidelines are applicable across various PLC systems, although my knowledge is limited to xinje.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @Abouda, can you clarify the relationship between X2 and X5 for me? It seems like X2 has a value of 1 when the cylinders are in the retracted (Home) position, and 0 otherwise. On the other hand, X5 is 0 when the cylinders are fully extended (holding down the garment), and 1 otherwise. Am I understanding this correctly?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out this annotated code with some enhancements. It appears that the issue you encountered may be due to M4 not being reset after the initial cycle of extend, cut forward, move reverse, and retract. For better clarity, I have updated the attachment to a PDF format as large images may be reduced in resolution on the forum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky pointed out a discrepancy in the instructions for the motor control in the Mitsubishi system, specifically the lack of a STOP function. Parky prefers using an integer variable, such as Seq_Number (D20), to sequence each step in the program. For example, Seq. 0 is IDLE, Seq. 10 is Start pressed waiting for part, and so on in increments of 10. This method allows for easy insertion of additional steps without rearranging the sequence. Additionally, Parky suggests using symbols for memory bits and ladder comments for better clarity and future reference. A simple traffic light system example is provided to illustrate the concept of sequencing and the use of timers or sensors in a machine's operation. It is advised to include more documentation for better understanding and ease of maintenance in the future. Thank you, Parky, for the detailed explanation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a revised version of the code provided by drbitboy, some enhancements and explanations have been included. It seems that the issue you were facing was due to M4 not being reset after the initial cycle. Thanks to drbitboy's guidance, the program now loops successfully. 

The next task involves homing the linear guide attached to the motor upon power-up. When power is restored to the machine and the emergency X0 button is released while selector switch X1 is activated, the linear guide must return to its home position before executing any other commands. Although a separate program for motor homing has been created successfully, integrating it with the main program is proving challenging. The revised bit numbers in the code will be included in the attached PDF files for both programs.

Some further clarifications: 
1. The cut is triggered when X3 and X4 are activated simultaneously, with X1 serving as an essential safety feature alongside the emergency X0 button. 
2. The correct motor direction control pin is now Y6, as opposed to the previously mentioned Y1. 
3. While X2 and X5 do not have a direct relationship, they are indirectly linked within the same program.

Your assistance with this integration is greatly appreciated. Thank you in advance for your help and answers to the questions provided. Have a wonderful day!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tharinduk mentioned that he is facing some difficulties inserting code into the main program. This is a common issue with SET/RST and spaghetti code practices - understanding how the code works can be challenging without a clear structure in place. This makes it hard to add new steps, such as homing the linear guide, without risking code breakage. 

One approach, suggested by Parky, is to assign a value of 10 to a step if the step value is 0 and conditions for step 0 completion are met. By following this approach, you can easily insert a new homing step (step 5) between steps 0 and 10 to home the linear guide. This way, step 5 will transition to step 10 when the guide is at home, instead of transitioning directly to step 10.

If you've learned the lesson to avoid using SET/RST/Spaghetti code, consider refactoring your code using Parky's approach or the Step pattern. Refactoring will simplify the code significantly and make it more manageable.

In the past, we tackled a spaghetti code problem and spent a considerable amount of time making the code more understandable. While it was a challenging puzzle to solve, I have other commitments and won't be able to do it again. If you choose to stick with the SET/RST/Spaghetti approach, remember to add comments to describe each rung's process, label every bit (especially intermediate M bits), rearrange the rungs for better organization, and try to fully understand the program on your own. 

Good luck with your coding efforts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this article, we explore an approach similar to the Step pattern found on popular Patterns website. While I personally prefer@parky's integer step method, I leave it up to him to decide. The main focus here is on the concept of "separation of concerns": one routine, STATE_EVAL, manages the step logic, which is the more complex aspect of the process. By consistently applying the same canonical PLC pattern, the logic becomes more transparent and easier to follow, eliminating any confusion. Another routine handles the actions such as triggering the pulse generator and activating the reverse output. This simplifies the process and enhances clarity, as it separates the actions from the step logic, making the latter much more comprehensible. Although I implemented this for a MicroLogix - with specific coding details omitted here, such as how the PULSR equivalent is coded - the principles can easily be applied to the Xinje environment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy shared an approach reminiscent of the Step pattern from the popular Patterns website. There was a typo found in the PDF in the LAD 3 STATE_EVAL routine discussed earlier. Specifically, in Rung 0000, it should be noted that the M8002 (First Pass) bit needs to be checked using a Normally Closed contact, not a Normally Open one. For more details, click to expand the original post.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that he noticed some discrepancies in the motor instructions between different brands, such as the absence of a STOP function in Mitsi. He questioned the use of STL as a flow, as he prefers to use integer variables for sequencing. For instance, he utilizes a variable like Seq_Number (D20) to create a flowchart with steps like Idle, Start Pressed, Part Detected, Clamping Part, Moving Motor, Stamping Part, and more. This approach allows for easy insertion of additional steps without reorganizing the sequence. Parky also demonstrated a simple two-way traffic light system using timers, highlighting the importance of utilizing sensors and timers in real-world applications. He recommended using symbols for memory bits and ladder comments for better comprehension by others and for future reference. 

In response, a user expressed uncertainty about how to incorporate integers and sequences in Xinje PLC programming. Despite reviewing the manual extensively, they were unable to find any relevant information regarding these features in Xinje PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tharinduk expressed confusion regarding the availability of integers or sequences in the Xinje PLC program. Despite reviewing the manual, there seems to be no information on these features. Hi, @drbitboy, could you please share the programming tool you are utilizing? The simplicity of it is apparent, although it may be challenging for a newcomer like myself to grasp. Xinje appears to be a complex system. I am struggling to comprehend concepts like 'integer', 'sequence', 'state', 'eval', 'no spaghetti code', 'refactor', 'step', 'pattern', and 'JSR' as mentioned by you and @parky. I am unsure how to implement these in my program as they are not covered in the Xinje manual or its programming software. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The programming tool being used here is the IDE for an Allen-Bradley software program called RSLogix Micro Starter Lite. This IDE is specifically designed for programming MicroLogix PLCs. While it may seem complex at first, similar to the Xinje IDE, it can be understood by breaking down each individual tool or instruction and learning its functionality.

In the world of PLC programming, a program serves as a model of the industrial process by reading inputs and controlling outputs. This model is often referred to as a "state machine." For example, integers in Xinje are called "words" and are loaded into word registers for program execution. The concept of "sequence" involves performing unique operations in a specific order.

"State" and "step" refer to the PLC model's status during each operation, with each operation having its own unique state or step number. The goal is to have the PLC in only one state at a time, controlled by a designated state register. The process of evaluating and transitioning between states is crucial for efficient program execution.

"Spaghetti code" is a term used to describe convoluted and tangled program logic that is difficult to follow. Refactoring involves restructuring a code to make it more readable, efficient, and easier to maintain without changing its functionality. By simplifying complex logic and unnecessary intermediate steps, a program can be optimized for improved performance and debugging.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the second part of the process, it is important to note that each state has two sections: a transition condition and actions to be taken. By breaking down the program into two routines, namely the STATE_EVAL routine for evaluating transition conditions and the ACTIONS routine for evaluating actions, the code becomes easier to read, understand, and debug. This separation allows for independent operation of the transition conditions and actions, unlike in traditional code where they are intertwined, leading to spaghetti code that is difficult to comprehend.

For example, when considering a request to ensure the linear guide is homed before initiating the pre-extend cylinders delay, having a structured State list with specific states for each operation makes it clear where to insert the new "Ensure guide is homed" state. By following a logical sequence like the State list, it becomes simple to integrate the logic for the new state into both the STATE_EVAL and ACTIONS sections of the program. This is why it is advised to number steps in increments of 10 or more, as it facilitates the addition of new steps when necessary.

In adapting a Xinje program to resemble a more structured code similar to RSLogix, it is possible to refactor the code into one main program without subroutines, utilizing well-commented sections for clarity. While the Xinje programming software may not explicitly mention this approach, the basics of contacts, coils, CALL, and SRET instructions can be leveraged to achieve a similar programming structure with clear organization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy explained that each state in a program has two sections: a transition condition and actions to perform. In his program, he has two routines: the STATE_EVAL routine for evaluating transition conditions and the ACTIONS routine for evaluating actions. Each routine is evaluated once per scan cycle. By implementing a "state machine" in this way, the code becomes easier to read, understand, and debug. In contrast, traditional code mixes transition conditions with actions, leading to spaghetti code that is difficult to manage.

By numbering states in increments of 10 or more, it becomes easier to insert new steps as needed for additional capabilities. While Xinje programming may not support the same approach as RSLogix, it can still be refactored into a main program with well-commented sections. The Xinje likely has similar CALL and SRET instructions for implementing subroutine-like behavior.

A user attempted to apply drbitboy's methodology to their Xinje program but found challenges due to the system's limitations. Despite trying to incorporate a homing program into the main program, only the homing program executed successfully. It is suspected that incorrect usage of 'END' and 'FEND' instructions, as well as the placement of M8002, may be causing issues. The homing program operates such that when certain sensors are triggered, a cylinder lowers, the motor returns to a home position, and then retracts once homed. The user is seeking assistance on how to integrate this process correctly with the main program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tharinduk expressed gratitude to @drbitboy for their detailed explanations, noting the kindness and appreciation for the assistance. Despite attempting the suggested approach, it was found impractical in Xinje due to its lack of an address system like B3:0/0. While a screenshot was provided for reference, the challenge lies in aligning it with Xinje's system. The difference in addressing syntax is minor as a memory bit functions the same way, with values of 0 or 1. One can use M1 for B3:0/0, M2 for B3:0/1, and so on, without significantly altering the program. While the coding techniques may vary slightly, adapting the logic to Xinje, especially with existing timers in place, should be feasible. Integrating the Homing logic into the main program may present challenges, requiring patience and perseverance to navigate through the complexity effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of memory addressing syntax, the details are not particularly crucial - a memory bit will consistently hold values of either 0 or 1. This means that whether you use M1 for B3:0/0 or M2 for B3:0/1, the core functionality of the program remains unchanged. What sets my coding approach apart is the utilization of explicit latches with seal-in branches and writing bit values with coils rather than using SET/RST bit instructions. While there are slight variations in timer instructions, the process of porting to Xinje should be relatively seamless given the existing timers in your program.

When it comes to integrating Homing logic into your current main program, I can only offer best wishes and acknowledge the complexity of the task. It may require more patience than I can provide to navigate through the intricate web of code. Thank you for your continued support and have a fantastic day!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing subroutines to call other programs, it is essential to adhere to a specific procedure. Begin with a standard program that includes an END instruction. At the conclusion of your main program, add a FEND instruction. Place the subroutines after this, following each with an SRET instruction. Remember to position the END function after all the subroutines to ensure proper execution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tharinduk commented: @drbitboy Got it. Appreciate your continued support. Wishing you a fantastic day! 

PLCs follow a left-to-right, top-to-bottom evaluation process for user programs. This means that the program you've written, containing the code M8002 M500 -|↑|-----(S)--- X2 -| |------[CJ P1]-- --[FEND]---- [P1] ... [SRET] at the beginning, will not assess any additional rungs beyond [SRET] if X2 equals 1 or beyond [FEND] if X2 equals 0. It's important to note that [FEND] and [END] instructions function similarly; [SRET] acts as an [END] when reached during the main program but also has the ability to return to its original call address with the [CALL] instruction. Therefore, it's recommended to relocate [FEND] and [P1]...[SRED] to the end of the main program. Please refer to the image attached for visual guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to ensure successful compilation, it is essential to include the END instruction after the subroutines, as depicted in the image provided. It may not be immediately clear how to place the pointer in the left-hand box within your IDE. However, a convenient method in Mitsubishi software is to add it as a rung comment and then remove the comma to convert it into a pointer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In software development, subroutines play a crucial role as they allow programmers to call other programs. To properly incorporate subroutines into your code, follow a specific procedure. Begin with a standard program containing an END instruction. Then, insert a FEND instruction at the end of your main program before adding the subroutines with a SRET instruction for each one. Remember, the END function should come after all the subroutines. Thank you for bringing this to my attention. I will investigate further and inform you of the results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of PLCs, it is important to remember that user programs are evaluated in a specific sequence: left-to-right and then top-to-bottom. This means that any program you write must follow this flow in order to achieve the desired outcomes. For example, if X2's value is 1, the evaluation process will stop after the [SRET], and if X2's value is 0, it will stop after the [FEND]. It is worth noting that the [FEND] and [END] instructions serve the same purpose. Additionally, the [SRET] instruction offers the unique ability to return to the original routine address when called with the [CALL] instruction. To optimize your program, consider placing the [FEND] and [P1]...[SRET] sections at the end, after the Main Program. For a clearer visual understanding, refer to the attached image. Your feedback on this adjustment is appreciated. Please note that I will not have access to the machine tomorrow as I am working from home, but I will apply these changes and provide an update on the results in the next two days. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully completed my main program and homing program using STL flows, which I have included below. The main program is in STL 2, while the homing program is in STL 1. When home sensor X2 is activated, the main program (S2) runs continuously without any issues. When X2 is not activated, the homing program (S1) moves the linear guide with the scissor powered by the stepper motor. However, there is a minor issue that I believe is the final piece of the puzzle. S2 needs to be triggered by S1 after homing, but currently, S2 will not run until I restart the machine. I have attempted to use memory bits and timers without success. If you have any ideas on how to connect S2 after S1, please share them with me.

I apologize for not immediately adapting to your method, as I am pressed for time due to a deadline I need to meet. Understanding your RSLogix program and integrating it with Xinje IDE will require some time, which I am currently struggling to find. I have printed out the program you provided and plan to transfer it to Xinje when I have free time in the upcoming days.

By the way, thank you for introducing me to rubber duck debugging. I now have a cute panda mascot on my laptop lid whom I explain my code to when I encounter difficulties, and it has proven to be very helpful in the past few days.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear @parky, 
I have made the necessary modifications to my program based on your instructions. I have attached the updated pdf version for your review. Your feedback is greatly appreciated when you have a moment to spare. Thank you for your guidance.
@drbitboy, 
I have the opportunity to refactor the program using a more structured programming approach as you had previously taught me. I plan to work on this over the upcoming long weekend at my workplace. Starting Monday, I will begin uploading the revised program to the cutter machines and making further adjustments. While I will attempt to troubleshoot any issues on my own, I may seek your expertise if needed. Thank you for your ongoing support. Have a wonderful day!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tharinduk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reviewing your code, I noticed a discrepancy with the presence of two FENDs after the call to P2. It is recommended to have only one FEND after the call to P2 and not to include an END instruction after the FEND. The END instruction should come after the two subroutines, unless your PLC functions differently. This setup may not work in Mitsubishi PLCs. The correct sequence should be as follows: 

Call P1
Call P2
FEND

P1:
- Code for P1
- SRET

P2:
- Code for P2
- SRET

I have concerns about the logic of your program. For instance, in P1, you are using M8002 (first pulse bit) which is typically the run bit N/C in Mitsubishi PLCs. This means M3 will only be on for one scan. Additionally, the comment on M9 regarding a delay is unclear since it is not linked to a timer. I will attempt to run the program, but I am skeptical of its success.

Furthermore, I question the necessity of calling two subroutines every scan. If the calls are conditional, outputs within the routines may stay on if the routine enable is false. It may be more effective to incorporate the logic directly into the main program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why does my Xinje PLC program run only once and then stop?</h4>
<p class='text-muted'><strong>Answer:</strong> This issue could be related to the lack of a proper loop structure in your program. Without a loop, the program may execute only once and then halt. Ensure that your program contains a looping mechanism to keep it running continuously.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I create a loop in my Xinje PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> To create a loop in ladder logic programming for Xinje PLC, you can use specific programming constructs like timers, counters, and jump instructions. By implementing these elements effectively, you can establish a loop that allows your program to run continuously.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can you provide guidance on troubleshooting looping issues in Xinje PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> When troubleshooting looping problems in Xinje PLC programming, it's essential to check for errors in your ladder logic code that may be preventing the loop from functioning correctly. Additionally, verifying the scan cycle and ensuring proper program execution flow can help identify and resolve looping issues effectively.</p>
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
