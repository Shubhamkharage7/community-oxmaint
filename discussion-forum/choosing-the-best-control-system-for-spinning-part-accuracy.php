
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My expertise in controls is primarily focused on Rockwell Automation PLCs. However, I believe they may not be suitable for this project due to sensor sampling speed limitations. I am uncertain about other options to explore in this regard. With Rockwell Automation hardware, I have mainly worked on simple">
    <meta name="keywords" content="spinning part accuracy control systems, rockwell automation plc alternatives, servo and encoder control solutions, hiperface encoder applications, data acquisition for rotational position, national instruments for industrial control">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/choosing-the-best-control-system-for-spinning-part-accuracy">
    <title>Choosing the Best Control System for Spinning Part Accuracy | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Choosing the Best Control System for Spinning Part Accuracy | Oxmaint Community">
    <meta property="og:description" content="My expertise in controls is primarily focused on Rockwell Automation PLCs. However, I believe they may not be suitable for this project due to sensor sampling speed limitations. I am uncertain about other options to explore in this regard. With Rockwell Automation hardware, I have mainly worked on simple">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/choosing-the-best-control-system-for-spinning-part-accuracy">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Choosing the Best Control System for Spinning Part Accuracy | Oxmaint Community">
    <meta name="twitter:description" content="My expertise in controls is primarily focused on Rockwell Automation PLCs. However, I believe they may not be suitable for this project due to sensor sampling speed limitations. I am uncertain about other options to explore in this regard. With Rockwell Automation hardware, I have mainly worked on simple">
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
        "@id": "https://community.oxmaint.com/discussion-forum/choosing-the-best-control-system-for-spinning-part-accuracy"
      },
      "headline": "Choosing the Best Control System for Spinning Part Accuracy",
      "description": "My expertise in controls is primarily focused on Rockwell Automation PLCs. However, I believe they may not be suitable for this project due to sensor sampling speed limitations. I am uncertain about other options to explore in this regard. With Rockwell Automation hardware, I have mainly worked on simple",
      "author": {
        "@type": "Person",
        "name": "jawilli91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-11",
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
                <h1 class="text-white">Choosing the Best Control System for Spinning Part Accuracy</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jawilli91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">225</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">116</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>My expertise in controls is primarily focused on Rockwell Automation PLCs. However, I believe they may not be suitable for this project due to sensor sampling speed limitations. I am uncertain about other options to explore in this regard. With Rockwell Automation hardware, I have mainly worked on simple assembly benches and CIP servo motion projects. I am currently assisting a small company in gaining more experience in this area, as well as enhancing my own skills.

The project at hand involves spinning a part at 150rpm using a servo and encoder, and counting teeth on the part using a 5v crankshaft position sensor. The sensor detects 58 teeth (60 with 2 missing for a register position) by capturing rising and falling edges, resulting in a square waveform on an oscilloscope. The goal is to graphically plot or log voltage spikes of the teeth against servo rotational position, analyze the data to determine peak to peak measurements and extrapolate degrees of rotation between teeth.

The recommended servo/encoder for this project is a Kollmorgen absolute hiperface encoder. It is essential to accurately capture the register position of missing teeth and log voltage spikes against rotational position. Quality assessments will be made based on the spacing of the teeth, with bent teeth resulting in part rejection. The data acquisition process should be completed within one rotation of the part (0.4 seconds at 150rpm), including the identification of missing teeth during random loading.

I have looked into National Instruments (NI) as an alternative, but integrating the hiperface encoder appears to be complex. Consideration is being given to using a simple incremental encoder instead. Options from a company called Promess, such as the UltraPro product, could meet the project requirements but are expensive. There is also interest in Kistler KiBox and Beckhoff solutions, although the latter may require additional knowledge in programming and software requirements. Beckhoff's compatibility with EtherCat, a communication protocol used by Kollmorgen, makes it a potential choice, although further research is needed.

Any guidance or recommendations on suitable control systems for this project would be greatly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although it may seem like a vision application, it may not align with your cost objectives. 

When considering a PLC-based solution for a system operating at 150 RPM with 60 teeth, it's crucial to have a setup that can handle transitions between states (off > on or on > off) every 3.33 milliseconds. One way to achieve this is by using high speed counters to sample the signal. Connect the signal from the wheel under test to one high speed counter, and connect an encoder with a higher number of pulses per revolution to another high speed counter. The challenge then becomes transferring the accumulated count from the high speed counters to the PLC in under 3.33 milliseconds.

For example, if the second encoder has 3600 pulses per revolution (equivalent to 10 pulses per degree) and you set the starting point at zero when the test piece is in place, it should go off at 30 counts, on again at 60 counts, off at 90 counts, and so on. Any deviation from this pattern could indicate a missing or damaged tooth in the test piece. Ensuring the success of this method relies on the PLC's ability to retrieve the accumulated count from the high speed counters within the specified timeframe. If achievable, the next step would be to define what constitutes a "significant deviation" in this scenario.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Steve, thank you for responding. I appreciate your innovative thinking and agree that using vision technology could expedite the process at a lower cost. However, my client's customer insists on using the specific crankshaft sensor currently in production. I have concerns about whether a Rockwell Automation PLC can process these signals quickly enough. Perhaps if I could access information on scan times and utilize a dedicated PLC solely for this portion of the machine, it might be feasible. 

Kollmorgen's specifications for an AKD drive with EtherCAT indicate the ability to capture both the sensor and encoder data at a rate of 14kHz, or 4kHz if the data is sent to an external EtherCAT master. However, this method, similar to trending in Rockwell, may not be suitable for our needs. If it were viable, I would require an Allen Bradley PLC communicating via Ethernet/IP through a gateway to EtherCAT for controlling the Kollmorgen drive. 

After data logging, speed becomes less critical. In theory, I could transfer the logged data from the EtherCAT master to Ethernet/IP through a gateway for the CompactLogix to make pass/fail decisions. Alternatively, a simpler approach could involve a dedicated EtherCAT PLC for data acquisition, logging, decision-making, and basic digital I/O communication with the CompactLogix.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jawilli91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 5069-HSC module boasts a rapid 0.2 ms RPI throughout the entire backplane, ensuring efficient and high-speed performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In document 5069-TD001O-EN-P, the specific specifications you mentioned are not visible. It is unclear what you mean by "across the backplane" and how it compares to other factors. However, it seems like the speed would be sufficient. Can this be achieved on multiple channels simultaneously? 

Let's say I am using a 5069-L310ERM with 80% memory usage as an example for program size and PLC scan load. Would I need to create complex schedules to manage the scan time? Currently, the rotation is at 1 revolution every 0.4 seconds, with data logging starting after detecting two missing teeth and continuing for 360 degrees of rotation 3.34ms later. I am unsure of the scan time for my previous program. Could a 4096 pulse encoder provide high enough resolution?

Your thoughts and assistance are appreciated. I hope this does not come off as asking someone to do the work for me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jawilli91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am delighted to assist. As a proud owner of one of these cards, I can offer additional demonstration information if required. The card's data is transmitted to the PLC via the backplane at a specific RPI. Additionally, it has configurable outputs that can be triggered locally without relying on the backplane RPI.

According to the HSC manual (page 20), the Requested Packet Interval (RPI) is a crucial parameter that determines the data exchange rate between the controller and the module. The RPI value is set during the initial module configuration and can be adjusted as needed during operation. The valid RPI values range from 0.2 to 750 ms.

Considering the project perspective, there is still 20% of memory remaining on an L310ERM to accommodate the addition of the card. The period of a periodic task can be set as low as 0.1 ms, which is exactly half of the minimum 5069 RPI value.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have been advised that using a tooth pulse counter is not enough. To accurately measure the crankshaft sensor, an analog card is needed to compare the signal against the encoder. The 5069-IF8 manual allows for analog cards to have an RPI set as low as 0.2ms, similar to the 5069-HSC. I currently have an HSC card and encoder available and will discuss with management the possibility of acquiring a motor and analog card for testing before implementing it to avoid potential financial strain. Thank you for your consideration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jawilli91</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the main challenges with using Rockwell Automation PLCs for this project?</h4>
<p class='text-muted'><strong>Answer:</strong> - Rockwell Automation PLCs may not be suitable due to sensor sampling speed limitations, especially for capturing the required data from the spinning part accurately.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the key components involved in the project, and why are they important?</h4>
<p class='text-muted'><strong>Answer:</strong> - The project involves a servo, encoder, and a crankshaft position sensor to spin the part, count teeth, and analyze data for quality assessment. These components are crucial for achieving accurate results and identifying any defects in the part.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Which encoder is recommended for the project, and why is it preferred?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Kollmorgen absolute hiperface encoder is recommended for accurately capturing the register position of missing teeth and logging voltage spikes against rotational position. Its precision and capabilities align well with the project requirements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are some alternative control system options considered for the project?</h4>
<p class='text-muted'><strong>Answer:</strong> - Alternatives such as National Instruments (NI), Promess UltraPro, Kistler KiBox, and Beckhoff solutions have been explored. Each option comes with its own advantages and complexities, requiring careful consideration based on the project's specific needs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How does the data acquisition process need to be completed within one rotation of the part impact the choice of control system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The need to complete the data acquisition process within one rotation of the part (0.4 seconds at 150rpm) highlights the importance</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
