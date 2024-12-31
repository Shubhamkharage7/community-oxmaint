
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you facing the Object-variable or With block variable not set error when running a VBA code on FTView? Even though the code is functioning, the error appears every time you open the display that triggers the VBA code. Since the issue line was not identified during debugging, the">
    <meta name="keywords" content="ftview vba, troubleshooting vba errors, object-variable error, with block variable not set error, ftview vba code issue, debugging vba code, fixing vba errors, plc tag dint error, vba code analysis, v">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-object-variable-or-with-block-variable-not-set-error-in-ftview-vba-code">
    <title>Troubleshooting Object-variable or With block variable not set Error in FTView VBA Code | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Object-variable or With block variable not set Error in FTView VBA Code | Oxmaint Community">
    <meta property="og:description" content="Are you facing the Object-variable or With block variable not set error when running a VBA code on FTView? Even though the code is functioning, the error appears every time you open the display that triggers the VBA code. Since the issue line was not identified during debugging, the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-object-variable-or-with-block-variable-not-set-error-in-ftview-vba-code">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Object-variable or With block variable not set Error in FTView VBA Code | Oxmaint Community">
    <meta name="twitter:description" content="Are you facing the Object-variable or With block variable not set error when running a VBA code on FTView? Even though the code is functioning, the error appears every time you open the display that triggers the VBA code. Since the issue line was not identified during debugging, the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-object-variable-or-with-block-variable-not-set-error-in-ftview-vba-code"
      },
      "headline": "Troubleshooting Object-variable or With block variable not set Error in FTView VBA Code",
      "description": "Are you facing the Object-variable or With block variable not set error when running a VBA code on FTView? Even though the code is functioning, the error appears every time you open the display that triggers the VBA code. Since the issue line was not identified during debugging, the",
      "author": {
        "@type": "Person",
        "name": "Revnus"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Troubleshooting Object-variable or With block variable not set Error in FTView VBA Code</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>28 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2329</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">31</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you facing the "Object-variable or With block variable not set" error when running a VBA code on FTView? Even though the code is functioning, the error appears every time you open the display that triggers the VBA code. Since the issue line was not identified during debugging, the code had to be divided into parts to pinpoint the problem. Here's a snippet of the code with the problematic line highlighted:

Within the code, the PLC tag is a DINT. If you encounter this error, you can fix it by carefully analyzing and adjusting the highlighted line in the provided code. Don't hesitate to seek further assistance if needed.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are trying to reference an object that has been set to Nothing or access an undeclared element in an array variable, you may encounter an error. This could happen if the array is treated as an object with no elements. Another common mistake is trying to access code within a With...End With block before initializing the block. To avoid these errors, make sure to initialize the With...End With block by executing the With statement entry point. Enabling Option Strict can help identify errors more easily. This way, the compiler will point out where the issue lies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that you may be encountering an error in VBA due to referencing an object that has been set to Nothing, accessing an undeclared element of an array variable, or trying to access code within a With...End With block before it has been initialized. To solve this issue, it is recommended to turn on Option Strict in order for the compiler to identify the exact location of the error. Unfortunately, if you are not well-versed in VBA, finding where the improper referencing or declaration occurred can be challenging. Also, keep in mind that the "With" instruction is not being utilized and Option Strict may not be available, resulting in a compile error message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Where is the Input_Change() function triggered from? If the variable INDICE_LISTA_AB has not been assigned a value, it is not uncommon to encounter an error (refer to parky's first point). Although I am not familiar with using VBA in a PV, is it possible to set an initial value using the DIM statement? For example, something similar to: Code: [COLOR=Blue]Dim WithEvents INDICE_LISTA_AB [B][U]= 0 [/U][/B]As Tag[/COLOR]. It is unlikely that this will work as is, but a similar approach may be successful. Alternatively, it is important to ensure that the variable is initialized before it is utilized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 asked about the calling of Input_Change() function and mentioned that if the variable INDICE_LISTA_AB is not set, encountering an error is understandable. The possibility of assigning an initial value using the DIM statement was considered. For example, DIM WithEvents INDICE_LISTA_AB = 0 As Tag might be a solution, although it may require adjustments. It is crucial to ensure the variable is initialized before using it.

In FactoryTalk View, "Input_Change()" is triggered by a numeric input object's value change. If the value changes, the code should verify that INDICE_LISTA_AB is not 0 before enabling the "Button" object in FTView.

An attempt was made to set the initial value with the line: INDICE_LISTA_AB.Value = 0. However, the code may not work due to Tag not being a variable type but an object with properties like ".Value" that can be Integer or String. Nonetheless, the value of 0 is set at the display's startup before the "Input_Change()" event occurs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using a PLC tag to determine the visibility of a button, consider utilizing the "states" tab in the button properties for a more efficient solution. You can also assign different tags for the button's value and indicator on the "Connection" tab. Although I have attempted to implement VBA a few times for this, I have not achieved consistent results on the panel interface, even when running simulations successfully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
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
            <p>joseph_e2 pointed out that using the status of a PLC tag to control a button's appearance may not be the most efficient method. Instead, consider utilizing the "states" tab in the button properties to achieve this. By setting different tags for the button's value and indicator on the "Connection" tab, you can customize how the button behaves and appears.

While VBA has been attempted a few times for this purpose, achieving reliable results on the panel itself has been challenging. Despite this, efforts have been made to ensure that the code functions properly, especially in the context of a registration screen connected to SQL Express.

The primary objective is to enable a "save data" button only when all required fields are filled in. This validation process occurs whenever a field on the screen is modified. Though some logic could be implemented in the PLC, limitations in CCW's memory led to the decision to handle this in VBA.

While the current code is operational, there is a recurring issue flagged in the DiagnosticViewer as "Object-variable not set", particularly in a highlighted line. Resolving this issue is crucial to guaranteeing a flawless system for the end user.

In striving for perfection, it is also important to delve deeper into the root cause of this error to enhance understanding and prevent future occurrences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand now. I suspected there was more to it, but I wanted to confirm. This subject is unfamiliar to me at the moment, but it's definitely intriguing and worth exploring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 mentioned that there may be more to the situation than meets the eye, and they wanted clarification. This topic is intriguing and offers a valuable learning opportunity. Thank you for your support. Hopefully, Parky or another plctalk expert can provide assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you confirmed whether the tag variable is the source of the error you're experiencing? The second function mentions a "Button" variable that appears to be undefined in the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Does FTView VB retain global variables between callbacks in the environment?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Revnus mentioned an important workaround that should be noted in the code. It is advisable to ensure that Input_Change is executed before Display_AnimationStart. The code involves creating tag groups and assigning values based on certain conditions. It is crucial to handle errors effectively to prevent issues from arising. By following these guidelines, you can optimize the functionality of your program and enhance overall performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Cheeseface's question regarding the error source, it seems that the issue may not be with the tag variable. The second function is referencing a "Button" variable that is not defined in the code. This Button object is from FactoryTalk View, where it can be exposed to VBA by selecting its properties in FTViewStudio. This automatically makes the object accessible in the code without the need for declaration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy asked whether FTView VB retains global variables between callbacks. After conducting further tests, I discovered that deleting a call to a public function in a module within the same project prevents the error from occurring. Although I initially refrained from sharing the code of the function as it is unrelated to the variable, it seems that the highlighted variable loses reference after invoking the public function from another module. Below is the code snippet with the call included:

In the code snippet, the red highlighted portion corresponds to a specific section that, when removed, prevents the error from manifesting. Similarly, eliminating the yellow highlighted section also averts the error.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the code snippet shared by drbitboy, the workaround highlighted in red assumes that Input_Change is executed prior to Display_AnimationStart. The script includes declarations for Tag and TagGroup objects, ensuring proper handling of input values and button states within a VBA environment.

Throughout the code, the Display_AnimationStart subroutine initializes the Ogroup TagGroup and assigns the INDICE_LISTA_AB Tag object to interact with a specific PLC data address. On the other hand, the Input_Change subroutine monitors changes in the input value displayed to dynamically adjust the button's enabled status and appearance based on the condition that the input value is not equal to zero.

It is important to note that the Input_Change routine is triggered after the Display_AnimationStart function, allowing for real-time updates when the operator interacts with the input on the display interface. This approach streamlines user interactions by instantly enabling or disabling the designated button based on the input value modifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After the display animation starts, the Input_Change function is activated. Input refers to an object on the display that is triggered. When the display is opened, I populate the inputs by directly referencing the exposed VBA objects. If the operator modifies the Input value during runtime, the code will verify if the input is not zero. If this condition is met, a button on the same display will be enabled. To instantiate the Input object, follow a similar process used for INDICE_LISTA_AB. For more information, refer to the code in the Subroutine Display_AnimationStart at https://www.plctalk.net/qanda/showthread.php?p=645502#post645502. It is worth noting that the tag1 object is also instantiated within that code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent test, Revnus discovered that deleting a call to a public function in a module within the same project can prevent errors. While initially hesitant to share the code of the function, it seems that the highlighted variable may lose reference after invoking this public function from another module. The code snippet includes declarations and operations involving tags and tag groups, as well as error handling mechanisms for diagnostic logging. It appears that removing either the error-generating portion indicated in red or the other segment in yellow can prevent the error from occurring. It is suggested to reposition the database query and execution statements to ensure proper instantiation of objects before exiting the subroutine, potentially resolving the issue at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the assignment of INDICE_LISTA_AB fails in Animation_Start, an error is logged without triggering the debugger or popups. Is a diagnostic message being logged? It turns out the issue lies in the different tag names. Ogroup now includes "{/CB/CC/DATA::[PLC]INDICE_LISTA_AB}" while INDICE_LISTA_AB is set as Ogroup.Item("{/CB/CC/DATA_CCO::[PLC]INDICE_LISTA_AB}"). To learn more, click to expand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface pointed out the issue: the tags have different names. How frustrating! As my mother always says, "If it was a snake, it would have bitten you!" Don't you just hate it when things are right in front of you but you can't see them?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with Animation_Start, if there is a failure in assigning INDICE_LISTA_AB, an error is logged without interrupting the process with popups or entering the debugger. Is a diagnostic message being recorded? The issue lies in the discrepancy of tag names - the code should refer to "[...]DATA_CCO[...]" in both instances. Instead of only receiving the "Object-variable not.." error, no other messages are being logged. I will test out the other recommendations and provide an update on whether they were successful or not.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy asked about the instantiation of the [Input] object, similar to how the INDICE_LISTA_AB object is instantiated. To see an example, visit the following link: https://www.plctalk.net/qanda/showthread.php?p=645502#post645502. Note that the [tag1] object is instantiated within the Subroutine Display_AnimationStart in the provided code.

Unlike the [tag1] object created in VBA code, the [Input] object is a Numeric Input object from FTView Studio that can be accessed in VBA. By being exposed to VBA, I can trigger the event "_change" when its value is modified during runtime. This event calls the function Private Sub Input_Change(), functioning similarly to the Display_AnimationStart() function, triggered by an event of an HMI object.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that the error in the red code might be causing the code to jump to the Err: label, preventing the Ogroup and INDICE_LISTA_AB objects from being instantiated. To resolve this issue, try placing the Read = ... and ExSQL(Read) statements just before the Exit Sub statement, after Ogroup and INDICE_LISTA_AB have been instantiated. This solution has worked effectively in the past. Thank you for your help with this problem.

Although the issue has been resolved, I have another question for clarification. While debugging the VBA code using "step into" (F8), I noticed that the code did not jump to "Err:". Instead, it proceeded through Ogroup and the Set instructions. I am still unsure why the INDICE_LISTA_AB object was not being instantiated. Interestingly, no errors were generated while debugging within the VBA code. The error only occurred when I ran the application and called the display. Do you have any insights on why this discrepancy exists?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response, Revnus expressed gratitude for the solution provided and mentioned encountering a new question during VBA code debugging. Despite using the "step into" function (F8), the code did not jump to the "Err:" section as expected. The issue seemed to be related to the instantiation of INDICE_LISTA_AB, which did not occur during debugging but resulted in an error when running the application. This discrepancy highlights the importance of timing in troubleshooting the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During the troubleshooting of the VBA code, I noticed that when using the "step into" (F8) function, the code did not enter the "Err:" section as expected. Surprisingly, the code successfully passed through Ogroup and the Set instructions without any issues. I am perplexed as to why the INDICE_LISTA_AB variable was not being initialized despite no errors being generated while debugging from the VBA code. The error only arises when I call the display function while running the application. Can anyone explain why this discrepancy occurs? Could it be related to the version of the code being used - the one with the two distinct strings like [...]DATA[...] and [...]DATA_CCO[...], or the version where ExSQL(Read) was executed first, or is it possibly something else altogether?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy asked about the specific version of the code, clarifying if it was the one containing two different strings labeled as DATA and DATA_CCO. This version was not previously seen in the VBA code, and it may have been mistakenly typed out in the forum discussion. Additionally, Drbitboy inquired about the version where the ExSQL(Read) was executed first. This particular version is the one being referred to.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Revnus, the ExSQL(Read) statement is the one that was executed first. If this statement encounters an error, the subsequent Set Ogroup and Set INDICE_LISTA_AB statements will not be executed. The error in the ExSQL statement will cause the code to skip over these sets of commands, leading the Display_AnimationStart subroutine to exit without properly initializing INDICE_LISTA_AB.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the ExSQL(Read) statement encounters an error, the Set Ogroup and Set INDICE_LISTA_AB statements are skipped, leading to the Display_AnimationStart subroutine exiting without initializing INDICE_LISTA_AB. It may seem clear that this is the issue, but during debugging, the "jump" does not always occur as expected. The code proceeds through the Set statement without errors. This discrepancy only appears during runtime, making it challenging to debug effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After receiving input from Revnus, it was believed that the issue was resolved by assuming the occurrence of a certain action. However, upon attempting to debug and identify the error, it was observed that the expected "jump" did not occur during the Set statement execution, leading to confusion as the error only occurred at runtime and could not be debugged. It brings up the question of why this discrepancy only arises during runtime. Could it be that the ExSQL statement is the root cause of the error?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy mentioned that it was peculiar. Have you verified if the ExSQL statement is the reason for the error during runtime? I can confirm that the error only occurred during runtime and not during debugging, making it difficult for me to troubleshoot effectively. Your insight shed light on the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does the "Object-variable or With block variable not set" error indicate in FTView VBA code?</h4>
<p class='text-muted'><strong>Answer:</strong> - This error indicates that there is an issue with a variable or object not being properly initialized before use in the VBA code.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the "Object-variable or With block variable not set" error in FTView VBA code?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot this error, you may need to divide the VBA code into parts and carefully analyze each section to identify the problematic line causing the error.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. In the provided example, what type of PLC tag was causing the error in the VBA code?</h4>
<p class='text-muted'><strong>Answer:</strong> - The PLC tag causing the error in the VBA code was a DINT type.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I fix the "Object-variable or With block variable not set" error related to a DINT PLC tag in FTView VBA code?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you encounter this error with a DINT PLC tag, you can fix it by carefully reviewing and adjusting the highlighted line in the VBA code that interacts with the PLC tag.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What should I do if I cannot identify the specific line causing the "Object-variable or With block variable not set" error in FTView VBA code?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are unable to identify the problematic line during debugging, consider seeking further assistance or consulting with experts to help pinpoint and resolve the issue.</p>
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
