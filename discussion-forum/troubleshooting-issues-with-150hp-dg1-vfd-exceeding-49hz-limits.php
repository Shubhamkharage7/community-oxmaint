
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I was given the task of installing and programming a DG1 VFD model # DG1 34170FN-C21C for a 150hp AHU. Initially, everything was working smoothly, but now we are facing an issue where the VFD stops itself when commanded above 49hz without any faults. The threshold for continuous operation">
    <meta name="keywords" content="150hp dg1 vfd, troubleshooting vfd issues, dg1 vfd programming, exceeding 49hz limits, 150hp ahu vfd, vfd stops above 49hz, vfd shuts down at 52hz, motor">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-150hp-dg1-vfd-exceeding-49hz-limits">
    <title>Troubleshooting issues with 150hp DG1 VFD exceeding 49hz limits | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting issues with 150hp DG1 VFD exceeding 49hz limits | Oxmaint Community">
    <meta property="og:description" content="I was given the task of installing and programming a DG1 VFD model # DG1 34170FN-C21C for a 150hp AHU. Initially, everything was working smoothly, but now we are facing an issue where the VFD stops itself when commanded above 49hz without any faults. The threshold for continuous operation">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-150hp-dg1-vfd-exceeding-49hz-limits">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting issues with 150hp DG1 VFD exceeding 49hz limits | Oxmaint Community">
    <meta name="twitter:description" content="I was given the task of installing and programming a DG1 VFD model # DG1 34170FN-C21C for a 150hp AHU. Initially, everything was working smoothly, but now we are facing an issue where the VFD stops itself when commanded above 49hz without any faults. The threshold for continuous operation">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-150hp-dg1-vfd-exceeding-49hz-limits"
      },
      "headline": "Troubleshooting issues with 150hp DG1 VFD exceeding 49hz limits",
      "description": "I was given the task of installing and programming a DG1 VFD model # DG1 34170FN-C21C for a 150hp AHU. Initially, everything was working smoothly, but now we are facing an issue where the VFD stops itself when commanded above 49hz without any faults. The threshold for continuous operation",
      "author": {
        "@type": "Person",
        "name": "Sparky2024"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-06",
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
                <h1 class="text-white">Troubleshooting issues with 150hp DG1 VFD exceeding 49hz limits</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Sparky2024</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">233</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">85</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I was given the task of installing and programming a DG1 VFD model # DG1 34170FN-C21C for a 150hp AHU. Initially, everything was working smoothly, but now we are facing an issue where the VFD stops itself when commanded above 49hz without any faults. The threshold for continuous operation seems to be between 48-49hz. Even when commanded to 60hz, it exceeds 50-52hz and then shuts down. The motor specifications are 150hp, 460v, 167a, and 1.15sf, which are correctly reflected in my parameters. When I check the amp reading, it ranges from 97-113a before it stops. Despite reviewing parameter limits, I am unable to pinpoint the issue and would appreciate any guidance. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure to review your settings and check the VFD current limit, which should be set around 170 amps. If it's lower than that, it could be entering a current limit mode and experiencing stalling issues. The VFD might be programmed to automatically shut down in case of an overcurrent situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted running it manually using the keypad? When checking the amperage, readings fluctuate between 97-113 amps depending on when it halts. How are you measuring the amperage? It is not effective to simply attach a clamp on ammeter to the output wiring when dealing with a Variable Speed Drive (VSD).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BryanG inquired: Have you attempted to operate it manually using the keypad? How are you measuring the readings? Simply attaching a clamp on ammeter to the output cabling won't work with a VSD system. This is precisely what I attempted to do... How do you suggest taking readings and why might the VFD hinder accurate measurements on the output? I have tested it in both manual and automatic modes, yielding the same outcome. Despite setting the limit at 192A, the VFD does not fault when it shuts off; rather, it transitions from running to stopping as if it was instructed to halt.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sparky2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many contemporary Fluke clamp on ammeters provide accurate readings on VFD output wires, unlike in the past. The VFD prioritizes the output current for current limiting. If the VFD stops despite a run command, check the digital inputs to confirm the RUN bit is active. This may indicate a discrete run signal dropout.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To accurately measure the output current from a VFD, it is important to understand that traditional clamp on amp meters may not be suitable as they are designed for sinusoidal waveforms, whereas VFDs produce a width modulated square wave. The most effective method is to monitor the load output directly from the VFD, either by configuring it to provide an analog output or by viewing it on the VFD display. It is possible that the current being measured is the DC bus current. While there are clamp on meters available that can measure both pure DC and modulated DC currents, it is recommended to explore alternative monitoring options for VFDs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are differing opinions on the use of Clamp On meters to measure the output current of a Variable Speed Drive (VSD). Both individuals have extensive experience with VSDs, unlike myself. I have tested both manual and automatic methods, yielding the same results. Utilizing the manual method can help identify any issues with external Run signals. If the VSD has Emergency Stop inputs, they should function in both Local and Remote settings. Monitoring the supply voltage is crucial, as a faulty electrical connection can result in increased resistance in the wiring, leading to the issues described. As the current rises, the voltage drop across a high-resistance connection also increases, potentially causing the VSD to operate below its optimal voltage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is my DG1 VFD model exceeding the 49hz limit and shutting down when commanded above that frequency?</h4>
<p class='text-muted'><strong>Answer:</strong> - The VFD may be stopping itself due to the frequency exceeding 49hz without any faults. Check the parameter settings and ensure they are correctly configured for the motor specifications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing the VFD to shut down even when commanded to 60hz?</h4>
<p class='text-muted'><strong>Answer:</strong> - The VFD might be exceeding 50-52hz when commanded to 60hz, leading to it shutting down. Review the parameter limits and ensure they are set appropriately for the motor's requirements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot the issue of the VFD stopping around 48-49hz during operation?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshoot by checking the amp readings, verifying the parameter settings, and ensuring they align with the motor specifications of 150hp, 460v, 167a, and 1.15sf. It could help in identifying the root cause of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps should I take to resolve the problem of the VFD exceeding the frequency limits and stopping without any faults?</h4>
<p class='text-muted'><strong>Answer:</strong> - Verify the VFD parameter settings, inspect the motor specifications, and consider consulting the VFD's manual for troubleshooting guidance. It might help in resolving the issue of the VFD stopping when the frequency exceeds 49hz.</p>
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
