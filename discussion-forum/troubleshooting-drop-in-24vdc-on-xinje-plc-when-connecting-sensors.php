
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am currently experiencing an issue with my XINJE PLC where connecting certain sensors (negative and positive) causes a drop in the PLCs 24VDC to 4-8VDC and the sensors light dims. I have attempted to replace some sensors, but the problem persists. Any suggestions would be greatly">
    <meta name="keywords" content="xinje plc troubleshooting, 24vdc drop issue, connecting sensors problem, sensor light dimming, xinje plc sensor connection, troubleshooting sensor voltage drop, 24vdc to 4-8vdc drop, sensor replacement issue">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-drop-in-24vdc-on-xinje-plc-when-connecting-sensors">
    <title>Troubleshooting Drop in 24VDC on XINJE PLC When Connecting Sensors | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Drop in 24VDC on XINJE PLC When Connecting Sensors | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am currently experiencing an issue with my XINJE PLC where connecting certain sensors (negative and positive) causes a drop in the PLCs 24VDC to 4-8VDC and the sensors light dims. I have attempted to replace some sensors, but the problem persists. Any suggestions would be greatly">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-drop-in-24vdc-on-xinje-plc-when-connecting-sensors">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Drop in 24VDC on XINJE PLC When Connecting Sensors | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am currently experiencing an issue with my XINJE PLC where connecting certain sensors (negative and positive) causes a drop in the PLCs 24VDC to 4-8VDC and the sensors light dims. I have attempted to replace some sensors, but the problem persists. Any suggestions would be greatly">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-drop-in-24vdc-on-xinje-plc-when-connecting-sensors"
      },
      "headline": "Troubleshooting Drop in 24VDC on XINJE PLC When Connecting Sensors",
      "description": "Greetings everyone, I am currently experiencing an issue with my XINJE PLC where connecting certain sensors (negative and positive) causes a drop in the PLCs 24VDC to 4-8VDC and the sensors light dims. I have attempted to replace some sensors, but the problem persists. Any suggestions would be greatly",
      "author": {
        "@type": "Person",
        "name": "Mesfin"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">Troubleshooting Drop in 24VDC on XINJE PLC When Connecting Sensors</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mesfin</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">220</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">38</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I am currently experiencing an issue with my XINJE PLC where connecting certain sensors (negative and positive) causes a drop in the PLC's 24VDC to 4-8VDC and the sensors' light dims. I have attempted to replace some sensors, but the problem persists. Any suggestions would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using 2 wire or 3 wire inputs for your sensors? It's possible that the sensors are being incorrectly connected. Additionally, it's important to determine if your PLC inputs are sinking or sourcing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the sensor is a 2-wire sensor, connect the negative wire to the analog input terminal and the 24V positive wire to the sensor's positive terminal. Avoid connecting both positive and negative wires from the sensor to the 24V power terminal that supplies power to the PLC. If you're unfamiliar with wiring diagrams, feel free to sketch a simple schematic using a basic drawing tool and share it for assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the internal power supply of the PLC is suspected to be damaged, consider using an external power source to supply energy to the sensors. This troubleshooting step can help determine if the issue lies with the internal power supply of the programmable logic controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing issues with sensors in your PLC system, it may be due to using the wrong sensor type (PNP vs. NPN), incorrect wiring, or overloading the PLC power supply. Consider using an external power supply for better performance. Using PLC power for sensors and outputs can lead to problems, which is why many prefer external power sources. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Correctly identifying the sensor type - whether it's PNP or NPN - is crucial for effective troubleshooting. Utilizing color-coded wires can make this process easier. When testing the unit, focus on connecting the switch as the input and LED lamps or a buzzer as the output, while removing unnecessary input/output connections.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fuhrer12</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is recommended to avoid using the PLC 24V power source for any external devices or small components, such as indicator lights or relays. Instead, always opt for a dedicated 24VDC power supply with sufficient wattage to support sensors, relays, contactors, valves, indicators, HMIs, and other equipment in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Question: Why is there a drop in the XINJE PLC's 24VDC to 4-8VDC when connecting certain sensors?
Answer: The drop in voltage could be due to a possible overload or short circuit caused by the sensors connected to the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What could be causing the sensors' light to dim when connected to the XINJE PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The dimming of the sensors' light could indicate a voltage drop issue, potentially caused by a mismatch in power requirements between the sensors and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: I have already replaced some sensors, but the issue persists. What other troubleshooting steps can I take?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Apart from sensor replacement, you can try checking the wiring connections, ensuring proper grounding, and verifying the power supply's capacity to handle the sensors' requirements.</p>
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
