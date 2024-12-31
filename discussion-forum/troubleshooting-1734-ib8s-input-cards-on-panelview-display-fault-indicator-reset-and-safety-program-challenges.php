
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have developed a Panelview display showcasing my 1734-IB8S cards, indicating the status of Inputs (on/off) and any past faults on the card or IO channels. The LED colors on the Panelview are white for OFF, green for ON, and red for faults. Pressing the reset button clears the">
    <meta name="keywords" content="troubleshooting 1734-ib8s input cards, panelview display, fault indicator reset, safety program challenges, 1734-ib8s cards, io channels, led colors, reset button, safety program, aoi, d">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-ib8s-input-cards-on-panelview-display-fault-indicator-reset-and-safety-program-challenges">
    <title>Troubleshooting 1734-IB8S Input Cards on Panelview Display: Fault Indicator Reset and Safety Program Challenges | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1734-IB8S Input Cards on Panelview Display: Fault Indicator Reset and Safety Program Challenges | Oxmaint Community">
    <meta property="og:description" content="I have developed a Panelview display showcasing my 1734-IB8S cards, indicating the status of Inputs (on/off) and any past faults on the card or IO channels. The LED colors on the Panelview are white for OFF, green for ON, and red for faults. Pressing the reset button clears the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-ib8s-input-cards-on-panelview-display-fault-indicator-reset-and-safety-program-challenges">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1734-IB8S Input Cards on Panelview Display: Fault Indicator Reset and Safety Program Challenges | Oxmaint Community">
    <meta name="twitter:description" content="I have developed a Panelview display showcasing my 1734-IB8S cards, indicating the status of Inputs (on/off) and any past faults on the card or IO channels. The LED colors on the Panelview are white for OFF, green for ON, and red for faults. Pressing the reset button clears the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1734-ib8s-input-cards-on-panelview-display-fault-indicator-reset-and-safety-program-challenges"
      },
      "headline": "Troubleshooting 1734-IB8S Input Cards on Panelview Display: Fault Indicator Reset and Safety Program Challenges",
      "description": "I have developed a Panelview display showcasing my 1734-IB8S cards, indicating the status of Inputs (on/off) and any past faults on the card or IO channels. The LED colors on the Panelview are white for OFF, green for ON, and red for faults. Pressing the reset button clears the",
      "author": {
        "@type": "Person",
        "name": "kekrahulik"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-08",
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
                <h1 class="text-white">Troubleshooting 1734-IB8S Input Cards on Panelview Display: Fault Indicator Reset and Safety Program Challenges</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">378</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">176</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have developed a Panelview display showcasing my 1734-IB8S cards, indicating the status of Inputs (on/off) and any past faults on the card or IO channels. The LED colors on the Panelview are white for OFF, green for ON, and red for faults. Pressing the reset button clears the red fault indicator. Initially, I used a labor-intensive method with 16 rungs per IO Card in the safety program. To streamline this process, I created an AOI where entering the 1734 card tag generates the necessary DINT. Although successful offline, I encountered a roadblock during real-time operation due to the "Instruction not certified for use in Safety routines" message. It seems that AB does not allow AOIs to be utilized in safety routines. Any suggestions on alternative methods to avoid the manual approach?

- Attempting the standard program was unsuccessful due to safety scope restrictions, preventing reference to the safety card.
- I am unable to transfer data from the Input Card Data Tag to a usable format like DINT or Array.
- While mapping Standard tags to Safety tags is feasible, the reverse is not possible, limiting monitoring of safety tags in the standard program.

Any insights or solutions to overcome this challenge are greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Kekrahulik stated that the code for the safety program revolves around Safety Card Inputs. While conventional logic may check safety inputs effectively, it cannot be used to regulate safety outputs. This demonstrates the importance of implementing specialized safety procedures to ensure proper control and monitoring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce mentioned that while regular logic can handle safety inputs effectively, it cannot be used to control safety outputs. It is important to find a way to reference the Data Type AB:1734_IB8S_Safety2:I:0 for use within an AOI or to copy it to a separate tag that can be utilized in an AOI. When creating an AOI, note that the Datatype can only be an InOut parameter and cannot be used as an Input. This limitation also applies to using it in a standard program. If you encounter issues with this, consider seeking alternative solutions for your programming needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When creating an Add-On Instruction (AOI) in Logix, you may encounter limitations when trying to reference a specific Data Type like AB:1734_IB8S_Safety2:I:0. While AOIs typically only allow this Data Type to be used as an InOut parameter, there is a workaround that involves copying the data to a separate tag within the AOI.

It's possible that the restriction on using the Data Type as an Input parameter could be related to the module tags being forced to be InOut. One solution could be to use a COP instruction to buffer the data into the AOI. For example, you could use "COP Safety2:1:I TestDint 1" in an offline program with 1734-IB8S modules to verify compatibility without errors.

If you want to retain the original bit names, creating a User Defined Type (UDT) and copying the data into that structure could be a useful approach. This method ensures that your inputs are effectively buffered within the AOI for seamless integration into your programming logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted to use a Copy (COP) function to transfer data, but encountered an issue where my card inputs were not all transferring correctly. Despite having all statuses true, only bit 0 of my TestDint was being successfully copied. I experimented with different copy lengths, but the issue persisted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am impressed by the methodology employed by the experts at Rockwell Automation in utilizing Module types to access module state and memory-mapped variables. Although I am unsure of the process myself, I believe that it may be achievable through the use of CIP wizardry.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
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
            <p>When creating safety routines, incorporating AOIs can be extremely beneficial. I have successfully utilized this method multiple times. To designate an AOI as safety-related, simply indicate this in the AOI definition. Within the General tab, locate the Class drop-down menu below the Description field. By default, it is typically set to Standard; ensure to switch it to Safety for optimal results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF mentioned that it is possible to create AOIs for safety procedures, which they have done numerous times. To do this, you need to specify that it is a safety AOI in the AOI definition by selecting "Safety" from the Class drop-down menu under the Description field on the General tab. By default, it is set to Standard but changing it to Safety will allow you to proceed with creating a safety AOI. This information was very helpful and appreciated by the speaker.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that "Safety Components cannot be created or modified via online import." This issue with AB is really frustrating me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I reset the fault indicator on the Panelview display for 1734-IB8S Input Cards?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Pressing the reset button on the Panelview display can clear the red fault indicator for the 1734-IB8S Input Cards.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I encountering issues with utilizing AOIs in safety routines for 1734-IB8S Input Cards on my Panelview display?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "Instruction not certified for use in Safety routines" message suggests that AB does not allow the use of AOIs in safety routines. This limitation may require alternative methods to avoid a manual approach for programming.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I transfer data from the Input Card Data Tag to a usable format like DINT or Array for 1734-IB8S cards?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are facing challenges transferring data formats, consider exploring alternative methods or tools within your programming environment to achieve the desired data conversion.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is it possible to map Standard tags to Safety tags for monitoring safety tags in the standard program with 1734-IB8S cards?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While mapping Standard tags to Safety tags is feasible, the reverse process may not be possible, limiting the ability to monitor safety tags within the standard program. Consider evaluating workarounds or modifications to address this limitation.</p>
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
