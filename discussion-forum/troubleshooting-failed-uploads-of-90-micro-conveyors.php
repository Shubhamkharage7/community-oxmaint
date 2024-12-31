
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings to all readers! Our SMT line is equipped with a conveyor system that lost its programming due to a dead battery. Out of the three conveyors on the line, the one that needs reprogramming dates back to 1997, while the other two were manufactured in 1998. Each conveyor">
    <meta name="keywords" content="troubleshooting failed uploads, 90 micro conveyors, smt line conveyor system, conveyor programming, dead battery issue, ic693udr005fp1, program extraction, usb to serial converter, proficy machine 5, windows">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-failed-uploads-of-90-micro-conveyors">
    <title>Troubleshooting Failed Uploads of 90 Micro Conveyors | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Failed Uploads of 90 Micro Conveyors | Oxmaint Community">
    <meta property="og:description" content="Greetings to all readers! Our SMT line is equipped with a conveyor system that lost its programming due to a dead battery. Out of the three conveyors on the line, the one that needs reprogramming dates back to 1997, while the other two were manufactured in 1998. Each conveyor">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-failed-uploads-of-90-micro-conveyors">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Failed Uploads of 90 Micro Conveyors | Oxmaint Community">
    <meta name="twitter:description" content="Greetings to all readers! Our SMT line is equipped with a conveyor system that lost its programming due to a dead battery. Out of the three conveyors on the line, the one that needs reprogramming dates back to 1997, while the other two were manufactured in 1998. Each conveyor">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-failed-uploads-of-90-micro-conveyors"
      },
      "headline": "Troubleshooting Failed Uploads of 90 Micro Conveyors",
      "description": "Greetings to all readers! Our SMT line is equipped with a conveyor system that lost its programming due to a dead battery. Out of the three conveyors on the line, the one that needs reprogramming dates back to 1997, while the other two were manufactured in 1998. Each conveyor",
      "author": {
        "@type": "Person",
        "name": "chris55555"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Troubleshooting Failed Uploads of 90 Micro Conveyors</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>chris55555</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2492</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">44</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings to all readers! Our SMT line is equipped with a conveyor system that lost its programming due to a dead battery. Out of the three conveyors on the line, the one that needs reprogramming dates back to 1997, while the other two were manufactured in 1998. Each conveyor contains 90 Micros, specifically the IC693UDR005FP1 model. Our goal is to extract the program from a functioning conveyor and transfer it to the one in need of repair, as we unfortunately do not have backup copies of the programs.

Various attempts have been made to achieve this task, including using a USB to serial converter along with Proficy Machine 9.5 on a Windows 10 computer. While successful in uploading the hardware configuration, issues arise when attempting to transfer the logic or forced values, resulting in the error message: "Error 8097: Server Error - Transfer Error: Remote disconnect has occurred [0x6A][0x02]".

Another approach involved using LM90_9.05 on a VirtualBox VM running Windows XP, utilizing the DB9 serial port on the computer connected to a MOXA TCC-100I RS232 to RS422 converter and a custom cable to link to the PLC. Although able to access the configuration, connecting to the ladder logic or reference tables posed challenges, with LM90 displaying a "<S43> communication failed" message.

Similar setbacks were encountered when using the USB to serial converter, with communications dropping during ladder logic uploads and reestablishing after errors, displaying either a "S43 comms failed" or "Error during load; Program folder incomplete. Must reload or restore logic" message. These issues appear consistent across all PLC units, noting that there is no password protection and LM90 indicates level 4 access.

Furthermore, a previous fault in the malfunctioning PLC was resolved, specifically a "PLC CPU software fault". Any guidance or assistance in troubleshooting these communication and programming issues would be greatly appreciated.

Thank you for your support,
Chris</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are attempting to upload a program while the PLC is operational, it is recommended to only upload the program logic when the CPU is stopped. The error code referenced in the Proficy help file may indicate firmware issues with certain 90-30 models, although this may not be relevant to your specific situation. Are the project names consistent across all three conveyors? When troubleshooting this issue, did you create a new project folder from scratch or utilize an existing one? These questions stem from a potential concern that the folder being used may not correspond to the PLC model in use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the CPU is stopped and only the logic is uploaded, similar results are observed. To begin this process, a new TEMP folder was created. Although the three PLC program names are not identical, they share similarities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chris55555</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Logicmaster's approach of using the project name "TEMP" to manage PLC uploads when the project name is unknown is a common practice. It is uncertain whether this method was retained in VersaPro and Proficy. For troubleshooting, consider accessing the "Status" window in Proficy to identify the PLC name and version. Additionally, determining the firmware version on the CPUs can help in identifying any known issues related to the problem at hand. It is crucial to note that if any of the three CPUs are unable to upload logic, the issue may be linked to the CPU with the failed battery, which may not have any viable data to upload. In cases where a PLC lacks a program due to a failed battery, the program name in Proficy's status window may display as "HHP".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, you are correct that I was unable to upload from any of the three CPUs. It turns out that the program was still stored in the CPU despite the software fault. The CPU was set to start up in its last state, which caused it to begin in stopped mode each time the machine was powered on. To resolve the issue, I had to clear the fault, start the CPU, and power cycle the machine. Now it is back up and running. However, my objective remains to extract the programs from these CPUs.

Additionally, we recently retrieved a 4th conveyor from storage, which was manufactured in 1998. When I connected the setup to this conveyor, I was able to successfully upload the entire program at once. It is noteworthy that this 4th conveyor's 90 micro is operating on "software version 3.01 build 31A1", while the other three conveyors are operating on "2.01 build 0". Could this difference in software versions potentially be causing the connection issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chris55555</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The release of 2.01 dates back to April 1996 and required Logicmaster software release 6.01 or higher. Release 3.01 dates back to August 1997 and required Logicmaster release 8.01 or higher. Both versions were originally programmed using Logicmaster software, as VersaPro was not introduced until 1999. Therefore, the most reliable option for successful uploads would be Logicmaster. According to the Logicmaster 9.02 release notes (GFK-1412E), it was specifically designed and tested to be compatible with Series 90 Micro release 2 and earlier. However, some of the new features in Logicmaster 9.02 may require CPU firmware upgrades for full functionality.

I'm beginning to question the connection between your PC and the PLC. I have encountered difficulties using Logicmaster with a USB/serial converter in the past, and it seems like you are experiencing similar issues. It appears that the connection between the PC and the PLC is not being maintained long enough to complete the program upload or download. I am curious if your MOXA device is facing the same challenges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The issue does not appear to be related to the cable or the computer. I attempted to troubleshoot by using different cables, such as the "cheater cable" and IC690ACC901 serial cable from plccable.com, connected to COM1 on my PC. I also tested on a different computer, an older ThinkPad running Windows XP Pro version 2002 service pack 2. I was successful in uploading and downloading logic and configuration from a software version 3.01 CPU on the 4th conveyor, as well as uploading the configuration from a software version 2.01 CPU. However, I encountered difficulty uploading the logic from the 2.01 CPU. I was able to successfully download the logic from conveyor 4 to a 2.01 CPU using Logicmaster v9.05. I am in search of an older version of Logicmaster, or possibly a VersaPro CD.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chris55555</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Additionally, it is worth noting that we acquired a more recent model of the micro 90 (IC693UDR005RP1) from eBay with version 3.10 software installed. This unit functions similarly to conveyor 4 (3.01 software), allowing me to successfully upload and download the entire program. It appears that I can efficiently manage the program for software versions 3.01 and 3.10. However, for version 2.01, I can only upload and download the configuration, with the ability to download the logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chris55555</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have older editions of Logicmaster saved on 3.5" floppy disks, but without a working floppy drive, I am unable to verify their readability. Can these disks be utilized for installation? If so, kindly message me privately with your mailing address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am experiencing difficulties connecting my GE Fanuc Series 90 Micro PLC to the Proficy Machine Edition software. The issue appears to be related to the firmware version, specifically version 3.10. Despite conducting a thorough search, I have been unable to locate this particular firmware version. If anyone has access to the firmware version I am looking for, please reach out to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Azzou</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the main issue being faced with the conveyors and their programming?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The main issue is that the conveyor system lost its programming due to a dead battery, and now the goal is to transfer the program from a functioning conveyor to the one in need of repair.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What methods have been attempted to transfer the program to the malfunctioning conveyor?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Various methods have been tried, including using a USB to serial converter with Proficy Machine 9.5 on a Windows 10 computer, as well as using LM90_9.05 on a VirtualBox VM running Windows XP with a MOXA TCC-100I RS232 to RS422 converter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What specific error messages have been encountered during the attempts to transfer the program?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Error messages such as "Error 8097: Server Error - Transfer Error: Remote disconnect has occurred [0x6A][0x02]" and "<S43> communication failed" have been reported during the transfer attempts.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Have there been any issues with communication dropping during the ladder logic uploads?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, communication dropping during ladder logic uploads has been a consistent issue, with messages like "S43 comms failed" or "Error during load; Program folder incomplete. Must reload or restore logic" being displayed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Has the PLC unit encountered any previous faults that were resolved?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer:</p>
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
