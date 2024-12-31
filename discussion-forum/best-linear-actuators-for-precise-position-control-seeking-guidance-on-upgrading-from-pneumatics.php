
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Currently, my linear process operates on pneumatic cylinders with a 4-20mA linear position transducer. A PLC controls these cylinders using an Enfield S2 cylinder positioning controller. However, the position control is subpar, especially under varying force/load conditions. This issue seems to stem from the limitations of using air as">
    <meta name="keywords" content="linear actuators, precise position control, upgrading from pneumatics, 4-20ma linear position transducer, enfield s2 cylinder positioning controller, air as a positioning medium, pid loop, retrofitting with ballscrews, servo for precise">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-linear-actuators-for-precise-position-control-seeking-guidance-on-upgrading-from-pneumatics">
    <title>Best Linear Actuators for Precise Position Control: Seeking Guidance on Upgrading from Pneumatics | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Linear Actuators for Precise Position Control: Seeking Guidance on Upgrading from Pneumatics | Oxmaint Community">
    <meta property="og:description" content="Currently, my linear process operates on pneumatic cylinders with a 4-20mA linear position transducer. A PLC controls these cylinders using an Enfield S2 cylinder positioning controller. However, the position control is subpar, especially under varying force/load conditions. This issue seems to stem from the limitations of using air as">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-linear-actuators-for-precise-position-control-seeking-guidance-on-upgrading-from-pneumatics">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Linear Actuators for Precise Position Control: Seeking Guidance on Upgrading from Pneumatics | Oxmaint Community">
    <meta name="twitter:description" content="Currently, my linear process operates on pneumatic cylinders with a 4-20mA linear position transducer. A PLC controls these cylinders using an Enfield S2 cylinder positioning controller. However, the position control is subpar, especially under varying force/load conditions. This issue seems to stem from the limitations of using air as">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-linear-actuators-for-precise-position-control-seeking-guidance-on-upgrading-from-pneumatics"
      },
      "headline": "Best Linear Actuators for Precise Position Control: Seeking Guidance on Upgrading from Pneumatics",
      "description": "Currently, my linear process operates on pneumatic cylinders with a 4-20mA linear position transducer. A PLC controls these cylinders using an Enfield S2 cylinder positioning controller. However, the position control is subpar, especially under varying force/load conditions. This issue seems to stem from the limitations of using air as",
      "author": {
        "@type": "Person",
        "name": "strantor"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-25",
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
                <h1 class="text-white">Best Linear Actuators for Precise Position Control: Seeking Guidance on Upgrading from Pneumatics</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">370</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">15</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Currently, my linear process operates on pneumatic cylinders with a 4-20mA linear position transducer. A PLC controls these cylinders using an Enfield S2 cylinder positioning controller. However, the position control is subpar, especially under varying force/load conditions. This issue seems to stem from the limitations of using air as a positioning medium due to its compressibility and inconsistent availability, as well as the Enfield controller's inadequate algorithm lacking a full PID loop.

To improve the system, I am considering retrofitting it with ballscrews and a servo for more precise control. However, this would require significant physical modifications. Therefore, I am first seeking electric linear actuators with a form factor similar to the current cylinders. Unfortunately, I have been unable to find any that meet the speed, force, and accuracy requirements of the application. The ideal actuator should have a closing force of at least 1500lbf/6700N, be capable of full open/close movement within 2 seconds over a total travel distance of 20”/500mm, and position accurately within 1/32 inches/1mm.

While I have heard of servo hydraulics and hydraulic positioning as alternatives, I lack knowledge in this area. Can anyone provide guidance on where to start or recommend suitable products, preferably ones suitable for beginners?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Trust your intuition, it's usually spot on. Have you determined the system's natural frequency? It's a mystery to most. Using oil could have been a better choice, as ball screws are sensitive to shock.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey suggested using oil for better results, emphasizing the importance of natural frequency in the system. He questioned the knowledge of others regarding the system's natural frequency, prompting a search on Google for "natural frequency PID." The search led to insights on the significance of natural frequency, particularly in relation to Delta and RMC controllers. Despite not having worked with hydraulics in years, Nachtwey's expertise in this area seems to align perfectly with the project requirements. While seeking guidance on the necessary components for controlling two cylinders, the user expressed interest in a potential sales pitch from Nachtwey. Unsure if two channels are required or if parallel plumbing is sufficient, the user is open to recommendations on the most basic yet effective solution for their application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I requested a quote on the Delta website for the RMC75E-AA1(1)EXP70-A2, I was unsure if the expansion module was necessary. The quote wizard led me to believe it was needed to control the RMC75 with an analog signal, but the RMC75 datasheet suggests that the AA1 axis card already accepts an analog signal. I couldn't find any valves on the Delta site; what type of valves do you suggest? Would any standard 0-10V or 4-20mA proportional valve work?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, that's correct. Are you referring to the speed at which it can transition between extents? The ability to accelerate or decelerate is crucial. It is noted, particularly by Google, that you have a strong focus on natural frequency. I am honored to be a member of the International Fluid Power Hall of Fame and have authored magazine articles for over two decades. I consider myself proficient in control theory and mathematics, although I respect the laws of physics. If you have mastery over pneumatics, transitioning to hydraulics should pose no major challenges, although there are limitations. 

One of the systems I utilize for testing hydraulic control algorithms is PneuMove2. Managing pneumatics can be complex due to the high level of air compression. You are welcome to explore my YouTube Channel if you have an interest in control theory. Retirement has allowed me to settle in Panama, where I now reside and spend less time on forums as I enjoy camping without internet access. 

Currently, the team at Delta Motion is expected to handle any tasks that arise. I firmly believe that we have the best solution available. Regarding a quote inquiry on the Delta website for RMC75E-AA1(1)EXP70-A2, I am uncertain if the expansion module is necessary. It appears from the RMC75 datasheet that the AA1 axis card already supports an analog signal. The EXP70 module, however, is essential for torque limiting. 

It would be advisable to acquire a main module with an SSi input for an SSI Temposonc or Balluff rod. For technical guidance, contacting Delta Motion tech support is recommended. A servo quality valve capable of flowing oil to both sides of a cylinder piston for force control is essential. The spool configuration should ensure no overlap and be linear for optimal performance. Cylinder size, such as a 2-inch diameter, also plays a significant role. If further assistance is required, Delta Motion experts can reach out for additional guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Absolutely. When discussing cycle speed, we're referring to how quickly it can transition between extents. The acceleration and deceleration rates are also crucial aspects to consider. 

Known for his expertise in natural frequency and control theory, this individual is a distinguished member of the International Fluid Power Hall of Fame. With a background in writing magazine articles for over two decades, his focus is on control theory and mathematical analysis within the realm of fluid power systems. 

Utilizing a test system called PneuMove2, hydraulic control algorithms are put to the test, showcasing the challenges of controlling pneumatics due to air compression. With a strong YouTube presence dedicated to control theory, this expert's retiree status and current location in Panama have led to less forum activity, as camping adventures often take him off the grid. 

While the expertise at Delta Motion is trusted to pick up the workload, the pursuit of the best solutions remains a top priority. A recent inquiry was made regarding the need for the EXP70 module to control the RMC75 with an analog signal, aiming to confirm the necessity based on the features of the AA1 axis card. 

The EXP70 module proves essential for torque limit functionalities, while the main channel is dedicated to position and speed control. Considering the installation of a main module with an SSi input for SSI Temposonc or Balluff rod, the importance of a high-quality servo valve capable of flowing oil efficiently is emphasized. The selection of a cylinder with the appropriate size, possibly a 2-inch diameter, is crucial for optimal performance. For further assistance, reaching out to Delta Motion tech support is recommended to select the ideal components for the application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>@Peter Nachtwey, I must say, I am thoroughly impressed by the valuable tips you've shared. I appreciate your recommendation to connect with Jason Palmer as well. I will now give you some peace and allow you to savor your retirement - it sounds like a blast! Currently, I am immersing myself in your informative YouTube channel. It's a goldmine of knowledge that I can't believe I hadn't discovered sooner. Thank you once again for your guidance. - Chuck.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For a recent project, I found that using Parker Hydraulic Servo controllers was extremely beneficial. The main issues we encountered were related to valves rather than the control system, specifically the Compax3 model. However, upon further research, I discovered that there is an upgrade option available: Servo Drives from Parker Hannifin.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PreLC recommended Parker Hydraulic Servo controllers for a project, noting their high effectiveness. While some issues arose with valves, the control, specifically Compax3, performed well. Looking into upgrades, Parker Hannifin offers Servo Drives that could be beneficial. Despite the quality of Parker products, lead times for Parker parts such as VFDs, servo motors/drives, and accessories have been a concern. This has led to a hesitation in using Parker products, despite their reputation. It is possible that different divisions within the company have varying lead times, with the hydraulics division potentially being more efficient. Have you noticed any improvements in lead times for Parker hydraulic products?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am fortunate to receive priority treatment, allowing me to secure the front spot for most items without any delays.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Strantor expressed interest in upgrading the equipment with ballscrews and a servo for improved performance, but recognizes the extensive physical modifications required. In search of a solution with a similar form factor to the cylinders, Strantor is seeking electric linear actuators that can meet the speed, force, and accuracy requirements of the application. The ideal actuator should deliver at least 1500lbf/6700N of closing force, be able to fully open/close within around 2 seconds (20”/500mm total travel), and position itself accurately within about 1/32 inches/1mm. In a similar application involving shooting molten aluminum into a die, similar loads and accuracy were achieved with some minor following errors. Strantor suggests exploring Parker for potential solutions, taking lead times into consideration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PreLC mentioned using Parker Hydraulic Servo controllers for a project, finding them to be highly effective with minimal issues arising from the valves rather than the control itself, specifically the Compax3 model. However, an upgrade option is now available with the Servo Drives from Parker Hannifin. Approximately a decade ago, Parker approached us to develop a new controller or enhance their existing one, but we declined the offer. Recent revelations from Parker indicate their struggles to comprehend the RMC system, as our algorithms surpass basic PID capabilities. As a result, older models M02AS and HYD02 are now obsolete, leading us to become an Automation Partner with Rockwell instead. Contrary to popular belief, we do not compete with Parker controllers; in fact, we collaborate by allowing their dealers to distribute our controllers. In the early 2000s, I provided training on servo control for Parker's Hydraulic Specialist Engineer program. While Parker DF1 and DF3 valves are reliable, it's essential to ensure the spools are linear when considering valves from Bosch and Moog. Additionally, Santest and Yuken valves are reputable alternatives, while Star Hydraulic valves are preferred for six-degree-of-freedom applications. Over the past two decades, I have authored numerous magazine articles, notably for publications such as Power and Motion, which has now absorbed content from Hydraulics and Pneumatics and Machine Design. These articles are archived on Delta Motion servers for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. What are the limitations of using pneumatic cylinders for precise position control?</h4>
<p class='text-muted'><strong>Answer:</strong> - Using air as a positioning medium can lead to subpar control due to compressibility and inconsistent availability, impacting performance under varying force/load conditions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the key considerations when upgrading from pneumatic cylinders to electric linear actuators for precise control?</h4>
<p class='text-muted'><strong>Answer:</strong> - Factors to consider include force requirements, speed, accuracy, and compatibility with existing systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the criteria for selecting electric linear actuators for precise position control in a retrofit scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> - The ideal actuator should meet specific force, speed, and accuracy requirements, such as a closing force of 1500lbf/6700N, full open/close movement within 2 seconds over a 20”/500mm travel distance, and accurate positioning within 1/32 inches/1mm.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there alternative solutions to electric linear actuators for precise position control, such as servo hydraulics or hydraulic positioning?</h4>
<p class='text-muted'><strong>Answer:</strong> - Servo hydraulics and hydraulic positioning can be considered as alternatives to electric linear actuators, offering different benefits and application suitability.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Where can beginners start when exploring options for upgrading to electric linear actuators or other precision control solutions?</h4>
<p class='text-muted'><strong>Answer:</strong> - Beginners can seek guidance on suitable products and recommendations from industry experts, manufacturers, or online resources to understand the available options and make informed decisions.</p>
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
