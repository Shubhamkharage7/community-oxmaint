
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am using an Emerson/GE PLC connected to Cimplicity SCADA. I am looking to export data from a specific point or object to a CSV file and then import the CSV file back into the same point or object. While I am aware of the export function, I">
    <meta name="keywords" content="emerson/ge plc, cimplicity scada, export data, csv file, specific data extraction, point or object extraction, import csv file, data export">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-export-specific-data-from-emerson-ge-plc-in-cimplicity-scada-to-csv-efficiently">
    <title>How to export specific data from Emerson/GE PLC in Cimplicity SCADA to CSV efficiently | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to export specific data from Emerson/GE PLC in Cimplicity SCADA to CSV efficiently | Oxmaint Community">
    <meta property="og:description" content="Hello, I am using an Emerson/GE PLC connected to Cimplicity SCADA. I am looking to export data from a specific point or object to a CSV file and then import the CSV file back into the same point or object. While I am aware of the export function, I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-export-specific-data-from-emerson-ge-plc-in-cimplicity-scada-to-csv-efficiently">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to export specific data from Emerson/GE PLC in Cimplicity SCADA to CSV efficiently | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am using an Emerson/GE PLC connected to Cimplicity SCADA. I am looking to export data from a specific point or object to a CSV file and then import the CSV file back into the same point or object. While I am aware of the export function, I">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-export-specific-data-from-emerson-ge-plc-in-cimplicity-scada-to-csv-efficiently"
      },
      "headline": "How to export specific data from Emerson/GE PLC in Cimplicity SCADA to CSV efficiently",
      "description": "Hello, I am using an Emerson/GE PLC connected to Cimplicity SCADA. I am looking to export data from a specific point or object to a CSV file and then import the CSV file back into the same point or object. While I am aware of the export function, I",
      "author": {
        "@type": "Person",
        "name": "JeandreC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-28",
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
                <h1 class="text-white">How to export specific data from Emerson/GE PLC in Cimplicity SCADA to CSV efficiently</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JeandreC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">511</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">32</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am using an Emerson/GE PLC connected to Cimplicity SCADA. I am looking to export data from a specific point or object to a CSV file and then import the CSV file back into the same point or object. While I am aware of the export function, I am specifically interested in extracting data for a particular point or object, rather than retrieving all points in the system. Do you have any tips on how to achieve this task effectively and efficiently?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>This seems like a job that could be accomplished with a script.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I decided that the best approach would be to use scripting, although I'm uncertain about the exact method to do so.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeandreC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The scripting language includes a PointGet function for retrieving point values and a PointSet function for assigning values to points. Additionally, there are various file operations for managing files such as opening, reading, and writing. You can schedule script calls in the Event Editor to automate tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey explains the use of scripting functions in Cimplicity for manipulating point values and performing file operations. By utilizing the PointGet and PointSet functions, users can easily retrieve and write values to points. Additionally, various file operations are available for working with files within the script. The timing of script execution can be specified in the Event Editor.

Here is an example of a Cimplicity script that retrieves the value of a virtual point, performs a calculation, and sets the result to a PLC register. For more information on scripting in Cimplicity, refer to the Basic Control Engine/Scripting section in the Cimplicity help guide.

Code:

Sub Main()

    'Error Handling
        On Error GoTo ErrorTrap

    'Variables
        Dim MyStationTotalDownTime As New Point: MyStationTotalDownTime.Id = "MyVirtualStationPoint"
        Dim TotalDownTime As New Point: TotalDownTime.Id = "MyStopTime"
        Dim RunBit As New Point: RunBit.Id = "MyRealRunBit"
        Dim MyStationDownPercent As New Point: MyStationDownPercent.Id = "MyRealStationPoint"

    'Retrieving Values
        PointGetMultiple RunBit, MyStationTotalDownTime, TotalDownTime

    'Calculating and Setting Real Point Values
        If ((TotalDownTime.Value(1) <> 0) And (RunBit.QualityIs_Available = TRUE)) Then
            MyStationDownPercent.SetValue = ((MyStationTotalDownTime.Value / TotalDownTime.Value(1)) * 10000)
        End If

    Exit Sub

    'Error Handling
        ErrorTrap:
            Resume Next

End Sub</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dYoast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully created a script to save data to a CSV file and restore it. Currently, the filename is set in the code. How can I allow users to select the file using a file open dialog? In Visual Basic, you can easily add a fileopendialog element to the form, which allows users to choose the file. However, in Cimplicity, I can't seem to find a similar element. Is there a way to implement this feature in Cimplicity or am I overlooking something?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeandreC</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How can FileList and ListBox be used together in JavaScript? Explore the features and functionalities of these two elements to enhance your web development projects.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeandreC mentioned that they successfully created a script to save and restore points to a CSV file. Currently, the file name is hardcoded. Is there a way to select the file using a file open dialog? Normally in VB, you would utilize the fileopendialog element to access the class and choose the file. However, it seems that in Cimplicity, there isn't a fileopendialog element. Here is a solution: I use the following code to open a .csv file and import data to a data grid OleObject. You can also load data to a Recordset and display it in a Datagrid. If you prefer not to use Datagrid, you can retrieve data from the Recordset using the code below:

```javascript
Sub importDataGrid()
    Dim fullFileName As String
    fullFileName$ = OpenFilename$("Open File: *.csv ", "Documents:*.CSV")
    If fullFileName$ <> "" Then
        path = FileParse$(fullFileName$, 2)
        fileName = FileParse$(fullFileName$, 3)
        
        ' Dim recordGrid As GefObject
        ' Set recordGrid = CimGetScreen.Object.Objects.Item("RecordDataGrid").OleObject
        ' Dim conn As Object
        ' Dim rs As Object
        ' Set conn = CreateObject("ADODB.Connection")
        ' Set rs = CreateObject("ADODB.Recordset")
        ' conn.ConnectionString = "Provider=Microsoft.Jet.OLEDB.4.0;" & "Data Source=" & path & ";Extended Properties=""Text"""
        ' openStr = "SELECT * FROM " & fileName
        ' conn.Open
        ' rs.Open openStr, conn
        ' Set recordGrid.ItemsSource = rs
        ' rs.Close
        ' conn.Close
    End If
End Sub
``` 

This code allows you to choose a file to import data from and display it in a grid.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JunQ</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I export specific data from Emerson/GE PLC in Cimplicity SCADA to a CSV file efficiently?</h4>
<p class='text-muted'><strong>Answer:</strong> - To export specific data from a particular point or object in Emerson/GE PLC connected to Cimplicity SCADA, you can utilize custom scripts or functions within the SCADA software to extract and save the data to a CSV file.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to import a CSV file back into the same point or object in Cimplicity SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to import a CSV file back into the same point or object in Cimplicity SCADA by developing a data import function that can read the CSV file and update the desired point or object accordingly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I ensure that only data for a specific point or object is extracted and saved in the CSV file?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure that only data for a particular point or object is exported to the CSV file, you can customize the export functionality by specifying the criteria or filters based on the desired point or object's unique identifiers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any best practices or tips for efficiently exporting and importing data in Cimplicity SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> - Utilize the scripting capabilities of Cimplicity SCADA to create tailored export and import functions, optimize the data extraction process by selecting only necessary information, and thoroughly test the import functionality to ensure seamless data transfer between the CSV file and the PLC objects.</p>
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
