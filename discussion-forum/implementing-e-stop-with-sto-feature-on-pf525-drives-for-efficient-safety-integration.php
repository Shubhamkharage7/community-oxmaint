
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am tasked with setting up the STO function on 2 PF525 drives for a client. While I have limited experience with this feature, I am determined to ensure its successful implementation. From my understanding, the STO inputs on the drives are connected to an external safety relay using">
    <meta name="keywords" content="e-stop, sto feature, pf525 drives, safety integration, efficient implementation, sto function setup, external safety relay, no contacts, safety relay, coil side, ethernet connection, drive operation, relay control, e-stop function">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/implementing-e-stop-with-sto-feature-on-pf525-drives-for-efficient-safety-integration">
    <title>Implementing E-Stop with STO Feature on PF525 Drives for Efficient Safety Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Implementing E-Stop with STO Feature on PF525 Drives for Efficient Safety Integration | Oxmaint Community">
    <meta property="og:description" content="I am tasked with setting up the STO function on 2 PF525 drives for a client. While I have limited experience with this feature, I am determined to ensure its successful implementation. From my understanding, the STO inputs on the drives are connected to an external safety relay using">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/implementing-e-stop-with-sto-feature-on-pf525-drives-for-efficient-safety-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Implementing E-Stop with STO Feature on PF525 Drives for Efficient Safety Integration | Oxmaint Community">
    <meta name="twitter:description" content="I am tasked with setting up the STO function on 2 PF525 drives for a client. While I have limited experience with this feature, I am determined to ensure its successful implementation. From my understanding, the STO inputs on the drives are connected to an external safety relay using">
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
        "@id": "https://community.oxmaint.com/discussion-forum/implementing-e-stop-with-sto-feature-on-pf525-drives-for-efficient-safety-integration"
      },
      "headline": "Implementing E-Stop with STO Feature on PF525 Drives for Efficient Safety Integration",
      "description": "I am tasked with setting up the STO function on 2 PF525 drives for a client. While I have limited experience with this feature, I am determined to ensure its successful implementation. From my understanding, the STO inputs on the drives are connected to an external safety relay using",
      "author": {
        "@type": "Person",
        "name": "jakeparsons03"
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
                <h1 class="text-white">Implementing E-Stop with STO Feature on PF525 Drives for Efficient Safety Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jakeparsons03</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5219</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">328</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am tasked with setting up the STO function on 2 PF525 drives for a client. While I have limited experience with this feature, I am determined to ensure its successful implementation. From my understanding, the STO inputs on the drives are connected to an external safety relay using the NO contacts. Initially, I thought of placing the E-Stop on the coil side of the safety relay, but this doesn't seem like the most efficient approach. Why introduce an additional relay when the E-Stop could directly control the function? It also worth noting that the drives will be operated via ethernet connection.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Safety relays are equipped with intelligence to conduct internal tests for short circuits and other potential hazards. This feature is often described in the product manual, recommended by the manufacturer to ensure optimal safety measures. Adhering to the manufacturer's guidelines can protect against unforeseen problems in a worst-case scenario.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ojz0r</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensuring the functional safety of machinery goes beyond just the wiring of e-stop pushbuttons to motor drives. In the past, the standard practice was to connect an e-stop button with a pull or push-to-reset mechanism to an Enable pin on a drive logic board. However, issues such as shorts in the wiring or a malfunctioning circuit could prevent the e-stop button from effectively stopping the machinery. To address these concerns, safety relays with dual channels, short-circuit and cross-circuit detection, feedback monitoring, and manual reset inputs are employed. It's essential to have a thorough discussion about safety relay options, such as the Guardmaster 440R, safety contactors, or force-guided relays like the 700S-CF contactor or 700-HPS ice cube style, when implementing Safe Torque Off (STO) for the first time. This proactive approach ensures that the safety aspects of the application are properly addressed during the overall risk analysis of the machine system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken provided excellent insight into the topic. I want to elaborate on a few key points that are important when discussing anything beyond a basic device with inputs, logic, and outputs, as mentioned by Ken. These include channel-to-channel shorts, cross wiring, and shorts to 24VDC. These are crucial considerations to keep in mind when working with such devices.

The Safety Torque Off (STO) function is designed to cut off the firing signal to the drive output, allowing the drive to smoothly come to a stop. However, this feature can pose a potential issue when dealing with machinery like saws or other equipment with hazardous motions, where a sudden stop could be problematic. In some of my previous applications, I used a stop command to bring the motor to a standstill before activating the STO function.

By prioritizing safety features like STO, you can position yourself to tap into a new market segment focused on safety-conscious customers. This proactive approach can open up opportunities for growth and expansion in your business.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeffKiper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jeff Kiper discussed the importance of the STO, or Safe Torque Off, feature in drive systems. The STO removes the firing signal to the drive output, allowing the drive to free wheel to a stop. However, this could pose a safety issue in situations involving hazardous equipment like saws. In some applications, a stop command is used to bring the motor to a standstill before activating the STO for added safety measures.

The concept of safety in drive systems can sometimes be unclear. While Siemens documentation states that STO is the main safety function, there are drives with SS1 (Safe Stop 1) functionality that stop the drive before engaging STO. Yet, according to manuals, SS1 is not considered a safety function until STO is activated. In practical terms, this distinction may not be noticeable in most machines, but in cases of equipment like fans or centrifuges, the time it takes for natural stopping can be prolonged.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do not disregard the importance of VFD STO, as it offers the same functionality as using contactors to shut off power to the motor. In both scenarios, the motor will come to a stop on its own due to inertia. Whether this is a viable option should be determined in the risk assessment process. A VFD STO can provide a high level of performance, such as achieving PL=d or PL=e with Siemens G120 and its integrated STO. Implementing redundant contactors may be necessary to reach these safety levels. Refer to the VFD documentation for information on what can be accomplished and how to set it up. Additionally, take into account the advice from Ken regarding the use of a safety relay for added protection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, JesperMP emphasized the importance of not underestimating the value of VFD STO in motor applications. Similar to using contactors to stop the motor, VFD STO allows for the motor to gradually come to a standstill on its own. The decision to consider this method as acceptable should be made after conducting a thorough risk assessment. By implementing a VFD with integrated STO, such as the Siemens G120 which can achieve safety levels of PL=d or PL=e, a high level of performance can be achieved. It is important to review the VFD documentation for specific details on implementation. Additionally, incorporating a safety relay, as suggested by Ken, is crucial for enhancing safety measures. STO offers the advantage of flexibility in integrating a custom braking system, reducing reliance on control systems which may be less reliable in safety critical applications. When considering emergency stop responses, it is essential to evaluate potential risks and determine the desired outcome. By collaborating with customers to understand their safety requirements, a suitable plan can be devised, with STO often proving to be an effective solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JTCat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JTCat warned about the potential damage that can occur from abrupt stopping of machinery. In my experience, the infrastructure was not able to withstand the sudden halt of the winch I was operating at full load. It is surprising that the designers of the tower where I worked were not held accountable for this oversight.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential to clarify to operators that Safe Torque Off (STO) is distinct from Lockout/Tagout (LO/TO) requirements and should not be used interchangeably. STO is implemented on Variable Frequency Drives (VFDs) and Servo drives to prevent damage to power electronics when power is removed. Components with limited lifespans are affected by frequent power cycling, which can lead to premature failure. The primary purpose of STO is to enable operators to perform regular operational tasks safely, such as loading components or clearing a jammed conveyor, without actually disconnecting power from the VFD. STO should not be mistaken for an Emergency Stop (E-Stop), as it serves a different function and requires separate considerations for emergency situations. While STO can be part of an E-Stop system, it should not be the sole method for emergency shutdown.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jraef</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jraef emphasized the importance of distinguishing between Lockout/Tagout (LOTO) requirements and Safe Torque Off (STO) procedures. It is crucial to educate operators about these differences and ensure they are not used interchangeably. The ANSI Z244.1 document provides detailed information on LOTO and alternative methods, highlighting the distinction between full LOTO and STO processes. Understanding when to implement each method is essential, as interpretations may vary among local OSHA inspectors. It is recommended to have all relevant documentation readily available and clearly referenced. Providing evidence and explanations based on industry standards can help resolve any discrepancies with inspectors, as demonstrated by a successful case involving the installation of servo motors with STO on an automatic drilling station. This modification significantly reduced changeover times and improved efficiency, demonstrating the benefits of implementing STO solutions in industrial settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeffKiper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Safety Torque Off (STO) feature eliminates the necessity of cutting off power completely from the motor during a controlled or emergency stop. Connecting the STO through the dry contacts of a "Safety relay" force-guided relay is a commonly recommended method of utilizing the STO function. This setup prevents the motor from starting again until the safety relay is manually reset. It is important to note that, despite its benefits, STO is not a replacement for Lockout Tagout (LOTO) procedures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BOWILLY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I just came across this insightful **-thread and I must say, the information shared here is truly phenomenal. Huge thanks to everyone involved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to jakeparsons03's query, why add an unnecessary relay when you could simply utilize the E-Stop for safety purposes? The safety relay is equipped with dual contacts and monitoring capabilities, ensuring that both contacts function in sync. Relays operate on the principle of redundancy, with a minimal chance of contact failure. Safety relays are designed with features such as automatic resets to prevent misuse. Manufacturers invest heavily in testing and designing these devices for approved applications. It is recommended to follow specified guidelines and not bypass safety features. Risk assessments involve thorough circuit testing and documentation to ensure compliance with safety standards. Utilizing tools like Sistema software can aid in cross-referencing safety devices for maximum safety ratings. The ISO 12100:2010 and ISO 14121-1:2007 standards provide guidance on achieving safety in machinery design through risk assessment and reduction. Collaboration with colleagues and seeking help from superiors is essential in designing safety systems ethically and effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyAdair87</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I fully agree with the points made earlier, as every situation is unique. It is worth noting that there are cases where you can directly connect an emergency stop button to the Safe Torque Off (STO) inputs. For instance, in the document linked here (https://literature.rockwellautomation.com/idc/groups/literature/documents/um/20c-um001_-en-p.pdf), it shows an example of Drive Safe Torque Off Connections with Coast-to-Stop Action and Emergency Stop Operation, Dual Channel, without External Relay Fault Detection. This setup includes redundant double break contacts on the Trojangate interlock to ensure that the Safe Torque Off option board receives a signal when the gate is opened. If a single fault is detected on the safety input circuits, the system will be locked out to a safe state at the next operation without losing the safety function. Each input on the Safe Torque Off option board independently monitors the safety circuit status and the status of the other input on the board.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lanman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of VFDs, it's important to understand that STO should not be viewed solely as an emergency stop function. Differentiating between what constitutes an actual "emergency" and how the VFD should respond in various scenarios is crucial. While STO can be utilized as part of an E-stop system, it should not be the sole method of emergency shutdown. A recent project at our plant involved implementing both SS1 and STO in our machines, a unique approach that has proven successful. Our E-stop buttons are programmed to activate SS1, while a separate button on the machine triggers STO when pressed. In addition, any general machine fault will also trigger the STO function. These features are seamlessly integrated with our Rexroth drives for optimal performance and safety.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to lanman's comment, it is important to acknowledge that every situation is unique. However, it is worth noting that in certain scenarios, it is possible to directly connect an emergency stop button to STO inputs, as detailed in the document provided by Rockwell Automation.

Specifically, Example 1 in the manual discusses Drive Safe Torque Off Connections with Coast-to-Stop Action and Emergency Stop Operation, Dual Channel, without External Relay Fault Detection. This setup includes redundant double break contacts on the Trojangate interlock to ensure the Safe Torque Off option board receives a signal when the gate is opened. In the event of a fault in the safety input circuits, the system will be locked out to a safe state without losing its safety function.

It is crucial to verify if the drive being used has similar options as described in the manual. Some STO options may not prioritize monitoring, which can lead to issues with drive operation and reset functionality. While the design may not be ideal, it is still a valuable feature to have. Thank you for sharing this information and educating us on this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyAdair87</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User busarider29 shared their recent experience of commissioning machines at their plant, where they successfully implemented both Safe Stop 1 (SS1) and Safe Torque Off (STO) functionalities. This unique combination was a first for them, but they found it to be effective. The E-Stop buttons are configured to activate SS1, while a separate button on the machine is used to trigger STO. Additionally, any general machine fault condition automatically triggers STO for added safety measures. The plant utilizes Rexroth drives for their operations. Can you clarify if, as mentioned earlier, a general fault results in the activation of STO and the E-Stop triggers SS1? I initially assumed that SS1 would be activated in both scenarios.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
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
<h4 class='text-dark'>FAQ: 1. How do I set up the STO function on PF525 drives for efficient safety integration?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up the STO function on PF525 drives, connect the STO inputs on the drives to an external safety relay using the NO contacts. Consider directly connecting the E-Stop to control the function without introducing an additional relay for more efficiency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can the E-Stop directly control the STO function on PF525 drives?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, instead of using an additional safety relay, you can connect the E-Stop directly to control the STO function on PF525 drives for a more streamlined approach.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the recommended wiring configuration for implementing STO on PF525 drives?</h4>
<p class='text-muted'><strong>Answer:</strong> - The STO inputs on PF525 drives should be connected to an external safety relay using the NO contacts. Consider optimizing the setup by directly connecting the E-Stop to control the STO function.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How does operating PF525 drives via an ethernet connection impact safety integration?</h4>
<p class='text-muted'><strong>Answer:</strong> - Operating PF525 drives via an ethernet connection does not directly impact safety integration; however, it is essential to ensure that the safety features, including STO and E-Stop, are properly configured and integrated into the system for safe operation.</p>
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
