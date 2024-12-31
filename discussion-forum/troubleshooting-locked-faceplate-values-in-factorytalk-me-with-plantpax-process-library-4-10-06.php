
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing some challenges with modifying faceplate values within FactoryTalk ME edition using the PlantPAx process library version 4.10.06. The editing fields on the faceplate are all grayed out, except for the security area field where I am using the default area01. This is a">
    <meta name="keywords" content="troubleshooting, locked faceplate values, factorytalk me, plantpax process library, version 06, studio 5000, factorytalk view machine edition, cpu 1769-l33er, editing fields, security">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-locked-faceplate-values-in-factorytalk-me-with-plantpax-process-library-4-10-06">
    <title>Troubleshooting Locked Faceplate Values in FactoryTalk ME with PlantPAx Process Library 4.10.06 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Locked Faceplate Values in FactoryTalk ME with PlantPAx Process Library 4.10.06 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing some challenges with modifying faceplate values within FactoryTalk ME edition using the PlantPAx process library version 4.10.06. The editing fields on the faceplate are all grayed out, except for the security area field where I am using the default area01. This is a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-locked-faceplate-values-in-factorytalk-me-with-plantpax-process-library-4-10-06">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Locked Faceplate Values in FactoryTalk ME with PlantPAx Process Library 4.10.06 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing some challenges with modifying faceplate values within FactoryTalk ME edition using the PlantPAx process library version 4.10.06. The editing fields on the faceplate are all grayed out, except for the security area field where I am using the default area01. This is a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-locked-faceplate-values-in-factorytalk-me-with-plantpax-process-library-4-10-06"
      },
      "headline": "Troubleshooting Locked Faceplate Values in FactoryTalk ME with PlantPAx Process Library 4.10.06",
      "description": "Hello everyone, I am currently facing some challenges with modifying faceplate values within FactoryTalk ME edition using the PlantPAx process library version 4.10.06. The editing fields on the faceplate are all grayed out, except for the security area field where I am using the default area01. This is a",
      "author": {
        "@type": "Person",
        "name": "Rare_Pufferfish"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">Troubleshooting Locked Faceplate Values in FactoryTalk ME with PlantPAx Process Library 4.10.06</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Rare_Pufferfish</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2818</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">221</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing some challenges with modifying faceplate values within FactoryTalk ME edition using the PlantPAx process library version 4.10.06. The editing fields on the faceplate are all grayed out, except for the security area field where I am using the default "area01". This is a new issue for me as in previous projects with older software versions, entering the security area would unlock all editing fields.

The software versions being used are Studio 5000 version 35.00.00, FactoryTalk View Machine Edition (ME) version 13.00.00, PlantPAx process library version 4.10.06, and CPU 1769-L33ER. 

During testing of my PlantPAx test object, I am encountering warnings such as "Item '[HMI]Program:XXX.M1_ResInh.HMI_Type' is unresolved in the processor on route CompactLogix at 192.168.50.40". Similar warnings appear for other items as well. I have verified the compatibility using the Rockwell compatibility tool and the communication between the PLC and HMI seems to be working fine.

Although I am able to change PlantPAx object values in Studio 5000 under instruction logic, I would prefer to make these changes directly within the FactoryTalk runtime application. All PlantPAx objects are assigned to "area01" in Studio 5000. I have ensured that all security codes are enabled during runtime and have initiated the "copy from design to runtime" process for the PLC processor via the FactoryTalk Linx communication device shortcut.

If you require any more information for troubleshooting, please feel free to reach out. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you a member of the user group area01? And does your user account belong to that group?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cardosocea asked if there is a user group named "area01" and if the user is a part of that group. I do not have a user group specifically labeled as "area01." Instead, I refer to the manual 'proces-rm002' in Chapter 2 for configuring HMI security. You can find the manual at https://literature.rockwellautomation.com/idc/groups/literature/documents/rm/proces-rm002_-en-p.pdf. My user, "OE_ADMIN," is assigned to all user groups.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rare_Pufferfish</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Did you overlook this crucial step? In your Logix code, it is essential to assign an area to each object instance using the tag member Cfg_Area. To ensure proper permissions, two user groups need to be created in the FactoryTalk directory for every area: '{cfg_Area}_Advanced' and '{cfg_Area}_Basic'. These groups play a vital role in regulating access to faceplates for the objects. For detailed instructions, refer to the manual section "Create Area User Groups." We apologize for any confusion caused earlier.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you very much for your understanding. I sincerely apologize for overlooking the crucial information in the manual. It seems I may have skimmed through that chapter too hastily.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rare_Pufferfish</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully completed three PlantPAX systems and will soon be starting on my fourth, but I always seem to miss something each time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>cardosocea inquired, "Are you truly sure you didn't miss this crucial step? Make sure to refer to the manual for guidance on 'Creating Area User Groups.'" Despite the sarcastic tone earlier, I appreciate your post for resolving this issue that drove me crazy and helped me regain my sanity. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patjdixon</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Developing with PlantPAX can be a time-consuming process without the use of Application Code Manager. LOL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are the editing fields on the faceplate grayed out in FactoryTalk ME with PlantPAx process library 4.10.06?</h4>
<p class='text-muted'><strong>Answer:</strong> - The editing fields on the faceplate may be grayed out due to the security area field being set to "area01", which might not be unlocking all editing fields as expected in the newer software version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I resolve warnings like "Item '[HMI]Program:XXX.M1_ResInh.HMI_Type' is unresolved in the processor"?</h4>
<p class='text-muted'><strong>Answer:</strong> - To resolve such warnings, ensure that the compatibility between the PLC and HMI is verified using the Rockwell compatibility tool, and check the communication setup between the devices to address any unresolved items.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to change PlantPAx object values directly within the FactoryTalk runtime application?</h4>
<p class='text-muted'><strong>Answer:</strong> - While changes to PlantPAx object values can be made in Studio 5000 under instruction logic, direct modifications within the FactoryTalk runtime application may require ensuring all security codes are enabled during runtime and initiating the "copy from design to runtime" process for the PLC processor via FactoryTalk Linx communication device shortcut.</p>
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
