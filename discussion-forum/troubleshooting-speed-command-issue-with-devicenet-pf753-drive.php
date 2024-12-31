
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Having trouble with DeviceNet on my 1756-L55 setup, where a PF700 recently malfunctioned. I am now trying to commission a new PF753 with a 20-Comm-D module to replace it. Additionally, a 2262D-2R is installed for a remote Auto-Off-Hand selector switch. Despite setting up parameters for the Hand function and">
    <meta name="keywords" content="devicenet, 1756-l55, pf700, pf753, 20-comm-d module, 2262d-2r, auto-off-hand selector switch, speed command issue, troubleshooting, parameter setup, inputs and outputs">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-speed-command-issue-with-devicenet-pf753-drive">
    <title>Troubleshooting Speed Command Issue with DeviceNet PF753 Drive | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Speed Command Issue with DeviceNet PF753 Drive | Oxmaint Community">
    <meta property="og:description" content="Having trouble with DeviceNet on my 1756-L55 setup, where a PF700 recently malfunctioned. I am now trying to commission a new PF753 with a 20-Comm-D module to replace it. Additionally, a 2262D-2R is installed for a remote Auto-Off-Hand selector switch. Despite setting up parameters for the Hand function and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-speed-command-issue-with-devicenet-pf753-drive">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Speed Command Issue with DeviceNet PF753 Drive | Oxmaint Community">
    <meta name="twitter:description" content="Having trouble with DeviceNet on my 1756-L55 setup, where a PF700 recently malfunctioned. I am now trying to commission a new PF753 with a 20-Comm-D module to replace it. Additionally, a 2262D-2R is installed for a remote Auto-Off-Hand selector switch. Despite setting up parameters for the Hand function and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-speed-command-issue-with-devicenet-pf753-drive"
      },
      "headline": "Troubleshooting Speed Command Issue with DeviceNet PF753 Drive",
      "description": "Having trouble with DeviceNet on my 1756-L55 setup, where a PF700 recently malfunctioned. I am now trying to commission a new PF753 with a 20-Comm-D module to replace it. Additionally, a 2262D-2R is installed for a remote Auto-Off-Hand selector switch. Despite setting up parameters for the Hand function and",
      "author": {
        "@type": "Person",
        "name": "stretch_af"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-02",
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
                <h1 class="text-white">Troubleshooting Speed Command Issue with DeviceNet PF753 Drive</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>stretch_af</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">246</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">163</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Having trouble with DeviceNet on my 1756-L55 setup, where a PF700 recently malfunctioned. I am now trying to commission a new PF753 with a 20-Comm-D module to replace it. Additionally, a 2262D-2R is installed for a remote Auto-Off-Hand selector switch. Despite setting up parameters for the Hand function and remapping Inputs and Outputs for the PF753, the commanded speed remains at "0.00". The controller is sending a reference of 3300, but it's not translating to 33 Hz as expected. P545 is configured for Port 4 Reference, while P874 shows 0.00 for Port 4 Reference. Despite extensive manual review, I'm unable to pinpoint the issue. Why is the speed reference not reaching the drive effectively?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The PowerFlex 700 series utilizes a range of 0 to 32767 for adjusting speed from minimum to maximum. What value does parameter 2 show when sending the speed reference to the Variable Speed Drive (VSD)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's been a while since I worked on this type of interface, but it appears that DPI Port 4 is indeed the correct option module slot on the PowerFlex 753. The drive is receiving start/stop commands from the network without any issues, ruling out any problems with the DeviceNet network protocol or connectivity.

Parameter 545, known as Speed Reference A Select, determines the speed reference for the drive in Auto mode. You can choose between Speed Reference A or B using discrete inputs or network command bits. To set DeviceNet as the speed reference, Parameter 545 should be set to "874", corresponding to the Port 4 network module reference value.

Parameter 930 should indicate the parameter actually being used for the Speed Reference, which should display a value of 874. The PowerFlex 750 series has moved away from the traditional method where 0-32767 represented Min Hz to Max Hz, a system used by A-B drives dating back to the days of the 1336 Classic on RIO.

After researching in the Knowledgebase and user manuals to confirm my understanding, it became clear that for those using a 20-COMM-D, the speed reference units are integer numbers in 1/100 Hz, with a value of "3300" translating to 33.00 Hertz. However, when utilizing a 750-COMM-D option module, the value is a REAL.

To copy a REAL tag with a value of 33.00 into the DINT element of the DeviceNet scanner linked to the Reference for the drive, COP (not MOV) must be used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I mistakenly had the 20-750-Dnet module installed, but I knew it was the correct one. It had to be a genuine module to resolve my issue. Special thanks to Ken for helping me solve the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stretch_af</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the speed reference not reaching the PF753 drive effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to incorrect parameter settings, communication configuration, or wiring issues between the controller and the drive.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the commanded speed issue on the DeviceNet PF753 drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by verifying the parameter settings for the Hand function, checking the mapping of Inputs and Outputs, ensuring the correct configuration for Port 4 Reference, and confirming the communication setup between the controller and the drive.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could be causing the PF753 drive to display "0.00" speed despite receiving a reference of 3300 from the controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Possible reasons for this could include incorrect parameter configurations, communication faults, wiring problems, or compatibility issues between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How do I address the discrepancy between the controller sending a reference of 3300 and the PF753 drive showing 0.00 speed output?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You may need to review and adjust the parameter settings, check for any communication errors, inspect the wiring connections, and ensure proper mapping of Inputs and Outputs to troubleshoot and resolve the speed command issue.</p>
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
