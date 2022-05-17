

CREATE TABLE `table` (
  `Id` int(10) NOT NULL,
  `SKU` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `type` set('Size:','Dimension:','Weight:','') NOT NULL,
  `attributes` varchar(20) DEFAULT NULL
)

ALTER TABLE `table`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `unique_index` (`SKU`,`name`,`price`,`type`,`attributes`);


