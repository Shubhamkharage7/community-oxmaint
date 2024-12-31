
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Having trouble controlling a Kinetix5100 from Studio 5000? Your drive keeps faulting? You were able to execute some Jog and Stop functions initially, but now your Motion Axis On (MSO) block is repeatedly showing Error 100 (Drive Not Ready) and your Motion Axis Jog (MAJ) is displaying Error 105">
    <meta name="keywords" content="kinetix 5100 troubleshooting, studio 5000 drive errors, kinetix 5100 faults, motion axis on error 100, motion axis jog error 105, rockwell motion support, rac_dvc_5100, st">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-kinetix-5100-drive-errors-in-studio-5000">
    <title>Troubleshooting Kinetix 5100 Drive Errors in Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Kinetix 5100 Drive Errors in Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="Having trouble controlling a Kinetix5100 from Studio 5000? Your drive keeps faulting? You were able to execute some Jog and Stop functions initially, but now your Motion Axis On (MSO) block is repeatedly showing Error 100 (Drive Not Ready) and your Motion Axis Jog (MAJ) is displaying Error 105">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-kinetix-5100-drive-errors-in-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Kinetix 5100 Drive Errors in Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="Having trouble controlling a Kinetix5100 from Studio 5000? Your drive keeps faulting? You were able to execute some Jog and Stop functions initially, but now your Motion Axis On (MSO) block is repeatedly showing Error 100 (Drive Not Ready) and your Motion Axis Jog (MAJ) is displaying Error 105">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-kinetix-5100-drive-errors-in-studio-5000"
      },
      "headline": "Troubleshooting Kinetix 5100 Drive Errors in Studio 5000",
      "description": "Having trouble controlling a Kinetix5100 from Studio 5000? Your drive keeps faulting? You were able to execute some Jog and Stop functions initially, but now your Motion Axis On (MSO) block is repeatedly showing Error 100 (Drive Not Ready) and your Motion Axis Jog (MAJ) is displaying Error 105",
      "author": {
        "@type": "Person",
        "name": "PLCDude1994"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-07",
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
                <h1 class="text-white">Troubleshooting Kinetix 5100 Drive Errors in Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCDude1994</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">182</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">88</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Having trouble controlling a Kinetix5100 from Studio 5000? Your drive keeps faulting? You were able to execute some Jog and Stop functions initially, but now your Motion Axis On (MSO) block is repeatedly showing Error 100 (Drive Not Ready) and your Motion Axis Jog (MAJ) is displaying Error 105 (Drive is not Active). Despite your drive being Running in the IO tree and showing no Errors when connected to it, you're still facing issues. Without Motion support from Rockwell, it's been challenging to troubleshoot. However, you were advised that the rac_Dvc_5100 might not be active, which can cause these errors. The MSO block intermittently shows no errors, with all green lights except for Sts_Active (Sts_Ready, Sts_Connected are good, while Sts_Fault and Sts_Warning are not lit). You've confirmed the use of correct Motion blocks (rac_Opr_5100_xxx) and the compatibility of firmware between the 5100 and Studio 5000. Ensuring no multiple blocks are running simultaneously to prevent Error 127, you've exhausted all possible solutions without resolving the drive's Error issues.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using STO wiring or just relying on the jumper? The issues you're experiencing seem to be related to a missing safety enable feature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After successfully wiring the jumper, I am now ready to make programming adjustments. Can anyone advise on the necessary program actions to take next? Your feedback is much appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCDude1994</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the Sts_ready flag is set to true during activation of the MSO, it should switch to an Active state. However, it is necessary to observe this transition in action to confirm. It is important to note that the MSO requires multiple scans to finalize, ensuring that the .DN status bit is properly set before initiating any additional motion commands.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you. I will be heading out in the morning to inspect the drive. It's frustrating when things seem to be working one moment and then suddenly stop. It's difficult to pinpoint the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCDude1994</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it acceptable to activate a Major Alarm (MAJ) and then use a limit switch to initiate a Stop? Is additional coding necessary for smoother movement and a more precise stop? Is it advisable to utilize one-shots when controlling these drives? I am unfamiliar with this process, any guidance would be appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCDude1994</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Get ready for quick and efficient movement with our one-shot instructions, including jogging.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unable to execute an Absolute Move due to "homing not completed," consider suggestions for troubleshooting. While other moves may still function, they may not align with your desired outcome. Currently, I reset the position reference to zero upon reaching a home limit switch to complete the homing process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCDude1994</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the MAH instruction for homing purposes. The user manual outlines various homing techniques that can be utilized. It is crucial to ensure that the Accel/Decel/Velocity values meet or exceed the minimum requirements, even if the motor is not in motion when the home command is initiated. Failure to do so may result in an error being generated on the MAH.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I encountering Error 100 (Drive Not Ready) and Error 105 (Drive is not Active) on my Kinetix 5100 drive in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The presence of errors like Error 100 and Error 105 indicates issues with the drive's readiness and activation status. Ensure that the rac_Dvc_5100 is active, as its inactivity could lead to these errors. Verify the status of Sts_Active in the MSO block and check for any issues with Sts_Fault and Sts_Warning lights.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot Kinetix 5100 drive errors in Studio 5000 if I am facing difficulties without Rockwell Motion support?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If troubleshooting Kinetix 5100 drive errors in Studio 5000 without Rockwell Motion support, ensure that you are using the correct Motion blocks (rac_Opr_5100_xxx) and that the firmware between the 5100 drive and Studio 5000 is compatible. Avoid running multiple blocks simultaneously to prevent Error 127 and exhaust all possible solutions to resolve any drive error issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Despite my Kinetix 5100 drive showing no errors in the IO tree, why am I still experiencing faults and issues with Motion Axis On and Motion Axis Jog blocks in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In cases where the Kinet</p>
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
