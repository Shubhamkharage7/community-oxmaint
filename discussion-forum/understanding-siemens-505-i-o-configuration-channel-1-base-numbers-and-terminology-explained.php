
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello! I am a beginner on the Siemens (CTI) Platform and I am looking to learn more about setting up the I/O configuration. I find some of the terminology to be a bit confusing. Here are a few questions I have: - What is the significance of Channel 1">
    <meta name="keywords" content="siemens 505, i/o configuration, channel 1, base numbers, terminology, cti platform, setting up i/o, significance of channel 1, base 0-15, x inputs, y outputs, wx, w">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-siemens-505-i-o-configuration-channel-1-base-numbers-and-terminology-explained">
    <title>Understanding Siemens 505 I/O Configuration: Channel 1, Base Numbers, and Terminology Explained | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Siemens 505 I/O Configuration: Channel 1, Base Numbers, and Terminology Explained | Oxmaint Community">
    <meta property="og:description" content="Hello! I am a beginner on the Siemens (CTI) Platform and I am looking to learn more about setting up the I/O configuration. I find some of the terminology to be a bit confusing. Here are a few questions I have: - What is the significance of Channel 1">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-siemens-505-i-o-configuration-channel-1-base-numbers-and-terminology-explained">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Siemens 505 I/O Configuration: Channel 1, Base Numbers, and Terminology Explained | Oxmaint Community">
    <meta name="twitter:description" content="Hello! I am a beginner on the Siemens (CTI) Platform and I am looking to learn more about setting up the I/O configuration. I find some of the terminology to be a bit confusing. Here are a few questions I have: - What is the significance of Channel 1">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-siemens-505-i-o-configuration-channel-1-base-numbers-and-terminology-explained"
      },
      "headline": "Understanding Siemens 505 I/O Configuration: Channel 1, Base Numbers, and Terminology Explained",
      "description": "Hello! I am a beginner on the Siemens (CTI) Platform and I am looking to learn more about setting up the I/O configuration. I find some of the terminology to be a bit confusing. Here are a few questions I have: - What is the significance of Channel 1",
      "author": {
        "@type": "Person",
        "name": "Cydog"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-03",
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
                <h1 class="text-white">Understanding Siemens 505 I/O Configuration: Channel 1, Base Numbers, and Terminology Explained</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">264</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">222</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello! I am a beginner on the Siemens (CTI) Platform and I am looking to learn more about setting up the I/O configuration. I find some of the terminology to be a bit confusing. Here are a few questions I have:

- What is the significance of Channel 1 in the I/O Configuration?
- Can you explain the meaning of Base 0 through 15?
- Additionally, what do X (Inputs, right?) and Y (Outputs, right?) stand for? And what about WX and WY?

I am more familiar with the Rockwell Platform, so any clarification would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>X represents the input, while Y represents the output in this system. V stands for word memory, with newer systems supporting V memory floating points. C refers to coil or memory bit. WX is an analog input, and WY is an analog output. The system comes with built-in PID loops that can be customized based on the model. It also includes built-in Analog alarming feature. SFPGM is a Special function program in structured text format, which is user-friendly for those familiar with Rockwell systems. Bases in this system are similar to Rockwell racks where I/O cards are located, with Base 0 typically housing the CPU. Further information is needed for the Channel questions, especially in older systems where multiple RBC (Remote Base Controllers) could be utilized, each with their own channel connection. Coax cables were originally used, but later systems transitioned to RS485 for Remote Bases.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good morning, Mr. Ken. Thank you for assisting me with the Channel Question. When I navigate to the i/O Configuration section, I see Channel 1 listed under "Base Status" with Base 0 - Base 15. Is the term "Base" referring to the rack in this context? When I click on "Edit Base," I am presented with Channel 1, Base 0, and I/O Module Definition, which includes Slots 1 through 16. Each slot has an associated I/O Address like 1361, 1, 9, 17, 1129, etc. How do Channels and Bases (similar to ControlLogix Racks) correlate in this system? Are these addresses linked to specific areas within the program? Thank you for your help. Have a wonderful day.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of TI/CTI technology, Channel 1 serves as the pathway to connect with remote bases, also known as racks. Bases are equipped with modules numbered from 1 to 16, arranged from left to right. Similar to Siemens, addressing for I/O modules is done manually. It is important to note that inputs and outputs share the same memory space, meaning that duplicate addresses are not allowed. Each digital input/output module must have a unique address assigned to it. For instance, if there is a switch connected to Base 2, slot 1, channel 4, the address assignment must be checked to determine which "X" bit corresponds to that specific slot/channel.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken is on top of managing the system efficiently. When it comes to memory, it's important to note that while X and Y share the same memory, WX and WY do not. To avoid confusion, it's best practice to use unique addresses for each. The channel is consistently set to 1. The previous ti575 VME system may have had different specifications, but it was discontinued before Siemens acquired TI and certainly before CTI took over. From what I understand, the base 0 always refers to the rack with the processor, while bases 1 through 15 are designated for remote IO racks. The newer Siemens/CTI processors come with profibus ports for added convenience, allowing for IO to be added on PB instead of remote IO.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you very much, gentlemen! Wishing you a fantastic day ahead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>By the way, the Siemens Field PG M was truly innovative for its time. It was one of the few platforms in the 1980s that utilized structured text, a feature that was not common during that era. Personally, I often created a specific Siemens Field PG M program solely for analog scaling, as it had a user-friendly built-in function. The programming structure was reminiscent of Pascal, making it easy to both comprehend and write code. I highly recommend delving into the Siemens Field PG M platform, as it greatly simplified complex mathematical tasks.

For instance, I developed a Siemens Field PG M program for a sugar refinery that facilitated loop tuning using BCD input wheels long before Human-Machine Interfaces (HMI) became mainstream. Additionally, I utilized the print function to document alarms on a line printer, incorporating embedded variables, again predating the use of HMIs. However, there were challenges with printer malfunctions and full print buffers causing CPU faults, which necessitated additional logic to prevent printing when the buffer was full.

I was disappointed when Siemens acquired TI, as it marked the end of further platform development. While CTI has continued to support the platform, notable advancements seem to be limited. I am particularly interested in how newer CTIs manage inter-CPU communication.

In hindsight, the TI-565, an older model, supported a greater number of inputs and outputs compared to modern processors. While newer models typically support up to 1024 digital and analog inputs, we had systems with double that amount in analog inputs. Each additional Remote Base Controller (RBC) provided more internal memory and another remote I/O channel. I previously operated a five-vessel batching system with a TI-565, equipped with 256k of memory. Despite a scan time of around 500ms, the system operated seamlessly for over two decades before transitioning to a Delta-V Distributed Control System (DCS).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While conducting research on the project, a new question arose regarding the CTI-2572 Ethernet Card found in the first rack. Upon further investigation in the 505 Workshop and Expanded I/O Module, I discovered a list of WX1361, WX1362, WY1363, WY1364, WY1365, WY1366, WY1367, and WY1368 modules. It appears that some of these modules are related to Analog Inputs, while others are Analog Outputs. It's puzzling how these functionalities are integrated into an Ethernet Module. Your assistance in clarifying these details is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cydog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore mentioned that the SFPGM was innovative for its time, being one of the first platforms to have structured text in the 1980s. He often created SFPGM programs specifically for analog scaling due to its built-in function that was easy to use. The structure, resembling Pascal, was not only easy to read but also easy to write. Moore highly recommends studying SFPGM as it made complex mathematical tasks simple. For instance, he developed a program for a sugar refinery that facilitated loop tuning using BCD input wheels way before the advent of HMIs. Despite its advantages, using the print function to print alarms on a line printer sometimes caused CPU faults, especially if the printer failed or if the print buffer was full. Moore recalls feeling disheartened when Siemens acquired TI, marking the end of further development. However, CTI has continued the platform, albeit without any significant enhancements to date. Inquiring about the communication between CPUs in newer CTIs, Moore wonders how they compare to the older model, Ti-565, which supported a greater number of I/Os. While the newer processors only support up to 1024 digital and analog I/Os, Moore worked with systems that required double that amount in analog I/Os. Despite the limitations, the Ti-565 powered a 5-vessel batching system for over two decades before being upgraded to a Delta-V DCS. As for the current CTI processors, they come equipped with an embedded ethernet port, or users can still opt for the CTI-2572 for their communication needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While researching the project, Cydog stumbled upon another question regarding the CTI-2572 Ethernet Card found in the first rack. Despite initial confusion, it was discovered that the WX and WY modules associated with the CTI-2572 are not just analog inputs and outputs, but rather serve as input and output words for configuring the ethernet module. These modules facilitate communication between processors, multicast functions, and overall communication management. For more information and code examples, refer to the CTI-2572 manual. Your assistance and guidance in this matter are greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the significance of Channel 1 in the Siemens 505 I/O Configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - Channel 1 in the Siemens 505 I/O Configuration typically refers to the first physical input/output channel on the device. It serves as a reference point for configuring and addressing specific I/O modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can you explain the meaning of Base 0 through 15 in the I/O Configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - In Siemens 505 I/O Configuration, Base 0 through 15 represent different starting addresses for I/O modules. Each base number corresponds to a specific slot or rack in the system where an I/O module is located.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What do X and Y stand for in the Siemens 505 I/O Configuration? What about WX and WY?</h4>
<p class='text-muted'><strong>Answer:</strong> - In Siemens terminology, X usually refers to inputs, while Y refers to outputs. WX and WY are used to designate special function blocks or memory areas related to inputs and outputs. These designations help organize and manage the configuration of digital I/O points effectively.</p>
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
