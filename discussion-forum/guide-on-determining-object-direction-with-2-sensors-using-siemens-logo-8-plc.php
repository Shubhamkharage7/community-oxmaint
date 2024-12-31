
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am new to working with a Siemens Logo 8 PLC and I am seeking guidance on determining the direction of an object as it completes a full cycle between 2 input sensors. Please refer to the attached images showing the cycle in the upper right corner for">
    <meta name="keywords" content="siemens logo 8 plc, object direction detection, 2 sensor system, plc programming guide, object cycle detection, siemens logo 8 tutorial, plc sensor configuration, 8">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/guide-on-determining-object-direction-with-2-sensors-using-siemens-logo-8-plc">
    <title>Guide on determining object direction with 2 sensors using Siemens Logo 8 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Guide on determining object direction with 2 sensors using Siemens Logo 8 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello, I am new to working with a Siemens Logo 8 PLC and I am seeking guidance on determining the direction of an object as it completes a full cycle between 2 input sensors. Please refer to the attached images showing the cycle in the upper right corner for">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/guide-on-determining-object-direction-with-2-sensors-using-siemens-logo-8-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Guide on determining object direction with 2 sensors using Siemens Logo 8 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am new to working with a Siemens Logo 8 PLC and I am seeking guidance on determining the direction of an object as it completes a full cycle between 2 input sensors. Please refer to the attached images showing the cycle in the upper right corner for">
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
        "@id": "https://community.oxmaint.com/discussion-forum/guide-on-determining-object-direction-with-2-sensors-using-siemens-logo-8-plc"
      },
      "headline": "Guide on determining object direction with 2 sensors using Siemens Logo 8 PLC",
      "description": "Hello, I am new to working with a Siemens Logo 8 PLC and I am seeking guidance on determining the direction of an object as it completes a full cycle between 2 input sensors. Please refer to the attached images showing the cycle in the upper right corner for",
      "author": {
        "@type": "Person",
        "name": "Melkske"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Guide on determining object direction with 2 sensors using Siemens Logo 8 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Melkske</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">392</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">493</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am new to working with a Siemens Logo 8 PLC and I am seeking guidance on determining the direction of an object as it completes a full cycle between 2 input sensors. Please refer to the attached images showing the cycle in the upper right corner for loading and unloading. Any assistance on this matter would be greatly appreciated. Best regards, Geert.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not able to locate the attachment. Is the distance between the sensors less than the size of the object, or can the object move past one sensor before reaching the next one?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Melkske and Geert, I am unable to see any images attached. It seems similar to a quadrature encoding system, in which detecting the transition from 0 to 1 on the first scan cycle when both sensors are at 1 determines the "downstream" sensor. This assumes the object's length in either direction of motion is greater than the distance between sensors. The key concept here is "transitioned." In PLC programming, timing is crucial; when an event occurs is more crucial than what the event actually is. A PLC program's logic is continually assessed in discrete events known as scan cycles. Consider all potential combinations of input states from the two sensors (referred to as LEFT and RIGHT) in a single scan cycle:

- LEFT is 0; RIGHT is 0: No object in front of either sensor
- LEFT is 1; RIGHT is 0: Object in front of left sensor but not right sensor
- LEFT is 0; RIGHT is 1: Opposite of the previous scenario
- LEFT is 1; RIGHT is 1: Object in front of both sensors

The information from a single scan cycle alone is insufficient to determine the direction of motion accurately. Within LOGO!Soft, there is an AND-EDGE block that detects a rising edge transition. This block changes its output based on specific input conditions, helping identify direction of motion.

For instance, if each sensor is connected to its own AND-EDGE block, and both sensors are connected to a common AND-EDGE block, the output can provide insight on the object's movement direction. The assumption here is that the scan cycle time is always short enough to avoid both sensor inputs transitioning from 0 to 1 simultaneously. This edge-detecting function is also known as an edge detector or one-shot.

In summary, proper utilization of AND-EDGE blocks can help determine the direction of motion based on sensor inputs in a PLC program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I determine the direction of an object using 2 sensors with a Siemens Logo 8 PLC?
- To determine the direction of an object using 2 sensors with a Siemens Logo 8 PLC, you can track the sequence of sensor activations as the object moves between them. By analyzing which sensor is triggered first and then second, you can determine the direction of the object.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are there specific programming functions or blocks in Siemens Logo 8 PLC that can help with object direction detection?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, in Siemens Logo 8 PLC, you can utilize functions such as AND blocks, timers, counters, and memory bits to create a logic sequence that determines the direction of an object based on sensor inputs. By programming the PLC to interpret the sensor data, you can accurately detect the object's direction.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What considerations should I keep in mind when setting up the sensors for object direction detection with Siemens Logo 8 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - When setting up sensors for object direction detection with Siemens Logo 8 PLC, ensure that the sensors are properly positioned along the object's path to detect its movement accurately. Additionally, consider the timing and logic sequence required to interpret the sensor data correctly and determine the object's direction reliably.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can you provide a step-by-step guide or example program for determining object direction with 2 sensors using Siemens Logo 8 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, we can provide you with a step-by-step guide or example program for determining object direction with 2 sensors</p>
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
