
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey Steve, Im currently facing an issue with my GEFANUC 90-70 PLC, specifically involving the PCM711 module configured as a Modbus master rtu with MegaBasic. This setup is connected to two Bently Nevada racks and was working smoothly in retrieving and storing data into the CPU module. However, after">
    <meta name="keywords" content="gefanuc 90-70 plc, pcm711 module, modbus rtu, communication issue, troubleshooting, megabasic, bently nevada racks, power loss, executable files, fs.exe, fh.exe, pcop, termf">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-gefanuc-90-70-plc-communication-issue-with-pcm711-module-using-modbus-rtu-need-assistance">
    <title>Troubleshooting GEFANUC 90-70 PLC Communication Issue with PCM711 Module using Modbus RTU – Need Assistance | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GEFANUC 90-70 PLC Communication Issue with PCM711 Module using Modbus RTU – Need Assistance | Oxmaint Community">
    <meta property="og:description" content="Hey Steve, Im currently facing an issue with my GEFANUC 90-70 PLC, specifically involving the PCM711 module configured as a Modbus master rtu with MegaBasic. This setup is connected to two Bently Nevada racks and was working smoothly in retrieving and storing data into the CPU module. However, after">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-gefanuc-90-70-plc-communication-issue-with-pcm711-module-using-modbus-rtu-need-assistance">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GEFANUC 90-70 PLC Communication Issue with PCM711 Module using Modbus RTU – Need Assistance | Oxmaint Community">
    <meta name="twitter:description" content="Hey Steve, Im currently facing an issue with my GEFANUC 90-70 PLC, specifically involving the PCM711 module configured as a Modbus master rtu with MegaBasic. This setup is connected to two Bently Nevada racks and was working smoothly in retrieving and storing data into the CPU module. However, after">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-gefanuc-90-70-plc-communication-issue-with-pcm711-module-using-modbus-rtu-need-assistance"
      },
      "headline": "Troubleshooting GEFANUC 90-70 PLC Communication Issue with PCM711 Module using Modbus RTU – Need Assistance",
      "description": "Hey Steve, Im currently facing an issue with my GEFANUC 90-70 PLC, specifically involving the PCM711 module configured as a Modbus master rtu with MegaBasic. This setup is connected to two Bently Nevada racks and was working smoothly in retrieving and storing data into the CPU module. However, after",
      "author": {
        "@type": "Person",
        "name": "Steve Bailey"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-28",
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
                <h1 class="text-white">Troubleshooting GEFANUC 90-70 PLC Communication Issue with PCM711 Module using Modbus RTU – Need Assistance</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">226</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">344</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey Steve,

I'm currently facing an issue with my GEFANUC 90-70 PLC, specifically involving the PCM711 module configured as a Modbus master rtu with MegaBasic. This setup is connected to two Bently Nevada racks and was working smoothly in retrieving and storing data into the CPU module. However, after a recent power loss, communication has ceased.

Upon inspecting the PCM711 memory using a hyper terminal, I discovered only two executable files, "FS.exe" and "FH.exe". Unfortunately, I lack the necessary tools to resolve this issue. The documentation suggests needing PCOP, TERMF, and a Megabasic file for Modbus configuration.

Could you provide some assistance on this matter? Please note that Megabasic files typically have the .bas suffix. It is possible to manage without PCOP, as Termf should suffice for the task at hand. In fact, Hyperterm may also be a viable option for troubleshooting.

Would appreciate your guidance on this.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The file Pcmexec.bat includes important commands: Q FH.EXE 0, Q FS.EXE 0, R FH.EXE /BR FS.EXE. There are no .bas files present. When the reset button is pressed for under 5 seconds, the OK LED blinks, but there are issues with communication connectivity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Alfred10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey inquired about the existence of additional files with the suffix .bas in Megabasic. He suggested that PCOP may not be necessary and that Termf or even Hyperterm could suffice for your needs. Is there a sample Megabasic file available for reading/writing Modbus commands?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Alfred10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the confusion. Megabasic files use the .pgm suffix rather than .bas. Upon powerup or soft reset, the PCM executes the program pcmexec.bat. Compiled executable files have the .exe extension. Issuing the "Q" commands enables writing to the FH.exe and FS.exe files. Running FH.exe in the background can be achieved with the "R FH.exe /B" command. Similarly, the command "R FS.exe" executes the FS.exe program. Consider connecting a terminal program to the serial port during a soft reset to monitor the outgoing characters. I am uncertain if a Modbus master program is available in Megabasic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the communication issue with the GEFANUC 90-70 PLC and PCM711 module after a power loss?</h4>
<p class='text-muted'><strong>Answer:</strong> - The communication issue could be due to corrupted or missing files in the PCM711 memory, such as the required Megabasic file for Modbus configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the essential files needed to resolve the communication problem with the GEFANUC 90-70 PLC and PCM711 module?</h4>
<p class='text-muted'><strong>Answer:</strong> - To address the communication issue, you would typically need the PCOP, TERMF, and a Megabasic file with a .bas suffix for Modbus configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to troubleshoot the communication problem without PCOP, using only TERMF and Hyperterm?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to manage without PCOP by utilizing TERMF and Hyperterm for troubleshooting purposes. Hyperterm may also be a viable option for resolving the issue.</p>
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
