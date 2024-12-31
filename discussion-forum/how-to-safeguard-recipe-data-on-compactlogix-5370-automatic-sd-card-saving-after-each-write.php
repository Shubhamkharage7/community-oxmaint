
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing a 1769-L16ER-BB1B controller and storing recipe data in an array of user-defined data types. It is essential for disaster recovery that the recipe data is preserved in case of controller failure. Is it possible to directly save the array to the SD card? Ideally, I would">
    <meta name="keywords" content="compactlogix 5370, 1769-l16er-bb1b, recipe data, disaster recovery, sd card saving, array data storage, automatic saving, controller failure, tag values, program data, logic implementation, knowledgebase article">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-safeguard-recipe-data-on-compactlogix-5370-automatic-sd-card-saving-after-each-write">
    <title>How to Safeguard Recipe Data on CompactLogix 5370: Automatic SD Card Saving After Each Write | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Safeguard Recipe Data on CompactLogix 5370: Automatic SD Card Saving After Each Write | Oxmaint Community">
    <meta property="og:description" content="I am utilizing a 1769-L16ER-BB1B controller and storing recipe data in an array of user-defined data types. It is essential for disaster recovery that the recipe data is preserved in case of controller failure. Is it possible to directly save the array to the SD card? Ideally, I would">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-safeguard-recipe-data-on-compactlogix-5370-automatic-sd-card-saving-after-each-write">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Safeguard Recipe Data on CompactLogix 5370: Automatic SD Card Saving After Each Write | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing a 1769-L16ER-BB1B controller and storing recipe data in an array of user-defined data types. It is essential for disaster recovery that the recipe data is preserved in case of controller failure. Is it possible to directly save the array to the SD card? Ideally, I would">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-safeguard-recipe-data-on-compactlogix-5370-automatic-sd-card-saving-after-each-write"
      },
      "headline": "How to Safeguard Recipe Data on CompactLogix 5370: Automatic SD Card Saving After Each Write",
      "description": "I am utilizing a 1769-L16ER-BB1B controller and storing recipe data in an array of user-defined data types. It is essential for disaster recovery that the recipe data is preserved in case of controller failure. Is it possible to directly save the array to the SD card? Ideally, I would",
      "author": {
        "@type": "Person",
        "name": "technolog"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-17",
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
                <h1 class="text-white">How to Safeguard Recipe Data on CompactLogix 5370: Automatic SD Card Saving After Each Write</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">9313</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">393</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing a 1769-L16ER-BB1B controller and storing recipe data in an array of user-defined data types. It is essential for disaster recovery that the recipe data is preserved in case of controller failure. Is it possible to directly save the array to the SD card? Ideally, I would like to save it automatically after each write to the array. If it is possible to save the tag values along with the program, then saving the entire data set after each array write may be the best solution. Can someone demonstrate how to accomplish this within the logic or guide me to a detailed article in the Knowledgebase? I have already searched the Knowledgebase but was unable to find the information I require.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Yesterday, I came across a PDF that didn't seem to match what I needed at first glance. However, upon closer inspection today, I discovered that it is precisely the information I was searching for - a comprehensive guide on Memory Card Usability with Logix5000 Controllers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need help finding a downloadable link for the application code mentioned in the PDF that explains how to read and write data to NVM. Despite searching through Rockwell's sample applications and using Google, I have not been able to find it. Any suggestions on where to locate it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When exploring the pre-installed programs in Logix500/Studio500/LogixDesigner, you'll come across an example program designed for writing tag values to an SD card. The program, like CF_ReadWrite.acd, serves this purpose. I've had the opportunity to work with it and have created a streamlined version that caters better to my specific needs. I will have access to it again next week and am willing to share it with you upon request.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the files you need are already stored in your system. You can find them under the following directories: C:\RSLogix 5000\Projects\Samples\ENU\v17\Rockwell Automation or C:\RSLogix 5000\Projects\Samples\ENU\v16\Rockwell Automation. Look for the manual Logix-AP007B-EN-P.pdf in these folders. Additionally, you can also find sample files such as CF_Read_Write.ACDC and CF_Read_Write_Example.ACD in the same location. Please note that V16 and V17 only support ControlLogix, while V18 supports CompactLogix as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>labeledas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you both for your input. After coming across Knowledgebase article 28539, I reached the same conclusion. It's surprising that this information wasn't included in the manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Technolog pointed out the lack of information in the manual, leaving users puzzled. It's surprising that such an important detail wasn't included.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>labeledas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Attention all Logix5000 beginners! Are you wondering how to integrate the CF_Read_Write.ACD logic file into your project? Is it possible to open their .ACD file and export the program as *.L5X to import it as a separate program in your project? Can you utilize it within your own program, or do you need to export/import each routine individually into your existing program? Let's explore the best approach for incorporating external logic files into your Logix5000 project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>New to Logix5000 programming and unsure about incorporating CF_Read_Write.ACD logic into your project? You can do so by opening their .ACD file and exporting the program (*.L5X) to import it as a separate program. This allows you to use it within your own program. Alternatively, you can export/import each routine individually into your existing program. To streamline the process, consider using Ctrl-C : Ctrl-V or Drag and Drop functionalities with both programs open in separate Logix/Studio 5000 instances. This will make the integration smoother and more efficient.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, daba. I imported the sample program into my project as a separate scheduled task, which efficiently added all the necessary routines and data types to my existing project. The program was designed with controller tags, making it easy for me to access the required tags from my program. However, the program is currently limited to handling a maximum file size of 4,500 bytes. Fortunately, the manual provides detailed instructions on how to modify it to accommodate up to 65,000 bytes, which is the size I need to work with in my project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The directory for local samples has been updated to C:\Users\Public\Documents\Studio 5000\Samples, ensuring easy access and organization for Studio 5000 users. Explore a variety of sample projects in this folder to enhance your automation programming skills.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>votecoffee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for instructions on adding CF card functionality to your Rockwell PLC program? I have created a series of Add-On Instructions (AOIs) based on Rockwell's sample program, each one focusing on a specific command: CF_Card_Present, CF_Card_Create_Delete_File, and CF_Card_Read_Write. If you're interested in using these AOIs, please reach out to me. While it was a time-consuming and nerve-wracking process, I enjoyed creating them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JensonScarrow</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JensonScarrow created a comprehensive set of Add On Instructions (AOIs) based on Rockwell's sample program, focused on different CF card commands like CF_Card_Present, CF_Card_Create_Delete_File, and CF_Card_Read_Write. If you're interested in these AOIs, please reach out. Although it was a time-consuming and challenging task, JensonScarrow enjoyed working on it. Your effort is greatly appreciated, thank you for sharing your work!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Davis</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I save recipe data directly to an SD card using a CompactLogix 5370 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to save data to an SD card in a CompactLogix 5370 controller. You can achieve this by configuring the controller to write the data to the SD card after each array write.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it feasible to automatically save recipe data to the SD card after each write with a 1769-L16ER-BB1B controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is possible to set up automatic saving of recipe data to the SD card after each write with a 1769-L16ER-BB1B controller. This can help ensure that the data is preserved in case of a controller failure.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I save tag values along with the program on a CompactLogix controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - To save both tag values and the program on a CompactLogix controller, you can consider saving the entire data set after each array write. This can be an effective solution for safeguarding recipe data and ensuring disaster recovery.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a guide or detailed article available on how to save recipe data to an SD card with a CompactLogix controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - While searching the Knowledgebase may not have yielded the desired information, you can refer to the user manual or programming guides provided by the controller's manufacturer for detailed instructions on saving recipe data to an SD card using a CompactLogix</p>
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
