
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In a recent project, I encountered the need to write a DINT array to a text file using CODESYS. To address this, I developed a small data logger to collect data in a DINT array and then transfer it to a file. Throughout this process, I faced a challenge">
    <meta name="keywords" content="codesys dint array logging, efficient data logging in codesys, writing dint arrays to text files in codesys, simplified file handling in codesys, codesys data logging optimization, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficiently-logging-data-writing-dint-arrays-to-text-files-in-codesys">
    <title>Efficiently Logging Data: Writing DINT Arrays to Text Files in CODESYS | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficiently Logging Data: Writing DINT Arrays to Text Files in CODESYS | Oxmaint Community">
    <meta property="og:description" content="In a recent project, I encountered the need to write a DINT array to a text file using CODESYS. To address this, I developed a small data logger to collect data in a DINT array and then transfer it to a file. Throughout this process, I faced a challenge">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficiently-logging-data-writing-dint-arrays-to-text-files-in-codesys">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficiently Logging Data: Writing DINT Arrays to Text Files in CODESYS | Oxmaint Community">
    <meta name="twitter:description" content="In a recent project, I encountered the need to write a DINT array to a text file using CODESYS. To address this, I developed a small data logger to collect data in a DINT array and then transfer it to a file. Throughout this process, I faced a challenge">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficiently-logging-data-writing-dint-arrays-to-text-files-in-codesys"
      },
      "headline": "Efficiently Logging Data: Writing DINT Arrays to Text Files in CODESYS",
      "description": "In a recent project, I encountered the need to write a DINT array to a text file using CODESYS. To address this, I developed a small data logger to collect data in a DINT array and then transfer it to a file. Throughout this process, I faced a challenge",
      "author": {
        "@type": "Person",
        "name": "Pandiani"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-06",
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
                <h1 class="text-white">Efficiently Logging Data: Writing DINT Arrays to Text Files in CODESYS</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">260</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">500</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In a recent project, I encountered the need to write a DINT array to a text file using CODESYS. To address this, I developed a small data logger to collect data in a DINT array and then transfer it to a file. Throughout this process, I faced a challenge that required me to seek solutions from online forums. This made me consider if there's a more streamlined approach to handling this task, as the current method involves several variables. It was also interesting to learn that CODESYS uses '$R$N' to represent CRLF (carriage return and line feed) for Windows OS line endings.

As I continue this project, I plan to incorporate error handling and verification for file operations. I am contemplating if converting the DINT array to an array of strings and adding newline characters to each element before writing to the file might be a more efficient method.

Included below is a snippet of the CODESYS support class for file handling:

```CODE
// Support class for File_Handler
FUNCTION_BLOCK fileWrite
VAR_INPUT
    xEnableWrite : BOOL;
    iMaxSize : INT;   
END_VAR
VAR_IN_OUT
    diData :  ARRAY[*] OF DINT;
END_VAR
VAR_OUTPUT
    xDone: BOOL := FALSE;
END_VAR
VAR
    _hfile : SysFile.RTS_IEC_HANDLE;
    pResult: POINTER TO SysFile.RTS_IEC_RESULT;
    _sFileName : STRING := 'C:/temp/DataLogger.txt';
    _sArray : ARRAY [0..255] of STRING;
    i :INT := 0;
    xFinished : BOOL := FALSE;
    sStringTmp : STRING(128);
END_VAR
//-----------------------------------------------------------
IF xEnableWrite AND NOT xFinished THEN
    _hFile := SysFileOpen(_sFileName, am:=SysFile.ACCESS_MODE.AM_WRITE, pResult);
    
    // Convert DINT array to StringArray
    FOR i := 0 TO iMaxSize - 1 DO
        // Convert DINT to STRING and store in StringArray
        _sArray[i] := DINT_TO_STRING(diData[i]);
        sStringTmp := CONCAT(_sArray[i], '\n'); //'$R$N');
        SysFileWrite(_hFile, ADR(sStringTmp), LEN(sStringTmp), pResult);
    END_FOR
    xFinished := TRUE;
    xDone := TRUE;
END_IF
```

By optimizing the process of writing DINT arrays to text files in CODESYS, we can enhance efficiency and performance in data logging tasks.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you find that xFinished is not being used, it can be removed from the IF statement along with the AND NOT xFinished sub-expression. However, if xFinished is effectively static, despite being declared in a VAR-END_VAR stanza instead of a VAR_STATIC-END_VAR stanza, this may not be necessary. The issue arises if xFinished is not effectively static, as the routine may only be able to write the file once. The variable sArray is not required; both occurrences can be replaced with sStringTmp. It may be possible to omit pResult in the calls if you are not examining the result within this routine. If nothing is being done with the output parameter referenced by xDone in the calling routine, it can also be eliminated. Consider using functions like SIZE, UPPER_BOUND, and LOWER_BOUND to determine the length of the diData array, potentially removing the need for iMaxSize. In CODESYS, $Rand$N is equivalent to \rand\n in languages like C and Python, while $R$N is equivalent to "\r\n" or CRLF. Placing the array diData in the VAR_IN section instead of VAR_IN_OUT may not save a variable but can save two lines of code. You could eliminate xEnableWrite and the IF-ENDIF by making the external call to this routine optional based on the input parameter xEnableWrite. Only call the routine when xEnableWrite is True by using IF enableWrite THEN fileWrite(diData,...); END_IF.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the valuable feedback, drbitboy. Here is an enhanced version of the code based on your input:

Function Block: fileWrite
VAR_IN_OUT
    diData: ARRAY[*] OF DINT;
END_VAR
VAR_OUTPUT
    xDone: BOOL := FALSE;
END_VAR
VAR
    _hfile: SysFile.RTS_IEC_HANDLE;
    _pResult: POINTER TO SysFile.RTS_IEC_RESULT;
    _sFileName: STRING := 'C:/temp/DataLogger.txt';
    _i: DINT := 0;
    _sStringTmp: STRING(128);
END_VAR

If xDone is false, the code will perform the following actions:
1. Open the file for writing.
2. Convert the DINT array to a StringArray and write it to the file.
3. Close the file once writing is completed.

Some suggestions mentioned could not be implemented at this stage. For error checking and ensuring that writing occurs only once, the xDone variable is utilized. Placing the array diData inside the VAR_IN_OUT block resolves error messages. The code has been improved accordingly. Thank you for your guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here are some additional "Code Golf" tips: If xDone is complete, then return; // eliminate the END_IF at the end. I am unsure about the significance of xDone. I anticipate that VAR_OUT-END_VAR will set xDone to FALSE each time it's called, so the IF-END_IF statement will always run. However, it's uncertain if CodeSys handles this correctly. What occurs if xDone is not initialized within VAR_OUT-END_VAR, and xDone := assignment is commented out? Will it result in a compilation error?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to the value of xDone, I would expect the VAR_OUT to initialize it to FALSE every time it is called. This means that the IF clause will always execute. However, it is uncertain whether CodeSys handles this correctly or sensibly. 

If the value of xDone is not initialized in the VAR_OUT stanza and the xDone := assignment is commented out, will the code fail to compile? Click to expand...

Hello drbitboy,

To address your question regarding xDone: If I do not initialize xDone, it defaults to FALSE. It appears to be a feature of CodeSys that all variables start with a value of FALSE or 0. Removing the xDone := TRUE; assignment from the code allows it to compile successfully and execute consistently, with the file being rewritten in each cycle. This can be observed by monitoring the modified time in Windows Explorer.

In contrast, the provided code functions as intended. Once the writing is completed and xDone is set to TRUE, the file will no longer be overwritten, as evidenced by the unchanged modified date/time.

For users who have upgraded to CODESYS version 3.5.20, it is important to note that PLC applications are no longer permitted to write to the local file system for security reasons. File creation and writing are now limited to the current application directory. This directory has been relocated from "%ProgramData%\CODESYS" to the following path: C:\Windows\System32\config\systemprofile\AppData\Roaming\CODESYS\CODESYSControlWinV3x64\...\PlcLogic. Further details can be found in the attachment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for checking back. It appears that CODESYS functions in a similar manner to Fortran-IV, behaving like many Fortran functions that include a SAVE statement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What was the challenge faced when writing a DINT array to a text file in CODESYS?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The challenge faced was related to efficiently transferring a DINT array to a text file in CODESYS, prompting the need to seek solutions from online forums.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What line ending representation does CODESYS use for Windows OS?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: CODESYS uses '$R$N' to represent CRLF (carriage return and line feed) for Windows OS line endings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can error handling and verification be incorporated into file operations in CODESYS?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Error handling and verification can be incorporated by implementing additional checks and feedback mechanisms within the file handling function.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Is converting the DINT array to an array of strings and adding newline characters for each element a more efficient method for writing to a text file?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Converting the DINT array to an array of strings and adding newline characters can be considered as a potential method for optimizing the process of writing DINT arrays to text files in CODESYS for improved efficiency.</p>
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
