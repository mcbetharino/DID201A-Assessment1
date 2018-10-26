<?php

include '/include/header.php';

?>

<div class="welcome-title"> WHAT HAPPENS WHEN A LINK IS CLICKED IN A WEB BROWSER? </div>
	
<div class="welcome-article"> 
<p>URLs can be linked to objects and words on a website, or they can simply be typed into a URL bar, these URLs consist of three components; the protocol (HTTP://), the Domain Name (domainname.com), and sometimes the path (/path).
</p>
<p>
When you click on a link, you are essentially clicking on a URL. Once you click on a link, the user’s ISP (Internet Service Provider) sends a request to a naming server to find the IP of the domain name.
</p>
<p>
This happens by running a protocol called DNS (Domain Name System), which will construct a request asking the naming server for information on the URL. The DNS then translates the domain name to an IP address and sends it back to the browser. The DNS protocol uses a hierarchy that is used to manage different databases, at the top of this inverted tree structure is the root domain (.), and below that are the top-level domains (.com, .edu, .org…), which branch out into sub-domains. This means that sometimes, the DNS query will be given to one server, which will then query other servers inside this hierarchy until it finds the data needed to display in the user’s browser.
</p>
<img src="images/Article-1.png" style="width:70%; height: auto;">
<p>
When the computer receives the IP address from the DNS, it will find and make a connection to the server which holds the data for the link, and sends a request to that server for the data. The IP address is essentially destination that your computer will be routing to the internet. This is done by a protocol called TCP (Transmission Control Protocol), which sets up the connection to the IP address and talks through the internet by sending packets of data to the location. Although, if the link was opened by the user recently, the request can be answered locally.
</p>
<p>
Through the TCP connection, a HTTP command will transmit a packet requesting for the server to ‘GET’ whatever path is in the URL. The server then responds by sending the webpage data in a packet or multiple packets, depending on the size. The webpage could also contain other files needed for the construction of the site, such as a style sheet or JavaScript files. These files will need to be processed separately to different servers by separate TCP protocols, and will have to transmit packets requesting for the server to ‘GET’ that specific file.
</p>
<p>
Once the web servers send back the data to the client, the webpage is up and running.
</p>
<p>
Most websites also use MySQL and PHP. My SQL is a database management system that holds many benefits over alternatives; it’s an open source software that can run both small and large systems, and is essential to PHP applications. Using MySQL and PHP is needed in developing and publishing dynamic, web-based applications. Although MYSQL is becoming less popular, with newer companies working in LAMP (or LAPP), it is still one of the most popular, easy to use open source databases.
</p>
<p>
For more information, please check out these websites:
<br>
	<a href="https://www.novell.com/documentation/dns_dhcp/?page=/documentation/dns_dhcp/dhcp_enu/data/behdbhhj.html">https://www.novell.com/documentation/dns_dhcp/?page=/documentation/dns_dhcp/dhcp_enu/data/behdbhhj.html</a>
<br>	
	<a href="https://www.homeandlearn.co.uk/WD/wds5p1.html">   https://www.homeandlearn.co.uk/WD/wds5p1.html</a>
<br>
	<a href="https://www.siteground.com/tutorials/php-mysql/mysql/#">https://www.siteground.com/tutorials/php-mysql/mysql/#</a>	
<br>
	<a href="https://searchnetworking.techtarget.com/definition/TCP">https://searchnetworking.techtarget.com/definition/TCP</a>
<br>
	<a href="https://www.w3schools.com/php/php_mysql_intro.asp">https://www.w3schools.com/php/php_mysql_intro.asp</a>
</p>
<br>
<br>
<br>
    </div>
    


<?php

include '/include/footer.php';

?>