<?php
   include_once 'header1.php';
?>
	<section class="main-container">
	  <div class="main-wrapper">
	    <h2>Home</h2>
	  </div>
	</section>
<?php
   include_once 'footer.php';
?>
	CREATE TABLE StaffInfo(
    staffId varchar(20) NOT NULL PRIMARY KEY,
    deptId int(100) NOT NULL,
    mobileNo bigint(20) NOT NULL,
    email varchar(20) NOT NULL,
    address varchar(20) NOT NULL,
    license bigint(20) NOT NULL
);
CREATE TABLE TripCompletion(
   formNo int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   odometerStart bigint(20) NOT NULL,
   odometerEnd bigint(20) NOT NULL,
   fuelLiter bigint(10) NOT NULL,
   uhCreditCardNo bigint(20) NOT NULL,
   complain char(255) NOT NULL
);
CREATE TABLE Staff( user_first varchar(256) NOT NULL,
 user_last varchar(256) NOT NULL,
 staffId varchar(256) NOT NULL PRIMARY KEY,
 deptId int(100) NOT NULL,
 mobileNo bigint(20) NOT NULL,
 designation char(200) NOT NULL,
 email varchar(256) NOT NULL,
 user_uid varchar(256) NOT NULL,
 address varchar(20) NOT NULL, 
 user_pwd varchar(256) NOT NULL,
 license bigint(20),
 training varchar(256),
 authority varchar(256) );
 
 
 CREATE TABLE Reservation(
 formno int(100) NOT NULL,
 staffId varchar(200) NOT NULL,
 deptId int(100) NOT NULL, 
 vehicleNo int(200) NOT NULL,
 booking DATE,
 booktime TIME, 
 destination varchar(200) NOT NULL, 
 purpose varchar(200) NOT NULL,
 dristaffid varchar(200) NOT NULL );
 
 
 CREATE TABLE maintainlog(
    formno int(10) NOT NULL,
    Vehicleid varchar(256) NOT NULL,
    description varchar(256) NOT NULL,
    initialdate DATE,
    completiondate DATE,
    inspectorid varchar(256) NOT NULL
);


CREATE TABLE maintaindetail( serialno varchar(256) NOT NULL,
 formno int(100) NOT NULL, partno int(100) NOT NULL , 
 mechanicid varchar(256) NOT NULL )
 
 CREATE TABLE department( 
    deptid int(100) NOT NULL PRIMARY KEY,
    deptname char(200) NOT NULL,
    buildno int(100) NOT NULL,
    buildname char(200) NOT NULL,
    campus char(200) NOT NULL
);

CREATE TABLE partdetails(
     partno int(100) NOT NULL,
     partname varchar(256) NOT NULL,
     quantity varchar(256) NOT NULL
);
