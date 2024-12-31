
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a hobbyist programmer, I am using RSLogix 5000 (full edition, version V20.01.00) with a 1768-L45 CompactLogix 5345 PLC for a non-life safety project. Recently, I added new rungs in an online edit, but they are showing an error symbol e continuously. Despite knowing that this indicates an error,">
    <meta name="keywords" content="rslogix 5000, 1768-l45 compactlogix 5345 plc, troubleshoot e symbol error, verify rung data, online edit error, error symbol "e", virtual machine issue, string tags, hmi display">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-e-symbol-error-in-rslogix-5000-unable-to-view-verify-rung-data">
    <title>Troubleshooting e Symbol Error in RSLogix 5000: Unable to View Verify Rung Data | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting e Symbol Error in RSLogix 5000: Unable to View Verify Rung Data | Oxmaint Community">
    <meta property="og:description" content="As a hobbyist programmer, I am using RSLogix 5000 (full edition, version V20.01.00) with a 1768-L45 CompactLogix 5345 PLC for a non-life safety project. Recently, I added new rungs in an online edit, but they are showing an error symbol e continuously. Despite knowing that this indicates an error,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-e-symbol-error-in-rslogix-5000-unable-to-view-verify-rung-data">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting e Symbol Error in RSLogix 5000: Unable to View Verify Rung Data | Oxmaint Community">
    <meta name="twitter:description" content="As a hobbyist programmer, I am using RSLogix 5000 (full edition, version V20.01.00) with a 1768-L45 CompactLogix 5345 PLC for a non-life safety project. Recently, I added new rungs in an online edit, but they are showing an error symbol e continuously. Despite knowing that this indicates an error,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-e-symbol-error-in-rslogix-5000-unable-to-view-verify-rung-data"
      },
      "headline": "Troubleshooting e Symbol Error in RSLogix 5000: Unable to View Verify Rung Data",
      "description": "As a hobbyist programmer, I am using RSLogix 5000 (full edition, version V20.01.00) with a 1768-L45 CompactLogix 5345 PLC for a non-life safety project. Recently, I added new rungs in an online edit, but they are showing an error symbol e continuously. Despite knowing that this indicates an error,",
      "author": {
        "@type": "Person",
        "name": "kf4sqb"
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
                <h1 class="text-white">Troubleshooting e Symbol Error in RSLogix 5000: Unable to View Verify Rung Data</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kf4sqb</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">881</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">172</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a hobbyist programmer, I am using RSLogix 5000 (full edition, version V20.01.00) with a 1768-L45 CompactLogix 5345 PLC for a non-life safety project. Recently, I added new rungs in an online edit, but they are showing an error symbol "e" continuously. Despite knowing that this indicates an error, I am unable to identify the issue using the "verify rung" function. The software is being used in a virtual machine, which may be causing the error details to not display properly. The rung in question involves the use of string tags to display the day of the week on an HMI. This is a new experience for me, and I may not fully grasp how to work with string tags. I am seeking assistance in resolving the error indicated by the "e" symbol on the rung. Any insights on what may be wrong with the setup are greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible for the MOV instruction to transfer string data on a PLC model? You might need to consider using the COP instruction or one of the available string instructions for this task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access errors in the ladder editor, navigate to the view menu and select the option to display errors. This window can be pinned in place for easy reference. If you encounter the error "Missing reference to array element," it may be due to the complexity of working with strings. Ensure you are addressing the array correctly, such as DOW_Tue.DATA[0]. Alternatively, consider using a COP instruction for simplicity, like this code: COP DOW_Tue.DATA[0] Day_of_Week.DATA[0] DOW_Tue.LEN. Additionally, you may need to transfer the length of DOW_Tue to Day_of_Week with this code: MOV DOW_Tue.LEN Day_of_Week.LEN.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, I don't have a PLC at v20 to capture screenshots while online. However, the sequence you are searching for is "accept" -> "test" -> "assemble" (if memory serves me correctly). I am unsure about which version introduced the option to "assemble all" in just one step. Essentially, the "e" rungs have not yet been accepted. Additionally, as per @drbitboy, there was a shift at some point from MOV to COP for STRING data types. In more recent programs/controllers, I have been using COP, whereas I recall using MOV in earlier versions. Your rung could very well be perfectly acceptable. Another suggestion is to navigate to the "View" menu and confirm that the "Errors" window is visible. This feature should provide information on any compilation issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out this website (DISCLAIMER: this link may not be safe for OkiePC users).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 recommended checking the "View" menu to ensure the "Errors" window is open, as it can help identify any issues the compiler may have. Despite toggling it on and off, there were no visible errors. Thank you to everyone for the suggestions, I will explore those options shortly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kf4sqb</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the toggle is activated, navigate to the bottom bar of the screen to locate the "Error" tab. Simply click on it to keep it displayed if desired. (Please note that this information is based on the v20 version and may have changed in subsequent updates.) Explore this function in detail to address any errors that may arise during your browsing experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>On my L45 system running version 20.05, I encountered an error when entering the offline logic as described. However, after changing MOV to COP, the error disappeared without any other modifications. Furthermore, it is possible to resize the Error window, with some users reducing it to the point of being barely noticeable upon opening. To reset the error window and toolbars to their default appearance, simply click on the View Menu while the ladder is open and select Toolbars. Then, click on Restore Factory Toolbar layout. OG.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Original Gangster, that idea is fantastic. I am currently utilizing a virtual machine (VM) with the software installed, and I have switched to a new host PC from my previous one (VM stored on an external drive). Additionally, the VM was acquired from a third party, so it is highly likely that issues have arisen due to the various alterations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kf4sqb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To reset default settings in the software, try pressing and holding down the left control and shift keys while opening the program from the shortcut. Keep the buttons held until the software has fully loaded. This process can help revert the software to its original settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost shared: While working on my Level 45 system running version 20.05, I encountered an error when inputting the logic offline. Switching from MOV to COP resolved the issue, without any further modifications. I decided to give it a try and found success with the same adjustment. I typically rely on the more traditional MOV command, but it seems I need to modernize my programming skills. I will address the error window at a later time. I appreciate everyone's assistance! Being a hobbyist, I continue to expand my knowledge with each new feature I integrate into my program. My PLC manages operations on my covered and screened front porch, such as controlling ceiling fans (including speed) and lights, with extensive time control settings. I am currently developing a "custom Screensaver" to display the time and day of the week on the Panelview+6 700 interface connected to the PLC. This hobby provides me with endless opportunities for creativity and learning, as the capabilities of a PLC are only limited by one's imagination.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kf4sqb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This application seems like a fantastic tool for exploration and education. OG</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Original Gangster, your suggestion to reset the original toolbar layout resolved my problem. I'm not sure how it disappeared, possibly during the transfer of the virtual machine to a different computer. Thank you once more for your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kf4sqb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the necessity of using COP instead of MOV is crucial for efficient PLC programming. MOV is limited to atomic datatypes like DINT, REAL, and INT, while COP can operate on any datatype. MOV may seem smarter as it tries to interpret the programmer's intentions, but it can lead to unpredictable results, especially when dealing with non-atomic datatypes like strings.

Strings consist of a length integer and an array of character integers, making them non-atomic. MOV's intelligence may cause it to mishandle string operations, whereas COP's simplicity allows it to effectively work with any datatype, including strings. By blindly transferring binary values from source to destination memory registers, COP ensures compatibility regardless of the data being handled.

To illustrate the difference, compare performing a MOV versus a COP between a DINT and a REAL. Despite both being 32-bit datatypes, the behavior will vary significantly due to MOV's interpretation and COP's straightforward data transfer approach. It's essential to grasp the underlying structure of datatypes to avoid unexpected outcomes in PLC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kf4sqb shared that following OG's suggestion to reset the factory toolbar layout resolved their issue. It's unclear how it became hidden, but it may have occurred during the transfer of the VM from one computer to another. This bug was prevalent prior to Rockwell's shift to the Visual Studio-based Studio 5000, causing frustration.  It is a common issue that can persist even after restarting the editor. In such cases, converting to an L5K and back or uploading from the PLC may be necessary for a solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the difference between the COP and MOV instructions in PLC programming is crucial for optimal performance. While MOV is limited to atomic datatypes like DINT, REAL, and INT, COP can operate on any datatype. MOV is more intelligent and can interpret the programmer's intentions, allowing for conversions between different datatypes like REAL and DINT. However, this practice is not recommended for professional PLC programmers.

On the other hand, COP is a simpler instruction that moves binary values from the source to the destination memory register without considering the datatype. This makes it suitable for handling strings, which consist of a length integer and an array of character integers. Testing the behavior of MOV and COP with different datatypes like DINT and REAL will showcase their distinct functionalities.

In conclusion, while MOV offers smart functionality, COP's versatility in handling various datatypes makes it a valuable tool in PLC programming. Understanding the underlying differences between these instructions is essential to avoid unexpected behavior in your PLC system. Thank you, JLand, for providing such insightful explanations on this topic. Your detailed breakdown of the functionality of COP and MOV is truly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kf4sqb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What was the software development landscape like prior to the introduction of Visual Studio?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many users encountered a frequent issue prior to Rockwell switching to the Visual Studio-based Studio 5000 software. This bug, which persisted even after restarting the editor, often necessitated converting to an L5K file or uploading from the PLC to resolve. The question arises: what was the previous programming environment like before Visual Studio?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am facing challenges with my memory recall regarding a technical issue. I distinctly recall utilizing strings within an AOI in the past and then integrating the AOI into a more recent version of Logix, necessitating a conversion from MOVs to COPs. However, I am unable to replicate the same issue outside of an AOI. Reverting back to older versions such as v19 still mandates the use of COP for string tags, as anticipated. Even when revisiting RSLogix 500, the same requirement for COP persists. Although I cannot pinpoint the exact moment of transitioning from MOV to COP, the memory of encountering this obstacle remains vivid.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why am I seeing an error symbol "e" on my rung in RSLogix 5000 despite using the "verify rung" function?</h4>
<p class='text-muted'><strong>Answer:</strong> - The error symbol "e" indicates a problem with the rung, but sometimes the exact issue may not be identified by the software. It's important to carefully review your logic and configuration to troubleshoot the error.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Could using RSLogix 5000 in a virtual machine affect error display and troubleshooting?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, using RSLogix 5000 in a virtual machine may sometimes lead to display issues with error details. It's recommended to ensure proper settings and compatibility when working with virtual environments.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot errors related to string tags in RSLogix 5000 rungs?</h4>
<p class='text-muted'><strong>Answer:</strong> - When working with string tags in RSLogix 5000, ensure correct data types, lengths, and configurations are used. Reviewing the logic related to string manipulation and HMI display can help identify potential issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Any tips for resolving errors indicated by the "e" symbol on rungs in RSLogix 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - Double-check your logic, verify tag configurations, review any recent changes made, and consider consulting documentation or online resources for troubleshooting tips specific to RSLogix 5000 error symbols like "e".</p>
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
