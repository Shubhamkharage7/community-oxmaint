
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I need help troubleshooting an issue where my VFD is not turning on the motor when controlled from the HMI. However, the motor runs when controlled directly from the VFD using parameter p0070, but the frequency is lower than the set value on the HMI. Any suggestions on how">
    <meta name="keywords" content="siemens micromaster 440, vfd troubleshooting, motor control issue, hmi control problem, vfd parameter p0070, low frequency motor control, siemens vfd error, troubleshooting vfd motor control, vfd motor not turning">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-micromaster-440-vfd-motor-control-issue">
    <title>Troubleshooting Siemens MicroMaster 440 VFD Motor Control Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Siemens MicroMaster 440 VFD Motor Control Issue | Oxmaint Community">
    <meta property="og:description" content="I need help troubleshooting an issue where my VFD is not turning on the motor when controlled from the HMI. However, the motor runs when controlled directly from the VFD using parameter p0070, but the frequency is lower than the set value on the HMI. Any suggestions on how">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-micromaster-440-vfd-motor-control-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Siemens MicroMaster 440 VFD Motor Control Issue | Oxmaint Community">
    <meta name="twitter:description" content="I need help troubleshooting an issue where my VFD is not turning on the motor when controlled from the HMI. However, the motor runs when controlled directly from the VFD using parameter p0070, but the frequency is lower than the set value on the HMI. Any suggestions on how">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-micromaster-440-vfd-motor-control-issue"
      },
      "headline": "Troubleshooting Siemens MicroMaster 440 VFD Motor Control Issue",
      "description": "I need help troubleshooting an issue where my VFD is not turning on the motor when controlled from the HMI. However, the motor runs when controlled directly from the VFD using parameter p0070, but the frequency is lower than the set value on the HMI. Any suggestions on how",
      "author": {
        "@type": "Person",
        "name": "Haroon Aziz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Troubleshooting Siemens MicroMaster 440 VFD Motor Control Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">513</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">173</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I need help troubleshooting an issue where my VFD is not turning on the motor when controlled from the HMI. However, the motor runs when controlled directly from the VFD using parameter p0070, but the frequency is lower than the set value on the HMI. Any suggestions on how to resolve this problem would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Haroon Aziz is seeking assistance with running a motor from an HMI but is encountering difficulties with the VFD not turning it on. When attempting to run the motor directly from the VFD using p0070, it does turn on but the frequency is lower than what was set in the HMI. Can anyone offer troubleshooting advice for this issue? Your input would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Insufficient details are provided about the issue at hand. The absence of a P070 is noted, with only an R070 present which pertains to the bus voltage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for the inconvenience. Despite indicating that I am operating the motor through an HMI, the motor does not actually turn on when activated from the HMI interface. The display shows that the motor is running, but in reality, it remains inactive. When I manually start the motor using R0070 through the VFD, it does start but at a frequency too low to move water from the tank to the reservoir efficiently. I am puzzled as to why the motor fails to start when initiated from the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like there may be confusion regarding parameter r0070, which is a read-only status point of the drive and cannot be changed. It appears that the motor may not be receiving a reference from the HIM to run from the VFD. Can you provide details on the settings for P1000 and P700, as it is suspected that these may be the parameters you are attempting to adjust.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee pointed out that changing the r0070 parameter is not possible as it is designated as read-only. This parameter reflects the status of the drive and cannot be altered. It seems there may be confusion regarding how the motor is being operated from the VFD without providing a reference from the HIM. The values of P1000 and P700 are crucial in this situation, with suspicion leaning towards P700 as the parameter in question. Unfortunately, these values will be provided tomorrow as access to the VFD is currently unavailable. Thank you for the response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Haroon Aziz mentioned that he would provide the values tomorrow as he currently does not have access to the VFD. He expressed gratitude for the response. However, robertmee clarified that the parameter "r0070" is read-only and cannot be changed. He emphasized that the motor's operation from the VFD requires setting values such as P1000 and P700 correctly. After checking the VFD, it was found that P1000 is set to 2, and adjusting P700 allows the motor to run directly from the VFD.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Haroon Aziz greeted: "Greetings! I trust you are in good health. Upon inspecting my VFD, I discovered that the value of p1000 is currently set at 2. As you mentioned, we had been adjusting the p700 value to enable direct motor operation from the VFD. A p1000 value of 2 indicates that the drive is anticipating a frequency command from an analog input. To switch control to the drive operator, be sure to adjust p1000 to 1." This adjustment will ensure proper functionality and control of the motor through the VFD's operator interface, optimizing performance and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In his response, Robert Mee explained that when the P1000 code is set to 2 on a drive, it indicates the need for a frequency command from an analog input. To control the drive directly, the P1000 code should be changed to 1. I appreciate the advice and will make the necessary adjustments to my VFD. Now, I have a question regarding setting the motor frequency to 40 Hz. Which parameter should I adjust to achieve this specific motor frequency? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To achieve a specific running frequency, adjust P1000 to 3 and set parameter 1001 to the desired frequency (40) for fixed frequency 1. Ensure Digital Input 1 is set high to select FF1; otherwise, FF0 defaults to 0hz with no inputs. If prefered, set P1080 to a minimum frequency of 40 to run the drive at 40hz while allowing a setpoint range of 0 to 40. This gives flexibility for future adjustments without needing to manipulate digital inputs. Choose the option based on desired versatility for your operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee suggested a way to set a fixed frequency for a drive. By adjusting P1000 to 3 and setting parameter 1001 to run at 40Hz (fixed frequency 1), along with wiring Digital Input 1 high to select FF1, you can achieve this. Alternatively, you can avoid wiring and instead set P1080 (min frequency) to 40. This will allow the drive to operate at 40Hz with a setpoint range from 0 to 40, without the need to configure digital inputs. The choice depends on the level of flexibility desired for future adjustments. Your guidance has been invaluable, and I will implement your suggestions on Monday, providing feedback if any issues arise.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is my Siemens MicroMaster 440 VFD not turning on the motor when controlled from the HMI?
- The issue could be related to a configuration error between the HMI and the VFD. Check the communication settings and ensure they are properly configured for seamless operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does the motor run at a lower frequency when controlled directly from the VFD using parameter p0070?</h4>
<p class='text-muted'><strong>Answer:</strong> - This could indicate a discrepancy in the frequency settings between the HMI and the VFD. Verify the frequency settings on both devices and ensure they match to achieve the desired output.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot and resolve motor control issues with my Siemens MicroMaster 440 VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> - Start by checking the wiring connections, parameter settings, and communication setup between the HMI and the VFD. Ensure that all configurations are correct and consistent to troubleshoot and resolve the motor control problems effectively.</p>
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
