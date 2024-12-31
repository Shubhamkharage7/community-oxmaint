
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have extensive experience in PLC programming and have recently delved into using Python for my projects. One of my latest endeavors involved utilizing an SQL database to log various data from a Siemens PLC, with the help of the Snap7 library. Now, I aim to replicate">
    <meta name="keywords" content="python libraries, compactlogix plc, raspberry pi, plc projects, snap7 library, libplctag, pycomm3, dmroeder/pylogix, sql database, siemens plc, arm architectures, linux compatibility, arm processor, re">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-python-libraries-for-compactlogix-plc-projects-on-raspberry-pi">
    <title>Best Python Libraries for CompactLogix PLC Projects on Raspberry Pi | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Python Libraries for CompactLogix PLC Projects on Raspberry Pi | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have extensive experience in PLC programming and have recently delved into using Python for my projects. One of my latest endeavors involved utilizing an SQL database to log various data from a Siemens PLC, with the help of the Snap7 library. Now, I aim to replicate">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-python-libraries-for-compactlogix-plc-projects-on-raspberry-pi">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Python Libraries for CompactLogix PLC Projects on Raspberry Pi | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have extensive experience in PLC programming and have recently delved into using Python for my projects. One of my latest endeavors involved utilizing an SQL database to log various data from a Siemens PLC, with the help of the Snap7 library. Now, I aim to replicate">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-python-libraries-for-compactlogix-plc-projects-on-raspberry-pi"
      },
      "headline": "Best Python Libraries for CompactLogix PLC Projects on Raspberry Pi",
      "description": "Hello everyone, I have extensive experience in PLC programming and have recently delved into using Python for my projects. One of my latest endeavors involved utilizing an SQL database to log various data from a Siemens PLC, with the help of the Snap7 library. Now, I aim to replicate",
      "author": {
        "@type": "Person",
        "name": "kevilay"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Best Python Libraries for CompactLogix PLC Projects on Raspberry Pi</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>34 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">9278</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">125</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have extensive experience in PLC programming and have recently delved into using Python for my projects. One of my latest endeavors involved utilizing an SQL database to log various data from a Siemens PLC, with the help of the Snap7 library. Now, I aim to replicate this setup with a CompactLogix PLC, but I am faced with multiple library options such as libplctag, pycomm3, and dmroeder/pylogix. There may also be other libraries available that I am not yet familiar with.

As I plan to run this project on a Raspberry Pi, it is essential for me to choose a library that is compatible with Linux and ARM architectures. I encountered some challenges with recompiling binaries and tweaking settings to make the Snap7 library work on an ARM processor, so I am seeking advice on which library to proceed with for a smoother implementation.

Any insights or experiences shared would be greatly appreciated. Thank you for your help.

Kevin</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you need assistance with pylogix, feel free to reach out as I have expertise in this area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder advises using pylogix without bias. Unfortunately, limited assistance can be provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder mentioned a strong preference for pylogix. If you have any questions or need assistance, feel free to reach out. What specific features or aspects do you appreciate or find lacking in pylogix that contribute to your bias towards it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kevilay inquired about your preference for Pylogix. Can you provide feedback on its pros and cons? Upon visiting the library's Github page (https://github.com/dmroeder/pylogix), did you notice any resemblances between the author's name, avatar picture, and the commenter on this forum? Explore the similarities for a deeper insight.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When you visit the library's Github page at https://github.com/dmroeder/pylogix, do you observe any resemblances between the author's name, avatar picture, and the commenter's avatar on this forum? It's quite intriguing!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Kevilay mentioned, "Haha, that's amazing, I just realized it!" I lack creativity when it comes to choosing usernames and avatars.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder mentioned that they struggle with coming up with creative usernames and avatars. Is there any restrictions on what can be read or written using pylogix? Can it handle real values, boolean data, arrays, user-defined data types, and IO state information?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>At the moment, I am focusing on improving UDT support in my work. Reading an entire structure in UDTs can be challenging. For instance, if a UDT consists of 2 DINTs like MyUDT.Count and MyUDT.Duration, attempting to read MyUDT will only return raw bytes that need to be parsed. However, reading/writing individual elements like MyUDT.Count and MyUDT.Duration is not a problem.

I have received feedback regarding the need for better UDT support, and I understand the importance of this enhancement. However, developing robust UDT support requires significant effort, and I am currently working on this voluntarily and for enjoyment. I am actively working on enhancing UDT support to enable reading entire structures using the base tag name, but time constraints are a challenge. Additionally, handling how UDTs are packed presents its own difficulties.

Many users have resorted to exporting their UDTs in L5X format, which they then parse in Python to generate a tag list for reading. One useful feature of pylogix (and potentially other tools) is the ability to pass a list of tags to efficiently read all values in as few packets as possible.

For more information, visit: https://github.com/dmroeder/pylogix/blob/master/examples/05_read_multiple_tags.py</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The individual in the image is not dmroeder. Python offers a pack and unpack feature that enables you to effortlessly convert byte strings into words and double words.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey pointed out that the person in the image is not dmroeder. This humorous revelation was made in real life, as the image actually comes from a movie that he enjoys. He previously used the same picture as his outlook avatar at work, leading to a funny encounter where someone mistook him for the character in the movie. It's funny to realize that not everyone will recognize the source of the image.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder mentioned that the current focus is on User-Defined Types (UDT's), making it difficult to easily read entire structures. For instance, if a UDT consists of 2 DINT's like MyUDT.Count and MyUDT.Duration, reading MyUDT will only return raw bytes that need to be parsed, which is not ideal. However, reading/writing MyUDT.Count and MyUDT.Duration separately is possible without any issues.

While there has been criticism for the lack of UDT support, it is acknowledged that improving this feature requires a significant amount of work, especially since it is done voluntarily. Nonetheless, efforts are being made to enhance UDT support for reading complete structures by the base tag name, although limited free time is a hindrance. The current packing of UDT's is described as complex and problematic.

To address this issue, some users have resorted to exporting their UDT's in L5X format and parsing them in python to create a tag list for reading purposes. By utilizing libraries like pylogix, it is possible to pass a list of tags to efficiently read all values in as few packets as possible. This can be a challenging process, but direct reading of individual tags like MyUDT.count should not pose a problem.

Although I am relatively new to python, I have extensive experience with PLCs and may be able to contribute to the development efforts in this area. Additionally, it is noted that the referenced movie is highly recommended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User kevilay expressed that understanding and decoding a flexible UDT in Python can be a challenging process. However, as someone with experience in PLCs, they may be able to offer assistance in development. Retrieving the tag list already provides UDT definitions, but parsing values and handling nested UDTs and arrays can pose difficulties. It would be helpful for users to share their experiences with utilizing UDTs, and kevilay is open to offering assistance if needed. Additionally, kevilay mentioned enjoying a particular movie.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lately, I've been exploring the integration of Python libraries with PLCs. Specifically, I utilized Pycomm3 to establish communication with a CompactLogix PLC. The process was seamless and user-friendly, thanks to the comprehensive documentation provided. While my tasks were limited to simply reading and writing tags, I did encounter a peculiar issue. It seemed that when retrieving a single tag, the library would pause for a few seconds before displaying the tag value. This delay could possibly be attributed to the library scanning through all the tags on the controller to locate the specified tag name. Although I didn't delve into the underlying code for confirmation, this is my assumption.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>busarider29 shared their recent experience with using Python libraries for PLCs. They utilized Pycomm3 to communicate with a CompactLogix PLC, which proved to be straightforward and well-documented. While their tasks were simple, such as reading and writing tags, they noticed a slight delay when reading a single tag. This delay may be due to the library's process of iterating through all tags on the controller. Although they did not investigate further, they speculated on the cause of the delay.

In contrast, when using the Siemens library Snap7, the delay was minimal and almost instantaneous. For example, they were able to turn a bit on and off with a Python program, and the action in the PLC was so quick that it was barely noticeable. The entire process of reading, writing, and reading back the tag took less than 50 milliseconds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder mentioned discovering a popular quote from a movie in real life. Could it be from the movie "Clerks"? I think I spotted Silent Bob in the background.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kevilay expressed surprise at the significant delay experienced, noting that in the Siemens library Snap7, the response time was nearly instant. When toggling a bit in the Python program and then turning it off in the PLC using a short timer, the transition was seamless. The entire process of reading, writing, and then reading again took less than 50ms. It is puzzling that there was a delay in reading tag values, while writing was swift, taking less than 100ms. It might be worth exploring more efficient functions within the library for faster reading. The delay doesn't seem to be caused by any issues on the user's end. Others' experiences with this library would be insightful. Additionally, the pyads library for Beckhoff PLC communication proved to be fast and efficient, with instant responses for reading and writing PLC variables, without any delays.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>busarider29 mentioned that they have recently begun exploring the use of Python libraries in conjunction with PLC's. They utilized Pycomm3 to establish communication with a CompactLogix PLC, finding the process to be straightforward and well-documented. While they were primarily focused on reading and writing tags, they noted an issue with a delay in retrieving tag values. This delay, which they attribute to the library retrieving the entire tag database upon initial connection to the PLC, increases in time with larger tag databases. Unfortunately, there is no known method to retrieve the structure of individual tags using Pycomm3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While watching the movie "Clerks," I couldn't help but notice the character Silent Bob in the background. Fun fact: "Clerks" was famously shot in black and white, a unique choice in the film industry. If you enjoyed the first film, make sure to check out "Clerks 2" for more comedic adventures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder pointed out that "Clerks" was filmed in black and white, while "Clerks 2" was in color. Their programming examples and documentation are top-notch, showcasing their dedication and hard work. Thank you for the invaluable resources!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kevilay applauded the quality of the documentation and programming examples provided, expressing gratitude for the hard work put into them. The addition of the documentation was recently made, despite feeling uncertain about its quality. When starting to learn Python, the emphasis was on finding simple examples to experiment with and understand how they function. It was realized that clear and straightforward examples are not always easy to find, which is why they were prioritized in the project. Reading through project documentation was helpful, but it was the inclusion of good examples that truly facilitated learning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder expressed gratitude for the feedback and acknowledged their struggles with adding documentation to their project. As a learner of Python, they emphasized the importance of simple, clear examples for understanding code. They recognized the value of good examples in helping them grasp concepts, having faced challenges with complex or poorly documented libraries in the past. This sentiment resonates with novice Python programmers who may struggle with intricate concepts assumed to be understood by more experienced individuals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Seeking a resolution for Omron PLCs? Specifically interested in solutions for Sysmac and/or CX models.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not well-versed in Omron products, which communication protocols are compatible with your PLCs? It appears that you are discussing software rather than hardware. If they do support modbus, there are modbus libraries available for use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kevilay inquired about finding solutions for Omron PLCs, specifically for Sysmac and/or CX. Turning to Github is a common practice for sourcing such solutions. It may also be worth exploring other avenues for assistance. The modbus suggestion from @dmroeder is something to consider.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When looking for solutions, I often turn to Github as my primary resource. I also consider exploring other platforms like Summathere. I have high hopes for @dmroeder's modbus suggestion. Omron stands out for its Ethernet IP, FINS, and ETHERCAT capabilities. However, their Ethernet IP protocol may differ from AB due to their unique EDS files. I plan to conduct a thorough search on Github to gather more insights.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kevilay</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This individual has shown great expertise in utilizing Python for Omron communication projects. They have successfully implemented a FINS (native Omron protocol) and have also developed a CIP library. Learn more about their impressive work on their website: https://aphyt.com/index.php/projects</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CX_Luigi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While integrating pylogix into my application, I encountered some issues related to a STRING tag that I am writing to. One concern is ensuring that the PLC receives updated tag values from my external Python application within a 400-millisecond timeframe. Occasionally, there are communication 'blips' where the PLC tag update may take longer than the specified 400ms. 

Another issue arises when I attempt to increase the write rate to around <50ms, causing a lag of approximately 600ms in the updating of the string tag in the PLC. It seems that the PLC receives all the values, but there is a latency introduced at this higher rate.

I am curious about any known limitations on read/write rates and whether pylogix can facilitate deterministic read/write operations consistently or at a set RPI. Additionally, are there any recommended network card optimizations to enhance read/write rates? Thank you for your assistance in addressing these concerns.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Raykor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Raykor mentioned that he integrated pylogix into an application but encountered a few issues with a STRING tag he was writing to. Firstly, it is crucial for the PLC to receive updated tag values from his external python application within 400 milliseconds. However, there are occasional communication 'blips' where the PLC tag takes longer than 400ms to update. Secondly, when increasing the write rate to less than 50ms, the string tag in the PLC lags in updating by around 600ms. Raykor suspects that the PLC receives all values but experiences latency at this higher rate.

Are there any known limitations on read/write rates? Can pylogix facilitate deterministic read/write operations or maintain a consistent RPI? Are there any recommended network card optimizations to enhance read/write rates? Thank you for your assistance.

Could you specify the controller you are writing to? The data type being written should not have any special considerations, especially when dealing with the STRING type. When encountering a "communication blip," it could indicate that the Ethernet module is reaching its maximum capacity or that the connection is being opened and closed for each read/write operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using the 1756-L73S controller, specifying the data type can improve write speeds, as seen in your example code. However, I encountered an error when setting the datatype to 218 (STRING). Could you verify if the string datatype is supported, or if this is irrelevant? Additionally, I have ruled out the Ethernet module reaching maximum capacity and ensured that the connection is not being opened and closed for every read/write operation. I will further investigate as there may be other issues within my code affecting performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Raykor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Raykor discussed the 1756-L73S controller and mentioned the importance of specifying datatypes for faster writes, as seen in the example code. However, when trying to set the datatype as 218 (STRING), an error occurred. It is important to note that 218 is the datatype for a Micro800 STRING, while CLX STRING is represented as 160. Although specifying the datatype can optimize the write speed by saving a packet exchange for the first read, it may not be the root cause of the issue.

To ensure the connection integrity, it is advisable to use tools like Wireshark for confirmation. Simply not calling the .Close() method does not guarantee that the connection is not inadvertently closed, especially when using a context manager (with statement) where the connection closes automatically at the end of the block. It is worth noting that creating a new instance of the PLC class within each loop iteration can lead to opening a new connection each time, which is a common error among users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the code does not include a 'with' statement. Here is a simple explanation of it: 

In our code, the writeData function is defined with parameters for channel, value, and an optional datatype. In a continuous loop, the function attempts to write data to a device using the provided parameters. If the status returned indicates a lost connection, a corresponding log entry is made. If the write operation is not successful, another log entry is created. If the write operation is successful, the loop breaks.

Although we are actively monitoring communication 'blips', we have not observed instances of "write fail" or "connection lost" statuses occurring. These statuses are crucial for monitoring our connection to the PLC. I may attempt using Wireshark for further analysis, though it may not be possible until next week. Your assistance is greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Raykor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Raykor noted that a 'with' statement is not being utilized in the code. Here is a basic overview of the code:

In the code snippet provided, the method writeData is defined with parameters for channel, value, and an optional datatype. Within a while loop, the code attempts to write data using self.comm.Write method. If the return status indicates a 'Connection lost' error, it is logged accordingly. Similarly, if the status is not 'Success', a 'write fail' message is logged. 

Currently, the monitoring of communication 'blips' does not show any 'write fail' or 'connection lost' statuses, which are crucial for monitoring the connection to the PLC. Raykor mentions the possibility of using Wireshark for further analysis, but may not be able to do so until the following week. Grateful for the support provided.

For further clarification, the following questions are raised:
1. How is the self.comm attribute assigned?
2. How is the writeData method invoked?
3. How is the instantiation of the "self" (class instance) handled?

Feel free to click expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent experiment, I compared the performance of a 1769-L30ER PLC connected over wifi to a 5069-L320ER PLC connected directly. I repeatedly wrote to a string 20,000 times without any delay between writes. Each write was timed, and the minimum, maximum, and average write times were recorded. Surprisingly, there were no dropped connections during the test. The 1769 PLC had a minimum write time of 1.47ms, a maximum of 73.07ms, and an average of 3.50ms. In comparison, the 5069 PLC had a minimum write time of 0.05ms, a maximum of 3.48ms, and an average of 0.61ms. These results highlight the varying performance levels of PLCs in different connectivity setups.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to your inquiries:

1. Upon initialization, the variable self.comm is assigned to an instance of the PLC class from the pylogix library.
2. When a string value is read for transmission, the export routine triggers the 'writeData' function, which in turn executes self.comm.write().
3. In this context, 'self' refers to an object of the RockwellPLC class, which is constructed as shown below:

class RockwellPLC(PlcBaseDevice):
def __init__(self, config):
super().__init__(config)
self.comm = None

This initialization is part of the parent class 'PlcBaseDevice':

class PlcBaseDevice(BaseDevice):
def __init__(self, config):
super().__init__(config)
# ensure a 30ms delay before the next write operation
self.plc_write_delay = config.get('plc_write_delay')
self.confnr = 0
self.last_write_ts = 0
self.plc_connected = False
log.info('plcbaseinit', id='INITBASEPLC', config=config)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Raykor</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the best Python libraries for CompactLogix PLC projects on Raspberry Pi?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discussed libraries for CompactLogix PLC projects on Raspberry Pi include libplctag, pycomm3, and dmroeder/pylogix. These libraries offer different features and compatibility with Linux and ARM architectures.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I choose a library that is compatible with Linux and ARM architectures for my CompactLogix PLC project on Raspberry Pi?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is essential to consider compatibility with Linux and ARM architectures when selecting a library for your project. Some libraries may require recompiling binaries and tweaking settings to work on an ARM processor, so it is advisable to research and choose a library that offers smoother implementation on Raspberry Pi.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Which library is recommended for logging data from a CompactLogix PLC using Python on a Raspberry Pi?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Snap7 library was mentioned for logging data from a Siemens PLC, but for CompactLogix PLC projects on Raspberry Pi, alternatives such as libplctag, pycomm3, and dmroeder/pylogix are available. It is recommended to explore these options based on your specific project requirements and compatibility with Raspberry Pi.</p>
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
