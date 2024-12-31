
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am looking to create a system that can control multiple AC contactors and disable them for a set amount of time when a specified current threshold is exceeded across all three phases of an incoming power supply. I will need a large quantity of these systems,">
    <meta name="keywords" content="ac contactors, current monitoring, m221 plc, programmable logic controller, 5a cts, power cables, analog inputs, current threshold, phase monitoring, cost-effective systems, hardware setup, plc limitations, analog signals, digital conversion">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-current-monitoring-for-multiple-ac-contactor-control-with-m221-plc">
    <title>Optimizing Current Monitoring for Multiple AC Contactor Control with M221 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Current Monitoring for Multiple AC Contactor Control with M221 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am looking to create a system that can control multiple AC contactors and disable them for a set amount of time when a specified current threshold is exceeded across all three phases of an incoming power supply. I will need a large quantity of these systems,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-current-monitoring-for-multiple-ac-contactor-control-with-m221-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Current Monitoring for Multiple AC Contactor Control with M221 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am looking to create a system that can control multiple AC contactors and disable them for a set amount of time when a specified current threshold is exceeded across all three phases of an incoming power supply. I will need a large quantity of these systems,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-current-monitoring-for-multiple-ac-contactor-control-with-m221-plc"
      },
      "headline": "Optimizing Current Monitoring for Multiple AC Contactor Control with M221 PLC",
      "description": "Hello everyone, I am looking to create a system that can control multiple AC contactors and disable them for a set amount of time when a specified current threshold is exceeded across all three phases of an incoming power supply. I will need a large quantity of these systems,",
      "author": {
        "@type": "Person",
        "name": "simongallagher"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-09",
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
                <h1 class="text-white">Optimizing Current Monitoring for Multiple AC Contactor Control with M221 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>simongallagher</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">457</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">161</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am looking to create a system that can control multiple AC contactors and disable them for a set amount of time when a specified current threshold is exceeded across all three phases of an incoming power supply. I will need a large quantity of these systems, so cost-effectiveness is crucial. My plan is to utilize 5A CTs on the power cables (x3) and integrate them with a Programmable Logic Controller (PLC) to monitor the current values.

I am currently facing challenges in determining the most efficient approach to achieve this, taking into consideration the limitations of the M221 PLC, which has 2 analogue inputs (0-10V). I am also exploring the option of utilizing cost-effective CTs and converting the 5A analogue signals to either 0-10V (requiring an additional PLC module), 4-20mA (needing an expansion board), or digital format. I am seeking recommendations on the optimal hardware setup for this task, particularly in converting the 5A signals to digital format across all three phases as cost-effectively as possible. Any suggestions or guidance on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are referring to a digital switch that activates at a specific AC current level, consider using a Dwyer current switch for this purpose. Additionally, there are converters available to transform a 0-5A AC output from a current transformer into a DC signal. Visit the following links for more information: Dwyer current switch (https://www.lesman.com/mcs-111050) and AC current converter (https://www.datexel.com/ac-current-converter-dat5023iac-a.html) and guidance on converting CT signals to standard 4-20 mA output (https://www.nktechnologies.com/engineering-resources/converting-ct-signal-standard-4-20-ma-output/).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have effectively measured AC current using Veris instruments, such as their current monitoring tools found at https://www.veris.com/126822/category/current-monitoring. Another useful product from Veris is their H608 current switch, available at https://www.veris.com/995242/product/veris-h608-current-switch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I'm not mistaken, it could be beneficial for you to explore bulk pricing options for a smart energy meter for this specific scenario. Consider purchasing one that includes built-in current transformers (CTs) for maximum efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Simon Gallagher mentioned that he is having trouble finding cost-effective 5A to digital converters for 3 phases. He noted that using setpoint relays for digital inputs may be a more affordable option compared to analog IO or current transmitters with communication features. Monitoring all three phases of each motor may be excessive if the goal is just to measure motor load in regular operation rather than detecting phase to phase current imbalances.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In his post, simongallagher proposed a challenge of developing a system to control AC contactors, activating a 'lockout' feature when a specific current level is exceeded in a three-phase power supply. With a potential requirement for hundreds of these systems, cost-effectiveness is a key factor. The plan includes using 5A CTs on electrical cables and integrating them with a PLC to monitor the values.

However, the dilemma lies in finding the most efficient method given the limitations of the M221 PLC's two 0-10V analogue inputs. The options considered are converting the 5A signal to 0-10V (requiring an additional PLC module), 4-20mA (needing an expansion board), or digital. The search for cost-effective 5A to digital converters for three phases has proven challenging.

For advice on the optimal hardware configuration, suggestions have been made to explore options like those available at https://www.phenixcontrols.com/Current_Sensor/Three_Phase/. Your input on this matter would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RDS</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upgrade your system with automation components that allow you to easily remove the C/T. Choose from a variety of switches and transmitters for analog input available at Automation Direct. Explore our selection of high-quality products designed to enhance your operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I monitor current across multiple AC contactors and control them with a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To monitor current across multiple AC contactors and control them with a PLC, you can use current transformers (CTs) on the power cables to measure current values. These values can be integrated with a Programmable Logic Controller (PLC) to monitor and control the contactors based on set thresholds.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the challenges of using an M221 PLC with limited analogue inputs for current monitoring?</h4>
<p class='text-muted'><strong>Answer:</strong> - The main challenge of using an M221 PLC with limited analogue inputs for current monitoring is finding an efficient approach to convert the 5A CT signals to a format compatible with the PLC's inputs. Options include converting the signals to 0-10V, 4-20mA, or digital format using additional modules or expansion boards.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I convert 5A analogue signals from CTs to digital format for monitoring across all three phases cost-effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> - To convert 5A analogue signals from CTs to digital format cost-effectively, you may consider using cost-effective CTs and converting the signals to digital format through appropriate modules or expansion boards. It's essential to choose a hardware setup that efficiently converts the signals while keeping costs in check.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What recommendations can you provide for the optimal hardware setup to convert 5A CT signals to digital format for current monitoring?</h4>
<p class='text-muted'><strong>Answer:</strong> - For optimal hardware setup to convert 5A CT signals to digital format for current</p>
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
