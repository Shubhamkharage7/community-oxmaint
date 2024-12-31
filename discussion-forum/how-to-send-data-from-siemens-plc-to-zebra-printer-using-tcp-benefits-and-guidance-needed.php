
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I own a Siemens 315 PLC and need to send data to a Zebra 105SL Plus barcode printer. I have the option to connect with either serial or Ethernet TCP. While I initially considered getting a serial interface card, I am now contemplating the benefits of using TCP instead.">
    <meta name="keywords" content="siemens plc, zebra printer, tcp communication, data transmission, ethernet connectivity, barcode printing, siemens 315 plc, zebra 105sl plus, serial">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-send-data-from-siemens-plc-to-zebra-printer-using-tcp-benefits-and-guidance-needed">
    <title>How to Send Data from Siemens PLC to Zebra Printer using TCP - Benefits and Guidance Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Send Data from Siemens PLC to Zebra Printer using TCP - Benefits and Guidance Needed | Oxmaint Community">
    <meta property="og:description" content="I own a Siemens 315 PLC and need to send data to a Zebra 105SL Plus barcode printer. I have the option to connect with either serial or Ethernet TCP. While I initially considered getting a serial interface card, I am now contemplating the benefits of using TCP instead.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-send-data-from-siemens-plc-to-zebra-printer-using-tcp-benefits-and-guidance-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Send Data from Siemens PLC to Zebra Printer using TCP - Benefits and Guidance Needed | Oxmaint Community">
    <meta name="twitter:description" content="I own a Siemens 315 PLC and need to send data to a Zebra 105SL Plus barcode printer. I have the option to connect with either serial or Ethernet TCP. While I initially considered getting a serial interface card, I am now contemplating the benefits of using TCP instead.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-send-data-from-siemens-plc-to-zebra-printer-using-tcp-benefits-and-guidance-needed"
      },
      "headline": "How to Send Data from Siemens PLC to Zebra Printer using TCP - Benefits and Guidance Needed",
      "description": "I own a Siemens 315 PLC and need to send data to a Zebra 105SL Plus barcode printer. I have the option to connect with either serial or Ethernet TCP. While I initially considered getting a serial interface card, I am now contemplating the benefits of using TCP instead.",
      "author": {
        "@type": "Person",
        "name": "JDCROCKETT724"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-15",
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
                <h1 class="text-white">How to Send Data from Siemens PLC to Zebra Printer using TCP - Benefits and Guidance Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>36 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">31158</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">466</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I own a Siemens 315 PLC and need to send data to a Zebra 105SL Plus barcode printer. I have the option to connect with either serial or Ethernet TCP. While I initially considered getting a serial interface card, I am now contemplating the benefits of using TCP instead. This would eliminate the need for a serial card and cable. However, I am unfamiliar with TCP and would appreciate any guidance from those who have experience in this area. Any advice would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully established a TCP connection using Siemens' available function blocks. These function blocks, such as TCON, TSND, TRCV, and TDSCON, can help facilitate connecting, sending, receiving, and disconnecting data over a TCP connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kjs1230</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you currently utilizing a CP343 Ethernet module or a 315 PN/DP communication processor? Which one is more suitable for your industrial networking needs?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kjs1230</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am using the CP343 specifically for the customer network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For more information on Siemens blocks, check out this link: http://support.automation.siemens.c...objaction=csview&extranet=standard&viewreg=WW</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kjs1230</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, KJ. I will explore this option to determine the possibilities and challenges it presents. I will share any progress or setbacks with updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it necessary to integrate the Zebra Printer into NetPro for configuring TCP communications with it? If yes, what is the process? Additionally, does anyone have a sample code for this application? Explore how to set up TCP communications with a Zebra Printer in NetPro and find sample code for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Setting up the printer in NetPro is not necessary unless you are dealing with the CP343. I might have a code snippet that I can provide after locating it, although it has been some time since I last accessed it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kjs1230</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my efforts to communicate with the printer, I am utilizing TCON, TSND, TRCV, and TDSCON protocols. I am encountering difficulties specifically with TCON, as the ID requires a hexadecimal number for the connection. How can I establish a connection using a connection number to the printer's IP address?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To establish a remote connection, a unique ID number is essential. Make sure to input the necessary parameters on the TCON block for the connection In/Out, such as UDT 65 or similar data formats.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kjs1230</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have located where to input the IP address. The current status code is 7002, indicating a "Follow-on call (REQ irrelevant), connection establishment in progress," but it seems to be stuck at this stage. I can resolve this issue by halting the PLC and performing a warm restart. Could you please provide the port number used for the Zebra connection?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When connecting to the Zebra printer, I used port number 9100. It is possible to modify this setting if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kjs1230</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Did you opt for "TCP" or "ISO over TCP" for your connection type? Your commitment is truly appreciated, KJS. Thank you for staying with me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am receiving a TCON error code 80A2 indicating that the local or remote port is being utilized by the system. Can you provide any insight into this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize the setup, ensure the Zebra printer is configured as the TCP server ready to receive a connection from the client, which is set up as the PLC. Consider testing a different port on the Zebra if needed. It's unclear what settings need to be adjusted on the Zebra end. Can you access the terminal with HyperTerminal or Putty? It is possible to modify the port through the web server interface. Good luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kjs1230</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have identified the issue with the port configuration. The UDT logic does not initialize the port until it is activated, leading to a status of 7000 "No job processing active." Now, I must determine how to activate job processing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To transmit data to the Zebra printer, simply activate the 'REQ' boolean in the T_SEND block. Have you prepared a data block containing your ZPL code for the printer? Additionally, were you required to configure your connection within NetPro?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JOLTRON</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the past, I utilized Tcp.zip, a S7 library containing FB707, for managing T blocks (T_send, rec, con, disc). While I have not updated the blocks recently, they may require some tender loving care. By using Tcp.zip as a wrapper, you can easily set up parameters in one centralized location. Take a look at the included screenshot of a cell currently running with this setup. Hopefully, this information is beneficial to you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JOLTRON</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One of the initial hurdles I faced was establishing a connection. It seems that I encountered similar obstacles to yours. Upon successfully establishing the connection, attempting to retrigger the TCON resulted in an error message stating "Attempt being made to re-establish an existing connection". I discovered a workaround for this issue with the TCON - after triggering it, make sure to capture the results promptly as the process may not be visibly executed and can remain stuck at 7000. This tip can help streamline the connection process and avoid potential errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>FB707 is not included in the Siemens blocks; it was obtained from a machine builder and has been continually improved. This tool efficiently manages various connection settings, and there may be a similar resource available to you. Could you please compress your project files and share them with us, or create a library of your connection blocks for us to review together? This will allow us to provide further assistance and support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JOLTRON</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I received the code from a fellow Michigan PLC user, likely originating from the same machine manufacturer. This code has been incredibly valuable in troubleshooting my connection issues, but I am now building a new codebase from the ground up, incorporating the insights I've gained. I find it beneficial to have custom function blocks tailored to the specific devices I'm controlling, so I'm currently developing a function block to interface with a zebra printer. Once it's finished, I'll gladly share it with the PLC Talk community as a way of reciprocating the help and support I've received there.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is highly probable that this is the same block. Judging by the username, I believe I have collaborated with someone named kjs before. Please keep us updated on your progress. I enjoy observing how others code. In the past, I used to organize separate blocks for different devices, but it became too overwhelming to maintain, so I transitioned to using more 'general' blocks. Best of luck with your project!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JOLTRON</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After adapting the example code to work with the Zebra printer, a screenshot of the customized Function Block (FB) is included. To use it, simply input a unique connection ID and the printer's IP address. The FB automatically detects printer disconnections and reconnections. Additionally, a separate FB was created to format the barcode printing using Zebra's ZPL language. This FB generates two essential strings: the date/time and the barcode's serial number. To ensure accuracy, the printer's date and time must match the PLC's. Each time a connection is established, the PLC's date/time is sent to the printer. Your assistance in reaching this point is greatly appreciated, and I hope this information proves beneficial to others in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing your code for connecting to a Zebra printer. It has been extremely helpful in setting up the printer connection. However, I am unsure about how to properly format the data for printing. Do you have a simple example demonstrating how to construct the string to be sent to the printer? Currently, I have created a database where each byte includes an ASCII character, with all the characters combined to form the message to be printed (including ZPL language symbols). This database is then used as input for the TSEND function block. Are there alternative methods for managing the data for printing? I will not be able to test my code until next week, and I am feeling apprehensive about this aspect.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>totegol</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sc132125</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Achieving success in printing from a Zebra printer via Ethernet is possible. If you need a PLC example, feel free to reach out to me at [email protected] I have successfully implemented this on a Micrologix 1400 and an S7-300 Siemens PLC, and am currently working on integrating it with the Compactlogix. It's worth noting that this process can consume a significant amount of memory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ljimenez</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I'm having trouble connecting a zebra printer to Siemens TIA software. I have attached some pictures for reference. Specifically, I am not receiving the "TCON_DONE" signal. Any advice on how to resolve this issue would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SamerTheHammer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The DONE bit is activated for only one PLC cycle, necessitating the use of an SR flip flop to capture its signal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mrkvak</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Six years have passed, and I am still struggling to connect my zebra printer to my S7 315 PLC. Despite attempting the suggested code, I am unable to establish a connection. I have verified the IP address, port settings, and the error code consistently remains at 7000. Any suggestions or solutions to this ongoing issue would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jfourquet</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I may not be able to provide answers to these questions anymore as the project was completed many years ago. I have since transitioned to working with different machinery and no longer have a license for the old Step 7 classic software. If you refer to the help file for the instruction causing the 7000 error, you can find out its meaning. It's possible that others who have worked with my code may have insights on this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JDCROCKETT724</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It may seem like a simple question, but have you rebooted your PLC after downloading new hardware configurations? This step is crucial for ensuring that the changes are properly implemented and the system is running smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the return value "7000" appears on a TSEND instruction, it indicates that no active job is currently being performed. Typically, a send action is initiated by a rising edge on the REQ input, causing the status to change from 7000 to a different value, such as 7001 or 7002. Once the task is completed, the status returns to 7000. This status change occurs very quickly, making it difficult to observe in real time. Previously, I developed software for S7-1500 PLCs in collaboration with a Zebra printer, and it has been functioning effectively.

For successful commissioning, I recommend using a terminal application like the Hercules Setup Utility. With this tool, you can test the functionality of the TSEND instruction by sending and receiving ASCII strings through TCP server and client connections. Similarly, the terminal application can be used to configure string settings for the printer. By connecting to the Zebra printer, acting as a TCP server, you can send strings and view the printer output in real time.

I am willing to share the software developed for S7-1500, as it may be applicable to S7-300 systems as well. In my experience, utilizing the TSEND_C instruction has proven to be simpler and more efficient, as it combines the functions of TCON, TDISCON, and TSEND into one instruction. Previously, I used the TSEND instruction separately, and it also yielded successful results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mrkvak</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mrkvak explained that when the return value is "7000" on a TSEND instruction, it indicates that no active job is being performed. Typically, the send action is triggered by a rising edge on the REQ input, resulting in the status changing to something other than 7000 (such as 7001 or 7002). Once the task is completed, the status reverts back to 7000 momentarily, making it difficult to observe in online view. Mrkvak previously developed software for S7-1500 with a Zebra printer, which has been successful.

For seamless commissioning, it is recommended to utilize a terminal application like the Hercules Setup utility. This allows testing of TCP server, client connections, and verification of TSEND instruction functionality by receiving ASCII strings in the terminal. Conversely, the terminal application can also be used to configure strings for the printer. By connecting to the Zebra printer, acting as a TCP server, users can send strings and monitor the printer output.

Although sharing the S7-1500 software is possible, it is not available for S7-300 models. However, the process should be similar. The TSEND_C instruction is preferred as it simplifies the task by combining TCON, TDISCON, and TSEND in one instruction. Previously, the TSEND instruction was used successfully.

If there are issues with connecting to Hercules for testing, posting the S7-1500 project with TSEND_C implementation could be helpful. This would aid in ruling out any programming-related issues and ensuring seamless functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ctking</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ctking inquired about sharing a Siemens S7-1500 project using the tsend_c function. They are experiencing issues connecting to Hercules for testing due to potential port configuration issues and want to eliminate any programming errors. Unfortunately, the complete backup cannot be uploaded here, but it is available on Google Drive at the following link: [insert link]. If the link is not functioning, please notify me. Refer to the attached image for the location of the critical code segment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mrkvak</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing a Zebra printer with PLC S7-1500 can be achieved with the following steps. First, create and design your label using Zebra Designer software. Next, test the label by printing it from the Zebra Designer program. Then, print the label to a file to obtain the ZPL code necessary for printing via TCP. Identify the specific field in the ZPL code that needs to be modified. Use a terminal application (such as Hercules Setup Utility) to establish a TCP connection to the printer and test printing the ZPL code. Verify the printer's configuration through the web interface, typically on port 6101. Finally, compose the full ZPL code in the PLC as a string. For further assistance, feel free to contact me at [email protected] (also available for Google Hangouts chat). Check out the images for visual guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mrkvak</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mrkvak suggested a method that has proven effective for setting up and printing labels using a Zebra printer. First, design your label using Zebra Designer and print a test label to ensure it looks correct. Next, save the prepared label as a file to access the ZPL code needed to send to the printer via TCP. Identify and modify the necessary fields in the ZPL code and test the TCP connection to the printer using a terminal application like the Hercules setup utility. Once the connection is established, you can print the ZPL code using the terminal app. Make sure to configure the printer's settings through the web interface and use port 6101 for the TCP connection in your PLC. Composing the full ZPL code in PLC as a string can be challenging, but with persistence, it can be accomplished. For further assistance, contact Mrkvak at [email protected] or through Google Hangouts chat. Explore the provided pictures for visual references. Thank you for sharing this insightful information!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ctking</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mrkvak mentioned that he is unable to upload the complete backup here, but provided a link to access it on Google Drive: https://drive.google.com/file/d/1BKJ-xDi6eC1D7gMqxDqYm3OMyrc2AYQQ/view?usp=sharing. If the link is not working, please inform me. Refer to the attached image to locate the crucial section of the code. Feel free to share the backup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mathavan</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What are the benefits of using TCP for sending data from a Siemens PLC to a Zebra printer?
- Using TCP eliminates the need for a serial interface card and cable, simplifying the setup and potentially reducing costs.
  
2. How can I send data from a Siemens PLC to a Zebra printer using TCP?
- To send data using TCP, you would need to establish a TCP/IP connection between the PLC and the printer, configure the network settings accordingly, and ensure proper communication protocols are followed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What guidance can be provided for someone unfamiliar with TCP but looking to implement it for their setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to seek advice from individuals with experience in TCP communication or refer to documentation and tutorials that explain TCP setup and usage in industrial automation applications.</p>
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
