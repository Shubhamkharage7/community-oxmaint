
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently utilizing FactoryTalk View Studio ME to develop a custom application for an Allen-Bradley PanelView Plus7. My goal is to showcase the loaded application name (found under Terminal Settings/Startup Options/Application Name) on one of the HMI screens. Can anyone confirm if this functionality is achievable on this">
    <meta name="keywords" content="factorytalk view studio me, hmi screen, allen-bradley panelview plus7, custom application, terminal settings, startup options, application name, showcasing loaded application name, hmi screens, functionality, achievable, platform, development, allen-">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/display-loaded-application-name-on-hmi-screen-in-factorytalk-view-studio-me">
    <title>Display loaded application name on HMI screen in FactoryTalk View Studio ME | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Display loaded application name on HMI screen in FactoryTalk View Studio ME | Oxmaint Community">
    <meta property="og:description" content="I am currently utilizing FactoryTalk View Studio ME to develop a custom application for an Allen-Bradley PanelView Plus7. My goal is to showcase the loaded application name (found under Terminal Settings/Startup Options/Application Name) on one of the HMI screens. Can anyone confirm if this functionality is achievable on this">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/display-loaded-application-name-on-hmi-screen-in-factorytalk-view-studio-me">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Display loaded application name on HMI screen in FactoryTalk View Studio ME | Oxmaint Community">
    <meta name="twitter:description" content="I am currently utilizing FactoryTalk View Studio ME to develop a custom application for an Allen-Bradley PanelView Plus7. My goal is to showcase the loaded application name (found under Terminal Settings/Startup Options/Application Name) on one of the HMI screens. Can anyone confirm if this functionality is achievable on this">
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
        "@id": "https://community.oxmaint.com/discussion-forum/display-loaded-application-name-on-hmi-screen-in-factorytalk-view-studio-me"
      },
      "headline": "Display loaded application name on HMI screen in FactoryTalk View Studio ME",
      "description": "I am currently utilizing FactoryTalk View Studio ME to develop a custom application for an Allen-Bradley PanelView Plus7. My goal is to showcase the loaded application name (found under Terminal Settings/Startup Options/Application Name) on one of the HMI screens. Can anyone confirm if this functionality is achievable on this",
      "author": {
        "@type": "Person",
        "name": "iammonkie"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Display loaded application name on HMI screen in FactoryTalk View Studio ME</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>iammonkie</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1883</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">309</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently utilizing FactoryTalk View Studio ME to develop a custom application for an Allen-Bradley PanelView Plus7. My goal is to showcase the loaded application name (found under Terminal Settings/Startup Options/Application Name) on one of the HMI screens. Can anyone confirm if this functionality is achievable on this platform?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It may have been some time, but I'm confident that you can extract the screen number from the panelview and transfer it to the PLC. By utilizing this number, you can easily incorporate a predefined string into the tag used for the panelview.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hardaysknight</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>However, the appellation of the application is a different issue altogether. The original poster is inquiring about the name of the currently active application, not the screen itself. Unless I am mistaken. In a forum post, user iammonkie mentioned their attempt to showcase the application name loaded in Terminal Settings/Startup Options on one of the HMI screens. I am unaware of any method to exhibit the loaded application name or save it to a tag for display purposes. OG.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost mentioned that the application name is a separate issue from the screen name that the OP is seeking. It is unclear how to display the name of the loaded application or save it for future display. Ah yes, I misunderstood earlier. I don't think there is a method to achieve that, OP.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hardaysknight</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rockwell offers ActiveX controls for network and terminal information. You can access these controls by visiting their platform. The available information is limited to the DeviceName. However, you can potentially utilize this data, along with part of the IP address, in conjunction with a multi-state control to reach your desired outcome. Remember to continually monitor your progress and make adjustments as needed for optimal results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface mentioned that Rockwell offers ActiveX controls for network and terminal information. You can access these controls from the following link: https://imgur.com/a/fsfBQeb. While the controls only display the DeviceName, you may be able to utilize this information along with the IP address in a multi-state control to reach your desired outcome. The DeviceName specifically refers to the name assigned to the Ethernet interface, rather than the application name. After reviewing this ActiveX control and others, it seems that none provide access to the loaded application name.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
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
            <p>Unfortunately, it is disappointing that the information cannot be accessed at this time. However, I sincerely appreciate all the assistance provided. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>iammonkie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By leveraging unique device identifiers, such as the last octet of the IP address (1-254), you can generate a static map with a multi-state control. In this method, the captions on the map can be populated with application names corresponding to each device. This approach allows for easy identification and management of various devices based on their IP addresses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am searching for the file \Windows\RemoteHelper.dll on a PanelView Plus. It may be a long shot, but I will check for it on Monday in case someone has it available. I am still working on retrieving the loaded application name to the PLC, as there has been recent interest in this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have developed a solution that has been tested on both Series A and Series B PanelView Plus devices. I am currently seeking one more individual to test it out. To participate, you will need a PLC that allows for logic customization, a PanelView Plus unit, and a Github account. 

Please note that while my solution is not flawless, it does retrieve the file configured to run at startup. If an application is not set to run at startup, or if someone shuts down the application and loads another, it will still show the file configured to load at startup. However, if you can rely on the "run at startup" application as the one that should be running, then my solution will suffice. I will continue to refine the solution when time allows.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have access to a PanelView Plus device? I am in search of a specific file located at \Windows\RemoteHelper.dll. It might be a long shot, but I will be able to retrieve it on Monday if no one responds. I am still determined to find a way to retrieve the loaded application name to the PLC, as this has been a recent topic of interest for many. Have you had any success in extracting a copy of RemoteHelper.DLL? I've been struggling to access it while the PanelView is running. I've been developing a Python ME Utility and am curious about any hidden functionalities it may uncover. Check out the Python ME Utility on GitHub for more information: aawilliams85/pymeu.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aawilliams85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, I have discovered how to remotely access the MER files on the terminal using a Python ME Utility script. This tool allows you to list files in any directory of the terminal. Additionally, you can utilize SFTP to explore the file system on a running terminal with SSH enabled on series B terminals, although I encountered difficulty copying a specific file. I have an older terminal but have been preoccupied with other tasks. Find more information on this topic by visiting the GitHub repository for pymeu by aawilliams85.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Regrettably, I have encountered issues with various methods such as S/FTP which either show errors because the file is in use or produce a 0 byte duplicate of the file. I am uncertain if acquiring a duplicate of the file is essential as my requirements are relatively straightforward, mainly downloading *.MER files. However, there might be additional valuable information within the files. I considered unpacking the *.FUP file to access the content, but I was unsure how to extract the underlying *.IMG file, so I did not investigate further. I have incorporated a feature to retrieve the startup file based on a previous discussion, for which I am grateful. Any other suggestions or input are encouraged.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aawilliams85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Exploring the unpacked MER directory allowed me to retrieve the original project name from the MED file within. However, there was a risk that the MER may have been renamed. It is important to note that the MED file does not necessarily correspond to the MER name. Additionally, I was curious to discover other potential uses for the DLL file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Regrettably, this is a common scenario that I have been investigating in PyMEU. I have various versions of the same project with distinct names. Despite exploring the \Temp\~MER.00 directory, I reached a dead end. The information in \Windows\UnpackMer.log also didn't provide any valuable insights. It seems like there must be a solution to this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aawilliams85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>aawilliams85 mentioned that there has to be a solution we haven't tried yet. I completely agree and am confident that we will discover it together. I have sent you a direct message to discuss further. Let's work towards finding a way forward!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The registry key located at HKEY_LOCAL_MACHINE\SOFTWARE\Rockwell Software\RSView Enterprise\3.0\Retentive\RDMCACHE contains information about the most recently launched application and its associated value for managing retentive tag data (for example, "\\Windows\\Logs\\<AppName>\\Retentive"). Although this key only provides details of the most recently launched application, it is still a valuable resource. However, I encountered difficulties when attempting to access this key using the CIP message that was previously used to retrieve startup application information. In my testing with the PanelView Plus 6, I identified a total of 13 whitelisted registry keys that can be accessed - unfortunately, the aforementioned key was not included in this list. For now, I will continue to focus on retrieving information about the startup application unless there are alternative solutions to explore.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aawilliams85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon my return to the office, I will delve deeper into the matter. I have shared a demonstration showcasing the process of retrieving the current running file name in a PanelView using MSG instructions on GitHub. Find more details on how to access the current running file name in a PanelView via MSG on the repository by dmroeder/panelview_running_file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I display the loaded application name on an HMI screen in FactoryTalk View Studio ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can display the loaded application name on an HMI screen in FactoryTalk View Studio ME. This can be achieved by accessing the Terminal Settings/Startup Options/Application Name parameter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I showcase the loaded application name on the HMI screen in FactoryTalk View Studio ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - To display the loaded application name on the HMI screen, you need to access the Terminal Settings/Startup Options/Application Name setting within FactoryTalk View Studio ME and incorporate it into your HMI screen design.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to customize the display of the loaded application name on the HMI screen in FactoryTalk View Studio ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can customize the display of the loaded application name on the HMI screen in FactoryTalk View Studio ME by incorporating it into your HMI screen design using appropriate text or graphic elements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Will the displayed application name update automatically if changed in the Terminal Settings/Startup Options in FactoryTalk View Studio ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, if the loaded application name is changed in the Terminal Settings/Startup Options, the displayed application name on the HMI screen will update automatically in FactoryTalk View Studio ME.</p>
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
