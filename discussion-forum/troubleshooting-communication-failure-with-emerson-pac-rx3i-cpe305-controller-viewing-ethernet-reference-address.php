
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am a first-time contributor but a long-time follower of these forums. Despite searching extensively, I have been unable to find a solution to our current issue. Our system is experiencing a communication failure with a crucial electrical component, as indicated by SCADA due to the status">
    <meta name="keywords" content="emerson pac/rx3i cpe305 controller, troubleshooting communication failure, scada status bits, reference address, rj45 cpu ethernet, variable tag, data watch, logic and variables, rewiring, modbus to ethernet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-failure-with-emerson-pac-rx3i-cpe305-controller-viewing-ethernet-reference-address">
    <title>Troubleshooting Communication Failure with Emerson PAC/RX3i CPE305 Controller: Viewing Ethernet Reference Address | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Failure with Emerson PAC/RX3i CPE305 Controller: Viewing Ethernet Reference Address | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am a first-time contributor but a long-time follower of these forums. Despite searching extensively, I have been unable to find a solution to our current issue. Our system is experiencing a communication failure with a crucial electrical component, as indicated by SCADA due to the status">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-failure-with-emerson-pac-rx3i-cpe305-controller-viewing-ethernet-reference-address">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Failure with Emerson PAC/RX3i CPE305 Controller: Viewing Ethernet Reference Address | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am a first-time contributor but a long-time follower of these forums. Despite searching extensively, I have been unable to find a solution to our current issue. Our system is experiencing a communication failure with a crucial electrical component, as indicated by SCADA due to the status">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-failure-with-emerson-pac-rx3i-cpe305-controller-viewing-ethernet-reference-address"
      },
      "headline": "Troubleshooting Communication Failure with Emerson PAC/RX3i CPE305 Controller: Viewing Ethernet Reference Address",
      "description": "Greetings everyone, I am a first-time contributor but a long-time follower of these forums. Despite searching extensively, I have been unable to find a solution to our current issue. Our system is experiencing a communication failure with a crucial electrical component, as indicated by SCADA due to the status",
      "author": {
        "@type": "Person",
        "name": "MichaelIEC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
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
                <h1 class="text-white">Troubleshooting Communication Failure with Emerson PAC/RX3i CPE305 Controller: Viewing Ethernet Reference Address</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MichaelIEC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">645</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">93</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I am a first-time contributor but a long-time follower of these forums. Despite searching extensively, I have been unable to find a solution to our current issue. Our system is experiencing a communication failure with a crucial electrical component, as indicated by SCADA due to the status bits. I have thoroughly inspected and replaced the radio, as well as verified the other components. The contractor has made changes to the Reference Address (referencing RJ45 CPU ETHERNET data) and the variable tag. However, the old and new variable bits are not showing any changes in Data Watch. Despite checking the logic and variables, I am unable to pinpoint the problem.

No rewiring has been done, the only component replaced was the radio, which has been confirmed to be communicating properly. I am able to remotely access all devices on the system post-installation. Testing MODBUS to Ethernet switches to radio has not revealed any issues. There is ladder logic in place that alters the Read/Write status bits every two minutes, resulting in updated data. However, the status turns FALSE immediately after a 3-second delay.

Is there a way to access diagnostics for the channel transmitted through the Ethernet port on the CPU? Despite monitoring the reference bit via Data Watch, there have been no changes apart from the 2-minute force reset. PLC Diagnostics have been checked with no reported issues. Any insights or suggestions would be greatly appreciated. Thank you, Michael.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are the communications between the SCADA system and the PLC experiencing issues? Have the status bits being monitored shown any discrepancies since the contractor's work on the equipment? Are these status bits influenced by the PLC's logic?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PLC is continuously polling READ/WRITE requests during a forced reset and only updating every 2 minutes. Communication between the PLC and SCADA remains stable, as confirmed by the functioning of other components.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelIEC</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the communication failure with the Emerson PAC/RX3i CPE305 Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The communication failure could be due to various reasons such as incorrect Reference Address settings, issues with the variable tags, logic errors, or faulty components.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the communication issues with the Emerson PAC/RX3i CPE305 Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the Reference Address settings, verifying variable tag configurations, inspecting the logic for errors, and testing components for proper functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a way to access diagnostics for the channel transmitted through the Ethernet port on the CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you can access diagnostics for the Ethernet port on the CPU to monitor the communication channel and identify any potential issues affecting the data transmission.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why do the status bits in Data Watch not reflect the changes in the Reference Address and variable tags?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in the status bits could be due to misconfigured settings, logic errors, or communication interruptions between components. Further investigation is needed to pinpoint the exact cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Why does the status turn FALSE immediately after a 3-second delay despite the ladder logic altering Read/Write status bits every two minutes?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The immediate status change could be triggered by a specific condition or error in the logic that is causing the status bits to reset. Reviewing the ladder logic and monitoring variables closely</p>
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
