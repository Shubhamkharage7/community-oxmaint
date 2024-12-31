
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Preface: This is a detailed discussion, so Ive categorized it into sections for easier navigation. Introduction: I am seeking assistance from those who may have encountered a similar issue. A PLC5-40 Series C Enhanced has been functioning smoothly for a long time. Recently, one specific output, O:012/11, which controls">
    <meta name="keywords" content="plc5 troubleshooting, output module 1771-oad, flickering run relay, powerflex 40, faulty triac, system overview, material supply hoppers, discharge process, production disruptions, backplane replacement">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc5-output-module-1771-oad-flickering-run-relay-issue-detected">
    <title>Troubleshooting PLC5 Output Module 1771-OAD: Flickering Run Relay Issue Detected | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC5 Output Module 1771-OAD: Flickering Run Relay Issue Detected | Oxmaint Community">
    <meta property="og:description" content="Preface: This is a detailed discussion, so Ive categorized it into sections for easier navigation. Introduction: I am seeking assistance from those who may have encountered a similar issue. A PLC5-40 Series C Enhanced has been functioning smoothly for a long time. Recently, one specific output, O:012/11, which controls">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc5-output-module-1771-oad-flickering-run-relay-issue-detected">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC5 Output Module 1771-OAD: Flickering Run Relay Issue Detected | Oxmaint Community">
    <meta name="twitter:description" content="Preface: This is a detailed discussion, so Ive categorized it into sections for easier navigation. Introduction: I am seeking assistance from those who may have encountered a similar issue. A PLC5-40 Series C Enhanced has been functioning smoothly for a long time. Recently, one specific output, O:012/11, which controls">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc5-output-module-1771-oad-flickering-run-relay-issue-detected"
      },
      "headline": "Troubleshooting PLC5 Output Module 1771-OAD: Flickering Run Relay Issue Detected",
      "description": "Preface: This is a detailed discussion, so Ive categorized it into sections for easier navigation. Introduction: I am seeking assistance from those who may have encountered a similar issue. A PLC5-40 Series C Enhanced has been functioning smoothly for a long time. Recently, one specific output, O:012/11, which controls",
      "author": {
        "@type": "Person",
        "name": "5618"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-24",
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
                <h1 class="text-white">Troubleshooting PLC5 Output Module 1771-OAD: Flickering Run Relay Issue Detected</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">525</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">96</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Preface: This is a detailed discussion, so I've categorized it into sections for easier navigation.

Introduction: I am seeking assistance from those who may have encountered a similar issue. A PLC5-40 Series C Enhanced has been functioning smoothly for a long time. Recently, one specific output, O:012/11, which controls a relay for the run contacts of a PowerFlex 40, has started flickering a few times per minute. This anomaly has not been observed with any other outputs. Could it be a faulty triac or supporting component?

System Overview: In this setup, O/0 is not in use. Outputs O/1 to O/5 are utilized for three starters and two PowerFlex 40 run relays that operate continuously during production. Outputs O/6 to O/12 are responsible for controlling the run relays for discharge belts of five material supply hoppers. Each hopper holds approximately 2.5 hours of material and discharges until empty before moving to the next hopper. Outputs O/13 to O/17 control reverse relays for unused hopper drives. The system consists of 7 inputs, 3 outputs, 1 analog input, and 3 analog outputs.

The Issue: Recently, a discharge process began experiencing sudden stops and restarts. Upon investigation, it was found that the run relay was intermittently flickering off every few minutes. After inspecting the wiring and scoping the output, it was discovered that truncated half waves were randomly occurring, causing the run relay to drop out. This led to disruptions in the production process.

Attempts to Resolve: In an attempt to address the issue, a coworker replaced the problematic module during a brief downtime. However, the first replacement had a backplane connection issue, causing the entire module to flicker unless physically held in place. A second replacement initially appeared to function properly but was later found to have a stuck output. Subsequent testing with a used module seemed to temporarily resolve the problem, but the flickering issue persisted during production.

Next Steps: Considering the ongoing issue, the next course of action would be to replace the backplane during the next available opportunity. This situation presents a unique challenge that is both frustrating and intriguing. Has anyone encountered a similar problem or have any alternative solutions to suggest?

Appendix: Attached is an example of the issue and a picture of the equipment in question, which is nearing retirement. The scope reading shows 118V during a full wave, dropping to 108V during the occurrence of the flicker.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Try forcing the output to determine if the flickering persists, in order to eliminate the possibility of a program race condition causing the output to pulse. Have you attempted relocating the device connected to that output to a different unused output? If the issue remains, it is likely due to the load on that output. Don't forget to also check the total load on the output module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's rather unusual. Triac output modules are designed to switch on and off close to the zero crossing point. Is it possible that the PLC program or an external device is turning off the output for a scan, causing the waveform delay? It's unlikely that the relay coil is causing a waveform like that, but it's worth considering replacing it. Expect to miss at least half a cycle before it resumes normal operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the Triac may be on the verge of failure, so it is advisable to replace the module before it malfunctions. Unlike SCRs, both Triacs and SCRs can turn on at any point in the cycle but can only turn off when the current passing through them becomes negative. Triac outputs are typically designed for zero-crossing, turning on near the zero point to reduce electrical noise in the circuit. Triacs consist of 2 parallel SCRs mounted in opposite directions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the flickering issue with the PLC5 Output Module 1771-OAD?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The flickering issue could potentially be caused by a faulty triac or supporting component within the output module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How is the PLC5 Output Module 1771-OAD integrated into the system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The PLC5 Output Module 1771-OAD controls the run relay for the PowerFlex 40 and is part of a setup where various outputs are used for different functions such as controlling starters, run relays for discharge belts, and reverse relays for unused hopper drives.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What troubleshooting steps have been taken to address the flickering issue with the PLC5 Output Module 1771-OAD?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: So far, attempts to resolve the issue included replacing the problematic module with new and used ones, but the problem persisted. The next step planned is to replace the backplane during the next available opportunity.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any known alternative solutions or similar experiences shared by others regarding the flickering run relay issue with the PLC5 Output Module 1771-OAD?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discussion seeks input from others who may have encountered a similar problem or have alternative solutions to suggest for addressing the ongoing flickering issue with the output module.</p>
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
