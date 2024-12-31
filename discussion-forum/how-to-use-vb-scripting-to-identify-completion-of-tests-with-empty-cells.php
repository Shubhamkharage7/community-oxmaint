
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there, I am seeking a way for my system to identify when all tests have been completed. I am considering having the user input a # symbol to indicate the end of tests, with the system then alerting the user. The system should display a message on the">
    <meta name="keywords" content="vb scripting, identify completion of tests, empty cells, user input symbol, test completion alert, hmi message, read data code, excel spreadsheet, hmi screen display, plc data storage, sequential tests, recording test data, excel file">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-vb-scripting-to-identify-completion-of-tests-with-empty-cells">
    <title>How to Use VB Scripting to Identify Completion of Tests with Empty Cells | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use VB Scripting to Identify Completion of Tests with Empty Cells | Oxmaint Community">
    <meta property="og:description" content="Hello there, I am seeking a way for my system to identify when all tests have been completed. I am considering having the user input a # symbol to indicate the end of tests, with the system then alerting the user. The system should display a message on the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-vb-scripting-to-identify-completion-of-tests-with-empty-cells">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use VB Scripting to Identify Completion of Tests with Empty Cells | Oxmaint Community">
    <meta name="twitter:description" content="Hello there, I am seeking a way for my system to identify when all tests have been completed. I am considering having the user input a # symbol to indicate the end of tests, with the system then alerting the user. The system should display a message on the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-vb-scripting-to-identify-completion-of-tests-with-empty-cells"
      },
      "headline": "How to Use VB Scripting to Identify Completion of Tests with Empty Cells",
      "description": "Hello there, I am seeking a way for my system to identify when all tests have been completed. I am considering having the user input a # symbol to indicate the end of tests, with the system then alerting the user. The system should display a message on the",
      "author": {
        "@type": "Person",
        "name": "DRD_D2H"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">How to Use VB Scripting to Identify Completion of Tests with Empty Cells</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">480</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">313</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there, I am seeking a way for my system to identify when all tests have been completed. I am considering having the user input a "#" symbol to indicate the end of tests, with the system then alerting the user. The system should display a message on the HMI before the user confirms test initiation, with a blank cell also being acceptable instead of a null value. I am unsure how to incorporate this functionality into the "read data" code provided in the attachment. The process involves:
1. Users entering up to 5 test runs in an Excel spreadsheet.
2. HMI reading the spreadsheet, displaying it on the screen, and storing the data for the PLC.
3. Tests being conducted sequentially.
4. Recording data in an Excel file once a test is completed (noting temperature and torque).
5. Alerting the user when the "#"/blank cell is received to signify the completion of all tests. Thank you in advance for any assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To check if the temp_n variants are empty, you can compare them to a null value in the code. For example, you can use the following code snippet: IF temp_5 = "", the PLC may still need to determine if test 5 is missing. One option is to assign a nonsensical value like -999.0 to the temperature or torque. In this scenario, the PLC will halt when encountering such a value. Additionally, there could be a hidden "torque_6" equivalent in the PLC with a constant value of -999.0, ensuring that the PLC always encounters -999.0 at some point, even if all five tests have valid values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The presence of a blank text or a '#' in any of the 5 cells signifies the end of the test sequence. Utilize zero values and set limits on the tag to trigger color animations in the cell, indicating the limit. To enhance clarity, monitor cell values in the PLC and use them to control a dynamic text list displaying messages like '5 tests are pending', '4 tests are pending', '1 test is pending', or 'no more tests are pending'. This approach is more effective than relying on implicit meanings. If displaying a blank field instead of '0' is desired for operators, various methods can achieve this, such as visibility and color animations. No scripts are necessary for this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are various methods for determining if a cell is blank in Excel. One way is to test the tags in the HMI or PLC for an empty cell. Another approach is to iterate through the cells in Excel and use the ISBLANK function. By populating a specific cell with a check character or the number of tests, you can use this information in the HMI or PLC. For example, Cell A7 can store the number of tests conducted. This allows for efficient data management and integration between Excel and the HMI/PLC systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I appreciate your responses! I have combined suggestions from @parky and @drbitboy and made some changes to the code. However, I am encountering a syntax error and I need help resolving it. It has been a while since I last used VB scripting, about 10 years ago in school, so I'm struggling to pinpoint the issue. Can anyone assist me in identifying and resolving the error in the code?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When specifying the type, consider using DIM tagnames (1 to 10) As String. However, it may be more appropriate to use DIM tagnames (10) As String upon further consideration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to successfully declare variables in VBA, specify the data type such as DIM tagnames (1 to 10) As String. Upon further reflection, it may be more appropriate to use DIM tagnames (10) As String. This adjustment proved to be effective as tagnames(10) worked as intended. Click here to learn more!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe I have encountered syntax variations in VBA that may require adjustments depending on the specific VBA version being used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the syntax for declaring an array in VBScript? Learn how to initialize an array in VBScript for efficient coding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Appreciate the assistance, everyone! I'm curious if it's feasible to achieve this without the comfort panel. While scripting isn't an option on basic panels, I found@JesperMP's response intriguing as it sparked ideas for potential cost savings. I was interested in using scripts to save and export PLC data to an Excel file, believing it's the only method to accomplish this.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing a recipe to read a CSV file may seem like a good idea, but it may be unnecessary complexity. It is important to minimize the use of scripts and let the PLC handle the actual functionality. The PLC is responsible for monitoring the tags and determining if a test should be conducted based on the tag's value. To make a cell appear empty when the value is '0', scripting is not required. However, simply hiding the '0' may not provide enough information to the operator. Consider using a symbolic output field with a descriptive text to effectively communicate the status.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reconsideration, if I were to make a change, I would keep the value in the cell after a test is completed. Instead, I would add a text indicator next to each line indicating the status as "not selected" (when the cell value is zero), "pending", "in progress", "done successfully", or "done with error". This approach would provide the operator with a clearer understanding of the process and its stages. Furthermore, this functionality would be managed by the PLC, with the HMI solely used for inputting values, importing CSV files, and displaying status updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DRD_D2H inquired about how to notify the system when there are no more tests to run, proposing the use of "#" to indicate the end of tests. They seek to display this information on the HMI interface before test confirmation. Additionally, they are unsure how to handle scenarios where the user runs less than the maximum number of tests. The process involves user input of up to 5 test runs in an Excel sheet, followed by HMI reading and displaying the data for PLC use. The runs are conducted sequentially, with data logged for each run. Upon encountering the "#" or a blank cell, the system will inform the user that all tests are complete. In a related conversation, DRD_D2H noted the success of using tagnames(10) for their solution and inquired about sending a CSV file to the HMI during runtime or to a local network via an IP address. They seek guidance on the method and file path to overcome their current challenge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ahmad.90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ahmad.90 inquired: "Hello sir, can you please explain how to send the csv file to the HMI upon exiting runtime? Do you send it through the local network using an IP address? I would appreciate it if you could clarify your method and file path, as I am currently facing difficulties in this area."

To address this issue, I have devised a script that triggers data transfer when the "import scripts" button is activated. The HMI, PLC, and PC are all interconnected within the same local network, sharing identical IPs with the exception of the last segment. The process unfolds as follows: pressing the import data button on the HMI triggers the execution of the script, which assigns cell data to designated tags on the HMI. These tags are linked to PLC tags and are activated when necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DRD_D2H</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I use VB Scripting to identify the completion of tests with empty cells or a "" symbol?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can achieve this functionality by implementing a check in your VB Scripting code to look for either an empty cell or a "" symbol to indicate the completion of tests.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can the system display a message on the HMI before the user confirms test initiation?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can include code in your VB Scripting to display a message on the HMI before the user confirms test initiation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I modify the provided "read data" code to incorporate the functionality of identifying test completion?</h4>
<p class='text-muted'><strong>Answer:</strong> - To modify the "read data" code to incorporate the functionality of identifying test completion, you can add conditional statements to check for the presence of "" symbol or empty cells.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible to have a blank cell instead of a null value to signify the end of tests?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can configure your VB Scripting to accept a blank cell as a valid indicator of test completion in addition to the "" symbol.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can I record data in an Excel file once a test is completed, noting temperature and torque?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can enhance your VB Scripting code to write data to an Excel file once a test is completed, capturing information such as temperature and torque for each test run.</p>
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
