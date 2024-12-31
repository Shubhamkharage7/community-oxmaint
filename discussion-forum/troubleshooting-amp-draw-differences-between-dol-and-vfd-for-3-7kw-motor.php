
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My motor with a power rating of 3.7kW typically draws around 5 amps when operating on Direct Online (DOL) starting, while running with a Variable Frequency Drive (VFD) at maximum speed causes it to draw 12.5 amps.">
    <meta name="keywords" content="troubleshooting amp draw, dol vs vfd, 7kw motor, motor amp draw, variable frequency drive, direct online starting, motor power rating, motor operating current, vfd amp draw, motor efficiency, electrical motor">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-amp-draw-differences-between-dol-and-vfd-for-3-7kw-motor">
    <title>Troubleshooting Amp Draw Differences between DOL and VFD for 3.7kW Motor | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Amp Draw Differences between DOL and VFD for 3.7kW Motor | Oxmaint Community">
    <meta property="og:description" content="My motor with a power rating of 3.7kW typically draws around 5 amps when operating on Direct Online (DOL) starting, while running with a Variable Frequency Drive (VFD) at maximum speed causes it to draw 12.5 amps.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-amp-draw-differences-between-dol-and-vfd-for-3-7kw-motor">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Amp Draw Differences between DOL and VFD for 3.7kW Motor | Oxmaint Community">
    <meta name="twitter:description" content="My motor with a power rating of 3.7kW typically draws around 5 amps when operating on Direct Online (DOL) starting, while running with a Variable Frequency Drive (VFD) at maximum speed causes it to draw 12.5 amps.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-amp-draw-differences-between-dol-and-vfd-for-3-7kw-motor"
      },
      "headline": "Troubleshooting Amp Draw Differences between DOL and VFD for 3.7kW Motor",
      "description": "My motor with a power rating of 3.7kW typically draws around 5 amps when operating on Direct Online (DOL) starting, while running with a Variable Frequency Drive (VFD) at maximum speed causes it to draw 12.5 amps.",
      "author": {
        "@type": "Person",
        "name": "rohit_plc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-28",
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
                <h1 class="text-white">Troubleshooting Amp Draw Differences between DOL and VFD for 3.7kW Motor</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rohit_plc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3881</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">422</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>My motor with a power rating of 3.7kW typically draws around 5 amps when operating on Direct Online (DOL) starting, while running with a Variable Frequency Drive (VFD) at maximum speed causes it to draw 12.5 amps.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How do you measure motor amps? Most people use a standard clamp-on AMP meter for this purpose. While this is suitable for Direct-On-Line (DOL) readings and provides an accurate measurement of a pure sinusoidal waveform, the output of a Variable Frequency Drive (VFD) is not sinusoidal. Depending on the VFD, the output may be a pulsed square wave or a quasi-sinusoidal waveform, which cannot be accurately measured by a clamp-on meter.

It is recommended to read the motor amps displayed on the VFD instead. When doing so, keep in mind that with DOL, you are reading full line voltage with the motor running at full rated speed (minus motor slip due to load), while with a VFD, you are reading the VFD output which can range from 6 Hz to 120Hz or more. Changes in speed will result in changes in amperage as well, depending on the load conditions.

Some people have found success in reading the line current on the input to the VFD, as it provides a true measurement of the total load (motor load + VFD power + heat loss), although it may be higher than the motor load. Understanding these readings can help in determining the total power usage. This information can be valuable for optimizing motor performance and energy efficiency in industrial applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Expanding on Gary's response, it's important to run the VFD at maximum speed. However, it's crucial to ensure that the VFD is set at the same frequency as the DOL reading, especially if your power supply is 50 Hz. Additionally, monitor the output voltage and amperage on the VFD display to ensure optimal performance. - Paul</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pal</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. I am comparing the VFD display with the clamp meter reading for amps. There seems to be a discrepancy between the two, but the reading is approximately 12 amps for the VFD and around 5 amps for the DOL system according to the clamp meter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rohit_plc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Something seems to be amiss with the electrical setup in India. Typically, the standard line voltage in India is 220 Volts 3 Phase 50Hz. A 3.7 kW motor operating at full load should draw around 12 amps with a 220 volt 3-phase power supply. When measuring the motor's amperage while connected using Direct Online (DOL) method, it is important to check all three phases simultaneously. Ideally, the amperage should be consistent across all three leads, with each phase falling within the 4 to 6 amp range.

To accurately assess the situation, it is recommended to use a clamp-on amp meter to measure the amperage of all three motor leads simultaneously. In a properly functioning system, the sum of the amperage in all three phases should be zero as they cancel each other out. However, variations in amperage readings could indicate issues such as ground faults in the motor or an ungrounded electrical system.

By measuring the amperage on each motor lead and assessing the combined amperage of all three leads simultaneously, it may be possible to identify any anomalies. It is important to consider factors like ungrounded power systems or poorly grounded systems, which can affect amperage readings and lead to discrepancies in measurements between DOL and Variable Frequency Drive (VFD) setups.

Addressing these discrepancies and ensuring proper grounding in the electrical system can help resolve any issues with amperage measurements. This methodical approach can provide insights into potential faults or issues that may be affecting the motor's performance. Happy Holidays to All!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using an encoder with the VFD, there is a possibility of encountering high current issues if the tuning is too restrictive. A simple solution is to adjust the VFD parameters to utilize volts per hertz control instead of more complex control methods. By observing if the output current returns to normal levels, you can determine if further adjustments to parameter settings are necessary. This method can help troubleshoot and resolve high current problems associated with VFD usage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lynx777</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure accurate comparison, it is important to confirm that the DOL voltage is 220VAC and the frequency is 50hz. Use the VFD display to check and match the motor voltage and frequency with the DOL values. If they do not align, adjust the VFD programming accordingly. Next, check the current using the VFD display, as clamp-on ammeters may not accurately measure PWM current. It is crucial to ensure that the motor voltage, frequency, and current are in line with the DOL specifications for proper functioning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DickDV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I came across an interesting discussion regarding which clamp meter, preferably a Fluke, would be best to use on VFD output. It was mentioned that a clamp meter with a low pass filter is necessary due to the use of PWM signals. Would the Fluke 376FC be the most suitable option for this application?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hewking</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. Why does a 3.7kW motor draw different amperage when operated with DOL and VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> - The difference in amp draw between DOL and VFD operation can be attributed to the way the motor is started and controlled. DOL starting draws a lower initial current surge compared to VFD operation, where the VFD controls the motor speed by adjusting the frequency of the power supplied.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it normal for a motor to draw higher amps when running on a VFD compared to DOL starting?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is common for a motor to draw higher amperage when running on a VFD due to the nature of how VFDs control the motor speed. The increased amp draw on a VFD is often a result of the higher frequency and voltage needed to vary the motor speed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What factors can influence the amp draw differences between DOL and VFD operation for a 3.7kW motor?</h4>
<p class='text-muted'><strong>Answer:</strong> - Various factors such as the motor load, speed control settings on the VFD, efficiency of the VFD, and the motor's design can all contribute to the differences in amp draw between DOL and VFD operation. Additionally, the type of load and application can also impact the motor's amp draw under different operating conditions.</p>
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
