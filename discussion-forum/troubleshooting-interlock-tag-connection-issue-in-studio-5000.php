
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good morning! Today, I made an effort to enhance communication between several of our Programmable Logic Controllers (PLCs). Everything seemed to be working smoothly, except for a minor issue. I encountered an invalid connection fault between two PLCs and Im struggling to identify the mistake. I updated the Ethernet">
    <meta name="keywords" content="troubleshooting interlock tag connection issue, studio 5000 plc, ethernet configuration modules, 1756-l72s safety controller, 1756-l83e controller, invalid connection fault, ethernet bridge connection, plc tag setup, module fault">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-interlock-tag-connection-issue-in-studio-5000">
    <title>Troubleshooting Interlock Tag Connection Issue in Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Interlock Tag Connection Issue in Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="Good morning! Today, I made an effort to enhance communication between several of our Programmable Logic Controllers (PLCs). Everything seemed to be working smoothly, except for a minor issue. I encountered an invalid connection fault between two PLCs and Im struggling to identify the mistake. I updated the Ethernet">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-interlock-tag-connection-issue-in-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Interlock Tag Connection Issue in Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="Good morning! Today, I made an effort to enhance communication between several of our Programmable Logic Controllers (PLCs). Everything seemed to be working smoothly, except for a minor issue. I encountered an invalid connection fault between two PLCs and Im struggling to identify the mistake. I updated the Ethernet">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-interlock-tag-connection-issue-in-studio-5000"
      },
      "headline": "Troubleshooting Interlock Tag Connection Issue in Studio 5000",
      "description": "Good morning! Today, I made an effort to enhance communication between several of our Programmable Logic Controllers (PLCs). Everything seemed to be working smoothly, except for a minor issue. I encountered an invalid connection fault between two PLCs and Im struggling to identify the mistake. I updated the Ethernet",
      "author": {
        "@type": "Person",
        "name": "squiggz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Troubleshooting Interlock Tag Connection Issue in Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>squiggz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">612</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">90</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good morning! Today, I made an effort to enhance communication between several of our Programmable Logic Controllers (PLCs). Everything seemed to be working smoothly, except for a minor issue. I encountered an invalid connection fault between two PLCs and I'm struggling to identify the mistake.

I updated the Ethernet configuration by adding the necessary modules. The first PLC has a 1756-L72S Safety Controller, which cannot be manually added. Instead, I included the ethernet bridge it connects to and located it from there. The second PLC is a 1756-L83E controller, and I successfully added it to the 1756-L72S.

For the 1756-L72S, my tags are as follows:
- Consumed: InterlockFromBBT1 (Connection: BBT_Skid:InterlockToCanFiller1)
- Produced: InterlockToBBT1

And for the 1756-L83E, the tags are:
- Consumed: InterlockFromCanFiller1 (Connection: Can_Filler:InterlockToBBT1)
- Produced: InterlockToCanFiller1

I am receiving a module fault on the 1756-L83E with the message (Code 16#0117) Connection Request Error: Invalid connection point. Symbol: InterlockToBBT1. Despite double-checking, the setup seems correct to me. I even tried deleting the tags and starting over, but the error persists.

Could it be that there is something additional I need to do to establish the connection between the 1756-L72S and the ethernet bridge for the tags to function properly? Any guidance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When dealing with invalid connection points, it typically indicates a discrepancy between the tag in the Producing PLC and the data entered into the Consuming PLC. This mismatch can arise from incorrect names or data types that do not align. A common error when using Produce and Consume is failing to ensure data types match. For example, if the Produce tag is a DINT, the Consume tag must also be a DINT. Similarly, if the Produce Tag is a User-defined Data Type (UDT) or from an Add-On Instruction (AOI), the definition in the Producer must precisely match in the Consumer PLC. These issues can often cause Invalid Connection Points errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost explained that an Invalid Connection Point error typically occurs when the tag in the Producing PLC does not align with the information entered in the Consuming PLC. This discrepancy could result from incorrect tag names or mismatched data types. One common issue encountered with the Produce and Consume process is failing to ensure data type consistency. For instance, if the Produce tag is a DINT, the Consume tag must also be a DINT. Similarly, if the Produce Tag is a User-defined Data Type (UDT) or from an Add-On Instruction (AOI), the definitions in both the Producer and Consumer PLCs must be identical. Despite believing that all names are accurate and data types are DINT, the error persists.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>squiggz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper configuration, refer to Chapter 6 pages 109-111 of the official manual available at Rockwell Automation's website. In the General tab of the L72S properties, the "Safety Network Number" (SNN) should align with the General SSN of the L72S bridged module. This is a crucial step for maintaining network consistency and safety protocol adherence.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KuulKuum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ensured that InterlockToBBT1 is properly configured as a generated tag?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Prior to adding any tags, it is essential to confirm if the L72S is properly displayed in the L83 I/O tree. Ensure that a connection is configured beforehand to avoid multiple errors. Upon inspection of the L83, verify that the L72S, L72SP, and ENxT module are all running smoothly without any yellow triangles present.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for the advice. I was able to solve the issue by identifying the incorrect order of module slots auto-populated under the bridge module. This was a new experience for me, but now I am prepared for similar situations in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>squiggz</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What could be causing the "Invalid connection point" error (Code 160117) between the 1756-L83E and 1756-L72S PLCs in Studio 5000?
- The error could be caused by a mismatch in the tag connections or configurations between the two PLCs. Double-check the tag configurations and ensure they are correctly mapped between the PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot an invalid connection fault between two PLCs in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - Start by verifying the tag configurations on both PLCs to ensure they are correctly set up to communicate with each other. Check for any inconsistencies or errors in the tag mappings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a specific method for establishing connections between PLCs in Studio 5000, especially when using safety controllers like the 1756-L72S?</h4>
<p class='text-muted'><strong>Answer:</strong> - When working with safety controllers like the 1756-L72S, ensure that the Ethernet configuration and tag mappings are accurately set up. You may need to add the safety controller through the ethernet bridge it connects to rather than manually adding it.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps should I take if I encounter an ongoing module fault (Code 160117) despite reconfiguring the tags on the PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the error persists even after reconfiguring the tags, try deleting the tags and recreating them from scratch. Ensure that the tag connections are accurately established between the Consumed and Produced tags on both PLCs.</p>
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
