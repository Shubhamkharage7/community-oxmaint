
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have a query regarding a code snippet I received from ProSoft support. The example they sent me includes the following instructions: XIC MNETC.DATA.WriteData[0].0 BST OTL MotorStart NXB OTU MNETC.DATA.WriteData[0].0 BND. While I understand the functions of XIC, OTL, and OTU, I am unsure about BST and">
    <meta name="keywords" content="controllogix, code, deciphering, bst instruction, bnd instruction, xic, otl, otu, rockwell programmer, prosoft support, mnetc, data writedata, motorstart nxb, rung interpretation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-controllogix-code-deciphering-bst-and-bnd-instructions">
    <title>Understanding ControlLogix Code: Deciphering BST and BND Instructions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding ControlLogix Code: Deciphering BST and BND Instructions | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have a query regarding a code snippet I received from ProSoft support. The example they sent me includes the following instructions: XIC MNETC.DATA.WriteData[0].0 BST OTL MotorStart NXB OTU MNETC.DATA.WriteData[0].0 BND. While I understand the functions of XIC, OTL, and OTU, I am unsure about BST and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-controllogix-code-deciphering-bst-and-bnd-instructions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding ControlLogix Code: Deciphering BST and BND Instructions | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have a query regarding a code snippet I received from ProSoft support. The example they sent me includes the following instructions: XIC MNETC.DATA.WriteData[0].0 BST OTL MotorStart NXB OTU MNETC.DATA.WriteData[0].0 BND. While I understand the functions of XIC, OTL, and OTU, I am unsure about BST and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-controllogix-code-deciphering-bst-and-bnd-instructions"
      },
      "headline": "Understanding ControlLogix Code: Deciphering BST and BND Instructions",
      "description": "Hello everyone, I have a query regarding a code snippet I received from ProSoft support. The example they sent me includes the following instructions: XIC MNETC.DATA.WriteData[0].0 BST OTL MotorStart NXB OTU MNETC.DATA.WriteData[0].0 BND. While I understand the functions of XIC, OTL, and OTU, I am unsure about BST and",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-11",
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
                <h1 class="text-white">Understanding ControlLogix Code: Deciphering BST and BND Instructions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">497</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">50</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have a query regarding a code snippet I received from ProSoft support. The example they sent me includes the following instructions: XIC MNETC.DATA.WriteData[0].0 BST OTL MotorStart NXB OTU MNETC.DATA.WriteData[0].0 BND. While I understand the functions of XIC, OTL, and OTU, I am unsure about BST and BND. I am not a full-fledged Rockwell programmer, so I am seeking clarification on how to interpret these commands within a rung. I have tried searching through my own notepad files to no avail. Any insights or guidance would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To easily copy and paste a rung with a branch, simply double click on the rung and then paste it into the designated text field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Give this a shotE.g.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy suggested trying a different search strategy to find the desired results. He attempted to search using the BST BND keywords but did not have any success. Despite his usual proficiency in using Google, he could not find the information he was looking for. It appears to be a Logix 500 structure, but he is unsure of its presence in Logix 5000/ Logix Designer. Is he overlooking something, or is this information not available in the newer software versions?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand the concept of the text zone now. It differs from simply copying and pasting the rung in Notepad. Thanks for helping me solve the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this text zone, the GX_I_JB16_80DE_LO output is controlled by a combination of input signals including Local:2:I.Data[5].16, SIM_ON, SIM_JB16_S00.15, and SIM_ON. The operation is dictated by the logic sequence: XIO Local:2:I.Data[5].16, XIO SIM_ON, followed by XIC SIM_JB16_S00.15, and then XIC SIM_ON, before finally being transferred to the output coil GX_I_JB16_80DE_LO.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In the message, dalporto mentioned XIC MNETC.DATA.WriteData[0].0 BST OTL MotorStart NXB OTU MNETC.DATA.WriteData[0].0 BND. When analyzing the code snippet MNETC.DATA.WriteData[0].0 for MotorStart, there seems to be a discrepancy as it is using .WriteData instead of .ReadData. This raises questions about the system in its entirety.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>With his assistance, I am configuring the Modbus ProSoft Pass-Through feature to enable direct control from Intouch on the Write function, allowing me to reset bits from the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the context of PLC programming, the use of .WriteData instead of .ReadData may seem unconventional to some. This could be attributed to the system's setup where data is being transmitted from the PLC to other devices. Another possibility is that the programmer has opted to utilize write data and read data commands for interfacing with the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Studio 5000 (or RSLogix 5000), when manually entering rungs using the command line edit bar, you can choose between ASCII Text and Neutral Text. The ASCII Text option allows you to input codes like those in the Notepad section, while Neutral Text accepts codes from the Text zone. Please note that BST, NXB, and BND cannot be dragged into the rung like XIC, XIO, and OTE instructions. Instead, if you drag a branch onto a rung, the BST and BND should appear in the command line edit bar. Additionally, for every branch added, there should be an NXB. ASCII Text does not require a semi-colon at the end of the line, whereas Neutral text does. 

Code legend: 

BST - Branch Start
NXB - Next Branch
BND - Branch End

Make sure to choose the correct text format based on your input method and pay attention to the specific syntax of each format.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the function of the BST instruction in ControlLogix programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - The BST instruction in ControlLogix is used to compare two values and set a bit if the source is true.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can you explain the purpose of the BND instruction in ControlLogix programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - The BND instruction in ControlLogix is used to perform a binary AND operation between two values and store the result in a destination.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How do you interpret the BST and BND instructions within a rung in a ControlLogix program?</h4>
<p class='text-muted'><strong>Answer:</strong> - In a ControlLogix program, the BST instruction is typically followed by two input conditions, and it sets a bit if the conditions are true. The BND instruction, on the other hand, performs a binary AND operation between two values and stores the result in a specified destination.</p>
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
