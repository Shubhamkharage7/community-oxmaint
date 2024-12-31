
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am facing difficulties in getting the writeimageftp function to work properly. While it functions well within In-Sight Explorer, it fails to connect to my FTP server. I have In-Sight Explorer operational on my laptop and another computer hosting an IIS FTP server V5.0 on port 22. I am">
    <meta name="keywords" content="troubleshooting, in-sight explorer, writeimageftp function, ftp server connection, in-sight explorer operational, iis ftp server, port 22, windows explorer, anonymous connection, file transfers, code error, error tracing, status display">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-in-sight-explorer-writeimageftp-function-for-ftp-server-connection">
    <title>Troubleshooting In-Sight Explorer WriteImageFTP function for FTP server connection | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting In-Sight Explorer WriteImageFTP function for FTP server connection | Oxmaint Community">
    <meta property="og:description" content="I am facing difficulties in getting the writeimageftp function to work properly. While it functions well within In-Sight Explorer, it fails to connect to my FTP server. I have In-Sight Explorer operational on my laptop and another computer hosting an IIS FTP server V5.0 on port 22. I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-in-sight-explorer-writeimageftp-function-for-ftp-server-connection">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting In-Sight Explorer WriteImageFTP function for FTP server connection | Oxmaint Community">
    <meta name="twitter:description" content="I am facing difficulties in getting the writeimageftp function to work properly. While it functions well within In-Sight Explorer, it fails to connect to my FTP server. I have In-Sight Explorer operational on my laptop and another computer hosting an IIS FTP server V5.0 on port 22. I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-in-sight-explorer-writeimageftp-function-for-ftp-server-connection"
      },
      "headline": "Troubleshooting In-Sight Explorer WriteImageFTP function for FTP server connection",
      "description": "I am facing difficulties in getting the writeimageftp function to work properly. While it functions well within In-Sight Explorer, it fails to connect to my FTP server. I have In-Sight Explorer operational on my laptop and another computer hosting an IIS FTP server V5.0 on port 22. I am",
      "author": {
        "@type": "Person",
        "name": "CharlesM"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-25",
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
                <h1 class="text-white">Troubleshooting In-Sight Explorer WriteImageFTP function for FTP server connection</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>CharlesM</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">17817</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">373</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am facing difficulties in getting the writeimageftp function to work properly. While it functions well within In-Sight Explorer, it fails to connect to my FTP server. I have In-Sight Explorer operational on my laptop and another computer hosting an IIS FTP server V5.0 on port 22. I am able to access the FTP server through Windows Explorer, as I have set it up for anonymous connection, eliminating the need for a login when connecting. File transfers between the laptop and server work seamlessly, suggesting the issue lies within the writeimageftp function in In-Sight. The code for the function is: WriteImageFTP($A$0,"192.168.0.100.22","admin","",$A$0,"Bad",999,0,1,0,1,0). Despite running the code, I do not encounter any visible errors. Is there a way to include error tracing or status display within the function?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To monitor activity on your FTP server for any incoming commands from Cognex, review the log file. Additionally, investigate the presence of '.22' at the end of the address as it may not be intended. For further insights and discussions, visit http://www.mvresource.com/index.php?name=Forums&file=viewtopic&t=25 or search 'Cognex WriteImageFTP' on Google.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theDave2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will investigate the log file for port number 22. I appreciate the link; I also inquired about this issue yesterday in the same forum. Thank you for the assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CharlesM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, a user named CharlesM clarified the port number for FTP connections, noting that while regular FTP typically uses port 21, Secure FTP often employs port 22. He suggested omitting the port number from the Host Address when setting up the connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theDave2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When specifying the port, use :22 (colon) instead of .22 (dot 22). This simple adjustment can help ensure smooth connectivity and avoid any potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AJZ</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The In-Sight software communicates with the camera via FTP on port 21. The help file suggests using port 22 instead, which should resolve any issues. If you're seeing a "." instead of a ":", try adjusting the settings and checking the log file for more information. Thank you for the helpful suggestions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CharlesM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to my understanding of this technical note, it mentions that InSight typically utilizes port 21 exclusively (Refer to the FAQ's final section). It is recommended to modify other applications, particularly Windows Internet Information Services, which currently rely on port 21, to switch to an alternative port.-Eric</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eric Nelson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like they are recommending changing the port settings for other applications, specifically Windows Internet Information Services (IIS), from port 21 to a different port. I also have In-sight using port 21 and IIS using port 22. Upon reviewing the log file in the IIS FTP server, I noticed the camera connecting to the server, indicating that I am close to resolving the issue. However, I am still unsure why the image is not being sent. I plan to delve into researching these log files further. By enabling all options and observing the data in the log file, I hope to decipher the information through Google searches and troubleshoot the root cause of the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CharlesM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After successfully resolving the issue by analyzing the log file, I identified a simple user/password problem. To assist others facing similar challenges, I will create a tutorial and convert it into a downloadable PDF format. Stay tuned for the post! Grateful for the assistance provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CharlesM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CharlesM mentioned that he got it to work successfully. Have you verified that the IIS FTP has indeed been changed to port 22 on the server, as discussed? Also, have you adjusted your laptop settings to connect to the server using port 22, as you mentioned setting up Explorer for FTP transfers? If not, it is possible that the '.22' setting is not being recognized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theDave2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you confirmed that the IIS FTP has been successfully changed to port 22 on the server? It seems like the configuration on your laptop is also set to connect to port 22 for FTP file transfers. I am able to simultaneously use In-sight on port 21 and the FTP server on port 22 without any issues. Unfortunately, I am unable to share the detailed setup guide here due to the large size of the PDF with numerous screenshots. I will attempt to upload it on the vision forum mentioned earlier.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CharlesM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am encountering a problem where my camera is unable to transfer image files to an FTP server using the STOR command, receiving a 550 response. Interestingly, when using Filezilla client on a different computer within the same network, the transfer is successful with a 226 response. The camera's firmware version is v3.33.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>junior</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there may be an issue with the IIS setup, as I am experiencing the same configuration with FileZilla FTP Server and encountering no problems. Despite having granted read and write permissions in the user account setup in IIS, there seems to be a permission error when the camera attempts to upload a picture via FTP. The FTP server is indicating that the user lacks the necessary permissions to write to the FTP directory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>junior</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order for IIS to function properly, the user configured in FTP should be the same as the user on the computer. Typically, most computers have an Administrator account that is used for booting and logging in. I successfully utilized the Administrator account for an anonymous connection recently, specifically when setting up a new Checker camera. If you're interested, feel free to send me a message with your email and I can share the PDF guide I created for the configuration process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CharlesM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Junior mentioned that they are experiencing a similar issue with their FTP setup on IIS. They have configured read and write permissions for the user account, but encounter an error when trying to upload images from a camera. Upon checking the log files, error codes 331 and 530 were found. Have you resolved this issue? Please update me on your progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>peterwan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can anyone provide a solution to the issue I'm having with my log files showing the user 'admin 331' entering a password? I'm struggling to locate where this password is being set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bach.m.3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Was anyone able to find a solution to the issue? I noticed in my log files the presence of the entry "USER admin 331" and "PASS *** 530". I am unable to locate where the password is configured. When encountering these reply codes, it indicates that "331" means the username is accepted but the password is not, while "530" signifies a failed login attempt. One possible workaround is trying to log in as an anonymous user (anonymous or ftp) with me@ as the password. Some FTP servers are configured to accept this login method, requiring an email address as the password. Remember, there is no need to include the hostname portion of the email address as the server is already aware of the connection origin. This practice was common in earlier times, even though the email host may have changed since then.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance! Although helpful, I am still encountering issues with images not being saved. The IIS log file indicates an attempt to store a .bmp file in the specified location, but the image is not appearing. Should the IIS Physical Path for the new FTP Server I set up match the path specified in the WriteImageFTP command in In-Sight? The previous post referred to a generic file name, whereas I am utilizing a specific file path like C:\L68_Compression.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bach.m.3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a user named bach.m.3, they expressed gratitude for the assistance provided but explained that they were still encountering issues with images not being saved. Despite the IIS log file indicating an attempt to store a .bmp file in the specified location, the actual image was not present. The question arose whether the IIS Physical Path for the new FTP Server needed to match the path specified in the WriteImageFTP command within In-Sight. In the original post, a generic file name was used, whereas a specific file path such as C:\L68_Compression is now being utilized.
It was also mentioned that when setting up the FTP, it is important to verify that the FTP points to the desired directory without the need to add additional folders to the path name. Furthermore, for a username, it was necessary to include the PC name followed by \User.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tebright1</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the writeimageftp function in In-Sight Explorer failing to connect to my FTP server?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the configuration settings or parameters used in the writeimageftp function. Ensure that the FTP server details, such as the IP address, port number, username, and password, are correctly specified in the function.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the writeimageftp function in In-Sight Explorer if there are no visible errors during execution?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To include error tracing or status display within the function, you can add error handling mechanisms or logging features to capture and display any potential errors or status updates that occur during the execution of the writeimageftp function.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could be causing the writeimageftp function to work within In-Sight Explorer but fail to connect to the FTP server?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in functionality might be due to differences in how In-Sight Explorer handles the FTP connection compared to other FTP client applications. Ensure that the FTP server settings and permissions are compatible with the requirements of the writeimageftp function in In-Sight Explorer.</p>
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
