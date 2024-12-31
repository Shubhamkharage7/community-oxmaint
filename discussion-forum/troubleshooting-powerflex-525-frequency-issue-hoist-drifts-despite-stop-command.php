
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently in the process of enhancing a depalletizer for a client by upgrading the hoist. The system is integrated with a SLC500 processor, and the drives are controlled via device net, with the latest addition being the Powerflex 525 installed just yesterday. The Powerflex is">
    <meta name="keywords" content="powerflex 525, frequency issue, hoist drifts, stop command, troubleshooting, depalletizer, slc500 processor, devicenet, 2-wire setup, motor overload, f007 fault, brake resistor">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex-525-frequency-issue-hoist-drifts-despite-stop-command">
    <title>Troubleshooting Powerflex 525 Frequency Issue: Hoist Drifts Despite Stop Command | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Powerflex 525 Frequency Issue: Hoist Drifts Despite Stop Command | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently in the process of enhancing a depalletizer for a client by upgrading the hoist. The system is integrated with a SLC500 processor, and the drives are controlled via device net, with the latest addition being the Powerflex 525 installed just yesterday. The Powerflex is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex-525-frequency-issue-hoist-drifts-despite-stop-command">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Powerflex 525 Frequency Issue: Hoist Drifts Despite Stop Command | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently in the process of enhancing a depalletizer for a client by upgrading the hoist. The system is integrated with a SLC500 processor, and the drives are controlled via device net, with the latest addition being the Powerflex 525 installed just yesterday. The Powerflex is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-powerflex-525-frequency-issue-hoist-drifts-despite-stop-command"
      },
      "headline": "Troubleshooting Powerflex 525 Frequency Issue: Hoist Drifts Despite Stop Command",
      "description": "Hello everyone, I am currently in the process of enhancing a depalletizer for a client by upgrading the hoist. The system is integrated with a SLC500 processor, and the drives are controlled via device net, with the latest addition being the Powerflex 525 installed just yesterday. The Powerflex is",
      "author": {
        "@type": "Person",
        "name": "Tbone1465"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-12-01",
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
                <h1 class="text-white">Troubleshooting Powerflex 525 Frequency Issue: Hoist Drifts Despite Stop Command</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-12-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tbone1465</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">771</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">130</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone,

I am currently in the process of enhancing a depalletizer for a client by upgrading the hoist. The system is integrated with a SLC500 processor, and the drives are controlled via device net, with the latest addition being the Powerflex 525 installed just yesterday. The Powerflex is controlled using a 2-wire setup.

During operation, I have observed that when I raise the hoist while it is empty, it stops precisely as intended, with the frequency decreasing to zero as indicated on the faceplate. However, when I lower the hoist, I notice the frequency fluctuating between 2.0 and 2.5 Hz, causing the hoist to drift downwards until an F007 fault ("Motor Overload") occurs on the drive.

The parameters currently set are as follows:
- P033: 7.6
- P034: 7.6
- P036: 1768
- P037: 4.03
- P041: 2.0
- P042: 1.0
- P043: 0
- P044: 100
- P045: 0
- P046: 2
- P047: 7
- P048: 2
- P049: 7
- P062: 48
- P063: 49
- P064: 0
- P065: 7
- P066: 7
- P067: 13
- P068: 11
- P411: 12
- P412: 45
- P442: 2.0
- P443: 0.5

It is worth mentioning that I have incorporated a brake resistor and configured it in the parameters for dynamic braking.

If anyone has insights or suggestions on what might be causing this issue, I would greatly appreciate your input. I have devoted significant time to troubleshooting this throughout the day but have yet to determine the root cause. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although PowerFlex 525 drives are compact and cost-effective, they may not be the ideal option for a hoist due to their lack of torque proving and high-performance torque control features. Additionally, these drives typically do not come equipped with encoder feedback as standard. 

Do you have a physical shaft or rail brake installed on the motor or hoist? Is it possible to utilize Stop Mode 8 or 9 for control purposes? 

While you mentioned that the dynamic braking resistor was set up correctly, I recommend double-checking Parameter A550, specifically the Bus Regulator Enable setting. This is typically enabled by default to prevent unwanted trips during deceleration, but should be disabled when using a braking resistor. 

Can you confirm whether the braking resistor is actually activating during operation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Ken Roach, it is noted that while PowerFlex 525 drives are compact and cost-effective, they may not be the ideal choice for hoists due to lacking torque proving and high-performance torque control features, as well as the absence of standard encoder feedback. For those with a physical shaft or rail brake on the motor or hoist, it is recommended to utilize Stop Mode 8 or 9 for control. Additionally, it is advised to check Parameter A550, Bus Regulator Enable, which should be disabled to allow proper use of a braking resistor without causing nuisance trips during deceleration. Ensuring that the braking resistor is effectively engaged is crucial in such cases. How can one verify if the brake resistor is properly functioning on a physical shaft?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tbone1465</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're utilizing an encoder and configuring the drive for flux vector control, you may encounter difficulties when attempting to control a hoist using 525 in sensorless vector control, particularly at zero speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kekrahulik inquired about the use of an encoder and setting up the drive in flux vector control for a hoist operation. He cautioned that attempting to control a hoist with 525 in sensorless vector control may result in issues at zero speed. Despite not using an encoder, the Powerflex40 has been operational for years. How can I properly configure the drive for Flux vector control?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tbone1465</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to drive parameters, option 1 is sensorless (SVC) and option 3 is vector control. While attempting vector control without an encoder is possible, it is somewhat ineffective. In sensorless operation, the drive calculates the motor position based on voltage and current. This can be easily performed during operation but becomes more challenging when the motor is still. It is important to understand that in order to hold a load in place, the drive must generate a certain frequency to counteract the downward force of the load. If the drive outputted 0 hertz, the load would simply fall.

Using a drive specifically designed for hoists is the most effective choice in this scenario. The next best option would be to utilize an encoder and vector control. Lastly, autotuning or manually tuning the drive may be considered, although this option is not preferred.

It is crucial to prioritize safety, especially if there is a risk of individuals being in harm's way. Opting for a drive designed for hoists is the most reliable solution in such situations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, kekrahulik mentioned parameter 039, indicating that option 1 is sensorless (SVC) and option 3 is vector control. While it is possible to attempt vector control without an encoder, it may not be very effective. Sensorless operation requires the drive to determine the motor position based on voltage and current, which is challenging at standstill. It is essential to understand that the drive needs to generate a certain frequency to counterbalance the downward load and keep it lifted. Opting for a drive specifically designed for hoists is the most suitable choice, followed by using an encoder and vector control. The least preferred option, according to some, involves autotuning or manual tuning of the drive for improved performance.

Choosing the right drive for the application is crucial, as highlighted in my conversation with the plant. Despite initial challenges with the provided drive, switching back to the Powerflex 40 has resulted in the desired stopping performance. Further research will be conducted during production to uncover any additional insights. Thank you for all the responses and valuable input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tbone1465</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To confirm if the braking resistor is activated, use a clamp meter on the resistor wire or check the voltage across the resistor when the motor comes to a stop. Additionally, consider increasing the current and duration applied to the brake resistor for optimal performance. Don't forget to regularly test the brake resistor to ensure it is functioning as intended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>adel1961</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Explore the breathtaking coastal views on a road trip from start to finish.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to a descending hoist application, one important consideration is the difference between "coast to stop" and an "uncontrolled descent into terrain." Hoist applications require a careful balance of physics and choosing the right drive system that is specifically designed to handle the physics involved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it accurate to say that this applies to all VFD stop modes when the hoist does not have a brake?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The timing of accelerating, decelerating, and applying/releasing the hoist brake is crucial, especially for a typical hoist. If the hoist is operating in the 2Hz range, it may draw high amperage and struggle to move the load against gravity. Consider adjusting the minimum frequency parameter to a higher value, such as starting at 20Hz or 10Hz as a minimum. Avoid setting zero speeds on the drive to simplify the start/stop process and prevent any potential issues that may lead to late-night emergency calls. Keep it simple for a hassle-free operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dummy_bit</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM raised a valid point about VFD stop modes and hoists without brakes. The fact that the hoist continues to descend at 2 Hz suggests a lack of a mechanical brake. Using a DB resistor may help with regenerative power dissipation but won't provide holding power at 0 speed. The successful operation of a PF40 compared to a PF525 indicates a potential oversight in setting up the output for a holding brake in the PF525.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the frequency fluctuation and hoist drifting issue when lowering the hoist despite setting the parameters correctly on the Powerflex 525?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The frequency fluctuation and hoist drifting issue when lowering the hoist could be caused by a fault such as "Motor Overload" (F007) on the drive. This may be due to incorrect parameter settings, improper configuration of the brake resistor, or other factors affecting the control of the hoist.</p>
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
