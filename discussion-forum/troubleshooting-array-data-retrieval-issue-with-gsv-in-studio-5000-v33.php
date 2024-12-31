
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In an attempt to gain experience with arrays, I am currently practicing using Studio 5000 v33. Within my program, I have a rung set up with an XIC bit connected to a push button input, along with an ONS and a GSV function copying data to a specified destination,">
    <meta name="keywords" content="array data retrieval troubleshooting, studio 5000 v33 array data issues, gsv function problem solving, resolve studio 5000 v33 array data retrieval issue, troubleshooting array data storage in">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-array-data-retrieval-issue-with-gsv-in-studio-5000-v33">
    <title>Troubleshooting Array Data Retrieval Issue with GSV in Studio 5000 v33 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Array Data Retrieval Issue with GSV in Studio 5000 v33 | Oxmaint Community">
    <meta property="og:description" content="In an attempt to gain experience with arrays, I am currently practicing using Studio 5000 v33. Within my program, I have a rung set up with an XIC bit connected to a push button input, along with an ONS and a GSV function copying data to a specified destination,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-array-data-retrieval-issue-with-gsv-in-studio-5000-v33">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Array Data Retrieval Issue with GSV in Studio 5000 v33 | Oxmaint Community">
    <meta name="twitter:description" content="In an attempt to gain experience with arrays, I am currently practicing using Studio 5000 v33. Within my program, I have a rung set up with an XIC bit connected to a push button input, along with an ONS and a GSV function copying data to a specified destination,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-array-data-retrieval-issue-with-gsv-in-studio-5000-v33"
      },
      "headline": "Troubleshooting Array Data Retrieval Issue with GSV in Studio 5000 v33",
      "description": "In an attempt to gain experience with arrays, I am currently practicing using Studio 5000 v33. Within my program, I have a rung set up with an XIC bit connected to a push button input, along with an ONS and a GSV function copying data to a specified destination,",
      "author": {
        "@type": "Person",
        "name": "Fastoholic"
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
                <h1 class="text-white">Troubleshooting Array Data Retrieval Issue with GSV in Studio 5000 v33</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Fastoholic</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">386</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">219</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In an attempt to gain experience with arrays, I am currently practicing using Studio 5000 v33. Within my program, I have a rung set up with an XIC bit connected to a push button input, along with an ONS and a GSV function copying data to a specified destination, button_press_log[10,7]. My goal is to store multiple time stamps within this array. Despite not receiving any errors and configuring the necessary fields in the GSV, such as WallClockTime, DateTime, and Button_Press_Log[0,0], I am facing issues when trying to retrieve data. Even after restarting my system, the array monitor shows no data except for the manually entered values. I have also attempted removing the ONS function without success. Any assistance on this matter would be greatly appreciated as I continue to troubleshoot the issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One important question to consider: Are the left and right rails of your logic displaying a green color? It's crucial to understand that while the XIC and its surrounding rung may be illuminated in green, it doesn't necessarily indicate that the logic is actively running. This could simply mean that particular bit is activated, especially if it's an assigned input or alias.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce asked a common question about PLC programming: Are the left and right rails of your logic displaying green? Keep in mind that just because the XIC instruction and the rung it's on are highlighted in green, it doesn't necessarily mean the logic is functioning correctly. It could simply indicate that the bit is on, especially if it's a physical input or an alias. It's important to check both the XIC instruction and the overall logic for complete functionality.Click to read more...I quickly realized that the issue was simply a matter of being in program mode instead of run mode. Sometimes, it's easy to overlook the obvious when troubleshooting. Thanks for pointing me in the right direction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fastoholic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Your issue may be stemming from attempting to store data from a 1-dimensional array (DINT[7], as used in WallClockTime) into a 2-dimensional array (Button_Log[10,7]). The incorrect array type is causing the GSV command to not function properly. To improve results, consider storing the GSV result into a standard DINT[7] array, and then copying DINT[0] to Button_Log[Index,0] with a length of 7. Alternatively, there may be other underlying issues to address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aardwizz pointed out that the issue may be with attempting to store data from a 1-dimensional array (DINT[7]) into a 2-dimensional array (Button_Log[10,7]), causing the GSV command to not function properly. To resolve this, it is suggested to first store the GSV result in a regular DINT[7] array and then transfer the data to Button_Log[Index,0]. Ensuring you are in "rem run" mode instead of "rem prog" mode can also impact the functionality. Additionally, making adjustments to shift and index the data in the 10-position array may be necessary for smoother operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fastoholic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce raised an important inquiry: Are the left and right rails of your logic displaying green? It's crucial to note that just because the XIC and the rung surrounding it are highlighted green, it doesn't necessarily indicate that the logic is actively running. This could simply mean that that particular bit is activated (which may happen if it's an input or an alias). Keep in mind that the presence of green rails does not guarantee logic execution; it could simply mean that a JSR exists leading to it.

A cautionary note to remember is that green rails do not always indicate logic execution. This is a lesson learned the hard way by mistakenly duplicating a JSR. If you encounter this issue, try toggling the bit between JSR | ROUTINE_OLD and JSR | ROUTINE_NEW to resolve it. This mistake led to confusion when troubleshooting ROUTINE_OLD, as it was not being called due to the duplicate JSR. To avoid this in the future, consider renaming the routine to ROUTINE_NO_JSR and erasing the unnecessary JSR reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Culliham</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<h4 class='text-dark'>FAQ: 1.  Why am I facing issues retrieving data from an array in Studio 5000 v33 despite configuring the GSV function correctly?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the configuration of the GSV function parameters or the way data is being stored in the array. Double-check your GSV function settings, array dimensions, and how data is being written to the array to ensure everything is set up correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the problem of not being able to retrieve data from the array in Studio 5000 v33?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by verifying that the data is being written to the correct locations in the array. Ensure that the array dimensions match the data being written, and review your program logic to confirm that the data is being stored properly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take if the array monitor in Studio 5000 v33 shows no data except for manually entered values?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Firstly, recheck the configuration of the GSV function and make sure the data is being written to the correct elements of the array. Additionally, consider reviewing your array indexing and data storage methods to identify any potential issues.</p>
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
