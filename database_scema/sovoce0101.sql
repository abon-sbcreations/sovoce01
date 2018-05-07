/**
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 5 May, 2018
 */
CREATE TABLE social_user(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    oAuthProvider ENUM('','FB','GGL') NOT NULL,
    oAuthUid varchar(100) NOT NULL,
    name text,
    mobile_no varchar(13),
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
    slug varchar(255),
    content text,
    post_date datetime,
    sort_link varchar(250),
);

create table cutomer_review(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    content text,
    target enum('V','P'),
    vendor_id int,
    post_id int,
    customer_id int not null,
    rating int
);

create table advertise(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    link varchar(250) not null,
    view_count int,
    click_count int
);

create table popular_search(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    search_term varchar(250)
)