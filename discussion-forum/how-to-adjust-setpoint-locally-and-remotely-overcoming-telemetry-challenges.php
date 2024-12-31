
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have inquired about this issue previously, but I still have not been able to find a solution. It is challenging for me to visualize a resolution. The local RTU has a screen where a few setpoints can be adjusted. In the past, all modifications were made locally using">
    <meta name="keywords" content="setpoint adjustment, telemetry challenges, remote setpoint control, local setpoint modification, rtu screen, oi interface, main plant control, outdated setpoints, telemetry polling, readback method, array location, selector control, complex">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-adjust-setpoint-locally-and-remotely-overcoming-telemetry-challenges">
    <title>How to Adjust Setpoint Locally and Remotely: Overcoming Telemetry Challenges | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Adjust Setpoint Locally and Remotely: Overcoming Telemetry Challenges | Oxmaint Community">
    <meta property="og:description" content="I have inquired about this issue previously, but I still have not been able to find a solution. It is challenging for me to visualize a resolution. The local RTU has a screen where a few setpoints can be adjusted. In the past, all modifications were made locally using">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-adjust-setpoint-locally-and-remotely-overcoming-telemetry-challenges">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Adjust Setpoint Locally and Remotely: Overcoming Telemetry Challenges | Oxmaint Community">
    <meta name="twitter:description" content="I have inquired about this issue previously, but I still have not been able to find a solution. It is challenging for me to visualize a resolution. The local RTU has a screen where a few setpoints can be adjusted. In the past, all modifications were made locally using">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-adjust-setpoint-locally-and-remotely-overcoming-telemetry-challenges"
      },
      "headline": "How to Adjust Setpoint Locally and Remotely: Overcoming Telemetry Challenges",
      "description": "I have inquired about this issue previously, but I still have not been able to find a solution. It is challenging for me to visualize a resolution. The local RTU has a screen where a few setpoints can be adjusted. In the past, all modifications were made locally using",
      "author": {
        "@type": "Person",
        "name": "TheWaterboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-22",
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
                <h1 class="text-white">How to Adjust Setpoint Locally and Remotely: Overcoming Telemetry Challenges</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1872</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">286</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have inquired about this issue previously, but I still have not been able to find a solution. It is challenging for me to visualize a resolution. The local RTU has a screen where a few setpoints can be adjusted. In the past, all modifications were made locally using the OI. Now, the Main Plant also wishes to have control over these setpoints via telemetry. How can this be accomplished? The challenge arises when the Telemetry package contains outdated setpoints, which will automatically overwrite the local ones during each poll. Additionally, the Main Plant will not be aware of any changes to the setpoints unless they are manually read back. 

One possible approach involves implementing a complex readback method that involves multiple reads and writes to each location. Another option could be to allocate one set of setpoints to a specific array location and store the local setpoints elsewhere, utilizing a selector at the local site to determine which setpoint to utilize. However, these options may introduce unnecessary complications. I am hopeful that there is a simpler technique that I have not yet considered. It is likely that I am not the only one facing this dilemma.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to clearly identify the owner of the setpoint, it is essential to have a designated tag for this purpose. The Operational Interface (OI) is responsible for determining whether the setpoint is set to local or remote ownership. Additionally, distinct tags such as localSetpoint and remoteSetpoint are required. The OI controls the local setpoint while the Distributed Control System (DCS) manages the remote setpoint. The system's logic determines which value is written into the actualSetpoint based on the ownership status of the setpoint.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, that's precisely what I'm trying to prevent - consistently being in the incorrect setting. I aim to reach each specific setpoint from both ends. Will I need to retrieve these values at the facility in order to successfully achieve this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you thought about implementing a system that logs the time whenever a setpoint is adjusted on the local Operator Interface? This timestamp can then be included in a telemetry change request when sent, ensuring that the request is processed in a timely manner. The local SCADA or PLC can verify the request timestamp against the current timestamp, updating the setpoint only if the request is at least 10 seconds newer. You may also choose to send a confirmation message to the remote operators, advising them to retry the update if no change is seen after 20 seconds. This protocol can improve efficiency and accuracy in your control system operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like you might have a promising idea there. I never considered utilizing timestamps before.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dealing with timestamps can be a challenge when working with integer registers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I now realize that you intended for all setpoints to apply immediately upon generation. Simply input the setpoints into a FIFO queue to ensure they are executed in order.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not sure how implementing a FIFO (First In, First Out) system can alleviate contention issues. Could you provide more details on how this method addresses the problem?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Opt for an owner-controlled 3-way switch system. This setup allows each party to take control by simply toggling a switch. The owner has the ability to adjust their preferred setpoint and easily reclaim or relinquish ownership as necessary. Avoid the hassle of the last entered value resetting automatically, as it can be frustrating when trying to maintain consistent settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy expressed frustration regarding the challenges of handling timestamps with integer registers. How do 32-bit timestamps and 16-bit registers affect this process? What protocols are being used? Are you able to control the device and its code for each setpoint adjustment? What is the specific step-by-step process involved, such as inputting a new setpoint, clicking send, and the frequency of updating setpoints from different sources? Is the current setpoint visible on the Operator Interface (OI) and in the Main Plant interface?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The plant utilizes an L81 controller, offering great potential for decision-making. However, the end destination often involves older PLC models such as PLC5, ML1400, and Click PLC. This requires designing for the lowest common denominator. One limitation is that a 16-bit register does not allow for using seconds in the day as a timestamp or conducting Date Math.

On the remote side, registers are organized so that N7:0 - N7:50 represent commands to the remote site, while N7:51 - N7:100 indicate the status of the remote site. The PLC polls and reads N7:0 x50 then writes N7:51 x50 every cycle. With numerous remote sites in sequence, incorporating code into the polling logic to detect changes before writing to the station may not be the optimal choice. While a timestamp comparison in the L81 is feasible, avoiding alterations to the polling logic, which includes sequencing and diagnostics, is preferred.

Communication protocol involves Slow radio over DF1 with no constraints. Setpoints are entered via the Operator Interface (OI) PV600 at the remote site, utilizing DH+ protocol to store values in the PLC-5 at register N7:0. The goal is to input the setpoint at the plant, transmit it to the remote site at the corresponding register (N7:0), a straightforward process.

However, a challenge arises when the plant setpoint stored on the polling PLC is resent during each polling cycle, potentially overriding any locally set values. Retrieving the specific setpoint (N7:0) would require an additional read cycle or copying it to the status registers at the remote site PLC for subsequent polling. Ensuring that the last entered value from either location takes precedence presents a more complex problem than anticipated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Forget about FIFO, let me break it down for you: XIC operation with a S:FS condition, followed by MOV operations for xlocalsp and xremotesp. If xlocalsp is not equal to xlocalsp_prev, update xlocalsp. Similarly, if xremotesp is not equal to xremotesp_prev, update xremotesp. However, this solution does not address the read-back issue. Click to learn more about troubleshooting this problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, this solution does not address your issue with reading messages again. I apologize for the inconvenience. It seems like you are facing the same obstacle repeatedly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to enhance the functionality is by creating tags for each parameter's active value, such as P1_Active_Value for pressure 1 (P1). By running the application using the active values, you can view them locally and remotely. Additionally, at each position (local and remote), you can have proposed values labeled as P1_Local and P1_Remote. To facilitate updating, include HMI buttons like PB_P1_Local_Write and PB_P1_Remote_Write for each position. Upon pressing the buttons, a move can be made from the proposed value to the active value with a one-shot process for safety. This setup allows both sides to view and update the active value, requiring some additional coding and HMI adjustments. Keep in mind that further complexity may arise, as discussed in post 11.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface mentioned that despite trying out FIFO, it simplified to a series of movements and comparisons in the code. However, this approach does not completely address the read-back problem. The proposed solution involves using five tags per setpoint, ensuring that either the HMI (Main Plant telem or local OI) cannot overwrite a newer value from the other HMI. The issue may arise from the local OI's inability to display the newer value from the Main Plant, and vice versa.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have been called into a meeting, so I will return in approximately one hour.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy mentioned having to attend a meeting and will return in an hour. No worries. I am still trying to grasp the architecture, particularly the various entities involved such as the remote side/site, polling PLC, main plant (HMI), L81, local OI station, and the entity/entities holding N7:0-N7:50 and N7:51-N7:100. I am curious if the main plant has the capability to configure setpoints on the local OI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy shared his thoughts on the issue, expressing a desire to ensure that the correct setpoints are always in place. He mentioned the need to confirm these values at the plant for the process to function smoothly. The process involves transmitting values from the main PLC to the remote PLC, comparing them, and updating the remote PLC if necessary. While this coding process may be complex and require temporary data arrays, an alternative method involves setting a selection bit on the remote PLC. This bit triggers a process where setpoints are read from the remote PLC to the main PLC. Additionally, a timer can be implemented on the main PLC to deactivate the remote PLC's permission after a set period. This approach eliminates the need for extensive code modifications and simplifies the process compared to direct data comparison. The revised process involves fewer message exchanges and offers a more straightforward solution for managing setpoints effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy expressed frustration with the complexities of handling timestamps with integer registers. It may be necessary to use a DINT for a functional timestamp, but you could easily break it down into two 16-bit sections for transmission and then reconstruct it later. With a DINT, you have the option of creating a simple AOI to generate an integer timestamp that can be interpreted as a string (e.g. 2024-01-18 14:33:55 becomes 118,143,355 - including the year may not be essential). Another possibility is utilizing the "milliseconds since 1973" format.

Alternatively, you could utilize a single INT with additional logic (possibly encapsulated in an AOI) and a reduction in resolution. If there have been no recent modifications for more than 10 minutes, you could forego checking the timestamps and assume they are valid. If there have been changes, check the timestamp - which could represent the number of 5-second intervals since midnight. You will need to address the rollover at midnight and accept a lower resolution, but this approach may be preferable to reassembling a DINT.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I allow the Main Plant to control setpoints remotely while still being able to adjust them locally?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One possible solution could involve implementing a readback method that involves multiple reads and writes to each location, or allocating setpoints to specific array locations and utilizing a selector at the local site to determine which setpoint to use.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What challenges arise when dealing with outdated setpoints in a Telemetry package that could overwrite local setpoints?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The challenge arises when the Telemetry package contains outdated setpoints, which can automatically overwrite the local setpoints during each poll. Additionally, the Main Plant may not be aware of any changes to the setpoints unless they are manually read back.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there simpler techniques available to address the issue of adjusting setpoints locally and remotely while overcoming telemetry challenges?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While complex readback methods and using array locations for setpoints are options, there may be simpler techniques that have not been considered yet. It is worth exploring alternative approaches to find a more straightforward solution to this dilemma.</p>
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
