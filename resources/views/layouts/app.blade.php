<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0043)http://www.agence.com.br/caol/consultas.php -->
<HTML><HEAD><TITLE>CAOL - Controle de Atividades Online - Agence Interativa</TITLE>
<style>
	#sub1, #sub2, #sub3
	{ position: absolute;
	  left: 480px;
	  visibility: hidden;
	  z-index: 3
	}
</style>
		<script language='javascript' src="js/popcalendar.js"></script>
<SCRIPT language="JavaScript">
<!--
<!-- comeco do selection box
function move(fbox, tbox) {
var arrFbox = new Array();
var arrTbox = new Array();
var arrLookup = new Array();
var i;
for (i = 0; i < tbox.options.length; i++) {
arrLookup[tbox.options[i].text] = tbox.options[i].value;
arrTbox[i] = tbox.options[i].text;
}
var fLength = 0;
var tLength = arrTbox.length;
for(i = 0; i < fbox.options.length; i++) {
arrLookup[fbox.options[i].text] = fbox.options[i].value;
if (fbox.options[i].selected && fbox.options[i].value != "") {
arrTbox[tLength] = fbox.options[i].text;
tLength++;
}
else {
arrFbox[fLength] = fbox.options[i].text;
fLength++;
   }
}
arrFbox.sort();
arrTbox.sort();
fbox.length = 0;
tbox.length = 0;
var c;
for(c = 0; c < arrFbox.length; c++) {
var no = new Option();
no.value = arrLookup[arrFbox[c]];
no.text = arrFbox[c];
fbox[c] = no;
}
for(c = 0; c < arrTbox.length; c++) {
var no = new Option();
no.value = arrLookup[arrTbox[c]];
no.text = arrTbox[c];
tbox[c] = no;
   }
}
//  fim de selection box -->

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<SCRIPT LANGUAGE="JavaScript">

<!-- selecione e mostra o campo
catnumber = 1
offset = 150
performOnchange = false
if (document.all) {
  docObj = "document.all."
  styleObj = ".style"
  } else {
  docObj = "document."
  styleObj = ""
}
function openselect(subcat) {
  popupselect = eval(docObj + subcat + styleObj)
  popupselect.visibility = "visible"
}
function closeselect(submenu,subcat){
  popupselect = eval(docObj + subcat + styleObj)
  if (submenu.selectedIndex != 0) {
    popupselect.visibility = "hidden"
    numchoice = submenu.selectedIndex
    choice = submenu[numchoice].value
    subcategory.value = choice
    submenu.selectedIndex = 0
  }
}
function lock() {
  performOnchange = false
}
function unlock() {
  performOnchange = true
}
function selectSub(cat) {
  for (i=1; i <= catnumber; i++) {
    subcat = "sub" + i
    popupselect = eval(docObj + subcat + styleObj)
    popupselect.visibility = "hidden"
  }
  if (performOnchange == true) {
    letsopen = "sub" + cat.selectedIndex
    if (letsopen == "sub0") {
      alert("No category selected")
      choice = "Cancelada"
      subcategory.value = choice
      cat.focus()
      } else {
      openselect(letsopen)
      lock()
    }
  }
}
//  fim do seleciona e mostra campo -->
</script>
<SCRIPT language=JavaScript src="js/cor_fundo.js" type=text/javascript></SCRIPT>
  <script language="JavaScript">
<!--
function PesquisaAvancada()
	{
		if (document.all['pesquisaAvancada'][1].style.display=='none')
			{
			document.all['pesquisaAvancada'][1].style.display='block'
			
			;
			}
		else
			{
			document.all['pesquisaAvancada'][1].style.display='none'
		
			;
			}
	}//-- fim PesquisaAvancada
//-->



<!-- inicio de formatacao de valores financeiros
function currencyFormat(fld, milSep, decSep, e) {
var sep = 0;
var key = '';
var i = j = 0;
var len = len2 = 0;
var strCheck = '0123456789';
var aux = aux2 = '';
var whichCode = (window.Event) ? e.which : e.keyCode;
if (whichCode == 13) return true; 
key = String.fromCharCode(whichCode); 
if (strCheck.indexOf(key) == -1) return false;  
len = fld.value.length;
for(i = 0; i < len; i++)
if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)) break;
aux = '';
for(; i < len; i++)
if (strCheck.indexOf(fld.value.charAt(i))!=-1) aux += fld.value.charAt(i);
aux += key;
len = aux.length;
if (len == 0) fld.value = '';
if (len == 1) fld.value = '0'+ decSep + '0' + aux;
if (len == 2) fld.value = '0'+ decSep + aux;
if (len > 2) {
aux2 = '';
for (j = 0, i = len - 3; i >= 0; i--) {
if (j == 3) {
aux2 += milSep;
j = 0;
}
aux2 += aux.charAt(i);
j++;
}
fld.value = '';
len2 = aux2.length;
for (i = len2 - 1; i >= 0; i--)
fld.value += aux2.charAt(i);
fld.value += decSep + aux.substr(len - 2, len);
}
return false;
}
//  fim de formatacao de valores financeiros -->
        </script>
<SCRIPT language=JavaScript>
<!-- Begin
datetoday = new Date();
timenow=datetoday.getTime();
datetoday.setTime(timenow);
thehour = datetoday.getHours();
if (thehour > 18) display = "Boa noite";
else if (thehour >12) display = "Boa tarde";
else display = "Bom dia";
var greeting = (display + " ");

//  End -->
</script>
<SCRIPT language=JavaScript>
<!--

<!-- Começo de formatação de data
var isNav4 = false, isNav5 = false, isIE4 = false
var strSeperator = "/"; 
var vDateType = 1;
var vYearType = 4;
var err = 0;
if(navigator.appName == "Netscape") {
if (navigator.appVersion < "5") {
isNav4 = true;
isNav5 = false;
}
else
if (navigator.appVersion > "4") {
isNav4 = false;
isNav5 = true;
   }
}
else isIE4 = true;
function DateFormat(vDateName, vDateValue, e, dateCheck, dateType) {
vDateType = dateType;

if (vDateValue == "~") {
alert("AppVersion = "+navigator.appVersion+" \nNav. 4 Version = "+isNav4+" \nNav. 5 Version = "+isNav5+" \nIE Version = "+isIE4+" \nYear Type = "+vYearType+" \nDate Type = "+vDateType+" \nSeparator = "+strSeperator);
vDateName.value = "";
vDateName.focus();
return true;
}
var whichCode = (window.Event) ? e.which : e.keyCode;

if (vDateValue.length > 8 && isNav4) {
if ((vDateValue.indexOf("-") >= 1) || (vDateValue.indexOf("/") >= 1)) return true;
}

var alphaCheck = " abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ/-";
if (alphaCheck.indexOf(vDateValue) >= 1) {
if (isNav4) {
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
else {
vDateName.value = vDateName.value.substr(0, (vDateValue.length-1));
return false;
   }
}
if (whichCode == 8) 
return false;
else {


var strCheck = '47,48,49,50,51,52,53,54,55,56,57,58,59,95,96,97,98,99,100,101,102,103,104,105';
if (strCheck.indexOf(whichCode) != -1) {
if (isNav4) {
if (((vDateValue.length < 6 && dateCheck) || (vDateValue.length == 7 && dateCheck)) && (vDateValue.length >=1)) {
alert("Data inválida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
if (vDateValue.length == 6 && dateCheck) {
var mDay = vDateName.value.substr(2,2);
var mMonth = vDateName.value.substr(0,2);
var mYear = vDateName.value.substr(4,4);

if (mYear.length == 2 && vYearType == 4) {
var mToday = new Date();

var checkYear = mToday.getFullYear() + 30; 
var mCheckYear = '20' + mYear;
if (mCheckYear >= checkYear) mYear = '19' + mYear;
else mYear = '20' + mYear;
}
var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
if (!dateValid(vDateValueCheck)) {
alert("Data inválida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
return true;
}
else {

if (vDateValue.length >= 8  && dateCheck) {

if (vDateType == 3) {
var mMonth = vDateName.value.substr(2,2);
var mDay = vDateName.value.substr(0,2);
var mYear = vDateName.value.substr(4,4)
vDateName.value = mDay+strSeperator+mMonth+strSeperator+mYear;
}


var vDateTypeTemp = vDateType;
vDateType = 1;
var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
if (!dateValid(vDateValueCheck)) {
alert("Data inválida\nPor favor, tente novamente");
vDateType = vDateTypeTemp;
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
vDateType = vDateTypeTemp;
return true;
}
else {
if (((vDateValue.length < 8 && dateCheck) || (vDateValue.length == 9 && dateCheck)) && (vDateValue.length >=1)) {
alert("Data inválida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
         }
      }
   }
}
else {

if (((vDateValue.length < 8 && dateCheck) || (vDateValue.length == 9 && dateCheck)) && (vDateValue.length >=1)) {
alert("Data inválida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
return true;
}

if (vDateValue.length >= 8 && dateCheck) {

if (vDateType == 1) {
var mMonth = vDateName.value.substr(0,2);
var mDay = vDateName.value.substr(3,2);
var mYear = vDateName.value.substr(6,4)
}

if (vDateType == 2) {
var mYear = vDateName.value.substr(0,4)
var mMonth = vDateName.value.substr(5,2);
var mDay = vDateName.value.substr(8,2);
}

if (vDateType == 3) {
var mDay = vDateName.value.substr(0,2);
var mMonth = vDateName.value.substr(3,2);
var mYear = vDateName.value.substr(6,4)
}

var vDateTypeTemp = vDateType;


vDateType = 1;

var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
if (vDateValueCheck.length >= 8 && dateCheck) {

if (mYear.length == 2 && vYearType == 4) {
var mToday = new Date();

var checkYear = mToday.getFullYear() + 30; 
var mCheckYear = '20' + mYear;
if (mCheckYear >= checkYear) mYear = '19' + mYear;
else mYear = '20' + mYear;
}
vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
} 
if (!dateValid(vDateValueCheck)) {
alert("Data inválida\nPor favor, tente novamente");
vDateType = vDateTypeTemp;
vDateName.value = "";
vDateName.focus();
return true;
}
vDateType = vDateTypeTemp;
return true;
}
else {
if (vDateType == 1) {
if (vDateValue.length == 2) {
vDateName.value = vDateValue+strSeperator;
}
if (vDateValue.length == 5) {
vDateName.value = vDateValue+strSeperator;
   }
}
if (vDateType == 2)
{
if (vDateValue.length == 4)  
{
vDateName.value = vDateValue+strSeperator;
}
if (vDateValue.length == 7) {
vDateName.value = vDateValue+strSeperator;
   }
}
if (vDateType == 3) {
if (vDateValue.length == 2) {
vDateName.value = vDateValue+strSeperator;
}
if (vDateValue.length == 5) {
vDateName.value = vDateValue+strSeperator;
   }
}
return true;
   }
}
if (vDateValue.length == 10&& dateCheck) {
if (!dateValid(vDateName)) {


alert("Data inválida\nPor favor, tente novamente");
vDateName.focus();
vDateName.select();
   }
}
return false;
}
else {

if (isNav4) {
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
else {
vDateName.value = vDateName.value.substr(0, (vDateValue.length-1));
return false;
         }
      }
   }
}
function dateValid(objName) {
var strDate;
var strDateArray;
var strDay;
var strMonth;
var strYear;
var intday;
var intMonth;
var intYear;
var booFound = false;
var datefield = objName;
var strSeparatorArray = new Array("-"," ","/",".");
var intElementNr;

var strMonthArray = new Array(12);
strMonthArray[0] = "Jan";
strMonthArray[1] = "Feb";
strMonthArray[2] = "Mar";
strMonthArray[3] = "Apr";
strMonthArray[4] = "May";
strMonthArray[5] = "Jun";
strMonthArray[6] = "Jul";
strMonthArray[7] = "Aug";
strMonthArray[8] = "Sep";
strMonthArray[9] = "Oct";
strMonthArray[10] = "Nov";
strMonthArray[11] = "Dec";

strDate = objName;
if (strDate.length < 1) {
return true;
}
for (intElementNr = 0; intElementNr < strSeparatorArray.length; intElementNr++) {
if (strDate.indexOf(strSeparatorArray[intElementNr]) != -1) {
strDateArray = strDate.split(strSeparatorArray[intElementNr]);
if (strDateArray.length != 3) {
err = 1;
return false;
}
else {
strDay = strDateArray[0];
strMonth = strDateArray[1];
strYear = strDateArray[2];
}
booFound = true;
   }
}
if (booFound == false) {
if (strDate.length>5) {
strDay = strDate.substr(0, 2);
strMonth = strDate.substr(2, 2);
strYear = strDate.substr(4);
   }
}

if (strYear.length == 2) {
strYear = '20' + strYear;
}
strTemp = strDay;
strDay = strMonth;
strMonth = strTemp;
intday = parseInt(strDay, 10);
if (isNaN(intday)) {
err = 2;
return false;
}
intMonth = parseInt(strMonth, 10);
if (isNaN(intMonth)) {
for (i = 0;i<12;i++) {
if (strMonth.toUpperCase() == strMonthArray[i].toUpperCase()) {
intMonth = i+1;
strMonth = strMonthArray[i];
i = 12;
   }
}
if (isNaN(intMonth)) {
err = 3;
return false;
   }
}
intYear = parseInt(strYear, 10);
if (isNaN(intYear)) {
err = 4;
return false;
}
if (intMonth>12 || intMonth<1) {
err = 5;
return false;
}
if ((intMonth == 1 || intMonth == 3 || intMonth == 5 || intMonth == 7 || intMonth == 8 || intMonth == 10 || intMonth == 12) && (intday > 31 || intday < 1)) {
err = 6;
return false;
}
if ((intMonth == 4 || intMonth == 6 || intMonth == 9 || intMonth == 11) && (intday > 30 || intday < 1)) {
err = 7;
return false;
}
if (intMonth == 2) {
if (intday < 1) {
err = 8;
return false;
}
if (LeapYear(intYear) == true) {
if (intday > 29) {
err = 9;
return false;
   }
}
else {
if (intday > 28) {
err = 10;
return false;
      }
   }
}
return true;
}
function LeapYear(intYear) {
if (intYear % 100 == 0) {
if (intYear % 400 == 0) {
return true;
   }
}
else {
if ((intYear % 4) == 0) {
return true;
   }
}
return false;
}
//  fim de validacao de data -->

<!-- inicio do tratamento de apenas numeros
function numbersonly(myfield, e)
{
    if (myfield.length ==0)
	    myfield.value=0;  
	  var key;
	  var keychar;
    if (window.event)
     key = window.event.keyCode;
    else if (e)
     key = e.which;
    else
     return true;
	  keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) || 
		      (key==9)|| (key==13)|| (key==27) )
     return true;
    else if ((("0123456789").indexOf(keychar) > -1))
	     return true;
	else
   return false;
}

//--> fim da trava para numero apenas
<!-- início do valida email
function emailCheck (emailStr) {
var emailPat=/^(.+)@(.+)$/
var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
var validChars="\[^\\s" + specialChars + "\]"
var quotedUser="(\"[^\"]*\")"
var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
var atom=validChars + '+'
var word="(" + atom + "|" + quotedUser + ")"
var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
var matchArray=emailStr.match(emailPat)
if (matchArray==null) {
	alert("Endereço de Email parece incorreto (verifique @ e .)")
	return false
}
var user=matchArray[1]
var domain=matchArray[2]
if (user.match(userPat)==null) {
    alert("Conta de email parece ser inválido.")
    return false
}
var IPArray=domain.match(ipDomainPat)
if (IPArray!=null) {
	  for (var i=1;i<=4;i++) {
	    if (IPArray[i]>255) {
	        alert("Destino de IP inválido.")
		return false
	    }
    }
    return true
}
var domainArray=domain.match(domainPat)
if (domainArray==null) {
	alert("Domínio inválido.")
    return false
}
var atomPat=new RegExp(atom,"g")
var domArr=domain.match(atomPat)
var len=domArr.length
if (domArr[domArr.length-1].length<2 || 
    domArr[domArr.length-1].length>3) {
   alert("O endereço deve ter 3 letras de domínio, ou 2 letras de país.")
   return false
}
if (len<2) {
   var errStr="Falta hostname."
   alert(errStr)
   return false
}
return true;
}
//  fim de validacao de email -->
//-->
</SCRIPT>
<!-- HTML HEADER -->
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META content="NOINDEX, NOFOLLOW" name=ROBOTS>
<META http-equiv=Content-Language content=pt-br>
<META http-equiv=pragma content=no-cache>
<META http-equiv=cache-Control content="no cache">
<META http-equiv=expires content="sat, 04 dec 1993 21:29:02 gmt">
<META http-equiv=Refresh content="600; url=main.php">
<link href="css/style.css" type="text/css" rel="stylesheet" />


<SCRIPT language=JavaScript 
src="inc/menu_array.js.htm" 
type=text/javascript></SCRIPT>

<SCRIPT language=JavaScript 
src="inc/menu_script.js" 
type=text/javascript></SCRIPT>

<META content="MSHTML 6.00.2800.1106" name=GENERATOR>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width="100%" colSpan=3 height=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR>
  <TR>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD>
    <TD width="100%">
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD style="BORDER-BOTTOM: #ccc 1px solid">&nbsp;</TD>
          <TD width=98 background="" height=40 rowSpan=2><A 
            href="http://www.agence.com.br/" target=_blank><IMG alt="" 
            src="inc/logo.gif" 
            border=0></A></TD></TR>
        <TR>
          <TD 
          style="PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; BORDER-LEFT: #ccc 1px dotted; PADDING-TOP: 3px"><IMG 
            height=15 alt="" 
            src="inc/fig.gif" 
            width=51 border=0></TD></TR></TBODY></TABLE></TD>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR>
  <TR>
    <TD width="100%" colSpan=3 height=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR>
  <TR>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD>
    <TD width="100%">&nbsp;</TD>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD>
    <TD width="100%">
      <table cellspacing=0 cellpadding=0 width="100%" border=0>
        <tr>
          <td class=index style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px" valign=top><table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <!--
    
    Para as abas ficarem com o visual apresentado na p&aacute;gina, &eacute; necess&aacute;rio colocar os inputs
    dentro de uma tabela. Essa tabela faz o papel de grade e gera algumas linhas pra completar
    o layout. 
    
    Importante:
    Note the a c&eacute;lula onde consta o botao principal (selecionado) n&atilde;o leva a classe CEL_TAB.
    
    Recomendo criar uma funcao/classe para gerar essas Abas com esse layout.
    
    -->
@yield('content')

  </BODY>
</HTML>
