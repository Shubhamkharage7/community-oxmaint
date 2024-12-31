
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently brainstorming ideas for modifying a machine at my workplace, specifically a 1756-L73S Controller. The machine includes a main conveyor that runs at about one revolution every 10 minutes, with variable speeds throughout the day. There is also a pusher conveyor that pushes products onto the main">
    <meta name="keywords" content="plc programming for conveyor synchronization, conveyor speed synchronization with plc, vsd control for conveyor systems, proximity sensor in conveyor systems, pusher conveyor speed adjustment, conveyor speed deviation monitoring, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/synchronizing-conveyor-speeds-with-plc-programming">
    <title>Synchronizing Conveyor Speeds with PLC Programming | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Synchronizing Conveyor Speeds with PLC Programming | Oxmaint Community">
    <meta property="og:description" content="I am currently brainstorming ideas for modifying a machine at my workplace, specifically a 1756-L73S Controller. The machine includes a main conveyor that runs at about one revolution every 10 minutes, with variable speeds throughout the day. There is also a pusher conveyor that pushes products onto the main">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/synchronizing-conveyor-speeds-with-plc-programming">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Synchronizing Conveyor Speeds with PLC Programming | Oxmaint Community">
    <meta name="twitter:description" content="I am currently brainstorming ideas for modifying a machine at my workplace, specifically a 1756-L73S Controller. The machine includes a main conveyor that runs at about one revolution every 10 minutes, with variable speeds throughout the day. There is also a pusher conveyor that pushes products onto the main">
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
        "@id": "https://community.oxmaint.com/discussion-forum/synchronizing-conveyor-speeds-with-plc-programming"
      },
      "headline": "Synchronizing Conveyor Speeds with PLC Programming",
      "description": "I am currently brainstorming ideas for modifying a machine at my workplace, specifically a 1756-L73S Controller. The machine includes a main conveyor that runs at about one revolution every 10 minutes, with variable speeds throughout the day. There is also a pusher conveyor that pushes products onto the main",
      "author": {
        "@type": "Person",
        "name": "Iangwf"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-12",
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
                <h1 class="text-white">Synchronizing Conveyor Speeds with PLC Programming</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Iangwf</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3120</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">430</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently brainstorming ideas for modifying a machine at my workplace, specifically a 1756-L73S Controller. The machine includes a main conveyor that runs at about one revolution every 10 minutes, with variable speeds throughout the day. There is also a pusher conveyor that pushes products onto the main conveyor every 30 seconds.

Both conveyors are controlled by VSDs and are integrated into the original PLC code, functioning properly. My challenge is to sync the speed of the pusher conveyor with the varying speed of the main conveyor.

My idea involves using a proximity sensor on an intermediate gearbox shaft to count pulses, aiming for around 50 pulses per shaft rotation (equivalent to about 600 pulses per 1000mm of belt travel). I plan to count pulses for 20 seconds, store the value in memory, and repeat the process for another 20 seconds to compare the two values and determine any deviation if the main conveyor speed changes.

This simple concept does not require precision, and the deviation value can be used to adjust the pusher conveyor speed accordingly. As a novice in PLC programming, I appreciate a straightforward approach. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>"Both conveyors are operating smoothly with the help of Variable Speed Drives (VSDs) that have been integrated into the PLC code. How are they currently being controlled? If the control involves an analog signal from the PLC to the VSDs for speed regulation, you can utilize the main conveyor's set speed to determine the optimal speed for the pusher conveyor." Calculate the pusher conveyor speed set point based on the main conveyor's commanded speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>blperkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with belt conveyors, it is vital to place the sensor on the non-driven shaft. Consider using an encoder or creating a toothed wheel with proximity to detect pulses effectively. This setup will ensure accurate monitoring and control of the conveyor system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PeterW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Simplify your process by using the current speed of one conveyor as the target speed for the other. If there are gearboxes with different ratios involved, some basic calculations may be required. However, if there are no gearboxes, adjusting the speeds in the code should be a straightforward task that can be completed in just 5 minutes. With Variable Speed Drives (VSDs) in place, external forces are not necessary to determine the speeds as the information is readily available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To determine the correct ratio of gearboxes for the main conveyor and other conveyors, first find the actual value of the main conveyor. Calculate the ratio between the main conveyor gearbox and the other conveyor gearbox. For example, if the main conveyor gearbox ratio is 200 and the other conveyor's I/P to O/P ratio is 100, you should create an analog output for the main conveyor's RPM by multiplying it by 100 and dividing by 200 for the same speed. Please note that this logic will only work if the drive motor's maximum RPM is the same for all conveyors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>abhirupbera</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I had to make an educated guess, I would say that there is a popular amber beverage labeled with multiple X's passing through these conveyors. Before anything else, if the primary conveyor is equipped with a Variable Speed Drive (VSD) and its speed is being adjusted, you should be able to synchronize the pusher speed accordingly using the same method. What obstacles do you encounter in doing so - are they related to separate Programmable Logic Controllers (PLCs)? It would be advisable to explore this option before considering any others.

If for some reason this approach is not feasible, using a proximity sensor to count pulses is a practical method, especially if precise accuracy is not critical. However, as Peter suggested, you may want to consider placing the sensor on a non-driven shaft to account for any belt slippage (though there is still a possibility of slippage on the non-driven shaft). Ultimately, the exact location of the sensor may not significantly impact accuracy if it is not a crucial requirement.

There are a few alternatives to consider, depending on the frequency of pulses. If multiple pulses are detected per second, you could tally the pulses within a fixed timeframe, calculate the speed, and repeat the process. It may be beneficial to reduce the timeframe to 3-5 seconds based on pulse frequency. Additionally, ensure that the pulse rate does not necessitate a high-speed counter card.

However, if the pulses are spaced a couple of seconds or more apart, a different approach should be taken. Measure the time between each pulse to calculate the instantaneous speed. Store the last 5-10 intervals in an array and utilize a moving average for a more stable figure. While this may seem complex for programming novices, there are numerous examples available in forums to guide you through the process.

To reiterate, the initial step should be to utilize the main conveyor's speed reference directly, rather than devising a new method to calculate it using sensors and timers. And lastly, a warm welcome to the forum!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am seeking guidance on configuring a logic sequence for measuring filler speed using retro-reflect sensors. Since my S7-1500 lacks a high-speed counter, I plan to position two sensors one meter apart and calculate the speed based on the time interval between pulses. By storing the last 5-10 intervals in an array and using a moving average, a more stable and accurate speed figure can be achieved. This approach may seem complex for beginners in programming. Can anyone share an example of this logic in TIA programming? Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>K.Bester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Download the PDF showcasing a sample program I created in MicroLogic to calculate the MPH of a vehicle passing between two sensors placed approximately 8 inches apart. Originally designed for a 1/4 scale train ride, this code can be adjusted to calculate different velocity measurements such as Meters per minute, KM per hour, inches per minute, mm per second, and more. Simply modify the distance and time variables to suit your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Gratitude to Ivan</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>K.Bester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I made a couple of enhancements to the system. Initially, I updated the overspeed alarm setting after switching the display value from an integer to a 1 decimal place Real. Additionally, I included a multiplier line to show an alternative velocity along with a list of possible multipliers. It was noted that the 5000 value in rung 3 could be multiplied by these factors to bypass MPH and directly compute the desired value. To improve readability, I adjusted the zoom for the printout, although this change did not apply to the PDF print driver.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently working on developing a plan to modify a machine at my workplace. The machine, equipped with a 1756-L73S Controller, consists of a main conveyor that operates at a variable speed, with a pusher conveyor pushing product onto it every 30 seconds. Both conveyors are controlled by Variable Speed Drives (VSDs) and are integrated into the original PLC code.

The main challenge is to synchronize the speed of the pusher conveyor with the varying speed of the main conveyor throughout the day. My initial idea involves using a prox sensor on an intermediate gearbox shaft to count pulses and store the values in memory for comparison.

However, it is recommended to implement a Proportional-Integral-Derivative (PID) controller with feed forwards for more accurate speed synchronization. By comparing the counts of both conveyors and calculating any deviation, adjustments can be made to ensure they move at the same speed.

While precision is not crucial for this project, it is essential to simplify the solution for someone who is new to PLC programming. Therefore, using a 10 ms interrupt to compute the count values for each conveyor, considering rollover, and applying feed forward control based on the speed of the main conveyor can help achieve the desired outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The latest IT Link proximity sensors feature a readable frequency, making them an affordable option for encoder solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JaxGTO</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before solving the issue of varying conveyor speed, it is crucial to identify the root cause. Possible reasons for speed fluctuations include changes in the speed command to the Variable Frequency Drive (VFD), belt slippage on the drive pulley, and potential overloading of the main conveyor. If the VFD is overloaded, it can result in a slowdown in conveyor speed even if the speed command is steady. Simply timing between two points will not address the problem if there is slippage. These factors are just a starting point in diagnosing the issue of speed variance. It is essential to pinpoint the cause before attempting to resolve it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I synchronize conveyor speeds using a PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> - One approach is to use a proximity sensor on an intermediate gearbox shaft to count pulses and compare them to determine any deviation in conveyor speed. This deviation value can then be used to adjust the speed of the pusher conveyor accordingly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the role of the 1756-L73S Controller in synchronizing conveyor speeds?</h4>
<p class='text-muted'><strong>Answer:</strong> - The 1756-L73S Controller can be utilized to integrate the control of both the main conveyor and the pusher conveyor, allowing for synchronization based on the detected deviation in conveyor speeds.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the significance of counting pulses for 20 seconds in the synchronization process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Counting pulses for 20 seconds allows for collecting sufficient data to compare the speed of the main conveyor over time, enabling the PLC program to make accurate adjustments to the pusher conveyor speed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How does the proximity sensor on the intermediate gearbox shaft contribute to synchronizing conveyor speeds?</h4>
<p class='text-muted'><strong>Answer:</strong> - By counting pulses on the intermediate gearbox shaft, the proximity sensor provides real-time feedback on the speed of the main conveyor, facilitating the adjustment of the pusher conveyor speed to maintain synchronization.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. As a novice in PLC programming, how complex is the proposed method for synchronizing conveyor speeds?</h4>
<p class='text-muted'><strong>Answer:</strong> - The proposed method is straightforward and does not require high precision. By implementing a simple concept of counting pulses and comparing values, even</p>
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
