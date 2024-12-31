
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, currently I am using a micro850 controller along with a FOTEK PL-05P proximity sensor and a 3DOF serial arm robot. I am utilizing the MC_MoveRelative function to command the movement of the three axes of the arm robot. In my ladder logic program, when I link the">
    <meta name="keywords" content="micro850 controller, fotek pl-05p proximity sensor, 3dof serial arm robot, mc_moverelative function, ladder logic program, sensor integration, axis movement issue, negative direction problem, wiring connections, anomaly identification, troubleshooting solutions">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-micro850-controller-arm-robot-axis-issue-with-sensor-integration">
    <title>Troubleshooting Micro850 Controller: Arm Robot Axis Issue with Sensor Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Micro850 Controller: Arm Robot Axis Issue with Sensor Integration | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, currently I am using a micro850 controller along with a FOTEK PL-05P proximity sensor and a 3DOF serial arm robot. I am utilizing the MC_MoveRelative function to command the movement of the three axes of the arm robot. In my ladder logic program, when I link the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-micro850-controller-arm-robot-axis-issue-with-sensor-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Micro850 Controller: Arm Robot Axis Issue with Sensor Integration | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, currently I am using a micro850 controller along with a FOTEK PL-05P proximity sensor and a 3DOF serial arm robot. I am utilizing the MC_MoveRelative function to command the movement of the three axes of the arm robot. In my ladder logic program, when I link the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-micro850-controller-arm-robot-axis-issue-with-sensor-integration"
      },
      "headline": "Troubleshooting Micro850 Controller: Arm Robot Axis Issue with Sensor Integration",
      "description": "Hello everyone, currently I am using a micro850 controller along with a FOTEK PL-05P proximity sensor and a 3DOF serial arm robot. I am utilizing the MC_MoveRelative function to command the movement of the three axes of the arm robot. In my ladder logic program, when I link the",
      "author": {
        "@type": "Person",
        "name": "vhs"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-29",
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
                <h1 class="text-white">Troubleshooting Micro850 Controller: Arm Robot Axis Issue with Sensor Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>vhs</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">243</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">399</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, currently I am using a micro850 controller along with a FOTEK PL-05P proximity sensor and a 3DOF serial arm robot. I am utilizing the MC_MoveRelative function to command the movement of the three axes of the arm robot. In my ladder logic program, when I link the sensor to the MC_MoveRelative function blocks, all three axes are able to move the desired distance. However, I have encountered an issue with one of the axes, specifically the lowest level of the arm robot, which is unable to move in the negative direction but can move in the positive direction. Surprisingly, this axis is able to move in the negative direction when the sensor is not connected to its MC_MoveRelative function block. Despite checking all wiring connections and the program itself, I have been unable to identify any anomalies. I have attempted various solutions to rectify this issue but have been unsuccessful. Can anyone provide insight into what may be causing this problem?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I am currently working on a project involving a Micro850 PLC, a FOTEK PL-05P proximity sensor, and a 3DOF serial arm robot. I am using the MC_MoveRelative function to control the movement of the arm robot on all three axes. However, I have encountered an issue where one of the axes, specifically the lowest level of the arm robot, is unable to move in the negative direction when the sensor is connected to the MC_MoveRelative function block. Strangely, when the sensor is disconnected, the axis is able to move in both positive and negative directions as intended. I have double-checked all wiring connections and the ladder program, but everything seems to be in order. Despite trying various troubleshooting methods, the issue persists. Any insights on what may be causing this problem would be greatly appreciated. Please note that the sensor is labeled as _IO_EM_DI_00 and the electromagnet, labeled as _IO_EM_DO_09, is functioning correctly without any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vhs</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is the lowest level of the arm robot unable to move in the negative direction but can move in the positive direction when the sensor is connected to the MC_MoveRelative function block?
- This issue may be caused by interference from the sensor input affecting the movement control of that particular axis.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be potential solutions to rectify the problem of the arm robot axis not moving in the negative direction?</h4>
<p class='text-muted'><strong>Answer:</strong> - One possible solution could be to isolate the sensor input from the MC_MoveRelative function block to see if that resolves the issue. Additionally, checking for any conflicting logic or programming errors related to that specific axis may also help identify the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot the issue further if checking wiring connections and the program did not reveal any anomalies?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try testing the axis movement without the sensor connected to see if it behaves differently. It may also be beneficial to review the ladder logic program for any conflicting instructions or conditions that could be impacting the axis movement.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a specific configuration or setting that needs to be adjusted to address the problem with the arm robot axis?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to review the configuration settings for the axis in question, such as velocity limits, acceleration/deceleration parameters, or any safety limits that could be affecting the movement in the negative direction. Adjusting these settings accordingly may help resolve the issue.</p>
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
