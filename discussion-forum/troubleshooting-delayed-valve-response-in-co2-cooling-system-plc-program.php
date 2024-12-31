
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have developed a PLC program for a CO2 cooling system, but I am facing issues with getting the valves of the gas cooler to function properly. I am using an M340 Schneider Electric PLC for this system. Everything else in the system is operating correctly. There are two">
    <meta name="keywords" content="plc program troubleshooting, co2 cooling system valves, delayed valve response, m340 schneider electric plc, co2 gas cooler, regulating valve issues, valve drivers ccmt-">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-delayed-valve-response-in-co2-cooling-system-plc-program">
    <title>Troubleshooting Delayed Valve Response in CO2 Cooling System PLC Program | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Delayed Valve Response in CO2 Cooling System PLC Program | Oxmaint Community">
    <meta property="og:description" content="I have developed a PLC program for a CO2 cooling system, but I am facing issues with getting the valves of the gas cooler to function properly. I am using an M340 Schneider Electric PLC for this system. Everything else in the system is operating correctly. There are two">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-delayed-valve-response-in-co2-cooling-system-plc-program">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Delayed Valve Response in CO2 Cooling System PLC Program | Oxmaint Community">
    <meta name="twitter:description" content="I have developed a PLC program for a CO2 cooling system, but I am facing issues with getting the valves of the gas cooler to function properly. I am using an M340 Schneider Electric PLC for this system. Everything else in the system is operating correctly. There are two">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-delayed-valve-response-in-co2-cooling-system-plc-program"
      },
      "headline": "Troubleshooting Delayed Valve Response in CO2 Cooling System PLC Program",
      "description": "I have developed a PLC program for a CO2 cooling system, but I am facing issues with getting the valves of the gas cooler to function properly. I am using an M340 Schneider Electric PLC for this system. Everything else in the system is operating correctly. There are two",
      "author": {
        "@type": "Person",
        "name": "Torfinn"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-26",
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
                <h1 class="text-white">Troubleshooting Delayed Valve Response in CO2 Cooling System PLC Program</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Torfinn</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">783</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">236</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have developed a PLC program for a CO2 cooling system, but I am facing issues with getting the valves of the gas cooler to function properly. I am using an M340 Schneider Electric PLC for this system. Everything else in the system is operating correctly. There are two condensers for cooling the CO2 gas, each equipped with a regulating valve that requires a 0-10v signal input. The valves have valve drivers, specifically the CCMT-24 type, controlled by superheat controller EKE 1A from Danfoss. Despite having PID controllers in the PLC programming for these valves, there is a noticeable delay of 1-2 seconds before the valves start moving to the desired position after a change in the signal input. This delay is causing the pressure to increase rapidly, surpassing the safety limit set at 105 bar, with the pressure setpoint at 90 bar. Any assistance or additional queries regarding this issue are highly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the rate of change in your PV surpasses the physical CV device, it may pose a challenge. While tuning the PID for optimal responsiveness is an option, a 2-second lag in the device can hinder performance. Consider upgrading to faster drivers for improved results. Are the models inherently slow to react? Upon reviewing the EKE specifications, it appears you are operating it in driver mode with position input from the PLC. Verify that the mode is correct. The EKE includes its own PI controller - have you considered utilizing it instead of the PLC? Regardless, there is no indication in the specifications of an intrinsic delay in response. In fact, the 485 section specifies a response time of 50ms.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response regarding the EKE in driver mode. The product was purchased by the customer who requested us to make it work, leading to potential challenges. We have had discussions with Danfoss, receiving mixed feedback regarding the delay issue. Some suggest there should be no delay, while others believe we have the wrong product due to the delay. Despite recommending valve changes, the customer is hesitant to make adjustments. The 2-second lag could pose difficulties in resolving the issue. Operating at 90 bar in the gas cooler evaporators and 40 bar out from the valves complicates finding suitable replacements for the valves. Seeking a programming solution to address this problem, as utilizing the EKE as a controller is at the discretion of the customer. Our ability to make physical changes to the machine is limited without their approval.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Torfinn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This issue of excessive deadband in positioner setup is a common occurrence that leads to poor control performance. Many users face this dilemma of sacrificing accurate control to prevent hunting. However, a top solution for this problem is offered by Rexa. Despite this, some customers may opt to cut costs and deal with subpar control despite the negative impact on system efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tom Jenkins frequently encounters the issue of excessive deadband in positioners, leading to poor control performance. While some may opt for this setup to avoid hunting, it ultimately results in subpar control. In such cases, Rexa offers a superior solution. However, some customers prioritize cost savings over optimal control, leaving them stuck with inadequate performance. For the past three decades, we have relied on Rexa Hydraulic controllers for their reliable and high-quality performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. Today, we will be implementing the feed forward function to improve system stabilization. By monitoring the pressure in the tank that the compressors draw from, we can anticipate and adjust for changes in pressure. This will, in turn, regulate the speed of the compressors and the pressure over the gas coolers. I will provide an update here on the effectiveness of this approach. Thank you to everyone who provided their input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Torfinn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After conducting research on the valve, I discovered that it utilizes a stepper motor instead of a solenoid valve. This means that the speed at which the valve can move is limited by the stepper motor. The CCMT-24, as depicted in the image, has a total of 1400 steps from being fully open to fully closed. When driven by a constant voltage (likely 0-10V), it moves at a rate of 150 steps per second. This results in a lengthy process of over 9 seconds for the valve to go from open to closed. It would be challenging to find a programming solution for a system requiring quick changes with such limitations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am aware that challenging circumstances can make acquiring a new valve difficult. However, is it possible to exchange the stepper positioner for a more efficient and agile alternative?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The implementation of the Feedforward function has greatly improved the efficiency of the system, although it has not completely resolved all issues as hoped. The speed of the steppervalve opening (9 seconds) is not the primary concern, as the machine is oversized for its current location in the Faroe Islands. The cooling water available is around 22 degrees Celsius, while the ocean water used for additional cooling is approximately 3.5 degrees Celsius.

Due to the large size of the machine in comparison to its surroundings, it typically runs at a maximum of 50%, but during winter months, it operates between 4-25%. The rapid increase in demand from certain consumers on the machine, equipped with -HBX vapor quality sensors from HB-Products, causes a quick jump in usage. Despite efforts to slow down these consumers, the small size of the middle tank (200 Liters) necessitates faster reactions in the system.

The valve drivers for the gas cooler valves have a 2-second delay from receiving input commands (0-10V) to adjusting to the corresponding position (0-100%). The recent addition of the Feedforward function should provide a smoother operation for the ship, which is scheduled to depart on Monday. Further improvements, such as considering Rexa Hydraulic controllers, may be explored in the future. Thank you to all who have provided feedback and suggestions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Torfinn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Torfinn mentioned a concern regarding a delay of 1-2 seconds for the drivers to start moving the valves to the desired position when changes are made to the 0-10v signal. While a slow stepper drive could potentially be a factor, it is unlikely to be the sole cause of the issue. It is suggested to further investigate the possibility of a programmed deadband as recommended by @Tom Jenkins. This deadband could be set in the valve positioner or within the PID system. If an intentional deadband is ruled out, it is advised to inspect the mechanical components for any play or lash that may be contributing to the delay. For more information, refer to https://www.plctalk.net/qanda/showpost.php?p=844583&postcount=4.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why am I experiencing delayed valve response in my CO2 cooling system PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> - The delayed valve response could be due to the PID controllers in the PLC programming or the characteristics of the valve drivers being used.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing the pressure to rapidly increase in the CO2 cooling system despite the setpoint being lower?</h4>
<p class='text-muted'><strong>Answer:</strong> - The delay in valve response leading to slower regulation of the CO2 flow could be causing the pressure to rapidly increase beyond the safety limit.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot the delayed valve response issue in my CO2 cooling system PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try adjusting the parameters of the PID controllers, checking the communication between the PLC and the valve drivers, and ensuring proper integration of the superheat controller EKE 1A from Danfoss.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific settings or configurations that need to be adjusted to improve the valve response time in the CO2 cooling system?</h4>
<p class='text-muted'><strong>Answer:</strong> - You may need to fine-tune the PID controller parameters, review the signal input accuracy, and verify the compatibility of the valve drivers with the PLC system to improve the valve response time.</p>
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
