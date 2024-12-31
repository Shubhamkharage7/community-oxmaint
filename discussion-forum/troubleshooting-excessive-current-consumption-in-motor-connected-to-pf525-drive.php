
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am currently dealing with a 50 HP 460/600V motor connected to a PF525 drive. After confirming that the motor is wired correctly, I noticed that the service factor is 1.15 and the power factor (pf) is 0.8. The nameplate specifies that for 460V, the motor should">
    <meta name="keywords" content="troubleshooting, excessive current consumption, motor, pf525 drive, 50 hp, 460v, 600v, service factor, power factor, pf, delta configuration, full load amperage, fla, overcurrent condition">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-excessive-current-consumption-in-motor-connected-to-pf525-drive">
    <title>Troubleshooting Excessive Current Consumption in Motor Connected to PF525 Drive | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Excessive Current Consumption in Motor Connected to PF525 Drive | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am currently dealing with a 50 HP 460/600V motor connected to a PF525 drive. After confirming that the motor is wired correctly, I noticed that the service factor is 1.15 and the power factor (pf) is 0.8. The nameplate specifies that for 460V, the motor should">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-excessive-current-consumption-in-motor-connected-to-pf525-drive">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Excessive Current Consumption in Motor Connected to PF525 Drive | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am currently dealing with a 50 HP 460/600V motor connected to a PF525 drive. After confirming that the motor is wired correctly, I noticed that the service factor is 1.15 and the power factor (pf) is 0.8. The nameplate specifies that for 460V, the motor should">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-excessive-current-consumption-in-motor-connected-to-pf525-drive"
      },
      "headline": "Troubleshooting Excessive Current Consumption in Motor Connected to PF525 Drive",
      "description": "Hello everyone! I am currently dealing with a 50 HP 460/600V motor connected to a PF525 drive. After confirming that the motor is wired correctly, I noticed that the service factor is 1.15 and the power factor (pf) is 0.8. The nameplate specifies that for 460V, the motor should",
      "author": {
        "@type": "Person",
        "name": "sparkie"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-11",
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
                <h1 class="text-white">Troubleshooting Excessive Current Consumption in Motor Connected to PF525 Drive</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>24 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2398</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">470</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am currently dealing with a 50 HP 460/600V motor connected to a PF525 drive. After confirming that the motor is wired correctly, I noticed that the service factor is 1.15 and the power factor (pf) is 0.8. The nameplate specifies that for 460V, the motor should be wired in a delta configuration, with a full load amperage (FLA) of around 52A.

There seems to be an issue when running the motor at 80 Hz, as it triggers an overcurrent condition with unstable current fluctuations. By running it at 80% capacity, the current stabilizes at about 50A, which aligns with expectations. However, I have detected a burning smell from the windings when the junction box is opened.

I have conducted insulation resistance testing on the motor and wiring, which appear to be in good condition. Despite having the equipment tuned, I have requested the motor sizing calculations for a thorough review, although it may not be provided. It is possible that the motor is undersized, given that it operates at its FLA at 60 Hz.

Although no overcurrent or overload faults appear in the fault logs, there is speculation about the motor being faulty. Nevertheless, I am considering the possibility of a malfunctioning drive or potential misfiring causing the issues. I am uncertain about how to investigate this further.

The drive is supplied with shielded Variable Frequency Drive (VFD) cable, with the shield wires securely grounded before connecting to the drive. Notably, there is no line reactor or output choke present in the setup.

I believe there are potential solutions to explore, but I am unsure about the next steps to take at this juncture.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The PF525 drive has a maximum capacity of 30 horsepower.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to padees, the PF525 drive is limited to a 30HP capacity. This suggests that the drive is most likely a 30HP model. I noticed this while working a 14-hour shift last night.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Would you be able to upload a picture of the motor nameplate for identification purposes? This would greatly assist in determining the necessary information about the motor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bering C Sparky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A 52 amp current draw may indicate a motor with a power output similar to that of a 40HP motor. For instance, a 30HP PF525 motor is typically rated at 43 amps, but the actual amperage can vary depending on the motor type and the workload it is handling. A similar scenario occurred with a small extruder powered by a 22kW A-B motor, where the high workload necessitated the use of a 40HP PF755 motor, which has performed reliably for the past 6 years. The next step is to upgrade the controls and replace the outdated Dnet and SLC500 components with a more modern setup, including a proper E-Stop system for improved safety measures. LOL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User Bering_C_Sparky requested a photo of the motor nameplate, so I will be posting that soon. I recently completed a retrofit from a soft start to a drive, feeling a bit overwhelmed by the process. The drive is actually a 700 series, and I will share information from both the soft start and drive shortly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Sparkie mentioned that they will be acquiring a new 700 series drive after successfully completing a retrofit to transition from a soft start to a drive system under challenging circumstances. They believe they may be confusing the details of both processes. Gathering information on both setups will provide clarity and assist in their future undertakings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the motor capable of operating at 80Hz?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dale87</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using VFDs, it is important to note that motors from reputable brands like WEG and Baldor typically have a service factor of 1.0. This is even true for motors that have a service factor of 1.15 when operated across the line. Running at 80Hz puts you in the constant horsepower region of the drive's operation, meaning your torque capability will be around 75% of what it is at 60Hz. Can you provide more details about the specific application you are working on?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sparkie noted that the motor may be undersized if it is pulling its full load amperage at 60 Hz while running. This indicates that the motor is precisely sized for the nominal speed and load, leaving no margin for higher loads or speeds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you notice a cooking or burning smell coming from the windings, it is highly probable that there are short circuits present between the turns. This issue can lead to potential electrical hazards and should be addressed immediately to prevent further damage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the blurred photo of the nameplate and VFD label that I had someone on site retrieve today. Upon review, it appears that the drive is wired for 460 delta and may be operating at its maximum capacity. The kW of the motor is unclear from the images, but it seems to be around 60 which would explain the current fluctuations. However, after confirming with them, it has been verified that the motor is actually a 40 HP, indicating a three-phase system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Engines are remarkable for their capability to work tirelessly when needed. It is crucial to ensure that the overload protection, whether it be a heater, bi-metallic strips, or electronics, is properly sized for the motor rather than the load it is carrying. If the motor struggles to move the load, it indicates either the load is too large or the motor is too small. The distinct smell of a motor working hard can often be likened to burning money.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent comment, Sparkie mentioned the nameplate that was forgotten to be picked up the previous night. Upon inspection, it seems that with the wiring set for 460 delta, the drive is being pushed to its limits. It appears that not only the drive but other components are also being maxed out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>boardmaker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Determining the maximum RPM of a motor is dependent on the frame size and number of poles it has. While running an 80 Hz frequency on a 750 rpm motor should be fine, it is recommended to consult the manufacturer for confirmation. It is essential to consider the application requirements to ensure the VFD can operate efficiently at constant motor power above the nominal speed. This will help assess the power and torque demands of the load at higher speeds. Inadequate application engineering may be the root issue rather than a faulty drive or motor. It is important to address these factors for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to inquiries, I have not come across any input from n0rM and I do not have anyone blocked. The equipment in question is a steam-jacketed caramel cooker with a scraper motor, designed for handling thick liquids. Our maintenance team has thoroughly inspected the mechanical aspects and they are well-versed in this type of equipment. Despite the equipment being brand new, the manufacturer has a strong track record in this industry, which is why I am hesitant to attribute the motor size issue to them.

A new motor and drive have been ordered from the manufacturer to address any potential warranty concerns. A knowledgeable individual has also assessed the system and confirmed that everything appears to be functioning normally. It is not surprising that the equipment draws 22A even when not in use, given its large belt drive system.

I will attempt to locate a comprehensive white paper that explains the intricacies of sizing mechanical and electrical drive systems. With my academic obligations completed, I now have more time to delve deeper into such topics beyond a surface-level understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sparkie noted that they did not see a post from the user n0rM and confirmed that they have not ignored anyone. The user in question is ndzied1, as seen in post #9. If you are confused about the reference to nOrM, take a look at the signature. In such cases, it is advisable to stick to usernames as not everyone may have signatures enabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce stated that the user with the handle ndzied1 made post #9, which is the post being referred to. To understand why he was called nOrM, look at the signature. It is recommended to use usernames instead of signatures in situations like this, as not everyone may have the option to view signatures.

An update: They have decided to order a larger drive in case the current one is too small. My colleague and I will step back if they do not contact the OEM before replacing parts on a new system. I will provide further updates on this situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When we first started using more variable frequency drives, we encountered some challenges of our own. In the realm of industrial hydraulics, there are numerous rule of thumb calculations that revolve around motors running at their standard speed. However, trying to apply these calculations at varying speeds can lead to complications. It is essential to grasp the different modes of operation of VFDs both below and above the base speed in order to ensure successful outcomes. Typically, most basic VFDs function with "constant torque" at speeds below the base level and "constant horsepower" at speeds above it. It is important to note that there are additional factors to consider at extremely low or high speeds. The key takeaway here is the importance of thorough research and understanding to ensure everything runs smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When transitioning to using more variable frequency drives in industrial hydraulics, we encountered some initial challenges due to relying on rule of thumb calculations based on motors running at base speed. Applying these calculations at varying speeds can lead to issues. Understanding the VFD modes below and above base speed is essential for successful applications. Most basic VFDs operate with "constant torque" below base speed and "constant horsepower" above base speed. However, considerations need to be made for very low or very high speeds. It is crucial to do thorough research to ensure successful implementation. Are there any recommended resources for gaining a deeper understanding of intermediate-level applications?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The motor's nominal current at 60 Hz and 460V delta is 52 A, while the VFD's nominal continuous current is also 52 A. A professional electrician, known as "sparkie," mentioned that the system can operate at 80% speed with a current draw of about 50A. Running at the nominal speed of 60 Hz results in the motor pulling its Full Load Amps (FLA). Attempting to run the system at 80 Hz leads to an overcurrent condition due to both the motor and VFD operating at their maximum capacities. It is common for a motor and VFD to momentarily exceed nominal current levels, but prolonged operation in this state can cause overheating. The equipment being used, a scraper, likely experiences linear increases in load with speed. A current draw of 22A when unloaded is normal and does not indicate mechanical problems. In response to the overcurrent issue, a larger VFD has been ordered to ensure the system can run continuously and at higher speeds without overheating. Proper sizing of both the motor and VFD is essential for optimal performance, as simply upgrading the VFD alone may not be sufficient.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to constant torque loads like scrapers and conveyors, the power demand increases in proportion to the speed. Exceeding the nominal speed without proper sizing of the drive and motor could lead to overload. It's important to inform the drive supplier about the consistent torque requirements of the load. Variable Frequency Drives (VFDs) for constant torque applications are typically oversized to ensure optimal heat dissipation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tom Jenkins suggested that a scraper, similar to a conveyor, would be a constant torque load. However, based on the original post by sparkie regarding a steam-jacketed caramel cooker, it seems more like a mixer than a conveyor. The scraper's role is to move the hot material from the vessel's side walls to the center during the heating process, requiring more torque as it moves through the highly viscous liquid. This higher speed through the material increases the torque needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kamenges mentioned some doubts about the process described by the original poster. The function of the equipment is likened to a mixer, with the goal of moving material from the side walls to the center during heating. When dealing with highly viscous materials, a faster speed will demand more torque. Keith also pointed out the possibility of basic engineering oversights in the application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The equipment in question is not a scraper. While I have not personally inspected the inner workings, I was informed that it does not scrape the sides as previously thought. Upon checking the drive size, it was determined that an upgrade was necessary for a heavy-duty application. Despite working only on weekends, I was called in and told by the relief engineer that the drive was undersized. Frustrated by being consulted for my opinion only to have it ignored, I discovered that misinformation had been provided regarding the speed values. After speaking with the relief project engineer, it became apparent that the windings were overheating and the vendor was attempting to avoid responsibility. A new drive and motor are being implemented to address these issues, as well as the fact that the equipment is 33% undersized for the required line rates. It is a relief that I am not responsible for explaining these technical issues to the financial department.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparkie</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is my motor connected to a PF525 drive experiencing excessive current consumption at 80 Hz?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue could be due to motor sizing, drive malfunction, or potential misfiring causing the problem. Further investigation may be needed to pinpoint the exact cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the possible reasons for a burning smell from the motor windings despite insulation resistance testing showing good condition?</h4>
<p class='text-muted'><strong>Answer:</strong> - The burning smell could indicate overheating due to high current consumption, which may be caused by factors such as motor undersizing, drive issues, or improper configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Should I be concerned about the absence of a line reactor or output choke in the setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The lack of a line reactor or output choke could contribute to current fluctuations and instability. Considering adding these components to help mitigate the issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot potential overcurrent issues in my motor connected to a PF525 drive?</h4>
<p class='text-muted'><strong>Answer:</strong> - Steps to consider include verifying motor sizing, checking for drive malfunctions, inspecting connections and grounding, and exploring the possibility of misfiring during operation. Consulting with a professional may also be beneficial.</p>
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
