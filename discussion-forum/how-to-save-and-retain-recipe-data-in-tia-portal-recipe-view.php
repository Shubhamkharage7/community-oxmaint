
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings all, I have developed a Recipe View that I intend to utilize across various presets, allowing me to modify, rename, delete, and add new recipes as needed. Initially, everything seems to be functioning properly as I input and save variables within the view. However, upon closing and reopening">
    <meta name="keywords" content="recipe view, tia portal, save recipe data, retain recipe values, data record, presets, modify recipes, rename recipes, delete recipes, add new recipes, simulation, variables, retentive values, data blocks, update data record">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-save-and-retain-recipe-data-in-tia-portal-recipe-view">
    <title>How to Save and Retain Recipe Data in TIA Portal Recipe View | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Save and Retain Recipe Data in TIA Portal Recipe View | Oxmaint Community">
    <meta property="og:description" content="Greetings all, I have developed a Recipe View that I intend to utilize across various presets, allowing me to modify, rename, delete, and add new recipes as needed. Initially, everything seems to be functioning properly as I input and save variables within the view. However, upon closing and reopening">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-save-and-retain-recipe-data-in-tia-portal-recipe-view">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Save and Retain Recipe Data in TIA Portal Recipe View | Oxmaint Community">
    <meta name="twitter:description" content="Greetings all, I have developed a Recipe View that I intend to utilize across various presets, allowing me to modify, rename, delete, and add new recipes as needed. Initially, everything seems to be functioning properly as I input and save variables within the view. However, upon closing and reopening">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-save-and-retain-recipe-data-in-tia-portal-recipe-view"
      },
      "headline": "How to Save and Retain Recipe Data in TIA Portal Recipe View",
      "description": "Greetings all, I have developed a Recipe View that I intend to utilize across various presets, allowing me to modify, rename, delete, and add new recipes as needed. Initially, everything seems to be functioning properly as I input and save variables within the view. However, upon closing and reopening",
      "author": {
        "@type": "Person",
        "name": "thewalkerist"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-18",
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
                <h1 class="text-white">How to Save and Retain Recipe Data in TIA Portal Recipe View</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>thewalkerist</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5583</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">370</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings all,
I have developed a Recipe View that I intend to utilize across various presets, allowing me to modify, rename, delete, and add new recipes as needed. Initially, everything seems to be functioning properly as I input and save variables within the view. However, upon closing and reopening the simulation, all my changes are instantly erased, leaving me with a blank Recipe View screen. I attempted to use a data record to store my values, but unfortunately, the data record did not update with the changes I made. How can I ensure that my values are saved and retained, similar to the way retentive values are stored in my data blocks?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to locate the storage location of my recipes. When I attempt to add a new recipe, it does not appear in the data records. Additionally, modifying the values of existing recipes does not reflect in the data records.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thewalkerist</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're facing a similar issue, exporting and importing values to and from a csv file seems to be the only solution. Without a memory card to save these values, they may be lost during a re-initialization or factory reset.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thewalkerist</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're facing the same issue, exporting and importing values to and from a CSV file is the only solution. If you don't have a memory card to store these values, they will be lost during re-initialization or a factory reset. You may also consider exporting to a network drive as an alternative. However, keep in mind that re-imaging the panel will result in the deletion of all data stored in the internal flash memory. It is crucial to have a backup storage option such as a memory card or USB drive to prevent data loss in such scenarios.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The user mk42 mentioned that you can save data to a memory card, USB, or possibly a network drive. However, if the panel gets reimaged, all internal flash data is erased. Is this a common issue? How do engineers typically address this vulnerability? Perhaps creating an export-import button could help save recipes to a PC or external storage for added security and convenience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thewalkerist</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to handling recipe data in HMIs, engineers may opt to leave them vulnerable like that. However, it is common practice to have a memory card in an HMI, especially a Comfort Panel from Siemens, for automatic backup. By using the Siemens memory card in the automatic backup slot, both the program and recipe data can be backed up. Alternatively, using a data slot allows easy access to the data. This data slot doesn't require a Siemens memory card, so cost concerns can be minimized. Therefore, the issue isn't about leaving data vulnerable in the panel, but rather choosing not to store them in non-volatile memory for added security.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Storing recipes and logs can be easily done by transferring them to an external USB drive or network location. However, there may be issues with disconnections causing the HMI to not reconnect without a power cycle. To avoid this, a script can be used to read and write a CSV file on a Comfort Panel. Another successful method is storing smaller recipes directly in the PLC MMC as a CSV file, using standard FBs provided by Siemens along with helpful documentation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rob recently shared his success in storing small recipes directly in the PLC MMC as a CSV file using standard FBs provided by Siemens. The help files provided were quite informative. It seems like purchasing a memory card is necessary to store the program inside it, as a factory reset would remove it otherwise.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thewalkerist</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello all! I'm looking for a method to customize the file name when saving it. I want to include the current date in the name of the file, such as 'records_yy_mm_dd.csv'.Can you please advise on how to achieve this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stzo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize a VBS script to assign a file name to an internal STRING tag: Code: SmartTags("strFileName") = "records_" & CStr(DatePart("yyyy",Date)) & "_" & CStr(DatePart("m",Date)) & "_" & CStr(DatePart("d",Date)) & ".csv". Afterwards, employ the generated tag as the 'File Name' parameter for the ExportDataRecords function. This method ensures efficient organization and retrieval of data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your assistance, JesperMP. I will take care of it and provide updates on the outcome. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stzo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Jesper, I am currently utilizing the KTP400 and S7-1200 systems but I am facing a challenge as there is no script function available. I am in search of a solution to incorporate the date into the file name of the CSV file. Specifically, I am utilizing the "export data records" feature to transfer the data into a CSV file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stzo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your PLC efficiency, consider computing the filename within the PLC and transmitting it as a tag for the system function invocation. This step can enhance your system's performance and streamline operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully created a dynamic file naming system for my CSV files by utilizing strings. By extracting the date from the computer's CPU, I construct a string that includes the date, prefix, and suffix required for the file name. This allows me to export data records and save them as ddmmyyyy.csv on a USB drive. Now, I am seeking a method to automate this process instead of manually triggering it by pressing a button. Does anyone have suggestions on how to achieve this automatically?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stzo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When examining tag properties, it is important to locate the "Events" tab. By setting up a system function triggered by a Value Change in a related tag, you can ensure smooth operation. It is advisable to use a trigger bit from the PLC rather than the string tag to avoid potential issues with incomplete filename calculations during HMI updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I save and retain recipe data in TIA Portal Recipe View?
   - To save and retain recipe data in TIA Portal Recipe View, you can utilize retentive memory areas in your program to store the values. This will ensure that the data is not lost when the simulation is closed and reopened.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why are my changes in the Recipe View getting erased when I close and reopen the simulation?</h4>
<p class='text-muted'><strong>Answer:</strong> - The changes in the Recipe View are getting erased because the data is not being saved in a retentive memory area. Make sure to store the values in a way that they are retained even after the simulation is restarted.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. I tried using a data record to store values in the Recipe View, but it didn't update with the changes. What could be the issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the data record is not updating with the changes made in the Recipe View, check if the data record is correctly linked to the Recipe View and if it is configured to update and store values properly. Ensure that the data record is set up to work with the Recipe View functionalities.</p>
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
