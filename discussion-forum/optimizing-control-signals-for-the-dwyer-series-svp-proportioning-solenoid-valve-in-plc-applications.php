
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have been instructed to assess the performance of the Dwyer Series SVP Proportioning Solenoid Valve for PLC-controlled flow and pressure. The valve allows for adjustable flow rates within a range of 0-24VDC (@400mA) - which may not be the most common control signal choice. It seems challenging to">
    <meta name="keywords" content="dwyer series svp proportioning solenoid valve, plc applications, control signals, adjustable flow rates, 0-24vdc, signal converters, signal conditioners, 4-20ma, 0-10vdc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-control-signals-for-the-dwyer-series-svp-proportioning-solenoid-valve-in-plc-applications">
    <title>Optimizing Control Signals for the Dwyer Series SVP Proportioning Solenoid Valve in PLC Applications | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Control Signals for the Dwyer Series SVP Proportioning Solenoid Valve in PLC Applications | Oxmaint Community">
    <meta property="og:description" content="I have been instructed to assess the performance of the Dwyer Series SVP Proportioning Solenoid Valve for PLC-controlled flow and pressure. The valve allows for adjustable flow rates within a range of 0-24VDC (@400mA) - which may not be the most common control signal choice. It seems challenging to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-control-signals-for-the-dwyer-series-svp-proportioning-solenoid-valve-in-plc-applications">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Control Signals for the Dwyer Series SVP Proportioning Solenoid Valve in PLC Applications | Oxmaint Community">
    <meta name="twitter:description" content="I have been instructed to assess the performance of the Dwyer Series SVP Proportioning Solenoid Valve for PLC-controlled flow and pressure. The valve allows for adjustable flow rates within a range of 0-24VDC (@400mA) - which may not be the most common control signal choice. It seems challenging to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-control-signals-for-the-dwyer-series-svp-proportioning-solenoid-valve-in-plc-applications"
      },
      "headline": "Optimizing Control Signals for the Dwyer Series SVP Proportioning Solenoid Valve in PLC Applications",
      "description": "I have been instructed to assess the performance of the Dwyer Series SVP Proportioning Solenoid Valve for PLC-controlled flow and pressure. The valve allows for adjustable flow rates within a range of 0-24VDC (@400mA) - which may not be the most common control signal choice. It seems challenging to",
      "author": {
        "@type": "Person",
        "name": "NetNathan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-01",
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
                <h1 class="text-white">Optimizing Control Signals for the Dwyer Series SVP Proportioning Solenoid Valve in PLC Applications</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">815</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">257</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have been instructed to assess the performance of the Dwyer Series SVP Proportioning Solenoid Valve for PLC-controlled flow and pressure. The valve allows for adjustable flow rates within a range of 0-24VDC (@400mA) - which may not be the most common control signal choice. It seems challenging to find signal converters or conditioners that can work with a 0-24VDC output and 4-20mA or 0-10VDC control input. The available options for converting this signal to a more common range are limited, making it difficult to find a suitable solution. The flow rate to voltage curve of this valve is not ideal, but I am curious if there are any better alternatives than investing in an expensive programmable 0-30VDC power supply with rs232 communication to the PLC for controlling the valve. More information about the Dwyer Series SVP Proportioning Solenoid Valve can be found here: https://dwyer-inst.com/media/customuploads/files/F-82.pdf</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After considering different options, I came across a 24V DC motor controller that operates with a 0-5VDC input and delivers an output of 0-24V when paired with a 24V power source. Some models are advertised as compatible with input voltages ranging from 5 to 24V or 24 to 90V, depending on the power source. However, most of these controllers utilize Pulse Width Modulation (PWM) instead of providing a direct DC output, which raises doubts about their compatibility. If they do work, it essentially serves as a 0-5V to 0-24V signal conditioning device. In a previous job at a workshop handling hot presses powered by hot oil and cooled by chilled water, temperature control was achieved using two variable valves to manage the flow of oil and water, operating within a voltage range of 0-24V.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When looking for a solenoid driver, it is common to find that proportional valve solenoids are typically operated using a PWM signal. The purpose of a solenoid driver is to convert a process signal range of 0-10 or 4-20 into a PWM output, ensuring that the driver restricts the output current to the desired level.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently reviewed the construction details of a variable pressure hydraulic press that I previously installed a control panel for. The press featured a Bosch variable valve with a 0-10V range, along with an interface card that accepted 0-10V inputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 0-24VDC voltage range is frequently utilized for controlling Hydraulic proportional valves. WEST offers a variety of amplifiers designed specifically for this application, such as those compatible with -10 to +10 analog outputs. To learn more, you can refer to the following link: https://www.w-e-st.de/files/pdf/PAM-199-P-EN.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Liam Moran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The SUN XMD-0x controller is an excellent choice for controlling 0-24vdc pwm valves. I highly recommend it for optimal valve operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Liam Moran mentioned that the 0-24VDC is a widely utilized voltage range for controlling Hydraulic proportional valves. WEST offers a variety of amplifiers specifically designed for this purpose, including ones compatible with -10 - +10 analog outputs. One of the options even supports Profinet communication protocol. 

In a related discussion, dwoodlock recommended the SUN XMD-0x controller for PWM valves operating within the 0-24VDC range. This could be a viable option for controlling valve solenoids using Pulse Width Modulation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our suns are versatile and can be used in various applications. They are cost-effective and can be easily set up using the iPhone app with Bluetooth connectivity. The app also includes troubleshooting features that are currently trending. Some users have mentioned a PID function, although past tests have shown it to be unhelpful. In our setup, we mainly use them as an adapter to connect our 0-10 and 4-20 analog commands to the valve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider the Burkert 8605 as a viable alternative, known for its reliability and easy adjustability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of trying to implement it myself, I might consider bringing in an expert for the job. This decision is akin to investing $5 to save a nickel.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Padees suggested exploring alternative options for implementation, likening it to spending $5 to save a nickel. Our current issue involves finding an alternative to the MKS 248B valve paired with the 1249 solenoid driver, as the availability of the 1249B solenoid driver is set at 24 weeks out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the ultimate Current Voltage Converter with Indicator for Industrial use available on Amazon. This top-of-the-line converter ensures optimal performance and efficiency in managing voltage levels. Get yours now for a reliable solution to your industrial needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is using this specific device essential despite its seemingly complex and costly failure potential? The curve of this device is proportional only within the voltage range of 6V to 10V, showing a steep but non-linear response. It resembles more of a non-proportional valve that remains closed below 5V and fully activated after 10V. How crucial is the use of this particular equipment?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Bit_Bucket_07 mentioned a Current Voltage Converter with Indicator for industrial use available on Amazon. This converter is ideal for controlling motors within a range of 0-24V. However, it uses PWM instead of straight voltage, so there is uncertainty about its compatibility for the intended purpose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While this thread may be older, it's worth mentioning the latest technology in Proportioning Solenoid Valve controllers for controlling Proportioning Valves. Wandfluh has introduced a new controller with a Bluetooth App for easy setup and monitoring. The device is separate from the valve itself, offering convenient control options. To learn more, check out the product brochure here: https://www.wandfluh.com/fileadmin/user_upload/Wandfluh/Downloads/Kommunication/FactSheets/WAG/English/PD3_Electronics_EN.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the challenge with using a Dwyer Series SVP Proportioning Solenoid Valve in PLC applications?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The challenge lies in the valve's unique control signal range of 0-24VDC, which may not be compatible with common PLC control signal ranges like 4-20mA or 0-10VDC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Are there signal converters available to work with the 0-24VDC output of the Dwyer valve?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Limited options exist for signal converters or conditioners to convert the 0-24VDC output to more common control signal ranges, making it difficult to find a suitable solution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What alternatives are there for controlling the Dwyer valve without investing in an expensive programmable power supply?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One alternative mentioned is investing in an expensive programmable 0-30VDC power supply with rs232 communication to the PLC, but it may not be the most cost-effective solution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Where can I find more information about the Dwyer Series SVP Proportioning Solenoid Valve?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: More information about the valve can be found in the document provided at this link: https://dwyer-inst.com/media/customuploads/files/F-82.pdf</p>
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
