<?php


$bank["bankaccount"] = array("varchar",15,"NOT NULL");
 /* `bank_name` varchar(30) NOT NULL, -- ชื่อธนาคาร
  `brandbank` varchar(30) NOT NULL, -- สาขา
  `deposit` float DEFAULT NULL, -- ฝาก
  `withdraw` float DEFAULT NULL, -- ถอน
  `trans_date` datetime NOT NULL, -- วันทำรายการ 
  `purid` varchar(15) DEFAULT NULL, -- เลขที่ใบสั่งซื้อ
  `invid` varchar(15) DEFAULT NULL, -- เลขที่ใบรับสินค้า
  `receipt` varchar(15) DEFAULT NULL, -- เลขที่ใบเสร็จ
  `orderid` varchar(15) DEFAULT NULL, -- เลขที่ใบจองสินค้า
  PRIMARY KEY (`bankaccount`,`trans_date`)
*/
/?>