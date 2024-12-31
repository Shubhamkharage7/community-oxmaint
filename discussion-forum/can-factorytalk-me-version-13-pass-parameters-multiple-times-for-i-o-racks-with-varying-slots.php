
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently utilizing FactoryTalk ME version 13 and familiar with passing a parameter file once. However, I am curious if it is achievable to pass it twice. The scenario involves multiple I/O racks, each with varying numbers of slots. My idea is to create a Go To button">
    <meta name="keywords" content="factorytalk me version 13, pass parameters multiple times, i/o racks, varying slots, go to button, parameter list, plc rack, slot go to buttons, plc slot, feasibility, achieving success, factorytalk me 13, parameter file">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/can-factorytalk-me-version-13-pass-parameters-multiple-times-for-i-o-racks-with-varying-slots">
    <title>Can FactoryTalk ME version 13 pass parameters multiple times for I/O racks with varying slots? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Can FactoryTalk ME version 13 pass parameters multiple times for I/O racks with varying slots? | Oxmaint Community">
    <meta property="og:description" content="I am currently utilizing FactoryTalk ME version 13 and familiar with passing a parameter file once. However, I am curious if it is achievable to pass it twice. The scenario involves multiple I/O racks, each with varying numbers of slots. My idea is to create a Go To button">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/can-factorytalk-me-version-13-pass-parameters-multiple-times-for-i-o-racks-with-varying-slots">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Can FactoryTalk ME version 13 pass parameters multiple times for I/O racks with varying slots? | Oxmaint Community">
    <meta name="twitter:description" content="I am currently utilizing FactoryTalk ME version 13 and familiar with passing a parameter file once. However, I am curious if it is achievable to pass it twice. The scenario involves multiple I/O racks, each with varying numbers of slots. My idea is to create a Go To button">
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
        "@id": "https://community.oxmaint.com/discussion-forum/can-factorytalk-me-version-13-pass-parameters-multiple-times-for-i-o-racks-with-varying-slots"
      },
      "headline": "Can FactoryTalk ME version 13 pass parameters multiple times for I/O racks with varying slots?",
      "description": "I am currently utilizing FactoryTalk ME version 13 and familiar with passing a parameter file once. However, I am curious if it is achievable to pass it twice. The scenario involves multiple I/O racks, each with varying numbers of slots. My idea is to create a Go To button",
      "author": {
        "@type": "Person",
        "name": "Lisa3003Lisa"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-09",
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
                <h1 class="text-white">Can FactoryTalk ME version 13 pass parameters multiple times for I/O racks with varying slots?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Lisa3003Lisa</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">218</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">24</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently utilizing FactoryTalk ME version 13 and familiar with passing a parameter file once. However, I am curious if it is achievable to pass it twice. The scenario involves multiple I/O racks, each with varying numbers of slots. My idea is to create a Go To button for each rack with a parameter list such as {[PLC]Rack1}, {[PLC]Rack2}, etc. All these buttons would lead to the same display, which would feature a Go To button for each slot within the selected rack. I intended to include another parameter list within these slot Go To buttons, like {[PLC]#1.Slot1} or #1.{[PLC]Slot1}. Nevertheless, I am uncertain about its feasibility as I have not achieved success in this aspect yet.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing parameter files or a simple parameter list in your HMI (Human Machine Interface) setup? I have attempted to use parameter files without involving the Global Connections settings of the HMI and a PLC, but struggled to do so successfully. You have the option to create a parameter file name in a PLC as a literal string and then have the HMI read it from Global Connections\Display\Parameter File. By assigning a string tag in this connection, the HMI will try to load a parameter file with a name that matches the tag's content whenever the screen is refreshed or changes. This approach allows for the use of interlocked buttons instead of GoTo buttons, which would update a numerical reference in the PLC, leading to the creation of a new parameter file name and a screen change incorporating the new parameters. 

I have delved into the realm of parameters in FTView in the past and found the FTView Studio User Manual to be a valuable resource. If you would like an illustration of the process I described, feel free to message me, and I will try to simplify one of my recent projects and share it with you. Cheers!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ck8177</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing the parameter list option appears to be a viable solution, as discussed in this thread. However, I have not come across any instances of achieving this solely through the parameter file option.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You can pass parameters using either parameter files or parameter lists from one display to others opened from it. For detailed guidance on parameter passing, refer to the Use parameters and global objects chapter in the FTView Studio ME User Manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mike__T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I understand correctly, you are looking to create a display that calls a parameter file to show rack options based on a selected goto display. This will utilize the rack number to control other parameters when navigating to another display. I recently implemented a similar feature with a pop-up and sensor bypass list on a machine. To achieve this, I used a Piloted list on the initial screen for display visibility and referenced the same value for subsequent parameters.

In your case, create a piloted list selector and assign states to corresponding numbers (e.g. state1 = 1, state2 = 2). Access the value {[PLC]RackDisplayTag} and indicator {#1}, with Remote Access set to 1 using an Always_On tag in the PLC. In the parameter file, assign #1 to Numbers[XX] and define the array size accordingly (e.g. Numbers[1] = 1).

When you open the first display, the parameter file will set {[PLC]RackDisplayTag} to the selected value, which can be used for visibility settings. For the next goto display, call another parameter where #1 = {[PLC]RackDisplayTag} and #2 = Numbers[XX], repeating the process for the Slot display. (Please note: apologies for any lack of clarity in my explanation.)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PiNkYnotBrain</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can FactoryTalk ME version 13 pass parameters multiple times for I/O racks with varying slots?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to pass parameters multiple times in FactoryTalk ME version 13. The scenario you described involving multiple I/O racks with varying slots and passing parameters to different buttons within the display is achievable.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I set up multiple Go To buttons for different I/O racks in FactoryTalk ME version 13?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can create individual Go To buttons for each rack by setting up parameter lists like {[PLC]Rack1}, {[PLC]Rack2}, and so on. These buttons can lead to the same display with further Go To buttons for each slot within the selected rack.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the approach to passing parameters to specific slots within an I/O rack in FactoryTalk ME version 13?</h4>
<p class='text-muted'><strong>Answer:</strong> - To pass parameters to specific slots within an I/O rack, you can utilize additional parameter lists within the Go To buttons for each slot. For example, you can use {[PLC]1.Slot1} or 1.{[PLC]Slot1} to target specific slots within the selected rack.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. I have not been successful in passing parameters multiple times in FactoryTalk ME version 13. What could be the potential issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing difficulties in passing parameters multiple times, ensure that you have configured the parameter lists correctly</p>
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
