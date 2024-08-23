

<!--
what is XML & use of example with example ?

Xml (eXtensible Markup Language) is a markup language.
XML is designed to store and transport data.
XML is not a replacement for HTML.
XML is designed to be self-descriptive.
XML is designed to carry data, not to display data.
XML tags are not predefined. You must define your own tags.
XML is platform independent and language independent.
Platform Independent and Language Independent: 
The main benefit of xml is that you can use it to take data from a program like Microsoft SQL, convert it into XML then share that XML with other programs and platforms. You can communicate between two platforms which are generally very difficult.

The main thing which makes XML truly powerful is its international acceptance. Many corporation use XML interfaces for databases, programming, office application mobile phones and more. It is due to its platform independent feature.


<?xml version="1.0" encoding="UTF-8"?>
<user>
  
  <id>1</id>
  <name>Jani</name>
  <email>jani@gmail.com</email>
  <mobile>92458177</mobile>
  
  <id>1</id>
  <name>Jani</name>
  <email>jani@gmail.com</email>
  <mobile>92458177</mobile>
  
</user>


The Difference Between XML and HTML

XML and HTML were designed with different goals:
XML was designed to carry data - with focus on what data is
HTML was designed to display data - with focus on how data looks
XML tags are not predefined like HTML tags are

-->


<?php




$conn=new mysqli('localhost','root','','mayphp2024');

$data = '<?xml version="1.0" encoding="utf-8"?>';
$data .= '<users>';

$se="select *from users";
$res=$conn->query($se);
while($x=$res->fetch_object())
{
	$data .= '<id>' . $x->id .'</id>';
	$data .= '<name>' . $x->name .'</name>';
	$data .= '<email>' . $x->email .'</email>';
	$data .= '<password>' . $x->password .'</password>';
	$data .= '<gender>' . $x->gender .'</gender>';	
	$data .= '<lag>' . $x->lag .'</lag>';	
	$data .= '<cid>' . $x->cid .'</cid>';	
	$data .= '<img>' . $x->img .'</img>';	
	$data .= '<status>' . $x->status .'</status>';	
}
$data .= '</users>';


// file Handeling


$file=fopen("users.xml","w"); // if file exist then open or not then create
fwrite($file,$data); //write
fclose($file);  // close



// read

$file = fopen('users.xml','r');
echo fread($file,filesize('users.xml'));
fclose($file);

?>