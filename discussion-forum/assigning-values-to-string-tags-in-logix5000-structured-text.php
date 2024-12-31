
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for a method to assign values to STRING tags in Structured Text? It appears that using text in quotes like String Text is not possible. I have also experimented with using variables, but I am required to declare which character to assign. Is there a structured text alternative">
    <meta name="keywords" content="assigning values to string tags, logix5000 structured text, assign values to string tags, structured text method, string tags in logix5000, assigning values to string tags in structured text, structured text alternative, cop">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/assigning-values-to-string-tags-in-logix5000-structured-text">
    <title>Assigning Values to STRING Tags in Logix5000 Structured Text | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Assigning Values to STRING Tags in Logix5000 Structured Text | Oxmaint Community">
    <meta property="og:description" content="Looking for a method to assign values to STRING tags in Structured Text? It appears that using text in quotes like String Text is not possible. I have also experimented with using variables, but I am required to declare which character to assign. Is there a structured text alternative">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/assigning-values-to-string-tags-in-logix5000-structured-text">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Assigning Values to STRING Tags in Logix5000 Structured Text | Oxmaint Community">
    <meta name="twitter:description" content="Looking for a method to assign values to STRING tags in Structured Text? It appears that using text in quotes like String Text is not possible. I have also experimented with using variables, but I am required to declare which character to assign. Is there a structured text alternative">
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
        "@id": "https://community.oxmaint.com/discussion-forum/assigning-values-to-string-tags-in-logix5000-structured-text"
      },
      "headline": "Assigning Values to STRING Tags in Logix5000 Structured Text",
      "description": "Looking for a method to assign values to STRING tags in Structured Text? It appears that using text in quotes like String Text is not possible. I have also experimented with using variables, but I am required to declare which character to assign. Is there a structured text alternative",
      "author": {
        "@type": "Person",
        "name": "whumphrey"
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
                <h1 class="text-white">Assigning Values to STRING Tags in Logix5000 Structured Text</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>whumphrey</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">13443</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">122</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Looking for a method to assign values to STRING tags in Structured Text? It appears that using text in quotes like "String Text" is not possible. I have also experimented with using variables, but I am required to declare which character to assign. Is there a structured text alternative to the COP instruction that allows for specifying the number of elements easily? Your input is greatly appreciated. - Warren</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When assigning StringVar1 to StringVar2, consider using the COP() command. If the string lengths differ, adjust StringVar1.LEN accordingly. Also, for StringVar assigned with "StringLiteral", I aim to prioritize this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parse_flower</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>parse_flower discussed using the COP() command for assigning StringVar1 to StringVar2 in cases where they have the same length. However, if the string lengths differ, adjusting StringVar1.LEN may be necessary. To prioritize StringVar := "StringLiteral", one can consider moving literal INTs or DINTs to specific positions for copying into the string file. This method guarantees a hardcoded implementation in the PLC, suitable for any AB platform. While ladder logic supports this approach, ST programming may vary. Alternatively, safeguard the string file post-manual value configuration by securing it before saving and downloading. Although this may render it "unsearchable" in the logic, using a dummy copy or thorough comments can help document the process effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In an effort to enhance the process of assigning string literals, I experimented with storing the string literal in a variable. This resulted in the following code: `asteststring : STRING := [4, 'test.....'];`. By removing the unnecessary characters, such as '$00s', the string was successfully imported. The number 4 indicates the length of the string, while 'test' represents the actual string content. Incorporating keywords like "test" into the variable name can improve searchability, although this approach may not be suitable for all strings. Consider utilizing COP() to assign the string to the target if needed. Although I did not test this with COP(), I believe it should function properly in both Ladder and ST programming languages. This approach may result in faster execution, more efficient code, and improved readability compared to assigning integer values. However, there is still a need for a more standardized method of assigning strings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parse_flower</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Structured Text offers a plethora of uses, with later versions of Logix now supporting single quoted string literals. This can be seen in the example below where a `STRING` type variable, PLXString, is assigned a value: 'String for PLX31-EIP-ASCII'. 

Alternatively, one can create constant STRING tags at program scope and then copy them, although this method can be laborious. Various functions like COP can be used for string manipulation, but they may not be the most efficient.

It is worth noting that the ability to use string literals is processor-specific rather than dependent on the RSLogix version. For instance, only 5380 processors for CLX and 5069 processors for CompactLogix accept string literals. 

While testing with a 5580 (L81) processor in v29, it was confirmed that string literals can be used, provided the right processor is in use. In cases where a different processor is being used, more complex methods may be required for string manipulation.

If you have any questions regarding Structured Text, feel free to ask. Despite being underutilized in the industry, I have experience writing code in ST.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>larryf</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Larry, thank you for providing exactly what I was searching for. I previously encountered issues while using double quotes and was unsure of the reason behind it. I understand the struggle of promoting new programming languages. Despite advocating for function blocks, many individuals default to ladder logic, even though it may not be the most efficient choice for certain applications. I prefer using Structured Text (ST) in situations like I/O mapping or when a for loop would be beneficial. Function Block Diagram (FBD) may be a more appealing option as it is a visual language, whereas ST can seem intimidating to non-professional programmers due to its resemblance to traditional code. Additionally, the convenient Rockwell feature of "highlight and press F1" for help does not seem to apply to ST, leading me to explore alternative options.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tytanik</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>While this information may be from an older post, it is crucial to note that the direct assignment process is specific to the CPU or firewall being used. In a recent experience with a L16 device, I encountered a similar issue and found success by assigning the decimal value corresponding to the ASCII character directly to the elements. For instance, setting strNoRead.DATA[0] to 78. Additionally, the length was set as strNoRead.LEN:=7. This approach proved to be effective in overcoming the challenge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lostcontrol</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In his comment, larryf shared his enthusiasm for utilizing Structured Text for various purposes. He mentioned that in later versions of Logix, single quoted string literals are accepted. For example, one can assign a string like 'String for PLX31-EIP-ASCII' to a variable named PLXString, which is of type `STRING`. It is worth noting that this feature may work with the assignment operator, but it has not been personally tested. Additionally, keywords like INSERT can be used to insert strings into other strings.

This functionality was specifically tested in version 32, but it is likely to function in earlier versions as well. It is important to consider that this feature is processor-specific, as it is only supported by 5380 processors for CLX and 5069 processors for CompactLogix. Therefore, the compatibility of string literals is not solely dependent on the RSLogix version but also on the processor being used.

Furthermore, a test conducted with a 5580 processor (L81, v29) confirmed that string literals can indeed work, given the correct processor. However, if the processor is not compatible, additional steps may be required to achieve a similar result. For any queries regarding Structured Text, feel free to reach out for assistance.

On a side note, the commenter expressed caution regarding using this technique in Studio 5000 v35 with Logix Emulate. It may be advisable to avoid this approach in the current project to ensure compatibility with older systems that customers may be using.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sterky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a way to implement this in Compact controllers efficiently? I successfully implemented (the aforementioned approach) in an L84E and an L310ER, but encountered difficulties with an L37 processor. I tried transferring the routine from my L310 to the L37 with no success. Are there alternative methods available for compact controllers?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JPM_121923</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Older generation controllers did not have the capability to write literal strings to tags. However, you can easily assign a string tag as a constant value using the COP function.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jholm90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In previous controller generations, direct string writing to tags was not supported. You could COP a string tag defined as a constant. However, with newer controllers like On5x70 and earlier, it is possible to COP non-constant items as well. For example, I have created arrays of constant strings like STR_4 for symbols such as colon, semicolon, and period to simplify string operations. To enhance the efficiency of manually selecting and placing characters, you can create an AOI that maps out the ASCII set using a local array of SINT[128] with corresponding ASCII values. Then, you can create output parameters that reference these values and establish an instance for practical use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the local tag parameters to create a constant tag for the specific AOI. This constant tag can be easily implemented in ST or LD programming languages for efficient use in your project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a comment, JeremyM highlighted the versatility of creating arrays containing non-constant elements on On5x70 and previous models. For example, arrays like STR_4 can be used to store constant strings such as colon, semicolon, and period for easier manipulation with string functions. If you want to enhance the efficiency of selecting and placing characters manually, consider enumerating the ASCII set by setting up an AOI with a local array of SINT[128] linked to ASCII values. Utilize output parameters to assign these values and create an instance for usage.

Alternatively, a more resource-efficient approach involves using a user-defined data type (udt) with a constant controller tag. This method is preferable as the value for characters like semicolon remains unchanged. The udt comprises all 128 ASCII elements with a string data type limited to one character. Additionally, include an extra full-size String tag at the end of the udt labeled as Blank. By utilizing a string with a length of 1, you can leverage string instructions that may not support other data types effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jholm90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jholm90 mentioned how a UDT, combined with logic handling, is an efficient way to complete a task. By utilizing a UDT with a constant controller tag, you can reduce resource usage as the value remains constant. A UDT contains all 128 ASCII elements with a string datatype limited to one character. To enhance functionality, consider adding a full-size String tag labeled "Blank" at the end of the UDT. Restricting the string length to 1 allows for the use of string instructions that may not support other datatypes effectively. Keep in mind that using a UDT requires manual assignment and maintenance of values each time, unlike the E_ASCII AOI which does not contain any code and is never called, functioning similarly to a UDT with predefined values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jholm90 mentioned that it is possible to approach this task using a combination of an AOI and logic handling. Utilizing a User Defined Type (UDT) with a constant controller tag can help conserve resources, as the value for the semicolon will remain unchanged. The UDT includes all 128 ASCII elements with a string datatype limited to one character. It is also recommended to include an additional full-size String tag at the end of the UDT, labeled as "Blank." By using a string with a length of 1, you can take advantage of string instructions that may not accept other datatypes. Additionally, string constants can be useful in this context, especially when working on a project similar to the ASCII enum AOI but focused on the string forms.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I assign values to STRING tags in Logix5000 Structured Text?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In Logix5000 Structured Text, you cannot directly assign values to STRING tags using quotes like "String Text". You may need to explore alternative methods such as using variables or specific instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a way to easily specify the number of elements while assigning values to STRING tags in Structured Text?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To specify the number of elements when assigning values to STRING tags in Structured Text, you may need to look for alternative instructions or methods that allow for more flexibility in defining the length of the string.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What structured text alternative to the COP instruction can be used for assigning values to STRING tags?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are looking for an alternative to the COP instruction in Logix5000 Structured Text for assigning values to STRING tags, consider exploring other instructions or custom functions that provide more control over the assignment process.</p>
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
