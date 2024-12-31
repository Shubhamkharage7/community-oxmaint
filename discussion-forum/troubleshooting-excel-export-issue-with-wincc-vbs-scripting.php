
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am currently attempting to export data to Excel from WinCC. I have created a global action that runs every second to create a new Excel file per minute and update it every second. However, I am facing issues with saving changes to Excel. Can anyone provide">
    <meta name="keywords" content="troubleshooting excel export, wincc vbs scripting, excel export issue, wincc data export, excel export problem, wincc excel automation, excel data update, vbs script excel export, wincc excel integration, wincc excel v">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-excel-export-issue-with-wincc-vbs-scripting">
    <title>Troubleshooting Excel Export Issue with WinCC VBS Scripting | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Excel Export Issue with WinCC VBS Scripting | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am currently attempting to export data to Excel from WinCC. I have created a global action that runs every second to create a new Excel file per minute and update it every second. However, I am facing issues with saving changes to Excel. Can anyone provide">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-excel-export-issue-with-wincc-vbs-scripting">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Excel Export Issue with WinCC VBS Scripting | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am currently attempting to export data to Excel from WinCC. I have created a global action that runs every second to create a new Excel file per minute and update it every second. However, I am facing issues with saving changes to Excel. Can anyone provide">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-excel-export-issue-with-wincc-vbs-scripting"
      },
      "headline": "Troubleshooting Excel Export Issue with WinCC VBS Scripting",
      "description": "Hello everyone! I am currently attempting to export data to Excel from WinCC. I have created a global action that runs every second to create a new Excel file per minute and update it every second. However, I am facing issues with saving changes to Excel. Can anyone provide",
      "author": {
        "@type": "Person",
        "name": "tsenguun odgerel"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-03",
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
                <h1 class="text-white">Troubleshooting Excel Export Issue with WinCC VBS Scripting</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tsenguun odgerel</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5904</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">323</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am currently attempting to export data to Excel from WinCC. I have created a global action that runs every second to create a new Excel file per minute and update it every second. However, I am facing issues with saving changes to Excel. Can anyone provide assistance with this issue?

Here is the code I am using:

Option Explicit
Function action
Dim Dat
Dim Sec
Dim Min
Dim Exce
Dim SheetNam
Dim i
Dim fso
Dim WB

Dat = FormatDateTime(Now, vbShortDate)
Sec = Second(Now)
Min = Minute(Now)
SheetNam = "Report"

Set Exce = CreateObject("Excel.Application")
Set fso = CreateObject("Scripting.FileSystemObject")

If fso.FileExists("C:\Users\User\Desktop\excel\"&Min&".xlsx") Then
    Set WB = Exce.Workbooks.Open("C:\Users\User\Desktop\excel\"&Min&".xlsx")
    Exce.Application.DisplayAlerts = False
    Exce.Application.Visible = False
    
    'write data to Excel workbook
   
    Exce.ActiveWorkbook.Save "C:\Users\User\Desktop\excel\"&Min&".xlsx"
    Exce.ActiveWorkbook.Close
    Exce.Quit

Else
    Exce.Application.Visible = False
    Exce.Workbooks.Add
    Exce.Worksheets(1).Name = SheetNam
    Exce.Worksheets(SheetNam).Range("A1") = "Create"
    Exce.Worksheets(1).SaveAs("C:\Users\User\Desktop\excel\"&Min&".xlsx")
    Exce.ActiveWorkbook.Close
    Exce.Quit
End If
End Function

If you have any insights or suggestions, please feel free to share. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear, I am interested in creating a SQL Server query within WinCC RT Advanced, and then exporting the results to Excel. How can I accomplish this task efficiently?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>victor82mendoza</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why am I facing issues with saving changes to Excel when exporting data from WinCC using a VBS script?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue with saving changes to Excel could be due to the way the Excel workbook is being handled in your VBS script. Ensure that the workbook is properly opened, data is written correctly, and the workbook is saved and closed appropriately.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot Excel export issues with my WinCC VBS scripting?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot Excel export issues, you can check the code logic, verify file paths and permissions, confirm data is being written correctly to the Excel workbook, and ensure proper handling of the Excel application instance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why is my VBS script not updating the Excel file every second as intended?</h4>
<p class='text-muted'><strong>Answer:</strong> - If your VBS script is not updating the Excel file every second as intended, review the code logic related to updating the Excel file within your global action. Check for any potential errors that may be preventing the continuous updates.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What should I check if my VBS script is not creating a new Excel file per minute as expected?</h4>
<p class='text-muted'><strong>Answer:</strong> - If your VBS script is not creating a new Excel file per minute, verify the conditions for creating a new Excel file, check the file naming convention, and ensure that the file creation process is correctly implemented within the script.</p>
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
