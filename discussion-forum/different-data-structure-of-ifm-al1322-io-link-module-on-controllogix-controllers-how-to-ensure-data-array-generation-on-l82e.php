
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When installing an IFM AL1322 IO-Link Master Module on a 1756-EN2T Ethernet Card connected to a 1756-L82E Controller, you may encounter a difference in the input and output data structure. Instead of an array named Data, the file contains individual tags such as Input_Data1, Input_Data2, etc., all of type">
    <meta name="keywords" content="ifm al1322 io-link module, controllogix controllers, data array generation, l82e controller, 1756-en2t ethernet card, 1756-l82e controller, 1769-l30er compact log">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/different-data-structure-of-ifm-al1322-io-link-module-on-controllogix-controllers-how-to-ensure-data-array-generation-on-l82e">
    <title>Different Data Structure of IFM AL1322 IO-Link Module on ControlLogix Controllers: How to Ensure Data Array Generation on L82E? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Different Data Structure of IFM AL1322 IO-Link Module on ControlLogix Controllers: How to Ensure Data Array Generation on L82E? | Oxmaint Community">
    <meta property="og:description" content="When installing an IFM AL1322 IO-Link Master Module on a 1756-EN2T Ethernet Card connected to a 1756-L82E Controller, you may encounter a difference in the input and output data structure. Instead of an array named Data, the file contains individual tags such as Input_Data1, Input_Data2, etc., all of type">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/different-data-structure-of-ifm-al1322-io-link-module-on-controllogix-controllers-how-to-ensure-data-array-generation-on-l82e">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Different Data Structure of IFM AL1322 IO-Link Module on ControlLogix Controllers: How to Ensure Data Array Generation on L82E? | Oxmaint Community">
    <meta name="twitter:description" content="When installing an IFM AL1322 IO-Link Master Module on a 1756-EN2T Ethernet Card connected to a 1756-L82E Controller, you may encounter a difference in the input and output data structure. Instead of an array named Data, the file contains individual tags such as Input_Data1, Input_Data2, etc., all of type">
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
        "@id": "https://community.oxmaint.com/discussion-forum/different-data-structure-of-ifm-al1322-io-link-module-on-controllogix-controllers-how-to-ensure-data-array-generation-on-l82e"
      },
      "headline": "Different Data Structure of IFM AL1322 IO-Link Module on ControlLogix Controllers: How to Ensure Data Array Generation on L82E?",
      "description": "When installing an IFM AL1322 IO-Link Master Module on a 1756-EN2T Ethernet Card connected to a 1756-L82E Controller, you may encounter a difference in the input and output data structure. Instead of an array named Data, the file contains individual tags such as Input_Data1, Input_Data2, etc., all of type",
      "author": {
        "@type": "Person",
        "name": "JustAnotherBitBanger"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
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
                <h1 class="text-white">Different Data Structure of IFM AL1322 IO-Link Module on ControlLogix Controllers: How to Ensure Data Array Generation on L82E?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JustAnotherBitBanger</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">516</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">215</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When installing an IFM AL1322 IO-Link Master Module on a 1756-EN2T Ethernet Card connected to a 1756-L82E Controller, you may encounter a difference in the input and output data structure. Instead of an array named 'Data', the file contains individual tags such as Input_Data1, Input_Data2, etc., all of type UINT. However, when the same module is added to a 1769-L30ER Compact Logix Controller, the expected array tag 'Data' is present in the input file. Unfortunately, the Input_Data1 format is not compatible with the AOI from IFM. How can you ensure that the module generates the 'Data' Array on the L82E Controller? Refer to the image for a visual comparison of the input data structures on both controllers.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have encountered the same problem with the latest versions of the studio software. Although I'm unsure of the solution, reverting back to v33 through flashing may rectify the issue with the data type, irrespective of the controller series. If you discover a permanent solution, kindly share it with us!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sd1991</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method is to perform a Copy Operations (COP) or preferably, a Copy Struct (CPS) since it involves input/output data, to transfer the data into a custom User-Defined Type (UDT) with the appropriate format. Afterwards, you can easily reference this UDT within the Add-On Instruction (AOI).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using Studio 5000 versions 34, 35, or 36, you may be experiencing difficulties with Studio 5000 Logix Designer updating EDS AOP module tags.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vadoola</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF suggests utilizing a simple Copy-on-Write (COP) or preferably a Copy-on-Share (CPS) operation for transferring I/O data into a custom User-Defined Type (UDT) structure. This UDT can then be referenced in the Add-On Instruction (AOI). 

COP() is recommended when the destination data is solely utilized within the same task where COP() was executed. If ensuring the atomicity of data shared across multiple tasks is crucial, then CPS() is the preferred option.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is advisable to use CPS when dealing with I/O data, as the I/O updates independently of the program scan. If a section of the process data is a REAL and needs to be split into two INTs before being recombined at the PLC end, there is a risk of the I/O updating during a COP operation. This could result in data corruption, leading to a #Q.NAN error in your REAL data for a single scan. CPS helps to prevent the I/O image from being updated until the copying process is finished. For more information, refer to Knowledgebase Article ID: QA3295 (techconnect access required).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One issue that arises is the potential for CPS to be disrupted by another task, leading to the risk of incomplete data being used by other user tasks. The ability to delay an IO update is limited to hardware pre-5x80, where IO is allocated among user tasks in a time-sliced manner. The impact of CPS on 5x80 and newer systems suggests that IO operations need to be postponed across the board, regardless of relevance to the specific data being accessed.

This situation aligns with the requirements outlined in firmware v28-v34, as per QA65217, for MNRF 5x80 controllers using diagnostic connections. When a Synchronous Copy File (CPS) instruction is used with a motion diagnostics connection as the source or destination tag, the controller may encounter a major nonrecoverable fault (MNRF). To avoid this issue, it is recommended not to utilize motion diagnostics connections (e.g., AB:Motion_Diagnostics:S:1) as inputs for CPS. If a file copy is necessary, opt for a non-synchronous method using the COP instruction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The use of a blunt instrument approach in motion planning can have a significant impact on CPS. While using a simple COP may seem like a solution, it is important to note the possibility of data corruption. It is crucial to determine whether your application can tolerate such risks before proceeding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently came across information confirming that 4-byte chunks are consistently guaranteed. Specifically, based on BF19973 and its attachment, it is noted that in a Logix controller, data integrity can be ensured for up to 32 bits. When using the CPS instruction, remember: do not use it for copying 32 bits or less of I/O or Produce/Consume data. In such cases, the Logix controller can already provide up to 32 bits of data integrity without additional overhead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering 32-bit boundaries, it is important to clarify whether each individual 32-bit segment or a single 32-bit copy guarantees consistency of data. If your actual data spans across INT's 3 and 4, it may no longer be considered "guaranteed consistent" as it crosses a boundary. One way to potentially mitigate this is by utilizing individual COP's instead of a singular COP, although this approach may introduce some complexity. While these scenarios may be rare and considered edge cases, it is worth noting that unforeseen circumstances can arise even in one-in-a-million situations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The data table display on the device can be modified according to the module definition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF mentioned concerns about the consistency of 32-bit data when crossing boundaries. It is unclear whether a single 32-bit copy or each 32-bit chunk is guaranteed to be consistent. If actual data enters INT's 3 and 4, crossing a 32-bit boundary may jeopardize its consistency. To overcome this, using individual COPs instead of one big COP may be a messy solution. While these scenarios are rare, it is important to consider potential edge cases. Interruptible COPs must handle interruptions gracefully. In my experience, CIP data streams containing REAL are typically aligned. However, exceptions may occur, especially with protocols like Modbus. To ensure data integrity, analyze each case individually. For COP operation with PF525 incoming data, a zeroed 4-byte pad is followed by 2-byte drive status and 2-byte speed, maintaining each member's integrity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why does the data structure differ when using an IFM AL1322 IO-Link Module on a 1756-L82E Controller compared to a 1769-L30ER Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - The data structure differences arise due to variations in how the controllers handle the input and output data arrays.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I ensure that the IFM AL1322 module generates the 'Data' Array on the 1756-L82E Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure the generation of the 'Data' Array on the 1756-L82E Controller, you may need to check the configuration settings and possibly make adjustments to align with the expected format.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I do if the Input_Data1 format on the 1756-L82E Controller is not compatible with the AOI from IFM?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the Input_Data1 format is not compatible, you may need to explore potential solutions such as adjusting data structures, configurations, or seeking support from IFM for guidance on compatibility issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific considerations to keep in mind when dealing with data arrays and modules on ControlLogix controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> - When working with data arrays and modules on ControlLogix controllers, it is essential to be aware of potential variations in data structures across different controllers and to ensure compatibility between modules and the controller's data handling mechanisms.</p>
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
