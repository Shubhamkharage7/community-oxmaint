
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have successfully configured a PowerFlex 525 using Embedded EtherNet/IP for PID Loop control with my CompactLogix. Now, I am attempting to set up a PowerFlex 40-E using 22-Comm-E. I have configured the PID Reference Select and PID Feedback Select to Comm Port, but I am unable to locate">
    <meta name="keywords" content="powerflex 40-e, 22-comm-e, plc tag configuration, pid control, pid loop control, compactlogix, powerflex 525, embedded ethernet/ip, pid reference select, pid feedback select, i/o reference tag">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-pid-control-for-powerflex-40-e-with-22-comm-e-plc-tag-configuration-challenge">
    <title>Setting Up PID Control for PowerFlex 40-E with 22-Comm-E: PLC Tag Configuration Challenge | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting Up PID Control for PowerFlex 40-E with 22-Comm-E: PLC Tag Configuration Challenge | Oxmaint Community">
    <meta property="og:description" content="I have successfully configured a PowerFlex 525 using Embedded EtherNet/IP for PID Loop control with my CompactLogix. Now, I am attempting to set up a PowerFlex 40-E using 22-Comm-E. I have configured the PID Reference Select and PID Feedback Select to Comm Port, but I am unable to locate">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-pid-control-for-powerflex-40-e-with-22-comm-e-plc-tag-configuration-challenge">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting Up PID Control for PowerFlex 40-E with 22-Comm-E: PLC Tag Configuration Challenge | Oxmaint Community">
    <meta name="twitter:description" content="I have successfully configured a PowerFlex 525 using Embedded EtherNet/IP for PID Loop control with my CompactLogix. Now, I am attempting to set up a PowerFlex 40-E using 22-Comm-E. I have configured the PID Reference Select and PID Feedback Select to Comm Port, but I am unable to locate">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-pid-control-for-powerflex-40-e-with-22-comm-e-plc-tag-configuration-challenge"
      },
      "headline": "Setting Up PID Control for PowerFlex 40-E with 22-Comm-E: PLC Tag Configuration Challenge",
      "description": "I have successfully configured a PowerFlex 525 using Embedded EtherNet/IP for PID Loop control with my CompactLogix. Now, I am attempting to set up a PowerFlex 40-E using 22-Comm-E. I have configured the PID Reference Select and PID Feedback Select to Comm Port, but I am unable to locate",
      "author": {
        "@type": "Person",
        "name": "Roy A. Alderman"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-28",
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
                <h1 class="text-white">Setting Up PID Control for PowerFlex 40-E with 22-Comm-E: PLC Tag Configuration Challenge</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Roy A. Alderman</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3141</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">357</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have successfully configured a PowerFlex 525 using Embedded EtherNet/IP for PID Loop control with my CompactLogix. Now, I am attempting to set up a PowerFlex 40-E using 22-Comm-E. I have configured the PID Reference Select and PID Feedback Select to Comm Port, but I am unable to locate the I/O reference tag in the PLC to transmit the data. Is it not feasible to do this with a PowerFlex 40, and only with a PowerFlex 525 model?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing the drive's integrated PID controls to adjust the speed and transmitting the PID setpoint through Ethernet/IP? If that's the case, you may need to establish datalinks in the drive configuration menu within Studio 5000. The default settings may not include this feature (especially for the 525 model.)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rupej</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>rupej mentioned that setting the speed using the drive's built-in PID controls and transmitting the PID setpoint via Ethernet/IP is the approach being used. To achieve this, configuring the datalinks in the drive settings within Studio 5000 is necessary. Default settings may not support this feature, similar to the PF40 drive where data links are not assignable like the 525 drive.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Roy A. Alderman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Following a consultation with Rockwell Tech Support, I learned that I must send an MSG command to establish the PID setpoint/reference (137) since Datalink is unavailable. The PID Feedback for both PF40 and PF525 can be configured using the FreqCommand I/O tag, with a scaling of 0-100% equaling 0-60 HZ Freq. For more information, refer to Rockwell Knowledge Base article 627551 regarding sending PID setpoint and feedback through Ethernet/IP. The PID feedback can be written using the drive name:O.Frequency_Command tag name, with a scaling of 0-3600 where 3600 corresponds to Parameter P044 [Maximum Freq]. Remember not to use Datalink for Parameter A460 [PID 1 Fdback Sel]. It seems like I will have to revisit and rectify my 525 application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Roy A. Alderman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm glad to hear you figured it out. I'm curious though, what is the reasoning behind using a PID in the drive instead of utilizing a PLC, which is typically more common in this type of setup. This arrangement is new to me and I'm interested to learn more about it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rupej</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response, user 'rupej' expressed satisfaction with resolving the issue and raised a question about the decision to use PID in the drive despite having a PLC. This unconventional setup raised curiosity. The user noted that CompactLogix and ControlLogix may not have efficient PID functionality compared to MicroLogix. The user also mentioned that since the drive already handles the PID control effectively, there is no need to duplicate the effort in the PLC. After tuning the drives at one site, the user plans to replicate the process at another location, eliminating the need for PID logic in the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Roy A. Alderman</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Roy A. Alderman, the PID control in CompactLogix and ControlLogix is subpar. He suggests that MicroLogix performs better in this regard. However, it's worth considering that the PID settings in the 5000 series processors can be optimized to match MicroLogix's performance, while offering a wide range of additional features. Depending on your requirements, there are various PID blocks available for customization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rupej</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up PIDs for 5000 series processors in Rockwell, it's important to ensure proper configuration for optimal performance. These processors offer advanced features compared to MicroLogix, with multiple PID blocks to choose from based on your specific requirements. Can you provide more information on which PID would be best suited for controlling a closed loop system with a PowerFlex 525 and external encoder in Rockwell? Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KarajoSoft</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Can I set up PID control for a PowerFlex 40-E using 22-Comm-E similar to PowerFlex 525 with Embedded EtherNet/IP?
- While PID control can be configured for both PowerFlex 40-E and PowerFlex 525, the process may differ based on the communication protocol and model specifications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I configure the PID Reference Select and PID Feedback Select for a PowerFlex 40-E with 22-Comm-E?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up PID control for a PowerFlex 40-E using 22-Comm-E, ensure the PID Reference Select and PID Feedback Select are correctly configured to Comm Port. Refer to the specific model's user manual for detailed instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why am I unable to locate the I/O reference tag in the PLC for transmitting data with a PowerFlex 40-E?</h4>
<p class='text-muted'><strong>Answer:</strong> - The availability of I/O reference tags in the PLC for data transmission may vary based on the model and communication setup. Check the PLC configuration and ensure compatibility with the PowerFlex 40-E and 22-Comm-E setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is PID loop control limited to certain PowerFlex models like the PowerFlex 525?</h4>
<p class='text-muted'><strong>Answer:</strong> - PID loop control can be implemented on various PowerFlex models, including the PowerFlex 40-E. However, the specific configuration steps and compatibility with communication modules like 22-Comm-E may differ. Refer to the documentation for your specific equipment for guidance.</p>
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
