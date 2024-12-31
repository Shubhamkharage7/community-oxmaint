
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings fellow sea captains and wizards! I have been tasked with acquiring 4 values from each slave, and while I am familiar with the MRX and MWX instructions, I have never personally used them before. I have all the necessary manuals, but I am seeking tips and tricks to">
    <meta name="keywords" content="modbus network, siemens lmv 3 burner controllers, dl262 directlogic plc, setting up, slaves, mrx instruction, mwx instruction, tips, tricks, successful setup, manuals, expertise, values acquisition, sea captains">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/tips-for-setting-up-a-modbus-network-with-siemens-lmv-3-burner-controllers-as-slaves-on-dl262-directlogic-plc">
    <title>Tips for Setting up a Modbus Network with Siemens LMV 3 Burner Controllers as Slaves on DL262 Directlogic PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Tips for Setting up a Modbus Network with Siemens LMV 3 Burner Controllers as Slaves on DL262 Directlogic PLC | Oxmaint Community">
    <meta property="og:description" content="Greetings fellow sea captains and wizards! I have been tasked with acquiring 4 values from each slave, and while I am familiar with the MRX and MWX instructions, I have never personally used them before. I have all the necessary manuals, but I am seeking tips and tricks to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/tips-for-setting-up-a-modbus-network-with-siemens-lmv-3-burner-controllers-as-slaves-on-dl262-directlogic-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tips for Setting up a Modbus Network with Siemens LMV 3 Burner Controllers as Slaves on DL262 Directlogic PLC | Oxmaint Community">
    <meta name="twitter:description" content="Greetings fellow sea captains and wizards! I have been tasked with acquiring 4 values from each slave, and while I am familiar with the MRX and MWX instructions, I have never personally used them before. I have all the necessary manuals, but I am seeking tips and tricks to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/tips-for-setting-up-a-modbus-network-with-siemens-lmv-3-burner-controllers-as-slaves-on-dl262-directlogic-plc"
      },
      "headline": "Tips for Setting up a Modbus Network with Siemens LMV 3 Burner Controllers as Slaves on DL262 Directlogic PLC",
      "description": "Greetings fellow sea captains and wizards! I have been tasked with acquiring 4 values from each slave, and while I am familiar with the MRX and MWX instructions, I have never personally used them before. I have all the necessary manuals, but I am seeking tips and tricks to",
      "author": {
        "@type": "Person",
        "name": "Rsflipflop256"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Tips for Setting up a Modbus Network with Siemens LMV 3 Burner Controllers as Slaves on DL262 Directlogic PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>32 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1353</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">297</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings fellow sea captains and wizards! I have been tasked with acquiring 4 values from each slave, and while I am familiar with the MRX and MWX instructions, I have never personally used them before. I have all the necessary manuals, but I am seeking tips and tricks to ensure a successful setup as this will be my first time executing this task. Your help and expertise are greatly appreciated. Thank you all!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When using LMV3, it is crucial to focus on data structures. If the data you require is stored within a structure, make sure that your Modbus read multiple registers request covers the entire structure to prevent transaction failures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am tasked with reading four items from each LMV unit by setting up the Modbus network. I have the V memory location and data type provided, so there should be no issue with that. I also have a converter spreadsheet for Koyo Modbus register addresses. However, I am unsure of how to populate the MRX ibox instruction itself. My main goal is to retrieve specific values from each LMV3 unit through the OCI interface. This includes two BCD words and two individual bits (bit 11 and bit 0 in DirecSoft 6 ladder RLL). Any advice on this matter would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in search of the Modbus mapping guide for the LMV3? If not, I am able to provide a copy of my existing map. Just let me know the four specific parameters you require, and I will share their corresponding Modbus addresses for the LMV3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you! In my burner control application using a DL262 PLC, I am currently monitoring the following parameters: flame signal, error code, HGPS switch status, and alarm status. Are there any other important parameters that should be included for optimal burner performance? This is my first time setting this up. Let me know if there are any additional suggestions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The flame signal is represented by Modbus 40014 and is scaled from 0 to 100%. The status of the HGps switch can be found in Modbus word 40036 or 40037 under the category of "Inputs". These inputs are hard-wired to the LMV3 system, with bit 11 identified as "DW Max Gas" in a data sheet dating back to 2004. If "Hgps" refers to a mercury pressure switch set to activate at a certain pressure measured in inches of mercury, it could serve as the high-level switch, while bit 10, labeled as "DW Min Gas", could function as the low-pressure switch.

For error codes and alarm statuses, there are two data structures in place. The "Lockout History" consists of 16 unsigned 16-bit registers, with the first register designated as the "Error Code" located at Modbus 400401. Additional registers contain related data to the lockout. Another structure for previous lockouts begins at Modbus 40417, with structures available for the eight most recent lockouts. Additionally, there is an 8-register data structure for "Error History" starting at Modbus 40545, with the first register indicating the error code and the remaining seven storing further error-related data.

It is essential to request the entire data structure rather than just the error code, as you will need to read and sort through all 16 or 8 addresses within the PLC logic. Referring to a past project involving a burner control system, approximately 20 years ago, I participated in a project to manage multiple LMVs using a PLC for sequential on/off control to regulate header pressure. Transitioning from keypad to Modbus control for each LMV proved to be challenging, although specific details have faded from memory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In regards to the HGPS switch, there seems to be a discrepancy in the inputs listed in the LMV3 manual. While the manual states Modbus 40036, a note indicates that it should actually be 40037. It appears that Siemens has allocated enough memory space to handle both 32 inputs and outputs, with a 2-register gap between the starting addresses. To confirm this, some experimentation may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The HGPS, or High Gas Pressure Switch, is an important component to monitor in gas-powered systems. It is crucial to understand the different status indicators such as HGPS and Alarm, which are single bits, as well as Flame Signal and Error Code, which are expressed in words. The DL series utilizes BCD/Hex language for communication. To effectively interpret and troubleshoot these indicators, it is essential to learn how to connect rungs using the MRX iBox.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Setting up Directsoft for MRX and MWX is less challenging compared to RX and WX, but working with BCD and Octal addressing adds complexity not typically found in contemporary PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An important observation is the "Current Error Code" displayed at Modbus 40026, along with the discrete output's Bit zero being designated as "Alarm". To enhance response times, consider monitoring this with a hard-wired input to your PLC instead of relying on serial communications timing constraints. To efficiently obtain all necessary data, you can request Modbus 40014 - 40038 in a single "Read multiple registers" command.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC mentioned that setting up Directsoft for MRX and MWX is less challenging compared to RX and WX instructions. However, working with BCD and Octal addressing can make them more complex than newer PLCs. Any valuable advice on configuring and setting up these systems would be greatly appreciated. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This sample DL06 program demonstrates the use of the MRX instruction to read eleven registers from Modbus device #1 every 0.5 seconds, starting at Modbus 40002. The retrieved data is then stored in PLC V memory starting at V3000. The Modbus slave in this instance is a Sure Servo drive that allows customization of the Modbus map, enabling users to input specific data into the first sixteen Modbus 4XXXX registers. To adapt this program for your needs, ensure each LMV is assigned a unique Modbus ID (slave address) and schedule the MRX instruction to run with different slave addresses at regular intervals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate that insight, it's definitely food for thought. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey demonstrates a DL06 program example utilizing a MRX instruction to fetch data from eleven registers on Modbus device #1 every 0.5 seconds, starting at Modbus 40002. The retrieved data is then stored in PLC V memory starting at V3000. In this instance, the Modbus slave used was a Sure Servo drive, which allows for customizing the Modbus map to input desired data into the first sixteen Modbus 4XXXX registers. To tailor this to your specific application, you must assign a unique Modbus ID (slave address) to each LMV and regularly execute the MRX instruction with different slave addresses. Is configuring the slave address necessary for the LMV as well?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Affirmative.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The project managers have located the OCI interface cable and are currently setting up access to the Siemens programming software. While they work on that, I have some time to explore. I believe a single timer is all that is needed for this task, and placing it in the proper location within the instructions should yield the desired outcome. However, I am still waiting for access to the panel and for it to be fully connected. Thank you for your prompt assistance once again!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Each LMV should have its own MRX iBox timer to avoid conflicts when sending commands to Modbus slaves. It is important to use a single timer to prevent simultaneous commands to multiple slaves. After sending a Modbus read multiple registers command, it is vital to wait for the slave's response or a set time limit before sending another command to the next slave. This helps ensure efficient communication and data retrieval from Modbus devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for the Modbus map for the LMV3, I can provide you with a copy or guide you on the Modbus addresses for the specific parameters you need. Let me know your requirements, and I'll share the relevant details. It's like uncovering hidden treasure while working on this!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here is the information you've been searching for.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I extend my gratitude to you, sir.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey inquired about the Modbus map for the LMV3. If you do not have it, I can provide a copy of what I have or specify the Modbus address for the four parameters you require. These parameters include Flame signal (Bcd word), HGPS status (a bit), alarm status (a bit), and error code (BCD/word). If I have already addressed this, I apologize.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To prevent conflicts, it is recommended to use a single timer when sending commands to different Modbus slaves. After sending a Modbus read multiple registers command, it is important to wait for the slave's response before sending another command to the next slave. It is advised to stick to a timer of .5s or below, considering the cable run length of roughly 50 feet. The slave addresses will range from 1 to 8. Despite initial confusion, it has been confirmed that TCP will be used instead of RTU for communication. Thank you for your guidance, Steve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When deciding between baud rates of 19200 and 9600 for a cable run of roughly 50 feet, it may not make much difference in terms of Modbus RTU communication. However, if you are using Modbus TCP over Ethernet, the data tables remain the same, with the slot specified by the ECOM card in the MRX and MWX setup.

I suggest reading the entire block of data required, including the crucial bits in the words, and then separating them out if necessary in your logic. Ensure you allocate enough memory locations for all eight slaves and count carefully in octal. Additionally, you can address a V memory location at the bit level, such as B401.0 for bit 0 of V401.

I recommend using a unique message instruction for each slave, as it makes the logic easier to follow and customize in case any slave has unique requirements or undergoes upgrades that change the memory map.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with Modbus RTU, there will likely be no noticeable difference in baud rate adjustments. However, if using Modbus TCP over Ethernet, the data tables remain the same and only the slot with the ECOM card in the MRX and MWX setup needs to be specified. It is advisable to read the entire block of required data, identifying the vital bits within the words, and separating them out if necessary for logical processing. Ensure to allocate sufficient memory locations for data from all eight slaves, paying attention to the count (in octal). It is possible to address a V memory location at the bit level, such as addressing bit 0 of V401 as B401.0.

It is recommended to assign a unique message instruction for each slave, as constructing logic with pointers that reuse instructions and change slave ID numbers and addresses can be challenging to follow and customize in case of unique requirements or upgrades impacting the memory map.

For instance, bit 0 of V401 can be accessed as B401.0, which is an important concept. The LMV 3 parameters needed include pressure switch and alarm status, along with two BCD words for "Flame Signal" and "Error Code" found in the LMV3 manual under the Modbus section. However, the manual's table regarding function codes can be confusing, as it lists "3/4" for the Flame Signal, leaving room for interpretation. To navigate these complexities, it is helpful to consult with a Siemens expert familiar with LMV 3 units in burner applications and well-versed in Modbus protocols.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When dealing with a timer, it is crucial to consider the limitations on response times. The maximum modbus message size is 250+ bytes, requiring a baud rate of 9600 with approximately 10 bits per character. This means the message itself takes less than a quarter of a second to transmit, not accounting for device turnaround time. To extend the timeout period, one option is to combine two timers or utilize a repeating timer's expiration signal with a counter mechanism. Make sure to optimize your timing strategy for efficient data transmission.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am restricted to a timer of 0.5 seconds or less, which can be adjusted according to your preference. It is advisable to keep the timer as short as possible for optimal performance. While the speed difference between 9600 baud and 19200 baud may not be significant, it is worth considering. The LMV system may now have added ethernet capabilities over the years, offering more options than just serial Modbus RTU.

In Modbus protocol, function code 3 allows for reading Holding registers, while function code 4 is for Input Registers, which are read-only. The LMV may respond to both function codes with the same data. For your specific application, you will need to send a function code 3 to Modbus addresses 40014, 40026, 40036, and 40038. However, Siemens may have limitations on the amount of data that can be sent in a single request.

If Modbus TCP is now available, Siemens may support larger data blocks. To ensure compatibility and efficiency, it is recommended to seek assistance from a Siemens expert with up-to-date knowledge on LMV 3 burner applications and Modbus protocols.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing the manual, I noticed a confusing aspect regarding function codes 3 and 4. For instance, the column for flame signal shows "3/4", which raises questions about whether it refers to three-quarters, 3 out of 4, or both. This ambiguity can be perplexing. To navigate through this issue, it would be beneficial to consult with a Siemens expert familiar with LMV 3 burner applications and modbus protocols. Function code 4 is typically designated for reading analog inputs, but essentially entails only the ability to read 16-bit registers. On the other hand, function code 3 pertains to reading "Holding Registers", which can be both read and written in many scenarios. Some devices may respond to either function code by organizing their read-only and writable registers together for ease of access. This ensures that all the necessary information can be retrieved with a single read message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC notes that while function code 4 is typically used for reading analog inputs, it actually only reads 16-bit registers. On the other hand, function code 3 is designed for reading "Holding Registers," which can be both read and written in most instances. Some devices may respond to either function code for convenience, grouping read-only registers and writable registers together. This way, users can retrieve all the necessary information with a single read message. Thank you for the helpful suggestion!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully powered up the rig and gained access to the 8 slaves using the ACS410 software. I have created MWX rungs to read holding registers in this manner.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After configuring the baud rate and parity to 9600 and even on both the LMV and DL262 sides, I am currently testing the first slave and have obtained these results in my data window.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Still seeing all zeroes, it looks like I need to press more buttons.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To activate the Modbus command, ensure that your trigger is set as a one-shot. In my example, I utilized the done contact from the timer to both initiate the Modbus command and reset the timer. It is important to note that only one Modbus command can be active at a time. Double check to make sure you have the correct serial port number configured. Additionally, remember to write values to the V-memory addresses in order to properly set up the port for Modbus compared to the K-sequence protocol. This is particularly crucial in the DL06, which is the model I used in my demonstration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey emphasized the importance of setting a one-shot trigger for enabling the Modbus command. In his example, he used the done contact from the timer to trigger the Modbus command and reset the timer simultaneously. It is essential to note that only one Modbus command can be active at a time. Double-check that you are using the correct serial port number, which in this case is port two. Rest assured, I will follow up on Monday with the progress and hopefully, I will have good news to share. Thank you for your guidance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are MRX and MWX instructions in the context of setting up a Modbus network with Siemens LMV 3 Burner Controllers as slaves on a DL262 Directlogic PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> -  MRX and MWX instructions are used for acquiring values from slaves in a Modbus network. They facilitate the communication between the PLC and the slave devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure a successful setup when using MRX and MWX instructions for the first time with Siemens LMV 3 Burner Controllers as slaves on a DL262 Directlogic PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> -  To ensure a successful setup, it's important to carefully follow the instructions provided in the manuals, seek tips and tricks from experienced individuals, and test the communication between the PLC and the slave devices thoroughly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What tips and tricks can help me set up a Modbus network with Siemens LMV 3 Burner Controllers as slaves on a DL262 Directlogic PLC effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Some tips for setting up the Modbus network include ensuring proper wiring connections, configuring the communication settings correctly, addressing the slave devices accurately, and testing the communication to verify data acquisition.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I acquire 4 values from each slave using MRX and MWX instructions with Siemens LMV 3 Burner Controllers as slaves on a DL262 Directlogic PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> -  To acquire 4</p>
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
