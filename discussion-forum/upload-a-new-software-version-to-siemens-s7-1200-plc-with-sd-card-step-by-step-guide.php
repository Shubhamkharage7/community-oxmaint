
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Siemens S7-1200 PLC (with CPU-1212C) has been delivered to the customer site for software updates. I will transfer the updated code using TIA Portal/PLCSIM on my development laptop. Can the code be written to a Siemens SD card and inserted into the PLCs SD slot for automatic software">
    <meta name="keywords" content="siemens s7-1200 plc, cpu-1212c, software updates, tia portal, plcsim, development laptop, sd card, automatic software updates, software installation, code transfer, siemens sd card, card reader slot">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upload-a-new-software-version-to-siemens-s7-1200-plc-with-sd-card-step-by-step-guide">
    <title>Upload a New Software Version to Siemens S7-1200 PLC with SD Card: Step-by-Step Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upload a New Software Version to Siemens S7-1200 PLC with SD Card: Step-by-Step Guide | Oxmaint Community">
    <meta property="og:description" content="The Siemens S7-1200 PLC (with CPU-1212C) has been delivered to the customer site for software updates. I will transfer the updated code using TIA Portal/PLCSIM on my development laptop. Can the code be written to a Siemens SD card and inserted into the PLCs SD slot for automatic software">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upload-a-new-software-version-to-siemens-s7-1200-plc-with-sd-card-step-by-step-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upload a New Software Version to Siemens S7-1200 PLC with SD Card: Step-by-Step Guide | Oxmaint Community">
    <meta name="twitter:description" content="The Siemens S7-1200 PLC (with CPU-1212C) has been delivered to the customer site for software updates. I will transfer the updated code using TIA Portal/PLCSIM on my development laptop. Can the code be written to a Siemens SD card and inserted into the PLCs SD slot for automatic software">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upload-a-new-software-version-to-siemens-s7-1200-plc-with-sd-card-step-by-step-guide"
      },
      "headline": "Upload a New Software Version to Siemens S7-1200 PLC with SD Card: Step-by-Step Guide",
      "description": "The Siemens S7-1200 PLC (with CPU-1212C) has been delivered to the customer site for software updates. I will transfer the updated code using TIA Portal/PLCSIM on my development laptop. Can the code be written to a Siemens SD card and inserted into the PLCs SD slot for automatic software",
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
      "datePublished": "2024-12-01",
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
                <h1 class="text-white">Upload a New Software Version to Siemens S7-1200 PLC with SD Card: Step-by-Step Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-12-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>30 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1541</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">89</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>The Siemens S7-1200 PLC (with CPU-1212C) has been delivered to the customer site for software updates. I will transfer the updated code using TIA Portal/PLCSIM on my development laptop. Can the code be written to a Siemens SD card and inserted into the PLC's SD slot for automatic software updates? If so, is any additional software required for this process? My plan is to provide the operator with the SD card and instruct them to insert it into the card reader slot for the new software installation.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes! Option 1 involves placing the card in Program Mode to run the program directly from the card. Easily transfer the PLC project onto the card within Portal. Option 2 allows for setting up the SD card as a transfer card, automatically copying the project into each PLC it is inserted into. This feature can be beneficial for customers with multiple systems or for returning the card. Regardless of the option chosen, it is essential to power off the PLC before inserting the card. Decide whether to leave the card in or perform an additional power cycle to remove it. For more information, visit SIOSsupport.industry.siemens.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42 explained that Option 1 involves putting the card in Program Mode to run the program directly on the PLC. Users can simply drag the PLC project onto the card within Portal. Option 2, on the other hand, allows for setting up the SD card as a transfer card. This enables the project to be copied into multiple PLCs, which can be advantageous for customers with various systems. It is essential to power off the PLC before inserting the card, whether leaving it in or conducting an off/on cycle to remove it. For more insights, visit SIOS support on Siemens' industry website. I appreciate the valuable input, @mk42 - I will definitely check out the link.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One common query that arises is how to upload a PLC program to an SD-Card without physically having the PLC device. Utilizing TIA Portal on a laptop, the process can be achieved seamlessly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access your Simatic S7S folder and file on the MC card in TIA Portal, simply drag your 1200 CPU to Card Reader > Simatic MC card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I vividly remember that Siemens PG laptops come equipped with SD card readers that are capable of formatting, reading, and writing cards. I stumbled upon a helpful post titled "Reading Memory Card! - 189230 - Industry Support Siemens" which discusses a Siemens PROMMer device that connects to a standard PC via USB. Please note that I do not endorse or have personal experience with either method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
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
            <p>Mas01 inquired about how to transfer a PLC program onto an SD card without having the physical PLC device, only using TIA Portal on a laptop. To accomplish this, you can refer to section 4.1 of a provided link. Memory cards for 1200/1500 PLCs can be inserted into a standard SD card reader to transfer programs, ensuring you do not delete any hidden files. TIA Portal will recognize the memory card once it is plugged in, allowing for easy drag-and-drop functionality. Alternatively, you can create a virtual memory card by mimicking a directory on your computer and transferring the program to the SD card through a different method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Joseph_e2, Siemens PG laptops have SD card readers that are capable of formatting, reading, and writing to the cards. A link titled "Reading Memory Card! - 189230 - Industry Support Siemens" discusses a Siemens PROMMer that can connect to a standard PC via USB. While there is no endorsement or personal experience with these methods, it is noted that special card readers were required for old 300s/400s models. Fortunately, the 1200/1500 cards are based on standard SD, eliminating the need for any tricks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mk42 mentioned that older 300s/400s cameras require special card readers, but the good news is that newer 1200/1500 cards are compatible with standard SD readers, making it hassle-free. This information is quite useful!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 mentioned that it is important to be aware of hidden files on a Simatic SD card that should not be deleted. These files may not be visible in Windows Explorer unless you enable the setting to show hidden files. Deleting them could potentially downgrade your valuable Simatic SD card to a generic camera card. Fortunately, the Portal and the 1500 display devices offer a secure reformat memory card command when necessary. It is still preferable to avoid touching these sensitive files rather than needing a special memory card reader.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the forum thread, user mk42 mentioned referring to section 4.1 of a linked document for more information. Standard SD card readers can easily read 1200/1500 memory cards, but be cautious not to delete any hidden files. When a memory card is inserted, Portal immediately detects it, allowing users to drag and drop files directly onto it. Alternatively, you can create a virtual memory card using a directory on your computer and transfer files to the SD card using a different method. It's worth noting that the picture does mention a "generic USB SD card reader." Cheers to those who may have missed this detail upon first reading.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like you haven't seen my latest blog post.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I initially read JRW's post, I didn't fully grasp the concept. However, upon further review, it now makes perfect sense. Thanks for clarifying.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the SD card reader a standard one with a USB-C connector, or does it need to be a Siemens branded one? Apologies for the simple queries, as I am new to this technology.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The SD card reader functions as a standard card reader, allowing you to easily access and manipulate project files without the need for TIA software. You can copy existing programs from the card and save them to a backup server, or even share card content via email. Additionally, you can receive program updates via email and revert to a previous card backup if needed. Overall, this straightforward and efficient functionality provides a seamless user experience for data management and sharing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The SD Card is compatible with all SD card readers, whether they are external or built into your laptop or desktop. It is important to avoid formatting the card using Windows to prevent any potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tdoa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that the SD card reader in this device functions as a standard card reader. Additionally, there is no requirement to utilize TIA to store project files in the card. Users have the option to easily copy the existing program from the card and back it up on a server. It is even possible to share the card's content via email, as well as receive and implement a program update through email. If needed, users can revert to a previous card backup in case the update does not work properly. This feature simplifies the process and enhances functionality. The ability to transfer files via email is especially noteworthy, eliminating the need to physically travel to the site. Customers can conveniently transfer the files to an SD card and then to the PLC. This capability is truly music to the ears of many users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mas01 mentioned the intriguing concept of using email for file transfer, eliminating the need for on-site visits. By sending the file(s) to the customer, they can easily transfer it to an SD Card and then to the PLC. This method is useful when a programmer is unable to access the PLC through other means. The first step involves backing up the current program on the SMC card, followed by copying and loading the new program onto the PLC. If needed, the old program can be restored by copying the previously saved backup back onto the card. It should be noted that the process may vary for an S7-1200, where Siemens references it as a 'program transfer card'.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here are some screenshots for you to check out! Explore these images for a closer look at the content.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Final photo saved on MMC using Windows Explorer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JRW shared some screenshots that are worth checking out. Great job, JRW. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When comparing your actions and observations to my thoroughly tested results, it is often said that "a picture is worth a thousand words." This comparison can help provide valuable insights and clarity in understanding the differences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am excited to rejoin this discussion, as I now have a Siemens SD card ready to test out. I have successfully copied the PLC program onto the SD card by dragging and dropping "PLC_1 [CPU 1212C DC/DC/DC]" to "(D; SIMATIC MT [Transfer]"). The "Program blocks" folder on the D drive is as expected. Now, I want to ensure that the HMI screens are also copied to the SD card. Would I follow a similar process for the "HMI_1 [KTP1200 Basic PN]" folder? Can I simply drag and drop it as well? Please refer to the attached picture for clarification. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have some doubts regarding the KTP1200 model as it lacks an SD card slot. The procedure is similar, but instead of an SD card, you will need to use a USB stick. To access the files on the USB stick, you would need to navigate to Start Center, then go to Service and Commissioning, and finally select Load project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP noted concerns about the KTP1200, mentioning that it lacks an SD card slot. The recommended procedure involves using a USB stick to transfer files. To do this on the KTP1200, access Start Center, then navigate to Service and Commissioning to load the project from the USB stick. However, there is a query about transferring updated HMI screens to an SD card directly with a drag-and-drop action. It's important to note that the KTP1200 HMI does not feature an SD card slot. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the benefits of moving HMI screens to the SD card?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There is a common misconception that the PLC will automatically transfer HMI screens to the KTP1200, however, this is not the case.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP explained that the PLC might not transfer the HMI screens to the KTP1200 as some may assume. I was under the impression that the PLC could possibly handle the task of transferring or updating the HMI screens for me. Before proceeding, I need to confirm the specifications of the HMI KTP1200 Basic, particularly whether it is equipped with a USB port. Although I believe it does have one, I cannot confirm without the physical HMI present in the office.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One user, JesperMP, raised some concerns about the KTP1200 HMI not having an SD card slot. Instead, they suggested using a USB stick for the same procedure. To update the HMI screens, you can locate the files on the USB stick by accessing the Start Center, then navigating to Service and Commissioning, and finally selecting Load Project. It has been confirmed that the HMI KTP1200 indeed has a USB port. Can anyone confirm if this USB port can be utilized for updating the HMI screens? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For assistance with transferring projects to Basic Panel, visit the support page on Siemens' industry website at SIOSsupport.industry.siemens.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned visiting the SIOS support page on Siemens' industry website for assistance with transferring a project to a Basic Panel. Thanks for your swift help in finding solutions!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can the Siemens S7-1200 PLC be updated with a new software version using an SD card?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the Siemens S7-1200 PLC can be updated with a new software version by writing the code to an SD card and inserting it into the PLC's SD slot.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is any additional software required for updating the Siemens S7-1200 PLC software using an SD card?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, additional software is not required for this process. The updated code can be transferred using TIA Portal/PLCSIM on a development laptop, written to an SD card, and then inserted into the PLC for automatic software updates.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I provide the new software version to the operator for installation on the Siemens S7-1200 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can provide the operator with the SD card containing the updated software version and instruct them to insert it into the PLC's SD card reader slot for the new software installation.</p>
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
