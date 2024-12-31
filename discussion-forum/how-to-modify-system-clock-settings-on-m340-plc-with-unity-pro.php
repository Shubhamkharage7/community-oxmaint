
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am looking to manipulate the system clock on a M340 PLC using Unity Pro software. The current Date and Time format is not meeting my requirements. I am specifically looking to access and modify seconds, minutes, hours, day, week, and month individually. For example, I am">
    <meta name="keywords" content="m340 plc, unity pro, system clock settings, modify system clock, date & time format, access seconds minutes hours day week month, %sw51, manipulate system clock, unity pro software, modify date and time, plc clock settings">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-modify-system-clock-settings-on-m340-plc-with-unity-pro">
    <title>How to Modify System Clock Settings on M340 PLC with Unity Pro | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Modify System Clock Settings on M340 PLC with Unity Pro | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am looking to manipulate the system clock on a M340 PLC using Unity Pro software. The current Date and Time format is not meeting my requirements. I am specifically looking to access and modify seconds, minutes, hours, day, week, and month individually. For example, I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-modify-system-clock-settings-on-m340-plc-with-unity-pro">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Modify System Clock Settings on M340 PLC with Unity Pro | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am looking to manipulate the system clock on a M340 PLC using Unity Pro software. The current Date and Time format is not meeting my requirements. I am specifically looking to access and modify seconds, minutes, hours, day, week, and month individually. For example, I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-modify-system-clock-settings-on-m340-plc-with-unity-pro"
      },
      "headline": "How to Modify System Clock Settings on M340 PLC with Unity Pro",
      "description": "Hello everyone, I am looking to manipulate the system clock on a M340 PLC using Unity Pro software. The current Date and Time format is not meeting my requirements. I am specifically looking to access and modify seconds, minutes, hours, day, week, and month individually. For example, I am",
      "author": {
        "@type": "Person",
        "name": "ndelucca"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-04",
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
                <h1 class="text-white">How to Modify System Clock Settings on M340 PLC with Unity Pro</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ndelucca</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>47 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">52033</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">112</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am looking to manipulate the system clock on a M340 PLC using Unity Pro software. The current Date & Time format is not meeting my requirements. I am specifically looking to access and modify seconds, minutes, hours, day, week, and month individually. For example, I am able to access hours/minutes using %SW51, but I am unable to modify them separately. 

If anyone has any suggestions on how to achieve this or if it is even possible, please share your thoughts. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To update the time on the system, utilize bit %S50 and words %SW49-%SW53. To change the time, first activate bit %S50, then input the new time into system words %SW49-%SW53 (remember to convert to BCD). Afterwards, reset bit %S50 to "0" to update the time to RTC. For separating hours and minutes, consider using Rotate right and left instructions. Although not the most straightforward method, it is indeed achievable. When retrieving the time from the system words, convert from BCD to integer first before employing rotate left/right instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Much appreciation, Lare, for your assistance with utilizing the Rotate Right and Left instructions. I found them straightforward to use once I familiarized myself with them. Thank you once more for your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndelucca</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You have our gratitude.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After successfully addressing the read clock issue, I encountered another problem while trying to write the desired values in my system. I attempted to convert separate integer values into combined BCD values and write each value in the corresponding system word (%50 for Seconds, %51 for HourMinute, etc.). Despite following the instructions provided in a previous post and utilizing the system bit %S50, I was unable to write the values successfully. The system clock continued to run with the same value even after setting %S50. I have also attempted using the WRTC_DT function, but the issue still persists. Is there an alternative method to write these values effectively? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndelucca</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To properly update the clock, you must first set the %S50 bit and then transfer the new values to system words in BCD format. %SW50 corresponds to seconds, %SW51 represents hours and minutes, %SW52 indicates month and day, and %SW53 specifies the year. Additionally, %SW49 denotes the day of the week (with Monday being 1).

The clock is synchronized with the falling edge of the system bit %S50. Remember to reset the bit after transferring the time values to the system words. If the clock's time is incorrect, such as showing 63 seconds, the time will not be updated, and the old time will revert back to the RTC.

There may be an issue the first time you update the clock. If the initial clock time is incorrect, changing the time via system words will not function properly, which is a common occurrence with new CPUs. In such cases, you can correct the clock time by accessing the online crack view, double-clicking on the CPU, selecting animation, and selecting the real-time clock. Update the computer time to match the RTC if needed. After this adjustment, the time should be adjustable using the system words.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings to all forum users! I'm a newcomer here, seeking guidance on using Unity Pro software alongside PLC M340 modules. I've discovered that %SW values are in hexadecimal format, such as %SW51 representing the system clock time of 7:30AM or 16#730. Can BCD_TO_INT be used to convert hexadecimal to decimal in this scenario? If not, I'm open to exploring other solutions. Your prompt response would be greatly appreciated. Many thanks, Nemic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Nemic inquired about converting hexadecimal to decimal in Unity Pro software using PLC M340 modules. %SW variables in Unity Pro are in hexadecimal, such as %SW51 representing the system clock at 7:30 AM or 16#730. Nemic was curious if BCD_TO_INT conversion can be used to convert hexadecimal to decimal. If not, what other options are available for conversion? Lare advised setting bit %S50 before updating the system time in %SW49-%SW53 using INT_TO_BCD conversion. To read the time from system words, it was suggested to first perform BCD to integer conversion with BCD_TO_INT. Your thoughts on this matter would be greatly appreciated. Thank you, Nemic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare asked if you have read the second post on a specific topic. Hi Lare, I understand that %sw51 is in hexadecimal format, but I want to confirm. Can you point me towards a function block that can help me convert hex to decimal? Thanks, Nemic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Take another look at post #2 for information on converting BCD to integer values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>V0N_hydro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>V0N_hydro recommended re-reading post #2 for converting BCD to integer. Because I don't have Unity Pro software available, I would appreciate a visual confirmation. Please review the attached file and confirm if my logic is accurate. Your assistance is greatly appreciated. Thank you, Nemic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The BCD to INT block will not produce that particular outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>V0N_hydro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>V0N_hydro pointed out that the BCD to INT block may not provide the desired result. This is a challenge I am currently addressing - finding a way to efficiently convert hexadecimal numbers to decimal numbers sourced from %SW51 in PLC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Nemic, could you provide some details on the issues you're facing with the BCD to INT block? I recommend researching BCD and gaining a clear understanding of its functionality. Feel free to share your program and explain the desired outcome as well as any observed discrepancies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>V0N_hydro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to V0N_hydro's question about the BCD to INT block not functioning correctly, Nemic suggests familiarizing oneself with BCD and its operational principles. If possible, sharing the program for review and expressing what is expected versus what is happening can also be helpful. While Nemic does not currently have access to Unity Pro to troubleshoot, alternative solutions are being explored. The attached files are theoretical in nature and not indicative of actual results. SW, which stands for "System Word", poses uncertainty regarding its data type.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The hexadecimal representation of the time 7:30 AM is 16#0730 or 1840 as an integer. When converted using BCD_to_INT, it becomes 730. It is important to note that SW51 should only read values from 0000 to 2359 in hex or 0 to 9049 as an integer, not 2DA.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>V0N_hydro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The user V0N_hydro pointed out that at 7:30 AM, the %SW51 value would be 0000 0111 0011 0000, which translates to 16#0730 or 1840 as an integer. When this is passed through the BCD_to_INT function, the result is 730 in an integer format. It seems there may have been confusion about the value 2DA, but SW51 should only be reading values from 0000 to 2359 in hexadecimal or 0 to 9049 as an integer. This indicates that the BCD_to_INT block is functioning correctly, and the issue may lie with the hexadecimal value in the initial attachment file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Please find below a screenshot extracted from the user manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings once again! I want to express my gratitude for the assistance you offered me in addressing a previous issue a few months ago. Now, I am facing a new challenge involving synchronizing the clocks on two M340 devices connected via Ethernet. The dilemma lies in the lack of internet access, rendering the R_NTPC function ineffective. Is there a method to designate one of the PLCs as an NTP server to facilitate the use of the block? While I am skeptical about its feasibility, another alternative would involve utilizing READ_VAR/WRITE_VAR and developing the code from scratch, although this approach would be time-consuming. Do you have any suggestions or creative solutions for this predicament? Your insights are greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndelucca</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to transfer computer time to %MW-area using SCADA or another method? Afterwards, can this time be periodically transferred to system words on the PLC? For data exchange between two PLCs, IO scanning or Global Data setup can be utilized. Additionally, a system registry tweak for NTP may be available, although personal experience with it is limited. Visit the Siemens website for more information on this topic: http://support.automation.siemens.c...lib.csinfo&lang=en&objid=22144502&caller=view.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there any computers on your network that can function as an NTP server? If so, you can utilize the NTP service on the Ethernet port. In Unity 8, you have the option to configure the PLC as an NTP server, although it may only be compatible with the new M580 model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GeoffC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you happen to have a NOE ethernet card or an M340 with an embedded ethernet port on a rack? The M340 with built-in ethernet lacks NTP functionality, but NOE cards typically offer this feature, if my memory serves me correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I currently have an M340 with integrated Ethernet capabilities, but it seems that I cannot utilize the NTP function or IO scanning for simplicity. As a workaround, I will need to periodically retrieve data using the READ_VAR function. While I could potentially use SCADA software like Vijeo Citect to facilitate data transfer, I am unsure of its reliability. I prefer relying on the PLC for timekeeping over the computer due to its greater trustworthiness. (the PLC communicates the time to the SCADA system)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndelucca</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One useful feature in Citect is the ability to synchronize time with an NTP server, providing an alternative time sync option. This feature typically operates as a service on your computer. If you are interested in setting this up, you can refer to the Citect help documentation. If you are unable to locate the information, feel free to reach out to us for assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GeoffC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the comment by V0N_hydro, it was mentioned that at 7:30 AM, the value of %SW51 should be 16#0730 or 1840 as an integer. When this value is passed through BCD_to_INT, it will result in 730 as an integer. It is unclear where the value of 2DA is coming from, as SW51 should only read values ranging from 0000 to 2359 in hex or 0 to 9049 as an integer. 

I have a quick question - how can I reset the bit %S50 to 0? Currently, %SW51 is displaying as 0. I would appreciate a prompt response to this inquiry. Thank you, Nemic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Nemic asked for assistance: "How can I reset bit %S50 to 0 when %SW51 is currently displaying 0?" Please offer your response promptly. Thank you, Nemic.

To achieve this, follow these steps:
1. Adjust bit %S50 to 1 using a block with an enable pin.
2. Input a BCD value of 0 to %SW50 (remember, both integer 0 and BCD 0 are the same), using either a move block or an int_to_bcd block.
3. Reset bit %S50 using a reset block with an enable pin.

Apply the same process for all other clock words, ensuring to convert integer values to BCD format before moving to %SW50-54 in the system word.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to properly set up the clock, follow these steps as instructed by Lare: 
1. Activate bit %S50 to 1 using either the show enable pin block or by moving a block with a specific bit variable.
2. Input a BCD value of 0 into %SW50. (Note that both integer 0 and BCD 0 are equivalent, allowing you to utilize either the move or int_to_bcd block).
3. Deactivate bit %S50 using the reset block with the show enable pin. 
Ensure the same process is followed for all other clock settings, but remember to convert integer values to BCD format before transferring them to %SW50-54 system word. What type of block is needed for this process, Lare?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Does it resemble something similar to this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To reset or set the %S50 bit in Unity PLC, it must be on the output side with a connection to something else on the input pin. The PLC clock operates when the %S50 bit is zero, allowing for adjusting the time. When the %S50 bit is set to "1," the new time is used at the transition from "1" to "0." Use set and reset blocks if you want to use different buttons or bits to set the %S50 bit. If the same variable is used for setting and resetting the %S50 bit, a move block can be utilized. It is also necessary to adjust the years, days, and months, not just the seconds, hours, and minutes as shown in the example.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In setting up the clock in Unity PLC, it is essential to reset or set the %S50 bit accordingly. The %S50 bit needs to be on the output side, with something else connected to the input pin. The clock in Unity PLC operates when the %S50 bit is at zero, allowing for adjustments to the time. When the %S50 bit is at "1," the new time is utilized during the transition from "1" to "0." To adjust the %S50 bit using different buttons or bits, utilize set and reset blocks. Alternatively, if the same variable is used for both setting and resetting the %S50 bit, the move block can be employed. It is also necessary to adjust the years, days, and months in addition to seconds, hours, and minutes. When considering the set_clock function in Unity PLC, its capabilities and functions are truly remarkable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The variable type can be either bit, bool, or ebool. It is recommended to use ebool variables for easier manipulation of bits through panel or SCADA systems, in addition to programming devices. To set the clock, you can conveniently use a programming computer online through the PLC rack viewer, PLC card, and animation feature. However, if you prefer changing it without a programming device, a bit of code must be written. When reading/writing bit examples from panel variables, %M addresses are typically used and can only be assigned to ebool type variables. For integers, %MW addresses and int type variables are required.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the Unity PLC system, the clock runs based on the %S50 bit being either reset or set. When the %S50 bit is zero, the clock runs and the time can be adjusted. The new time is activated when the %S50 bit transitions from "1" to "0". To set the %S50 bit with different buttons or bits, use set and reset blocks. If the same variable is used for setting and resetting the %S50 bit, a move block can be utilized. Additionally, adjustments should be made for years, days, and months, not just seconds, hours, and minutes. If the system displays zeros in the system words, it may be necessary to add more function blocks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When system words display zeros, does that mean more function blocks need to be added? To troubleshoot this issue, check the PLC time first from the rack viewer. It's common for the clock to have odd time values on initial boot-up when the clock isn't running. In situations like this, initial time values need to be inputted from the PLC card animation viewer to correct the clock's error state. Once the correct time is set and the clock is running, adjustments can be made via system words. It's worth noting that the clock may only be in error state a few times when programming a new PLC. If incorrect time values, like a month value of 14, are inputted, the clock won't be adjusted and the previous time will remain in use. Don't forget to check if the PLC is in run state.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper functionality of the PLC, it is important to first check the time in the rack viewer. Sometimes, the clock may display incorrect values when the PLC is initially booted up and the clock is not running. In such cases, you may not be able to modify these values using system words. In this scenario, it is recommended to input the correct time values from the PLC card animation viewer to rectify the error state of the clock. Once the correct time is set and the clock is running, adjustments can then be made using system words. It has been observed that the clock only encounters errors a few times when programming a new PLC. Additionally, if an incorrect time value, such as a month value of 14, is entered, the clock will not be adjusted and the previous time will still be in use. It is also important to ensure that the PLC is in a run state. If you are unsure where to find the rack viewer, you can locate it within the project settings where the diagnostics information is already enabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm not saying that. Follow these steps: double-click on the configuration folder in the project tree, then double-click on the PLC card to access the animation and proceed to the animation sheet. Look for the PLC time on the left side - is the clock running? Can you share a screenshot of post 32 without animations activated or the entire zipped program in *.sta format (Unity file)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During a project in Unity, locate the configuration folder in the project tree and double click on the PLC card. Navigate to the animation sheet where you will find the PLC time on the left side. Check to see if the clock is running and take a screenshot of post 32 without animations enabled or provide the whole zipped program in Unity file format (*.sta). Ensure to include this in your response. View the provided screenshot below. Click to expand and learn more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nemic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, I had the task of reading and setting the M340 real-time clock (RTC). I successfully wrote and executed this code and wanted to share it here in hopes of assisting others. In the ST code snippet below, I have included instructions for both reading and writing the RTC data.

To read the RTC data, use the following code:
```
IF UNLOCK = 0 THEN
  RTC_DAY := BCD_TO_INT(%SW52 AND 16#00FF);
  RTC_MONTH := BCD_TO_INT(SHR(%SW52,8));
  RTC_YEAR := BCD_TO_INT(%SW53);
  RTC_HOUR := BCD_TO_INT(SHR(%SW51,8));
  RTC_MIN := BCD_TO_INT(%SW51 AND 16#00FF);
  RTC_SEC := BCD_TO_INT(SHR(%SW50,8));
END_IF;
```

To write new RTC data, use the following code:
```
IF UNLOCK = 1 THEN
  %SW52 := (SHL(INT_TO_BCD(RTC_MONTH),8)) + INT_TO_BCD(RTC_DAY);
  %SW53 := INT_TO_BCD(RTC_YEAR);
  %SW51 := (SHL(INT_TO_BCD(RTC_HOUR),8)) + INT_TO_BCD(RTC_MIN);
  %SW50 := (SHL(INT_TO_BCD(RTC_SEC),8));
END_IF;
```

Additionally, I have included comments in the code to explain the purpose of each variable and the conditions for reading and writing the RTC data. Remember, when UNLOCK is set to 1, the RTC variables stop updating and new data can be written. When UNLOCK changes back to 0, the PLC will receive the new data and continue counting. Let me know if you find this helpful!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ferjrodrigues</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am experiencing an issue with %S50 not staying updated after it reverts back from 1 to 0. I am in the process of setting up time syncing on an M340 and have carefully followed your insightful guidance. During runtime, I can observe the remote time sync values being successfully inserted into %SW49-53 while %S50 is set to 1. However, once %S50 is changed back to 0, the PLC clock overrides %SW49-53. This means that I am only able to view the manually inputted time sync values in %SW49-53 when %S50 is set to 1. According to my knowledge and the resources provided in the Modicon Help Section, resetting %S50 back to 0 should retain the inputted values and continue counting from that point. The current situation is perplexing and I am seeking assistance to resolve this issue. Any help would be greatly appreciated as this situation is quite puzzling to me. Thank you for your support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MementoMorified</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum! Are you using a new PLC brand? The Unity clock may initially display the wrong time, which can happen if the clock is not set correctly when the PLC is new. To fix this issue, double click on the PLC online, go to the animation sheet, and find the clock or real-time clock settings. Adjust the time using your computer to ensure accuracy. Once the time is correct, you should be able to input new values using system words.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone! I'm looking for guidance on how to extract hours, minutes, and seconds in the format of DD/MM/YYYY using M340 UNITYPRO. I would appreciate some detailed explanation on how to use rotate right and rotate left functions to separate hours, minutes, and seconds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KAYANTHIRI</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Mr. Ferj Rodrigues, I want to express my gratitude for your help. Your advice has been extremely beneficial to me, and I found it to be straightforward and easy to implement. Instead of using traditional methods, I followed your logic and opted for a Facebook group (fbd) approach. Thank you for your valuable assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KAYANTHIRI</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Mr. Ferjrodrigues, KAYANTHIRI expressed gratitude for the helpful advice provided. Utilizing the convenient method of sending files via email, KAYANTHIRI found it simple and effective. Using the abbreviation "ST" makes it easy to share files quickly and effortlessly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ferjrodrigues</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ferjrodrigues noted the convenience of using ST for sharing information, as it can be easily copied and pasted into an email. This simplicity makes ST a valuable tool for communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KAYANTHIRI</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, Today I had the task of reading and setting the M340 real-time clock (RTC). I successfully wrote this code and it's working perfectly. I wanted to share it here in case it can help someone else. In ST language, the code is as follows:

(*read*)
IF UNLOCK = 0 THEN
RTC_DAY:=BCD_TO_INT(%SW52 AND 16#00FF);
RTC_MONTH:=BCD_TO_INT(SHR(%SW52,8));
RTC_YEAR:=BCD_TO_INT(%SW53);
RTC_HOUR:=BCD_TO_INT(SHR(%SW51,8));
RTC_MIN:=BCD_TO_INT(%SW51 AND 16#00FF);
RTC_SEC:=BCD_TO_INT(SHR(%SW50,8));
END_IF;

(*write*)
IF UNLOCK = 1 THEN
%SW52:=(SHL(INT_TO_BCD(RTC_MONTH),8))+ INT_TO_BCD(RTC_DAY);
%SW53:=INT_TO_BCD(RTC_YEAR);
%SW51:=(SHL(INT_TO_BCD(RTC_HOUR),8))+ INT_TO_BCD(RTC_MIN);
%SW50:=(SHL(INT_TO_BCD(RTC_SEC),8));
END_IF;
%S50:=UNLOCK;

In summary, when UNLOCK is set to 0, the data is read from the RTC. When UNLOCK is set to 1, the variables are stopped from being updated, and the new data is written to the RTC. When UNLOCK changes back to 0, the PLC receives the new data and continues to count. Thank you for sharing this helpful code!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suglets</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In "Simulation Mode," I am unable to input any changes to system words while ensuring the accurate value is maintained. Thank you for your understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>presuntu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having trouble with %S50 being set while %SW50-52 keep fluctuating? Lare suggests utilizing system bit %S50 and words %SW49-%SW53 for this task. To update the time, first set %S50 and then copy the new time to system words %SW49-%SW53 after converting it from integer to BCD. Remember to set bit %S50 to "0" to update the time to RTC. To isolate hours and minutes, consider using Rotate right and left instructions. While it may not be the simplest method, it is achievable. For retrieving the time from system words, perform BCD to integer conversion first, followed by rotate left/right instructions. Still puzzled? You set %S50, but %SW50-52 are constantly changing. Shouldn't they be 'disconnected' from the system to allow changes?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bogu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I may be a little behind, but here is the code snippet I utilized for the M340 model. Please note that this code snippet was not authored by me; it is primarily sourced from Schneider. 

Code snippet:
(* RTC_Compare:= EQUAL_ARINT(Hours_6,Hour_memory_6); *)
(* EQUAL_ARINT(Hours_6,Hour_memory_6) > -1 *)

IF (*(RTC_Compare > -1) or *) hmi_set_clock THEN (* if there were changes in time/date set words, then set the clock *)

SET(%S50);

%SW50 := INT_TO_BCD(Hours_6[2] * 100); (* seconds *)
%SW51 := INT_TO_BCD((Hours_6[0] * 100) + Hours_6[1]); (* hours and minutes *)
%SW52 := INT_TO_BCD((Hours_6[3] * 100) + Hours_6[4]); (* month and day *)
%SW53 := INT_TO_BCD(Hours_6[5]); (* year *)

hmi_set_clock := 0;

ELSE (* if there are no changes in set words, update them to the clock values *)

(IF %S50 THEN RESET(%S50);

END_IF;

END_IF;

Hour_memory_6 := Hours_6; (* set memory words to detect any changes in the next scan *)

(* used in the HMI to check if the PLC is in run mode *)
plc_second2 := BCD_TO_INT(%SW50 / 256); (* seconds *)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ganutenator</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ferjrodrigues shared a code snippet for reading and setting the M340 RTC. By using the code provided in Structured Text (ST), the RTC values can be efficiently managed. This solution can be beneficial for those seeking assistance with RTC manipulation. The code includes sections for reading and writing RTC data based on the value of the UNLOCK variable. When UNLOCK is set to 0, the code reads the RTC values, while setting UNLOCK to 1 stops the updating of RTC variables and writes new data. This ensures precise control over the RTC values. Additionally, the code snippet includes comments for clarity and ease of understanding. Thank you, ferjrodrigues, for sharing this valuable code snippet!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thunder2000nt</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I modify the system clock settings on a M340 PLC using Unity Pro software?
- To modify the system clock settings on a M340 PLC using Unity Pro software, you can access and manipulate the individual components such as seconds, minutes, hours, day, week, and month separately. For example, you can access hours/minutes using %SW51 but might need additional steps to modify them individually.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to modify the seconds, minutes, and hours separately on a M340 PLC system clock?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to modify the seconds, minutes, and hours separately on a M340 PLC system clock by manipulating the relevant memory addresses or registers within the PLC using Unity Pro software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I access and modify the date and time components individually on a M340 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To access and modify date and time components individually on a M340 PLC, you may need to work with specific memory locations or registers that correspond to seconds, minutes, hours, day, week, and month within the PLC programming environment in Unity Pro.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific functions or methods in Unity Pro that facilitate modifying the system clock settings on a M340 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - While Unity Pro provides a platform for programming the M340 PLC, modifying the system clock settings may require custom programming logic to handle individual components such as seconds, minutes, hours, etc. You may need to refer to the PLC documentation or seek advice from experienced programmers for specific</p>
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
