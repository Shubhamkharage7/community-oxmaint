
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am seeking guidance on how to create a program for rejecting items using a shift register or bit manipulation. In this scenario, there are 3 digital inputs (DIs) involved. DI1 detects defects in items, DI2 acts as a sensor for item entry and handles bit shifting, and DI3">
    <meta name="keywords" content="shift register, rejecting items, bit manipulation, digital inputs, di1, di2, di3, defects detection, item entry sensor, bit shifting, cylinder ejection, bottle scanning, s7-1200 plc, programming beginner, guidance">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-a-shift-register-for-rejecting-items-step-by-step-guide-for-beginners">
    <title>How to Use a Shift Register for Rejecting Items: Step-by-Step Guide for Beginners | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use a Shift Register for Rejecting Items: Step-by-Step Guide for Beginners | Oxmaint Community">
    <meta property="og:description" content="I am seeking guidance on how to create a program for rejecting items using a shift register or bit manipulation. In this scenario, there are 3 digital inputs (DIs) involved. DI1 detects defects in items, DI2 acts as a sensor for item entry and handles bit shifting, and DI3">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-a-shift-register-for-rejecting-items-step-by-step-guide-for-beginners">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use a Shift Register for Rejecting Items: Step-by-Step Guide for Beginners | Oxmaint Community">
    <meta name="twitter:description" content="I am seeking guidance on how to create a program for rejecting items using a shift register or bit manipulation. In this scenario, there are 3 digital inputs (DIs) involved. DI1 detects defects in items, DI2 acts as a sensor for item entry and handles bit shifting, and DI3">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-a-shift-register-for-rejecting-items-step-by-step-guide-for-beginners"
      },
      "headline": "How to Use a Shift Register for Rejecting Items: Step-by-Step Guide for Beginners",
      "description": "I am seeking guidance on how to create a program for rejecting items using a shift register or bit manipulation. In this scenario, there are 3 digital inputs (DIs) involved. DI1 detects defects in items, DI2 acts as a sensor for item entry and handles bit shifting, and DI3",
      "author": {
        "@type": "Person",
        "name": "RBB20"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-26",
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
                <h1 class="text-white">How to Use a Shift Register for Rejecting Items: Step-by-Step Guide for Beginners</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>24 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">748</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">414</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am seeking guidance on how to create a program for rejecting items using a shift register or bit manipulation. In this scenario, there are 3 digital inputs (DIs) involved. DI1 detects defects in items, DI2 acts as a sensor for item entry and handles bit shifting, and DI3 also performs bit shifting to connect the cylinder for ejecting rejected items. The process involves scanning defects on a bottle (DI1), shifting bits with each trigger (DI2), and ultimately triggering the cylinder to kick out rejected items. I am using an S7-1200 PLC as a beginner in programming. Any assistance or suggestions would be greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for videos discussing this specific topic, you'll find a variety on YouTube. Enjoy exploring!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure efficient bottle movement on the conveyor, it is essential to have a reliable tracking system in place. Utilizing a sprocket with sensors on the conveyor can provide the necessary pulses for effective fault detection and bottle repositioning. For example, by receiving pulses from the conveyor sprocket sensor, the fault detection data is shifted along a bit array, indicating the position of each bottle. When a faulty bottle is identified, a "1" is placed in the shift register array, and as each pulse is generated, this data is shifted accordingly. This method allows for precise control over bottle placement, ensuring that any defective bottles are directed to the reject station. By implementing this tracking system, production efficiency can be significantly improved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why do DI2 and DI3 shift the bits in opposite directions? Are these bits in separate arrays, one for DI2 and another for DI3? If they are in different arrays, how are bit values written into the second array (DI3)? Can you provide clarification on a few points?

When DI1 is 1, it indicates a defective item at a specific location; otherwise, it is 0. DI2 seems to trigger when all items have moved a fixed distance since the last trigger event. For example, DI2 could be a proximity sensor on a gear sprocket that controls a conveyor transporting items. It does not specifically relate to individual items but instead represents overall movement of items on the conveyor. The value of DI2 changes back to 0 before the next trigger event. 

DI3 is unclear to me. Are items transferred between conveyors? Is the reject cylinder station a set distance from the DI1 location? How many DI2 trigger events (and possibly DI3) occur from when a defective item triggers DI2 to when it reaches the reject cylinder station? What is the frequency of DI2 trigger events? How many DI2 triggers occur between items on average? 

How long does it take for the reject cylinder to reach the defective item? How long does it take for the reject cylinder to fully extend and complete one extend+retract cycle?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using Rockwell software, you can rely on the BSR (Bit Shift Right) and BSL (Bit Shift Left) functions to perform the specific bit shifting operations you require.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy asked why DI2 and DI3 shift bits in opposite directions and inquired if they are part of different arrays of bits. DI1 indicates a defective item while DI2 triggers when all items have moved a certain distance. DI2 acts as a proximity sensor on a gear sprocket, detecting movement of items on a conveyor. DI3 remains unclear.

In the program using TIA Portal, DI2 and DI3 monitor the input and output of bottles or items. DI1 sets a byte to 1 when a defect is detected, with DI2 shifting the bit as items pass through. A move block transfers values between arrays. DI3 also shifts bits as items pass through, triggering a cylinder with a time delay.

Items do not transfer between conveyors, and the reject cylinder is located at a set distance from DI1. The number of trigger events and speed of triggers depend on conveyor speed. The cylinder extends in less than 1 second, retracting quickly for the next rejection.

If you have alternative methods for achieving this, I am eager to learn. Thank you for your patience and understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the conveyor suddenly slows down or there is a gap in the bottles, how can the system accurately track the bottles that have already been registered?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky asked about how the conveyor system tracks bottles in case it slows down or encounters a gap. The system uses parameters such as time delays to ensure smooth movement of items. These time delays are adjusted whenever the conveyor speed changes, dictating how long it takes for items to move from one point to another. By setting values on the shift register and factoring in time delays, the system can accurately track the items. If no item is detected after the designated time, the system will move the value to the specified word address. If you need further clarification, please feel free to let me know.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of using a prox on a star wheel to match the conveyor speed, you are depending on timers, which may be a bit unreliable. However, if the distance between the printer and cylinder is short, this should not be an issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that instead of using a proximity sensor on a star wheel to sync with the conveyor speed, timers are being relied upon, which may be a little unreliable. However, since the distance between the printer and cylinder is short, it may not be a problem. The setup includes DI1 triggering if a label has a defect, DI2 detecting the bottle entering, the Printer, DI3 detecting the bottle exiting, and the Cylinder rejecting defective bottles with defect labels. Each distance between these components is short. Any suggestions for the programming I can implement for this setup? Thanks!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When DI2 and DI3 detect bottles at the inspection and reject stations, a First-In, First Out (FIFO) array is preferred over a bit-shift register. For DI2, the current value of DI1 (1 for defective bottle labels, 0 for good labels) is pushed onto one end of the FIFO. When DI3 is triggered, the value is popped off the other end of the FIFO: if the value is 1, the cylinder is activated to reject the bottle; if the value is 0, the good bottle passes the reject station. Using a FIFO is more efficient despite the option to use bits, as memory is affordable and FIFO instructions are easier to work with.

Initializing the FIFO array when the PLC is turned on can be challenging. The most reliable method involves ensuring no bottles are between DI2 and DI3, and setting the FIFO length to 0. To comprehend FIFO operations, refer to the flowcharts for FIFO-Load (FFL) and FIFO-Unload (FFU) for True input rung cases. Consider adding delay timers from the rising edge of DI2 and DI3 inputs to reading the DI1 input bit and writing the cylinder reject bit for accuracy. Although the provided links are not safe for all systems, the concept applies similarly to S7-1200 FIFOs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy suggested using a FIFO array instead of a bit-shift register when DI2 and DI3 detect bottles at inspection and reject stations. When DI2 is triggered, store the current value of DI1 (1 for defective labels, 0 for good labels) at one end of the FIFO. Upon triggering of DI3, retrieve the value from the other end of the FIFO: if the value is 1, activate the reject cylinder; if it is 0, allow the good bottle to pass through. Although it is possible to achieve this with bits, using a FIFO array is simpler and cost-effective. The challenge lies in initializing the FIFO array state when the PLC is powered on - ensure no bottles are between DI2 and DI3 and set the FIFO length to 0. Refer to flowcharts for FIFO-Load and FIFO-Unload operations in the manual for a better understanding. It may be necessary to introduce delay timers between the triggering of DI2 and DI3 and the corresponding actions, but with careful adjustment, accurate settings can be achieved. This solution is primarily applicable to Logix PLCs, but can also be adapted for S7-1200 FIFOs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Around five or six years ago, in a thread on this forum, @parky, @drbitboy, and a few others collaborated on coding examples of a selection/rejection program. This program utilized both the bit-shift method (tracking conveyor movement) and the FIFO approach (tracking individual items). If you search the forum using keywords like FIFO and bit-shift, you may be able to find the original thread discussing these coding examples.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking for information on tracking rejected items on a conveyor belt using FIFO and bit-shift techniques, you can easily find it by searching the forum. Click to expand for more details. One helpful tip is to check out examples of the code provided in the PDFs, as they are likely to be the most informative. In a discussion thread, @parky shared a method using a bit-shift register controlled by a timer, which works effectively as long as the conveyor speed remains constant. In my own approach, I converted the items on the conveyor into encoder-like "pulses" to trigger the FIFO, as explained in post #11. I may have opted for a circular buffer over using the FIFO instructions (FFL/FFU) to keep track of items in the array, but the underlying principle remains unchanged.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The process described here is completely untested and may require some adjustments for optimal functioning. While there are only three rungs in OB1, the majority of the work happens in the FIFO FB1. I consolidated FFL, FFU, and RST into a single instruction, which I believe aligns better with the TIA model. The decision to set the array size at 1024 may not have been the most optimal choice. Although there is a FIFO available in the Siemens "Library of General Functions," I personally prefer the A-B model. The logic controlling the rejection output to the cylinder is somewhat theoretical, possibly utilizing a one-shot process driving a TOF. The final diagram represents my interpretation of the overall process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy pointed out that the process described is completely untested and may require some adjustments for optimal performance. While only three rungs are used in OB1, the majority of the work is carried out in the FIFO FB1 block. By combining FFL, FFU, and RST into one instruction, it aligns better with the TIA model. The fixed array size of 1024 may not be the most optimal choice. While a FIFO function is available in the Siemens Library of General Functions, the A-B model is preferred. The logic controlling the DO reject output is questionable and could possibly be improved with a one-shot driving a TOF. The final image provided is an interpretation of the entire process. Thank you for sharing the pdf for further study.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned the need for testing before implementation. While the initial setup may need adjustments, the main work is in the FIFO FB1. The incorporation of FFL, FFU, and RST into one instruction is aligned with the TIA model. The array size of 1024 could be optimized further. Siemens offers a FIFO in the "Library of General Functions," but the A-B model is preferred. The logic for rejecting defective items may need refining, such as using a one-shot driving a TOF. The provided image illustrates the process, but the question remains: does the program automatically adjust to reject specific defective items?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RBB20 inquired about the automatic adjustment capability of a program. Can it accurately reject a defective bottle out of a batch that passes through DI1 and DI2? The program should be able to do so if no bottles are present between DI2 and DI3. However, there may be timing challenges if certain components are too far apart. While this feature remains untested, there is potential to simulate the process in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RBB20 inquired about the program's auto-adjusting feature. For example, if only three bottles or items pass through DI1 and DI2, and one of them is defective, will the program still be able to reject that specific bottle? The FIFO logic breakdown below explains how the program operates:

- The Load logic ensures that when a bottle passes the DI2 station, it is added to the FIFO array. This means that the newest element's value is initially set to 0, indicating a good label.
- The Unload logic ensures that when a bottle passes the DI3 station, it is removed from the FIFO array. The bottle's pass or fail status is taken from the first and oldest element of the FIFO array, while the remaining bottles' values are shifted back in the array.
- The Detect failed label logic overwrites the most recently added bottle's status with a value of 1 to signify a bad label.

Please note that if the number of bottles between DI2 and DI3 stations is m.POS, then the status of the most recently added bottle can be found in Arr[m.POS-1].

Load logic Unload logic Detect failed label logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the analysis provided by drbitboy, the FIFO logic functions are thoroughly explained. It is crucial to grasp that the Load logic in this system guarantees that each bottle passing the DI2 station is added to the FIFO array. This addition involves incrementing the number of active elements in the array, known as POSmem, by 1. Furthermore, the newly added bottle starts with a value of 0, symbolizing a good label upon entering the array. Any label modifications to 1 are handled separately. On the other hand, the Unload logic is responsible for removing bottles from the FIFO array as they pass the DI3 station. Removal leads to a decrement in the number of active elements and involves extracting the status (0 for pass, 1 for fail) of the first bottle in the array (Arr[0]). The remaining bottles between DI2 and DI3 are then shifted accordingly within the array. Additionally, the Detect failed label logic updates the status of the most recent bottle (0 from Load logic) to 1, indicating a faulty label. It is important to note that the element representing the latest added bottle's status can be found using Arr[m.POS-1] when the bottle count between DI2 and DI3 is m.POS. Feel free to refer to the Load logic, Unload logic, and Detect failed label logic documents provided for further details. Thank you for your assistance, and I have thoroughly reviewed all the materials you shared.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RBB20 mentioned that they made modifications and adjustments to ensure everything works correctly. They will be presenting it next week and appreciate the help. It is crucial to study all the provided files as the process was not tested and their specific process is unknown. Keep us updated on the progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that since the process was never tested and the actual process is unknown, it would be helpful to receive updates on its progress. I haven't had a chance to verify it yet, but I am curious about what could happen if the camera were positioned before the sensor 1. What if the camera detects a rejected label, but the array position remains at -1, causing the trigger to not register or be inputted correctly? Let's stay informed on the outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the scenario presented by RBB20, the concern arises about the possibility of the camera scanning a rejected label before the sensor 1 is triggered. This raises questions about the timing and synchronization of events in the process. However, it is important to understand that the FIFO FB mechanism is triggered by the rising edge of DI2, while the writing action uses the rising edge of DI1. This means that the camera will always write a value of 1 to the most recent element in the array, which is determined by the values of m.POSm1 and m.FIFOpos.

The value of m.POSm1 is calculated as (m.FIFOpos - 1), with m.FIFOpos representing the position offset from the starting point of the array where the next bottle's value will be added. This value also indicates the number of elements currently in the array that have been detected by DI2 but not yet by DI3. It is assumed that the rising edge of DI2 (indicating the detection of a new bottle by the upstream sensor) occurs before the rising edge of DI1 (indicating a bad label detected by the camera). This sequence of events is crucial for the proper functioning of the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the implementation of the FIFO FB, the rising edge of DI2 is utilized for writing a value of 1, while the rising edge of DI1 is involved in the process as well. The latest element in the array, located at m.FIFOarray[m.POSm1], will always receive the value of 1. The position value m.POSm1 is determined by subtracting 1 from m.FIFOpos. m.FIFOpos represents the number of elements offset from m.FIFOarray[0] where the next value will be added to the array. This value also corresponds to the number of active elements in the array, indicating the items detected at DI2 but not yet at DI3. An underlying assumption is made that the upstream proximity sensor's rising edge (DI2 detects a new bottle) occurs prior to the rising edge of DI1 (camera detects a faulty label). It is now clear, thank you. The upcoming week will involve final testing procedures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RBB20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RBB20 mentioned, "I understand now, thank you." This week will involve final testing. It is crucial to grasp when events occur rather than just what the events are. The rising edge logic ensures that necessary actions like writing a 1 or shifting data in the FIFO array happen only during the sensor's transition from 0 to 1 in one scan cycle. It's important to be aware of the possibility of a "bouncing" or noisy input, where multiple rising edges may be detected due to vibrations or rapid scan cycles. To address this, a debounce can be implemented either in the hardware circuit or within the PLC logic. Understanding the specific system and conducting empirical testing will help fine-tune the debounce logic. Consider whether a TON (Timer On Delay) or a TOF (Timer Off Delay) is more suitable for the process, as this will impact the timing of the edge detection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: What is the purpose of using a shift register for rejecting items in a program?</h4>
<p class='text-muted'><strong>Answer:</strong> A shift register can be used to store and manipulate data as it moves through a series of stages, making it useful for tasks like tracking defects and triggering actions based on specific conditions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How many digital inputs are involved in the process of rejecting items using a shift register?</h4>
<p class='text-muted'><strong>Answer:</strong> There are 3 digital inputs (DIs) involved in the scenario described: DI1 for detecting defects in items, DI2 for handling bit shifting during item entry, and DI3 for connecting the cylinder to eject rejected items.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: Can you explain the step-by-step process of rejecting items using a shift register and bit manipulation?</h4>
<p class='text-muted'><strong>Answer:</strong> The process involves scanning for defects on items using DI1, shifting bits with each trigger using DI2, and triggering the cylinder to eject rejected items by performing bit shifting with DI3. This sequence helps in making decisions based on the detected defects and taking appropriate actions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What PLC model is being used in the described scenario for rejecting items?</h4>
<p class='text-muted'><strong>Answer:</strong> The S7-1200 PLC is being used in the scenario described, making it suitable for beginners in programming and automation tasks involving shift registers and bit manipulation.</p>
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
