
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I was recently tasked with saving backup files for our FactoryTalk View SE HMIs onto a USB drive. I have a few questions regarding this process: 1. What is the distinction between MER and APA files? 2. Is it advisable to backup both file types? 3. Are these files">
    <meta name="keywords" content=".mer files, .apa files, factorytalk view se hmis, backup files, usb drive, file types, archiving process, designated folder, backup process, backup advice, mer vs apa, factorytalk view se backup, file saving">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/difference-between-mer-and-apa-files-for-factorytalk-view-se-hmis">
    <title>Difference Between .MER and .APA Files for FactoryTalk View SE HMIs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Difference Between .MER and .APA Files for FactoryTalk View SE HMIs | Oxmaint Community">
    <meta property="og:description" content="I was recently tasked with saving backup files for our FactoryTalk View SE HMIs onto a USB drive. I have a few questions regarding this process: 1. What is the distinction between MER and APA files? 2. Is it advisable to backup both file types? 3. Are these files">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/difference-between-mer-and-apa-files-for-factorytalk-view-se-hmis">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Difference Between .MER and .APA Files for FactoryTalk View SE HMIs | Oxmaint Community">
    <meta name="twitter:description" content="I was recently tasked with saving backup files for our FactoryTalk View SE HMIs onto a USB drive. I have a few questions regarding this process: 1. What is the distinction between MER and APA files? 2. Is it advisable to backup both file types? 3. Are these files">
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
        "@id": "https://community.oxmaint.com/discussion-forum/difference-between-mer-and-apa-files-for-factorytalk-view-se-hmis"
      },
      "headline": "Difference Between .MER and .APA Files for FactoryTalk View SE HMIs",
      "description": "I was recently tasked with saving backup files for our FactoryTalk View SE HMIs onto a USB drive. I have a few questions regarding this process: 1. What is the distinction between MER and APA files? 2. Is it advisable to backup both file types? 3. Are these files",
      "author": {
        "@type": "Person",
        "name": "MattMatt9"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">Difference Between .MER and .APA Files for FactoryTalk View SE HMIs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">8219</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">311</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I was recently tasked with saving backup files for our FactoryTalk View SE HMIs onto a USB drive. I have a few questions regarding this process:

1. What is the distinction between MER and APA files?
2. Is it advisable to backup both file types?
3. Are these files automatically saved in a designated folder, or do I need to manually initiate an archiving process?

Any guidance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>1. What sets apart MER and APA files?
MER stands for Machine Edition Runtime, a compiled version of an application running on a PV terminal that cannot be edited. On the other hand, APA refers to Application Archive, a zipped version of the development application that is also not editable. Another important file type is MED or Machine Edition Development, which is the file you work on in FactoryTalk View Studio and can be edited. During development, the MED file is converted into a MER file for loading onto the PV, with the option to revert the MER file back to MED. The ability to prevent unauthorized access is crucial for small businesses or individuals.

When sharing a project for review, creating an APA backup can be useful, but sending a MER file can achieve the same outcome. For developers, backing up the MED (APA) is recommended, while users may opt for backing up the MER file for easy PV reloading without additional software.

2. Should I backup both MER and APA files?
Developers should prioritize backing up the MED (APA) file, while backing up the MER file may suffice for users. Although previously, backing up the restricted MER file had limited benefits, the ability to restore MER to a development copy (MED) makes it a valuable backup item and reduces the importance of APA backups.

3. Are MER, APA, and MED files automatically saved or require manual archiving?
MER and APA files can be saved in any desired location on the PC, while MED files must be stored in a specific folder with no option for relocation (making MED backups unnecessary). There are no automated backup processes in place, so manual archiving is necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing valuable information. Can you guide me on how to save MER and APA files? Could you provide steps on how to create these specific file formats?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The APA is created within the Application Manager system, which may seem chaotic but actually functions as a robust program. In the world of manufacturing engineering, the procedure involves compiling the runtime within FactoryTalk View Studio. To access the Application drop-down menu, simply click on Create Runtime Application. It's possible that the process is similar for System Engineering (SE) as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After performing a backup, I navigated to "Tools > Application Manager > Create a Backup" and generated an "apb" file. What is this file format used for?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to SE, there is no direct equivalent in terms of Runtime functionality. Following the steps mentioned by dmroeder will allow you to obtain the APA file. This program was previously known as "Application Manager," although newer versions may refer to it as the "Machine Edition Application Manager" or something similar. You have the option to run it independently or within FT View Studio by accessing it through the Tools menu. Additionally, FT View Studio software can be used to generate Runtime and save it in a location of your choice. If you already have the APA file, using the MER may not be necessary. For further information, RA has a helpful video available on YouTube: https://www.youtube.com/watch?v=7r_LOD4FJbYOG.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for the confusion earlier. When you mentioned APA and MER, I assumed you were referring to Machine Edition. However, you actually mentioned FT View SE. Unlike Machine Edition, SE does not utilize Runtime files and does not have MER files. The backup you created is suitable for SE, utilizing the APB format. Previously, SE utilized an APA format, but they have since transitioned to the newer APB format. This backup is all you need. OG</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for being awesome! Your support means a lot.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In addition to the APA/APB formats, it is important to note that APB is specifically designed for network station applications, while APA remains the preferred format for local station applications. This distinction became evident to me recently as all of my HMIs are used for local stations, which is why I have never encountered an APB file before. Remembering all of these formats can be a bit overwhelming at times.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Clatchet</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost explains the difference between MER and APA files in FactoryTalk View Studio. The Machine Edition Runtime (MER) is a compiled version of the application running on a PV terminal, while the Application Archive (APA) is a zipped version of the development application. The most important file type is the Machine Edition Development (MED) file, which is edited in FactoryTalk View Studio. Developers can create a runtime (MER) file for the PV and convert it back to a development file using a tool. It's crucial for small companies to safeguard their projects by backing up the MED file. Alternatively, users should back up the MER file for easy restoration on a PV. These files can be saved anywhere on a PC manually. Automatic backup does not occur, so it's necessary to archive them manually.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TOPTAB</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the distinction between MER and APA files?</h4>
<p class='text-muted'><strong>Answer:</strong> - MER files are runtime application files used for deploying an application, while APA files are project archive files that store project configuration information in FactoryTalk View SE HMIs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it advisable to backup both MER and APA files?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is advisable to backup both file types for comprehensive data protection and to ensure you have a complete set of files to restore in case of system failure or data loss.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are these files automatically saved in a designated folder, or do I need to manually initiate an archiving process?</h4>
<p class='text-muted'><strong>Answer:</strong> - The files may not be automatically saved in a designated folder. It is recommended to manually initiate an archiving process to ensure regular backups are created and stored in a secure location for easy retrieval when needed.</p>
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
