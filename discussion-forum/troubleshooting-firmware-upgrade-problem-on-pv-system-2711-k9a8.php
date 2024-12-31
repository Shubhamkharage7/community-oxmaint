
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We purchased a used PV system as a backup. Our current PV systems are running on Firmware version 3.30, while the spare system has version 3.13. We wanted to upgrade the firmware to 3.30 for better compatibility. When attempting to upgrade, we found that only version 4.xx was available.">
    <meta name="keywords" content="troubleshooting firmware upgrade, pv system 2711-k9a8, firmware version 30, firmware upgrade problem, compatibility issue, standardizing firmware, corrupt system error 74, autotest errors, fix firmware upgrade">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-firmware-upgrade-problem-on-pv-system-2711-k9a8">
    <title>Troubleshooting Firmware Upgrade Problem on PV System 2711-K9A8 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Firmware Upgrade Problem on PV System 2711-K9A8 | Oxmaint Community">
    <meta property="og:description" content="We purchased a used PV system as a backup. Our current PV systems are running on Firmware version 3.30, while the spare system has version 3.13. We wanted to upgrade the firmware to 3.30 for better compatibility. When attempting to upgrade, we found that only version 4.xx was available.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-firmware-upgrade-problem-on-pv-system-2711-k9a8">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Firmware Upgrade Problem on PV System 2711-K9A8 | Oxmaint Community">
    <meta name="twitter:description" content="We purchased a used PV system as a backup. Our current PV systems are running on Firmware version 3.30, while the spare system has version 3.13. We wanted to upgrade the firmware to 3.30 for better compatibility. When attempting to upgrade, we found that only version 4.xx was available.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-firmware-upgrade-problem-on-pv-system-2711-k9a8"
      },
      "headline": "Troubleshooting Firmware Upgrade Problem on PV System 2711-K9A8",
      "description": "We purchased a used PV system as a backup. Our current PV systems are running on Firmware version 3.30, while the spare system has version 3.13. We wanted to upgrade the firmware to 3.30 for better compatibility. When attempting to upgrade, we found that only version 4.xx was available.",
      "author": {
        "@type": "Person",
        "name": "ThomasGruetter"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-12",
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
                <h1 class="text-white">Troubleshooting Firmware Upgrade Problem on PV System 2711-K9A8</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3014</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">277</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We purchased a used PV system as a backup. Our current PV systems are running on Firmware version 3.30, while the spare system has version 3.13. We wanted to upgrade the firmware to 3.30 for better compatibility. When attempting to upgrade, we found that only version 4.xx was available. We attempted the upgrade in hopes of standardizing on version 4.xx, but it failed and now the spare system has a corrupt system, displaying error 74. Subsequent attempts no longer result in self-checking, only showing verification/autotest errors. I need to explore options to fix this issue. I believe PB 3.20 and 3.40 have older firmware versions, but I need to access the configuration menu again. We initially downloaded via RS232 - what other options are available using a CF card?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering Error 40, also known as "No executable code to run after boot," can be frustrating. According to the TechConnect knowledgebase, this error indicates a firmware issue. To resolve this, refer to the PVFIRMWARE folder in the PanelBuilder 32 installation files for the necessary firmware files and instructions. 
Similarly, Error 74 may not be listed in the user manual, but a tech note on TechConnect sheds light on it. This issue arises when trying to use firmware v4.xx on a panel with boot code less than 1.06. Unfortunately, the only solution provided is to send the device in for repair. 
It's disappointing news, but addressing these errors promptly is crucial to prevent further complications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know where I can find an older version of the FW file m90kdhp.fmw on CD, specifically version 4.20 or earlier? If so, please let me know.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing issues, you may require firmware versions prior to 4.00.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking for a copy of Panelbuilder32 version 3.20 with Firmware 3.30, I recommend searching online for a reliable source to download it from. Once you have obtained the software, proceed with reinstalling the firmware as needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>darkplc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I've been struggling to locate a Panelbuilder 32 CD with version 3.20 or 3.40 - version 3.80 could also be compatible. I am in need of a firmware file that is 4.20 or lower in order to attempt to revive my Panelview 900. I tried using a CF card with firmware file 4.41, but encountered a new error 25 (possible incompatible file?) after previously experiencing error 40. Can anyone suggest where I can find older versions of Panelbuilder 32?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I stumbled upon an outdated CD Panelbuilder 32 v 3.80 and I am currently transferring the firmware folder to a compressed file on Google Drive. If you have a specific file in mind, I can easily send it to you, or else I will need to find a way to share the Google Drive folder with you. It seems that all I require is your email address to share the zipped folder. Feel free to send me a direct message, and I should be able to share it with you tomorrow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey OkiePC, I sent you a private message, but for those interested, I have a file named m90kdhp.fmv located in the folder PV_Terminal_FW/FW_Card/K9A8. This file is for FW version 4.41. If your CD has an older FW version, it likely has the same file name.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Attached is a zipped file from the directory D:\PVFirmware\PV_Terminal_FW\FW_Card\K9A8 with a "Date Modified" property of 5/4/2001. Hopefully, this file will be compatible and useful for your needs!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before leaving, I attempted to transfer a new file to a CF card using the FW utility without success. In the end, I had to manually copy the file onto the card, only to encounter the same error. I am unsure if the issue lies with the version compatibility or if there was an error in the way the file was written onto the CF card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unsure about the next steps? There is a firmware update utility included on the disc, but it may not be necessary to update the PV from a memory card. Have you ensured that the card is formatted in FAT16 and is compatible with the PV? In the past, issues have arisen when formatting cards using Windows for HMIs. It is recommended to have the HMI format the card first and to ignore any warnings from Windows to "fix" the file system. This will help avoid potential compatibility issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered error 25 while trying to transfer a clean file from the utility to a 1GB CF card. I am unsure if an outdated firmware is required or if there is a problem with the CF card format. I will attempt to use another CF card that was formatted by a PV. I am curious if there are any previous versions of Panelbuilder 32 available for download.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The instructions provided in the firmware folder's readme file suggest that the *.fmw file should be copied to the memory card. Step 2 of the process involves transferring the file to the memory card using a memory card reader or programmer. It is important to note that if the PanelView Terminal being upgraded is on boot code version 1.02 or earlier, a Flash memory card must be used for the firmware upgrade. For versions 1.04 or later, either a Flash or ATA memory card can be used. 

Be cautious when upgrading the PanelView Terminal's firmware as it will result in the erasure of the PanelView runtime application. Prior to upgrading, ensure to save the application through PanelBuilder32 or WinPFT Upload function. When downloading firmware to a DH485 terminal, it is advisable to disconnect it from the network.

Insert the programmed memory card into the designated slot at the back of the PanelView Terminal. Reset the terminal with the memory card inserted to load the new firmware during boot up. Once the firmware is updated and the terminal displays the Configuration screen, select the Memory Card option, choose Disconnect Card, and remove the memory card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Achievement unlocked! I successfully resolved an error 25 on a PV by using a CF card that I formatted with the help of OkiePC. Special thanks to the helpful individuals on this forum for their support. It is crucial to ensure the CF card is correctly formatted, as I found out the formatting only worked when done on a PV, not on a PC. This experience underscores the importance of proper CF card formatting for resolving issues efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Excellent job. I appreciate you providing closure on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC mentioned that they have come across an old CD Panelbuilder 32 version 3.80 and are currently transferring the firmware folder to a compressed file on a Google Drive. If you know the specific file you require, it can be attached here. Otherwise, arrangements will be made to share the Google Drive folder. A simple email address is all that is needed to share the zipped folder. Feel free to PM for further details. Hopefully, the required firmware version 4.20 can be found within the Panelbuilder32 version 3.80. Thank you in advance for any assistance with this search!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rveez</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently transferring the entire PVFirmware folder to our company's shared drive. It appears to be organized by Panelview part numbers with different suffixes. Please let me know which specific part number you need.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Download the latest T10C8 firmware for Panelbuilder32 version 3.80. I've assumed the part number based on your previous thread. Feel free to reach out if you require a different version or once you have successfully installed this update.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC provided the T10C8 firmware from the Panelbuilder32 version 3.80 CD. I assumed the part number based on previous discussions. Please let me know if you need a different firmware version and if you are successful with this one. For future reference, I had a bricked Panelview 2711-t10c8 with factory firmware version 4.00 loaded outside its hardware boundaries. OkiePC sent me firmware version 4.20 and assisted in resurrecting this older HMI device. The support received was superior to Rockwell's own system. Many thanks!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rveez</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: How can I fix a PV system displaying error 74 after a failed firmware upgrade?
    To fix error 74 on a PV system after a failed firmware upgrade, you may need to access the configuration menu again. Consider exploring options like using PB 3.20 or 3.40 to revert to older firmware versions.
   
2. Q: What options are available for upgrading firmware on a PV system using a CF card?
    Besides downloading via RS232, you can also upgrade firmware on a PV system using a CF card. This method may provide an alternative to resolve issues encountered during the upgrade process.
   
3. Q: Is it possible to standardize on firmware version 4.xx for compatibility with a PV system?
    While attempting to standardize on firmware version 4.xx for compatibility reasons, it's crucial to ensure that the upgrade process is performed successfully to avoid system corruption and errors like error 74.</p>
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
