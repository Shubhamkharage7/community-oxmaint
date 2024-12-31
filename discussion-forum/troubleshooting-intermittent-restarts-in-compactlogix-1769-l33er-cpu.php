
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking recommendations for troubleshooting an issue with a customers Compactlogix rack. The CPU model is 1769-L33ER, and the problem is that it intermittently restarts as if the power has been reset. Sometimes it will resume operation, but often it continues cycling through the startup sequence with">
    <meta name="keywords" content="troubleshooting, intermittent restarts, compactlogix 1769-l33er, cpu, compactlogix rack, restart issue, power reset, startup sequence, leds, unresponsive system, power supply, faulty module">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-restarts-in-compactlogix-1769-l33er-cpu">
    <title>Troubleshooting Intermittent Restarts in Compactlogix 1769-L33ER CPU | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Intermittent Restarts in Compactlogix 1769-L33ER CPU | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking recommendations for troubleshooting an issue with a customers Compactlogix rack. The CPU model is 1769-L33ER, and the problem is that it intermittently restarts as if the power has been reset. Sometimes it will resume operation, but often it continues cycling through the startup sequence with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-restarts-in-compactlogix-1769-l33er-cpu">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Intermittent Restarts in Compactlogix 1769-L33ER CPU | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking recommendations for troubleshooting an issue with a customers Compactlogix rack. The CPU model is 1769-L33ER, and the problem is that it intermittently restarts as if the power has been reset. Sometimes it will resume operation, but often it continues cycling through the startup sequence with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-restarts-in-compactlogix-1769-l33er-cpu"
      },
      "headline": "Troubleshooting Intermittent Restarts in Compactlogix 1769-L33ER CPU",
      "description": "Hello, I am seeking recommendations for troubleshooting an issue with a customers Compactlogix rack. The CPU model is 1769-L33ER, and the problem is that it intermittently restarts as if the power has been reset. Sometimes it will resume operation, but often it continues cycling through the startup sequence with",
      "author": {
        "@type": "Person",
        "name": "SASControls"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-26",
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
                <h1 class="text-white">Troubleshooting Intermittent Restarts in Compactlogix 1769-L33ER CPU</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>SASControls</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">933</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">131</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking recommendations for troubleshooting an issue with a customer's Compactlogix rack. The CPU model is 1769-L33ER, and the problem is that it intermittently restarts as if the power has been reset. Sometimes it will resume operation, but often it continues cycling through the startup sequence with the LEDs. Initially, the entire Compactlogix system was unresponsive despite 120VAC being present at the power supply. After replacing the power supply, the system was revived, but the recurring restart issue began. One possibility is a faulty module in the rack affecting the chassis voltage. We attempted replacing the processor and other cards in the rack to no avail, except for two modules (1769-OF4VI in slot 7-8) awaiting replacement. In the meantime, we are exploring other potential causes for the problem. Periodically, the system resumes normal operation with no significant faults logged. Have you encountered similar issues or do you have suggestions for further investigation?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you provide the model number and location of the power supply within the rack, specifying the slot numbers in between which it is situated?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>clintm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User clintm inquired about the power supply model number and its placement in the rack, specifically between which slot numbers it is positioned. The model number is 1769-PA4 and it is located in the second slot, with the CPU being the only module on its left side.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SASControls</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After replacing the power supply, what were the results? Did the device successfully power up and for how long did it run? What is the current behavior of the device - does it power up only to reboot after 2 or 3 minutes? Please provide an update on the device's status. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After replacing the power supply, the system was able to run normally. However, it now experiences frequent reboots throughout the day. Sometimes, cycling power to the electrical cabinet resolves the issue temporarily, but other times the problem persists even after the power cycle. James Mcquade is seeking assistance in determining the cause of this recurring rebooting issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SASControls</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By methodically investigating these possible triggers, you can pinpoint and address the problem leading to the unexpected restarts of your CompactLogix 1769-L33ER PLC. This process will help troubleshoot any issues that may be causing the PLC to reboot unexpectedly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>henry5</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to confirm the stability of the incoming power source. Voltage fluctuations or interference from nearby systems in the facility can lead to issues like sporadic starting and stopping. Utilizing a UPS before the PLC power supply may help address any voltage spikes, drops, or noise disruptions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Derryl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Derryl suggested checking the stability of the incoming power source as potential voltage or noise issues could be causing the problem of something starting and stopping abruptly, resulting in voltage spikes or drops. To troubleshoot, consider installing a UPS before the PLC power supply. Although there is currently no UPS in place, a logging meter was connected last week to monitor any events during the PLC issue. Stay tuned for updates as we investigate further details at the customer site.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SASControls</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out this video demonstrating the operation of the machine. The Compactlogix 1769-L33ER is experiencing intermittent shutdowns, with a solid red OK light before automatically restarting after 20-30 seconds. However, it continues to shut down after running for only 30-40 seconds. Watch the troubleshooting process on YouTube to see how to resolve this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SASControls</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I need advice on troubleshooting an issue with a customer's Compactlogix rack. The CPU model is 1769-L33ER, and the problem is that it sporadically restarts as if the power has been reset. Sometimes it restarts immediately and runs for a short while, but often it goes through the startup sequence with the LEDs repeatedly. Initially, the entire Compactlogix rack was unresponsive despite having power supply voltage. After replacing the power supply, the rack came back to life but this new restarting issue emerged. I suspect a faulty module in the rack may be causing the voltage drop. We tested with a new processor and replaced all other cards in the rack, but the problem persists. Two modules, 1769-OF4VI in slots 7-8, have not been replaced yet due to lack of spares. Until the new modules arrive, we are exploring other potential causes. Occasionally, the system will resume functioning with no errors in the logs. Any similar experiences or suggestions for further investigation would be greatly appreciated. Additionally, here is a video demonstrating the issue: [link to YouTube video].</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SASControls</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Fritzerton provided a link to a video demonstrating the issue with a machine that keeps shutting down and restarting. The machine shows a solid red OK light before automatically starting up again after 20-30 seconds. However, it continues to run for only 30-40 seconds before shutting down once more. The presence of the solid red OK light signifies a power boot issue, indicating a loss of power in the system. Visit youtube.com to watch the video for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to prevent a short circuit and potential overload, I would recommend removing any terminals from a card showing signs of dropping below the required voltage for proper functioning. This proactive approach can help to ensure your device stays powered up safely.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>"If you suspect a potential overload, it's important to check for any issues with the swingarm or digital output cards that could be causing a power problem. Disconnecting wires one by one from the digital output card and monitoring for any power cycling can help pinpoint the issue. Following GIT's advice, reattaching the wires one at a time can help identify which output device may be causing a voltage drop."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>saultgeorge mentioned the possibility of a module shorting out and causing an overload. To troubleshoot this issue, it is recommended to disconnect the swingarm or wires from the digital output card one at a time to identify the culprit. If the power cycling stops, reconnect the wires gradually to pinpoint the problematic output device affecting the voltage.

Which module on the field wiring could be causing this problem? Would it be the analog outputs, as they are the only ones utilizing the backplane power? Testing was done on an analog output by shorting the terminals, which did not result in any issues. The other output modules in the chassis consist of relay outputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SASControls</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>At my previous job, we had a system in place where the serial numbers of the I/O cards were synced with the PLC. If any cards were replaced or swapped out, it would cause the system to run for a few minutes, reboot, run for a few hours, then reboot again. As far as I recall, we had to unregister those cards and perform a specific task before resolving the issue. Unfortunately, I was still learning the ropes when I left the company, so I apologize for not being able to provide more insight. - James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Installing a UPS on the incoming power source is a crucial initial measure. This simple step can effectively eliminate any potential power-related problems from affecting your system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I agree with the UPS, I also find James Mcquade's suggestion intriguing. One effective way to troubleshoot is by delving into the IO tree of the processor and examining each module. Pay special attention to the "Electronic Keying" setting. If it is set to compatible, ensure that both the catalog numbers and the module revisions match or are newer. In the case of an exact match setting, the serial numbers must also be identical. If the serial numbers do not match, it may be challenging to rectify the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SASControls asked, "Which module in the field wiring could be causing such an issue? Could it be the analog outputs, as they are the only ones using the backplane power?" While testing by shorting the analog output terminals did not result in any problems, other modules in the chassis are relay outputs. In a similar incident with a 120V relay output in a new panel, a shorted hot wire caused a dip in AC power, resulting in the processor shutting down and rebooting. This power loss also affected the 24VDC when that particular output was activated in logic. So, it seems that issues with relay or digital outputs can have significant impacts on the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After replacing the power supply, James Mcquade wanted to know the outcome. Initially, the device ran smoothly for a period of time, but it is currently experiencing issues where it powers up and reboots every 2-3 minutes. This frequent cycling of power has become a concern.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AhmedKhan</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing a Compactlogix 1769-L33ER CPU to intermittently restart?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The intermittent restart issue could be caused by a faulty module in the rack affecting the chassis voltage, even after replacing the power supply and other cards in the rack.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot intermittent restarts in a Compactlogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is recommended to check for faulty modules affecting chassis voltage, replace any problematic modules, and investigate potential causes beyond the power supply and processor cards.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there specific modules known to cause restart issues in a Compactlogix rack?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In the provided discussion, the modules 1769-OF4VI in slot 7-8 were mentioned as awaiting replacement, indicating a possible connection to the intermittent restart problem.</p>
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
