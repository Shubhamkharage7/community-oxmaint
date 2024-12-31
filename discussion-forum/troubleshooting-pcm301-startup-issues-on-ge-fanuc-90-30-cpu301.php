
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am experiencing difficulties with the PCM301 as it fails to start after downloading and running the PLC program. While the work LED Indicator OK is visible on the PCM, the LEDS Us1 and US2 do not start flashing. This issue occurred despite the successful operation of the same">
    <meta name="keywords" content="pcm301, ge fanuc 90-30, cpu301, startup issues, troubleshooting, plc program, led indicator, fault loc 2, comm req bad task id program, run mode, flashing leds, work led, us1">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-pcm301-startup-issues-on-ge-fanuc-90-30-cpu301">
    <title>Troubleshooting PCM301 Startup Issues on GE Fanuc 90-30 CPU301 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PCM301 Startup Issues on GE Fanuc 90-30 CPU301 | Oxmaint Community">
    <meta property="og:description" content="I am experiencing difficulties with the PCM301 as it fails to start after downloading and running the PLC program. While the work LED Indicator OK is visible on the PCM, the LEDS Us1 and US2 do not start flashing. This issue occurred despite the successful operation of the same">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-pcm301-startup-issues-on-ge-fanuc-90-30-cpu301">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PCM301 Startup Issues on GE Fanuc 90-30 CPU301 | Oxmaint Community">
    <meta name="twitter:description" content="I am experiencing difficulties with the PCM301 as it fails to start after downloading and running the PLC program. While the work LED Indicator OK is visible on the PCM, the LEDS Us1 and US2 do not start flashing. This issue occurred despite the successful operation of the same">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-pcm301-startup-issues-on-ge-fanuc-90-30-cpu301"
      },
      "headline": "Troubleshooting PCM301 Startup Issues on GE Fanuc 90-30 CPU301",
      "description": "I am experiencing difficulties with the PCM301 as it fails to start after downloading and running the PLC program. While the work LED Indicator OK is visible on the PCM, the LEDS Us1 and US2 do not start flashing. This issue occurred despite the successful operation of the same",
      "author": {
        "@type": "Person",
        "name": "SeaVoltage"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-17",
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
                <h1 class="text-white">Troubleshooting PCM301 Startup Issues on GE Fanuc 90-30 CPU301</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>28 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">762</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">296</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am experiencing difficulties with the PCM301 as it fails to start after downloading and running the PLC program. While the work LED Indicator "OK" is visible on the PCM, the LEDS Us1 and US2 do not start flashing. This issue occurred despite the successful operation of the same project on the same PLC a year ago, when it was resolved by a different engineer. Now, when I initiate the PLC in Run mode, I encounter fault loc 0.2 with the message "comm req bad task ID program." How can this problem be resolved?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting a PLC issue, it is important to consider various factors. One possibility to explore is whether the program was downloaded due to a prolonged power outage leading to a dead battery. It is crucial to ensure that both the program and hardware configuration are downloaded to prevent loss of data in such cases. Additionally, the PCM module's communication is essential to consider, as its program is also battery-powered for maintenance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The last project in the PLC failed due to discharged batteries in the PWR and PCM slots, resulting in a power outage for some time. To resolve the issue, the engineer utilized a similar project from the same system, which worked for approximately 10 months. The engineer's process involved leaving the system without power and batteries overnight, disconnecting the unit from all connectors except for power and batteries, and then downloading the project to the controller to restart everything.

However, it appears that the engineer may have missed downloading certain items such as hardware configuration, motion/logic settings, and initial force values. Currently facing a similar issue, although the batteries are in good condition, the PCM battery was disconnected upon diagnosis leading to the PLC malfunctioning.

Regarding the PCM, it communicates with two converters KD485 (RS232/RS422) for data transmission and control panel operation. After connecting with the PCM, all necessary points were downloaded. There were no errors or warnings in the feedback zone, only in the diagnostics section.

Using PME 7.0 with a firmware version of CPU350 at 10.74, built 23A1, it is likely that the previous engineer also used the same PME version. Despite this, there may be a mistake as the COMMREQ functional block cannot be found in the target during troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently in the process of preparing some visuals, which may provide additional insight and details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PCM module operates a Megabasic program that was lost due to a drained battery and must be re-downloaded. This can be achieved through a serial connection using a terminal emulator program such as Hyperterminal. It is possible that the program was initially created using an add-on to Logicmaster software known as PCOP. To successfully configure the PCM module in the PLC hardware settings, a file named "UCDF.cdf" is required in addition to the Megabasic program. There are two modules in your setup that may utilize the COMMREQ instruction - the PCM module and the High Speed Counter module. If permitted by your company, feel free to share your PME project file for assistance with the COMMREQ issue. If privacy is a concern, send me a direct message for an alternative method of file sharing.

At this point in troubleshooting, it is not necessary to focus on the memory allocation screen. The screen indicates that firmware version 9 or higher is needed for memory reallocation, whereas your version 7 firmware is restricted to the address ranges displayed on the screen. It is unlikely that the original programmer attempted to adjust the address limits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to download the emulator and connect it through the CPU? To download the PC software, I typically utilize a USB port along with a 485 converter to establish a connection to the CPU. How can I obtain the "UCDF.cdf" file? Alternatively, can I request to collect samples using a comparable system, similar to what was done with the PLC project? I am using windows 10 for these tasks - does Hyperterminal offer support for this operating system? Apologies for the multitude of inquiries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the PCM_IF program block, located on rung 23, I discovered the COMM_REQ instruction targeted towards the PCM module. SYSID 2 designates rack zero, slot 2. A TASK code of 22 falls within the range of codes reserved for Megabasic program developers for the PCM module. Preceding the COMM_REQ instruction, all the MOVE WORD instructions are preparing a data block to transmit to the PCM module via COMM_REQ, expecting the PCM module's program to interpret the data. The error you are experiencing may be due to the PCM module's inability to handle the data sent through COMM_REQ. The UCDF.cdf file is another file generated by the Megabasic program developer for the PCM module, most likely named Basic.pgm. Upon initial power-up, the PCM module searches for a program with that name and automatically executes it. The UCDF.cdf file configures the port parameters for the PCM module's two serial ports. GE previously provided a terminal emulator program called TERMF, similar to Hyperterminal. To work with a PCM, I typically use a 32-bit version of Windows XP in a virtual machine with Hyperterminal or TERMF, or utilize a DOS emulator like DOSBOX to run Logicmaster and PCOP under that operating system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In analyzing the PLC logic further, it became clear that the COMM_REQ instruction plays a crucial role in connecting the PLC with the PCM module. The integer registers %R101 - %R107 are specifically linked to controlling the COMM_REQ instruction itself. By utilizing the BLKMOV instruction on rung 2 of the PCM_IF block, the values at the IN1 - IN7 nodes are written to %R101 - %R107, forming the control parameter for the COMM_REQ instruction.

For instance, a value of 22 at the IN2 node of the BLKMOV instruction on rung 2 of the PCM_IF block corresponds to writing the value 22 to %R102, establishing the length of the data block associated with that particular COMM_REQ. Similarly, a value of 8 at the IN4 node of the BLKMOV instruction writes a value of 8 to %R104, indicating the memory type for the data block (in this case, 8 = %R memory). Additionally, the value of 100 at the IN5 node of the BLKMOV instruction writes a value of 100 to %R105, designating %R101 as the address for the COMM_REQ status word.

Moreover, the values 601 and 801 in the first two words of data (%R108 and %R109) seem to act as watchdogs within the system. Rungs 32 and 33 of the PCM_IF block monitor changes in %R601, suggesting continuous adjustments made by the Megabasic program in the PCM. Conversely, rung 34 alters the value in %R801, indicating a code in the Megabasic program to check for changes as well.

Values in %R110 - %R113 are likely used to configure port 1 of the PCM with settings such as 9600 baud, RS232 mode, and possibly a 1-second timeout. Similarly, values in %R114 - %R116 are probable settings for configuring port 2 of the PCM at 19200 baud, RS232 mode. As for the values in %R117 - %R129, further information or analysis is needed to form an opinion on their significance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance. I will reach out if anything becomes more apparent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How can I connect my PC to the FANUC Series 90-30 PLC in order to access configuration data and perform a backup? I need to connect the PCM using the IC690CBL701 cable to the Workmaster (PC-XT) for proper communication. I found a link explaining how to connect to IBM, but I need guidance for connecting to my laptop. Additionally, I have identified two errors in my project that are preventing it from loading successfully onto the CPU. Could these errors be causing interference with the project's operation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to use a USB connection since my laptop does not have a COM port? I am looking for a comparison to the process of connecting to the CPU. In this scenario, I connect via USB and then utilize a converter for compatibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I utilize this converter to link up with my CPU, and I am eager to connect it for PCM as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The pin configuration for the PCM301 module is crucial for high-speed counter hardware setup. An issue arises when presets exceed the specified minimum and maximum values. It is necessary to refer to the data sheet of the third-party module to input power consumption data accurately. While a USB/serial converter is generally compatible, its effectiveness depends on the specific device. Ensure that the COM port number assigned to the converter falls within the acceptable range to avoid issues with older DOS applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you seeking information about PCOP software and MegaBasic?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you currently using PCOP as an add-on to your Logicmaster software, or is it possible to use it as a standalone application? Logicmaster is the renowned DOS programming software used for the 90-30 PLC system. Be sure to check out my recommendations in post #7 for the optimal operating system to run Logicmaster. Additionally, the PCM module firmware comes equipped with Megabasic. What programming software do you currently utilize with your PLC system?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The significance of PCOP and Megabasic in Proficy Machine Edition 7.0 is now crystal clear, shedding light on why they are not readily available as standalone applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After delving into Proficy Machine Edition 7.0, I now have a better understanding of PCOP and Megabasic functionalities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I experienced a minor accomplishment by successfully using a converter along with HyperTerminal Private software to establish a connection with the PCM and view the desired ">". Operating on Windows OS 10 with COM2 at 19200 baud rate using a USB to COM converter model UIC 2000, I am now looking to explore ways to potentially run or locate files within the system. I have also included my connection diagram for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This manual will be beneficial as it includes a comprehensive list of commands in interactive mode in Appendix C.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need to identify which files to back up in a similar system. Do I need to back up each file individually using the command S <File_name>, or can I create a full pack? Additionally, I am encountering issues with commands PL 02 and PM 11, while Command D and PC are not opening, possibly due to being empty.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the "D" command returned no results, it may be beneficial to commence by duplicating and relocating all data displayed by the "D" command from the functioning device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Despite my initial hesitation, I decided to tap the command D and found the result to be disappointingly empty with no response. Perhaps I should have waited longer before making a decision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey mentioned that the PCM module operates a Megabasic program which was lost due to a drained battery and needs to be redownloaded. The download process requires a serial connection and can be accomplished using a terminal emulator such as Hyperterminal. The program may have originally been generated with an extension to Logicmaster software known as PCOP. To enable the "PCM Config" option in the PLC hardware setup, the PCM module must have a file named "UCDF.cdf" alongside the Megabasic program. There are two modules in the configuration that support the COMMREQ instruction - the PCM module and the High Speed Counter module. If your company allows, feel free to share your PME project file for troubleshooting the COMMREQ issue. If confidentiality is a concern, reach out via PM for an alternative email transmission. At this point, it is advisable not to focus on the memory allocation screen, as it indicates the need for firmware version 9 or higher to reallocate memory. With version 7 firmware, the address ranges displayed on the screen are limited. There is no indication that the original programmer attempted to adjust the address limits. Where can the UCDF.cdf file be located? Can it be retrieved from the PCM module using Hyperterminal? How can it be obtained within a functional system?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The manual I previously shared discusses the importance of selecting "PCM CONFIG" for the CONFIG Mode item in the hardware configuration for the PCM module. By doing so, you can utilize the UCDF file generated through the PCOP software. If your system requires a UCDF.cdf file, it must be uploaded from a functioning PCM module. In certain cases, the PCM can be set up using the PCOP development tool, which produces a User Configuration Data (UCDF). This UCDF is akin to the CONFIG.SYS file found in a DOS PC, and it plays a crucial role in determining the PCM's functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered an issue while trying to access interactive mode on a different system. Firstly, I switched off the CPU350 from RUN mode and checked for any errors in the diagnosis mode, which showed no active errors. Meanwhile, the PCM301 was still processing the program. I monitored the COM1 channel speed at 9600 using the teraterm application. Upon restarting the PLC, the PCM301 stopped running its program. Despite trying to access interactive mode through Hyperterminal at various speeds (4800 to 19200), the ">" icon did not appear. The COM port was correctly identified as COM 2 on the device manager and had the correct speed settings. Overall, my attempts to enter interactive mode were unsuccessful.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Once the CPU350 was initiated, the system seamlessly resumed its regular operations. Now, the crucial inquiry arises: How can one access interactive mode in a system that is already running? Is it necessary to adjust any configurations in Hyperterminal, apart from selecting the port and data transfer rate? My understanding is that I successfully entered interactive mode in my PCM by performing a reset and ensuring it was in a pristine state.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access interactive mode on the PCM, connect to port 1 and initiate the COM_REQ instruction at 9600 baud. For a hard reset, press and hold the white reset button on the PCM Module for over 5 seconds. This will reset the PCM and allow for interactive mode. A soft reset, achieved by holding the reset button for less than 5 seconds, will simply restart the default program. Additionally, performing a power cycle on the PCM will also trigger a soft reset.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Will restoring to factory settings delete the data I need to retrieve from the device?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SeaVoltage</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Performing a hard reset or soft reset on the PCM's RAM memory will not delete any programs. It is possible that a hard reset could reset the COM ports to default settings, but restarting the PLC will trigger the COM_REQ instruction to configure the ports. My advice is based on my experience with various systems utilizing the PCM301 module. However, I recommend taking caution as I am not familiar with your specific system. If possible, seek guidance from the manufacturer of your system before following any advice I provide.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be the possible reasons for the PCM301 not starting after downloading and running the PLC program on a GE Fanuc 90-30 CPU301?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue with the PCM301 not starting could be due to various reasons such as incorrect program download, communication errors, faulty hardware components, or configuration settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why are the LEDS Us1 and Us2 not flashing on the PCM301 even though the work LED Indicator "OK" is visible?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The LEDS Us1 and Us2 not flashing could indicate a specific issue related to communication, task execution, or program functioning within the PLC system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can the fault loc 0.2 with the message "comm req bad task ID program" be resolved when initiating the PLC in Run mode?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The fault loc 0.2 error message typically indicates a communication request issue with the task ID program. To resolve this, it is advisable to check the program configuration, task assignments, communication settings, and ensure proper program execution.</p>
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
