
drop database if exists aec19_db1_import;
create database aec19_db1_import;
use aec19_db1_import;




DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `product_detail` text,
  `product_price` decimal(15,2) DEFAULT NULL,
  `product_qt` int(11) DEFAULT '0',
  PRIMARY KEY (`product_id`)
);



INSERT INTO `product` (`product_id`, `product_name`, `product_detail`, `product_price`, `product_qt`) VALUES
(1, 'produit1', 'detail1', '2000.00', 0),
(2, 'produit2', 'detail2', '5000.00', 0);




DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(25) DEFAULT NULL,
  `user_password` varchar(25) DEFAULT NULL,
  `user_priv` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
);



INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_priv`) VALUES
(1, 'admin1', 'admin1', 1),
(2, 'client1', 'client1', 2);