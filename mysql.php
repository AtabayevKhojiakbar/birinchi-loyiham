<?php

//    SELECT NAME, id FROM menus;

//SELECT * FROM menus WHERE id>1000020;

//SELECT NAME FROM menus ORDER BY NAME;

//SELECT NAME FROM menus;

//SELECT * FROM menus WHERE id=1001335;

//SELECT NAME, id FROM menus WHERE id=1001335;

//SELECT * FROM menus WHERE id>1000150 AND CATEGORY_ID>=1000124;

//SELECT * FROM classificators ORDER BY NAME;

//SELECT COUNT(CLASSIFICATOR_ID) FROM dishgroups;

//INSERT INTO menus(id, NAME, CATEGORY_ID) VALUES(1000222, 'Лагмон', 1000145);

//SELECT COUNT(id) FROM paybindings;

//SELECT * FROM menus WHERE created_at IS NULL;

//SELECT COUNT(*) FROM menus WHERE created_at IS NULL;

//SELECT * FROM menus WHERE created_at IS NOT NULL;

//UPDATE menus SET NAME='Palov' where NAME='Лагмон';

//SELECT * FROM menus WHERE id>1000185 AND id<1000555;

//SELECT * FROM menus WHERE CATEGORY_ID=1000147 LIMIT 3;

//SELECT * FROM menus WHERE id>1000540 LIMIT 10;

//SELECT * FROM sessiondishes WHERE CREATIONDATETIME>'2022-06-10' AND CREATIONDATETIME<'2022-06-11';

//SELECT AVG(CLOSEDPAYSUM) FROM sessiondishes WHERE NOT QUANTITY=0;

//SELECT AVG(CLOSEDPAYSUM) FROM sessiondishes WHERE NOT CLOSEDPAYSUM=0;

//SELECT MIN(CLOSEDPAYSUM) FROM sessiondishes WHERE CREATIONDATETIME>'2022-07-5' AND CREATIONDATETIME<'2022-07-6' AND NOT QUANTITY=0;

//SELECT * FROM waiters WHERE NAME LIKE"L%";

//SELECT * FROM waiters WHERE NAME NOT LIKE"L%";

//SELECT * FROM waiters WHERE NAME LIKE"_a%";

//SELECT * FROM waiters WHERE NAME LIKE"%a_";

//SELECT c.NAME, s.CLOSEDPAYSUM FROM sessiondishes AS s, classificators AS c WHERE s.classificator_id=c.id AND CREATIONDATETIME>'2022-06-15' AND CREATIONDATETIME<'2022-06-16'

//SELECT SUM(s.CLOSEDPAYSUM) FROM menus AS m, sessiondishes AS s WHERE s.menu_id=1001003 AND m.id IN(1001003,10064562,1000022);

//SELECT * FROM sessiondishes WHERE UNI BETWEEN 10 AND 50;

//SELECT * FROM sessiondishes WHERE UNI BETWEEN 10 AND 50 AND menu_id IN(1000430,1000468,1001003);

//SELECT COUNT(CATEGORY_ID) FROM menus GROUP BY CATEGORY_ID;

//SELECT * FROM menus GROUP BY CATEGORY_ID HAVING COUNT(CATEGORY_ID)>5;

//SELECT COUNT(SESSIONDISH_ID), SESSIONDISH_ID FROM paybindings GROUP BY SESSIONDISH_ID;

//SELECT NAME FROM waiters WHERE id > ANY ( SELECT waiter_id FROM sessiondishes WHERE QUANTITY = 1);

