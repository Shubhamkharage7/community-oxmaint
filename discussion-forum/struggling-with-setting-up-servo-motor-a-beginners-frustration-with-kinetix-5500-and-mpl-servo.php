
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Although Ive only completed a small number of projects, I keep facing major challenges when trying to operate a servo motor. It feels like Im starting from scratch every time I attempt to work with servos, despite making progress in other areas. Currently, Im grappling with setting up a">
    <meta name="keywords" content="servo motor, kinetix 5500, mpl servo, setting up servo motor, beginners frustration, commutation configuration, logix v35, hookup tests, stopped mode, start inhibited, servo operation, servo challenges">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/struggling-with-setting-up-servo-motor-a-beginners-frustration-with-kinetix-5500-and-mpl-servo">
    <title>Struggling with Setting up Servo Motor: A Beginners Frustration with Kinetix 5500 and MPL Servo | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Struggling with Setting up Servo Motor: A Beginners Frustration with Kinetix 5500 and MPL Servo | Oxmaint Community">
    <meta property="og:description" content="Although Ive only completed a small number of projects, I keep facing major challenges when trying to operate a servo motor. It feels like Im starting from scratch every time I attempt to work with servos, despite making progress in other areas. Currently, Im grappling with setting up a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/struggling-with-setting-up-servo-motor-a-beginners-frustration-with-kinetix-5500-and-mpl-servo">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Struggling with Setting up Servo Motor: A Beginners Frustration with Kinetix 5500 and MPL Servo | Oxmaint Community">
    <meta name="twitter:description" content="Although Ive only completed a small number of projects, I keep facing major challenges when trying to operate a servo motor. It feels like Im starting from scratch every time I attempt to work with servos, despite making progress in other areas. Currently, Im grappling with setting up a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/struggling-with-setting-up-servo-motor-a-beginners-frustration-with-kinetix-5500-and-mpl-servo"
      },
      "headline": "Struggling with Setting up Servo Motor: A Beginners Frustration with Kinetix 5500 and MPL Servo",
      "description": "Although Ive only completed a small number of projects, I keep facing major challenges when trying to operate a servo motor. It feels like Im starting from scratch every time I attempt to work with servos, despite making progress in other areas. Currently, Im grappling with setting up a",
      "author": {
        "@type": "Person",
        "name": "TheRooster"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Struggling with Setting up Servo Motor: A Beginners Frustration with Kinetix 5500 and MPL Servo</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">621</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">142</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Although I've only completed a small number of projects, I keep facing major challenges when trying to operate a servo motor. It feels like I'm starting from scratch every time I attempt to work with servos, despite making progress in other areas. Currently, I'm grappling with setting up a Kinetix 5500 connected to an MPL servo. The servo won't enter stopped mode for hookup tests because the commutation hasn't been configured. It's a bit ironic trying to set up commutation with the start inhibited! I'm using Logix v35, by the way. Thankfully, this forum has been a lifesaver for me. Without it, I might have given up on this endeavor a long time ago.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have already reviewed the manual which states that commutation only pertains to third-party motors. However, it seems there is an issue as I have encountered a specific fault code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you chosen the motor from a catalog? This simple step will automatically configure all the necessary feedback parameters for you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to the issue of difficulty with Kinetix products, I have had extensive experience working with them. While overall they are not too challenging to work with, there have been instances where I encountered faulty components, which can be frustrating. For example, during an installation of 60 Kinetix 6500s, all of them had faulty gold connectors to the safe off board, indicating a bad batch. In another installation of 29 axes, I found that the shielded case of the RJ45 port was manufactured slightly too long, causing it to short out the Cat6 cable unless adjusted. Currently, I am in the process of installing 20 5700s using the 2198 Hiperface to DSL converters for feedback. Unfortunately, 6 out of the 20 were defective straight out of the box. Thankfully, I was able to use universal bus converters from a previous installation to get them up and running.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Achieving optimal servo performance is a breeze with a well-designed system. The main issue typically lies in the initial design phase. With the right tools and guidance, tuning a servo system can be done swiftly and effectively. At our company, we specialize in teaching individuals how to fine-tune their servo systems in just minutes. The key to success lies in having access to the proper tools and knowledge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As mentioned by others, it is important to ensure proper MPL motor configuration in order to avoid potential issues. If there is a bug causing the loss of commutation configuration, it is recommended to follow the steps below to resolve it. This issue may occur when trying to perform a commutation test on a motor that already has commutation set from the factory, such as a VPC motor. To address the "INIT FLT S04, Commutation Not Configured" fault displayed on the axis, follow these steps:

1. Go offline with the controller
2. Access the axis properties in RSLogix/Studio 5000 Logix Designer
3. Under the Motor category, select Change Catalog
4. Choose NONE as the motor type, click OK, and Apply
5. Repeat step 3 and now select the correct motor from the list, click OK, and Apply
6. Download the project
7. The axis state should now be in Stopped

In cases where the saved motor configuration for the axis needs to be cleared and re-initialized, this procedure can be followed. Good luck with resolving any configuration issues you may encounter!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>StankyCheezus</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I've encountered the same situation where each new brand or series presents its own set of unique features to familiarize oneself with. My most successful experiences have been with vendors who have exceptional app engineers that provide hands-on assistance and guidance. However, setting up and learning a new system can still be a significant time-consuming process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>controlsgirl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although most of my experience has been with stepper motors, I tackled my first motion project involving servos by retrofitting a Kinetix 6500 to a machine with an Anorad linear motor. The machine was originally controlled by a PLC5 and an IMC servo controller (or possibly a Kollmorgan drive). After receiving a motor file from AB and receiving assistance from a local engineer during the initial startup and tuning, the project went smoothly. The servo system has been in operation for over a decade without any issues, which is a source of pride for me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the responses. I was able to resolve the issue by following an old technote and adjusting the motor polarities. It's unclear how this issue occurred, but I experienced a loss of STO during my initial polarity test, which resulted in a failure and possibly triggered the glitch. If you're encountering the "Kinetix 6500/PowerFlex 755 CIP Motion: Error - Commutation Not Configured" error, you can find assistance on rockwellautomation.custhelp.com.

In my experience, I have encountered fewer problems with HMIs, VFDs, PLCs, Valves, Sensors, Motors, Safety Scanners/Light Curtains, Clamps, Hydraulics, and Operators combined than I have with servos. This seems to be a common issue in my line of work.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Rooster expressed gratitude for the assistance received in resolving the issue by referring to an older technical note and adjusting the motor polarities. The issue may have occurred due to a polarity test failure leading to a glitch in Kinetix 6500/PowerFlex 755 CIP Motion with an error stating "Commutation Not Configured”. The individual mentioned facing fewer difficulties with HMIs, VFDs, PLCs, Valves, Sensors, Motors, Safety Scanners/Light Curtains, Clamps, Hydraulics, and Operators combined compared to servos. The old technote was found on rockwellautomation.custhelp.com, and the individual highlighted the challenges faced when working with different servo platforms, emphasizing the need for experience and vendor assistance in commissioning and programming servos. It is crucial to allocate additional time for unfamiliar servo systems to ensure proper application and performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>controlsgirl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After numerous attempts, I finally stumbled upon it while browsing the Rockwell website. I can't recall the exact search terms I used. As mentioned, experimenting with novel movements or unique gear configurations can open a Pandora's box, akin to switching to a completely different brand of drive system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before purchasing servos, it is crucial to carefully review the work done by your Mechanical Engineer. Mechanical Engineers often only focus on torque and may purchase servos that barely meet the required specifications due to their lack of expertise in math. This can result in the need to replace undersized servo motors with larger ones during testing. Additionally, Mechanical Engineers may not fully comprehend the importance of optimal RPM for servos. While a servo can function at any RPM, using an 8,000 rpm servo at 50 rpm may not yield the desired performance.

To ensure the servo is a good fit for your application, it is essential to consider the customer's daily operating process. Simply conducting "hook-up" tests and tuning strategies may not compensate for a servo that is not well-suited for the task. By utilizing an AB Servo Motor paired with an AB drive and entering the motor catalog number into the axis configuration, we have consistently achieved excellent performance effortlessly over the past decade.

While our experience primarily involves executing simple s-curve absolute position moves, we have successfully implemented a gear box ratio adjustment to allow the servo to operate at 50 percent of its rated RPM on similar projects. This modification resulted in significantly improved motion response, as noted by a seasoned customer during the startup phase.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Plastic</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why am I facing challenges when trying to operate a servo motor despite making progress in other areas?</h4>
<p class='text-muted'><strong>Answer:</strong> - It's common to encounter difficulties when working with servo motors due to their complexity and specific setup requirements. Getting familiar with the process and seeking help from forums or communities can be beneficial.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I set up a Kinetix 5500 connected to an MPL servo if the servo won't enter stopped mode for hookup tests?</h4>
<p class='text-muted'><strong>Answer:</strong> - The servo may not enter stopped mode because commutation hasn't been configured. Ensure that the commutation setup is correctly done to enable the servo to enter the desired modes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I do if I'm having trouble setting up commutation with the start inhibited when working with a servo motor?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you're facing issues setting up commutation with the start inhibited, it's essential to troubleshoot the configuration settings and ensure they align with the requirements of the servo motor and controller being used.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I work with Logix v35 when setting up a Kinetix 5500 and MPL servo?</h4>
<p class='text-muted'><strong>Answer:</strong> - When using Logix v35, make sure to refer to the relevant documentation and guides provided by the manufacturer for setting up the Kinetix 5500 and MPL servo. Additionally, seeking assistance from online resources or forums can help overcome any specific challenges related to this software version.</p>
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
