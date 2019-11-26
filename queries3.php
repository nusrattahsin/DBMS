<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "iubadmission";

//this line sets up the connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn){
	echo "sorry db not connected";
}
else{
	echo "db connected";
}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>



// =================================================================================================
// 			==================================================================
// 										SCHOOL
// 			==================================================================
// =================================================================================================			
		$SlassCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE School='Slass';";
		$Slassresult = mysqli_query($conn, $SlassCountSql);
		$SlassCount= (mysqli_fetch_assoc($Slassresult));				
	
		$SoBCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE School='SoB';";
		$SoBresult = mysqli_query($conn, $SoBCountSql);
		$SoBCount= (mysqli_fetch_assoc($SoBresult));

		$SLSCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE School='SLS';";
		$SLSresult = mysqli_query($conn, $SLSCountSql);
		$SLSCount= (mysqli_fetch_assoc($SLSresult));

		$SECSCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE School='SECS';";
		$SECSresult = mysqli_query($conn, $SECSCountSql);
		$SECSCount= (mysqli_fetch_assoc($SECSresult));

		$SESMCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE School='SESM';";
		$SESMresult = mysqli_query($conn, $SlassCountSql);
		$SESMCount= (mysqli_fetch_assoc($Slassresult));


// =================================================================================================
// 			==================================================================
// 										DEPARTMENT
// 			==================================================================
// =================================================================================================			
// Eng
// BBA
// SOC
// MED
// SLS
// CSE
// ECO
// EEE
// EMgt
// POP
// ESc
// LAW
// PhySci
// GSG

		$EngDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='ENG' OR Dept='Eng' ;";
		$EngDresult = mysqli_query($conn, $EngDCountSql);
		$EngDCount= (mysqli_fetch_assoc($EngDresult));				

		$BBADCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='BBA';";
		$BBADresult = mysqli_query($conn, $BBADCountSql);
		$BBADCount= (mysqli_fetch_assoc($BBADresult));				

		$SOCDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='SOC';";
		$SOCDresult = mysqli_query($conn, $SOCDCountSql);
		$SOCDCount= (mysqli_fetch_assoc($SOCDresult));

		$MEDDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='MED';";
		$MEDDresult = mysqli_query($conn, $MEDDCountSql);
		$MEDDCount= (mysqli_fetch_assoc($MEDDresult));

		$SLSDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='SLS';";
		$SLSDresult = mysqli_query($conn, $SLSDCountSql);
		$SLSDCount= (mysqli_fetch_assoc($SLSDresult));

		$CSEDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='CSE';";
		$CSEDresult = mysqli_query($conn, $CSEDCountSql);
		$CSEDCount= (mysqli_fetch_assoc($CSEDresult));

		$ECODCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='ECO';";
		$ECODresult = mysqli_query($conn, $ECODCountSql);
		$ECODCount= (mysqli_fetch_assoc($ECODresult));

		$EEEDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='EEE';";
		$EEEDresult = mysqli_query($conn, $EEEDCountSql);
		$EEEDCount= (mysqli_fetch_assoc($EEEDresult));

		$EMgtDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='EMgt';";
		$EMgtDresult = mysqli_query($conn, $EMgtDCountSql);
		$EMgtDCount= (mysqli_fetch_assoc($EMgtDresult));				

		$POPDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='POP';";
		$POPDresult = mysqli_query($conn, $POPDCountSql);
		$POPDCount= (mysqli_fetch_assoc($POPDresult));

		$EScDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='ESc';";
		$EScDresult = mysqli_query($conn, $EScDCountSql);
		$EScDCount= (mysqli_fetch_assoc($EScDresult));

		$LAWDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='LAW';";
		$LAWDresult = mysqli_query($conn, $LAWDCountSql);
		$LAWDCount= (mysqli_fetch_assoc($LAWDresult));

		$PhySciDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='PhySci';";
		$PhySciDresult = mysqli_query($conn, $PhySciDCountSql);
		$PhySciDCount= (mysqli_fetch_assoc($PhySciDresult));

		$GSGDCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Dept='GSG';";
		$GSGDresult = mysqli_query($conn, $GSGDCountSql);
		$GSGDCount= (mysqli_fetch_assoc($GSGDresult));



// -------------------------------------------------Semester--------------------------------


		$SpringCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '1';";
		$Springresult = mysqli_query($conn, $SpringCountSql);
		$SpringCount= (mysqli_fetch_assoc($Springresult));


		$SummerCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '2';";
		$Summerresult = mysqli_query($conn, $SummerCountSql);
		$SummerCount= (mysqli_fetch_assoc($Summerresult));


		$AutumnCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '3';";
		$Autumnresult = mysqli_query($conn, $AutumnCountSql);
		$AutumnCount= (mysqli_fetch_assoc($Autumnresult));


//----------------------------------------------SemesterandSlot--------------------------------------------




		$Spring01CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '1' AND Slot= '1';";
		$Spring01result = mysqli_query($conn, $Spring01CountSql);
		$Spring01Count= (mysqli_fetch_assoc($Spring01result));

		$Spring02CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '1' AND Slot= '2';";
		$Spring02result = mysqli_query($conn, $Spring02CountSql);
		$Spring02Count= (mysqli_fetch_assoc($Spring02result));

		$Summer01CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '2' AND Slot ='1' ;";
		$Summer01result = mysqli_query($conn, $Summer01CountSql);
		$Summer01Count= (mysqli_fetch_assoc($Summer01result));

		$Summer02CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '2' AND Slot ='2;";
		$Summer02result = mysqli_query($conn, $Summer02CountSql);
		$Summer02Count= (mysqli_fetch_assoc($Summer02result));

		$Autumn01CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '3' AND Slot ='1';";
		$Autumn01result = mysqli_query($conn, $Autumn01CountSql);
		$Autumn01Count= (mysqli_fetch_assoc($Autumn01result));

		$AutumnCount02Sql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE `SemesterNumber` = '3' AND Slot='2';";
		$Autumn02result = mysqli_query($conn, $AutumnCountSql);
		$Autumn02Count= (mysqli_fetch_assoc($Autumnresult));

//-----------------------------------------------Major---------------------------------------------------------------


		$PharmCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'B.Pharm - Pharmacy';";
		$Pharmresult = mysqli_query($conn, $PharmCountSql);
		$PharmCount= (mysqli_fetch_assoc($Pharmresult));

		$ELTCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BA - English Language Teaching';";
		$ELTresult = mysqli_query($conn, $ELTCountSql);
		$ELTCount= (mysqli_fetch_assoc($ELTresult));

		$LitCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BA - English Literature';";
		$Litresult = mysqli_query($conn, $LitCountSql);
		$LitCount= (mysqli_fetch_assoc($Litresult));

		$AccCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - Accounting';";
		$Accresult = mysqli_query($conn, $AccCountSql);
		$AccCount= (mysqli_fetch_assoc($Accresult));

		$FinCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - Finance';";
		$Finresult = mysqli_query($conn, $FinCountSql);
		$FinCount= (mysqli_fetch_assoc($Finresult));

		$GMCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - General Management';";
		$GMresult = mysqli_query($conn, $GMCountSql);
		$GMCount= (mysqli_fetch_assoc($GMresult));

		$HRMCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - Human Resources Management';";
		$HRMresult = mysqli_query($conn, $HRMCountSql);
		$HRMCount= (mysqli_fetch_assoc($HRMresult));

		$IBCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - International Business';";
		$IBresult = mysqli_query($conn, $IBCountSql);
		$IBCount= (mysqli_fetch_assoc($IBresult));

		$IMCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - Investment Management';";
		$IMresult = mysqli_query($conn, $IMCountSql);
		$IMCount= (mysqli_fetch_assoc($IMresult));

		$MISCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - Management Information Systems';";
		$MISresult = mysqli_query($conn, $MISCountSql);
		$MISCount= (mysqli_fetch_assoc($MISresult));

		$MKTCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BBA - Marketing';";
		$MKTresult = mysqli_query($conn, $MKTCountSql);
		$MKTCount= (mysqli_fetch_assoc($MKTresult));

		$BioChemCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Biochemistry';";
		$BioChemresult = mysqli_query($conn, $BioChemSql);
		$BioChemCount= (mysqli_fetch_assoc($BioChemresult));

		$CENCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Computer Engineering';";
		$CENresult = mysqli_query($conn, $CENCountSql);
		$CENCount= (mysqli_fetch_assoc($CENresult));

		$CSCCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Computer Science';";
		$CSCresult = mysqli_query($conn, $CSECountSql);
		$CSCCount= (mysqli_fetch_assoc($CSEresult));

		$CSECountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Computer Science and Engineering';";
		$CSEresult = mysqli_query($conn, $CSECountSql);
		$CSECount= (mysqli_fetch_assoc($CSEresult));

		$ECOCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Economics';";
		$ECOresult = mysqli_query($conn, $ECOCountSql);
		$ECOCount= (mysqli_fetch_assoc($ECOresult));

		$EEECountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Electrical and Electronic Engineering';";
		$EEEresult = mysqli_query($conn, $EEECountSql);
		$EEECount= (mysqli_fetch_assoc($EEEresult));

		$ETECountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Electronic and Telecommunication Engineering';";
		$ETEresult = mysqli_query($conn, $ETECountSql);
		$ETECount= (mysqli_fetch_assoc($ETEresult));

		$ENVMCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Enviornamental Management';";
		$ENVMresult = mysqli_query($conn, $ENVMCountSql);
		$ENVMCount= (mysqli_fetch_assoc($ENVMresult));

		$ENVCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Enviornamental Science';";
		$ENVresult = mysqli_query($conn, $ENVCountSql);
		$ENVCount= (mysqli_fetch_assoc($ENVresult));

		$MatCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Mathematics (Hons) ';";
		$Matresult = mysqli_query($conn, $MatCountSql);
		$MatCount= (mysqli_fetch_assoc($Matresult));

		$MbioCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Microbiology';";
		$Mbioresult = mysqli_query($conn, $MbioCountSql);
		$MbioCount= (mysqli_fetch_assoc($Mbioresult));

		$PhyCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Physics (Hons)';";
		$Phyresult = mysqli_query($conn, $PhyCountSql);
		$PhyCount= (mysqli_fetch_assoc($Phyresult));

		$PENVCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Population Environment';";
		$PENVresult = mysqli_query($conn, $PENVCountSql);
		$PENVCount= (mysqli_fetch_assoc($PENVresult));

		$ANTCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSS - Anthropology';";
		$ANTresult = mysqli_query($conn, $ANTCountSql);
		$ANTCount= (mysqli_fetch_assoc($ANTresult));

		$GSCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSS - Global Studies and Governance';";
		$GSGresult = mysqli_query($conn, $GSGCountSql);
		$GSGCount= (mysqli_fetch_assoc($GSGresult));

		$MeComCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSS - Media and Communication';";
		$MeComresult = mysqli_query($conn, $MeComCountSql);
		$MeComCount= (mysqli_fetch_assoc($MeComresult));

		$SOCCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSS - Sociology';";
		$SOCresult = mysqli_query($conn, $SOCCountSql);
		$SOCCount= (mysqli_fetch_assoc($SOCresult));

		$LLBCountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'LLB - Laws (Hons)';";
		$LLBresult = mysqli_query($conn, $LLBCountSql);
		$LLBCount= (mysqli_fetch_assoc($LLBresult));

		$CSECountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Major = 'BSc - Computer Engineering';";
		$CSEresult = mysqli_query($conn, $CSECountSql);
		$CSECount= (mysqli_fetch_assoc($CSEresult));

//-----------------------------------------------Year----------------------------------------------------------------

		$2013CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Year = '2013';";
		$2013result = mysqli_query($conn, $2013CountSql);
		$2013Count= (mysqli_fetch_assoc($2013result));

		$2014CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Year = '2014';";
		$2014result = mysqli_query($conn, $2014CountSql);
		$2014Count= (mysqli_fetch_assoc($2014result));

		$2015CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Year = '2015';";
		$2015result = mysqli_query($conn, $2015CountSql);
		$2015Count= (mysqli_fetch_assoc($2015result));

		$2016CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Year = '2016';";
		$2016result = mysqli_query($conn, $2016CountSql);
		$2016Count= (mysqli_fetch_assoc($2016result));

		$2017CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Year = '2017';";
		$2017result = mysqli_query($conn, $2017CountSql);
		$2017Count= (mysqli_fetch_assoc($2017result));

		$2018CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Year = '2018';";
		$2018result = mysqli_query($conn, $2018CountSql);
		$2018Count= (mysqli_fetch_assoc($2018result));

		$2019CountSql = "SELECT SUM(StundentCount) FROM `studenttable` WHERE Year = '2019';";
		$2019result = mysqli_query($conn, $2019CountSql);
		$2019Count= (mysqli_fetch_assoc($2019result));
 

 

?>




