
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there! I am a new intern delving into the exciting world of automation. My current task involves mastering the programming of a Delta DVP80ES200R PLC and a Delta DOP-112WX HMI. The PLC runs on ISPSoft 3.17 software, while the HMI operates on DOPSoft 4.00.16. Unfortunately, Ive encountered an">
    <meta name="keywords" content="delta hmi, delta plc, ispsoft 17, dopsoft 16, delta dvp80es200r, dop-112wx, communication issue, troubleshooting, rs-485, com">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-delta-hmi-to-delta-plc-communication-issue">
    <title>Troubleshooting Delta HMI to Delta PLC Communication Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Delta HMI to Delta PLC Communication Issue | Oxmaint Community">
    <meta property="og:description" content="Hello there! I am a new intern delving into the exciting world of automation. My current task involves mastering the programming of a Delta DVP80ES200R PLC and a Delta DOP-112WX HMI. The PLC runs on ISPSoft 3.17 software, while the HMI operates on DOPSoft 4.00.16. Unfortunately, Ive encountered an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-delta-hmi-to-delta-plc-communication-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Delta HMI to Delta PLC Communication Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello there! I am a new intern delving into the exciting world of automation. My current task involves mastering the programming of a Delta DVP80ES200R PLC and a Delta DOP-112WX HMI. The PLC runs on ISPSoft 3.17 software, while the HMI operates on DOPSoft 4.00.16. Unfortunately, Ive encountered an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-delta-hmi-to-delta-plc-communication-issue"
      },
      "headline": "Troubleshooting Delta HMI to Delta PLC Communication Issue",
      "description": "Hello there! I am a new intern delving into the exciting world of automation. My current task involves mastering the programming of a Delta DVP80ES200R PLC and a Delta DOP-112WX HMI. The PLC runs on ISPSoft 3.17 software, while the HMI operates on DOPSoft 4.00.16. Unfortunately, Ive encountered an",
      "author": {
        "@type": "Person",
        "name": "Jerico"
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
                <h1 class="text-white">Troubleshooting Delta HMI to Delta PLC Communication Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jerico</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2580</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">295</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there! I am a new intern delving into the exciting world of automation. My current task involves mastering the programming of a Delta DVP80ES200R PLC and a Delta DOP-112WX HMI. The PLC runs on ISPSoft 3.17 software, while the HMI operates on DOPSoft 4.00.16.

Unfortunately, I've encountered an issue with communication between the PLC and HMI. While the HMI successfully sends data to the PLC, the reverse communication is not functioning as expected. For instance, when pressing the M0 button on the HMI, the Y0 indicator should light up on the PLC, but the corresponding indicator on the HMI remains unlit.

I have followed the designated connection process as outlined in the manual (https://deltronics.ru/images/manual/DOP-112-115+Quick+start+manual_EN.PDF), with the HMI connected via RS-485 COM1 to the PLC's RS-485 COM2 port.

If you have any further inquiries or suggestions, please don't hesitate to reach out. Your input is highly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, 

As an intern and newcomer in the automation field, I have been tasked with learning and programming a PLC and HMI system together. The PLC in question is the Delta DVP80ES200R (DVP ES2) running ISPSoft 3.17, while the HMI is the Delta DOP-112WX (from the DOP-100 Series) using DOPSoft 4.00.16.

However, I am encountering a problem where the HMI and PLC are not communicating effectively. Although the HMI is able to send data to the PLC, the PLC does not send the data back to the HMI. For example, when I press the M0 button on the HMI, the Y0 light illuminates on the PLC, but the Y0 indicator on the HMI does not reflect this change.

I have followed the connection setup guide for linking the HMI to the PLC via RS-485 COM1 on the HMI to RS-485 COM2 on the PLC, as outlined in the manual (https://deltronics.ru/images/manual/DOP-112-115+Quick+start+manual_EN.PDF).

If you have any further inquiries or suggestions, please feel free to reach out. Thank you for your assistance in advance.

Kind regards,
Konstantin Kolev</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KonstantinKolev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing communication errors, there is likely an issue with the display object. Keep an eye out for any "com errors" that may pop up, indicating a malfunction in the communication system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I appreciate the assistance. As mentioned by Konstantin, the issue lies in the read/write address of each object, a simple yet crucial detail. Thank you once again for your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jerico</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jerico expressed gratitude for the assistance provided. As mentioned by Konstantin, the issue lies in the read/write address of each object. Despite initially feeling it was a simple problem, Jerico is thankful for the help. Can you please elaborate on how you successfully resolved the issue, as I am currently facing the same challenge?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Theosel</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the communication issue between the Delta PLC and HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The communication issue could be due to incorrect settings or configurations, wiring issues, software compatibility problems, or communication protocol mismatches.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot communication problems between a Delta PLC and HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can troubleshoot by checking the wiring connections, ensuring the correct communication settings are configured in both the PLC and HMI software, verifying the communication protocol compatibility, and testing communication using diagnostic tools if available.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should I take to ensure proper communication setup between a Delta DVP80ES200R PLC and a Delta DOP-112WX HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You should double-check the RS-485 connections between the HMI and PLC, verify the communication settings (baud rate, data bits, parity, stop bits), confirm the correct communication protocol is selected, and ensure both devices are properly powered and configured to communicate with each other.</p>
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
