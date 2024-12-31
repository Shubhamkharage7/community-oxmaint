
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there, Im encountering an issue where my CPUs Ready and Not Ready LEDs are flashing simultaneously. I consulted the manual which clarified that the PLC lacks an operating system. How can I resolve this issue and successfully run the CPU?">
    <meta name="keywords" content="moeller cpu ps4-201-mm1, troubleshooting moeller cpu, ready led flashing issue, not ready led flashing, moeller cpu operating system, resolving cpu">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-moeller-cpu-ps4-201-mm1-resolving-ready-and-not-ready-led-flashing-issue">
    <title>Troubleshooting Moeller CPU PS4-201-MM1: Resolving Ready and Not Ready LED Flashing Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Moeller CPU PS4-201-MM1: Resolving Ready and Not Ready LED Flashing Issue | Oxmaint Community">
    <meta property="og:description" content="Hey there, Im encountering an issue where my CPUs Ready and Not Ready LEDs are flashing simultaneously. I consulted the manual which clarified that the PLC lacks an operating system. How can I resolve this issue and successfully run the CPU?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-moeller-cpu-ps4-201-mm1-resolving-ready-and-not-ready-led-flashing-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Moeller CPU PS4-201-MM1: Resolving Ready and Not Ready LED Flashing Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hey there, Im encountering an issue where my CPUs Ready and Not Ready LEDs are flashing simultaneously. I consulted the manual which clarified that the PLC lacks an operating system. How can I resolve this issue and successfully run the CPU?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-moeller-cpu-ps4-201-mm1-resolving-ready-and-not-ready-led-flashing-issue"
      },
      "headline": "Troubleshooting Moeller CPU PS4-201-MM1: Resolving Ready and Not Ready LED Flashing Issue",
      "description": "Hey there, Im encountering an issue where my CPUs Ready and Not Ready LEDs are flashing simultaneously. I consulted the manual which clarified that the PLC lacks an operating system. How can I resolve this issue and successfully run the CPU?",
      "author": {
        "@type": "Person",
        "name": "Franc23_B"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-13",
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
                <h1 class="text-white">Troubleshooting Moeller CPU PS4-201-MM1: Resolving Ready and Not Ready LED Flashing Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Franc23_B</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>22 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">7389</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">297</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there, I'm encountering an issue where my CPU's "Ready" and "Not Ready" LEDs are flashing simultaneously. I consulted the manual which clarified that the PLC lacks an operating system. How can I resolve this issue and successfully run the CPU?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The PS4-341 and newer models are the only ones capable of being flashed with an operating system. If the unit lacks a program, it could mean there is no memory module in the PLC. In the event of a dead battery, the program is lost. To attempt to recover the program, try placing the mode switch in Run and pressing the reset button located under the cover. Alternatively, switch to the Run M-Reset position and press reset to perform a cold start on the PLC, potentially leading to some loss of retained variables. Check the status of the battery light for further troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The battery voltage is currently at 3.7 Vdc and the LED is not flashing. After switching the dip switch to "RUN" and pressing the RESET button, the device still does not start running. Trying a different dip switch setting and pressing RESET again yields the same outcome. Could there be an issue with the CPU? Is the program stored correctly in the memory module?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Franc23_B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is your system equipped with a memory module?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Central Processing Unit (CPU) contains a memory module that is crucial for storing data and instructions. But how can you physically locate, identify, or observe the memory module within the CPU? Let's explore ways to uncover this essential component.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Franc23_B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The placement of the memory module is typically above the PRG and Sukonet K ports and is often covered by a white plastic cover. The memory module itself features a dark plastic handle in the middle. When the PLC is started, it verifies if the program on the memory module matches the one in the PLC. If there is no program in the PLC or if the programs do not match, the program is copied from the Memory Module to the PLC. It appears that a memory card might be missing. Do you happen to have another identical machine with a functioning program?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How to locate memory module in CPU - Do I need to remove a cover? If memory module is not there, what should I do? And if it is there, what next? Without another machine with similar programs, can PC-CPU communication help transfer programs from memory module? Is this transfer possible?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Franc23_B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out this image featuring a programmable logic controller (PLC) equipped with a memory module, specifically the ZB4-160 model. Are you in search of a similar product?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, I possess it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Franc23_B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If there is a program stored on the card, it should function properly without any issues. If you encounter any problems, you can try removing the card and reinserting it. To remove the card, first power off the device. Next, lift the dark-colored handle upwards by about 10mm to release the memory module. When re-installing, ensure the handle is in the upward position before inserting the memory module securely into the PLC. Once inserted, push the handle back down. Turn the power back on and perform a RESET/RUN-M-RESET to restart the program. It is important to note that programs cannot be directly extracted from the PLC, but you can obtain a binary, compiled file. However, this file cannot be loaded into the programming software for any modifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon checking, I discovered that the memory module had been removed and is currently not connected. I am considering going online with the PC - PLC to check the status of the CPU or program. However, the required operating systems are limited to Windows 95, 98, or NT. Are there any alternative solutions you can suggest in this situation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Franc23_B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to go online, you need to have the software program installed on your computer. If your device is not large enough, it may be more beneficial to purchase a new Programmable Logic Controller (PLC) and transfer the program over. Unfortunately, I don't have any more positive updates to share.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you very much! Where can I find a reliable source to download S40 software for Windows XP?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Franc23_B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I am currently troubleshooting a PS4-341 controller that is in READY mode but won't transition to RUN after pressing the RESET button. I do not have much information about the equipment history and there is no M card installed. I am considering performing a cold start by switching the controller to the RUN M-Reset position and pressing the RESET push button, but I am concerned about losing data and parameters. Any suggestions would be greatly appreciated. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>[email protected]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When things go awry, they tend to remain that way. Without the necessary components like the original program, software, a lead, and a laptop operating on Windows 95 with a batch file for the serial port, you'll find yourself at a disadvantage. It's time to restart and try again.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ronnie Sullivan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Ronnie Sullivan, problems arise and persist if not addressed properly. To reconfigure the system, having the original program, such as Sucosoft, is crucial. Additionally, a batch file is required to activate the serial port. If unsure about the batch file, resources can be found online to obtain it. As for the hardware, acquiring a lead and a laptop running Windows 95 is the simplest part of the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>[email protected]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you lack access to the original program, your progress may be hindered. In the past, a service was available to decompile uploaded code for a fee, but this option is outdated now.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ronnie Sullivan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Ronnie Sullivan, the original program is crucial to progress further. While there was once a service available to decompile uploaded code for a fee, this option is no longer available. However, I may have potentially located the program and have a spare PLC of the same type. I am considering uploading the program onto this spare PLC. Can you provide me with guidance or a link outlining the necessary steps for this process? Thank you in advance for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>[email protected]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Engaging in Meaningful Discussions: The Key to Great Communication</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>victorjohn9211</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Ronnie Sullivan, when things go awry, they tend to remain that way. Without the necessary components like the original program, specific software, the appropriate lead, and a Windows 95 laptop equipped with a batch file to activate the serial port, you might be at a loss. It seems like it's time to start over. Despite having the software, a backup of the program, and the lead, an issue persists with connecting to the PLC device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>[email protected]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been quite some time since I last used KM plc's for communication. I recall having to connect using Windows 95 and a batch file in exec.com or a startup file that needed to be executed during boot up to establish communication through the real serial port.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ronnie Sullivan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have an identical machine with a functioning PLC, you can transfer the program using a memory card. Simply locate a compatible memory card to facilitate the transfer process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Norman, I'm wondering if there is a way to transfer a program to a PLC through a memory module without the source code. I couldn't find any information about this in the manual. By the way, your expertise and the discussion thread are greatly appreciated. Thank you, Sedigh.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BHP1979</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: Why are the "Ready" and "Not Ready" LEDs on my Moeller CPU flashing simultaneously?
    The simultaneous flashing of these LEDs indicates that the PLC lacks an operating system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the issue of the "Ready" and "Not Ready" LEDs flashing on my Moeller CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> To resolve this issue and successfully run the CPU, you will need to install the required operating system as specified in the manual.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Where can I find the operating system needed for my Moeller CPU to stop the simultaneous flashing of the "Ready" and "Not Ready" LEDs?</h4>
<p class='text-muted'><strong>Answer:</strong> Refer to the manual for your Moeller CPU to identify the specific operating system required. You may need to download and install the operating system following the manufacturer's guidelines.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any troubleshooting steps I can follow to address the simultaneous flashing of the "Ready" and "Not Ready" LEDs on my Moeller CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> In addition to installing the necessary operating system, you can also check the connections, power supply, and configuration settings of the CPU to ensure everything is set up correctly.</p>
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
