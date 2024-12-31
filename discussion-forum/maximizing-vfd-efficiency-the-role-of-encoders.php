
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apologies in advance for the lengthy post, but its essential to provide some context. I am employed at a facility equipped with numerous Variable Frequency Drives (VFDs) in various applications, mainly within web handling and extruder machinery. The predominant VFD brands used are Allen Bradley (1336 and PF755) and">
    <meta name="keywords" content="vfd efficiency optimization, encoders in vfd systems, vfd encoder benefits, closed-loop vfd systems, allen bradley pf755 drives, ethernet/ip control in vfds, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/maximizing-vfd-efficiency-the-role-of-encoders">
    <title>Maximizing VFD Efficiency: The Role of Encoders | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Maximizing VFD Efficiency: The Role of Encoders | Oxmaint Community">
    <meta property="og:description" content="Apologies in advance for the lengthy post, but its essential to provide some context. I am employed at a facility equipped with numerous Variable Frequency Drives (VFDs) in various applications, mainly within web handling and extruder machinery. The predominant VFD brands used are Allen Bradley (1336 and PF755) and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/maximizing-vfd-efficiency-the-role-of-encoders">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Maximizing VFD Efficiency: The Role of Encoders | Oxmaint Community">
    <meta name="twitter:description" content="Apologies in advance for the lengthy post, but its essential to provide some context. I am employed at a facility equipped with numerous Variable Frequency Drives (VFDs) in various applications, mainly within web handling and extruder machinery. The predominant VFD brands used are Allen Bradley (1336 and PF755) and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/maximizing-vfd-efficiency-the-role-of-encoders"
      },
      "headline": "Maximizing VFD Efficiency: The Role of Encoders",
      "description": "Apologies in advance for the lengthy post, but its essential to provide some context. I am employed at a facility equipped with numerous Variable Frequency Drives (VFDs) in various applications, mainly within web handling and extruder machinery. The predominant VFD brands used are Allen Bradley (1336 and PF755) and",
      "author": {
        "@type": "Person",
        "name": "TPress"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">Maximizing VFD Efficiency: The Role of Encoders</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TPress</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">511</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">104</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Apologies in advance for the lengthy post, but it's essential to provide some context. I am employed at a facility equipped with numerous Variable Frequency Drives (VFDs) in various applications, mainly within web handling and extruder machinery. The predominant VFD brands used are Allen Bradley (1336 and PF755) and Parker/SSD (690+ and 890), with power outputs ranging from 2HP to 500HP, mostly falling within the 5-20HP range. 

The majority of VFDs operate in a closed-loop system, utilizing either a load cell or pressure transducer for feedback. In our setup, feedback instruments are typically directly connected to the drive, with the Programmable Logic Controller (PLC) supplying speed references. An encoder is commonly installed on each drive, however, we have encountered challenges with this configuration. Issues include reliance on outdated drive hardware, software compatibility constraints, and complexities in troubleshooting due to dual control components.

To address these issues, we have transitioned to using Allen Bradley PF755 drives controlled entirely via Ethernet/IP by the PLC. This setup simplifies future upgrades and maintenance, consolidates control within the PLC for easier management of Proportional-Integral-Derivative (PID) loops, and does not appear to impact process performance negatively compared to direct feedback wiring to the drive.

Now, the question arises - do we still require the encoders in this setup? What benefits do they provide, considering the fast PLC scan times and Ethernet/IP communication capabilities? Furthermore, how does speed control improve in drives with fixed setpoints when utilizing a fixed/open-loop control method? These questions are crucial for optimizing our system efficiency and performance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Having worked in the printing industry years ago, I can provide some insight on the 1336's and Eurotherm drives, which were considered top-of-the-line back in the day. The Eurotherms could also be utilized as a mini PLC with pre-built control blocks and PID options, significantly improving reaction time and process control. This made them a popular choice in the printing industry. While PLCs have advanced with fast speeds and large memory capacities, it is still essential to thoroughly study the system before incorporating them to ensure optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The level of precision required for controlling each motor's speed/torque is essential. The encoder plays a crucial role in allowing the drive to maintain a close loop control, ensuring tight regulation of the motor's speed and torque. This level of control is particularly important in applications such as web handling, where precision is key for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My intuition suggests that replacing the encoders could be a risky move, as having an abundance of data can actually be beneficial if used effectively. The main challenges seem to lie in the maintenance of these systems, particularly due to their different operating systems. It would be wise to explore different options and consider whether removing the encoders is a feasible solution, especially considering the potential optimization of the system's mechanics by the PID system. Conducting an experiment in the short term is acceptable as long as risks are carefully managed and intentions are clearly communicated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mandel314159</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bkottaras mentioned: While my background is in the printing industry from years ago, I can provide some insight. Back then, the 1336's and Eurotherm drives were considered top-of-the-line. The Eurotherms also acted as a mini PLC with built-in blocks for control, PID's, and more. This technology greatly improved reaction time and process control, hence its widespread use in the printing industry. Despite the advancements in PLC speed and memory, I urge caution when considering a switch without thorough system study. Our journey to where we are today involved upgrading several lines with full PLC control of the drives, a successful endeavor thanks to the flexibility of plastic film compared to paper. With the assistance of a knowledgeable integrator specializing in web handling, we were able to implement innovative FBs for winders and tension control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TPress</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Mandel314159, the main challenges in using these drives seem to revolve around system maintenance, particularly due to their varied operating systems. This is precisely the reason why I raised this question.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TPress</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing responses and consulting with our on-site integrator during a drive upgrade, it was clarified that encoders may not be necessary at higher motor speeds for effective control, according to the design engineer. However, it was acknowledged that at lower speeds, the drives may struggle to accurately regulate motor speed, resulting in erratic behavior as the PID continuously corrects for feedback oscillations. This realization led to a reflection on instances where encoder feedback was disabled due to various constraints, such as parts availability or downtime, which proved successful in applications with high motor speeds or extended tension zones where imprecision could be mitigated by the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TPress</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to remember that the most costly aspect of operating a press is the start up and shut down processes. Once it's up and running, everything runs smoothly. Typically, speeds are slower during these initial phases. Don't count on your IT department when the expenses start to accumulate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bkottaras mentioned that the primary cost concern with a press is the expenses associated with starting up and shutting down the machine. Once the press is up and running, operations should run smoothly, albeit at slower speeds during these transitions. It's likely that IT support may not be readily available when faced with mounting bills. I concur and believe that utilizing encoders will be the best approach. I had not considered the necessity of a second closed loop between the drive and the motor to ensure that the controlled loop functions as intended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TPress</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you located in Davenport near the riverbank? Explore the scenic riverfront of Davenport today.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Located just a short distance to the north, you will find Clinton.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TPress</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I won't disclose specific details, but I did spend some time at a scenic river location around 20 years ago.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems my communication was not sufficiently ambiguous.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TPress</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know if Komori is still in business?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bkottaras commented, "I have a feeling your IT department won't be able to handle the increasing bills." Upon reading the original poster's initial message, I couldn't help but wonder why they are still using outdated XP systems in their infrastructure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
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
<h4 class='text-dark'>FAQ: 1. Do we still need encoders in a VFD setup controlled entirely via Ethernet/IP by the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the use of encoders may not be essential in such a setup due to fast PLC scan times and Ethernet/IP communication capabilities, they can still provide benefits like enhanced speed control accuracy and fault detection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What benefits do encoders provide in a VFD system, especially with advanced control methods like PID loops managed by the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Encoders can offer precise speed feedback, aiding in maintaining accurate speed control and improving overall system performance. They also assist in fault detection and troubleshooting, contributing to increased efficiency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How does speed control improve in drives with fixed setpoints when utilizing a fixed/open-loop control method alongside encoders?</h4>
<p class='text-muted'><strong>Answer:</strong> - Incorporating encoders in drives with fixed setpoints can enhance speed control accuracy and responsiveness, ensuring that the system maintains the desired speed levels more effectively. This can lead to improved performance and efficiency in various applications.</p>
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
