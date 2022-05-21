DROP TABLE CUSTOMER CASCADE CONSTRAINTS;
DROP TABLE TRADER CASCADE CONSTRAINTS;
DROP TABLE PRODUCT CASCADE CONSTRAINTS;
DROP TABLE SHOP CASCADE CONSTRAINTS;
DROP TABLE CART CASCADE CONSTRAINTS;



Create table customer (
    customer_id number(5) primary key,
    first_name VARCHAR2(50) not null,
    last_name VARCHAR2(50) not null,
    email VARCHAR2(50) not null,
    age number(3) not null,
    gender char(1) not null,
    password VARCHAR2(50) not null
);

CREATE TABLE TRADER(
    trader_id number(5) primary key,
    first_name VARCHAR2(50) not null,
    last_name VARCHAR2(50) not null,
    email VARCHAR2(50) not null,
    shop_name VARCHAR2(50) not null,
    shop_type VARCHAR2(50) not null,
    password VARCHAR2(50) not null
);

CREATE TABLE SHOP(
shop_id number(5) PRIMARY KEY,
tradertype VARCHAR2(15) NOT NULL UNIQUE
--trader_id NUMBER(10) REFERENCES TRADER(TRADER_ID)
);

CREATE TABLE PRODUCT(
    product_id number(5) primary key,
    product_title VARCHAR2(50) not null,
    category VARCHAR2(50) not null,
    description VARCHAR2(500),
    price number(8,3) not null,
    stock_quantity number(3) not null,
    image VARCHAR2(255) not null,
    shop_id number(5) REFERENCES SHOP(shop_id)
    
);

CREATE TABLE CART(
customer_id number(5) REFERENCES customer (customer_id),
product_id number (5) REFERENCES product (product_id),
quantity number (3) not null,
total Number(10) not null,
primary key(customer_id, product_id)    
);