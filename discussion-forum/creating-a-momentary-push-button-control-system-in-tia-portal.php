
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings all, I am currently working on a test project focused on creating a small Human Machine Interface (HMI) within the TIA Portal for the purpose of controlling a direct motor. The attached PLC program and HMI layout showcase my progress thus far. The main concept is rather straightforward:">
    <meta name="keywords" content="momentary push button, control system, tia portal, plc program, hmi layout, direct motor control, motor operation, flashing lamp, button press, button release, blinking effect, sample implementations, configure push button, create blinking lamp, h">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/creating-a-momentary-push-button-control-system-in-tia-portal">
    <title>Creating a Momentary Push Button Control System in TIA Portal | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Creating a Momentary Push Button Control System in TIA Portal | Oxmaint Community">
    <meta property="og:description" content="Greetings all, I am currently working on a test project focused on creating a small Human Machine Interface (HMI) within the TIA Portal for the purpose of controlling a direct motor. The attached PLC program and HMI layout showcase my progress thus far. The main concept is rather straightforward:">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/creating-a-momentary-push-button-control-system-in-tia-portal">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Creating a Momentary Push Button Control System in TIA Portal | Oxmaint Community">
    <meta name="twitter:description" content="Greetings all, I am currently working on a test project focused on creating a small Human Machine Interface (HMI) within the TIA Portal for the purpose of controlling a direct motor. The attached PLC program and HMI layout showcase my progress thus far. The main concept is rather straightforward:">
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
        "@id": "https://community.oxmaint.com/discussion-forum/creating-a-momentary-push-button-control-system-in-tia-portal"
      },
      "headline": "Creating a Momentary Push Button Control System in TIA Portal",
      "description": "Greetings all, I am currently working on a test project focused on creating a small Human Machine Interface (HMI) within the TIA Portal for the purpose of controlling a direct motor. The attached PLC program and HMI layout showcase my progress thus far. The main concept is rather straightforward:",
      "author": {
        "@type": "Person",
        "name": "karlsmith"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">Creating a Momentary Push Button Control System in TIA Portal</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>karlsmith</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">209</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">461</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings all, I am currently working on a test project focused on creating a small Human Machine Interface (HMI) within the TIA Portal for the purpose of controlling a direct motor. The attached PLC program and HMI layout showcase my progress thus far.

The main concept is rather straightforward: I aim to implement a "momentary push button" on the HMI to manage the motor's operation. Specifically, the motor ought to operate only while the button is actively pressed and come to a halt upon button release. In addition, I seek to incorporate a flashing lamp that illuminates while the button is being pressed.

While successful in activating the lamp with the button press, I am facing difficulties with achieving the desired blinking effect during the button activation. I would greatly appreciate any guidance, tips, or sample implementations on how to tackle this challenge. Your insights on configuring the momentary push button and creating the blinking lamp functionality would be invaluable.

Thank you in advance for any assistance you can provide!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are a few options available for controlling flashers in ladder logic programming. One simple solution involves adding 1 to an integer (INT) value and resetting it to 0 when it surpasses 1023. By using the .X9 bit of the INT, you can easily control the flashing pattern. Another option is to enable the clock byte in the hardware configuration of the PLC (Programmable Logic Controller) in the TIA portal, followed by downloading the updated configuration to the PLC. You can then write and download the logic to use one of the clock byte's bits to control the flasher while the motor is running. For more guidance on this process, search for "clock memory byte TIA portal" to find informative YouTube videos and other helpful resources. In summary, if the C pushbutton bit is 1 (normally open contact) and the clock bit is 1 (normally open contact instructions), then write 1 to the lamp bit's value using a coil instruction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Below, we will be utilizing two timers. Note that TIA timers may vary slightly, for instance, T#500ms will result in a 0.5-second on/off pulse.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When seeking a solution to create a blinking effect on an HMI in TIA Portal, consider configuring it directly within the "Events" settings. This ensures a simple setup without the need for additional coding. While various options, such as manipulating INT values or using ladder logic programming for flasher patterns, are available, utilizing the HMI settings directly can streamline the process. By exploring the clock memory byte feature in the PLC hardware configuration and leveraging the HMI settings, you can achieve the desired flashing effect without complicating the existing PLC code. This approach avoids unnecessary complexity, making it easier to implement the blinking effect seamlessly within the HMI settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>karlsmith</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to parky, it is recommended to refer to the diagram below which utilizes two timers (note that TIA timers differ slightly, for instance T#500ms results in a 0.5 second on/off pulse). For further details, please click on the attachment provided. Thank you for your input! Can you please elaborate on the significance of M0, Y0, and Y1 in your illustration? Are they designated as inputs, outputs, or memory bits (markers)? Your assistance is greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>karlsmith</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using certain HMI systems, you can easily set up blinking modes for lamp functions on the screen by accessing the properties menu. If you are unsure about how to do this on Siemens HMI systems, or if the feature is not available, you may be able to achieve the desired effect through scripting. In my case, I am using Mitsubishi, so M0 represents the button, Y0 represents motor output, and Y1 represents the lamp. However, you have the flexibility to use any bits you prefer, such as M bits in Siemens (e.g. M10.0 Y). These bits correspond to actual outputs, but for testing purposes, you can also use Siemens type outputs like Q 0.0 or M bits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>To access the HMI screen featuring a lamp in TIA Portal, simply follow these steps: 
1. Navigate to the HMI screen with the lamp object.
2. Double-click on the lamp, which should resemble a basic circle object. 
3. The window displaying [Properties|Info|Diagnostic] will pop up below the screen. 
4. Click on the [Properties] tab located on the [Prop.|Info|Diag.] toolbar. 
5. Next, click on the [Animations] tab within the [Properties|Animations|Events|Texts] section. 
6. Select [Overview] and then click on the []* icon positioned between [Display]=>[Appearance] and [Dynamize colors and flashing]. 
7. Enter the PLC Tag=>Name (e.g. "Motor" from the image in Post #1) in the designated field. 
8. Add a new row under [Range|Background color|Border color|Flashing] and enter "1" in the [Range] field. 
9. Choose a flash-on color under [Background color] that differs from the background and border colors. 
10. Select a different color for flash-off under [Border color]. 
11. Lastly, select "Yes" under [Flashing] to confirm your changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I create a momentary push button in TIA Portal for controlling a motor?</h4>
<p class='text-muted'><strong>Answer:</strong> - To create a momentary push button in TIA Portal, you can use a digital input linked to a button on the HMI. The motor operation can be controlled by monitoring the status of this button. The motor should start when the button is pressed and stop when it is released.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I implement a flashing lamp in TIA Portal that illuminates while the button is pressed?</h4>
<p class='text-muted'><strong>Answer:</strong> - To create a flashing lamp effect in TIA Portal, you can utilize timers and bit manipulation. When the button is pressed, you can trigger a timer that toggles a bit at a specific frequency to create the blinking effect for the lamp.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. I am facing difficulties achieving the desired blinking effect for the lamp during button activation. How can I address this challenge?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are having trouble with the blinking effect, ensure that your timer settings are correct and that the bit manipulation logic is properly implemented. Double-check the timer configuration and the logic controlling the lamp's state based on the timer output.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can you provide guidance or sample implementations on configuring the momentary push button and creating the blinking lamp functionality in TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> - For configuring the momentary push button and creating the blinking lamp functionality in TIA Portal, you can refer to the ladder logic programming language supported by TIA Portal. You can use</p>
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
