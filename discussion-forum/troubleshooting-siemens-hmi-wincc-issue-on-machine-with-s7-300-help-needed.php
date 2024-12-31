
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings team members, There is an issue with a Siemens Multi Panel (MP 377 12) on a machine (S7-300) at a clients location. The longstanding parameters set with the username admin and password 100 have suddenly stopped working. Despite multiple reboots of the PLC and HMI since yesterday, the">
    <meta name="keywords" content="siemens hmi troubleshooting, wincc issue, s7-300 problem, siemens multi panel mp 377, hmi password not working, plc reboot, hmi reboot, siemens username admin, siemens password 100, root cause analysis, machine">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-hmi-wincc-issue-on-machine-with-s7-300-help-needed">
    <title>Troubleshooting Siemens HMI (WinCC) Issue on Machine with S7-300 - Help Needed! | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Siemens HMI (WinCC) Issue on Machine with S7-300 - Help Needed! | Oxmaint Community">
    <meta property="og:description" content="Greetings team members, There is an issue with a Siemens Multi Panel (MP 377 12) on a machine (S7-300) at a clients location. The longstanding parameters set with the username admin and password 100 have suddenly stopped working. Despite multiple reboots of the PLC and HMI since yesterday, the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-hmi-wincc-issue-on-machine-with-s7-300-help-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Siemens HMI (WinCC) Issue on Machine with S7-300 - Help Needed! | Oxmaint Community">
    <meta name="twitter:description" content="Greetings team members, There is an issue with a Siemens Multi Panel (MP 377 12) on a machine (S7-300) at a clients location. The longstanding parameters set with the username admin and password 100 have suddenly stopped working. Despite multiple reboots of the PLC and HMI since yesterday, the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-hmi-wincc-issue-on-machine-with-s7-300-help-needed"
      },
      "headline": "Troubleshooting Siemens HMI (WinCC) Issue on Machine with S7-300 - Help Needed!",
      "description": "Greetings team members, There is an issue with a Siemens Multi Panel (MP 377 12) on a machine (S7-300) at a clients location. The longstanding parameters set with the username admin and password 100 have suddenly stopped working. Despite multiple reboots of the PLC and HMI since yesterday, the",
      "author": {
        "@type": "Person",
        "name": "Timtje"
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
                <h1 class="text-white">Troubleshooting Siemens HMI (WinCC) Issue on Machine with S7-300 - Help Needed!</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Timtje</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">777</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">12</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings team members,

There is an issue with a Siemens Multi Panel (MP 377 12") on a machine (S7-300) at a client's location. The longstanding parameters set with the username "admin" and password "100" have suddenly stopped working. Despite multiple reboots of the PLC and HMI since yesterday, the issue persists. 

If anyone has insight into the root cause or a potential solution, please share. Your assistance is greatly appreciated.

Thank you and have a wonderful day,
Tim</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>WinCC offers a feature for setting a limit on the number of incorrect password attempts allowed for a user. When a user exceeds this limit (which can be customized in the WinCC project settings), the HMI system will automatically lock them out. This security measure is set to activate after 3 password attempts by default.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To reset the project, the only option available is to redownload it. You can also try restoring a ProSave backup or the backup created within the operating system, although I have not tested those methods personally. Before re-downloading the project, ensure to locate the setting in the user setup and disable it to prevent recurrence of the issue. It is important to note that logging in successfully does not reset the count. Therefore, if you make a mistake in entering your password twice, successfully log in, and then make another mistake a month later, you will be locked out. When downloading the project again, make sure to select the option to overwrite the user administration for the reset to take effect.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To reset a password, the alternative method involves utilizing a HMI page equipped with user administration functionality. Regrettably, a distinct user account with administrative privileges on the HMI platform is required for this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the prompt response! In our previous attempts, we have tested multiple passwords and are unsure if there is a limit on login attempts. Aside from the default admin account, are there any other pre-existing users like technician or regular user? The system has an autoloader feature, making it difficult to access WinCC easily. I assume that the maximum login attempts setting is not stored in a separate file but rather embedded within the project. Your assistance is greatly appreciated. Regards, Tim.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Timtje</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Which WinCC version is being used for the project?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon accessing the backup file, the header displays "WinCC flexible 2008 SP2 Advanced V 1. SP 2.0 (1.58.01)."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Timtje</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello there, have you been able to solve the issue with changing parameters on the S7 300? We are facing the same problem wherein entering the password does not prompt any action and requests for the password again. Is there a way to reset or modify the password, as we are considering a factory reset but cannot locate that option. Your assistance is greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>miller</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Miller, your question seems to be off-topic. Please consider starting a new discussion thread for that specific question. This will help keep the conversation organized and focused on relevant topics. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be the possible reasons for the Siemens HMI parameters suddenly not working?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The sudden stoppage of the parameters might be due to various reasons such as software updates, changes in settings, or system errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the Siemens HMI issue with the S7-300 machine?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can begin troubleshooting by checking the connection between the HMI and PLC, verifying the settings in WinCC, and ensuring that the correct username and password are being used.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any common troubleshooting steps to resolve Siemens HMI issues like this one?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, common troubleshooting steps include checking for any recent changes, verifying the network connection, rebooting both the PLC and HMI, and ensuring that the login credentials are correct.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is there a way to reset the Siemens Multi Panel to its default settings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you can try resetting the Siemens Multi Panel to its default settings by following the manufacturer's instructions or consulting the user manual for guidance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  What should be done if the issue persists despite multiple reboots of the PLC and HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the problem continues even after multiple reboots, it might be necessary to delve deeper into the system configuration, check for any software conflicts, or consider seeking support from Siemens technical experts.</p>
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
