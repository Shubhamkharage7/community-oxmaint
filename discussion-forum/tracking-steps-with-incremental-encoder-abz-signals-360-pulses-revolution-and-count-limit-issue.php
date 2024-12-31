
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently integrating an incremental encoder with ABZ signals and 360 pulses per revolution (equivalent to 1440 counts per revolution) into my medical device to replace the manual encoder wheel. The device features 2 footplates that move in steps through a linkage system, with each revolution">
    <meta name="keywords" content="incremental encoder, abz signals, 360 pulses per revolution, medical device, encoder wheel, footplates, linkage system, total number of steps, encoderposition, count limit issue, sensor module, maximum count, code snippet, address issue">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/tracking-steps-with-incremental-encoder-abz-signals-360-pulses-revolution-and-count-limit-issue">
    <title>Tracking Steps with Incremental Encoder: ABZ Signals, 360 Pulses/Revolution, and Count Limit Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Tracking Steps with Incremental Encoder: ABZ Signals, 360 Pulses/Revolution, and Count Limit Issue | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently integrating an incremental encoder with ABZ signals and 360 pulses per revolution (equivalent to 1440 counts per revolution) into my medical device to replace the manual encoder wheel. The device features 2 footplates that move in steps through a linkage system, with each revolution">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/tracking-steps-with-incremental-encoder-abz-signals-360-pulses-revolution-and-count-limit-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tracking Steps with Incremental Encoder: ABZ Signals, 360 Pulses/Revolution, and Count Limit Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently integrating an incremental encoder with ABZ signals and 360 pulses per revolution (equivalent to 1440 counts per revolution) into my medical device to replace the manual encoder wheel. The device features 2 footplates that move in steps through a linkage system, with each revolution">
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
        "@id": "https://community.oxmaint.com/discussion-forum/tracking-steps-with-incremental-encoder-abz-signals-360-pulses-revolution-and-count-limit-issue"
      },
      "headline": "Tracking Steps with Incremental Encoder: ABZ Signals, 360 Pulses/Revolution, and Count Limit Issue",
      "description": "Hello everyone, I am currently integrating an incremental encoder with ABZ signals and 360 pulses per revolution (equivalent to 1440 counts per revolution) into my medical device to replace the manual encoder wheel. The device features 2 footplates that move in steps through a linkage system, with each revolution",
      "author": {
        "@type": "Person",
        "name": "afm"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-25",
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
                <h1 class="text-white">Tracking Steps with Incremental Encoder: ABZ Signals, 360 Pulses/Revolution, and Count Limit Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>51 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3405</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">307</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently integrating an incremental encoder with ABZ signals and 360 pulses per revolution (equivalent to 1440 counts per revolution) into my medical device to replace the manual encoder wheel. The device features 2 footplates that move in steps through a linkage system, with each revolution representing one stride consisting of 2 steps (1 right and 1 left). My objective is to track the total number of steps taken.

Previously, I calculated the total counts (EncoderPosition) and divided by 720 (counts in half a revolution for one step). However, I encountered an issue where the count would reach 46, then abruptly change to -46 before counting back down and repeating the cycle. This behavior is likely due to the sensor module being limited to a maximum count of 32767, causing it to reset back to 0 after reaching this value.

I have included the relevant code snippet for reference. If anyone has suggestions on how to address this issue within the count limit, I would greatly appreciate your input. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to specify the PLC you are using to address the issue of the high-speed input lacking a minimum of a 32-bit register. Consider utilizing a word integer type rather than a double integer for better functionality. One workaround is to add a double (unsigned) word when reaching 32767 and resetting the encoder register to ensure a maximum value of 4294967295 is maintained.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The B&R X20CP0843 unit features a unique counter system when paired with the X20MM4455 motor module, offering 16-bit functionality. The EncoderPosition variable is of INT type. Will this approach provide real-time updates for my step counter? Currently, I am able to increment up to 46 steps before it switches to -46 and repeats. By updating a new double word register (referred to as TotalEncoderCounts) every 46th step, I hope to track the total steps accurately. Although I currently calculate live steps by dividing ActualPosition by 720, the TotalEncoderCounts only updates when ActualPosition is at full capacity, hindering my ability to accurately track live progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I haven't personally implemented this solution, we encountered a similar issue involving a 16-bit word and pack counts being read into a SCADA system. The function block was locked, preventing us from changing the data type to a 32-bit double word. To work around this, I utilized a change of value on the 16-bit word in the PLC, adding it to the 32-bit word and then resetting the 16-bit word. This ensured accuracy even if the counts were faster than the PLC scan time. For example, if both the 16-bit and 32-bit words started at 0, and the PLC detected a change in the 16-bit word from 0 to 2 (assuming multiple pulses per scan), it would add 2 to the 32-bit word and reset the 16-bit word. This method helped maintain accuracy in the counts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance the efficiency of your system, make sure to compute the delta of the module's counter during each scan and store the data in a dedicated long integer variable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a Set or Reset function for encoder inputs in a PLC? The A-B at HCSE inputs offer a feature to set the encoder count to a specific value, such as when a hoist passes a HOME sensor. During my experience working on a hoist, I set the count to approximately 2150 each time it passed the sensor while traveling southbound. This adjustment was necessary to ensure accurate positioning, especially since the sensor was located about 1/3rd of the way down the track. Keep in mind that setting the count correctly is crucial, as even minor discrepancies in calibration can result in significant measurement errors. If this adjustment is made successfully, the encoder count will be updated every time it reaches 000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Set up the encoder to utilize the z pulse for resetting with each revolution. Determine the direction of movement - whether moving forward or backward. Increase the step counter by two when the position exceeds a certain count (720) with a single input if the movement is forward. Decrease the counter when moving in reverse.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I_Automation here seeking some assistance. I am looking into the encoder input options in the PLC and wondering if it has a Set or Reset functionality. The configuration options available for my module's counter include a reset, which I have set up but have not yet integrated into my logic. Thank you for your suggestions so far. While I have not tried the recommended solutions before, I am eager to experiment with them. My goal is to utilize the ActualPosition variable, which provides a reading between 0 to 359 degrees. My initial approach involved creating ranges for 0-179 and 180-359 degrees, and incrementing a counter on the positive transition of these ranges. However, currently, the counter only increments after passing 180 degrees. How can I adjust this to increment the counter upon entering the 0-179 threshold instead? I may have oversimplified the issue, assuming that my motor will not exceed 40 rpm in my application. Any suggestions and advice on this matter would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Using 0 as the minimum value will not give you an advantage, as it cannot go any lower. To add variability, consider using values like 90 and 270. It's important to note that coils should not be reused, and if you want to generate a pulse from the comparison, place a single coil after the branch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geoff White recommended setting position zones at 0, 90, 180, and 270 degrees for footplate tracking. These zones designate specific footplate positions in the cycle, such as "home position," "right foot front extreme," "feet together," and "right foot back extreme." While the current solution works for now, a reset of the counter may be needed for future applications. To improve accuracy, consider adjusting the zone boundaries to account for variations in encoder readings. Testing the software with a 12 VDC motor at 80 rpm revealed inconsistencies in zone detection, indicating a need for a slower motor speed. Experimenting with a gearmotor at 40 rpm could enhance footplate tracking and ensure all zones are accurately captured within one revolution. Do you have any suggestions for optimizing position tracking using encoder output for precise zone detection?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>At 40 rotations per minute (RPM), the encoder updates at a rate of 2/3 rotations per second (RPs) or 2-2/3 zones per second. Doubling the RPM to 80 results in an update rate of 4/3RPs or 4-1/3 zones per second. If the encoder value is being updated at a frequency of around 5Hz or slower, it is doubtful that any zones are being missed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is advisable to follow the advice given by OkiePC. Begin by setting the 32-bit virtual counter to the appropriate value and then add the difference between encoder counts. By dividing by 1440, you can determine the number of turns and then use the remainder to find the position within a turn. It would have been ideal if you had chosen an encoder with a binary power of counts per turn, such as a 4096 CPR or 1024 PPR encoder. With these encoders, you could easily interpret the bits 12 and above as the number of turns and the lower 12 bits as the position within a turn, eliminating the need for division or modulo instructions. For instance, if using a 4096 CPR encoder, bits 10 and 11 would indicate the position within 90-degree segments. Implementing this code would be much simpler than the method mentioned earlier.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are two possible scenarios to consider: 1) If the encoder is not being read quickly enough, counts may be missed (although this is less likely when using a high-speed hardware counter). 2) If the program is not running at a fast enough pace to detect when counts fall within the designated windows, it is possible that the encoder position is being updated asynchronously to the PLC program. If the window size is too small, the program may not be able to capture the values promptly. To address this issue, try increasing the window size to see if it improves the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geoff White pointed out that the encoder position may be updated asynchronously to the PLC program. If the windows are too small, the program may not receive the values quickly enough. Try increasing the window size to see if that improves the situation. While updating a line from SLC to CLX, I followed the OEM's instructions but encountered an issue where they were checking for a timer ACC value of 3 with a 1-second base timer. In Studio5K, the base is 0.001, so the OEM recommended checking for EQU ACC 3000. However, the likelihood of the timer ACC being exactly 3000 during a specific rung scan was only 0.001% and never occurred. I suggested changing it to LIM 3000 ACC 3999 to reduce the resolution of the timer read to a 1-second base. After a month of meetings and internal discussions, the OEM finally agreed to make the change. Due to the urgency of the situation with the line needing to run, we quickly implemented this adjustment during a meeting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AFM reported that when running the encoder with a 12 VDC motor at 80 rpm, it experiences issues with skipping ranges and inconsistently having each 4 zones be true within 1 revolution. This problem arises because the encoder cannot "catch" each zone fast enough. Is your PLC capable of receiving pulses from the encoder? The encoder generates 1440 pulses per revolution. Could you confirm this? What is the technical definition of a "pulse"? When the encoder is run with a 12 VDC motor at 80 rpm, there are 1400 pulses per * 80 rpm, equaling 115200 pulses per minute. Is this calculation correct? This means there is 0.00052 sec per pulse (60 sec / 115200 pulses per minute). What is the scan time of your PLC? Is the rotation speed consistent?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After observing numerous responses, a question arises about incremental encoders. The Z output of these encoders activates only once per revolution, lasting for a single pulse width. To ensure that no pulses are missed, it is advisable to utilize a high-speed counter module. By leveraging the Z output, you can accurately determine and establish a consistent shaft position, provided you possess the appropriate drive.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have recently upgraded my bench system by replacing the motor with a worm gear motor, resulting in improved accuracy with occasional skips or unresponsiveness. According to Geoff White, adjusting the size of the windows may improve the program's ability to read values quickly. However, I am concerned that enlarging the windows may affect the accuracy of position tracking. For example, expanding the "FPTogether" zone from +/-10 to +/-15 degrees may lead to more variability and less precision in displaying the zone output on the HMI. Consequently, widening the ranges may impact the consistency of the zone output position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK inquired about the functionality of your PLC in capturing pulses from an encoder that produces 1440 pulses per revolution. This raises the question of what exactly a "pulse" is from a technical standpoint. 

When the encoder is paired with a 12VDC motor running at 80 rpm, it results in 115200 pulses per minute. This equates to a pulse duration of 0.00052 seconds. It is important to consider the scan time of your PLC in relation to this pulse rate.

In my setup, the PLC captures pulses from a 360 PPR encoder, leading to 1440 counts per revolution. The program is structured as a 1ms task class. While the rotation speed remains consistent in my testing environment, slight fluctuations are expected in real-world applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to adjusting window sizes in position tracking, there may be concerns about potential impacts on accuracy. Increasing the window size could possibly affect the accuracy of position tracking, but it may also be necessary if the PLC is not responding properly to the current setup. In such cases, expanding the window (e.g. from +/-15 to +30/-0) and implementing a OneShot check afterwards can help prevent issues from occurring more than once, specifically at 180 degrees or beyond. It's important to find the right balance between window size and accuracy to ensure optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I replaced the motor on my bench system with a worm gear motor, I was able to achieve a more precise 34 rpm. Despite some occasional skips or brief moments of unresponsiveness, the results were significantly improved. However, I am now considering widening the windows in my position tracking system to improve accuracy. For instance, by expanding the "FPTogether" zone from +/-10 to +/-15 degrees, I wonder if I may sacrifice precision. When the -|P|- pulse within this range is true, I want to trigger a response on my HMI. Will expanding these ranges lead to more variability and less precision in the timing of the zone output display? It's essential to find the right balance between widening windows for status display and maintaining accuracy in the logic running behind the scenes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I_Automation suggested that opening a window may resolve issues with the PLC's response to the current setup. Adding a wider window range and implementing a OneShot check can prevent multiple occurrences of the issue. Additionally, a "zone count" counter was introduced to address UI light delays in detecting zones, ensuring each zone is properly captured. It was confirmed that the zone counter consistently doubles the step counter. However, occasional rapid increments in the counter raise concerns about the accuracy of zone detection. Minor angle adjustments can affect zone positioning within the step cycle, prompting the exploration of more precise logic solutions beyond manual angle checks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need to find a way to calculate the live RPM for my project. One common method is to determine pulses per second (PPS) and then convert that to pulses per minute (PPM) by multiplying PPS by 60. From there, divide PPM by the pulses per revolution (PPR) of the encoder to get the RPM (where encoder PPR is typically 360 pulses per revolution). However, I am unsure about how to proceed with determining pulses per second with my specific module. Are there any alternative methods I should consider? The RPM data will be essential for calculating live speed and distance traveled, among other important metrics. Any guidance on this matter would be greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the PPM is not a constant, calculating it may result in fluctuating values that are difficult to interpret. To ensure accuracy, monitor the encoder count every 5 seconds and then again after 2 seconds to confirm it has not reset. Compare value B to value A and subtract A from B to calculate the counts per 2 seconds for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could the counter incrementation mentioned earlier potentially pose a problem in this scenario? For instance, if the last encoder counter reading was approximately 32700 and the next reading 2 seconds later showed around -32500 or a similar value, it may create discrepancies. The method I have been using involves dividing the total counts (EncoderPosition) by 720 (counts in half a revolution for one step). However, the count reaches up to 46, then switches to -46 before counting back down and repeating the cycle. This behavior is likely due to the limitation of the sensor module which has a maximum count of 32767. It increments up to this limit, then negates and resets back to 0.

Although the step counter is functioning correctly with the current logic, adjustments may be needed to calculate the live RPM. One proposed solution is to reset EncoderPosition to 0 on Z pulse, ensuring that it remains within the range of 0-1440 counts. These counts can then be used to determine the angular position in degrees (EncoderPosition/4 = 0-360 degrees). Introducing a variable TotalCounter and adding 1440 to it on Z pulse can help in calculating the LiveCounter, which maintains a running total count until the reset.

Implementing this approach would ensure a more accurate reading for live RPM, as it creates a continuous count unlike the limitations posed by the 12 bit counter module previously used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the new value is greater than or equal to the old value, then the difference (delta) will be the new value minus the old value. If the new value is less than the old value, then the difference (delta) will be calculated as follows: (new value - (-32768)) - (old value + (-32768)). Work with the delta by adding it to a continuous total that you expect to reset at 1440, meaning you subtract 1440 from the total when it goes over 1439. By dividing the running total by 4, you will always have an angle measurement within the range of 0.0 to 360.0. This calculation assumes forward motion only, but backward motion can also be accommodated with additional model assumptions. Alternatively, if a Z pulse is detected, subtract 1440 from the EncoderPosition (without resetting to 0 to avoid missing pulses).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could it be that EncoderPosition serves as the accumulator for counting incoming pulses, accumulating 1440 with each rotation before rolling over from 32767 to -32768? In other words, does the EncoderPosition rollover occur independently from the rotation rollover triggered by the Z pulse?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After taking a break from the project, I have returned. DrBitboy inquired about whether EncoderPosition is the counter accumulator for tracking incoming pulses, accumulating 1440 with each rotation before rolling over from 32767 to -32768. The EncoderPosition rollover is separate from the rotation rollover (Z pulse), correct? Yes, the initial statement is accurate. While the name EncoderPosition may be misleading, it serves as the active encoder counter that incrementally increases until hitting 32767, then wrapping around to its negative inverse. A separate variable, EncoderPositionLatch, stores the EncoderPosition and only updates with the z signal. To enhance zone detection precision, particularly since the device will not exceed around 38-40 rotations per minute, one approach could involve resetting EncoderPosition to 0 on the Z pulse to keep it within 0-1440 counts and translating counts into degrees for positioning (EncoderPosition/4 = 0-360 degrees). Introducing TotalCounter to add 1440 upon the Z pulse, LiveCounter can then be calculated as the sum of EncoderPosition and TotalCounter until a reset occurs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AFM inquired about improving precision in zone detection to ensure the device stays within a specific RPM range of ~38-40. One suggested solution was to reset EncoderPosition to 0 on Z pulse, keeping it within 0-1440 counts range. However, this method may not be effective as it could result in losing pulses beyond the "top dead center" position, ultimately leading to accumulated errors over time. Subtracting 1440 from the count may also not guarantee accuracy due to potential pulse loss. This issue highlights the importance of finding an alternative method to enhance precision in zone detection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It would be beneficial to explore alternative methods for accumulating data to ensure accurate pulse retention. Currently, my rolling-over-counter logic allows me to track total steps, position readings (ranging from 0 to 360 degrees), and partially detect zones. However, my ultimate aim is to enhance the precision of encoder position clarity to optimize "zone catching."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AFM mentioned the need for a more efficient method for accumulation to avoid losing pulses. The current logic involves a rolling-over-counter that provides the total steps taken, position readout (0-360 degrees), and somewhat functional zone detection. However, the main objective is to enhance the accuracy of the encoder position to improve "zone catching."

To achieve this goal, on each scan cycle, subtract the current accumulator value from the previous one to determine the change in pulses for the current cycle. Then, transfer the current accumulator value to the previous accumulator tag for the next cycle and add the change in pulses value to the current position in pulses tag.

If the current position in pulses value exceeds 1439, subtract 1440; if it is less than 1439, add 1440. Divide the current position in pulses by 4 to obtain the angle in degrees. A method to assign an initial current position in pulses at system startup is necessary.

It is important to note that the subtraction process may cause overflow or underflow (a 16-bit signed INT) when the change from the previous accumulator value to the current one results in a -32768 to +32767 wraparound. This issue can be addressed with minor adjustments when rollover is detected. If further details are needed, they can be provided upon request.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method is to continually refer back to your overall accumulator and perform calculations based on that. By applying a Modulo math function to the accumulator and 1440, you can always obtain a fraction of the total value. This approach ensures that no accumulated value is lost. Additionally, the remainder function can be utilized to easily determine the exact angle for each cycle. 
In terms of RPM, you can calculate the change in accumulator for each PLC scan and compare the results. If possible, access the previous scan time of the PLC to calculate the Rate Per Scan by analyzing the delta and scan time. Extend this calculation to determine the average RPM over a few scans (such as 1 second or more). This method is likely to be effective in practice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nicherbert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing a Modulo math function on the accumulator and 1440, the resulting remainder will consistently be a fraction of the total. Another approach involves incorporating a [modulo 1440] offset, starting at 0, which increases by 736* with each +32767 => -32768 rollover. It decreases by 704* with each -32768 => +32767 rollunder and is then reduced modulo 1440. This offset is combined with the [-32768:+32767] accumulator value, and the sum is reduced modulo 1440 to obtain the final value. It is important to note that the modulo instruction is designed to return a positive value, even when the input operand is negative. *Note: The direction of the increments may need to be verified through testing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In each scan cycle, the difference between the current and previous accumulator values is calculated to determine the change in pulses. The current accumulator value is then moved to the previous accumulator tag for the next cycle, and the change in pulses value is added to the current position in pulses tag. If the current position in pulses value exceeds 1439, 1440 is subtracted. Conversely, if it is less than 1439, 1440 is added. Dividing the current position in pulses by 4 gives the angle in degrees. It is important to assign an initial current position in pulses when the system starts up, as the subtraction may overflow or underflow if the values go through the -32768 to +32767 wraparound.

For rollover detection and accumulation, one approach is to monitor when the current - previous value turns negative and trigger a counter. This counter should output a value that is a multiple of the total expected range of the data type, such as 65536 for an INT. Adding the current accumulator to the rollover count multiplied by the accumulator range gives the actual total pulses.

Calibrating the current position in pulses may require a routine between power cycles or before a test. This can be achieved by incrementing steps until a rollover is detected, allowing for an accurate determination of the position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nicherbert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This device operates at a maximum speed of 40 revolutions per minute and generates 1440 pulses per revolution, resulting in approximately 60,000 pulses per minute. With a scan time ranging from 1-10ms, each scan cycle can only accommodate 1-10 pulse changes, with a maximum of 766 pulses. The following code snippet MOV current_accumulator change_in_pulses​​GRT change_in_pulses 32000LES previous_accumulator -32000OTL change_in_pulses.15OTU previous_accumulator.15​GRT previous_accumulator 32000LES change_in_pulses -32000OTU change_in_pulses.15OTL previous_accumulator.15​​SUB change_in_pulses previous_accumulator change_in_pulses​​MOV current_accumulator previous_accumulator​is designed to carry out this operation. However, the initialization process will require a more intricate coding approach regardless of the chosen method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Determining the current position in pulses may require a calibration routine to ensure accuracy and alignment with the program. By detecting a rollover in the steps taken, you can pinpoint the exact position. However, to maintain alignment with the physical world, it is essential to identify when the motor reaches a specific position. This can be achieved through methods like encoding a longer gap at a known position or using a digital signal pattern. By wiring a signal to the counter card, you can effectively reset the accumulator and monitor the position. It is crucial to ensure that your scan time is faster than the revolution speed to avoid missing rollover events. Additionally, consider both the fastest and slowest rates when calculating RPM values to avoid inaccuracies. Creating a secondary accumulator that resets each second and converting the value to RPMs can provide a more reliable measurement over time. Remember to assess the reliability of your method and make adjustments as needed for optimal results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nicherbert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing the output of an encoder at 40RPM with 1440 pulses per revolution, it is essential to consider the speed at which pulses are being generated. The high pulse rate may cause issues with detecting individual pulses within a PLC scan cycle. In such cases, utilizing a high-speed counter (HSC) can help track the encoder's position effectively. However, challenges may arise when dealing with rollover scenarios, where the HSC accumulator value exceeds its limits.

To address this, a practical solution involves implementing a "rollover offset" mechanism. By adjusting this offset value during rollovers, it becomes easier to maintain accurate encoder counts relative to the initial position. Additionally, establishing an initial reference point (0° position) can be achieved by using an initializing pushbutton in conjunction with the Z signal's rising edge.

By slowly rotating the device and clearing both the HSC accumulator and rollover offset when the pushbutton is pressed during a Z signal rising edge, a precise initial position can be established. This method ensures initialization accuracy within a small margin of error, especially when operating at lower speeds like 4RPM.

Overall, the key to effectively managing encoder readings lies in understanding the interplay between the HSC accumulator, rollover offsets, and establishing a reliable reference point for accurate measurements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to drbitboy, the binary pattern resulting from tooth removal is 10101000101010001010100, not 101010010101001010100. This discrepancy highlights the importance of precision in optical encoders, which use a through beam sensor to detect marks on a glass plate. Additionally, the original poster (OP) is seeking a reset function tied to mechanical movement, often requiring several hundred revolutions of the motor and encoder.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The objective is to integrate an incremental encoder with ABZ signals, offering 360 pulses per revolution (equivalent to 1440 counts per rev) into a medical device's footplate system. This system involves two footplates linked to cycle through steps, where one full revolution corresponds to one stride comprising two steps (one right and one left). The ultimate aim is to capture the total number of steps taken for better tracking and monitoring.

Modern encoders now utilize optical technology with a through beam sensor to detect precise markings on a glass plate, ensuring accurate data collection. It is crucial to understand that the A and Z signals are distinct components. When following specific installation instructions, such as aligning signals by "removing a tooth," the resulting pattern will differ from the standard 1010101010100101010 sequence.

In addition, the desire to reset the encoder after each step poses a challenge, as the mechanics may require numerous motor revolutions before completion. Each revolution of the encoder corresponds to a single step, as highlighted in a previous post. As for the PLC scan cycle duration, it is currently set at 1ms, which may be insufficient to handle the maximum expected speed of 40RPM, equivalent to approximately 57,600 pulses per minute or 1kHz. It is crucial to maintain a sampling rate of at least 2kHz to ensure accurate data collection and analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the helpful suggestions. Before I proceed with further questions regarding the suggestions, I would like to clarify one thing. I have various IO mapping options available for the ABZ counter module. Currently, the iCounter variable acts as the encoder accumulator, increasing to +32767, rolling over to -32767, then increasing to +32767 again in a repetitive cycle. My initial plan is to activate the qResetCount and increment a separate counter, previous_counter, by 1440 upon a positive trigger of the Z signal. The sum of iCounter and previous_counter should equal the total_accumulation. However, I am concerned about the possibility of experiencing a "loss in count" as discussed in Post#28. Will this method lead to such an issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Will this technique result in a decrease in count as mentioned in Post#28? This could be a potential issue, considering the interrupt scan time is at 1ms. While the system may be able to handle it, relying on such uncertainty is not advisable. Various solutions are being considered to address this issue, such as allowing the High-Speed Counter (HSC) to increment its accumulator by 1 for each pulse and dealing with any resulting problems through software adjustments. Although not ideal, this approach should be functional. The main challenge lies in the fact that the counter accumulation runs independently of the PLC, which has its advantages and drawbacks. The PLC does not need to detect every signal edge, but asynchronicity can lead to unpredictable results. It's important to consider how often the HSC updates the counter state in PLC memory, as this can affect the accuracy of the system. Some HSC modules, like the 2080-MOT-HSC for Micro800 PLCs, offer a feature to reset the accumulator value to 0 when it reaches a certain preset value. This feature could be helpful in simplifying the process, allowing you to set the preset to 1440 and avoid dealing with other issues like roll-over or under. Check if your PLC and HSC module have this feature for an easier solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the past, OkiePC shared valuable information in a post that received positive feedback. The issue discussed in the thread has long been resolved. It is crucial to avoid using encoders with 360 lines or 1440 counts per revolution, as it is recommended to opt for an encoder with counts/rev in powers of 2 for easier mathematical calculations. By utilizing a 16-bit counter, concerns about overflow or underflow can be mitigated when subtracting old counts from new counts. It is essential to add any differences to a 32-bit accumulator if needed. High-speed counter cards should ideally incorporate the A, B, and Z inputs to prevent inaccuracies caused by encoder vibrations. When stopped, the B phase can help manage added or subtracted counts due to vibrations. De-glitching is achieved by inputting encoder signals through a series of D flip-flops. Avoid resetting the high-speed counter, and instead, enable the Z pulse to latch inputs during homing for maintaining count accuracy. RMC encoder inputs feature oversampling and utilize latches for Z, end, and retract limits to prevent count loss. It is advisable to inquire about the expected counts per second from customers and recommend encoders with counts per revolution that are a power of 2. Encoders with 8192 or 16384 counts per revolution may not offer significant advantages over lower count encoders, but the challenge lies in directly interfacing them with PLCs or counter cards due to the high count values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone,I am currently working on a project involving a robotic gait trainer that functions similarly to an elliptical machine. The project requires the detection of user effort within the system, which is indicated by an increase in RPM of the motor. When the user exerts effort, there is a momentary rise in RPM, and the HMI reflects this effort in real-time.Due to the system's linkage design, the RPM fluctuates within a range based on the user's speed and step length. For example, although the motor is set to run at 25 RPM, the live RPM readout may range from 22-27. When effort is exerted, this range shifts to 25-30.Currently, my approach involves scanning the motor for 5 seconds, noting the maximum RPM value, and using it as a reference against the live readout. For instance, if the RPM exceeds 27, it indicates user effort. However, I am looking to enhance the sensitivity of the system. How can I differentiate between effort and non-effort in cases where the RPM values overlap in both ranges? I have attached a rough sketch of the HMI trend lines for each scenario. Thank you for your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to MaxK's query, @afm, are we approaching the current discussion with a focus on resolving the issue at hand? Over the course of 85 posts, there has been a lack of clarity in outlining the specific information required by the end user. Have you considered the concept of "design," which involves defining the problem, analyzing challenges and solutions, selecting methods, and conducting initial tests? Despite any skepticism, I offer you a valuable piece of advice among all the suggestions received on this forum: Avoid wasting time on addressing "issues" (essentially resolving your own "issues" with the help of forum participants) that do not contribute to your ultimate goal. It is crucial to articulate the problem before attempting to solve it.

I agree with MaxK to an extent, but I have a different perspective on the last point. There is a right and wrong way to utilize encoders effectively. However, I do share the sentiment that original posters frequently fail to provide details about their application and the underlying reasons. It is uncommon for a problem not to have been encountered previously. Many discussions drag on without resolution because the original poster does not furnish essential information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I may be late to the game, check out this video demonstrating a CoDeSys simulation on how to manage counting encoder pulses. Watch as RollOver2 tackles the task at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I am utilizing the same system as referenced by @MaxK. All of my projects are based on this system, hence the overlap with previous discussions. I lack guidance in my work and many suggestions are new to me, so please bear with me as I am still learning. To clarify, is the current thread addressing the issue mentioned above? In 85 posts, the exact information needed by end users has not been outlined. Have you considered the concept of "design" - defining a problem, analyzing difficulties and solutions, selecting methods, and verifying them? The most valuable advice I can offer is to stop wasting time on addressing issues that do not contribute to your ultimate goal. Without a clearly formulated problem, it is impossible to find a solution.

The thread mentioned is focused on a different project that is currently on hold, so I am not actively working on it at the moment. However, I do plan to revisit it in the future to address its shortcomings related to the lack of positional data. This current project involves a medical device similar to an elliptical machine with two footplates. The objective is to achieve "position tracking" to determine the user's position within a step. The existing system utilizes a manual encoder wheel with limited information. The goal is to enhance resolution to identify which foot is stepping and where it is in the gait cycle. 

Regarding hardware selection, I am open to switching to a 256, 512, or 1024 pulses per revolution encoder to simplify the process. Any advice on choosing the most suitable option for my 12-bit counter would be appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is a 12-bit counter (0-4095) and how does it differ from a counter rolling over at 32k? If you have a power-of-2 counter, such as 1024 (equal to 210), you can avoid dealing with the rollover offset. By performing a bit-wise AND operation with 1023 (equal to 2n-1, where n=10) on the counter, you can find the exact rotation state and convert it to degrees by multiplying it with (360.0/1024.0). Even when the counter rolls over at a larger power-of-2, the expression result will rollover from 1023 to 0 (or rollunder from 0 to 1023), without changing the offset. While you still need to set the system's starting point by positioning the footplates at 0° and resetting the counter to 0, thereafter it becomes simple to determine the current angle using the following code: ActualPosition := (counter.ACC AND 1023) * 360.0 / 1024.0. Another option to AND 1023 would be Modulo 1024, which may be easier to comprehend.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To increase the resolution of a counter, consider shifting a 12-bit counter to the left by 4 positions to expand it to a 32-bit value/counter. This allows the lower 16 bits to represent a fraction of a turn, while the upper 16 bits indicate the number of full turns. By multiplying the lower 16 bits by 360, you can obtain the degrees stored in the upper 16 bits, along with the fraction of a degree in the lower 16 bits. It's worth noting that divisions are relatively more resource-intensive compared to shifts, additions, and multiplications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring further about the 12-bit counter (0-4095) mentioned by drbitboy, as it was mistakenly referred to as a 16-bit counter rolling over at 32k. Can you elaborate on the ACC AND 1023 expression and its connection to elapsed time, specifically in relation to 1023 or Mod 1024? Seeking to gain a better comprehension of the purpose behind this expression. Upon revisiting power of 2 counters and considering cost implications, it reaffirmed the decision to opt for incremental counters over absolute ones.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While revisiting the benefits of power of 2 counters and comparing costs, I was reminded of why I chose the incremental encoder over others available. The most affordable option I have come across is from automation direct, but the price is three times higher than the 360 ppr encoder due to its classification as an absolute encoder. My goal is to make the current encoder work, and if that proves challenging, I may consider switching to a 128 or 256 ppr encoder. I will explore the delta approach as suggested by many. My main uncertainty lies in understanding when a scan takes place. Is there a scan bit that can serve as a trigger for calculations in each scan cycle?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The delta approach is not influenced by the timing of scan cycles or counter scans, as long as the counter accumulator remains below its capacity. A "counter scan" transfers the hardware counter accumulator value to a memory image, which is then used by the PLC program for processing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are unfamiliar with how integers are represented in binary in computer systems, it is recommended to refer to this resource first. The same applies if you need clarification on boolean math or bitwise operations on integers. A user sought explanation on the "counter.ACC AND 1023" expression and its relation to elapsed time and the number 1023 or Mod 1024. To gain a better understanding of this expression, a deeper dive is necessary.

Upon revisiting power of 2 counters and considering costs, the decision to go with incremental counters over absolute ones was reaffirmed. For instance, consider a 3-bit signed counter triggered by a shaft encoder producing 4 pulses per revolution, equivalent to 1 pulse every 90 degrees of rotation. The counter will increment based on encoder pulses, rolling over from positive to negative values. 

In this scenario, the mask to be applied is 3 in decimal, represented as 0b011 in binary, as it is one less than the number of encoder pulses per revolution. By evaluating the expression "counter.ACC AND mask" bit by bit, the position of the shaft can be determined in terms of pulses and angles.

For example, if the current accumulator value is -2decimal = 0b110, indicating six pulses or 540 degrees of rotation, the resulting bit-wise evaluation yields 2 in decimal. This means the shaft is 2 pulses past its starting position, equivalent to 180 degrees of rotation.

Furthermore, a table showcases various accumulator values, their binary representations, the result after applying the mask 0b011, and the corresponding angles. This breakdown aids in understanding how the counter accumulator values translate into shaft positions in terms of pulses and angles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The full revolution time is equivalent to 2 pulses per revolution, totaling 1440 pulses. Reviewing the accompanying curves may prompt further inquiries for the reader.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
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
<h4 class='text-dark'>FAQ: 1. What type of encoder signals are being used in the setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - ABZ signals are being used in the setup, where A and B are quadrature signals and Z is the index signal.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How many pulses per revolution does the incremental encoder have?</h4>
<p class='text-muted'><strong>Answer:</strong> - The incremental encoder has 360 pulses per revolution, which is equivalent to 1440 counts per revolution when considering the quadrature signals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How are steps defined in the context of the device's movement?</h4>
<p class='text-muted'><strong>Answer:</strong> - Each revolution of the encoder corresponds to one stride, consisting of 2 steps (1 right and 1 left) due to the device's footplates moving in steps through a linkage system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What issue was encountered with the count tracking system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The count would reach 46, then abruptly change to -46 before counting back down, likely due to the sensor module being limited to a maximum count of 32767 and resetting to 0 after reaching this value.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How was the total count of steps calculated initially?</h4>
<p class='text-muted'><strong>Answer:</strong> - The total counts (EncoderPosition) were divided by 720 (counts in half a revolution for one step) to calculate the total number of steps taken.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 6. Are there any suggestions on how to address the count limit issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - Suggestions on addressing the count limit issue within the sensor module's limitation would be appreciated.</p>
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
