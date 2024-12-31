
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am using an incremental encoder with a high-speed counter on a MicroLogix 1500. I recently acquired two new inkjet printers and initially planned to send a pulse to signal them to print. However, I have learned that the printers can also accept an encoder square wave">
    <meta name="keywords" content="incremental encoder, high-speed counter, micrologix 1500, inkjet printers, pulse signal, encoder square wave, speed adjustments, plc hsp, multiple devices, signal distribution, close proximity, device control, encoder output, inkjet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/using-incremental-encoder-output-to-control-multiple-devices">
    <title>Using Incremental Encoder Output to Control Multiple Devices | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Using Incremental Encoder Output to Control Multiple Devices | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am using an incremental encoder with a high-speed counter on a MicroLogix 1500. I recently acquired two new inkjet printers and initially planned to send a pulse to signal them to print. However, I have learned that the printers can also accept an encoder square wave">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/using-incremental-encoder-output-to-control-multiple-devices">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Using Incremental Encoder Output to Control Multiple Devices | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am using an incremental encoder with a high-speed counter on a MicroLogix 1500. I recently acquired two new inkjet printers and initially planned to send a pulse to signal them to print. However, I have learned that the printers can also accept an encoder square wave">
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
        "@id": "https://community.oxmaint.com/discussion-forum/using-incremental-encoder-output-to-control-multiple-devices"
      },
      "headline": "Using Incremental Encoder Output to Control Multiple Devices",
      "description": "Hello everyone, I am using an incremental encoder with a high-speed counter on a MicroLogix 1500. I recently acquired two new inkjet printers and initially planned to send a pulse to signal them to print. However, I have learned that the printers can also accept an encoder square wave",
      "author": {
        "@type": "Person",
        "name": "mp91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-07",
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
                <h1 class="text-white">Using Incremental Encoder Output to Control Multiple Devices</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mp91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3748</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">418</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am using an incremental encoder with a high-speed counter on a MicroLogix 1500. I recently acquired two new inkjet printers and initially planned to send a pulse to signal them to print. However, I have learned that the printers can also accept an encoder square wave for speed adjustments. Can I simply connect the encoder outputs to the PLC HSP and then distribute the signal to both printers in series? Any assistance on this issue would be greatly appreciated. Note that all devices are located within close proximity to each other.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is definitely feasible. The ABZ outputs from encoders typically result in a voltage signal. As long as the encoder output is not overwhelmed by the power drawn from the three sensors, everything should work smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aabeck</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Aabeck, it is feasible for the ABZ outputs of encoders to provide a voltage signal, as long as they are not overloaded by three sensors drawing power. Our customers regularly engage in this practice. However, a potential issue may arise with the encoder inputs, typically due to a terminating resistor in the sensor. The encoder can likely support one encoder, but not three, as the terminating resistors would be in parallel, resulting in 1/3 of the usual terminating resistance. Refer to the encoder inputs documentation to check for an option to disable the terminating resistor, except on the final encoder input. In our scenario, the encoder input has a 120 ohm impedance for RS-422. Nevertheless, it can be adjusted to a 90K ohm impedance when connecting motion controllers in a daisy chain configuration to a single encoder.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Most encoder signals have low current ratings. It is important to compare the current drawn by the printer inputs and the micrologix input to the rated current of the encoder signal. If the encoder cannot handle the current draw and quadrature signal is not required on any device, try connecting channel A to one printer and channel B to the other for better compatibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you everyone for your input. The encoder outputs are capable of handling up to 40mA. It appears that the High-Speed Counter (HSC) on the microcontroller is only monitoring input A. I will experiment with connecting the two printers to input B to see how it performs. Unfortunately, the printing technicians have been unable to provide me with information on the current consumption of their printer inputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mp91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential to use a common setting across all three devices for seamless operation. This simple yet crucial step can prevent potential issues caused by isolated settings. Can someone clarify why process line labeling bottles would be done manually instead of using a PLC control system for more reliable results? Is it possible to process the data and activate the printer based on logic?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>_Dock_</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring minds may wonder why synchronization is necessary for multiple input devices to be in phase, a common practice in the past but less so now with advancements in technology. Previously, industries would use one controller per machine center, such as in saw mills where multiple sawing stations are synchronized to a feed chain encoder. This synchronization ensures that everything operates in unison, starting with a trigger from a photo cell at the leading edge of the log or wood.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of process line labeling bottles, the use of PLC control for printer triggering and message length calculation is a topic of debate. While some argue for the reliability of PLC control, others advocate for utilizing trigger signals to activate printers like videojet 1580's and synchronize printing based on encoder pulses. With printers being able to adapt to varying speeds of production lines (up to 100 meters/minute) and different product speeds without constant speed adjustments, the debate on the most efficient labeling method continues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mp91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In situations where I needed to isolate encoder signals and revive square waves for outputs, I found these Baumer HEAG 151, 152, 153, 154 signal processing modules to be highly useful. Specifically designed for this purpose, they are effective in preventing signal degradation between the encoder and PLC. Check them out at https://www.baumer.com/gb/en/products/signal-processing/heag-151-152-153-154/p/29214 for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you experimented with the Northstar RIM SS2 encoder signal splitter module? This device is known for its impressive functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ppatil</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I use an incremental encoder output to control multiple devices simultaneously?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can use the encoder output to control multiple devices by distributing the signal to each device in series.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to adjust the speed of inkjet printers using an encoder square wave signal?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, inkjet printers can accept encoder square wave signals for speed adjustments in addition to pulse signals for printing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I connect the encoder outputs to a PLC and distribute the signal to multiple printers?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can connect the encoder outputs to the PLC's high-speed counter input and then distribute the signal to multiple printers in series.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any considerations to keep in mind when connecting multiple devices in close proximity to each other?</h4>
<p class='text-muted'><strong>Answer:</strong> - When connecting devices in close proximity, ensure proper signal distribution and interference mitigation measures are in place to prevent any issues with signal integrity.</p>
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
