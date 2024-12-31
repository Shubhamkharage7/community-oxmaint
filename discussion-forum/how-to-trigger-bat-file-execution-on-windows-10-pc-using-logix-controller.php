
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking a straightforward method for my 5069-L350ERMS2 to prompt a BAT file to run on a Windows 10 PC. The goal is to ensure that files are updated properly on the HMI by updating a TXT file whenever changes are made. The PC in question serves">
    <meta name="keywords" content="bat file execution, logix controller, windows 10 pc, 5069-l350erms2, hmi file update, txt file update, tftp file server, static ip, ethernet connection, cpu command, file put, windows service">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-trigger-bat-file-execution-on-windows-10-pc-using-logix-controller">
    <title>How to Trigger BAT File Execution on Windows 10 PC Using Logix Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Trigger BAT File Execution on Windows 10 PC Using Logix Controller | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking a straightforward method for my 5069-L350ERMS2 to prompt a BAT file to run on a Windows 10 PC. The goal is to ensure that files are updated properly on the HMI by updating a TXT file whenever changes are made. The PC in question serves">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-trigger-bat-file-execution-on-windows-10-pc-using-logix-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Trigger BAT File Execution on Windows 10 PC Using Logix Controller | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking a straightforward method for my 5069-L350ERMS2 to prompt a BAT file to run on a Windows 10 PC. The goal is to ensure that files are updated properly on the HMI by updating a TXT file whenever changes are made. The PC in question serves">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-trigger-bat-file-execution-on-windows-10-pc-using-logix-controller"
      },
      "headline": "How to Trigger BAT File Execution on Windows 10 PC Using Logix Controller",
      "description": "Hello, I am seeking a straightforward method for my 5069-L350ERMS2 to prompt a BAT file to run on a Windows 10 PC. The goal is to ensure that files are updated properly on the HMI by updating a TXT file whenever changes are made. The PC in question serves",
      "author": {
        "@type": "Person",
        "name": "RafaelNY"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-21",
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
                <h1 class="text-white">How to Trigger BAT File Execution on Windows 10 PC Using Logix Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">361</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">125</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking a straightforward method for my 5069-L350ERMS2 to prompt a BAT file to run on a Windows 10 PC. The goal is to ensure that files are updated properly on the HMI by updating a TXT file whenever changes are made. The PC in question serves as a TFTP file server for recipe storage and is connected to the network via static IP over ethernet. 

Here are two potential options to achieve this:
1) Implement a command from the CPU to the PC for file PUT to trigger file updates.
2) Utilize a Windows service to execute the BAT file at regular intervals, aiming for 5-10 second intervals to minimize latency.

Any assistance with this matter would be highly appreciated. Thank you.

Best regards,
Rafael</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of involving the PLC, it seems like the FTP files and TXT file are all on the PC based on your description. Have you considered updating the recipe on the TXT file that the HMI reads? This could streamline the process and avoid the need for PLC intervention.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello @lmscar12, I appreciate your response. The recipes are developed on the HMI/PLC and saved on the PLC SD card. These files can be transferred to the PC file system using a TFTP server. I am looking for a solution for the PC to automatically execute the BAT file when changes are detected in the directory files. This may involve setting up a Windows service or receiving a command from the CPU. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When searching for a USB I/O device, consider options from reputable brands such as National Instruments and Labjack. These devices are widely available and offer detailed product documentation on the official website of National Instruments. Explore the range of USB I/O devices to find the best fit for your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm currently exploring the capabilities of AdvancedHMI, which appears to be user-friendly and compatible with VB for executing files. In AdvancedHMI Controls, tags are used as bindings. I'm curious about how to initiate a subroutine when a tag value exceeds a certain threshold.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RafaelNY inquired about integrating AdvancedHMI for their project. Utilizing VB for file execution, they found the platform to be user-friendly with tag bindings within its controls. They sought guidance on triggering a subroutine based on a tag value reaching a specific threshold. Exploring HMIs, it was noted that most options, including AdvancedHMI, offer data change events for this functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
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
            <p>Node-Red could be a valuable tool for executing DOS commands. Ensure to provide a detailed explanation of the command creation process. Simply posting a screenshot may not be sufficient. Open the function node, paste the code, and format it using the </> icon. Additionally, consider sharing the contents of the large brown node. For more insights, visit discourse.nodered.org.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many FTP and HTTP scrapers are able to replicate a target directory and its structure. This feature makes it easier to automatically download files and data from websites.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RafaelNY shared: I am exploring AdvancedHMI for its simplicity and compatibility with VB for executing files. While I have noticed the tags serving as bindings in AdvancedHMI Controls, I am interested in how to initiate a subroutine when a tag value rises. For further insights, consider checking out the "DataSubscriber" control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I highly recommend utilizing AdvancedHMI for recipe management in industrial settings. With AdvancedHMI, we can easily write recipes to a MySql database and monitor PLC tags using DataSubscriber. This allows us to instruct the PLC on which recipe to load based on the value of the PLC tag "Codice_Evento." Additionally, we can retrieve information from the database using this tool.

Here is an example of how we can interact with the PLC tag "Codice_Evento" and input data into a MySql database based on the PLC tag's value. This functionality can also be used to extract information from a database.

In our implementation, we create a timestamp and retrieve the event code from the PLC. If the event code is equal to 1, we gather various data points such as job number, report, basket, program name, program number, operator, and barcode from the PLC. Subsequently, we insert this information into the MySql database.

Our database connection details are as follows: server=localhost;userid=root;password=Splash123;database=icsdata. This connection allows us to seamlessly integrate data between the PLC and the database.

AdvancedHMI has been a reliable tool for us over the years, providing robust performance and seamless integration capabilities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lunenburger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @lunenburger, would you mind sharing your .sln file with me so I can check out some examples of tag read/write? Thanks!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @lunenburger, I wanted to ask if the CLX (EthernetIPforCLXCom1) connection closes automatically when you exit AdvancedHMI by clicking the red X, or if some code is required in MainForm_FormClosing. Thanks!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By default, I believe it closes automatically. To get started, visit AdvancedHMI and download the Visual Studio files. I have included my MainForm.vb file for reference; simply paste the text into the main form to get an understanding of how it is assembled. The recipe information can be found starting at approximately line 450. I am utilizing Visual Studio Community 2017 and MySql Community to write and retrieve recipes on the HMI. The HMI software used is FactoryTalk View SE, which does not support connections to external databases, leading to the use of AdvancedHMI. This setup has been working seamlessly for the past few years.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lunenburger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, @lunenburger, for sharing that example. Can you provide any tag write examples? I've successfully set up my AdvancedHMI app to work in open loop mode, but I'd like to incorporate tag writes to send status updates back to the PLC. Looking forward to your guidance. Regards,</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. How can I trigger a BAT file execution on a Windows 10 PC using a Logix Controller like the 5069-L350ERMS2?</h4>
<p class='text-muted'><strong>Answer:</strong> - There are two potential options to achieve this:
     1) Implement a command from the CPU to the PC for file PUT to trigger file updates.
     2) Utilize a Windows service to execute the BAT file at regular intervals, aiming for 5-10 second intervals to minimize latency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the purpose of prompting a BAT file to run on a Windows 10 PC from a Logix Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - The goal is to ensure that files are updated properly on the HMI by updating a TXT file whenever changes are made. The PC in question serves as a TFTP file server for recipe storage and is connected to the network via static IP over ethernet.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I connect the Logix Controller to the Windows 10 PC for triggering the BAT file execution?</h4>
<p class='text-muted'><strong>Answer:</strong> - Ensure that the Windows 10 PC and the Logix Controller are on the same network and that proper communication protocols are set up between them for file transfer and execution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a recommended interval for executing the BAT file on the Windows 10 PC for updating files on the HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is suggested to aim for 5-10 second intervals to minimize latency and ensure timely updates of the files on the HMI.</p>
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
