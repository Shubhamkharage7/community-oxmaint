
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently in the process of commissioning multiple units and encountering difficulties with achieving a flying start. The situation involves my Programmable Logic Controller (PLC) using Modbus to regulate a blower motor essential for a heater system from a third-party. The heater system initiates a blower request to">
    <meta name="keywords" content="abb acs580, flying start problem, modbus integration, commissioning units, plc, blower motor, heater system, modbus control word, control word 1151, control word 1150, short-cycling, drive inactivity">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-abb-acs580-flying-start-problem-with-modbus-integration">
    <title>Troubleshooting ABB ACS580 Flying Start Problem with Modbus Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ABB ACS580 Flying Start Problem with Modbus Integration | Oxmaint Community">
    <meta property="og:description" content="I am currently in the process of commissioning multiple units and encountering difficulties with achieving a flying start. The situation involves my Programmable Logic Controller (PLC) using Modbus to regulate a blower motor essential for a heater system from a third-party. The heater system initiates a blower request to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-abb-acs580-flying-start-problem-with-modbus-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ABB ACS580 Flying Start Problem with Modbus Integration | Oxmaint Community">
    <meta name="twitter:description" content="I am currently in the process of commissioning multiple units and encountering difficulties with achieving a flying start. The situation involves my Programmable Logic Controller (PLC) using Modbus to regulate a blower motor essential for a heater system from a third-party. The heater system initiates a blower request to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-abb-acs580-flying-start-problem-with-modbus-integration"
      },
      "headline": "Troubleshooting ABB ACS580 Flying Start Problem with Modbus Integration",
      "description": "I am currently in the process of commissioning multiple units and encountering difficulties with achieving a flying start. The situation involves my Programmable Logic Controller (PLC) using Modbus to regulate a blower motor essential for a heater system from a third-party. The heater system initiates a blower request to",
      "author": {
        "@type": "Person",
        "name": "Brew Chip"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-12",
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
                <h1 class="text-white">Troubleshooting ABB ACS580 Flying Start Problem with Modbus Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Brew Chip</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2298</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">476</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently in the process of commissioning multiple units and encountering difficulties with achieving a flying start. The situation involves my Programmable Logic Controller (PLC) using Modbus to regulate a blower motor essential for a heater system from a third-party. The heater system initiates a blower request to which I respond by sending the control word 1151 to start the drive and acknowledging the heater once the blower reaches the required speed. The challenge arises when the heater short-cycles, causing the drive to remain inactive until it fully stops, resulting in an alarm due to the lengthy spin-down process of the large blower. Despite implementing parameters for a flying start, it functions properly only in local control mode and not through Modbus commands. My drive control function block is straightforward - sending 1151 to run and 1150 to stop, without any logic to verify a complete stop before initiating a start. I suspect that 1150 is specifically a ramp to stop command, leading me to question if flying start only operates during coasting (possibly triggered by command 1149).</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Please note that in parameter 99.04, the motor control mode does not allow flying start or automatic restart unless parameter 21.19 is set to Vector in scalar start mode. To enable automatic start mode (page 115), ensure parameter 21.02 is set to Scalar in automatic start mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TWS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to TWS manual, it is noted that in order to enable flying start or automatic restart in Motor control mode parameter 99.04, Scalar start mode parameter 21.19 must be set to Vector. This can be found under Automatic start mode on page 115. The setting for parameter 21.02 must be Scalar for automatic restart to take place. This was the first thing we confirmed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Brew Chip</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After resolving urgent issues, I managed to contact ABB technical support and received a puzzling response regarding the ABB state machine. According to the response, it is normal for the drive to stop before it can be restarted, as indicated by Control Word Off1. However, there is a workaround suggested: setting the initial state as 1150, using 1151 for standard run or jog, and using 1087 to stop by removing bit 6 of the Control Word. This workaround involves monitoring the motor speed and resetting the control word to achieve a shut-off state.

One confusion arose regarding the suggested use of commands 1150, 1151, and 1087. The second issue raised was the necessity of a workaround for a feature that should be functioning correctly. Why does the state machine still require a complete stop before restarting, especially if the flying start option is enabled? This discrepancy is concerning.

I have reached out to ABB for clarification and am awaiting a response. I will provide a final update once I have a resolution. In the meantime, I welcome any insights or experiences that others may have to share.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Brew Chip</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After addressing urgent matters, I managed to connect with ABB tech support and received a puzzling response. The initial dilemma I faced was deciphering the specific punctuation placement. From my understanding, 1150 signifies the idle state, 1151 represents standard running or jogging, and 1087 (1151 - 2^6) indicates "run with ramp input set to 0." The suggestion is to use 1151 for running, 1087 for stopping, and either wait for speed feedback to reach 0 before transitioning to idle state 1150, or initiate a restart at any point with 1151. However, the issue lies in the fact that this pertains to a blower motor that should coast to a stop rather than ramp down.

The next puzzler is why a workaround is necessary to utilize a feature that is already enabled. If the flying start option is active, why does the state machine still mandate a complete stop before restarting? This discrepancy is quite frustrating and raises questions.

I have reached out for clarification and am awaiting a response. I will provide an update once I have a resolution. If anyone else has experience or a functional AOI to share, please do so.

On a related note, the topic was unresolved, so here's what I discovered: OFF1 involves coasting to a stop, transitioning to true, and then running from 0 to 1 for a restart. For reference, here is the complete control word. I hope this clarifies the situation for everyone.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nathan66669</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a previous discussion, user Nathan66669 raised an unresolved issue about resolving a particular control word. After some research, it was found that in order to restart, OFF1 must be activated after coasting to a stop, then transition from 0 to 1. Attached is the complete control word for reference. It is important to note that bits 0 through 6 and bit 10 must all be set to TRUE in order to run successfully. Hopefully, this explanation helps clarify any confusion for users seeking a solution to this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nathan66669</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
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
<h4 class='text-dark'>FAQ: 1. How can I troubleshoot the flying start problem with ABB ACS580 drive integration using Modbus?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the flying start problem, ensure that the parameters for flying start are properly configured in the drive settings. Verify that the Modbus communication between the PLC and the drive is functioning correctly. Check if the drive control logic includes a complete stop verification before initiating a start command.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does the drive remain inactive when the heater short-cycles, causing the blower to stop abruptly?</h4>
<p class='text-muted'><strong>Answer:</strong> - The drive may remain inactive when the heater short-cycles due to the lengthy spin-down process of the large blower. This can trigger an alarm because the drive needs time to stop completely before it can be restarted. Consider adjusting the drive parameters or implementing logic in the control function block to handle short-cycling situations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Does the flying start feature on the ABB ACS580 drive only operate during coasting?</h4>
<p class='text-muted'><strong>Answer:</strong> - The flying start feature on the ABB ACS580 drive is designed to allow the drive to start the motor without waiting for it to come to a complete stop. It is typically used to reduce downtime and improve operational efficiency. Verify if the flying start feature is configured correctly and if it can be triggered by specific Modbus commands such as 1149.</p>
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
