
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Having trouble getting a basic Structured Text example to work on my FX3U clone and would greatly appreciate some assistance. I have successfully created a ladder project that functions as expected, but I am encountering difficulties with an equivalent ST program. The program is straightforward: 1. Initially sets DAC">
    <meta name="keywords" content="fx3u clone troubleshooting, st program issues, edge detection problems, gx works2 troubleshooting, structured text example errors, plc ladder project, analog input sampling">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-st-program-for-edge-detection-in-gx-works2">
    <title>Troubleshooting ST Program for Edge Detection in GX WORKS2 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ST Program for Edge Detection in GX WORKS2 | Oxmaint Community">
    <meta property="og:description" content="Having trouble getting a basic Structured Text example to work on my FX3U clone and would greatly appreciate some assistance. I have successfully created a ladder project that functions as expected, but I am encountering difficulties with an equivalent ST program. The program is straightforward: 1. Initially sets DAC">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-st-program-for-edge-detection-in-gx-works2">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ST Program for Edge Detection in GX WORKS2 | Oxmaint Community">
    <meta name="twitter:description" content="Having trouble getting a basic Structured Text example to work on my FX3U clone and would greatly appreciate some assistance. I have successfully created a ladder project that functions as expected, but I am encountering difficulties with an equivalent ST program. The program is straightforward: 1. Initially sets DAC">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-st-program-for-edge-detection-in-gx-works2"
      },
      "headline": "Troubleshooting ST Program for Edge Detection in GX WORKS2",
      "description": "Having trouble getting a basic Structured Text example to work on my FX3U clone and would greatly appreciate some assistance. I have successfully created a ladder project that functions as expected, but I am encountering difficulties with an equivalent ST program. The program is straightforward: 1. Initially sets DAC",
      "author": {
        "@type": "Person",
        "name": "mikeromeo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-30",
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
                <h1 class="text-white">Troubleshooting ST Program for Edge Detection in GX WORKS2</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>30 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1524</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">480</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Having trouble getting a basic Structured Text example to work on my FX3U clone and would greatly appreciate some assistance. I have successfully created a ladder project that functions as expected, but I am encountering difficulties with an equivalent ST program. The program is straightforward:

1. Initially sets DAC output 0 to full scale upon startup by detecting a rising edge on special register M8002 (utilized as a 10v reference for a potentiometer).
2. At the rising edge of the 10ms clock register M8011, it samples analog input channel 1 (linked to the potentiometer) and saves the value in D0.
3. Upon the falling edge of M8011, the value in D0 is transferred to analog output 1.
4. During each scan cycle, the Y0 relay is activated if the value in D0 exceeds half scale, otherwise it is deactivated.

The initialization of DAC channel 0 is functioning properly, but the detection of rising/falling edges on M8011 is not functioning as intended – the related code blocks are not being executed. I have attempted using LDP/LDF and PLS/PLF instructions without success. Assistance required!

Updated Code:
(* Check for startup condition *)
IF LDP(TRUE, M8002) THEN
(* Set DAC channel 0 to full scale output. THIS PART WORKS! *)
D0 := HFFF;
WR3A(TRUE, K0, K0, D0);
END_IF;

(* Check for clock rising edge *)
(* IF LDP(TRUE, M8011) THEN *)
PLS(M8011, M0);
IF M0 THEN
(* Read ADC channel 1. NEVER REACHES THIS POINT! *)
RD3A(TRUE, K0, K1, D1);
END_IF;

(* Check for clock falling edge *)
(* IF LDF(TRUE, M8011) THEN *)
PLF(M8011, M1);
IF M1 THEN
(* Write ADC result to DAC channel 1. NEVER REACHES THIS POINT! *)
WR3A(TRUE, K0, K1, D1);
END_IF;

(* Set/Clear Y0 output based on ADC channel 1 value *)
Y0 := (WORD_TO_INT(D1) > H7FF);</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe there is a difference in the use of D1 and D0 between the ladder and ST versions of the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Using IF statements may seem strange at first when working with pulse types in Structured Text (ST). If you do not have a PLC clone available to test the analogues, you can use the pulse types like this. It seems like you may be using GXW2 or GXDeveloper. If you encounter the ST function grayed out in GXDeveloper, you can switch to GXworks2. In GXworks2, you can use the pulse bit in the RD3A function instead of using IF statements. Here is an example of how to implement this: PLS(M8011, M3); ADD_E(M3, 1, D1, D1); PLF(M8013, M6); ADD_E(M6, 2, D3, D3); RD3A(M6, K0, K1, D10); Just a quick note, you mentioned that you are using GXW2, so there is no need for the K suffix.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper initialization, there is no need to use LDP as M8002 already provides the initial pulse. When M8002 is true, the DAC channel 0 is set to full scale output successfully. Moving on to checking for the clock rising edge, consider using M8012 instead of M8011 as the 10 ms delay might be too fast for certain Chinese clones. Next, read ADC channel 1's value, but it seems to be a point of issue as the program never reaches this part. Following this, write the ADC result to DAC channel 1, which also seems to be unresolved. Finally, based on the value of ADC channel 1, Y0 output is set or cleared accordingly. Please note that this program has not been tested but was written based on your provided code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why should you opt for LDP and LDF over PLS and PLSF? Furthermore, the LDP on M8002 (First-pass bit) seems unnecessary as M8002 is always a one-shot. Nonetheless, this configuration should be effective; I have also reverted the D0 and D1 to align with the ladder diagram example.

Code:
(* Store instantaneous value of a 100Hz (10ms) clock in buffer *)
M0 := M8011;

(* Check for startup condition *)
IF M8002 THEN

    (* Prevent first-pass scan cycle from detecting a rising edge *)
    M1 := M0;

    (* Set DAC channel 0 to full scale output. This adjustment is successful! *)
    D1 := HFFF;
    WR3A(TRUE, K0, K0, D1);

END_IF;

(* Detect clock rising edge *)
IF M0 AND NOT M1 THEN
    (* Read ADC channel 0 *)
    RD3A(TRUE, K0, K1, D0);

END_IF;

(* Detect clock falling edge *)
IF M1 AND NOT M0 THEN

    (* Write ADC result to DAC channel 0 *)
    WR3A(TRUE, K0, K1, D0);

    (* Adjust Y0 output based on ADC channel 0 value *)
    Y0 := (WORD_TO_INT(D0) > H7FF);

END_IF;

(* Store current clock signal value for edge detection in the next scan cycle *)
M1 := M0;</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You can disregard the TRUE bit in the RD3A and simply utilize the pulse bit M8002 instead. This adjustment will effectively streamline operations and enhance performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn how to incorporate specific functions such as ANDP into another function easily. Instead of using PLS(M8011, M0), you can streamline the process by embedding the function like this: RD3A(ANDP(TRUE, M8011), 0, 1, D100). By integrating the ANDP function into the code, you can simplify tasks like reading and writing analog signals. Give it a try on your FX3U controller by adapting the code to suit your setup, replacing analog read/write functions with appropriate alternatives if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We are grateful for all the assistance received in this fantastic community!drbitboy mentioned that there is a swap between the use of D1 and D0 in the ladder and ST versions of the code. This change does not appear to affect the overall operation.

parky expressed some concerns regarding the use of IF statements. It is anticipated that additional code will be added within the IF blocks, including mathematical operations on the ADC values.

goghie shared a suggestion to check the start-up condition and made improvements based on the feedback provided. While trying to enhance the program, different registers were tested for better performance, but the program did not yield the desired results.

In response to drbitboy's inquiry about using LDP and LDF instead of PLS and PLSF, the original poster explained that the former options were initially considered but replaced with the latter when issues arose. Despite implementing suggested changes for edge detection, the program still did not function correctly.

The provided video demonstrates the challenges faced with the FX3U clone ST program. Despite efforts to update registers and optimize clock settings for monitoring, the program did not deliver the expected outcome.

The generated instruction list highlights the steps performed by the program, emphasizing the attempt to read analog input 0 and transmit the result to analog output 0. This detailed breakdown provides insight into the program's execution and potential areas for improvement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By incorporating the instructions "LDI M8002" and "CJ P2051," the PLC application consistently transitions to line 22, specifically to address P2051, with the exception of the initial scan period.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Below is the code snippet I shared for a simple CJ jump, with instructions such as LD M80001, MOV H0FFF D06, LD M80027, WR3A K0 K0 D014, LD M800015, ANDP M017, OUT M767920, LD M767923, RD3A K0 K1 D130, LD M800031, ANDF M801133, OUT M767936, LD M767939, and WR3A K0 K1 D1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my initial attempt, I utilized LDP/LDF, although they were eventually commented out in my original post. However, when facing issues with them, I decided to try PLS/PLF instead. Despite exploring your recommendation for edge detection, the functionality still seems to be ineffective, with the monitor output appearing nonsensical. The video snippet provided illustrates that M1 remains stagnant, even after manually altering its value. Additionally, D0 does not reflect the analog input value while analog output 0 fails to be set (unlike analog output 1). Through the usage of the M8013 one-second clock for reliable monitoring, it is apparent that M1 fails to synchronize with M0's values.

I have a suspicion that the given code is not being executed, as the final instruction does not trigger a change in the value of M1 to match M0. To rectify this, include the statement "real_all := real_all + 1.0;" after "M1 := M0;". Subsequently, insert "real_rising := real_rising + 1.0;" within the "IF M1 AND NOT M0 THEN -END_IF" block, and include "real_falling := real_falling + 1.0;" inside the "IF M0 AND NOT M1 THEN -END_IF" clause. Ensure that all variables (real_all, real_rising, real_falling) are defined as REAL data types. Should my suspicion hold true, these REALs will exhibit no incrementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why not read the analog signals on a timebase instead of every scan? Mitsi displays this feature but it is not necessary. Furthermore, the use of an 'iff' statement is not needed as it is essentially the same as using a pulse trigger in the mathematics section. This can save on resources and streamline the code. I have included a program below that utilizes a PI temperature control loop on a clone device. I have tested this program on a borrowed clone from a friend and it worked successfully. Please note that the only instance where a time-generated pulse is used is within the PI loop, not for the analog signals. Originally, I wrote this program in Function Block Diagram, but my friend preferred a simpler ladder logic layout with multiple instances of the same address instead of branching off one bit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>parky suggested re-evaluating the approach to reading analogs in a timebase and recommended reading them every scan instead. Mitsi displays this, but it is not necessary as the if statement and additional math code are redundant when using a pulse trigger in the math section. Attached is a program demonstrating a PI temperature control loop running on a clone. I borrowed a friend's clone to test it out, and it worked. The only instance where I used a time-generated pulse is in the PI loop, not the analog inputs. Initially, I wrote this in FBD, but my friend preferred a simple ladder on separate rungs, resulting in multiple instances of the same address rather than branching off one bit.

This serves as a proof of concept, and I have a functioning ladder example that I aim to replicate in ST. I want to avoid implementing workarounds without understanding why they are needed, as this could lead to issues when adding more code later on.

When analyzing the code, it appears that the section from line 6 to 15 should only execute once after startup. Surprisingly, this is the only segment of the code that behaves as intended.

Upon further investigation, it seems that the code is not executed properly due to the lack of updates to M1 to match M0. By inserting a statement that increments real_all after setting M1 to M0, and adding statements to increment real_rising and real_falling in their respective conditions, we can monitor the variable changes accurately.

After incorporating these changes, it is evident that the blocks following "IF M8002 THEN" are not being executed, even when manually toggling M1. While it is common to use integer types for debugging in C/C++, using REAL types for this purpose in PLC might be new to some. In my attempt to troubleshoot, placing the rising/falling edge code inside an ELSE block showed some progress.

By adjusting the code to read analog input into D0 and observing the increment in 'real_rise,' it becomes apparent that this occurs at the scan rate rather than a one-second period. Subsequently splitting the falling edge blocks into their ESLIF block and replicating the M1 := M0; statement for each led to a regression in functionality, with only the startup block operating correctly.

Considering these challenges, it might be time to replace the clone with a real PLC that fully supports ST, has analog inputs, and comes with free or affordable software. The plethora of options available in the market can be overwhelming, but finding a budget-friendly device with the required features is essential for seamless operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mikeromeo mentioned that the lines (* IF LDP(TRUE, M8011) THEN *) and (* IF LDF(TRUE, M8011) THEN *) are currently commented out in the FX3U PLCs. This could potentially explain why the code is not functioning as intended. Although I am not experienced with FX3U PLCs, it appears that these lines need to be uncommented for proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Levi G</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During testing, it was discovered that the blocks following "IF M8002 THEN" were not being executed, even when manually toggling M1 through the watch window. Is there a specific reason for using the REAL type in debug code like this? In C/C++, integers are commonly used for debugging purposes, but I am still learning about PLCs.

The issue lies in the fact that the entire section of code is not being called or evaluated by the PLC in the main program. If these statements are not executed by the PLC, they will not have any impact on the logic. REALs were chosen to prevent overflow issues, as the counters will stop incrementing at approximately 16 million. This limit is acceptable for diagnostic purposes and avoids potential CPU faults that can occur when incrementing integers on certain PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While compiling, I encountered multiple errors. Real_xx variables could not compile due to "real" being a reserved word. It is recommended to use them as global variables instead of local. Additionally, there was a compiler error with the IF/Else statement as it was incorrect. Setting the output to full scale on the first scan may lead to issues if connected to an analogue sensor, resulting in it being overwritten. Consider whether it will ever reach overscale if not connected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Levi G mentioned his lack of experience with FX3U Plc's, noting that certain lines of code were commented out in the original post. This could be the reason why the code is not functioning as intended. Levi commented out the lines because they were not yielding the desired results, and instead tried using PLS/PLF instructions, which also did not work as expected. 

Responding to Levi's comment, drbitboy explained that he opted for REALs to avoid any potential issues with overflow. He pointed out that using REALs ensures that the counters will stop incrementing at around 16M (224), preventing any problems with overflow. This strategy helps prevent a CPU fault, which can occur when incrementing integers on certain PLCs. It's important to be aware of the possibility of overflow causing faults, so thanks for sharing this information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that during the compilation process, several errors were encountered. The variables named Real_xx could not compile due to the reserved word "real". It is recommended to use these variables as global rather than local. Additionally, there was a compiler error produced by the IF/Else statement, which was incorrect.

The question arises as to why the output is set to full scale on the first scan. This may cause issues if connected to an analog sensor, potentially overwriting data. Adjusting the output in this manner may prevent it from reaching overscale.

In this particular test, one of the analog outputs is set to full scale to serve as a 10V reference voltage source. While this may not be suitable for a real-world application, it allows for the simulation of a sensor using a potentiometer.

By setting the variables as globals with lowercase names, the compilation process proceeded without any warnings. It is interesting that this approach worked, prompting the inquiry about the version number of GX Works 2 being used. The decision to use this FX3 clone was influenced by access to a loaner laptop from work already equipped with GX Works 2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While variable names may vary between versions, in my version (1.620), using a variable name that is the same as an instruction (first word) will not compile. However, if it is a subsequent word (text), it is allowed. In some early GXIEC versions, you could use the same name for input variables on function blocks as the variable passed to it. In GXWorks, this option can be set, especially when converting the GXIEC file. The issue with your code not working properly is not due to the GXW version. When I compiled the code, there were errors with IF statements. By removing the else statement and adding 'not M8002' in the call to read analog, the issue was resolved. Disabling other logic like reading or outputting analogs on the first scan may not make a noticeable difference due to the speed of the scan. However, it is a good practice for setting or controlling outputs. In a better version of the code, unnecessary code for creating rising and falling edges was removed as LDP and LDF functions can be used instead. Removing the else statement is also recommended as evaluating the falling edge does not require it and only adds unnecessary code. It is common to overlook such mistakes initially, but revisiting the code can help in identifying and eliminating unnecessary code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Once more, I'll reiterate: the issue lies not in the code itself, but in the failure to execute the complete statements routine, resulting in a lack of evaluation. This discrepancy is clearly evident in the video provided. When it comes to variable naming conventions, consider using REEL_ instead of REAL_.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By making the changes above, the code functions smoothly, as evidenced by the increasing status. It has been demonstrated that simply adding a character before a real number allows for compilation. While there may be an option in GXW2 that permits the use of reserved words, I have not come across it. The software only seems to allow the same symbolic name to be used for local and inout variables in Function Blocks (FBs).

Based on the original poster's messages, it appears that they are utilizing global variables. However, if these globals have been allocated to specific D registers, it is important to note that each register is 16 bits. Therefore, assigning D100 to Real_rise and D101 to Real_Fall would overwrite the second register and potentially display "NAN" (not a number).

It is unnecessary to use IF/END_IF statements with jumps. Instead, create the necessary oneshots and utilize the built-in functions to enable calls to those functions. For example, instead of using an IF statement like IF xxxxx, create the required oneshot: M0 := LDP[TRUE,M8013] AND NOT M8002. Then, implement each function like WR3A[ M0,0,0,D0]. This streamlines the code and eliminates unnecessary complications like jump commands in the compiled code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully programmed my device on a clone without encountering any issues. Even though I used a different device, borrowed from a friend, I tested various functions and found that they work perfectly. It's worth noting that the clone my friend lent me has a transistor output instead of a relay. I was initially unsure if certain features would work as they do on a genuine device, but after testing the PLSY function (specific to transistor outputs), everything performed as expected. It's important to mention that the transistor output on the clone operates as NPN, meaning it acts as a sink rather than a source, with the common being at 0v.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky suggested changing the code as mentioned earlier. It seems to be functioning properly based on the incrementing status. However, this solution does not seem to work on my FX3 clone. The issue persists, with the IF blocks not being executed and the debug variables not increasing. It is puzzling how the ladder program can function correctly if the clone is running faulty firmware. If possible, could you share the compile output (instruction list) for the provided program? I have attached my output for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mikeromeo suggested that the IF blocks are not executed and the debug variables remain unchanged. How do FX/Mitsubishi devices segregate tasks and routines? Could this code be integrated into the main continuous task to ensure execution? Have you verified that the PLC is operating in RUN mode?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am certain that the PLC is in run mode as indicated by the illuminated RUN LED, and the ladder diagram functions properly in this state. Despite manually switching the PLC before and after programming and using GX Works to handle the run mode automatically, the outcome remains consistent. The initial IF block executes correctly as evidenced by the analog output being set to 10v. It's worth noting that in the ST compile output, I observe the expected conditional jumps associated with IF blocks. However, within the ladder project, the option to "View compile output" is not available. Instead, instructions can be exported as a CSV file (attached), revealing a lack of jumps. This discrepancy raises doubts about the completeness of the export feature, leaving room for potential issues in the code execution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider moving the statement "W_all := W_all + 1.0;" to the beginning of the routine outside of any loops, and incorporating a few more updates such as "W_2 := W_2 + 1.0;" before the conditional statement "IF LDP...", "W_3 := W_3 + 1.0;" before "IF LDF...", and "W_4 := W_4 + 1.0;" after the last "END_IF". By ensuring that the initial IF-END_IF block executes as expected, we can troubleshoot potential issues with the other statements. While it is uncommon to suspect compiler or hardware bugs with simple code, it is essential to verify all possibilities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In ladder programming, jumps to subroutines are not used. ST programming language uses jumps because of the presence of IF statements. Mitsubishi designed GXW2 compiler to be compatible with ladder/IL, which results in the use of conditional and unconditional calls to subroutines and the utilization of intermediate "Reserved" bits/words, typically in the M9000 range. It is important to ensure that floats are double words, assigned as globals and not overlapping. When using consecutive D registers for floats, such as My_Float and float1, it is crucial to allocate two 16-bit words per tag for proper functioning. For example, My_Float should be assigned as Single precision, occupying D20 (D20 + D21), while float1 should be assigned as Single precision, using D22 (D22 + D23).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have borrowed a clone from a friend to test some code, and it seems that the original code designed for a true FX does not function properly on the clone. After thorough testing, I have found an alternative solution that works on the clone. However, there are some issues to be mindful of. The IF statements seem to not work correctly, possibly due to differences in how the clone handles conditional jumps. To address this, I have eliminated the IF statements in the code. 

Additionally, the analogue output on the clone may be unreliable, as it does not output a full 10v. Even when powered by a 22v PSU, the maximum output is only 9.68v. If values exceed HFFF (4095 Dec) or 10v, the output drops to zero. Therefore, testing for overrange may not be accurate. 

I have integrated the logic for rising and falling edge triggers directly into the function calls to address this issue. While Mitsubishi suggests using one scan triggers for read/write operations, it is not essential for other logic or comparing values. I recommend avoiding the use of ST with IF statements (CJ) on the clones. 

Please refer to the included running screen capture and the actual file for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When connecting online with a cloned PLC and accessing PLC Diagnostics, it is important to check the CPU version information. I recently encountered a situation where a customer unknowingly purchased a fake Mitsubishi FX2N PLC from eBay with a CPU version of V2 (or V2.1), which did not support many standard instructions. It is crucial to be aware of the authenticity of the PLC to avoid compatibility issues and malfunctioning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that after borrowing a friend's clone, he discovered that the original code designed for a true FX did not function properly on the clone. After thorough testing, he found an alternative solution that eliminated the need for IF statements, which were not working correctly due to possible issues with the clone's support for conditional jumps. Additionally, he noted that the analogue output was not stable, maxing out at 9.68v instead of 10v. Overreaching 4095 Dec or 10v caused it to drop to zero. To address these issues, he integrated logic directly into function calls for rising and falling triggers. He emphasized that for normal programming tasks, there is no need for these triggers, except for specific speed requirements. He recommended avoiding ST with IF statements (CJ) on clones.

Goghie, on the other hand, shared his experience with a fake Mitsubishi FX2N PLC that lacked support for standard instructions due to a lower CPU version. He advised checking the CPU version in PLC Diagnostics when using a clone. In his case, the CPU version displayed as 0.0, indicating potential limitations in instruction support. There were no reported errors during program execution, suggesting that the clone may be silently ignoring unsupported instructions. 

As Parky considers trying OpenPLC to address the issues with the clone, he acknowledges the learning experience gained from troubleshooting the lower level operations of these devices. Despite encountering challenges with the clone's analog outputs, such as a full-scale voltage of around 10.26v, he remains determined to find a solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeromeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a suspicion that the power supply unit (PSU) I borrowed may have been intended for charging small electronics or devices. Although I did not measure the exact voltage, it was labeled as 22v, which likely decreases under load. I found it interesting that the analog output reached a maximum count of 4095, equivalent to 9.68v in my case. However, when the count reached 4096, the voltage dropped to around 14mv, indicating a potential negative number in terms of conversion. This is due to the 12-bit analog-to-digital conversion outputting effectively zero. My analog input proved to be accurate when tested against a calibrated voltage source. I plan to investigate why the CJ instructions only seem to work with one CJ and not with additional ones. I suspect there may be differences between the clone version and older firmware versions compared to more up-to-date FX3's.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the detection of rising/falling edges on special register M8011 not functioning as intended in the provided ST program?</h4>
<p class='text-muted'><strong>Answer:</strong> - The detection of rising/falling edges on M8011 might not be working due to potential issues with the usage of PLS/PLF instructions. Make sure the logic for detecting edges is correctly implemented.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be the reason for the code blocks related to sampling analog input and transferring values not being executed in the ST program?</h4>
<p class='text-muted'><strong>Answer:</strong> - The code blocks for sampling analog input and transferring values may not be executing due to potential issues with the condition checks or the flow of the program. Review the logic and ensure proper execution flow.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot and resolve the issue with the ST program for edge detection in GX WORKS2?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the ST program, you can check for errors in the logic, verify the conditions for edge detection, and ensure the correct usage of instructions like PLS/PLF. Additionally, debugging tools provided by GX WORKS2 can be utilized to track program execution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a specific method recommended for handling edge detection in structured text programming for FX3U PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - When working with edge detection in structured text programming for FX3U PLCs, it is essential to use the appropriate instructions like PLS/PLF for capturing rising/falling edges accurately. Ensure that the conditions for edge detection are correctly set up to trigger the desired actions</p>
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
