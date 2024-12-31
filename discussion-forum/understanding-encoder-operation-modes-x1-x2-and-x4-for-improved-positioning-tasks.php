
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing an encoder connected to an embedded HSC on a 1769-L24ER-QBFC1B PLC and a Danfoss VLT drive while configuring the counter settings in the module properties for a positioning task. Due to considerations of accuracy and budget, the servo option was not chosen. I am curious if">
    <meta name="keywords" content="encoder operation modes, x1 mode, x2 mode, x4 mode, improved positioning tasks, hsc 1769-l24er-qbfc1b plc, danfoss vlt drive, counter settings, module properties, positioning task">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-encoder-operation-modes-x1-x2-and-x4-for-improved-positioning-tasks">
    <title>Understanding Encoder Operation Modes X1, X2, and X4 for Improved Positioning Tasks | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Encoder Operation Modes X1, X2, and X4 for Improved Positioning Tasks | Oxmaint Community">
    <meta property="og:description" content="I am utilizing an encoder connected to an embedded HSC on a 1769-L24ER-QBFC1B PLC and a Danfoss VLT drive while configuring the counter settings in the module properties for a positioning task. Due to considerations of accuracy and budget, the servo option was not chosen. I am curious if">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-encoder-operation-modes-x1-x2-and-x4-for-improved-positioning-tasks">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Encoder Operation Modes X1, X2, and X4 for Improved Positioning Tasks | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing an encoder connected to an embedded HSC on a 1769-L24ER-QBFC1B PLC and a Danfoss VLT drive while configuring the counter settings in the module properties for a positioning task. Due to considerations of accuracy and budget, the servo option was not chosen. I am curious if">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-encoder-operation-modes-x1-x2-and-x4-for-improved-positioning-tasks"
      },
      "headline": "Understanding Encoder Operation Modes X1, X2, and X4 for Improved Positioning Tasks",
      "description": "I am utilizing an encoder connected to an embedded HSC on a 1769-L24ER-QBFC1B PLC and a Danfoss VLT drive while configuring the counter settings in the module properties for a positioning task. Due to considerations of accuracy and budget, the servo option was not chosen. I am curious if",
      "author": {
        "@type": "Person",
        "name": "ceilingwalker"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-05",
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
                <h1 class="text-white">Understanding Encoder Operation Modes X1, X2, and X4 for Improved Positioning Tasks</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ceilingwalker</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">286</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">297</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing an encoder connected to an embedded HSC on a 1769-L24ER-QBFC1B PLC and a Danfoss VLT drive while configuring the counter settings in the module properties for a positioning task. Due to considerations of accuracy and budget, the servo option was not chosen. I am curious if the selection of operation mode (X1, X2, or X4) affects repeatability. It appears that this option simply increases the encoder's resolution by counting more pulses. Thank you for any insights on this matter.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the distinction between X1 and other options is crucial. While X1 and Single Phase may seem identical, Single Phase lacks directionality. This means that regardless of whether the encoder is moving forward, backward, or remaining stationary, it will still register pulses. Although I haven't personally utilized X2, X4, also known as Quadrature, functions by counting the pulses differently. It registers a count on the rising edge of channel A, another count on the rising edge of channel B, and then counts the falling edges of Channel A and Channel B. This cycle can also be reversed, with Channel B being counted before Channel A. This distinction determines whether the HSC input counts up or down based on which channel is detected first.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Keith mentions that the choice between using X2 or X4 counting on a quadrature encoder depends on whether you are utilizing both the A and B channels or just one. If you are using both channels, Keith recommends opting for X4 counting for higher resolution. However, he acknowledges that there may be reasons to consider X2 counting instead, such as a lower maximum input frequency with X4 or concerns about rollover of a DINT. Ultimately, Keith suggests that maximizing resolution is typically the best approach when working with quadrature encoders.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The selection between X1, X2, and X4 for application is crucial, as it is determined by factors such as workpiece speed, distance to run, and positional precision. For more information, refer to page 26 of the manual provided at: https://literature.rockwellautomation.com/idc/groups/literature/documents/um/1769-um006_-en-p.pdf. Familiarize yourself with the specifications before making a decision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JERA</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing a 4X resolution setting is crucial for achieving high precision in positioning and calculations involving velocities and derivatives of position. Opting for a lower resolution may compromise accuracy and fine increment positioning capabilities. It is essential to harness the benefits of extra resolution for accurate velocity and position derivative calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To avoid exceeding the 32-bit DINTs limit required for this application, consider using X4 instead. It is important to note that the embedded high-speed counter module in the CompactLogix controller does not include a built-in positioning feature. Therefore, it cannot be used as an Axis Feedback device. The primary function of HSCs is to measure frequency or activate embedded outputs at specific counts. For accurate positioning, it may be more beneficial to utilize the positioning feature in the VLT drive, particularly if it is an FC302. This can provide more precise control and functionality for your application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In considering the use of X4, it is important to ensure that the position count remains within the 32-bit DINTs necessary for this application. It's crucial to address the fact that the embedded high-speed counter module in the CompactLogix lacks a built-in positioning feature. This means it cannot directly function as an Axis Feedback device, as its primary functions are to measure frequency or trigger embedded outputs at specific counts.

For optimal performance, it may be more beneficial to focus on utilizing the positioning feature within the VLT drive, especially if it's an FC302 model. If given the chance to choose again between FC-280 and FC-302, the latter would have been the preferred choice due to its superior functionality. While initially using the VLT drive, challenges with tuning the positioning PID’s led to ongoing alarms, prompting the exploration of alternative methods.

Although the current method is satisfactory, there are concerns about the encoder changing counts slightly even when stationary. Considering a return to the VLT drive is being contemplated, time constraints are a pressing factor. Additionally, feedback from Danfoss tech suggests that the FC-280 is not ideally suited for precise position control, recommending the FC-302 as a better fit for such applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ceilingwalker</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What are the differences between Encoder Operation Modes X1, X2, and X4 in positioning tasks?
- The X1, X2, and X4 operation modes in encoder settings determine how many pulses are counted per encoder signal cycle, which affects the resolution and accuracy of the positioning task.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Does the selection of operation mode (X1, X2, or X4) impact repeatability in positioning tasks?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the operation mode selection can impact repeatability as it directly affects the encoder's resolution by counting different numbers of pulses, which can influence the precision of the positioning task.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How does using an encoder connected to an embedded HSC on a PLC and a Danfoss VLT drive compare to using a servo option for positioning tasks?</h4>
<p class='text-muted'><strong>Answer:</strong> - Utilizing an encoder with an embedded HSC on a PLC and a drive like Danfoss VLT provides a cost-effective solution for positioning tasks without opting for a servo system, considering factors like accuracy and budget constraints.</p>
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
