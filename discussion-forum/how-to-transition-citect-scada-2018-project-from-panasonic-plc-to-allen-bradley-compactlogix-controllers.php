
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on transitioning a Citect SCADA 2018 project from a Panasonic PLC (programmed in FPwin Pro 6) to Allen Bradley CompactLogix controllers (running Studio 5000 v36). During the translation process, tag names for push-buttons and value readouts have changed. I am looking for guidance">
    <meta name="keywords" content="citect scada 2018, panasonic plc, allen bradley compactlogix, fpwin pro 6, studio 5000 v36, tag names, push-buttons, value readouts, project transition, tag export, tag import, variable">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-transition-citect-scada-2018-project-from-panasonic-plc-to-allen-bradley-compactlogix-controllers">
    <title>How to Transition Citect SCADA 2018 Project from Panasonic PLC to Allen Bradley CompactLogix Controllers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Transition Citect SCADA 2018 Project from Panasonic PLC to Allen Bradley CompactLogix Controllers | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on transitioning a Citect SCADA 2018 project from a Panasonic PLC (programmed in FPwin Pro 6) to Allen Bradley CompactLogix controllers (running Studio 5000 v36). During the translation process, tag names for push-buttons and value readouts have changed. I am looking for guidance">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-transition-citect-scada-2018-project-from-panasonic-plc-to-allen-bradley-compactlogix-controllers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Transition Citect SCADA 2018 Project from Panasonic PLC to Allen Bradley CompactLogix Controllers | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on transitioning a Citect SCADA 2018 project from a Panasonic PLC (programmed in FPwin Pro 6) to Allen Bradley CompactLogix controllers (running Studio 5000 v36). During the translation process, tag names for push-buttons and value readouts have changed. I am looking for guidance">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-transition-citect-scada-2018-project-from-panasonic-plc-to-allen-bradley-compactlogix-controllers"
      },
      "headline": "How to Transition Citect SCADA 2018 Project from Panasonic PLC to Allen Bradley CompactLogix Controllers",
      "description": "Hello everyone, I am currently working on transitioning a Citect SCADA 2018 project from a Panasonic PLC (programmed in FPwin Pro 6) to Allen Bradley CompactLogix controllers (running Studio 5000 v36). During the translation process, tag names for push-buttons and value readouts have changed. I am looking for guidance",
      "author": {
        "@type": "Person",
        "name": "BrandonC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">How to Transition Citect SCADA 2018 Project from Panasonic PLC to Allen Bradley CompactLogix Controllers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BrandonC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">286</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">377</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on transitioning a Citect SCADA 2018 project from a Panasonic PLC (programmed in FPwin Pro 6) to Allen Bradley CompactLogix controllers (running Studio 5000 v36). During the translation process, tag names for push-buttons and value readouts have changed. I am looking for guidance on how to create a new project with a similar layout to the one used with the Panasonic PLC for the Allen Bradley PLC.

I have tried exporting tags from Studio 5000 as a .csv file and importing it into Citect Studio's "variables", but I am encountering an error stating "one or more columns in the csv file do not match the variable database headers." I acknowledge that the differences in variable names may pose challenges in seamlessly switching over, but this is how the project was handed to me midway through development. Any insights or suggestions would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I noticed you didn't respond to my comment on your /r/plc post recently. It seems that older versions of Citect used to store all tags in a DBF file. If this is still the case, you can create a script in a familiar language like Python to iterate through your CSV file and update the DBF file. Based on your comment, it appears Citect Studio now allows for importing CSV files to update tags (which wasn't possible in the old version I used). To ensure successful updating, check the formatting and columns of the CSV files. You can export some tags from Citect Studio to CSV to analyze the layout and columns, and then work on aligning your Rockwell Tag CSV with the Citect CSV. This alignment process can be done manually in Excel, or you may find it easier to write a script for a quick conversion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vadoola</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If Citech has the capability to export data to a CSV file, the process can be simplified by exporting the data and manually updating the IDs linking to Panasonic addresses to Rockwell addresses. It may not be necessary to export the Logix Tag database, as many of the tags may not be utilized in the HMI. Importing all tags is not recommended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, robertmee mentioned that if Citech has the capability to export to a CSV file, it would be beneficial to manually update the IDs linking to Panasonic addresses with Rockwell addresses (tags). It may not be necessary to export the entire Logix Tag database since most tags may not be utilized in the HMI and importing all of them would not be ideal. Instead, the focus could be on updating only the necessary tags in the script. Depending on factors such as the number of HMI tags, scripting knowledge, and the ease of matching Rockwell CSV tags with Citect Tags, manual updating could still be the preferred method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vadoola</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Vadoola pointed out that my comment on the /r/plc post was left unanswered. In older versions of Citect, all tags were stored in a DBF file. If this is still the case, consider creating a script in a familiar language like Python to iterate over a CSV and update the DBF. It seems that Citect Studio can import CSVs for tag updates, so ensure the formatting and columns are correct. Export some tags from Citect Studio to CSV to understand the layout and columns, and then adjust your Rockwell Tag CSV accordingly. You may manually adjust in Excel or consider scripting for conversion.

Regarding re-mapping Panasonic to Citect tags from the DBF file, there are approximately 525 tags that need to be updated. While manual updating may be time-consuming, considering factors like the number of HMI tags, scripting knowledge, and matching Rockwell CSV tags with Citect tags is essential. Upon comparing the naming conventions between Citect DBF and Studio 5000 tag exports, inconsistencies like abbreviations and unused variables may pose challenges for scripting.

robertmee suggested manually changing the IDs in a CSV exported from Citect that point from Panasonic to Rockwell addresses. Exporting Logix Tag database from Studio 5000 can help identify tags used in the HMI for alignment. While obtaining a CSV from Citect is challenging, editing the DBF file in Excel and cutting out unnecessary tags from the Logix Tag database CSV may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BrandonC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your feedback on my recent posts. I shared a similar post in hopes of gathering more insights, but I've been preoccupied with issues on our production line, delaying my responses. If you haven't seen it yet, no worries. Upon comparing the Citect DBF and Studio 5000 code, I noticed inconsistencies in tag naming conventions. Do you have a mapping method to correlate old tags with new ones? You could consider creating a script to automate this process, replacing tags based on a CSV file. While editing the DBF file in Excel seems feasible, please note that Excel can open DBF files but may not save them back in the same format without a specific plugin. If needed, there are various free DBF editors available online for assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vadoola</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Vadoola inquired about the possibility of mapping old tags to new tags programmatically. It seems like a script is needed to automate the process of replacing old tags like cit_pana_pmp1_run with new tags like cit_rockw_pmp1_run_cmd. This task can be straightforward if a clear mapping is established. However, there is currently no file available that provides this mapping for the two programs' tags.

At the moment, efforts are being made to ensure that the transition to the new code is error-free, after taking over from the previous programmer. Despite the code being nearly complete, some elements were overlooked and need to be addressed. Once a CSV or Excel mapping document is obtained, a script will be developed to streamline the process.

Considering previous experience with programming languages such as Python, C++, and C#, the preference is leaning towards Python due to its versatility and relevance for future projects. Learning Python would not only benefit the current task at hand but also align with upcoming work and personal endeavors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BrandonC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When looking for a simple and efficient solution for a quick script, Python is often the preferred choice. This is due to its user-friendly nature, numerous libraries available for tasks such as reading CSV and DBF files, and the emphasis on quick development over execution speed. While personal preferences may vary, Python remains a popular choice among developers for its ease of use and versatility. Whether you prefer Python or another language like C++, it is important to choose the one in which you are most comfortable and can work with efficiently. Python is widely used for scripting purposes, making it a valuable skill to have in your programming toolkit. Its popularity stems from its accessibility and quick learning curve, making it a go-to language for many developers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vadoola</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I transition a Citect SCADA 2018 project from a Panasonic PLC to Allen Bradley CompactLogix controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To transition the project, you can start by exporting tags from Studio 5000 as a .csv file and then importing it into Citect Studio's "variables." However, be prepared for potential challenges due to differences in variable names between the two PLC systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if I encounter an error stating "one or more columns in the csv file do not match the variable database headers" while importing tags into Citect Studio?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you face this error, it indicates a mismatch between the columns in the .csv file and the variable database headers. Check and ensure that the columns in the .csv file align correctly with the variable database headers in Citect Studio.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I create a new project in Citect SCADA with a layout similar to the one used with the Panasonic PLC when transitioning to Allen Bradley CompactLogix controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When creating a new project, consider mapping the tag names for push-buttons and value readouts to match the layout used with the Panasonic PLC. This mapping process will help in maintaining a similar project layout with the Allen Bradley PLC.</p>
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
