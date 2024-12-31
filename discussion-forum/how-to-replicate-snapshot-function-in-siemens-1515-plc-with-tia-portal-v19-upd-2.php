
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am currently utilizing a Siemens 1515 PLC with TIA Portal V19 Upd 2. Is there a way to replicate the Snapshot function and copy snapshots to Start values? My setup includes a barcode scanner that captures names, article numbers, and stored recipes. This information is stored">
    <meta name="keywords" content="siemens 1515 plc, tia portal v19 upd 2, snapshot function, replicating snapshots, copying start values, barcode scanner, user-defined type (udt), array in database (db), saved data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-replicate-snapshot-function-in-siemens-1515-plc-with-tia-portal-v19-upd-2">
    <title>How to Replicate Snapshot Function in Siemens 1515 PLC with TIA Portal V19 Upd 2 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Replicate Snapshot Function in Siemens 1515 PLC with TIA Portal V19 Upd 2 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am currently utilizing a Siemens 1515 PLC with TIA Portal V19 Upd 2. Is there a way to replicate the Snapshot function and copy snapshots to Start values? My setup includes a barcode scanner that captures names, article numbers, and stored recipes. This information is stored">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-replicate-snapshot-function-in-siemens-1515-plc-with-tia-portal-v19-upd-2">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Replicate Snapshot Function in Siemens 1515 PLC with TIA Portal V19 Upd 2 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am currently utilizing a Siemens 1515 PLC with TIA Portal V19 Upd 2. Is there a way to replicate the Snapshot function and copy snapshots to Start values? My setup includes a barcode scanner that captures names, article numbers, and stored recipes. This information is stored">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-replicate-snapshot-function-in-siemens-1515-plc-with-tia-portal-v19-upd-2"
      },
      "headline": "How to Replicate Snapshot Function in Siemens 1515 PLC with TIA Portal V19 Upd 2",
      "description": "Hello everyone! I am currently utilizing a Siemens 1515 PLC with TIA Portal V19 Upd 2. Is there a way to replicate the Snapshot function and copy snapshots to Start values? My setup includes a barcode scanner that captures names, article numbers, and stored recipes. This information is stored",
      "author": {
        "@type": "Person",
        "name": "swedeleaner"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">How to Replicate Snapshot Function in Siemens 1515 PLC with TIA Portal V19 Upd 2</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">332</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">361</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am currently utilizing a Siemens 1515 PLC with TIA Portal V19 Upd 2. Is there a way to replicate the Snapshot function and copy snapshots to Start values? My setup includes a barcode scanner that captures names, article numbers, and stored recipes. This information is stored in a User-Defined Type (UDT) within an Array in a Database (DB). It would be beneficial to have the ability to save this data.
Additionally, I am implementing loops to search for specific data. Here is an example of the code I am using:
```
FOR #index := 0 TO 9 DO
    IF #BarcodeIn_Field1 = #Product[#index].BarCode THEN
        #NewProcessCycle_Product1 := #Product[#index];
    END_IF;
END_FOR;
```
While this loop effectively locates items, I am interested in determining if the loop finishes without any matches. For instance, if the scanned value is not found in the database.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Swedeleaner is asking if there is a way to replicate the features of Snapshot and copy snapshots to Startvalues. This involves working with a barcodescanner to scan names, article numbers, and stored recipes, all of which are stored in a User Defined Type (UDT) within an Array in a database. Swedeleaner would like to be able to save this information. Do you want to know if the loop function completes without any matches? The following code snippet can be used to check for hits:
#hit_found := FALSE;
FOR #index := 0 TO 9 DO
  IF #BarcodeIn_Field1 = #Product[#index].BarCode THEN
   #hit_found := TRUE;
   #NewProcessCycle_Product1 := #Product[#index];
  END_IF;
END_FOR;</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP asked: What are your specific goals for this? Where do you want to save the data and for what purpose? Here is a suggested code snippet to help you achieve your objectives:

Code:
#hit_found := FALSE;
FOR #index := 0 TO 9 DO
    IF #BarcodeIn_Field1 = #Product[#index].BarCode THEN
        #hit_found := TRUE;
        #NewProcessCycle_Product1 := #Product[#index];
    END_IF;
END_FOR;

Thank you Jesper for your assistance, your expertise was invaluable. I simply want an extra layer of security for the data. I have inputted all necessary parameters as initial values. The operators will input new data (products) into the data block as required. To avoid accidental deletion of records in the database while adjusting the PLC settings, storing them as initial values could serve as a precautionary measure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking to achieve specific outcomes, simply capturing and saving snapshots as initial values may suffice. However, you may require a more robust solution. One option is to establish a database to retain data with starting values and incorporate a 'reset to factory values' button on the Human-Machine Interface (HMI). When this button is triggered on the HMI, the following code can be implemented: IF #reset_button_activated THEN "MyDB".values := "MyDB_initial".values; #reset_button_activated := FALSE; END_IF. Alternatively, if the information resembles a recipe, there are various methods available for storing and resetting recipes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One useful feature of Siemens programming is the WRIT_DBL function, which allows you to transfer current values to start values in a different data block. It is possible for both the source and destination of WRIT_DBL to be the same data area, but for added safety, it is recommended to use a temporary data block and perform two separate WRIT_DBL actions. Keep in mind that after using WRIT_DBL, you will need to update the datablock from the online project to the offline project, as the start values will have changed and the blocks will no longer be equal. According to the help files, "The content of work memory is not changed during the copy process," indicating that the current values remain unchanged and only the start values are updated in the destination datablock after the write command is executed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When making adjustments to the PLC system, a simple error could lead to the loss of important data stored in the database. This raises concerns about the overall security and reliability of the system. In the world of computing, it is widely believed that data only truly exists when there are multiple copies available, as stated in "Schofield's Law of Computing". Therefore, it is crucial to have backup measures in place to prevent data loss.

One possible solution is to utilize the capabilities of the PLC system, such as saving recipes and copying data to an SD card for retentive memory. For example, Siemens PLCs offer the option to transfer data from a data block to an SD card, ensuring that important information is preserved even during power cycles.

Furthermore, data can also be securely transferred to an external FTP server for additional backup and accessibility. By implementing these practices, operators can mitigate the risk of data loss and ensure the smooth operation of the system. It is essential to prioritize the importance of data protection and implement the necessary measures to safeguard against potential threats.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your valuable input! I will carefully review and consider these suggestions, and possibly include the customer in the decision-making process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I replicate the Snapshot function in Siemens 1515 PLC with TIA Portal V19 Upd 2?</h4>
<p class='text-muted'><strong>Answer:</strong> To replicate the Snapshot function and copy snapshots to Start values in Siemens 1515 PLC with TIA Portal V19 Upd 2, you can consider implementing a solution that involves storing data from a barcode scanner in a User-Defined Type (UDT) within an Array in a Database (DB).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can you provide guidance on saving data from a barcode scanner in Siemens 1515 PLC with TIA Portal V19 Upd 2?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, you can save data from a barcode scanner by creating a User-Defined Type (UDT) to store names, article numbers, and recipes. Storing this information in an Array within a Database (DB) allows for efficient data management and retrieval.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I determine if a loop finishes without any matches in Siemens 1515 PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> In Siemens 1515 PLC programming, to check if a loop finishes without any matches, you can implement a logic that tracks the loop's progress. For example, you can set a flag variable before the loop starts and change its value if a match is found. After the loop completes, you can check the flag's final value to determine if any matches were found.</p>
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
