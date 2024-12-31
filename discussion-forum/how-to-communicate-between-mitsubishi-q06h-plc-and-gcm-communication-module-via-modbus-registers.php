
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, Im new to PLC programming and currently working with a Mitsubishi Q06H PLC that needs to communicate with an Electronic module (specifically the GCM-Communication Module) via Ethernet. I need assistance with reading/writing data between the PLC and the Electronic Module using Modbus registers such as 40040 and">
    <meta name="keywords" content="mitsubishi q06h plc, gcm communication module, modbus registers, modbus communication, plc programming, ethernet communication, electronic module, data communication, reading data, writing data, 40040 register, 40041 register, communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-communicate-between-mitsubishi-q06h-plc-and-gcm-communication-module-via-modbus-registers">
    <title>How to communicate between Mitsubishi Q06H PLC and GCM Communication Module via Modbus registers. | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to communicate between Mitsubishi Q06H PLC and GCM Communication Module via Modbus registers. | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, Im new to PLC programming and currently working with a Mitsubishi Q06H PLC that needs to communicate with an Electronic module (specifically the GCM-Communication Module) via Ethernet. I need assistance with reading/writing data between the PLC and the Electronic Module using Modbus registers such as 40040 and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-communicate-between-mitsubishi-q06h-plc-and-gcm-communication-module-via-modbus-registers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to communicate between Mitsubishi Q06H PLC and GCM Communication Module via Modbus registers. | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, Im new to PLC programming and currently working with a Mitsubishi Q06H PLC that needs to communicate with an Electronic module (specifically the GCM-Communication Module) via Ethernet. I need assistance with reading/writing data between the PLC and the Electronic Module using Modbus registers such as 40040 and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-communicate-between-mitsubishi-q06h-plc-and-gcm-communication-module-via-modbus-registers"
      },
      "headline": "How to communicate between Mitsubishi Q06H PLC and GCM Communication Module via Modbus registers.",
      "description": "Hey everyone, Im new to PLC programming and currently working with a Mitsubishi Q06H PLC that needs to communicate with an Electronic module (specifically the GCM-Communication Module) via Ethernet. I need assistance with reading/writing data between the PLC and the Electronic Module using Modbus registers such as 40040 and",
      "author": {
        "@type": "Person",
        "name": "Cu Do"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-31",
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
                <h1 class="text-white">How to communicate between Mitsubishi Q06H PLC and GCM Communication Module via Modbus registers.</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Cu Do</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">322</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">325</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I'm new to PLC programming and currently working with a Mitsubishi Q06H PLC that needs to communicate with an Electronic module (specifically the GCM-Communication Module) via Ethernet. I need assistance with reading/writing data between the PLC and the Electronic Module using Modbus registers such as 40040 and 40041. I have provided a link to the Communication module manual for reference: https://www.graco.com/content/dam/graco/tech_documents/manuals/312/312785/312785EN-E.pdf (refer to page 28). I appreciate any comments or help you can provide on this matter. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome, Cu Do, to the forum! I have some mixed news for you. On a positive note, it is technically feasible to establish communication between a Mitsubitshi Q06H and a GCM-Communication Module via Ethernet. However, the downside is that some extra effort will be required on your end. The Mitsubitshi Q06H does not inherently support the same protocol as the GCM-Communication Module. Although they both utilize Ethernet and share layers 1 to 4 of the ISO/OSI 7-Layer model (Physical L1, Data Link L2, Network L3/IP, and Transport L4/TCP), they differ at the Application layer. The GCM-Communication Module functions as a Modbus TCP server, making its data accessible on a Modbus database as per the Modbus specification and GCM's requirements.

Unfortunately, the Q06H is not equipped to comprehend Modbus TCP by default. As a result, you will need a program that enables the Q06H to act as a Modbus TCP "Client" to communicate with the GCM's Modbus TCP "server." The following web page provides a detailed explanation of this process: https://www.fasupportme.com/portal/...on-build-in-ethernet-port-in-iq-f-and-iq-r-en. While the article pertains to the iQ-R series, adjustments will be necessary for the GxWorks2 version compatible with the Q06H. Regrettably, there is no specific article available for configuring the Q06H as a Modbus TCP client. However, diligent searching may yield a helpful YouTube tutorial on this subject.

Alternatively, you can opt for a dedicated Modbus TCP master, though this will come at a cost and require a PLC slot. For further information on MODBUS/TCP Network integration with Mitsubishi Electric Americas, please visit their official website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While the Q06H is compatible with the QJ71E71-100 module, it is not specifically designed for Modbus communication. There is a -MB version available with the necessary protocol. Despite not being able to locate a specific YouTube video, it is possible to use the E71-100 module for Modbus communication. However, it may require writing your own CRC and control. I once encountered a problem when the wrong 232 adapter was ordered for an FX system, which should have been the 232-MB version. In this case, I had to write my own solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi everyone, I am new to programming PLCs and currently working with a Mitsubithi Q06H PLC that communicates with an Electronic module (GCM-Communication Module) via Ethernet. I am looking for guidance on how to read and write data between the PLC and Electronic Module using Modbus registers such as 40040, 40041, and so on. You can access the manual for the Communication module here: [Link]. I appreciate any comments or assistance on this issue. Additionally, if you are using the QJ71E71-100 module for this PLC, I can provide a sample program for both the PLC and HMI (GOT 2000 series) to help you better understand the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rajesh.</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rajesh mentioned that the PLC QJ71E71-100 module is specifically compatible with this particular project. If assistance is needed, a sample program for both the PLC and HMI (GOT 2000 series) can be provided for better comprehension. I am currently utilizing the Intel module QJ71E71-100. Would you be able to send a project example for my educational purposes? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cu Do</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings Cu Do and welcome to the forum! I have some news for you - both good and not so good. The exciting part is that it's "technically feasible" to establish communication between the Mitsubitshi Q06H and GCM-Communication Module via Ethernet. However, the downside is that you'll need to put in some effort as the Mitsubitshi Q06H doesn't naturally support the same protocol as the GCM-Communication Module.

Both devices operate on Ethernet, meaning they share layers 1 through 4 of the ISO/OSI 7-Layer model (Physical L1, Data Link L2, Network L3/IP, and Transport L4/TCP). However, they differ at the Application layer. The GCM-Communication Module supports Modbus TCP server, making its data accessible on a Modbus database as per the Modbus and GCM specifications. Unfortunately, the Q06H doesn't have built-in support for Modbus TCP, so you'll need a program to enable it to operate as a Modbus TCP "Client" to communicate with the GCM's Modbus TCP "server."

While I haven't personally undertaken this task, I recommend visiting https://www.fasupportme.com/portal/...on-build-in-ethernet-port-in-iq-f-and-iq-r-en for guidance. Please note that the article is tailored for the iQ-R series, so adjustments will be needed for the GxWorks2 version compatible with the Q06H. If you're unable to find a specific article for the Q06H as a Modbus TCP client, consider searching for informative YouTube videos.

Alternatively, there is a dedicated Modbus TCP master available for purchase, which will require a PLC slot. For more information on MODBUS/TCP Network solutions from Mitsubishi Electric Americas, click here. Thank you for your informative explanation!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cu Do</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>AlfredoQuintero welcomed Cu Do to the forum with some news regarding achieving communication between Mitsubishi Q06H and GCM-Communication Module through Ethernet. While technically possible, it requires some effort as the Q06H does not natively support the Modbus TCP protocol that the GCM-Communication Module does. Both devices share layers 1 through 4 of the ISO/OSI 7-Layer model, but differ in the Application layer. The GCM-Communication Module acts as a Modbus TCP server, while the Q06H needs a program to operate as a Modbus TCP client to communicate with it.

For those looking to set up the Q06H as a Modbus TCP client, further research and potentially modifying instructions intended for the iQ-R series may be necessary. There may be YouTube tutorials or other resources available to assist in this process. Alternatively, investing in a dedicated Modbus TCP master device may be a more straightforward solution, albeit at a cost.

Additionally, the user mentioned using the QJ71E-100 for Ethernet communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cu Do</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I establish communication between a Mitsubishi Q06H PLC and a GCM-Communication Module using Modbus registers?
- To establish communication between the PLC and the Communication Module using Modbus registers, you can refer to the manual provided on page 28 for detailed instructions. Ensure to configure the communication settings and address the Modbus registers correctly for reading/writing data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are some key considerations when working with Modbus registers 40040 and 40041 for communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - When working with Modbus registers 40040 and 40041, ensure that you understand the data format expected by the Communication Module and PLC. Verify the data types, addressing scheme, and communication protocol to ensure successful data exchange between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot communication issues between the Mitsubishi Q06H PLC and the GCM-Communication Module?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you encounter communication issues, check the configuration settings on both devices to ensure they match. Verify the network connectivity, IP addresses, and communication parameters. Additionally, monitor communication using diagnostic tools to identify any errors or inconsistencies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific programming tips or best practices for implementing Modbus communication between the PLC and the Communication Module?</h4>
<p class='text-muted'><strong>Answer:</strong> - When programming the PLC for Modbus communication, follow the guidelines provided in the manual and ensure proper handling of data registers, error checking, and exception handling. Implement robust error recovery mechanisms to handle communication failures and optimize data exchange efficiency.</p>
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
