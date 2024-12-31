
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good afternoon, I am experiencing HMI communication challenges with FactoryTalk View ME. I am attempting to update an existing program that has been operational, but after downloading the updated runtime file, the HMI displays question marks instead of data. I saved the runtime under a new filename and loaded">
    <meta name="keywords" content="hmi communication challenges, factorytalk view me troubleshooting, factorytalk communication settings, factorytalk view me runtime issues, hmi data display problem, rslinx enterprise communication setup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-communication-challenges-in-factorytalk-view-me">
    <title>Troubleshooting HMI Communication Challenges in FactoryTalk View ME | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting HMI Communication Challenges in FactoryTalk View ME | Oxmaint Community">
    <meta property="og:description" content="Good afternoon, I am experiencing HMI communication challenges with FactoryTalk View ME. I am attempting to update an existing program that has been operational, but after downloading the updated runtime file, the HMI displays question marks instead of data. I saved the runtime under a new filename and loaded">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-communication-challenges-in-factorytalk-view-me">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting HMI Communication Challenges in FactoryTalk View ME | Oxmaint Community">
    <meta name="twitter:description" content="Good afternoon, I am experiencing HMI communication challenges with FactoryTalk View ME. I am attempting to update an existing program that has been operational, but after downloading the updated runtime file, the HMI displays question marks instead of data. I saved the runtime under a new filename and loaded">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-communication-challenges-in-factorytalk-view-me"
      },
      "headline": "Troubleshooting HMI Communication Challenges in FactoryTalk View ME",
      "description": "Good afternoon, I am experiencing HMI communication challenges with FactoryTalk View ME. I am attempting to update an existing program that has been operational, but after downloading the updated runtime file, the HMI displays question marks instead of data. I saved the runtime under a new filename and loaded",
      "author": {
        "@type": "Person",
        "name": "threetrey"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-10",
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
                <h1 class="text-white">Troubleshooting HMI Communication Challenges in FactoryTalk View ME</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>threetrey</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2926</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">414</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good afternoon, I am experiencing HMI communication challenges with FactoryTalk View ME. I am attempting to update an existing program that has been operational, but after downloading the updated runtime file, the HMI displays question marks instead of data. I saved the runtime under a new filename and loaded the updated application, selecting "No" when prompted to replace communication settings. Despite selecting the most recent development file with the same name as the current runtime, I am unable to upload the file from the HMI due to the "Never Allow Conversion" setting.
I confirmed that the communication setup in RSLinx Enterprise matches the settings in "Application Settings->Device Shortcuts." Even though I have not changed the communication setup or selected a different file, I am unable to establish communication after the update. Could there be a setting in FactoryTalk causing this communication issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>By utilizing the GoTo Config button when downloading this file, users can easily validate the communication path on the live screen and make any necessary adjustments. The F3 application settings on the configuration screen provide quick access to view and edit the communication path shortcut. This feature allows for convenient monitoring and editing of communication paths directly from the running screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jholm90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are the tags functioning properly in FTView Studio's runtime test feature? If they are not working, there may be an issue with your shortcut configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have any information on the resolution for this issue? I am encountering the same problem when downloading a restored HMI back into a remote HMI system. The original runtime functions properly when downloaded again, but the modified version does not. I manually added my RSLink Enterprise runtime targets as I am accessing remotely, and testing it on my PC shows it working fine. However, when I try to download it, all I see are question marks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Canuck_Programmer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently working on a 10-inch PanelView Plus 1000 with version 5.1 firmware. My project is in FactoryTalk View version 7.0 on a 32-bit Windows 7 virtual machine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Canuck_Programmer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Canuck_Programmer inquired about a solution to a common issue faced when downloading a restored HMI remotely. The original runtime works after downloading it back into the HMI, but the modified version does not. By manually adding RSLink Enterprise runtime targets and testing it on a local PC, the runtime runs smoothly. However, when downloaded, only question marks appear. The underlying issue seems to be related to the remote path on the PC differing from the path between the physical PanelView and the PLC. To resolve this, ensure that the communication path referenced to the PanelView is correctly set to the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>A common issue that has persisted in all versions since v4 is the importance of rebooting your PC after making any changes in the Linx Enterprise configuration before generating the MER file. Failing to do so can result in the file not working properly in the HMI. I learned this lesson through experience after facing frustrating do-overs in the past. It's a reminder that occasionally slips my mind, leading me to "re-learn" the lesson.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your responses, joseph_e2. I came across a similar suggestion in another forum and attempted it with no success. While I have previously been able to work on HMI remotely using the same method, I have encountered difficulties lately. It seems like there may be a communication pathway issue, as mentioned by robertmee. I was able to resolve a similar issue in the past by restoring the uploaded runtime on another HMI, manually adjusting the necessary tags on the displays, and creating a new runtime without accessing rslinx enterprise. Following the creation of the runtime, I downloaded it to the HMI and ensured that the option to replace communication pathways was not selected during the download process. The communication pathway between my PC, the HMI, and the PLC should not vary significantly in this basic system setup, which consists of two ControlLogix L72 PLCs with ENBT cards in the same rack connecting to both PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Canuck_Programmer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To clarify, the successful connection between your PC and devices like PLCs depends on them being on the same subnet and route. If your panelview is connected to a different enxt module in the rack or through switches, and you're trying to access it remotely through a gateway or another enxt, setting the path from your PC may not work. I recommend reviewing the linx comms on both the working and non-working connections to compare the paths thoroughly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I want to express my gratitude for the assistance provided. I was able to successfully resolve the issue by following my usual procedure. Firstly, I uploaded and restored the HMI runtime, then I redirected the communication paths to the appropriate PLCs so that my PC could access the tags and test the application. After making all the necessary changes and conducting tests on my PC, I restored the HMI application again. I then updated the HMI screens by replacing buttons and objects with those from a different application without changing the communication paths.

I created a v5.1 runtime, downloaded it to the HMI, and ensured that the communication paths remained unchanged. The setup worked smoothly as all the PLCs and HMIs are within the same subnet in the plant, interconnected through a star configuration utilizing switches. There are no complicated VLANs or routing involved. It's worth mentioning that direct connections from an HMI to a PLC through another rack's Ethernet card were not utilized in this scenario.

I trust that sharing my experience here will prove beneficial to others encountering similar challenges in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Canuck_Programmer</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is my HMI displaying question marks instead of data after updating the program in FactoryTalk View ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - This issue could be caused by mismatched communication settings between the runtime file and the updated application. Make sure to carefully select the correct communication settings during the update process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I unable to upload the file from the HMI due to the "Never Allow Conversion" setting?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "Never Allow Conversion" setting may prevent file uploads if it is enabled. Check the settings in FactoryTalk View ME to see if this option is causing the communication issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot communication challenges in FactoryTalk View ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot communication challenges, ensure that the communication setup in RSLinx Enterprise matches the settings in "Application Settings->Device Shortcuts." Verify that the correct file with the same name as the current runtime is selected during the update process. Additionally, check for any potential settings in FactoryTalk that might be causing the communication issue.</p>
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
