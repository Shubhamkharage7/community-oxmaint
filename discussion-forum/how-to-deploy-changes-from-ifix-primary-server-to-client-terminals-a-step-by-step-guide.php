
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am a new user on iFix and I have successfully created a digital alarm that is functioning properly in the alarm banner on the primary development computer. I am now wondering how to deploy the changes made to the application to the client terminal applications. I have">
    <meta name="keywords" content="ifix deployment, ifix primary server, client terminals, digital alarm, alarm banner, runtime settings, project path, programming laptop, login credentials, shutting down ifix, restarting ifix, inherited site, handoff, access management, ifix">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-deploy-changes-from-ifix-primary-server-to-client-terminals-a-step-by-step-guide">
    <title>How to deploy changes from iFix primary server to client terminals: A step-by-step guide. | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to deploy changes from iFix primary server to client terminals: A step-by-step guide. | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am a new user on iFix and I have successfully created a digital alarm that is functioning properly in the alarm banner on the primary development computer. I am now wondering how to deploy the changes made to the application to the client terminal applications. I have">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-deploy-changes-from-ifix-primary-server-to-client-terminals-a-step-by-step-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to deploy changes from iFix primary server to client terminals: A step-by-step guide. | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am a new user on iFix and I have successfully created a digital alarm that is functioning properly in the alarm banner on the primary development computer. I am now wondering how to deploy the changes made to the application to the client terminal applications. I have">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-deploy-changes-from-ifix-primary-server-to-client-terminals-a-step-by-step-guide"
      },
      "headline": "How to deploy changes from iFix primary server to client terminals: A step-by-step guide.",
      "description": "Greetings! I am a new user on iFix and I have successfully created a digital alarm that is functioning properly in the alarm banner on the primary development computer. I am now wondering how to deploy the changes made to the application to the client terminal applications. I have",
      "author": {
        "@type": "Person",
        "name": "bigLee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">How to deploy changes from iFix primary server to client terminals: A step-by-step guide.</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bigLee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">309</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">215</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am a new user on iFix and I have successfully created a digital alarm that is functioning properly in the alarm banner on the primary development computer. I am now wondering how to deploy the changes made to the application to the client terminal applications. I have noticed the project path in the runtime settings. Should I simply shut down iFix and restart it? I am hesitant to do so because the programming laptop with iFix installed requires login credentials to shut down. I do not want to risk shutting down something on the terminals that I may not be able to restart. I have inherited this site without any handoff, so I am working without access to passwords or usernames. Any insights or advice would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you provide more details about the setup? It typically involves one server and multiple clients. If the alarms are not functioning on the client side, it may be due to a missing alarm app. It is crucial to have the "Alarm Network Service" running on the server. To verify or adjust these settings, utilize the ICU utility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Harryting asked for further details on the setup of the system. It consists of a primary node, a secondary node, and two client terminals. One of the client terminals is only for runtime use, while the other allows access to the workspace. The alarm updates in the tag database when viewed from the workspace, but does not reflect in the client's runtime display. The issue may be due to a missing alarm app. To resolve this, ensure that the "Alarm Network Service" is running on the server and use the ICU utility for configuration. It seems that on the primary node, entering runtime mode triggers the alarm updates, while on the client machine, this action is not causing the alarm to appear in the banner. Consider shutting down iFix and relaunching it to update any changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigLee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you trying to locate the alarm in the alarm summary object, or is it a textual alert that appears on the screen when activated? Find out more about where to find the alarm and how it displays on your screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SSmith01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The alarm summary object is functioning correctly on the primary node, but it is not updating in other applications. While the alarm tag updates in the tag database accessible from the client machine, it does not reflect in the application's alarm summary object.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigLee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I may not have a clear recollection of iFix, so please bear with me. Let's clarify the terminology first. You mentioned having "Primary and Secondary" nodes, but I believe you meant to say you have a redundant server pair in addition to two client machines. In iFix, both the server and client are referred to as nodes, so do you have a total of four nodes or just two (one server and one client)? Also, let's revisit the initial changes you made. Did you add a DA or DI alarm? Are other existing alarms displaying correctly on all machines?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Attached below are screenshots illustrating a remote node setup. The PSS server has been configured with a digital input featuring alarm attributes, as seen in the first screenshot. The alarm on the server's runtime is responsive to the status of the digital input, turning on and off accordingly. However, the SSS server presents an issue as it displays an error message regarding restricted runtime access due to the hardware key. This problem is also apparent on the Workstations WS-1 and WS-2, where the new alarm is not appearing despite identical configurations. Both workstations share similarities with the PSS/SSS servers, with one allowing workspace access and the other not. Are there any necessary actions needed to deploy these changes successfully?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigLee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have 4 PCs, redundant servers (PSS and SSS), and two clients (WS-1 and WS-2), you should not need to make any changes on the clients for the alarm to display. Do other alarms appear on the client machines? Verify if the two client machines are truly connected to the servers or if they are standalone or connected to another server. Can you provide a screenshot of the ICU Network configuration on one of the clients? Also, check the "filter" on the alarm summary on your client machine for any discrepancies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>On my second day at iFix, I am well-versed in popular software programs like *******, Citect, and Wonderware. Currently navigating through new challenges and learning opportunities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigLee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am interested in viewing the page shown in the screenshot on one of our clients' systems. I suspect that the client may not actually be a legitimate client due to the high cost of development licenses. It appears that they have two development licenses on one system, which is unusual. Typically, a system like yours would only have one development license and three runtime licenses. This situation raises questions about whether you may actually be dealing with two separate systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I deploy changes made on the primary server in iFix to client terminals?</h4>
<p class='text-muted'><strong>Answer:</strong> - To deploy changes from the primary server to client terminals in iFix, you can utilize the project path in the runtime settings. Avoid shutting down iFix on the primary server to prevent any disruptions on the client terminals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it necessary to restart iFix after making changes for deployment?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is not necessary to shut down and restart iFix on the primary server to deploy changes to client terminals. Utilize the project path in the runtime settings for deployment without disruption.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I do if I do not have access to login credentials for iFix on the programming laptop?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you do not have access to login credentials for iFix on the programming laptop, seek assistance from your IT department or the previous administrator to ensure a smooth deployment process without any issues related to access restrictions.</p>
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
