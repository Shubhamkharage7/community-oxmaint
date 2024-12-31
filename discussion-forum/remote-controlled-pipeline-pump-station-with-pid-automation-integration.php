
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there, I am new to PLC programming and have had some basic classes in college. However, my experience has mostly been on the instrument side of the job. Recently, I have been given the task of automating a pipeline pump station. The goal is to have operators remotely">
    <meta name="keywords" content="remote controlled pipeline pump station, pid automation integration, plc programming, pipeline pump automation, suction pressure regulation, discharge pressure control, rpm regulation, seimens system, 1756-l61, pid configuration, high select feature, producer management, fc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/remote-controlled-pipeline-pump-station-with-pid-automation-integration">
    <title>Remote Controlled Pipeline Pump Station with PID Automation Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Remote Controlled Pipeline Pump Station with PID Automation Integration | Oxmaint Community">
    <meta property="og:description" content="Hello there, I am new to PLC programming and have had some basic classes in college. However, my experience has mostly been on the instrument side of the job. Recently, I have been given the task of automating a pipeline pump station. The goal is to have operators remotely">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/remote-controlled-pipeline-pump-station-with-pid-automation-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Remote Controlled Pipeline Pump Station with PID Automation Integration | Oxmaint Community">
    <meta name="twitter:description" content="Hello there, I am new to PLC programming and have had some basic classes in college. However, my experience has mostly been on the instrument side of the job. Recently, I have been given the task of automating a pipeline pump station. The goal is to have operators remotely">
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
        "@id": "https://community.oxmaint.com/discussion-forum/remote-controlled-pipeline-pump-station-with-pid-automation-integration"
      },
      "headline": "Remote Controlled Pipeline Pump Station with PID Automation Integration",
      "description": "Hello there, I am new to PLC programming and have had some basic classes in college. However, my experience has mostly been on the instrument side of the job. Recently, I have been given the task of automating a pipeline pump station. The goal is to have operators remotely",
      "author": {
        "@type": "Person",
        "name": "HunterNelson(newby)"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-28",
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
                <h1 class="text-white">Remote Controlled Pipeline Pump Station with PID Automation Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>HunterNelson(newby)</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">404</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">32</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there, I am new to PLC programming and have had some basic classes in college. However, my experience has mostly been on the instrument side of the job. Recently, I have been given the task of automating a pipeline pump station. The goal is to have operators remotely enable the station, with the pumps kicking on and regulating suction pressure based on their input when the producer is pumping. For example, a suction pressure of 68 PSI will result in a discharge pressure of 325 PSI, with the pump running at 3085 RPM out of a possible 3700 RPM.

The current station uses a SEIMENS system, but we plan to replace it with a 1756-L61 that we obtained from a decommissioned station. The SEIMENS system has 3 PIDs for Suction, Discharge, and AMP (potentially for VFD control, with a high select to prioritize pumps with the highest amp load). The scaling for the AMP PID is 0-400 amps.

I am facing some challenges:
1. Replicating the High select feature in the current setup and configuring the PID to switch to it.
2. Managing 2 producers with 2 different FCV, possibly requiring a select function for the Suction PID.
3. Integrating shutdowns for the pump controlled by the PID.

If there are any unclear points in my explanation, please let me know.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have a process in place to automatically detect the active producer, or is it reliant on control room operators to make the decision? In either scenario, assigning a separate PID to each option would likely be necessary. The routine would then dictate which one to utilize based on the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IamGSP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, our control room authorizes producers to activate their pumps for suction. The pumps operate in parallel, allowing either one to transport the product. By sending a permissive signal to the producer, we can adjust the process variables of the proportional-integral-derivative controller for optimal flow control. Our pipeline configuration includes 12-inch, 8-inch, and 6-inch meters at various stations, limiting simultaneous pumping by both producers. If we were to upgrade the 8-inch section back to 12-inch and install a larger meter, each pump would require its own proportional-integral-derivative controller. However, the likelihood of this modification is currently very low.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HunterNelson(newby)</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After consulting with our seasoned programmers, here is the current status: Although we have 2 pumps available, we are currently only utilizing one. To address this, we have implemented a Low select for all 3 PID controls and a ramp for the VFD to ensure the lowest output is set. This system allows for the amps to adjust the suction pressure or discharge pressure as needed to maintain stability. The operator can then select which pump to output to. What are your thoughts on this approach?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HunterNelson(newby)</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I replicate the High select feature in the PID setup for the pipeline pump station automation?</h4>
<p class='text-muted'><strong>Answer:</strong> - To replicate the High select feature in the PID setup, you would need to configure the PID controller to switch to the desired setpoint based on specific conditions or inputs. This may involve programming logic that monitors parameters such as amp load or other relevant variables to determine when to switch to the High select mode.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I manage 2 producers with 2 different FCVs in the pipeline pump station automation?</h4>
<p class='text-muted'><strong>Answer:</strong> - Managing 2 producers with 2 different Flow Control Valves (FCVs) can be achieved by implementing a select function for the Suction PID. This select function would allow you to switch between the control parameters for each producer based on specific criteria or inputs, ensuring proper regulation and control of the pump station.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What measures should be taken to integrate shutdowns for the pump controlled by the PID system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Integrating shutdowns for the pump controlled by the PID system is crucial for ensuring safe operation of the pipeline pump station. You can implement shutdown logic within the PLC program that monitors critical parameters such as pressure, temperature, or any abnormal conditions. When these conditions exceed predefined thresholds, the shutdown sequence can be initiated to stop the pump and prevent any potential damage or hazards.</p>
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
