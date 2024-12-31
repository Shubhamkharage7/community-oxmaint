
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello Members! I am looking for a way to prevent unauthorized access to our Rockwell PLC systems. Is there a method to set up user authentication with passwords for accessing the PLC code? Additionally, is there a log file in Logix that records the time when communication is established">
    <meta name="keywords" content="secure access control, rockwell plc systems, user authentication, log files, plc code security, user passwords, logix communication, unauthorized access prevention">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/secure-access-control-for-rockwell-plc-systems-implementing-user-authentication-and-log-files">
    <title>Secure Access Control for Rockwell PLC Systems: Implementing User Authentication and Log Files | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Secure Access Control for Rockwell PLC Systems: Implementing User Authentication and Log Files | Oxmaint Community">
    <meta property="og:description" content="Hello Members! I am looking for a way to prevent unauthorized access to our Rockwell PLC systems. Is there a method to set up user authentication with passwords for accessing the PLC code? Additionally, is there a log file in Logix that records the time when communication is established">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/secure-access-control-for-rockwell-plc-systems-implementing-user-authentication-and-log-files">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Secure Access Control for Rockwell PLC Systems: Implementing User Authentication and Log Files | Oxmaint Community">
    <meta name="twitter:description" content="Hello Members! I am looking for a way to prevent unauthorized access to our Rockwell PLC systems. Is there a method to set up user authentication with passwords for accessing the PLC code? Additionally, is there a log file in Logix that records the time when communication is established">
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
        "@id": "https://community.oxmaint.com/discussion-forum/secure-access-control-for-rockwell-plc-systems-implementing-user-authentication-and-log-files"
      },
      "headline": "Secure Access Control for Rockwell PLC Systems: Implementing User Authentication and Log Files",
      "description": "Hello Members! I am looking for a way to prevent unauthorized access to our Rockwell PLC systems. Is there a method to set up user authentication with passwords for accessing the PLC code? Additionally, is there a log file in Logix that records the time when communication is established",
      "author": {
        "@type": "Person",
        "name": "turbohamad"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Secure Access Control for Rockwell PLC Systems: Implementing User Authentication and Log Files</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>turbohamad</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">836</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">54</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello Members! I am looking for a way to prevent unauthorized access to our Rockwell PLC systems. Is there a method to set up user authentication with passwords for accessing the PLC code? Additionally, is there a log file in Logix that records the time when communication is established with the PLC? I would appreciate guidance on how to proceed with this security measure. I am unsure of how to implement it and what the safest approach would be to prevent unauthorized individuals from tampering with the PLC system.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To prevent unauthorized access and modifications, simply utilize the key-switch located on the CPU. Switch it to the "Run" position and then remove the key for added security. This simple yet effective method can help protect your system from unwanted intruders and alterations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chavak</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>chavak suggested a useful solution for preventing unauthorized access and edits: using the key-switch on the CPU to switch it to "Run" and removing the key. This method was successfully implemented at a water utility, allowing users to read the logic without being able to make changes online. 

This technique is effective in maintaining security and ensuring that only authorized individuals can access and modify important data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to note that simply removing the key won't prevent unauthorized access to the system. Once a user is online, they can still manipulate tag values. While they can't alter the logic, they can cause damage to the system. Removing the key is a good initial step towards security. If your controllers are only accessed by one computer, you can set up user accounts and passwords on that specific machine. However, keep in mind that these settings are computer-specific. If other computers have access, additional security measures like FactoryTalk Security may be necessary, although it is a complex process. Alternatively, consider providing users with Studio 5000 Service Edition software, which allows for view-only access to the Logix software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost mentioned that simply removing the key will not prevent unauthorized access to online operations, as individuals can still manipulate tag values once online. While they may not be able to edit the logic, they can potentially cause harm to the system. One effective step towards securing access is removing the key. For a single computer accessing the controllers, implementing user authentication on that specific device can enhance security. However, it's important to note that these security measures are limited to the designated computer and may not apply to other devices. For managing multiple computers, utilizing FactoryTalk Security is recommended, although it requires significant effort to implement. Another option is to provide users with Studio 5000 Service Edition software, which offers a View Only version of the Logix software.

Members are advised to verify whether the ability to force and change tag values is possible when the PLC is in RUN mode via a hard key switch. Referencing the ControlLogix document and providing a screenshot for clarification is encouraged. Furthermore, users are inquiring about methods to track communication with the PLC controller, including logging when the last communication occurred and timestamp. Any insights on this matter would be appreciated.

Regards</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>turbohamad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One page beyond the page provided in the user manual, there is a concise table outlining the functions corresponding to each mode switch position. It seems that there is no more detailed list available. The table in the user manual briefly outlines specific items affected by the key switch position, but does not list items unaffected. For instance, none of the modes listed indicate the capability to connect online with the PLC or perform an upload. This is because online connectivity and uploading can be done regardless of the switch position. With over 20 years of experience at Rockwell, teaching their official training classes for 23 years, I have extensive knowledge on Logix controllers. I can confirm that you can force I/O and manually change tag values in any key position. However, editing logic is not possible when the key is in the run position. For example, you cannot create a new timer, but you can adjust the preset on an existing timer. This adjustment is considered a data change, not a logic change, and can be done in any switch position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are utilizing FactoryTalk View Services Platform, you have the ability to implement security measures to restrict the actions certain users are permitted to perform. This capability aligns with your requirements. A valuable resource that may assist you in this process can be accessed at: https://literature.rockwellautomation.com/idc/groups/literature/documents/qs/ftsec-qs001_-en-e.pdf

To configure security settings, navigate to the admin console and right click on your network (the top-level item in your explorer) before selecting the security option. Within the RSLogix5000 security options, you can allocate permissions to individual users or user groups. Subsequently, it is essential to create a logical name for each PLC by accessing Network>System>Networks and Devices>Logical Names. Proceed to connect Studio 5000 to the designated logical name by accessing Controller Properties, navigating to the Security tab, selecting your FactoryTalk Directory as the Security Authority, and securing with the corresponding Logical Name. It is crucial that the PLC name matches the logical name specified in your active directory.

While this process may seem burdensome and necessitates adequate support infrastructure, it is indeed achievable and suits your specific requirements. You have the flexibility to assign permissions to users and user groups, enabling them to view the program offline, view it online, adjust values, manipulate logic, and more. The granularity of settings customization available is truly commendable.

Although a FactoryTalk Directory is a prerequisite for implementing these security measures, the necessity of a FactoryTalk View SE remains uncertain.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing FactoryTalk View Services Platform, users have the ability to implement security measures to restrict user access and permissions. This feature aligns with your needs. In addition, the Processor can be programmed to trigger an alarm when changes are made to the PLC code. It's worth noting that processor keys are not unique and can be acquired or taken from other processors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I implement user authentication with passwords for accessing Rockwell PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - To implement user authentication with passwords for Rockwell PLC systems, you can utilize the security features available in Rockwell's Logix platform. This includes setting up user accounts with unique passwords and assigning specific access permissions to each user.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a way to track communication establishment with the PLC through a log file in Logix?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, Rockwell's Logix platform allows for the creation of log files that record various system activities, including the time when communication is established with the PLC. You can configure these log files to track important events and monitor system interactions for security purposes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the safest approach to prevent unauthorized individuals from tampering with Rockwell PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - The safest approach to prevent unauthorized access and tampering with Rockwell PLC systems is to implement a combination of security measures, such as user authentication, password protection, role-based access control, and system monitoring through log files. By enforcing strict access control policies and regularly reviewing system logs, you can enhance the security of your PLC systems and mitigate the risk of unauthorized interference.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
