
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am a newcomer to the tiaportal platform. I have recently created a new project and HMI screen. While the program is functioning properly with PLC-sim, I am facing issues controlling it through the HMI screen as I do not see any changes in the inputs or">
    <meta name="keywords" content="hmi simulation troubleshooting, tia portal v18, input and output control issues, plc-sim integration, hmi screen functionality, hmi tagging problems, resolving">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-simulation-in-tia-portal-v18-issues-with-input-and-output-control">
    <title>Troubleshooting HMI Simulation in TIA Portal V18: Issues with Input and Output Control | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting HMI Simulation in TIA Portal V18: Issues with Input and Output Control | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am a newcomer to the tiaportal platform. I have recently created a new project and HMI screen. While the program is functioning properly with PLC-sim, I am facing issues controlling it through the HMI screen as I do not see any changes in the inputs or">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-simulation-in-tia-portal-v18-issues-with-input-and-output-control">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting HMI Simulation in TIA Portal V18: Issues with Input and Output Control | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am a newcomer to the tiaportal platform. I have recently created a new project and HMI screen. While the program is functioning properly with PLC-sim, I am facing issues controlling it through the HMI screen as I do not see any changes in the inputs or">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-simulation-in-tia-portal-v18-issues-with-input-and-output-control"
      },
      "headline": "Troubleshooting HMI Simulation in TIA Portal V18: Issues with Input and Output Control",
      "description": "Greetings everyone, I am a newcomer to the tiaportal platform. I have recently created a new project and HMI screen. While the program is functioning properly with PLC-sim, I am facing issues controlling it through the HMI screen as I do not see any changes in the inputs or",
      "author": {
        "@type": "Person",
        "name": "Abouda"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-11",
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
                <h1 class="text-white">Troubleshooting HMI Simulation in TIA Portal V18: Issues with Input and Output Control</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Abouda</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1085</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">374</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I am a newcomer to the tiaportal platform. I have recently created a new project and HMI screen. While the program is functioning properly with PLC-sim, I am facing issues controlling it through the HMI screen as I do not see any changes in the inputs or outputs. It is important to note that modifications made to inputs from the PLC-sim are reflected on the HMI screen, but not vice versa. I have utilized the correct tags and HMI tagging. How can I resolve this issue and successfully utilize my HMI in simulation?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have the checkbox for each PLC tag properly configured to enable writing values from external sources like an HMI? It is important to ensure that the tags' values can be written as needed for efficient operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with PLC tags, it is important to ensure that the checkbox allowing external writing, such as from an HMI, is configured correctly. If you are experiencing issues with writing values, consider changing the tags to memory tags, such as using M0.0 instead of I0.0. Remember that using memory tags may be necessary even for input tags. Check your program and HMI tags to make sure they align with this configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Abouda</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When simulating an HMI instead of a PLC, it is not possible to directly write to inputs or outputs. To work around this, create a mapping block to link inputs to internal tags and internal tags to outputs. Use these mapped tags in the program instead of real I/O. During simulation, avoid calling the mapping block. When commissioning, enable the mapping routine by calling the block. I recommend naming the internal tags similarly to the original I/O tags, adding a "_M" for mapped. While some simulators can force inputs on/off, this feature is uncommon in PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When simulating both the PLC and HMI, it is not possible to write to inputs directly. Instead, create a mapping block to link internal tags to inputs and outputs. During simulation, use these mapped tags in the program. To prevent the block from running during simulation, exclude it. When commissioning, enable the block to call the mapping routine. For ease of reference, name internal tags similarly to their corresponding inputs, adding a suffix like "_M" for mapped tags. While simulators can force inputs on/off, this feature is not common in most PLCs. To simulate effectively, create new internal tags with matching names in the database and utilize them in the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Abouda</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Internal memory in DB tags is a key distinction, with "M" memory being fixed while DB tags are dynamic. It has been a while since I last used the S7 simulator, so I am unsure about the specific issue you are facing with it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have watched several YouTube tutorials where creators drag and drop Input TAGs onto HMI elements to tag them. While this method worked for them, I have to use 'M' memory tags as inputs. I suspect that this method may not work with real equipment as it requires INPUTs, not memory tags.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Abouda</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Navigate to the HMI folder and locate the Connections section. Take note of the Access Point name for the connection. Access the Set PG/PC Interface in the Windows Control Panel and configure the access point to match the network adapter being used for downloading in Portal. Restart the simulation and inform me of any improvements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RVaughan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RVaughan instructed to navigate to the HMI folder and document the name of the Access Point for the connection. Next, go to the Windows Control Panel and open Set PG/PC Interface to match the access point with the network adapter used for downloading in the Portal software. Restart the simulation and provide feedback on its functionality. Upon investigation, I confirmed that the access point is indeed the same as in Tia Portal, labeled "S7ONLINE." It appears that an alternative approach may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Abouda</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the most common tags utilized in PLC (Programmable Logic Controller) and HMI (Human Machine Interface) systems. Explore the tags commonly used in PLC and HMI programming for efficient automation control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Abouda</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I facing issues controlling my program through the HMI screen in TIA Portal V18 simulation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue could be due to a lack of bidirectional communication between the PLC-sim and the HMI screen. Make sure that the tags and HMI tagging are correctly implemented for both input and output control.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure that changes made in the HMI screen are reflected in the inputs and outputs during simulation in TIA Portal V18?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve this issue, double-check that the tags used for input and output control are properly configured and assigned in both the PLC-sim and the HMI screen. Correctly setting up the bidirectional communication will ensure that modifications are synchronized.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I see changes in inputs from the PLC-sim on the HMI screen, but not the other way around. What could be causing this one-way communication issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This one-way communication problem may occur if the tags or HMI tagging are not configured correctly for output control. Verify that the tags are correctly mapped and updated bidirectionally to enable proper communication between the PLC-sim and the HMI screen.</p>
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
