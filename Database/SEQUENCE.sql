DROP SEQUENCE TRADER_ID_SEQ;
CREATE SEQUENCE TRADER_ID_SEQ
START WITH 1
MAXVALUE 99999
MINVALUE 1
NOCYCLE
CACHE 20;

DROP SEQUENCE PRODUCT_ID_SEQ;
CREATE SEQUENCE PRODUCT_ID_SEQ
START WITH 1
MAXVALUE 99999
MINVALUE 1
NOCYCLE
CACHE 20;

DROP SEQUENCE CUSTOMER_ID_SEQ;
CREATE SEQUENCE CUSTOMER_ID_SEQ
START WITH 1
MAXVALUE 99999
MINVALUE 1
NOCYCLE
CACHE 20;

DROP SEQUENCE REVIEW_SEQUENCE;
CREATE SEQUENCE REVIEW_SEQUENCE 
MINVALUE 1 
MAXVALUE 99999 
INCREMENT BY 1 START WITH 1 CACHE 2;

