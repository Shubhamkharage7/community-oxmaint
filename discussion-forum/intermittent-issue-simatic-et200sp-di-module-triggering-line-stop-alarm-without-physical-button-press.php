
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are currently experiencing intermittent issues with the emergency stop and line stop at our facility. The line stop alarm is being triggered even though the button has not been physically pressed. This push button is connected to a digital input module, which is linked to the Simatic ET200">
    <meta name="keywords" content="simatic et200sp, di module, line stop alarm, intermittent issue, button press, digital input module, nc contact, cable verification, alarm acknowledgment, line restart, push button, facility issue, emergency stop, simatic system">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/intermittent-issue-simatic-et200sp-di-module-triggering-line-stop-alarm-without-physical-button-press">
    <title>Intermittent Issue: Simatic ET200SP DI Module Triggering Line Stop Alarm without Physical Button Press | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Intermittent Issue: Simatic ET200SP DI Module Triggering Line Stop Alarm without Physical Button Press | Oxmaint Community">
    <meta property="og:description" content="We are currently experiencing intermittent issues with the emergency stop and line stop at our facility. The line stop alarm is being triggered even though the button has not been physically pressed. This push button is connected to a digital input module, which is linked to the Simatic ET200">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/intermittent-issue-simatic-et200sp-di-module-triggering-line-stop-alarm-without-physical-button-press">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Intermittent Issue: Simatic ET200SP DI Module Triggering Line Stop Alarm without Physical Button Press | Oxmaint Community">
    <meta name="twitter:description" content="We are currently experiencing intermittent issues with the emergency stop and line stop at our facility. The line stop alarm is being triggered even though the button has not been physically pressed. This push button is connected to a digital input module, which is linked to the Simatic ET200">
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
        "@id": "https://community.oxmaint.com/discussion-forum/intermittent-issue-simatic-et200sp-di-module-triggering-line-stop-alarm-without-physical-button-press"
      },
      "headline": "Intermittent Issue: Simatic ET200SP DI Module Triggering Line Stop Alarm without Physical Button Press",
      "description": "We are currently experiencing intermittent issues with the emergency stop and line stop at our facility. The line stop alarm is being triggered even though the button has not been physically pressed. This push button is connected to a digital input module, which is linked to the Simatic ET200",
      "author": {
        "@type": "Person",
        "name": "athidi006"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">Intermittent Issue: Simatic ET200SP DI Module Triggering Line Stop Alarm without Physical Button Press</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>athidi006</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">452</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">311</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We are currently experiencing intermittent issues with the emergency stop and line stop at our facility. The line stop alarm is being triggered even though the button has not been physically pressed. This push button is connected to a digital input module, which is linked to the Simatic ET200 SP system. Despite replacing the NC contact of the push button, the DI module, and verifying the cable, the problem persists. After acknowledging the alarm, we are able to restart the line. This issue reoccurs every 10 to 15 days. Any assistance in resolving this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there various line stops or other NC devices connected to this module that can be used to track the loss of an 'on' condition? Does the entire module lose state for all inputs, or just one? Are you monitoring communications on this specific rack? Are the inputs running on AC or DC? What communication protocol (such as Profibus) is used to connect to the rack, and what is the host PLC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Robert, thank you for your prompt response. We have three line stop NC contact push buttons connected to one DI module. The issue is consistently occurring with one specific button out of the three. It seems that only one input is temporarily losing its state. The circuit operates at DC 24 volts and is hard-wired from the push buttons to the DI module, which is then inserted into the backplane of a Siemens Simatic ET200SP. This ET 200 SP communicates through Profinet (LAN) to the main PLC Simatic S7-1516F. We are using a 7-core x 1 sq.mm control cable that is 30 meters in length for connecting the single-channel line stop and dual-channel emergency stop. Could the cable possibly be causing the issue, or do you suspect a problem with the PLC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>athidi006</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are utilizing Profinet communication, errors can result in alarm triggers. It is crucial to ensure that the Profinet cable being used is a professionally built standard Ethernet cable with Profinet RJ45 connectors, utilizing a Profinet cable stripper. Last year, I was contacted by a representative of a German machine builder who was facing intermittent communication errors. Upon inspecting the LAN cable, which was purchased from an office equipment store, I quickly identified the issue. By constructing a cable with a 90 RJ45 plug to minimize stress, I was able to resolve the problem and have not received any further communication regarding errors. This highlights the importance of using the correct equipment and professional assembly to prevent such issues from occurring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Robert, thank you for your prompt response. We have three line stop NC contact push buttons connected to one DI module. The issue is that the line stop is consistently triggered by the same button out of the three. There is only one input that temporarily loses state and then recovers immediately. This is in a DC 24V circuit, with the push buttons hardwired to the DI module, which is then inserted into the Siemens Simatic ET200SP backplane. The communication from ET 200 SP to the main PLC Simatic S7-1516F is through Profinet (LAN). We are using a 7 core x 1 sq.mm control cable that is 30 meters long for each line stop channel.

Could the cable be causing issues, or do you suspect a problem with the PLC? Profinet communication errors trigger alarms, so it's important to ensure that the Profinet cable is a standard Ethernet cable with professionally built Profinet RJ45 connectors. Last year, I assisted a German machine builder who was experiencing occasional communication errors due to using LAN cable from an office equipment shop. Simply touching the cable triggered an alarm. By building a cable with a 90 RJ45 plug to reduce stress, the issue was resolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>athidi006</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alfredo Quintero emphasized the importance of using Profinet communication to avoid triggering alarms due to errors. It is crucial to ensure that the Profinet cable is a standard Ethernet cable with professionally built Profinet RJ45 connectors, using a Profinet cable stripper. Last year, a representative of a German machine builder contacted Alfredo regarding occasional communication errors. The machine had LAN cable purchased from an office equipment shop, which triggered an alarm when touched by Alfredo. To resolve the issue, Alfredo built a cable with a 90 RJ45 plug to reduce stress, and there have been no further reports of errors. It is essential to use professional Siemens Profinet RJ45 plugs to maintain smooth communication. If there is a communication issue with the RJ45 plug, it may consistently trigger alarms from the same point, such as the line stop push button.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>athidi006</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In your initial post, you referenced emergency stop and line stop, however, there is no further mention of emergency stop in subsequent posts. Have you checked if there are any additional digital inputs available in the area? If so, consider swapping the input to a spare one and make the necessary updates to the programmable logic controller (PLC) code. Furthermore, have you reviewed the diagnostic buffer in the CPU for any potential clues? Is a line stop considered an alarm in this context? In my experience, line stops are not common in many systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Athidi006 inquired about the possibility of a communication issue with their professional Siemens ProfiNet RJ45 plug triggering alarms consistently from the same point. If the fault is always occurring at the same location and the cables and connectors are standard Profinet products, it is less likely to be a communication issue. However, it is important to address and rule out any basic issues that may be causing the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello LD, we are encountering intermittent alarm issues with our emergency stop push button, line stop push button, and maintenance switch Aux block. The most common problem we are facing is the line stop push button triggering without being pressed. Today, we will focus on addressing this specific issue with the line stop push button, which is crucial for halting the production line. Unfortunately, we have not been able to pinpoint the cause of this problem. Let's discuss possible solutions to prevent this from happening again.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>athidi006</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One of the issues mentioned by athidi006 involves a situation where an input is experiencing intermittent connectivity issues in a DC 24 V circuit. The setup includes a hard-wired connection from a push button to a DI module, which is then inserted into the backplane of a Siemens Simatic ET200SP system. It is suggested that a possible cause for this problem could be a faulty cable. To troubleshoot, it is recommended to check the cable connection and move it around to see if the issue persists. While a temporary solution could involve implementing debounce logic in the PLC program to maintain production operations, this is not a sustainable fix. Furthermore, the addition of a debounce circuit may cause delays in the stop command, which may not be suitable for the overall process efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're experiencing various symptoms, it's important to consider all factors such as I/O update timing, program scan, and program structure. Instead of focusing solely on one issue, investigate commonalities among them. For example, check if they are connected to the same power supply or if any I/O wiring is exposed to vibration or potential damage that may cause intermittent shorting or opening. Identifying these potential issues can help pinpoint the root cause of your multiple symptoms.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a record in the diagnostic buffer when the line ceases functioning?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RVaughan</span></li>
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
<h4 class='text-dark'>FAQ: What could be causing the line stop alarm to be triggered without a physical button press?</h4>
<p class='text-muted'><strong>Answer:</strong> Possible causes could include issues with the digital input module, wiring connections, or even software glitches in the Simatic ET200 SP system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What steps have been taken to troubleshoot the intermittent issue with the line stop alarm?</h4>
<p class='text-muted'><strong>Answer:</strong> The user has mentioned that they replaced the NC contact of the push button, the DI module, and verified the cable connections, but the problem still persists.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How frequently does the issue of the line stop alarm being triggered occur?</h4>
<p class='text-muted'><strong>Answer:</strong> The problem reoccurs every 10 to 15 days, according to the provided information.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: Is there a way to temporarily resolve the problem when the line stop alarm is triggered?</h4>
<p class='text-muted'><strong>Answer:</strong> The user mentioned that after acknowledging the alarm, they are able to restart the line.</p>
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
