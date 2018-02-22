
function CreateXmlHttpObject() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();//creates a new ajax object
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");//this is for IE browser
			}
			catch(e){
				try{
				req = new ActiveXObject("Msxml2.XMLHTTP");//this is for IE browser
				}
				catch(e1){
					xmlhttp=false;//error creating object
				}
			}
		}
		 	
		return xmlhttp;
	}
	

  function getAjaxData(strURL,strDiv)
    {         
     var req = CreateXmlHttpObject(); // fuction to get xmlhttp object
     if (req)
     {
      req.onreadystatechange = function()
     {
      if (req.readyState == 4) { //data is retrieved from server
       if (req.status == 200) { // which reprents ok status                    
         document.getElementById(strDiv).innerHTML=req.responseText;//put the results of the requests in or element
      }
      else
      { 
	  document.getElementById(strDiv).innerHTML=req.responseText;//put the results of the requests in or element
         alert("There was a problem while using XMLHTTP:\n");
      }
      }            
      }        
    req.open("GET", strURL, true); //open url using get method
    req.send(null);//send the results
     }
    }
	
	function getAjaxDataValue(strURL,strDiv)
    {         
     var req = CreateXmlHttpObject(); // fuction to get xmlhttp object
     if (req)
     {
      req.onreadystatechange = function()
     {
      if (req.readyState == 4) { //data is retrieved from server
       if (req.status == 200) { // which reprents ok status                    
        // alert(req.responseText);
		 document.getElementById(strDiv).value=req.responseText;//put the results of the requests in or element
      }
      else
      { 
         alert("There was a problem while using XMLHTTP:\n");
      }
      }            
      }        
    req.open("GET", strURL, true); //open url using get method
    req.send(null);//send the results
     }
    }