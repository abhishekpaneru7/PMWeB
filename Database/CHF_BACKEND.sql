DROP TABLE CUSTOMER CASCADE CONSTRAINTS;
DROP TABLE TRADER CASCADE CONSTRAINTS;
DROP TABLE PRODUCT CASCADE CONSTRAINTS;

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

CREATE TABLE PRODUCT(
    product_id number(5) primary key,
    product_title VARCHAR2(50) not null,
    category VARCHAR2(50) not null,
    description VARCHAR2(500),
    price number(8,3) not null,
    quantity number(3) not null,
    image VARCHAR2(255) not null
);