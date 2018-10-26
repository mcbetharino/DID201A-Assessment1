<?php

include '/include/header.php';

?>


	<div class="welcome-title"> CHROME'S DEVELOPER INSPECTOR TOOL FEATURES </div>
	
	<div class="welcome-article"> 
   <p>
   	Chrome’s developer inspector tools are incredibly useful for developing and debugging the code on a webpage.
		</p>
		
 <img src="images/Article-3.png" style="width:70%; height: auto;"> 	
 
<p>
<b>Inspecting + Elements Panel </b>
	<br>
By inspecting elements in a page, the user can navigate the DOM. Once having selected elements highlighted, a CSS selector will appear that represents that element, along with its current width and height. Users are able to edit, manipulate CSS rules, and view any changes to an element in the DOM.
		</p>
<p>
<b>Console Panel</b>
	<br>
The console exists to view any user created or browser created diagnostics in the page, this means that messages from the page’s JavaScript can be viewed. Users can also find and filter lines of code that indicates a message has been logged, where users are able to debug, order by severity, or clear messages.
		</p>
<p>
<b>Device Panel</b>
	<br>
Device mode is able to change how a desktop webpage looks by simulating a mobile user experience, this allows for developers to view and edit their webpages on different devices without physically editing on said devices. Features in this mode also include emulating geolocation and accelerometer, and throttling the CPU and network. Although this feature is incredibly useful in testing responsive and device-specific viewports, it does have its limitations; the page doesn’t run on a physical mobile device and therefore will not be able to simulate a mobile’s CPU since mobile and desktop CPU architecture is not the same.
		</p>
<p>
<b>Sources Panel</b>
	<br>
The Sources panel’s purpose is to edit CSS and JavaScript files. This allows the user to be able to create, edit, and save files to run on any page, which is important when debugging snippets JavaScript. Users can also pause JavaScript code with a breakpoint.
		</p>
<p>
<b>Network Panel</b>
	<br>
The Network panel helps users discover why their page loads slowly, it does this by throttling the CPU or network and analyses the requests. This helps by finding scripts that aren’t needed on start-up and marks them as asynchronous, and finds unnecessarily large files that take too long to load. The Network panel also works well with Device Mode, where the user can analyse the results of throttling the CPU or network of simulated mobile viewports.
		</p>
<p>
	<b>Performance panel (formerly known as Timeline panel)</b>
<br> Performance panels can audit the user’s site and send a report on elements that can be modified to make the website load faster. These reports specify contents such as text, images, render-blocking resources, and general main thread activity.
		</p>
<p>
<b>Memory Panel</b>
	<br>
This panel is essentially to find memory issues that may affect the performance of the page in a visual timeline. This allows for users to prevent memory leaks and to help a page to maintain peak performance over time. The Memory panel also notifies users of current memory leaks in detached DOM trees.
	</p>
<p>
	<b>Application Panel</b>
	<br>
The Application panel gives users to ability to inspect and debug databases, cookies, images, and caches. This simply creates an easy way to access all content on one tool.
		</p>
<p>
<b>Security Panel</b>
<br>
This panel was created for users to view any certificate and mixed content issues, its main purpose is to ensure that users are able to control where their data goes.
   </p>
   
      <p>
For more information, please check out these websites:
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/">https://developers.google.com/web/tools/chrome-devtools/</a>
<br>	
	<a href="https://developers.google.com/web/tools/chrome-devtools/inspect-styles/">   https://developers.google.com/web/tools/chrome-devtools/inspect-styles/</a>
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/device-mode/">https://developers.google.com/web/tools/chrome-devtools/device-mode/</a>	
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/javascript/breakpoints">https://developers.google.com/web/tools/chrome-devtools/javascript/breakpoints</a>
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/javascript/">https://developers.google.com/web/tools/chrome-devtools/javascript/</a>
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/sources">https://developers.google.com/web/tools/chrome-devtools/sources</a>
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/network-performance/#set-up">https://developers.google.com/web/tools/chrome-devtools/network-performance/#set-up</a>
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/speed/get-started#main">https://developers.google.com/web/tools/chrome-devtools/speed/get-started#main</a>
<br>
	<a href="https://developers.google.com/web/tools/chrome-devtools/memory-problems/">https://developers.google.com/web/tools/chrome-devtools/memory-problems/</a>
<br>
	<a href="https://developers.google.com/web/updates/2015/12/security-panel">https://developers.google.com/web/updates/2015/12/security-panel</a>
</p>
<br>
<br>
<br>
   
   
   
    </div>
    


<?php

include '/include/footer.php';

?>