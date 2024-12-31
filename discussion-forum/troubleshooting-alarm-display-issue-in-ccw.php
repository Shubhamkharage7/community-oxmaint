
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am working on setting up an alarm queue in CCW. While I have successfully implemented the FFL and FFU functions, I am facing an issue where the alarm string is not being displayed alongside the alarm. Any suggestions on how to resolve this issue? In the past,">
    <meta name="keywords" content="alarm display issue, troubleshooting, ccw, alarm queue, ffl function, ffu function, alarm string, control data type, bsr, rslogix 500, studio, code structure, replicate, tools, setup, implementation, resolve">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-alarm-display-issue-in-ccw">
    <title>Troubleshooting Alarm Display Issue in CCW | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Alarm Display Issue in CCW | Oxmaint Community">
    <meta property="og:description" content="Hello, I am working on setting up an alarm queue in CCW. While I have successfully implemented the FFL and FFU functions, I am facing an issue where the alarm string is not being displayed alongside the alarm. Any suggestions on how to resolve this issue? In the past,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-alarm-display-issue-in-ccw">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Alarm Display Issue in CCW | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am working on setting up an alarm queue in CCW. While I have successfully implemented the FFL and FFU functions, I am facing an issue where the alarm string is not being displayed alongside the alarm. Any suggestions on how to resolve this issue? In the past,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-alarm-display-issue-in-ccw"
      },
      "headline": "Troubleshooting Alarm Display Issue in CCW",
      "description": "Hello, I am working on setting up an alarm queue in CCW. While I have successfully implemented the FFL and FFU functions, I am facing an issue where the alarm string is not being displayed alongside the alarm. Any suggestions on how to resolve this issue? In the past,",
      "author": {
        "@type": "Person",
        "name": "JamesV"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-03",
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
                <h1 class="text-white">Troubleshooting Alarm Display Issue in CCW</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>38 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">883</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">372</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am working on setting up an alarm queue in CCW. While I have successfully implemented the FFL and FFU functions, I am facing an issue where the alarm string is not being displayed alongside the alarm. Any suggestions on how to resolve this issue? In the past, I was able to accomplish this using a Control data type and a BSR. Unfortunately, CCW lacks some of the tools available in RSLogix 500 or Studio, making it challenging to replicate the same code structure.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How are you presenting the alarm message on your HMI? Utilizing a DINT tag in CCW as the trigger can be an effective method. Consider storing the alarm message in the PLC using a DINT tag and creating a loop in structured text (ST) to transfer the alarm text to an Alarm_Display string tag. By doing so, you can easily display the current alarm based on its corresponding DINT tag. This approach simplifies the process and ensures that only one tag, Alarm_Display, is needed to showcase the alarm information. If you are using the free version of CCW, you may need to use ladder logic instead of structured text, although it may be a bit more complex and time-consuming to set up. Keep in mind the limitations of the free version of CCW when implementing these strategies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SCADA expert, SCADA_Joe, suggests a more efficient way to display alarm messages using a Cmore RHMI panel. Instead of directly displaying the alarm string, it is recommended to store the alarm message in the HMI's alarm configuration and use a DINT tag in CCW as the Trigger for the alarm. An alternative approach is to utilize a DINT tag in the PLC for the alarm and implement FFL/FFU operations followed by creating a loop in structured text (ST) to transfer the alarm text to a new "Alarm_Display" string tag. This method ensures that only one tag is used to display the current alarm based on its corresponding DINT tag. If the free version of CCW is being used, ST may not be available, but the same logic can be implemented in ladder logic, albeit with a bit more effort. In the case of multiple alarms, holding and displaying the message as it transitions through will be beneficial. Feel free to ask for an example of the ST loop to refine your implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I currently do not have a CCW, so I am unable to verify the syntax. However, I hope this guidance leads you in the right direction for what I have in mind. In this array, all the alarm text is stored. The following is an example of a loop that iterates through numbers 0 to 100 until it matches the current value of Alarm_Trigger from your FFL/FFU alarms. Once a match is found, it will retrieve the corresponding Alarm_Registry[x] text and populate the Alarm_Text field. This Alarm_Text is what will be displayed on the HMI. It may be beneficial to incorporate some logic to clear the alarm text and potentially use timers to cycle through, although the existing setup may suffice for that purpose.

// Loop example
FOR x := 0 TO 100 BY 1 DO;
IF Alarm_Trigger = x THEN;
COP(Alarm_Registry[x], Alarm_Text, Alarm_Registry[x].LEN);
END_IF;
END_FOR;</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV inquired about using a Cmore RHMI and is struggling with code differences between CCW and Rockwell's other platforms. He is seeking an example of the ST Loop and currently uses a UDint for alarms in the FFL/FFU. The current process involves moving the Alarm String to a holding place for reading by the HMI, where it displays the ST for 4 seconds upon FFU activation. However, JamesV is open to looping the process for multiple alarms, wanting to display messages as they shift through.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SCADA_Joe mentioned that although he doesn't currently have CCW, he provided an array that contains all the alarm text needed. The code example demonstrates how to cycle through values until it matches the Alarm_Trigger value from the FFL/FFU of alarms. This will then populate the Alarm_Text with the corresponding text from Alarm_Registry[x] to be displayed on the HMI screen. It is advisable to include logic to clear the alarm text and potentially use timers to cycle through the messages. The existing code may suffice for this purpose. The loop example shown below helps in achieving this functionality effectively:
============ 
// Loop example
FOR x := 0 TO 100 BY 1 DO;
IF Alarm_Trigger = x THEN;
COP(Alarm_Registry[x], Alarm_Text, Alarm_Registry[x].LEN)
END_IF;
END_FOR;
===========
Feel free to refer to the attached image (View attachment 69681) for more clarity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What does "FOR x" mean? Unraveling this puzzling phrase.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The FOR LOOP statement is used to iterate through a range of values with the loop variable 'x'. In this code example, the loop indexes from 0 to 100 with an increment of 1, executing the enclosed code. The enclosed code contains an IF statement that checks the value of the 'x' variable. In simpler terms, when 'x' is 0, the code checks if Alarm_Trigger equals 0 and then copies Alarm_Registry[0] to the Alarm_Text tag with a length equal to the length of Alarm_Registry[0].LEN. The loop then increments 'x' by 1 and repeats the process. To introduce a delay in the incrementing process, you can add a timer after the COP statement. If FOR loops seem too advanced for you, consider watching tutorials by Tim Wilborne on YouTube, as he provides beginner-friendly content for those using CCW.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How are data structures organized in the FIFO array when the FFL and FFU events occur? What is the storage method for alarm strings and how does the HMI retrieve and display them? How many alarm strings can be viewed simultaneously on the HMI screen?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this code snippet, CodeXIC is used to first pass the alarm data to be displayed on the screen. It checks if there is an alarm present in the IN_ALARM array and triggers the ALARM_TON timer. The alarm number is then incremented and compared to a maximum value of 100. The alarm data is then moved to the ALARM_DISPLAY_TEXT for presentation. The system operates using various data structures such as ALARM_DISPLAY_TEST, iALARM, IN_ALARM, and ALARM_TEXT to manage alarm information efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about the structure of data in the system. How are the data structures of the FIFO array managed when the FFL and FFU triggers are activated? In what manner are the alarm strings stored within the system? How does the HMI retrieve and display these alarm strings? How many alarm strings can be viewed on the HMI simultaneously? 

Thank you for your inquiries. I am utilizing a single Udint for approximately 30 alarms. This Udint is transferred to an Array in the FFL and then to the FFU once the FIFO reaches its capacity. Subsequently, it is moved to another Alarm_out array Udint. Additionally, there is an array of String Tags [0..40] that tracks the current alarms through the FIFO and monitors them when they reach the Alram_out Tag.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to drbitboy, the code provided includes instructions for displaying alarm information on a display screen. The code involves moving values, checking conditions, and updating variables related to alarms. This code is written in Structured Text, a programming language commonly used in industrial automation systems for organizing and controlling processes efficiently. It utilizes various data structures such as arrays and strings to manage alarm numbers and texts effectively. Consult the code snippet for more details on how the alarm display feature is implemented.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV asked if the code is written in Structured Text, but in fact, those are Allen-Bradley CCW mnemonics. Instead of creating ladder logic, it's easier to simply type out the mnemonics. By expanding the space at the top of the rung diagram, a text box will appear where you can input these mnemonics. As you type, the mnemonics will be translated into ladder rung logic. While the operands will depend on your specific setup, the logic should function properly.

For example, XIC blah is an instruction that evaluates the value of the bit operand blah and sets the output rung as True if the value is 1 and the input rung is True. BST begins a top-level branch, while NXB ends a branch and initiates a parallel branch at the previous level. BND closes a set of parallel branches.

When it comes to comparisons, sourceA is compared to sourceB using the greater-than instruction. MOV 1 blah is a command that moves the value of 1 into the tag blah. On the other hand, XIO blah is an instruction that checks the value of the bit operand blah and sets the output rung as True if the value is 0 and the input rung is True. Additionally, TON represents a Timer ON-delay instruction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One important feature of mnemonics is that they are read in the same left-to-right, top-to-bottom order in which PLC instructions are evaluated during the scan cycle. This makes them a valuable tool for programming and understanding PLC logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV expressed gratitude for the questions. In his setup, a single UDint is utilized to manage approximately 30 alarms. These alarms are transferred into a FIFO array through the FFL instruction and then removed by the FFU instruction once the FIFO reaches capacity. Subsequently, they are stored in another array, possibly consisting of bits, labeled Alarm_out UDint. Additionally, there exists an array of String Tags [0..40] intended to track the current alarms as they progress through the FIFO and for monitoring purposes upon reaching the Alarm_out Tag. It seems that alarm events trigger specific bits in the UDint tag ALARM to change to 1. When an FFL instruction is activated by a rising edge, the most recent alarm value is pushed onto the FIFO array, which is an ARRAY[0..5] of UDint ARR. If the FIFO array is full before this rising edge, an FFU instruction will remove the oldest value from the FIFO. The interaction between the FIFO array UDints and/or the UDint ALARM_OUT tag with the strings in the ARRAY[0..40] STRING array ALARM_MSG appears to trigger the monitoring of alarms. It is unclear when this process is initiated, possibly triggered by the expiration of a repeating timer. Overall, this system allows for the continuous monitoring and management of alarms effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the context of alarm handling, when alarm events such as high tank levels are detected, they trigger a change in the value of a bit within the UDINT tag ALARM. This process repeats with each new alarm event, updating the ALARM tag accordingly. 

Upon a rising edge to an FFL instruction, the latest value of the UDINT tag ALARM is transferred to the FIFO array, known as ARRAY[0..5] of UDINT ARR. If the FIFO array is full at this point, a rising edge to an FFU instruction removes the oldest value from the FIFO array and updates the UDINT tag ALARM_OUT with this value.

Simultaneously, the values stored in the FIFO array UDINTs and/or the UDINT ALARM_OUT tag interact with the strings in the STRING array ALARM_MSG[0..40] to trigger alarm monitoring processes. The ultimate goal is for the String tag to be displayed once it reaches the ALARM_OUT UDINT in the FIFO system. This display is key to effectively managing and addressing alarm notifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In his comment, JamesV provided details about the FIFO system used for managing alarms. The goal is to have the String tag displayed on the ALARM_OUT UDINT once the bit enters the FIFO in ARR. The process involves detecting various alarm events, such as high tank levels, which trigger the UDINT tag ALARM to change to 1. When an FFL instruction receives a rising edge, the most recent value of ALARM is pushed into the FIFO array ARRAY[0..5] of UDINT ARR. In case the array is full, an FFU instruction pops off the oldest value from the FIFO. The interaction between the UDINTs in the FIFO array, ALARM_OUT tag, and the STRING array ALARM_MSG triggers the monitoring of alarms. The code includes all functions except for MOV '' ALARM_DISPLAY_TEXT. What is this operation moving?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV noted that all code within the software was developed except for the MOV '' ALARM_DISPLAY_TEXT instruction. This instruction moves an empty string, represented by two single quotes with nothing in between them. This empty string is displayed when there are no active alarms. However, it could also display a non-empty string like 'No active alarms.'</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV shared his FIFO setup for handling alarms. In this system, the String tag is meant to be displayed once the bit reaches the FIFO in ARR and is stored in the ALARM_OUT UDINT. The bits within the ARR FIFO array elements do not trigger the display of the String tag during the current cycle. It is only the 1-valued bits in the UDINT tag ALARM_OUT, which represents the most recent alarm to be removed from the FIFO, that will prompt the display of one or more strings. Is this understanding correct?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the FIFO array ARR, only the 1-valued bits in the UDINT tag ALARM_OUT, which represents the most recent ALARM_OUT value FFUed (popped) out of the FIFO during the current scan cycle, will trigger the display of string(s). The presence of bits in the elements of ARR does not impact the display of String tag in the current cycle. This suggests that the code generates the MOV for an empty string if referenced as ALARM_TEXT[x], but encounters issues when using just ALARM_TEXT.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the software, JamesV noted that all the code has been built except for the MOV '' ALARM_DISPLAY_TEXT. This raises the question: what exactly is being moved in this case? This is the task I am currently working on in Connected Components Workbench (CCW).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV stated that he is working on a project in CCW, attempting to achieve a specific goal. Despite successfully displaying alarm strings with code he wrote and even testing it with RS Logix 500, he encountered the issue of a missing Control Data Type in CCW. View the attached images for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In CCW, JamesV is tackling a challenging task that involves deciphering some complex code. While the code may be functional, there could be a simpler or clearer way to achieve the same outcome. Despite still needing to iron out some details, JamesV is well on the way to grasping the code's functionality.

To gain a better understanding, it could be beneficial to explain the code's workings either in a forum post or through the practice of Rubber Duck Debugging. Many readers may have had a smirk when they encountered the XICControl[0].EN feeding the BSR ALARM[4]Control[0] line in the code structure.

If you're struggling with replicating the code due to a lack of the Control structure in CCW, it may indicate a gap in comprehension of both the code and the Control structure within the BSR instruction. To delve deeper into this topic, it is recommended to start with the provided link, as well as reviewing the previous page of the manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy pointed out the complex nature of the code, acknowledging that it functions, but suggesting a simpler or clearer approach could be taken. He is close to fully understanding the code's functionality but still has some details to figure out. As an exercise, he recommends describing how the code works, possibly through Rubber Duck Debugging. Many may have found it intriguing to see the XICControl[0].EN feeding the BSR ALARM[4]Control[0]. If the challenge lies in understanding the Control structure in CCW, it may indicate a lack of comprehension about both the code and the Control structure within a BSR instruction. Further guidance is suggested, including starting here (N.B. non-@OkiePC-safe link) and reviewing the previous page of the manual. It's clarified that the issue isn't with the Control structure itself, but rather serves as an example of the differences in Rockwell software. With various programming methods to explore in CCW, the individual is open to trying different approaches to accomplish the task at hand while appreciating the assistance provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If there is no other code present, the primary attributes used in the instance Control[0] of a control structure are the .UL bit (XIC on rung 5) and the .EN bit (XIO on the second branch of Rung 4). In Connected Component Workbench (CCW), the equivalent of the .UL bit is the second output parameter named Unload in the CCW BSR instruction. The equivalent of the .EN bit can be simulated by incorporating a coil parallel to and after the BSR instruction, which writes the input rung state to a boolean.

Additionally, each instance of a BSR instruction likely has a unique data object associated with it. This data object, known as BSR_1 in the manual, is a default name assigned by CCW when the BSR is placed. By examining the attributes of this data object, such as BSR_1.EN, it is possible to find the equivalent of the .EN bit in the RSLogix Control Structure.

Even in the absence of the RSLogix "Control" structure, there are simple ways to replicate the RSLlogix behavior in CCW.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am eager to review your detailed breakdown of the functionality behind the 5000 code. I would greatly appreciate it if you could provide a written explanation of its workings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By the way, the 5000 code mentioned in Post #21 and my code (the mnemonics in Post #10) are essentially performing the same function. The 5000 code effectively maintains the alarm messages until all timer expiries, even if the alarm becomes inactive earlier, which could be up to almost four minutes in the worst-case scenario. The sequence on Rung 4 could potentially be replaced with XIC ALARM[1].1ADD AlarmPointer 1 AlarmPointerAND AlarmPointer 63 AlarmPointer if the operand Control[0].UL on Rung 5 is substituted with Alarm[2+((AlarmPointer AND NOT 31)/32)].[AlarmPointer AND 31]. The compatibility of this approach with CCW is uncertain, but there is a claim in this link that indirect bit addressing is feasible in CCW. However, I have not been able to locate any documentation or examples to confirm this.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy requested a written explanation of how the 5000 code functions. The Alarm array consists of 6 dints, Alarm[0-5], with alarms using Alarm[2] and [3]. In Rung 4, a -1 is moved into the Alarm Pointer Dint, and the current alarms are transferred to Alarm[4] and [5] using COP. There are 65 strings, with the 64th being a null string and the 65th for display. This string is used for the HMI to access the tag. When an Alarm bit is active, BSR shifts a 1 from Src bit Alarm[1].0, making Control[0].UL true. Once Control UL is true, Rung 5 populates the alarm to be held for 3500ms. The control data type in 500 and 5000 searches for an active alarm in the INT or DINT Alarm bit buffer. If interested, please provide your email for a zipped copy to be sent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Great job, that is almost correct. The Alarm[1].0 value is shifted closer to but should never exceed Control[0].UL. The Alarm[0].0 value is typically 0, and even if it is 1, it remains constant based on the code provided. The specific value of Alarm[1].0 may not be crucial. When there are no active alarms (Alarm[2] and Alarm[3] DINT values are 0), how many scan cycles are required to cycle through and evaluate all 64 alarm bits? Some related questions include: what triggers the rising edge for the BSR? What prevents the BSR from being triggered, even if a rising edge is generated, and why? Is it feasible for the AlarmPointer value to be -1 as per the MOV on Rung 4, when Rung 5 is processed, potentially utilizing -1 as an index into the Alarm_Messages array? Explain the reasoning behind the possibility or impossibility of this scenario.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the coding scenario discussed by drbitboy, the value of Alarm[0].0 is manipulated to activate Control[0].UL without exceeding its value. The Alarm[0].0 value typically remains at 0, and even if it reaches 1, it remains constant based on the provided code. The status of Alarm[1].0 may not be significant in certain cases. When Alarm[2] and Alarm[3] DINT values are both 0, how many scan cycles are required to assess all 64 alarm bit values? Further inquiries include the driving force behind the triggering of the BSR on a rising edge, mechanisms preventing the BSR from activating despite a potential rising edge, and the feasibility of AlarmPointer being -1 as an index in the Alarm_Messages array. During cycle scans, the focus shifts to monitoring the Alarm[2] and Alarm[3] bits until a true value triggers the GEQ, allowing for movements and data replication within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In RSL500, the value of Alarm[0].0 is shifted with a length of zero to trigger the activation of Control[0].UL. Scans within the cycle are specifically searching for the bits within Alarm[2] and Alarm[3]. When any of the alarms in the DINTs become true, the GEQ is triggered, allowing for the movement and copying of data. Please click to read more about the code in RSL500, highlighting the use of the INT data type.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV shared the code in RSL500 showcasing the difference in data type INT. The attachment 69741 provides more details. The BSR has a length of 64, allowing for shifting through the entire bit buffer and accommodating 4 INT's in the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the statement by JamesV, the Alarm[0].0 value shifts with a length of zero to activate Control[0].UL. The Cycle scans are specifically searching for the bits in Alarm[2] and Alarm[3]. Once any of the DINT alarms are true, the GEQ becomes true and allows for the mov and copies to take place. It was previously overlooked that the control .LEN value was set to 0, mistakenly assuming it was 64. How is the value of Alarm[1].0 manipulated over time? Where and how is the code designed to search for bits in DINTs Alarm[2] and Alarm[3]?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent forum post, drbitboy pointed out a mistake regarding the control .LEN value being 0 instead of the assumed 64. How does the BSR control the value of Alarm[1].0 over time? Also, where and how does the program search for bits in DINTs Alarm[2] and Alarm[3]? This particular bit is solely controlled by the BSR within the program. If you could provide more context for the last question, it would be helpful in addressing it accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JamesV provided the following code snippet in RSL500, showcasing a unique data type - INT. Additionally, a distinct difference is visible in this snippet where the string message at offset 65 is copied to itself rather than the expected null message at offset 64 being copied over. Could this deviation be considered a typographical error? Click to expand for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When comparing the two, the main distinction lies in the fact that it duplicates the string message located at offset 65 onto itself instead of duplicating the null message from offset 64 to offset 65. Is this a mistake or a typo? Click to find out more. Yes, definitely a typo.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned a discrepancy in the control .LEN value in the program. It was initially believed to be 64 but upon further examination, it was found to be 0. What determines the value of Alarm[1].0 as it changes over time? JamesV clarified that the BSR is responsible for controlling the value of that bit within the program. However, there seems to be a misunderstanding as the BSR instruction is only able to read the value of its Source parameter bit (Alarm[1].0) and not write to it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy asked where and how the code searches for bits in DINTs Alarm[2] and Alarm[3]. JamesV inquired about the mention of "other code." The implicit code referenced in the cycle scans was explained by JamesV. He described how the cycle scans seek out bits in Alarm[2] and Alarm[3], and once one of the alarms in the DINTs is true, the GEQ becomes true, enabling the movement and copying processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy noted that the additional code is suggested in the cycle scans mentioned in Post #31. Thank you for your assistance, and I remain hopeful that this issue can be resolved. If needed, I am willing to provide a zipped copy of the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesV</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I resolve the issue of the alarm string not being displayed alongside the alarm in CCW?
   - Answer: One suggestion to resolve this issue is to explore alternative methods within CCW that may help display the alarm string, as CCW may lack some tools available in RSLogix 500 or Studio.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to implement the alarm string display using Control data type and BSR in CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: While CCW may lack some of the tools available in RSLogix 500 or Studio, you can try to adapt your approach within CCW to achieve the desired alarm string display using alternative methods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the differences in functionality between CCW, RSLogix 500, and Studio in terms of setting up alarm queues?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: CCW may have differences in tools and functionality compared to RSLogix 500 or Studio, which can present challenges in replicating code structures. Exploring CCW-specific features and workarounds may be necessary to address these differences.</p>
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
