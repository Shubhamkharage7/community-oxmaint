
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently working on a project involving a R04CPU, RD77GF16, and RJ71PN92 modules. The task at hand is to modify the program as the previous integrator was unable to make it function as intended. The programming is being done in GXWorks3 and upon receiving the cell at">
    <meta name="keywords" content="mitsubishi iq-r series plc, error code 0x21a0, troubleshooting, r04cpu, rd77gf16, rj71pn92, gxworks3, remote run, fbfile, cpu parameters, program">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-iq-r-series-plc-error-code-0x21a0">
    <title>Troubleshooting Mitsubishi iQ-R Series PLC Error Code 0x21A0 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Mitsubishi iQ-R Series PLC Error Code 0x21A0 | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently working on a project involving a R04CPU, RD77GF16, and RJ71PN92 modules. The task at hand is to modify the program as the previous integrator was unable to make it function as intended. The programming is being done in GXWorks3 and upon receiving the cell at">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-iq-r-series-plc-error-code-0x21a0">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Mitsubishi iQ-R Series PLC Error Code 0x21A0 | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently working on a project involving a R04CPU, RD77GF16, and RJ71PN92 modules. The task at hand is to modify the program as the previous integrator was unable to make it function as intended. The programming is being done in GXWorks3 and upon receiving the cell at">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-iq-r-series-plc-error-code-0x21a0"
      },
      "headline": "Troubleshooting Mitsubishi iQ-R Series PLC Error Code 0x21A0",
      "description": "Hello, I am currently working on a project involving a R04CPU, RD77GF16, and RJ71PN92 modules. The task at hand is to modify the program as the previous integrator was unable to make it function as intended. The programming is being done in GXWorks3 and upon receiving the cell at",
      "author": {
        "@type": "Person",
        "name": "KonstantinKolev"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-02",
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
                <h1 class="text-white">Troubleshooting Mitsubishi iQ-R Series PLC Error Code 0x21A0</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>KonstantinKolev</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">565</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">59</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently working on a project involving a R04CPU, RD77GF16, and RJ71PN92 modules. The task at hand is to modify the program as the previous integrator was unable to make it function as intended. The programming is being done in GXWorks3 and upon receiving the cell at the workshop, all the PLC components were functioning well.

However, when I uploaded my program to the R04CPU and switched the PLC to remote run, an error with code 0x21A0 occurred. This error indicates that a FBFile specified in the CPU parameters is missing in the R04CPU. Upon reviewing the CPU Parameters and Program Settings, I noticed a FBFile named SlibFBFile present, but it is not found in the project tree under the FB tab. Although all other FBFiles created are visible and configured in the CPU Parameters, the SlibFBFile keeps reappearing even after removal from the CPU Parameters upon project rebuilding.

I am seeking insights into why this file continues to reappear. Thank you.

Best Regards,
Konstantin Kolev</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are various factors that can cause this error to occur, but it is often due to mismatched parameters with the current situation. If you have access to the original source code, try initializing the memory and then performing a full rebuild before downloading. This can help resolve the issue and ensure that the code is correctly executed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully downloaded a fresh project without relying on any FBFile. I simply included the necessary modules and servo drivers along with all the distributed modules. It's worth noting that I am utilizing the PLCOpen library for the RD77, which has been specifically tailored to function with the RD77GF model. However, when I removed the SlibFbFile from the Programm Settings, all the imported blocks from the library turned red, including the structure types. 

Warm regards,
Konstantin Kolev</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KonstantinKolev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I have recently discovered the issue with my project. It appears that the problem lies within the FB File containing unused function blocks, which is preventing it from being written to the PLC. This discrepancy between the offline and online projects is causing the issue. By relocating the unused function blocks to a different FB File where at least one function block is being used in the program, the issue was resolved.

However, a new problem has arisen. After sending a MC_MoveAbsolute command, the servo does not move and an axis error with the ID 6563 in decimal is displayed. Additionally, a warning code 99.4 indicates that the stroke limit is not connected, even though the system is absolute and equipped with a battery instead of limit switches. Despite these issues, other MC function blocks such as MC_Power, MC_Reset, and MC_ReadAxisError are functioning properly.

The program is utilizing a PLCOpen library tailored for the RD77 module. I am seeking insights on what could be causing this error to occur. Thank you for your help.

Best Regards,
Konstantin Kolev</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KonstantinKolev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Within the MR Configurator tool, under the section labeled "Digital I/O - Basic", users can find the convenient "Auto ON Assignment" button. This feature enables automatic configuration of LSP and LSN settings, streamlining the process for users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello! I successfully resolved the 99.4 alarm issue by adjusting the PD41 parameter to 0x1100. However, after powering on the drive, I encountered error codes 0x1904 or 0x1906 on the RD77GF module when attempting an absolute motion move. These errors indicate a hardware stroke limit (+) or (-) depending on the direction of the move. Despite trying the previously suggested solution, the MC_ReadAxisError function block returns a decimal value of 6406. I have attempted to deactivate the limit switches without success. Best regards, Konstantin Kolev.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KonstantinKolev</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Why not upload the .mrc2 file for analysis?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, Attached is the MR2 file for a specific axis in the system. Regards, Konstantin Kolev.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KonstantinKolev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To prevent PLC from overwriting servo configuration, verify the Statusword bit 12 is ON when employing Homing Method 37 to avoid attempting homing procedures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello,

When utilizing these specific configurations, the drive remains in a non-operational state and displays a b0x error, with x representing the drive's address. This prevents the drive from being enabled. This issue is likely related to PD41, particularly the most significant digit. If the digit is 1100, it indicates that the servo drive's inputs are sourced from the controller. In your case, the digit is 0, which means the drive expects input from the CN3 connector that is not connected.

This problem can be resolved by utilizing the module label of the RD77 module. By setting the upper and lower limit inputs to buffer memory and sending a true signal via the module label variables, the issue can be addressed. It is noteworthy that attempting to enable the limit inputs using the servo parameter has proven ineffective.

Best regards,
Konstantin Kolev</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KonstantinKolev</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What does Mitsubishi iQ-R Series PLC Error Code 0x21A0 indicate?
   - Error code 0x21A0 indicates that a FBFile specified in the CPU parameters is missing in the PLC.
   
2. How can I address error code 0x21A0 in Mitsubishi iQ-R Series PLC?
   - To address this error, you need to ensure that all specified FBFiles are present and correctly configured in the project tree under the FB tab.
   
3. Why does the FBFile named SlibFBFile keep reappearing in the Mitsubishi iQ-R Series PLC project?
   - The SlibFBFile may continue to reappear if there are issues with its configuration or if it is being referenced in multiple locations within the project. Check for any dependencies or references causing it to reappear after removal.
   
4. How can I troubleshoot the issue of the missing FBFile in the Mitsubishi iQ-R Series PLC?
   - You can troubleshoot by carefully reviewing the CPU Parameters, Program Settings, and project tree to ensure all FBFiles are correctly configured and present. Additionally, check for any inconsistencies or errors in the program that may be causing the missing file issue.</p>
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
