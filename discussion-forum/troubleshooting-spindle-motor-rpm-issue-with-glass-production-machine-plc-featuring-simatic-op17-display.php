
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a glass production machine equipped with a Simatic OP17 display in the front and a PLC S7-300 in the back. Despite the screen displaying the correct RPMs and running the program smoothly, the spindle motors are not maintaining the proper RPMs and are running slower than expected.">
    <meta name="keywords" content="glass production machine, spindle motor rpm issue, simatic op17 display, plc s7-300, troubleshooting rpm problem, spindle motor troubleshooting, rpm discrepancy resolution">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-spindle-motor-rpm-issue-with-glass-production-machine-plc-featuring-simatic-op17-display">
    <title>Troubleshooting Spindle Motor RPM Issue with Glass Production Machine PLC Featuring Simatic OP17 Display | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Spindle Motor RPM Issue with Glass Production Machine PLC Featuring Simatic OP17 Display | Oxmaint Community">
    <meta property="og:description" content="I have a glass production machine equipped with a Simatic OP17 display in the front and a PLC S7-300 in the back. Despite the screen displaying the correct RPMs and running the program smoothly, the spindle motors are not maintaining the proper RPMs and are running slower than expected.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-spindle-motor-rpm-issue-with-glass-production-machine-plc-featuring-simatic-op17-display">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Spindle Motor RPM Issue with Glass Production Machine PLC Featuring Simatic OP17 Display | Oxmaint Community">
    <meta name="twitter:description" content="I have a glass production machine equipped with a Simatic OP17 display in the front and a PLC S7-300 in the back. Despite the screen displaying the correct RPMs and running the program smoothly, the spindle motors are not maintaining the proper RPMs and are running slower than expected.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-spindle-motor-rpm-issue-with-glass-production-machine-plc-featuring-simatic-op17-display"
      },
      "headline": "Troubleshooting Spindle Motor RPM Issue with Glass Production Machine PLC Featuring Simatic OP17 Display",
      "description": "I have a glass production machine equipped with a Simatic OP17 display in the front and a PLC S7-300 in the back. Despite the screen displaying the correct RPMs and running the program smoothly, the spindle motors are not maintaining the proper RPMs and are running slower than expected.",
      "author": {
        "@type": "Person",
        "name": "John Lee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">Troubleshooting Spindle Motor RPM Issue with Glass Production Machine PLC Featuring Simatic OP17 Display</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>66 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2972</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">93</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a glass production machine equipped with a Simatic OP17 display in the front and a PLC S7-300 in the back. Despite the screen displaying the correct RPMs and running the program smoothly, the spindle motors are not maintaining the proper RPMs and are running slower than expected. No error messages are being displayed, only the issue with the RPMs. Any assistance or information on resolving this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you experiencing slow RPM performance on a fresh installation, or did the RPMs gradually start running at a slower pace?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Out of nowhere, a long-running program on my device has suddenly started encountering issues with its programmed RPMs. Despite multiple attempts to shut down and restart the system, the RPMs displayed on the screen do not match the expected values. While the device is still running through the correct cycle rotations, the discrepancy in RPMs is a concerning deviation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Software does not have the capability to change independently. Are the Spindles controlled by Servo, Stepper, or VFD drives? Has anyone modified or fine-tuned a setting within the drive system? Or replaced the drive entirely. Also, what is the power source voltage going to the drive? Are each Spindle individually controlled by its own drive or are they connected and driven by a shared drive system?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unsure where to locate the source driving the 8 motors at 8 stations. They are all controlled by a program that was installed over a decade ago. Four of the motors run a program set to specific RPMS. There haven't been any changes, but suddenly they have started functioning independently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is highly unlikely that the PLC is the issue here. The problem more likely lies with the drive, the signal being sent to the drive, the voltage supplied to the drive, or another external factor. The PLC is probably just converting an RPM setpoint and adjusting it for the drive. Any changes in this would have been made by adjusting the scaling in the program or a scaling constant on the HMI. To further troubleshoot, a detailed examination of the connections between the PLC, drive, and motor is necessary. This will help identify the source of the problem and resolve it effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Tomorrow, I will send photos and videos of the rear of the German-made Main system for troubleshooting. No one here seems to know how to fix it, so thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that it's probably not the PLC causing the issue, but more likely a problem with the drive, signal to the drive, or voltage supply. It seems that something external has failed. The PLC likely takes an RPM setpoint and converts it for the drive, which wouldn't have changed unless the scaling was adjusted in the program or on the HMI. To troubleshoot further, detailed information on the connections between the PLC, drive, and motor is needed.

An important factor to consider is the voltage level. Can it be measured using a multimeter, or is there a different method for checking the voltage?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee inquired about the proper voltage readings and whether they can be measured using a multimeter or if there is a different method for obtaining voltage readings. Additionally, he inquired about testing the drive and signal to the drive. Can these be tested using a specific procedure?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When dealing with signals, it's essential to differentiate between analog and networked signals. For analog signals, a meter can be used for measurement. However, with networked signals, it's crucial to check the Variable Speed Drive (VSD) to ensure that the commanded frequency aligns with expectations. This step is vital for ensuring accuracy and efficiency in signal processing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Which physical hardware components, such as the encoder wheel and hall effect sensor, are responsible for generating the RPM signal? Could it be that these components have become disconnected or are moving relative to the spindle, causing them to lose synchronization with the spindle rotation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am noticing some irregularities in the machinery, as it alternates between speeding up and slowing down. Additionally, one of the spindles has been stopping and restarting on its own after a few rotations. Despite these issues, the machine is still operating according to the program set on the Human-Machine Interface (HMI).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that @John Leeseems has noted a discrepancy between the displayed rotation speed (RPMs) on the HMI and the actual rotation speed of the spindle, with the spindle moving at a slower pace. The source of the displayed RPM on the HMI is uncertain, but it is likely a measured value, possibly from an encoder. However, the actual spindle rotation speed is slower than the HMI display indicates, indicating a potential issue between the measurement system and the HMI display. Unless any scaling parameters have been altered in the PLC and/or HMI, the problem is unlikely to be located downstream of the RPM input on the PLC. To troubleshoot, it is recommended to inspect the sensor, transducer, and any other components between the sensor and the PLC for any physical disconnections that may be affecting the accuracy of the RPM readings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important not to ignore mechanical problems, as they could be causing issues with the HMI displaying the speed command but the motor not being able to keep up. The drive may be reaching its current limit, which should normally trigger a fault after prolonged operation. Make sure to inspect for any slippage between the motor and the load it's driving. Have there been any recent maintenance checks performed? In some instances, improper reassembly following maintenance can lead to issues like these.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The lack of maintenance has led to errors and faults in the system, causing discrepancies in the RPMs displayed on the HMI. Three spinning stations are operating at slower rotations than indicated, with one station intermittently stopping before resuming after a few rotations. However, the RPMs are still not at the correct level. Maintenance and troubleshooting are necessary to rectify these issues and optimize system performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I trust that this will be helpful.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in possession of an electrical diagram for the system? It seems likely that this system operates on three-phase power. It is crucial to verify that all three phases at the drives are receiving the correct voltage levels. Without knowing the specific type of motors/drives present in the system, a missing phase could result in reduced power output and slower motor operation. Typically, this situation would trigger a bus fault; however, it is possible that this feature has been deactivated by the drive manufacturer. Do each motor have its own individual drive, or are multiple motors controlled by one drive? Additional details are necessary to provide further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drforsythe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your 8 spindle drives are running slow, it is likely that the speed setpoints from the two 5HD01 modules, which are 4-channel analog output modules, have been affected. It is improbable that both modules and all 8 channels have failed simultaneously. The issue may lie in a change in scaling within the program or at the 8 drives. These modules support both voltage and current (0-10V, 4-20mA), so further investigation is required to determine the correct signal. It is possible that the modules are set for 0-10V, but a supply voltage failure could be causing them to output less voltage than required. The supply voltage for these modules should be 24VDC on specific connector pins. If you suspect no changes in the PLC scaling, consider the output type programmed for the modules. It is essential to check the supply voltage on the analog modules and ensure it is not significantly lower than 24V. To accurately assess the situation, it is recommended to have a professional inspect the PLC and drives for any scaling discrepancies. If you are unable to do so, verify the supply voltage and look for any potential issues like lost phase or drooping. Remember to follow up on any suggestions provided by others and investigate further if necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy pointed out that while the HMI displays a certain rotation speed (RPM) for the spindle, the actual speed is slower. The source of the HMI-displayed RPM is unknown, possibly from a measured value such as an encoder. The discrepancy between the displayed RPM and the actual spindle speed suggests a issue between the measurement system and the HMI display. Unless there have been changes to scaling parameters in the PLC/HMI, the problem likely lies before the RPM input on the PLC. Start troubleshooting from the sensor to the transducer to identify any physical disconnect between the spindle and the encoder. The system lacks rotational feedback and operates as a blind system, with discrete IO and analog output modules controlling the speed of the drives based on a setpoint. If the drives are not communicating via Profibus, it may complicate the troubleshooting process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude for your expertise. While I am capable of operating the machine, I am faced with a challenge that is beyond my current abilities. Unfortunately, there is no one on hand to assist me, which is why I turned to seeking a solution for this situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Where can I measure voltage?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee expressed gratitude for the knowledge shared. While he can operate the machine, he is facing a challenge beyond his expertise, with no one available to provide assistance. This led him to seek solutions online. Unfortunately, resolving the issue will require electrical and mechanical diagnostics. If John is not confident in performing these tasks or lacks support, it would be advisable to enlist the help of a local PLC integrator. The machine seems relatively straightforward, making diagnosis a quick process. Potential culprits may include issues with the supply voltage to analog cards, drives, or motors, as well as mechanical problems in the drive system. While the PLC can aid in troubleshooting, the problem likely lies elsewhere, possibly due to human error in adjusting settings on the HMI. It is essential to check if any unintended changes were made in the RPM setpoint scaling on the HMI's settings menu, as this could be a factor in the issue at hand. By addressing these potential causes, a solution can be found promptly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dr. Forsythe inquired about the availability of an electrical schematic for the system, assuming it runs on three-phase power. It is crucial to ensure the proper voltage levels on all three phases at the drives to prevent any issues with the motors. A missing phase can result in lowered power and slower motor operation, potentially causing bus faults. However, bus fault detection may have been disabled by the drive manufacturer. It is important to determine whether there is one drive per motor or multiple motors per drive to provide further assistance. Additional information is needed to identify the configuration of the drives and motors in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee inquired about where to check the voltage and advised caution when dealing with the two 5HD01 modules. It is recommended to use a meter set on DC for the pins mentioned in the original post. When it comes to checking the voltage for drives and motors, it varies depending on the specific drive and motor. It is important to be knowledgeable and cautious when handling these components, as they likely carry AC voltages that can be hazardous if not handled properly. It is not advisable to experiment with these voltages without proper understanding and expertise in the matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee inquired about how to determine if a system has one drive or multiple drives. He asked if there is one drive per spindle or if one drive controls all the spindles. Click to expand for more information on this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>robertmee inquired about whether there is one unit per spindle or if it drives all the spindles. Can one unit control multiple spindles?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is possible that the Rothy 806X7 is the AC to DC converter for your drive system. Have you traced the motor leads from your spindle motor back to the cabinet to see where they terminate? If you haven't been able to find an English manual for this drive, it may be helpful to seek advice from someone with experience using it. It is a possibility that this unit has also malfunctioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that solving the issue with the machine will require electrical and mechanical diagnostics. If you're not comfortable or able to do so, it's best to hire a local PLC integrator. The problem seems to be simple to diagnose and could be related to supply voltage issues with analog cards, drives, or motors. 
Using the PLC for diagnosis would be helpful, but the root cause is likely not software-related. Check the settings menu on the HMI to adjust the RPM setpoint, as a change in values could be causing the issue with one of the motors turning off randomly. After rotating, the motor wakes up but still doesn't run at the proper RPM as set in the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for a German language manual for the 806x7 drive, you can find it at this link: http://rossmanith.de/wp-content/uploads/2012/04/1S4111BA.pdf The manual indicates that the drive uses a permanent magnet DC motor. To determine the armature voltage, you can measure the voltage across terminals X3.13 and X3.14. At full speed of 1680 RPM, the voltage should match the nameplate voltage. Running the motor at half nameplate voltage will result in half the nameplate speed.

To check the speed command, monitor terminal X2.5. There should be a direct correlation between the voltage at X2.5 and the voltage across X3.13 - X3.14. For example, at 10 volts on X2.5, you should observe the nameplate voltage on X3.13 and X3.14. Similarly, at 5 volts on X2.5, you should see half the nameplate voltage on X3.13 and X3.14.

It is crucial to exercise caution when taking these measurements. If you are unsure about the process, it's best to seek assistance from a knowledgeable professional.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>robertmee mentioned that the Rothy 806X7 may be the drive, serving as an AC to DC converter. If you follow the motor leads from the spindle motor to the cabinet, where do they end up? Since I haven't come across an English manual for this specific drive, perhaps someone else has encountered it before. It's possible that this unit has malfunctioned too. It appears that the rothy boxes indicate the number of spinning spindles. I am located in South Jersey, so I am looking for someone to inspect it. How can I find a professional to assist with this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee inquired about the rothy boxes and their significance in terms of spinning spindles. Residing in South Jersey, he seeks guidance on finding a professional to inspect the issue. One option is to reach out to local electrical distributors for recommendations, as suggested in Steve's post. It is important to measure specific areas, especially if multiple spindles are affected. A potential starting point is to check for common voltage sources, such as the 24vdc supply to analog modules or the 230vac supply to Rothy drives. Begin troubleshooting by confirming the presence of 24vdc and 230vac power.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are a few important points to consider. The programming of the Programmable Logic Controller (PLC) is fixed and will not change under any circumstances. The drives are instructed to operate through either an analog, digital, or no signal input. To troubleshoot the issue, it is essential to understand how the speed is set on the drives. Do they operate at a constant speed, or do they adjust their speeds automatically during operation? How many different speeds can they run at? Providing a picture or information on the wiring terminals of the drives would be beneficial if you are unable to identify the control method. If there is an analog signal output, a poor connection to the drives or a malfunctioning analog output could be the issue, although this cannot be conclusively determined from the picture supplied. Additionally, if the speeds are set through predetermined presets, a faulty output or a failure to activate the correct output for speed selection could be causing the drives to revert to an incorrect speed setting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Arpus4KM mentioned that the PLC's programming remains constant and the drives receive instructions through analog or digital signals. To troubleshoot the issue, it is important to understand how the drive speeds are set. Are the speeds manually set or do the drives adjust their speeds automatically? Additionally, the number of speeds the drives can run at should be considered. Providing a picture or information about the drives' wiring terminals can help in identifying the problem if the control is unclear.

If there is an analog signal output, a poor connection to the drives or a faulty analog output could be the cause. The issue could also stem from a malfunctioning output or failure to switch to a specific speed setting, causing the drives to revert to a default speed. The drives in question are likely 5HD01 modules with 4 channel analog outputs, possibly corresponding to the 8 spindle drives. The recurring issue with multiple drives suggests a common voltage supply problem or a malfunctioning analog module affecting only certain drives.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee identified the 5HD01 modules mentioned earlier as 4-channel analog outputs, likely corresponding to the 8 spindle drives in question. Multiple drives experiencing the same issue suggests a shared voltage supply problem or a faulty analog module affecting half of them. It appears that the OP did not confirm this yet. On a related note, the revamped forum layout is causing confusion. It might be advisable for the OP to consider seeking professional assistance to address this issue effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Arpus4KM mentioned some key points to consider. The programming of the PLC will remain constant and not change. The drives receive instructions to operate either through an analog or digital signal, or sometimes no signal at all. To identify potential issues, it is important to explain how speed settings are adjusted on the drives. Do the drives operate independently or change speeds automatically during operation? How many different speeds can they run at? Providing a picture or details about the wiring terminals on the drives could be useful if you are unable to determine the control method on your own.

If there is an analog signal output, a poor connection to the drives or a faulty analog output could be the problem. Without seeing the IO configuration in the picture, it is hard to determine the exact issue. If the speeds are controlled through preset settings, a malfunctioning output or a failure to activate the desired speed could be causing the drives to default back to a different speed.

It is important to communicate to your electronics specialist that the issue is not with the PLC. Offer suggestions for specific tests to be conducted and provide guidance on where to focus the troubleshooting efforts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To conduct a test, can you ensure that all spindles are set to the same speed? If possible, ask your technician to measure the DC voltage from the drive to the motor at X3 pins 13 and 14, and then check the DC voltage at pins 4 and 5. The motor voltage should be consistent across all 8 spindles when running at the same speed, and the analog voltage on pins 4 and 5 should match from the PLC. This assumes that each spindle does not have varying gear ratios in their gearboxes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking for the location of this item? Do I need to connect it to a ground source? If so, how can I do it on my own?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired whether it is possible to set all spindles to the same speed for testing purposes. He suggested having a technician measure the DC voltage from the drive to the motor at X3 pins 13 and 14, as well as checking the DC voltage at pins 4 and 5. Ideally, the motor voltage should be consistent across all 8 spindles when running at the same speed, and the analog voltage on pins 4 and 5 should also be uniform from the PLC. This is assuming that each spindle does not have a unique gearbox with varying ratios. Additionally, Robertmee mentioned experiencing a lack of lights lighting up while the spindles are spinning, questioning whether this is a normal occurrence.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee noticed that there were no lights illuminating while the spinning was taking place. He wondered if this was normal or not. Additionally, he observed that they also functioned like breakers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In relation to Robertmee's recommendation: When aligning the spindles to the same speed, it is essential to ensure that a consistent voltage is measured across terminals X2.4 and X2.5 on each 806X7 drive. Any variation in voltage could indicate issues with the analog output signals of drives showing significantly lower readings. Additionally, it is crucial to check the voltage across terminals X3.14 and X3.15 on each 806X7 drive, which should all display similar readings. Any discrepancies could point towards problems with the 806X7 drive(s) displaying notably lower voltage.

If the analog speed reference signals (X2.5 - X2.5) and armature voltage levels (X3.14 - X3.15) are consistent, issues may lie within the motors of slower spindles. This could be due to mechanical challenges where the motors are unable to achieve the required speed due to insufficient torque to drive the load, or potential slippage between the motor and the load.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee noticed that the analog module SF LEDs were not lighting up while spinning, and he wondered if that was a normal occurrence. Typically, the LEDs would turn red if there was a fault in the supply voltage or a channel fault, such as a short circuit. During a site visit, John found a module that was functioning properly without any lights illuminated, which is considered normal operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before proceeding further, it is essential to measure the voltages as described by I and Steve. This test is crucial for the next steps in the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to troubleshoot further, it is crucial to measure the voltages as previously instructed by I and Steve. Without this test, progress may be limited. Thank you for your expertise and assistance. One last inquiry: could a faulty encoder in the PLC be the reason for the spindle not aligning with the HMI program? The PLC in question is an older model, specifically an s7-300.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee expressed his gratitude for the time and knowledge shared, but raised a final query about the possibility of a faulty encoder in the aging Siemens S7-300 PLC causing the spindle to deviate from the HMI program. However, upon inspection, it appears that the system operates as an open loop without any encoder connections to the PLC. The process involves setting an RPM setpoint, which is then converted by the PLC into a 0-10V signal transmitted to the Rothy Drives. These drives, in turn, transform the incoming 230VAC into a DC voltage to control the motor in accordance with the 0-10V signal from the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about the encoder connections to your PLC, noting that the system appears to be open loop. The PLC converts the RPM setpoint to a 0-10V signal sent to the Rothy Drives, which then convert the incoming 230VAC to a DC voltage to power the motor based on the signal from the PLC. It's recommended to have an electronics expert inspect the system for any issues. Despite the challenges, having a basic understanding of how to test it with a multimeter could be beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee expressed his gratitude for the guidance provided in troubleshooting the electronics issue with a German device. Despite the confusion, he appreciated the advice and wished he could test it himself using a multimeter. Steve Bailey detailed the steps to measure the specific terminal numbers on the Drive unit. This is crucial as it contains both the PLC signal and the output voltage to the DC Drive. To further troubleshoot, it is recommended to run multiple spindles at the same speed and have a technician measure the incoming AC Voltage (230VAC), incoming Analog 0-10VDC signal from the PLC, and outgoing DC Voltage from Drive to Motor. These measurements should be consistent across drives when running at the same speed. Additionally, during a speed change, both the incoming Analog voltage and the DC voltage to the motor should change proportionally to the new speed setting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, robertmee pointed out that Steve Bailey provided a detailed outline of the specific terminal numbers on the Drive for measurement purposes. This is crucial as this is where both the PLC signal 0-10V and the Output voltage to the DC Drive are located. It is recommended to measure the Incoming AC Voltage to each drive (which should be 230VAC), the Incoming Analog 0-10VDC signal from PLC (which could vary between 0 and 10V but should be consistent across drives if running at the same speed), and the Outgoing DC Voltage from Drive to Motor (which could range from 0 to 90VDC but should be consistent across drives). When making a speed change, both the Incoming Analog voltage and the DC Voltage to the motor should change proportionally to the new speed. Your technician can assist in running multiple spindles at the same speed and performing these measurements. Thank you for your valuable input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee expressed gratitude, stating, "Thank you once again, I appreciate it." During testing, it was found that one drive had a voltage rating of 8.7 AC, while the remaining five drives were rated at 24v and higher. Checking at the PLC terminals X3.14 and X3.15 revealed readings of 1.31 and 2.64 volts DC, respectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Your meter is incorrectly configured. The black lead should be connected to the COM terminal on your meter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Robertmee, your meter may be incorrectly set up. To fix this, make sure the black lead is correctly placed on the COM terminal of your meter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This morning, I noticed a problem on the HMI screen where two of my stations were displaying programs with the phrase "times set" and "INPUT I1", which was not the correct set time as intended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When checking voltage levels on motor drives and PLCs, make sure to use a DC meter instead of AC to accurately measure the voltage. The only instance of AC voltage is the 230VAC power supply feeding into the drives. This distinction is crucial for proper voltage readings and maintenance of equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When Input 1 is activated, it waits for an external trigger before activation. Once triggered, Spindle 1 is turned on in both scenarios. In the first scenario, Spindle 1 is activated at 350 RPM, followed by Spindles 2 and 3 also at 350 RPM. In the second scenario, Spindle 1 starts at 180 RPM before being adjusted to 350 RPM, along with Spindles 2 and 3. This external Input can be initiated by an operator pushbutton or a signal indicating the completion of a cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee asked for help locating a professional in South Jersey to check out an issue. You have a few choices nearby. Applied Controls in Malvern, PA is known for their expertise and I have had positive experiences with them. If they are unable to send a technician, they can recommend a local integrator who can assist.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee emphasized the importance of using the correct setting when measuring Voltage in industrial applications. When checking the Voltage on motor drives and PLCs, make sure your meter is set to DC, not AC. The only instance where AC Voltage is involved is the incoming 230VAC power supply to the drives. In the DC setting, only one of the drives, Roxy, is at .10 Voltage. Make sure to use the appropriate settings on your meter to accurately measure Voltage in different components.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Which terminals are you measuring the voltage on? The voltage readings seem unusually low universally. Could you provide the DC voltage to the motor? Are all the Spindles operating at the same speed during this test?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Don't forget to measure the 0-10V signal between terminals X2.5 and X2.10, and the Motor Voltage between terminals X3.13 and X3.14. Please refer to the attachments for further details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about the terminals being used to measure voltage, noting that the readings seemed unusually low overall. He also asked for the DC voltage to the motor and whether all the spindles were operating at the same speed during the test. Adjust speed accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What you're looking at is an Inductive reactor. Can you explain the reason for measuring voltage in this specific location?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee identified the equipment as an Inductive reactor and questioned why voltage was being measured in that location. Apologies for my lack of expertise, could you please advise on where I should be checking instead?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee expressed his lack of experience and asked where to check underneath the wireway. Unfortunately, it seems the panel builder did not leave much space. One option is to measure the 0-10VDC signal from the PLC at the analog module, following the schematic or wires from the drive. The schematic shows inductors in series for noise filtering to the motor's DC voltage. To measure, identify the wires from the X3 terminals on the drive to the inductor. The previous readings were incorrect for a running motor, indicating idle voltage rather than running spindle voltage. Make sure to measure on the correct inductor, located to the left of each drive based on labeling, not the right as shown in the pictures of the 600 drive and 500 inductor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In an ideal scenario, it seems like the panel builder did not provide much space in the wireway. If it's more convenient, you can measure the 0-10VDC signal from the PLC at the analog module. Simply locate the schematic for the module or trace the wires from the drive. Looking at your schematic, I noticed that there are inductors in series for noise filtering to the motor. By identifying the wires coming out of the drive on the X3 terminals and where they connect to the inductor underneath the drive, you can take measurements. However, the readings you obtained earlier are incorrect for a motor in operation. The DC voltage measured appears to be at idle, not while the spindle is running. Be sure to measure while the spindle is running and on the correct inductor. Based on the labeling, it seems the inductor is located to the left of each drive, not the right. The pictures show the 600 drive, but the inductor is for the 500 drive. Make sure to pay attention to these details during your troubleshooting process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>IO_Rack recommended exploring local options in your area for control system integration. One option is Applied Controls in Malvern, PA, known for their expertise in the field. If they are unable to provide on-site support, they can connect you with a reputable local integrator for assistance. Thank you for the suggestion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing the spindle speeds, John Lee pointed out that one particular speed stood out as the lowest among all the others. However, it was noted that all values were inaccurately low and nonsensical. The motor in question operates at 1600 RPM with a voltage of 70VDC. At 350 RPM, the expected reading should be around 15 Volts DC. If this reading is not achieved, it may indicate an issue with the motor or incorrect measuring location. To troubleshoot, locate the X3.13 and X3.14 terminals under the drive, follow the wires, and check the voltage at their termination point if accessing the wires directly is not possible. When testing motor voltages, ensure the meter is set to the 200 scale. For measuring the 0-10V signal from the PLC to the drive, adjust the meter to the 20 scale.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, the company is currently in the wrong location. They are reaching out to a machine manufacturer in Germany to inquire about sending a technician. Despite my efforts, my lack of experience is hindering progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>John Lee mentioned that the company is currently in contact with a machine manufacturer in Germany to send a technician to fix the issue. Despite his efforts, his lack of experience is hindering the progress. However, he believes that a local integrator familiar with Siemens and simple DC drive converter could quickly resolve the issue. If the service is not covered under warranty, it may not be cost-effective to bring someone from Germany for repairs. It will be intriguing to learn about the final outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that he is eager to learn about the final solution to the issue. While the system is not overly complex, finding a local integrator with expertise in Siemens and basic DC drive converters should lead to a quick resolution. Unless the machine is still under warranty with free servicing, it may not be cost-effective to bring someone from Germany to fix it.

Unfortunately, this machine, purchased 25 years ago, has only recently started experiencing issues - not too bad for its age. However, the Tax Guy at the company seems hesitant to get involved due to its German origin. Despite the guidance received, the lack of personal experience has hindered further progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>John Lee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are the spindle motors on the glass production machine running slower than expected despite the correct RPMs being displayed on the Simatic OP17 display?</h4>
<p class='text-muted'><strong>Answer:</strong> The discrepancy between the displayed RPMs and the actual spindle motor RPMs could be due to various factors such as mechanical issues, electrical problems, or programming errors within the PLC S7-300 system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the spindle motors to not maintain the proper RPMs on the glass production machine equipped with a Simatic OP17 display and PLC S7-300?</h4>
<p class='text-muted'><strong>Answer:</strong> Possible causes for the spindle motors running slower than expected could include issues with motor calibration, sensor malfunctions, communication errors between the display and PLC, or software glitches in the control program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the RPM issue with the spindle motors on the glass production machine featuring a Simatic OP17 display and PLC S7-300?</h4>
<p class='text-muted'><strong>Answer:</strong> To troubleshoot the RPM problem, you can start by checking the motor connections, sensor readings, and the program logic in the PLC. It's important to verify if the control signals are correctly interpreted by the PLC and if the motor control parameters are set accurately.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is there a specific diagnostic process or steps to follow in order to address the spindle motor RPM issue with the glass production machine's PLC system and Simatic OP17 display?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, a</p>
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
