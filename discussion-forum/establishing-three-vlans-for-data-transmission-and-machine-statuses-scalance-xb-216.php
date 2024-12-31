
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, everyone. Apologies for any language errors in advance. I am currently engaged in a project that involves the transmission of data and machine statuses (such as robots, PLCs, HMIs, etc.). Some of this data needs to remain confidential, and it is crucial to maintain a constant connection to">
    <meta name="keywords" content="vlan establishment, data transmission, machine statuses, scalance xb-216, confidential data, constant connection, production halts, shared data, visual aids, bidirectional data, shared ports, tia development, c/c++ coding, c#">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/establishing-three-vlans-for-data-transmission-and-machine-statuses-scalance-xb-216">
    <title>Establishing Three VLANs for Data Transmission and Machine Statuses: Scalance XB-216 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Establishing Three VLANs for Data Transmission and Machine Statuses: Scalance XB-216 | Oxmaint Community">
    <meta property="og:description" content="Greetings, everyone. Apologies for any language errors in advance. I am currently engaged in a project that involves the transmission of data and machine statuses (such as robots, PLCs, HMIs, etc.). Some of this data needs to remain confidential, and it is crucial to maintain a constant connection to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/establishing-three-vlans-for-data-transmission-and-machine-statuses-scalance-xb-216">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Establishing Three VLANs for Data Transmission and Machine Statuses: Scalance XB-216 | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, everyone. Apologies for any language errors in advance. I am currently engaged in a project that involves the transmission of data and machine statuses (such as robots, PLCs, HMIs, etc.). Some of this data needs to remain confidential, and it is crucial to maintain a constant connection to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/establishing-three-vlans-for-data-transmission-and-machine-statuses-scalance-xb-216"
      },
      "headline": "Establishing Three VLANs for Data Transmission and Machine Statuses: Scalance XB-216",
      "description": "Greetings, everyone. Apologies for any language errors in advance. I am currently engaged in a project that involves the transmission of data and machine statuses (such as robots, PLCs, HMIs, etc.). Some of this data needs to remain confidential, and it is crucial to maintain a constant connection to",
      "author": {
        "@type": "Person",
        "name": "MatijaV"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-29",
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
                <h1 class="text-white">Establishing Three VLANs for Data Transmission and Machine Statuses: Scalance XB-216</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MatijaV</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">173</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">397</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, everyone. Apologies for any language errors in advance. I am currently engaged in a project that involves the transmission of data and machine statuses (such as robots, PLCs, HMIs, etc.). Some of this data needs to remain confidential, and it is crucial to maintain a constant connection to the robot (in case production halts, the robot should still send data). Additionally, there is shared data that requires clarification (visual aids will be provided). My proposal entails the establishment of three distinct VLANs: VLAN1 for data intended for me, VLAN2 for data destined for the customer's server, and VLAN3 for data intended for both parties. Alternatively, could shared ports be utilized for bidirectional data transmission? I have made some progress following manuals and tutorials on platforms like YouTube, but the results are not satisfactory. This task is new to me as I predominantly work in software development, specifically TIA, as well as coding in C/C++ and C#. I hope this explanation was clear. Please feel free to request further elaboration on the issue. Best regards, Matija</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance network security and optimize communication, it is recommended to employ a router for network segmentation. Configure the firewall to permit specific devices to connect to the customer's server while restricting other traffic to remain within the local network. Think of VLANs as distinct pathways with individual switches; they do not have the capability to intelligently filter traffic. To achieve granular control over traffic flow between VLANs, a router is essential.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you considered utilizing NAT instead of VLAN3? Additionally, could you provide more information on the PLC model you are using and the communication protocols in place?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to separate your network effectively, consider using a router to set up VLANs and configure the firewall to allow specific devices to communicate with the customer's server while keeping other traffic local. Think of VLANs as separate switch cables that require a router to manage traffic flow between them. Unfortunately, sharing ports between VLANs is not possible on the Scalance XB216 switch, so trunk ports are not an option in this case. Refer to the provided connection diagram for a visual representation of how the setup should be configured. If you need further assistance, reaching out to Siemens support may be beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MatijaV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to goghie, VLAN3 is unnecessary as NAT can effectively handle the task. Can you provide more details about the PLC model, such as the specific model of the et200sp open controller (IPC), and the communication protocols being utilized, like Ethernet? Additionally, could you please explain how NAT can be implemented in this scenario?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MatijaV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For in-depth information on PH_SCALANCE-XB-200-XC-200-XF-200BA-XP-200-XR-300WG-WBM, including detailed explanations on Paragraph 5.8 found on page 94, refer to the official Siemens support document linked here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
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
<h4 class='text-dark'>FAQ: 1. What is the purpose of establishing three VLANs for data transmission and machine statuses?</h4>
<p class='text-muted'><strong>Answer:</strong> - The purpose is to segregate data based on confidentiality and destination, with VLAN1 for data intended for the user, VLAN2 for data destined for the customer's server, and VLAN3 for shared data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can shared ports be used for bidirectional data transmission instead of VLANs?</h4>
<p class='text-muted'><strong>Answer:</strong> - While shared ports can be used for bidirectional data transmission, VLANs offer a more organized approach to segregating and managing different types of data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the benefits of maintaining a constant connection to the robot for data transmission?</h4>
<p class='text-muted'><strong>Answer:</strong> - Maintaining a constant connection ensures that data is continuously sent from the robot, even if production halts, which is crucial for monitoring and troubleshooting purposes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can someone with a background in software development implement VLANs for data transmission and machine statuses?</h4>
<p class='text-muted'><strong>Answer:</strong> - Individuals with a software development background can refer to manuals, tutorials, and platforms like YouTube for guidance on setting up VLANs. It may also be beneficial to seek assistance from network professionals for more complex configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What are some common challenges faced when setting up VLANs for data transmission?</h4>
<p class='text-muted'><strong>Answer:</strong> - Common challenges include misconfigurations, compatibility issues, security concerns, and ensuring proper communication between devices on different VLANs. Troubleshooting and testing are essential to address these challenges effectively.</p>
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
