
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello Everyone, we are currently in the process of setting up a backup CPU (Q02CPU) for a Mitsubishi PLC. Unfortunately, we are experiencing difficulties in transferring the existing program parameters from the old PLC. We were only able to copy the program itself. After successfully downloading the program to">
    <meta name="keywords" content="mitsubishi plc, backup cpu, q02cpu, program transfer, program parameters, intelligent high-speed counter module, qd62e, engine rpm, discrepancy, troubleshooting, mitsubishi qd62e card, plc feedback">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-qd62e-card-output-discrepancy">
    <title>Troubleshooting Mitsubishi QD62E Card Output Discrepancy | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Mitsubishi QD62E Card Output Discrepancy | Oxmaint Community">
    <meta property="og:description" content="Hello Everyone, we are currently in the process of setting up a backup CPU (Q02CPU) for a Mitsubishi PLC. Unfortunately, we are experiencing difficulties in transferring the existing program parameters from the old PLC. We were only able to copy the program itself. After successfully downloading the program to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-qd62e-card-output-discrepancy">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Mitsubishi QD62E Card Output Discrepancy | Oxmaint Community">
    <meta name="twitter:description" content="Hello Everyone, we are currently in the process of setting up a backup CPU (Q02CPU) for a Mitsubishi PLC. Unfortunately, we are experiencing difficulties in transferring the existing program parameters from the old PLC. We were only able to copy the program itself. After successfully downloading the program to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-qd62e-card-output-discrepancy"
      },
      "headline": "Troubleshooting Mitsubishi QD62E Card Output Discrepancy",
      "description": "Hello Everyone, we are currently in the process of setting up a backup CPU (Q02CPU) for a Mitsubishi PLC. Unfortunately, we are experiencing difficulties in transferring the existing program parameters from the old PLC. We were only able to copy the program itself. After successfully downloading the program to",
      "author": {
        "@type": "Person",
        "name": "Sundar4163"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-16",
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
                <h1 class="text-white">Troubleshooting Mitsubishi QD62E Card Output Discrepancy</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">234</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">366</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello Everyone, we are currently in the process of setting up a backup CPU (Q02CPU) for a Mitsubishi PLC. Unfortunately, we are experiencing difficulties in transferring the existing program parameters from the old PLC. We were only able to copy the program itself. After successfully downloading the program to the new backup CPU, we noticed a discrepancy in the output of the Intelligent High-Speed Counter Module QD62E, which is used to measure the engine's RPM. Despite the engine running at 600 RPM, the PLC feedback is only showing 400 RPM. If anyone has insights on why this discrepancy is occurring, we would greatly appreciate your input. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, we are currently setting up a backup CPU (Q02CPU) for a Mitsubishi PLC. However, we are facing issues with uploading the existing program parameters from the old PLC. We were only able to copy the program itself. After downloading the program into the new backup CPU, we noticed discrepancies in the output of the Intelligent High-Speed Counter Module QD62E, which is used to measure engine RPM. When the engine runs at 600 RPM, the PLC feedback shows only 400 RPM. We suspect that the high-speed intelligent module's data register is not holding the peak pulse count from the encoder, leading to different RPM readings. We are unsure if any settings on the QD62E card need to be adjusted. Any insights on this issue would be greatly appreciated. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you encountered difficulties uploading PLC parameters and special function module data? This issue may be related to the settings in the QD62E module. Which programming IDE are you currently using - GXDeveloper or GXworks2? In GXworks2, you will find an additional list for special modules on the left-hand side tree. While GXDeveloper doesn't have this feature, there are some settings in the PLC parameters that are similar. It seems that in GXDeveloper, some configurations are done directly in the PLC code, whereas in GXworks2, they can be easily configured within the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>parky asked why it is not possible to upload PLC parameters and special function module data, mentioning settings in the QD62E. Are you using GXDeveloper or GXworks2 as the programming IDE? In GXworks2, there is an additional list for special modules on the left-hand side tree. On the other hand, GXDeveloper does not have this list, but there are settings in the PLC parameters section. It seems that in GXDeveloper, some configuration is done in the PLC code, which can be handled through configuration in GXWorks2. Thank you for your response. We are currently utilizing GXWorks2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sundar4163 mentioned: Thank you for the response. Our team is currently utilizing GXWorks2 software. However, we have encountered an issue when uploading the program and parameters from the PLC to our PC backup file. The PLC parameter information, including data from the QD62E module and other Intelligent modules, is not being transferred properly. We were able to configure data registers in the autorefresh page for the Intelligent function modules, but we are facing challenges with setting up the high-speed settings for the QD62E module. In the program, the QD62E module is utilizing two data registers: 4557 and 4558. As this module only has two channels, we are unable to assign these data register numbers in the autorefresh page due to a duplicate register error message. It seems that there may be an issue with the QD62E settings, leading to incorrect RPM readings. Let's explore further to resolve this discrepancy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Each channel on the counter card requires 2 data registers, with a 32-bit count register such as D4557 and D4558 for channel 1. To avoid conflicts, it is recommended to assign the second channel to registers like D4559 and D4560. If you encounter any issues, check the tools menu for settings and operations related to the counter card. Please note that I do not currently have a counter card to provide specific details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
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
            <p>Parky mentioned that the counter card requires 2 data registers for each channel, with the count being a 32 bit register. For example, for channel 1, you would use D4557 and D4558, so the second channel should be assigned to something like D4559. This could potentially cause a conflict. Check the tools menu for operations related to settings that may help resolve this issue. Unfortunately, I do not have a counter card to verify. Thank you for your suggestion, I will give it a try and keep you updated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Surprisingly, there is a related post about this card that uncovered an issue with its inability to retain values. Additionally, there is a configuration for latched data, which includes two extra data registers believed to store the count in a retentive manner.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is there a discrepancy in the output of the QD62E High-Speed Counter Module despite the engine running at the correct RPM?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discrepancy in the output of the QD62E High-Speed Counter Module could be due to configuration settings, wiring issues, or parameter settings that need adjustment. It would be beneficial to review these factors to troubleshoot the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can we troubleshoot the discrepancy in the RPM readings on the Mitsubishi PLC using the QD62E module?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the RPM reading issue, ensure that the Q02CPU backup CPU is properly configured and that the module is set up correctly in the program. Check the wiring connections, calibration settings, and parameters related to the QD62E module to identify and rectify any discrepancies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a specific method to transfer program parameters along with the program itself when setting up a backup CPU for a Mitsubishi PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - When setting up a backup CPU for a Mitsubishi PLC, ensure that both the program and the program parameters are transferred correctly. Verify the transfer process and settings to ensure all necessary information is copied accurately to avoid discrepancies in operation.</p>
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
