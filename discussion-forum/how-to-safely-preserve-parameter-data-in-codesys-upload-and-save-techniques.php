
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Transitioning from Rockwell to Codesys, I am accustomed to saving and uploading current parameter data in one step, ensuring that the logic is downloaded as well during the process. In my quest to grasp the system in Codesys, I have noted the importance of maintaining values, especially during power">
    <meta name="keywords" content="codesys, preserve parameter data, upload techniques, save techniques, rockwell to codesys transition, data retention, parameter values, power loss scenarios, analog scaling parameters, commissioning system, program preservation, data backup, var retain, persist">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-safely-preserve-parameter-data-in-codesys-upload-and-save-techniques">
    <title>How to Safely Preserve Parameter Data in Codesys: Upload and Save Techniques | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Safely Preserve Parameter Data in Codesys: Upload and Save Techniques | Oxmaint Community">
    <meta property="og:description" content="Transitioning from Rockwell to Codesys, I am accustomed to saving and uploading current parameter data in one step, ensuring that the logic is downloaded as well during the process. In my quest to grasp the system in Codesys, I have noted the importance of maintaining values, especially during power">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-safely-preserve-parameter-data-in-codesys-upload-and-save-techniques">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Safely Preserve Parameter Data in Codesys: Upload and Save Techniques | Oxmaint Community">
    <meta name="twitter:description" content="Transitioning from Rockwell to Codesys, I am accustomed to saving and uploading current parameter data in one step, ensuring that the logic is downloaded as well during the process. In my quest to grasp the system in Codesys, I have noted the importance of maintaining values, especially during power">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-safely-preserve-parameter-data-in-codesys-upload-and-save-techniques"
      },
      "headline": "How to Safely Preserve Parameter Data in Codesys: Upload and Save Techniques",
      "description": "Transitioning from Rockwell to Codesys, I am accustomed to saving and uploading current parameter data in one step, ensuring that the logic is downloaded as well during the process. In my quest to grasp the system in Codesys, I have noted the importance of maintaining values, especially during power",
      "author": {
        "@type": "Person",
        "name": "Paullys50"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">How to Safely Preserve Parameter Data in Codesys: Upload and Save Techniques</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Paullys50</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">8274</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">13</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Transitioning from Rockwell to Codesys, I am accustomed to saving and uploading current parameter data in one step, ensuring that the logic is downloaded as well during the process. In my quest to grasp the system in Codesys, I have noted the importance of maintaining values, especially during power loss scenarios such as analog scaling parameters. Furthermore, I am keen on commissioning a system and preserving both the program and parameters for potential download into a similar system or a replacement controller. It appears that utilizing VAR RETAIN and PERSISTENT is necessary for data retention, but it appears to only be applicable at the controller level. I am curious if the actual data will be saved with the project file, or if additional logic is required to initialize hard-coded values for critical parameters within the system.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To preserve data outside the PLC, you must create a file in external memory storage. While some PLC types allow for the use of internal memory, it is crucial to store the file separate from the compiled program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>shooter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If these values are indeed constants, it may be best to hard code them. However, if they are subject to change through another method such as an HMI (Human-Machine Interface), an alternative approach will be needed. Which controller are you utilizing? You may need to allocate a specific section of memory to ensure the variables are reliably retained.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Highland Controls</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Depending on the type of hardware you have, you may have the capability to save data to a FTP location or a memory card. By creating a script, you can easily transfer all the necessary information to the card. Conversely, another script can be utilized to load the saved data back into the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>keshik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having grown up in the Rockwell world, I am familiar with the importance of saving data. In CoDeSys, I manage this by saving set-points and other data to a file stored in the PLC flash memory. This allows me to access the information automatically upon power up or manually when needed. The key commands for this process are sysfilewrite and sysfileread. Best of luck to you in your data saving endeavors. -Yosi</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>(8{)} ( .)</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to note that continuously writing to a flash card can cause it to break over time. Consumer grade devices typically have a limited number of erase/write cycles per block, ranging from 500 to 3,000, while industrial grade devices offer higher durability, with potentially 10 to 50 times more cycles. To prolong the lifespan of your flash card, consider only writing data when power is diminishing (a feature found in Beckhoff systems) or when the data actually changes. Additionally, wear-leveling technology can help by distributing data across different blocks to reduce wear and tear on specific areas of the card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danatomega</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the feedback, it appears to be quite challenging. Currently, I am testing in simulation mode to become more comfortable with the Codesys programming environment. While hard-coding in certain areas may be acceptable, it may not be feasible in others. Saving values on the controller helps address power concerns, but if the controller is replaced or if there is a duplicate system, all control set points must be reset to their default values. Additionally, simply saving the project may not capture any changes made to the set points. It seems like there is always a complication, doesn't it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paullys50</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rockwell's approach of uploading and downloading all tag values and retaining them through power cycles may seem unusual, but it sets them apart in the world of PLCs. In other PLC systems, variables (or tags) can be designated as volatile (reset on power cycle), retentive/remnant (maintains value but is cleared on a "cold restart"), or permanent (requires special action to delete). When uploading and downloading code, values can be hardcoded or saved as a recipe in memory or on a flash card.

Most PLC manufacturers allow for the easy transfer of variable information to another system for commissioning or backup purposes. Schneider offers the Controller Assistant, B&R provides the Runtime Utility Center (PVI Transfer Tool), and Beckhoff likely has a similar tool. While Schneider uses Codesys, the Controller Assistant is not integrated into the Codesys platform.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CapinWinky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Danatomega warned that constantly writing to a flash card can lead to its eventual deterioration. Consumer-grade devices typically have a limited number of erase/write cycles per block, ranging from 500 to 3,000, while industrial-grade devices have significantly more, possibly 10 to 50 times more. It is crucial to be mindful of this limitation and only write to the card when necessary. In our practice, we primarily rely on industrial flash cards for their durability. Additionally, remember that you can always transfer files using FileZilla if your PLC supports FTP.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>(8{)} ( .)</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CapinWinky noted that Rockwell's method of uploading and downloading all tag values, with tags being retained on power cycle, may seem unusual to some. While it would be ideal to have the option to select which data to download (logic, values, or both) similar to a GE PLC, the ability to upload and save values is invaluable. This is especially true in large process systems where numerous critical set points can be changed at any time. Constantly saving these changes to a separate file can become cumbersome. Hard coding every device range and configuration on such systems could be impractical, particularly during commissioning when changes are common.

Having the capability to go online, save snapshots, and easily revert back to previous settings is essential in scenarios where power failures occur. While using retentive tags can help mitigate data loss, it is crucial to pay close attention to software design.

The concept of saving data as 'recipes' may not align with traditional batching practices, where recipes typically dictate process control set points rather than system configurations like time delays or alarm settings. While there are arguments to be made on both sides, it is important to consider all factors when designing and implementing PLC systems for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paullys50</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As someone who also grew up in the world of Rockwell, I understand the importance of saving data efficiently. In CoDeSys, I have found a solution by writing set-points and similar data to a file in the PLC flash memory. This allows me to access the stored data automatically (such as on power turn on) or manually using commands like sysfilewrite and sysfileread. 

While I recognize this is an older discussion, I face the challenge of lacking non-volatile memory in my controller for persistent variable saving. To overcome this hurdle, I have adopted a method of saving and loading all setpoints and parameters to/from a text file on an SD card.

Could anyone share examples or tips on how to accomplish this effectively? Your insights would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kallileo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Explore the extensive library for IEC61131 at Oscar's official website - www.oscat.de.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>shooter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that your platform includes a library to handle this task. Previously on Moeller, the following code was used: 
"If gxSaveRetains is true, then DINT1 will be assigned the value of SysSaveRetains('\StorageCard\BackupRetains'). 
If gxRestoreRetains is true, then DINT2 will be assigned the value of SysRestoreRetains('\StorageCard\BackupRetains')."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There is currently no library available for this function. However, I am able to manipulate data in a text file using the CAA_File library. I am seeking a more efficient method to write approximately 200 values to the text file and upload them to their corresponding variables upon start-up.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kallileo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>On which platform is CoDeSys operating?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you explored the Recipe feature in Codesys for this specific task? I highly recommend giving it a try for better efficiency and organization in your project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>imdatatas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is an outdated discussion, but I found a solution by developing a custom method to save and load configuration settings from text files stored in the PLC's internal memory. This allows for easy program updates and file transfers between PLCs using a USB drive. Recently, a specialized Persistence Manager module has been introduced by Codesys, aimed at storing configuration details in text files for easy access during PLC program initialization. I have adopted this new module and found it to be very effective. If you need more information, you can visit the CODESYS Group website at content.helpme-codesys.com. When asked about the platform, I am using Codesys on an Exor eSmart HMI that does not have accessible NVRAM.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kallileo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are considering using the Application Composer in CODESYS, it is important to note that the Persistent Manager module may be required as an additional license. This module allows for the saving of persistent variables in the recipe file, which can be helpful for sharing data among multiple PLC devices within the same project or for backing up existing variable values. For more information on this feature, please visit the CODESYS Group website at content.helpme-codesys.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>imdatatas</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I safely preserve parameter data in Codesys to ensure it is retained during power loss scenarios?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To preserve parameter data in Codesys, you can utilize VAR RETAIN and PERSISTENT to ensure data retention at the controller level. This helps maintain values such as analog scaling parameters even during power loss situations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can I save both the program and parameters in Codesys for potential downloading into a similar system or replacement controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While Codesys allows for saving and uploading parameter data, it is primarily focused on the logic itself. To ensure parameters are saved along with the program, additional steps may be required such as initializing hard-coded values for critical parameters within the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the actual parameter data saved with the project file in Codesys?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In Codesys, the actual parameter data may not be saved directly with the project file. It is essential to use mechanisms like VAR RETAIN and PERSISTENT to store critical parameter values at the controller level for data retention and system integrity.</p>
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
