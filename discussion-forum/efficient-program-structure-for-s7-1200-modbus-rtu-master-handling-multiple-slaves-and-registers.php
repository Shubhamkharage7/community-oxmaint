
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creating a program structure for s7-1200 MODBUS RTU Master with multiple slaves and multiple registers can be challenging. I am facing difficulties in organizing my program for MODBUS RTU communication between my s7-1200 master and 4 slaves, where I need to read the same registers from each slave. To">
    <meta name="keywords" content="s7-1200 modbus rtu master, program structure, multiple slaves, multiple registers, modbus rtu communication, fb "mb_comm_load_db", fb "mb_master_db", data block, instance data block, mb_addr, second">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficient-program-structure-for-s7-1200-modbus-rtu-master-handling-multiple-slaves-and-registers">
    <title>Efficient Program Structure for s7-1200 MODBUS RTU Master Handling Multiple Slaves and Registers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficient Program Structure for s7-1200 MODBUS RTU Master Handling Multiple Slaves and Registers | Oxmaint Community">
    <meta property="og:description" content="Creating a program structure for s7-1200 MODBUS RTU Master with multiple slaves and multiple registers can be challenging. I am facing difficulties in organizing my program for MODBUS RTU communication between my s7-1200 master and 4 slaves, where I need to read the same registers from each slave. To">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficient-program-structure-for-s7-1200-modbus-rtu-master-handling-multiple-slaves-and-registers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficient Program Structure for s7-1200 MODBUS RTU Master Handling Multiple Slaves and Registers | Oxmaint Community">
    <meta name="twitter:description" content="Creating a program structure for s7-1200 MODBUS RTU Master with multiple slaves and multiple registers can be challenging. I am facing difficulties in organizing my program for MODBUS RTU communication between my s7-1200 master and 4 slaves, where I need to read the same registers from each slave. To">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficient-program-structure-for-s7-1200-modbus-rtu-master-handling-multiple-slaves-and-registers"
      },
      "headline": "Efficient Program Structure for s7-1200 MODBUS RTU Master Handling Multiple Slaves and Registers",
      "description": "Creating a program structure for s7-1200 MODBUS RTU Master with multiple slaves and multiple registers can be challenging. I am facing difficulties in organizing my program for MODBUS RTU communication between my s7-1200 master and 4 slaves, where I need to read the same registers from each slave. To",
      "author": {
        "@type": "Person",
        "name": "naturephoenix"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-22",
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
                <h1 class="text-white">Efficient Program Structure for s7-1200 MODBUS RTU Master Handling Multiple Slaves and Registers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>naturephoenix</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">11927</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">364</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Creating a program structure for s7-1200 MODBUS RTU Master with multiple slaves and multiple registers can be challenging. I am facing difficulties in organizing my program for MODBUS RTU communication between my s7-1200 master and 4 slaves, where I need to read the same registers from each slave. To tackle this, I have divided the registers into 2 groups. For example:
Group 1 includes registers 4001, 4003, and 4005
Group 2 includes registers 4221, 4223, and 4225

The data from all groups is stored in the same DB, but with different addresses. In the first network, I use the FB "MB_COMM_LOAD_DB" to load data into the DB. In the second and third networks, I utilize FB "MB_MASTER_DB" to read data from Group 1 and Group 2, respectively.

Now, expanding this approach to the second slave, which has the same groups as the first slave, poses a few questions. Should I create a new instance data block for "MB_MASTER_DB" for the second slave, or can I simply use a new instance of the FB "MB_MASTER_DB" like when adding a new group of registers to the same slave? Additionally, besides changing the MB_ADDR, what other considerations should be taken into account?

It is important to ensure that the FB "MB_MASTER_DB" for Group 2 of Slave No. 1 is not called until the FB for Group 1 of the same slave has completed without errors. Considering storing data from the second slave in a separate DB, with the same structure as the first slave, may also be a good practice. Group 1 and Group 2 registers are consistent across both slaves.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Naturephoenix mentioned that the difference between NW2 and NW3 lies in the use of "DATA_ADDR" and "DATA_PTR." In both cases, the FB "MB_MASTER_DB" is utilizing the same instance data block. Is this the correct approach?

Moving on to the second slave (slave number 2), which has the same groups as slave number 1. Should a new instance data block be used for the needs of slave 2, requiring a change in the input parameter "MB_DB" of FB "MB_COMM_LOAD_DB"? Or is it sufficient to use a new FB "MB_MASTER_DB" similar to adding a new group of registers to the same slave? It is acknowledged that MB_ADDR needs to be changed, but is that all that is required?

Utilizing multiple MB master blocks (FB) while enabling only one at a time depending on the sequencer. It is essential to only initialize the port once when the PLC starts. By using one instance data block (DB641), the port initialization time can be reduced significantly.

Increment the sequencer number only after a short delay if the "busy" signal of MB_MASTER_BLOCKs is "0." Keep in mind that the FB_block is updated by the sequencer, so caution is advised when copying the output signal of MB_master_blocks to multiple variables on the program side.

In case of a PLC restart, ensure all "busy" variables are cleared in OB100 block to prevent any issues with communication. Resetting MB_MASTER_BLOCK is recommended as a best practice on PLC startup. 

When it comes to calling FB "MB_MASTER_DB" for group 2 of slave No.1, it is essential to wait until the previous FB "MB_MASTER_DB" for group 1 of slave No.1 returns done and error-free to avoid any complications.

Lastly, it is advisable not to call another MB_master_DB before the busy signal is "0," particularly when dealing with serial data where only one Modbus query can be active on the same port. When it comes to Siemens Modbus TCP, using several queries simultaneously should be possible by assigning different connection IDs to the MB_client block. Keep in mind that there may be limitations on how many sockets can be open simultaneously to/from the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In PLC programming, it is recommended to use multiple MB master blocks (FB) but enable only one at a time based on the sequencer. By setting the MB master block EN pin high depending on the sequence, you can optimize the use of resources. Different values for mode, data_addr, data_len, and data_point pins may be required depending on the network. For all MB master blocks, it is advisable to utilize only one instance data block (DB641 on the 1200CPU) to streamline port initialization when the PLC starts. The MB master blocks (FB) and (DB) should be linked to the MB_comm_load block. It is essential to clear busy variables on the OB100 block upon PLC restart to prevent any issues with communication. Additionally, resetting the MB_master_FB block and giving a reset signal to the block during PLC startup can help maintain efficiency in programming. It is crucial to be cautious when copying output signals from MB master blocks to different program variables, as they are only updated by the sequencer. By following these guidelines and best practices, PLC programming can be more organized and effective.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>naturephoenix</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This manual pertains to the S71500 CM PTP function and provides guidance on utilizing the Modbus_Master instruction. When calling Modbus_Master with different parameter settings, such as MODE and DATA_ADDR, it is crucial to ensure only one call is active at a time. Otherwise, the system may return error code 16#8200 indicating an ongoing request. Additionally, if parameters are changed before a query is fully completed, the system will terminate the second call with ERROR=1 and STATUS=8200. It is important to note that these details were not previously included in the manual. For further information, please refer to the official Siemens support page.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare mentioned the document in the link provided for the Siemens CPU 1500 manual. The information is also applicable for the CPU 1200 and should suit the requirements. The manual outlines procedures for dealing with "New Slave" or "New Communication Job" scenarios. For a different setup with more slaves, adjustments need to be made to the loop and storage DBs. Each slave has three communication jobs, such as reading voltage, currents, and alarms, requiring the program to accommodate for 12 slaves by expanding accordingly. To handle new communication jobs for the same slave but different Modbus registers, the program treats them as separate slaves with varying data address and length, while maintaining the Modbus address. Each new communication job results in an additional entry in the "Master_Comm" array in the "Comm_Data" database. Despite concerns about the internal memory capacity of 50KB, additional memory can be purchased if necessary. Overall, the provided information has been greatly beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>naturephoenix</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Getting started with Siemens and Modbus may pose some challenges, but the sample works smoothly with 1200 series CPUs. However, for 300/400 series CPUs, there are no sample programs available. In such cases, I had to refer to S1500 samples and manuals, which was a lengthy process a couple of years ago. Eventually, the programming on 300 series CPUs is quite similar to that on S1500, but lacks indirect addressing and loop functionalities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
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
            <p>Hello there,

Thank you for sharing your project details with us. Your project has been quite insightful. I am currently working on a similar project involving the connection of 4 to 6 Load cells to a S7-1200 PLC through a Modbus transducer designed for Load cells. This project entails the reading of various values from the transducers (such as weight) and the calibration of the weighing system. Specifically, this project is for a cement batching plant which includes measuring cement weight, water weight, additive weight (potentially 2 different additives), and aggregate weight.

My goal is to accurately measure these weights and control gates, valves, and a conveyor belt based on the readings. I am curious about the speed at which all of these weights can be taken simultaneously and seamlessly. I have a good understanding of how Modbus-485 operates. For instance, if we have 2000kg of aggregate, 400kg of water, 500kg of cement, and 50kg of additive, the entire process must be completed within 70 seconds (including the discharge of the mixer).

Could you please share how you tackled similar challenges in your project? Any assistance or advice you could provide would be greatly appreciated. Thank you for your time and support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ACM1899</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To effectively retrieve analog data from a Modbus RTU slave, it is important to add 30001 to the register address provided in the slave communication files. This article simplifies Modbus RTU by providing in-depth explanations and practical examples. Discover more about the widely utilized Modbus RTU protocol in process control systems at ipc2u.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DukeFleed</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Should I create a new instance data block for "MB_MASTER_DB" for the second slave, or can I simply use a new instance of the FB "MB_MASTER_DB" like when adding a new group of registers to the same slave?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is recommended to create a new instance data block for "MB_MASTER_DB" for the second slave to ensure clear separation and management of data for each slave.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What considerations should be taken into account besides changing the MB_ADDR when expanding the program structure to include a second slave with the same register groups?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Besides changing the MB_ADDR, you should also ensure that the FB "MB_MASTER_DB" for the second slave is not called until the FB for the first slave has completed without errors. Additionally, consider storing data from the second slave in a separate DB with the same structure as the first slave for better organization.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are the Group 1 and Group 2 registers consistent across both slaves in terms of structure and content?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, the Group 1 and Group 2 registers are consistent across both slaves, making it easier to manage and maintain the program structure for MODBUS RTU communication.</p>
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
