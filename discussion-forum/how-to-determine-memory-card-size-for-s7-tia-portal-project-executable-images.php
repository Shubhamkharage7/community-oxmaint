
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="If youre looking to save a TIA Portal Project executable image on a memory card for offline PLC updates and transfers, you may be wondering what size memory card to use. Determining the required memory size involves checking the size of the compiled image file/data files. To find this">
    <meta name="keywords" content="tia portal project, memory card size, executable image, plc updates, memory size, image file, data files, project settings, file properties, storage capacity, project versions, offline transfers, budget consideration, software reference, future updates">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-determine-memory-card-size-for-s7-tia-portal-project-executable-images">
    <title>How to Determine Memory Card Size for S7 TIA Portal Project Executable Images | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Determine Memory Card Size for S7 TIA Portal Project Executable Images | Oxmaint Community">
    <meta property="og:description" content="If youre looking to save a TIA Portal Project executable image on a memory card for offline PLC updates and transfers, you may be wondering what size memory card to use. Determining the required memory size involves checking the size of the compiled image file/data files. To find this">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-determine-memory-card-size-for-s7-tia-portal-project-executable-images">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Determine Memory Card Size for S7 TIA Portal Project Executable Images | Oxmaint Community">
    <meta name="twitter:description" content="If youre looking to save a TIA Portal Project executable image on a memory card for offline PLC updates and transfers, you may be wondering what size memory card to use. Determining the required memory size involves checking the size of the compiled image file/data files. To find this">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-determine-memory-card-size-for-s7-tia-portal-project-executable-images"
      },
      "headline": "How to Determine Memory Card Size for S7 TIA Portal Project Executable Images",
      "description": "If youre looking to save a TIA Portal Project executable image on a memory card for offline PLC updates and transfers, you may be wondering what size memory card to use. Determining the required memory size involves checking the size of the compiled image file/data files. To find this",
      "author": {
        "@type": "Person",
        "name": "Mas01"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-29",
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
                <h1 class="text-white">How to Determine Memory Card Size for S7 TIA Portal Project Executable Images</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">716</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">375</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>If you're looking to save a TIA Portal Project "executable image" on a memory card for offline PLC updates and transfers, you may be wondering what size memory card to use. Determining the required memory size involves checking the size of the compiled "image" file/data files. To find this information, you can refer to the project settings or file properties within the TIA Portal software. Additionally, consider the storage capacity needed for future project versions and updates. Memory cards suitable for this purpose can sometimes be pricey, so it's important to factor that into your budget.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Search for a Card Reader or USB memory in TIA to add a user-defined Card reader. This feature allows you to select a folder location to save a memory card image. Once that is complete, drag the PLC CPU into the user-defined reader to compile and transfer the program to the folder. You can then verify the folder size, with a recommended size of at least 12 MB, even if a 4 MB card is sufficient. Despite the high cost, I find SMC cards to be more affordable than MMC cards, which are cheaper than MC cards. And don't even get me started on the expensive AB PLC Eprom cards!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Please note the following caution: It is possible to insert an SMC card into a standard card reader to transfer files back and forth. However, it is highly advised not to format the card using a Windows operating system. Additionally, always remember to safely remove the card when using an SMC card in a standard card reader.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP suggested a method in TIA where you can add a user-defined Card Reader/USB memory. This process involves selecting a folder location to send a memory card image, dragging the PLC CPU into the user-defined reader, compiling the program in TIA, and transferring it to the designated folder. It is recommended to opt for a larger size, such as 12 MB, even if a 4 MB card may suffice. Following JesperMP's instructions, I obtained a folder size of 640 KB. Thank you for the guidance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am curious about the size of the HMI files in case I make any future changes. In order to determine the size of the HMI files, I attempted to move "HMI_1 [KTP1200 Basic PN]" into a folder I had set up. However, I encountered an error message when I clicked on the LOAD button. Can anyone provide insight into what this error message signifies? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your industrial operations, it is essential to install panel images. Visit SIOSsupport.industry.siemens.com for assistance with this critical task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>tarik1978 recommended installing panel images, which can be found at SIOSsupport.industry.siemens.com. I appreciate the tip and will investigate further. Thank you, tarik1978!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to JesperMP, it is important not to format the card in Windows. SMCs are known for being more forgiving in this regard. In the event that a card has already been formatted with Windows, you can recover it by utilizing the CPU to reformat it, using the CPU's color screen and keypad.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RVaughan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RVaughan mentioned that SMCs are particularly forgiving, making it possible to recover a card formatted with Windows by reformatting it using the CPU's color screen and keypad. This newfound knowledge is definitely something worth noting for potential future use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How do I determine the memory card size needed for saving a TIA Portal Project executable image?
- To determine the required memory size, check the size of the compiled "image" file/data files in the project settings or file properties within the TIA Portal software.
 
2. Should I consider future project versions and updates when selecting a memory card size?
- Yes, it is recommended to consider the storage capacity needed for future project versions and updates when choosing a memory card size for offline PLC updates and transfers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are memory cards suitable for saving TIA Portal Project executable images expensive?</h4>
<p class='text-muted'><strong>Answer:</strong> - Memory cards suitable for this purpose can sometimes be pricey, so it's important to factor that into your budget when planning for offline PLC updates and transfers.</p>
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
