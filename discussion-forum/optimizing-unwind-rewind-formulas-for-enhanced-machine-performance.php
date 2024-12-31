
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am in the process of revamping the PLC code for a machine that slices and rewinds rubber-coated fabric rolls. The current code struggles with controlling letoff tension and has various other issues. I have a precise speed feedback signal for the main pull rolls (0-400fpm) and know">
    <meta name="keywords" content="plc code optimization, machine performance enhancement, unwind rewind formulas, tension control improvement, speed feedback signal, rewind roll diameter calculation, letoff roll diameter calculation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-unwind-rewind-formulas-for-enhanced-machine-performance">
    <title>Optimizing Unwind/Rewind Formulas for Enhanced Machine Performance | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Unwind/Rewind Formulas for Enhanced Machine Performance | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am in the process of revamping the PLC code for a machine that slices and rewinds rubber-coated fabric rolls. The current code struggles with controlling letoff tension and has various other issues. I have a precise speed feedback signal for the main pull rolls (0-400fpm) and know">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-unwind-rewind-formulas-for-enhanced-machine-performance">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Unwind/Rewind Formulas for Enhanced Machine Performance | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am in the process of revamping the PLC code for a machine that slices and rewinds rubber-coated fabric rolls. The current code struggles with controlling letoff tension and has various other issues. I have a precise speed feedback signal for the main pull rolls (0-400fpm) and know">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-unwind-rewind-formulas-for-enhanced-machine-performance"
      },
      "headline": "Optimizing Unwind/Rewind Formulas for Enhanced Machine Performance",
      "description": "Greetings! I am in the process of revamping the PLC code for a machine that slices and rewinds rubber-coated fabric rolls. The current code struggles with controlling letoff tension and has various other issues. I have a precise speed feedback signal for the main pull rolls (0-400fpm) and know",
      "author": {
        "@type": "Person",
        "name": "OkiePC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-28",
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
                <h1 class="text-white">Optimizing Unwind/Rewind Formulas for Enhanced Machine Performance</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">9434</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">80</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am in the process of revamping the PLC code for a machine that slices and rewinds rubber-coated fabric rolls. The current code struggles with controlling letoff tension and has various other issues. I have a precise speed feedback signal for the "main pull rolls" (0-400fpm) and know the diameters of both the letoff and rewinder rolls when empty and full. By accurately calculating the processed stock length based on the main pull roll speed, I aim to determine the rewind roll diameter throughout the cycle. 

For example, with a roll length of 1650 feet, rewind core diameter of 3.5", and rewind full diameter of 28", the formula needs to consider the varying circumference due to fluctuations in stock thickness (0.031"). Although stock thickness can vary, I prefer not to include it in the calculation unless necessary. The accuracy of the final calculation will significantly impact the machine's performance. 

Once I devise this formula, I intend to apply the same concept to calculate the letoff roll and web rewind roll diameters. These calculations are crucial for enhancing speed and tension control to improve user experience. Currently, operators frequently need to adjust tension, resulting in speed control issues, especially with non-standard letoff cores. Unfortunately, adding a device to measure diameter is not feasible for this machine. 

Thank you for your assistance in advance. Rest assured, these enhancements will optimize the machine's operations. 

Warm regards,
Paul C.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The calculation formula is based on the area of the material, whether it is rolled up or laying flat on the floor. When flat on the floor, the cross-sectional area is determined by multiplying the length by the thickness of the material. However, when rolled up, the area can be calculated using the formula (PI/4) * (OD^2 - ID^2). To find the outer diameter (OD), you can rearrange the formula L * t = (PI/4) * (OD^2 - ID^2) and solve for OD. 

If there are variations in material thickness, an alternative method involves adding additional sensors. By using a sensor that signals once per revolution of the unwind or rewind process, you can keep track of the time between signals in your PLC. Multiplying the line speed by this time will give you a length equivalent to the circumference of the outer layer of the material. Dividing this circumference by PI will give you the diameter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Below are the equations used to calculate the dimensions of a roll of material. These equations were developed by comparing the total volume of material in the roll to that of a cylinder with the same volume. For simplicity, we assume the roll is 1 unit wide. The formulas are as follows:
Length = (Diameter^2 - Core Diameter^2) * π / (4 * Thickness)
Thickness = (Diameter^2 - Core Diameter^2) * π / (4 * Length)
Diameter = √((Length * 4 * Thickness / π) + Core Diameter^2)

Please note: This is a simultaneous post. We apologize for any confusion caused.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SimonGoldsworthy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Given the varying diameter of the roll, I need to clarify where you are sourcing the speed feedback from. Is it coming from the unwinding roll of stock or another piece of machinery pulling material from your equipment? This is crucial for maintaining consistent performance and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>panic mode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing the formula, which is primarily based on area. I realized that the main pull rolls drive, responsible for line speed feedback, controls rollers with a fixed diameter, regardless of the variable diameter letoff and rewinders. To ensure accurate results using the formula, I will gather measurements of finished rolls and calculate the average thicknesses of each type of material we use. Achieving accuracy within a few percentage points will greatly improve the machine's performance. I truly appreciate this platform as I can quickly ask questions and receive reliable answers from experienced individuals. The knowledge shared here has saved me a significant amount of time on research. Thank you for all the help! - Paul C.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing your post, I wanted to suggest considering the use of an ultrasonic sensor to measure the diameter on this machine. While adding a device for measurement may not be feasible, an ultrasonic sensor like the UC2000-30GM-IU-V1 model could potentially work on rubber materials. This sensor is teachable and provides a 4 to 20 output. For more information on how this sensor could benefit your application, you can refer to the data sheet at http://www.am.pepperl-fuchs.com/pdf/fa/documents/SC02_AnalogCurrentandVoltageOutput-p290-293.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thomas Sullens</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the plant where I work, the majority of production processes involve tension loops where materials are unwound, coated, and then rewound onto rolls or cores of varying diameters. It is crucial to maintain precise tension control in these processes. One effective way to achieve this is by installing a tension measuring transducer instead of solely relying on speed control. While cost is a consideration, investing in this technology may lead to improved efficiency and product quality. Our systems currently utilize tension feedback to control the speed of winders and unwind or pull-off rolls, resulting in exceptionally accurate results once calibrated. I highly recommend exploring this option for improved production processes. - Russ</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>russrmartin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To measure the speed of the rewind and calculate the diameter accurately, we utilize a proximity switch on a gear connected to the coreholder shaft. This data must be averaged due to the imperfections in the rolls. How precise of a measurement do you require for this process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bill4261</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully implemented the necessary calculations for the line speed, ensuring accuracy within a 3% margin. Upon measuring the finished rolls, it was found that our average stock thickness is within .002" of the specified value, although there is some variation throughout each roll. The machine layout poses challenges for the use of ultrasonic sensors, which are deemed unnecessary in this case.

This machine lacks a dancer or accumulator for speed and tension control, relying instead on Reliance Webpak DC drives. The main drive transmits a frequency signal to the letoff web drive, which internally calculates the required speed to maintain optimal tension. The PLC also sends a tension reference to this drive. Challenges lie in the existing code that controls the trim reference, but with accurate measurements of running diameters from the PLC5/15, improvements can be made to the tension trim logic.

While a tension feedback device would be beneficial, software adjustments are being prioritized. If necessary, implementing a tension feedback device will be considered for further improvement. The rewinder rolls are also powered by a WebPak drive, receiving speed references from the PLC. The rewind arms that center drive the slit stock operate at a faster speed than required, causing the individual slit rolls' cores to slip on the shafts. Pressure arms are utilized to apply variable pneumatic pressure to the cores, controlling the friction for smooth operation.

Your feedback is appreciated - Paul C.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a solution to my current dilemma involving three VFDs, but lacking a sensor to measure diameter. Any suggestions on how to tackle this? Best regards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ELGC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance visibility and receive tailored assistance, I suggest initiating a new discussion detailing the context and details of your situation. This thread has not been active since 2005.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SimonGoldsworthy explains the formulas used to calculate the dimensions of a roll of material. These equations are derived by comparing the total volume of material in the roll to that of a cylinder, using the total length, material thickness, and assuming the roll is 1 unit wide. The formulas are as follows: Length = (diameter ^ 2 - core Diameter ^ 2) * PI/(4 * Thickness), Thickness = (Diameter ^ 2 - core diameter ^ 2 ) * PI/(4 * length), Diameter = SQRT(( Length * 4 * Thickness / PI ) + core diameter^2). Please note that this information was posted simultaneously with another post. Thank you for your understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aruljothi1987</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is it important to optimize unwind and rewind formulas for machine performance?</h4>
<p class='text-muted'><strong>Answer:</strong> - Optimizing unwind and rewind formulas is crucial for achieving better speed and tension control, which ultimately enhances user experience and operational efficiency of the machine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What factors should be considered when calculating rewind roll diameter throughout the cycle?</h4>
<p class='text-muted'><strong>Answer:</strong> - Factors such as the speed feedback signal, roll lengths, core diameter, full diameter, and variations in stock thickness need to be taken into account for accurate calculations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the accuracy of the final calculation impact the machine's performance?</h4>
<p class='text-muted'><strong>Answer:</strong> - The accuracy of the calculated rewind roll diameter plays a significant role in ensuring precise tension control and speed regulation, thus directly impacting the overall performance of the machine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it necessary to include variations in stock thickness when devising the formula for calculating rewind roll diameter?</h4>
<p class='text-muted'><strong>Answer:</strong> - While variations in stock thickness can impact the accuracy of the calculation, the decision to include it depends on the level of precision required for the specific machine operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What are the challenges associated with adjusting tension and speed control, especially with non-standard letoff cores?</h4>
<p class='text-muted'><strong>Answer:</strong> - Operators often face difficulties in adjusting tension and speed control when working with non-standard letoff cores, leading to operational issues that can be mitigated through optimized formulas for roll diameter calculations.</p>
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
