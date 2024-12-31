
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently involved in a project that initially began on a SparkFun RedBoard Artemis. After conducting some testing, I have decided to incorporate a PLC into the project for enhanced performance. The project entails the need for four RS232 communications for scale integration, PWM output for servo control">
    <meta name="keywords" content="arduino redboard artemis, productivity 2000 plc, communication setup guide, rs232 communication, scale integration, pwm output, servo control, dc motor, encoder readings, redboard artemis integration, productivity 2000 series">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/integrating-arduino-redboard-artemis-with-productivity-2000-plc-communication-setup-guide">
    <title>Integrating Arduino RedBoard Artemis with Productivity 2000 PLC: Communication Setup Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Integrating Arduino RedBoard Artemis with Productivity 2000 PLC: Communication Setup Guide | Oxmaint Community">
    <meta property="og:description" content="I am currently involved in a project that initially began on a SparkFun RedBoard Artemis. After conducting some testing, I have decided to incorporate a PLC into the project for enhanced performance. The project entails the need for four RS232 communications for scale integration, PWM output for servo control">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/integrating-arduino-redboard-artemis-with-productivity-2000-plc-communication-setup-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Integrating Arduino RedBoard Artemis with Productivity 2000 PLC: Communication Setup Guide | Oxmaint Community">
    <meta name="twitter:description" content="I am currently involved in a project that initially began on a SparkFun RedBoard Artemis. After conducting some testing, I have decided to incorporate a PLC into the project for enhanced performance. The project entails the need for four RS232 communications for scale integration, PWM output for servo control">
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
        "@id": "https://community.oxmaint.com/discussion-forum/integrating-arduino-redboard-artemis-with-productivity-2000-plc-communication-setup-guide"
      },
      "headline": "Integrating Arduino RedBoard Artemis with Productivity 2000 PLC: Communication Setup Guide",
      "description": "I am currently involved in a project that initially began on a SparkFun RedBoard Artemis. After conducting some testing, I have decided to incorporate a PLC into the project for enhanced performance. The project entails the need for four RS232 communications for scale integration, PWM output for servo control",
      "author": {
        "@type": "Person",
        "name": "srsicard3"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">Integrating Arduino RedBoard Artemis with Productivity 2000 PLC: Communication Setup Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>srsicard3</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1958</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">23</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently involved in a project that initially began on a SparkFun RedBoard Artemis. After conducting some testing, I have decided to incorporate a PLC into the project for enhanced performance. The project entails the need for four RS232 communications for scale integration, PWM output for servo control (similar to an RC car), DC output for a small pump motor, and the ability to read from two encoders to track the number of revolutions. I encountered difficulties in establishing RS232 communication for the four scales, leading me to consider integrating a PLC.

My main query is whether it is possible to establish communication between the RedBoard Artemis and the PLC. I am planning to employ a Productivity 2000 series PLC for this purpose. Given that all the necessary hardware has already been procured, I am keen on maximizing its utilization rather than investing in new equipment and redesigning the setup. Has anyone attempted a similar integration before? Essentially, I intend to leave the encoder inputs, servo, and DC motor on the RedBoard Artemis, while transferring the RS232 communications and data output (to an SD card) to the PLC. The PLC would be responsible for sending signals to the Artemis to control the servo and start the DC motor, as well as retrieving data on the encoder readings per cycle.

I would appreciate any insights or suggestions on this matter!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>1) While Modbus (RTU or TCP) is considered a relatively straightforward protocol, signal timing can sometimes pose a challenge. 2) Developing a custom protocol with a specific scope may not be overly complicated. What communication options does the Artemis support in terms of physical connections?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that while modbus (rtu or tcp) is not overly complicated, signal timing issues may arise. Could you provide more details on what you mean by "signal timing"?srsicard3 shared that they are currently working on a project that was initially developed on a SparkFun Redboard Artemis. The Redboard Artemis is a popular board that I've been eyeing for some time. I have successfully connected to several PLCs and HMIs using MODBUS TCP with both the Arduino UNO and MEGA. Setting it up is straightforward, although understanding the MODBUS mapping can be a bit challenging at times. If you're interested, I can help you find some sample code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>WhinnieThePooh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you considering the expenses involved in acquiring these items? The 4 RS232 cards are a significant investment, and there are other non-standard components to consider when outfitting PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>WhinnieThePooh asked for clarification on the concept of "signal timing." The Modbus specification outlines specific timing requirements for Modbus RTU (serial) communications, as detailed in the Modbus Serial Line Protocol and Implementation Guide V1.02, section 2.5.1.1. While many Modbus RTU-capable devices may have UARTs with buffers that exceed or disregard these specifications, it is essential to consider the devices OP is working with. Implementing the Modbus protocol itself is straightforward, but meticulous mapping is crucial, although some vendors may struggle with this. By providing an example of an Arduino Modbus application, users can find a solution for their task and enhance the Downloads section of this website. Additionally, the initial response to this thread was made from a mobile phone, possibly leading to the humorous autocorrect in the text.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The sample project files are attached for your review. The Arduino used in this project is a non-brand MEGA, paired with an ethernet shield from Sunfounder. The HMI display is a 10" LSIS model that was readily available. I conducted a successful test this afternoon and found that all components are functioning perfectly. The communication speed is impressive and the connection appears to be highly reliable. The software for the HMI can be downloaded for free to view the program file. Additionally, for more information on Arduino Modbus TCP, a quick search on Google can provide helpful insights. Enjoy experimenting with this project! Please find the HMI software here: https://www.ls-electric.com/products/view/Smart_Automation_Solution/HMI/XGT_Panel/XP-Builder. Please note that the video file had to be heavily compressed due to its large size, resulting in reduced quality, but it is still watchable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>WhinnieThePooh</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Update: The end user is considering transitioning to an industrial controller for their project, as it will soon be operating as a daily test stand. They are also curious if a PWM output card from a PLC, specifically the Productivity2000 model, has the capability to control an RC stepper motor. While it seems plausible in theory, it has not been tested yet. The individual is utilizing an Automation Direct P2-04PWM for this purpose and is also exploring the option of acquiring a stepper motor and stepper driver from Automation Direct instead. Thank you to everyone for their valuable input - it will be useful for future projects.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>srsicard3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User srsicard3 inquired about the possibility of a Productivity2000 PLC PWM output card controlling an RC stepper motor. Theoretically, it should be possible. You can view a video demonstrating a simple RC servo being driven by a MicroLogix 1100 PLC on the provided GitHub link. Additionally, a similar video showcasing the functionality can be found below.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned the project can be found on GitHub at https://github.com/drbitboy/Micrologix_1100_PWM_Driving_Servo. The servo-relevant code, which scales an output value to the PWM infrastructure inputs, can be located in the LAD 3 DRIVESERVO routine. The PWM frequency specification for RC servos (Radio Control) ranges from 20 to 50Hz, although success has been achieved with frequencies up to at least 100Hz. Operating at a higher frequency offers increased resolution in the output duty cycle, with PWM output "widths" of 0 and 1000 corresponding to 0% and 100% duty cycles respectively. The typical usable range of duty cycles for the servo is 1-2ms nominal, and 0.5-2.5ms actual. Other sections of the code, including the PID, are currently unused in this particular example but may be utilized in future iterations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the expenses of acquiring necessary equipment is crucial. The price of 4 RS232 cards can add up quickly, especially considering additional non-standard components for PLCs. A more cost-efficient solution is the Dual slot CLICK+ PLC from AD, accompanied by two DCM cards, which can efficiently manage 4 scale ASCII streams. However, tackling the remaining tasks may prove to be challenging.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can the RedBoard Artemis communicate with a Productivity 2000 PLC for this project?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to establish communication between the RedBoard Artemis and a Productivity 2000 series PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Has anyone attempted integrating Arduino RedBoard Artemis with a PLC like Productivity 2000 before?</h4>
<p class='text-muted'><strong>Answer:</strong> - While specific experiences may vary, there have been successful integrations of Arduino boards with various PLCs for different projects.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What components of the project would remain on the RedBoard Artemis after integrating with the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The encoder inputs, servo, and DC motor would stay on the RedBoard Artemis, while RS232 communications and data output to an SD card would be handled by the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What tasks would the Productivity 2000 PLC be responsible for in this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The PLC would handle sending signals to control the servo and start the DC motor, as well as retrieving data on the encoder readings per cycle.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Why is the integration of a PLC being considered for this project?</h4>
<p class='text-muted'><strong>Answer:</strong> - Difficulties in establishing RS232 communication for the scales have led to the consideration of integrating a PLC for enhanced performance and efficiency.</p>
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
