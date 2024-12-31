
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Despite my efforts, I have yet to receive a clear answer on the differences between them. It appears that they have similar functionalities. Just so you know, I am currently utilizing Studio 5000.">
    <meta name="keywords" content="remote run, remote program, studio 5000, differences, functionalities, plc programming, automation software, control systems, rockwell automation, allen-bradley, troubleshooting, comparison, programming tools, online programming, offline programming, technical support, industrial">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/differences-between-remote-run-and-remote-program-with-studio-5000">
    <title>Differences Between Remote Run and Remote Program with Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Differences Between Remote Run and Remote Program with Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="Despite my efforts, I have yet to receive a clear answer on the differences between them. It appears that they have similar functionalities. Just so you know, I am currently utilizing Studio 5000.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/differences-between-remote-run-and-remote-program-with-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Differences Between Remote Run and Remote Program with Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="Despite my efforts, I have yet to receive a clear answer on the differences between them. It appears that they have similar functionalities. Just so you know, I am currently utilizing Studio 5000.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/differences-between-remote-run-and-remote-program-with-studio-5000"
      },
      "headline": "Differences Between Remote Run and Remote Program with Studio 5000",
      "description": "Despite my efforts, I have yet to receive a clear answer on the differences between them. It appears that they have similar functionalities. Just so you know, I am currently utilizing Studio 5000.",
      "author": {
        "@type": "Person",
        "name": "MattMatt9"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">Differences Between Remote Run and Remote Program with Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5304</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">421</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Despite my efforts, I have yet to receive a clear answer on the differences between them. It appears that they have similar functionalities. Just so you know, I am currently utilizing Studio 5000.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are two modes on the controller: Run and Program. In Run mode, the program is actively running, while in Program mode, the program is not running. The term "Remote" refers to the key switch's center position. When the key switch is in the Remote position, the PLC can be switched between Run and Program mode using Logix Designer. If the key switch is in the Run or Program position, it is locked in that mode and cannot be altered through the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If I were to switch the settings to "remote program" on my station currently, would this action cause it to cease operation and shut down?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to MattMatt9's query about changing the program from their station, the answer is yes. Switching to "remote program" means that the software can make changes remotely. The functionality remains the same whether the key switch or software is used to put the PLC in Program mode. The key switch activates Program mode, while the software activates Remote Program mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the circumstances that might warrant a system entering program mode or undergoing commissioning?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MattMatt9 asked if there is ever a specific reason for a PLC to be in program mode during commissioning. The answer is yes, especially when downloading new changes. For example, when I recently accessed a technician's computer remotely to make adjustments that required a download, I put the PLC in program mode to prevent any unintended machine starts while I prepared the program. This is a common practice to enhance troubleshooting skills on our ship.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When programming a CPU on the workbench, I always ensure to set the key to "Program" mode. This ensures that when the CPU is placed back in its designated rack and powered on, it will not accidentally run any programs that could have detrimental effects. This precaution is crucial for preventing potential disasters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That's an excellent observation. Thank you, everyone, for your contributions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MattMatt9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the key switch is in the remote position and I need to download a new software update, should I put it in program mode first or can I download it directly without any changes?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>medhat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enable program downloads, the key switch on the remote must be switched to program mode. In run mode, your workstation can go online but downloading a new program is not possible. However, you can still make online code changes with the key switch in this setting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the software, the key switch on the remote is crucial for toggling to program mode during the download process. While in run mode, your workstation can connect online but will be unable to download new programs. However, you should still be able to make online code edits even if the key switch is in run. It is doubtful that online edits can be made in run mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to plvlce, making online edits may not be possible if the keyswitch is in run mode. Based on my own experience, you need to be in Remote Run mode at least to Test and Assemble the edits, instead of just accepting them in Program/Remote Program mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Darr247</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to key switches, it's important to consider who has access to make program changes. At a water utility I used to work for, we had issues with laptops from Rockwell causing stations to drop offline. To prevent this, only electricians and select supervisors were allowed to use keys to make changes. We initially kept every processor in "run" mode with keys removed to ensure only authorized personnel could access them. This worked for a while until more keys began to surface, leading to unauthorized access by individuals who didn't have programming skills. It became a challenge to limit access to only those who truly needed it, such as telemetry and SCADA departments. It's crucial to maintain strict control over who can make program changes to prevent mishaps and system failures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the differences between Remote Run and Remote Program in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - Remote Run allows you to run a program on a remote controller without downloading it, while Remote Program allows you to download and run a program on a remote controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do Remote Run and Remote Program functionalities differ in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - Remote Run is used for testing and monitoring a program on a remote controller without making changes to the program itself, whereas Remote Program involves downloading and executing the program on the remote controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can you explain the similarities and distinctions between Remote Run and Remote Program features in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - Both Remote Run and Remote Program in Studio 5000 enable users to interact with a remote controller, but Remote Run is for testing purposes without altering the program, while Remote Program involves downloading and executing the program on the remote controller.</p>
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
