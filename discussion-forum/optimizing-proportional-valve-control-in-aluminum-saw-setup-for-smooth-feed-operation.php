
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am currently facing a challenge with a proportional valve on a PID loop in an aluminum saw setup. The Process Variable (PV) in this case represents the amps at the saw blade, while the Controlled Variable (CV) is the proportional valve that regulates the feed rate.">
    <meta name="keywords" content="proportional valve control, aluminum saw setup, feed operation, pid loop, process variable, controlled variable, amp draw, saw blade, feed rate regulation, blade movement, current surge, ramp down timer, valve output control, blade load, pid">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-proportional-valve-control-in-aluminum-saw-setup-for-smooth-feed-operation">
    <title>Optimizing Proportional Valve Control in Aluminum Saw Setup for Smooth Feed Operation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Proportional Valve Control in Aluminum Saw Setup for Smooth Feed Operation | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am currently facing a challenge with a proportional valve on a PID loop in an aluminum saw setup. The Process Variable (PV) in this case represents the amps at the saw blade, while the Controlled Variable (CV) is the proportional valve that regulates the feed rate.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-proportional-valve-control-in-aluminum-saw-setup-for-smooth-feed-operation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Proportional Valve Control in Aluminum Saw Setup for Smooth Feed Operation | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am currently facing a challenge with a proportional valve on a PID loop in an aluminum saw setup. The Process Variable (PV) in this case represents the amps at the saw blade, while the Controlled Variable (CV) is the proportional valve that regulates the feed rate.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-proportional-valve-control-in-aluminum-saw-setup-for-smooth-feed-operation"
      },
      "headline": "Optimizing Proportional Valve Control in Aluminum Saw Setup for Smooth Feed Operation",
      "description": "Hello everyone! I am currently facing a challenge with a proportional valve on a PID loop in an aluminum saw setup. The Process Variable (PV) in this case represents the amps at the saw blade, while the Controlled Variable (CV) is the proportional valve that regulates the feed rate.",
      "author": {
        "@type": "Person",
        "name": "jrhpuuk123"
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
                <h1 class="text-white">Optimizing Proportional Valve Control in Aluminum Saw Setup for Smooth Feed Operation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jrhpuuk123</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>38 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1317</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">341</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am currently facing a challenge with a proportional valve on a PID loop in an aluminum saw setup. The Process Variable (PV) in this case represents the amps at the saw blade, while the Controlled Variable (CV) is the proportional valve that regulates the feed rate. 

The issue arises during the initial movement of the blade, where the amp draw is minimal before it makes contact with the metal. This results in the feed operating at maximum output, set at a limit of 50% within the PID. Once the blade hits the metal, it accelerates at full speed, causing a sudden surge in current and damaging the saw blades. 

To address this problem, I have implemented a ramp down timer to gradually control the valve output, starting quickly and slowing down as it approaches the metal. Once the current surpasses the idle level, the PID takes over the control. However, a new challenge has emerged where the PID's output remains at 50% when it transitions, leading to a sudden increase in blade load before readjusting. 

Is there a way to configure the PID to start at a lower output, such as 20%, and then gradually increase if necessary to meet the cycle time and blade load requirements? This adjustment aims to prevent the initial spike in current when the PID assumes control. Please refer to the attached screenshot for a visual representation of the issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the target amperage value setpoint? Are there any other significant events captured on the trend, such as when the saw first makes contact with the material? What is the frequency at which the amperage is sampled? What is the loop update time configured for the PID controller? How is it ensured that the PID controller runs at the specified loop update time? Which brand and model of PLC is being used in this scenario? What specific PID instruction is being utilized in this setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you anticipating a linear correlation between feed speed and amperage in the system gain?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Dr. Bitboy, for your assistance. The equipment is controlled by an Allen Bradley PLC5/60 processor utilizing a general PID control block. The target amp value is set at 2375. The only indication of the saw making contact with metal is the increase in amps, as there is no position feedback from the saw stroke. The amp measurement is sampled every 12.5 milliseconds, with the PID loop updating every 0.01 seconds. It is important to ensure that the PID executes at the loop update time, but there is currently no check in place for this. The PID control block runs continuously with no interruptions, but without a verification mechanism. Additionally, it is expected that there will be a linear relationship between speed and amperage, with amperage increasing as speed increases.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jrhpuuk123</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During each scan, the SP value is checked against the SP_limit. If SP is less than SP_limit, the SP value is incremented by ramp_gain multiplied by scan_time. I impatiently await the doctor's responses. It seems possible that by not saving or displaying data frequently enough, we may be missing out on valuable information. I must admit, I struggle with PID instructions. Could it be that there is integrator oversaturation, as I suspect?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Taking into consideration the possibility that the original poster may not possess extensive qualifications, I recommend the following: If the current equals the no-load current, set the setpoint to 0; if not, set it to 50.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To increase the speed of updates, it is recommended to implement an open loop current limit. Choose the lower value between the current PID and the open loop control signal for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I would recommend following Peter's suggestion to improve feed speed control. Instead of directly using the PID for controlling feed speed, consider adjusting the speed based on the amp draw. You can control the feed speed by using the formula speed=K*Amps + PID.CV, where the PID functions as a trim around the anticipated speed and is activated only when the amp draw exceeds a certain threshold. This method helps fine-tune the feed speed for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jrhpuuk123 mentioned that there is no check in place to ensure that the PID executes at the loop update time. The PID control block runs every scan without any delay timers. If the PID is in an STI task triggered by 10ms interrupts, then this setup is accurate. However, if the PID is in the continuous task, it could be considered a technical error, but it may not have a significant impact depending on the average scan time. This setup implies that the PID is configured with PD data type blocks for tuning and other parameters. Is this interpretation correct?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User jrhpuuk123 brought up an issue regarding the PID output being stuck at 50%, causing a heavy load on the blade when the PID takes control. They are seeking advice on whether it is possible to have the PID start at a lower 20% output and gradually increase as needed to meet the required cycle time and blade load. By implementing this approach, the initial draw when the PID takes over can be eliminated. A screenshot has been provided to aid in understanding the issue. Can you please clarify the meaning of "the set output from the PID was left over at 50% output"? Depending on the interpretation, adjusting the tieback input parameter to 20% and configuring the PID for bumpless transfer could potentially address the issue and ensure the PID starts off at the desired output level of 20% when transitioning from Manual to Auto mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am uncertain if the PID starts at 50% when it kicks in. Analyzing the data, it appears that the control variable (CV) has already begun to increase slightly before the larger spike at around the 5-minute mark. This initial increase in CV may be attributed to the PID taking control before the highlighted moment. The subsequent bump in CV to around 50% could be a result of integral windup. Please note that the data sample intervals are approximately 1 second, so interpretations about a process moving much faster should be approached cautiously.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee suggested a method similar to Peter's idea for controlling feed speed without directly using the PID. By adjusting the speed based on the amps draw, the formula becomes speed=K*Amps + PID.CV, where the PID acts as a trim around the expected speed when the amps exceed a set threshold. This approach enhances control over the feed speed by incorporating the proportional gain and the PID error correction. How does the function speed=K*Amps + PID.CV differ from simply increasing the proportional gain? Understanding the nuances of this method can lead to optimizing control mechanisms for better performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Identify the type of motor (AC, DC, 3-phase, 1-phase, etc.) and determine the method of current control (contactor, VFD, etc.).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this scenario, the control output initially ramps up but is subsequently regulated by the pressure limit PID. The end result is determined by selecting the lower value between the open loop and PID outputs, a method that is effective for various applications. This control strategy demonstrates its efficacy around the 300ms mark, as the pressure PID output becomes inferior to the open loop output due to the resistance from the derivative gain against pressure fluctuations. This technique can be applied initially, followed by a transition to velocity mode for more precise control over impact speed. For a visual representation of this process, visit https://deltamotion.com/peter/Pictures/OpenLoopPressureLimit.png.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In discussing the relationship between speed and current in a motor, it is important to note that it is more monotonic than purely linear. While the theory behind PID control assumes linearity, practical applications show that PID can handle some deviation. When developing a model, it is crucial to consider the linear relationship between speed and material removal rate, which in turn correlates with power and current. Factors like motor efficiency, power variations, saw blade dynamics, and sampling delays can introduce non-linearities. By adjusting loop update times, these variables can be accounted for in the PID values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JLand inquired about the functional difference between the speed=K*Amps + PID.CV equation and simply increasing the proportional gain in an independent equation context. This is not meant to criticize the idea, but rather to gain a complete understanding. It appears that making the speed proportional to amps with some PID adjustment is similar to giving a higher weight to the proportional term in the PID equation.

The speed=amps*K approach offers an immediate response without PID ramping or lag from sampling, as the PID is focused on trimming around a predictive response within a narrower control range. However, a high gain relative to integral may lead to over/undershoots in my opinion. I have successfully used this method when the relationship between CV and PV remains relatively constant, as expected with speed vs amps. The PID would then adjust for factors such as material density and system wear.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee explained that the speed of a process is directly proportional to the amps multiplied by a constant K, resulting in an immediate response. By eliminating the ramping and lag associated with PID sampling, the PID controller can focus on adjusting around a predictive response rather than a wide range of control. However, a high gain relative to integral may lead to over/undershoots. This technique has proven successful when the relationship between the control variable (CV) and process variable (PV) remains relatively constant, such as in the case of speed vs amps. The PID controller can then make adjustments for factors like material density and system wear. 

A potential solution suggested by Robertmee is to modify the output of the PID controller, with K being equal to the PID output (K0) plus the product of CV and a scaling factor. This approach ensures that K is constrained within the limits of the control variable and the scaling factor. Additionally, the question arises of how this approach would function when the saw is not in contact with the material, similar to the issue raised in the previous post.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Adding position feedback to the feed mechanism could streamline the process. By feeding at a high rate during idle cutting and adjusting to the correct feed rate upon contact, this method is commonly utilized in machine tools. This approach appears more efficient compared to responding to the increase in current when the blade encounters aluminum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about the function of the saw when it is not in contact with the material, questioning if it is the same issue mentioned in Post #1. One potential solution could be setting K as the output of the PID, where K equals the sum of K0 and .CV*scaling, thereby ensuring that K adheres to the .CV limits and scaling parameters.

When the amperage falls below the activation threshold, the feed speed remains constant, and the PID is reset and inactive. Once the material comes into contact and amperage increases, the feed speed immediately adjusts to a lower setting as the PID samples and fine-tunes the error to reach the desired setpoint (SP). The adjustment mainly involves integral trimming to accommodate the variations in the speed versus amperage curve stemming from uncontrollable and immeasurable factors. The CV is restricted within a deadband corresponding to the amount of trim for accuracy.

An analogy can be drawn to steering a ship: akin to aiming north without allowing the PID to correct course from the south. By promptly directing the ship towards the desired direction and letting the PID refine for minor deviations, the set course can be maintained. This approach is also applicable to regulating inlet and outlet flow, where ideally pump speeds are set equally and then adjusted by the PID. Instead of fixing the infeed speed, the outfeed pump should not solely correct to match the infeed speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey suggested a more efficient method for the feed mechanism by incorporating position feedback. By adjusting the feed rate as the saw approaches the material, similar to how many machine tools operate, it can optimize performance and prevent spiking current when cutting aluminum. This approach can improve cutting accuracy and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This issue was resolved ages ago. I previously provided instructions on how to address it. Consider the process of feeding logs through a band saw - it's essentially the same concept.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently had a breakthrough where I was able to solve a complex issue that was confined to my thoughts. Now, I'm seeking clarity on the graphs I'm observing. Specifically, I notice that the PID loop has an update time of .01 seconds. This means that the PID outputs are recalculated and implemented every 10 milliseconds. The periodic change in the curves every second is due to the frequency of information display. However, I'm puzzled as to why the curves are not synchronized in time, particularly evident at the 11-second mark. I'm curious about the exact moment when the PID controller disengages and engages with the process. What are the specific settings of the PID controller - is it operating as P, PI, PD, or something else? Furthermore, I'm intrigued by the significant fluctuation in the saw_feed_speed curve at the 9-second mark. Lastly, I am proposing a logic scenario where the PID controller maintains the last speed value if the current is below 1750, otherwise it should maintain the desired value when material is present.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This device features a level control mechanism, incorporating a PID-controlled valve on the outflow, along with a unique twist. "Level" refers to the rotational energy (½ I ω²) stored in the rotating saw blade and drive train, with their rotational inertia comparable to the cross-sectional area of a tank or vessel. Similar to a leak in a tank, there is a constant loss of energy due to friction, which can often be disregarded.

The main energy loss, akin to the outflow valve removing "level" (energy), is directly related to the speed of the carriage. A faster carriage speed results in more material being cut, which consequently drains energy from the system and slows down the saw blade at a faster rate. The inflow rate can be likened to the current powering the motor that drives the saw blade, adding "level" (energy) to the system. Interestingly, the current behavior is linear with the motor speed, starting with low current at high speeds and gradually increasing as the speed decreases, eventually reaching the point of breakdown torque.

In a similar fashion to the inflow process, driven by liquid head from a reservoir positioned at the same level as the tank's top, the inflow varies based on the tank's level. When the tank level is high, there is minimal to no inflow due to zero differential head. Conversely, when the tank level is low, the inflow is maximized because of the substantial differential head. Although some non-linearities may exist, within a limited range, the system tends to exhibit linear behavior.

Therefore, implementing PID control should be relatively simple once the cutting operation commences. The challenging part lies in the transition from a "full tank" state with no inflow or outflow, as the slope of carriage speed versus outflow is zero until the saw blade makes contact with the material, leading to a steep slope thereafter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy, I fully support your thought experiment. However, I'm intrigued by the significant current values displayed on the curves in the material-free section. The more we delve into this, the more complex the system and problem become.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During a discussion, MaxK wholeheartedly concurred with drbitboy's intriguing thought experiment. However, a perplexing question arises: why do we observe seemingly elevated current values on sections devoid of material? The deeper we delve into the matter, the more perplexing the system and its complications become. It's worth noting that these values may not actually be high, but rather no-load values. One possible explanation is that the trend sample rate is approximately 1Hz, while the amperage is being sampled at 80Hz, with the PID operating at 100Hz, resulting in a certain level of uncertainty in the readings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Once again, it seems like there are some issues with the data analysis. Maxk made a good point about the phase difference between speed and current changes. The graph appears to lack sufficient noise, making it questionable whether it is a true representation at the current sampling frequency. It is likely that important details are being missed due to the low sample rate of 10 ms. This slow rate may not capture the rapid changes in force and torque accurately. To address this, the sample and update rate should ideally be 1 ms or faster. The rate at which force and torque increase depends on the material's softness or compliance, with aluminum falling on the softer side for a metal. It is important to carefully select between the speed PID and current PID to optimize performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the discussion, drbitboy pointed out that the values being analyzed may not be high values, but rather no-load values. It seems that there is a discrepancy in the sampling rates, with the trend being sampled at 1Hz, the amps at 80Hz, and the PID running at 100Hz. This mismatch could result in a significant amount of guesswork in the analysis. Click to read more... However, the original poster does not seem to be interested in delving deeper into this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What does "speed PID" and "current PID" mean? In this system, there is only one PID feedback loop. The issue arises at startup when the saw blade first touches the aluminum, causing a current spike and damaging the saw blades. The current draw is minimal before hitting the metal, leading to the PID output reaching its maximum limit. To address this problem, a ramp down timer is now in place to control the valve output before startup, transitioning to PID control after. The goal is to protect the saw blade by limiting the feed speed at startup.

The PID experiences overshoot when it takes over, leading to heavy loading on the blade before adjusting and modulating. The user is seeking a way for the PID to start at 20% and ramp up as needed to avoid this initial current draw. Implementing floating control in a PLC could be a solution, but tuning is still required. Floating control can be effective for systems with non-linear responses and long deadtimes, which are challenging to tune with traditional PIDs.

While floating control is an option, fine-tuning is necessary. The combination of low feed speed at startup and a low PID-takeover current leads to overshoot. Adjusting the PID-takeover current closer to the setpoint could potentially reduce the overshoot. However, tuning and experimenting with different metrics are essential to find the optimal solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this discussion, we anticipate encountering obstacles and setbacks. The task could have been completed much earlier by using an RMC motion controller. A faster update rate would potentially make a PLC a viable option for achieving success.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Peter Nachtwey, the thread is expected to end in failure due to lack of adequate control methods. He suggests that utilizing a RMC motion controller would have expedited the process significantly. However, a PLC could potentially be effective with a higher update rate. Without position feedback and relying solely on feedforward speed control, the effectiveness of a motion controller is questioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the previous example provided in comment #14, the velocity is regulated through an open loop signal. Initially, for the first 300 milliseconds, the system operates in open loop. Upon contact with an obstacle at around 300 milliseconds, the pressure increases, causing the current to rise in the OP's setup. The pressure PID control results in the output dropping below the open loop value due to the derivative term. As the pressure approaches the set point, the pressure PID output decreases nearly to zero. In this scenario, the output is determined by the minimum value between the open loop output and the PID output. A PLC5 may not be suited for this task due to its slow speed and inconsistent sampling ability, suggesting that a Control Logix system might be more appropriate.

The graph shown in comment #14 dates back to the 1990s and was generated using a RMC100 with a sampling rate of 1024 samples per second. This was during a setup at Precision Cast Parts in southeast Portland, where titanium parts and nozzles for rockets and jets are manufactured. Despite the age of the equipment, the RMC100 provided more reliable plots compared to those presented by the OP. Without clear trends or plots, it becomes challenging to comprehend the dynamics of the system being analyzed.

Questions should be raised regarding the lack of noise and prolonged stability observed in the OP's graphs. Additionally, inquiries about how the OP manages to adjust speed without position feedback, the variations in motor current post-contact with the PID active but no set point, and the significance of the derivative term in the control system should be addressed. It is also essential to acknowledge the wealth of expertise and technical support that can be offered either on-site or remotely, as highlighted by the experience accumulated over decades by professionals in the field. Despite the technical complexity, seeking understanding and clarity in discussions like these is crucial for effective problem-solving and system optimization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you discovered a solution to your problem yet, or are our inquiries and hypotheses being disregarded? Please provide a sign, sir! I am curious about the current system dynamics and would like to understand more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Post #14, it was mentioned that PLC-5 would not be suitable for handling Peter Nachtwey's system. However, without knowing various factors such as the inertia of the saw blade and drive-train, torque characteristics of the motor, diameter of the saw blade, thickness and hardness of the aluminum, length of the cut, and target cycle time, it is difficult to determine if the PLC-5 is sufficient for OP's system. Post #14 lacked detailed information, so any clarification is appreciated.

Is there no position feedback in the system despite "Target Pos" and "Actual Pos" being shown on the plot? Is this system similar to a dart-on-balloon setup? It seems that the pressure is represented by "Analog" (gray/white), open-loop speed by "Drive" (green), and PID speed by "Speed" (magenta/blue). Please provide a more detailed explanation.

With the PID output limited to 50% in OP's system, it is reminiscent of an open-loop speed control where 50% serves as an upper limit. The 1Hz plots provided by OP may lack resolution, but interpolation can offer a rough estimation of the system's behavior.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey raises an important question about the seemingly noiseless lines in the OP's graphs and why they remain flat or unchanged for extended periods. The reason behind this is that it is a 1Hz plot, as previously mentioned. In another instance, Peter Nachtwey brings up how the OP can adjust the speed without position feedback. The answer lies in the fact that when the saw begins cutting aluminum, the current exceeds the no-load current. The system operates like a rotational energy control system, similar to tank level control, with current measurements serving as a proxy for rotational energy or perhaps momentum. Additionally, Peter Nachtwey questions why the motor current varies in steps after contact while the PID is active and there is no apparent setpoint. However, as mentioned earlier, there is indeed a setpoint for current (i.e., rotational energy). Furthermore, there is an overall current trigger to switch the system from open-loop speed to PID control, with the setpoint and process variable being current and the control variable being feed speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An issue with using a PLC5 for the OP's application is its lack of speed and effective use of derivative terms for controlling the current rate of change. This results in poor performance, leading us to frequently advise customers against using a PLC for such tasks. Despite our 25+ years of experience, some clients are skeptical until they face months of frustration. A real motion controller combined with expertise can efficiently handle this application in just a few hours.
 
In the provided plot, there is a legend explaining the colors representing target and actual analog values, such as pressure, current, torque, or force. In open-loop mode, target and actual positions and speed align. The red line displays the actual position, overlapping with the cyan line due to their equality. The blue line represents actual velocity, appearing coarse and noisy likely due to low-resolution feedback. The green line indicates the drive or control output sent to the valve. 

A concern arises when the OP mentions using a PID controller without a set point. In the plot, the white line depicts the target pressure/analog set point, while the gray line shows the actual pressure. Analysis reveals that the pressure PID output dips below the open-loop set point as pressure increases, regulating the pressure rate to minimize overshoot. The rate of pressure increase is influenced by impact speed and material properties, emphasizing the need to consider the dissipation of kinetic energy. 

Despite my current location in Panama and limited time for online writing, my extensive experience in covering various topics through magazine articles allows me to provide in-depth insights into such technical matters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion by Peter Nachtwey, the confusion arises as to why the original poster (OP) claims to be using a PID without a set point. Upon reviewing earlier posts #1, #2, and #4, it becomes clear that the system involves a proportional valve on a PID loop for an aluminum saw. The proportional valve controls the feed rate based on the amps at the saw blade. The target amp value is specified as 2375.

Initially, the feed speed is open-loop controlled, and the amp measurement is low until the blade makes contact with the aluminum, causing the blade rotation to slow down and the amp measurement to increase. Once the amp measurement reaches a certain threshold, the PID takes over the feed speed control with a maximum limit of 50%.

It is noted that the overall control of feed speed is similar to a system with open-loop control transitioning to closed-loop control via PID with an upper limit. However, the specifics may vary. It is emphasized that without sufficient information about the dynamics of the saw/valve/feed/aluminum system, it is difficult to determine if the PLC-5 can effectively control it using PID. Factors such as the size of the saw blade, thickness of the aluminum, and motor specifications play a crucial role in determining the feasibility of PID control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I observed the control signal managing the valve that guides the saw through aluminum. As the current nears the set point or limit, the open loop signal will decrease. This aligns with my example, prompting me to share it. Feedback is crucial in controlling or limiting processes. While the current set point wasn't visible on the plot, I agree that initially, control is open loop and gradually transitions to closed loop. However, I disagree with the third point - when the current approaches the limit, the output of the PID will be lower than the open loop output, becoming the minimum of the two outputs. My detailed plots update 1024 times per second, showcasing the significance of low select understanding. I am aware that the Control Logix encompasses this feature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my third point, I was addressing the system belonging to the original poster (OP), not yours. The open-loop speed in OP's system is below the necessary setpoint control velocity (CV) required to reach the desired setpoint. When the Proportional-Integral-Derivative (PID) control takes over, the CV will likely be set at the trigger threshold if the PID is configured to smoothly transition. I grasp the concept of using the lower value between two options (low select) similar to min(A,B); however, this is not precisely what OP is doing. Their issue arises from transitioning too early from open-loop control to PID, when the current is still well below the setpoint and the CV is insufficient to bring the process variable (PV) to the desired setpoint. Consequently, the integral term accumulates as the PV gradually approaches the setpoint from below, leading to overshooting once the PV eventually catches up due to various factors causing delay. This overshooting behavior is typical in PID-controlled systems when the setpoint or load changes. While your and @robertmee's approaches may be effective, I believe that OP's approach could also succeed if they increase both the open-loop CV and trigger PV, provided that the PLC-5 can handle the adjustments. Ultimately, it seems that OP has moved on from the discussion, possibly already implementing alternative strategies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy stated that understanding low select, such as min(A,B), is crucial but not exactly what the original poster (OP) is attempting. The key issue lies in transitioning from open loop to PID control prematurely, leading to integration wind-up. By properly utilizing low select, the transfer to the current Proportional-Integral-Derivative (PID) will be seamless.

The challenge arises when switching to PID control while the current is significantly below the setpoint and the Controlled Variable (CV) is also insufficient to align with the Process Variable (PV) setpoint. This causes the integral term to accumulate as the PV gradually approaches the setpoint, resulting in overshooting once the setpoint is reached. Implementing a solution to prevent integration wind-up, especially during the transition period, is essential. Investing in a motion controller capable of handling such scenarios is recommended.

Additionally, Drbitboy acknowledges that alternative approaches suggested by others may be effective, but emphasizes the potential success of the OP's method with adjustments in the open-loop CV and trigger PV levels. However, it is uncertain if the PLC-5 system can keep up with these modifications. Ultimately, it appears that the OP may have already resolved the issue using a different strategy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I prevent sudden surges in current and damage to saw blades in an aluminum saw setup using a proportional valve on a PID loop?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach to prevent sudden surges in current and blade damage is to implement a ramp down timer to gradually control the valve output, starting quickly and slowing down as it approaches the metal. Additionally, adjusting the PID settings to start at a lower output, such as 20%, and gradually increase if necessary can help mitigate the initial spike in current when the PID assumes control.</p>
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
