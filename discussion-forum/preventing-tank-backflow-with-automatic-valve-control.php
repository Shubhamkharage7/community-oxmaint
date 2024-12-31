
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We encountered an issue where the tank level unexpectedly rose due to backflow from the system it normally supplies. To prevent this from happening again, we aim to implement a logic that will automatically close the tank discharge valve when the tank level starts to increase beyond the desired">
    <meta name="keywords" content="preventing tank backflow, automatic valve control, tank level monitoring, tank discharge valve, tank fill pump, logic implementation, tank level threshold, backflow prevention, automatic valve closure, tank level monitoring system, tank fill pump cycle, rslog">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/preventing-tank-backflow-with-automatic-valve-control">
    <title>Preventing Tank Backflow with Automatic Valve Control | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Preventing Tank Backflow with Automatic Valve Control | Oxmaint Community">
    <meta property="og:description" content="We encountered an issue where the tank level unexpectedly rose due to backflow from the system it normally supplies. To prevent this from happening again, we aim to implement a logic that will automatically close the tank discharge valve when the tank level starts to increase beyond the desired">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/preventing-tank-backflow-with-automatic-valve-control">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Preventing Tank Backflow with Automatic Valve Control | Oxmaint Community">
    <meta name="twitter:description" content="We encountered an issue where the tank level unexpectedly rose due to backflow from the system it normally supplies. To prevent this from happening again, we aim to implement a logic that will automatically close the tank discharge valve when the tank level starts to increase beyond the desired">
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
        "@id": "https://community.oxmaint.com/discussion-forum/preventing-tank-backflow-with-automatic-valve-control"
      },
      "headline": "Preventing Tank Backflow with Automatic Valve Control",
      "description": "We encountered an issue where the tank level unexpectedly rose due to backflow from the system it normally supplies. To prevent this from happening again, we aim to implement a logic that will automatically close the tank discharge valve when the tank level starts to increase beyond the desired",
      "author": {
        "@type": "Person",
        "name": "ANaylor"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-16",
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
                <h1 class="text-white">Preventing Tank Backflow with Automatic Valve Control</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ANaylor</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">707</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">364</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We encountered an issue where the tank level unexpectedly rose due to backflow from the system it normally supplies. To prevent this from happening again, we aim to implement a logic that will automatically close the tank discharge valve when the tank level starts to increase beyond the desired threshold. 

Usually, the tank operates by discharging to the system while the fill pump is turned off. When the tank level reaches 45%, the fill pump kicks in to fill it up before shutting off. Subsequently, the tank discharge goes down to around 12.5% before the fill pump starts the cycle again. Our goal now is to ensure that the valve closes if the tank level rises while the fill pump is inactive.

One solution I have considered is to monitor the tank level every 5 seconds and compare it with the previous reading. However, I am open to suggestions for a more efficient and effective method to achieve this task. Currently, I am utilizing RSLogix 5000 for this project.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The reliability of the level signal during regular operation plays a crucial role in avoiding false alarms. It is important to monitor any slight fluctuations to prevent inaccuracies, especially when the fill valve is not in use. The approach you outlined for checking the sensor's accuracy is thorough and efficient.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent scenario, a tank experienced an unexpected increase in level due to backflow from the system it normally supplies. To prevent this, we are looking to implement logic that will automatically close the tank discharge valve when the level is rising, despite the fill pump being off.

Typically, the tank operates by discharging to the system while the fill pump remains inactive. Once the tank reaches 45% capacity, the fill pump kicks in until the tank is filled, and then stops. Subsequently, the tank discharges down to about 12.5% before the fill pump resumes its operation.

Currently, the strategy involves monitoring the tank level every 5 seconds and comparing it to the previous reading. However, a more efficient approach may be needed. Working with RSLogix 5000, it is vital to consider a deadband to avoid false alarms. 

Moreover, simply relying on the previous change in level may lead to overfilling the tank. To address this, it is recommended to calculate a rate of change value over time and set alarms based on that. This method helps account for cumulative errors and fluctuations around the current level, ensuring a more accurate monitoring system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the duration of the level adjustment process? How fast does the level change in different scenarios, such as with the discharge valve open or closed and the fill pump running or turned off?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By sampling at a rate of 10Hz and averaging over a 5-second period, you can reduce noise by approximately a factor of 7, assuming it follows a Gaussian distribution. Utilizing a least squares regression or linear fit on the most recent X seconds of samples in a First In, First Out (FIFO) basis may also help diminish noise compared to simply calculating differences between consecutive pairs of samples.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there any underlying process issues related to material backfeeding back into the tank, such as contamination or temperature fluctuations? During normal operation, does the tank level ever exceed 45% and reach 50% when the pump is turned off? Is there a concern if the level reaches 50%? If none of these scenarios are problematic, simply close the valve when the tank reaches 50% (or any number above 45%). While implementing Rate of Change (ROC) control is beneficial, it is also advisable to have an absolute shutoff in place. The reopening of the valve should be triggered by the operator. Once the valve is closed, the ROC will return to zero, and the system will either resume normal behavior (with the level not increasing) prompting the valve to reopen, or it may appear that the tank is not emptying as expected and the valve will remain closed, depending on whether zero ROC is deemed favorable or unfavorable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>During pump operation at maximum capacity, the minimum level is set to the level detected during each scan. If the current level is lower than the minimum level, the minimum level is adjusted accordingly. The valve will be closed if the difference between the level and the minimum level exceeds a specified threshold known as delta.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One common issue highlighted by users is the potential shutdown of the discharge valve due to backflow from the downstream process. The challenge lies in determining when to reopen the valve once the backflow issue is resolved. One suggestion for improved backflow detection is the inclusion of an orifice restriction near the discharge valve. By monitoring the pressure drop across the orifice and valve from upstream to downstream, the valve can be automatically opened or closed as needed. However, it is important to note that this solution may still present some noise-related challenges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, user drbitboy raised concerns about downstream backflow leading to the closure of the discharge valve. The issue arises when detecting backflow and determining when to reopen the valve. It is crucial for operators to understand the operational status and make necessary adjustments. Implementing a system that continuously monitors the level and adjusts the valve accordingly can help maintain optimal process flow. By setting specific parameters for valve operation based on the level measurements, operators can ensure efficient and effective valve management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for your attention. It is important to note that under normal circumstances, there is no reverse flow in the tank. However, following a recent incident, we are exploring options to implement an automatic monitoring system to detect and close the tank discharge valve in case of backflow occurrences. Typically, the tank level remains stable or decreases over time, making it challenging to identify an increase in level (such as a 0.1% increase over a 5-second period) without a suitable tool for comparison. To address this, I have opted to utilize a pseudo Rate of Change (ROC) process by leveraging a module within one of our AOIs that features a built-in ROC mechanism. This module allows me to customize the sample frequency, debounce time, and alarm trigger rate. I have connected the alarm to the valve output to ensure a prompt response in case of any anomalies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ANaylor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Install a check valve at the tank's discharge point.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After expressing gratitude, ANaylor shared a recent incident prompting the need for automatic backflow monitoring in a tank. The goal is to detect backflow and close the tank discharge valve automatically. Monitoring for a slight increase in tank level using a pseudo ROC process seemed like the best approach due to the steady or decreasing nature of the tank level. Utilizing a module with a built-in ROC process within one of their AOIs was the chosen solution, allowing customization of sample frequency, debounce time, and alarm trigger rate. The alarm is linked to the valve output.

It's important for the process and safety teams to consider the implications of preventing backflow. If the backflow served as a pressure relief during a pressure event, implementing this monitoring logic could limit the pressure relief available to the downstream tank. While proper pressure relief mechanisms should be in place, this factor should not be overlooked.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sometimes, it feels like we're drowning in keyboard shortcuts when all we really need is a reliable check valve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the UK, there is a famous story about a council-operated bus getting stuck under a low bridge. The council engineers, police, and fire brigade were on the scene brainstorming ways to free the bus, such as cutting sections of the roof. However, a clever little boy had a simple solution - he suggested deflating the tires. This highlights the importance of thinking outside the box in problem-solving situations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A recent issue arose where the tank level unexpectedly increased due to backflow from the system it normally supplies. Our goal is to implement logic to automatically close the tank discharge valve when the tank level is rising instead of falling. The typical process involves the tank discharging to the system, with the fill pump turning on to fill the tank to 45% before shutting off. The tank then empties to about 12.5% before the fill pump restarts the cycle. By addressing the backflow issue, we aim to prevent disruptions in the system. It is important to thoroughly investigate the root cause of the backflow before making any alterations. Consider installing a high level alarm as a precautionary measure to alert others of potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dummy_bit</span></li>
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
<h4 class='text-dark'>FAQ: What was the issue encountered related to tank backflow in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> The tank level unexpectedly rose due to backflow from the system it normally supplies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What solution is being considered to prevent tank backflow from happening again?</h4>
<p class='text-muted'><strong>Answer:</strong> Implementing a logic that will automatically close the tank discharge valve when the tank level starts to increase beyond the desired threshold.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How does the tank normally operate in terms of discharge and fill pump usage?</h4>
<p class='text-muted'><strong>Answer:</strong> The tank operates by discharging to the system while the fill pump is turned off. When the tank level reaches 45%, the fill pump kicks in to fill it up before shutting off. Subsequently, the tank discharge goes down to around 12.5% before the fill pump starts the cycle again.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What method is currently being used to monitor the tank level for backflow prevention?</h4>
<p class='text-muted'><strong>Answer:</strong> Monitoring the tank level every 5 seconds and comparing it with the previous reading is one method being considered. RSLogix 5000 is being utilized for this project.</p>
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
