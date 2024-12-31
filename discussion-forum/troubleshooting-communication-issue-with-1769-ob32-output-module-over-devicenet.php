
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a Micrologix 1500 system set up with a 1769-SDN module for communication with a 1769-OB32 24VDC output module, all controlled by a 1769-ADN module. The Micrologix is able to successfully read data from the adjacent 1769-IQ32 module at memory address I:1.66. In RSNetWorx, it is evident that">
    <meta name="keywords" content="troubleshooting communication issue, 1769-ob32 output module, devicenet communication problem, micrologix 1500 system, rsnetworx configuration, 1769">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-with-1769-ob32-output-module-over-devicenet">
    <title>Troubleshooting Communication Issue with 1769-OB32 Output Module over DeviceNet | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issue with 1769-OB32 Output Module over DeviceNet | Oxmaint Community">
    <meta property="og:description" content="I have a Micrologix 1500 system set up with a 1769-SDN module for communication with a 1769-OB32 24VDC output module, all controlled by a 1769-ADN module. The Micrologix is able to successfully read data from the adjacent 1769-IQ32 module at memory address I:1.66. In RSNetWorx, it is evident that">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-with-1769-ob32-output-module-over-devicenet">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issue with 1769-OB32 Output Module over DeviceNet | Oxmaint Community">
    <meta name="twitter:description" content="I have a Micrologix 1500 system set up with a 1769-SDN module for communication with a 1769-OB32 24VDC output module, all controlled by a 1769-ADN module. The Micrologix is able to successfully read data from the adjacent 1769-IQ32 module at memory address I:1.66. In RSNetWorx, it is evident that">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-with-1769-ob32-output-module-over-devicenet"
      },
      "headline": "Troubleshooting Communication Issue with 1769-OB32 Output Module over DeviceNet",
      "description": "I have a Micrologix 1500 system set up with a 1769-SDN module for communication with a 1769-OB32 24VDC output module, all controlled by a 1769-ADN module. The Micrologix is able to successfully read data from the adjacent 1769-IQ32 module at memory address I:1.66. In RSNetWorx, it is evident that",
      "author": {
        "@type": "Person",
        "name": "m-costa"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-07",
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
                <h1 class="text-white">Troubleshooting Communication Issue with 1769-OB32 Output Module over DeviceNet</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>m-costa</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2311</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">393</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a Micrologix 1500 system set up with a 1769-SDN module for communication with a 1769-OB32 24VDC output module, all controlled by a 1769-ADN module. The Micrologix is able to successfully read data from the adjacent 1769-IQ32 module at memory address I:1.66. In RSNetWorx, it is evident that the 1769-OB32 outputs are mapped to O:1.2 and O:1.3. However, despite activating bits in the ladder logic program, the outputs do not respond as expected. Upon further inspection in RSNetWorx, it appears that the 1769-ADN module is not detecting any signals being sent to the mapped outputs. Do you have any insights on this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Before proceeding, it is crucial to review the basics: Are there any identified errors on the 1769-SDN display? Additionally, ensure that the "Run" bit in the 1769-SDN Command Word (O:1.0/0) is set to true while the MicroLogix 1500 is in RUN mode. While inputs may function properly in controller Program mode or scanner Idle mode, outputs may not be transmitted as expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Ken, for the information. I have successfully configured the 'Run' feature and am now able to communicate bidirectionally.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>m-costa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach inquired about potential issues with the 1769-SDN display and the "Run" bit in the 1769-SDN Command Word (O:1.0/0) while using the MicroLogix 1500 in RUN mode. Inputs function correctly in controller Program mode or scanner Idle mode, but outputs are not being transmitted. 

Another user is experiencing a similar issue with a remote backplane featuring 2x iq32 and 2 oq32 slots. While the equipment initially operated smoothly, 2 iq32 modules have lost communication while 2 oq32 modules continue to function. The user is seeking clarification on the run command for the slots. Can anyone assist with an explanation, please?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kindbu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kindbu asked for help with a remote backplane issue involving 4 slots - 2 iq32 and 2 oq32. The equipment was functioning correctly but suddenly stopped working, with 2 iq32 modules losing communication. how can you explain the sSlots command? Can you clarify what the PLC is connecting to in the remote rack?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM inquired about the PLC connected to the remote rack. The PLC in question is a L61 model. Check out the image for further details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kindbu</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What information is provided in the Module Info tab? Explore the details within this section for valuable insights.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is an Ethernet adapter, not a DeviceNet adapter, as clarified in a thread that was resolved nearly 15 years ago. For further assistance, please visit the main PLCTalk Q&A page and select the "Start a new thread" button. Be sure to provide detailed information about your system for accurate help and guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach clarified that the adapter in question is for Ethernet, not DeviceNet. Bringing back a long-resolved discussion from 15 years ago is unnecessary. If you have any queries, please visit the main PLCTalk Q&A page and initiate a new thread by clicking on the green "Start a new thread" button. Provide detailed information about your system to receive better assistance. Start a new conversation to get the support you need.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kindbu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM inquired about the information in the Module Info tab. It appears that the rest of your modules are online, but keying is disabled, indicating a potential full module mismatch due to using the wrong model. By checking the module tab, you can compare the online module with your project to identify any differences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are the outputs of the 1769-OB32 module not responding as expected despite activating bits in the ladder logic program?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This could be due to communication issues between the modules or incorrect mapping of the outputs. Further troubleshooting and inspection of the communication setup may be required.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot communication issues between the 1769-ADN module and the 1769-OB32 output module over DeviceNet?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the configuration settings in RSNetWorx, verifying the mapping of outputs, ensuring proper addressing, and inspecting the signal detection by the 1769-ADN module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could be the possible reasons for the 1769-ADN module not detecting any signals being sent to the mapped outputs of the 1769-OB32 module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could stem from incorrect configuration settings, addressing mismatch, faulty cabling, or network communication errors. Further investigation and testing are needed to pinpoint the exact cause.</p>
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
