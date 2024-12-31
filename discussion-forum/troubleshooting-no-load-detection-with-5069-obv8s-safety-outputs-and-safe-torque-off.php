
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, I wanted to bring to your attention an issue that a colleague of mine recently encountered. The new 5380 Compact GuardLogix safety outputs (5069-OBV8S) come with a no load detection feature that cannot be disabled. Even Safe Torque Off (STO) is not sufficient as a load to">
    <meta name="keywords" content="5069-obv8s safety outputs, safe torque off (sto), load detection feature, troubleshooting safety outputs, rockwell automation technote 1091239, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-no-load-detection-with-5069-obv8s-safety-outputs-and-safe-torque-off">
    <title>Troubleshooting No Load Detection with 5069-OBV8S Safety Outputs and Safe Torque Off | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting No Load Detection with 5069-OBV8S Safety Outputs and Safe Torque Off | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, I wanted to bring to your attention an issue that a colleague of mine recently encountered. The new 5380 Compact GuardLogix safety outputs (5069-OBV8S) come with a no load detection feature that cannot be disabled. Even Safe Torque Off (STO) is not sufficient as a load to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-no-load-detection-with-5069-obv8s-safety-outputs-and-safe-torque-off">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting No Load Detection with 5069-OBV8S Safety Outputs and Safe Torque Off | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, I wanted to bring to your attention an issue that a colleague of mine recently encountered. The new 5380 Compact GuardLogix safety outputs (5069-OBV8S) come with a no load detection feature that cannot be disabled. Even Safe Torque Off (STO) is not sufficient as a load to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-no-load-detection-with-5069-obv8s-safety-outputs-and-safe-torque-off"
      },
      "headline": "Troubleshooting No Load Detection with 5069-OBV8S Safety Outputs and Safe Torque Off",
      "description": "Hey everyone, I wanted to bring to your attention an issue that a colleague of mine recently encountered. The new 5380 Compact GuardLogix safety outputs (5069-OBV8S) come with a no load detection feature that cannot be disabled. Even Safe Torque Off (STO) is not sufficient as a load to",
      "author": {
        "@type": "Person",
        "name": "ASF"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-05",
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
                <h1 class="text-white">Troubleshooting No Load Detection with 5069-OBV8S Safety Outputs and Safe Torque Off</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>20 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">10778</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">313</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I wanted to bring to your attention an issue that a colleague of mine recently encountered. The new 5380 Compact GuardLogix safety outputs (5069-OBV8S) come with a no load detection feature that cannot be disabled. Even Safe Torque Off (STO) is not sufficient as a load to prevent the outputs from faulting in the absence of a load. This means that you cannot connect these safety outputs directly to STO without having something else in parallel to serve as a load. Rockwell Automation's official solution is to use a 2.4k resistor. This issue likely extends to the 1756-OBV8S and the new Flex 5000 safety outputs, with the exception of the safety relay outputs. This oversight by Rockwell Automation is quite significant. Hopefully, a firmware update will be released soon to address this issue, but as of now, there is no concrete information available. For more detailed information, please refer to Rockwell Automation Technote 1091239.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like this issue should have been easily identified during the module design phase. [Yes, I must admit it did sound amusing in my mind]</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AustralIan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I also would have assumed the same thing on both fronts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Interesting information! According to ASF, the official solution recommended by RA involves using a 2.4k resistor. It's clear that there was a significant oversight by RA in this matter. It is hoped that a firmware update will be released soon to address this issue, although details are currently scarce. Alternatively, it seems that RA may be encouraging customers to purchase their ERS2, ERS3, or PF527 models which come equipped with CIP Safety features, but come with a higher price tag. As pointed out by AustralIan, it seems like this issue should have been noticed during the module design process. Humorously enough, I agree with this sentiment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent conversation, Jeev suggested that some companies may push for purchasing their ERS2/ERS3/PF527 models with CIP Safety, despite their higher cost. However, he also hinted at the upcoming release of a Rockwell Cat 4, PLe, SIL3 Safety Rated 2.4k Resistor in early 2020, enticing potential buyers with advanced safety features at a competitive price.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF hinted at the release of a highly anticipated Rockwell Cat 4, PLe, SIL3 Safety Rated 2.4k Resistor set to debut in early 2020. But some are wary of the potential impact.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you completed the safety calculations incorporating the resistor to ensure similar Performance Levels (PL)? What probability of dangerous failure did you consider for the resistor? Could you share the alternative solution you used instead of OBV8S + (Drive with high impedance STO)? What was the required PL or Safety Integrity Level (SIL) for the project?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AustralIan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate the alert! My colleague and I have completed two distinct designs that incorporate 5069-OBV8S and Powerflex drives. Without your help, we would have experienced delays. Thank you once again for the heads up!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drforsythe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently setting up a system utilizing the 5069-OBV8S card and encountered an issue due to the inability to deactivate a specific feature. This card performs an open wire check by conducting a pulse test, temporarily turning off the output for approximately 500 microseconds every 30-50ms. This behavior occurs regardless of whether the output is configured as a pulse test output or a Safety Output.

In my setup, the output is connected directly to an Emergency Stop input on a Universal Robot controller. Every 5-10 seconds, the robot detects the pulse and initiates an E-stop condition. As this feature cannot be turned off, I am currently exploring potential solutions. One option I am considering is to introduce relays between the output and the robot, allowing the relay to pass through the pulse.

It is worth noting that AB's manual mentions this behavior in a small footnote, stating that "An open wire test and main switch pulse test can also generate a pulse on a safety output even in safety mode."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Archie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your system, simply include a pair of reliable and efficient positive guided relays. This will help ensure smooth and seamless operation while providing added safety measures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to janner_10's suggestion, it might be beneficial to incorporate positive guided relays for improved functionality. While initially hesitant to add extra components, it seems that the OBV8S requires relays or other intermediary components to operate effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Archie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Archie mentioned his attempts to avoid extra components, but found that the OBV8S requires relays or additional components to function properly. Despite multiple attempts, this was the only solution that allowed the system to work efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User janner_10 explained that after multiple attempts, they discovered a solution that successfully made it work. By testing the signal entering the robot using a scope, they were able to prevent the robot from triggering an E-Stop erroneously.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Archie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Archie discovered that by monitoring the signal entering the robot using a scope, it effectively prevents the robot from triggering a false E-Stop. It is important to consider the capacitance value when using this method, as it can impact the switch-off delay (discharge time) of the inputs. This latency should be taken into account when validating or verifying the safety system, as well as when calculating reach or safety distances.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using this example, it is important to consider the impact of the capacitor's capacitance on switch-off delay. This latency should be factored in when validating safety systems or calculating safety distances. During my testing, I found that starting with a 0.05 capacitor had minimal impact, while a 0.1 capacitor had almost no measurable effect. Using a 1 microfarad capacitor, I observed a significant reduction in the pulse drop. Although I did not measure the exact latency time due to the need for a digital scope and knowledge of the robot input threshold voltage, I conducted non-scientific tests to ensure a quick reaction time with my slow-moving cobot.

In applications involving high-speed robots, the OBV8S card may not be suitable as the 500+ microsecond pulse must be accounted for. Relays and contactors are able to handle this pulse due to their off response time typically falling in the 10-50 ms range. This prompts further investigation into the response time of drives with STO inputs, as some manufacturers claim only a resistor is necessary which suggests a response time greater than the OBV8S pulse width.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Archie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our manuals provide detailed information on all the data points you need. It's important to consider the capacitance value being utilized and how it can affect system performance, particularly when it comes to reaching collaborative speeds with a light curtain or area scanner. Typically, the STO/SS figures for drives fall within the millisecond range, based on my experience with various drives.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Attention future users, the OBV8S now offers an updated firmware and AOP that enables the option to disable no-load detection diagnostics. Additionally, the V2.011IB8S model comes with the latest V2.011 firmware and AOP. I have personally tested this feature and can confirm that it functions effectively. Best regards, -TL</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's truly amazing when common sense prevails, especially for those with OCD like myself. Seeing it happen gives me a sense of relief and satisfaction. Goodbye, obstacles!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PreLC announced that the OBV8S now has a new firmware and AOP available, allowing users to disable the no-load detection diagnostic. Additionally, the V2.011IB8S has been updated with newer V2.011 firmware and AOP. This update comes at a convenient time for me as I currently have a machine in the shop that relies on resistors on the servo drives and capacitors on the robot to bypass this detection. With a customer run-off scheduled in just 2 days, I have decided to hold off on updating to avoid any potential new issues. After the run-off, I plan to update the firmware to test if this will eliminate the need for both resistors and capacitors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Archie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Archie shared exciting news with perfect timing. Currently, I have a machine in the shop that relies on resistors and capacitors to function properly. In order to avoid any potential issues before the upcoming customer run off in 2 days, I will hold off on updating the firmware. Once the run off is complete, I will update the firmware to see if it eliminates the need for both the resistors and capacitors. Don't forget to download the 250 MB AOP!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, we are addressing a machine in the field experiencing a specific issue and are actively working on finding a solution. Once again, Rockwell poses a challenge that we are determined to overcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>milmat1</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why do the 5069-OBV8S safety outputs come with a no load detection feature that cannot be disabled?</h4>
<p class='text-muted'><strong>Answer:</strong> The 5069-OBV8S safety outputs have a built-in no load detection feature to ensure safe operation, but this feature cannot be disabled.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I prevent the 5069-OBV8S safety outputs from faulting in the absence of a load when using Safe Torque Off (STO)?</h4>
<p class='text-muted'><strong>Answer:</strong> To prevent the outputs from faulting in the absence of a load when using STO, you need to have something else in parallel to serve as a load. One recommended solution is to use a 2.4k resistor.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Does the issue with the no load detection feature extend to other Rockwell Automation safety outputs like the 1756-OBV8S and Flex 5000 safety outputs?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, this issue likely extends to the 1756-OBV8S and the new Flex 5000 safety outputs, with the exception of the safety relay outputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is there any information available about a potential firmware update from Rockwell Automation to address this issue with the safety outputs?</h4>
<p class='text-muted'><strong>Answer:</strong> As of now, there is no concrete information available regarding a firmware update to address the issue with the safety outputs. For more detailed information, you can refer to Rockwell Automation</p>
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
