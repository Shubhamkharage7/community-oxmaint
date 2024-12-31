
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When comparing PQW versus QW, users often wonder why the Edit Symbol of an Analog Output module always displays PQW. How can QW be utilized instead, and will it provide the same functionality as PQW?">
    <meta name="keywords" content="simatic manager, pqw vs qw, edit symbol, analog output module, utilize qw, functionality, symbol comparison, simatic symbols, plc programming, siemens simatic, edit symbol issue, analog output, plc symbols, symbol">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/which-symbol-to-use-in-simatic-manager-pqw-vs-qw">
    <title>Which Symbol to Use in Simatic Manager: PQW vs QW | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Which Symbol to Use in Simatic Manager: PQW vs QW | Oxmaint Community">
    <meta property="og:description" content="When comparing PQW versus QW, users often wonder why the Edit Symbol of an Analog Output module always displays PQW. How can QW be utilized instead, and will it provide the same functionality as PQW?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/which-symbol-to-use-in-simatic-manager-pqw-vs-qw">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Which Symbol to Use in Simatic Manager: PQW vs QW | Oxmaint Community">
    <meta name="twitter:description" content="When comparing PQW versus QW, users often wonder why the Edit Symbol of an Analog Output module always displays PQW. How can QW be utilized instead, and will it provide the same functionality as PQW?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/which-symbol-to-use-in-simatic-manager-pqw-vs-qw"
      },
      "headline": "Which Symbol to Use in Simatic Manager: PQW vs QW",
      "description": "When comparing PQW versus QW, users often wonder why the Edit Symbol of an Analog Output module always displays PQW. How can QW be utilized instead, and will it provide the same functionality as PQW?",
      "author": {
        "@type": "Person",
        "name": "USMAN SHAH"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-06",
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
                <h1 class="text-white">Which Symbol to Use in Simatic Manager: PQW vs QW</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>USMAN SHAH</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">442</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">311</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When comparing PQW versus QW, users often wonder why the Edit Symbol of an Analog Output module always displays PQW. How can QW be utilized instead, and will it provide the same functionality as PQW?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>As far as I recall, the "P" in PLC programming stands for peripheral, which means it writes directly to physical I/O instead of only updating the image at the end of the scan cycle. This method allows for reading and writing directly during the program scan, rather than waiting to update the peripheral image outside of the typical PLC scan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>USMAN SHAH posed a common question: What sets PQW apart from QW in the context of Analog Output modules? Upon accessing the Edit Symbol feature, users may notice that PQW is consistently displayed. This prompts the question: What purpose does QW serve? Is it feasible to substitute QW for PQW while achieving the same results? Additionally, it is worth noting that these designations are also utilized for reading and writing data to external addresses beyond the process image.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RClem</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RClem explained that PLC programming often involves reading and writing to memory addresses beyond the process image. In S7-300/400 systems, Digital IO is typically included in the process image and updated in each scan, while analog IO is kept outside the process image and updated only when necessary. In contrast, in 1200/1500 systems, the entire IO area is part of the process image, simplifying the process. However, users can still utilize aat the end of an IO tag for peripheral access if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a related inquiry regarding this topic that pertains to user programs accessing memory rather than directly interfacing with physical I/O. Data transmission between I/O image memory and physical outputs is facilitated by the PLC operating system, which may lead to discussions around the semantics of how the user program interacts with outputs. Whether utilizing PQW or QW instructions, the focus is on when data is written rather than what data is being written. Building a PLC without deep knowledge of internal implementation may make this distinction clearer. Does anyone have insights into the internal workings of specific PLCs and can confirm if the "memory only" claim holds true? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Siemens explains that the "P" in programming denotes real-time writing, bypassing internal images. This fact has been tested and proven in high-speed applications. I once had to step in and work on a system due to illness where the original supplier did not use a high-speed card. I created a function block that was called multiple times in OB1 using PIW instead of IW, achieving great results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that according to Siemens, the "P" in programming denotes the current point in time, effectively bypassing the internal image. This has been verified through practical use in high-speed applications. For example, in a situation where I had to work on a system due to illness, the original supplier had not utilized a high-speed card. To rectify this, I created a function block that was called multiple times within OB1, utilizing the PIW method instead of IW. This adjustment proved to be successful. It is possible to achieve similar results by utilizing another OB-block, such as OB37 (default 20ms) or OB38 (default 10ms), and only requiring a single read from the input instead of multiple reads scattered throughout OB1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky explained that Siemens indicated that the use of the "P" in programming refers to writing directly at that moment in time, therefore bypassing the internal image memory. This has been tested multiple times in high-speed applications, with successful results. Parky shared an experience where he had to step in on a system due to illness, noticing that the original supplier hadn't utilized a high-speed card. To address this issue, Parky created a function block that was strategically integrated into the program using PIW instead of IW in OB1. This approach effectively resolved the inconsistency between the I/O image memory and the physical output state. Is it accurate to say that utilizing "P" can lead to discrepancies between the two?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy noted that the importance of PQW vs. QW lies more in timing rather than content. This distinction becomes crucial when discussing local IO versus remote IO in PLC systems such as S7. While the specifics may vary across different models like 300/400/1200/1500, the underlying concepts remain consistent. 

For local IO, peripheral access involves immediate read/write operations through the backplane. Older CPUs incurred significant performance penalties with backplane usage, which newer CPUs have mitigated to some extent. On the other hand, remote IO relies on Ethernet interfaces to update data more frequently than the scan cycle. The PLC communicates with the interface via PIQ/PQW instructions to send and receive output/input data.

In the case of 300 PLCs, the complexity was compounded by the need to manage IO memory areas independently using instructions. Fortunately, newer PLCs with integrated interfaces have simplified remote IO setups. Understanding the time required for the process image to buffer IO data is crucial for 1500 models, as outlined in the Response Times manual.

Additionally, 400/1500 PLCs may feature multiple process image partitions that update OBs alongside the main program cycle. Although this setup may introduce some complications, the core principles of IO management remain relevant. Each IO address can only belong to one process image partition to avoid conflicts.

When discussing the potential inconsistencies between I/O image memory and physical outputs, drbitboy questioned whether "P" access circumvents the process image entirely or complements it. Further testing is required to ascertain how "P" access interacts with the overall IO system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired whether bypassing the I/O image memory and writing directly to the physical output, as indicated by the "P" command, could lead to an inconsistency between the two. This could potentially result in differing values unless updated manually. Siemens provides an example of this scenario on their support page.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare is accurate in saying that is how I utilized it. I was an authorized systems engineer for Siemens in the late 90s and early 2000s. I recall Mitsubishi having a similar feature, but I never utilized it. I stumbled upon it years ago but have not been able to find it again. Mitsubishi appears to be using I/O interrupts now, where I vaguely remember it being labeled as DX instead of X.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In agreement with Lare, Parky confirms using a similar method in the past as an approved systems engineer for Siemens. During the 90s and early 2000s, Mitsubishi had a comparable system, although it was not utilized. While Mitsubishi now employs I/O interrupts, Parky recalls a system resembling "DX" rather than "X". Fortunately, modern systems are more user-friendly, requiring just the ":P" syntax for addressing peripherals. When addressing drBitboy's question, it is important to note that peripheral read and write operations occur at different times than process image values. The process image is updated in the next scan cycle, so issues may arise only if the same IO address is used across PLC code and the process image is not manually updated with a move command.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many instructions in S5 (uncertain about S7) were not well documented. I learned several of these instructions, including their standard FB's written in assembler, which were initially not viewable. These FB's are actually MC5, the native instructions used by the PLC. They were protected by placing a JU=M001 in segment 1 with a BE. Although this would not compile in the standard IDE, by using a hex editor to remove the jump and replace the BE with BLD255, the block could be accessed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During the project in the mid-80s with a CPM-based PG675 dual floppy programming console, I faced challenges without access to documentation or internet manuals. The system involved bowl feeders feeding sausages onto a linear feeder and counting them into a can at high speed, with broken ones being rejected. In a high-pressure situation with limited resources, I had to rely on my existing knowledge to troubleshoot and get the system running smoothly before it went into production. This involved monitoring operations with a high-speed camera and making on-the-spot decisions to ensure everything ran efficiently. Despite facing obstacles and limited information, I was able to overcome challenges and meet the project's deadlines.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is noteworthy that you have the option to link a process image block to a particular OB and regulate the refresh rate of the addresses. Instead of updating at the conclusion of OB1, the addresses are refreshed at the conclusion of the corresponding OB.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to note that you have the option to link a process image block to a specific OB in Siemens PLC programming, allowing you to control the update rate of addresses within the block. This means that instead of updating at the end of OB1, the addresses update at the end of the linked OB. This feature is available for 400/1500 series PLCs, but not for 300/1200 series PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42 mentioned that the option is available for 400/1500 plans but not for 300/1200 plans. Click to see more details. I agree with your observation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why does the Edit Symbol of an Analog Output module in Simatic Manager display PQW instead of QW?
- The Edit Symbol in Simatic Manager defaults to displaying PQW for Analog Output modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can QW be utilized instead of PQW in Simatic Manager?</h4>
<p class='text-muted'><strong>Answer:</strong> - To use QW instead of PQW in Simatic Manager for Analog Output modules, you can make the necessary changes in the settings or configuration options.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Will using QW provide the same functionality as PQW for Analog Output modules in Simatic Manager?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, using QW instead of PQW in Simatic Manager for Analog Output modules should provide the same functionality. It's primarily a display preference that does not affect the module's operation.</p>
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
