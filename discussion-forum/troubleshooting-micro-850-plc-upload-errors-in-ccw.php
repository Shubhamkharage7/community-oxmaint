
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there, Ive been experiencing some difficulties when trying to upload a program from a Micro 850 PLC for the first time. Since I dont have a file saved on my laptop, I used CCW to Discover the PLC and then tried to upload the program via USB. However,">
    <meta name="keywords" content="troubleshooting, micro 850 plc, upload errors, ccw, discover, program upload, usb, ethernet connection, error message, corrupted file, invalid format, pinging plc, connection issue, vm upload, troubleshooting steps">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-micro-850-plc-upload-errors-in-ccw">
    <title>Troubleshooting Micro 850 PLC Upload Errors in CCW | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Micro 850 PLC Upload Errors in CCW | Oxmaint Community">
    <meta property="og:description" content="Hey there, Ive been experiencing some difficulties when trying to upload a program from a Micro 850 PLC for the first time. Since I dont have a file saved on my laptop, I used CCW to Discover the PLC and then tried to upload the program via USB. However,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-micro-850-plc-upload-errors-in-ccw">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Micro 850 PLC Upload Errors in CCW | Oxmaint Community">
    <meta name="twitter:description" content="Hey there, Ive been experiencing some difficulties when trying to upload a program from a Micro 850 PLC for the first time. Since I dont have a file saved on my laptop, I used CCW to Discover the PLC and then tried to upload the program via USB. However,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-micro-850-plc-upload-errors-in-ccw"
      },
      "headline": "Troubleshooting Micro 850 PLC Upload Errors in CCW",
      "description": "Hey there, Ive been experiencing some difficulties when trying to upload a program from a Micro 850 PLC for the first time. Since I dont have a file saved on my laptop, I used CCW to Discover the PLC and then tried to upload the program via USB. However,",
      "author": {
        "@type": "Person",
        "name": "PLCrookiee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-04",
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
                <h1 class="text-white">Troubleshooting Micro 850 PLC Upload Errors in CCW</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCrookiee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">902</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">33</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there, I've been experiencing some difficulties when trying to upload a program from a Micro 850 PLC for the first time. Since I don't have a file saved on my laptop, I used CCW to 'Discover' the PLC and then tried to upload the program via USB. However, I encountered an error message stating: "Upload failed for: Cannot import "c:\users\documents .. etc … The file is either corrupted or has an invalid format." I also attempted the same process over Ethernet, successfully pinging the PLC and establishing a connection, only to receive the same error message. I am trying to upload into my VM to see if that makes any difference.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could it be possible that the discrepancy lies in the versions being used? It is plausible that the PLC program was developed using a more updated version of CCW that is not currently in your possession.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I hadn't actually checked on that yet, but I'll take a look today. I assumed CCW would provide a specific prompt for it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCrookiee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I just recalled that there is a PV 800 HMI connected to the Micro850 PLC that I successfully uploaded using Connected Components Workbench (CCW). This suggests that the software versions must be compatible to ensure proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCrookiee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To determine the micro850 firmware version, you can access it through the properties tab in RSLinx. It is crucial to ensure that the firmware version matches the version of Connected Components Workbench (CCW) that you have open. When attempting to connect to a device with an outdated firmware version, CCW may not function properly as it always opens the latest version installed. To avoid this issue, it is recommended to open a project with the correct firmware version for the device or create a new project using the older firmware version. Keep the CCW software open, close the project, and then try to upload with the correct firmware version open.

If you encounter difficulties, consider checking if a memory module is installed. You could potentially transfer the program to another PLC for testing. Alternatively, using an SD card with a backup program could also be a viable solution if hardware compatibility is a concern.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pk_test</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is your mode switch set to "Run" mode? If so, consider switching it to "Rem" mode. I have encountered issues with not being able to upload from a Micrologix 1400 when it was in run mode. This resulted in a similar error message to what you are experiencing. It seemed unusual to me that the error did not specifically mention the run mode as the cause of the upload issue. You may be experiencing the same issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>WayneV</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thanks for helping me out, everyone. I recently received a new virtual machine from a colleague at work. I believed it had the most updated firmware for various applications, but I discovered that my PLC was running v13 while I was still on v12 in CCW. I'm still in the process of learning about these details, and I plan to upgrade to v13 today to align with the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCrookiee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Was it exactly as described in POST #2?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was surprised that there wasn't a prompt specifically addressing the issue of incompatible versions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCrookiee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the upload error message "Cannot import the file is either corrupted or has an invalid format" when trying to upload a program from a Micro 850 PLC using CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error message may indicate issues with the file format or corruption of the program file. Ensure the file being uploaded is in the correct format and is not corrupted.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I encountering upload errors when trying to upload a program from a Micro 850 PLC via USB or Ethernet in CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Upload errors can occur due to various reasons such as incorrect file format, corrupted program file, communication issues between the PLC and the software, or configuration settings mismatch. Troubleshooting these aspects can help resolve the upload errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Will uploading the program from a Micro 850 PLC into a virtual machine (VM) help resolve the upload errors encountered in CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Uploading into a VM may not directly solve the upload errors. It is recommended to focus on resolving potential issues related to file format, file integrity, communication settings, and software configuration to successfully upload the program from the Micro 850 PLC.</p>
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
