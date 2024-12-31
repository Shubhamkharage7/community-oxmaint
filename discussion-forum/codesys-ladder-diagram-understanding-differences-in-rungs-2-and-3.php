
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Take a look at the Codesys LD program displayed below. One would anticipate that Rungs 2 and 3 would yield the same outcomes, but they dont seem to. Can anyone offer any insights on this discrepancy? Alternatively, this topic may have already been discussed in a previous post.">
    <meta name="keywords" content="codesys ladder diagram, rungs 2 and 3 differences, codesys ld program, understanding codesys ladder diagram, codesys programming discrepancy, codesys r">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/codesys-ladder-diagram-understanding-differences-in-rungs-2-and-3">
    <title>Codesys Ladder Diagram: Understanding Differences in Rungs 2 and 3 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Codesys Ladder Diagram: Understanding Differences in Rungs 2 and 3 | Oxmaint Community">
    <meta property="og:description" content="Take a look at the Codesys LD program displayed below. One would anticipate that Rungs 2 and 3 would yield the same outcomes, but they dont seem to. Can anyone offer any insights on this discrepancy? Alternatively, this topic may have already been discussed in a previous post.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/codesys-ladder-diagram-understanding-differences-in-rungs-2-and-3">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Codesys Ladder Diagram: Understanding Differences in Rungs 2 and 3 | Oxmaint Community">
    <meta name="twitter:description" content="Take a look at the Codesys LD program displayed below. One would anticipate that Rungs 2 and 3 would yield the same outcomes, but they dont seem to. Can anyone offer any insights on this discrepancy? Alternatively, this topic may have already been discussed in a previous post.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/codesys-ladder-diagram-understanding-differences-in-rungs-2-and-3"
      },
      "headline": "Codesys Ladder Diagram: Understanding Differences in Rungs 2 and 3",
      "description": "Take a look at the Codesys LD program displayed below. One would anticipate that Rungs 2 and 3 would yield the same outcomes, but they dont seem to. Can anyone offer any insights on this discrepancy? Alternatively, this topic may have already been discussed in a previous post.",
      "author": {
        "@type": "Person",
        "name": "drbitboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-13",
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
                <h1 class="text-white">Codesys Ladder Diagram: Understanding Differences in Rungs 2 and 3</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>36 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2462</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">188</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Take a look at the Codesys LD program displayed below. One would anticipate that Rungs 2 and 3 would yield the same outcomes, but they don't seem to. Can anyone offer any insights on this discrepancy? Alternatively, this topic may have already been discussed in a previous post.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In most cases, the execution order within POUs is specifically established in text-based and network-based editors. Unlike in the CFC editor, where elements can be freely arranged, leading to a non-unique execution order initially. Learn more about this topic at https://help.codesys.com/api-content/2/codesys/3.5.15.0/en/_cds_cfc_automatic_order_by_dataflow/.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How can I access a statement list version of the program to compare interpretation discrepancies? Explore a statement list view to identify differences in program execution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User bernie_carlton inquired about the availability of a statement list version of the program, which could reveal interpretation discrepancies. This option is indeed available, as observed earlier in the behavior of the reset command with r_trig in ladder logic versus CFC, and whether it is used within a function block or not.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the execution order in POUs is uniquely determined in text-based and network-based editors, as mentioned in the CFC editor where elements can be freely positioned resulting in a non-unique execution order. This raises concerns about the accuracy of the execution order set by Codesys, especially in LD (Ladder) which is a network-based editor following specific execution rules. The discrepancy in execution order is evident in the logic where the top branch of two parallel branches should execute first, contrary to the current scenario. Could viewing a statement list version of the program reveal any interpretation differences? It is crucial to consider that the lower branch of Rung 3 must have been executed before the upper branch of Rung 3 based on the logic presented, otherwise the equality between savehound2 and fox would not be achievable. For further insights, refer to the link provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In reviewing drbitboy's statement, it appears that there may be a discrepancy in the execution order determined by Codesys, especially in LD (Ladder) programming, where the top branch of parallel branches should execute first. This indicates a potential issue with the program's logic, as the lower branch of Rung 3 should have been executed before the upper branch to ensure savehound2 equals fox. The question arises whether Codesys follows a top-to-bottom, then right or left-to-right, then bottom execution order. This observation may reflect a similar pattern seen in old modicons from the 70s and 80s.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I find it peculiar. I am intrigued by the potential outcome of placing the two movement instructions consecutively rather than separately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare asked about the program execution order in Codesys, wondering if it follows a top-to-bottom then right sequence or a left-to-right then bottom sequence. The statement "The elements are sorted from top to bottom and left to right" only applies to CFC, not LD. For LD in Codesys, the execution order is uniquely determined in text-based and network-based editors. However, the current behavior in Codesys LD does not align with this, leading to confusion and a need for clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User dwoodlock raised a valid point about the sequence of instructions in a program. By placing move instructions in series instead of branching them, the execution flow follows a left-to-right pattern. This simple test case highlights a common issue in programming logic.

In a more complex scenario, the order of execution can impact the outcome significantly. For instance, in a case where an XIC/NO contact is involved, running the upper branch first may lead to unexpected results. This discrepancy can be rectified by rearranging the branches or by combining them to ensure the desired logic sequence.

Implementing workarounds, such as swapping branch order or merging logic paths, can resolve timing conflicts and prevent incorrect behavior in the program execution. These adjustments are crucial in maintaining the accuracy and efficiency of the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have not encountered this issue previously, but I will conduct some test cases today to troubleshoot. May I ask which version are you currently using?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CODESYS Group's ladder editor operates by executing branches in a sequential top-down manner. I appreciate the clarity in Control Expert's ladder editor regarding the order of function execution. However, there is a drawback as function blocks are not labeled in the same manner. This can make it challenging to access values from certain elements, such as timers, requiring additional testing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>modiconguy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dwoodlock mentioned encountering a new issue and is planning to conduct test cases to investigate further. They are using CODESYS V3.5 SP19 Patch 6, downloaded recently, on a Windows 10 "Enterprise Evaluation" Build 19041.vb_release.191206-1406 virtual machine in VirtualBox. The host operating system is Linux Mint, a variant of Ubuntu. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy recently mentioned downloading the CODESYS V3.5 SP19 Patch 6 a few days ago on a Windows 10 "Enterprise Evaluation" Build 19041.vb_release.191206-1406 guest VM in VirtualBox. The host OS is Linux Mint, a variant of Ubuntu. @ Linux Mint has piqued my interest, as I have been considering switching over.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>modiconguy from the CODESYS Group pointed out on content.helpme-codesys.com that the program executes branches in succession from top to bottom. Thank you for bringing this to our attention! It is discouraging to discover that there may be an error or bug in CODESYS. I was looking forward to an explanation about the execution order of Closed versus Unclosed branches.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover this feature as well. How does it impact performance? "CODESYS seamlessly integrates the top-level output with the neighboring function blocks' highest input." Explore more at: https://help.codesys.com/api-content/2/codesys/3.5.12.0/en/_cds_pragma_attribute_dataflow/</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare noted: I also came across this information. Could it have an impact?"CODESYS maximizes connectivity between the output and input signals of adjacent function blocks." This feature can be found at https://help.codesys.com/api-content/2/codesys/3.5.12.0/en/_cds_pragma_attribute_dataflow/. While this is intriguing, the discussion appears to be more relevant to user-defined function blocks in FBD. The main focus of this thread, however, is determining the execution order of branches following a split in a branch/rung in LD programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why do user-defined functions in PLC programming differ from built-in blocks like FC, FB, and other blocks? I'm uncertain about this.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare questioned the difference between user-defined function blocks (FBs) and built-in blocks like function code (FC) and function blocks (FB). It seems unlikely that users can modify built-in blocks with pragmas like {attribute 'dataflow'}. Click to learn more about this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy noted an issue with the Codesys LD program, questioning why Rungs 2 and 3 did not yield functionally identical results. Any insights on this discrepancy? Has this topic been discussed elsewhere? Click to expand...After a significant delay, I finally conducted a test today using RPI Zero W and Codesys for RPI SL, achieving the expected outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I formatted it in the same way as Dr. Bitboy's, leading to identical outcomes on both networks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dwoodlock mentioned that the setup has been adjusted to mirror Dr.Bitboy's, resulting in the same outcome across both networks. Is this behavior determined by the manufacturer or hardware used? This poses an interesting question.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing simulation software or hardware components? The outcome should be consistent, but I'm just interested to know.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dwoodlock inquired about the method being used: simulation or hardware? The outcome should be the same, but I am just curious. Click to expand for more information on simulation techniques.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I also modified my settings to simulation mode for scientific purposes, only to encounter the same outcome once more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to dwoodlock, I also switched mine to simulation mode for scientific purposes, but encountered the same outcome. What operating system are you using? I need to revisit and double-check mine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Download the latest version of Windows 11 64-bit operating system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm interested to know if you used Ladder Diagram or Ladder Logic Diagram for this Program Organization Unit, Brian. I haven't had the chance to explore the distinctions between the two. It appears that there are variations in the POU being used by dwoodlock and Brian.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have noticed that Alfredo and dwoodlock have achieved similar results in terms of layout, with both appearing to use LD (Logic Designer) in LD2 which includes EN/ENO input/output when a block is added. Despite this similarity, I am struggling to position my blocks as demonstrated by drbitboy in his example.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After conducting experiments, I found that using both the standard ladder and ladder diagram yielded the same result. Initially, I utilized the standard ladder, but later switched to the ladder diagram. However, I encountered layout issues with the ladder diagram. This problem is not new, as previous versions of Codesys also had issues with move instructions not automatically adjusting to the correct position within the ring. I noticed that@drbitboypreferred using ladder diagrams. Personally, I find that ladder diagrams in TIA look similar to standard ladders and occupy more space, especially on a laptop screen. I discovered a workaround by right-clicking on the program in my project tree and converting it to a "new ladder" format.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Mitsubishi, there is a difference between using FBD/LAD and LAD only in terms of code. The purpose is to ensure compatibility with Ladder logic, making it backward compatible with previous IDE's and PLC models. For example, in FBD, linking functions with EN0 to create two functions in series may appear fine in FBD, but when the raw code is transferred to the ladder editor, it appears differently. The older convention requires that after an output or move instruction, it must be connected to the "common" rail. Some IDE's do not allow output coils or certain functions to be in series, only in parallel. The compiler creates a temporary variable to overcome this limitation. While the order of operation is correct in Mitsubishi, there may be a bug in the compiler causing the order to be swapped. This may result in unexpected outcomes, such as the use of temporary variables. The EN0 of the function drives a move instruction, similar to utilizing the result on M0. However, there may be errors in the compilation process due to the different formats used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am experiencing different outcomes than the original post while working on Windows. Brian, I am puzzled by how your compiler allows assigning ton0.Q to a coil. Since ton0.Q is an output of a timer on FB, I encountered an error when attempting to compile my program following your instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AlfredoQuintero commented: I am puzzled by how your compiler allows assigning ton0.Q to a coil. In my programming experience with PLCs, it is common practice to assign memory bits to coils. Despite this, when attempting to compile my program following your instructions, I encountered an error.

It should be noted that in my program, ton0.Q is not directly connected to a coil. Instead, I have created a BOOL variable named ton0Q to represent the timer's expired state. This approach ensures a more organized and error-free program structure, especially when dealing with timer functions in Codesys or Siemens PLC programming. These timer functions often assess the internal state of timer objects asynchronously, requiring careful consideration in programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When coding a program, I define a BOOL variable named "ton0Q" to handle the timer-expired condition, in order to account for potential inconsistencies in Codesys and Siemens timer functions. These functions may evaluate the timer object's internal state asynchronously with the TON instruction. Unfortunately, I wasn't able to replicate the results you mentioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AlfredoQuintero mentioned that he was unable to replicate the results. Thank you for the information and bringing this to my attention.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The ability to replicate can be achieved with Ladder (LD2) but not with Ladder Logic Diagram (LD). While I do not have the exact wording from IEC-61131-3 regarding ladder execution order, it appears to contradict CODESYS's guidance stating that an Abranch splits the processing line into multiple branches that are executed sequentially from top to bottom. This discrepancy may indicate a potential bug in the new ladder system, which can be reported to CODESYS Store North America under 'Bug Report' in the 'My Question' section. It is common to encounter bugs in version 1.0.0.0 of any software. If needed, you can revert to the old ladder system by accessing the installer, selecting 'change,' then 'browse' and 'search' for LD.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AustralIan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was taken aback when I first encountered the updated Ladder in my version of the software. Unlike what I am accustomed to, it now appears as "LD2". This change seems to be intended to differentiate it from previous versions. However, I must admit that I am finding the new LD2 interface challenging to navigate. I can't help but wonder about the reasons behind its introduction in CODESYS. Perhaps I simply need more time to adjust to it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not a fan of this program as it requires more time to code and involves too many clicks within a network. In comparison to TIAs ladder editor, I find it to be somewhat lacking in quality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why do Rungs 2 and 3 in the Codesys LD program yield different outcomes despite appearing similar?
   - The differences in the outcomes of Rungs 2 and 3 could be due to specific logic or conditions programmed within each rung. It is essential to carefully review the ladder diagram logic and check for any discrepancies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can one troubleshoot the discrepancy between Rungs 2 and 3 in the Codesys LD program?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the discrepancy, one can analyze the logic statements and conditions in Rungs 2 and 3 step by step. Check for any differences in input conditions, output assignments, or function blocks that might be causing the varied outcomes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Has the topic of differences in Rungs 2 and 3 of Codesys LD programs been discussed previously?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the topic has been discussed before, you may find relevant insights and solutions by searching for previous posts or discussions related to the discrepancies in Codesys ladder diagram rungs. It could be beneficial to refer to existing resources for additional guidance.</p>
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
