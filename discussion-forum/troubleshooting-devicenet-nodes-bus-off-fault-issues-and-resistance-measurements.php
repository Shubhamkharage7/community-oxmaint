
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am a beginner in Devicenet and have recently downloaded the documentation recommended by AB, a large PDF that helps troubleshoot Devicenet issues. My Devicenet network consists of approximately 21 nodes. In my setup, the last three nodes experience bus off faults, but communication is restored with a">
    <meta name="keywords" content="devicenet troubleshooting, devicenet nodes, bus off fault, resistance measurements, ab documentation, devicenet network, communication issues, can l, can h, resistance readings, earth bonding, shield connection, power supplies, devicenet specifications">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-devicenet-nodes-bus-off-fault-issues-and-resistance-measurements">
    <title>Troubleshooting Devicenet Nodes Bus Off Fault Issues and Resistance Measurements | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Devicenet Nodes Bus Off Fault Issues and Resistance Measurements | Oxmaint Community">
    <meta property="og:description" content="Hello, I am a beginner in Devicenet and have recently downloaded the documentation recommended by AB, a large PDF that helps troubleshoot Devicenet issues. My Devicenet network consists of approximately 21 nodes. In my setup, the last three nodes experience bus off faults, but communication is restored with a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-devicenet-nodes-bus-off-fault-issues-and-resistance-measurements">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Devicenet Nodes Bus Off Fault Issues and Resistance Measurements | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am a beginner in Devicenet and have recently downloaded the documentation recommended by AB, a large PDF that helps troubleshoot Devicenet issues. My Devicenet network consists of approximately 21 nodes. In my setup, the last three nodes experience bus off faults, but communication is restored with a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-devicenet-nodes-bus-off-fault-issues-and-resistance-measurements"
      },
      "headline": "Troubleshooting Devicenet Nodes Bus Off Fault Issues and Resistance Measurements",
      "description": "Hello, I am a beginner in Devicenet and have recently downloaded the documentation recommended by AB, a large PDF that helps troubleshoot Devicenet issues. My Devicenet network consists of approximately 21 nodes. In my setup, the last three nodes experience bus off faults, but communication is restored with a",
      "author": {
        "@type": "Person",
        "name": "Gimborden"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">Troubleshooting Devicenet Nodes Bus Off Fault Issues and Resistance Measurements</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Gimborden</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">263</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">172</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am a beginner in Devicenet and have recently downloaded the documentation recommended by AB, a large PDF that helps troubleshoot Devicenet issues. My Devicenet network consists of approximately 21 nodes. In my setup, the last three nodes experience bus off faults, but communication is restored with a power cycle. The resistance between Can L and Can H measures at 60 ohms.

I have observed a low resistance reading from Can L to Earth, approximately 60k Ohms, while Can H to Earth shows an open circuit for resistance. The shields are all bonded at a single point near the middle of the trunk line. Disconnecting the shield from the single point to Earth resulted in an open circuit reading until the bonding was reinstated.

The power supplies in use are three in total, all within the Devicenet specifications. Voltage readings appear satisfactory. Unfortunately, I do not have access to a Devicenet network analyzer. My main concern is that attaching the scanner card to the Devicenet network decreases the resistance reading from Can L to Earth. When the scanner card is removed, the resistance value returns to an open circuit reading.

I am uncertain if the behavior observed with the scanner card is normal or indicative of a need for replacement. Your insights on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Great job on your troubleshooting efforts! When removing the two termination resistors and disconnecting the power supplies, it is recommended to measure between 10K - 50K between CAN-H and CAN-L. The resistance from CAN to Earth should be very high, showing an open circuit or several megaohms when tested with a standard meter. Make sure to check the scanner module with the entire network disconnected and the PLC powered down.

It is important to note that scanner modules must also have the CAN circuits isolated from the device, just like other components. This is why the network power supply is located separately from the PLC, typically out in the field. If there is a reading of 60K ohms between CAN-L to Earth, this could indicate damage from lightning or other external factors affecting the scanner module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your input. I will review it the next time I have a chance to work on the plant, as my time is limited each week. This may result in a delayed response, but I value your suggestions and information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gimborden</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing bus off faults in the last three nodes of my Devicenet network?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Bus off faults in Devicenet nodes can be caused by various factors such as improper termination, electrical noise, power supply issues, or wiring faults.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How should I interpret resistance measurements in a Devicenet network?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In a properly functioning Devicenet network, the resistance between Can L and Can H should measure around 60 ohms. Deviations from this value could indicate wiring issues or improper termination.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why does the resistance reading from Can L to Earth show a low value while Can H to Earth displays an open circuit?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: A low resistance reading from Can L to Earth and an open circuit from Can H to Earth could indicate a grounding issue or improper shielding in the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is it normal for attaching the scanner card to the Devicenet network to affect the resistance readings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The behavior observed with the scanner card affecting resistance readings could indicate an issue with the card or its connection. Further troubleshooting or consulting the manufacturer may be needed to determine if a replacement is necessary.</p>
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
