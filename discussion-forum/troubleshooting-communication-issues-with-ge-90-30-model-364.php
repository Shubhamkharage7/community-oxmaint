
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I recently came across an old and dusty GE 90-30 Model 364 in our shop storage area. After cleaning it up and assembling it, I realized that my company has clients who previously used this model years ago. Although I am familiar with Modicons, Quantums, flexLogix, and">
    <meta name="keywords" content="ge 90-30 model 364 troubleshooting, communication issues with ge 90-30 model 364, versapro standard communication problems, ge 90-30 cpu connectivity, ge 90">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-ge-90-30-model-364">
    <title>Troubleshooting Communication Issues with GE 90-30 Model 364 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issues with GE 90-30 Model 364 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I recently came across an old and dusty GE 90-30 Model 364 in our shop storage area. After cleaning it up and assembling it, I realized that my company has clients who previously used this model years ago. Although I am familiar with Modicons, Quantums, flexLogix, and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-ge-90-30-model-364">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issues with GE 90-30 Model 364 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I recently came across an old and dusty GE 90-30 Model 364 in our shop storage area. After cleaning it up and assembling it, I realized that my company has clients who previously used this model years ago. Although I am familiar with Modicons, Quantums, flexLogix, and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-ge-90-30-model-364"
      },
      "headline": "Troubleshooting Communication Issues with GE 90-30 Model 364",
      "description": "Hello everyone, I recently came across an old and dusty GE 90-30 Model 364 in our shop storage area. After cleaning it up and assembling it, I realized that my company has clients who previously used this model years ago. Although I am familiar with Modicons, Quantums, flexLogix, and",
      "author": {
        "@type": "Person",
        "name": "DenommeX"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-14",
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
                <h1 class="text-white">Troubleshooting Communication Issues with GE 90-30 Model 364</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DenommeX</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>27 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">12169</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">496</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I recently came across an old and dusty GE 90-30 Model 364 in our shop storage area. After cleaning it up and assembling it, I realized that my company has clients who previously used this model years ago. Although I am familiar with Modicons, Quantums, flexLogix, and ControlLogix, I am struggling to connect to the CPU on this particular model. 
I am using VersaPro Standard and have attempted to communicate with the processor through both the Ethernet and RS-485 ports without success. Despite resetting the communication settings to default by removing the battery, I am still encountering issues. The EOK and LAN LEDs light up when the unit is powered on and the Ethernet cable is connected, but I am unable to update the firmware or connect with the winloader.
I would greatly appreciate any assistance or advice on this matter. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The CPU364 module's serial port is reserved for maintenance tasks such as downloading firmware upgrades. To establish serial communication with VersaPro, you will need to utilize the 15-pin RS485 port on the power supply and connect it via an RS485.RS232 converter like the IC690ACC900 or HE693SNP232. The converter draws its power (5 VDC) from the port, with the +5VDC located on pin 5 (while pin 7 is at 0V). By default, the port settings are configured to 19,200 baud, 8 data bits, 1 stop bit, and odd parity. Ensure that the COM port on your computer is accessible and check which COM port VersaPro is configured to use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am utilizing the RS-485 port and an adapter to attempt a firmware upgrade. The default settings mentioned for COM1 in VersaPro have been configured consistently across winloader, VersaPro, and my COM port settings. Despite trying Telnet, there has been no response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DenommeX</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that you are receiving +5VDC on pin 5 of the power supply port. The cable connecting your computer's COM port to the 9-pin side of the adapter should match up pin to pin (1 - 1, 2 - 2, 3 - 3, etc.). With only the CPU and power supply installed on the baseplate, take note of which LEDs on the power supply and CPU light up when the system is powered on. Also, observe if the 'SNP' LED on the CPU module blinks when trying to connect online with VersaPro for the first time. 
It is important to check if the CPU module and power supply were installed together on the baseplate while the system was in storage, as the battery backing up RAM is connected from the power supply to the CPU through the baseplate. If the CPU and power supply were stored separately, the RAM may have been cleared, potentially losing any stored program or configuration settings on flash memory upon power-up.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon inspecting the system, I noticed that the Power Supply (PS) is showing a Power (PWR) and Okay (OK) light, while the Central Processing Unit (CPU) is displaying an Error Okay (EOK) light. Despite my attempts to establish a connection from VersaPro, no changes were observed. Both the PS and CPU were securely mounted to the backplane. Further investigation revealed a lack of voltage on pin 5 of the SNP-RS485 adapter, with pins 2 and 8 holding steady at 9.5 volts, and pins 1, 6, and 9 registering at 10.1 volts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DenommeX</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 'SNP' LED on the CPU module will flash to indicate activity on the serial cable. If this LED remains inactive when attempting to establish a connection using VersaPro, it suggests a potential physical issue such as a damaged wire, incorrect cable, or lack of power supply for the adapter. When referencing +5 VDC on pin 5, it should be checked on the 15-pin port of the power supply, not the 9-pin side of the adapter. The LED indicators on the power supply are normal during initial startup, showing that the CPU has no stored data. While the lack of a lit 'BATT' LED implies possible data stored in RAM, the absence of activity from the 'SNP' LED suggests a focus on wiring problems. During connection attempts, the 'SNP' LED should blink periodically.

To troubleshoot:
1. Confirm the presence of +5 VDC between pins 5 and 7 on the power supply to power the active components in the adapter. Consider creating a temporary "cheater" cable if necessary.
2. Check the functionality of the COM1 port on your computer and ensure it is not already in use by other software.
3. Verify that the cable connecting your computer's COM port to the adapter's 9-pin side follows a 1-1, 2-2, 3-3, etc. pin configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are referring to the SNP LED on the PS port or status LED, there is no change in either. I am receiving +5v on the PS port and my com port is set up correctly. Could this issue be due to a faulty CPU?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DenommeX</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When referring to the 'SNP' LED, I am specifically talking about the one located on the CPU module, situated on the upper right-hand corner. While the manual (GFK-0356q) denotes this LED as 'SNP', for a CPU363 or CPU374, it is labeled as 'PS PORT'. The issue could potentially lie with a faulty CPU, malfunctioning adapter, or a problematic power supply. I recall a situation where an aging power supply was unable to supply the required 125 mA to the adapter, as indicated by the blinking 'OK' LED. It is essential to not overlook the possibility of the COM port on your computer being properly configured but unavailable. Ensure that it is accessible and able to communicate with other external devices using various software applications, such as RSLinx, which may automatically take control over the COM port upon system boot-up, preventing other applications from utilizing it simultaneously.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reaching out to GE support, we repeated all the tests and received a port matching software utility from the engineer, but still encountered issues. It is possible that the problem lies with the adapter, as the PS port LED has not illuminated. I even tried resetting the CPU memory to no avail. My next step is to return to the store and test with different adapter, CPU, and power supply units to identify the source of the problem through elimination. I will update you on the outcome. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DenommeX</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the pin configurations for the unapproved GE Fanuc cheater cable that eliminates the need for an adapter. The 9-pin and 15-pin pinouts are as follows: MRd (2) to 12, SD+(B)Td (3) to 10, Sig.Gnd. (5) to 7, RTS (7) to 6, RTS+(B) (7) to 6, RTS+(B) to CTS (8) to 15, DTR (4) to 8, CTS-(A') to DSR (6) to 14, RTS-(A) (6) to 14.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using authentic GE adapters for your GE 360 series? Only three adapters in the world are compatible with GE 360 series, including the two mentioned by Steve and another one available from my GE supplier (which may start with the letter A). Other generic adapters may work with micro and some 300 series, but not the 360 series. I learned this through trial and error after wasting time using a homemade adapter purchased on eBay.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>keithkyll</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I also reached out to GE technical support to address this issue, utilizing an HE693SNP232A adapter. However, the functionality of the adapter remains uncertain. To troubleshoot, I have purchased three additional power supplies and a 350, confident that through process of elimination, I will be able to identify the source of the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DenommeX</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Keithkyll mentioned the importance of using genuine adapters for GE 360 series, as only three in the world are known to work. These include the two mentioned by Steve and another carried by a GE supplier that starts with the letter A. While other generic adapters may work on micro and some 300 series devices, they do not support the 360 series. Utilizing a homemade adapter from eBay led to wasted time in the past.

The AS693232SNP by Applied Systems Engineering is a reliable option with a 10-foot cable, Tx and Rx LEDs, and compatibility with 5 VDC from the 15-pin port. However, any RS-232 to RS-485/422 converter can technically be used. GE Fanuc support recommends sticking to the specified adapters for easier troubleshooting.

Alternatively, a "cheater cable" can be built following Steve's suggestion, ensuring it is kept under 15 feet in length.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I haven't personally tested this idea, but if the 364 device has an Ethernet port, could one potentially use the arp -s command to assign a known IP address and attempt to establish a connection in that manner?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>glaverty</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider utilizing the Temporary IP utility within the Proficy Machine Edition software, located in the Navigator Window under the Utility Tab. Make sure your Network Interface Card (NIC) is not configured for 100T only, as the CPU364 requires 10T only. It is recommended to use a reliable cross-over network cable, as some "Auto-detect" PC NICs may cause issues with this CPU.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RussB suggested the use of the Temporary IP utility in the Proficy ME software, specifically located in the Navigator Window under the Utility Tab. It's important to ensure that your Network Interface Card (NIC) is not restricted to 100T only, as the CPU364 only supports 10T. Using a reliable cross-over network cable is also recommended, as some "Auto-detect" PC NICs may not always function properly with this CPU. While using Versapro is another option, it's wise to be cautious of auto-detection methods, as they may not always be completely reliable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>glaverty</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, I overlooked that. Please search the Util directory on the VersaPro Install CD for the Temporary IP utility. I don't have the CD with me now, but I will make sure to check it next time I have access to one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a quick query regarding connecting to Logicsmaster 90 via serial. Although I was able to view the PLC IO bit status, I would prefer to use VersaPro for this purpose. However, I am unsure about how to configure the Ethernet settings in Logicsmaster 90, and I do not have information regarding the assigned IP address for the CPU 364. I am encountering difficulties when trying to use the same cable to connect with VersaPro as I did with Logicsmaster 90. Currently, I am studying the GFK-0466L manual and exploring details about CPU364 TCP/IP communications mentioned in Publication GFK-1541.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>[email protected]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I love using long and reliable USB-RS232 cables for troubleshooting GE Fanuc PLC systems. A fantastic option can be found at http://www.asedata.com/GE_Fanuc_PLC.asp. For an equally great choice, check out the selection at https://www.automationdirect.com/adc/Shopping/Catalog/Communications/Serial/Industrial_USB/USB-RS232.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good morning! I have two FANUC 90 30 CPU331 units that I have configured via a serial cable with assigned IPs. However, when I try to connect them point to point via Ethernet cable, they do not communicate. Despite successfully pinging them from the command prompt, they do not come online in the Proficy Machine software. I have conducted various tests but have been unable to pinpoint the cause. I suspect it may be related to the firmware or the CPUs themselves. Unfortunately, I do not have the necessary software to update the firmware. Does anyone have the WINLOADER FIRMWARE UTILITY for firmware version 8.20?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vladimir Lopes Duart</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good day! I am facing an issue with my two FANUC 90 30 CPU331 units. I have configured them using a serial cable and assigned an IP address. However, when I try to connect them via Ethernet cable, they are unable to communicate. I have conducted various tests, including pinging via cmd prompt, but they are still not showing online in the proficy machine software. I suspect the issue may lie with the firmware of the CPU.

As the CPU331 does not come with an ethernet port, it is likely that you are using an IC693CMM321 ethernet module for connectivity. The firmware for the CPU331 is stored on an EPROM chip, which can be upgraded by replacing the chip.

To assist you further, please provide the part numbers for both the CPU and ethernet modules in the format IC693CPU311-XX and IC693CMM321-YY. With this information, I can help verify the compatibility of the modules. If you require the WINLOADER FIRMWARE UTILITY for firmware version 8.20, please let me know. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you very much for your response. I used the CMM321 interface module, but it does not connect with the Proficy Machine. However, through the Windows CMD, it pings with the IP configured via serial cable. We have another CPU331 running firmware 8.20, and its program was downloaded to the one that is not communicating. The firmware of the non-communicating CPU is version 8.0. Could the issue lie in the firmware version mismatch? I will check the chip codes and share them here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vladimir Lopes Duart</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. I have encountered an issue with the CMM321 interface module not connecting with the Proficy machine. However, I was able to ping the IP address configured via serial cable using Windows CMD. The CPU331 running firmware 8.20 was downloaded onto this one but is not communicating with it. The non-communicating CPU has firmware version 8.0. Could this be due to a firmware difference? I will check the chip code and provide it here.

It is worth noting that there were two versions of the CMM321, with the earlier versions featuring an AAUI interface, requiring an adapter for connecting an RJ45 cable. Later versions had the RJ45 port. I encountered issues with the AAUI adapter due to driver compatibility limitations beyond Windows XP.

According to my documentation, the CMM321 is compatible with CPU versions starting at 6.5, so compatibility should not be the issue. Could you please attach your project file for me to review for any potential issues? Please ensure that it is compatible with Proficy version 9.5 or older.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you! I will send over all the information first thing Monday morning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vladimir Lopes Duart</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good evening! Thank you for the personal assistance, I was able to successfully establish communication with CPU331 via Ethernet. The issue was related to the version of the interface module, which needed to be the CMM321-JJ. Appreciate the support provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vladimir Lopes Duart</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for your assistance! I successfully established communication with cpu331 through ethernet by updating the interface module to cmm321-jj. Your support was greatly appreciated. Click to read more...I'm happy to hear that you managed to get it working.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey guys, is it possible for the GE Fanuc 90-30 PLC with a CPU 331 to communicate with the ADAM-6051 module? If so, how can this be achieved?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vladimir Lopes Duart</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your system for Modbus TCP communication, consider integrating the ethernet module IC693CMM321. This versatile module can function as either a Modbus TCP client or server. If you already have a CMM321 module, ensure it is configured properly for Modbus TCP operations. Familiarize yourself with the complexities of the COMMREQ instruction to effectively set up the module for seamless communication. This task may be challenging, but mastering it will optimize your system's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot communication issues with a GE 90-30 Model 364 CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When encountering communication problems with the GE 90-30 Model 364, start by checking the connection settings, ensuring the correct communication ports are used (Ethernet or RS-485), and verifying the LED indicators on the unit. Resetting communication settings to default by removing the battery is also a common troubleshooting step.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I unable to connect to the CPU of the GE 90-30 Model 364 using VersaPro Standard?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are experiencing difficulties connecting to the GE 90-30 Model 364 CPU using VersaPro Standard, ensure that the software is compatible with this specific model. Double-check the configuration settings in VersaPro and verify that the correct communication protocol and parameters are selected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should I do if the EOK and LAN LEDs light up but I cannot update the firmware or connect with the winloader on the GE 90-30 Model 364?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the EOK and LAN LEDs indicate power and network connectivity but you still cannot update firmware or connect with the winloader, consider checking the network configuration, firewall settings, and any potential software conflicts. Additionally, ensure that the firmware update process is compatible with the GE 90-30 Model 364.</p>
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
