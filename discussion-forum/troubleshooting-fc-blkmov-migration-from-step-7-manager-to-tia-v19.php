
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a migration project and have encountered an issue with FC: BLKMOV. My goal is to transfer a variety of non-unified data types stored in the local L Memories of the program (starting from LD8 onwards). The migration is from a PLC S7-317">
    <meta name="keywords" content="fc blkmov troubleshooting, step 7 to tia v19 migration, plc s7-317 to s7-1517tf-3pn/dp migration, stl program migration, moving">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-fc-blkmov-migration-from-step-7-manager-to-tia-v19">
    <title>Troubleshooting FC: BLKMOV Migration from Step 7 Manager to TIA V19 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FC: BLKMOV Migration from Step 7 Manager to TIA V19 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a migration project and have encountered an issue with FC: BLKMOV. My goal is to transfer a variety of non-unified data types stored in the local L Memories of the program (starting from LD8 onwards). The migration is from a PLC S7-317">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-fc-blkmov-migration-from-step-7-manager-to-tia-v19">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FC: BLKMOV Migration from Step 7 Manager to TIA V19 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a migration project and have encountered an issue with FC: BLKMOV. My goal is to transfer a variety of non-unified data types stored in the local L Memories of the program (starting from LD8 onwards). The migration is from a PLC S7-317">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-fc-blkmov-migration-from-step-7-manager-to-tia-v19"
      },
      "headline": "Troubleshooting FC: BLKMOV Migration from Step 7 Manager to TIA V19",
      "description": "Hello everyone, I am currently working on a migration project and have encountered an issue with FC: BLKMOV. My goal is to transfer a variety of non-unified data types stored in the local L Memories of the program (starting from LD8 onwards). The migration is from a PLC S7-317",
      "author": {
        "@type": "Person",
        "name": "hoang199849"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-14",
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
                <h1 class="text-white">Troubleshooting FC: BLKMOV Migration from Step 7 Manager to TIA V19</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>19 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">677</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">49</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a migration project and have encountered an issue with FC: BLKMOV. My goal is to transfer a variety of non-unified data types stored in the local L Memories of the program (starting from LD8 onwards).

The migration is from a PLC S7-317 running Step 7 with a program written in STL to a S7-1517TF-3PN/DP on TIA Portal with a program also written in STL. In Step 7, the program was scripted as follows:

L     DW#16#10130001
T     LD     8
TAKT     LD    36
TAKL     W#16#7D0
T     LW    12
L     LD    36
OD    DW#16#84000000
T     LD    14
L     B#16#3C
T     DBB 2754
L     DW#16#10130001
T     LD    18
L     W#16#C7
T     LW    22
L     DW#16#84005610
T     LD    24
UC    "BLKMOV"
P#L 8.0
P#L 44.0
P#L 18.0

From my understanding, the block is unconditionally called (UC) as BLKMOV, with the next three lines representing parameters, which point to temporary stored addresses in the FC itself as follows:
P#L 8.0 (Source Pointer)
P#L 44.0 (Destination Pointer)
P#L 18.0 (Length)

My question is regarding the order of these pointers and their purpose. Are they truly in the sequence of Source, Destination, and Length? According to TIA Portal Help, the parameters for BLKMOV should be as follows:
Source
Return Value INT
Destination

As I aim to move a wide range of data from %L8.0 to %Ln.n, which includes different data types (Word and DWord) for the Temp Tags within this range, I have also come across MOVE_BLK in TIA, which supports the movement of a block of data. However, this function block can only accept an Element of an Array.

How should I configure BLKMOV to achieve this task effectively? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Share the source code of the function in textual form, along with the interface for better understanding and implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello LD[AR2P#0.0], Here is the source code in text format for an interface: 
Interface:
- Inputs: Last_Step (Integer), Current_Step (Integer), Next_Step (Integer), OP_Prompt (Integer)
- Outputs: Out_CurrentStep (Integer), Out_CurrentStep (String[254])
- Temp variables: t_Last_Step (Integer, 0.0), t_Current_Step (Integer, 2.0), t_Next_Step (Integer, 4.0)
- Return: RET_VAL

Code snippet:
L #Last_Step
T #t_Last_Step
L #Current_Step
T #t_Current_Step
L #Next_Step
T #t_Next_Step
L #t_Last_Step
ITD
L #1
-DL
L #496
*DL
DW #16#10130001
T LD 8
TAKT LD 28
TAKL W #16#7D0
T LW 12
T LD 28
OD DW #16#84000000
T LD 14
B #16#3C
DBB 2690
L DW #16#10130001
T LD 18
L W #16#C7
T LW 22
L DW #16#84005410
T LD 24
UC "BLKMOV" P#L 8.0 P#L 36.0 P#L 18.0

This code snippet includes instructions for manipulating various input and output variables in an interface program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, hoang199849 expressed a desire to streamline the process of handling various types of data in the program's local L Memories. What exactly is a non-unified data type and is it necessary to utilize the Standard Template Library (STL)? It is advisable to steer clear of using STL in the 1500s era for optimal performance. For a more efficient approach, consider declaring the data structure as a specific type and managing it accordingly. In cases where the type is unknown, a Variant datatype or an array of bytes could be utilized. By following these 1500 best practices, data manipulation can be significantly improved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The data you mentioned about "Temp Tags having various data types (Word and DWord)" is not saved in the L data section of the FC. What makes you think otherwise?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to L D[AR2P#0.0]'s query about the data types of Temp Tags (Word and DWord), it should be noted that this information is not stored in the L data area of the FC. The assumption that it is stored there may be incorrect. Could it be that these Lx.x addresses are actually offsets from the Temp Tags? It is worth exploring this possibility further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The L addresses are utilized to store pointers for the block movement. Upon initial inspection, it appears that this code is transferring a string from DB2000 to DB199.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Does the code "LD 28" point to any DB area in the OD DW#16#84000000 line? It appears that LD 14 is equivalent to LD 28 in the DB0.DWD0 line. Upon further thought, it seems that the OR command indirectly references the DB area. Therefore, is the DB area indirectly accessed by the value of LD 28?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42 inquired about non-unified data types and their usage in STL. It is recommended to avoid using STL in the context of 1500s programming practices. For a short block of code like this, it is advisable to refactor it using modern techniques for better performance.

In the case of non-unified data types, the data structure should be declared as a specific type and manipulated accordingly. If the type is unknown, consider using a Variant datatype or an array of bytes. The data to be moved can vary from Word to DWord type, but they cannot be grouped together in an array.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User hoang199849 mentioned the challenge of moving non-unified data types, such as Word and DWord, without being able to use an array. To address this issue, one can utilize serialize and deserialize blocks to copy data between different types and ensure they are directed to the correct database and starting address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing Variants can aid in determining the data type, allowing for flexibility in handling the data accordingly. However, if the data is currently non-optimized, the process of restructuring everything to accommodate this approach may prove to be more challenging than beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking to maintain the existing code's functionality, or are you interested in adding new features while leveraging the current codebase? Clarify your requirements so we can tailor our approach accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When making changes to code, it is important to understand if you are aiming to replicate the previous functionality or develop something new based on existing code. In my case, I aim to replicate the previous functionality. However, I encounter issues when trying to configure the BLKMOV call, as it does not behave the same way as it did in Step 7.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize the storage allocation process in your program, utilize the BLKMOV call and specify the parameters based on the names listed in the temporary data area. It is essential to include padding to ensure that the proper addresses are utilized for this operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Congratulations if you were able to successfully get the STL code to function. However, I find it quite challenging to maintain. Have you considered whether the original code may have been written in SCL? It appears that the STL was generated by the SCL compiler. If you have access to the SCL source code, you may be able to easily transfer it from STEP7 Classic to TIA with minimal conversion. This will provide you with a codebase that you can troubleshoot and maintain effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. JesperMP raised a valid point about the maintenance of the code. It's possible that the original code was actually in SCL and not STL. If you have the SCL source, you can easily convert it from STEP7 Classic to TIA and have a more manageable codebase for troubleshooting and maintenance. Upon further investigation, it appears that the code is written in SCL FC rather than STL FC, which raises some questions. I will continue searching for the source code to clarify this discrepancy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When coding in SCL within STEP7 Classic, the generated output is known as "SCL source code".This SCL code is compiled into STL code as a middle step before being loaded onto the S7 CPU. To find SCL source blocks in your STEP7 Classic project, check the Source folder. If you come across an SCL source block, feel free to share the code. Unlike in TIA and S7-1500 PLCs, there is no need for STL code as an intermediary anymore. You can easily transfer SCL code from STEP7 Classic to TIA without any hassle. This will result in more symbolic, simplified, and possibly commented code. If you cannot find any SCL source blocks but notice a block marked as 'SCL' in the blocks folder, it means the original SCL source block has been deleted. This can make maintaining the STL block extremely challenging. Pay close attention to the absolute offset addresses in such cases.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In STEP7 Classic, when writing code in SCL, it is referred to as "SCL source code". The SCL compiler produces STL code as an intermediary step before loading it into the S7 CPU. To locate SCL source blocks in your STEP7 Classic project, check the Source folder. If you come across an SCL source block, feel free to share the SCL code. In TIA and S7-1500 PLCs, there is no longer a need for intermediary STL code. Transitioning code from STEP7 Classic to TIA is usually a smooth process, resulting in symbolic, simpler, and possibly commented code. However, if you cannot find SCL source blocks but find a marked 'SCL' block in the blocks folder, it means the original SCL source block was deleted. This can make maintenance of the STL block very difficult. JespersMP, it seems that I have successfully located the Source SCL in the Source Folder above the Program folder. I have included the SCL code below. As per your guidance, can I simply copy and paste this code into TIA? Regarding declaring Inputs/Outputs and Temp in the FC's Interface, should I delete the declarations in the code or keep them?Please advise.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The red underlined lines appear because the declaration part is not included in the standard tabular interface view used in TIA Settings for PLC programming in SCL (Structured Control Language). To resolve this, change the Block Interface View to 'textual view' and copy the code from STEP7 Classic. Alternatively, you can utilize the External Source File in the Project tree. Another option is to manually input the declaration part in the tabular view. Keep in mind that there are only a few variables to manage. By analyzing the SCL code, you can understand its intended functionality. Make sure to define DB199 and DB2000 beforehand and give them appropriate symbolic names for consistent usage throughout the program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that red underlining appears on certain lines because the declaration part is not included in the standard view interface. The standard view resembles a tabular format, similar to FBs and FCs programmed in LAD or FBD. To address this issue, you can go to TIA Settings, navigate to PLC programming, select SCL (Structured Control Language), and then set Block Interface View to 'textual view'. Another option is to utilize the External Source File in the Project tree. By examining the SCL code, you can understand its intended function and manually refine it as needed. Ensure that DB199 and DB2000 are defined properly with suitable symbolic names to avoid errors. It's advised to maintain consistent use of symbolic names throughout the code for clarity. Personally, I chose to keep and declare most variables in the FC's Interface. Additionally, I resolved the issue with undefined DB1000 and DB2000 by assigning appropriate symbolic names, resulting in successful compilation without errors. Many thanks for the helpful guidance. JesperMP</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hoang199849</span></li>
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
