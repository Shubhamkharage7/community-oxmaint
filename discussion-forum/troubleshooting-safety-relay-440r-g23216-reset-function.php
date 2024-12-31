
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, we currently have a safety relay 440R-G23216 with a reset function in our setup. In our configuration, we have bridged Y1 and Y2, with the reset button connecting one wire to S33 and another wire to S34. Additionally, S12 and S52 are connected to E-STOP buttons. Y32">
    <meta name="keywords" content="safety relay 440r-g23216, reset function, troubleshooting, setup configuration, bridged y1 and y2, reset button, wire connection, s33, s34, s12, s52, e-stop buttons, plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-safety-relay-440r-g23216-reset-function">
    <title>Troubleshooting Safety Relay 440R-G23216 Reset Function | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Safety Relay 440R-G23216 Reset Function | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, we currently have a safety relay 440R-G23216 with a reset function in our setup. In our configuration, we have bridged Y1 and Y2, with the reset button connecting one wire to S33 and another wire to S34. Additionally, S12 and S52 are connected to E-STOP buttons. Y32">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-safety-relay-440r-g23216-reset-function">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Safety Relay 440R-G23216 Reset Function | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, we currently have a safety relay 440R-G23216 with a reset function in our setup. In our configuration, we have bridged Y1 and Y2, with the reset button connecting one wire to S33 and another wire to S34. Additionally, S12 and S52 are connected to E-STOP buttons. Y32">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-safety-relay-440r-g23216-reset-function"
      },
      "headline": "Troubleshooting Safety Relay 440R-G23216 Reset Function",
      "description": "Hello everyone, we currently have a safety relay 440R-G23216 with a reset function in our setup. In our configuration, we have bridged Y1 and Y2, with the reset button connecting one wire to S33 and another wire to S34. Additionally, S12 and S52 are connected to E-STOP buttons. Y32",
      "author": {
        "@type": "Person",
        "name": "mike3475"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-20",
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
                <h1 class="text-white">Troubleshooting Safety Relay 440R-G23216 Reset Function</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3692</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">148</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, we currently have a safety relay 440R-G23216 with a reset function in our setup. In our configuration, we have bridged Y1 and Y2, with the reset button connecting one wire to S33 and another wire to S34. Additionally, S12 and S52 are connected to E-STOP buttons. Y32 (SRM01_Status) is linked to the PLC input unit. I am unsure of the response when the reset button is pressed. Does anyone have any insights on what may happen? Thank you in advance for your help!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are the e-stop button contacts connected between S12 and S52, or is S11 the source for the e-stop string with each channel string returning back to S12 and S25? What is the purpose of S21 and S22 in this setup? Based on your description, it seems like pressing the reset button would not have any effect.Keith</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Minotaur MSR142RTP safety relay is identified by part number 440R-IN064. Y1 and Y2 should be connected to auxiliary contacts (referred to as K1 and K2) on a motor contactor to ensure output confirmation. The S33/S34 Reset input is correctly set up. The mention of connecting S12 and S52 to e-stop buttons indicates the use of a two-channel e-stop button sourced by S11. It is recommended to check a wiring diagram for confirmation. For configurations other than 4-wire crossfault detection, S21 and S22 should be jumpered together. Check the diagrams on the second page of the brochure for further guidance. Y32 serves as a solid-state status output for connecting to a PLC. Make sure to press the Reset button when necessary. The Y1/Y2 connection should be closed during power cycle, as shown by the jumpered terminals. Pressing Reset will reset the relay and activate its safety output. However, if the feedback circuit between Y1 and Y2 remains jumpered, the contacts will not change state when the output is energized, which could lead to the Safety Relay considering it a failure. It is uncertain whether it will trip immediately or simply prevent another start due to the feedback contacts not changing state.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the original post by Ken Roach, the statement "S12 and S52 connect to e-stop buttons" indicates the use of a two-channel E-stop button triggered by S11, which is acceptable. However, it is important to note that for a recommended connection of a two-channel contact device, one of the contact strings should be between S21 and S22. Failure to do so may require alternative actions with S22. It is also worth mentioning that the relay only monitors Y1 and Y2 during the reset moment when they need to be closed, and does not continuously monitor their status outside of that period. This observation prompts more cautious consideration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the confusion in my previous post. The S21 and S22 terminals should be connected to ground, while the S11 terminal should be connected to +24V. The S12 and S52 terminals should be connected to a pair of series E-STOP buttons. Thank you for your understanding!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What will occur if I press reset with the two E-STOP buttons neither pushed nor pulled out, and the other two E-STOP buttons are pushed and locked in place? Thank you for clarifying this for me!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully resolved the issue on my own.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you are using a single-channel emergency stop system. This system consists of two buttons with one set of contacts each, connected in series to function as a single channel. It is important to connect S21 and S22 together, rather than to ground. S11 should be the power source for the emergency stop circuit, which runs through the buttons and into S12 and S54. Without all circuits, except for the power supply and status output, properly connected, the relay's functioning is unpredictable. Although the manuals may be challenging to understand due to their translation setup, they do provide helpful wiring diagram examples.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We have installed two ESTOP buttons in series with two channels each connecting to different components. S12 and S52, S21 and S22 are connected to 0VDC, while Y1 and Y2 are jumped. Y31 is connected to a power source of +24V, and Y32 (SRM01_Status) is linked to the PLC input unit. S33 and S34 are designated for the reset button. Components 13, 23, 33, and 43 are connected to a power source, while component 14 is linked to three servo drives (X1+Y1+Z1) of the same Kinetix300 series. SAFE_IN1 (STO.4) is wired in parallel for safety. Similarly, component 24 is connected to another set of three servo drives (X1+Y1+Z1) with SAFE_IN2 (STO.6) in parallel. Component 34 is linked to three additional servo drives (X2+Y2+Z2) with SAFE-IN1 (STO.4) in parallel, while component 44 is connected to the same set of servo drives with SAFE_IN2 (STO.6) in parallel. Essentially, in our application, one ESTOP button can halt the operation of all six servo drives simultaneously. Further updates will be provided on the Y32 response after pressing the reset button following the activation and deactivation of the ESTOP button. Thank you for your attention to these details!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Originally shared by user mike3475, we have a setup with two ESTOP buttons connected in series, each with two channels linked to S12 and S52. The question arises: How should S12 and S52 be connected? Should they be linked together or connected to another component? 

In this configuration, S11 serves as an "isolated" 24VDC supply for the e-stop devices. It is crucial not to connect S11 to the 24VDC supply for the relay (e.g. A1). 

While there are multiple ways to wire this system, the recommended approach for detecting cross-channel shorting is to bridge S11 to S52. Additionally, connect one set of e-stop device contacts between S11 and S12, and the other set between S21 and S22. There is no requirement to connect S21 or S22 to the relay supply common (A2), as S21 already serves as the module's internal common. 

In conclusion, to ensure proper functionality and safety, follow the suggested wiring method provided above by Keith.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I have a relay setup with connections to a guard door lock and a Powerflex 525 Safety Torque Off system. Despite jumpering S21-S22 and S52-S11, and setting up the output connections accordingly, I am facing an issue with the Reset function (S33-S34) not working properly after opening and closing the guard door. This results in a Safety Open error on the Powerflex system. I have noticed that the voltage at input S11 drops to 0 V and does not reset unless I power cycle it, returning the voltage to 24 V. Can anyone provide assistance with troubleshooting this wiring design issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NathanaelJacobS</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the purpose of bridging Y1 and Y2 in the safety relay 440R-G23216 setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Bridging Y1 and Y2 in the safety relay setup is a common practice to enable the reset function.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should the reset button be connected in the configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - The reset button should be connected with one wire to S33 and another wire to S34 in the safety relay setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What happens when the reset button is pressed in the safety relay 440R-G23216?</h4>
<p class='text-muted'><strong>Answer:</strong> - When the reset button is pressed, it resets the safety relay and allows the system to resume normal operation, provided all safety conditions are met.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How are the E-STOP buttons (S12 and S52) connected in the setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The E-STOP buttons (S12 and S52) are connected to the safety relay to provide emergency stop functionality and ensure safety in the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What is the role of Y32 (SRM01_Status) linked to the PLC input unit?</h4>
<p class='text-muted'><strong>Answer:</strong> - Y32 (SRM01_Status) linked to the PLC input unit provides status information from the safety relay to the PLC for monitoring and control purposes.</p>
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
