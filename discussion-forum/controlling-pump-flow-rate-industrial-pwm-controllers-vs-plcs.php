
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am new to working with PLCs and might have some basic questions. I have a centrifugal pump circulating hot water in a system with a buffer tank, but it is providing too high of a flow rate. I am considering two options to reduce the flow rate:">
    <meta name="keywords" content="industrial pwm controllers, pump flow rate control, pwm controllers for centrifugal pump, plc vs pwm controllers, pump flow rate reduction, industrial pump control devices, single-phase motor control">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/controlling-pump-flow-rate-industrial-pwm-controllers-vs-plcs">
    <title>Controlling Pump Flow Rate: Industrial PWM Controllers vs. PLCs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Controlling Pump Flow Rate: Industrial PWM Controllers vs. PLCs | Oxmaint Community">
    <meta property="og:description" content="Hello, I am new to working with PLCs and might have some basic questions. I have a centrifugal pump circulating hot water in a system with a buffer tank, but it is providing too high of a flow rate. I am considering two options to reduce the flow rate:">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/controlling-pump-flow-rate-industrial-pwm-controllers-vs-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Controlling Pump Flow Rate: Industrial PWM Controllers vs. PLCs | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am new to working with PLCs and might have some basic questions. I have a centrifugal pump circulating hot water in a system with a buffer tank, but it is providing too high of a flow rate. I am considering two options to reduce the flow rate:">
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
        "@id": "https://community.oxmaint.com/discussion-forum/controlling-pump-flow-rate-industrial-pwm-controllers-vs-plcs"
      },
      "headline": "Controlling Pump Flow Rate: Industrial PWM Controllers vs. PLCs",
      "description": "Hello, I am new to working with PLCs and might have some basic questions. I have a centrifugal pump circulating hot water in a system with a buffer tank, but it is providing too high of a flow rate. I am considering two options to reduce the flow rate:",
      "author": {
        "@type": "Person",
        "name": "rmeldo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-09",
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
                <h1 class="text-white">Controlling Pump Flow Rate: Industrial PWM Controllers vs. PLCs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rmeldo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">562</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">278</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am new to working with PLCs and might have some basic questions. I have a centrifugal pump circulating hot water in a system with a buffer tank, but it is providing too high of a flow rate. I am considering two options to reduce the flow rate: bypassing some of the flow back to the pump inlet or implementing a PWM style pump on/off cycle with a 70% duty cycle lasting 10 to 15 minutes. My question is about finding a device capable of controlling the pump's on/off cycle. Are there industrial PWM controllers available that can handle a single-phase 1000W induction motor, or would I need to explore the PLC route? Thank you for your help in advance. - Riccardo</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you require frequent adjustments to the duty cycle percentage, consider opting for a combined PLC/HMI. Otherwise, any of various smart relays should be suitable for the job.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Pulse-width modulation (PWM) is typically utilized when controlling something using pulses at a frequency of over 1 kHz. If you're looking for a basic on-off control that is slow and adjustable, an intermittent timer relay can be used without the need for a PLC. This allows for regulation of both the on and off times according to your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you both for your input. I believe that setting the duty cycle percentage as a "set and forget" parameter after tuning would simplify the process. The pump has a logic on/off input, so the relay doesn't need to switch the full 1000 W, even though the voltage remains at mains level. Can you recommend a smart relay that can handle this task? Your guidance would be greatly appreciated. Thank you once again, Riccardo.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rmeldo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to exercise caution when recycling back to the inlet, as it can potentially raise the temperature at the pump inlet to levels that could cause damage. While the cycle time you have set may be suitable for a 1 kW motor, it is advisable to consult with the supplier for confirmation. Excessive start and stop cycles can lead to heat accumulation in the motor. To address this issue, a repeat cycle timer relay can be utilized.

A repeat cycle timer is a tool designed to regulate power to a device by toggling it on and off at predetermined intervals. Unlike a standard timer that operates based on specific times of the day, a repeat cycle timer focuses on the duration of on and off phases, repeating this cycle continuously until the timer is deactivated. For more information, visit: https://www.grainger.com/product/2A...c89feb31a44319c455d48d7eef91ca10&gclsrc=3p.ds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking for optimal performance, a variable displacement pump would be ideal. Investing in a new pump may not be appealing, but it could greatly improve efficiency. Instead of relying on a time-based duty cycle, consider utilizing level sensors in your buffer tank. Keep in mind that frequent stops and starts can lead to issues such as heat buildup, as pointed out by Tom.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you considering using a 555 timer, various components, a potentiometer for adjustment, and a relay in your project? Is it possible for the resistors and capacitors to have high enough ohms and Farads to ensure reliable operation at a slower speed?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your valuable input, which has been very insightful. Here are some additional considerations regarding the potential issue of overheating:

1) I propose a cycle time of 15 minutes, taking into account the system's long time constant to avoid any problems with motor inrush current causing excessive heat buildup. The system would operate with a 30% downtime (4.5 minutes).

2) The pump specifications are suitable for handling the hot water being circulated, and the introduction of a bypass would allow for the recirculation of water at the same temperature as the inlet. While this option may incur higher installation costs compared to a relay, it offers a passive solution without the need for additional controls.

Ideally, a variable speed pump would be the most effective solution, but cost considerations make it less feasible at this time. Since the current pump is relatively new, the focus should be on fine-tuning the system for optimal performance.

Initially considering the use of an Arduino and relay shield, I now believe a more standardized solution would be preferable for ease of adjustment by others. A timer would be a practical option for this purpose.

Overall, finding a balance between cost-effective solutions and efficient system performance is key.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rmeldo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>With a budget of €400-€500, you can easily purchase a frequency converter. However, keep in mind that you may need to upgrade your motor to a three-phase one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For optimal performance, consider installing a Variable Frequency Drive (VFD) on the motor equipped with flow feedback. Avoid cycling the motor on and off to prevent unnecessary stress and potential premature failures. By utilizing a VFD, you can efficiently control the motor without the need for a PLC, reducing pressure spikes in the system. Benefit from enhanced motor performance and longevity with this advanced control solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate all the helpful advice from everyone. Thank you for sharing your insights and suggestions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rmeldo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rmeldo, as you mentioned, the pump specifications are adequate for pumping hot water. A bypass system would recirculate water at the same temperature as the inlet, maintaining consistent operating conditions. While this option may involve higher installation costs compared to a relay system, it is a fully passive solution that does not require additional control. However, it is important to note that the efficiency of a pump of this size is typically around 50%, leading to heat inefficiencies that will result in the recycled water being warmer than the feedwater. This will ultimately raise the temperature of the water on the suction side of the pump. While determining the exact steady-state temperature is beyond the scope of my free services, it is certain that it will be higher than the initial feedwater temperature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When conducting a google Gemini search, the query led to the following information://////////////////////////////////////////////////Query: How to calculate water temperature increase using a pumpResponse: A formula exists for estimating the temperature rise of water as it flows through a pump. However, it's essential to recognize that this formula presents an idealized scenario and may not precisely mirror real-life conditions. The formula is as follows:ΔT = (Ps (1 - η)) / (cp * ρ)Where:ΔT = Temperature increase (in either °C or °F)Ps = Power of the pump shaft (measured in watts)η = Efficiency of the pump (a decimal value between 0 and 1)cp = Specific heat capacity of water (measured in J/kg⋅°C or BTU/lb⋅°F) - approximately 4.18 J/kg⋅°C or 1 BTU/lb⋅°F for water at room temperatureρ = Density of water (measured in kg/m³ or lb/ft³) - around 1000 kg/m³ or 62.4 lb/ft³ for water at room temperature/////////////////////////////////////////////////////Please note that this formula is applicable to a single-pass stream. If you circulate the heated water, the temperature will further increase as it cycles through the pump repeatedly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the options to reduce the flow rate of a centrifugal pump in an industrial setting?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Two common options are bypassing some of the flow back to the pump inlet or implementing a PWM style pump on/off cycle with a certain duty cycle.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can industrial PWM controllers handle a single-phase 1000W induction motor for controlling pump flow rates?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Industrial PWM controllers are available that can handle single-phase 1000W induction motors. However, it's important to ensure compatibility and proper specifications before implementation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Should I use an industrial PWM controller or a PLC for controlling the pump flow rate in my system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The choice between an industrial PWM controller and a PLC depends on factors such as the complexity of control logic required, scalability, and integration with other systems. Consulting with experts in the field can help determine the most suitable option for your specific application.</p>
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
