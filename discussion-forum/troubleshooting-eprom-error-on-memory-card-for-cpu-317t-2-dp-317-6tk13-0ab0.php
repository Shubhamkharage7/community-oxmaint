
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, we are working on reviving a CPU 317T-2 D. The memory card was faulty, and after some resets, we only see a red flickering SF light. We attempted to load the 3176TK13_V265.EXE (4014 KB) file with Simatic Manager v5.2 on a Field PG, following the instructions below. We">
    <meta name="keywords" content="troubleshooting eprom error, memory card cpu 317t-2 dp, 317-6tk13-0ab0, cpu 317t-2 d, sf light flickering, simatic manager v2, field">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-eprom-error-on-memory-card-for-cpu-317t-2-dp-317-6tk13-0ab0">
    <title>Troubleshooting Eprom Error on Memory Card for CPU 317T-2 DP 317-6TK13-0AB0 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Eprom Error on Memory Card for CPU 317T-2 DP 317-6TK13-0AB0 | Oxmaint Community">
    <meta property="og:description" content="Hello, we are working on reviving a CPU 317T-2 D. The memory card was faulty, and after some resets, we only see a red flickering SF light. We attempted to load the 3176TK13_V265.EXE (4014 KB) file with Simatic Manager v5.2 on a Field PG, following the instructions below. We">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-eprom-error-on-memory-card-for-cpu-317t-2-dp-317-6tk13-0ab0">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Eprom Error on Memory Card for CPU 317T-2 DP 317-6TK13-0AB0 | Oxmaint Community">
    <meta name="twitter:description" content="Hello, we are working on reviving a CPU 317T-2 D. The memory card was faulty, and after some resets, we only see a red flickering SF light. We attempted to load the 3176TK13_V265.EXE (4014 KB) file with Simatic Manager v5.2 on a Field PG, following the instructions below. We">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-eprom-error-on-memory-card-for-cpu-317t-2-dp-317-6tk13-0ab0"
      },
      "headline": "Troubleshooting Eprom Error on Memory Card for CPU 317T-2 DP 317-6TK13-0AB0",
      "description": "Hello, we are working on reviving a CPU 317T-2 D. The memory card was faulty, and after some resets, we only see a red flickering SF light. We attempted to load the 3176TK13_V265.EXE (4014 KB) file with Simatic Manager v5.2 on a Field PG, following the instructions below. We",
      "author": {
        "@type": "Person",
        "name": "tiemichel"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-02",
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
                <h1 class="text-white">Troubleshooting Eprom Error on Memory Card for CPU 317T-2 DP 317-6TK13-0AB0</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>28 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">953</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">474</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, we are working on reviving a CPU 317T-2 D. The memory card was faulty, and after some resets, we only see a red flickering SF light. We attempted to load the 3176TK13_V265.EXE (4014 KB) file with Simatic Manager v5.2 on a Field PG, following the instructions below. We removed the new 8MB card and selected "Update Operating System," choosing the CPU_HD.UPD file. However, we encountered an error while writing to the memory card's EEPROM. Any insight into what could be causing this issue? We have tried a second card now, and the card is functioning properly.

To create an operating system update card, you will need a Micro Memory Card with a minimum capacity of 8 MB (order number: 6ES7 953-8LP20-0AA0), STEP 7 V5.1 SP2 or higher, and a PC with an external prommer (order number: 6ES7 792-0AA00-0XA0) or Field PG. Follow these steps to create the update card using STEP 7:

1. Download the desired CPU file.
2. Unpack the file by double-clicking on it.
3. Delete the Micro Memory Card by selecting "File / S7 Memory Card / Delete" in the SIMATIC Manager.
4. Program the operating system by choosing "PLC / Update Operating System" in the SIMATIC Manager, selecting the target folder, and initiating the programming process by opening the file CPU_HD.UPD.

The operating system update card has been successfully programmed if you see the message "The firmware update for the module with the order number 6ES7317-6TK13-0AB0 was successfully transferred to the S7 memory card" on the screen.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If your MMC card is defective, it's essential to first address that issue before loading new firmware onto the CPU. If you have a functioning STEP7 project and a new MMC card, simply install the card in the CPU and proceed with a standard download process. Begin with configuring the hardware and then move on to transferring the program blocks. This method ensures a smooth and efficient transition without unnecessary complications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We are unable to establish a connection with the CPU.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it functioning properly?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JRW remarked on the issue, asking if it has been fixed or not. Unfortunately, the message still persists: an error occurred while writing to the memory card's eprom.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you possess the original Simatic Manager/Technology project file? If so, please share it with us.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Our team has the latest version of 3176TK13_V265.EXE (4014 KB) installed on a Field PG with Simatic Manager V5.2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Share a photo showcasing your Simatic Manager project being accessed within Step7.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a message by JRW, a request was made to share a screenshot of the Simatic Manager project being opened in Step7. However, we do not currently have a project following these specific instructions from Siemens' website. 

For the creation of an operating system update card, you will need a Micro Memory Card with a minimum capacity of 8 MB (order number 6ES7 953-8LP20-0AA0), STEP 7 V5.1 SP2 or a newer version, and a PC with an external prommer (order number 6ES7 792-0AA00-0XA0) or Field PG. 

To create the update card using STEP 7, start by downloading the desired CPU file and unpacking it. Then, delete the Micro Memory Card by going to "File / S7 Memory Card / Delete" in the SIMATIC Manager. Proceed to program the operating system by selecting "PLC / Update Operating System" in the SIMATIC Manager, choosing the target folder, and initiating the programming process with the file CPU_HD.UPD.

You will know that the operating system update card has been successfully programmed when the message "The firmware update for the module with order number 6ES7317-6TK13-0AB0 has been successfully transferred to the S7 memory card" appears on the screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you do not possess the original project files and encounter a damaged mmc card, reloading the code onto the mmc may be challenging. How can you successfully load the code onto the mmc without these essential components?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to bring the system back up, it's crucial to have the original project and a functional MMC with no damage. How can you upload the code to the MMC without these essentials? This is why we value tips - especially as newcomers seeking guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are various potential reasons why you may be experiencing difficulties connecting to an S7-300 CPU. It is premature to assume that loading a new firmware is necessary at this point. It would be helpful if you could share a screenshot of your PG/PC Interface settings for further analysis. I suggest trying to perform an 'Upload Station to PG' as a troubleshooting step. This process can help create a backup of the S7 project and verify if a connection with the CPU can be established safely. If you are unable to proceed with the upload due to having a T-CPU, obtaining the 'S7-Technology' option package for STEP7 programming may be necessary. From the initial screenshot provided, it appears that this option package is not currently installed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Share a snapshot of your PG/PC Interface configuration. Check out this image showing a LED flickering twice per second.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Second Memory Card - A Must-Have Accessory</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To start, insert the original MMC in the 317T and then power the CPU back on. Configure your PG PC interface to 5611 auto and connect the cable to the left port of the PLC's CPU. Check for accessible nodes or inform us of any issues. Based on your screenshot, it appears that you are missing the necessary software to support this CPU. You will need S7 Technology or Scout, which is compatible with T CPUs as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We completed the task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When encountering the error message "object has already been deleted" while accessing the nodes icon, have you tried inserting the original MMC into the programmer and then attempting to read the EPROM? What are the potential outcomes in this scenario?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JRW inquired about encountering the message "object has already been deleted" when accessing nodes. They asked about inserting the original memory card into the programmer and reading the eprom. Upon doing so, they found an empty card displayed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you need some creative suggestions or inspiration? Let me help you brainstorm ideas for your project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If there is no Simatic manager project or program saved on a memory card, you may encounter an issue. Perhaps another member of this community can offer some insights.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you don't have a Simatic manager project or program saved on a memory card, you may be out of luck. Maybe someone else in this community has a solution. I am hopeful. Is anyone familiar with the CPU 317T-2 DP and its associated project?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tiemichel inquired about obtaining a sample PLC program for a 317T-2DP. While it may seem like a long process to ensure the smooth operation of an existing machine, having the right program is essential. The presence of the PLC on a workbench suggests that this is a test setup rather than an operational machine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We are satisfied with just a sample or any means necessary to reconnect communication between a programmable logic controller (PLC) and a laptop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to create a STEP7 Project with a 317T-2DP CPU, it is essential to have the S7-Technology option enabled in STEP7. Without this feature, you will not be able to successfully set up the project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to JesperMP, the S7-Technology option in STEP 7 is essential for creating a STEP 7 Project with a 317T-2DP CPU. To work around this, borrowing a laptop with STEP 7 installed may be a solution. Understanding how to connect and transfer information to the memory card are key steps in this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tiemichel asked for assistance in connecting a laptop with Step 7 software and how to transfer information to a memory card. They are willing to pay for a solution. Can anyone provide guidance on this matter?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP noted that without the S7-Technology option in STEP7, it is not possible to create a STEP7 Project with a 317T-2DP CPU. If you encounter communication issues with your PLC despite having STEP7, it may be due to a new memory card. Can you provide guidance on how to re-establish communication with the PLC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After encountering an issue where Simatic Manager 5.1 was unable to communicate with an 8MB card, we found a solution by upgrading to version 5.4. With the new firmware successfully loaded, we reinserted the memory card and restored functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tiemichel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe there is more depth to this narrative that needs to be explored. However, as long as you are content, we are also pleased.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing an error while writing to the memory card's EEPROM during the operating system update process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Potential causes of this issue could include a faulty memory card, incorrect file format or version, improper procedure execution, or hardware compatibility issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I create an operating system update card for the CPU 317T-2 D using STEP 7?</h4>
<p class='text-muted'><strong>Answer:</strong> - To create an operating system update card, you will need a Micro Memory Card with a minimum capacity of 8 MB, STEP 7 V5.1 SP2 or higher, and a PC with an external prommer or Field PG. Instructions for creating the update card include downloading the CPU file, unpacking it, deleting the Micro Memory Card in the SIMATIC Manager, and programming the operating system by choosing "PLC / Update Operating System."</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps should be taken if encountering an error while writing to the memory card's EEPROM during the update process?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you encounter an error, ensure that you are following the correct procedure, using the right file format and version, and that the memory card is not faulty. You may also try using a different memory card or checking for hardware compatibility issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I verify if the operating system update card has been successfully programmed?</h4>
<p class='text-muted'><strong>Answer:</strong> - The successful programming of the operating system update card can be verified by seeing the message "The firmware update for the module with the order number 6ES7317-6TK</p>
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
