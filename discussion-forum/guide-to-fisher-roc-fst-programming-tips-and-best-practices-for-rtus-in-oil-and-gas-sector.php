
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When it comes to ROC FST programming for RTUs in the Oil and Gas sector, PLCS lacks detailed information. However, after teaching myself the basics, I decided to create a discussion to assist others. This thread focuses on FST Programming and general Configurations for ROC300, ROC800, FB407, FB408, FB503,">
    <meta name="keywords" content="fisher roc fst programming, rtus, oil and gas sector, plcs, function sequence table, roc300, roc800, fb407, fb408, fb503, fb504, fb103, fb104, fb107, rock">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/guide-to-fisher-roc-fst-programming-tips-and-best-practices-for-rtus-in-oil-and-gas-sector">
    <title>Guide to Fisher ROC FST Programming: Tips and Best Practices for RTUs in Oil and Gas Sector | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Guide to Fisher ROC FST Programming: Tips and Best Practices for RTUs in Oil and Gas Sector | Oxmaint Community">
    <meta property="og:description" content="When it comes to ROC FST programming for RTUs in the Oil and Gas sector, PLCS lacks detailed information. However, after teaching myself the basics, I decided to create a discussion to assist others. This thread focuses on FST Programming and general Configurations for ROC300, ROC800, FB407, FB408, FB503,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/guide-to-fisher-roc-fst-programming-tips-and-best-practices-for-rtus-in-oil-and-gas-sector">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Guide to Fisher ROC FST Programming: Tips and Best Practices for RTUs in Oil and Gas Sector | Oxmaint Community">
    <meta name="twitter:description" content="When it comes to ROC FST programming for RTUs in the Oil and Gas sector, PLCS lacks detailed information. However, after teaching myself the basics, I decided to create a discussion to assist others. This thread focuses on FST Programming and general Configurations for ROC300, ROC800, FB407, FB408, FB503,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/guide-to-fisher-roc-fst-programming-tips-and-best-practices-for-rtus-in-oil-and-gas-sector"
      },
      "headline": "Guide to Fisher ROC FST Programming: Tips and Best Practices for RTUs in Oil and Gas Sector",
      "description": "When it comes to ROC FST programming for RTUs in the Oil and Gas sector, PLCS lacks detailed information. However, after teaching myself the basics, I decided to create a discussion to assist others. This thread focuses on FST Programming and general Configurations for ROC300, ROC800, FB407, FB408, FB503,",
      "author": {
        "@type": "Person",
        "name": "DwSoFt"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">Guide to Fisher ROC FST Programming: Tips and Best Practices for RTUs in Oil and Gas Sector</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>49 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">24594</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">302</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When it comes to ROC FST programming for RTUs in the Oil and Gas sector, PLCS lacks detailed information. However, after teaching myself the basics, I decided to create a discussion to assist others. This thread focuses on FST Programming and general Configurations for ROC300, ROC800, FB407, FB408, FB503, FB504, FB103, FB104, FB107 in Rocklink800. FST, or Function Sequence Table, is a method similar to Basic programming but displayed in a spreadsheet format.

Here are some common practices to keep in mind: 

1. Always initiate each FST with a WT (wait) command and set ARG1 to 1. This step ensures proper execution of the FST during each scan.
2. Comments are not stored in the ROC system. Instead, it is advisable to use LBLs to describe each step and MSG Commands to track the progress, as both are saved in the ROC.
3. After writing new code, remember to save the configuration in the system>Flags section of roclink800 to prevent loss of changes.
4. Typically, FST1 handles shutdown logic, while others focus on different functions. It is crucial to ensure all FSTs are enabled for scanning.

Feel free to share your own logic examples for discussion and troubleshooting assistance in this ongoing thread.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the first scenario, a high-pressure condition above 2000kpa triggers the closure of a valve connected to an analog input (AIN A2), while pressures below this threshold allow the system to proceed to the next shutdown check. Additionally, a High level shutdown is activated by a discrete input (DIN, C1) to close the valve (DOU B9) in this setup, which features self-resetting capabilities. The second example introduces a manual reset button (DIN B15) to the configuration for added control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this updated example, I have incorporated Soft Points for added versatility. Soft Points can consist of internal bits or actual values, such as Floating Point. In this scenario, when in a high pressure situation, Softpoint1 Data1 will be set to 1, and once it clears, it will revert to 0. The same principle applies for the high level, but with Softpoint1 Data2. Additionally, I have integrated two analog input values that are subtracted and stored into Softpoint1 Data3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm grateful that I'm not alone in dealing with challenging RTU logic. While our systems may vary, the overall approach remains consistent. While others utilize FBD, I find myself creating code that resembles assembly language. It's comforting to know that others encounter similar difficulties in this area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Saffa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I also possess several Bristol Remote Terminal Units (RTUs) utilizing AACOL language, similar to assembly. Fortunately, I have not needed to modify their logic yet due to their standard load. One advantageous feature is the naming convention of data tags, resembling Logix5000 but with a more vintage touch. LOL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can "compiled" programs from RTUs be uploaded with the defined point names intact? While our RTUs allow uploads, the resulting code may only show the actual point numbers, similar to losing comments when extracting programs from older PLCs. Reverse engineering is a possible but time-consuming option by analyzing the configuration in the base station PC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Saffa</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>All labels, instructions, and messages are uniform when uploading data from the ROCs, but the inputs and data points are condensed to three numbers separated by commas for easy representation. For instance, "soft point 1 data 1" is displayed as 17,0,2. In the editor, you can click on a point to view its details and choose other points. It is important to ensure error-free assembly before downloading the data to the ROC. The monitoring feature allows for a step-by-step view of online activities for troubleshooting purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential to properly assemble the item without any mistakes prior to transferring it to the ROC. You must ensure it is error-free before proceeding with the download. Play baccarat at GClub for an exciting gaming experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nanana12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the helpful introduction to ROC800 programming! I rely on the DS800 IsaGraph to achieve the same capabilities as traditional programming methods. This tool enhances the functionality and ease of programming for the ROC800 device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have yet to acquire the DS800 software for IEC compliant logic programming due to its high cost. The Roc800s I've encountered were solely used for metering and communication with the plant's PLC, therefore, I have not had the opportunity to utilize the advanced programming capabilities offered by the DS800 software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DwSoFt mentioned not having the opportunity to acquire the DS800 software, which offers IEC compliant logic programming, due to its high cost. The Roc800s they encountered were primarily used for metering and communicating with the plant's PLC. The DS800 USB Dongle is expensive, similar to other software in the market. They have a significant deployment of the ROC827 for various purposes in the field and appreciate the ROC's effectiveness, especially for metering applications. This is a helpful write-up for those interested in learning more about these topics.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Absolutely! I have experience working with Remote Operations Controllers (ROCs), Bristol devices, and Zedi meters in Alberta, Canada's oil and gas sector to ensure compliance. When it comes to metering, I always prefer using ROCs. How do you find the DS800 Programming Environment?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Once you understand the quirks, the transition of the TLP to a usable format such as DINT or BOOL may seem unusual at first, but once you get it sorted out, it works well. This programming tool is just as robust as any other on the market. I have successfully set up several 800L's to communicate statuses (like produced/consumed tags) between units. One useful feature is the ability to change the state of a XIC to XIO by simply pressing the space bar while programming. It's the little details like this that excite me. Overall, this tool is great for making programming more accessible to anyone with a structured approach, as opposed to dealing with the steep learning curve of traditional programming methods.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Dan,

I found it quite interesting that you posted a thread about Oil LACT units using the ROC 809E as the flow computer/PLC, as I recently received a RFQ for such units. Although I am familiar with Flow Computers like OMNI, I have never worked with ROC's before. Can you provide more information about the RocLink Software's programming environment?

I have a few questions:
1) Does RocLink Software have a standard Parameter-driven section for configuring flow parameters such as Flow Rates, K-Factors, and Meter Factors?
2) Is FST programming a separate function for custom configurations, or is it necessary to program the entire system using FST?
3) How effective is the ROC as a PLC compared to other Flow Computers? Some PLCs have limitations in terms of timers, counters, and other elements, making it complicated to program. In some cases, it may be simpler to use the Flow Computer side and add a separate PLC for valve and pump control. This also makes it easier for technicians to work on the system later. What are your thoughts on this?

I appreciate your time, Dan. Your post has been quite informative so far!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bullzi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Emerson's Roclink800 is a free software designed for Instrument Technicians, like myself (I am a Dual Electrical/Instrumentation Tech). This software allows you to configure gas meter runs, Pulse input K factors, PID loops, and analog input/output ranges. It also enables meter and transmitter calibrations, configurable historical data, alarms, and events. Additionally, Roclink800 can be used to create shutdowns and math functions with FST logic. 

For more complex control tasks, the Ladder logic DS800 software may be more suitable. However, Roclink800 is a user-friendly option for technicians working on metering tasks. On sites with PLCs handling control and shutdown operations, Roclink800 can still be used effectively for configuration. 

It is important to note that FST logic offers limited timers, but discrete inputs have on & off timers, and analogs have filtering abilities. It is recommended to stick with the software already in use on site, but if necessary, Roclink800 configurations can be saved and shared for assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is Roclink really FREE? I was shocked when my Distributor quoted me $1,000 for it! Can you provide me with a download link? The RFQ requires us to supply the ROC 809's, resulting in a new configuration straight out of the box rather than using an existing one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bullzi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider using the ROC800L for your LACT system. This device includes necessary factors and metering devices, along with the ability to generate a TFX file for seamless integration with accounting software. Many similar systems are operational in the field using the DS800 for PLC tasks. Reach out to the forum for assistance if needed. - John.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Bullzi expressed surprise: "Roclink is FREE? My Distributor wants to charge me $1,000 for it! Do you have a download link?" The RFQ requires us to supply the ROC 809's, which means a new configuration out of the box. I could potentially profit from this, but I'm just kidding. I haven't heard of anyone paying for it, including myself. I will find a link for you tonight. It's possible that it's free only in Canada or that the latest version comes with a cost. I'm currently using v2.41, but I'm aware that it has been updated to at least v2.48.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, I am unable to find a reliable link. It appears that Emerson has removed their connections to it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with FST Logic, be cautious of creating loops with your Goto and Labels to prevent endless scanning of the FST. By ensuring a clear path through the logic, such as guiding it downwards and towards an endpoint, you can avoid this issue. Examples demonstrating this organized structure can be found at the beginning of the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with FST Logic, it is important to avoid creating a loop with your Goto and Labels to prevent the system from endlessly scanning the FST again. I recommend guiding the logic to reach a conclusive end to avoid this issue, as demonstrated in my examples at the top. This lesson was learned through experience, transforming my "Light and Magic" into "Smoke and Mirrors" almost like performing a magic trick.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An expert is defined as someone who has experienced all the potential pitfalls within their specific area of expertise. This firsthand knowledge of what not to do is crucial for mastering a skill.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DwSoFt mentioned the difficulty in finding a reliable link, as Emerson appears to have removed their links to Roclink800. To download Roclink800, you need a supportnet subscription purchased through a local representative, also known as a Local Business Partner. The latest version is 2.51, and I can provide a download link if needed. The Roclink800 help files offer comprehensive documentation on various Roclink functions, including a tutorial on creating FSTs. Working at an Emerson LBP as a control tech, I can attest to the less-than-ideal customer service. ROCs are efficient machines for gas measurement, despite being costly. In my experience, Schneider Control Microsystems support has been exceptional. On the other hand, reaching out to an Emerson representative can be quite frustrating unless you have personal connections at the executive level.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PhreakIgor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your help. I have successfully connected Bullzi. I have extensively reviewed the helpful files available. The area I manage includes a wide range of roc types, such as 306/312rocpaks and flash packs, 364 flash packs fb407, FB503, Fb103, FB107, and a Roc 800, although I am unsure of the exact model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experience working with various measurement systems, starting from the 407 series and up. While I may have limited experience with older machines pre-dating the 407 series, I have assisted others with basic measurement tasks. In addition to the Amocams, we also have Bristol equipment available. Lately, I have been drawn to Control Microsystems for their user-friendly approach and cost-effectiveness in implementing control logic with ladder and C programming capabilities. By combining a ScadaPak with a Red Lion G series HMI using modbus, you can access powerful tools for data processing.

I have found that ROC systems make it easy to add data points to machine histories, while FST systems can be challenging to manage. The Rosemount wireless sensors, featuring x-bee meshing technology, are particularly impressive and can be seamlessly integrated into a ROC800 system. Emerson stands out for their excellence in this area, although Accutech offers well-packaged solutions as well.

In conclusion, wireless pneumatic valve control is a highly recommended choice for remote sensor operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PhreakIgor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have expertise in Bristol products and other field devices like ScadaPacks. While I may not consider myself an expert, I have a strong understanding of these technologies. I have a couple of ScadaPacks on my shelf that I haven't used in a while, but I should revisit them soon.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am looking to expand my knowledge by learning DS800 for ROC and Graf for SCADAPacks. Are there any experts in DS800 who can provide tips or recommend tutorials for beginners?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm currently using the DS800 and experimenting with a project that needs to be completed within a week. While the software may not be as sleek as RS Logix, it is still functional. One important aspect to note is that due to the hardware's specifications, the DS800 requires IO setup to be integrated into the tag-based database. In my project, this setup is accomplished through Function Blocks. I will provide a visual explanation later on.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this DS800 example, we utilize function blocks to extract and convert the "TLP" into a boolean output. TLP, which indicates the location of information on the ROC, can be located on roclink800 using the three numbers on the left. A debounce timer has been added to the bottom to prevent false trips. This process helps streamline data processing and ensure accurate results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The DS800 software may be clunky, but it offers a user-friendly experience compared to other options like FSTs. While DS800 lacks some features, it is specifically designed for ROC 800 and 107 series, making it a more convenient choice for certain applications. It's possible that the software will receive updates in the future to address any shortcomings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>psgama</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I developed the Function Sequence Table (FST) for the ROC product, taking on the responsibility of firmware development and support for the ROC200 and ROC364 models. The initial HMI design closely resembles what is currently in use. The FST was inspired by the functions of a single loop controller (SLC).

Before being downloaded to the ROC, the FST is encoded into hexadecimal bytes, which can still be seen when compiling the FST. The disk file provides an ASCII representation of the data displayed by ROCLINK. The 'WT 1' command, which stands for 'wait one second,' helps define the scan rate or execution frequency of the FST. Without this command, the FST would execute based on the END function, which for the ROC364 is every 100 milliseconds.

For the ROC364, the execution frequency is estimated to be approximately 1.1 seconds (1 second for WT plus an additional 0.1 seconds for END). I utilize Excel for FST development, with each sheet representing a different FST. The 'COMMENT' column is used for notes, similar to current practices. Excel VBA routines are employed for importing and exporting *.fst disk files.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GreatValue</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That is truly remarkable</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to psgama, the DS800 software may be seen as clunky by some users. It is essentially a rebranded version of Isagraf, customized for use with ROC 800 and 107 series. Although I have experience working with both FSTs and DS800, I find DS800 to be more user-friendly despite some missing features. Hopefully, updates will be made to enhance its functionality in the future.

One inconvenience I have encountered is the need to switch the communication port from ROC to DS800 when downloading, and then switching it back again. This process causes the ROC to undergo a warm start, leading to possible site errors. This is not an issue with Isagraf on a SCADAPack.

While I appreciate the familiarity of FSTs, I have found that on older ROC models, there are limitations in terms of available lines for programming. Although having Isagraf for DS800 is a plus, dealing with port configurations and individual unit runtime licensing can be cumbersome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reading a post about fisher doc products, I couldn't resist joining the discussion. While we have found the products to be excellent, I am particularly interested in creating custom programs. I am aware that the DS800 software is used for developing programs, but I am curious about the user programs that can be downloaded or purchased. Does anyone know the tools used for developing these programs? I am hesitant to add the DS800 as it can overload the mpu and some user programs may contain unnecessary components. Has anyone ever created their own user program for fisher doc products?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Guilio_2010</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is likely that you would need a development package from Emerson to write a C++ program for their systems. There are numerous user programs available, such as Modbus and MVS for the 300 series, and ROCNOC (Net Oil Computer) for the 107s. It would be interesting to create your own program. Please note that DS800 is only compatible with the 107 and 800 series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am in search of a development program that can enhance our standard user programs with greater efficiency. Despite reaching out to Emerson for assistance, I still have not been able to find the right solution. I believe there is a better way to streamline our processes with less overhead. I am curious if anyone has any recommendations on where to find this program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Guilio_2010</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I haven't come across that information yet. My search brought me to a manual for FSTS programming. Check out the link for more details: https://www.google.ca/url?sa=t&sour...ggaMAA&usg=AFQjCNGkZUZs7NuiaqpiFfzqE1CWHHoLkw</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can someone assist me in integrating a status update from roc364 into IFix 3.x? I believe I may be overlooking a crucial step, such as utilizing opc or DDE. Any guidance would be greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>markguidry</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking to read data through modbus?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you working with an existing installation where iFIX is already communicating with the ROC, or do you need to establish a new connection? If you require Modbus on the 364 (instead of the native ROC protocol), you must install a user program on it. Next, set up the Modbus table to map the TLPs (ROC addresses) to Modbus, and then integrate it with iFIX.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, IFix is currently in communication with the ROC. Utilizing the OPCODE in RocLink for Windows, I linked slot A9 to the opcode value #24. Subsequently, I instructed IFix to retrieve data from the database manager corresponding to the opcode value #24. Is this the comprehensive solution required for this task?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>markguidry</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you agree? Have you noticed any changes in the value?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I noticed a change in value on the ROC screen when using the IFIX database manager. The value transitioned from "??????" to "running or true". However, I am unable to determine how the database manager's states correspond with the ROC input. This observation highlights the importance of understanding the relationship between database management and control systems in industrial environments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>markguidry</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this post, I would like to provide additional information about timers in FST.ST. When using timers in FST.ST, the timer is initiated with a setpoint as the second argument and counts down to zero. On the FB107, the timer operates on a 100msec time-base. The CT command is used to determine if the timer is running, and if it is, the program will proceed to the second argument Label. If the timer is not running, the program will continue scanning. If you need to adjust the timer while it is running, you should save a value into the timer TLP (16,x,12/13/14/15) instead of trying to start the timer again with another ST command, as this will not work.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Dan, first time users may find FSTs a bit challenging to navigate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While they may seem simple, spreadsheets are essentially a form of basic programming displayed in a tabular format. The user manual provides information on how to use them effectively, but the best way to learn is by actively working with the spreadsheet, utilizing the monitor and step feature to observe its functions in action. Explore the capabilities of spreadsheets by experimenting on the bench and observing the results on the screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is widely accepted that continuous learning is key for success. I have successfully implemented numerous LACT units within FSTs using ROC800 devices. This process involved extensive learning, but the programming method proved to be highly efficient.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>a062549</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is simple for individuals who have knowledge of Basic programming language, making it more accessible for computer programmers compared to PLC programmers. I was fortunate to have learned Basic during my high school years using the ti83plus graphing calculator.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DwSoFt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good evening Dan Wiebe,

I am in need of a custom program for my Floboss 107 to calibrate a Coriolis meter against another mass meter, the CMF300M. I require a program that can initiate the calibration runs manually, perform the necessary calculations, and end the runs once the repeatability reaches 0.02%.

For better communication, please reach out to me via email at [email protected] or WhatsApp at 573145888157. Your assistance in understanding and implementing my idea would be highly appreciated.

I look forward to your response.

Best regards,
Walber</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>walbersoto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you successfully migrated an old FB503 configuration to a newer FB107 controller? When attempting to upload the configuration to the new device, an error occurred indicating that it is not compatible. Is there a way to configure the FB107 to accept the older file, or will I need to rewrite the code?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bgelmore</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is FST programming in the context of RTUs in the Oil and Gas sector?</h4>
<p class='text-muted'><strong>Answer:</strong> - FST, or Function Sequence Table, is a method similar to Basic programming but displayed in a spreadsheet format for programming RTUs in the Oil and Gas sector.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is it important to initiate each FST with a WT command and set ARG1 to 1?</h4>
<p class='text-muted'><strong>Answer:</strong> - Initiating each FST with a WT command and setting ARG1 to 1 ensures proper execution of the FST during each scan.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How should comments be handled in ROC systems during FST programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - Comments are not stored in the ROC system. It is advisable to use LBLs to describe each step and MSG Commands to track progress, as both are saved in the ROC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the recommended practice after writing new code in FST programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - After writing new code, it is important to save the configuration in the system>Flags section of roclink800 to prevent loss of changes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How should different FSTs be utilized in ROC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - Typically, FST1 handles shutdown logic, while others focus on different functions. It is crucial to ensure all FSTs are enabled for scanning to ensure proper functionality.</p>
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
