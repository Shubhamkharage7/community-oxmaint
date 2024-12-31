
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently working on implementing a linear motion guide using a ball screw shaft driven by a stepper motor and controlled by a PLC system. The PLC model I am using is Omron CP1E-N30DT-A, and the stepper motor is a Nema 34. The main objective is to move">
    <meta name="keywords" content="omron plc, pulse output, stepper motor driver, linear motion guide, ball screw shaft, nema 34, clockwise, anti-clockwise, pls2 instruction, output lights, pul-, dir-, positive 24v">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-plc-pulse-output-issue-with-stepper-motor-driver">
    <title>Troubleshooting OMRON PLC Pulse Output Issue with Stepper Motor Driver | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting OMRON PLC Pulse Output Issue with Stepper Motor Driver | Oxmaint Community">
    <meta property="og:description" content="I am currently working on implementing a linear motion guide using a ball screw shaft driven by a stepper motor and controlled by a PLC system. The PLC model I am using is Omron CP1E-N30DT-A, and the stepper motor is a Nema 34. The main objective is to move">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-plc-pulse-output-issue-with-stepper-motor-driver">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting OMRON PLC Pulse Output Issue with Stepper Motor Driver | Oxmaint Community">
    <meta name="twitter:description" content="I am currently working on implementing a linear motion guide using a ball screw shaft driven by a stepper motor and controlled by a PLC system. The PLC model I am using is Omron CP1E-N30DT-A, and the stepper motor is a Nema 34. The main objective is to move">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-omron-plc-pulse-output-issue-with-stepper-motor-driver"
      },
      "headline": "Troubleshooting OMRON PLC Pulse Output Issue with Stepper Motor Driver",
      "description": "I am currently working on implementing a linear motion guide using a ball screw shaft driven by a stepper motor and controlled by a PLC system. The PLC model I am using is Omron CP1E-N30DT-A, and the stepper motor is a Nema 34. The main objective is to move",
      "author": {
        "@type": "Person",
        "name": "Fahzzz"
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
                <h1 class="text-white">Troubleshooting OMRON PLC Pulse Output Issue with Stepper Motor Driver</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Fahzzz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">198</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">92</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently working on implementing a linear motion guide using a ball screw shaft driven by a stepper motor and controlled by a PLC system. The PLC model I am using is Omron CP1E-N30DT-A, and the stepper motor is a Nema 34. The main objective is to move the stepper motor in both clockwise and anti-clockwise directions. However, I am facing an issue where the stepper motor driver is not receiving any pulses from the PLC despite using the PLS2 instruction to generate pulses. Although the output lights on 100.00 and 100.02 are on, indicating that the outputs are active, the driver is not registering any pulses. I have connected the PUL- to 100.00 and DIR- to 100.02, with PUL+ and DIR+ connected to a positive 24V with a 2k resistor. The common port for 100.00, 100.01, and 100.02 is connected to a negative 24V. Any assistance or advice on resolving this issue would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Before purchasing a PWM driver module, it's essential to ensure it is a source and operates at 24v. Many available modules are typically 5v and function as sink, so be certain to confirm the specifications before making a purchase.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe the PLC output is sinking due to the common ground being negative.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fahzzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly, the power is supplied to a pin on the drive module, with the PLC common being 0V. The compatibility can vary depending on the drive in use. For instance, I encountered issues with a PWM drive module where the input is 5V sinking and the PLC is normally 24V sinking. This caused intermittent functionality as the sinking outputs were only pulling down to around 2.4V instead of 0V. It is important to note that the inputs are effectively being pulled down in this setup. A useful tip is to try reducing the PWM to a slow, long pulse to accurately measure the output pulse from the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon analyzing the pulse output of the PLC, I noticed that the voltage remains steady at 24V when the output is off. However, when the pulse output is activated, the voltage drops to 12V and remains constant. Ideally, it should fluctuate between 24V and close to 0V. I believe this discrepancy is the main issue at hand, but I am unsure of the proper solution. How can I rectify this issue with the fluctuating voltage output from the PLC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fahzzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper functioning of PLC's transistor outputs, it is necessary to address the issue of heavy loads. I encountered the same issue and resolved it by adding resistors in the supply to the PWM card for the inputs and in the PLC output to 0v. This tactic successfully created a load, allowing the inputs on the PWM card to operate effectively. It is essential to note that the inputs on a PWM card have high impedance and require minimal current draw to function optimally.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the stepper motor driver not receiving any pulses from the Omron PLC despite using the PLS2 instruction?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the wiring configuration or the programming of the PLS2 instruction. Double-check the wiring connections and ensure that the PLS2 instruction is correctly programmed to generate the required pulses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the problem of the stepper motor not registering any pulses despite active outputs on the Omron PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by verifying the wiring connections between the PLC outputs (100.00 and 100.02) and the stepper motor driver (PUL- and DIR-). Ensure that the connections are secure and correct, and check if the voltage levels are suitable for the driver's input requirements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could be causing the issue of the stepper motor driver not receiving pulses even though the PLC output lights are on?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The problem might be related to the compatibility of the PLC output signals with the stepper motor driver's input requirements. Check the voltage levels, wiring polarity, and signal types to ensure they match the specifications of both the PLC and the stepper motor driver.</p>
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
