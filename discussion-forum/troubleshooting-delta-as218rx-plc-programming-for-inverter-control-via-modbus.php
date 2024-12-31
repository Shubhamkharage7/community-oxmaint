
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I apologize for the lengthy post. As an Electrical and Electronic Engineering student who recently joined a research group, I was tasked with utilizing a PLC to control a temperature controller connected to an oven via MODBUS. The goal was to connect the PLC to a router">
    <meta name="keywords" content="delta as218rx plc, inverter control, modbus troubleshooting, plc programming, temperature controller, remote monitoring, communication settings, hwconfig, pulse contact, modrw function, plc program, plc troubleshooting, plc basics, plc fundamentals, plc communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-delta-as218rx-plc-programming-for-inverter-control-via-modbus">
    <title>Troubleshooting Delta AS218RX PLC Programming for Inverter Control via Modbus | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Delta AS218RX PLC Programming for Inverter Control via Modbus | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I apologize for the lengthy post. As an Electrical and Electronic Engineering student who recently joined a research group, I was tasked with utilizing a PLC to control a temperature controller connected to an oven via MODBUS. The goal was to connect the PLC to a router">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-delta-as218rx-plc-programming-for-inverter-control-via-modbus">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Delta AS218RX PLC Programming for Inverter Control via Modbus | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I apologize for the lengthy post. As an Electrical and Electronic Engineering student who recently joined a research group, I was tasked with utilizing a PLC to control a temperature controller connected to an oven via MODBUS. The goal was to connect the PLC to a router">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-delta-as218rx-plc-programming-for-inverter-control-via-modbus"
      },
      "headline": "Troubleshooting Delta AS218RX PLC Programming for Inverter Control via Modbus",
      "description": "Hello everyone, I apologize for the lengthy post. As an Electrical and Electronic Engineering student who recently joined a research group, I was tasked with utilizing a PLC to control a temperature controller connected to an oven via MODBUS. The goal was to connect the PLC to a router",
      "author": {
        "@type": "Person",
        "name": "MZFarhad"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-21",
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
                <h1 class="text-white">Troubleshooting Delta AS218RX PLC Programming for Inverter Control via Modbus</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MZFarhad</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">633</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">477</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I apologize for the lengthy post. As an Electrical and Electronic Engineering student who recently joined a research group, I was tasked with utilizing a PLC to control a temperature controller connected to an oven via MODBUS. The goal was to connect the PLC to a router for remote monitoring and control worldwide. Despite being new to PLCs, I successfully completed the task after much trial and error.

My current assignment involves using a Delta AS218RX PLC to control and monitor an inverter via Modbus. However, I am facing difficulties as the devices operate differently. I am struggling to obtain the necessary values from the inverter. While I could easily set up communication settings for the temperature controller in hwconfig and implement a successful program, the process is proving challenging with the inverter.

Initially, I attempted to read a single value (output voltage) from the inverter, but encountered issues as the value remained constant at 229V. Implementing a pulse contact resolved this issue as the value updated with each pulse. However, I am now unable to perform multiple readings.

I believe I need to open and close a contact for each MODRW function in the program, but I am facing difficulties in executing this correctly. Having limited experience in PLC programming and lacking basic fundamentals, I am seeking assistance to troubleshoot the code. Any help or guidance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance efficiency and simplicity, consider replacing the [-| |- SM407]+[-|/|- M] pairs with a single rising edge detector [-|^|- SM407]. This approach streamlines the process and improves functionality. Another option is to utilize an integer count that increments on SM407 rising edges before resetting to zero. This straightforward method ensures seamless operation and accuracy in data tracking.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to PLC programming, time is of the essence and the scan cycle acts as the clock. If you find yourself stuck, consider reversing the M51 section to the top, M50 in the middle, and M49 at the bottom. Remember that timing is crucial in PLC programming, and knowing when an event occurs can be more critical than what actually happens. Any assistance in this matter would be greatly valued.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Another potential solution can be achieved by utilizing the SM407 pair, which is essentially the same as a single rising edge trigger for efficiency. The Latch and Unlatch (L and U) instructions in the PLC are analogous to Delta's Set and Reset (S and R) instructions. This strategy allows for the extension of the M49 pulse through the M50 and M51 pulses, as well as the extension of the M50 pulse through the M51 pulse. It is crucial to ensure that each MODRW only triggers on the rising edge of these bits for optimal performance. It is important to note that this method may not be effective if the order of latches/sets on the second rung is reversed. Remember, the timing of events is often more critical than the events themselves.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One of the easiest and most straightforward solutions to read more Modbus registers in the future is by utilizing a counter with a built-in edge detector and integer comparisons. This method is not only simple but also highly customizable and scalable. By adding just two new instructions and adjusting the counter preset, additional Modbus registers can be easily integrated. Additionally, the MODRW instructions can directly replace the coils writing M49/M50/M51, eliminating the need for those specific bits. This streamlined approach not only simplifies the process but also enhances efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the main challenge faced when trying to control and monitor an inverter via Modbus using a Delta AS218RX PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The main challenge is obtaining the necessary values from the inverter as the devices operate differently, leading to difficulties in communication and data retrieval.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How did the individual troubleshoot the issue of obtaining a constant value from the inverter when reading the output voltage?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The individual successfully resolved the issue by implementing a pulse contact, which allowed the value to update with each pulse. However, they encountered difficulties in performing multiple readings afterwards.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What approach did the individual consider for executing the MODRW function in the program to read values from the inverter?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The individual believed that opening and closing a contact for each MODRW function in the program was necessary, but faced challenges in executing this correctly due to limited experience in PLC programming and lacking basic fundamentals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can someone with limited experience in PLC programming troubleshoot code for controlling and monitoring an inverter via Modbus using a Delta AS218RX PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Seeking assistance and guidance from more experienced individuals in the field can be beneficial for troubleshooting code and resolving issues with communication and data retrieval in the PLC programming process.</p>
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
