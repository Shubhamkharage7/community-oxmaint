
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently working on establishing EtherNet communication between a Markem-Imaje laser printer and an AB ControlLogix PLC. Utilizing an EWEB module and attempting to use sockets for this setup, however, the guidance from Markem is unclear. Curious if anyone has experience with implementing this type of communication successfully.">
    <meta name="keywords" content="ethernet communication, markem-imaje laser printer, ab controllogix plc, eweb module, socket communication, establishing network communication, industrial networking, 8">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-establish-ethernet-communication-between-markem-imaje-laser-printer-and-ab-controllogix-plc">
    <title>How to Establish EtherNet Communication Between Markem-Imaje Laser Printer and AB ControlLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Establish EtherNet Communication Between Markem-Imaje Laser Printer and AB ControlLogix PLC | Oxmaint Community">
    <meta property="og:description" content="I am currently working on establishing EtherNet communication between a Markem-Imaje laser printer and an AB ControlLogix PLC. Utilizing an EWEB module and attempting to use sockets for this setup, however, the guidance from Markem is unclear. Curious if anyone has experience with implementing this type of communication successfully.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-establish-ethernet-communication-between-markem-imaje-laser-printer-and-ab-controllogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Establish EtherNet Communication Between Markem-Imaje Laser Printer and AB ControlLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="I am currently working on establishing EtherNet communication between a Markem-Imaje laser printer and an AB ControlLogix PLC. Utilizing an EWEB module and attempting to use sockets for this setup, however, the guidance from Markem is unclear. Curious if anyone has experience with implementing this type of communication successfully.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-establish-ethernet-communication-between-markem-imaje-laser-printer-and-ab-controllogix-plc"
      },
      "headline": "How to Establish EtherNet Communication Between Markem-Imaje Laser Printer and AB ControlLogix PLC",
      "description": "I am currently working on establishing EtherNet communication between a Markem-Imaje laser printer and an AB ControlLogix PLC. Utilizing an EWEB module and attempting to use sockets for this setup, however, the guidance from Markem is unclear. Curious if anyone has experience with implementing this type of communication successfully.",
      "author": {
        "@type": "Person",
        "name": "bostedtm"
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
                <h1 class="text-white">How to Establish EtherNet Communication Between Markem-Imaje Laser Printer and AB ControlLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bostedtm</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>46 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">41547</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">453</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently working on establishing EtherNet communication between a Markem-Imaje laser printer and an AB ControlLogix PLC. Utilizing an EWEB module and attempting to use sockets for this setup, however, the guidance from Markem is unclear. Curious if anyone has experience with implementing this type of communication successfully.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for not being able to assist you at the moment as I am currently in the process of selecting message formats from a ControlLogix processor. Your initial post was posted quite a while back. I am curious to know how your process turned out. Let me know how it went!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>johnstongeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Important Note: This guide is specifically for NextGen Markem printers utilizing NGPCL software. The process is simple: just send an ASCII string to the printer and you will receive a response. The string format typically includes STX, the command to the printer, parameters for the command, and ETX. The response will also follow a similar format with STX, the reply, parameters (if applicable), and ETX. Keep in mind the use of "|" as separators. For example, to select a job, you would send a string like STX|~JS|*name of layout/job*|ETX, where ~JS represents the Job Select command. For updating a job with values to be printed, use a string format like STX|~JU1|*Job name*|0|*parameter name*|*parameter value*|...|ETX. You can include multiple parameters as long as the packet size stays within the transfer byte limit. Please note that I do not know the exact limit off the top of my head. If needed, I can send you the NGPCL user guide via PM, which provides detailed instructions on Ethernet communications with NextGen Markem printers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeebs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I am currently working on a VB.Net program aimed at establishing communication between a PC and a NextGen Markem Printer using NGPCL protocol. However, I am encountering difficulties in the process. My objective is to establish Ethernet communication with the printer by connecting to it through a socket, specifying its IP address and port number (21000 as indicated in the protocol). The connection is successful, but I am facing challenges when trying to send commands to the printer. For instance, I send STX|~VR|ETX to request the printer's firmware, but I am not receiving any response from the printer. I am unsure of where I may be going wrong, despite my efforts in reading through the NGPCL protocol. Could you please provide assistance? Thank you in advance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>juankar008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I just wanted to express my gratitude to you all. Your support and guidance have been invaluable to me. Thank you so much! Cheers!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>belph</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am interested in the NGPCL user guide as I need to transmit data from a PLC to a Markem printer. Please send the NGPCL user guide to my email at [email protected] Optionally, I can send you the NGPCL user guide via private message. This guide explains Ethernet communication to NextGen Markem printers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>wong.arif</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am in need of the NGPCL user guide as I want to transmit data from a PLC to a Markem printer. Kindly email the NGPCL user guide to me at [email protected] Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>wong.arif</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hibelph, can you share with us how you managed to sneak into the Markem Printer? We are curious to know the details of your infiltration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>wong.arif</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you familiar with working with the NGPCL protocol over an Ethernet connection? I am looking for guidance on the port protocol as I have conducted tests using HTTP. While the connection is stable and data is sent successfully, I am encountering issues with receiving. Your assistance would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hugo Martinicorena</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am experienced in working with both NGPCL and DCP protocols through an ethernet port. These protocols are simple to navigate. Please provide me with detailed information on your requirements so I can assist you further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vvahidoglu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experience working with both NGPCL and DCP protocols through an ethernet port. These protocols are user-friendly and efficient. Please provide more details on your requirements so I can assist you further. Which program are you currently using to receive data from MI? Let me help you with your specific needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vvahidoglu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello vvahidoglu, I am delighted to receive your response. I have diligently researched and explored various avenues, including consulting the developers of the ngpcl protocol. While I am utilizing a PC instead of a plc, I believe that the key to establishing seamless communication with the printer remains the same. Although I am able to connect via the http protocol, I am encountering difficulty receiving a response from the printer. Currently, I am using a compatible driver that allows me to transmit an image file with an EAN13 code and text. I acknowledge that this information may be insufficient, as this issue arose a year ago. I am in dire need of your assistance to overcome this challenge, as my objective is to develop bespoke software capable of independent communication with the printer. I assure you that with your guidance, I will successfully achieve this goal. How would you prefer to stay in touch - through this forum or via email? Your help is greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hugo Martinicorena</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, Hugo! Great news – you can create your own program to interact with the printer without the need for a specific driver. This can be achieved by utilizing the tcp/ip protocol. It is important to note that sending an image file and an EAN13 barcode are two distinct processes. When sending an EAN13 barcode, it should be treated as text rather than an image. Feel free to reach out to me directly at vvahidoglu_at_gmail_dot_com with your thoughts and plans. I can provide you with program codes to assist you. Best regards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vvahidoglu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I am embarking on a similar project and was wondering if anyone has a copy of the NGPCL user guide, as mentioned by Jeebs. If you do, would you be able to send it to me via PM? Thank you in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chucktehengineer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently developing a user interface for multiple printers. Unfortunately, I am unable to locate the necessary document. Would it be possible for you to send me a copy via private message?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mbeau</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As I was researching how to communicate with my Markem printer, I stumbled upon this discussion thread. I'm hoping someone can provide some insights into my issue. I must admit, I'm not well-versed in ASCII commands.

Previously, at my workplace, a Micrologix 1400 successfully sent data to a Markem printer. Now, I'm attempting to achieve the same with a CompactLogix L23 equipped with an ASCII module. Unfortunately, I'm restricted to using this PLC as the printer has been integrated into the system.

The printer model remains the same, and I have verified that the cabling, Baud rate, Parity, Stop bits, and Data parameters all match. In fact, I even connected a Micrologix to the printer to confirm that the previous setup still functioned correctly.

The previously sent string from the Micrologix was: ^B~JS0|image1|0|TEXT_0|0123456789|TEXT_4|1 2 9 4|^C, which basically selects a job and inputs numbers into different fields.

However, when I attempt to send the same string from a CPS, nothing happens. I tried replacing the legacy commands (^B and ^C) with STX and ETX as advised in the Markem guide, but to no avail.

My suspicion is that the issue lies in the Termination Mode/Delimiter settings in the ASCII module's configuration. The Micrologix is configured with Termination 1: /d and Termination 2: /ff, but the 1769-ASCII module does not offer these options. I experimented with different settings in the hopes of finding a solution, but nothing has worked so far.

Do you have any suggestions or insights that could help me resolve this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BlueAltezza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you been able to successfully interface with the ASCII module on the CompactLogix? Give it a try by connecting to your laptop's serial port and monitoring the output using Hyperterminal or Realterm. See what valuable data you can extract!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>brendan.buchan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you haven't heard of Realterm before, it's much easier to use than Hyperterminal. I am successfully receiving the string I am sending out, which includes various data elements. I will also connect the 1400 to my PC to compare the data it provides. This comparison may help me troubleshoot any issues as I am running out of solutions. After connecting the 1400, it sent a specific string to my PC, indicating progress in resolving the issue. I will now configure the CompactLogix to send the same string to ensure everything is working properly. Thank you for the advice, I will update you on my findings soon.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BlueAltezza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your Programmable Logic Controller (PLC) programming, ensure to prepend the start signal $02 and append the end signal $03$0D to your string before activating the ASCII module for transmission, including the <STX> and <ETX><CR> characters. This will optimize your data transmission process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>brendan.buchan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After extensive troubleshooting, I finally managed to resolve the issue with my Industrial Printer by discovering a hidden jumper setting on the ASCII module. Despite trying different configurations and even mimicking the string output of a different PLC model, the Markem printer would not cooperate until I made this simple adjustment. It's bewildering that a standard AB serial cable worked for some connections but not others. Your assistance was greatly appreciated throughout this frustrating process. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BlueAltezza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know the functions of pin 7 and pin 8? Could they be related to CTS and RTS communication signals?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>brendan.buchan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, Brendan, you are absolutely right.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BlueAltezza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unsure about the specific document you need, feel free to give this one a try. Explore other options by using relevant keywords to narrow down your search.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ak0004</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User ak0004 recommended a document, although it's not clear which one. Click to access it. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a message from Jeebs, it was noted that the following instructions apply specifically to NextGen Markem printers using NGPCL. The process is simple: send an ASCII string to the printer and you will receive a response in a similar format. The string format includes STX, the command to the printer, parameters for the command, and ETX. The response format includes STX, a reply, parameters if available, and ETX. Note the use of "|" as a separator. For example, to select a job, the string should be in the format STX|~JS|name of layout/job|ETX, with ~JS indicating the Job Select command. For a job update with values to be printed, the string format should be STX|~JU1|Job name|0|parameter name|parameter value|...|ETX. Multiple parameters can be added as long as the packet does not exceed the transfer byte limit. If needed, the NGPCL user guide can be provided via private message, explaining Ethernet communications with NextGen Markem printers. Click to expand for more information. Wondering if the 9040 or 9042 printers are considered NextGen devices?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>NGPCL codevvahidoglu mentioned that they are able to work with both NGPCL and DCP protocols through an Ethernet port, finding both processes to be simple. They are willing to assist and are requesting more details to better understand what is needed. The user is inquiring about the program being used to receive data from MI. Although this thread is old, the user is trying to establish communication with Omron NJ PLC and Markem Imaje 9450E. Any code samples provided would be greatly appreciated. Omron NJ socket sends data via a Byte array in HEX format, prompting the user to convert ASCII to HEX when sending information. Uncertain whether to convert or send straight ASCII data, the user is seeking guidance on the best approach. If you are still following this thread, please send any relevant code samples to [email protected]</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dr.Bruce2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Explore a fresh discussion - the 9000 series sets itself apart.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to Markem Imaje Ethernet Communications, it's important to note that the 9000 series offers unique characteristics. If you're using an Omron NJ501-1320 and encountering changes like Windows CE on the 9450 model, it may lead to questions about NGPCL compatibility and the need for special characters in the code. Start a new thread to discuss these differences and tap into the valuable insights of fellow industry professionals. Don't hesitate to seek assistance in navigating the complexities of Markem Imaje technology.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dr.Bruce2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Despite successfully using the FT and FD commands to communicate with my Smartdate X40 printer using NGPCL, I encountered issues when trying to send an .image file. After uploading the file without errors, the Smartdate Console displayed a failure to open the .image file. I attempted to use a USB key as an alternative to loading the file, but encountered a similar issue with a .job file. Interestingly, when exporting the .image file to a USB key and comparing it to the original, they were identical. I am seeking assistance from anyone who has successfully sent an .image file to a Markem printer. Any help would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dhuggins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there may have been an issue with the formatting of the sending string, as the file was sent but did not receive the correct ETX to signify the end of the transmission.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you facing challenges in connecting your Omron NX102 PLC with a Markem-imaje 2200 printer via Ethernet? We are in need of an interface manual and any code samples that can help us establish a successful connection. The Omron NJ PLC socket sends data through a Byte array in HEX format, prompting us to consider converting ASCII to HEX before transmission. If you have any insights or solutions to offer, please reach out to us at[email protected] Your assistance would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>simbapooh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I want to express my gratitude for providing me with this manual. Wishing you a fantastic year ahead. Regards, John. Happy New Year!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JohnB1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to remotely access the Markem Imaje Smartdate X60 printer to retrieve information such as serial numbers and printed labels using command lines? Your assistance with this matter would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>oumalekhd</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking to establish communication between your PC and a Markem Imaje 9450 printer? Hello everyone! I am working on my final year project, focusing on connecting my PC with a Markem Imaje printer model 9450. I am seeking assistance as I am unfamiliar with setting up communication through the ethernet port and understanding the communication protocol. Can anyone provide guidance on this process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>amine hajlouti</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Amine Hajlouti is seeking assistance with his final year project focused on communication between a Markem Imaje printer (model 9450) and a PC. He is specifically looking for guidance on how to utilize the Ethernet port and the communication protocol involved. Can anyone help Amine navigate this process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BachPhi suggested trying the following. What should I give a go to?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>amine hajlouti</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to remotely send commands to a Markem Imaje SmartDate X60 and retrieve details such as the serial number and printed labels, there are steps you need to take to verify ownership. This information is considered confidential and cannot be shared without proper authentication. Please provide more details so we can assist you further. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Darrgintari</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Warning: Undead thread detected!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey warned of a resurrected thread - a classic case of a "zombie thread" making a comeback. He then dashed out to grab some groceries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Darrgintari</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you provide assistance, please?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>oumalekhd</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Despite years passing, a solution still eludes many who have the same question. It appears that the integration options offered by Dover's Markem-Imaje are inferior to other CIJ options such as Video Jet, Domino, Hitachi, and Keyence, which are known for being user-friendly and well-documented. Is Markem-Imaje really worse than John Deere? This forum thread seems to be the go-to source for answers, but it ultimately points users in a different direction, leading to a cycle of searching and returning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ecujak</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is your inquiry?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully set up Ethernet communication between a Markem-Imaje SDX45 printer and an Omron NX102 PLC using NGPCL commands. If you have any questions, feel free to ask. Please note that the SDX45 may occasionally freeze and fail to respond to commands, instead closing the TCP/IP connection. This can also cause the web interface to stop working. To resolve this issue, you will need to reboot the printer before attempting to send commands again.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JYG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JYG shared their experience in implementing Ethernet communication with a Markem-Imaje SDX45 printer using NGPCL commands from an Omron NX102 PLC. They mentioned that the SDX45 occasionally freezes and fails to respond to commands, instead closing the TCP/IP connection and causing the web interface to stop working. Rebooting the printer is required before successful commands can be sent.

From personal experience with communication to other Markem printers, it appears that the company's communication implementation may have some issues. Despite sending numerous jobs without errors, unexpected issues can arise suddenly. For example, a new message may be saved in both print heads, but one head continues to print the old message. Manually updating the message via the Markem's keyboard may cause further complications, such as one print head responding with a null message until a full reboot is performed.

These recurring issues have led to frustration, but due to heavy investments in Markem printers, replacement is not currently an option. Although Markem does not seem inclined to resolve the issue, the operators have learned to work around it by running test prints before packaging to prevent mislabeling products.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate your feedback and comments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JYG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jeebs mentioned that this information is specifically for NextGen Markem printers that use NGPCL. The process is simple: you send an ASCII string to the printer and receive a response. The string format is STX|*command to printer*|*parameters for command*|ETX, while the response format is STX|*reply*|*parameters (if available)*|ETX. It's important to note the use of "|". For example, to select a job, the string format is STX|~JS|*name of layout/job*|ETX, where "~JS" is the Job Select command. Another example is a job update, where values need to be updated for printing in the format: STX|~JU1|*Job name*|0|*parameter name*|*parameter value*|...|ETX. Additional parameters can be added as long as the packet does not exceed the transfer byte limit. For those interested, the NGPCL user guide can be provided for more details on Ethernet communication with NextGen Markem printers. Feel free to expand on this for further explanations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Irajat49</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have any information on communicating with Markem printers, please consider sharing it here for everyone to benefit from. Your contribution would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>valer85</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I establish EtherNet communication between a Markem-Imaje laser printer and an AB ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To establish communication, you can use an EWEB module and implement socket communication. However, it's important to ensure clear guidance from Markem for a successful setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What challenges are commonly faced when setting up EtherNet communication between a Markem-Imaje printer and an AB ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Challenges could include unclear guidance from Markem, compatibility issues between the devices, and difficulties in configuring socket communication properly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any best practices or tips for implementing EtherNet communication between a Markem-Imaje printer and an AB ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It's advisable to thoroughly review the documentation provided by both Markem and AB, ensure proper configuration of the EWEB module, and troubleshoot any issues systematically to ensure successful communication setup.</p>
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
