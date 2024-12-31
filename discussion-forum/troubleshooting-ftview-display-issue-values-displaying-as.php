
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I have been diligently working on my Human Machine Interface (HMI) with FTview for over a year now without any major issues. However, recently I encountered a problem when running a test display where instead of values, only * appeared in place of the values. This issue">
    <meta name="keywords" content="ftview troubleshooting, display issue, hmi values displaying as *, ftview tags issue, online folder empty, rslinx connection problem, ethernet driver reinstall, plc connection, logix5000 access, panelview display problem, runtime creation, tag">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-display-issue-values-displaying-as">
    <title>Troubleshooting FTView Display Issue: Values Displaying as * | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FTView Display Issue: Values Displaying as * | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I have been diligently working on my Human Machine Interface (HMI) with FTview for over a year now without any major issues. However, recently I encountered a problem when running a test display where instead of values, only * appeared in place of the values. This issue">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-display-issue-values-displaying-as">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FTView Display Issue: Values Displaying as * | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I have been diligently working on my Human Machine Interface (HMI) with FTview for over a year now without any major issues. However, recently I encountered a problem when running a test display where instead of values, only * appeared in place of the values. This issue">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-display-issue-values-displaying-as"
      },
      "headline": "Troubleshooting FTView Display Issue: Values Displaying as *",
      "description": "Greetings everyone, I have been diligently working on my Human Machine Interface (HMI) with FTview for over a year now without any major issues. However, recently I encountered a problem when running a test display where instead of values, only * appeared in place of the values. This issue",
      "author": {
        "@type": "Person",
        "name": "thehoneybadger"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-11",
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
                <h1 class="text-white">Troubleshooting FTView Display Issue: Values Displaying as *</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">409</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">260</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone,
I have been diligently working on my Human Machine Interface (HMI) with FTview for over a year now without any major issues. However, recently I encountered a problem when running a test display where instead of values, only "*" appeared in place of the values. This issue is not isolated to a specific display; rather, it is occurring across all displays. It seems as though the program is unable to recognize any of the tags associated with it. It is worth noting that everything was functioning properly the day before, but the next day, it seemed like the program was unable to locate the project it is linked to.

Upon inspecting the tags, I noticed that the "Online" folder, which typically contains all the program tags, was empty, giving the impression that they had been deleted or something similar had occurred. Despite attempting to refresh all folders, the online folder remained empty. Initially, I suspected that the problem lay with RSLinx not establishing a connection between FTView and my Programmable Logic Controller (PLC). Consequently, I uninstalled and reinstalled the ethernet driver.

After reinstalling the ethernet driver, I was able to successfully ping both my PLC and HMI. Furthermore, I was able to access the PLC project online using Logix5000. Additionally, I created a new runtime and downloaded it to the panelview, confirming that the newly downloaded file operated correctly on the panelview. However, the test display continued to struggle in recognizing any of the tags.

I would greatly appreciate any guidance on how to reestablish the connection between this project and the PLC. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently checked the Communication tab on my device to see its current connections, but it appears that nothing has been updated or altered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to perform a ping test on the PLC from the PC being used to test the displays? Also, ensure that the "Design" tab in the Communication Setup within FactoryTalk Linx at the bottom of the project Explorer is correctly configured to communicate with the PLC. It is recommended to double check this configuration, especially if it was working correctly yesterday.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Joseph, I am able to establish communication between the PC and the PLC by pinging it. Additionally, I can access the PLC online using Logix5000. I have included a photo of the communication setup in post#2, which I believe is what you are mentioning as the FTLinx project explorer. Rest assured, the correct PLC has been identified.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>thehoneybadger confirmed: Hello Joseph. I have successfully established communication between the PC and the PLC, and I am able to access the PLC online using logix5000. I have included a visual representation of the communications setup in post#2. It seems this is what you are mentioning when you mention the FTLinx project explorer. The PLC is indeed the correct one. However, Joseph may be referring to a different aspect. In FTView, navigate to the explorer panel on the left-hand side. Locate two tabs at the bottom: application and communications. Click on communications and verify that the processor is correctly designated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JTCat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey JT, I wanted to clarify that the image I sent matches the location you mentioned in our conversation. It's found in the communications tab at the bottom of the explorer panel. Perhaps you're thinking of the image from post #1? The image I'm talking about is actually from post #2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The step I mentioned involves accessing the Communication Setup within the project application tab, rather than the Communications tab. This setup includes two modes indicated by circled tabs: Design (Local) for testing display on your PC, and Runtime (Target) for compiling the runtime (MER file).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Joseph_e2's inquiry, I located the Communication Setup in the project application tab as instructed. Recently, there have been updates in my system - notably, when I restarted FTView, everything began working again without identifying the root cause. Upon inspecting the communications setup, I realized that the PLC for the Design tab was correct (L35E), which surprised me, while the PLC for the Runtime tab was still the old one (L32E), causing no issues. Despite upgrading the PLC months ago, faults only surfaced last week in FTView. By copying the settings from Design to Runtime, the PLC in the Runtime tab was corrected. The mystery remains unsolved now that the system is functioning normally. I appreciate everyone's input on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>FTView Studio is known to experience occasional issues, particularly with communication. I have noticed that restarting the development PC can resolve many of these issues. One persistent bug I have encountered since version 4 is that making changes to the communication shortcut, even on the design side, can prevent the MER file from functioning properly when downloaded to the HMI. A simple solution I have found is to reboot the PC and rebuild the MER file without making any other changes. Rebooting is my go-to solution for addressing these gremlins, as it often proves to be an effective initial step, even if it doesn't always work.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are values displaying as "" in my FTView display?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue may occur when the program is unable to recognize the tags associated with the display, possibly due to a connection problem between the project and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot FTView display issues where values are replaced with ""?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking if the Online folder containing program tags is empty, which might indicate a deletion or connection problem. Ensure RSLinx establishes a connection between FTView and the PLC and consider reinstalling the ethernet driver.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take if FTView is not recognizing any tags and values are not displaying correctly?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Try refreshing all folders in FTView, verify the connection between RSLinx, FTView, and the PLC, reinstall the ethernet driver, and confirm that the PLC project is accessible online using Logix5000. Creating a new runtime and downloading it to the panelview can help identify where the issue lies.</p>
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
