
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on developing a call light and alarm system for roughly 20 stations, each equipped with their own call switch. The system is designed to communicate with a PLC to trigger an MP3 alarm that will announce specific station numbers in need of assistance.">
    <meta name="keywords" content="cycling voice annunciation system, call light stations, alarm system for multiple stations, plc communication for mp3 alarm, simultaneous station activation challenge, alternating station number announcements">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/cycling-voice-annunciation-system-for-call-light-stations">
    <title>Cycling Voice Annunciation System for Call Light Stations | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Cycling Voice Annunciation System for Call Light Stations | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on developing a call light and alarm system for roughly 20 stations, each equipped with their own call switch. The system is designed to communicate with a PLC to trigger an MP3 alarm that will announce specific station numbers in need of assistance.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/cycling-voice-annunciation-system-for-call-light-stations">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cycling Voice Annunciation System for Call Light Stations | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on developing a call light and alarm system for roughly 20 stations, each equipped with their own call switch. The system is designed to communicate with a PLC to trigger an MP3 alarm that will announce specific station numbers in need of assistance.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/cycling-voice-annunciation-system-for-call-light-stations"
      },
      "headline": "Cycling Voice Annunciation System for Call Light Stations",
      "description": "Hello everyone, I am currently working on developing a call light and alarm system for roughly 20 stations, each equipped with their own call switch. The system is designed to communicate with a PLC to trigger an MP3 alarm that will announce specific station numbers in need of assistance.",
      "author": {
        "@type": "Person",
        "name": "JHKawa"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-25",
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
                <h1 class="text-white">Cycling Voice Annunciation System for Call Light Stations</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JHKawa</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>20 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">661</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">25</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on developing a call light and alarm system for roughly 20 stations, each equipped with their own call switch. The system is designed to communicate with a PLC to trigger an MP3 alarm that will announce specific station numbers in need of assistance. However, the challenge arises when multiple stations activate their call switches simultaneously. In such instances, the system should alternate between announcing the different station numbers within a set timeframe, such as 5 seconds per announcement.

To achieve this functionality, I am considering utilizing either CodeSys or Node-Red for programming, depending on which platform best suits my objectives. I will be utilizing an Opto22 Groov Epic for this project. While I have prior experience with A-B programming and some familiarity with Node-Red on a Raspberry Pi, I am relatively new to CodeSys.

Any insights, advice, or suggestions on how to approach this issue would be greatly valued. Thank you in advance for any help you can provide.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize a single bit within a 32-bit integer to correlate each station with its corresponding call switch - with station 1 mapping to bit 1, station 2 to bit 2, and so on. In cases where 32-bit integers are unavailable, opt for two 16-bit integers instead.

In the coding model (executed on each scan cycle), when the voice announcement is not in progress, a counter should increment from 1 to 20 and loop back to 1 upon reaching 20. If the bit value positioned at that counter within the 32-bit integer equals 1 (indicating an active call switch), transmit the lower 5 bits of the counter to the 5 output bits for the light, labeled as XIC bits32.[counter] XIC counter.0 OTE output.0 and XIC bits32.[counter] XIC counter.1 OTE output.1. Additionally, initiate a timer to halt the counter's progression while the voice announcement is ongoing. 

If the bit value positioned at the counter within the 32-bit integer equals 0, the code will generate 0s across all five announcement outputs. This process cycles through all call switches every 20 scan cycles (approximately 20ms), pausing during voice announcements for any active call switch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It all clicks now. Many thanks! I was struggling with this issue and couldn't find the solution. Connecting the counter to the cyclical scan and pausing during active announcement turned out to be the crucial aspect I overlooked.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHKawa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your PLC requires a different approach to bit manipulation, check out this functional demonstration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing an array of integers can simplify the process. With affordable memory costs, utilizing an integer to represent a switch being on (1) or off (0) within an array of integers can provide a clearer and more manageable structure to follow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're interested, I can share a program I created that involved around 15 AD PLCs, with one at each call station. These PLCs reported to a master unit, which also had an annuciator and call/phone line for maintenance purposes. While my program may not be as sophisticated as what drbitboy could develop, it still successfully managed the hardware. I recommend looking into the Click Plus for your own setup. How far apart are the call stations in your system? This project evolved into tracking response times, downtime, and offering online viewing/reporting capabilities. Though it's been around 20 years, I can try to locate the program for you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a similar issue with a line containing 55 potential alarms, but the iFix HMI could only show one alarm at a time. The initial programmer gave up after finding the first alarm, leading to overlooked undertemp alarms following a low tank level issue due to maintenance. This resulted in the loss of a full day's production on the gold plating line.

To address this, I utilized a method involving setting a pointer (N20:0 INT) to 0 on the SLC5/05 PLC. By checking for each alarm and incrementing the pointer by 1 for each active alarm, I was able to create an array of all active alarms with a designated length based on the pointer value. If the pointer ended up being 0, it meant there were no alarms present, and the display would show 0. If the pointer equaled 1, the alarm value at N20:1 would be displayed. For multiple alarms, a 5-second timer was cycled to show the succeeding alarm values.

The original programmer expressed interest in my approach for other HMIs but was unwilling to compensate me for my work. As a result, the boss allowed me to password protect and restrict future access. Despite this, the programmer continued to seek my assistance. This method could also be applied to check for station calls and toggle between them if necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you to everyone for your valuable input and guidance. I truly appreciate all the feedback and suggestions provided. DrBitBoy, your example has greatly enhanced my understanding and clarity on the subject. I am excited to experiment with both methods once I have access to the plc. I plan to use CODESYS for programming, and I am confident that the process will be smooth and efficient.

GeniusInTraining, I have decided to stick with the Opto22 Groov hardware for its specific features that will be beneficial for my project, such as Webpage hosting, Emailing, Sending data to SQL, and Polling data from AB plcs. The call stations are located in different departments within a welding facility, each requiring a separate plc system, with the exception of SQL reporting. The use of Turck I/O blocks (TBEN-L4-16DXP) utilizing ModbusTCP communication with the PLC will ensure seamless integration.

Incorporating Ethernet/IP for the compactlogix plcs in the welding stations/robots is essential, and I am confident in utilizing Node-Red for this purpose. While data polling from these systems is a secondary consideration at the moment, I am open to exploring this functionality in the future.

I appreciate the offer to review your program and welcome any additional assistance and insights. I_Automation, I am grateful for your suggestion regarding organizing data with 0, 1, >1 parameters. While initially contemplating a more extensive code structure, I now see the elegance in your approach of utilizing arrays for data management. I look forward to applying these concepts once I have the plc in hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHKawa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHKawa acknowledged and appreciated the transition of data into an array, suggesting it was similar to the concept DrBitBoy mentioned earlier. However, there was uncertainty regarding@I_Automation's algorithm. It was speculated to operate as an integer FIFO, differing from the proposed approach. Concerns arose about properly removing alarms and avoiding multiple instances of the same alarm number in the FIFO.

The solution proposed involved utilizing an integer array for storing input bit states, akin to the B9 buffer bits in the ladder example for easier indirect addressing. The code snippet provided outlined the structure of the array and the logic for handling alarm indexes and annunciations.

It was emphasized that the algorithm's clarity and simplicity are crucial for future debugging scenarios when issues arise with missing alarms or malfunctioning components. Exploring various approaches and selecting the most readable solution was advised for effective long-term maintenance. JHKawa expressed intent to experiment with the PLC to test the functionality firsthand in pursuit of an optimal and easily maintainable algorithm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHKawa expressed interest in utilizing Opto22 Groov hardware for their project, emphasizing the desire to acquire one. While willing to share if they had one, they noted personal preference plays a role in technology choice like ice cream flavors. Additionally, the importance of tackling the project step by step was highlighted, leading to a successful data acquisition endeavor with SCADA, reports, and a corporate-viewable webpage. Wishing luck on similar projects ahead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here is an alternative method (not yet tested) that sets the input buffering to a single bit. The code snippet below shows the variables and logic used in this approach:

VAR
  current_alarm: BOOL;          (* Stores the current alarm state *)
  alarm_index: INT;             (* Indicates the alarm to be checked on this cycle *)
  five_second_ton: TON;         (* Prevents alarm index increment during annunciation *)
  timer_expired: BOOL;
END_VAR;


  (********************************)
  (* Increment alarm index if the *)
  (* annunciation is not active   *)

  IF (NOT five_second_ton.IN) OR timer_expired THEN
    alarm_index := alarm_index + 1;
  END_IF;


  (********************************)
  (* Ensure alarm index stays within bounds *)

  IF alarm_index < 1 OR alarm_index > 20 THEN
    alarm_index := 1;
  END_IF;


  (********************************)
  (* Assign the current alarm value to a local boolean *)

  CASE alarm_index OF
   1: current_alarm := %IB0.1;
   2: current_alarm := %IB0.2;
   ...
  20: current_alarm := %IB2.4;
  END_CASE;


  (********************************)
  (* Activate a 5-second timer to prevent  *)
  (* alarm index incrementation during    *)
  (* annunciation of the current alarm    *)

  five_second_ton(IN  := (alarms_as_ints[alarm_index] = 1)
                         AND
                         (NOT timer_expired)
                 ,PT  := t#5000ms
                 ,OUT => timer_expired);


  (********************************)
  (* Clear output bits 0-4        *)

  %OB0 := %OB0 AND 0xE0;


  (********************************)
  (* Set output bits 0-4 to the   *)
  (* current alarm index if the   *)
  (* annunciation is active      *)

  IF five_second_ton.IN THEN
    %OB0 := %OB0 OR alarm_index;
  END_IF;

END;

This revised text incorporates technical terms such as "input buffering," "annunciation," and "5-second timer," which are commonly searched on search engines. It also provides a clear and structured explanation of the approach without altering its underlying meaning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am truly amazed and grateful for all the effort you have put into solving my problem, DrBitBoy. Your work has brought me closer to a solution and I can now see the path ahead. It may take some time before I receive the necessary hardware, but I will definitely reach out if I have any more questions. Thank you for exceeding my expectations. 
GeniusInTraining, can you share your thoughts on PLCs? I am willing to give them a try for this project, despite any potential challenges. In the future, there will be a focus on data acquisition and downtime reporting, which may be daunting. As a new employee, I aim to impress senior management with my capabilities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHKawa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHKawa mentioned a conversation with GeniusInTraining about potential concerns with PLCs. Despite reservations, JHKawa is willing to give them a chance for an upcoming project that involves data acquisition and downtime reporting. As a newcomer in the job, impressing higher-ups is a priority. Bells and whistles are essential for gaining their approval, as demonstrated by past projects involving scrolling displays and marquee displays. Although there were challenges with OPTO22 in the past, JHKawa is open to giving them another chance, considering advancements in the technology since the late 90s and early 2000s.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here is a piece of LAD code I utilize for scrolling through message displays on an HMI screen. The alarm bits are kept in an array of 16-bit integers, a departure from my usual preference for DINTs in the Logix 5000 environment. The reason for this is that the previous project utilized a MicroLogix 1400, and due to time constraints, I opted not to redesign the HMI screens for editing the stored alarm messages. The code in the ML1400 is more straightforward as there is no need for DIV/MOD calculations to identify the word/bit, with each type of alarm stored in a distinct data file. Adapting this code for scrolling through recordings should be relatively simple.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy expressed uncertainty regarding @I_Automation's algorithm, suggesting it may operate as an integer FIFO system. However, drbitboy confirmed that their approach differs from this concept. Despite the limited information provided, drbitboy raised concerns about removing alarms and preventing duplicate alarm numbers from being added to the FIFO. In contrast to a FIFO, drbitboy described a method where the pointer is reset to 0 at each scan, all alarms are checked, and an array of active alarm codes is generated in numerical order for display. If an alarm clears on its own, it is immediately removed from the array, resulting in the pointer decreasing by one. This approach required minimal programming, with only 21 lines needed to set up the array. The display logic was streamlined, with a single rung for each condition checked. The display would adjust based on the pointer value, leading to efficient and concise programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I did not utilize a FIFO method for managing alarms. Instead, I reset the pointer to 0 at the beginning of each scan. Subsequently, I would check all active alarms to compile an array of their corresponding codes. This method ensured that the display scrolled through the alarm codes in numerical order. If an alarm was no longer active (such as a self-clearing warning), it would be removed from the array immediately. This streamlined process required only one rung to reset the pointer and one rung for each condition checked. In total, 21 lines were dedicated to setting up the array. The display functioned such that one rung was triggered if the pointer equaled 0, another if the pointer equaled 1, and 4-5 rungs were utilized if the pointer was greater than 1, including a timer and display mechanisms.
For example, if alarms 1, 2, 3, and 4 were active, and the display was indicating alarm code 4, and then alarm 2 was acknowledged or cleared resulting in only 3 active alarms, the display index might still show 4. Similarly, if alarms 1, 2, and 3 were active, and the display was about to announce alarm 2 before it was acknowledged or cleared, the addition of alarm 5 could cause the display index to jump to alarm 5 in the third position, skipping over alarm 3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When dealing with multiple alarms, such as alarms 1, 2, 3, and 4, there is a DisplayPointer INT that needs to cycle up to the 4th array entry to display alarm 4. It is important to note that this is separate from the alarms pointer. If alarm 3 is cleared, the display will immediately scroll to alarms 1, 2, and 4. The alarm ladder has undergone some updates and may not perfectly match the original response, but it stems from the PLC system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I_Automation explained that there are alarms 1, 2, 3, and 4, each with a DisplayPointer INT that corresponds to their respective array entry. If alarm 3 is cleared, the display will shift to show alarms 1, 2, and 4. While the alarm ladder diagram has had some sections removed, it still reflects the PLC programming. If you can, please export the information to a PDF for easier viewing. Thank you for sharing this information at your convenience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about accessing the file, asking if it was in SLC format and if it could be converted to a PDF. The file is confirmed to be in SLC5/05 format in RSL500 version 9.0. There are no password restrictions and access will not be denied in the future. A PDF version will be printed when time allows.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm observing from the sidelines, taking in all the action.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHKawa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to joseph_e2's suggestion, I am considering adapting the code to allow for easy scrolling through recordings. I will be attempting this in CODESYS, despite my lack of experience with the platform. With the abundance of examples available, I am confident that I will have plenty of guidance. Thank you for your assistance and recommendations!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHKawa</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I address the challenge of multiple stations activating call switches simultaneously in my cycling voice annunciation system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address this challenge, you can program the system to alternate between announcing different station numbers within a set timeframe, such as 5 seconds per announcement. This can help prioritize and communicate the assistance needed from each station effectively.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Which programming platforms are being considered for the cycling voice annunciation system mentioned in the thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The programming platforms being considered for this project are CodeSys and Node-Red. The choice between these platforms will depend on which one best suits the project's objectives and the developer's familiarity with each.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What hardware is being used for the development of the cycling voice annunciation system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The system is being developed using an Opto22 Groov Epic. This hardware will play a crucial role in integrating the call light stations with the PLC to trigger the MP3 alarm announcements for specific station numbers in need of assistance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What programming experience is required for developing the cycling voice annunciation system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While prior experience with A-B programming and familiarity with Node-Red on a Raspberry Pi can be beneficial, the developer mentions being relatively new to CodeSys. However, with a strong foundation in programming and the willingness to learn, it is possible to successfully tackle the project challenges.</p>
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
