
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my v31 application, I am using multiple G120C drives. The communication with the drives is functioning properly, but the IO tree is displaying an unregistered EDS file. I obtained the EDS file from Siemens official website, however, when I attempt to run the EDS wizard in Studio, I">
    <meta name="keywords" content="troubleshooting unregistered eds file, siemens eds file studio 5000, g120c drives communication issue, studio 5000 eds file error, rockwell support eds file">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-unregistered-eds-file-from-siemens-in-studio-5000">
    <title>Troubleshooting Unregistered EDS File from Siemens in Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Unregistered EDS File from Siemens in Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="In my v31 application, I am using multiple G120C drives. The communication with the drives is functioning properly, but the IO tree is displaying an unregistered EDS file. I obtained the EDS file from Siemens official website, however, when I attempt to run the EDS wizard in Studio, I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-unregistered-eds-file-from-siemens-in-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Unregistered EDS File from Siemens in Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="In my v31 application, I am using multiple G120C drives. The communication with the drives is functioning properly, but the IO tree is displaying an unregistered EDS file. I obtained the EDS file from Siemens official website, however, when I attempt to run the EDS wizard in Studio, I">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-unregistered-eds-file-from-siemens-in-studio-5000"
      },
      "headline": "Troubleshooting Unregistered EDS File from Siemens in Studio 5000",
      "description": "In my v31 application, I am using multiple G120C drives. The communication with the drives is functioning properly, but the IO tree is displaying an unregistered EDS file. I obtained the EDS file from Siemens official website, however, when I attempt to run the EDS wizard in Studio, I",
      "author": {
        "@type": "Person",
        "name": "Aperry19"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-16",
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
                <h1 class="text-white">Troubleshooting Unregistered EDS File from Siemens in Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Aperry19</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">260</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">463</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my v31 application, I am using multiple G120C drives. The communication with the drives is functioning properly, but the IO tree is displaying an unregistered EDS file. I obtained the EDS file from Siemens' official website, however, when I attempt to run the EDS wizard in Studio, I receive an error indicating that the EDS file does not match the device. After contacting Rockwell support, their suggestion was that the module may be corrupted. Interestingly, when I access the program from a different EWS, the drives display their properties correctly and the EDS file functions as expected. Any insights or suggestions on this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Transfer the eds file from a functional computer to your own and ensure it is properly installed. Chances are, the specific eds file required may not be readily available. Opt for the standalone eds installer instead of the studio version for better results, as it has proven successful when studio installation has failed in the past.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to extract the EDS file from the Rockwell EDS directory, which contains lengthy number strings, and then reimport it into the EDS installer on a malfunctioning device? I've observed instances where there is a mismatch between the EDS list in the software studio and the primary EDS application. For example, when I import a file through the main installer, it does not appear in the module list in the studio.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aperry19</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, it is possible to duplicate EDS files. Typically, long-named alphanumeric files are associated with Rockwell products, while 3rd party files, like Siemens, often have identifiable names. In my experience, EDS files loaded through the app have always shown up in studio without any issues. If a file does not appear, it is likely due to a missing AOP, rather than an EDS file problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that the absence of an AOP is often a sign that something is wrong, rather than an issue with eds. It is worth noting that Siemens may not have AOPs, which could be a factor in this situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42 mentioned that Siemens may not have Add-On Profiles (AOPs), although it's not confirmed. This comment was made in response to the OP mentioning a discrepancy they have observed in the past. It is presumed that this past observation may have involved Rockwell devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
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
            <p>After trying out the recommended solution, here is how it played out. Initially, I checked RSLinx for the EDS file name on the functioning computer (the icon appears in Studio but not in RSLinx). I extracted the file from the Rockwell EDS folder and transferred it to the non-functional computer. I then imported this EDS file in three different locations. Firstly, in the main EDS application - successful registry, but drives were not updated. Secondly, in the EDS application accessed from the Tools menu in Studio - successful registry, but drives remained unchanged. Finally, I tried the "Register EDS file" option on the drive, but the registry was unsuccessful. A conclusive image serves as evidence that the correct EDS file was used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aperry19</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using the correct file? In your initial post, you mentioned having a G120C, but it seems that you actually have a G120 without the "C" designation. The G120C series (C for compact) integrates the control unit and power unit into a single device. In contrast, the standard G120 is a modular system with a variety of Control Unit (CU) choices offering different functionalities, power modules in various sizes, and diverse operator panel options.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After thorough analysis, it can be confidently stated that the EDS file is not the root cause of the issue for multiple reasons. Firstly, the current EDS file is operational on the functioning system. Additionally, various EDS files, including one endorsed by Siemens for compatibility with all Simantics drives, have been tested, all yielding the same problematic results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aperry19</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One user, Aperry19, mentioned that they have experimented with various EDS files, including one from Siemens claiming compatibility with any Simantics drive. Despite this, all EDS files tested have presented the same recurring issue. Which specific EDS file asserts compatibility with Siemens drives in general? Most EDS files are typically tailored to specific drives and versions, similar to the specificity of GSD files for Profinet. While acknowledging limited experience with AB/EIP systems, the user draws parallels to their extensive background with all Siemens systems. Could there be a discrepancy with the current EDS file in use, or is there another underlying issue at play? Despite uncertainties, there seems to be a lingering sense of incongruity that requires further investigation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42 expressed curiosity about finding an EDS file that is compatible with any Siemens drive, as in their experience, they have only come across drive and version-specific files. Similarly, GSD files for Profinet have also been specific in their experience. While acknowledging their limited AB/EIP experience, they draw on their knowledge of similar concepts in an all-Siemens system. Referring to information from SIOSsupport in the industry, the discussion revolves around the possibility of something else at play if the EDS file being used claims to communicate with any Simantics drive, rather than any generic Siemens drive. This discrepancy raises questions about the accuracy and compatibility of the EDS file in question.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aperry19</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aperry19 disclosed that they found the EDS file for *Simantic* drives on SIOSsupport.industry.siemens.com. This file enables communication with a wide range of drives, not limited to Siemens drives. Embracing being mistaken as an opportunity to expand knowledge, they expressed gratitude for the valuable suggestion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is my Studio 5000 showing an unregistered EDS file for Siemens G120C drives?
- The error may occur if the EDS file does not match the device, potentially due to corruption or compatibility issues.
  
2. How can I resolve the issue of an unregistered EDS file in Studio 5000?
- You may need to verify the integrity of the EDS file, ensure compatibility with the device, or try accessing the program from a different workstation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be causing the EDS file error in Studio 5000 when communicating with Siemens drives?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue might be related to the EDS file not being recognized or matched correctly during communication setup, possibly due to a corrupted module or software configuration problem.</p>
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
