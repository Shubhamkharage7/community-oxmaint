
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I currently have a single-axis linear process powered by pneumatic cylinders with a 4-20mA linear position transducer. The cylinders are controlled by an Enfield S2 cylinder positioning controller, which is connected to a PLC. However, the position control is not optimal, especially under varying force/load conditions. I believe the">
    <meta name="keywords" content="linear motion control, hydraulic solutions, pneumatic cylinders, linear position transducer, enfield s2 controller, plc, force/load conditions, air medium, pid loop algorithm, ballscrews, servo, electric linear actuators, closing force, total">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-alternatives-for-precise-linear-motion-control-seeking-expert-advice-on-hydraulic-solutions">
    <title>Best Alternatives for Precise Linear Motion Control: Seeking Expert Advice on Hydraulic Solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Alternatives for Precise Linear Motion Control: Seeking Expert Advice on Hydraulic Solutions | Oxmaint Community">
    <meta property="og:description" content="I currently have a single-axis linear process powered by pneumatic cylinders with a 4-20mA linear position transducer. The cylinders are controlled by an Enfield S2 cylinder positioning controller, which is connected to a PLC. However, the position control is not optimal, especially under varying force/load conditions. I believe the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-alternatives-for-precise-linear-motion-control-seeking-expert-advice-on-hydraulic-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Alternatives for Precise Linear Motion Control: Seeking Expert Advice on Hydraulic Solutions | Oxmaint Community">
    <meta name="twitter:description" content="I currently have a single-axis linear process powered by pneumatic cylinders with a 4-20mA linear position transducer. The cylinders are controlled by an Enfield S2 cylinder positioning controller, which is connected to a PLC. However, the position control is not optimal, especially under varying force/load conditions. I believe the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-alternatives-for-precise-linear-motion-control-seeking-expert-advice-on-hydraulic-solutions"
      },
      "headline": "Best Alternatives for Precise Linear Motion Control: Seeking Expert Advice on Hydraulic Solutions",
      "description": "I currently have a single-axis linear process powered by pneumatic cylinders with a 4-20mA linear position transducer. The cylinders are controlled by an Enfield S2 cylinder positioning controller, which is connected to a PLC. However, the position control is not optimal, especially under varying force/load conditions. I believe the",
      "author": {
        "@type": "Person",
        "name": "strantor"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-26",
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
                <h1 class="text-white">Best Alternatives for Precise Linear Motion Control: Seeking Expert Advice on Hydraulic Solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">370</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">337</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I currently have a single-axis linear process powered by pneumatic cylinders with a 4-20mA linear position transducer. The cylinders are controlled by an Enfield S2 cylinder positioning controller, which is connected to a PLC. However, the position control is not optimal, especially under varying force/load conditions. 

I believe the issue lies in the limitations of using air as a medium for precise and consistent positioning, as well as the Enfield controller lacking a comprehensive PID loop algorithm. Despite these challenges, I am reluctant to completely retrofit the system with ballscrews and a servo due to the extensive physical modifications required.

I am therefore in search of an alternative solution that maintains a similar form factor as the current cylinders. Electric linear actuators meeting the speed, force, and accuracy criteria needed for the application have proven elusive. The ideal replacement should deliver at least 1500lbf/6700N closing force, operate within a 20”/500mm total travel distance in approximately 2 seconds, and ensure positioning accuracy within 1/32 inches/1mm.

Although I am aware of servo hydraulics and hydraulic positioning as possible alternatives, I lack expertise in this area. Where should I begin my search for suitable products or recommendations? Any suggestions for user-friendly options for someone with limited experience in this field would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Trust your intuition - it's often spot on. Have you determined the natural frequency of the system yet? It's a factor that many overlook. Consider using oil to avoid damaging the ball screws, as they are sensitive to shock.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned the importance of using oil for optimal performance, stating that it's better late than never. He also questioned the natural frequency of the system, emphasizing its crucial role in the cycling between extents. Wondering about the specifics, he turned to Google and discovered valuable information on natural frequency and PID control. This led him to delve deeper into the world of Delta, RMC controllers, and hydraulics. Despite not having been in the hydraulic field for some time, Peter realized that he needed the right equipment for controlling two cylinders. He pondered whether he required two channels or if the cylinders could be connected in parallel. Wanting to make the best purchase decision, he sought guidance on the most basic yet effective solution available. Curious why he hadn't been pitched a sales offer, he expressed interest in learning more about the product specifications. If unable to provide details in the current conversation, he requested to be contacted via email for further discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently requested a quote on the Delta website for the RMC75E-AA1 (1)EXP70-A2 and I'm unsure if the expansion module is necessary. While the quote wizard suggested it was needed to control the RMC75 with an analog signal, the RMC75 datasheet states that the AA1 axis card already accepts an analog signal. I couldn't find any valves on the Delta site - what type of valves do you suggest? Should I go for any 0-10V or 4-20mA proportional valve?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Absolutely. So, does that mean how quickly it can switch between different levels of performance? The speed at which it can speed up or slow down. It appears that Google recognizes you for your focus on natural frequency, among other things. I am honored to be a member of the International Fluid Power Hall of Fame. Over the span of 20 years, I have written articles for magazines and consider myself a specialist in control theory. While I am skilled in mathematics, I understand that I cannot defy the laws of physics, especially if the mass is too large. If you can master pneumatics, then hydraulics becomes manageable, but there are still constraints. 

I utilize the PneuMove2 test system to evaluate hydraulic control algorithms, which can be challenging due to the significant compressibility of air in pneumatics. My YouTube Channel is a valuable resource for those interested in control theory. Despite my retirement and current location in Panama, where I now reside, I am less active on forums as I am often camping without internet access. 

Others at Delta Motion are expected to pick up where I left off. Rest assured, I am confident that we have the optimal solution. Inquiring about the RMC75E-AA1(1)EXP70-A2 on the Delta website, I am uncertain if the expansion module is necessary as the RMC75 datasheet suggests the AA1 axis card already accepts an analog signal. 

The EXP70 module, however, is vital for torque limitation, with the main channel dedicated to position and speed control. While I am not up to date on all the available options, I would recommend obtaining a main module equipped with an SSi input for an SSI Temposonc or Balluff rod. If in doubt, contacting Delta Motion tech support is advisable, ensuring a servo quality valve capable of providing oil flow to both sides of a cylinder piston for force adjustments. It's essential that the spool has no overlap and offers a linear performance. Cylinder size does matter, with a 2-inch diameter possibly sufficient, but further details would be needed for accurate sizing. If the Delta team encounters challenges, they can always reach out to me for support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Of course. How quickly it can switch between different states? The speed at which it can accelerate or decelerate. It seems like Google recognizes you for your expertise in natural frequency. I am a member of the International Fluid Power Hall of Fame and have been writing magazine articles for over 20 years. I consider myself a specialist in control theory. While I can work wonders with math, I can't defy the laws of physics. If you have a grasp on pneumatics, then hydraulics should be straightforward, although there are limitations. 

One of my test systems, PneuMove2, is used for testing hydraulic control algorithms. Managing pneumatic control can be challenging due to the high compression of air. If you're interested in control theory, my YouTube channel offers valuable content. I'm currently retired and residing in Panama, contemplating a permanent move. I'm not as active on forums as before, often spending my time camping without internet access.

Other team members at Delta Motion are expected to pick up where I left off. I firmly believe we have the best solution. On the Delta website, I inquired about a quote for the RMC75E-AA1(1)EXP70-A2. Although I initially thought the expansion module was necessary, the RMC75 datasheet indicates that the AA1 axis card can accept an analog signal without it. 

The EXP70 module is essential for torque limitations, with the main channel focused on position/speed control. I recommend considering a main module with an SSi input for a SSI Temposonc or Balluff rod. For specific needs, I would suggest consulting Delta Motion tech support for a servo valve capable of flowing oil on both sides of a cylinder piston. The spool should be non-overlapping and linear in design, with size playing a crucial role. A 2-inch diameter cylinder might suffice, but more information would be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>@Peter Nachtwey, your insights are truly remarkable! I appreciate the valuable advice and I am currently in touch with Jason Palmer who is providing great assistance. I will now give you some space to enjoy your retirement, which sounds like a lot of fun! I am now delving deep into your YouTube channel and I am amazed that I hadn't come across it earlier - it's incredibly informative. Thank you once again, Chuck.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For my project, I implemented Parker Hydraulic Servo controllers, which proved to be extremely efficient. The main issues encountered were primarily with the valves, rather than the control system, particularly with the Compax3 model. Interestingly, I recently discovered an upgraded option available: Servo Drives by Parker Hannifin.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PreLC mentioned using Parker Hydraulic Servo controllers in a project and found them to be highly effective. The only issues encountered were with valves, not the control, specifically the Compax3. However, there appears to be an upgrade option available: Servo Drives from Parker Hannifin. While Parker products are renowned for their quality, I have experienced long lead times when ordering Parker parts such as VFDs, servo motors/drives, and accessories. This has deterred me from using Parker products in the future. It seems that different divisions within the company may have varying lead times; perhaps the hydraulics division operates more efficiently than the motors and drives division. Have you noticed any improvements in lead times for Parker's hydraulic products?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I must admit, I am quite fortunate as I usually have the privilege of being at the front of the line for most products, so I have not experienced any delays in lead times.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to enhance its performance, I am considering upgrading the system with ballscrews and a servo motor. However, this would require significant physical modifications. Therefore, I am currently on the lookout for an alternative that closely matches the dimensions of the current cylinders. Despite conducting a thorough search, I have not been able to find any electric linear actuators that meet the necessary requirements in terms of speed, force, and precision.

The ideal electric linear actuator should be capable of delivering a closing force of at least 1500lbf/6700N, complete a full open/close cycle (20”/500mm total travel) in approximately 2 seconds, and be able to position itself accurately within +/- 1/32 inches/1mm. 

In a similar application with comparable loads but longer strokes (~1.5m) and faster travel times, we experienced similar levels of accuracy. Despite encountering some minor deviations, the overall performance was satisfactory. I would suggest considering Parker as a potential option, provided that lead times can be determined.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PreLC shared their positive experience using Parker Hydraulic Servo controllers for a project, noting their effectiveness compared to potential issues with valves. Specifically, the Compax3 system stood out. However, an upgrade is now available in the form of Servo Drives from Parker Hannifin. Approximately a decade ago, Parker approached PreLC to develop a controller or enhance their existing one, but the offer was declined. Parker later acknowledged struggles with understanding the RMC, a challenge easily overcome by PreLC's advanced algorithms that surpass traditional PID methods. As a result, outdated models like M02AS and HYD02 are now obsolete, leading to a partnership with Rockwell as an Automation Partner. PreLC's innovative solutions have even led to a collaboration with Parker, allowing their dealers to distribute PreLC's controllers. While Parker's DF1 and DF3 valves are highly regarded, other reputable valve manufacturers include Bosch, Moog, Santest, and Yuken – emphasizing the importance of using Linear spools. For specialized applications like six degrees of freedom, Star Hydraulic valves are preferred by PreLC. With over 20 years of experience, PreLC has contributed numerous articles to publications such as Power and Motion, formerly Hydraulics and Pneumatics and Machine Design. These articles can be accessed on Delta Motion servers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the limitations of using air as a medium for precise and consistent positioning in linear motion control systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Air can have limitations in achieving precise and consistent positioning due to factors such as compressibility, varying force/load conditions, and lack of comprehensive control algorithms like PID loops for fine-tuning positioning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the challenges faced when considering retrofitting a pneumatic system with ballscrews and servos for improved linear motion control?</h4>
<p class='text-muted'><strong>Answer:</strong> - Retrofitting a pneumatic system with ballscrews and servos for precise linear motion control can be challenging due to the extensive physical modifications required, such as changing the form factor and integrating new components into the existing setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What criteria should be considered when searching for alternative solutions to pneumatic cylinders in linear motion control applications?</h4>
<p class='text-muted'><strong>Answer:</strong> - When searching for alternative solutions to pneumatic cylinders, factors to consider include speed, force, accuracy requirements, total travel distance, closing force, and positioning accuracy specifications to ensure compatibility with the application's needs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Where can one begin their search for suitable products or recommendations in the field of hydraulic solutions for linear motion control?</h4>
<p class='text-muted'><strong>Answer:</strong> - One can start their search for suitable hydraulic solutions for linear motion control by exploring manufacturers, suppliers, and distributors specializing in servo hydraulics and hydraulic positioning systems. Additionally, consulting with experts in the field or attending industry-specific trade shows can provide valuable insights and recommendations.</p>
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
