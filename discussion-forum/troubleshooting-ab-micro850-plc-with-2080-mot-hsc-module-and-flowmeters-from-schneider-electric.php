
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am in possession of a Micro 850 PLC with a 2080-MOT-HSC module, which is being supplied data by two flowmeters from Schneider Electric using IMT31 converters. The flowmeters are transmitting pulse signals through D/D- connections, while I have currently connected them to the HSC module using A/A-">
    <meta name="keywords" content="ab micro850 plc, 2080-mot-hsc module, flowmeters, schneider electric, imt31 converters, pulse signals, hsc module, wiring configuration, logic program, hsce_cfg, hsce blocks, 24v">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-micro850-plc-with-2080-mot-hsc-module-and-flowmeters-from-schneider-electric">
    <title>Troubleshooting AB Micro850 PLC with 2080-MOT-HSC Module and Flowmeters from Schneider Electric | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting AB Micro850 PLC with 2080-MOT-HSC Module and Flowmeters from Schneider Electric | Oxmaint Community">
    <meta property="og:description" content="Hello, I am in possession of a Micro 850 PLC with a 2080-MOT-HSC module, which is being supplied data by two flowmeters from Schneider Electric using IMT31 converters. The flowmeters are transmitting pulse signals through D/D- connections, while I have currently connected them to the HSC module using A/A-">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-micro850-plc-with-2080-mot-hsc-module-and-flowmeters-from-schneider-electric">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting AB Micro850 PLC with 2080-MOT-HSC Module and Flowmeters from Schneider Electric | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am in possession of a Micro 850 PLC with a 2080-MOT-HSC module, which is being supplied data by two flowmeters from Schneider Electric using IMT31 converters. The flowmeters are transmitting pulse signals through D/D- connections, while I have currently connected them to the HSC module using A/A-">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ab-micro850-plc-with-2080-mot-hsc-module-and-flowmeters-from-schneider-electric"
      },
      "headline": "Troubleshooting AB Micro850 PLC with 2080-MOT-HSC Module and Flowmeters from Schneider Electric",
      "description": "Hello, I am in possession of a Micro 850 PLC with a 2080-MOT-HSC module, which is being supplied data by two flowmeters from Schneider Electric using IMT31 converters. The flowmeters are transmitting pulse signals through D/D- connections, while I have currently connected them to the HSC module using A/A-",
      "author": {
        "@type": "Person",
        "name": "RGriffin"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">Troubleshooting AB Micro850 PLC with 2080-MOT-HSC Module and Flowmeters from Schneider Electric</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RGriffin</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">683</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">36</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am in possession of a Micro 850 PLC with a 2080-MOT-HSC module, which is being supplied data by two flowmeters from Schneider Electric using IMT31 converters. The flowmeters are transmitting pulse signals through D/D- connections, while I have currently connected them to the HSC module using A/A- and B/B- connections. I am unsure if 24VDC and 0VDC connections are required for the O/O- terminals, and if anything needs to be connected to the Z terminals. Although the flowmeters are functioning properly, I am not receiving any data through the HSCE_CFG or HSCE blocks in the logic program. I have attached my wiring configuration and code for reference. Any assistance would be greatly appreciated. Please note that the code provided is not yet complete, as I encountered issues with the flowmeters during installation.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I connected my A- and B- wires to the -24VDC at the main power terminals, not sure if that matters. Using the PWM/PTO outputs of a MicroLogix 1100 with its -24VDC linked to the same power source, I was able to operate the 2080-MOT-HSC. I recall the HSC instruction being a bit tricky to configure with the right input parameters for counting. It must also be set up in the main PLC tab ("Micro820"). To learn more, you can check out various videos on platforms like YouTube; @Tim Wilborne's video should help you get started.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are dealing with passive flowmeters, it is crucial to source 24 for proper functioning. Have you properly connected the 24 to the wires from the source or have you linked them elsewhere? Consider running your signal wires to terminal blocks with power connections before connecting them to the A and B positive terminals. This will prevent any potential damage to the controller. Also, if you are uncertain about the input wiring, referring to the manual may provide clarity. Feel free to reach out if you need further assistance in this regard.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RGriffin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have integrated a Schneider Electric flowmeter IMT31 converter with a D/D- pulsed output into the logic of the 2080-MOT-HSC. Despite following the provided configuration instructions, the flowmeters are not registering any readings. Flowmeter one is connected to A+/A- and flowmeter two is connected to B+/B-, but there seems to be an issue with receiving the signal input. Could I possibly be overlooking a connection? It is important to note that the pulse output is 'passive' and requires external power, meaning that the loop must be powered from the PLC. This information is crucial for ensuring proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RGriffin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there is an output on the final rung of your program without a corresponding variable. This issue may prevent your program from running successfully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I must clarify that the code is currently incomplete, specifically at the flowmeter section. Please note that not all of the code has been disclosed, as it contains proprietary information and is not pertinent to resolving inquiries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RGriffin</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Disclaimer: I am not a professional electronics technician, but as a hobbyist, I offer some insights that may be useful to you when considering the information provided here. Dealing with DC (direct current) should be relatively uncomplicated. Instead of relying on the High-Speed Counter (HSC), you have the option to monitor the HSC inputs directly within the PLC program using __IO_P1_DI_00/_01/_02 (A/B/C) to check for a detection of a +24VDC discrete signal. My setup involved using the MicroLogix 1100 output to power A+, thus the MicroLogix was responsible for providing the +24VDC. It is assumed that your passive IMT31A is connected in a manner similar to the illustrations shown below.

The configuration depicted (on the left) in the IMT31A manual essentially functions as a voltage divider, with A- grounded at 0V and a fixed resistance placed between A- and A+. This setup can also be referred to as a pull-down resistor. The IMT31A has a "resistor" positioned between A+ and +24VDC, with IMT31A's D- linked to A+ and IMT31A's D connected to +24VDC. A+ reads/detects the "divided" voltage between the "resistances," as the IMT31A's "resistance" fluctuates between ~∞ and ~0. This concept aligns with basic principles from Physics and Electrical Engineering courses.

The approach outlined in the red box on the right side is in line with the A-B manual; the fixed-resistance R could also be referred to as a pull-up resistor. Addressing RGriffin's concern about potentially damaging the controller, it's worth noting that A+ can handle a +24VDC signal provided A- is at 0V. The fixed-resistance resistors serve as current limiters in both scenarios, but considering the 2080-MOT-HSC has an impedance of ~3.6kΩ, the resistors shown in the diagrams may be unnecessary. By eliminating the resistors, the circuits become essentially identical. I have personally tested the HSC by directly connecting a bare wire from +24VDC on the Micro820 to A+ without experiencing any adverse effects, aside from a minor spark.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Do I need to connect 24VDC and 0VDC to the O/O- terminals on the 2080-MOT-HSC module for flowmeter operation?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the 24VDC and 0VDC connections are required for proper operation of the flowmeters through the HSC module. Ensure these connections are correctly wired.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should be connected to the Z terminals on the 2080-MOT-HSC module when using flowmeters with pulse signals?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Z terminals are usually not used for flowmeter applications with pulse signals. Focus on the A/A- and B/B- connections for receiving the pulse signals from the flowmeters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why am I not receiving any data through the HSCE_CFG or HSCE blocks in the logic program despite the flowmeters functioning properly?</h4>
<p class='text-muted'><strong>Answer:</strong> - Check your logic program for any errors or misconfigurations related to the HSCE_CFG or HSCE blocks. Ensure that the HSC module is correctly configured to receive and process the pulse signals from the flowmeters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot issues with flowmeters connected to the Micro850 PLC and 2080-MOT-HSC module?</h4>
<p class='text-muted'><strong>Answer:</strong> - Verify the wiring connections, troubleshoot the logic program for any errors, and double-check the configuration settings on the HSC module. It might also be helpful to consult the documentation provided by Schneider Electric for troubleshooting guidance.</p>
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
