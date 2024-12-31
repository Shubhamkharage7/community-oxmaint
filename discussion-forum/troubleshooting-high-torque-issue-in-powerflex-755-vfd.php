
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am new to this forum and seeking help. I am currently dealing with a clients program that was created by someone else. The issue I am encountering is that the client has informed me that the VFD (Variable Frequency Drive) is generating a higher torque than">
    <meta name="keywords" content="troubleshooting, high torque issue, powerflex 755 vfd, variable frequency drive, torque current feedback, scada system, torque calculation, drive run command interlock, torque exceeding desired level, torque formula">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-high-torque-issue-in-powerflex-755-vfd">
    <title>Troubleshooting High Torque Issue in PowerFlex 755 VFD | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting High Torque Issue in PowerFlex 755 VFD | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am new to this forum and seeking help. I am currently dealing with a clients program that was created by someone else. The issue I am encountering is that the client has informed me that the VFD (Variable Frequency Drive) is generating a higher torque than">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-high-torque-issue-in-powerflex-755-vfd">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting High Torque Issue in PowerFlex 755 VFD | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am new to this forum and seeking help. I am currently dealing with a clients program that was created by someone else. The issue I am encountering is that the client has informed me that the VFD (Variable Frequency Drive) is generating a higher torque than">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-high-torque-issue-in-powerflex-755-vfd"
      },
      "headline": "Troubleshooting High Torque Issue in PowerFlex 755 VFD",
      "description": "Hello everyone, I am new to this forum and seeking help. I am currently dealing with a clients program that was created by someone else. The issue I am encountering is that the client has informed me that the VFD (Variable Frequency Drive) is generating a higher torque than",
      "author": {
        "@type": "Person",
        "name": "Nauman_95"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Troubleshooting High Torque Issue in PowerFlex 755 VFD</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Nauman_95</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">316</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">253</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am new to this forum and seeking help. I am currently dealing with a client's program that was created by someone else. The issue I am encountering is that the client has informed me that the VFD (Variable Frequency Drive) is generating a higher torque than necessary, impacting the quality of the materials being produced. The programmer utilized the formula "(Torque Current Feedback/Factor)*100", with the 'factor' value set at 235. The result of this calculation is compared to 105 to trigger a drive run command interlock. This information is displayed on the SCADA system to the operator as "Torque". In essence, the question is, "Why is the 'Torque Current Feedback' value exceeding the desired level?" Can someone provide an explanation?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is difficult to determine without sufficient information. How is the 755 programmed - for speed, position, or torque control? Is it an axis control or a standard 755 model? What is the 755 system controlling, and what are the load characteristics involved? Additionally, is there an encoder being used in this setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Robertmee, the motor at position 755 is currently operating in SVC mode without an encoder to control an Induction Motor. The client's objective is to run the motor at maximum speed while maintaining desired torque levels. However, there is an issue where the torque exceeds the desired value at maximum speed, impacting production speed and the quality of the output material. The client seeks to effectively control the torque at maximum speed to ensure production efficiency and maintain the physical properties of the output material within optimal ranges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nauman_95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you confirm if the motor in question has a Full Load Amperage (FLA) of 235? I am unclear on how Torque Curve Feedback (Torque Cur Fdbk) differs from Output Current in calculating torque percentage. According to the manual, Torque Cur Fdbk represents the current in phase with the voltage and is only a component of the overall output current.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Nauman_95 pointed out that the variable frequency drive (VFD) is generating higher torque than necessary, impacting the quality of the materials being produced. The client's priority is to regulate torque at optimal levels while maintaining production speed and ensuring the physical properties of the output material are within specifications. As a newcomer to this subject, I am curious about how motor torque influences product output at a consistent speed. Would a larger motor operating at a lower torque percentage yield the same results as a smaller motor running at higher torque, or am I mistaken in assuming that the issue is causing a reduction in production speed?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The relationship between speed and torque in a motor is based on its rated power, with torque being necessary to achieve the desired speed depending on the load. It is important to understand that there is no quick fix to reduce torque at maximum speed without adjusting load characteristics. When clients mistake higher torque for causing product variance, it is actually the product characteristics such as weight, tension, and friction that are responsible. By addressing the root cause through process improvements, the torque will naturally stabilize at the appropriate level.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the VFD in the PowerFlex 755 to generate higher torque than necessary?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of higher torque could be due to factors such as incorrect programming, incorrect calibration of torque sensors, or electrical faults within the system.</p>
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
