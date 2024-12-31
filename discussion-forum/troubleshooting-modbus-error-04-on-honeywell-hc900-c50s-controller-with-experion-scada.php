
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, we are facing a problem with our Honeywell SCADA system. When attempting to switch the PID controller to auto mode, we encounter a Modbus error 04 - failure in the associated device. The Experion SCADA is linked to the HC 900 C50 S CONTROLLER CPU, which is">
    <meta name="keywords" content="modbus error 04, honeywell hc900 c50s controller, experion scada, troubleshooting, pid controller, auto mode, failure in associated device, hc 900 c50s controller cpu, blinking red leds, low voltage cpu">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-error-04-on-honeywell-hc900-c50s-controller-with-experion-scada">
    <title>Troubleshooting Modbus Error 04 on Honeywell HC900 C50S Controller with Experion SCADA | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus Error 04 on Honeywell HC900 C50S Controller with Experion SCADA | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, we are facing a problem with our Honeywell SCADA system. When attempting to switch the PID controller to auto mode, we encounter a Modbus error 04 - failure in the associated device. The Experion SCADA is linked to the HC 900 C50 S CONTROLLER CPU, which is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-error-04-on-honeywell-hc900-c50s-controller-with-experion-scada">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus Error 04 on Honeywell HC900 C50S Controller with Experion SCADA | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, we are facing a problem with our Honeywell SCADA system. When attempting to switch the PID controller to auto mode, we encounter a Modbus error 04 - failure in the associated device. The Experion SCADA is linked to the HC 900 C50 S CONTROLLER CPU, which is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-error-04-on-honeywell-hc900-c50s-controller-with-experion-scada"
      },
      "headline": "Troubleshooting Modbus Error 04 on Honeywell HC900 C50S Controller with Experion SCADA",
      "description": "Hello everyone, we are facing a problem with our Honeywell SCADA system. When attempting to switch the PID controller to auto mode, we encounter a Modbus error 04 - failure in the associated device. The Experion SCADA is linked to the HC 900 C50 S CONTROLLER CPU, which is",
      "author": {
        "@type": "Person",
        "name": "MUNEAR"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-12",
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
                <h1 class="text-white">Troubleshooting Modbus Error 04 on Honeywell HC900 C50S Controller with Experion SCADA</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>60 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2378</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">468</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, we are facing a problem with our Honeywell SCADA system. When attempting to switch the PID controller to auto mode, we encounter a Modbus error 04 - failure in the associated device. The Experion SCADA is linked to the HC 900 C50 S CONTROLLER CPU, which is displaying 4 blinking red LEDs. Can anyone assist me with this issue? Could the low voltage CPU battery be the cause of this error? Also, what type of batteries are used in the Honeywell HC900 C50S controller? The HCD software indicates that the front and rear batteries are low.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you familiar with setting the system to AUTO mode? CASC indicates involvement in a two PID Loop Cascade system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin inquired about setting the system to AUTO in a CASC two PID Loop Cascade system. However, the current issue is that only the RSP remote set point mode is accepted due to a MOD BUS ERROR 04 Failure in the associated device. Additionally, the CPU HC900 C50S is flashing red four times and the controller's battery is low according to diagnostics.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin inquired about setting a system to AUTO mode, explaining that CASC denotes its involvement in a dual PID Loop Cascade system. The system consists of two separate PID loops within two units; one is functioning properly, while the other is displaying an error message. See the picture for a visual reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the PID Loop settings in the HC900 have been altered, making it inaccessible for modifications. Please compress and attach the configuration file for review. I will analyze the configuration to determine the changes made to the PID Loop settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am trying to identify the root of the issue in my system. Could it be caused by the controller program or the Experian SCADA PID page? Additionally, the CPU is flashing red in four strobes. Could this be due to a low battery? According to the manual, a red flashing light indicates a low battery and that the ASYS +FSYS pins on the CPU are turned off, as shown in the picture. Both PID loops are part of the same program, so why is one working correctly while the other is malfunctioning?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It may be related to the Experion system, there is a feature in the system that can restrict changes but it's been a while since I last worked on it. To pinpoint the problem, please share the configuration with the problematic PID Loop. If the working one is in a different controller, share that too. I'm not concerned about the blinking lights as they usually don't provide useful information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will share the current Controller file with you by uploading it. I also have a backup from the initial system setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dJHarbin suggested that the issue could be related to the settings on an Experion system that prevent changes. It has been some time since working with Experion systems, so the exact location of these settings is unclear. To troubleshoot, it would be helpful for you to share the configuration containing the problematic PID Loop. Feel free to also send any information about a separate controller where the issue is not present.
Please note that details about the battery used in this controller are essential. Is it a rechargeable lithium 3.6V battery? Avoid focusing on blinking lights as they are not always informative for troubleshooting purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Tadiran TL-5903 3.6V Lithium battery is non-rechargeable and offers reliable power for various devices. This long-lasting battery is a popular choice for electronic equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum thread, JHarbin inquired about the Tadiran TL-5903 3.6V Lithium non-rechargeable battery, questioning its capacity of 2400mAH or less. They also wondered if the same current value should be maintained. Thank you for any assistance provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Search for the Honeywell-supplied battery I provided you with online. If you prefer a different brand, consider looking up SAFT batteries that meet the same specifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin recommended searching online for the battery provided, which is from Honeywell, or considering a different brand like SAFT that meets the same specifications. If you are concerned about plant shutdown, is it possible to upload the controller configuration file from the PLC to the PC while the plant is running in HC900's Run mode? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MUNEAR emphasized the importance of using the same current value. Click to expand for confirmation: Yes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>danw inquired about using a different battery for their Honeywell device, specifically wondering if a 3.6V 2.3AH battery could be substituted for the recommended 3.6V 2.4AH Tadiran battery. Since the desired battery was unavailable, they came across a Siemens S7 400 backup battery with similar specifications. The Siemens part no. 6ES7971-0BA00, SIMATIC S7-400, offers a 3.6V/2.3AH capacity. The question remains whether this alternative battery can be used as a suitable replacement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During the Run mode, I would like to upload the controller configuration file to avoid any plant shutdown. Can the PLC upload the file to the PC while the plant is operating, with the HC900 system in Run mode? Yes, it is possible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When MUNEAR examined the Honeywell battery, they found it to be a Tadiran 3.6v 2.4AH. They are now wondering if they can substitute it with a 3.6v 2.3AH battery due to the unavailability of the former in the market. Alternatively, they found a Siemens S7 400 part no. 6ES7971-0BA00 SIMATIC S7-400 backup battery with the same specifications. However, it is important to note that different part numbers indicate variations in performance. Opting for a lower AH battery may result in a shorter lifespan. Make sure to check if they are the same size before using them interchangeably.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin pointed out that while the Tadiran part numbers may appear similar, they are actually different. It's important to note that a lower ampere-hour (AH) rating can result in a shorter battery lifespan. However, if they are the same size, they should be compatible. In this case, both batteries are AA size, indicating that they can be used until a replacement with the same current is found.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin inquired about uploading in RUN mode using HC designer and encountered a message that made them apprehensive about shutdown or sudden stops. They seek confirmation on whether it is safe to upload in run mode without risking process interruption.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have some uncertainty when it comes to hot/cold starts as my experience with HC900 was about 5-6 years ago. Refer to the detailed explanation of run mode versus program mode on pages 143-145 of the manual attached. From what I remember, when in run mode, certain downloads can be completed with a hot start using process variables in RAM memory that is supported by the battery. However, I can't quite recall the specific configuration changes that would necessitate a cold start. Some actions, such as shutting down the controller and starting from scratch, require a cold start. The concept of New I/O also comes to mind, but the details are unclear. The manual provides more information on hot and cold starts on pages 143-145, and configuration downloads on pages 151-152. Perhaps Jim can provide some insight on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>danw mentioned his lack of confidence in hot/cold starts due to his last encounter with HC900 being 5-6 years ago. For a detailed comparison of run mode versus program mode, refer to pages 143-145 of the attached manual. According to his recollection, in run mode, certain downloads can be completed with a hot start using process variables stored in RAM memory. However, he can't remember which configuration changes would trigger a cold start. Functions like turning off the controller and starting from scratch would require a cold start. The manual provides information on hot and cold starts on pages 143-145 and configuration downloads on pages 151-152. If you are in run mode, uploading from the controller to the PC does not involve a hot start, which maintains plant operations. Cold starts reset all outputs to zero and restart the system. The concern is whether it is safe to take a backup from the HC900 C50S CPU while the plant is operational without the risk of a shutdown. Perhaps, Jim could offer some insights on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When MUNEAR asked about transferring data from the controller to a PC while the system is running, my response remains the same. Uploading the configuration can be done without disrupting plant operations. It is important to note that uploading data does not invoke a hot start, which maintains plant operation, but rather a cold start, which resets outputs to zero before starting again. This process allows for a backup of the HC900 C50S CPU to be taken safely during operations, without the risk of shutdown.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to upload in run mode using HC designer, MUNEAR encountered a message causing concern about potential shutdown or sudden stops. It is important to ensure that in run mode, uploading can be done safely without any interruptions to the process. The message implies that if another programmer is making changes during your upload, you may not capture their changes, but this should not hinder your progress. It is crucial to proceed with caution to avoid any disruptions during the uploading process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the ASYS & FSYS Blocks' pins are turned off in HC900 C50S, will the automatic process be halted?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MUNEAR inquired about the implications of disabling pins on ASYS & FSYS Blocks in an HC900 C50S system. While this action may halt the process in auto mode, it could also be a minor issue such as disconnected wires. Once you address the main operational problem, you can investigate further by entering monitor mode and observing the I/O racks. Without access to your configuration, I may not be able to provide assistance at this time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin advised not to be overly concerned about the error message, as it could stem from a minor issue like a disconnected wire in an input or output. Once you resolve the main operational issue, you can delve into this matter further if you wish. It's likely something that can be resolved by entering monitor mode and checking the I/O racks. Unfortunately, without your configuration details, I'm unable to offer much assistance. To provide further information, I have attached the initial configuration file that loads when the HC900 is powered on. I will upload the second file with the PID malfunction shortly. Your help is greatly appreciated, Mr. JHarbin and others. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MUNEAR mentioned that they will be sending over the existing Controller file, which was backed up from the initial system run. Additionally, they have also submitted the rack I/O monitoring for your review. Click to expand for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MUNEAR informed that they have the initial configuration file for the HC900 upon powering it on. They plan to upload the current file after experiencing an issue and provide both for review to assist in troubleshooting. The first configuration file has been attached, with the malfunction PID file to be sent later. Gratitude is expressed to Mr. JHabin and others for their efforts. Kindly share screenshots of the Details page (General Tab) for two loops - the problematic one and the one functioning in AUTO mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MUNEAR inquired about the number of racks we have after submitting the rack I/O monitoring. Click to expand the attachment to view the details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin inquired about the number of racks available. Click to expand for more information - only Rack 1 is available, as shown in the attached image.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to troubleshoot effectively, JHarbin requested a screenshot of the Details page (General Tab) for two loops: one causing issues and one successfully set to AUTO. Could you kindly provide guidance on how to access this page for submission?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access the PV in the system, you may need to double click on the screen displaying the PID on the left and various tabs on the right, such as General, Alarms, and Trending. However, I am not entirely certain about this method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to JHarbin, it is possible to double click on the Process Variable (PV) to access more options. This can be done on the screen displaying the PID on the left and various tabs on the right, such as General, Alarms, and Trending. For further clarification, examples can be found by expanding the information as shown.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MUNEAR asked if you meant examples like this. Click to expand to view examples, then send General and Scanning for both loops.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As per JHarbin's suggestion, it is advised to send both the General and Scanning loops. An important note is that Picture 532 must be in auto mode to proceed, while Picture 32 should only be in RSP mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to locate any loops in CASC. It is crucial for me to view the complete window and not just the tabs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin advised to send both General and Scanning for both loops, as they are the same.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During our review, we found no loop cascade in the CASC system. It is essential to view the entire window instead of just the tabs for a comprehensive understanding. The controller now only accepts either CASC or MAN RSP. Both loops consist of four valves controlled by two PID controllers, with each pair of split range valves connected to one PID. PIC 532 is in auto mode and functioning correctly, while the other PIC32 is currently set to manual response mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to JHarbin's question, there doesn't appear to be a Loop in CASC. To get a better understanding, it's important to view the entire window, rather than just the tabs. If you require the HMI faceplate page, please refer to the attached file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The old configuration you provided doesn't indicate any issues preventing the loops from being set to AUTO. The only potential concern is that PID loop 670-PI-32 may be out of range. However, the Loop and Analog Input are scaled in a way that should not trigger failsafe mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you require the faceplate HMI page, please refer to the attached document. All I need is the latest configuration. I can offer assistance if you switch to monitor mode and examine the PID loop in the HC900 setup. I have already invested a significant amount of time on this and need to prioritize my employer's needs. If you send me the configuration, I will review it, but my availability for further assistance may be limited.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the old configuration you provided, JHarbin noted that there are no apparent barriers preventing the setting of loops to AUTO. One possibility is that PID loop 670-PI-32 may be out of range. However, based on the scaling of the Loop and Analog Input within that setup, there should be no reason for the loop to enter failsafe mode. Thank you for the information. Please click to read more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin mentioned the importance of providing the current configuration for assistance. It would be helpful to be in monitor mode and examine the PID loop in the HC900 configuration. Time constraints are a concern, and it is important to respect the needs of the employer. Upon receiving the configuration, a thorough analysis will be conducted to identify any changes. Your cooperation is appreciated. Can you address the issue of 670 PI 32 being out of range? Any suggestions for resolving this would be helpful. Uploading the current configuration will allow for comparisons and monitoring to capture relevant data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MUNEAR responded with gratitude, acknowledging the helpful advice and expressing their intention to upload the current configuration for comparison. They also mentioned encountering an issue with the 670 PI 32 being out of range and seeking assistance on how to resolve it if needed. They plan to upload the configuration and monitor the situation, potentially capturing images for further analysis. To provide more context, they have attached the current configuration for reference and will also be monitoring the situation in real-time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin emphasized the importance of having access to the current configuration. He suggested that by being in monitor mode and examining the PID loop in the HC900 configuration, he may be able to offer assistance. He expressed concerns about the amount of time spent on the issue and its impact on his employer. If provided with the configuration, he offered to review it for any changes. While investigating in monitor mode, it was noted that there is a 24VDC power supply failure indicated. This error may be attributed to the power supply causing such issues, with two power supplies (PS1 and PS2) and a PSM in between.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Experion, the acronym CASC stands for AUTO-RSP, meaning you cannot switch the loop to AUTO mode as it is already set to AUTO. Your only alternative is MAN-RSP. Looking at the uploaded configuration, PIC-532 supports only LSP, allowing you to choose between AUTO-LSP and MAN-LSP. For PIC-32, only RSP is supported, giving you the options of CASC and MAN-RSP as previously mentioned. However, since there is no input linked to the RSP pin on the PIC-32 PID block, there is no way to adjust or modify the setpoint. It is recommended to thoroughly review and reconfigure the entire setup according to the current requirements. Unfortunately, this task exceeds the scope of what can be achieved through a forum discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Experion, the acronym CASC stands for AUTO-RSP, which means the loop is already in AUTO mode and cannot be switched to another AUTO mode. The only alternative is MAN-RSP. The configuration shows that PIC-532 supports only LSP, so the options are AUTO-LSP and MAN-LSP. For PIC-32, only RSP is allowed, giving the choice of CASC and MAN-RSP. However, since there is no connection to the RSP pin of the PIC-32 PID block, adjusting or changing the setpoint is not possible.

It appears that PIC-532 is functioning correctly in AUTO mode, while PIC-32 remains in RSP mode. The configuration of the HC900 C50 PID block and connections are consistent, but it may be necessary to review and reconfigure the setup based on current requirements. This task may be beyond the scope of what can be addressed in a forum. Take note of the 24 PS FAIL contact during monitor mode for further troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Experion, CASC stands for AUTO-RSP, preventing the loop from being placed in AUTO mode since it is already in AUTO. Your only alternative is MAN-RSP. Upon reviewing the uploaded configuration, it appears that PIC-532 supports only LSP, giving you the options of AUTO-LSP and MAN-LSP. For PIC-32, only RSP is allowed, allowing for CASC and MAN-RSP as previously mentioned. However, without any input connected to the RSP pin of the PIC-32 PID block, adjusting or changing the setpoint is not possible. In my opinion, a thorough review and reconfiguration of the entire setup is necessary to meet current requirements. Unfortunately, this task exceeds the limitations of what I can assist with in a forum setting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The two PID blocks are set up with unique configurations in the programming software. One block is restricted to utilizing only LSP, while the other is limited to RSP. Consequently, the options accessible in Experion will vary. The system has undergone notable changes from its original state to the current version.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the programming software, the two PID blocks are configured differently, with one allowing only LSP and the other allowing only RSP. This results in different available options in Experion. The system has undergone significant changes between the original and current versions. In the current uploaded file, do both PID loops still have different configurations in the hc900 c50 configuration file? Specifically, if both have been in auto mode for a long time, did this issue arise after a power outage? The Experion SCADA pages also appear unchanged.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the PID blocks in the programming software, it is evident that they have been configured differently. One block only allows for LSP while the other only allows for RSP. This results in different available options within Experion. It is clear that the system has undergone significant changes between the original and current versions. Upon entering the PID block and examining the settings, the differences are apparent. Please refer to the attached documentation for a visual comparison.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin noted that the two PID blocks are set up differently in the programming software, with one allowing only LSP and the other allowing only RSP. This means that the options available in the Experion system will vary. The system has undergone significant changes from its original configuration to its current state.

Is it possible to adjust the properties of both PID blocks PID 151 for PIC 32 (the faulty PID) to match the settings of PID 144 (the functioning PID) while the plant is running? Will making this adjustment pose a risk and necessitate a CPU restart during the download process? Can PID settings be modified while the plant is operational? It is believed that addressing this issue will resolve the issue of not being able to switch to auto mode, as previously mentioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The images you provided confirm the issue at hand. The current loop configuration only permits Remote Setpoint adjustments, without a designated input on the RSP pin. It is possible to modify this setting while the plant is in operation, as long as a HOT START is enabled – which it should be. However, it is crucial to assess whether this adjustment will provide the necessary level of control, and to promptly set the LSP once the change is made. I reiterate the importance of reevaluating the control system to ensure it functions as originally intended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin emphasized the importance of ensuring that the control system functions as intended. It is crucial to ensure that the loop allows for Remote Setpoint (RSP) and to consider the operation's control requirements. Moreover, it is necessary to be prepared to adjust the Low Setpoint (LSP) once changes are made. In order to modify the PID settings of the PIC32 for using RSP, a hot start is required, which can be done outside the engineering station on an external laptop. The process involves saving the file, connecting to the controller to download the modified file, and then initiating a hot start. Extra caution should be taken during operations, such as going on bypass in the field, isolating valves, and performing necessary downloads.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon downloading a configuration change, users are provided with three choices: Cold Start, Hot Start, and Abort. Opt for Hot Start if available to seamlessly continue system operation. In the absence of this option, select Abort for no action. Avoid Cold Start as it involves a complete CPU reboot, which should never be done on a system in operation. Even with a Hot Start, selecting a setpoint for the RSP-configured loop is necessary post-reboot. For more information on this process, refer to the Help File.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When downloading a configuration change, you will be given three options: Cold Start, Hot Start, and Abort. If Hot Start is available, simply select it to proceed with the system operation. If Hot Start is not available, choose Abort. Cold Start, on the other hand, involves a full CPU reboot and should not be done on a system that is actively running.

Even after a Hot Start, if your configuration lacks a setpoint for the loop configured for RSP only, you will need to select a setpoint following the Hot Start. For further clarification on this process, please refer to the Help File.

During a Hot Start, the new changes made to the non-responsive PID (670 PIC32) may or may not be automatically implemented by the controller. If not, the system will continue to use RSP, in which case a Cold Start may be necessary to bypass the system loop. Essentially, the controller updates all newly configured data during a Hot Start.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have completed the steps listed below, there is no need for further action. 1. Import HC900 configuration 2. Optionally, save configuration 3. Modify configuration settings 4. Save configuration changes 5. Export configuration to HC900 6. Execute Hot Start as directed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have completed the steps listed below, there is no need for any further action:
1. Import configuration from HC900
2. Save configuration (if desired)
3. Modify configuration
4. Save configuration
5. Transfer configuration to HC900
6. Initiate Hot Start when instructed. The first four steps have already been completed, with steps five and six remaining.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JHarbin advised following specific steps for configuring your HC900 system. After completing all six steps as instructed, the loop is now operating automatically. However, there are issues with the PID response despite attempts at tuning. The loop had to be switched back to manual mode. Can you provide guidance on how to properly tune the system? Should the tuning process be done online with valves isolated but still monitored on the Scada screen to prevent pressure drops and control issues that could result in plant shutdown? Even with previously used Gain and Reset values, the loop is not smoothly swinging and there is an offset.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have already completed the steps outlined by JHarbin, there is no need for further action. These steps include uploading configuration from HC900, saving configuration (optional), making necessary changes, and downloading configuration back to HC900. Additionally, remember to perform a Hot Start when prompted. Can you please refer to the attached pictures to clarify what "set 1" and "set 2" mean on the tuning page? Specifically, regarding SET 2, should both values be set to 0 or 1? I have observed differences in PID values between set 1 and set 2 - values are either 0 or 1. Thank you in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MUNEAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I cannot provide a detailed tutorial on tuning a control loop through a forum, I will send you a private message containing a helpful Honeywell Loop Tuning guide. For other inquiries, be sure to utilize the Help File within the HC900 configuration software, as it offers valuable assistance. Please note that I may not answer questions that can easily be found in the help file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JHarbin</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does Modbus Error 04 on a Honeywell HC900 C50S Controller with Experion SCADA indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> - Modbus Error 04 typically signifies a failure in the associated device. In this case, it could be related to the communication between the Experion SCADA and the HC900 C50S Controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the blinking red LEDs on the HC900 C50S Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - Blinking red LEDs on the HC900 C50S Controller may indicate an issue. It is recommended to check the HCD software for error messages and refer to the controller's documentation for troubleshooting steps.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Could the low voltage CPU battery be causing the Modbus Error 04?</h4>
<p class='text-muted'><strong>Answer:</strong> - A low voltage CPU battery in the Honeywell HC900 C50S Controller can potentially cause communication errors like Modbus Error 04. It is advisable to replace the front and rear batteries with the appropriate type specified by Honeywell.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What type of batteries are used in the Honeywell HC900 C50S controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Honeywell HC900 C50S controller uses front and rear batteries. It is important to ensure that these batteries are replaced with the correct type as indicated by Honeywell to avoid operational issues.</p>
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
