
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="While using RSLogix v34, a contractor made some minor offline changes (specifically alias tags) to a project and attempted to download it to the PLC. However, the download failed and removed the project from the PLC. Subsequent attempts with the latest revision also failed, with error messages stating Error:">
    <meta name="keywords" content="rslogix v34 download errors, troubleshooting rslogix v34 download issues, rslogix v34 offline changes problem, rockwell plc download error fix, rslogix v34">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-failed-download-errors-in-rslogix-v34-rockwell-plc-issue-resolved">
    <title>Troubleshooting Failed Download Errors in RSLogix v34 - Rockwell PLC Issue Resolved | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Failed Download Errors in RSLogix v34 - Rockwell PLC Issue Resolved | Oxmaint Community">
    <meta property="og:description" content="While using RSLogix v34, a contractor made some minor offline changes (specifically alias tags) to a project and attempted to download it to the PLC. However, the download failed and removed the project from the PLC. Subsequent attempts with the latest revision also failed, with error messages stating Error:">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-failed-download-errors-in-rslogix-v34-rockwell-plc-issue-resolved">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Failed Download Errors in RSLogix v34 - Rockwell PLC Issue Resolved | Oxmaint Community">
    <meta name="twitter:description" content="While using RSLogix v34, a contractor made some minor offline changes (specifically alias tags) to a project and attempted to download it to the PLC. However, the download failed and removed the project from the PLC. Subsequent attempts with the latest revision also failed, with error messages stating Error:">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-failed-download-errors-in-rslogix-v34-rockwell-plc-issue-resolved"
      },
      "headline": "Troubleshooting Failed Download Errors in RSLogix v34 - Rockwell PLC Issue Resolved",
      "description": "While using RSLogix v34, a contractor made some minor offline changes (specifically alias tags) to a project and attempted to download it to the PLC. However, the download failed and removed the project from the PLC. Subsequent attempts with the latest revision also failed, with error messages stating Error:",
      "author": {
        "@type": "Person",
        "name": "Darraj"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-26",
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
                <h1 class="text-white">Troubleshooting Failed Download Errors in RSLogix v34 - Rockwell PLC Issue Resolved</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Darraj</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>19 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">515</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">82</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>While using RSLogix v34, a contractor made some minor offline changes (specifically alias tags) to a project and attempted to download it to the PLC. However, the download failed and removed the project from the PLC. Subsequent attempts with the latest revision also failed, with error messages stating "Error: Couldn't be found" and "Error: Failed to download add-on instruction(s)". The contractor encountered the same error during the initial download attempt. Despite all previous revisions working correctly before, they all result in the same error now. Troubleshooting steps such as cycling/reseating the card and connecting directly to the card have been tried without success. Are there any suggestions or solutions for resolving this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Before the contractor downloaded the project, what was its version? To find out the version of your old project, you can save it as an l5k file and open it in Notepad. Additionally, you may also be able to check the version on the CPU in Linx by clicking on the processor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After terminating the contractor, the next step would be to conduct a thorough verification process to ensure the program is error-free. Following this, the safety features should be unlocked before attempting to download the program once more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize the program and resolve any issues, I recommend exporting it to a L5K file and then re-importing it. This process typically helps to clear up any lingering issues. Thanks, Mark.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MarkNightingale</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like there may be a hardware failure, especially if it involves Guardlogix. In this case, it would be wise to contact Rockwell for assistance. Simply terminating the contractor may not solve the issue, as they still need to be paid and could have valuable information regarding the cause of the failure. It is important to ensure they fulfill their contractual obligations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I understand correctly, you believe it's a hardware problem that could lead to another costly PLC being damaged if I keep him around. I guess I'll have to be a Terminator and say "I'll Be Back!"</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering 2 errors and 1073 warnings in your program? This seems like a flawed software. Have you encountered the same errors when verifying the controller in the offline code?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As per L33er's logic, the issue may lie in the hardware, and it may be tempting to keep the problematic contractor around to avoid potentially ruining another costly PLC. However, it's important to take control like a Terminator and remember the famous words, "I'll Be Back!" It's crucial to understand that if a program has errors, it cannot be successfully downloaded, therefore, the contractor cannot inadvertently cause harm to a PLC while attempting to download a program from a laptop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jstolaruk mentioned that if a program has errors, it cannot be downloaded. There is no way for a contractor to damage a programmable logic controller (PLC) from a laptop during the download process. It is important to verify if the issue is related to hardware failure or the program itself. One way to troubleshoot is by creating a basic program with only I/O configured and attempting to download it. If successful, the focus should shift to examining the Add-On Instructions (AOIs) as indicated by the fault message. In such cases, responsibility should not solely rest on the contractor unless it is a known issue with the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The original poster's message suggested there may be an issue with the AOI, but it's probably not a case of damaged hardware. It appears to be just as you described.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To determine the version of a project before a contractor downloads it, one can simply save it as an L5K file and open it in Notepad. The version information can be found in the file. Additionally, the version can also be checked on the CPU in Linx by clicking on the processor. Another way to access the version is by going to "Tools" > "About" in the program, where the version information is displayed on the screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>"All equipment was functioning properly until the contractor attempted to download a file, which led to what you described as a 'hardware failure' resulting in the PLC becoming unresponsive." This incident caused the PLC to become inoperable, illustrating the importance of proper maintenance and protocols when working with industrial equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your responses. After saving the latest revision as L5K, reimporting, and successfully downloading, it seems there may have been some corruption causing the issue. It is puzzling why this would impact all previous revisions. Unfortunately, we lost the safety signature in the process but after comparing versions and relocking the PLC, we confirmed no changes were made. Initially, I suspected a hardware issue, but it turned out the PLC was functioning properly. Thank you for all your helpful advice and suggestions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Darraj</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Saving your work as a .L5k text file and then reloading it has proven to be a helpful solution for resolving various unexplained issues over time. I'm glad you were able to overcome this obstacle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have encountered a situation where comments are edited to an AOI / UDT online, resulting in apparent changes being made but ultimately corrupting the PLC file. While older versions of Logix/Studio prevented this issue, newer versions (30+) now permit it, although it may not be advisable. This poses a potential risk to the functionality and integrity of the PLC system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I should be more cautious about this issue, as I frequently forget to include comments in my User Defined Tables and Addressable Output Inputs online, but have yet to experience any negative repercussions. This is especially common with versions v32 and v36.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jstolaruk mentioned the importance of keeping an eye out for missing comments in UDTs and AOIs online, especially in versions v32 and v36. It is crucial to differentiate between UDT/AOI templates and instances. Additional steps may be involved, such as multiple people editing the code and uploading the "master" copy from the PLC system. Personal experience illustrates the significance of exporting L5K files to address recurring issues, with support from a Technote in the KnowledgeBase emphasizing the significance of online annotations for UDTs and AOIs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I frequently review and update comments within UDT and AOI templates and instances to ensure they remain accurate and up-to-date. So far, I have been fortunate to avoid encountering any issues during this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Has anyone had any experience using version 34 of the software? I have not updated since version 32 or 33 due to concerns about potential issues with version 34.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alive15</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User alive15 is seeking feedback on others' experience with version 34 of the software. They stopped upgrading at version 32 or 33 due to hearing about potential issues with version 34. The user now primarily uses version 34, with approximately twelve installations, and has not encountered any problems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the "Error: Couldn't be found" and "Error: Failed to download add-on instruction(s)" messages during the download attempts in RSLogix v34?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: These errors could indicate issues related to the availability or compatibility of the project files, add-on instructions, or connection settings between the software and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why did the download failure in RSLogix v34 result in the removal of the project from the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When a download fails in RSLogix v34, it can sometimes lead to the removal of the project from the PLC, especially if the process was interrupted or encountered critical errors during the transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are some recommended troubleshooting steps for resolving download errors like the one described in the thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common troubleshooting steps for failed downloads in RSLogix v34 may include checking project settings, verifying connection configurations, ensuring file compatibility, and attempting direct connections to the PLC to isolate potential issues.</p>
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
