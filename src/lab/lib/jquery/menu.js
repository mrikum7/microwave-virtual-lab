/* 
   Simple JQuery Accordion sidebar.
   HTML structure to use:

   <ul id="sidebar">
     <li><a href="#">Sub sidebar heading</a>
     <ul>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       ...
       ...
     </ul>
     <li><a href="#">Sub sidebar heading</a>
     <ul>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       <li><a href="http://site.com/">Link</a></li>
       ...
       ...
     </ul>
     ...
     ...
   </ul>

Copyright 2007 by Marco van Hylckama Vlieg

web: http://www.i-marco.nl/weblog/
email: marco@i-marco.nl

Free for non-commercial use
*/

function initsidebar() {
  $('#sidebar span').hide();
  $('#sidebar span:first').show();
  $('#sidebar div').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('span')) && (checkElement.is(':visible'))) {
        return false;
        }
      if((checkElement.is('span')) && (!checkElement.is(':visible'))) {
        $('#sidebar span:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );
  }
$(document).ready(function() {initsidebar();});