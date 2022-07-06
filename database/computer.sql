--table user
CREATE TABLE `user` (
  `user_name` varchar(50) COLLATE utf8_unicode_ci primary key  not NULL,
  `user_pass` varchar(50) DEFAULT NULL,
    address varchar(200) COLLATE utf8_unicode_ci DEFAULT null,
    telephone int(11) DEFAULT null
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--table cart
CREATE table cart(
    cart_id int (11) PRIMARY KEY NOT null AUTO_INCREMENT,
    user_name varchar(50) COLLATE utf8_unicode_ci  DEFAULT null,
    CONSTRAINT `cart_fk1` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`)
    )ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;
--table sản phẩm
CREATE TABLE products (
  `product_id` int(11) PRIMARY KEY NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `size`  varchar(50) DEFAULT NULL,
  `weigh` double DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `number_of_product` int(11) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `p_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- table bình luận
CREATE TABLE comment (
    `cmt_id` int(11) PRIMARY key NOT null AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `star` int(11) DEFAULT NULL,
  `your_comment` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_comment` datetime DEFAULT NULL,
     FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`),
     FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- table hóa đơn từng sản phẩm
CREATE TABLE `cart_products` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
    FOREIGN key (cart_id) REFERENCES cart(cart_id),
    FOREIGN key (product_id) REFERENCES products(product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--table hóa đơn
create table bill (
	bill_id int not null auto_increment,
    product_id int not null,
    user_name varchar(50) COLLATE utf8_unicode_ci not null,
    date_bill datetime,
    total_money int,
    primary key (bill_id),
    foreign key (product_id) references products(product_id),
    foreign key (user_name) references user(user_name)
);
--table chuột
CREATE TABLE `mouse_products` (
  `mouse_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `standard` tinyint(1) DEFAULT NULL,
  `protocol` varchar(50) DEFAULT NULL,
  `is_led` tinyint(1) DEFAULT NULL,
    FOREIGN key (product_id) REFERENCES products(product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;


CREATE TABLE `computer_products` (
  `computer_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `s_cpu` varchar(50) DEFAULT NULL,
  `s_ram` varchar(50) DEFAULT NULL,
  `s_storage` int(11) DEFAULT NULL,
  `screen` varchar(50) DEFAULT NULL,
  `s_card` varchar(50) DEFAULT NULL,
  `main_connection` varchar(50) DEFAULT NULL,
  `os` varchar(50) DEFAULT NULL,
   FOREIGN key (`product_id`) REFERENCES products(product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `pc` (
  `pc_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `i_case` text DEFAULT NULL,
    FOREIGN key (product_id) REFERENCES products(product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;


CREATE TABLE `laptop` (
  `laptop_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pin` int(11) DEFAULT NULL,
    FOREIGN key (product_id) REFERENCES products(product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


create table supplier(
    supplier_id int(11) PRIMARY key not null  AUTO_INCREMENT,
    supplier varchar(50) COLLATE utf8_unicode_ci not null
    
    )
create table cpu(
  cpu_id varchar(20) collate utf8_unicode_ci primary key not null,
  cpu varchar(50) collate utf8_unicode_ci not null
)
create table search(
    search_id int(11) PRIMARY key not null AUTO_INCREMENT,
    content text COLLATE utf8_unicode_ci not null,
    times int(11) DEFAULT null
    )
----------------------------------------------------------------
--table admin
CREATE table admin(
    admin_user varchar(50) COLLATE utf8_unicode_ci PRIMARY key not null,
    admin_password varchar(50) DEFAULT null
    )ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci  ;


    --kết nối bảng



    --insert
    INSERT into users(user_name,user_pass,address,telephone) VALUES('maitien','a12345','thanh hóa','12345');
    INSERT into products(product_id,model,image,price,size,weigh,color,number_of_product,supplier,p_description) VALUES(1,'Acer Nitro Gaming AN515-58-52SP/i5-12500H','public/img/Img_product/Acernitrogamingan515-58-52sp.webp',24990000,'30cm*20cm*1.8cm',1.24,'yellow',10,'Acer','máy tính');
    INSERT INTO computer_products(computer_product_id,product_id,s_cpu,s_ram,s_memory,screen,s_card,os) VALUES (101, 1, 'core i5', '8 GB', 512, '15.6 in', 'GTX 1060 4GB' ,'Win 10');
    INSERT INTO laptop(laptop_id, product_id, pin) VALUES (1001,1,40);
    insert into supplier(supplier) VALUES ('Acer'),
                                      ('Asus'),
                                      ('Apple'),
                                      ('Avita'),
                                      
                                      ('Chuwi'),
                                      ('Dell'),
                                      ('Gigabyte'),
                                      ('Lenovo'),
                                      ('Microsoft'),
                                      ('HP'),
                                      ('MSI');
    insert into cpu(cpu_id, cpu) VALUES('cpu1','Intel celeron'),
                                   ('cpu2','Intel pentium'),
                                   ('cpu3', 'Intel Core i3'),
                                   ('cpu4', 'Intel Core i5 '),
                                   ('cpu5', 'Intel Core i7 '),
                                   ('cpu6', 'Intel Core i9 '),
                                   ('cpu7', 'AMD Ryzen 3 '),
                                   ('cpu8', 'AMD Ryzen 5 '),
                                   ('cpu9', 'AMD Ryzen 7 '),
                                   ('cpu10', 'AMD Ryzen 9 ');