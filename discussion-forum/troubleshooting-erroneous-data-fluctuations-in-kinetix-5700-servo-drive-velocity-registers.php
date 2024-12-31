
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experiencing an issue with a Kinetix 5700 servo drive where erroneous data is sporadically generated in the Average Actual Velocity and Actual Velocity registers while the drive is in run mode and no command signal is applied via EthernetIP. This data fluctuates between -2.7 E-4 and +2.7 E+4, causing">
    <meta name="keywords" content="kinetix 5700 servo drive troubleshooting, erroneous data fluctuations in servo drive, velocity registers issue in kinetix 5700, troubleshooting average actual velocity in servo drive">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-erroneous-data-fluctuations-in-kinetix-5700-servo-drive-velocity-registers">
    <title>Troubleshooting Erroneous Data Fluctuations in Kinetix 5700 Servo Drive Velocity Registers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Erroneous Data Fluctuations in Kinetix 5700 Servo Drive Velocity Registers | Oxmaint Community">
    <meta property="og:description" content="Experiencing an issue with a Kinetix 5700 servo drive where erroneous data is sporadically generated in the Average Actual Velocity and Actual Velocity registers while the drive is in run mode and no command signal is applied via EthernetIP. This data fluctuates between -2.7 E-4 and +2.7 E+4, causing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-erroneous-data-fluctuations-in-kinetix-5700-servo-drive-velocity-registers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Erroneous Data Fluctuations in Kinetix 5700 Servo Drive Velocity Registers | Oxmaint Community">
    <meta name="twitter:description" content="Experiencing an issue with a Kinetix 5700 servo drive where erroneous data is sporadically generated in the Average Actual Velocity and Actual Velocity registers while the drive is in run mode and no command signal is applied via EthernetIP. This data fluctuates between -2.7 E-4 and +2.7 E+4, causing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-erroneous-data-fluctuations-in-kinetix-5700-servo-drive-velocity-registers"
      },
      "headline": "Troubleshooting Erroneous Data Fluctuations in Kinetix 5700 Servo Drive Velocity Registers",
      "description": "Experiencing an issue with a Kinetix 5700 servo drive where erroneous data is sporadically generated in the Average Actual Velocity and Actual Velocity registers while the drive is in run mode and no command signal is applied via EthernetIP. This data fluctuates between -2.7 E-4 and +2.7 E+4, causing",
      "author": {
        "@type": "Person",
        "name": "Zombo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-22",
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
                <h1 class="text-white">Troubleshooting Erroneous Data Fluctuations in Kinetix 5700 Servo Drive Velocity Registers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Zombo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">137</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">318</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Experiencing an issue with a Kinetix 5700 servo drive where erroneous data is sporadically generated in the Average Actual Velocity and Actual Velocity registers while the drive is in run mode and no command signal is applied via EthernetIP. This data fluctuates between -2.7 E-4 and +2.7 E+4, causing our program to mistakenly advance a step at times. The issue quickly arises and then returns to "0.0". Instead of a temporary solution, it is essential to identify the root cause of this problem for a permanent fix.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What does a zero command signal imply in motion control systems? Are you instructing it to Jog or Move while maintaining a speed of 0? Or have you finished a move, activated MAS on the axis, and the servo is simply on (MSO)? Perhaps you are attempting to maintain a position against external forces, including gravity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing the condition "velocity not equal to 0.0" to trigger a specific action? It is common to observe slight fluctuations in floating point values, also known as "flutter."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In programming, using "velocity not equal to 0.0" as a condition is common when dealing with floating point values. It is not uncommon to see some fluctuations or "flutter" in these values. For example, a change of +2.7 E+4 would be considered a significant flutter. If the intended value was actually +2.7 E-4, then it would make more sense. In this scenario, it is acceptable for a servo's velocity to vary between -.00027 and .00027 in order to maintain position stability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee pointed out that a value of +2.7 E+4 would result in a significant fluctuation. It is likely that the original poster meant to write +2.7 E-4 instead. In such a scenario, it is acceptable for a servo's zero position to fluctuate between -.00027 and .00027. The discussion was focused on velocity values rather than positions. In my experience with Rexroth equipment, it is not uncommon to encounter unpredictable velocities even while maintaining a stable position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dwoodlock explained that he was referring to the velocity, not the position, which is a common issue when working with Rexroth equipment. It is not uncommon to experience erratic velocities while maintaining a steady position. Rest assured, the velocity likely did not reach 27000 units per second in just a few scans.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I was adjusting the readings from a MAJ to a MASand setting the hold speed to zero. The drive was enabled with no external forces affecting it. I have included some snapshots of the readings I am receiving. In one instance, the Bus Voltage was disabled and the drive was in a Fault condition. Is it typical for velocity and position values to fluctuate from zero even during a faulted drive situation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zombo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is completely normal for small variations to occur due to vibrations. The servo fault does not affect position or velocity feedback. Even when faulted, the shaft can still move. Avoid coding with the assumption that position or velocity will be at absolute zero.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate all the previous feedback and support. The machine is now en route to the customer and will be closely monitored during its start-up at their facility scheduled for next month. Thank you for your continued assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zombo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is a frequent occurrence for the encoder to oscillate slightly when approaching the set point. This can happen because the set point may not align perfectly with an exact number of encoder counts, causing the motor to sway between the two nearest counts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the erroneous data fluctuations in the Kinetix 5700 servo drive velocity registers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The fluctuations could be caused by various factors such as electrical interference, communication issues, software glitches, or hardware malfunctions within the servo drive system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the issue of erroneous data in the Average Actual Velocity and Actual Velocity registers of the Kinetix 5700 servo drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the integrity of the communication network, verifying the configuration settings, inspecting the hardware components for any damage or loose connections, and updating the firmware of the servo drive to ensure compatibility with other system components.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a temporary workaround available to mitigate the impact of the data fluctuations on the program's operation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While identifying the root cause for a permanent fix is crucial, you may consider implementing error-checking mechanisms in the program logic to detect and handle the erroneous data, ensuring smoother operation until the issue is resolved permanently.</p>
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
