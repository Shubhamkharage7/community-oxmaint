
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently collaborating with a FANUC robot from the R-30iB Mate Plus series for welding tasks and looking into the potential of externally managing the robots feed rate with USB Analog Output Modules. My goal is to regulate the speed through analog voltage signals while keeping the rest">
    <meta name="keywords" content="adjust robot feed rate, real-time, analog output modules, fanuc robot, r-30ib mate plus, welding tasks, usb analog output modules, regulate speed, analog voltage signals, teach pendant program, variable speed, teach">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-adjust-robot-feed-rate-in-real-time-using-analog-output-modules">
    <title>How to Adjust Robot Feed Rate in Real-Time using Analog Output Modules | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Adjust Robot Feed Rate in Real-Time using Analog Output Modules | Oxmaint Community">
    <meta property="og:description" content="I am currently collaborating with a FANUC robot from the R-30iB Mate Plus series for welding tasks and looking into the potential of externally managing the robots feed rate with USB Analog Output Modules. My goal is to regulate the speed through analog voltage signals while keeping the rest">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-adjust-robot-feed-rate-in-real-time-using-analog-output-modules">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Adjust Robot Feed Rate in Real-Time using Analog Output Modules | Oxmaint Community">
    <meta name="twitter:description" content="I am currently collaborating with a FANUC robot from the R-30iB Mate Plus series for welding tasks and looking into the potential of externally managing the robots feed rate with USB Analog Output Modules. My goal is to regulate the speed through analog voltage signals while keeping the rest">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-adjust-robot-feed-rate-in-real-time-using-analog-output-modules"
      },
      "headline": "How to Adjust Robot Feed Rate in Real-Time using Analog Output Modules",
      "description": "I am currently collaborating with a FANUC robot from the R-30iB Mate Plus series for welding tasks and looking into the potential of externally managing the robots feed rate with USB Analog Output Modules. My goal is to regulate the speed through analog voltage signals while keeping the rest",
      "author": {
        "@type": "Person",
        "name": "ansul"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-19",
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
                <h1 class="text-white">How to Adjust Robot Feed Rate in Real-Time using Analog Output Modules</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ansul</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">411</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">45</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently collaborating with a FANUC robot from the R-30iB Mate Plus series for welding tasks and looking into the potential of externally managing the robot's feed rate with USB Analog Output Modules. My goal is to regulate the speed through analog voltage signals while keeping the rest of the program running as usual from the teach pendant. I am examining the feasibility of creating a variable for the speed within the teach pendant program that can be adjusted in real-time using these analog signals. Any help on how to configure the Teach Pendant Settings and make Hardware Connections for this purpose would be highly valuable. I seek guidance on the viability of this approach and any required steps to make it happen.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking to adjust speed using a potentiometer, set speed with a PLC, or regulate speed in a closed loop system? Keep in mind that target speed is just one aspect of actual speed, taking into account factors like acceleration, deceleration, and blending. Robots may not always reach target speed, often slowing down to stay on track. Depending on your robot's capabilities, there are various methods to achieve this: utilizing Analog Input from Fanuc, using Analog Input on a bus (such as EIP), or employing UOP with Modbus TCP. Implementing a BGLogic background task in the robot will allow you to read and scale data for use. For adjusting program speed, consider using a gain value for flexibility, setting speed before a cycle, or making real-time changes by adjusting the override value. Consider different approaches if needing to adjust speed based on welding device power output. By sending robot speed through an analog output and adjusting welding power accordingly, you can achieve better results. Learn how to control FANUC Robots' speed override effectively with guidance from ONE Robotics Company.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thaumaturgia</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. My ultimate goal is to create a closed loop system where I can adjust the robot speed in real time based on external parameters. I plan to achieve this by using analog signals generated by devices such as NI-DAQ. Your explanation of speed, acceleration, and blending factor was helpful and will be taken into consideration. I prefer a simple approach over using PLCs. Ideally, I envision a setup where providing 0V analog output from my PC would result in the robot speed being 0 mm/min, while providing 10V analog output would set the robot speed to 100% of the maximum, with values in between being proportionally adjusted. As a newcomer to this field, I may not fully comprehend everything you have mentioned, for which I apologize.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ansul</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your robot's speed control, it is recommended to utilize the override feature with a 0-10V signal overriding the speed from 0-100%. The provided link offers guidance on implementing this on the robot side. For the BGlogic, there are abundant resources available online and support from Fanuc can be sought if needed. 

When transferring data to the robot, first ascertain if your controller features an Analog Input. In such a case, minimal adjustments may be necessary on the robot side, primarily scaling the input values. Verify if the input operates in volts or milliamps. 

If an Analog Input is unavailable, GI registers can be utilized alternatively. If NI devices support ModbusTCP, values in the range of 0-10000 can be sent and then scaled to 0-100. Contact Fanuc for guidance on configuring the GI registers.

In the absence of an Analog Input or ModbusTCP compatibility, options include purchasing an input block from Fanuc or implementing a bus option for additional input capabilities. Alternatively, direct communication with your NI device can be established. 

Digital inputs can be utilized as a last resort. By incorporating an ADC or utilizing the 7 outputs on your NI device, a 0-127 value can be reconstructed using 7 digital inputs on the controller. However, this method may introduce noise during transitions on the bits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thaumaturgia</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thaumaturgia suggested using an override with 0-10V to control the speed of 0-100% on the robot. Resources are available online for setting up BGlogic, and Fanuc can provide assistance as well.

If your controller has an Analog Input, simply scale the values as needed. Otherwise, GI registers or ModbusTCP with NI devices can be used. Contact Fanuc for documentation on setting up GI registers.

If Analog Input is not an option, Digital Inputs can be used. Check the CRMA 15 connections to identify the DI pins, as shown in the attached image. If unsure, test for continuity from the controller to the pins.

Apologies for the low image quality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ansul</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have made the following attempts to control speed variation using a robot: 

1. Set up group input GI[30] with 3 bits. 
2. Developed a new program where R[50]=GI[30] and integrated it into the robot's BG logic. 
3. In my primary welding program, replaced the speed with R[50]. 
4. Confirmed that R[50] value changes between 0-7 when switching DIs On and OFF via the teaching pendant. 
5. Observing no speed changes when altering DI values in auto mode without welding engaged. 

I seek guidance on this matter. 

The mentioned steps allow speed adjustment solely through the Teaching Pendant. However, I aim to manage it via my computer by potentially using a relay module to activate DI pins. 

Additionally, if I connect DI101 pin to the COM pin in the robot controller, will it activate and register as ON on the teaching pendant?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ansul</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When programming something like L P[1] R[50]mm/sec CNT100, it is important to note that the value taken from R[50] at the beginning of the instruction will remain constant throughout execution. This means that the instruction is not continuously referencing the register. To ensure that changes are reflected, it is necessary to apply an override in the BGlogic. Additionally, using 3 bits for speed without scaling limits the range to 0 to 7mm/s, which may not provide sufficient granularity for adjustments. To achieve the desired result, consider setting $MCR.$GENOVERRIDE = (GI[30] * 100) / MaxGIValue. For further information on controlling FANUC Robots' speed override, refer to the "Enter $MCR.$GENOVERRIDE and Friends" chapter in ONE Robotics Company's article. When configuring DI, it is recommended to connect the DI to 24V and the COM to 0V instead of wiring the DI to the COM. It is advisable to seek advice from an expert for clarification on these settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thaumaturgia</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Thaumaturgia, for your insightful response. I was experimenting with different settings for speed and override values in my welding process. Initially, I set the speed to L P[1] R[50]mm/sec FINE100, but I noticed that the value in R[50] remained static throughout the instruction execution. Following your advice, I attempted to adjust the override using BGlogic, but encountered a concern regarding welding initiation if the override was below 100%. Eventually, I discovered the solution of using $mcr_grp[n].$prgoverride, which allowed me to regulate the speed during welding by toggling the DIs on and off from the teaching pendant. Now, my goal is to control these DIs externally to further customize the welding process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ansul</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I adjust a FANUC robot's feed rate in real-time using Analog Output Modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - To adjust the robot's feed rate in real-time using Analog Output Modules, you can create a variable for the speed within the teach pendant program that can be adjusted through analog voltage signals. This allows you to regulate the speed while the rest of the program runs as usual.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the process for configuring Teach Pendant Settings and making Hardware Connections for adjusting the robot's feed rate?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure Teach Pendant Settings and make Hardware Connections for adjusting the robot's feed rate using Analog Output Modules, you need to examine the feasibility of creating a variable for the speed within the teach pendant program that can be adjusted in real-time using analog signals. Ensure proper hardware connections and programming to enable this functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to externally manage a FANUC robot's feed rate for welding tasks using USB Analog Output Modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to externally manage a FANUC robot's feed rate for welding tasks using USB Analog Output Modules. By creating a variable for the speed within the teach pendant program that can be adjusted in real-time through analog signals, you can regulate the robot's feed rate while the program runs normally.</p>
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
