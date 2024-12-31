
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need assistance with V21.03 firmware upgrades for my 1756-L73 ControlLogix controller. I am encountering issues when trying to go online or upload due to a mismatch in sub-minor revisions. Despite having the same V21.03.02 program on my PC and laptops, I am receiving error messages such">
    <meta name="keywords" content="logix5000 v03 firmware upgrade, 1756-l73 controllogix controller, online upload issues, sub-minor revisions, v02 program, error messages, failed to upload project, upload or download">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-online-and-upload-issues-with-logix5000-v21-03-firmware-upgrade">
    <title>Troubleshooting Online and Upload Issues with Logix5000 V21.03 Firmware Upgrade | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Online and Upload Issues with Logix5000 V21.03 Firmware Upgrade | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need assistance with V21.03 firmware upgrades for my 1756-L73 ControlLogix controller. I am encountering issues when trying to go online or upload due to a mismatch in sub-minor revisions. Despite having the same V21.03.02 program on my PC and laptops, I am receiving error messages such">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-online-and-upload-issues-with-logix5000-v21-03-firmware-upgrade">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Online and Upload Issues with Logix5000 V21.03 Firmware Upgrade | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need assistance with V21.03 firmware upgrades for my 1756-L73 ControlLogix controller. I am encountering issues when trying to go online or upload due to a mismatch in sub-minor revisions. Despite having the same V21.03.02 program on my PC and laptops, I am receiving error messages such">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-online-and-upload-issues-with-logix5000-v21-03-firmware-upgrade"
      },
      "headline": "Troubleshooting Online and Upload Issues with Logix5000 V21.03 Firmware Upgrade",
      "description": "Hello everyone, I need assistance with V21.03 firmware upgrades for my 1756-L73 ControlLogix controller. I am encountering issues when trying to go online or upload due to a mismatch in sub-minor revisions. Despite having the same V21.03.02 program on my PC and laptops, I am receiving error messages such",
      "author": {
        "@type": "Person",
        "name": "Level"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Troubleshooting Online and Upload Issues with Logix5000 V21.03 Firmware Upgrade</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Level</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">188</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">65</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need assistance with V21.03 firmware upgrades for my 1756-L73 ControlLogix controller. I am encountering issues when trying to go online or upload due to a mismatch in sub-minor revisions. Despite having the same V21.03.02 program on my PC and laptops, I am receiving error messages such as "Failed to upload project" and "You need to upload or download." Could this problem be related to the difference in sub-minor revisions? I have confirmed that the program versions are identical. Has anyone successfully upgraded to a more stable version to avoid issues caused by Rockwell's "resiliency" updates? Last year, we transitioned from V21.00 to V21.03 to resolve online problems, but we are now facing uploading issues. Any advice on choosing a more reliable version would be greatly appreciated. Thank you, Mike.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you encountered a high volume of MSG instructions within your code? If so, refer to KB article BF20416L5K for guidance on how to address this issue. You may need to download or disconnect from the network, enter program mode using specific keys, and upload data directly to your PC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello robertmee, thank you for your response. I have attempted to save and re-import the L5K file without success. I also tried switching the key to PROG mode and connecting directly to the controller. However, Linx confirmed that there was no connection to any other devices on the network, leading to the same issue during connection attempts. There was a previous post suggesting that the "Overhead Time Slice" setting might be too low, currently set at 20% for an average scan time of 8ms. The ongoing issue following the disconnection from the network points more towards a possible versioning problem. I initially suspected a program mismatch between the controller and the offline program, but the line was operational earlier this week and I was only able to confirm the issue today.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Level</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I remember encountering a similar issue when connecting to v21.03 online without an exact match file several years ago. While I wasn't dealing with multiple revisions at the time, it's possible that slight differences in the logic of a file with a different sub-revision could be causing the upload to fail in Logix. This issue appears to be separate from the resiliency release that may cause a minor version incompatibility, as in that case you can still upload and save but not go online. It seems that in this scenario, the upload process is failing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance at plvlce - I truly value it. You are right, the issue lies with the failed upload, which is quite worrisome. Our troubleshooting options are limited without an internet connection. If we encounter any obstacles, our only choice is to resort to using the backed-up copy as a last resort solution, which may not address the underlying root cause. I will review the link you provided for any relevant insights that could assist us.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Level</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted accessing the internet through the USB port located on the front of the Programmable Logic Controller (PLC)? It has been suggested that the USB port is prioritized for communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Myrddin</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upgrade to the latest version 36 to ensure compatibility by downloading the matching versions. This will also allow you to take advantage of the support for L73 in the updated software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Myrddin suggested trying to connect online through the PLC's USB port, which is said to have the highest priority for communications. I have tried this with the same results when directly connected to the controller.
jstolaruk recommended updating to a newer version, as the L73 is supported in the latest version 36. This seems to be the only solution to avoid the "resiliency" revision. It is important to choose a version that is compatible with the current instruction set and communications protocols. Can anyone suggest the best approach for this situation? Our plant has multiple machine sets with a variety of applicable versions, which adds complexity to the decision-making process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Level</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To test compatibility with the latest version (v36), consider creating a temporary copy of your current setup and making the necessary updates. If your system is interconnected with other PLCs through messages or tags, the transition should be seamless despite minor mnemonic changes in v36. The challenge lies in the lack of a data table snapshot. It's advisable to test the update with spare parts first. While the "Preserve Online Tag Values" option may not guarantee success, previous experiences with upgrading Studio versions were manageable for PLC programming and commissioning tasks. Best of luck in your endeavors!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I prefer to stay a few versions behind the latest technology to avoid potential issues. Currently, I am using version 32 for my simple systems with no motion and basic communications. It would be beneficial for you to document all your Logix5K versions and aim for consistency in your setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Controller Level 1756-L73 ControlLogix Revision 21.11 Program V21.03.00 seems to be experiencing issues when trying to go online or upload using a Logix version with a mismatched sub-minor revision. Both my PC and the laptops we've tested have version V21.03.02, resulting in errors during the process. When attempting to go online, the message "You need to upload or download in order to go online using the open project" pops up. Similarly, when uploading, I receive the error "Failed to upload project. Reverting to the last saved copy of my file." Could the problem of going online/uploading be related to the difference in sub-minor revisions?

It is important to note that the revision numbers do not impact the program or CPU firmware; they are separate entities. The sub-minor revisions, which include add-on programs like RSLinx and Factory Talk Activation, are not relevant to the program or CPU functionality. The exception to this is version 20, where 20.01 and 20.03 were incompatible and had bugs, but these issues were resolved in v20.05.

If encountering issues with the control panel receiving dirty power, try disconnecting the power from the PLC and instead using a power cord connected to a building outlet. Additionally, plug your laptop into the building outlet to ensure stable power supply. Taking these steps can help resolve issues related to power supply affecting the functionality of the control panel.

In a specific case, when trying to go online using the 120 outlet in the enclosure, the laptop indicated a faulty battery and the UIC displayed an "Unrecognized device" prompt. However, after switching to a different power source, such as a building outlet, the battery was charging properly, and the UIC started working without any hitches. This experience highlights the importance of ensuring a stable power source to avoid communication issues and hardware malfunctions. Installing a line filter on the transformer output can help mitigate power-related problems in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In troubleshooting data table issues, not having an image of the current data table in the machine can be challenging. It's recommended to exhaust parts before attempting any changes. While there is a download option called "Preserve Online Tag Values," it's unlikely to work based on previous experiences. This feature was introduced in a relatively recent version (around v30) so upgrading firmware might be necessary before attempting to download, which could result in data loss.

Regarding version compatibility, there was a known issue with versions 20.01 and 20.03 being incompatible and having bugs, but the issue was resolved in v20.05. However, in the case of version 21, the minor version incompatibility persists and has not been rectified, unlike with v20. This issue has been discussed multiple times on forums, including this one, The Automation Blog, and Rockwell technotes. It appears that the problem may be related to an ongoing issue with the v21 software that has been reported by multiple users over the years.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing issues with Microsoft SQL 4.0, one possible solution could be to uninstall and then reinstall the software. This troubleshooting method has been recommended in some knowledge base articles related to issues with version 21. I closely observed the process, which includes backing up the PLC memory before downloading the new executable. I recently tested this method and successfully upgraded a Compactlogix from version 32 to version 36, with both versions coexisting on my system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce mentioned that in order to download the feature, the firmware would need to be updated, which could potentially result in data loss. Previous versions offered the Data Preserved Download Tool as an optional external utility, but its reliability should be tested before use. It is recommended to go online properly and save data online before proceeding if feasible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the "Failed to upload project" and "You need to upload or download" errors during V21.03 firmware upgrades for a 1756-L73 ControlLogix controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error messages may be due to a mismatch in sub-minor revisions, even if the program versions on different devices are labeled as V21.03.02.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve issues related to mismatched sub-minor revisions when upgrading firmware on a ControlLogix controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the sub-minor revision differences causing upload problems, ensure that the firmware versions are not just labeled as V21.03, but that they match exactly, including sub-minor revisions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Has anyone successfully upgraded to a more stable firmware version for the 1756-L73 ControlLogix controller to avoid issues with Rockwell's "resiliency" updates?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Consider upgrading to a more stable version beyond V21.03 if you continue to face issues. It might be beneficial to seek advice from others who have successfully transitioned to a more reliable firmware version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there recommendations for selecting a more reliable firmware version for the ControlLogix controller to prevent online and upload problems?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Seeking advice from experienced users who have upgraded to stable versions beyond V21.03 can help in choosing a firmware version that minimizes issues caused by Rockwell's updates.</p>
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
