<!DOCTYPE html>
<html>

<head>
    <title>The Complete JavaScript Tutorial by W3Schools</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto: 400,700|Ubuntu+Mono" rel="stylesheet">
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <!--This container will output error messages from JavaScript that fails-->
    <div id="errorMessages"></div>

    <div id="titleArea">
        <div class="content">
            <h1>The Complete JavaScript Tutorial</h1>
            <sub>Examples from W3Schools & CSS-Tricks | Website Design by Govind Rai</sub>
        </div>
    </div>

    <div class="content main">
        <section>
            <p class="text">
                <span class="bold">JavaScript</span> is the web's default scripting language. 
                It is not to be confused with Java which is a different language with a different purpose. 
                JavaScript was invented by Brendan Eich in 1995, and became an ECMA standard in 1997. 
                ECMA-262 is it's official name. ECMAScript 6 (released in June 2015) is the latest JavaScript version.
            </p>

            <h3>About Me</h3>
            <p class="text">
                As an aspiring frontend developer, I want to (and feel like I need to) master JavaScript 
                before moving onto to the advanced JS frameworks such as Node.js and React.js. Just like 
                taking notes helps some people retain their knowledge better, putting programming
                into practice helps programmers retain knowledge better. This mini project will help me 
                solidfy foundational JavaScript and help me build something somewhat nice for my portfolio.
            </p>

            <h3>Technologies Used</h3>
            <p class="text">
                This website was built using the following stack:
            </p>
            <img class="logos" src="Images/PHP.png" alt="PHP Modern Logo" height="230px" width="auto"/>
            <img class="logos" src="Images/HTML5_CSS_JavaScript.png" alt="HTML, CSS and JavaScript Modern Logos" height="230px" width="auto"/>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
            </ul>
            <div style="clear:both"></div>
            <p class="text">
                I hope to eventually recreate a version 2 of this project employing Twitter's Bootstrap framework 
                so you can look at this website on your mobile device and not throwup instantly. I would also like 
                to possibly implement one or two plugins such as JQuery on Moment.js and apis such as SendGridAPI and SquareAPI. :)
            </p>

            <h3>Reach Out!</h3>
            <p class="text">
                If you have questions, see any errors, or want to this project's source code for this project, 
                please <a href="mail:raigovind1993@gmail.com">reach out</a>! Now, let's get to learning about JavaScript.
            </p>
        </section><!-- end of JavaScript intro -->

        <!--each section usually consists of a title, raw code, and output from code execution-->
        <section>
            <h2>Displaying Dates &amp; Time</h2>

            <h3>Input</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>1<br>2<br>3</pre>
                    </div>
                    <div class="code-block">
                        <?php 
                                $line1 = '<script type="text/javascript">';
                                $line2 = '  document.getElementById(\'displayDateTime\').innerHTML = Date();';
                                $line3 = '</script>';
                                
                                echo '<pre>';
                                echo htmlspecialchars($line1);
                                echo '<br>';
                                echo htmlspecialchars($line2);
                                echo '<br>';
                                echo htmlspecialchars($line3);
                                echo '</pre>';
                            ?>
                    </div>
                </div>
            </div>

            <h3>Output</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre class="lineno">&gt;</pre>
                    </div>
                    <div class="code-block">
                        <p id="displayDateTime" class="output"></p>
                    </div>
                </div>
            </div>
        </section><!--end of Displaying Dates &amp; Time section -->

        <div class="note">
            <p>
                <span class="bold">Tip: </span>
                JavaScript is usually placed at the end of your HTML code right before the <span class="tag">body</span> tag.
                This helps with faster load times.
            </p>
        </div>
            
        <section>
            <h2>Changing Element Attributes</h2>
    
            <h3>Input</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>1<br>2<br>3<br>4<br>5</pre>
                    </div>
                    <div class="code-block">
                        <?php 
                                $line1 = '<script type="text/javascript">';
                                $line2 = '  document.getElementById(\'clock\').src = "Images/watch.png";';
                                $line3 = '  document.getElementById(\'clock\').style.width = "614px";';
                                $line4 = '  document.getElementById(\'clock\').style.height = "460px";';
                                $line5 = '</script>';
                                
                                echo '<pre>';
                                echo htmlspecialchars($line1);
                                echo '<br>';
                                echo htmlspecialchars($line2);
                                echo '<br>';
                                echo htmlspecialchars($line3);                            
                                echo '<br>';
                                echo htmlspecialchars($line4);
                                echo '<br>';
                                echo htmlspecialchars($line5);
                                echo '</pre>';
                            ?>
                    </div>
                </div>
            </div>
    
            <h3>Output</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>&gt;</pre>
                    </div>
                    <div class="code-block">
                        <img id="clock" />
                    </div>
                </div>
            </div>
        </section><!--end of Changing Element Attributes section -->

        <div class="note">
            <p><span class="bold">Tip: </span>Ending statements with semicolon is not required, but highly recommended.</p>
        </div>

        <div class="funfact">
            <p>
                <span class="bold">Did you know</span> JavaScript, unlike most programming languages, doesn't have Integer or Float types? 
                All numerical values are of type Number and are values are automatically floats. You can easily check the type of an object using the
                <span class="code">typeOf</span> operator. To emphasize, note that <span class="code">typeOf</span> is an operator, much like
                <span class="code">&gt;=</span>, and therefore, does not require parentheses (though they are harmless). Finally, there are six 
                return values from <span class="code">typeOf</span>: <span class="code">"number", "string", "boolean", "object", "function",</span>
                and <span class="code">"undefined"</span>.
            </p>
        </div>

        <section>
            <h2>JavaScript Functions</h2>
    
            <h3>Input</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10</pre>
                    </div>
                    <div class="code-block">
                        <?php 
                                $line1 = '<body>';
                                $line2 = '  <p><span id="myFirstFunction" onclick="myFirstFunction();">Click to Highlight</span></p>';
                                $line3 = '  <script type="text/javascript">';
                                $line4 = '    function myFirstFunction() {';
                                $line5 = '      document.getElementById(\'myFirstFunction\').style.backgroundColor = "yellow";';
                                $line6 = '      document.getElementById(\'myFirstFunction\').innerHTML = "I\'m highlighted!";';
                                $line7 = '    }';
                                $line8 = '  </script>';
                                $line9 = '</body>';         
                                
                                echo '<pre>';
                                echo htmlspecialchars($line1);
                                echo '<br>';
                                echo htmlspecialchars($line2);
                                echo '<br><br>';
                                echo htmlspecialchars($line3);                            
                                echo '<br>';
                                echo htmlspecialchars($line4);
                                echo '<br>';
                                echo htmlspecialchars($line5);
                                echo '<br>';
                                echo htmlspecialchars($line6);
                                echo '<br>';
                                echo htmlspecialchars($line7);
                                echo '<br>';
                                echo htmlspecialchars($line8);                            
                                echo '<br>';
                                echo htmlspecialchars($line9);
                                echo '</pre>';
                            ?>
                    </div>
                </div>
            </div>
    
            <h3>Output</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>&gt;</pre>
                    </div>
                    <div class="code-block">
                        <p><span id="myFirstFunction" onclick="myFirstFunction();">Click to Highlight</span></p>
                    </div>
                </div>
            </div>
        </section><!--end of JavaScript Functions section-->

        <div class="note">
            <p>
                <span class="bold">Tip: </span>Use <span class="code">document.write()</span> 
                to help you debug your HTML/JavaScript! However, <span class="bold">beware!</span> 
                Calling/using <span class="code">document.write()</span> after the HTML has loaded,
                such as during an event, will overwrite all HTML. Use <span class="code">document.write()</span> 
                only for debugging purposes and make sure to comment/remove afterwards!
            </p>
        </div>

        <h2>JavaScript Keywords</h2>

        <div class="table keyword-table">
            <?php
                $jsKeywords = [
                    "break" => "Terminates a switch or a loop",
                    "continue" => "Jumps out of a loop and starts at the top",
                    "debugger" => "Stops the execution of JavaScript, and calls (if available) the debugging function",
                    "do ... while" => "Executes a block of statements, and repeats the block, while a condition is true",
                    "for" => "Marks a block of statements to be executed, as long as a condition is true",
                    "function" => "Declares a function",
                    "if ... else" => "Marks a block of statements to be executed, depending on a condition",
                    "return" => "Exits a function",
                    "switch" => "Marks a block of statements to be executed, depending on different cases",
                    "try ... catch" => "Implements error handling to a block of statements",
                    "var" => "Declares a variable"
                    ];
                
                $counter = 0;

                
                foreach ($jsKeywords as $key => $value) {
                    
                    if ($counter % 2 == 0) {
                        $class = "js-keyword-row alternate";
                    } else {
                        $class = "js-keyword-row";
                    }
                    
                    echo "<div class=\"$class\">";
                    echo "  <div class=\"js-keyword\"><span class=\"bold\">$key</span></div>";
                    echo "  <div class=\"js-keyword-description\">$value</div>";
                    echo "</div>";

                    $counter++;
                    
                }
            ?>
        </div>
        <!--end of JavaScript Keywords section-->

        <div class="caution">
            <p><span class="bold">Note: </span>Declaring a variable without the <span class="tag">var</span> keyword <i>anywhere</i>in your code (anywhere meaning local and global scope (in the main part of your code or inside a user-defined function)) will
                create the variable as a global variable. Avoid creating global variables, as global variables can be accessed by the document object!</p>
        </div>

        <!--Each Code Block Consists of a title, the actual code displayed, and the output of that code-->
        <section>
            <h2>Declaring Multiple Variables in One Statement</h2>

            <p class="text">Use commas to declare multiple variables on a single line. Declarations can span multiple lines using commas.</p>

            <h3>Input</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13</pre>
                    </div>
                    <div class="code-block">
                        <?php 
                            $line0 = '<script type="text/javascript">';
                            $line1 = '  // use commas to declare multiple variables on a single line';            
                            $line2 = '  var animals = ["dog", "cat", "panda"], number = 1, favoriteFruit = "pineapple";';
                            $line3 = '  // declarations can span multiple lines using commas';
                            $line4 = '  var $var1 = 0,';
                            $line5 = '    $var2 = 1,';
                            $line6 = '    _var3 = "Koolaid";';
                            $line7 = '   document.getElementById(\'multiple-declarations\').innerHTML ='; 
                            $line8 = '    animals.toString() + "<br> " + number.toString() + "<br>" + favoriteFruit + "<br>" +';
                            $line9 = '    $var1.toString() + "<br>" + $var2.toString() + "<br>" + _var3;';
                            $line10 = '</script>';
                            
                            echo '<pre>';
                            echo htmlspecialchars($line0);
                            echo '<br>';
                            echo htmlspecialchars($line1);
                            echo '<br>';
                            echo htmlspecialchars($line2);
                            echo '<br><br>';
                            echo htmlspecialchars($line3);                            
                            echo '<br>';
                            echo htmlspecialchars($line4);
                            echo '<br>';
                            echo htmlspecialchars($line5);
                            echo '<br>';
                            echo htmlspecialchars($line6);
                            echo '<br><br>';
                            echo htmlspecialchars($line7);
                            echo '<br>';
                            echo htmlspecialchars($line8);                            
                            echo '<br>';
                            echo htmlspecialchars($line9);
                            echo '<br>';
                            echo htmlspecialchars($line10);
                            echo '</pre>';
                        ?>
                    </div>
                </div>
            </div>

            <h3>Output</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>&gt;<br>&gt;<br>&gt;<br>&gt;<br>&gt;<br>&gt;</pre>
                    </div>
                    <div class="code-block">
                        <p id="multiple-declarations"></p>
                    </div>
                </div>
            </div>
        </section>
        <!--end of Declaring Multiple Variables in One Statement section-->

        <div class="caution">
            <p><span class="bold">Note: </span>Redeclaring a variable will still preserve its orginal value. However, you are allowed to redeclare a variable with a different type, as JavaScript supports dynamic types.</p>
        </div>

        <div class="note">
            <p><span class="bold">Tip: </span>One weird behaviour and spec in JavaScript is that an
                <span class="tag">Array</span> is of type <span class="tag">Object</span>. The most reliable way of checking whether you're dealing with an Array is:
                <span class="code">object.prototype.toString.call(data) == [Object Array];</span> .</p>
        </div>

        <!--Each Code Block Consists of a title, the actual code displayed, and the output of that code-->
        <section>
            <h2>JavaScript Objects</h2>
            <p class="text">
                JavaScript objects are containers for named values. The name:value pairs of an object are referred to as the object's properties and/or methods and contain values and function defintions, respectively.
            </p>
    
            <h3>Input</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15<br>16<br>17<br>18</pre>
                    </div>
                    <div class="code-block">
                        <?php 
                            $line1 = '<script type="text/javascript">';
                            $line2 = '  var person = {name:"Bob", age:20, gender:"Male", height:6.2};';
                            $line3 = '  // recommended way to define objects and functions with many parameters';
                            $line4 = '  var person = {';
                            $line5 = '    firstName:"Bob",';
                            $line6 = '    lastName:"Sandoval",';
                            $line7 = '    fullName: function () {';
                            $line8 = '      return this.firstName + " " + this.lastName;';
                            $line81 = '    }';
                            $line9 = '  };';
                            $line10 = '  document.getElementById(\'js-object\').innerHTML = person.firstName;';
                            $line11 = '  // OR';
                            $line12 = '  document.getElementById(\'js-object2\').innerHTML = person["lastName"]';
                            $line13 = '  document.getElementById(\'js-object3\').innerHTML = person.fullName();';
                            $line14 = '</script>';
                            
                            echo '<pre>';
                            echo htmlspecialchars($line1);
                            echo '<br>';
                            echo htmlspecialchars($line2);
                            echo '<br><br>';
                            echo htmlspecialchars($line3);
                            echo '<br>';
                            echo htmlspecialchars($line4);
                            echo '<br>';
                            echo htmlspecialchars($line5);
                            echo '<br>';
                            echo htmlspecialchars($line6);
                            echo '<br>';
                            echo htmlspecialchars($line7);
                            echo '<br>';
                            echo htmlspecialchars($line8);
                            echo '<br>';
                            echo htmlspecialchars($line81);
                            echo '<br>';
                            echo htmlspecialchars($line9);  
                            echo '<br><br>';
                            echo htmlspecialchars($line10);
                            echo '<br>';
                            echo htmlspecialchars($line11);
                            echo '<br>';
                            echo htmlspecialchars($line12);
                            echo '<br><br>';
                            echo htmlspecialchars($line13);
                            echo '<br>';
                            echo htmlspecialchars($line14);
                            echo '</pre>';                        
                        ?>
                    </div>
                </div>
            </div>
    
            <h3>Output</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>&gt;<br>&gt;<br>&gt;</pre>
                    </div>
                    <div class="code-block">
                        <p id="js-object"></p>
                        <p id="js-object2"></p>
                        <p id="js-object3"></p>
                    </div>
                </div>
            </div>
        </section>
        <!--end of JavaScript Objects section-->

        <div class="note">
            <p>
                <span class="bold">Tip: </span>Variables can be emptied by setting their value to <span class="code">undefined</span>.
            </p>
        </div>

        <div class="caution">
            <p>
                <span class="bold">Note: </span>Setting a variable to <span class="code">null</span> also empties a variable, but its type remains <span class="tag">object</span>. Consider this a bug in JavaScript, since <span class="tag">typeof</span> <span class="code">null</span> should be <span class="code">null</span>.
            </p>
        </div>


        <!--Each Code Block Consists of a title, the actual code displayed, and the output of that code-->
        <section>
            <h2>Dynamically Increasing Font Size</h2>
            <p class="text">
                I wanted to increase the font size of an element everytime I clicked a button. Although not sure when I'd make use of such a function, (and it took more effort than was probably necessary to figure out how to do it), this is was a fun problem to solve, and I got an opportunity to gain a better understanding of JavaScript.
            </p>
    
            <h3>Lessons Learned</h3>
            <p class="text">
                The first lesson I learned was that JavaScript will only return the font-size of an element if it explicity specified in CSS. So if you haven't set the CSS or inline styles for that element, JavaScript will not capture the inherited font size and unfortunatley returns an empty string.
            </p>
    
            <p class="text">
                Now, there should be no reason you have to explicity set sizes for all elements. Heck that would be a nightmare and that's why inherited styles exist in the first place!a reason! The optimal solution to this use case is to use the element's computed font-size value and increase that everytime there is an onclick event. For this example, I will go the suboptimal route as I do not yet know how to extract computed properties. I'll learn that soon and the next example with cover the optimal solution. :)
            </p>
    
            <p class="text">
                The second lesson I learned was that JavaScript's <span class="code">element.style.fontSize</span> returns a string value with the units attached. So adding <span class="code">20</span> to <span class="code">"20px"</span> will return <span class="code">"20px20"</span>. To successfully increase the <span class="tag">font-size</span> property by <span class="code">20px</span>, you are going to have to 1) parse the integer value from the font-size string 2) add to that integer the increase in font size and 3) set the font-size to the increased size concatenated with the units. See below:
            </p>
    
            <h3>Input</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15<br>16<br>17<br>18</pre>
                    </div>
                    <div class="code-block">
                        <?php 
                            $line1 = '<body>';
                            $line2 = '  <div class="code-block">';
                            $line3 = '    <p style="font-size:16px" id="too-small">My font needs to be increased.</p>';
                            $line4 = '    <button type="button" onclick="increaseFont()">Increase Font</button>';
                            $line5 = '  </div>';
                            $line6 = '  <script type="text/javascript">';
                            $line7 = '    function increaseFont() {';
                            $line8 = '      var fontSize = parseInt(document.getElementById("too-small").style.fontSize);';
                            $line9 = '      var increaseBy = 5;';
                            $line10 = '      document.getElementById("too-small").style.fontSize = fontSize+increaseBy+"px";';
                            $line11 = '    }';
                            $line12 = '  </script>';
                            $line13 = '</body>';
                            
                            echo '<pre>';
                            echo htmlspecialchars($line1);
                            echo '<br>';
                            echo htmlspecialchars($line2);
                            echo '<br>';
                            echo htmlspecialchars($line3);
                            echo '<br>';
                            echo htmlspecialchars($line4);
                            echo '<br>';
                            echo htmlspecialchars($line5);
                            echo '<br><br>';
                            echo htmlspecialchars($line6);
                            echo '<br>';
                            echo htmlspecialchars($line7);
                            echo '<br>';
                            echo htmlspecialchars($line8);
                            echo '<br>';
                            echo htmlspecialchars($line81);
                            echo '<br>';
                            echo htmlspecialchars($line9);  
                            echo '<br><br>';
                            echo htmlspecialchars($line10);
                            echo '<br>';
                            echo htmlspecialchars($line11);
                            echo '<br>';
                            echo htmlspecialchars($line12);
                            echo '<br><br>';
                            echo htmlspecialchars($line13);
                            echo '</pre>';                        
                        ?>
                    </div>
                </div>
            </div>
    
            <h3>Output</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>&gt;</pre>
                    </div>
                    <div class="code-block">
                        <p style="font-size:16px" id="too-small">My font size needs to be increased.</p>
                    </div>
                </div>
            </div>
    
            <button type="button" onclick="increaseFont()">Increase Font</button>
        </section>
        <!--end of Dynamically Increasing Font-Size section-->
        
        <div class="note">
            <p>
                <span class="bold">Tip: </span>View a function's definition by entering <span class="code">console.log(functionName);</span> .
            </p>
        </div>

        <div class="caution">
            <p>
                <span class="bold">Note: </span>Do not declare Numbers, Strings and Booleans as Objects! Using the <span class="tag">new</span> keyword in JavaScript creates a variable as a JavaScript Object. Executing code such as <span class="code">var x = new String;</span> will only complicate your code, slows down execution, and sometimes results in unexpected/unintended behaviour. It should be avoided!
            </p>
        </div>

        <!--Each Code Block Consists of a title, the actual code displayed, and the output of that code-->
        <section>
            <h3>Manually Creating Elements & Text with JavaScript</h3>
                <p class="text">
                    JavaScript was built to change and interact with your HTML document. Let's see how we can manually create HTML elements and text and add them to our document, a very useful feature when building dynamic websites.
                </p>
    
            <h3>Input</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15<br>16<br>17<br>18<br>19<br>20<br>21<br>22<br>23<br>24<br>25<br>26<br>27</pre>
                    </div>
                    <div class="code-block">
                        <?php 
                            $line1 = '<body onload="manualGeneration()">';
                            $line2 = '    <div id="manualGeneration"></div>';
                            $line3 = '    <script>';
                            $line4 = '        function manualGeneration() {';
                            $line5 = '            var title = document.createTextNode(\'The cars I\\\'ve owned!\');';
                            $line6 = '            var carList = document.createElement(\'ul\');';
                            $line7 = '            var car1 = document.createElement(\'li\');';
                            $line8 = '            var car1Desc = document.createTextNode(\'Mazda\');';
                            $line9 = '            var car2 = document.createElement(\'li\');';
                            $line10 = '            var car2Desc = document.createTextNode(\'Toyota\');';
                            $line11 = '            var car3 = document.createElement(\'li\');';
                            $line12 = '            var car3Desc = document.createTextNode(\'Dodge\');';
                            $line13 = '';            
                            $line14 = '            car1.appendChild(car1Desc);';
                            $line15 = '            car2.appendChild(car2Desc);';
                            $line16 = '            car3.appendChild(car3Desc);';
                            $line17 = '';            
                            $line18 = '            carList.appendChild(car1);';
                            $line19 = '            carList.appendChild(car2);';
                            $line20 = '            carList.appendChild(car3);';
                            $line21 = '';            
                            $line22 = '            document.getElementById(\'manualGeneration\').appendChild(title);';
                            $line23 = '            document.getElementById(\'manualGeneration\').appendChild(carList);';
                            $line24 = '        }';
                            $line25 = '    </script>';
                            $line26 = '</body>';          
                    
                            echo '<pre>';
                            echo htmlspecialchars($line1);
                            echo '<br>';
                            echo htmlspecialchars($line2);
                            echo '<br>';
                            echo htmlspecialchars($line3);
                            echo '<br>';
                            echo htmlspecialchars($line4);
                            echo '<br>';
                            echo htmlspecialchars($line5);
                            echo '<br>';
                            echo htmlspecialchars($line6);
                            echo '<br>';
                            echo htmlspecialchars($line13);
                            echo '<br>';
                            echo htmlspecialchars($line7);
                            echo '<br>';
                            echo htmlspecialchars($line8);
                            echo '<br>';
                            echo htmlspecialchars($line9);  
                            echo '<br>';
                            echo htmlspecialchars($line10);
                            echo '<br>';
                            echo htmlspecialchars($line11);
                            echo '<br>';
                            echo htmlspecialchars($line12);
                            echo '<br>';
                            echo htmlspecialchars($line13);
                            echo '<br>';
                            echo htmlspecialchars($line14);
                            echo '<br>';
                            echo htmlspecialchars($line15);
                            echo '<br>';
                            echo htmlspecialchars($line16);
                            echo '<br>';
                            echo htmlspecialchars($line17);
                            echo '<br>';
                            echo htmlspecialchars($line18);
                            echo '<br>';
                            echo htmlspecialchars($line19);
                            echo '<br>';
                            echo htmlspecialchars($line20);
                            echo '<br>';
                            echo htmlspecialchars($line21);
                            echo '<br>';
                            echo htmlspecialchars($line22);  
                            echo '<br>';
                            echo htmlspecialchars($line23);
                            echo '<br>';
                            echo htmlspecialchars($line24);
                            echo '<br>';
                            echo htmlspecialchars($line25);
                            echo '<br>';
                            echo htmlspecialchars($line26);
                            echo '</pre>'; 
                        ?>
                    </div>
                </div>
            </div>
    
            <h3>Output</h3>
            <div class="table">
                <div class="row">
                    <div class="line-number">
                        <pre>&gt;</pre>
                    </div>
                    <div class="code-block">
                        <div id="manualGeneration"></div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--end of Manually Creating Elements & Text with JavaScript section-->
        
        <div class="note">
            <p>
                <span class="bold">Tip: </span>All JavaScript objects have a <span class="code">valueOf()</span> and <span class="code">toString()</span> method. For Arrays, the default behaviour is <span class="code">valueOf() </span>method. As so, JavaScript will automatically convert an object to a string when it expects a primitive value, so you don't need to explicity call <span class="code">valueOf()</span>/<span class="code">toString()</span>. This behaviour is consistent across JavaScript's built-in objects.
            </p>
        </div>
        
        <div class="caution">
            <p>
                <span class="bold">Warning: </span>Comparing different types may result in unexpected behavior. You may expect JavaScript to fail when comparing a String to an Integer, but instead, JavaScript will successfully evaluate as result as it has rules for object comparisons for comparing objects of different types ( and they aren't exactly intuitive). When comparing between a String and Integer, JavaScript will convert all numeric Strings into Integers. It will convert an empty string to 0 and all non-numeric strings to<span class="code">NaN</span>. To avoid any unintentional results and possible headaches, try to limit comparisons to the same type.
            </p>
            <br>
            <p>
                To ensure a proper comparison, explicity (re)convert all variables to the intended type. For example <span class="code">toString()</span> method. For Arrays, the default behaviour is <span class="code">valueOf() </span>method. As so, JavaScript will automatically convert an object to a string when it expects a primitive value, so you don't need to explicity call <span class="code">valueOf()</span>/<span class="code">toString()</span>. This behaviour is consistent across JavaScript's built-in objects.
            </p>
        </div>
        
        <!--Each Code Block Consists of a title, the actual code displayed, and the output of that code-->
        <section>
            <h2>JavaScript Constructors</h2>
            <p class="text">
                Understanding constructors is key to understanding JavaScript. Unlike many programming languages, JavaScript doesn't support classes. However, JavaScript includes constructors that provide similar functionality. At their heart, constructors are not different from JavaScript functions except that when invoked, we use the <span class="tag">new</span> keyword.
            </p>
        </section>
        <!--end of JavaScript Constructors section-->
        
    </div><!-- Ends div.content.main (most outer div)-->

    
    
    
    
    
    <!--Each Code Block Consists of a title, the actual code displayed, and the output of that code-->
    <!--    <section>-->

    <!--            <h3>Input</h3>-->
    <!--            <div class="table">-->
    <!--                <div class="row">-->
    <!--                    <div class="line-number">-->
    <!--                        <pre>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10<br>11<br>12<br>13<br>14<br>15<br>16<br>17<br>18</pre>-->
    <!--                    </div>-->
    <!--                    <div class="code-block">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <h3>Output</h3>-->
    <!--            <div class="table">-->
    <!--                <div class="row">-->
    <!--                    <div class="line-number">-->
    <!--                        <pre>&gt;</pre>-->
    <!--                    </div>-->
    <!--                    <div class="code-block">-->
    <!--                        <p style="font-size:16px" id="too-small">My font size needs to be increased.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                
    <!--            <div id="constructor"></div>-->
    
    <script type="text/javascript" src="js.js"></script>

</body>

</html>
