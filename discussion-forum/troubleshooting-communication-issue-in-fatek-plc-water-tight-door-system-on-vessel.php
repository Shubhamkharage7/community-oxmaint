
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently facing an issue with my vessels water-tight door system, which was manufactured in China by a company that is no longer in operation. The system consists of 7 doors, each equipped with its own Fatek PLC for operation. These PLCs are connected to a display unit">
    <meta name="keywords" content="vessel, water-tight door system, fatek plc, communication issue, china manufacturing, display unit, bridge plc, engine room plc, password protection, station ids, software files, door statuses, communication setup, troubleshooting, door operation, led">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-in-fatek-plc-water-tight-door-system-on-vessel">
    <title>Troubleshooting Communication Issue in Fatek PLC Water-Tight Door System on Vessel | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issue in Fatek PLC Water-Tight Door System on Vessel | Oxmaint Community">
    <meta property="og:description" content="I am currently facing an issue with my vessels water-tight door system, which was manufactured in China by a company that is no longer in operation. The system consists of 7 doors, each equipped with its own Fatek PLC for operation. These PLCs are connected to a display unit">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-in-fatek-plc-water-tight-door-system-on-vessel">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issue in Fatek PLC Water-Tight Door System on Vessel | Oxmaint Community">
    <meta name="twitter:description" content="I am currently facing an issue with my vessels water-tight door system, which was manufactured in China by a company that is no longer in operation. The system consists of 7 doors, each equipped with its own Fatek PLC for operation. These PLCs are connected to a display unit">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-in-fatek-plc-water-tight-door-system-on-vessel"
      },
      "headline": "Troubleshooting Communication Issue in Fatek PLC Water-Tight Door System on Vessel",
      "description": "I am currently facing an issue with my vessels water-tight door system, which was manufactured in China by a company that is no longer in operation. The system consists of 7 doors, each equipped with its own Fatek PLC for operation. These PLCs are connected to a display unit",
      "author": {
        "@type": "Person",
        "name": "Burnavator"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Troubleshooting Communication Issue in Fatek PLC Water-Tight Door System on Vessel</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Burnavator</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">416</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">44</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently facing an issue with my vessel's water-tight door system, which was manufactured in China by a company that is no longer in operation. The system consists of 7 doors, each equipped with its own Fatek PLC for operation. These PLCs are connected to a display unit on the bridge with LEDs and buttons. Additionally, there is a panel in the Engine Room that displays door statuses. Although we have a backup of the door PLC codes, the PLCs in the bridge and Engine Room are password protected, and we are unable to access the passwords.

I have successfully created the PLC code for the doors and set up the necessary links in the Link table. However, there seems to be an issue with the communication setup between the PLCs, as the system is not functioning as expected. The door PLC codes are the same, with only the station IDs varying from 1 to 7 for the doors, 8 for the Engine Room PLC, and 9 for the bridge PLC.

I have provided all the necessary software files with the updated Bridge PLC code. I would appreciate it if someone could review the setup and identify any communication issues that may be present. Thank you in advance for your assistance.

Keywords: vessel, water-tight door system, China, Fatek PLC, display unit, bridge, Engine Room, password protected, communication setup, station IDs, software, review, assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the most frequently used communication modules in PLCs for data exchange and networking?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AB2005</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello,

I would like to inquire about the communication between the 9 Bridge PLC acting as the 'Master' and the slave PLCs connected through the link tables you have set up. Can you verify if data exchange is occurring successfully with all slave PLCs?

Furthermore, I am interested in understanding the rationale behind incorporating 118 data exchanging words in the Link table. Could you provide some insights on this?

Please refer to the attached image for instructions to install M150, M151, and M152. Kindly provide feedback on the outcomes of this installation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AB2005</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, 

Thank you for your response. I have been focusing on establishing basic functionality and have not fully explored an additional function yet. Each alarm on every door is transmitted back to the main PLC, and a modbus NMEA string is sent to the Voyage Data Recorder (VDR). Although I am unsure of the structure of the string at this time, I believe it is important to include all necessary information so that I can properly configure it once I have more details. I will be visiting the vessel today to test and troubleshoot, and will make sure to implement your suggestions and provide an update afterwards. 

Thank you once again. 

Best regards, 
Brendan</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Burnavator</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AB2005 inquired about the data exchange between the 'Master' 9 Bridge PLC and the slave PLCs connected via link tables. Could you please confirm if data is successfully being exchanged with all slave PLCs? Additionally, could you provide insights on why there are 118 data exchanging words in the Link table? Please refer to the attached picture for the installation of M150, M151, and M152, and share the outcomes. 

I recently discovered that the 7 slave PLCs for each door had conflicting Modbus addresses, and the PLC code for door 3 was different from the rest, causing corruption in the Link Table. After removing the extra code, everything is now functioning smoothly. Thank you for your assistance. 

Best regards,
Brendan</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Burnavator</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I troubleshoot communication issues in a Fatek PLC water-tight door system on a vessel?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot communication issues in a Fatek PLC water-tight door system on a vessel, you should first ensure that all PLCs are properly connected and configured. Check the wiring, settings, and communication protocols to identify any potential issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should I do if I am unable to access the password-protected Fatek PLCs on my vessel's water-tight door system?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are unable to access the password-protected Fatek PLCs on your vessel's water-tight door system, you may need to contact a professional with expertise in Fatek PLC programming to help reset the passwords or troubleshoot the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How important is it to have consistent door PLC codes and varying station IDs in a water-tight door system on a vessel?</h4>
<p class='text-muted'><strong>Answer:</strong> - Having consistent door PLC codes and varying station IDs is crucial for the proper operation of a water-tight door system on a vessel. This setup helps differentiate between the different doors and PLCs, ensuring that each component functions correctly within the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What role does the display unit on the bridge play in a vessel's water-tight door system with Fatek PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - The display unit on the bridge plays a vital role in monitoring and controlling the water-tight door system on a vessel. It provides real-time feedback on the status</p>
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
