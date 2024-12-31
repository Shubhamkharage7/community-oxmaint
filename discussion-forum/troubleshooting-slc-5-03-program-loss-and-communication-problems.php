
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! Im reaching out today because Im struggling to solve a recurring issue with a site Im associated with. Their SLC 5/03s keep losing their programs. Despite replacing all the batteries, the problem persists. The 5/03 is connected to a PanelView 550 via the DH485 port, and a">
    <meta name="keywords" content="slc 5/03 troubleshooting, slc 5/03 program loss, slc 5/03 communication problems, plc program loss issues, dh485 port communication problems, rs">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-slc-5-03-program-loss-and-communication-problems">
    <title>Troubleshooting SLC 5/03 Program Loss and Communication Problems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting SLC 5/03 Program Loss and Communication Problems | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! Im reaching out today because Im struggling to solve a recurring issue with a site Im associated with. Their SLC 5/03s keep losing their programs. Despite replacing all the batteries, the problem persists. The 5/03 is connected to a PanelView 550 via the DH485 port, and a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-slc-5-03-program-loss-and-communication-problems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting SLC 5/03 Program Loss and Communication Problems | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! Im reaching out today because Im struggling to solve a recurring issue with a site Im associated with. Their SLC 5/03s keep losing their programs. Despite replacing all the batteries, the problem persists. The 5/03 is connected to a PanelView 550 via the DH485 port, and a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-slc-5-03-program-loss-and-communication-problems"
      },
      "headline": "Troubleshooting SLC 5/03 Program Loss and Communication Problems",
      "description": "Hello everyone! Im reaching out today because Im struggling to solve a recurring issue with a site Im associated with. Their SLC 5/03s keep losing their programs. Despite replacing all the batteries, the problem persists. The 5/03 is connected to a PanelView 550 via the DH485 port, and a",
      "author": {
        "@type": "Person",
        "name": "Controls_guy2008"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-10",
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
                <h1 class="text-white">Troubleshooting SLC 5/03 Program Loss and Communication Problems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>32 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1591</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">233</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I'm reaching out today because I'm struggling to solve a recurring issue with a site I'm associated with. Their SLC 5/03s keep losing their programs. Despite replacing all the batteries, the problem persists. The 5/03 is connected to a PanelView 550 via the DH485 port, and a drive via the RS232 port. I have a UIC and CP3 cable set. Since this site is remote, they sent me the PLCs to reprogram. I can successfully download the program using either the UIC or CP3. However, after downloading the program, I receive a message stating, "you will lose communications from both ports." Subsequently, I am unable to connect to the PLC on either port using DF1 or DH485 through the UIC and CP3. I have provided a picture displaying the program comms settings and the error warning. The issue arises when they install the PLC back into their rack, as it fails to communicate with the HMI or drive. While programming in my rack, there are no faults, but once installed at the site, the FLT light starts flashing along with the DH485 green light solid. I'm struggling to identify the cause of this issue and need to resolve it before flying out to the site. Apologies for the lengthy explanation, but my query remains - does anyone have insight into what could be causing this fault and how I can establish an online connection with the processor post-download.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Navigate to the Channel 0 user tab to display the configuration settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To demonstrate the configuration, simply click on the Channel 0 user tab as requested by geniusintraining. Explore the settings further by clicking to expand the options.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The configuration for channel 0 is specifically optimized for processing ASCIILets. Moving on, what is currently connected to the processor at this particular location?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During the discussion, geniusintraining mentioned that channel 0 is assigned to ASCIILets. To further understand this, what specific equipment is connected to the processor at that particular spot? It turns out that the channel is linked to an Introl Design DC100A as detailed in the manual found here: https://www.introldesign.com/Uploads/Documents/DC100LCP/DC100A-LCP%20Manual%20collated.pdf. This information sheds light on the configuration and functionality of the system in question.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, the CP3 is not compatible as the DB9 settings must remain in ASCII mode. However, after the download process, communication cannot be established through ASCII. Instead, utilize the DH485 port (RJ45) with the UIC protocol, designated as Channel 1. Navigate to the Channel 1 tab and provide a screenshot for further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
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
            <p>A user on geniusintraining forum pointed out that the CP3 setting must stay in ASCII when using the DB9 port to communicate with another device. For communication through ASCII, using the DH485 (RJ45) port with the UIC is recommended, usually set as Channel 1. Make sure to click on the Channel 1 tab and share a screenshot. This setup is connected to a pv550 display.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're facing issues with your UIC set at 19.2k, consider redownloading and connecting online with your UIC to adjust the baud rate to 9.6. This simple adjustment should resolve any connectivity issues you may be experiencing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have frequently downloaded the program using a DB9 set to ASCII format and sent it to customers. To do this, follow these steps: 1. Reset the CPU to default settings 2. Enter the programming key 3. Download the program and send it to the customer 4. Once they receive it, they should put it back in run mode. Additionally, it is crucial to click on "Apply Warning" from your PIC to ensure that the COM settings do not revert to default. Failure to do so will result in communication issues with the CPU unless the COM settings match the downloaded program. The default settings for the two COMs on a 5/03CH0 user are as follows: DF1 Full-duplex: - no handshaking - 19.2 Kbaud - CRC Error Check - duplicate detect on - no parity. CH1 user DH-485: - 19.2 Kbaud - node address = 1</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a training genius, I have frequently utilized a method to download programs to customers via a DB9 set to ASCII. The process involves resetting the CPU to default, programming the key, downloading the program, and then having the customer put it back into run mode. It is crucial to click on "Apply Warning" from your PIC to ensure that the COM settings do not revert to default. Failure to do so may result in communication issues with the CPU. The default settings for the two COMs on a 5/03 are as follows: CH0 user DF1 Full-duplex and CH1 user DH-485. Despite accepting the warnings and sending the PLCs back, issues such as a flashing FLT light and solid DH485 light persist with no functional communication to the HMI. To address this, I will have the customer send one of the PLCs back for channel 1 testing after downloading the code. Additionally, I have a spare PLC that I can test on channel 1 to troubleshoot the issue further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To resolve the warning and reconnect to the UIC, adjust your driver settings to 9.6 in configuration. Another option is to request an upgrade to 19.2 on the HMI for better performance. Then, download the program using 19.2k speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Genius in Training recommends accepting the warning and reconnecting online with the UIC. It is crucial to adjust the driver configuration to 9.6 or opt for a better option by changing the HMI to 19.2 for faster downloads at 19.2k. Despite these changes, the processor remains undetectable with the current settings in place.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is advised to consider switching to a baud rate of 19.2k for optimal performance with the 1747-UIC. Adjusting the baud rate on this device is not a straightforward process. Refer to technical note IN5020 for detailed instructions (Open to all users). While aftermarket versions may offer easier ways to change the baud rate, my experience has primarily been with 19.2k.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce mentioned that changing the baud rate to 19.2k is the recommended option for a 1747-UIC. However, it's not a straightforward process and can be complex. Refer to Seetechnote IN5020 for detailed instructions on changing the baud rate (Accessible to Everyone). It's worth noting that aftermarket versions may offer simpler methods for adjusting the baud rate. If you're wondering why the baud rate was initially set at 9600, it's a common question that arises during these adjustments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Controls_guy2008 inquired about the reason for initially setting the baud rate at 9600. Are there other devices on the DH485 Network aside from the 5/03 and Panelview? If only these two are present, what is the distance between them in terms of cable length? Unless it exceeds hundreds of feet, either baud rate should work well. Keep in mind that changing one baud rate will require adjusting the other, which can easily be done using Panelbuilder32. It is generally recommended to leave settings at default values whenever possible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC inquired about the DH485 Network and its compatibility with devices other than the 5/03 PLC and the Panelview HMI. If these are the only devices connected, the cable length between them is crucial. It should not exceed hundreds of feet for optimal performance, regardless of the baud rate selected. Changing one setting will require a corresponding adjustment in the other, especially if using Panelbuilder32 software. Preserving default values whenever possible is a prudent choice.

Unfortunately, the HMI program is no longer accessible, but the PV settings can be manually adjusted to 19200 in the settings menu. While there may not be additional devices in the network, the initial baud rate setting of 9600 raises questions. The distance between the HMI and PLC is approximately 15 feet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using Panelbuilder 32 software, I suggest attempting to upload the program from it. Don't forget to check the settings menu to make sure the baud rate is available for selection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for help with a recurring issue involving SLC 5/03 PLCs dropping their programs? I am currently facing a similar problem with a site I am connected with. Despite replacing all batteries, the issue persists. The PLC has a PanelView 550 linked to the DH485 port and a drive connected to the RS232 port, with a UIC and CP3 cableset in use. 

To troubleshoot remotely, the PLCs were sent to me for reprogramming. While I am able to successfully download the program using the UIC or CP3, I encounter a communication error message afterwards. Subsequently, I am unable to reconnect to the PLC via either port using DF1 or DH485. Troubleshooting the PLCs at the remote site revealed communication failures with the HMI and drive.

I have reviewed the program communications settings and the error message, but the issue persists. It is crucial for me to establish an online connection post-download, as PLCs sent back to the site fail to communicate upon installation. While there are no faults during programming in my rack, the PLCs display a fault light and DH485 green light flashing upon installation.

If anyone has encountered a similar fault or has suggestions on resolving this issue and establishing online communication post-download, please share your insights. Your input could greatly assist in resolving this technical challenge. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Incandenza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During a previous experience, I encountered a recurring problem on two 5/03s where they were constantly losing their programs and communication was a challenge. The solution that worked for me was to swap out the power supply. Once I did that, the issues disappeared. It's common for a faulty power supply or chassis to lead to program loss in the 5/xx series, particularly as these components age. In some cases, a failing IO module can also be the culprit, though it may be more difficult to diagnose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When a 5/xx unit loses its program, it may be due to a failing power supply or chassis, which are common issues as these components age. Another possible culprit could be a failing IO module. In a recent case, replacing the power supply did not solve the issue, but changing the baud rate helped temporarily. Now, I am encountering this error message. Any suggestions for further troubleshooting?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The error message is pointing towards a fault in slot 7 of the specialty I/O module. This fault is causing the PLC to malfunction and throw errors. Let's investigate what could be causing the issue in slot 7.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bkottaras pointed out that the error indicates an issue with the Specialty I/O module in slot 7. This "faulted" component is causing the PLC to malfunction. The Thermocouple card is located in slot 7 - could this be a result of a card failure or perhaps a grounding/chassis issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A major fault has been triggered on the PLC due to a module fault in slot 7, as indicated by the screen shot. It is recommended to swap out the faulty module with a replacement if available to resolve the PLC major fault issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bkottaras identified a module fault in slot 7, which is triggering a major fault on the PLC. The source of the major fault on the PLC seems to be the module as shown in the screen shot. If possible, swap the module with another one to troubleshoot the issue. Unfortunately, they do not have a spare module available at the moment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to buying on eBay, you may be taking risks. It's important not to switch modules with the power on to avoid potential issues. Typically, the program will automatically configure or reconfigure the module during the initial scan, eliminating the need for manual settings adjustments like DIP switches. For clarification, it's recommended to refer to the manual for the card or module on the Allen Bradley website. Feel free to correct me if I'm mistaken.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's always a good idea to double check the wiring connected to the module to prevent any potential issues that could trigger a fault mode. It's better to be safe than sorry!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Look no further! The owner is often found here and you can purchase directly from them, skipping eBay altogether. Find the Allen Bradley 1746-NI4 Analog Input 4 CH Ser A 1746NI4 here. Update: Disregard, this is an NI4.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When choosing between the 1746-NT4 and NT8 thermocouple modules, I recall a frustrating experience with one of them that led me to switch to a mA input card along with external signal conditioners.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As mentioned in his earlier post, he has an NT4 system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access the attachment, I should click on the image following his message. This simple step can provide valuable information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After receiving feedback from bkottaras, it's essential to double-check the wiring to the module to avoid potential issues that could trigger a fault mode. This step can prevent any further complications. Thank you for the valuable insights! During today's inspection, all wiring was examined thoroughly, but the card remains unresponsive with no lights. Plan is to replace the card first, and if that doesn't resolve the issue, further investigation into the chassis will be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That's great news! If I were in your shoes, I'd start searching for a spare part as soon as possible. Make sure to check out the suggestions from other users on reliable vendors and shops where you can find what you need.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bkottaras noted that the owner is frequently present in this location. Instead of using eBay, you can purchase one directly from them. The product in question is the Allen Bradley 1746-NI4 Analog Input 4 CH Ser A 1746NI4. The issue was resolved as they were able to locate and install the card. Upon switching the PLC, a warning message appeared (see figure 1). After replacing the nt4 card, there are no errors shown, but the temperatures are not being read. The concern is whether there are differences in how these PLCs handle temperature inputs and calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Controls_guy2008</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the SLC 5/03 program loss and communication problems despite replacing the batteries?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to communication settings, hardware connections, or compatibility between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the message "you will lose communications from both ports" appear after downloading the program to the SLC 5/03?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This message could indicate a disruption in communication protocols that need to be addressed to establish a stable connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the SLC 5/03 communication issues between the HMI, drive, and the processor post-download?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Investigate the hardware connections, check communication settings, and ensure compatibility between devices to resolve the communication problems.</p>
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
