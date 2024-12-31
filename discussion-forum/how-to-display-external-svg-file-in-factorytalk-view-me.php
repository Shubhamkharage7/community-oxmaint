
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I need to continuously display a local SVG file within my runtime application. The file is located at C:\Users\mccsf\Desktop\file_to_show.svg. I am utilizing an ActiveX Control Object and Microsoft Web Browser Control type to showcase this webpage. However, I am encountering difficulties in setting the URL to C:\Users\mccsf\Desktop\file_to_show.svg. When trying">
    <meta name="keywords" content="external svg file, factorytalk view me, display svg file, activex control object, microsoft web browser control, locationurl property, property pane, vba code, navigation command, hmi image display, network url, bmp version, image display">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-display-external-svg-file-in-factorytalk-view-me">
    <title>How to Display External SVG File in FactoryTalk View ME | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Display External SVG File in FactoryTalk View ME | Oxmaint Community">
    <meta property="og:description" content="I need to continuously display a local SVG file within my runtime application. The file is located at C:\Users\mccsf\Desktop\file_to_show.svg. I am utilizing an ActiveX Control Object and Microsoft Web Browser Control type to showcase this webpage. However, I am encountering difficulties in setting the URL to C:\Users\mccsf\Desktop\file_to_show.svg. When trying">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-display-external-svg-file-in-factorytalk-view-me">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Display External SVG File in FactoryTalk View ME | Oxmaint Community">
    <meta name="twitter:description" content="I need to continuously display a local SVG file within my runtime application. The file is located at C:\Users\mccsf\Desktop\file_to_show.svg. I am utilizing an ActiveX Control Object and Microsoft Web Browser Control type to showcase this webpage. However, I am encountering difficulties in setting the URL to C:\Users\mccsf\Desktop\file_to_show.svg. When trying">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-display-external-svg-file-in-factorytalk-view-me"
      },
      "headline": "How to Display External SVG File in FactoryTalk View ME",
      "description": "I need to continuously display a local SVG file within my runtime application. The file is located at C:\Users\mccsf\Desktop\file_to_show.svg. I am utilizing an ActiveX Control Object and Microsoft Web Browser Control type to showcase this webpage. However, I am encountering difficulties in setting the URL to C:\Users\mccsf\Desktop\file_to_show.svg. When trying",
      "author": {
        "@type": "Person",
        "name": "dan296"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-02",
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
                <h1 class="text-white">How to Display External SVG File in FactoryTalk View ME</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dan296</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3942</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">464</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I need to continuously display a local SVG file within my runtime application. The file is located at C:\Users\mccsf\Desktop\file_to_show.svg. I am utilizing an ActiveX Control Object and Microsoft Web Browser Control type to showcase this webpage. However, I am encountering difficulties in setting the URL to "C:\Users\mccsf\Desktop\file_to_show.svg". When trying to adjust the LocationURL property in the Property pane, a warning message without any text appears, preventing me from setting it. In the FactoryTalk SE version, you can edit the VBA Code and add the URL to a Navigation command, but this is not possible in the ME version as I am unable to edit any VBA script.

My goal is to display an image from an external network URL within the HMI. Although the panel has network access to the image I want to display, I am struggling to find a suitable method. As the image is an SVG file supported by a web browser, I have turned to using ActiveX Control objects. I also have a BMP version of the file, but it does not meet my requirements. If anyone has successfully displayed an image using a specific external URL, I would appreciate any assistance. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's been about 4-5 years since I set this up, so my memory may be a bit fuzzy. As far as I can recall, I had to use a performance-type terminal for the panelview, not just a standard one. I also had to set up an FTP server on my laptop to store the images, using Filezilla for this purpose.

Within Filezilla, I created a user and specified the folder location as a shared folder, granting the user permissions to read and modify files within that folder. Since I was constantly adding new pictures, I had to dynamically change the URL using a string tag in the runtime.

The URL format I used was ftp://user@laptopIP:Port/Filename.jpg. I hope this information proves helpful. If I remember anything else, I will be sure to share it here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Scottryan03</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access files through a web browser, users can utilize the File URI scheme. This scheme allows for linking to local files on a computer or network. More information about the File URI scheme can be found on its Wikipedia page.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to clarify that I have already successfully populated a folder with live images using FTP through FileZilla. However, I am having trouble accessing these files from the runtime file. I need guidance on how to correctly insert the URL for the images, as I have not been able to find a solution thus far. Can you please provide insight on the specific location and method for adding the URL to access the images?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dan296</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When inserting the URL into the connection tag, I encountered difficulty accessing a directory on my laptop, which led me to set up an FTP server. By utilizing the Microsoft web browser, I was able to navigate the FTP server and review the file. This approach ensured seamless file retrieval and viewing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Scottryan03</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am astonished by the fact that you had to insert the URL string into the PLC, but I can see the reasoning behind it. This is most likely the solution I was looking for. I appreciate your help and will update you on the outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dan296</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I made significant progress with this project, successfully testing it on my local environment. However, when I applied the new run time file on the actual HMI, the ME web browser objects failed to display correctly, showing diagonal slashes instead. Please refer to the attached image for reference. It is possible that there is a missing installation on the local HMI causing this issue. Kindly advise on the necessary steps to rectify this. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dan296</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the oversight, I neglected to include the image in my previous communication. Please find it attached below.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dan296</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I had to activate it on the operating system (OS). I came across a helpful document that can guide you towards the correct settings. Please note that your terminal must meet Performance platform requirements. Check out this link for more information: https://literature.rockwellautomation.com/idc/groups/literature/documents/um/2711p-um008_-en-p.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Scottryan03</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dan296 mentioned that they forgot to attach an image, but have now included it. Can anyone confirm if they were able to successfully set up their Cognex camera, as I am facing similar challenges and could use some guidance?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Productionisdown</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I display an external SVG file in FactoryTalk View ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - To display an external SVG file in FactoryTalk View ME, you can utilize an ActiveX Control Object and Microsoft Web Browser Control type. However, setting the URL to a local file path may encounter difficulties, so consider using a network URL instead.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I unable to set the URL for displaying the SVG file in FactoryTalk View ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are encountering a warning message preventing you from setting the URL to a local file path, consider using a network URL instead. Editing VBA code to add the URL to a Navigation command may not be possible in the ME version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to display an image from an external network URL in FactoryTalk View ME HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to display an image from an external network URL within the HMI of FactoryTalk View ME. You can use ActiveX Control objects and Microsoft Web Browser Control type to achieve this.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can I display a BMP version of the image instead of an SVG file in FactoryTalk View ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - While you can display a BMP version of the image in FactoryTalk View ME, if it does not meet your requirements, consider using an SVG file supported by a web browser for better results.</p>
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
