
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Troubleshooting Alarm Server Connection Status for Color Animation I am currently attempting to link a color animation to a rectangle that changes based on its connection status to the Alarm Server. Despite my attempts using system\AlarmStatus=Connected, I have not been successful. I also tried using RNA://$Global/MyProject/My Area:MyAlarmServer=1, but it">
    <meta name="keywords" content="troubleshooting factorytalk view se, network distributed, color animation, alarm server connection, connection status, color animation linking, rectangle color animation, alarm server connection status, alarmstatus connected, rna protocol, global area alarm server, troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-view-se-network-distributed-for-color-animation">
    <title>Troubleshooting FactoryTalk View SE Network Distributed for Color Animation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FactoryTalk View SE Network Distributed for Color Animation | Oxmaint Community">
    <meta property="og:description" content="Troubleshooting Alarm Server Connection Status for Color Animation I am currently attempting to link a color animation to a rectangle that changes based on its connection status to the Alarm Server. Despite my attempts using system\AlarmStatus=Connected, I have not been successful. I also tried using RNA://$Global/MyProject/My Area:MyAlarmServer=1, but it">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-view-se-network-distributed-for-color-animation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FactoryTalk View SE Network Distributed for Color Animation | Oxmaint Community">
    <meta name="twitter:description" content="Troubleshooting Alarm Server Connection Status for Color Animation I am currently attempting to link a color animation to a rectangle that changes based on its connection status to the Alarm Server. Despite my attempts using system\AlarmStatus=Connected, I have not been successful. I also tried using RNA://$Global/MyProject/My Area:MyAlarmServer=1, but it">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-view-se-network-distributed-for-color-animation"
      },
      "headline": "Troubleshooting FactoryTalk View SE Network Distributed for Color Animation",
      "description": "Troubleshooting Alarm Server Connection Status for Color Animation I am currently attempting to link a color animation to a rectangle that changes based on its connection status to the Alarm Server. Despite my attempts using system\AlarmStatus=Connected, I have not been successful. I also tried using RNA://$Global/MyProject/My Area:MyAlarmServer=1, but it",
      "author": {
        "@type": "Person",
        "name": "Lovell"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-23",
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
                <h1 class="text-white">Troubleshooting FactoryTalk View SE Network Distributed for Color Animation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Lovell</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">819</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">471</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Troubleshooting Alarm Server Connection Status for Color Animation

I am currently attempting to link a color animation to a rectangle that changes based on its connection status to the Alarm Server. Despite my attempts using "system\AlarmStatus='Connected'", I have not been successful. I also tried using RNA://$Global/<MyProject>/<My Area>:<MyAlarmServer>=1, but it was not recognized as valid.

Has anyone encountered this issue before and can offer assistance? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I have not personally tested it, consider using the function AE_HistoryStatus.AE_HistoryStatus( "My_FTAE_SERVER_Name" ). This function returns a value ranging from 0 to 8 that indicates the status of the connection to the alarm history database. The possible statuses are as follows: 0 for initializing the connection, 1 for being connected, 2 for being disconnected, 3 for starting logging, 4 for database definition deletion, 5 for failed logging, 6 for stopping logging, 7 for stopped logging, and 8 for alarm history not being configured. With 9 different states, using a color animation may not be ideal. Instead, consider using a multi-State Indicator for better functionality. Please note that this information pertains to the Alarm and Event server, and not the older HMI Tag Alarms. The alarm tags under the system folder are specific to the old method and do not apply to Alarms and Events.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experimented with your recommendation but am facing difficulties in achieving the correct format. I am currently attempting to simply display an integer as a test. The expressions I have tested include: 1. {AE_HistoryStatus(Alarm 4867)} 2. {AE_HistoryStatus(/Area1/Alarm 4867)} 3. {AE_HistoryStatus("/Area1/Alarm 4867")} 4. {AE_HistoryStatus("Alarm 4867")} 5. {AE_HistoryStatus"Alarm 4867"} 6. {AE_HistoryStatus:Alarm 4867}. It appears that the use of the open bracket is causing issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lovell</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you experienced the benefits of using {AE_HistoryStatus("Alarm_4867")} yet?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you experienced the latest version of Alarms and Events, {AE_HistoryStatus("Alarm_4867")}? I can confirm that I have tried it myself, and it is indeed the new V13 release.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lovell</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the AE_HistoryStatus feature was introduced in version 14. When I checked a device running version 13, I noticed that this feature was not included.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
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
            <p>I discovered an alternative solution from Rockwell that provides a display showing the status of HMI, Data, FTD, and A&E servers. This tool is compatible with multiple servers and has been tested in version 13 with success. Rockwell offers a Tech Note detailing the setup process, but a TechConnect contract is required to access it (ID # QA2083). For those without a TechConnect contract, I have included the display in a downloadable .zip file.

To use the display, unzip the serverstatus.zip file to obtain the serverstatus.gfx graphic display. In FTView, add the component to the project by right-clicking on the Displays editor and selecting the .gfx file location. Then, open the serverstatus display, add VBA Code by right-clicking on the display, and follow the instructions in the provided directions.

Ensure to input the server names accurately in the VBA code, specify the number of servers for each type, and include the total number of server groups. The display is designed to be used as a pop-up, so integrate it into an existing screen with a button for easy access. Testing can be done using the Test Display feature in the display editor.

Feel free to refer to the attached picture for a visual of the display in action with one of the demo applications. This tool from Rockwell can streamline server monitoring and management for improved efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to make you aware that I previously utilized the display provided by RA, but found it to be only around 75% operational. I encountered various issues such as bugs, errors, and omissions in both the display itself and the VBA code it relied on, requiring significant fixes for proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Operaghost, for your advice. I will test it out and share the outcome. Appreciate the tip, ASF!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lovell</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm currently experiencing some issues with broken text, but the overall performance is satisfactory. Please see the before and after images attached for reference. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lovell</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's surprising to see that it hasn't been updated in more than a decade.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I link a color animation to the connection status of the Alarm Server in FactoryTalk View SE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To link a color animation to the Alarm Server connection status, you can use expressions like "system\AlarmStatus='Connected'". Ensure that the expression is correctly written and applied to the desired object.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What should I do if the expression "RNA://$Global/<MyProject>/<My Area>:<MyAlarmServer>=1" is not recognized as valid for color animation in FactoryTalk View SE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the expression is not recognized, double-check the syntax and ensure that all placeholders and variables are correctly defined. You may also refer to the FactoryTalk View SE documentation for the correct format of expressions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can I troubleshoot issues with linking color animation to the Alarm Server connection status in FactoryTalk View SE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are facing difficulties with linking color animation to the Alarm Server connection status, you can seek assistance from the FactoryTalk View SE community forums or contact Rockwell Automation support for expert help and troubleshooting tips.</p>
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
