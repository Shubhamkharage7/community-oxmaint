
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am facing difficulties in getting an old lift gate conveyor, specifically the 5384i Lift Gate, up and running at our smt facility. Despite most of our equipment being controlled by proprietary software, it has been years since I last went online with a processor. Our maintenance department">
    <meta name="keywords" content="lift gate conveyor, 5384i lift gate, troubleshooting, micrologix 1000, smt facility, proprietary software, processor online, maintenance department, green stack light, signal transmission, conveyor functionality, board transfer, .rss file">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-5384i-lift-gate-conveyor-with-micrologix-1000">
    <title>Troubleshooting 5384i Lift Gate Conveyor with Micrologix 1000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 5384i Lift Gate Conveyor with Micrologix 1000 | Oxmaint Community">
    <meta property="og:description" content="Hello, I am facing difficulties in getting an old lift gate conveyor, specifically the 5384i Lift Gate, up and running at our smt facility. Despite most of our equipment being controlled by proprietary software, it has been years since I last went online with a processor. Our maintenance department">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-5384i-lift-gate-conveyor-with-micrologix-1000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 5384i Lift Gate Conveyor with Micrologix 1000 | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am facing difficulties in getting an old lift gate conveyor, specifically the 5384i Lift Gate, up and running at our smt facility. Despite most of our equipment being controlled by proprietary software, it has been years since I last went online with a processor. Our maintenance department">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-5384i-lift-gate-conveyor-with-micrologix-1000"
      },
      "headline": "Troubleshooting 5384i Lift Gate Conveyor with Micrologix 1000",
      "description": "Hello, I am facing difficulties in getting an old lift gate conveyor, specifically the 5384i Lift Gate, up and running at our smt facility. Despite most of our equipment being controlled by proprietary software, it has been years since I last went online with a processor. Our maintenance department",
      "author": {
        "@type": "Person",
        "name": "Set_Fantastic"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-06",
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
                <h1 class="text-white">Troubleshooting 5384i Lift Gate Conveyor with Micrologix 1000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Set_Fantastic</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">575</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">103</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am facing difficulties in getting an old lift gate conveyor, specifically the 5384i Lift Gate, up and running at our smt facility. Despite most of our equipment being controlled by proprietary software, it has been years since I last went online with a processor. Our maintenance department has been struggling to make the conveyor operational, and I recently got involved to assist them. After conducting an assessment, I identified and replaced faulty reset PBs and EStops, as well as secured loose wires in the terminals. Although we managed to get the green stack light to illuminate, the conveyor is not functioning as expected. Signal transmission from upstream and downstream conveyors seems fine, but the board is not transferring onto the lift gate. Over the weekend, a colleague from another plant tried to help by going online with the processor, but encountered challenges due to unannotated addresses in the .rss file. The belt motor now turns on regardless of board availability for transfer, and manual intervention is required to initiate the transfer. Unfortunately, our company does not have extra licenses for software like RSLogix500, so I had to use RSLogix Micro Starter Lite to access the Micrologix 1761-L32BBB processor. Despite resolving some issues, a change in equipment layout on the floor has delayed further troubleshooting for a few days. I am seeking assistance from anyone familiar with ladder logic and willing to review my findings and descriptions. Any help would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're interested, I can email the extensive operating instructions that are too big to attach even when compressed. Let me know if you'd like a copy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Set_Fantastic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unfamiliar with the concept of a lift gate, but would the enclosed document provide any clarity on the matter?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Managing this project may be a bit challenging with various obfuscations and red herrings to navigate. I have included the .RSS file as a PDF attachment for easy access, eliminating the need for RSLogix 500 or a similar IDE. Additionally, I have made changes to some routines, added comments, and provided descriptions for certain tags to enhance clarity.

LAD 3 appears to handle I/O mapping and preprocessing, while routines such as HSC_INT and STI_INT do not seem to be triggered by interrupts. It may be beneficial to provide a more detailed process flow, potentially with sketches or annotated photos, to explain the control mechanism. Including an I/O list and detailed explanations can help readers understand the purpose of the project better.

In Program File LAD 13, Rung 0005, there seems to be a sequencer in action. The BSL operation shifts the low eight bits of N7:7 in a circular manner, with specific integer values controlling the process. Understanding the sequence logic and the impact of different integer values is crucial for the functionality of the program.

It is worth noting that there may be timers with a .PRE(set) of 0, which adds a layer of complexity to the project. Further clarification on this aspect would be beneficial. Remember, thorough documentation and clear explanations can make a significant difference in successfully completing this project. Good luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand that the electrical diagram features PLC inputs and outputs. However, when I requested the list, I was also seeking a detailed explanation of each, including their significance in the operational process or sequence.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ever wondered about the significance of N7:2/1 and whether it can have a value of 1? Are there any HMIs capable of writing to this address? Explore the possibilities of N7:2/1 and its functionality with HMI integration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the Programmable Logic Controller (PLC) incorporating the logic demonstrated on pages 6 and 7?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ian Ingram mentioned that he was unsure about the term "lift gate," but questioned if the attached document provided any clarification. Upon opening the document, it turned out to be the manual he was attempting to upload earlier, but was unable to due to its size.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Set_Fantastic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that the project at hand seems to have numerous complexities and distractions. The .RSS file has been converted to a PDF for easy accessibility without the need for RSLogix 500 or a similar IDE. Some routines have been renamed, comments added, and additional tag descriptions provided. It would be helpful to provide a more detailed process flow with visual aids or annotated images for better understanding. An I/O list can also contribute to clarity.

In Program File LAD 13, Rung 0005, a sequencer is observed where the BSL shifts the low eight bits of N7:7 in a circular manner. The value of N7:7 is limited to integer values 32, 1, or 0, influencing the behavior of the sequencer. It is noted that certain timers have a .PRE(set) of 0, adding to the complexity of the system.

To address some of the uncertainties, it is confirmed that the system adheres to the SMEMA standard, with N7:7 playing a crucial role in the BSL operation. However, the functionality of O:0.0 and the erratic behavior of the TMRs remain areas of concern. Further clarification on these aspects will be provided later. Thank you for the input, drbitboy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Set_Fantastic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The MVM instruction is used to write all O:0 bits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that all O:0 bits are programmed using an MVM instruction. Instead of posting on a message board, I created an Excel file to define and describe everything in detail. The file was split into three separate workbooks, each with one sheet, due to its size. I apologize if it seems a little scattered. I will review the attached Excel zipped workbooks after sending this message. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Set_Fantastic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>final workbook completed</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Set_Fantastic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The bit sequencing seems to be a bit messy, with inputs being mapped to internals in a way that doesn't entirely make sense. It could be a leftover testing phase without I/O, but there also appears to be illogical logic in the mapping. This might be a remnant of old systems where inputs were mapped for reasons unknown. It seems like little thought went into this process, suggesting the original programmer may not have been very skilled and just kept going until it functioned properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky pointed out that the sequencing in the code is messy and appears to be more complicated than necessary for a sequence with only a few steps. While there is a need for interlocks, the excessive amount of code, including some seemingly unnecessary elements like lights, may be intentional to obfuscate the program and protect intellectual property. It might be more efficient to manually run the sequence and use that experience to rewrite the code from scratch. Additionally, the transfer logic between different machines should be duplicated for consistency. The lift gate in question seems to correspond to "Machine B" in the sequence spreadsheet, with the goal of implementing part of the SMEMA protocol. Other essential logic related to reset, power, manual controls, and emergency stop procedures can be added later. Is this interpretation correct?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy pointed out that the ladder logic for the sequence contains more code than necessary for a simple process with just a few steps. While the complexity may be intentional to protect intellectual property, it might be more efficient to start fresh and simplify the logic. It is essential to ensure that the transfer logic from Machine A to B is consistent with the logic from Machine B to C. By running the equipment manually first and then rewriting the ladder logic, one can expedite the process. The lift gate in question likely corresponds to "Machine B" in the sequence spreadsheet, tasked with implementing part of the SMEMA protocol. Additional logic related to Reset, Power, Manual control buttons, and E-stop recovery can be incorporated later on. Overall, the focus is on moving forward and making progress. Your contribution and insights are greatly appreciated. A disgruntled technician from the previous company handling the equipment may have contributed to the complex code. Despite any challenges, the determination to learn and improve continuously is key. Thank you for sharing your knowledge and experiences in the control systems field, it is always enriching to engage with top contributors like yourself on forums like this.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Set_Fantastic</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are some common issues encountered when troubleshooting a 5384i Lift Gate Conveyor with a Micrologix 1000 processor?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common issues can include faulty reset PBs and EStops, loose wires in terminals, unannotated addresses in the .rss file causing challenges in online connectivity with the processor, and the belt motor turning on regardless of board availability for transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a lift gate conveyor when the green stack light illuminates but the conveyor is not functioning as expected?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is important to check signal transmission from upstream and downstream conveyors, ensure proper board transfer onto the lift gate, and review the ladder logic programming for any errors or misconfigurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What software can be used to access the Micrologix 1761-L32BBB processor if there are no extra licenses for RSLogix500 available?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In the absence of RSLogix500 licenses, RSLogix Micro Starter Lite can be utilized to access the Micrologix 1761-L32BBB processor for troubleshooting and programming tasks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can manual intervention be required to initiate board transfer on the lift gate conveyor?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Manual intervention may be necessary if there are issues with the automation process, such as the belt motor turning on regardless of board availability for transfer. Troubleshooting such issues involves checking the ladder logic programming and</p>
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
