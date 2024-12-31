
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good evening! I am currently taking measurements on a 20 HP DC motor using a Fluke 87 multimeter with a Fluke i401 current clamp. I have connected the i401 to the Com and V Ω port on the multimeter and set the dial to mV. After clamping around the">
    <meta name="keywords" content="dc motor current measurement, fluke 87 multimeter, fluke i401 current clamp, 20 hp dc motor, com & v ω port, mv setting, dc v setting, siemens simoreg dc drive, p019">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-measure-dc-motor-current-with-fluke-87-and-fluke-i401">
    <title>How to Measure DC Motor Current with Fluke 87 and Fluke i401 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Measure DC Motor Current with Fluke 87 and Fluke i401 | Oxmaint Community">
    <meta property="og:description" content="Good evening! I am currently taking measurements on a 20 HP DC motor using a Fluke 87 multimeter with a Fluke i401 current clamp. I have connected the i401 to the Com and V Ω port on the multimeter and set the dial to mV. After clamping around the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-measure-dc-motor-current-with-fluke-87-and-fluke-i401">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Measure DC Motor Current with Fluke 87 and Fluke i401 | Oxmaint Community">
    <meta name="twitter:description" content="Good evening! I am currently taking measurements on a 20 HP DC motor using a Fluke 87 multimeter with a Fluke i401 current clamp. I have connected the i401 to the Com and V Ω port on the multimeter and set the dial to mV. After clamping around the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-measure-dc-motor-current-with-fluke-87-and-fluke-i401"
      },
      "headline": "How to Measure DC Motor Current with Fluke 87 and Fluke i401",
      "description": "Good evening! I am currently taking measurements on a 20 HP DC motor using a Fluke 87 multimeter with a Fluke i401 current clamp. I have connected the i401 to the Com and V Ω port on the multimeter and set the dial to mV. After clamping around the",
      "author": {
        "@type": "Person",
        "name": "Cydog"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-30",
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
                <h1 class="text-white">How to Measure DC Motor Current with Fluke 87 and Fluke i401</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">248</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">409</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good evening! I am currently taking measurements on a 20 HP DC motor using a Fluke 87 multimeter with a Fluke i401 current clamp. I have connected the i401 to the Com & V Ω port on the multimeter and set the dial to mV. After clamping around the DC motor wire and pressing the green button, I am not receiving a current reading. However, when I switch the dial to DC V, I am able to get a reading, although it does not match the reading displayed on the old Siemens Simoreg DC Drive in P019. Can you please confirm if I am using the Fluke 87 and Fluke i401 correctly? Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When using the I410 device, it's important to remember that it converts Amps to millivolts (mv) at a ratio of 1:1. Therefore, the appropriate setting to measure DC voltage or millivolts would be ideal. It seems like there may have been a misunderstanding with the settings - it should be set to r019, which represents a percentage of the rated current. Double-check your conversions to ensure accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good Morning! I appreciate your assistance. I have a query regarding the Siemens Simoreg DC Drive displaying a reading of P019 14.0. I am assuming this value represents the amperage, but could it possibly be the percentage of the P100, which is the rated nameplate current? Additionally, I have the Fluke 87 and Fluke i410 connected with the black COM and red plugs into the RED V, Ohms, Diode port. Can I confirm that each milliamp represents one Amp accurately? Thank you for your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cydog greeted with a "Good Morning" and expressed gratitude. The Siemens Simoreg DC Drive is currently displaying a reading of 14.0 in P019, which is likely in Amps or a percentage of P100, the rated nameplate current. The Fluke 87 and Fluke i410 are connected with the black COM and red into the RED V, Ohms, Diode port. Confirming that each milliamp is equivalent to one Amp. A suggestion was made to refer to the manual for the Fluke i410 for more information: https://dam-assets.fluke.com/s3fs-public/i4101010iseng0300.pdf?mFLpAUl8gYchO1i9iYLzkPG5Fv.Xg.qz. Thank you for the assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hardaysknight</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the Siemens Simoreg DC Drive's reading of P019 14.0, Cydog wonders if it represents amps or the percent of the rated nameplate current, P100. The Fluke 87 and Fluke i410 are connected with the black COM and the red in the RED V for Ohms and Diode testing. Each milliamp equals one amp. Thank you for clarifying that it's a percent of the rated current and not actual amperage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. How should I connect the Fluke i401 current clamp to the Fluke 87 multimeter when measuring DC motor current?</h4>
<p class='text-muted'><strong>Answer:</strong> - To measure DC motor current with the Fluke i401 current clamp and Fluke 87 multimeter, you should connect the i401 to the Com & V Ω port on the multimeter and set the dial to the appropriate setting, such as mV for current measurements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I not getting a current reading when using the Fluke i401 with the Fluke 87 multimeter on a DC motor?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are not receiving a current reading when clamping around the DC motor wire and pressing the green button, ensure that the connection is correct and that the multimeter is set to the correct measurement setting for current.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why does the current reading from the Fluke 87 multimeter not match the reading on the Siemens Simoreg DC Drive in P019?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is common for readings from different devices to have discrepancies due to calibration differences or measurement methodologies. Verify the accuracy of both devices and consider factors like calibration and measurement range when comparing readings.</p>
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
