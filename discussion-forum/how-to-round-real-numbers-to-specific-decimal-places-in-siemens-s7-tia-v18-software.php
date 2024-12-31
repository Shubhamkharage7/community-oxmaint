
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is there a way to round a real number to a specific number of decimal places in the S7/TIA Portal software? For example, if I have the number 22.519432 and I want to round it to 2 decimal places, the result should be 22.52. I am asking this question">
    <meta name="keywords" content="siemens s7, tia portal software, round real numbers, specific decimal places, decimal rounding, rounding instruction, val_string, data recording, csv file, hmi display, decimal precision, rounding function, siemens programming, plc software, number">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-round-real-numbers-to-specific-decimal-places-in-siemens-s7-tia-v18-software">
    <title>How to Round Real Numbers to Specific Decimal Places in Siemens S7/TIA v18 Software? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Round Real Numbers to Specific Decimal Places in Siemens S7/TIA v18 Software? | Oxmaint Community">
    <meta property="og:description" content="Is there a way to round a real number to a specific number of decimal places in the S7/TIA Portal software? For example, if I have the number 22.519432 and I want to round it to 2 decimal places, the result should be 22.52. I am asking this question">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-round-real-numbers-to-specific-decimal-places-in-siemens-s7-tia-v18-software">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Round Real Numbers to Specific Decimal Places in Siemens S7/TIA v18 Software? | Oxmaint Community">
    <meta name="twitter:description" content="Is there a way to round a real number to a specific number of decimal places in the S7/TIA Portal software? For example, if I have the number 22.519432 and I want to round it to 2 decimal places, the result should be 22.52. I am asking this question">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-round-real-numbers-to-specific-decimal-places-in-siemens-s7-tia-v18-software"
      },
      "headline": "How to Round Real Numbers to Specific Decimal Places in Siemens S7/TIA v18 Software?",
      "description": "Is there a way to round a real number to a specific number of decimal places in the S7/TIA Portal software? For example, if I have the number 22.519432 and I want to round it to 2 decimal places, the result should be 22.52. I am asking this question",
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
      "datePublished": "2024-08-24",
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
                <h1 class="text-white">How to Round Real Numbers to Specific Decimal Places in Siemens S7/TIA v18 Software?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3074</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">116</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is there a way to round a real number to a specific number of decimal places in the S7/TIA Portal software? For example, if I have the number 22.519432 and I want to round it to 2 decimal places, the result should be 22.52. I am asking this question because the operator has mentioned that the data recorded in the CSV file displays 7 decimal places, but they would like it to match the HMI-displayed value, which is shown with 2 decimal places. I initially thought of using the ROUND instruction, but I believe it rounds to the nearest integer. Is there a different instruction available for this purpose, or should I consider using VAL_STRING instead? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I no longer have access to TIA Portal, and it has been some time since I last used it. Is it possible to transform your REAL number by multiplying it by 100 to a DINT or INT and then dividing it by 100 back to another REAL? This method reminds me of how I would handle it in Allen Bradley PLC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hardaysknight</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are encountering issues with discrepancies between the REAL representation in TIA and the floating point representation in Windows when writing to a CSV file, you may notice that values displayed as 22.52 in the PLC or HMI appear as 22.51999994 in Windows. Even rounding to 22.52 may not entirely resolve the issue. One potential solution is to utilize integers with an implied decimal point to address this discrepancy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of using the REAL data type in the PLC, it would be more advantageous to utilize VAL_STRG for logging strings. This will avoid issues with implied decimals and inaccuracies in data storage. JesperMP highlighted the limitations of the REAL data type, which does not have the capability to restrict the number of decimal places. By opting for VAL_STRG, you can ensure more precise and accurate storage of numerical values in the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are various methods to customize the display of a CSV file in Excel. Instead of using the default format, you can create a template with specific settings, such as setting cells to display values to 2 decimal places. Another approach is to use a code for more accurate rounding up or down, following standard guidelines. Simply adjust the code for a different number of decimal places by changing the value in the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The challenge lies in how a 32-bit IEEE Floating Point number represents fractional decimals using structured binary. Unlike integers, there isn't always a precise decimal to binary conversion for fractional numbers. For instance, when the number 1.3 is closely approximated in 32-bit float format, it becomes 1.2999999523162841796875. The screenshot provided demonstrates an unexpected result from a simple addition operation, highlighting the intricacies at play. One solution could be storing values as integers with 2 implied decimal places by multiplying by 100, or implementing rounding when displaying the values. Understanding these nuances is crucial for accurate representation in computing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hardaysknight mentioned that they no longer have access to TIA Portal, and it has been quite some time since they last used it. They suggested converting a REAL number to a DINT or INT by multiplying it by 100 and then dividing it back to another REAL by 100, a method commonly used in Allen Bradley systems. Personally, this method has been effective for me since the Atari 400 days. Alternatively, users can consider running a formatting script on the rows or columns within the software they are utilizing to display this data effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the helpful responses. I will explore these options further tomorrow. Much appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To achieve accurate results, multiply real numbers by 100 before converting them to integers (Dint). After converting back from Dint to real, divide by 100 to obtain real values with two decimal places in most cases. This process can also be easily done in Microsoft Excel, as demonstrated in a CSV file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you use Excel to display data, there are numerous possibilities you can explore. To start, create a template in *.xlt format and set the cells where data will be inputted to display two decimal places. Using VBA (Visual Basic for Applications), you can implement a file picker (dropdown list) that populates with file names, such as "Test machine 13_10_23_10:36". The operator can then select the necessary CSV file, load it into a specific sheet, and transfer the data to another sheet by mapping the cells accordingly. This process allows for the creation of graphs, mathematical analysis, or any other data manipulation required. Save the template as read-only to preserve its structure and prompt a "save as" request to prevent alterations to the template. This method was used to generate reports from an SQL database, where operators could select a date range and batch number to produce relevant data. The template was distributed among users with a shortcut on their desktops for easy access. By leveraging the power of VBA, CSV data can be formatted into a presentable report. This approach was successfully implemented across various plants, with the template stored on a server and accessible through desktop shortcuts. In some cases, where data was stored on HMI's with SD cards in CSV format, the files were transferred to a laptop for analysis. The filenames followed a specific format, such as "FillingLine1_20221830_001", including the line number, date, time, and batch information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mas01 inquired about the discrepancy in decimal places between data recorded in a CSV file and displayed on an HMI screen. The operator wanted the data in the CSV file to match the 2 decimal places shown on the screen. They are wondering what tool or software the operators are using to view the CSV file, and what tool or software is responsible for writing the CSV file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To efficiently convert a floating point number to an integer in programmable logic controllers, multiply the number by 100 to remove the decimals and store it as an integer value. Then, reclaim the decimals by multiplying by 0.01 and storing the result in a real variable. If the value is in string format, it can be manipulated by breaking it into segments and concatenating them back together as needed for formatting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about the tools utilized by operators to access and create CSV files. They typically employ a web browser to input the PLC's IP address, leading them to a Siemens portal where they can login and retrieve the CSV file using TIA Portal/S7 software. Several suggestions have been made regarding the "multiply by 100" conversion method, which drbitboy may explore further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you encountering issues with the CSV file located on the memory card of an S7-1200 CPU when using the DataLogWrite function to pass REAL values? Even after rounding the REAL value to 22.52, you may still see 22.51999994 in the file upon opening it in Excel. This could be due to the phenomenon previously mentioned. One possible solution is to convert the REAL number to a STRING using VAL_STRG, which allows you to specify the number of decimals after rounding. Afterwards, you can send the STRING to DataLogWrite instead of the original REAL value.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP explained that the CSV file is stored on the memory card of an S7-1200 CPU. It seems that the issue lies in using the DataLogWrite function with REAL values. Despite rounding the REAL value to 22.52, the file still shows 22.51999994 in Excel. This is a known issue that can be resolved by converting the REAL number to a STRING using VAL_STRG. VAL_STRG allows you to specify the number of decimal places for rounding before sending the STRING to DataLogWrite. It's worth noting that the memory slot is empty, indicating that the file is stored in the internal memory, which is approximately 2MB in size. The VAL_STRG conversion has now been successfully implemented, as shown in the image provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to exercise caution when utilizing the internal flash memory, as it is subject to a limited number of write cycles. While the specifics of the integrated flash memory in the S7-1200 are unknown, it is common for SMC cards to have around 500,000 write cycles. This information can be found at https://support.industry.siemens.com/cs/dk/en/view/109482591. For instance, if you are writing data every minute, 24 hours a day, 7 days a week, you will reach this limit after approximately 347 days.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP advises caution when using internal flash memory due to its limited number of write cycles. While the integrated flash memory in the S7-1200 may have different specifications, SMC cards typically have 500,000 write cycles. For instance, if writing occurs every minute, 24/7, the write limit will be reached in about 347 days. The write operation only happens once for each component measured, triggered by the operator pressing 'Generate Report'. It would be surprising if the write count reaches even 5,000 writes to the CSV file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC mentioned a unique method they have been using since the days of the Atari 400. A potential solution could involve executing a formatting script on the rows or columns within the software being used to access this data. It's interesting to find someone else who also had an Atari 400!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Seabee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I round a real number to a specific number of decimal places in Siemens S7/TIA v18 Software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In Siemens S7/TIA Portal software, you can achieve rounding of real numbers to specific decimal places by using the VAL_STRING function instead of the ROUND instruction, as the ROUND instruction rounds to the nearest integer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why would I need to round real numbers to specific decimal places in Siemens S7/TIA v18 Software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Rounding real numbers to specific decimal places is often necessary to match the displayed values on HMIs or to adjust the precision of data recorded in files, such as CSV files.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What is the workaround for ensuring that the data recorded in a CSV file matches the HMI-displayed value in Siemens S7/TIA v18 Software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure consistency between the data displayed on an HMI with 2 decimal places and the data recorded in a CSV file with 7 decimal places, you can implement rounding functions to format the values accordingly.</p>
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
