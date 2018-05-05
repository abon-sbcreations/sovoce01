/**
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 5 May, 2018
 */
/**
 * Author:  abon duttaroy<abondr@gmail.com>
 * Created: 5 May, 2018
 */
CREATE TABLE social_user(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    oAuthProvider ENUM('','FB','GGL') NOT NULL,
    oAuthUid varchar(100) NOT NULL,
    firstName varchar(100),
    lastName varchar(100),
    middle_name varchar(100),
    shortName varchar(100),
    email varchar(150),
    gender enum('M','F'),    
    locale varchar(12),
    cover varchar(255),
    picture varchar(255),
    link varchar(255),
    user_slug varchar(200),
    created datetime NOT NULL,
    modified datetime NOT NULL    
);

CREATE TABLE friend_list(
    social_user_id int NOT NULL,
    friend_user_id int NOT NULL
);

create table customer(
    social_user_id int NOT NULL PRIMARY KEY    
);
create table vendor(
    social_user_id int NOT NULL PRIMARY KEY,
    service_id int not null
);
create table service(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(200) not null,
    slug varchar(200) not null
);
create table customer_reference(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    customer_id int not null, // social_user_id 
    vendor_id int not null, // social_user_id 
    
);

create table vendor_image_list(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    vendor_id int,
    image_partial_name varchar(250),
    image_position int
);

create table post(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(250),
    content text,
    post_date datetime,
    
);





