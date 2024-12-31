
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am in the process of designing a system that includes a CompactLogix rack and I have a question regarding the power supply for the inputs and outputs. In my initial plan for the rack, I have included the following components: PLC, 5069-IB16, 5069-IB16, 5069-FPD, and 5069-OB16. My">
    <meta name="keywords" content="power supply options, 5069-ob16 outputs, 5069-fpd, la power, 5069-ib16, 24vdc supply, compactlogix rack, emergency stop, safety contactors, input cards, output">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/power-supply-options-for-5069-ob16-outputs-5069-fpd-vs-la-power">
    <title>Power Supply Options for 5069-OB16 Outputs: 5069-FPD vs LA Power | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Power Supply Options for 5069-OB16 Outputs: 5069-FPD vs LA Power | Oxmaint Community">
    <meta property="og:description" content="Hello, I am in the process of designing a system that includes a CompactLogix rack and I have a question regarding the power supply for the inputs and outputs. In my initial plan for the rack, I have included the following components: PLC, 5069-IB16, 5069-IB16, 5069-FPD, and 5069-OB16. My">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/power-supply-options-for-5069-ob16-outputs-5069-fpd-vs-la-power">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Power Supply Options for 5069-OB16 Outputs: 5069-FPD vs LA Power | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am in the process of designing a system that includes a CompactLogix rack and I have a question regarding the power supply for the inputs and outputs. In my initial plan for the rack, I have included the following components: PLC, 5069-IB16, 5069-IB16, 5069-FPD, and 5069-OB16. My">
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
        "@id": "https://community.oxmaint.com/discussion-forum/power-supply-options-for-5069-ob16-outputs-5069-fpd-vs-la-power"
      },
      "headline": "Power Supply Options for 5069-OB16 Outputs: 5069-FPD vs LA Power",
      "description": "Hello, I am in the process of designing a system that includes a CompactLogix rack and I have a question regarding the power supply for the inputs and outputs. In my initial plan for the rack, I have included the following components: PLC, 5069-IB16, 5069-IB16, 5069-FPD, and 5069-OB16. My",
      "author": {
        "@type": "Person",
        "name": "kloc5"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-14",
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
                <h1 class="text-white">Power Supply Options for 5069-OB16 Outputs: 5069-FPD vs LA Power</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kloc5</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">779</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">326</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am in the process of designing a system that includes a CompactLogix rack and I have a question regarding the power supply for the inputs and outputs. In my initial plan for the rack, I have included the following components: PLC, 5069-IB16, 5069-IB16, 5069-FPD, and 5069-OB16. My intention was to supply 24VDC to the SA Power connection on the PLC to power the inputs for the two 5069-IB16 cards. The purpose of the 5069-FPD was to connect to the 24VDC supply from the safety contactors in order to cut off power to the outputs in the event of an emergency stop. However, after noticing that the 5069-OB16 has a connection for LA power, I am now reconsidering my plan. Would it be possible for me to simply connect the 24VDC supply from the emergency stop chain to the LA connection on the 5069-OB16 and eliminate the need for the 5069-FPD? If I choose to do this, any subsequent cards downstream would still receive the original non-emergency stop power, and I would only need to connect emergency stop power to the LA Power connection on any output card that I want to be disabled by an emergency stop. Thank you, Keith.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is necessary to establish a connection of field power (LA) for each individual 5069-OB16 module as they do not receive power from the SA bus. Refer to the note on page 9 of this document for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to ASF, it is important to connect field power (LA) to each 5069-OB16 individually as they do not draw power from the SA bus. Refer to page 9 of the document for more information. I am looking to set up my system similar to the OP, with a safety contactor supplying power to the LA+/- terminals on output cards. However, I have a concern about the field power loss detection feature of these modules. If the LA or SA bus causes a fault in the module, what are the implications? The documentation states that it may take up to 1 second to recover from a fault once field power is restored after an estop condition. Is there anything else to consider when setting up this configuration?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kylepcs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my previous post, I discussed the topic of power control from an Emergency Stop (E-Stop) switch, specifically referring to the (5069-OB16 LA Power From E-Stop) issue. It is crucial to have a strong understanding of safety systems to prevent cutting power to essential devices. Some equipment requires power to operate safely, so it is important to identify which devices need to be turned off or on during an emergency situation. Researching Safety Assessment, Machine Guarding, and pursuing relevant courses or certifications can be beneficial. Utilizing a safety relay, such as the Allen Bradley 440R Monitoring Safety Relay, and familiarizing yourself with its manual and safety circuit vs output channels is essential. Collaborating with others, especially if you are new to implementing safety systems, can help navigate the rules and risks involved in the process. By seeking guidance and expertise from others, you can ensure a successful and secure safety system implementation. Hopefully, these insights will steer you in the right direction towards a robust safety setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kylepcs inquired about setting up their system to mirror the approach taken by the original poster, using a safety contactor to supply power to the LA+/- terminals on output cards. However, they raised concerns about the field power loss detection feature in these modules. The documentation mentions that in the event of a fault due to power loss on the LA or SA bus, it may take up to 1 second to clear the fault once power is restored. Are there any other potential consequences to consider with this setup? 

In my experience, I don't typically feed safety isolated signals to my output cards as it doesn't provide significant safety benefits. While I can't provide a definitive answer, based on my experience commissioning 5069 I/O racks, I've never had to manually reset any faults after applying power to the cards. Upon powering on, the red light turns off shortly after, and I proceed with commissioning without any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I use the LA power connection on 5069-OB16 to eliminate the need for 5069-FPD in my CompactLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can connect the 24VDC supply from the emergency stop chain to the LA connection on the 5069-OB16 to power the outputs and potentially eliminate the need for the 5069-FPD. This setup allows you to cut off power to specific output cards in the event of an emergency stop.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Will downstream cards still receive power if I connect emergency stop power to the LA Power connection on 5069-OB16?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, subsequent cards downstream would continue to receive the original non-emergency stop power as long as they are connected correctly in the system. Only the outputs connected to the 5069-OB16 with the emergency stop power on the LA connection will be disabled during an emergency stop.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the purpose of the 5069-FPD in a CompactLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The 5069-FPD is typically used to connect to a 24VDC supply from safety contactors to cut off power to the outputs in the event of an emergency stop. It provides a way to safely disable the outputs in critical situations.</p>
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
