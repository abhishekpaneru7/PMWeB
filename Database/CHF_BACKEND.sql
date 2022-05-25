DROP TABLE CUSTOMER CASCADE CONSTRAINTS;
DROP TABLE TRADER CASCADE CONSTRAINTS;
DROP TABLE PRODUCT CASCADE CONSTRAINTS;
DROP TABLE SHOP CASCADE CONSTRAINTS;
DROP TABLE CART CASCADE CONSTRAINTS;
DROP TABLE COLLECTIONSLOT CASCADE CONSTRAINTS;
DROP TABLE ORDERDETAIL CASCADE CONSTRAINTS;
DROP TABLE ORDERPRODUCT CASCADE CONSTRAINTS;
DROP TABLE REVIEW CASCADE CONSTRAINTS; 
DROP TABLE PAYMENT CASCADE CONSTRAINTS;

Create table customer (
    customer_id number(5) primary key,
    first_name VARCHAR2(50) not null,
    last_name VARCHAR2(50) not null,
    email VARCHAR2(50) not null,
    age number(3) not null,
    gender char(1) not null,
    password VARCHAR2(50) not null
);

CREATE TABLE SHOP(
shop_id number(5) PRIMARY KEY,
tradertype VARCHAR2(15) NOT NULL UNIQUE

);

CREATE TABLE TRADER(
    trader_id number(5) primary key,
    first_name VARCHAR2(50) not null,
    last_name VARCHAR2(50) not null,
    email VARCHAR2(50) not null,
    shop_name VARCHAR2(50) not null,
    password VARCHAR2(50) not null,
    status VARCHAR2(10) not null,
    shop_id NUMBER(10) REFERENCES SHOP(shop_id)
);



CREATE TABLE PRODUCT(
    product_id number(5) primary key,
    product_title VARCHAR2(50) not null,
    category VARCHAR2(50) not null,
    description VARCHAR2(500),
    price number(8,3) not null,
    stock_quantity number(3) not null,
    image VARCHAR2(255) not null,
    rating number (2,1),
    shop_id number(5) REFERENCES SHOP(shop_id)
    
);

CREATE TABLE CART(
   customer_id number(5) REFERENCES customer (customer_id),
   product_id number (5) REFERENCES product (product_id),
   quantity number (3) not null,
   total number(5,2) not null,
   primary key(customer_id, product_id)    
);

CREATE TABLE COLLECTIONSLOT(
   slot_id number(10) primary key,
   day varchar2(10),
   collectiontime varchar(20),
   week_count varchar2(20),
   number_of_orders number(10)
);

CREATE TABLE ORDERDETAIL(
    order_id number (5) primary key,
    customer_id number(5) REFERENCES customer (customer_id),
    product_id number (5) REFERENCES product (product_id),
    status VARCHAR2(10) not null,
    slot_id number(10) REFERENCES collectionslot (slot_id)
);

CREATE TABLE ORDERPRODUCT(
    order_id number (5) references orderdetail (order_id),
    product_id number (5) references product (product_id),
    product_quantity number (*),
    primary key(order_id, product_id)    
);

create table review( 
review_id number(30) primary key, 
comments varchar(100), 
rating number(*,1) not null, 
review_date date , 
customer_id number(30) not null references customer (customer_id), 
product_id number(30) not null references product (product_id) 
);



CREATE TABLE PAYMENT(
    payment_id number(10) primary key,    
    customer_id number(10) references customer(Customer_id),
    product_id number (5) REFERENCES product (product_id),
    order_id number(10) references orderdetail (order_id),
    paiddate timestamp(1)
);

