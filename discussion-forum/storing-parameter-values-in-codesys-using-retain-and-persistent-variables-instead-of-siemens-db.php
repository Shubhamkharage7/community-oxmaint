
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings to everyone! As I embark on my journey with CodeSys, Ive quickly realized that unlike S7, CodeSys doesnt utilize data blocks. I am in need of a method to store various parameter values of Function Blocks (FBs). In S7, I would typically use a shared DB to save">
    <meta name="keywords" content="codesys, storing parameter values, retain variables, persistent variables, siemens db, function blocks, s7, data blocks, global variable, data repository, boolean variable, integer variable, real variable, struct, storage solution, codesys">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/storing-parameter-values-in-codesys-using-retain-and-persistent-variables-instead-of-siemens-db">
    <title>Storing Parameter Values in CodeSys: Using RETAIN and PERSISTENT Variables Instead of Siemens DB | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Storing Parameter Values in CodeSys: Using RETAIN and PERSISTENT Variables Instead of Siemens DB | Oxmaint Community">
    <meta property="og:description" content="Greetings to everyone! As I embark on my journey with CodeSys, Ive quickly realized that unlike S7, CodeSys doesnt utilize data blocks. I am in need of a method to store various parameter values of Function Blocks (FBs). In S7, I would typically use a shared DB to save">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/storing-parameter-values-in-codesys-using-retain-and-persistent-variables-instead-of-siemens-db">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Storing Parameter Values in CodeSys: Using RETAIN and PERSISTENT Variables Instead of Siemens DB | Oxmaint Community">
    <meta name="twitter:description" content="Greetings to everyone! As I embark on my journey with CodeSys, Ive quickly realized that unlike S7, CodeSys doesnt utilize data blocks. I am in need of a method to store various parameter values of Function Blocks (FBs). In S7, I would typically use a shared DB to save">
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
        "@id": "https://community.oxmaint.com/discussion-forum/storing-parameter-values-in-codesys-using-retain-and-persistent-variables-instead-of-siemens-db"
      },
      "headline": "Storing Parameter Values in CodeSys: Using RETAIN and PERSISTENT Variables Instead of Siemens DB",
      "description": "Greetings to everyone! As I embark on my journey with CodeSys, Ive quickly realized that unlike S7, CodeSys doesnt utilize data blocks. I am in need of a method to store various parameter values of Function Blocks (FBs). In S7, I would typically use a shared DB to save",
      "author": {
        "@type": "Person",
        "name": "mikas_m"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-06",
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
                <h1 class="text-white">Storing Parameter Values in CodeSys: Using RETAIN and PERSISTENT Variables Instead of Siemens DB</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mikas_m</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">451</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">146</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings to everyone! As I embark on my journey with CodeSys, I've quickly realized that unlike S7, CodeSys doesn't utilize data blocks. I am in need of a method to store various parameter values of Function Blocks (FBs). In S7, I would typically use a shared DB to save these values. In CodeSys, it appears that RETAIN and PERSISTENT variables are the way to go, although I am uncertain about the process. It is clear that I must establish a new Global variable or Structure to act as a data repository. Could you offer a straightforward example to help me kickstart this process? Essentially, I am looking for a storage solution for a boolean, an integer, and a REAL variable, making a struct an obvious choice. Your assistance is greatly appreciated!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>mikas_m asked for help with using CodeSys and mentioned the differences in data handling compared to S7. In S7, a shared DB is used to store parameter values, while in CodeSys, RETAIN and PERSISTENT variables are required. To create a data holder, a new Global variable or Structure needs to be made. For example, a struct can be used to store a bool, int, and REAL variable. To get started, create an FB named DATA or something similar to store the data. Declare the variables as VAR_GLOBAL, marking them as RETAIN and PERSISTENT in Codesys.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The global variables are set to retain their values persistently in the PLC memory. These variables include runtime and shift time measurements, production statistics, and shift statistics. The runtime measurements are stored in seconds, minutes, and hours, while the production statistics track total count, good count, bad count, and reject count. The shift statistics similarly track total count, good count, bad count, and reject count for each shift. This setup allows for efficient tracking and monitoring of production processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings bkottaras, thank you for your response. Instead of using struct (DUT), I will be developing a Function Block (FB). Is it feasible to input parameter data through HMI (Human-Machine Interface) and save these values within the FB? In previous projects, I frequently utilized databases to retain parameters inputted by operators through HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikas_m</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly, I see no reason why not. I utilize Wago and Weintek HMIs, both of which operate on the Modbus protocol. This includes the (4xxxxx) registers featured in this setup. Interestingly, the "Smiley face" should be a DINT value. It seems that when I copied the variables, they were mistakenly replaced with a smiley face.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I sincerely hope this information provides valuable assistance in addressing your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In your project, you have the ability to create multiple GVLs (global variable lists) each with unique properties such as constant, retain, or persistent. It is also possible to include various group types within a single GVL. When it comes to the coding structure for managing these values, you can utilize existing libraries or develop your own. While a recipe manager feature is available, I have yet to explore its functionalities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When developing your project, you have the option to create multiple Global Variable Lists (GVL) with various properties such as constant, retain, or persistent. It is also possible to include different group types within a single GVL. 

When it comes to programming the structure for manipulating these values, there are pre-built libraries that you can utilize or you can create custom ones. While a recipe manager is available, I have yet to use it.

It is important to note that there can only be one Persistent Variable List. It is worth mentioning that these variables do not necessarily have to be global, as the full path to a local variable can also be persistent. Retain variables are able to withstand warm starts and power cycles, while persistent variables can survive downloads.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bkottaras noted that the "Smiley face" emoji was unintentionally replaced when variables were pasted. To avoid this issue, it is recommended to embed the text in a code box using the </> button. This will prevent any unwanted changes in the displayed content.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You have the ability to establish long-lasting elements within a Global Virtual Library (GVL) without relying on the "Persistent" feature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate the assistance provided by bkottaras and Alfredo in showcasing the concrete example. Are there any recommended learning resources for mastering CodeSys? Is there a PLCSIM equivalent available? While I have begun watching various YouTube tutorials, I am interested in finding resources geared towards individuals familiar with Siemens systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikas_m</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize your PC as a simulation tool with the Codesys software, which provides essential functionality upon installation. The Codesys community (Codesys Talk, Codesys Forge) offers a wealth of valuable information for users. Explore these resources for helpful insights and assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: Why do we use RETAIN and PERSISTENT variables in CodeSys instead of data blocks like in Siemens S7?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: CodeSys does not utilize data blocks like Siemens S7, hence RETAIN and PERSISTENT variables are used to store parameter values in Function Blocks (FBs) in CodeSys.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I store parameter values using RETAIN and PERSISTENT variables in CodeSys?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To store parameter values in CodeSys, you can create a new Global variable or Structure to act as a data repository. You can then use this structure to store boolean, integer, and REAL variables for your storage needs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Can you provide a simple example of using RETAIN and PERSISTENT variables in CodeSys to store parameter values?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Sure, you can create a struct in CodeSys to store a boolean, an integer, and a REAL variable as a storage solution. By initializing these variables as RETAIN or PERSISTENT, you can retain their values across program cycles.</p>
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
