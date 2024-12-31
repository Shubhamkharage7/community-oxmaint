
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Having experience with programming servos from various manufacturers and series, I have typically utilized PLCs without motion functions. However, I have heard from my engineering department that setting up an AB servo with a standard PLC can be more time-consuming compared to using a PLC with motion capabilities. Despite">
    <meta name="keywords" content="ab servo controllers, standard plc, motion capable plc, programming servos, single-axis applications, point-to-point movements, i/o configuration, motion commands, code development, motion logic, efficiency advantages, setup times, code abstraction, motion call coding">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficient-programming-of-ab-servo-controllers-standard-plc-vs-motion-capable-plcs">
    <title>Efficient Programming of AB Servo Controllers: Standard PLC vs. Motion Capable PLCs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficient Programming of AB Servo Controllers: Standard PLC vs. Motion Capable PLCs | Oxmaint Community">
    <meta property="og:description" content="Having experience with programming servos from various manufacturers and series, I have typically utilized PLCs without motion functions. However, I have heard from my engineering department that setting up an AB servo with a standard PLC can be more time-consuming compared to using a PLC with motion capabilities. Despite">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficient-programming-of-ab-servo-controllers-standard-plc-vs-motion-capable-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficient Programming of AB Servo Controllers: Standard PLC vs. Motion Capable PLCs | Oxmaint Community">
    <meta name="twitter:description" content="Having experience with programming servos from various manufacturers and series, I have typically utilized PLCs without motion functions. However, I have heard from my engineering department that setting up an AB servo with a standard PLC can be more time-consuming compared to using a PLC with motion capabilities. Despite">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficient-programming-of-ab-servo-controllers-standard-plc-vs-motion-capable-plcs"
      },
      "headline": "Efficient Programming of AB Servo Controllers: Standard PLC vs. Motion Capable PLCs",
      "description": "Having experience with programming servos from various manufacturers and series, I have typically utilized PLCs without motion functions. However, I have heard from my engineering department that setting up an AB servo with a standard PLC can be more time-consuming compared to using a PLC with motion capabilities. Despite",
      "author": {
        "@type": "Person",
        "name": "controlsgirl"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-04",
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
                <h1 class="text-white">Efficient Programming of AB Servo Controllers: Standard PLC vs. Motion Capable PLCs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>controlsgirl</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1028</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">236</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Having experience with programming servos from various manufacturers and series, I have typically utilized PLCs without motion functions. However, I have heard from my engineering department that setting up an AB servo with a standard PLC can be more time-consuming compared to using a PLC with motion capabilities. Despite all our applications involving simple point-to-point movements on a single axis, it seems that programming an AB servo without motion options on the PLC may present challenges.

In my experience with programming single-axis, point-to-point applications, the process involves three main tasks. Firstly, configuring the hardware and setting up the I/O in the servo controller to define parameters such as distance, speed, acceleration, deceleration, and run triggers. Secondly, developing code to execute motion commands, handle mode types, pass parameters, monitor feedback, and manage faults in a servo-agnostic manner, applicable to different servo makes and models. Finally, creating specific motion logic for the application, including sequences for triggering motion commands and handling feedback and faults.

I wonder if similar programming principles can be applied to an AB servo controller and whether utilizing an AB PLC with motion capabilities would offer any efficiency advantages. It is unclear to me why our engineers encounter prolonged setup times for each application, considering that once the initial configuration and code abstraction are complete, the process becomes more streamlined and reusable. The remaining task of coding each motion call is akin to programming cylinders, suggesting that the overall programming process should not be significantly different.

I hope this explanation sheds light on the programming process for those seeking clarity on the topic. Thank you for taking the time to read through my insights.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to automation applications like indexing or motion control, the time needed to implement them is quite similar whether using an "Indexing" drive or a "Motion" drive. However, the complexity arises when dealing with motion-related tasks such as Camming, Gearing, Virtual Axes, and Master-Slave setups. If your application only requires basic point-to-point indexing, opting for an indexing drive might be more cost-effective in terms of processor and inverter expenses. Additionally, if you are working with a large number of axes, choosing an indexing drive could also help save on network infrastructure costs. The additional time taken in setting up motion control systems may stem from the need to fine-tune the system for optimal performance, especially in cases where the motor specifications are not accurately matched to the load requirements. Ultimately, the issue lies not in a comparison between Indexing and Motion drives, but rather in the correct design and understanding of the motor and drivetrain components.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Historically, A-B's indexing drives have typically been private-labeled or developed separately from the Motion Control Division's primary product lines, resulting in varying software and functionality. One area where A-B has excelled with their modern Kinetix 5100 products is by offering a set of Add-On Instructions that mimic the CIP Motion instruction set. While there are still standalone configuration tools and applications that can be integrated with systems other than ControlLogix and CompactLogix, using the AOI's allows for seamless operation without the need to run the Kinetix 5100 with an "M" model CompactLogix or define it as an axis. Instead, instructions such as "MSO_5100," "MAM_5100," or "MAFR_5100" are used, resembling the functionality of the MSO, MAM, and MAFR from the CIP Motion subsystem. Although there may be slight differences in timing and diagnostics, the AOI's provide the necessary abstraction layer right out of the box. Other vendors, such as Wittenstein with their Cyber Drive motors and Yaskawa with their Sigma family controllers, have implemented similar concepts effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was unaware that Allen Bradley (AB) offered functionalities for the Kinetix 5100. This information could be a game-changer. Mitsubishi provides Add-On Instructions (AOIs) for their J4 servo drives, which have been easy for us to work with. If AB's features are comparable, they may be a top contender for our upcoming motion projects. Perhaps even for the project following the next one, which involves a potential switch to servo drive in a hydraulic system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your feedback. I had a suspicion that experience and motor tuning could play a role in this. I appreciate your distinction between "indexing" and "motion" servos, as it clarifies things. Can you share some of the more complex motion applications you have worked on where a motion PLC would offer a clear advantage over using a servo controller for programming? 

In my experience, I find that simple point-to-point or indexing applications tend to require a similar amount of time whether using an "Indexing" drive or a "Motion" drive. However, the real difference emerges when dealing with advanced motion tasks such as Camming, Gearing, Virtual Axes, Master-Slave setups, and more. 

For basic point-to-point indexing, opting for an indexing drive may save costs in terms of processor and inverter. Similarly, if you are dealing with a large number of axes, it could also lead to savings in network infrastructure. 

The additional time required may also stem from the complexity of setting up and understanding motion functionalities, particularly when dealing with higher inertia ratios or when tuning the axis. This issue does not boil down to a simple choice between Indexing and Motion; it often relates to improper motor or drivetrain design or a misunderstanding of the load requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>controlsgirl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ControlsGirl was asked about challenging motion applications where using a motion PLC would be advantageous over the servo controller. Some of the notable projects included camming or gearing, as well as virtual master axes like K6000 and K5500. One particularly complex task involved indexing accumulation belts where one set of indexers chased the other without disrupting product flow. Recently, ControlsGirl worked on a modification using SEW Movi-C technology to retrofit axes on another machine. This involved utilizing an external encoder to follow the main transport and synchronize two new indexers with a camming profile. This adjustment helped prevent product damage caused by increased line speeds. ControlsGirl's expertise lies in point-to-point applications using brands like AB, SEW, Festo, and SMC drives/motors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Yaskawa's SigmaLogic servo drives offer exceptional performance for precise point-to-point motion control. They come with a comprehensive range of AOIs designed to seamlessly integrate with Control/Compact Logix PLCs, eliminating the need for a separate motion PLC or motion card. This makes them a cost-effective and efficient solution for various industrial automation applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sparky66</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, joseph_e2 mentioned the possibility of a hydraulic system that could benefit from servo driving technology. At my company, we specialize in manufacturing servo powerpacks that utilize a rexroth drive/servo/pump combination with sytronix firmware. I can attest to the effectiveness of this setup, as it seamlessly integrates with Ab controllers and delivers optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to dwoodlock, our company specializes in manufacturing a servo powerpack that utilizes a Rexroth drive/servo/pump equipped with Sytronix firmware. I can attest that it functions exceedingly well and seamlessly integrates with Ab controllers. The potential for this product is promising, however, its re-launch has been postponed for 3 years.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Controlsgirl expressed gratitude for the feedback and also mentioned the importance of experience and motor tuning. Motion controllers with automatic tuning capabilities are essential for optimal performance. What are some of the challenging motion applications you have worked on where utilizing a motion PLC would offer distinct advantages compared to programming with a servo's controller? Applications that involve linear to rotary conversions and camming functions of another axis often require the flexibility and precision of a motion PLC. In many cases, adjustments to gains may need to be made on-the-fly. It is crucial to have reliable motion control solutions in place, as trying to develop a custom solution for every scenario is not feasible. Visit Delta Motion's website for more information on solutions for pipe handling in the oil and gas industry.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the main tasks involved in programming single-axis, point-to-point applications for servo controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> The main tasks involve configuring hardware and setting up I/O, developing code for motion commands and handling feedback, and creating specific motion logic for the application.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is programming an AB servo with a standard PLC more time-consuming than using a PLC with motion capabilities?</h4>
<p class='text-muted'><strong>Answer:</strong> Setting up an AB servo with a standard PLC can be more time-consuming, especially for applications involving simple point-to-point movements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there efficiency advantages to utilizing an AB PLC with motion capabilities for programming servo controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Using an AB PLC with motion capabilities may offer efficiency advantages in terms of setup times and ease of programming, especially for repetitive tasks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why do engineers encounter prolonged setup times when programming servo controllers with standard PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Prolonged setup times may occur due to the need for detailed configuration, code abstraction, and manual coding of motion commands, which can be streamlined with PLCs having motion capabilities.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Can similar programming principles be applied to an AB servo controller as with other servo makes and models?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, similar programming principles can be applied, but utilizing an AB PLC with motion capabilities may provide additional features and efficiency in programming servo controllers.</p>
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
