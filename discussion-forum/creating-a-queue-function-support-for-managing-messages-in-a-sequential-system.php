
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The concept behind this system is to efficiently manage a rapid influx of message codes while avoiding repeated announcements of the same message in sequence. For example, if two events occur closely together, such as explosions, only one announcement will be made. However, if different events occur within a">
    <meta name="keywords" content="queue function, managing messages, sequential system, rapid influx, message codes, repeated announcements, explosions, flood, locust infestation, serial control device, eth i/p gateway, message playback function, stack manipulation, raspberry pi, arduino, cip">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/creating-a-queue-function-support-for-managing-messages-in-a-sequential-system">
    <title>Creating a Queue Function: Support for Managing Messages in a Sequential System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Creating a Queue Function: Support for Managing Messages in a Sequential System | Oxmaint Community">
    <meta property="og:description" content="The concept behind this system is to efficiently manage a rapid influx of message codes while avoiding repeated announcements of the same message in sequence. For example, if two events occur closely together, such as explosions, only one announcement will be made. However, if different events occur within a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/creating-a-queue-function-support-for-managing-messages-in-a-sequential-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Creating a Queue Function: Support for Managing Messages in a Sequential System | Oxmaint Community">
    <meta name="twitter:description" content="The concept behind this system is to efficiently manage a rapid influx of message codes while avoiding repeated announcements of the same message in sequence. For example, if two events occur closely together, such as explosions, only one announcement will be made. However, if different events occur within a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/creating-a-queue-function-support-for-managing-messages-in-a-sequential-system"
      },
      "headline": "Creating a Queue Function: Support for Managing Messages in a Sequential System",
      "description": "The concept behind this system is to efficiently manage a rapid influx of message codes while avoiding repeated announcements of the same message in sequence. For example, if two events occur closely together, such as explosions, only one announcement will be made. However, if different events occur within a",
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
      "datePublished": "2024-08-01",
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
                <h1 class="text-white">Creating a Queue Function: Support for Managing Messages in a Sequential System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>23 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1165</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">496</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>The concept behind this system is to efficiently manage a rapid influx of message codes while avoiding repeated announcements of the same message in sequence. For example, if two events occur closely together, such as explosions, only one announcement will be made. However, if different events occur within a short timeframe, like an explosion followed by a flood, both will be announced in order of occurrence.

The anticipated locust infestation is scheduled for later, and it will be a single event that still requires notification. Due to the use of a serial control device with an ETH I/P gateway, there may be a delay between sending a command and receiving a response. Therefore, the logic implemented must account for this delay.

Before allowing the activation of a message playback function or manipulating the stack, the device must be checked for its busy status. Despite this, the stack should still be able to receive additional values as they come in.

The process described could benefit from a Raspberry Pi or Arduino with CIP Ethernet capabilities. However, there may not be support for this protocol in that context, and there may not be time to learn a new technology at the moment.

To interact with the HMS serial/IP Gateway, certain procedures must be followed, such as incrementing a trigger byte before sending or receiving data. The player itself is more straightforward and responds to single ASCII characters, but due to the serial nature of communication, the mentioned incrementation is necessary.

While the device can play messages by manipulating bits and values within the PLC, there seems to be a challenge with queuing the messages for playback. Some assistance with example code for implementing a First-In-First-Out (FIFO) queue is sought to overcome this hurdle.

In this system, certain defines are used to manage codes and statuses, such as [IncomingCode], [CheckForBusy], [EvaluationTag], and [BusyFlag]. The FIFO pair (STACK) operates efficiently for holding new codes while the player is occupied, but integrating it into the overall process is the current obstacle.

The provided pseudocode outlines the flow of operations, including checking for incoming codes, monitoring the player's status, and handling the playback of messages. This flow ensures the proper handling and playback of messages based on the system's status and conditions.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a limited amount of codes? Each code serves as an index in an array of TOFs. Access the TOF array using the IncomingingCode code, then proceed to execute TOF once the IncomingCode code is completed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If necessary, additional comments can be included. I don't anticipate there being more than a dozen, but I'm unsure how your response addresses all of this. The comments I provided are merely extra inquiries about the flow. Are you referring to any specific aspect?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy inquired about the effectiveness of your response in making everything function smoothly. The code initializes the TOF timer structure at offsetIncomingCode within the tofarray (an ARRAY[0..24] of TIMER Structure type) only if the TOF timer is not currently running, and it continues running if it is already active. It may be helpful to utilize each or all of the tofarray[...]DN bits for functionalities like sounding a horn.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need assistance with incorporating the elimination of duplicate stack entries and employing a FFL/FFU as a Surge Accumulator. Packaging lines typically utilize similar methods, such as shift registers for empty bottle detection. However, I am seeking a solution to track integers in a more precise and compact manner.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Using arrays instead of FFL/FFU/FIFO functions can make your programming much simpler and more efficient; dealing with those features can be quite troublesome. One approach is to utilize the mean scan cycle as a "clock" and cycle through 32 unique "codes" per scan cycle. For example, if your continuous scan cycle runs at 1kHz, setting a "timer preset" of 1000 in the MOV instruction on rung 0001 equates to approximately 31 seconds with a timer resolution of around 32 milliseconds. You may need to adjust and calibrate your own scan cycle and timer preset to achieve the desired time delay.

To track incoming codes, it is recommended to clear the code to 0 at the start of each scan cycle since it's essentially a one-shot operation. However, in this scenario, the incoming code is not cleared until halfway through the cycle to monitor its behavior. The value assigned to the "incoming code" (N7:0) was initially set to 1, then changed to 2 after a certain period, and reverted back to 1. Notably, the countdown of the timer (N9:1) for the incoming code was not reset when the value returned to 1, as the timer had not yet reached zero.

Although this method may appear intricate at first glance, it ultimately simplifies the process compared to using FFL/FFU/FIFO functions. By embracing this approach, you can streamline your programming logic and achieve desired functionalities more effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Additionally, the information may be more concise and comprehensible in ST.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will be working on this in Logix5k (apologies for not mentioning it earlier). I will need to review it again tomorrow to fully understand its functionality and benefits. Hopefully, a fresh perspective will provide some clarity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This method utilizes FFU/FFL/FIFO for enhanced efficiency and performance. The timing is set at a notional value for observation purposes and may require adjustments for specific applications. Implementing a preset of 100ms is recommended, which can also be integrated into a timed interrupt routine to streamline the process. It is important to clear the FFU/FFL control structure /EU and /EN bits for proper rising edge detection.

In this setup, a value of zero for IncomingCode signifies "No Code," making B3:0/0 non-usable. To prevent duplicate entries of non-zero code values in the FIFO, the conditional XIC B3:0/[N7.0] CLR N7:0 branch must be included to handle active "alarm" codes effectively.

The implementation of these codes can be done using Logix5k or 500, ST, or Ladder programming languages, as it only impacts the technical details, not the core algorithm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Implementing FIFO using CCW, ST, and COP is crucial to efficiently manage data by utilizing a Selectable Timed Interrupt (STI) as the triggering event. The STI code includes protective measures against invalid incoming data, with the algorithm primarily consisting of only a few statements. Global Data is displayed in real-time with three active alarms and one (5, in fifo[0]) about to deactivate. Configuration for STI may vary in Studio5k, but the functionality remains similar. Local data is also available for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey TheWaterboy, since you brought up explosions, could you provide some context about the environment? If this is a facility dealing with munitions, we need to set off both alarm systems as per our safety protocols. Thanks, James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to explosions, James Mcquade asked about the environment surrounding the situation. Let's consider a scenario where the explosion alarm at a Baked Beans manufacturer is activated by methane emissions from employees smoking in a designated area. This raises questions about workplace safety and potential hazards in such settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why would anyone choose to consume food produced on an assembly line? Laugh out loud, this raises an interesting question about food quality and freshness.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For those seeking the thrill of witnessing explosive action, attending an NHRA National Drag Racing event is a must.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Padees jokingly mentioned, "LOL, but why would anyone desire consuming a mass-produced item?" It's just boys being boys.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>padees suggested that if you want to see exciting explosions, you should attend an NHRA National Drag Racing Event. It's an experience that doesn't require any additional hype. Click here to learn more about these thrilling events.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Following up after an event is crucial for effective cleanup and organization. It is important to announce the follow-up plan to ensure all loose ends are tied up.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to the odor issue raised, it's often the overpowering scent of the expensive carnival fare they sell. It's absolutely dreadful! That's why I always bring a cooler packed with snacks when we visit Route 66 annually.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need to incorporate the word "vittles" into my vocabulary more often. It adds a charming and Southern touch to everyday conversations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon first glance, I assumed your post was a joke, but vittles is indeed a 14th century term, closely related to victuals. In my interpretation, vittles are synonymous with home cooking, implying dishes prepared within the comfort of one's own home. Home cooked vittles are a much-appreciated treat after a day of physical labor. A classic example of vittles could be fried chicken with potato salad. I recently visited Wilbur's in North Carolina, as featured on the food channel, where I enjoyed lunch consisting of deep-fried chicken gizzards, a small serving of coleslaw, and unfortunately, the ribs I had ordered were not provided. This experience showcases the unpredictable nature of dining out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I vividly remember hearing that word when I was younger. It seemed to be a popular term used in the scripts of the Beverly Hillbillies TV show.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was completely appalled by my experience at Wilber's in North Carolina. It felt like a bad case of deja vu, even though I wasn't even there the day before. The whole ordeal was absolutely dreadful. That pretty much sums up my thoughts on the matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to address the main topic of the post, but I have been overwhelmed by other pressing issues throughout the day.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're still following this discussion, I've successfully implemented a Queue code that is effective. The code functions like a Pachinko Machine but it gets the job done. While I haven't tested it against a large queue or rapid code influx, I believe it would handle them by filtering out duplicates among the ten existing codes. This ensures efficient processing and accuracy within the queue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is it important to manage a rapid influx of message codes in a sequential system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Efficiently managing a rapid influx of message codes in a sequential system helps avoid repeated announcements of the same message in close succession, ensuring clarity and effectiveness in communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can delays in communication be addressed when implementing a queue function for managing messages?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Delays in communication, such as those caused by serial control devices like the ETH I/P gateway, can be accounted for by implementing logic that considers the delay between sending a command and receiving a response.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What devices or technologies can be used to enhance the message playback function in the described system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Devices like Raspberry Pi or Arduino with CIP Ethernet capabilities could benefit the system, but compatibility issues with protocols and time constraints for learning new technologies may need to be considered.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why is implementing a First-In-First-Out (FIFO) queue important in overcoming challenges with queuing messages for playback?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Implementing a FIFO queue helps ensure messages are played back in the correct order, addressing challenges with managing and prioritizing messages for playback efficiently.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  How are defines like [IncomingCode], [CheckForBusy], [EvaluationTag], and [BusyFlag] used in the context of managing messages and statuses within the system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Defines are used to manage codes and statuses within the system, with specific definitions</p>
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
