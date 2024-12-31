
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a newcomer in the PLC industry, I am eager to learn how to automate an overhead gantry crane using Siemens or BandR PLC systems. What equipment is necessary for this type of automation? My goal is to control four motors using inverters while incorporating a conveyor belt into">
    <meta name="keywords" content="overhead gantry crane automation, siemens plc system, b&r plc system, necessary equipment for gantry crane automation, motor control with inverters, conveyor belt automation, object picking">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/automating-an-overhead-gantry-crane-with-siemens-or-bandr-plc-systems-necessary-equipment-and-tips">
    <title>Automating an Overhead Gantry Crane with Siemens or BandR PLC Systems - Necessary Equipment and Tips | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Automating an Overhead Gantry Crane with Siemens or BandR PLC Systems - Necessary Equipment and Tips | Oxmaint Community">
    <meta property="og:description" content="As a newcomer in the PLC industry, I am eager to learn how to automate an overhead gantry crane using Siemens or BandR PLC systems. What equipment is necessary for this type of automation? My goal is to control four motors using inverters while incorporating a conveyor belt into">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/automating-an-overhead-gantry-crane-with-siemens-or-bandr-plc-systems-necessary-equipment-and-tips">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Automating an Overhead Gantry Crane with Siemens or BandR PLC Systems - Necessary Equipment and Tips | Oxmaint Community">
    <meta name="twitter:description" content="As a newcomer in the PLC industry, I am eager to learn how to automate an overhead gantry crane using Siemens or BandR PLC systems. What equipment is necessary for this type of automation? My goal is to control four motors using inverters while incorporating a conveyor belt into">
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
        "@id": "https://community.oxmaint.com/discussion-forum/automating-an-overhead-gantry-crane-with-siemens-or-bandr-plc-systems-necessary-equipment-and-tips"
      },
      "headline": "Automating an Overhead Gantry Crane with Siemens or BandR PLC Systems - Necessary Equipment and Tips",
      "description": "As a newcomer in the PLC industry, I am eager to learn how to automate an overhead gantry crane using Siemens or BandR PLC systems. What equipment is necessary for this type of automation? My goal is to control four motors using inverters while incorporating a conveyor belt into",
      "author": {
        "@type": "Person",
        "name": "sahin"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-29",
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
                <h1 class="text-white">Automating an Overhead Gantry Crane with Siemens or BandR PLC Systems - Necessary Equipment and Tips</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sahin</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">670</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">104</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a newcomer in the PLC industry, I am eager to learn how to automate an overhead gantry crane using Siemens or B&R PLC systems. What equipment is necessary for this type of automation? My goal is to control four motors using inverters while incorporating a conveyor belt into the system. The crane will move to pick up objects from an empty conveyor belt, and then manually tie the objects before placing them back on the belt. Additionally, I plan to integrate an HMI for the operating system. Any suggestions on how to accomplish this task would be greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While SIOS support is available through Siemens' industry website, it's important to note that coordinated gantry motion control is a complex task best left to experienced PLC users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For a thorough risk assessment, it is crucial to involve skilled individuals, effective encoding techniques, and meticulous monitoring of fixed positions and axis deviations. If you are a newcomer, it is advisable to seek guidance and mentorship from experienced professionals in order to tackle this task effectively and safely.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why not release him as usual? There's someone here looking to learn how to program, so go ahead and share your code, Parky!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>duckman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Don't hold him back, like usual. There's a person here who can help those who are unfamiliar with programming get started with coding. Come on, Parky, start posting code now!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>duckman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Duckman urged, "Release him as usual. There's always someone eager to help with programming questions. So why wait? Start sharing code, Parky!" However, in 99.999% of cases, there is no follow-up on the project outcome, which is understandable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Robertmee on the SIOS support forum, utilizing a coordinated gantry motion control system through Siemens Industry is not recommended for beginners in PLCs. This advice is crucial for those looking to implement complex automation processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jtn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're considering taking on a crane automation project, it's important to have the right equipment and expertise. Utilizing Magnetek drives specifically designed for crane duty is crucial for optimal performance. Additionally, implementing a laser positioning system can ensure precise positioning. A reputable PLC like AB processors can effectively control the system. It's also recommended to have manual control directly on the drives for emergencies. Avoid using pendant or cable systems, as they may lead to long-term issues. If you need assistance with designing your crane automation project, feel free to reach out to me for support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have never operated a crane before, so I would not try it without conducting thorough research first. It is important to be well-prepared and informed before attempting to operate heavy machinery like a crane. Researching proper operating procedures and safety protocols is essential for a successful crane operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, GaryS shared some insights on designing crane systems. He emphasized the importance of using Magnetek drives specifically designed for crane duty, as other brands are essentially just relabeled standard drives. To ensure accurate positioning, he recommended incorporating a laser positioning system and utilizing a quality PLC like AB processors. GaryS also recommended incorporating manual controls directly to the drives for added control in case of issues. He advised against using pendant or cable systems, suggesting that radio controls are more reliable in the long term. If you need assistance with designing a crane system, feel free to reach out to GaryS for professional help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sahin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate the valuable insights shared by everyone. I am interested in creating an anti-sway crane system and would like to know the required materials and sensors for its design. Additionally, what steps are involved in developing an anti-sway algorithm? Thank you for your input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sahin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Arpus4KM pointed out that in 99.999% of cases, the outcome of a project is rarely reported back, which is why it goes unheard. It could also be that someone just happened to choose the wrong day to skip wearing their hardhat.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Beginners should avoid attempting this as it can be hazardous due to the potential for swing masses to cause damage to objects and individuals. The key technique involved in this process is known as input shaping. Peter discusses the concept of PID - InputShaping, which is widely used in the control of cranes and other equipment that deal with vibrating or swinging loads that need to be positioned without any vibration or oscillation. 

My video demonstrates the mathematical calculations required for input shaping, which may seem complex but can be implemented successfully. One of our customers viewed the video and successfully applied the math on a RMC system. An example of input shaping in action can be seen in the control of an overhead crane.

A little backstory: I was approached by Mark Singhose, a former MIT student, who introduced the concept of input shaping to me. Despite his attempts to be vague, I understood his idea immediately. However, our earlier motion controllers lacked the computational power to execute such algorithms. It wasn't until our current third-generation controller that we were able to successfully implement input shaping.

Mark Singhose went on to graduate from MIT and now teaches input shaping at Georgia Tech. Although there were errors in his doctoral thesis, I was able to identify and correct them. Input shaping, while effective in reducing vibration, can sometimes prolong the movement time by one oscillation cycle. MIT once contended with their algorithm for the Space Shuttle arm, but ultimately lost to the Canada Arm. In conclusion, this advanced technique is not recommended for beginners, as previously noted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're interested, please reach out to me via private message with your email address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey cautioned against inexperienced individuals attempting a technique that could pose dangers due to potential damage from swinging masses. The key to this method is known as input shaping. This approach is commonly used in applications such as cranes to move vibrating loads without causing oscillations. My video provides a demonstration of the mathematical principles involved in input shaping, which is essential for precision control.

One notable example of input shaping in action is the control of an overhead crane demonstrated at HCMUT, showcasing the effectiveness of various input shapers in reducing payload sway. Despite the success of this method, it does result in a longer duration for the movement due to the elimination of oscillations.

Moreover, I recall a past encounter with Mark Singhose, a former MIT student, who introduced the concept of input shaping. Despite limitations with our early motion controllers, advancements have allowed for successful implementation of this algorithm on current-generation controllers. Mark Singhose has since become a professor at Georgia Tech, specializing in teaching input shaping techniques.

Additionally, I shared insights from my experience at a ductile iron pipe plant where an automated overhead crane efficiently transferred pipes using input shaping principles, ensuring minimal sway during the process. By lifting close to maximum height, the pendulum effect was greatly reduced, allowing for smoother and more precise movements without the need for extensive sway correction. This innovative approach was implemented using PLC5 technology, showcasing the practical applications of input shaping in industrial settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
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
<h4 class='text-dark'>FAQ: 1. What equipment is necessary to automate an overhead gantry crane using Siemens or B&R PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - To automate an overhead gantry crane with Siemens or B&R PLC systems, you will need PLC hardware (Siemens or B&R), inverters for controlling the motors, a conveyor belt system, sensors for object detection, and an HMI for the operating system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How many motors can be controlled using inverters in an overhead gantry crane automation setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - In this scenario, you can control four motors using inverters for the overhead gantry crane automation setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can you provide more details on the crane's operation, such as picking up objects from an empty conveyor belt and manually tying them before placing them back on the belt?</h4>
<p class='text-muted'><strong>Answer:</strong> - The crane is designed to move to pick up objects from an empty conveyor belt, manually tie the objects, and then place them back on the belt as part of the automation process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What suggestions do you have for integrating an HMI into the overhead gantry crane automation system?</h4>
<p class='text-muted'><strong>Answer:</strong> - When integrating an HMI into the system, consider designing a user-friendly interface for controlling the crane operation, monitoring the process, and receiving feedback. Ensure seamless communication between the HMI and the PLC system for efficient operation.</p>
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
