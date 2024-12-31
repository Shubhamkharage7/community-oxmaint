
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have been working on a Local SE project for weeks using FactoryTalk View Studio 8.10.00 and RSLogix5000 V18 on Windows 7 Pro 64-bit. Recently, AVG prompted me to restart my PC, which I delayed until this morning. However, after the restart, I encountered an issue where FTView SE">
    <meta name="keywords" content="factorytalk directory connection issue, troubleshooting factorytalk view studio, factorytalk global directory server problem, rslogix5000 error message, fixing hmi server service load failure">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-directory-connection-issue">
    <title>Troubleshooting FactoryTalk Directory Connection Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FactoryTalk Directory Connection Issue | Oxmaint Community">
    <meta property="og:description" content="I have been working on a Local SE project for weeks using FactoryTalk View Studio 8.10.00 and RSLogix5000 V18 on Windows 7 Pro 64-bit. Recently, AVG prompted me to restart my PC, which I delayed until this morning. However, after the restart, I encountered an issue where FTView SE">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-directory-connection-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FactoryTalk Directory Connection Issue | Oxmaint Community">
    <meta name="twitter:description" content="I have been working on a Local SE project for weeks using FactoryTalk View Studio 8.10.00 and RSLogix5000 V18 on Windows 7 Pro 64-bit. Recently, AVG prompted me to restart my PC, which I delayed until this morning. However, after the restart, I encountered an issue where FTView SE">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-factorytalk-directory-connection-issue"
      },
      "headline": "Troubleshooting FactoryTalk Directory Connection Issue",
      "description": "I have been working on a Local SE project for weeks using FactoryTalk View Studio 8.10.00 and RSLogix5000 V18 on Windows 7 Pro 64-bit. Recently, AVG prompted me to restart my PC, which I delayed until this morning. However, after the restart, I encountered an issue where FTView SE",
      "author": {
        "@type": "Person",
        "name": "daba"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-15",
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
                <h1 class="text-white">Troubleshooting FactoryTalk Directory Connection Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">24603</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">348</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have been working on a Local SE project for weeks using FactoryTalk View Studio 8.10.00 and RSLogix5000 V18 on Windows 7 Pro 64-bit. Recently, AVG prompted me to restart my PC, which I delayed until this morning. However, after the restart, I encountered an issue where FTView SE cannot open any applications, showing the error message "Fail to load HMI Server Service." Additionally, RSLogix is also not starting correctly, displaying a lengthy error message as seen in the picture. It seems like my computer is disconnected from the FactoryTalk Global Directory Server. If anyone has experienced this issue before and knows how to resolve it, your help would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If system restore points are enabled on your PC, consider checking them to revert back to a previous system state before AVG caused any issues. It's possible that AVG has removed or disabled some necessary files for your software to function properly. I've had to address similar issues on multiple computers before, but not specifically related to AB software. It's uncertain what the result will be, but this step may help resolve the problem. - James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our factory talk encountered a common issue that required us to remove a file with a .RNL extension located in the directory C:\ProgramData\Rockwell Automation\FactoryTalk Activation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>colinelectrician</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few months ago, I encountered an issue with Windows 7 that required A-B tech support to perform a repair in the remove/install programs section for the Factory Talk Services Platform. Additionally, when I installed A-B software on Windows 10, tech support had to remove a Windows update to ensure proper functionality. These troubleshooting steps may be beneficial if you encounter similar issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you encounter issues with FactoryTalk Service Platform, consider repairing it through the add/remove programs section on your control panel. I have faced a similar issue after updating in the past, and this solution successfully resolved it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF suggests repairing FactoryTalk Service Platform through the add/remove programs section of the control panel. This approach has been effective in resolving issues that arise after software updates. Additionally, reconfiguring the directory server using "Specify FactoryTalk Directory Location" and running the "FactoryTalk Directory Configuration Wizard" may help address any related issues, especially after renaming the computer. Wishing you success in resolving the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>crawler009</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After experiencing issues, I successfully resolved them by running a "Reset Directory" batch file obtained from a knowledge base article. I will locate the article and share the KB number soon. To reset the Local and Global directories to their original settings, simply extract and run the ResDir.zip file. Following this, I restored an archive file containing the correct users and groups, ensuring to select the option to include them. Everything appears to be functioning properly now.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a similar issue and found that using the "ResDir" utility was quite effective. I highly recommend checking out the "Restore Directory (ResDir) Utility" guide on Rockwell Automation's customer support site. Thank you for your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Joseat20</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have forgotten or lost your Factory Talk login credentials, the ResDir provides a workaround to reset everything to default and create a new username and password. This can be especially helpful in situations where you need access to the system but cannot remember your login information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCnovice61</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey there, is there a possibility for someone to share the ResDir.zip file? Thank you in advance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>leodb2003</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I encountering the error message "Fail to load HMI Server Service" in FactoryTalk View SE after restarting my PC following an AVG prompt?</h4>
<p class='text-muted'><strong>Answer:</strong> This error could indicate a connection issue with the FactoryTalk Global Directory Server after the restart.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the issue where FTView SE cannot open any applications and RSLogix is not starting correctly after a PC restart?</h4>
<p class='text-muted'><strong>Answer:</strong> You may need to troubleshoot the connection to the FactoryTalk Global Directory Server to resolve this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could be causing my computer to be disconnected from the FactoryTalk Global Directory Server, leading to FTView SE and RSLogix issues?</h4>
<p class='text-muted'><strong>Answer:</strong> Factors like network configuration changes, software updates, or firewall settings could potentially disrupt the connection to the Directory Server.</p>
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
