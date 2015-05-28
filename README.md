# laravel

#Follow the steps to run your own laravel project.
<h3>Download php5 and php5.json</h3>
<ul>
  <li>sudo apt-get install php5</li>
  <li> sudo apt-get install php5-json</li>
</ul>
<br/>
<h3> Download the composer.</h3><br/>
<ul style="font-family:'Courier New'">
  <b>Run this in your terminal to get the latest Composer version:</b>
  <li>curl -sS https://getcomposer.org/installer | php</li>
  <b>Or if you don't have curl:</b>
  <li>php -r "readfile('https://getcomposer.org/installer');" | php</li>
</ul>
<br/>

<h3>Shift the composer.phar file to your local directory and also export the composer file from the vendor.</h3>
<ul style=:"font-family:'Courier New'">
  <li> mv composer.phar /usr/local/bin</li>
  <li>echo 'export PATH="$PATH:~/.composer/vendor/bin"' >> ~/.bashrc</li>
</ul>
<br/>

<h3>Installing mcrypt.</h3>
<ul>
  <li> sudo apt-get install php5-mcrypt</li>
</ul>


<h3>Making your first laravel project</h3>
<ul>
  <li>laravel new "projectname"</li>
  <b>This will create a folder in your current repository.</b>
</ul>

#To run this code on your computer 
  <ul>
    <li>change <b> /config/database.php</b> file and update necessary database,username and\
    password under"mysql"</li>
    <li><b>Call the migrations</b> 
        <ol>
          <li> php artisan migrate</li>
        </ol>
    </li>
  </ul>
